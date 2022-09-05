<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddAliClusterIdsToPrometheusGlobalViewRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddAliClusterIdsToPrometheusGlobalViewResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddGrafanaRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddGrafanaResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusGlobalViewByAliClusterIdsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusGlobalViewByAliClusterIdsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusGlobalViewRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusGlobalViewResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusInstanceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusInstanceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddRecordingRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddRecordingRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AppendInstancesToPrometheusGlobalViewRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AppendInstancesToPrometheusGlobalViewResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ApplyScenarioRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ApplyScenarioResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ApplyScenarioShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckServiceStatusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckServiceStatusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ConfigAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ConfigAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateEventBridgeIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateEventBridgeIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateIMRobotRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateIMRobotResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateSilencePolicyRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateSilencePolicyResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateWebhookContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateWebhookContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreatePrometheusAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreatePrometheusAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateWebhookRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateWebhookResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DelAuthTokenRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DelAuthTokenResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteCmsExporterRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteCmsExporterResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteEventBridgeIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteEventBridgeIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteGrafanaResourceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteGrafanaResourceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteIMRobotRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteIMRobotResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteIntegrationsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteIntegrationsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteNotificationPolicyRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteNotificationPolicyResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeletePrometheusAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeletePrometheusAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeletePrometheusGlobalViewRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeletePrometheusGlobalViewResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteRetcodeAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteRetcodeAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteScenarioRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteScenarioResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteSilencePolicyRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteSilencePolicyResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteSourceMapRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteSourceMapResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteSourceMapShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteSyntheticTaskRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteSyntheticTaskResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteWebhookContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteWebhookContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeIMRobotsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeIMRobotsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribePrometheusAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribePrometheusAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeTraceLicenseKeyRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeTraceLicenseKeyResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeWebhookContactsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeWebhookContactsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAgentDownloadUrlRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAgentDownloadUrlResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAppApiByPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAppApiByPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAuthTokenRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAuthTokenResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetClusterAllUrlRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetClusterAllUrlResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetExploreUrlRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetExploreUrlResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetIntegrationStateRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetIntegrationStateResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetManagedPrometheusStatusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetManagedPrometheusStatusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusApiTokenRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusApiTokenResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusGlobalViewRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusGlobalViewResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRecordingRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRecordingRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeShareUrlRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeShareUrlResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSourceMapInfoRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSourceMapInfoResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskListRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskListResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskMonitorsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskMonitorsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportAppAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportAppAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\InstallCmsExporterRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\InstallCmsExporterResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\InstallManagedPrometheusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\InstallManagedPrometheusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListActivatedAlertsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListActivatedAlertsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertEventsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertEventsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListClusterFromGrafanaRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListClusterFromGrafanaResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListCmsInstancesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListCmsInstancesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsByNameRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsByNameResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEscalationPoliciesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEscalationPoliciesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEventBridgeIntegrationsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEventBridgeIntegrationsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListInsightsEventsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListInsightsEventsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListOnCallSchedulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListOnCallSchedulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertTemplatesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertTemplatesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusGlobalViewRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusGlobalViewResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusInstancesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusInstancesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListRetcodeAppsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListRetcodeAppsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListScenarioRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListScenarioResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSilencePoliciesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSilencePoliciesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListTraceAppsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListTraceAppsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ManageGetRecordingRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ManageGetRecordingRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ManageRecordingRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ManageRecordingRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\OpenArmsDefaultSLRRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\OpenArmsDefaultSLRResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\OpenArmsServiceSecondVersionRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\OpenArmsServiceSecondVersionResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\OpenVClusterRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\OpenVClusterResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\OpenXtraceDefaultSLRRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\OpenXtraceDefaultSLRResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryMetricByPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryMetricByPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryPromInstallStatusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryPromInstallStatusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryReleaseMetricRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryReleaseMetricResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\RemoveAliClusterIdsFromPrometheusGlobalViewRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\RemoveAliClusterIdsFromPrometheusGlobalViewResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\RemoveSourcesFromPrometheusGlobalViewRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\RemoveSourcesFromPrometheusGlobalViewResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SaveTraceAppConfigRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SaveTraceAppConfigResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertHistoriesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertHistoriesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchRetcodeAppByPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchRetcodeAppByPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByNameRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByNameResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SendTTSVerifyLinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SendTTSVerifyLinkResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SetRetcodeShareStatusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SetRetcodeShareStatusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StartAlertRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StartAlertResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StopAlertRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StopAlertResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SwitchSyntheticTaskStatusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SwitchSyntheticTaskStatusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SyncRecordingRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SyncRecordingRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\TurnOnSecondSwitchRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\TurnOnSecondSwitchResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UninstallManagedPrometheusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UninstallManagedPrometheusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UninstallPromClusterRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UninstallPromClusterResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateWebhookRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateWebhookResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UploadRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UploadResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class ARMS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'arms.aliyuncs.com',
            'cn-beijing-finance-1'        => 'arms.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'arms.aliyuncs.com',
            'cn-beijing-gov-1'            => 'arms.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'arms.aliyuncs.com',
            'cn-edge-1'                   => 'arms.aliyuncs.com',
            'cn-fujian'                   => 'arms.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'arms.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'arms.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'arms.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'arms.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'arms.aliyuncs.com',
            'cn-qingdao-nebula'           => 'arms.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'arms.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'arms.aliyuncs.com',
            'cn-shanghai-inner'           => 'arms.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'arms.aliyuncs.com',
            'cn-shenzhen-inner'           => 'arms.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'arms.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'arms.aliyuncs.com',
            'cn-wuhan'                    => 'arms.aliyuncs.com',
            'cn-yushanfang'               => 'arms.aliyuncs.com',
            'cn-zhangbei'                 => 'arms.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'arms.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'arms.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'arms.aliyuncs.com',
            'eu-west-1-oxs'               => 'arms.aliyuncs.com',
            'me-east-1'                   => 'arms.aliyuncs.com',
            'rus-west-1-pop'              => 'arms.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('arms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddAliClusterIdsToPrometheusGlobalViewRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return AddAliClusterIdsToPrometheusGlobalViewResponse
     */
    public function addAliClusterIdsToPrometheusGlobalViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterIds)) {
            $query['ClusterIds'] = $request->clusterIds;
        }
        if (!Utils::isUnset($request->globalViewClusterId)) {
            $query['GlobalViewClusterId'] = $request->globalViewClusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAliClusterIdsToPrometheusGlobalView',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAliClusterIdsToPrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddAliClusterIdsToPrometheusGlobalViewRequest $request
     *
     * @return AddAliClusterIdsToPrometheusGlobalViewResponse
     */
    public function addAliClusterIdsToPrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAliClusterIdsToPrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @param AddGrafanaRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddGrafanaResponse
     */
    public function addGrafanaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->integration)) {
            $query['Integration'] = $request->integration;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGrafana',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGrafanaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddGrafanaRequest $request
     *
     * @return AddGrafanaResponse
     */
    public function addGrafana($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGrafanaWithOptions($request, $runtime);
    }

    /**
     * @param AddIntegrationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddIntegrationResponse
     */
    public function addIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->integration)) {
            $query['Integration'] = $request->integration;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddIntegration',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddIntegrationRequest $request
     *
     * @return AddIntegrationResponse
     */
    public function addIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIntegrationWithOptions($request, $runtime);
    }

    /**
     * @param AddPrometheusGlobalViewRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddPrometheusGlobalViewResponse
     */
    public function addPrometheusGlobalViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusters)) {
            $query['Clusters'] = $request->clusters;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPrometheusGlobalView',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddPrometheusGlobalViewRequest $request
     *
     * @return AddPrometheusGlobalViewResponse
     */
    public function addPrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @param AddPrometheusGlobalViewByAliClusterIdsRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return AddPrometheusGlobalViewByAliClusterIdsResponse
     */
    public function addPrometheusGlobalViewByAliClusterIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterIds)) {
            $query['ClusterIds'] = $request->clusterIds;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPrometheusGlobalViewByAliClusterIds',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPrometheusGlobalViewByAliClusterIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddPrometheusGlobalViewByAliClusterIdsRequest $request
     *
     * @return AddPrometheusGlobalViewByAliClusterIdsResponse
     */
    public function addPrometheusGlobalViewByAliClusterIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPrometheusGlobalViewByAliClusterIdsWithOptions($request, $runtime);
    }

    /**
     * @param AddPrometheusInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddPrometheusInstanceResponse
     */
    public function addPrometheusInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPrometheusInstance',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddPrometheusInstanceRequest $request
     *
     * @return AddPrometheusInstanceResponse
     */
    public function addPrometheusInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPrometheusInstanceWithOptions($request, $runtime);
    }

    /**
     * @param AddRecordingRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddRecordingRuleResponse
     */
    public function addRecordingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleYaml)) {
            $query['RuleYaml'] = $request->ruleYaml;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddRecordingRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddRecordingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddRecordingRuleRequest $request
     *
     * @return AddRecordingRuleResponse
     */
    public function addRecordingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRecordingRuleWithOptions($request, $runtime);
    }

    /**
     * @param AppendInstancesToPrometheusGlobalViewRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return AppendInstancesToPrometheusGlobalViewResponse
     */
    public function appendInstancesToPrometheusGlobalViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusters)) {
            $query['Clusters'] = $request->clusters;
        }
        if (!Utils::isUnset($request->globalViewClusterId)) {
            $query['GlobalViewClusterId'] = $request->globalViewClusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AppendInstancesToPrometheusGlobalView',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppendInstancesToPrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppendInstancesToPrometheusGlobalViewRequest $request
     *
     * @return AppendInstancesToPrometheusGlobalViewResponse
     */
    public function appendInstancesToPrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appendInstancesToPrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @param ApplyScenarioRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ApplyScenarioResponse
     */
    public function applyScenarioWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyScenarioShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->config)) {
            $request->configShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->configShrink)) {
            $query['Config'] = $request->configShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scenario)) {
            $query['Scenario'] = $request->scenario;
        }
        if (!Utils::isUnset($request->sign)) {
            $query['Sign'] = $request->sign;
        }
        if (!Utils::isUnset($request->snDump)) {
            $query['SnDump'] = $request->snDump;
        }
        if (!Utils::isUnset($request->snForce)) {
            $query['SnForce'] = $request->snForce;
        }
        if (!Utils::isUnset($request->snStat)) {
            $query['SnStat'] = $request->snStat;
        }
        if (!Utils::isUnset($request->snTransfer)) {
            $query['SnTransfer'] = $request->snTransfer;
        }
        if (!Utils::isUnset($request->updateOption)) {
            $query['UpdateOption'] = $request->updateOption;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyScenario',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyScenarioRequest $request
     *
     * @return ApplyScenarioResponse
     */
    public function applyScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyScenarioWithOptions($request, $runtime);
    }

    /**
     * @param CheckServiceStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckServiceStatusResponse
     */
    public function checkServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->svcCode)) {
            $query['SvcCode'] = $request->svcCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckServiceStatus',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckServiceStatusRequest $request
     *
     * @return CheckServiceStatusResponse
     */
    public function checkServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param ConfigAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ConfigAppResponse
     */
    public function configAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigApp',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigAppRequest $request
     *
     * @return ConfigAppResponse
     */
    public function configApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateAlertContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAlertContactResponse
     */
    public function createAlertContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->dingRobotWebhookUrl)) {
            $query['DingRobotWebhookUrl'] = $request->dingRobotWebhookUrl;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->phoneNum)) {
            $query['PhoneNum'] = $request->phoneNum;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->systemNoc)) {
            $query['SystemNoc'] = $request->systemNoc;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAlertContact',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAlertContactRequest $request
     *
     * @return CreateAlertContactResponse
     */
    public function createAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlertContactWithOptions($request, $runtime);
    }

    /**
     * @param CreateAlertContactGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAlertContactGroupResponse
     */
    public function createAlertContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupName)) {
            $query['ContactGroupName'] = $request->contactGroupName;
        }
        if (!Utils::isUnset($request->contactIds)) {
            $query['ContactIds'] = $request->contactIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAlertContactGroup',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAlertContactGroupRequest $request
     *
     * @return CreateAlertContactGroupResponse
     */
    public function createAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateDispatchRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDispatchRuleResponse
     */
    public function createDispatchRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dispatchRule)) {
            $query['DispatchRule'] = $request->dispatchRule;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDispatchRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDispatchRuleRequest $request
     *
     * @return CreateDispatchRuleResponse
     */
    public function createDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateIntegrationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateIntegrationResponse
     */
    public function createIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoRecover)) {
            $body['AutoRecover'] = $request->autoRecover;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->integrationName)) {
            $body['IntegrationName'] = $request->integrationName;
        }
        if (!Utils::isUnset($request->integrationProductType)) {
            $body['IntegrationProductType'] = $request->integrationProductType;
        }
        if (!Utils::isUnset($request->recoverTime)) {
            $body['RecoverTime'] = $request->recoverTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIntegration',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIntegrationRequest $request
     *
     * @return CreateIntegrationResponse
     */
    public function createIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntegrationWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrUpdateAlertRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateOrUpdateAlertRuleResponse
     */
    public function createOrUpdateAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertCheckType)) {
            $body['AlertCheckType'] = $request->alertCheckType;
        }
        if (!Utils::isUnset($request->alertGroup)) {
            $body['AlertGroup'] = $request->alertGroup;
        }
        if (!Utils::isUnset($request->alertId)) {
            $body['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->alertName)) {
            $body['AlertName'] = $request->alertName;
        }
        if (!Utils::isUnset($request->alertRuleContent)) {
            $body['AlertRuleContent'] = $request->alertRuleContent;
        }
        if (!Utils::isUnset($request->alertStatus)) {
            $body['AlertStatus'] = $request->alertStatus;
        }
        if (!Utils::isUnset($request->alertType)) {
            $body['AlertType'] = $request->alertType;
        }
        if (!Utils::isUnset($request->annotations)) {
            $body['Annotations'] = $request->annotations;
        }
        if (!Utils::isUnset($request->autoAddNewApplication)) {
            $body['AutoAddNewApplication'] = $request->autoAddNewApplication;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->filters)) {
            $body['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->level)) {
            $body['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->message)) {
            $body['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->metricsKey)) {
            $body['MetricsKey'] = $request->metricsKey;
        }
        if (!Utils::isUnset($request->metricsType)) {
            $body['MetricsType'] = $request->metricsType;
        }
        if (!Utils::isUnset($request->notifyStrategy)) {
            $body['NotifyStrategy'] = $request->notifyStrategy;
        }
        if (!Utils::isUnset($request->pids)) {
            $body['Pids'] = $request->pids;
        }
        if (!Utils::isUnset($request->promQL)) {
            $body['PromQL'] = $request->promQL;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateAlertRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrUpdateAlertRuleRequest $request
     *
     * @return CreateOrUpdateAlertRuleResponse
     */
    public function createOrUpdateAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrUpdateContactRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateOrUpdateContactResponse
     */
    public function createOrUpdateContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->contactId)) {
            $body['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->contactName)) {
            $body['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->email)) {
            $body['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->reissueSendNotice)) {
            $body['ReissueSendNotice'] = $request->reissueSendNotice;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateContact',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrUpdateContactRequest $request
     *
     * @return CreateOrUpdateContactResponse
     */
    public function createOrUpdateContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateContactWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrUpdateContactGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateOrUpdateContactGroupResponse
     */
    public function createOrUpdateContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->contactGroupId)) {
            $body['ContactGroupId'] = $request->contactGroupId;
        }
        if (!Utils::isUnset($request->contactGroupName)) {
            $body['ContactGroupName'] = $request->contactGroupName;
        }
        if (!Utils::isUnset($request->contactIds)) {
            $body['ContactIds'] = $request->contactIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateContactGroup',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrUpdateContactGroupRequest $request
     *
     * @return CreateOrUpdateContactGroupResponse
     */
    public function createOrUpdateContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrUpdateEventBridgeIntegrationRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateOrUpdateEventBridgeIntegrationResponse
     */
    public function createOrUpdateEventBridgeIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessKey)) {
            $body['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->accessSecret)) {
            $body['AccessSecret'] = $request->accessSecret;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endpoint)) {
            $body['Endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->eventBusName)) {
            $body['EventBusName'] = $request->eventBusName;
        }
        if (!Utils::isUnset($request->eventBusRegionId)) {
            $body['EventBusRegionId'] = $request->eventBusRegionId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateEventBridgeIntegration',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateEventBridgeIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrUpdateEventBridgeIntegrationRequest $request
     *
     * @return CreateOrUpdateEventBridgeIntegrationResponse
     */
    public function createOrUpdateEventBridgeIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateEventBridgeIntegrationWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrUpdateIMRobotRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateOrUpdateIMRobotResponse
     */
    public function createOrUpdateIMRobotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cardTemplate)) {
            $body['CardTemplate'] = $request->cardTemplate;
        }
        if (!Utils::isUnset($request->dailyNoc)) {
            $body['DailyNoc'] = $request->dailyNoc;
        }
        if (!Utils::isUnset($request->dailyNocTime)) {
            $body['DailyNocTime'] = $request->dailyNocTime;
        }
        if (!Utils::isUnset($request->enableOutgoing)) {
            $body['EnableOutgoing'] = $request->enableOutgoing;
        }
        if (!Utils::isUnset($request->robotAddress)) {
            $body['RobotAddress'] = $request->robotAddress;
        }
        if (!Utils::isUnset($request->robotId)) {
            $body['RobotId'] = $request->robotId;
        }
        if (!Utils::isUnset($request->robotName)) {
            $body['RobotName'] = $request->robotName;
        }
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateIMRobot',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateIMRobotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrUpdateIMRobotRequest $request
     *
     * @return CreateOrUpdateIMRobotResponse
     */
    public function createOrUpdateIMRobot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateIMRobotWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrUpdateNotificationPolicyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateOrUpdateNotificationPolicyResponse
     */
    public function createOrUpdateNotificationPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->escalationPolicyId)) {
            $body['EscalationPolicyId'] = $request->escalationPolicyId;
        }
        if (!Utils::isUnset($request->groupRule)) {
            $body['GroupRule'] = $request->groupRule;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->integrationId)) {
            $body['IntegrationId'] = $request->integrationId;
        }
        if (!Utils::isUnset($request->matchingRules)) {
            $body['MatchingRules'] = $request->matchingRules;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyRule)) {
            $body['NotifyRule'] = $request->notifyRule;
        }
        if (!Utils::isUnset($request->notifyTemplate)) {
            $body['NotifyTemplate'] = $request->notifyTemplate;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->repeat)) {
            $body['Repeat'] = $request->repeat;
        }
        if (!Utils::isUnset($request->repeatInterval)) {
            $body['RepeatInterval'] = $request->repeatInterval;
        }
        if (!Utils::isUnset($request->sendRecoverMessage)) {
            $body['SendRecoverMessage'] = $request->sendRecoverMessage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateNotificationPolicy',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateNotificationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrUpdateNotificationPolicyRequest $request
     *
     * @return CreateOrUpdateNotificationPolicyResponse
     */
    public function createOrUpdateNotificationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateNotificationPolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrUpdateSilencePolicyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateOrUpdateSilencePolicyResponse
     */
    public function createOrUpdateSilencePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->matchingRules)) {
            $body['MatchingRules'] = $request->matchingRules;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateSilencePolicy',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateSilencePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrUpdateSilencePolicyRequest $request
     *
     * @return CreateOrUpdateSilencePolicyResponse
     */
    public function createOrUpdateSilencePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateSilencePolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrUpdateWebhookContactRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateOrUpdateWebhookContactResponse
     */
    public function createOrUpdateWebhookContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizHeaders)) {
            $body['BizHeaders'] = $request->bizHeaders;
        }
        if (!Utils::isUnset($request->bizParams)) {
            $body['BizParams'] = $request->bizParams;
        }
        if (!Utils::isUnset($request->body)) {
            $body['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->method)) {
            $body['Method'] = $request->method;
        }
        if (!Utils::isUnset($request->recoverBody)) {
            $body['RecoverBody'] = $request->recoverBody;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->webhookId)) {
            $body['WebhookId'] = $request->webhookId;
        }
        if (!Utils::isUnset($request->webhookName)) {
            $body['WebhookName'] = $request->webhookName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateWebhookContact',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateWebhookContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrUpdateWebhookContactRequest $request
     *
     * @return CreateOrUpdateWebhookContactResponse
     */
    public function createOrUpdateWebhookContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateWebhookContactWithOptions($request, $runtime);
    }

    /**
     * @param CreatePrometheusAlertRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreatePrometheusAlertRuleResponse
     */
    public function createPrometheusAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertName)) {
            $query['AlertName'] = $request->alertName;
        }
        if (!Utils::isUnset($request->annotations)) {
            $query['Annotations'] = $request->annotations;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dispatchRuleId)) {
            $query['DispatchRuleId'] = $request->dispatchRuleId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->expression)) {
            $query['Expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->notifyType)) {
            $query['NotifyType'] = $request->notifyType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePrometheusAlertRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePrometheusAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePrometheusAlertRuleRequest $request
     *
     * @return CreatePrometheusAlertRuleResponse
     */
    public function createPrometheusAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrometheusAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateRetcodeAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRetcodeAppResponse
     */
    public function createRetcodeAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->retcodeAppName)) {
            $query['RetcodeAppName'] = $request->retcodeAppName;
        }
        if (!Utils::isUnset($request->retcodeAppType)) {
            $query['RetcodeAppType'] = $request->retcodeAppType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRetcodeApp',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRetcodeAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRetcodeAppRequest $request
     *
     * @return CreateRetcodeAppResponse
     */
    public function createRetcodeApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRetcodeAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateSyntheticTaskRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSyntheticTaskResponse
     */
    public function createSyntheticTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSyntheticTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->commonParam)) {
            $request->commonParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->commonParam), 'CommonParam', 'json');
        }
        if (!Utils::isUnset($tmpReq->download)) {
            $request->downloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->download), 'Download', 'json');
        }
        if (!Utils::isUnset($tmpReq->extendInterval)) {
            $request->extendIntervalShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->extendInterval), 'ExtendInterval', 'json');
        }
        if (!Utils::isUnset($tmpReq->monitorList)) {
            $request->monitorListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->monitorList, 'MonitorList', 'json');
        }
        if (!Utils::isUnset($tmpReq->navigation)) {
            $request->navigationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->navigation), 'Navigation', 'json');
        }
        if (!Utils::isUnset($tmpReq->net)) {
            $request->netShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->net), 'Net', 'json');
        }
        if (!Utils::isUnset($tmpReq->protocol)) {
            $request->protocolShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->protocol), 'Protocol', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->commonParamShrink)) {
            $query['CommonParam'] = $request->commonParamShrink;
        }
        if (!Utils::isUnset($request->downloadShrink)) {
            $query['Download'] = $request->downloadShrink;
        }
        if (!Utils::isUnset($request->extendIntervalShrink)) {
            $query['ExtendInterval'] = $request->extendIntervalShrink;
        }
        if (!Utils::isUnset($request->intervalTime)) {
            $query['IntervalTime'] = $request->intervalTime;
        }
        if (!Utils::isUnset($request->intervalType)) {
            $query['IntervalType'] = $request->intervalType;
        }
        if (!Utils::isUnset($request->ipType)) {
            $query['IpType'] = $request->ipType;
        }
        if (!Utils::isUnset($request->monitorListShrink)) {
            $query['MonitorList'] = $request->monitorListShrink;
        }
        if (!Utils::isUnset($request->navigationShrink)) {
            $query['Navigation'] = $request->navigationShrink;
        }
        if (!Utils::isUnset($request->netShrink)) {
            $query['Net'] = $request->netShrink;
        }
        if (!Utils::isUnset($request->protocolShrink)) {
            $query['Protocol'] = $request->protocolShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->updateTask)) {
            $query['UpdateTask'] = $request->updateTask;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSyntheticTask',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSyntheticTaskRequest $request
     *
     * @return CreateSyntheticTaskResponse
     */
    public function createSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateWebhookRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateWebhookResponse
     */
    public function createWebhookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->body)) {
            $query['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->httpHeaders)) {
            $query['HttpHeaders'] = $request->httpHeaders;
        }
        if (!Utils::isUnset($request->httpParams)) {
            $query['HttpParams'] = $request->httpParams;
        }
        if (!Utils::isUnset($request->method)) {
            $query['Method'] = $request->method;
        }
        if (!Utils::isUnset($request->recoverBody)) {
            $query['RecoverBody'] = $request->recoverBody;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWebhook',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWebhookRequest $request
     *
     * @return CreateWebhookResponse
     */
    public function createWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWebhookWithOptions($request, $runtime);
    }

    /**
     * @param DelAuthTokenRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DelAuthTokenResponse
     */
    public function delAuthTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DelAuthToken',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DelAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DelAuthTokenRequest $request
     *
     * @return DelAuthTokenResponse
     */
    public function delAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delAuthTokenWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlertContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAlertContactResponse
     */
    public function deleteAlertContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertContact',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlertContactRequest $request
     *
     * @return DeleteAlertContactResponse
     */
    public function deleteAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertContactWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlertContactGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAlertContactGroupResponse
     */
    public function deleteAlertContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupId)) {
            $query['ContactGroupId'] = $request->contactGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertContactGroup',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlertContactGroupRequest $request
     *
     * @return DeleteAlertContactGroupResponse
     */
    public function deleteAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlertRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAlertRuleResponse
     */
    public function deleteAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlertRuleRequest $request
     *
     * @return DeleteAlertRuleResponse
     */
    public function deleteAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlertRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteAlertRulesResponse
     */
    public function deleteAlertRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertIds)) {
            $query['AlertIds'] = $request->alertIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlertRules',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlertRulesRequest $request
     *
     * @return DeleteAlertRulesResponse
     */
    public function deleteAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCmsExporterRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCmsExporterResponse
     */
    public function deleteCmsExporterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCmsExporter',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCmsExporterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCmsExporterRequest $request
     *
     * @return DeleteCmsExporterResponse
     */
    public function deleteCmsExporter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCmsExporterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteContactRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteContactResponse
     */
    public function deleteContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteContact',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteContactRequest $request
     *
     * @return DeleteContactResponse
     */
    public function deleteContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactWithOptions($request, $runtime);
    }

    /**
     * @param DeleteContactGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteContactGroupResponse
     */
    public function deleteContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupId)) {
            $query['ContactGroupId'] = $request->contactGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteContactGroup',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteContactGroupRequest $request
     *
     * @return DeleteContactGroupResponse
     */
    public function deleteContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDispatchRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDispatchRuleResponse
     */
    public function deleteDispatchRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDispatchRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDispatchRuleRequest $request
     *
     * @return DeleteDispatchRuleResponse
     */
    public function deleteDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEventBridgeIntegrationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteEventBridgeIntegrationResponse
     */
    public function deleteEventBridgeIntegrationWithOptions($request, $runtime)
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
            'action'      => 'DeleteEventBridgeIntegration',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEventBridgeIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEventBridgeIntegrationRequest $request
     *
     * @return DeleteEventBridgeIntegrationResponse
     */
    public function deleteEventBridgeIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventBridgeIntegrationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGrafanaResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteGrafanaResourceResponse
     */
    public function deleteGrafanaResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $body['ClusterName'] = $request->clusterName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteGrafanaResource',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGrafanaResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGrafanaResourceRequest $request
     *
     * @return DeleteGrafanaResourceResponse
     */
    public function deleteGrafanaResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGrafanaResourceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIMRobotRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteIMRobotResponse
     */
    public function deleteIMRobotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->robotId)) {
            $query['RobotId'] = $request->robotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIMRobot',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIMRobotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIMRobotRequest $request
     *
     * @return DeleteIMRobotResponse
     */
    public function deleteIMRobot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIMRobotWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIntegrationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteIntegrationResponse
     */
    public function deleteIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->integration)) {
            $query['Integration'] = $request->integration;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIntegration',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIntegrationRequest $request
     *
     * @return DeleteIntegrationResponse
     */
    public function deleteIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIntegrationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIntegrationsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteIntegrationsResponse
     */
    public function deleteIntegrationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIntegrations',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIntegrationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIntegrationsRequest $request
     *
     * @return DeleteIntegrationsResponse
     */
    public function deleteIntegrations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIntegrationsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNotificationPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteNotificationPolicyResponse
     */
    public function deleteNotificationPolicyWithOptions($request, $runtime)
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
            'action'      => 'DeleteNotificationPolicy',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNotificationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNotificationPolicyRequest $request
     *
     * @return DeleteNotificationPolicyResponse
     */
    public function deleteNotificationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNotificationPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeletePrometheusAlertRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeletePrometheusAlertRuleResponse
     */
    public function deletePrometheusAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePrometheusAlertRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePrometheusAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePrometheusAlertRuleRequest $request
     *
     * @return DeletePrometheusAlertRuleResponse
     */
    public function deletePrometheusAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrometheusAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeletePrometheusGlobalViewRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeletePrometheusGlobalViewResponse
     */
    public function deletePrometheusGlobalViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalViewClusterId)) {
            $query['GlobalViewClusterId'] = $request->globalViewClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePrometheusGlobalView',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePrometheusGlobalViewRequest $request
     *
     * @return DeletePrometheusGlobalViewResponse
     */
    public function deletePrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRetcodeAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRetcodeAppResponse
     */
    public function deleteRetcodeAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRetcodeApp',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRetcodeAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRetcodeAppRequest $request
     *
     * @return DeleteRetcodeAppResponse
     */
    public function deleteRetcodeApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRetcodeAppWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScenarioRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteScenarioResponse
     */
    public function deleteScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scenarioId)) {
            $query['ScenarioId'] = $request->scenarioId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScenario',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteScenarioRequest $request
     *
     * @return DeleteScenarioResponse
     */
    public function deleteScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScenarioWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSilencePolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSilencePolicyResponse
     */
    public function deleteSilencePolicyWithOptions($request, $runtime)
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
            'action'      => 'DeleteSilencePolicy',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSilencePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSilencePolicyRequest $request
     *
     * @return DeleteSilencePolicyResponse
     */
    public function deleteSilencePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSilencePolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSourceMapRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSourceMapResponse
     */
    public function deleteSourceMapWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteSourceMapShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->fidList)) {
            $request->fidListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fidList, 'FidList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->fidListShrink)) {
            $query['FidList'] = $request->fidListShrink;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSourceMap',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSourceMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSourceMapRequest $request
     *
     * @return DeleteSourceMapResponse
     */
    public function deleteSourceMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSourceMapWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSyntheticTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSyntheticTaskResponse
     */
    public function deleteSyntheticTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskIds)) {
            $query['TaskIds'] = $request->taskIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSyntheticTask',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSyntheticTaskRequest $request
     *
     * @return DeleteSyntheticTaskResponse
     */
    public function deleteSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTraceAppRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTraceAppResponse
     */
    public function deleteTraceAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTraceApp',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTraceAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTraceAppRequest $request
     *
     * @return DeleteTraceAppResponse
     */
    public function deleteTraceApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTraceAppWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWebhookContactRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteWebhookContactResponse
     */
    public function deleteWebhookContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->webhookId)) {
            $query['WebhookId'] = $request->webhookId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWebhookContact',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWebhookContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWebhookContactRequest $request
     *
     * @return DeleteWebhookContactResponse
     */
    public function deleteWebhookContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebhookContactWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContactGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeContactGroupsResponse
     */
    public function describeContactGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupName)) {
            $query['ContactGroupName'] = $request->contactGroupName;
        }
        if (!Utils::isUnset($request->isDetail)) {
            $query['IsDetail'] = $request->isDetail;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContactGroups',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContactGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeContactGroupsRequest $request
     *
     * @return DescribeContactGroupsResponse
     */
    public function describeContactGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContactsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeContactsResponse
     */
    public function describeContactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContacts',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeContactsRequest $request
     *
     * @return DescribeContactsResponse
     */
    public function describeContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDispatchRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDispatchRuleResponse
     */
    public function describeDispatchRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDispatchRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDispatchRuleRequest $request
     *
     * @return DescribeDispatchRuleResponse
     */
    public function describeDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIMRobotsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeIMRobotsResponse
     */
    public function describeIMRobotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->robotName)) {
            $query['RobotName'] = $request->robotName;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIMRobots',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIMRobotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIMRobotsRequest $request
     *
     * @return DescribeIMRobotsResponse
     */
    public function describeIMRobots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIMRobotsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePrometheusAlertRuleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePrometheusAlertRuleResponse
     */
    public function describePrometheusAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrometheusAlertRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePrometheusAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePrometheusAlertRuleRequest $request
     *
     * @return DescribePrometheusAlertRuleResponse
     */
    public function describePrometheusAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrometheusAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTraceLicenseKeyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTraceLicenseKeyResponse
     */
    public function describeTraceLicenseKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTraceLicenseKey',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTraceLicenseKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTraceLicenseKeyRequest $request
     *
     * @return DescribeTraceLicenseKeyResponse
     */
    public function describeTraceLicenseKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTraceLicenseKeyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebhookContactsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeWebhookContactsResponse
     */
    public function describeWebhookContactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebhookContacts',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebhookContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebhookContactsRequest $request
     *
     * @return DescribeWebhookContactsResponse
     */
    public function describeWebhookContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebhookContactsWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentDownloadUrlRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAgentDownloadUrlResponse
     */
    public function getAgentDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAgentDownloadUrl',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAgentDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAgentDownloadUrlRequest $request
     *
     * @return GetAgentDownloadUrlResponse
     */
    public function getAgentDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetAlertRulesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAlertRulesResponse
     */
    public function getAlertRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertIds)) {
            $query['AlertIds'] = $request->alertIds;
        }
        if (!Utils::isUnset($request->alertNames)) {
            $query['AlertNames'] = $request->alertNames;
        }
        if (!Utils::isUnset($request->alertStatus)) {
            $query['AlertStatus'] = $request->alertStatus;
        }
        if (!Utils::isUnset($request->alertType)) {
            $query['AlertType'] = $request->alertType;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAlertRules',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlertRulesRequest $request
     *
     * @return GetAlertRulesResponse
     */
    public function getAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @param GetAppApiByPageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAppApiByPageResponse
     */
    public function getAppApiByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->intervalMills)) {
            $query['IntervalMills'] = $request->intervalMills;
        }
        if (!Utils::isUnset($request->PId)) {
            $query['PId'] = $request->PId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppApiByPage',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppApiByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAppApiByPageRequest $request
     *
     * @return GetAppApiByPageResponse
     */
    public function getAppApiByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppApiByPageWithOptions($request, $runtime);
    }

    /**
     * @param GetAuthTokenRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAuthTokenResponse
     */
    public function getAuthTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAuthToken',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAuthTokenRequest $request
     *
     * @return GetAuthTokenResponse
     */
    public function getAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetClusterAllUrlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetClusterAllUrlResponse
     */
    public function getClusterAllUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetClusterAllUrl',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetClusterAllUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetClusterAllUrlRequest $request
     *
     * @return GetClusterAllUrlResponse
     */
    public function getClusterAllUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterAllUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetExploreUrlRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetExploreUrlResponse
     */
    public function getExploreUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->expression)) {
            $query['Expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExploreUrl',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetExploreUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetExploreUrlRequest $request
     *
     * @return GetExploreUrlResponse
     */
    public function getExploreUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExploreUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetIntegrationStateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetIntegrationStateResponse
     */
    public function getIntegrationStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->integration)) {
            $query['Integration'] = $request->integration;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIntegrationState',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIntegrationStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIntegrationStateRequest $request
     *
     * @return GetIntegrationStateResponse
     */
    public function getIntegrationState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIntegrationStateWithOptions($request, $runtime);
    }

    /**
     * @param GetManagedPrometheusStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetManagedPrometheusStatusResponse
     */
    public function getManagedPrometheusStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetManagedPrometheusStatus',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetManagedPrometheusStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetManagedPrometheusStatusRequest $request
     *
     * @return GetManagedPrometheusStatusResponse
     */
    public function getManagedPrometheusStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getManagedPrometheusStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetMultipleTraceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMultipleTraceResponse
     */
    public function getMultipleTraceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->traceIDs)) {
            $query['TraceIDs'] = $request->traceIDs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMultipleTrace',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMultipleTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMultipleTraceRequest $request
     *
     * @return GetMultipleTraceResponse
     */
    public function getMultipleTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultipleTraceWithOptions($request, $runtime);
    }

    /**
     * @param GetOnCallSchedulesDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetOnCallSchedulesDetailResponse
     */
    public function getOnCallSchedulesDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOnCallSchedulesDetail',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOnCallSchedulesDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOnCallSchedulesDetailRequest $request
     *
     * @return GetOnCallSchedulesDetailResponse
     */
    public function getOnCallSchedulesDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOnCallSchedulesDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetPrometheusApiTokenRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetPrometheusApiTokenResponse
     */
    public function getPrometheusApiTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPrometheusApiToken',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPrometheusApiTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPrometheusApiTokenRequest $request
     *
     * @return GetPrometheusApiTokenResponse
     */
    public function getPrometheusApiToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrometheusApiTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetPrometheusGlobalViewRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetPrometheusGlobalViewResponse
     */
    public function getPrometheusGlobalViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalViewClusterId)) {
            $query['GlobalViewClusterId'] = $request->globalViewClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPrometheusGlobalView',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPrometheusGlobalViewRequest $request
     *
     * @return GetPrometheusGlobalViewResponse
     */
    public function getPrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @param GetRecordingRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetRecordingRuleResponse
     */
    public function getRecordingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRecordingRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRecordingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRecordingRuleRequest $request
     *
     * @return GetRecordingRuleResponse
     */
    public function getRecordingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecordingRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetRetcodeShareUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetRetcodeShareUrlResponse
     */
    public function getRetcodeShareUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRetcodeShareUrl',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRetcodeShareUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRetcodeShareUrlRequest $request
     *
     * @return GetRetcodeShareUrlResponse
     */
    public function getRetcodeShareUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRetcodeShareUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetSourceMapInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSourceMapInfoResponse
     */
    public function getSourceMapInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ascendingSequence)) {
            $query['AscendingSequence'] = $request->ascendingSequence;
        }
        if (!Utils::isUnset($request->edition)) {
            $query['Edition'] = $request->edition;
        }
        if (!Utils::isUnset($request->ID)) {
            $query['ID'] = $request->ID;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->orderField)) {
            $query['OrderField'] = $request->orderField;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSourceMapInfo',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSourceMapInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSourceMapInfoRequest $request
     *
     * @return GetSourceMapInfoResponse
     */
    public function getSourceMapInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSourceMapInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetStackRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetStackResponse
     */
    public function getStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rpcID)) {
            $query['RpcID'] = $request->rpcID;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->traceID)) {
            $query['TraceID'] = $request->traceID;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStack',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStackRequest $request
     *
     * @return GetStackResponse
     */
    public function getStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackWithOptions($request, $runtime);
    }

    /**
     * @param GetSyntheticTaskDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetSyntheticTaskDetailResponse
     */
    public function getSyntheticTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSyntheticTaskDetail',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSyntheticTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSyntheticTaskDetailRequest $request
     *
     * @return GetSyntheticTaskDetailResponse
     */
    public function getSyntheticTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSyntheticTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetSyntheticTaskListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetSyntheticTaskListResponse
     */
    public function getSyntheticTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $query['TaskStatus'] = $request->taskStatus;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSyntheticTaskList',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSyntheticTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSyntheticTaskListRequest $request
     *
     * @return GetSyntheticTaskListResponse
     */
    public function getSyntheticTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSyntheticTaskListWithOptions($request, $runtime);
    }

    /**
     * @param GetSyntheticTaskMonitorsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetSyntheticTaskMonitorsResponse
     */
    public function getSyntheticTaskMonitorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSyntheticTaskMonitors',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSyntheticTaskMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSyntheticTaskMonitorsRequest $request
     *
     * @return GetSyntheticTaskMonitorsResponse
     */
    public function getSyntheticTaskMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSyntheticTaskMonitorsWithOptions($request, $runtime);
    }

    /**
     * @param GetTraceRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTraceResponse
     */
    public function getTraceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->traceID)) {
            $query['TraceID'] = $request->traceID;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTrace',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTraceRequest $request
     *
     * @return GetTraceResponse
     */
    public function getTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTraceWithOptions($request, $runtime);
    }

    /**
     * @param GetTraceAppRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTraceAppResponse
     */
    public function getTraceAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTraceApp',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTraceAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTraceAppRequest $request
     *
     * @return GetTraceAppResponse
     */
    public function getTraceApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTraceAppWithOptions($request, $runtime);
    }

    /**
     * @param ImportAppAlertRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ImportAppAlertRulesResponse
     */
    public function importAppAlertRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupIds)) {
            $query['ContactGroupIds'] = $request->contactGroupIds;
        }
        if (!Utils::isUnset($request->isAutoStart)) {
            $query['IsAutoStart'] = $request->isAutoStart;
        }
        if (!Utils::isUnset($request->pids)) {
            $query['Pids'] = $request->pids;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templageAlertConfig)) {
            $query['TemplageAlertConfig'] = $request->templageAlertConfig;
        }
        if (!Utils::isUnset($request->templateAlertId)) {
            $query['TemplateAlertId'] = $request->templateAlertId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportAppAlertRules',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportAppAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportAppAlertRulesRequest $request
     *
     * @return ImportAppAlertRulesResponse
     */
    public function importAppAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importAppAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @param InstallCmsExporterRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return InstallCmsExporterResponse
     */
    public function installCmsExporterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->cmsArgs)) {
            $query['CmsArgs'] = $request->cmsArgs;
        }
        if (!Utils::isUnset($request->directArgs)) {
            $query['DirectArgs'] = $request->directArgs;
        }
        if (!Utils::isUnset($request->enableTag)) {
            $query['EnableTag'] = $request->enableTag;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallCmsExporter',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallCmsExporterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InstallCmsExporterRequest $request
     *
     * @return InstallCmsExporterResponse
     */
    public function installCmsExporter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installCmsExporterWithOptions($request, $runtime);
    }

    /**
     * @param InstallManagedPrometheusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return InstallManagedPrometheusResponse
     */
    public function installManagedPrometheusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->kubeConfig)) {
            $query['KubeConfig'] = $request->kubeConfig;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallManagedPrometheus',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallManagedPrometheusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InstallManagedPrometheusRequest $request
     *
     * @return InstallManagedPrometheusResponse
     */
    public function installManagedPrometheus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installManagedPrometheusWithOptions($request, $runtime);
    }

    /**
     * @param ListActivatedAlertsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListActivatedAlertsResponse
     */
    public function listActivatedAlertsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListActivatedAlerts',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListActivatedAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListActivatedAlertsRequest $request
     *
     * @return ListActivatedAlertsResponse
     */
    public function listActivatedAlerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listActivatedAlertsWithOptions($request, $runtime);
    }

    /**
     * @param ListAlertEventsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAlertEventsResponse
     */
    public function listAlertEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertName)) {
            $query['AlertName'] = $request->alertName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->matchingConditions)) {
            $query['MatchingConditions'] = $request->matchingConditions;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAlertEvents',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAlertEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAlertEventsRequest $request
     *
     * @return ListAlertEventsResponse
     */
    public function listAlertEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlertEventsWithOptions($request, $runtime);
    }

    /**
     * @param ListAlertsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListAlertsResponse
     */
    public function listAlertsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertName)) {
            $query['AlertName'] = $request->alertName;
        }
        if (!Utils::isUnset($request->dispatchRuleId)) {
            $query['DispatchRuleId'] = $request->dispatchRuleId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->integrationType)) {
            $query['IntegrationType'] = $request->integrationType;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->severity)) {
            $query['Severity'] = $request->severity;
        }
        if (!Utils::isUnset($request->showActivities)) {
            $query['ShowActivities'] = $request->showActivities;
        }
        if (!Utils::isUnset($request->showEvents)) {
            $query['ShowEvents'] = $request->showEvents;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAlerts',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
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

        return $this->listAlertsWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterFromGrafanaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListClusterFromGrafanaResponse
     */
    public function listClusterFromGrafanaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterFromGrafana',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterFromGrafanaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterFromGrafanaRequest $request
     *
     * @return ListClusterFromGrafanaResponse
     */
    public function listClusterFromGrafana($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterFromGrafanaWithOptions($request, $runtime);
    }

    /**
     * @param ListCmsInstancesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListCmsInstancesResponse
     */
    public function listCmsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->typeFilter)) {
            $query['TypeFilter'] = $request->typeFilter;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCmsInstances',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCmsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCmsInstancesRequest $request
     *
     * @return ListCmsInstancesResponse
     */
    public function listCmsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCmsInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListDashboardsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListDashboardsResponse
     */
    public function listDashboardsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->dashboardName)) {
            $query['DashboardName'] = $request->dashboardName;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->recreateSwitch)) {
            $query['RecreateSwitch'] = $request->recreateSwitch;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDashboards',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDashboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDashboardsRequest $request
     *
     * @return ListDashboardsResponse
     */
    public function listDashboards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDashboardsWithOptions($request, $runtime);
    }

    /**
     * @param ListDashboardsByNameRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDashboardsByNameResponse
     */
    public function listDashboardsByNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->dashBoardName)) {
            $query['DashBoardName'] = $request->dashBoardName;
        }
        if (!Utils::isUnset($request->dashBoardVersion)) {
            $query['DashBoardVersion'] = $request->dashBoardVersion;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->onlyQuery)) {
            $query['OnlyQuery'] = $request->onlyQuery;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDashboardsByName',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDashboardsByNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDashboardsByNameRequest $request
     *
     * @return ListDashboardsByNameResponse
     */
    public function listDashboardsByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDashboardsByNameWithOptions($request, $runtime);
    }

    /**
     * @param ListDispatchRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDispatchRuleResponse
     */
    public function listDispatchRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->system)) {
            $query['System'] = $request->system;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDispatchRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDispatchRuleRequest $request
     *
     * @return ListDispatchRuleResponse
     */
    public function listDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListEscalationPoliciesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListEscalationPoliciesResponse
     */
    public function listEscalationPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEscalationPolicies',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEscalationPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEscalationPoliciesRequest $request
     *
     * @return ListEscalationPoliciesResponse
     */
    public function listEscalationPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEscalationPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param ListEventBridgeIntegrationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListEventBridgeIntegrationsResponse
     */
    public function listEventBridgeIntegrationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEventBridgeIntegrations',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEventBridgeIntegrationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEventBridgeIntegrationsRequest $request
     *
     * @return ListEventBridgeIntegrationsResponse
     */
    public function listEventBridgeIntegrations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventBridgeIntegrationsWithOptions($request, $runtime);
    }

    /**
     * @param ListInsightsEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListInsightsEventsResponse
     */
    public function listInsightsEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->insightsTypes)) {
            $query['InsightsTypes'] = $request->insightsTypes;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInsightsEvents',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInsightsEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInsightsEventsRequest $request
     *
     * @return ListInsightsEventsResponse
     */
    public function listInsightsEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInsightsEventsWithOptions($request, $runtime);
    }

    /**
     * @param ListIntegrationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListIntegrationResponse
     */
    public function listIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIntegration',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIntegrationRequest $request
     *
     * @return ListIntegrationResponse
     */
    public function listIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntegrationWithOptions($request, $runtime);
    }

    /**
     * @param ListNotificationPoliciesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListNotificationPoliciesResponse
     */
    public function listNotificationPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isDetail)) {
            $query['IsDetail'] = $request->isDetail;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNotificationPolicies',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNotificationPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNotificationPoliciesRequest $request
     *
     * @return ListNotificationPoliciesResponse
     */
    public function listNotificationPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNotificationPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param ListOnCallSchedulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListOnCallSchedulesResponse
     */
    public function listOnCallSchedulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOnCallSchedules',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOnCallSchedulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOnCallSchedulesRequest $request
     *
     * @return ListOnCallSchedulesResponse
     */
    public function listOnCallSchedules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOnCallSchedulesWithOptions($request, $runtime);
    }

    /**
     * @param ListPrometheusAlertRulesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPrometheusAlertRulesResponse
     */
    public function listPrometheusAlertRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->matchExpressions)) {
            $query['MatchExpressions'] = $request->matchExpressions;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrometheusAlertRules',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrometheusAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPrometheusAlertRulesRequest $request
     *
     * @return ListPrometheusAlertRulesResponse
     */
    public function listPrometheusAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListPrometheusAlertTemplatesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListPrometheusAlertTemplatesResponse
     */
    public function listPrometheusAlertTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrometheusAlertTemplates',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrometheusAlertTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPrometheusAlertTemplatesRequest $request
     *
     * @return ListPrometheusAlertTemplatesResponse
     */
    public function listPrometheusAlertTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusAlertTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListPrometheusGlobalViewRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPrometheusGlobalViewResponse
     */
    public function listPrometheusGlobalViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrometheusGlobalView',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPrometheusGlobalViewRequest $request
     *
     * @return ListPrometheusGlobalViewResponse
     */
    public function listPrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @param ListPrometheusInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListPrometheusInstancesResponse
     */
    public function listPrometheusInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->showGlobalView)) {
            $query['ShowGlobalView'] = $request->showGlobalView;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrometheusInstances',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrometheusInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPrometheusInstancesRequest $request
     *
     * @return ListPrometheusInstancesResponse
     */
    public function listPrometheusInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListRetcodeAppsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListRetcodeAppsResponse
     */
    public function listRetcodeAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRetcodeApps',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRetcodeAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRetcodeAppsRequest $request
     *
     * @return ListRetcodeAppsResponse
     */
    public function listRetcodeApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRetcodeAppsWithOptions($request, $runtime);
    }

    /**
     * @param ListScenarioRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListScenarioResponse
     */
    public function listScenarioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scenario)) {
            $query['Scenario'] = $request->scenario;
        }
        if (!Utils::isUnset($request->sign)) {
            $query['Sign'] = $request->sign;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScenario',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListScenarioRequest $request
     *
     * @return ListScenarioResponse
     */
    public function listScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScenarioWithOptions($request, $runtime);
    }

    /**
     * @param ListSilencePoliciesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListSilencePoliciesResponse
     */
    public function listSilencePoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isDetail)) {
            $query['IsDetail'] = $request->isDetail;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSilencePolicies',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSilencePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSilencePoliciesRequest $request
     *
     * @return ListSilencePoliciesResponse
     */
    public function listSilencePolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSilencePoliciesWithOptions($request, $runtime);
    }

    /**
     * @param ListTraceAppsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTraceAppsResponse
     */
    public function listTraceAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTraceApps',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTraceAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTraceAppsRequest $request
     *
     * @return ListTraceAppsResponse
     */
    public function listTraceApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTraceAppsWithOptions($request, $runtime);
    }

    /**
     * @param ManageGetRecordingRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ManageGetRecordingRuleResponse
     */
    public function manageGetRecordingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->queryUserId)) {
            $query['QueryUserId'] = $request->queryUserId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ManageGetRecordingRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ManageGetRecordingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ManageGetRecordingRuleRequest $request
     *
     * @return ManageGetRecordingRuleResponse
     */
    public function manageGetRecordingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manageGetRecordingRuleWithOptions($request, $runtime);
    }

    /**
     * @param ManageRecordingRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ManageRecordingRuleResponse
     */
    public function manageRecordingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->queryUserId)) {
            $query['QueryUserId'] = $request->queryUserId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleYaml)) {
            $query['RuleYaml'] = $request->ruleYaml;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ManageRecordingRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ManageRecordingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ManageRecordingRuleRequest $request
     *
     * @return ManageRecordingRuleResponse
     */
    public function manageRecordingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manageRecordingRuleWithOptions($request, $runtime);
    }

    /**
     * @param OpenArmsDefaultSLRRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OpenArmsDefaultSLRResponse
     */
    public function openArmsDefaultSLRWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenArmsDefaultSLR',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenArmsDefaultSLRResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenArmsDefaultSLRRequest $request
     *
     * @return OpenArmsDefaultSLRResponse
     */
    public function openArmsDefaultSLR($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openArmsDefaultSLRWithOptions($request, $runtime);
    }

    /**
     * @param OpenArmsServiceSecondVersionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return OpenArmsServiceSecondVersionResponse
     */
    public function openArmsServiceSecondVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenArmsServiceSecondVersion',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenArmsServiceSecondVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenArmsServiceSecondVersionRequest $request
     *
     * @return OpenArmsServiceSecondVersionResponse
     */
    public function openArmsServiceSecondVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openArmsServiceSecondVersionWithOptions($request, $runtime);
    }

    /**
     * @param OpenVClusterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return OpenVClusterResponse
     */
    public function openVClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->length)) {
            $query['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->recreateSwitch)) {
            $query['RecreateSwitch'] = $request->recreateSwitch;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenVCluster',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenVClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenVClusterRequest $request
     *
     * @return OpenVClusterResponse
     */
    public function openVCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openVClusterWithOptions($request, $runtime);
    }

    /**
     * @param OpenXtraceDefaultSLRRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return OpenXtraceDefaultSLRResponse
     */
    public function openXtraceDefaultSLRWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenXtraceDefaultSLR',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenXtraceDefaultSLRResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenXtraceDefaultSLRRequest $request
     *
     * @return OpenXtraceDefaultSLRResponse
     */
    public function openXtraceDefaultSLR($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openXtraceDefaultSLRWithOptions($request, $runtime);
    }

    /**
     * @param QueryMetricByPageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryMetricByPageResponse
     */
    public function queryMetricByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->customFilters)) {
            $query['CustomFilters'] = $request->customFilters;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->intervalInSec)) {
            $query['IntervalInSec'] = $request->intervalInSec;
        }
        if (!Utils::isUnset($request->measures)) {
            $query['Measures'] = $request->measures;
        }
        if (!Utils::isUnset($request->metric)) {
            $query['Metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMetricByPage',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMetricByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMetricByPageRequest $request
     *
     * @return QueryMetricByPageResponse
     */
    public function queryMetricByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMetricByPageWithOptions($request, $runtime);
    }

    /**
     * @param QueryPromInstallStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryPromInstallStatusResponse
     */
    public function queryPromInstallStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPromInstallStatus',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPromInstallStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPromInstallStatusRequest $request
     *
     * @return QueryPromInstallStatusResponse
     */
    public function queryPromInstallStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPromInstallStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryReleaseMetricRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryReleaseMetricResponse
     */
    public function queryReleaseMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeOrderId)) {
            $query['ChangeOrderId'] = $request->changeOrderId;
        }
        if (!Utils::isUnset($request->createTime)) {
            $query['CreateTime'] = $request->createTime;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->proxyUserId)) {
            $query['ProxyUserId'] = $request->proxyUserId;
        }
        if (!Utils::isUnset($request->releaseEndTime)) {
            $query['ReleaseEndTime'] = $request->releaseEndTime;
        }
        if (!Utils::isUnset($request->releaseStartTime)) {
            $query['ReleaseStartTime'] = $request->releaseStartTime;
        }
        if (!Utils::isUnset($request->service)) {
            $query['Service'] = $request->service;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryReleaseMetric',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryReleaseMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryReleaseMetricRequest $request
     *
     * @return QueryReleaseMetricResponse
     */
    public function queryReleaseMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryReleaseMetricWithOptions($request, $runtime);
    }

    /**
     * @param RemoveAliClusterIdsFromPrometheusGlobalViewRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return RemoveAliClusterIdsFromPrometheusGlobalViewResponse
     */
    public function removeAliClusterIdsFromPrometheusGlobalViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterIds)) {
            $query['ClusterIds'] = $request->clusterIds;
        }
        if (!Utils::isUnset($request->globalViewClusterId)) {
            $query['GlobalViewClusterId'] = $request->globalViewClusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAliClusterIdsFromPrometheusGlobalView',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAliClusterIdsFromPrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveAliClusterIdsFromPrometheusGlobalViewRequest $request
     *
     * @return RemoveAliClusterIdsFromPrometheusGlobalViewResponse
     */
    public function removeAliClusterIdsFromPrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAliClusterIdsFromPrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @param RemoveSourcesFromPrometheusGlobalViewRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return RemoveSourcesFromPrometheusGlobalViewResponse
     */
    public function removeSourcesFromPrometheusGlobalViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalViewClusterId)) {
            $query['GlobalViewClusterId'] = $request->globalViewClusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceNames)) {
            $query['SourceNames'] = $request->sourceNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveSourcesFromPrometheusGlobalView',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveSourcesFromPrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveSourcesFromPrometheusGlobalViewRequest $request
     *
     * @return RemoveSourcesFromPrometheusGlobalViewResponse
     */
    public function removeSourcesFromPrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSourcesFromPrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @param SaveTraceAppConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SaveTraceAppConfigResponse
     */
    public function saveTraceAppConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->settings)) {
            $query['Settings'] = $request->settings;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveTraceAppConfig',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveTraceAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveTraceAppConfigRequest $request
     *
     * @return SaveTraceAppConfigResponse
     */
    public function saveTraceAppConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTraceAppConfigWithOptions($request, $runtime);
    }

    /**
     * @param SearchAlertContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SearchAlertContactResponse
     */
    public function searchAlertContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactIds)) {
            $query['ContactIds'] = $request->contactIds;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchAlertContact',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchAlertContactRequest $request
     *
     * @return SearchAlertContactResponse
     */
    public function searchAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertContactWithOptions($request, $runtime);
    }

    /**
     * @param SearchAlertContactGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchAlertContactGroupResponse
     */
    public function searchAlertContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupIds)) {
            $query['ContactGroupIds'] = $request->contactGroupIds;
        }
        if (!Utils::isUnset($request->contactGroupName)) {
            $query['ContactGroupName'] = $request->contactGroupName;
        }
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->isDetail)) {
            $query['IsDetail'] = $request->isDetail;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchAlertContactGroup',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchAlertContactGroupRequest $request
     *
     * @return SearchAlertContactGroupResponse
     */
    public function searchAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param SearchAlertHistoriesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchAlertHistoriesResponse
     */
    public function searchAlertHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->alertType)) {
            $query['AlertType'] = $request->alertType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchAlertHistories',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchAlertHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchAlertHistoriesRequest $request
     *
     * @return SearchAlertHistoriesResponse
     */
    public function searchAlertHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param SearchAlertRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SearchAlertRulesResponse
     */
    public function searchAlertRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->systemRegionId)) {
            $query['SystemRegionId'] = $request->systemRegionId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchAlertRules',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchAlertRulesRequest $request
     *
     * @return SearchAlertRulesResponse
     */
    public function searchAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @param SearchEventsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SearchEventsResponse
     */
    public function searchEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->alertType)) {
            $query['AlertType'] = $request->alertType;
        }
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->isTrigger)) {
            $query['IsTrigger'] = $request->isTrigger;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchEvents',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchEventsRequest $request
     *
     * @return SearchEventsResponse
     */
    public function searchEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchEventsWithOptions($request, $runtime);
    }

    /**
     * @param SearchRetcodeAppByPageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SearchRetcodeAppByPageResponse
     */
    public function searchRetcodeAppByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->retcodeAppName)) {
            $query['RetcodeAppName'] = $request->retcodeAppName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchRetcodeAppByPage',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchRetcodeAppByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchRetcodeAppByPageRequest $request
     *
     * @return SearchRetcodeAppByPageResponse
     */
    public function searchRetcodeAppByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchRetcodeAppByPageWithOptions($request, $runtime);
    }

    /**
     * @param SearchTraceAppByNameRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchTraceAppByNameResponse
     */
    public function searchTraceAppByNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->traceAppName)) {
            $query['TraceAppName'] = $request->traceAppName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchTraceAppByName',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchTraceAppByNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchTraceAppByNameRequest $request
     *
     * @return SearchTraceAppByNameResponse
     */
    public function searchTraceAppByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTraceAppByNameWithOptions($request, $runtime);
    }

    /**
     * @param SearchTraceAppByPageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchTraceAppByPageResponse
     */
    public function searchTraceAppByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->traceAppName)) {
            $query['TraceAppName'] = $request->traceAppName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchTraceAppByPage',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchTraceAppByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchTraceAppByPageRequest $request
     *
     * @return SearchTraceAppByPageResponse
     */
    public function searchTraceAppByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTraceAppByPageWithOptions($request, $runtime);
    }

    /**
     * @param SearchTracesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SearchTracesResponse
     */
    public function searchTracesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->exclusionFilters)) {
            $query['ExclusionFilters'] = $request->exclusionFilters;
        }
        if (!Utils::isUnset($request->minDuration)) {
            $query['MinDuration'] = $request->minDuration;
        }
        if (!Utils::isUnset($request->operationName)) {
            $query['OperationName'] = $request->operationName;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->serviceIp)) {
            $query['ServiceIp'] = $request->serviceIp;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchTraces',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchTracesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchTracesRequest $request
     *
     * @return SearchTracesResponse
     */
    public function searchTraces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTracesWithOptions($request, $runtime);
    }

    /**
     * @param SearchTracesByPageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SearchTracesByPageResponse
     */
    public function searchTracesByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->exclusionFilters)) {
            $query['ExclusionFilters'] = $request->exclusionFilters;
        }
        if (!Utils::isUnset($request->minDuration)) {
            $query['MinDuration'] = $request->minDuration;
        }
        if (!Utils::isUnset($request->operationName)) {
            $query['OperationName'] = $request->operationName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->serviceIp)) {
            $query['ServiceIp'] = $request->serviceIp;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchTracesByPage',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchTracesByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchTracesByPageRequest $request
     *
     * @return SearchTracesByPageResponse
     */
    public function searchTracesByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTracesByPageWithOptions($request, $runtime);
    }

    /**
     * @param SendTTSVerifyLinkRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SendTTSVerifyLinkResponse
     */
    public function sendTTSVerifyLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->contactId)) {
            $body['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['Phone'] = $request->phone;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendTTSVerifyLink',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendTTSVerifyLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendTTSVerifyLinkRequest $request
     *
     * @return SendTTSVerifyLinkResponse
     */
    public function sendTTSVerifyLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendTTSVerifyLinkWithOptions($request, $runtime);
    }

    /**
     * @param SetRetcodeShareStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetRetcodeShareStatusResponse
     */
    public function setRetcodeShareStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetRetcodeShareStatus',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetRetcodeShareStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetRetcodeShareStatusRequest $request
     *
     * @return SetRetcodeShareStatusResponse
     */
    public function setRetcodeShareStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRetcodeShareStatusWithOptions($request, $runtime);
    }

    /**
     * @param StartAlertRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StartAlertResponse
     */
    public function startAlertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartAlert',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartAlertRequest $request
     *
     * @return StartAlertResponse
     */
    public function startAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAlertWithOptions($request, $runtime);
    }

    /**
     * @param StopAlertRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StopAlertResponse
     */
    public function stopAlertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopAlert',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopAlertRequest $request
     *
     * @return StopAlertResponse
     */
    public function stopAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAlertWithOptions($request, $runtime);
    }

    /**
     * @param SwitchSyntheticTaskStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SwitchSyntheticTaskStatusResponse
     */
    public function switchSyntheticTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->switchStatus)) {
            $query['SwitchStatus'] = $request->switchStatus;
        }
        if (!Utils::isUnset($request->taskIds)) {
            $query['TaskIds'] = $request->taskIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchSyntheticTaskStatus',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchSyntheticTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchSyntheticTaskStatusRequest $request
     *
     * @return SwitchSyntheticTaskStatusResponse
     */
    public function switchSyntheticTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchSyntheticTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param SyncRecordingRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SyncRecordingRulesResponse
     */
    public function syncRecordingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->targetClusters)) {
            $query['TargetClusters'] = $request->targetClusters;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncRecordingRules',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncRecordingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncRecordingRulesRequest $request
     *
     * @return SyncRecordingRulesResponse
     */
    public function syncRecordingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncRecordingRulesWithOptions($request, $runtime);
    }

    /**
     * @param TurnOnSecondSwitchRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return TurnOnSecondSwitchResponse
     */
    public function turnOnSecondSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TurnOnSecondSwitch',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TurnOnSecondSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TurnOnSecondSwitchRequest $request
     *
     * @return TurnOnSecondSwitchResponse
     */
    public function turnOnSecondSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->turnOnSecondSwitchWithOptions($request, $runtime);
    }

    /**
     * @param UninstallManagedPrometheusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UninstallManagedPrometheusResponse
     */
    public function uninstallManagedPrometheusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UninstallManagedPrometheus',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UninstallManagedPrometheusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UninstallManagedPrometheusRequest $request
     *
     * @return UninstallManagedPrometheusResponse
     */
    public function uninstallManagedPrometheus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallManagedPrometheusWithOptions($request, $runtime);
    }

    /**
     * @param UninstallPromClusterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UninstallPromClusterResponse
     */
    public function uninstallPromClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UninstallPromCluster',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UninstallPromClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UninstallPromClusterRequest $request
     *
     * @return UninstallPromClusterResponse
     */
    public function uninstallPromCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallPromClusterWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAlertContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAlertContactResponse
     */
    public function updateAlertContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->dingRobotWebhookUrl)) {
            $query['DingRobotWebhookUrl'] = $request->dingRobotWebhookUrl;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->phoneNum)) {
            $query['PhoneNum'] = $request->phoneNum;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->systemNoc)) {
            $query['SystemNoc'] = $request->systemNoc;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlertContact',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAlertContactRequest $request
     *
     * @return UpdateAlertContactResponse
     */
    public function updateAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertContactWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAlertContactGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAlertContactGroupResponse
     */
    public function updateAlertContactGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupId)) {
            $query['ContactGroupId'] = $request->contactGroupId;
        }
        if (!Utils::isUnset($request->contactGroupName)) {
            $query['ContactGroupName'] = $request->contactGroupName;
        }
        if (!Utils::isUnset($request->contactIds)) {
            $query['ContactIds'] = $request->contactIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlertContactGroup',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAlertContactGroupRequest $request
     *
     * @return UpdateAlertContactGroupResponse
     */
    public function updateAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAlertRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAlertRuleResponse
     */
    public function updateAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->contactGroupIds)) {
            $query['ContactGroupIds'] = $request->contactGroupIds;
        }
        if (!Utils::isUnset($request->isAutoStart)) {
            $query['IsAutoStart'] = $request->isAutoStart;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templageAlertConfig)) {
            $query['TemplageAlertConfig'] = $request->templageAlertConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlertRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAlertRuleRequest $request
     *
     * @return UpdateAlertRuleResponse
     */
    public function updateAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDispatchRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDispatchRuleResponse
     */
    public function updateDispatchRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dispatchRule)) {
            $query['DispatchRule'] = $request->dispatchRule;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDispatchRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDispatchRuleRequest $request
     *
     * @return UpdateDispatchRuleResponse
     */
    public function updateDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIntegrationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateIntegrationResponse
     */
    public function updateIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiEndpoint)) {
            $body['ApiEndpoint'] = $request->apiEndpoint;
        }
        if (!Utils::isUnset($request->autoRecover)) {
            $body['AutoRecover'] = $request->autoRecover;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->duplicateKey)) {
            $body['DuplicateKey'] = $request->duplicateKey;
        }
        if (!Utils::isUnset($request->extendedFieldRedefineRules)) {
            $body['ExtendedFieldRedefineRules'] = $request->extendedFieldRedefineRules;
        }
        if (!Utils::isUnset($request->fieldRedefineRules)) {
            $body['FieldRedefineRules'] = $request->fieldRedefineRules;
        }
        if (!Utils::isUnset($request->initiativeRecoverField)) {
            $body['InitiativeRecoverField'] = $request->initiativeRecoverField;
        }
        if (!Utils::isUnset($request->initiativeRecoverValue)) {
            $body['InitiativeRecoverValue'] = $request->initiativeRecoverValue;
        }
        if (!Utils::isUnset($request->integrationId)) {
            $body['IntegrationId'] = $request->integrationId;
        }
        if (!Utils::isUnset($request->integrationName)) {
            $body['IntegrationName'] = $request->integrationName;
        }
        if (!Utils::isUnset($request->integrationProductType)) {
            $body['IntegrationProductType'] = $request->integrationProductType;
        }
        if (!Utils::isUnset($request->liveness)) {
            $body['Liveness'] = $request->liveness;
        }
        if (!Utils::isUnset($request->recoverTime)) {
            $body['RecoverTime'] = $request->recoverTime;
        }
        if (!Utils::isUnset($request->shortToken)) {
            $body['ShortToken'] = $request->shortToken;
        }
        if (!Utils::isUnset($request->stat)) {
            $body['Stat'] = $request->stat;
        }
        if (!Utils::isUnset($request->state)) {
            $body['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateIntegration',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIntegrationRequest $request
     *
     * @return UpdateIntegrationResponse
     */
    public function updateIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIntegrationWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePrometheusAlertRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdatePrometheusAlertRuleResponse
     */
    public function updatePrometheusAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->alertName)) {
            $query['AlertName'] = $request->alertName;
        }
        if (!Utils::isUnset($request->annotations)) {
            $query['Annotations'] = $request->annotations;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dispatchRuleId)) {
            $query['DispatchRuleId'] = $request->dispatchRuleId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->expression)) {
            $query['Expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->notifyType)) {
            $query['NotifyType'] = $request->notifyType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePrometheusAlertRule',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePrometheusAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePrometheusAlertRuleRequest $request
     *
     * @return UpdatePrometheusAlertRuleResponse
     */
    public function updatePrometheusAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrometheusAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWebhookRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateWebhookResponse
     */
    public function updateWebhookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->body)) {
            $query['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->httpHeaders)) {
            $query['HttpHeaders'] = $request->httpHeaders;
        }
        if (!Utils::isUnset($request->httpParams)) {
            $query['HttpParams'] = $request->httpParams;
        }
        if (!Utils::isUnset($request->method)) {
            $query['Method'] = $request->method;
        }
        if (!Utils::isUnset($request->recoverBody)) {
            $query['RecoverBody'] = $request->recoverBody;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWebhook',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWebhookRequest $request
     *
     * @return UpdateWebhookResponse
     */
    public function updateWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWebhookWithOptions($request, $runtime);
    }

    /**
     * @param UploadRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return UploadResponse
     */
    public function uploadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->edition)) {
            $query['Edition'] = $request->edition;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $body = [];
        if (!Utils::isUnset($request->file)) {
            $body['File'] = $request->file;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Upload',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadRequest $request
     *
     * @return UploadResponse
     */
    public function upload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadWithOptions($request, $runtime);
    }
}
