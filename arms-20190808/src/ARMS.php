<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddRecordingRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddRecordingRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddTagToFlinkClusterRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddTagToFlinkClusterResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AppendInstancesToPrometheusGlobalViewRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AppendInstancesToPrometheusGlobalViewResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ApplyScenarioRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ApplyScenarioResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ApplyScenarioShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\BindPrometheusGrafanaInstanceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\BindPrometheusGrafanaInstanceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\BlockAlarmNotificationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\BlockAlarmNotificationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ChangeAlarmSeverityRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ChangeAlarmSeverityResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckCommercialStatusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckCommercialStatusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckServiceStatusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CheckServiceStatusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ClaimAlarmRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ClaimAlarmResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CloseAlarmRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CloseAlarmResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ConfigAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ConfigAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateEnvCustomJobRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateEnvCustomJobResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateEnvironmentRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateEnvironmentResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateEnvPodMonitorRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateEnvPodMonitorResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateEnvServiceMonitorRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateEnvServiceMonitorResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateGrafanaWorkspaceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateGrafanaWorkspaceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateGrafanaWorkspaceShrinkRequest;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreatePrometheusInstanceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreatePrometheusInstanceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreatePrometheusMonitoringRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreatePrometheusMonitoringResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRumAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRumAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRumAppShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRumUploadFileUrlRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRumUploadFileUrlResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateWebhookRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateWebhookResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DelAuthTokenRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DelAuthTokenResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAddonReleaseRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAddonReleaseResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAppListRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteAppListResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteCmsExporterRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteCmsExporterResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteEnvCustomJobRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteEnvCustomJobResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteEnvironmentFeatureRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteEnvironmentFeatureResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteEnvironmentRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteEnvironmentResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteEnvPodMonitorRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteEnvPodMonitorResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteEnvServiceMonitorRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteEnvServiceMonitorResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteEventBridgeIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteEventBridgeIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteGrafanaResourceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteGrafanaResourceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteGrafanaWorkspaceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteGrafanaWorkspaceResponse;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeletePrometheusIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeletePrometheusIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeletePrometheusMonitoringRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeletePrometheusMonitoringResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteRetcodeAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteRetcodeAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteRumAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteRumAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteRumUploadFileRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteRumUploadFileResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteScenarioRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteScenarioResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteSilencePolicyRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteSilencePolicyResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteSourceMapRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteSourceMapResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteSourceMapShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteSyntheticTaskRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteSyntheticTaskResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTimingSyntheticTaskRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTimingSyntheticTaskResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteTraceAppShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteWebhookContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeleteWebhookContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonMetricsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonMetricsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonReleaseRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonReleaseResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvCustomJobRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvCustomJobResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvPodMonitorRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvPodMonitorResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvServiceMonitorRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvServiceMonitorResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeIMRobotsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeIMRobotsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribePrometheusAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribePrometheusAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeTraceLicenseKeyRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeTraceLicenseKeyResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeWebhookContactsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeWebhookContactsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DoInsightsActionRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DoInsightsActionResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\EnableMetricRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\EnableMetricResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAgentDownloadUrlRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAgentDownloadUrlResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAgentDownloadUrlV2Request;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAgentDownloadUrlV2Response;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAppApiByPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAppApiByPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAppJVMConfigRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAppJVMConfigResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAuthTokenRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAuthTokenResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetCloudClusterAllUrlRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetCloudClusterAllUrlResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetClusterAllUrlRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetClusterAllUrlResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetCommercialStatusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetCommercialStatusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetExploreUrlRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetExploreUrlResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetGrafanaWorkspaceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetGrafanaWorkspaceResponse;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusInstanceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusInstanceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusMonitoringRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusMonitoringResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRecordingRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRecordingRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeAppByPidRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeAppByPidResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeDataByQueryRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeDataByQueryResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeLogstoreRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeLogstoreResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeShareUrlRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRetcodeShareUrlResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppsShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumDataForPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumDataForPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumExceptionStackRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumExceptionStackResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumOcuStatisticDataRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumOcuStatisticDataResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumOcuStatisticDataShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumUploadFilesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumUploadFilesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSourceMapInfoRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSourceMapInfoResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticMonitorsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticMonitorsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticMonitorsShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskListRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskListResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskMonitorsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskMonitorsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceAppConfigRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceAppConfigResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportAppAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ImportAppAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\InitEnvironmentRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\InitEnvironmentResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\InstallAddonRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\InstallAddonResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\InstallCmsExporterRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\InstallCmsExporterResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\InstallEnvironmentFeatureRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\InstallEnvironmentFeatureResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\InstallManagedPrometheusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\InstallManagedPrometheusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListActivatedAlertsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListActivatedAlertsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonReleasesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonReleasesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponse;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvCustomJobsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvCustomJobsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAddonsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAddonsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAlertRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAlertRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentDashboardsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentDashboardsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentFeaturesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentFeaturesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentKubeResourcesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentKubeResourcesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentKubeResourcesShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentMetricTargetsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentMetricTargetsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvPodMonitorsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvPodMonitorsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvServiceMonitorsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvServiceMonitorsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEscalationPoliciesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEscalationPoliciesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEventBridgeIntegrationsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEventBridgeIntegrationsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListGrafanaWorkspaceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListGrafanaWorkspaceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListGrafanaWorkspaceShrinkRequest;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusInstanceByTagAndResourceGroupIdRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusInstanceByTagAndResourceGroupIdResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusInstancesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusInstancesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusMonitoringRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusMonitoringResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListRetcodeAppsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListRetcodeAppsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListScenarioRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListScenarioResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSilencePoliciesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSilencePoliciesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSyntheticDetailRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSyntheticDetailResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSyntheticDetailShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListTimingSyntheticTasksRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListTimingSyntheticTasksResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListTimingSyntheticTasksShrinkRequest;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryAppMetadataRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryAppMetadataResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryAppTopologyRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryAppTopologyResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryAppTopologyShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryCommercialUsageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryCommercialUsageResponse;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\RestartEnvironmentFeatureRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\RestartEnvironmentFeatureResponse;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\StartTimingSyntheticTaskRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StartTimingSyntheticTaskResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StartTimingSyntheticTaskShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StopAlertRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StopAlertResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StopTimingSyntheticTaskRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StopTimingSyntheticTaskResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\StopTimingSyntheticTaskShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SwitchSyntheticTaskStatusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SwitchSyntheticTaskStatusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SyncRecordingRulesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SyncRecordingRulesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\TagResourcesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\TagResourcesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UninstallManagedPrometheusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UninstallManagedPrometheusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UninstallPromClusterRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UninstallPromClusterResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactGroupRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactGroupResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertContactResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateDispatchRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateDispatchRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateEnvCustomJobRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateEnvCustomJobResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateEnvironmentRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateEnvironmentResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateEnvPodMonitorRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateEnvPodMonitorResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateEnvServiceMonitorRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateEnvServiceMonitorResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateGrafanaWorkspaceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateGrafanaWorkspaceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateGrafanaWorkspaceVersionRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateGrafanaWorkspaceVersionResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateMetricDropRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateMetricDropResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusAlertRuleRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusAlertRuleResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusGlobalViewRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusGlobalViewResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusInstanceRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusInstanceResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusMonitoringRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusMonitoringResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusMonitoringStatusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusMonitoringStatusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateRumAppRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateRumAppResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateRumFileStatusRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateRumFileStatusResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskShrinkRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateWebhookRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateWebhookResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpgradeAddonReleaseRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpgradeAddonReleaseResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpgradeEnvironmentFeatureRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpgradeEnvironmentFeatureResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UploadRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UploadResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ARMS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
        $this->_endpointMap        = [
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Adds data sources to a global aggregation instance in Prometheus Service.
     *
     * @param request - AddAliClusterIdsToPrometheusGlobalViewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddAliClusterIdsToPrometheusGlobalViewResponse
     *
     * @param AddAliClusterIdsToPrometheusGlobalViewRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return AddAliClusterIdsToPrometheusGlobalViewResponse
     */
    public function addAliClusterIdsToPrometheusGlobalViewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterIds) {
            @$query['ClusterIds'] = $request->clusterIds;
        }

        if (null !== $request->globalViewClusterId) {
            @$query['GlobalViewClusterId'] = $request->globalViewClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddAliClusterIdsToPrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddAliClusterIdsToPrometheusGlobalViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds data sources to a global aggregation instance in Prometheus Service.
     *
     * @param request - AddAliClusterIdsToPrometheusGlobalViewRequest
     * @returns AddAliClusterIdsToPrometheusGlobalViewResponse
     *
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
     * Integrates the dashboard of Prometheus Service.
     *
     * @param request - AddGrafanaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddGrafanaResponse
     *
     * @param AddGrafanaRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddGrafanaResponse
     */
    public function addGrafanaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->integration) {
            @$query['Integration'] = $request->integration;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddGrafanaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddGrafanaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Integrates the dashboard of Prometheus Service.
     *
     * @param request - AddGrafanaRequest
     * @returns AddGrafanaResponse
     *
     * @param AddGrafanaRequest $request
     *
     * @return AddGrafanaResponse
     */
    public function addGrafana($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGrafanaWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * Integrates the dashboard and collection rules of Prometheus Service.
     *
     * @deprecated openAPI AddIntegration is deprecated, please use ARMS::2019-08-08::InstallAddon instead
     *
     * @param request - AddIntegrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddIntegrationResponse
     *
     * @param AddIntegrationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddIntegrationResponse
     */
    public function addIntegrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->integration) {
            @$query['Integration'] = $request->integration;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddIntegrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * Integrates the dashboard and collection rules of Prometheus Service.
     *
     * @deprecated openAPI AddIntegration is deprecated, please use ARMS::2019-08-08::InstallAddon instead
     *
     * @param request - AddIntegrationRequest
     * @returns AddIntegrationResponse
     *
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
     * Adds a global aggregation instance in Prometheus Service.
     *
     * @param request - AddPrometheusGlobalViewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddPrometheusGlobalViewResponse
     *
     * @param AddPrometheusGlobalViewRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddPrometheusGlobalViewResponse
     */
    public function addPrometheusGlobalViewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusters) {
            @$query['Clusters'] = $request->clusters;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddPrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddPrometheusGlobalViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a global aggregation instance in Prometheus Service.
     *
     * @param request - AddPrometheusGlobalViewRequest
     * @returns AddPrometheusGlobalViewResponse
     *
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
     * Creates a global aggregation instance in Prometheus Service.
     *
     * @param request - AddPrometheusGlobalViewByAliClusterIdsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddPrometheusGlobalViewByAliClusterIdsResponse
     *
     * @param AddPrometheusGlobalViewByAliClusterIdsRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return AddPrometheusGlobalViewByAliClusterIdsResponse
     */
    public function addPrometheusGlobalViewByAliClusterIdsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterIds) {
            @$query['ClusterIds'] = $request->clusterIds;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddPrometheusGlobalViewByAliClusterIdsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddPrometheusGlobalViewByAliClusterIdsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a global aggregation instance in Prometheus Service.
     *
     * @param request - AddPrometheusGlobalViewByAliClusterIdsRequest
     * @returns AddPrometheusGlobalViewByAliClusterIdsResponse
     *
     * @param AddPrometheusGlobalViewByAliClusterIdsRequest $request
     *
     * @return AddPrometheusGlobalViewByAliClusterIdsResponse
     */
    public function addPrometheusGlobalViewByAliClusterIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPrometheusGlobalViewByAliClusterIdsWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * Creates a Prometheus instance for Remote Write.
     *
     * @deprecated openAPI AddPrometheusInstance is deprecated, please use ARMS::2019-08-08::CreatePrometheusInstance instead
     *
     * @param request - AddPrometheusInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddPrometheusInstanceResponse
     *
     * @param AddPrometheusInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddPrometheusInstanceResponse
     */
    public function addPrometheusInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddPrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddPrometheusInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * Creates a Prometheus instance for Remote Write.
     *
     * @deprecated openAPI AddPrometheusInstance is deprecated, please use ARMS::2019-08-08::CreatePrometheusInstance instead
     *
     * @param request - AddPrometheusInstanceRequest
     * @returns AddPrometheusInstanceResponse
     *
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
     * Adds an exporter to a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *
     * @param request - AddPrometheusIntegrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddPrometheusIntegrationResponse
     *
     * @param AddPrometheusIntegrationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddPrometheusIntegrationResponse
     */
    public function addPrometheusIntegrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->integrationType) {
            @$query['IntegrationType'] = $request->integrationType;
        }

        if (null !== $request->param) {
            @$query['Param'] = $request->param;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPrometheusIntegration',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddPrometheusIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddPrometheusIntegrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds an exporter to a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *
     * @param request - AddPrometheusIntegrationRequest
     * @returns AddPrometheusIntegrationResponse
     *
     * @param AddPrometheusIntegrationRequest $request
     *
     * @return AddPrometheusIntegrationResponse
     */
    public function addPrometheusIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPrometheusIntegrationWithOptions($request, $runtime);
    }

    /**
     * Creates or updates a recording rule of Managed Service for Prometheus.
     *
     * @param request - AddRecordingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddRecordingRuleResponse
     *
     * @param AddRecordingRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddRecordingRuleResponse
     */
    public function addRecordingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->ruleYaml) {
            @$query['RuleYaml'] = $request->ruleYaml;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddRecordingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddRecordingRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or updates a recording rule of Managed Service for Prometheus.
     *
     * @param request - AddRecordingRuleRequest
     * @returns AddRecordingRuleResponse
     *
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
     * Attaches the workspace ID and workspace name tags to the Prometheus instance corresponding to a Flink workspace.
     *
     * @param request - AddTagToFlinkClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddTagToFlinkClusterResponse
     *
     * @param AddTagToFlinkClusterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddTagToFlinkClusterResponse
     */
    public function addTagToFlinkClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->flinkWorkSpaceId) {
            @$query['FlinkWorkSpaceId'] = $request->flinkWorkSpaceId;
        }

        if (null !== $request->flinkWorkSpaceName) {
            @$query['FlinkWorkSpaceName'] = $request->flinkWorkSpaceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->targetUserId) {
            @$query['TargetUserId'] = $request->targetUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTagToFlinkCluster',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddTagToFlinkClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddTagToFlinkClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Attaches the workspace ID and workspace name tags to the Prometheus instance corresponding to a Flink workspace.
     *
     * @param request - AddTagToFlinkClusterRequest
     * @returns AddTagToFlinkClusterResponse
     *
     * @param AddTagToFlinkClusterRequest $request
     *
     * @return AddTagToFlinkClusterResponse
     */
    public function addTagToFlinkCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagToFlinkClusterWithOptions($request, $runtime);
    }

    /**
     * Adds a data source to a global aggregation instance.
     *
     * @param request - AppendInstancesToPrometheusGlobalViewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AppendInstancesToPrometheusGlobalViewResponse
     *
     * @param AppendInstancesToPrometheusGlobalViewRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return AppendInstancesToPrometheusGlobalViewResponse
     */
    public function appendInstancesToPrometheusGlobalViewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusters) {
            @$query['Clusters'] = $request->clusters;
        }

        if (null !== $request->globalViewClusterId) {
            @$query['GlobalViewClusterId'] = $request->globalViewClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AppendInstancesToPrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AppendInstancesToPrometheusGlobalViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a data source to a global aggregation instance.
     *
     * @param request - AppendInstancesToPrometheusGlobalViewRequest
     * @returns AppendInstancesToPrometheusGlobalViewResponse
     *
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
     * @param tmpReq - ApplyScenarioRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ApplyScenarioResponse
     *
     * @param ApplyScenarioRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ApplyScenarioResponse
     */
    public function applyScenarioWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ApplyScenarioShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->config) {
            $request->configShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->configShrink) {
            @$query['Config'] = $request->configShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scenario) {
            @$query['Scenario'] = $request->scenario;
        }

        if (null !== $request->sign) {
            @$query['Sign'] = $request->sign;
        }

        if (null !== $request->snDump) {
            @$query['SnDump'] = $request->snDump;
        }

        if (null !== $request->snForce) {
            @$query['SnForce'] = $request->snForce;
        }

        if (null !== $request->snStat) {
            @$query['SnStat'] = $request->snStat;
        }

        if (null !== $request->snTransfer) {
            @$query['SnTransfer'] = $request->snTransfer;
        }

        if (null !== $request->updateOption) {
            @$query['UpdateOption'] = $request->updateOption;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ApplyScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ApplyScenarioResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ApplyScenarioRequest
     * @returns ApplyScenarioResponse
     *
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
     * Binds a Grafana workspace to a Prometheus instance.
     *
     * @param request - BindPrometheusGrafanaInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns BindPrometheusGrafanaInstanceResponse
     *
     * @param BindPrometheusGrafanaInstanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return BindPrometheusGrafanaInstanceResponse
     */
    public function bindPrometheusGrafanaInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->grafanaInstanceId) {
            @$query['GrafanaInstanceId'] = $request->grafanaInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindPrometheusGrafanaInstance',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BindPrometheusGrafanaInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BindPrometheusGrafanaInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Binds a Grafana workspace to a Prometheus instance.
     *
     * @param request - BindPrometheusGrafanaInstanceRequest
     * @returns BindPrometheusGrafanaInstanceResponse
     *
     * @param BindPrometheusGrafanaInstanceRequest $request
     *
     * @return BindPrometheusGrafanaInstanceResponse
     */
    public function bindPrometheusGrafanaInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindPrometheusGrafanaInstanceWithOptions($request, $runtime);
    }

    /**
     * Blocks alert notifications in a time period.
     *
     * @param request - BlockAlarmNotificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns BlockAlarmNotificationResponse
     *
     * @param BlockAlarmNotificationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BlockAlarmNotificationResponse
     */
    public function blockAlarmNotificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmId) {
            @$query['AlarmId'] = $request->alarmId;
        }

        if (null !== $request->handlerId) {
            @$query['HandlerId'] = $request->handlerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'BlockAlarmNotification',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BlockAlarmNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BlockAlarmNotificationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Blocks alert notifications in a time period.
     *
     * @param request - BlockAlarmNotificationRequest
     * @returns BlockAlarmNotificationResponse
     *
     * @param BlockAlarmNotificationRequest $request
     *
     * @return BlockAlarmNotificationResponse
     */
    public function blockAlarmNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->blockAlarmNotificationWithOptions($request, $runtime);
    }

    /**
     * Modifies the severity level of an alert.
     *
     * @param request - ChangeAlarmSeverityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ChangeAlarmSeverityResponse
     *
     * @param ChangeAlarmSeverityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeAlarmSeverityResponse
     */
    public function changeAlarmSeverityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmId) {
            @$query['AlarmId'] = $request->alarmId;
        }

        if (null !== $request->handlerId) {
            @$query['HandlerId'] = $request->handlerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->severity) {
            @$query['Severity'] = $request->severity;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeAlarmSeverity',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ChangeAlarmSeverityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ChangeAlarmSeverityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the severity level of an alert.
     *
     * @param request - ChangeAlarmSeverityRequest
     * @returns ChangeAlarmSeverityResponse
     *
     * @param ChangeAlarmSeverityRequest $request
     *
     * @return ChangeAlarmSeverityResponse
     */
    public function changeAlarmSeverity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeAlarmSeverityWithOptions($request, $runtime);
    }

    /**
     * Moves a resource to a specific resource group.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ChangeResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Moves a resource to a specific resource group.
     *
     * @param request - ChangeResourceGroupRequest
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Checks whether Application Real-Time Monitoring Service (ARMS) is available for commercial use in a region.
     *
     * @remarks
     * You can call this operation to check whether ARMS is available for commercial use in a region.
     *
     * @param request - CheckCommercialStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CheckCommercialStatusResponse
     *
     * @param CheckCommercialStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckCommercialStatusResponse
     */
    public function checkCommercialStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckCommercialStatus',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CheckCommercialStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckCommercialStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Checks whether Application Real-Time Monitoring Service (ARMS) is available for commercial use in a region.
     *
     * @remarks
     * You can call this operation to check whether ARMS is available for commercial use in a region.
     *
     * @param request - CheckCommercialStatusRequest
     * @returns CheckCommercialStatusResponse
     *
     * @param CheckCommercialStatusRequest $request
     *
     * @return CheckCommercialStatusResponse
     */
    public function checkCommercialStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCommercialStatusWithOptions($request, $runtime);
    }

    /**
     * Checks the status of a service in the current cluster, such as whether the service is activated and whether the payment is overdue.
     *
     * @param request - CheckServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CheckServiceStatusResponse
     *
     * @param CheckServiceStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckServiceStatusResponse
     */
    public function checkServiceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->svcCode) {
            @$query['SvcCode'] = $request->svcCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CheckServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckServiceStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Checks the status of a service in the current cluster, such as whether the service is activated and whether the payment is overdue.
     *
     * @param request - CheckServiceStatusRequest
     * @returns CheckServiceStatusResponse
     *
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
     * Claims an alert. This operation can be used together with escalation policies. When multiple handlers are involved in alert management, each handler can call this operation to claim alerts. After an alert is claimed, the alert enters the Being Processed state.
     *
     * @param request - ClaimAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ClaimAlarmResponse
     *
     * @param ClaimAlarmRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ClaimAlarmResponse
     */
    public function claimAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmId) {
            @$query['AlarmId'] = $request->alarmId;
        }

        if (null !== $request->handlerId) {
            @$query['HandlerId'] = $request->handlerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClaimAlarm',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ClaimAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ClaimAlarmResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Claims an alert. This operation can be used together with escalation policies. When multiple handlers are involved in alert management, each handler can call this operation to claim alerts. After an alert is claimed, the alert enters the Being Processed state.
     *
     * @param request - ClaimAlarmRequest
     * @returns ClaimAlarmResponse
     *
     * @param ClaimAlarmRequest $request
     *
     * @return ClaimAlarmResponse
     */
    public function claimAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->claimAlarmWithOptions($request, $runtime);
    }

    /**
     * Disables an alert. Make sure that the alert is resolved before you disable the alert. If an alert is not resolved, new alerts can be triggered even after the alert is disabled.
     *
     * @param request - CloseAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CloseAlarmResponse
     *
     * @param CloseAlarmRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CloseAlarmResponse
     */
    public function closeAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmId) {
            @$query['AlarmId'] = $request->alarmId;
        }

        if (null !== $request->handlerId) {
            @$query['HandlerId'] = $request->handlerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->solution) {
            @$query['Solution'] = $request->solution;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseAlarm',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CloseAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CloseAlarmResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disables an alert. Make sure that the alert is resolved before you disable the alert. If an alert is not resolved, new alerts can be triggered even after the alert is disabled.
     *
     * @param request - CloseAlarmRequest
     * @returns CloseAlarmResponse
     *
     * @param CloseAlarmRequest $request
     *
     * @return CloseAlarmResponse
     */
    public function closeAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeAlarmWithOptions($request, $runtime);
    }

    /**
     * Turns on or off the main switch of an ARMS agent, or queries the status of the main switch.
     *
     * @remarks
     *
     * @param request - ConfigAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ConfigAppResponse
     *
     * @param ConfigAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ConfigAppResponse
     */
    public function configAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ConfigAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Turns on or off the main switch of an ARMS agent, or queries the status of the main switch.
     *
     * @remarks
     *
     * @param request - ConfigAppRequest
     * @returns ConfigAppResponse
     *
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
     * Creates an alert contact.
     *
     * @remarks
     * This operation is no longer maintained. To create or modify an alert contact, call the CreateOrUpdateContact operation provided by the new version of the Alert Management module.
     *
     * @param request - CreateAlertContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateAlertContactResponse
     *
     * @param CreateAlertContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAlertContactResponse
     */
    public function createAlertContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        if (null !== $request->dingRobotWebhookUrl) {
            @$query['DingRobotWebhookUrl'] = $request->dingRobotWebhookUrl;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->phoneNum) {
            @$query['PhoneNum'] = $request->phoneNum;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->systemNoc) {
            @$query['SystemNoc'] = $request->systemNoc;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAlertContactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an alert contact.
     *
     * @remarks
     * This operation is no longer maintained. To create or modify an alert contact, call the CreateOrUpdateContact operation provided by the new version of the Alert Management module.
     *
     * @param request - CreateAlertContactRequest
     * @returns CreateAlertContactResponse
     *
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
     * Creates an alert contact group.
     *
     * @remarks
     * The current API operation is no longer maintained. Call the CreateOrUpdateContactGroup operation of the new Alert Management module to create or modify alert contact groups.
     *
     * @param request - CreateAlertContactGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateAlertContactGroupResponse
     *
     * @param CreateAlertContactGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAlertContactGroupResponse
     */
    public function createAlertContactGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroupName) {
            @$query['ContactGroupName'] = $request->contactGroupName;
        }

        if (null !== $request->contactIds) {
            @$query['ContactIds'] = $request->contactIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAlertContactGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an alert contact group.
     *
     * @remarks
     * The current API operation is no longer maintained. Call the CreateOrUpdateContactGroup operation of the new Alert Management module to create or modify alert contact groups.
     *
     * @param request - CreateAlertContactGroupRequest
     * @returns CreateAlertContactGroupResponse
     *
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
     * Creates a dispatch policy.
     *
     * @param request - CreateDispatchRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDispatchRuleResponse
     *
     * @param CreateDispatchRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDispatchRuleResponse
     */
    public function createDispatchRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dispatchRule) {
            @$query['DispatchRule'] = $request->dispatchRule;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDispatchRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a dispatch policy.
     *
     * @param request - CreateDispatchRuleRequest
     * @returns CreateDispatchRuleResponse
     *
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
     * Creates a custom job for an environment.
     *
     * @param request - CreateEnvCustomJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateEnvCustomJobResponse
     *
     * @param CreateEnvCustomJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateEnvCustomJobResponse
     */
    public function createEnvCustomJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->customJobName) {
            @$query['CustomJobName'] = $request->customJobName;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->configYaml) {
            @$body['ConfigYaml'] = $request->configYaml;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEnvCustomJob',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateEnvCustomJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEnvCustomJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a custom job for an environment.
     *
     * @param request - CreateEnvCustomJobRequest
     * @returns CreateEnvCustomJobResponse
     *
     * @param CreateEnvCustomJobRequest $request
     *
     * @return CreateEnvCustomJobResponse
     */
    public function createEnvCustomJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnvCustomJobWithOptions($request, $runtime);
    }

    /**
     * Creates a PodMonitor for an environment.
     *
     * @param request - CreateEnvPodMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateEnvPodMonitorResponse
     *
     * @param CreateEnvPodMonitorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateEnvPodMonitorResponse
     */
    public function createEnvPodMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->configYaml) {
            @$body['ConfigYaml'] = $request->configYaml;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEnvPodMonitor',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateEnvPodMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEnvPodMonitorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a PodMonitor for an environment.
     *
     * @param request - CreateEnvPodMonitorRequest
     * @returns CreateEnvPodMonitorResponse
     *
     * @param CreateEnvPodMonitorRequest $request
     *
     * @return CreateEnvPodMonitorResponse
     */
    public function createEnvPodMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnvPodMonitorWithOptions($request, $runtime);
    }

    /**
     * Creates a ServiceMonitor for an environment.
     *
     * @param request - CreateEnvServiceMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateEnvServiceMonitorResponse
     *
     * @param CreateEnvServiceMonitorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateEnvServiceMonitorResponse
     */
    public function createEnvServiceMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->configYaml) {
            @$body['ConfigYaml'] = $request->configYaml;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEnvServiceMonitor',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateEnvServiceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEnvServiceMonitorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a ServiceMonitor for an environment.
     *
     * @param request - CreateEnvServiceMonitorRequest
     * @returns CreateEnvServiceMonitorResponse
     *
     * @param CreateEnvServiceMonitorRequest $request
     *
     * @return CreateEnvServiceMonitorResponse
     */
    public function createEnvServiceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnvServiceMonitorWithOptions($request, $runtime);
    }

    /**
     * Creates an environment instance.
     *
     * @param request - CreateEnvironmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateEnvironmentResponse
     *
     * @param CreateEnvironmentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEnvironmentResponse
     */
    public function createEnvironmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->bindResourceId) {
            @$query['BindResourceId'] = $request->bindResourceId;
        }

        if (null !== $request->environmentName) {
            @$query['EnvironmentName'] = $request->environmentName;
        }

        if (null !== $request->environmentSubType) {
            @$query['EnvironmentSubType'] = $request->environmentSubType;
        }

        if (null !== $request->environmentType) {
            @$query['EnvironmentType'] = $request->environmentType;
        }

        if (null !== $request->feePackage) {
            @$query['FeePackage'] = $request->feePackage;
        }

        if (null !== $request->grafanaWorkspaceId) {
            @$query['GrafanaWorkspaceId'] = $request->grafanaWorkspaceId;
        }

        if (null !== $request->initEnvironment) {
            @$query['InitEnvironment'] = $request->initEnvironment;
        }

        if (null !== $request->managedType) {
            @$query['ManagedType'] = $request->managedType;
        }

        if (null !== $request->prometheusInstanceId) {
            @$query['PrometheusInstanceId'] = $request->prometheusInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEnvironment',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEnvironmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an environment instance.
     *
     * @param request - CreateEnvironmentRequest
     * @returns CreateEnvironmentResponse
     *
     * @param CreateEnvironmentRequest $request
     *
     * @return CreateEnvironmentResponse
     */
    public function createEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnvironmentWithOptions($request, $runtime);
    }

    /**
     * Creates a workspace in Managed Service for Grafana.
     *
     * @remarks
     * Before you call the operation, make sure that you have learned about the billing methods and [pricing](https://www.alibabacloud.com/help/zh/grafana/product-overview/billing-4?spm=a2c4g.11186623.0.0.14c2d253B3SDbt) of Managed Service for Grafana.
     * >
     * *   To create workspaces, you must complete real-name verification.
     * *   Regular users can create workspaces only in Managed Service for Grafana Developer Edition, Pro Edition, and Advanced Edition. `These editions charge fees.`
     * *   Internal users can create workspaces only in Managed Service for Grafana Beta Edition and Standard Edition. `These editions do not charge fees.`
     *
     * @param tmpReq - CreateGrafanaWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateGrafanaWorkspaceResponse
     *
     * @param CreateGrafanaWorkspaceRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateGrafanaWorkspaceResponse
     */
    public function createGrafanaWorkspaceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateGrafanaWorkspaceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->accountNumber) {
            @$query['AccountNumber'] = $request->accountNumber;
        }

        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->customAccountNumber) {
            @$query['CustomAccountNumber'] = $request->customAccountNumber;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->grafanaVersion) {
            @$query['GrafanaVersion'] = $request->grafanaVersion;
        }

        if (null !== $request->grafanaWorkspaceEdition) {
            @$query['GrafanaWorkspaceEdition'] = $request->grafanaWorkspaceEdition;
        }

        if (null !== $request->grafanaWorkspaceName) {
            @$query['GrafanaWorkspaceName'] = $request->grafanaWorkspaceName;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGrafanaWorkspace',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateGrafanaWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateGrafanaWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a workspace in Managed Service for Grafana.
     *
     * @remarks
     * Before you call the operation, make sure that you have learned about the billing methods and [pricing](https://www.alibabacloud.com/help/zh/grafana/product-overview/billing-4?spm=a2c4g.11186623.0.0.14c2d253B3SDbt) of Managed Service for Grafana.
     * >
     * *   To create workspaces, you must complete real-name verification.
     * *   Regular users can create workspaces only in Managed Service for Grafana Developer Edition, Pro Edition, and Advanced Edition. `These editions charge fees.`
     * *   Internal users can create workspaces only in Managed Service for Grafana Beta Edition and Standard Edition. `These editions do not charge fees.`
     *
     * @param request - CreateGrafanaWorkspaceRequest
     * @returns CreateGrafanaWorkspaceResponse
     *
     * @param CreateGrafanaWorkspaceRequest $request
     *
     * @return CreateGrafanaWorkspaceResponse
     */
    public function createGrafanaWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGrafanaWorkspaceWithOptions($request, $runtime);
    }

    /**
     * Creates an alert integration.
     *
     * @param request - CreateIntegrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateIntegrationResponse
     *
     * @param CreateIntegrationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateIntegrationResponse
     */
    public function createIntegrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->autoRecover) {
            @$body['AutoRecover'] = $request->autoRecover;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->integrationName) {
            @$body['IntegrationName'] = $request->integrationName;
        }

        if (null !== $request->integrationProductType) {
            @$body['IntegrationProductType'] = $request->integrationProductType;
        }

        if (null !== $request->recoverTime) {
            @$body['RecoverTime'] = $request->recoverTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateIntegrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an alert integration.
     *
     * @param request - CreateIntegrationRequest
     * @returns CreateIntegrationResponse
     *
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
     * Creates or modifies an alert rule.
     *
     * @param request - CreateOrUpdateAlertRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateOrUpdateAlertRuleResponse
     *
     * @param CreateOrUpdateAlertRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateOrUpdateAlertRuleResponse
     */
    public function createOrUpdateAlertRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertCheckType) {
            @$body['AlertCheckType'] = $request->alertCheckType;
        }

        if (null !== $request->alertGroup) {
            @$body['AlertGroup'] = $request->alertGroup;
        }

        if (null !== $request->alertId) {
            @$body['AlertId'] = $request->alertId;
        }

        if (null !== $request->alertName) {
            @$body['AlertName'] = $request->alertName;
        }

        if (null !== $request->alertPiplines) {
            @$body['AlertPiplines'] = $request->alertPiplines;
        }

        if (null !== $request->alertRuleContent) {
            @$body['AlertRuleContent'] = $request->alertRuleContent;
        }

        if (null !== $request->alertStatus) {
            @$body['AlertStatus'] = $request->alertStatus;
        }

        if (null !== $request->alertType) {
            @$body['AlertType'] = $request->alertType;
        }

        if (null !== $request->annotations) {
            @$body['Annotations'] = $request->annotations;
        }

        if (null !== $request->autoAddNewApplication) {
            @$body['AutoAddNewApplication'] = $request->autoAddNewApplication;
        }

        if (null !== $request->autoAddTargetConfig) {
            @$body['AutoAddTargetConfig'] = $request->autoAddTargetConfig;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dataConfig) {
            @$body['DataConfig'] = $request->dataConfig;
        }

        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->filters) {
            @$body['Filters'] = $request->filters;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->level) {
            @$body['Level'] = $request->level;
        }

        if (null !== $request->markTags) {
            @$body['MarkTags'] = $request->markTags;
        }

        if (null !== $request->message) {
            @$body['Message'] = $request->message;
        }

        if (null !== $request->metricsKey) {
            @$body['MetricsKey'] = $request->metricsKey;
        }

        if (null !== $request->metricsType) {
            @$body['MetricsType'] = $request->metricsType;
        }

        if (null !== $request->notice) {
            @$body['Notice'] = $request->notice;
        }

        if (null !== $request->notifyMode) {
            @$body['NotifyMode'] = $request->notifyMode;
        }

        if (null !== $request->notifyStrategy) {
            @$body['NotifyStrategy'] = $request->notifyStrategy;
        }

        if (null !== $request->pids) {
            @$body['Pids'] = $request->pids;
        }

        if (null !== $request->product) {
            @$body['Product'] = $request->product;
        }

        if (null !== $request->promQL) {
            @$body['PromQL'] = $request->promQL;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOrUpdateAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrUpdateAlertRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or modifies an alert rule.
     *
     * @param request - CreateOrUpdateAlertRuleRequest
     * @returns CreateOrUpdateAlertRuleResponse
     *
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
     * Creates or modifies an alert contact.
     *
     * @param request - CreateOrUpdateContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateOrUpdateContactResponse
     *
     * @param CreateOrUpdateContactRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateOrUpdateContactResponse
     */
    public function createOrUpdateContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dingRobotUrl) {
            @$query['DingRobotUrl'] = $request->dingRobotUrl;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $body = [];
        if (null !== $request->contactId) {
            @$body['ContactId'] = $request->contactId;
        }

        if (null !== $request->contactName) {
            @$body['ContactName'] = $request->contactName;
        }

        if (null !== $request->corpUserId) {
            @$body['CorpUserId'] = $request->corpUserId;
        }

        if (null !== $request->email) {
            @$body['Email'] = $request->email;
        }

        if (null !== $request->isEmailVerify) {
            @$body['IsEmailVerify'] = $request->isEmailVerify;
        }

        if (null !== $request->phone) {
            @$body['Phone'] = $request->phone;
        }

        if (null !== $request->reissueSendNotice) {
            @$body['ReissueSendNotice'] = $request->reissueSendNotice;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOrUpdateContactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrUpdateContactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or modifies an alert contact.
     *
     * @param request - CreateOrUpdateContactRequest
     * @returns CreateOrUpdateContactResponse
     *
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
     * Creates or modifies an alert contact group.
     *
     * @param request - CreateOrUpdateContactGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateOrUpdateContactGroupResponse
     *
     * @param CreateOrUpdateContactGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateOrUpdateContactGroupResponse
     */
    public function createOrUpdateContactGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->contactGroupId) {
            @$body['ContactGroupId'] = $request->contactGroupId;
        }

        if (null !== $request->contactGroupName) {
            @$body['ContactGroupName'] = $request->contactGroupName;
        }

        if (null !== $request->contactIds) {
            @$body['ContactIds'] = $request->contactIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOrUpdateContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrUpdateContactGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or modifies an alert contact group.
     *
     * @param request - CreateOrUpdateContactGroupRequest
     * @returns CreateOrUpdateContactGroupResponse
     *
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
     * Creates or modifies an EventBridge integration.
     *
     * @param request - CreateOrUpdateEventBridgeIntegrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateOrUpdateEventBridgeIntegrationResponse
     *
     * @param CreateOrUpdateEventBridgeIntegrationRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateOrUpdateEventBridgeIntegrationResponse
     */
    public function createOrUpdateEventBridgeIntegrationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessKey) {
            @$body['AccessKey'] = $request->accessKey;
        }

        if (null !== $request->accessSecret) {
            @$body['AccessSecret'] = $request->accessSecret;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->endpoint) {
            @$body['Endpoint'] = $request->endpoint;
        }

        if (null !== $request->eventBusName) {
            @$body['EventBusName'] = $request->eventBusName;
        }

        if (null !== $request->eventBusRegionId) {
            @$body['EventBusRegionId'] = $request->eventBusRegionId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->source) {
            @$body['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOrUpdateEventBridgeIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrUpdateEventBridgeIntegrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or modifies an EventBridge integration.
     *
     * @param request - CreateOrUpdateEventBridgeIntegrationRequest
     * @returns CreateOrUpdateEventBridgeIntegrationResponse
     *
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
     * Creates or updates an IM chatbot.
     *
     * @param request - CreateOrUpdateIMRobotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateOrUpdateIMRobotResponse
     *
     * @param CreateOrUpdateIMRobotRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateOrUpdateIMRobotResponse
     */
    public function createOrUpdateIMRobotWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cardTemplate) {
            @$body['CardTemplate'] = $request->cardTemplate;
        }

        if (null !== $request->dailyNoc) {
            @$body['DailyNoc'] = $request->dailyNoc;
        }

        if (null !== $request->dailyNocTime) {
            @$body['DailyNocTime'] = $request->dailyNocTime;
        }

        if (null !== $request->dingSignKey) {
            @$body['DingSignKey'] = $request->dingSignKey;
        }

        if (null !== $request->enableOutgoing) {
            @$body['EnableOutgoing'] = $request->enableOutgoing;
        }

        if (null !== $request->robotAddress) {
            @$body['RobotAddress'] = $request->robotAddress;
        }

        if (null !== $request->robotId) {
            @$body['RobotId'] = $request->robotId;
        }

        if (null !== $request->robotName) {
            @$body['RobotName'] = $request->robotName;
        }

        if (null !== $request->token) {
            @$body['Token'] = $request->token;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOrUpdateIMRobotResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrUpdateIMRobotResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or updates an IM chatbot.
     *
     * @param request - CreateOrUpdateIMRobotRequest
     * @returns CreateOrUpdateIMRobotResponse
     *
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
     * Creates or modifies a notification policy.
     *
     * @param request - CreateOrUpdateNotificationPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateOrUpdateNotificationPolicyResponse
     *
     * @param CreateOrUpdateNotificationPolicyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateOrUpdateNotificationPolicyResponse
     */
    public function createOrUpdateNotificationPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->directedMode) {
            @$body['DirectedMode'] = $request->directedMode;
        }

        if (null !== $request->escalationPolicyId) {
            @$body['EscalationPolicyId'] = $request->escalationPolicyId;
        }

        if (null !== $request->groupRule) {
            @$body['GroupRule'] = $request->groupRule;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->integrationId) {
            @$body['IntegrationId'] = $request->integrationId;
        }

        if (null !== $request->matchingRules) {
            @$body['MatchingRules'] = $request->matchingRules;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->notifyRule) {
            @$body['NotifyRule'] = $request->notifyRule;
        }

        if (null !== $request->notifyTemplate) {
            @$body['NotifyTemplate'] = $request->notifyTemplate;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->repeat) {
            @$body['Repeat'] = $request->repeat;
        }

        if (null !== $request->repeatInterval) {
            @$body['RepeatInterval'] = $request->repeatInterval;
        }

        if (null !== $request->sendRecoverMessage) {
            @$body['SendRecoverMessage'] = $request->sendRecoverMessage;
        }

        if (null !== $request->state) {
            @$body['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOrUpdateNotificationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrUpdateNotificationPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or modifies a notification policy.
     *
     * @param request - CreateOrUpdateNotificationPolicyRequest
     * @returns CreateOrUpdateNotificationPolicyResponse
     *
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
     * Creates or modifies a silence policy.
     *
     * @param request - CreateOrUpdateSilencePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateOrUpdateSilencePolicyResponse
     *
     * @param CreateOrUpdateSilencePolicyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateOrUpdateSilencePolicyResponse
     */
    public function createOrUpdateSilencePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->effectiveTimeType) {
            @$query['EffectiveTimeType'] = $request->effectiveTimeType;
        }

        if (null !== $request->timePeriod) {
            @$query['TimePeriod'] = $request->timePeriod;
        }

        if (null !== $request->timeSlots) {
            @$query['TimeSlots'] = $request->timeSlots;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->matchingRules) {
            @$body['MatchingRules'] = $request->matchingRules;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->state) {
            @$body['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOrUpdateSilencePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrUpdateSilencePolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or modifies a silence policy.
     *
     * @param request - CreateOrUpdateSilencePolicyRequest
     * @returns CreateOrUpdateSilencePolicyResponse
     *
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
     * Creates or modifies a webhook alert contact.
     *
     * @param request - CreateOrUpdateWebhookContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateOrUpdateWebhookContactResponse
     *
     * @param CreateOrUpdateWebhookContactRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateOrUpdateWebhookContactResponse
     */
    public function createOrUpdateWebhookContactWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bizHeaders) {
            @$body['BizHeaders'] = $request->bizHeaders;
        }

        if (null !== $request->bizParams) {
            @$body['BizParams'] = $request->bizParams;
        }

        if (null !== $request->body) {
            @$body['Body'] = $request->body;
        }

        if (null !== $request->method) {
            @$body['Method'] = $request->method;
        }

        if (null !== $request->recoverBody) {
            @$body['RecoverBody'] = $request->recoverBody;
        }

        if (null !== $request->url) {
            @$body['Url'] = $request->url;
        }

        if (null !== $request->webhookId) {
            @$body['WebhookId'] = $request->webhookId;
        }

        if (null !== $request->webhookName) {
            @$body['WebhookName'] = $request->webhookName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOrUpdateWebhookContactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrUpdateWebhookContactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or modifies a webhook alert contact.
     *
     * @param request - CreateOrUpdateWebhookContactRequest
     * @returns CreateOrUpdateWebhookContactResponse
     *
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
     * Creates an alert rule.
     *
     * @param request - CreatePrometheusAlertRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreatePrometheusAlertRuleResponse
     *
     * @param CreatePrometheusAlertRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreatePrometheusAlertRuleResponse
     */
    public function createPrometheusAlertRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertName) {
            @$query['AlertName'] = $request->alertName;
        }

        if (null !== $request->annotations) {
            @$query['Annotations'] = $request->annotations;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dispatchRuleId) {
            @$query['DispatchRuleId'] = $request->dispatchRuleId;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->expression) {
            @$query['Expression'] = $request->expression;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->notifyType) {
            @$query['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePrometheusAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePrometheusAlertRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an alert rule.
     *
     * @param request - CreatePrometheusAlertRuleRequest
     * @returns CreatePrometheusAlertRuleResponse
     *
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
     * Creates a Prometheus instance.
     *
     * @param request - CreatePrometheusInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreatePrometheusInstanceResponse
     *
     * @param CreatePrometheusInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreatePrometheusInstanceResponse
     */
    public function createPrometheusInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allSubClustersSuccess) {
            @$query['AllSubClustersSuccess'] = $request->allSubClustersSuccess;
        }

        if (null !== $request->archiveDuration) {
            @$query['ArchiveDuration'] = $request->archiveDuration;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->grafanaInstanceId) {
            @$query['GrafanaInstanceId'] = $request->grafanaInstanceId;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->subClustersJson) {
            @$query['SubClustersJson'] = $request->subClustersJson;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePrometheusInstance',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePrometheusInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a Prometheus instance.
     *
     * @param request - CreatePrometheusInstanceRequest
     * @returns CreatePrometheusInstanceResponse
     *
     * @param CreatePrometheusInstanceRequest $request
     *
     * @return CreatePrometheusInstanceResponse
     */
    public function createPrometheusInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrometheusInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a monitoring configuration for a Prometheus instance.
     *
     * @param request - CreatePrometheusMonitoringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreatePrometheusMonitoringResponse
     *
     * @param CreatePrometheusMonitoringRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreatePrometheusMonitoringResponse
     */
    public function createPrometheusMonitoringWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $body = [];
        if (null !== $request->configYaml) {
            @$body['ConfigYaml'] = $request->configYaml;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePrometheusMonitoring',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePrometheusMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePrometheusMonitoringResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a monitoring configuration for a Prometheus instance.
     *
     * @param request - CreatePrometheusMonitoringRequest
     * @returns CreatePrometheusMonitoringResponse
     *
     * @param CreatePrometheusMonitoringRequest $request
     *
     * @return CreatePrometheusMonitoringResponse
     */
    public function createPrometheusMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrometheusMonitoringWithOptions($request, $runtime);
    }

    /**
     * Creates a Browser Monitoring task for an application.
     *
     * @param request - CreateRetcodeAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateRetcodeAppResponse
     *
     * @param CreateRetcodeAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRetcodeAppResponse
     */
    public function createRetcodeAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->retcodeAppName) {
            @$query['RetcodeAppName'] = $request->retcodeAppName;
        }

        if (null !== $request->retcodeAppType) {
            @$query['RetcodeAppType'] = $request->retcodeAppType;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRetcodeAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRetcodeAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a Browser Monitoring task for an application.
     *
     * @param request - CreateRetcodeAppRequest
     * @returns CreateRetcodeAppResponse
     *
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
     * Create a Real User Monitoring (RUM) application.
     *
     * @param tmpReq - CreateRumAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateRumAppResponse
     *
     * @param CreateRumAppRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateRumAppResponse
     */
    public function createRumAppWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateRumAppShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->appGroup) {
            @$query['AppGroup'] = $request->appGroup;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->nickName) {
            @$query['NickName'] = $request->nickName;
        }

        if (null !== $request->packageName) {
            @$query['PackageName'] = $request->packageName;
        }

        if (null !== $request->realRegionId) {
            @$query['RealRegionId'] = $request->realRegionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->siteType) {
            @$query['SiteType'] = $request->siteType;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        if (null !== $request->workspace) {
            @$query['Workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRumApp',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRumAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRumAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Create a Real User Monitoring (RUM) application.
     *
     * @param request - CreateRumAppRequest
     * @returns CreateRumAppResponse
     *
     * @param CreateRumAppRequest $request
     *
     * @return CreateRumAppResponse
     */
    public function createRumApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRumAppWithOptions($request, $runtime);
    }

    /**
     * Creates a file upload URL to upload SourceMap files, symbol table files, or dSYM files.
     *
     * @remarks
     * This operation returns a URL. You can upload files to the URL. For more information, see [Upload local files with signed URLs](https://help.aliyun.com/document_detail/2579659.html).
     *
     * @param request - CreateRumUploadFileUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateRumUploadFileUrlResponse
     *
     * @param CreateRumUploadFileUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateRumUploadFileUrlResponse
     */
    public function createRumUploadFileUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->contentType) {
            @$query['ContentType'] = $request->contentType;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sourcemapType) {
            @$query['SourcemapType'] = $request->sourcemapType;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRumUploadFileUrl',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRumUploadFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRumUploadFileUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a file upload URL to upload SourceMap files, symbol table files, or dSYM files.
     *
     * @remarks
     * This operation returns a URL. You can upload files to the URL. For more information, see [Upload local files with signed URLs](https://help.aliyun.com/document_detail/2579659.html).
     *
     * @param request - CreateRumUploadFileUrlRequest
     * @returns CreateRumUploadFileUrlResponse
     *
     * @param CreateRumUploadFileUrlRequest $request
     *
     * @return CreateRumUploadFileUrlResponse
     */
    public function createRumUploadFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRumUploadFileUrlWithOptions($request, $runtime);
    }

    /**
     * Creates or updates a synthetic monitoring task.
     *
     * @param tmpReq - CreateSyntheticTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateSyntheticTaskResponse
     *
     * @param CreateSyntheticTaskRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSyntheticTaskResponse
     */
    public function createSyntheticTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSyntheticTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->commonParam) {
            $request->commonParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->commonParam, 'CommonParam', 'json');
        }

        if (null !== $tmpReq->download) {
            $request->downloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->download, 'Download', 'json');
        }

        if (null !== $tmpReq->extendInterval) {
            $request->extendIntervalShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extendInterval, 'ExtendInterval', 'json');
        }

        if (null !== $tmpReq->monitorList) {
            $request->monitorListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->monitorList, 'MonitorList', 'json');
        }

        if (null !== $tmpReq->navigation) {
            $request->navigationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->navigation, 'Navigation', 'json');
        }

        if (null !== $tmpReq->net) {
            $request->netShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->net, 'Net', 'json');
        }

        if (null !== $tmpReq->protocol) {
            $request->protocolShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->protocol, 'Protocol', 'json');
        }

        $query = [];
        if (null !== $request->commonParamShrink) {
            @$query['CommonParam'] = $request->commonParamShrink;
        }

        if (null !== $request->downloadShrink) {
            @$query['Download'] = $request->downloadShrink;
        }

        if (null !== $request->extendIntervalShrink) {
            @$query['ExtendInterval'] = $request->extendIntervalShrink;
        }

        if (null !== $request->intervalTime) {
            @$query['IntervalTime'] = $request->intervalTime;
        }

        if (null !== $request->intervalType) {
            @$query['IntervalType'] = $request->intervalType;
        }

        if (null !== $request->ipType) {
            @$query['IpType'] = $request->ipType;
        }

        if (null !== $request->monitorListShrink) {
            @$query['MonitorList'] = $request->monitorListShrink;
        }

        if (null !== $request->navigationShrink) {
            @$query['Navigation'] = $request->navigationShrink;
        }

        if (null !== $request->netShrink) {
            @$query['Net'] = $request->netShrink;
        }

        if (null !== $request->protocolShrink) {
            @$query['Protocol'] = $request->protocolShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->updateTask) {
            @$query['UpdateTask'] = $request->updateTask;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSyntheticTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or updates a synthetic monitoring task.
     *
     * @param request - CreateSyntheticTaskRequest
     * @returns CreateSyntheticTaskResponse
     *
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
     * Creates a scheduled synthetic test task.
     *
     * @param tmpReq - CreateTimingSyntheticTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateTimingSyntheticTaskResponse
     *
     * @param CreateTimingSyntheticTaskRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateTimingSyntheticTaskResponse
     */
    public function createTimingSyntheticTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTimingSyntheticTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->availableAssertions) {
            $request->availableAssertionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->availableAssertions, 'AvailableAssertions', 'json');
        }

        if (null !== $tmpReq->commonSetting) {
            $request->commonSettingShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->commonSetting, 'CommonSetting', 'json');
        }

        if (null !== $tmpReq->customPeriod) {
            $request->customPeriodShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customPeriod, 'CustomPeriod', 'json');
        }

        if (null !== $tmpReq->monitorConf) {
            $request->monitorConfShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->monitorConf, 'MonitorConf', 'json');
        }

        if (null !== $tmpReq->monitors) {
            $request->monitorsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->monitors, 'Monitors', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->availableAssertionsShrink) {
            @$query['AvailableAssertions'] = $request->availableAssertionsShrink;
        }

        if (null !== $request->commonSettingShrink) {
            @$query['CommonSetting'] = $request->commonSettingShrink;
        }

        if (null !== $request->customPeriodShrink) {
            @$query['CustomPeriod'] = $request->customPeriodShrink;
        }

        if (null !== $request->frequency) {
            @$query['Frequency'] = $request->frequency;
        }

        if (null !== $request->monitorCategory) {
            @$query['MonitorCategory'] = $request->monitorCategory;
        }

        if (null !== $request->monitorConfShrink) {
            @$query['MonitorConf'] = $request->monitorConfShrink;
        }

        if (null !== $request->monitorsShrink) {
            @$query['Monitors'] = $request->monitorsShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTimingSyntheticTask',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTimingSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTimingSyntheticTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a scheduled synthetic test task.
     *
     * @param request - CreateTimingSyntheticTaskRequest
     * @returns CreateTimingSyntheticTaskResponse
     *
     * @param CreateTimingSyntheticTaskRequest $request
     *
     * @return CreateTimingSyntheticTaskResponse
     */
    public function createTimingSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTimingSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * Adds a contact for webhook alerts.
     *
     * @param request - CreateWebhookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateWebhookResponse
     *
     * @param CreateWebhookRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateWebhookResponse
     */
    public function createWebhookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->body) {
            @$query['Body'] = $request->body;
        }

        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        if (null !== $request->httpHeaders) {
            @$query['HttpHeaders'] = $request->httpHeaders;
        }

        if (null !== $request->httpParams) {
            @$query['HttpParams'] = $request->httpParams;
        }

        if (null !== $request->method) {
            @$query['Method'] = $request->method;
        }

        if (null !== $request->recoverBody) {
            @$query['RecoverBody'] = $request->recoverBody;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateWebhookResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a contact for webhook alerts.
     *
     * @param request - CreateWebhookRequest
     * @returns CreateWebhookResponse
     *
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
     * Disables an authentication token.
     *
     * @param request - DelAuthTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DelAuthTokenResponse
     *
     * @param DelAuthTokenRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DelAuthTokenResponse
     */
    public function delAuthTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DelAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DelAuthTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disables an authentication token.
     *
     * @param request - DelAuthTokenRequest
     * @returns DelAuthTokenResponse
     *
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
     * Delete AddonRelease data by AddonRelease name.
     *
     * @param request - DeleteAddonReleaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteAddonReleaseResponse
     *
     * @param DeleteAddonReleaseRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAddonReleaseResponse
     */
    public function deleteAddonReleaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonName) {
            @$query['AddonName'] = $request->addonName;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->releaseName) {
            @$query['ReleaseName'] = $request->releaseName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAddonRelease',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAddonReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAddonReleaseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Delete AddonRelease data by AddonRelease name.
     *
     * @param request - DeleteAddonReleaseRequest
     * @returns DeleteAddonReleaseResponse
     *
     * @param DeleteAddonReleaseRequest $request
     *
     * @return DeleteAddonReleaseResponse
     */
    public function deleteAddonRelease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAddonReleaseWithOptions($request, $runtime);
    }

    /**
     * Deletes an DeleteAlertContact contact.
     *
     * @remarks
     *
     * @param request - DeleteAlertContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteAlertContactResponse
     *
     * @param DeleteAlertContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAlertContactResponse
     */
    public function deleteAlertContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAlertContactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an DeleteAlertContact contact.
     *
     * @remarks
     *
     * @param request - DeleteAlertContactRequest
     * @returns DeleteAlertContactResponse
     *
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
     * Deletes an DeleteAlertContactGroup contact group.
     *
     * @param request - DeleteAlertContactGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteAlertContactGroupResponse
     *
     * @param DeleteAlertContactGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAlertContactGroupResponse
     */
    public function deleteAlertContactGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroupId) {
            @$query['ContactGroupId'] = $request->contactGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAlertContactGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an DeleteAlertContactGroup contact group.
     *
     * @param request - DeleteAlertContactGroupRequest
     * @returns DeleteAlertContactGroupResponse
     *
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
     * Deletes an alert rule.
     *
     * @param request - DeleteAlertRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteAlertRuleResponse
     *
     * @param DeleteAlertRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAlertRuleResponse
     */
    public function deleteAlertRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertId) {
            @$query['AlertId'] = $request->alertId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAlertRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an alert rule.
     *
     * @param request - DeleteAlertRuleRequest
     * @returns DeleteAlertRuleResponse
     *
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
     * Deletes alert rules.
     *
     * @remarks
     * The current operation is no longer maintained. Call the DeleteAlertRule operation of Alert Management (New) to delete alert rules.
     *
     * @param request - DeleteAlertRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteAlertRulesResponse
     *
     * @param DeleteAlertRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteAlertRulesResponse
     */
    public function deleteAlertRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertIds) {
            @$query['AlertIds'] = $request->alertIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAlertRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes alert rules.
     *
     * @remarks
     * The current operation is no longer maintained. Call the DeleteAlertRule operation of Alert Management (New) to delete alert rules.
     *
     * @param request - DeleteAlertRulesRequest
     * @returns DeleteAlertRulesResponse
     *
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
     * Deletes multiple applications at a time based on the process IDs (PIDs).
     *
     * @param request - DeleteAppListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteAppListResponse
     *
     * @param DeleteAppListRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAppListResponse
     */
    public function deleteAppListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pids) {
            @$query['Pids'] = $request->pids;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppList',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAppListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAppListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes multiple applications at a time based on the process IDs (PIDs).
     *
     * @param request - DeleteAppListRequest
     * @returns DeleteAppListResponse
     *
     * @param DeleteAppListRequest $request
     *
     * @return DeleteAppListResponse
     */
    public function deleteAppList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppListWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * Releases a Prometheus instance for Alibaba Cloud services.
     *
     * @deprecated openAPI DeleteCmsExporter is deprecated, please use ARMS::2019-08-08::DeleteAddonRelease instead
     *
     * @param request - DeleteCmsExporterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteCmsExporterResponse
     *
     * @param DeleteCmsExporterRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCmsExporterResponse
     */
    public function deleteCmsExporterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCmsExporterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCmsExporterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * Releases a Prometheus instance for Alibaba Cloud services.
     *
     * @deprecated openAPI DeleteCmsExporter is deprecated, please use ARMS::2019-08-08::DeleteAddonRelease instead
     *
     * @param request - DeleteCmsExporterRequest
     * @returns DeleteCmsExporterResponse
     *
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
     * Deletes alert contacts.
     *
     * @param request - DeleteContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteContactResponse
     *
     * @param DeleteContactRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteContactResponse
     */
    public function deleteContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteContactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteContactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes alert contacts.
     *
     * @param request - DeleteContactRequest
     * @returns DeleteContactResponse
     *
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
     * Deletes an alert contact group.
     *
     * @param request - DeleteContactGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteContactGroupResponse
     *
     * @param DeleteContactGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteContactGroupResponse
     */
    public function deleteContactGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroupId) {
            @$query['ContactGroupId'] = $request->contactGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteContactGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an alert contact group.
     *
     * @param request - DeleteContactGroupRequest
     * @returns DeleteContactGroupResponse
     *
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
     * Deletes the dispatch policy of a specified ID.
     *
     * @param request - DeleteDispatchRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDispatchRuleResponse
     *
     * @param DeleteDispatchRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDispatchRuleResponse
     */
    public function deleteDispatchRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDispatchRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes the dispatch policy of a specified ID.
     *
     * @param request - DeleteDispatchRuleRequest
     * @returns DeleteDispatchRuleResponse
     *
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
     * Deletes a custom job for an environment.
     *
     * @param request - DeleteEnvCustomJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteEnvCustomJobResponse
     *
     * @param DeleteEnvCustomJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteEnvCustomJobResponse
     */
    public function deleteEnvCustomJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customJobName) {
            @$query['CustomJobName'] = $request->customJobName;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEnvCustomJob',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEnvCustomJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEnvCustomJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a custom job for an environment.
     *
     * @param request - DeleteEnvCustomJobRequest
     * @returns DeleteEnvCustomJobResponse
     *
     * @param DeleteEnvCustomJobRequest $request
     *
     * @return DeleteEnvCustomJobResponse
     */
    public function deleteEnvCustomJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnvCustomJobWithOptions($request, $runtime);
    }

    /**
     * Deletes the PodMonitor of an environment.
     *
     * @param request - DeleteEnvPodMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteEnvPodMonitorResponse
     *
     * @param DeleteEnvPodMonitorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteEnvPodMonitorResponse
     */
    public function deleteEnvPodMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->podMonitorName) {
            @$query['PodMonitorName'] = $request->podMonitorName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEnvPodMonitor',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEnvPodMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEnvPodMonitorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes the PodMonitor of an environment.
     *
     * @param request - DeleteEnvPodMonitorRequest
     * @returns DeleteEnvPodMonitorResponse
     *
     * @param DeleteEnvPodMonitorRequest $request
     *
     * @return DeleteEnvPodMonitorResponse
     */
    public function deleteEnvPodMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnvPodMonitorWithOptions($request, $runtime);
    }

    /**
     * Deletes the ServiceMonitor of an environment.
     *
     * @param request - DeleteEnvServiceMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteEnvServiceMonitorResponse
     *
     * @param DeleteEnvServiceMonitorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteEnvServiceMonitorResponse
     */
    public function deleteEnvServiceMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceMonitorName) {
            @$query['ServiceMonitorName'] = $request->serviceMonitorName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEnvServiceMonitor',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEnvServiceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEnvServiceMonitorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes the ServiceMonitor of an environment.
     *
     * @param request - DeleteEnvServiceMonitorRequest
     * @returns DeleteEnvServiceMonitorResponse
     *
     * @param DeleteEnvServiceMonitorRequest $request
     *
     * @return DeleteEnvServiceMonitorResponse
     */
    public function deleteEnvServiceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnvServiceMonitorWithOptions($request, $runtime);
    }

    /**
     * Deletes an environment instance.
     *
     * @param request - DeleteEnvironmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteEnvironmentResponse
     *
     * @param DeleteEnvironmentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deletePromInstance) {
            @$query['DeletePromInstance'] = $request->deletePromInstance;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEnvironment',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEnvironmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an environment instance.
     *
     * @param request - DeleteEnvironmentRequest
     * @returns DeleteEnvironmentResponse
     *
     * @param DeleteEnvironmentRequest $request
     *
     * @return DeleteEnvironmentResponse
     */
    public function deleteEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnvironmentWithOptions($request, $runtime);
    }

    /**
     * Deletes a feature.
     *
     * @param request - DeleteEnvironmentFeatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteEnvironmentFeatureResponse
     *
     * @param DeleteEnvironmentFeatureRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteEnvironmentFeatureResponse
     */
    public function deleteEnvironmentFeatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->featureName) {
            @$query['FeatureName'] = $request->featureName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEnvironmentFeature',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEnvironmentFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEnvironmentFeatureResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a feature.
     *
     * @param request - DeleteEnvironmentFeatureRequest
     * @returns DeleteEnvironmentFeatureResponse
     *
     * @param DeleteEnvironmentFeatureRequest $request
     *
     * @return DeleteEnvironmentFeatureResponse
     */
    public function deleteEnvironmentFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnvironmentFeatureWithOptions($request, $runtime);
    }

    /**
     * Deletes an EventBridge integration.
     *
     * @param request - DeleteEventBridgeIntegrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteEventBridgeIntegrationResponse
     *
     * @param DeleteEventBridgeIntegrationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteEventBridgeIntegrationResponse
     */
    public function deleteEventBridgeIntegrationWithOptions($request, $runtime)
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEventBridgeIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEventBridgeIntegrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an EventBridge integration.
     *
     * @param request - DeleteEventBridgeIntegrationRequest
     * @returns DeleteEventBridgeIntegrationResponse
     *
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
     * Deletes Grafana dashboard resources from a cluster monitored by Prometheus Service.
     *
     * @param request - DeleteGrafanaResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteGrafanaResourceResponse
     *
     * @param DeleteGrafanaResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteGrafanaResourceResponse
     */
    public function deleteGrafanaResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$body['ClusterName'] = $request->clusterName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGrafanaResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGrafanaResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes Grafana dashboard resources from a cluster monitored by Prometheus Service.
     *
     * @param request - DeleteGrafanaResourceRequest
     * @returns DeleteGrafanaResourceResponse
     *
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
     * Deletes a Managed Service for Prometheus workspace.
     *
     * @remarks
     *   You can delete workspaces only in Managed Service for Prometheus Beta Edition, which is `free of charge`.
     * *   You cannot delete workspaces in Managed Service for Prometheus Developer Edition, Pro Edition, and Advanced Edition. You can go to the [User Center](https://usercenter2.aliyun.com/refund/refund) to unsubscribe from workspaces.
     *
     * @param request - DeleteGrafanaWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteGrafanaWorkspaceResponse
     *
     * @param DeleteGrafanaWorkspaceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteGrafanaWorkspaceResponse
     */
    public function deleteGrafanaWorkspaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->grafanaWorkspaceId) {
            @$query['GrafanaWorkspaceId'] = $request->grafanaWorkspaceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGrafanaWorkspace',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGrafanaWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGrafanaWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a Managed Service for Prometheus workspace.
     *
     * @remarks
     *   You can delete workspaces only in Managed Service for Prometheus Beta Edition, which is `free of charge`.
     * *   You cannot delete workspaces in Managed Service for Prometheus Developer Edition, Pro Edition, and Advanced Edition. You can go to the [User Center](https://usercenter2.aliyun.com/refund/refund) to unsubscribe from workspaces.
     *
     * @param request - DeleteGrafanaWorkspaceRequest
     * @returns DeleteGrafanaWorkspaceResponse
     *
     * @param DeleteGrafanaWorkspaceRequest $request
     *
     * @return DeleteGrafanaWorkspaceResponse
     */
    public function deleteGrafanaWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGrafanaWorkspaceWithOptions($request, $runtime);
    }

    /**
     * Deletes an instant messaging (IM) chatbot.
     *
     * @param request - DeleteIMRobotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteIMRobotResponse
     *
     * @param DeleteIMRobotRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteIMRobotResponse
     */
    public function deleteIMRobotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->robotId) {
            @$query['RobotId'] = $request->robotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteIMRobotResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteIMRobotResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an instant messaging (IM) chatbot.
     *
     * @param request - DeleteIMRobotRequest
     * @returns DeleteIMRobotResponse
     *
     * @param DeleteIMRobotRequest $request
     *
     * @return DeleteIMRobotResponse
     */
    public function deleteIMRobot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIMRobotWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * Deletes collection rules from an integration.
     *
     * @deprecated openAPI DeleteIntegration is deprecated, please use ARMS::2019-08-08::DeleteAddonRelease instead
     *
     * @param request - DeleteIntegrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteIntegrationResponse
     *
     * @param DeleteIntegrationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteIntegrationResponse
     */
    public function deleteIntegrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->integration) {
            @$query['Integration'] = $request->integration;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteIntegrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * Deletes collection rules from an integration.
     *
     * @deprecated openAPI DeleteIntegration is deprecated, please use ARMS::2019-08-08::DeleteAddonRelease instead
     *
     * @param request - DeleteIntegrationRequest
     * @returns DeleteIntegrationResponse
     *
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
     * Deletes an alert integration.
     *
     * @param request - DeleteIntegrationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteIntegrationsResponse
     *
     * @param DeleteIntegrationsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteIntegrationsResponse
     */
    public function deleteIntegrationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteIntegrationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteIntegrationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an alert integration.
     *
     * @param request - DeleteIntegrationsRequest
     * @returns DeleteIntegrationsResponse
     *
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
     * Deletes a notification policy based on its ID.
     *
     * @param request - DeleteNotificationPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteNotificationPolicyResponse
     *
     * @param DeleteNotificationPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteNotificationPolicyResponse
     */
    public function deleteNotificationPolicyWithOptions($request, $runtime)
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteNotificationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteNotificationPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a notification policy based on its ID.
     *
     * @param request - DeleteNotificationPolicyRequest
     * @returns DeleteNotificationPolicyResponse
     *
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
     * Deletes an alert rule of Prometheus Service.
     *
     * @param request - DeletePrometheusAlertRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeletePrometheusAlertRuleResponse
     *
     * @param DeletePrometheusAlertRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeletePrometheusAlertRuleResponse
     */
    public function deletePrometheusAlertRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertId) {
            @$query['AlertId'] = $request->alertId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeletePrometheusAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePrometheusAlertRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an alert rule of Prometheus Service.
     *
     * @param request - DeletePrometheusAlertRuleRequest
     * @returns DeletePrometheusAlertRuleResponse
     *
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
     * Deletes a global aggregation instance from Prometheus Service.
     *
     * @param request - DeletePrometheusGlobalViewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeletePrometheusGlobalViewResponse
     *
     * @param DeletePrometheusGlobalViewRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeletePrometheusGlobalViewResponse
     */
    public function deletePrometheusGlobalViewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalViewClusterId) {
            @$query['GlobalViewClusterId'] = $request->globalViewClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeletePrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePrometheusGlobalViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a global aggregation instance from Prometheus Service.
     *
     * @param request - DeletePrometheusGlobalViewRequest
     * @returns DeletePrometheusGlobalViewResponse
     *
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
     * Deletes an exporter from a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *
     * @param request - DeletePrometheusIntegrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeletePrometheusIntegrationResponse
     *
     * @param DeletePrometheusIntegrationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeletePrometheusIntegrationResponse
     */
    public function deletePrometheusIntegrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->integrationType) {
            @$query['IntegrationType'] = $request->integrationType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePrometheusIntegration',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeletePrometheusIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePrometheusIntegrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an exporter from a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *
     * @param request - DeletePrometheusIntegrationRequest
     * @returns DeletePrometheusIntegrationResponse
     *
     * @param DeletePrometheusIntegrationRequest $request
     *
     * @return DeletePrometheusIntegrationResponse
     */
    public function deletePrometheusIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrometheusIntegrationWithOptions($request, $runtime);
    }

    /**
     * Deletes the monitoring configuration of a Prometheus instance.
     *
     * @param request - DeletePrometheusMonitoringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeletePrometheusMonitoringResponse
     *
     * @param DeletePrometheusMonitoringRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeletePrometheusMonitoringResponse
     */
    public function deletePrometheusMonitoringWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->monitoringName) {
            @$query['MonitoringName'] = $request->monitoringName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePrometheusMonitoring',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeletePrometheusMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePrometheusMonitoringResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes the monitoring configuration of a Prometheus instance.
     *
     * @param request - DeletePrometheusMonitoringRequest
     * @returns DeletePrometheusMonitoringResponse
     *
     * @param DeletePrometheusMonitoringRequest $request
     *
     * @return DeletePrometheusMonitoringResponse
     */
    public function deletePrometheusMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrometheusMonitoringWithOptions($request, $runtime);
    }

    /**
     * Deletes a Browser Monitoring task.
     *
     * @param request - DeleteRetcodeAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteRetcodeAppResponse
     *
     * @param DeleteRetcodeAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRetcodeAppResponse
     */
    public function deleteRetcodeAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteRetcodeAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRetcodeAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a Browser Monitoring task.
     *
     * @param request - DeleteRetcodeAppRequest
     * @returns DeleteRetcodeAppResponse
     *
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
     * Deletes a RUM application.
     *
     * @param request - DeleteRumAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteRumAppResponse
     *
     * @param DeleteRumAppRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteRumAppResponse
     */
    public function deleteRumAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appGroup) {
            @$query['AppGroup'] = $request->appGroup;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->realRegionId) {
            @$query['RealRegionId'] = $request->realRegionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRumApp',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteRumAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRumAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a RUM application.
     *
     * @param request - DeleteRumAppRequest
     * @returns DeleteRumAppResponse
     *
     * @param DeleteRumAppRequest $request
     *
     * @return DeleteRumAppResponse
     */
    public function deleteRumApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRumAppWithOptions($request, $runtime);
    }

    /**
     * Deletes a file such as a symbol table or SourceMap.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - DeleteRumUploadFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteRumUploadFileResponse
     *
     * @param DeleteRumUploadFileRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteRumUploadFileResponse
     */
    public function deleteRumUploadFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->batchItems) {
            @$query['BatchItems'] = $request->batchItems;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRumUploadFile',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteRumUploadFileResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRumUploadFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a file such as a symbol table or SourceMap.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - DeleteRumUploadFileRequest
     * @returns DeleteRumUploadFileResponse
     *
     * @param DeleteRumUploadFileRequest $request
     *
     * @return DeleteRumUploadFileResponse
     */
    public function deleteRumUploadFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRumUploadFileWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteScenarioRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteScenarioResponse
     *
     * @param DeleteScenarioRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteScenarioResponse
     */
    public function deleteScenarioWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scenarioId) {
            @$query['ScenarioId'] = $request->scenarioId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteScenarioResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteScenarioRequest
     * @returns DeleteScenarioResponse
     *
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
     * The ID of the silence policy.
     *
     * @param request - DeleteSilencePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteSilencePolicyResponse
     *
     * @param DeleteSilencePolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSilencePolicyResponse
     */
    public function deleteSilencePolicyWithOptions($request, $runtime)
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSilencePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSilencePolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * The ID of the silence policy.
     *
     * @param request - DeleteSilencePolicyRequest
     * @returns DeleteSilencePolicyResponse
     *
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
     * Deletes the SourceMap files uploaded in Browser Monitoring.
     *
     * @param tmpReq - DeleteSourceMapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteSourceMapResponse
     *
     * @param DeleteSourceMapRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSourceMapResponse
     */
    public function deleteSourceMapWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteSourceMapShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fidList) {
            $request->fidListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fidList, 'FidList', 'json');
        }

        $query = [];
        if (null !== $request->fidListShrink) {
            @$query['FidList'] = $request->fidListShrink;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSourceMapResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSourceMapResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes the SourceMap files uploaded in Browser Monitoring.
     *
     * @param request - DeleteSourceMapRequest
     * @returns DeleteSourceMapResponse
     *
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
     * Deletes scheduled synthetic monitoring tasks.
     *
     * @param request - DeleteSyntheticTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteSyntheticTaskResponse
     *
     * @param DeleteSyntheticTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSyntheticTaskResponse
     */
    public function deleteSyntheticTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSyntheticTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes scheduled synthetic monitoring tasks.
     *
     * @param request - DeleteSyntheticTaskRequest
     * @returns DeleteSyntheticTaskResponse
     *
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
     * Deletes a scheduled synthetic monitoring task.
     *
     * @param request - DeleteTimingSyntheticTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteTimingSyntheticTaskResponse
     *
     * @param DeleteTimingSyntheticTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteTimingSyntheticTaskResponse
     */
    public function deleteTimingSyntheticTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTimingSyntheticTask',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTimingSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTimingSyntheticTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a scheduled synthetic monitoring task.
     *
     * @param request - DeleteTimingSyntheticTaskRequest
     * @returns DeleteTimingSyntheticTaskResponse
     *
     * @param DeleteTimingSyntheticTaskRequest $request
     *
     * @return DeleteTimingSyntheticTaskResponse
     */
    public function deleteTimingSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTimingSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * Deletes an application based on a specified process identifier (PID) and application type.
     *
     * @param tmpReq - DeleteTraceAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteTraceAppResponse
     *
     * @param DeleteTraceAppRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTraceAppResponse
     */
    public function deleteTraceAppWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteTraceAppShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deleteReason) {
            $request->deleteReasonShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deleteReason, 'DeleteReason', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->deleteReasonShrink) {
            @$query['DeleteReason'] = $request->deleteReasonShrink;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTraceAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTraceAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an application based on a specified process identifier (PID) and application type.
     *
     * @param request - DeleteTraceAppRequest
     * @returns DeleteTraceAppResponse
     *
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
     * Deletes a webhook alert contact.
     *
     * @param request - DeleteWebhookContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteWebhookContactResponse
     *
     * @param DeleteWebhookContactRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteWebhookContactResponse
     */
    public function deleteWebhookContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->webhookId) {
            @$query['WebhookId'] = $request->webhookId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteWebhookContactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteWebhookContactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a webhook alert contact.
     *
     * @param request - DeleteWebhookContactRequest
     * @returns DeleteWebhookContactResponse
     *
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
     * Queries the metric details of a component.
     *
     * @param request - DescribeAddonMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeAddonMetricsResponse
     *
     * @param DescribeAddonMetricsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAddonMetricsResponse
     */
    public function describeAddonMetricsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonVersion) {
            @$query['AddonVersion'] = $request->addonVersion;
        }

        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->environmentType) {
            @$query['EnvironmentType'] = $request->environmentType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAddonMetrics',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAddonMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAddonMetricsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the metric details of a component.
     *
     * @param request - DescribeAddonMetricsRequest
     * @returns DescribeAddonMetricsResponse
     *
     * @param DescribeAddonMetricsRequest $request
     *
     * @return DescribeAddonMetricsResponse
     */
    public function describeAddonMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAddonMetricsWithOptions($request, $runtime);
    }

    /**
     * Queries the release information of an add-on by name.
     *
     * @param request - DescribeAddonReleaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeAddonReleaseResponse
     *
     * @param DescribeAddonReleaseRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAddonReleaseResponse
     */
    public function describeAddonReleaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->releaseName) {
            @$query['ReleaseName'] = $request->releaseName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAddonRelease',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAddonReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAddonReleaseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the release information of an add-on by name.
     *
     * @param request - DescribeAddonReleaseRequest
     * @returns DescribeAddonReleaseResponse
     *
     * @param DescribeAddonReleaseRequest $request
     *
     * @return DescribeAddonReleaseResponse
     */
    public function describeAddonRelease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAddonReleaseWithOptions($request, $runtime);
    }

    /**
     * Queries an alert contact group.
     *
     * @param request - DescribeContactGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeContactGroupsResponse
     *
     * @param DescribeContactGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeContactGroupsResponse
     */
    public function describeContactGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroupName) {
            @$query['ContactGroupName'] = $request->contactGroupName;
        }

        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->isDetail) {
            @$query['IsDetail'] = $request->isDetail;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeContactGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeContactGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries an alert contact group.
     *
     * @param request - DescribeContactGroupsRequest
     * @returns DescribeContactGroupsResponse
     *
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
     * Queries alert contacts.
     *
     * @param request - DescribeContactsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeContactsResponse
     *
     * @param DescribeContactsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeContactsResponse
     */
    public function describeContactsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactIds) {
            @$query['ContactIds'] = $request->contactIds;
        }

        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeContactsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeContactsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries alert contacts.
     *
     * @param request - DescribeContactsRequest
     * @returns DescribeContactsResponse
     *
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
     * Queries the information about a dispatch policy.
     *
     * @param request - DescribeDispatchRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeDispatchRuleResponse
     *
     * @param DescribeDispatchRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDispatchRuleResponse
     */
    public function describeDispatchRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDispatchRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a dispatch policy.
     *
     * @param request - DescribeDispatchRuleRequest
     * @returns DescribeDispatchRuleResponse
     *
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
     * Queries the details of a custom job for an environment.
     *
     * @param request - DescribeEnvCustomJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeEnvCustomJobResponse
     *
     * @param DescribeEnvCustomJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEnvCustomJobResponse
     */
    public function describeEnvCustomJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customJobName) {
            @$query['CustomJobName'] = $request->customJobName;
        }

        if (null !== $request->encryptYaml) {
            @$query['EncryptYaml'] = $request->encryptYaml;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnvCustomJob',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEnvCustomJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEnvCustomJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a custom job for an environment.
     *
     * @param request - DescribeEnvCustomJobRequest
     * @returns DescribeEnvCustomJobResponse
     *
     * @param DescribeEnvCustomJobRequest $request
     *
     * @return DescribeEnvCustomJobResponse
     */
    public function describeEnvCustomJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnvCustomJobWithOptions($request, $runtime);
    }

    /**
     * Queries the PodMonitor details of an environment.
     *
     * @param request - DescribeEnvPodMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeEnvPodMonitorResponse
     *
     * @param DescribeEnvPodMonitorRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeEnvPodMonitorResponse
     */
    public function describeEnvPodMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->podMonitorName) {
            @$query['PodMonitorName'] = $request->podMonitorName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnvPodMonitor',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEnvPodMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEnvPodMonitorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the PodMonitor details of an environment.
     *
     * @param request - DescribeEnvPodMonitorRequest
     * @returns DescribeEnvPodMonitorResponse
     *
     * @param DescribeEnvPodMonitorRequest $request
     *
     * @return DescribeEnvPodMonitorResponse
     */
    public function describeEnvPodMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnvPodMonitorWithOptions($request, $runtime);
    }

    /**
     * Queries the ServiceMonitor details of an environment.
     *
     * @param request - DescribeEnvServiceMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeEnvServiceMonitorResponse
     *
     * @param DescribeEnvServiceMonitorRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEnvServiceMonitorResponse
     */
    public function describeEnvServiceMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceMonitorName) {
            @$query['ServiceMonitorName'] = $request->serviceMonitorName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnvServiceMonitor',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEnvServiceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEnvServiceMonitorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the ServiceMonitor details of an environment.
     *
     * @param request - DescribeEnvServiceMonitorRequest
     * @returns DescribeEnvServiceMonitorResponse
     *
     * @param DescribeEnvServiceMonitorRequest $request
     *
     * @return DescribeEnvServiceMonitorResponse
     */
    public function describeEnvServiceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnvServiceMonitorWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an environment.
     *
     * @param request - DescribeEnvironmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeEnvironmentResponse
     *
     * @param DescribeEnvironmentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeEnvironmentResponse
     */
    public function describeEnvironmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnvironment',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEnvironmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of an environment.
     *
     * @param request - DescribeEnvironmentRequest
     * @returns DescribeEnvironmentResponse
     *
     * @param DescribeEnvironmentRequest $request
     *
     * @return DescribeEnvironmentResponse
     */
    public function describeEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnvironmentWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a feature.
     *
     * @param request - DescribeEnvironmentFeatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeEnvironmentFeatureResponse
     *
     * @param DescribeEnvironmentFeatureRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeEnvironmentFeatureResponse
     */
    public function describeEnvironmentFeatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->featureName) {
            @$query['FeatureName'] = $request->featureName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnvironmentFeature',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEnvironmentFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEnvironmentFeatureResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a feature.
     *
     * @param request - DescribeEnvironmentFeatureRequest
     * @returns DescribeEnvironmentFeatureResponse
     *
     * @param DescribeEnvironmentFeatureRequest $request
     *
     * @return DescribeEnvironmentFeatureResponse
     */
    public function describeEnvironmentFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnvironmentFeatureWithOptions($request, $runtime);
    }

    /**
     * Queries instant messaging (IM) chatbots.
     *
     * @param request - DescribeIMRobotsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeIMRobotsResponse
     *
     * @param DescribeIMRobotsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeIMRobotsResponse
     */
    public function describeIMRobotsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->robotIds) {
            @$query['RobotIds'] = $request->robotIds;
        }

        if (null !== $request->robotName) {
            @$query['RobotName'] = $request->robotName;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeIMRobotsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeIMRobotsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries instant messaging (IM) chatbots.
     *
     * @param request - DescribeIMRobotsRequest
     * @returns DescribeIMRobotsResponse
     *
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
     * Queries the details about an alert rule for a Prometheus instance.
     *
     * @param request - DescribePrometheusAlertRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribePrometheusAlertRuleResponse
     *
     * @param DescribePrometheusAlertRuleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePrometheusAlertRuleResponse
     */
    public function describePrometheusAlertRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertId) {
            @$query['AlertId'] = $request->alertId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribePrometheusAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePrometheusAlertRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details about an alert rule for a Prometheus instance.
     *
     * @param request - DescribePrometheusAlertRuleRequest
     * @returns DescribePrometheusAlertRuleResponse
     *
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
     * Queries the license key.
     *
     * @param request - DescribeTraceLicenseKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeTraceLicenseKeyResponse
     *
     * @param DescribeTraceLicenseKeyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTraceLicenseKeyResponse
     */
    public function describeTraceLicenseKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeTraceLicenseKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTraceLicenseKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the license key.
     *
     * @param request - DescribeTraceLicenseKeyRequest
     * @returns DescribeTraceLicenseKeyResponse
     *
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
     * Queries the list of webhook alert contacts.
     *
     * @param request - DescribeWebhookContactsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeWebhookContactsResponse
     *
     * @param DescribeWebhookContactsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeWebhookContactsResponse
     */
    public function describeWebhookContactsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeWebhookContactsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeWebhookContactsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the list of webhook alert contacts.
     *
     * @param request - DescribeWebhookContactsRequest
     * @returns DescribeWebhookContactsResponse
     *
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
     * Performs the corresponding operation based on the specified module type.
     *
     * @param request - DoInsightsActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DoInsightsActionResponse
     *
     * @param DoInsightsActionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DoInsightsActionResponse
     */
    public function doInsightsActionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        if (null !== $request->module) {
            @$body['Module'] = $request->module;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DoInsightsAction',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DoInsightsActionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DoInsightsActionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Performs the corresponding operation based on the specified module type.
     *
     * @param request - DoInsightsActionRequest
     * @returns DoInsightsActionResponse
     *
     * @param DoInsightsActionRequest $request
     *
     * @return DoInsightsActionResponse
     */
    public function doInsightsAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doInsightsActionWithOptions($request, $runtime);
    }

    /**
     * Enables a discarded metric.
     *
     * @param request - EnableMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns EnableMetricResponse
     *
     * @param EnableMetricRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EnableMetricResponse
     */
    public function enableMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dropMetric) {
            @$query['DropMetric'] = $request->dropMetric;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableMetric',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableMetricResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableMetricResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables a discarded metric.
     *
     * @param request - EnableMetricRequest
     * @returns EnableMetricResponse
     *
     * @param EnableMetricRequest $request
     *
     * @return EnableMetricResponse
     */
    public function enableMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableMetricWithOptions($request, $runtime);
    }

    /**
     * Obtains the download URL of the Application Real-Time Monitoring Service (ARMS) agent.
     *
     * @param request - GetAgentDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAgentDownloadUrlResponse
     *
     * @param GetAgentDownloadUrlRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAgentDownloadUrlResponse
     */
    public function getAgentDownloadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAgentDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAgentDownloadUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the download URL of the Application Real-Time Monitoring Service (ARMS) agent.
     *
     * @param request - GetAgentDownloadUrlRequest
     * @returns GetAgentDownloadUrlResponse
     *
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
     * Obtains the download URL of the Application Real-Time Monitoring Service (ARMS) agent.
     *
     * @param request - GetAgentDownloadUrlV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAgentDownloadUrlV2Response
     *
     * @param GetAgentDownloadUrlV2Request $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAgentDownloadUrlV2Response
     */
    public function getAgentDownloadUrlV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentType) {
            @$query['AgentType'] = $request->agentType;
        }

        if (null !== $request->archType) {
            @$query['ArchType'] = $request->archType;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAgentDownloadUrlV2',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAgentDownloadUrlV2Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAgentDownloadUrlV2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the download URL of the Application Real-Time Monitoring Service (ARMS) agent.
     *
     * @param request - GetAgentDownloadUrlV2Request
     * @returns GetAgentDownloadUrlV2Response
     *
     * @param GetAgentDownloadUrlV2Request $request
     *
     * @return GetAgentDownloadUrlV2Response
     */
    public function getAgentDownloadUrlV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentDownloadUrlV2WithOptions($request, $runtime);
    }

    /**
     * Queries alert rules.
     *
     * @param request - GetAlertRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAlertRulesResponse
     *
     * @param GetAlertRulesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAlertRulesResponse
     */
    public function getAlertRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertIds) {
            @$query['AlertIds'] = $request->alertIds;
        }

        if (null !== $request->alertNames) {
            @$query['AlertNames'] = $request->alertNames;
        }

        if (null !== $request->alertStatus) {
            @$query['AlertStatus'] = $request->alertStatus;
        }

        if (null !== $request->alertType) {
            @$query['AlertType'] = $request->alertType;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAlertRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries alert rules.
     *
     * @param request - GetAlertRulesRequest
     * @returns GetAlertRulesResponse
     *
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
     * Queries the API operations of application monitoring by page.
     *
     * @param request - GetAppApiByPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAppApiByPageResponse
     *
     * @param GetAppApiByPageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAppApiByPageResponse
     */
    public function getAppApiByPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->intervalMills) {
            @$query['IntervalMills'] = $request->intervalMills;
        }

        if (null !== $request->PId) {
            @$query['PId'] = $request->PId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAppApiByPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAppApiByPageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the API operations of application monitoring by page.
     *
     * @param request - GetAppApiByPageRequest
     * @returns GetAppApiByPageResponse
     *
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
     * Obtain the JVM configuration information of each instance of the application.
     *
     * @param request - GetAppJVMConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAppJVMConfigResponse
     *
     * @param GetAppJVMConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAppJVMConfigResponse
     */
    public function getAppJVMConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppJVMConfig',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAppJVMConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAppJVMConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtain the JVM configuration information of each instance of the application.
     *
     * @param request - GetAppJVMConfigRequest
     * @returns GetAppJVMConfigResponse
     *
     * @param GetAppJVMConfigRequest $request
     *
     * @return GetAppJVMConfigResponse
     */
    public function getAppJVMConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppJVMConfigWithOptions($request, $runtime);
    }

    /**
     * Obtains an authentication token. When you connect a Container Service for Kubernetes (ACK) cluster to Prometheus Service over the Internet, you must use a token for authentication.
     *
     * @param request - GetAuthTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAuthTokenResponse
     *
     * @param GetAuthTokenRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAuthTokenResponse
     */
    public function getAuthTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAuthTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains an authentication token. When you connect a Container Service for Kubernetes (ACK) cluster to Prometheus Service over the Internet, you must use a token for authentication.
     *
     * @param request - GetAuthTokenRequest
     * @returns GetAuthTokenResponse
     *
     * @param GetAuthTokenRequest $request
     *
     * @return GetAuthTokenResponse
     */
    public function getAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthTokenWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * Queries the read and write URLs of a CloudMonitor instance, such as Pushgateway and Grafana URLs.
     *
     * @deprecated openAPI GetCloudClusterAllUrl is deprecated, please use ARMS::2019-08-08::GetRemoteWriteUrl instead
     *
     * @param request - GetCloudClusterAllUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetCloudClusterAllUrlResponse
     *
     * @param GetCloudClusterAllUrlRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetCloudClusterAllUrlResponse
     */
    public function getCloudClusterAllUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCloudClusterAllUrl',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCloudClusterAllUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCloudClusterAllUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * Queries the read and write URLs of a CloudMonitor instance, such as Pushgateway and Grafana URLs.
     *
     * @deprecated openAPI GetCloudClusterAllUrl is deprecated, please use ARMS::2019-08-08::GetRemoteWriteUrl instead
     *
     * @param request - GetCloudClusterAllUrlRequest
     * @returns GetCloudClusterAllUrlResponse
     *
     * @param GetCloudClusterAllUrlRequest $request
     *
     * @return GetCloudClusterAllUrlResponse
     */
    public function getCloudClusterAllUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCloudClusterAllUrlWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * Obtains all the URLs of a cluster, including remote read and write URLs, Pushgateway URLs, and Grafana URLs.
     *
     * @deprecated openAPI GetClusterAllUrl is deprecated, please use ARMS::2019-08-08::GetPrometheusInstance instead
     *
     * @param request - GetClusterAllUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetClusterAllUrlResponse
     *
     * @param GetClusterAllUrlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetClusterAllUrlResponse
     */
    public function getClusterAllUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetClusterAllUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClusterAllUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * Obtains all the URLs of a cluster, including remote read and write URLs, Pushgateway URLs, and Grafana URLs.
     *
     * @deprecated openAPI GetClusterAllUrl is deprecated, please use ARMS::2019-08-08::GetPrometheusInstance instead
     *
     * @param request - GetClusterAllUrlRequest
     * @returns GetClusterAllUrlResponse
     *
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
     * Queries whether the current account has activated the commercial edition of a service.
     *
     * @param request - GetCommercialStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetCommercialStatusResponse
     *
     * @param GetCommercialStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCommercialStatusResponse
     */
    public function getCommercialStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCommercialStatus',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCommercialStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCommercialStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries whether the current account has activated the commercial edition of a service.
     *
     * @param request - GetCommercialStatusRequest
     * @returns GetCommercialStatusResponse
     *
     * @param GetCommercialStatusRequest $request
     *
     * @return GetCommercialStatusResponse
     */
    public function getCommercialStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommercialStatusWithOptions($request, $runtime);
    }

    /**
     * Enables the Explore feature of Grafana.
     *
     * @param request - GetExploreUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetExploreUrlResponse
     *
     * @param GetExploreUrlRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetExploreUrlResponse
     */
    public function getExploreUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->expression) {
            @$query['Expression'] = $request->expression;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetExploreUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetExploreUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables the Explore feature of Grafana.
     *
     * @param request - GetExploreUrlRequest
     * @returns GetExploreUrlResponse
     *
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
     * Queries the information about a Grafana workspace.
     *
     * @remarks
     * Note: The list returned by this operation includes the workspaces of Developer Edition, Expert Edition, and Advanced Edition. The list does not include the workspaces of Shared Edition.
     *
     * @param request - GetGrafanaWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetGrafanaWorkspaceResponse
     *
     * @param GetGrafanaWorkspaceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetGrafanaWorkspaceResponse
     */
    public function getGrafanaWorkspaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->grafanaWorkspaceId) {
            @$query['GrafanaWorkspaceId'] = $request->grafanaWorkspaceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGrafanaWorkspace',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetGrafanaWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetGrafanaWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a Grafana workspace.
     *
     * @remarks
     * Note: The list returned by this operation includes the workspaces of Developer Edition, Expert Edition, and Advanced Edition. The list does not include the workspaces of Shared Edition.
     *
     * @param request - GetGrafanaWorkspaceRequest
     * @returns GetGrafanaWorkspaceResponse
     *
     * @param GetGrafanaWorkspaceRequest $request
     *
     * @return GetGrafanaWorkspaceResponse
     */
    public function getGrafanaWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGrafanaWorkspaceWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * Queries the integration state of the dashboards and collection rules of Application Real-Time Monitoring Service (ARMS) Prometheus.
     *
     * @deprecated openAPI GetIntegrationState is deprecated, please use ARMS::2019-08-08::DescribeAddonRelease instead
     *
     * @param request - GetIntegrationStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetIntegrationStateResponse
     *
     * @param GetIntegrationStateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetIntegrationStateResponse
     */
    public function getIntegrationStateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->integration) {
            @$query['Integration'] = $request->integration;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetIntegrationStateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetIntegrationStateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * Queries the integration state of the dashboards and collection rules of Application Real-Time Monitoring Service (ARMS) Prometheus.
     *
     * @deprecated openAPI GetIntegrationState is deprecated, please use ARMS::2019-08-08::DescribeAddonRelease instead
     *
     * @param request - GetIntegrationStateRequest
     * @returns GetIntegrationStateResponse
     *
     * @param GetIntegrationStateRequest $request
     *
     * @return GetIntegrationStateResponse
     */
    public function getIntegrationState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIntegrationStateWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * Queries the installation status of a Prometheus agent in a serverless Kubernetes (ASK) cluster or an Elastic Compute Service (ECS) cluster.
     *
     * @deprecated OpenAPI GetManagedPrometheusStatus is deprecated
     *
     * @param request - GetManagedPrometheusStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetManagedPrometheusStatusResponse
     *
     * @param GetManagedPrometheusStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetManagedPrometheusStatusResponse
     */
    public function getManagedPrometheusStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetManagedPrometheusStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetManagedPrometheusStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * Queries the installation status of a Prometheus agent in a serverless Kubernetes (ASK) cluster or an Elastic Compute Service (ECS) cluster.
     *
     * @deprecated OpenAPI GetManagedPrometheusStatus is deprecated
     *
     * @param request - GetManagedPrometheusStatusRequest
     * @returns GetManagedPrometheusStatusResponse
     *
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
     * Queries the details of one or more traces.
     *
     * @param request - GetMultipleTraceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetMultipleTraceResponse
     *
     * @param GetMultipleTraceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMultipleTraceResponse
     */
    public function getMultipleTraceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->traceIDs) {
            @$query['TraceIDs'] = $request->traceIDs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMultipleTraceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMultipleTraceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of one or more traces.
     *
     * @param request - GetMultipleTraceRequest
     * @returns GetMultipleTraceResponse
     *
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
     * Queries the information about a scheduling policy.
     *
     * @param request - GetOnCallSchedulesDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetOnCallSchedulesDetailResponse
     *
     * @param GetOnCallSchedulesDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetOnCallSchedulesDetailResponse
     */
    public function getOnCallSchedulesDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOnCallSchedulesDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOnCallSchedulesDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a scheduling policy.
     *
     * @param request - GetOnCallSchedulesDetailRequest
     * @returns GetOnCallSchedulesDetailResponse
     *
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
     * Queries the token required for integrating Prometheus Service.
     *
     * @remarks
     * None.
     *
     * @param request - GetPrometheusApiTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPrometheusApiTokenResponse
     *
     * @param GetPrometheusApiTokenRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetPrometheusApiTokenResponse
     */
    public function getPrometheusApiTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPrometheusApiTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPrometheusApiTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the token required for integrating Prometheus Service.
     *
     * @remarks
     * None.
     *
     * @param request - GetPrometheusApiTokenRequest
     * @returns GetPrometheusApiTokenResponse
     *
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
     * Queries the information about a global aggregation instance.
     *
     * @param request - GetPrometheusGlobalViewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPrometheusGlobalViewResponse
     *
     * @param GetPrometheusGlobalViewRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetPrometheusGlobalViewResponse
     */
    public function getPrometheusGlobalViewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalViewClusterId) {
            @$query['GlobalViewClusterId'] = $request->globalViewClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPrometheusGlobalViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a global aggregation instance.
     *
     * @param request - GetPrometheusGlobalViewRequest
     * @returns GetPrometheusGlobalViewResponse
     *
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
     * Queries the information about a Prometheus instance.
     *
     * @param request - GetPrometheusInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPrometheusInstanceResponse
     *
     * @param GetPrometheusInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetPrometheusInstanceResponse
     */
    public function getPrometheusInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPrometheusInstance',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPrometheusInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a Prometheus instance.
     *
     * @param request - GetPrometheusInstanceRequest
     * @returns GetPrometheusInstanceResponse
     *
     * @param GetPrometheusInstanceRequest $request
     *
     * @return GetPrometheusInstanceResponse
     */
    public function getPrometheusInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrometheusInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an exporter that is integrated into a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *
     * @param request - GetPrometheusIntegrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPrometheusIntegrationResponse
     *
     * @param GetPrometheusIntegrationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetPrometheusIntegrationResponse
     */
    public function getPrometheusIntegrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->integrationType) {
            @$query['IntegrationType'] = $request->integrationType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPrometheusIntegration',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPrometheusIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPrometheusIntegrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about an exporter that is integrated into a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *
     * @param request - GetPrometheusIntegrationRequest
     * @returns GetPrometheusIntegrationResponse
     *
     * @param GetPrometheusIntegrationRequest $request
     *
     * @return GetPrometheusIntegrationResponse
     */
    public function getPrometheusIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrometheusIntegrationWithOptions($request, $runtime);
    }

    /**
     * Queries the monitoring configuration of a Prometheus instance.
     *
     * @param request - GetPrometheusMonitoringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPrometheusMonitoringResponse
     *
     * @param GetPrometheusMonitoringRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetPrometheusMonitoringResponse
     */
    public function getPrometheusMonitoringWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->monitoringName) {
            @$query['MonitoringName'] = $request->monitoringName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPrometheusMonitoring',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPrometheusMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPrometheusMonitoringResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the monitoring configuration of a Prometheus instance.
     *
     * @param request - GetPrometheusMonitoringRequest
     * @returns GetPrometheusMonitoringResponse
     *
     * @param GetPrometheusMonitoringRequest $request
     *
     * @return GetPrometheusMonitoringResponse
     */
    public function getPrometheusMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrometheusMonitoringWithOptions($request, $runtime);
    }

    /**
     * Obtains the recording rule of a cluster.
     *
     * @param request - GetRecordingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRecordingRuleResponse
     *
     * @param GetRecordingRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetRecordingRuleResponse
     */
    public function getRecordingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRecordingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRecordingRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the recording rule of a cluster.
     *
     * @param request - GetRecordingRuleRequest
     * @returns GetRecordingRuleResponse
     *
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
     * Queries the objects of a Browser Monitoring application by process identifier (PID).
     *
     * @param request - GetRetcodeAppByPidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRetcodeAppByPidResponse
     *
     * @param GetRetcodeAppByPidRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetRetcodeAppByPidResponse
     */
    public function getRetcodeAppByPidWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRetcodeAppByPid',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRetcodeAppByPidResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRetcodeAppByPidResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the objects of a Browser Monitoring application by process identifier (PID).
     *
     * @param request - GetRetcodeAppByPidRequest
     * @returns GetRetcodeAppByPidResponse
     *
     * @param GetRetcodeAppByPidRequest $request
     *
     * @return GetRetcodeAppByPidResponse
     */
    public function getRetcodeAppByPid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRetcodeAppByPidWithOptions($request, $runtime);
    }

    /**
     * Queries the Browser Monitoring data based on a query statement of Log Service.
     *
     * @param request - GetRetcodeDataByQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRetcodeDataByQueryResponse
     *
     * @param GetRetcodeDataByQueryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetRetcodeDataByQueryResponse
     */
    public function getRetcodeDataByQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->from) {
            @$query['From'] = $request->from;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->to) {
            @$query['To'] = $request->to;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRetcodeDataByQuery',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRetcodeDataByQueryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRetcodeDataByQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the Browser Monitoring data based on a query statement of Log Service.
     *
     * @param request - GetRetcodeDataByQueryRequest
     * @returns GetRetcodeDataByQueryResponse
     *
     * @param GetRetcodeDataByQueryRequest $request
     *
     * @return GetRetcodeDataByQueryResponse
     */
    public function getRetcodeDataByQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRetcodeDataByQueryWithOptions($request, $runtime);
    }

    /**
     * Queries the Log Service project and Logstore that correspond to an application of browser monitoring.
     *
     * @param request - GetRetcodeLogstoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRetcodeLogstoreResponse
     *
     * @param GetRetcodeLogstoreRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetRetcodeLogstoreResponse
     */
    public function getRetcodeLogstoreWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRetcodeLogstore',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRetcodeLogstoreResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRetcodeLogstoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the Log Service project and Logstore that correspond to an application of browser monitoring.
     *
     * @param request - GetRetcodeLogstoreRequest
     * @returns GetRetcodeLogstoreResponse
     *
     * @param GetRetcodeLogstoreRequest $request
     *
     * @return GetRetcodeLogstoreResponse
     */
    public function getRetcodeLogstore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRetcodeLogstoreWithOptions($request, $runtime);
    }

    /**
     * Queries the logon-free URL of a Browser Monitoring application.
     *
     * @param request - GetRetcodeShareUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRetcodeShareUrlResponse
     *
     * @param GetRetcodeShareUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetRetcodeShareUrlResponse
     */
    public function getRetcodeShareUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRetcodeShareUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRetcodeShareUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the logon-free URL of a Browser Monitoring application.
     *
     * @param request - GetRetcodeShareUrlRequest
     * @returns GetRetcodeShareUrlResponse
     *
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
     * Queries the information about a Real User Monitoring (RUM) application.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - GetRumAppInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRumAppInfoResponse
     *
     * @param GetRumAppInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRumAppInfoResponse
     */
    public function getRumAppInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appGroup) {
            @$query['AppGroup'] = $request->appGroup;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->workspace) {
            @$query['Workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRumAppInfo',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRumAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRumAppInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a Real User Monitoring (RUM) application.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - GetRumAppInfoRequest
     * @returns GetRumAppInfoResponse
     *
     * @param GetRumAppInfoRequest $request
     *
     * @return GetRumAppInfoResponse
     */
    public function getRumAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRumAppInfoWithOptions($request, $runtime);
    }

    /**
     * Queries a list of Real User Monitoring (RUM) applications.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param tmpReq - GetRumAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRumAppsResponse
     *
     * @param GetRumAppsRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return GetRumAppsResponse
     */
    public function getRumAppsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetRumAppsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->appGroup) {
            @$query['AppGroup'] = $request->appGroup;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->workspace) {
            @$query['Workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRumApps',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRumAppsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRumAppsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of Real User Monitoring (RUM) applications.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - GetRumAppsRequest
     * @returns GetRumAppsResponse
     *
     * @param GetRumAppsRequest $request
     *
     * @return GetRumAppsResponse
     */
    public function getRumApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRumAppsWithOptions($request, $runtime);
    }

    /**
     * Queries Real User Monitoring (RUM) data by page.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - GetRumDataForPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRumDataForPageResponse
     *
     * @param GetRumDataForPageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetRumDataForPageResponse
     */
    public function getRumDataForPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appGroup) {
            @$query['AppGroup'] = $request->appGroup;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->workspace) {
            @$query['Workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRumDataForPage',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRumDataForPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRumDataForPageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries Real User Monitoring (RUM) data by page.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - GetRumDataForPageRequest
     * @returns GetRumDataForPageResponse
     *
     * @param GetRumDataForPageRequest $request
     *
     * @return GetRumDataForPageResponse
     */
    public function getRumDataForPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRumDataForPageWithOptions($request, $runtime);
    }

    /**
     * Queries the exception stack information of a Real User Monitoring (RUM) application.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - GetRumExceptionStackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRumExceptionStackResponse
     *
     * @param GetRumExceptionStackRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetRumExceptionStackResponse
     */
    public function getRumExceptionStackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exceptionBinaryImages) {
            @$query['ExceptionBinaryImages'] = $request->exceptionBinaryImages;
        }

        if (null !== $request->exceptionStack) {
            @$query['ExceptionStack'] = $request->exceptionStack;
        }

        if (null !== $request->exceptionThreadId) {
            @$query['ExceptionThreadId'] = $request->exceptionThreadId;
        }

        if (null !== $request->extraInfo) {
            @$query['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sourcemapType) {
            @$query['SourcemapType'] = $request->sourcemapType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRumExceptionStack',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRumExceptionStackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRumExceptionStackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the exception stack information of a Real User Monitoring (RUM) application.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - GetRumExceptionStackRequest
     * @returns GetRumExceptionStackResponse
     *
     * @param GetRumExceptionStackRequest $request
     *
     * @return GetRumExceptionStackResponse
     */
    public function getRumExceptionStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRumExceptionStackWithOptions($request, $runtime);
    }

    /**
     * Queries the observability capacity unit (OCU) usage data of Real User Monitoring (RUM).
     *
     * @remarks
     * You can query the usage data for the current day at any time. You can query the usage data for the previous day only after 8:00 today.
     *
     * @param tmpReq - GetRumOcuStatisticDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRumOcuStatisticDataResponse
     *
     * @param GetRumOcuStatisticDataRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return GetRumOcuStatisticDataResponse
     */
    public function getRumOcuStatisticDataWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetRumOcuStatisticDataShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        if (null !== $tmpReq->group) {
            $request->groupShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->group, 'Group', 'json');
        }

        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRumOcuStatisticData',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRumOcuStatisticDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRumOcuStatisticDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the observability capacity unit (OCU) usage data of Real User Monitoring (RUM).
     *
     * @remarks
     * You can query the usage data for the current day at any time. You can query the usage data for the previous day only after 8:00 today.
     *
     * @param request - GetRumOcuStatisticDataRequest
     * @returns GetRumOcuStatisticDataResponse
     *
     * @param GetRumOcuStatisticDataRequest $request
     *
     * @return GetRumOcuStatisticDataResponse
     */
    public function getRumOcuStatisticData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRumOcuStatisticDataWithOptions($request, $runtime);
    }

    /**
     * Queries Real User Monitoring (RUM)-related files, such as symbol tables and SourceMap.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - GetRumUploadFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRumUploadFilesResponse
     *
     * @param GetRumUploadFilesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetRumUploadFilesResponse
     */
    public function getRumUploadFilesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRumUploadFiles',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRumUploadFilesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRumUploadFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries Real User Monitoring (RUM)-related files, such as symbol tables and SourceMap.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - GetRumUploadFilesRequest
     * @returns GetRumUploadFilesResponse
     *
     * @param GetRumUploadFilesRequest $request
     *
     * @return GetRumUploadFilesResponse
     */
    public function getRumUploadFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRumUploadFilesWithOptions($request, $runtime);
    }

    /**
     * Obtains the details of the SourceMap file uploaded in Browser Monitoring.
     *
     * @param request - GetSourceMapInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSourceMapInfoResponse
     *
     * @param GetSourceMapInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSourceMapInfoResponse
     */
    public function getSourceMapInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ascendingSequence) {
            @$query['AscendingSequence'] = $request->ascendingSequence;
        }

        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->ID) {
            @$query['ID'] = $request->ID;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->orderField) {
            @$query['OrderField'] = $request->orderField;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSourceMapInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSourceMapInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the details of the SourceMap file uploaded in Browser Monitoring.
     *
     * @param request - GetSourceMapInfoRequest
     * @returns GetSourceMapInfoResponse
     *
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
     * Queries the information of a method stack.
     *
     * @param request - GetStackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetStackResponse
     *
     * @param GetStackRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetStackResponse
     */
    public function getStackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->rpcID) {
            @$query['RpcID'] = $request->rpcID;
        }

        if (null !== $request->spanID) {
            @$query['SpanID'] = $request->spanID;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->traceID) {
            @$query['TraceID'] = $request->traceID;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetStackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetStackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information of a method stack.
     *
     * @param request - GetStackRequest
     * @returns GetStackResponse
     *
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
     * Obtains detection points.
     *
     * @param tmpReq - GetSyntheticMonitorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSyntheticMonitorsResponse
     *
     * @param GetSyntheticMonitorsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return GetSyntheticMonitorsResponse
     */
    public function getSyntheticMonitorsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSyntheticMonitorsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSyntheticMonitors',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSyntheticMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSyntheticMonitorsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains detection points.
     *
     * @param request - GetSyntheticMonitorsRequest
     * @returns GetSyntheticMonitorsResponse
     *
     * @param GetSyntheticMonitorsRequest $request
     *
     * @return GetSyntheticMonitorsResponse
     */
    public function getSyntheticMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSyntheticMonitorsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a scheduled synthetic monitoring task.
     *
     * @param request - GetSyntheticTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSyntheticTaskDetailResponse
     *
     * @param GetSyntheticTaskDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetSyntheticTaskDetailResponse
     */
    public function getSyntheticTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSyntheticTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSyntheticTaskDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a scheduled synthetic monitoring task.
     *
     * @param request - GetSyntheticTaskDetailRequest
     * @returns GetSyntheticTaskDetailResponse
     *
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
     * Queries a list of scheduled synthetic monitoring tasks.
     *
     * @param request - GetSyntheticTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSyntheticTaskListResponse
     *
     * @param GetSyntheticTaskListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetSyntheticTaskListResponse
     */
    public function getSyntheticTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskStatus) {
            @$query['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSyntheticTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSyntheticTaskListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of scheduled synthetic monitoring tasks.
     *
     * @param request - GetSyntheticTaskListRequest
     * @returns GetSyntheticTaskListResponse
     *
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
     * Obtains the information about synthetic monitoring points.
     *
     * @param request - GetSyntheticTaskMonitorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSyntheticTaskMonitorsResponse
     *
     * @param GetSyntheticTaskMonitorsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetSyntheticTaskMonitorsResponse
     */
    public function getSyntheticTaskMonitorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSyntheticTaskMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSyntheticTaskMonitorsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the information about synthetic monitoring points.
     *
     * @param request - GetSyntheticTaskMonitorsRequest
     * @returns GetSyntheticTaskMonitorsResponse
     *
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
     * Obtains the details of a synthetic monitoring task.
     *
     * @param request - GetTimingSyntheticTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTimingSyntheticTaskResponse
     *
     * @param GetTimingSyntheticTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetTimingSyntheticTaskResponse
     */
    public function getTimingSyntheticTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTimingSyntheticTask',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTimingSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTimingSyntheticTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the details of a synthetic monitoring task.
     *
     * @param request - GetTimingSyntheticTaskRequest
     * @returns GetTimingSyntheticTaskResponse
     *
     * @param GetTimingSyntheticTaskRequest $request
     *
     * @return GetTimingSyntheticTaskResponse
     */
    public function getTimingSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTimingSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a trace.
     *
     * @remarks
     * > You must use Application Real-Time Monitoring Service (ARMS) SDK for Java V2.7.24.
     *
     * @param request - GetTraceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTraceResponse
     *
     * @param GetTraceRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTraceResponse
     */
    public function getTraceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->traceID) {
            @$query['TraceID'] = $request->traceID;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTraceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTraceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a trace.
     *
     * @remarks
     * > You must use Application Real-Time Monitoring Service (ARMS) SDK for Java V2.7.24.
     *
     * @param request - GetTraceRequest
     * @returns GetTraceResponse
     *
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
     * Queries the details of an application monitoring task.
     *
     * @param request - GetTraceAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTraceAppResponse
     *
     * @param GetTraceAppRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTraceAppResponse
     */
    public function getTraceAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTraceAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTraceAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of an application monitoring task.
     *
     * @param request - GetTraceAppRequest
     * @returns GetTraceAppResponse
     *
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
     * Queries all custom settings of an application monitored by Application Monitoring, such as trace sampling settings and agent switches. This operation is applicable only to applications that are monitored by Application Monitoring. It is not applicable to applications that are monitored by Managed Service for OpenTelemetry.
     *
     * @param request - GetTraceAppConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTraceAppConfigResponse
     *
     * @param GetTraceAppConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTraceAppConfigResponse
     */
    public function getTraceAppConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTraceAppConfig',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTraceAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTraceAppConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all custom settings of an application monitored by Application Monitoring, such as trace sampling settings and agent switches. This operation is applicable only to applications that are monitored by Application Monitoring. It is not applicable to applications that are monitored by Managed Service for OpenTelemetry.
     *
     * @param request - GetTraceAppConfigRequest
     * @returns GetTraceAppConfigResponse
     *
     * @param GetTraceAppConfigRequest $request
     *
     * @return GetTraceAppConfigResponse
     */
    public function getTraceAppConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTraceAppConfigWithOptions($request, $runtime);
    }

    /**
     * Creates an alert rule based on an alert template.
     *
     * @remarks
     * >  You can call the **ImportAppAlertRules** operation to import only the alert rules that are generated by Application Real-Time Monitoring Service (ARMS) for application monitoring and browser monitoring. This operation cannot be used to import custom alert rules, alert rules for Prometheus monitoring, or default emergency alert rules.
     *
     * @param request - ImportAppAlertRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ImportAppAlertRulesResponse
     *
     * @param ImportAppAlertRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ImportAppAlertRulesResponse
     */
    public function importAppAlertRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroupIds) {
            @$query['ContactGroupIds'] = $request->contactGroupIds;
        }

        if (null !== $request->isAutoStart) {
            @$query['IsAutoStart'] = $request->isAutoStart;
        }

        if (null !== $request->pids) {
            @$query['Pids'] = $request->pids;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->templageAlertConfig) {
            @$query['TemplageAlertConfig'] = $request->templageAlertConfig;
        }

        if (null !== $request->templateAlertId) {
            @$query['TemplateAlertId'] = $request->templateAlertId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ImportAppAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ImportAppAlertRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an alert rule based on an alert template.
     *
     * @remarks
     * >  You can call the **ImportAppAlertRules** operation to import only the alert rules that are generated by Application Real-Time Monitoring Service (ARMS) for application monitoring and browser monitoring. This operation cannot be used to import custom alert rules, alert rules for Prometheus monitoring, or default emergency alert rules.
     *
     * @param request - ImportAppAlertRulesRequest
     * @returns ImportAppAlertRulesResponse
     *
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
     * Initializes an environment instance.
     *
     * @param request - InitEnvironmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InitEnvironmentResponse
     *
     * @param InitEnvironmentRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return InitEnvironmentResponse
     */
    public function initEnvironmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->createAuthToken) {
            @$query['CreateAuthToken'] = $request->createAuthToken;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->managedType) {
            @$query['ManagedType'] = $request->managedType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'InitEnvironment',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InitEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InitEnvironmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Initializes an environment instance.
     *
     * @param request - InitEnvironmentRequest
     * @returns InitEnvironmentResponse
     *
     * @param InitEnvironmentRequest $request
     *
     * @return InitEnvironmentResponse
     */
    public function initEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initEnvironmentWithOptions($request, $runtime);
    }

    /**
     * Installs an add-on.
     *
     * @param request - InstallAddonRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InstallAddonResponse
     *
     * @param InstallAddonRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return InstallAddonResponse
     */
    public function installAddonWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonVersion) {
            @$query['AddonVersion'] = $request->addonVersion;
        }

        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->releaseName) {
            @$query['ReleaseName'] = $request->releaseName;
        }

        if (null !== $request->values) {
            @$query['Values'] = $request->values;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallAddon',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InstallAddonResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InstallAddonResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Installs an add-on.
     *
     * @param request - InstallAddonRequest
     * @returns InstallAddonResponse
     *
     * @param InstallAddonRequest $request
     *
     * @return InstallAddonResponse
     */
    public function installAddon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installAddonWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * Installs the cms-exporter collector.
     *
     * @deprecated openAPI InstallCmsExporter is deprecated, please use ARMS::2019-08-08::InstallAddon instead
     *
     * @param request - InstallCmsExporterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InstallCmsExporterResponse
     *
     * @param InstallCmsExporterRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return InstallCmsExporterResponse
     */
    public function installCmsExporterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->cmsArgs) {
            @$query['CmsArgs'] = $request->cmsArgs;
        }

        if (null !== $request->directArgs) {
            @$query['DirectArgs'] = $request->directArgs;
        }

        if (null !== $request->enableTag) {
            @$query['EnableTag'] = $request->enableTag;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InstallCmsExporterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InstallCmsExporterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * Installs the cms-exporter collector.
     *
     * @deprecated openAPI InstallCmsExporter is deprecated, please use ARMS::2019-08-08::InstallAddon instead
     *
     * @param request - InstallCmsExporterRequest
     * @returns InstallCmsExporterResponse
     *
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
     * Installs a feature.
     *
     * @param request - InstallEnvironmentFeatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InstallEnvironmentFeatureResponse
     *
     * @param InstallEnvironmentFeatureRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return InstallEnvironmentFeatureResponse
     */
    public function installEnvironmentFeatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->featureName) {
            @$query['FeatureName'] = $request->featureName;
        }

        if (null !== $request->featureVersion) {
            @$query['FeatureVersion'] = $request->featureVersion;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallEnvironmentFeature',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InstallEnvironmentFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InstallEnvironmentFeatureResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Installs a feature.
     *
     * @param request - InstallEnvironmentFeatureRequest
     * @returns InstallEnvironmentFeatureResponse
     *
     * @param InstallEnvironmentFeatureRequest $request
     *
     * @return InstallEnvironmentFeatureResponse
     */
    public function installEnvironmentFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installEnvironmentFeatureWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * Installs a Prometheus agent for serverless Kubernetes (ASK) clusters or Elastic Compute Service (ECS) clusters.
     *
     * @remarks
     * You can call this operation only if the following conditions are met: The resources that you want to monitor are ASK clusters or ECS clusters. No Prometheus agents are installed in the ASK or ECS clusters. Take note that Prometheus agents can be installed only on the cloud service side, not in user clusters.
     *
     * @deprecated OpenAPI InstallManagedPrometheus is deprecated
     *
     * @param request - InstallManagedPrometheusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InstallManagedPrometheusResponse
     *
     * @param InstallManagedPrometheusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return InstallManagedPrometheusResponse
     */
    public function installManagedPrometheusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->grafanaInstanceId) {
            @$query['GrafanaInstanceId'] = $request->grafanaInstanceId;
        }

        if (null !== $request->kubeConfig) {
            @$query['KubeConfig'] = $request->kubeConfig;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InstallManagedPrometheusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InstallManagedPrometheusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * Installs a Prometheus agent for serverless Kubernetes (ASK) clusters or Elastic Compute Service (ECS) clusters.
     *
     * @remarks
     * You can call this operation only if the following conditions are met: The resources that you want to monitor are ASK clusters or ECS clusters. No Prometheus agents are installed in the ASK or ECS clusters. Take note that Prometheus agents can be installed only on the cloud service side, not in user clusters.
     *
     * @deprecated OpenAPI InstallManagedPrometheus is deprecated
     *
     * @param request - InstallManagedPrometheusRequest
     * @returns InstallManagedPrometheusResponse
     *
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
     * Queries the alerts that have been triggered.
     *
     * @param request - ListActivatedAlertsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListActivatedAlertsResponse
     *
     * @param ListActivatedAlertsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListActivatedAlertsResponse
     */
    public function listActivatedAlertsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListActivatedAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListActivatedAlertsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the alerts that have been triggered.
     *
     * @param request - ListActivatedAlertsRequest
     * @returns ListActivatedAlertsResponse
     *
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
     * Queries the add-ons installed in an environment.
     *
     * @param request - ListAddonReleasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAddonReleasesResponse
     *
     * @param ListAddonReleasesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListAddonReleasesResponse
     */
    public function listAddonReleasesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonName) {
            @$query['AddonName'] = $request->addonName;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAddonReleases',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAddonReleasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAddonReleasesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the add-ons installed in an environment.
     *
     * @param request - ListAddonReleasesRequest
     * @returns ListAddonReleasesResponse
     *
     * @param ListAddonReleasesRequest $request
     *
     * @return ListAddonReleasesResponse
     */
    public function listAddonReleases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAddonReleasesWithOptions($request, $runtime);
    }

    /**
     * List of access center products.
     *
     * @param request - ListAddonsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAddonsResponse
     *
     * @param ListAddonsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListAddonsResponse
     */
    public function listAddonsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->regexp) {
            @$query['Regexp'] = $request->regexp;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->search) {
            @$query['Search'] = $request->search;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAddons',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAddonsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * List of access center products.
     *
     * @param request - ListAddonsRequest
     * @returns ListAddonsResponse
     *
     * @param ListAddonsRequest $request
     *
     * @return ListAddonsResponse
     */
    public function listAddons($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAddonsWithOptions($request, $runtime);
    }

    /**
     * Queries historical alert events.
     *
     * @param request - ListAlertEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAlertEventsResponse
     *
     * @param ListAlertEventsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAlertEventsResponse
     */
    public function listAlertEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertName) {
            @$query['AlertName'] = $request->alertName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->matchingConditions) {
            @$query['MatchingConditions'] = $request->matchingConditions;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->showNotificationPolicies) {
            @$query['ShowNotificationPolicies'] = $request->showNotificationPolicies;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAlertEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAlertEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries historical alert events.
     *
     * @param request - ListAlertEventsRequest
     * @returns ListAlertEventsResponse
     *
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
     * Queries the alert sending history.
     *
     * @param request - ListAlertsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAlertsResponse
     *
     * @param ListAlertsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListAlertsResponse
     */
    public function listAlertsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertName) {
            @$query['AlertName'] = $request->alertName;
        }

        if (null !== $request->dispatchRuleId) {
            @$query['DispatchRuleId'] = $request->dispatchRuleId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->integrationType) {
            @$query['IntegrationType'] = $request->integrationType;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->severity) {
            @$query['Severity'] = $request->severity;
        }

        if (null !== $request->showActivities) {
            @$query['ShowActivities'] = $request->showActivities;
        }

        if (null !== $request->showEvents) {
            @$query['ShowEvents'] = $request->showEvents;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAlertsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the alert sending history.
     *
     * @param request - ListAlertsRequest
     * @returns ListAlertsResponse
     *
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
     * Queries all Grafana dashboards in a specified region.
     *
     * @param request - ListClusterFromGrafanaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListClusterFromGrafanaResponse
     *
     * @param ListClusterFromGrafanaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListClusterFromGrafanaResponse
     */
    public function listClusterFromGrafanaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListClusterFromGrafanaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClusterFromGrafanaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all Grafana dashboards in a specified region.
     *
     * @param request - ListClusterFromGrafanaRequest
     * @returns ListClusterFromGrafanaResponse
     *
     * @param ListClusterFromGrafanaRequest $request
     *
     * @return ListClusterFromGrafanaResponse
     */
    public function listClusterFromGrafana($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterFromGrafanaWithOptions($request, $runtime);
    }

    // Deprecated

    /**
     * 查询Cms安装信息.
     *
     * @deprecated openAPI ListCmsInstances is deprecated, please use ARMS::2019-08-08::ListEnvironmentAddons instead
     *
     * @param request - ListCmsInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListCmsInstancesResponse
     *
     * @param ListCmsInstancesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListCmsInstancesResponse
     */
    public function listCmsInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->typeFilter) {
            @$query['TypeFilter'] = $request->typeFilter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListCmsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCmsInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * 查询Cms安装信息.
     *
     * @deprecated openAPI ListCmsInstances is deprecated, please use ARMS::2019-08-08::ListEnvironmentAddons instead
     *
     * @param request - ListCmsInstancesRequest
     * @returns ListCmsInstancesResponse
     *
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
     * Queries the Grafana dashboards of a Container Service for Kubernetes (ACK) cluster.
     *
     * @remarks
     * None.
     *
     * @param request - ListDashboardsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDashboardsResponse
     *
     * @param ListDashboardsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListDashboardsResponse
     */
    public function listDashboardsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->dashboardName) {
            @$query['DashboardName'] = $request->dashboardName;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->recreateSwitch) {
            @$query['RecreateSwitch'] = $request->recreateSwitch;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDashboardsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDashboardsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the Grafana dashboards of a Container Service for Kubernetes (ACK) cluster.
     *
     * @remarks
     * None.
     *
     * @param request - ListDashboardsRequest
     * @returns ListDashboardsResponse
     *
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
     * Uses Loki data sources and other data sources to create a dashboard in Prometheus Service.
     *
     * @param request - ListDashboardsByNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDashboardsByNameResponse
     *
     * @param ListDashboardsByNameRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDashboardsByNameResponse
     */
    public function listDashboardsByNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->dashBoardName) {
            @$query['DashBoardName'] = $request->dashBoardName;
        }

        if (null !== $request->dashBoardVersion) {
            @$query['DashBoardVersion'] = $request->dashBoardVersion;
        }

        if (null !== $request->dataSourceType) {
            @$query['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->onlyQuery) {
            @$query['OnlyQuery'] = $request->onlyQuery;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDashboardsByNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDashboardsByNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Uses Loki data sources and other data sources to create a dashboard in Prometheus Service.
     *
     * @param request - ListDashboardsByNameRequest
     * @returns ListDashboardsByNameResponse
     *
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
     * Queries notification policies.
     *
     * @remarks
     * The current API operation is no longer maintained. To query the notification policy information, call the ListNotificationPolicies operation instead.
     *
     * @param request - ListDispatchRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDispatchRuleResponse
     *
     * @param ListDispatchRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDispatchRuleResponse
     */
    public function listDispatchRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->system) {
            @$query['System'] = $request->system;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDispatchRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries notification policies.
     *
     * @remarks
     * The current API operation is no longer maintained. To query the notification policy information, call the ListNotificationPolicies operation instead.
     *
     * @param request - ListDispatchRuleRequest
     * @returns ListDispatchRuleResponse
     *
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
     * Queries the custom jobs of an environment.
     *
     * @param request - ListEnvCustomJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEnvCustomJobsResponse
     *
     * @param ListEnvCustomJobsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListEnvCustomJobsResponse
     */
    public function listEnvCustomJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->encryptYaml) {
            @$query['EncryptYaml'] = $request->encryptYaml;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvCustomJobs',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEnvCustomJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnvCustomJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the custom jobs of an environment.
     *
     * @param request - ListEnvCustomJobsRequest
     * @returns ListEnvCustomJobsResponse
     *
     * @param ListEnvCustomJobsRequest $request
     *
     * @return ListEnvCustomJobsResponse
     */
    public function listEnvCustomJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvCustomJobsWithOptions($request, $runtime);
    }

    /**
     * Queries the PodMonitors of an environment.
     *
     * @param request - ListEnvPodMonitorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEnvPodMonitorsResponse
     *
     * @param ListEnvPodMonitorsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListEnvPodMonitorsResponse
     */
    public function listEnvPodMonitorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvPodMonitors',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEnvPodMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnvPodMonitorsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the PodMonitors of an environment.
     *
     * @param request - ListEnvPodMonitorsRequest
     * @returns ListEnvPodMonitorsResponse
     *
     * @param ListEnvPodMonitorsRequest $request
     *
     * @return ListEnvPodMonitorsResponse
     */
    public function listEnvPodMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvPodMonitorsWithOptions($request, $runtime);
    }

    /**
     * Queries the ServiceMonitors of an environment.
     *
     * @param request - ListEnvServiceMonitorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEnvServiceMonitorsResponse
     *
     * @param ListEnvServiceMonitorsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListEnvServiceMonitorsResponse
     */
    public function listEnvServiceMonitorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvServiceMonitors',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEnvServiceMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnvServiceMonitorsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the ServiceMonitors of an environment.
     *
     * @param request - ListEnvServiceMonitorsRequest
     * @returns ListEnvServiceMonitorsResponse
     *
     * @param ListEnvServiceMonitorsRequest $request
     *
     * @return ListEnvServiceMonitorsResponse
     */
    public function listEnvServiceMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvServiceMonitorsWithOptions($request, $runtime);
    }

    /**
     * 环境addon列表.
     *
     * @param request - ListEnvironmentAddonsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEnvironmentAddonsResponse
     *
     * @param ListEnvironmentAddonsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListEnvironmentAddonsResponse
     */
    public function listEnvironmentAddonsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvironmentAddons',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEnvironmentAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnvironmentAddonsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 环境addon列表.
     *
     * @param request - ListEnvironmentAddonsRequest
     * @returns ListEnvironmentAddonsResponse
     *
     * @param ListEnvironmentAddonsRequest $request
     *
     * @return ListEnvironmentAddonsResponse
     */
    public function listEnvironmentAddons($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvironmentAddonsWithOptions($request, $runtime);
    }

    /**
     * Queries the alert groups of an environment instance.
     *
     * @param request - ListEnvironmentAlertRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEnvironmentAlertRulesResponse
     *
     * @param ListEnvironmentAlertRulesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListEnvironmentAlertRulesResponse
     */
    public function listEnvironmentAlertRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonName) {
            @$query['AddonName'] = $request->addonName;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvironmentAlertRules',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEnvironmentAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnvironmentAlertRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the alert groups of an environment instance.
     *
     * @param request - ListEnvironmentAlertRulesRequest
     * @returns ListEnvironmentAlertRulesResponse
     *
     * @param ListEnvironmentAlertRulesRequest $request
     *
     * @return ListEnvironmentAlertRulesResponse
     */
    public function listEnvironmentAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvironmentAlertRulesWithOptions($request, $runtime);
    }

    /**
     * Queries information about a dashboard of an environment instance.
     *
     * @param request - ListEnvironmentDashboardsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEnvironmentDashboardsResponse
     *
     * @param ListEnvironmentDashboardsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListEnvironmentDashboardsResponse
     */
    public function listEnvironmentDashboardsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonName) {
            @$query['AddonName'] = $request->addonName;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvironmentDashboards',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEnvironmentDashboardsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnvironmentDashboardsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about a dashboard of an environment instance.
     *
     * @param request - ListEnvironmentDashboardsRequest
     * @returns ListEnvironmentDashboardsResponse
     *
     * @param ListEnvironmentDashboardsRequest $request
     *
     * @return ListEnvironmentDashboardsResponse
     */
    public function listEnvironmentDashboards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvironmentDashboardsWithOptions($request, $runtime);
    }

    /**
     * Queries the features in an environment.
     *
     * @param request - ListEnvironmentFeaturesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEnvironmentFeaturesResponse
     *
     * @param ListEnvironmentFeaturesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListEnvironmentFeaturesResponse
     */
    public function listEnvironmentFeaturesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvironmentFeatures',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEnvironmentFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnvironmentFeaturesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the features in an environment.
     *
     * @param request - ListEnvironmentFeaturesRequest
     * @returns ListEnvironmentFeaturesResponse
     *
     * @param ListEnvironmentFeaturesRequest $request
     *
     * @return ListEnvironmentFeaturesResponse
     */
    public function listEnvironmentFeatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvironmentFeaturesWithOptions($request, $runtime);
    }

    /**
     * Queries the Kubernetes resources of an environment.
     *
     * @param tmpReq - ListEnvironmentKubeResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEnvironmentKubeResourcesResponse
     *
     * @param ListEnvironmentKubeResourcesRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return ListEnvironmentKubeResourcesResponse
     */
    public function listEnvironmentKubeResourcesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListEnvironmentKubeResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labelSelectors) {
            $request->labelSelectorsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelSelectors, 'LabelSelectors', 'json');
        }

        $query = [];
        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->kind) {
            @$query['Kind'] = $request->kind;
        }

        if (null !== $request->labelSelectorsShrink) {
            @$query['LabelSelectors'] = $request->labelSelectorsShrink;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvironmentKubeResources',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEnvironmentKubeResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnvironmentKubeResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the Kubernetes resources of an environment.
     *
     * @param request - ListEnvironmentKubeResourcesRequest
     * @returns ListEnvironmentKubeResourcesResponse
     *
     * @param ListEnvironmentKubeResourcesRequest $request
     *
     * @return ListEnvironmentKubeResourcesResponse
     */
    public function listEnvironmentKubeResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvironmentKubeResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the targets of an environment.
     *
     * @param request - ListEnvironmentMetricTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEnvironmentMetricTargetsResponse
     *
     * @param ListEnvironmentMetricTargetsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListEnvironmentMetricTargetsResponse
     */
    public function listEnvironmentMetricTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvironmentMetricTargets',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEnvironmentMetricTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnvironmentMetricTargetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the targets of an environment.
     *
     * @param request - ListEnvironmentMetricTargetsRequest
     * @returns ListEnvironmentMetricTargetsResponse
     *
     * @param ListEnvironmentMetricTargetsRequest $request
     *
     * @return ListEnvironmentMetricTargetsResponse
     */
    public function listEnvironmentMetricTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvironmentMetricTargetsWithOptions($request, $runtime);
    }

    /**
     * Queries environments.
     *
     * @param tmpReq - ListEnvironmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEnvironmentsResponse
     *
     * @param ListEnvironmentsRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironmentsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListEnvironmentsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->addonName) {
            @$query['AddonName'] = $request->addonName;
        }

        if (null !== $request->bindResourceId) {
            @$query['BindResourceId'] = $request->bindResourceId;
        }

        if (null !== $request->environmentType) {
            @$query['EnvironmentType'] = $request->environmentType;
        }

        if (null !== $request->feePackage) {
            @$query['FeePackage'] = $request->feePackage;
        }

        if (null !== $request->filterRegionIds) {
            @$query['FilterRegionIds'] = $request->filterRegionIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvironments',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEnvironmentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnvironmentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries environments.
     *
     * @param request - ListEnvironmentsRequest
     * @returns ListEnvironmentsResponse
     *
     * @param ListEnvironmentsRequest $request
     *
     * @return ListEnvironmentsResponse
     */
    public function listEnvironments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvironmentsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an escalation policy.
     *
     * @param request - ListEscalationPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEscalationPoliciesResponse
     *
     * @param ListEscalationPoliciesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListEscalationPoliciesResponse
     */
    public function listEscalationPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEscalationPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEscalationPoliciesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about an escalation policy.
     *
     * @param request - ListEscalationPoliciesRequest
     * @returns ListEscalationPoliciesResponse
     *
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
     * Queries an EventBridge integration.
     *
     * @param request - ListEventBridgeIntegrationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEventBridgeIntegrationsResponse
     *
     * @param ListEventBridgeIntegrationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListEventBridgeIntegrationsResponse
     */
    public function listEventBridgeIntegrationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEventBridgeIntegrationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEventBridgeIntegrationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries an EventBridge integration.
     *
     * @param request - ListEventBridgeIntegrationsRequest
     * @returns ListEventBridgeIntegrationsResponse
     *
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
     * Obtain Specified Workspace List.
     *
     * @remarks
     * >The list returned by this operation includes the workspaces of Developer Edition, Expert Edition, and Advanced Edition. The list does not include the workspaces of Shared Edition.
     *
     * @param tmpReq - ListGrafanaWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListGrafanaWorkspaceResponse
     *
     * @param ListGrafanaWorkspaceRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ListGrafanaWorkspaceResponse
     */
    public function listGrafanaWorkspaceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListGrafanaWorkspaceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGrafanaWorkspace',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGrafanaWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGrafanaWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtain Specified Workspace List.
     *
     * @remarks
     * >The list returned by this operation includes the workspaces of Developer Edition, Expert Edition, and Advanced Edition. The list does not include the workspaces of Shared Edition.
     *
     * @param request - ListGrafanaWorkspaceRequest
     * @returns ListGrafanaWorkspaceResponse
     *
     * @param ListGrafanaWorkspaceRequest $request
     *
     * @return ListGrafanaWorkspaceResponse
     */
    public function listGrafanaWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGrafanaWorkspaceWithOptions($request, $runtime);
    }

    /**
     * Queries the abnormal Insights events within a specified period of time.
     *
     * @param request - ListInsightsEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListInsightsEventsResponse
     *
     * @param ListInsightsEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListInsightsEventsResponse
     */
    public function listInsightsEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->insightsTypes) {
            @$query['InsightsTypes'] = $request->insightsTypes;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInsightsEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInsightsEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the abnormal Insights events within a specified period of time.
     *
     * @param request - ListInsightsEventsRequest
     * @returns ListInsightsEventsResponse
     *
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
     * Views a list of alert integrations.
     *
     * @param request - ListIntegrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListIntegrationResponse
     *
     * @param ListIntegrationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListIntegrationResponse
     */
    public function listIntegrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListIntegrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Views a list of alert integrations.
     *
     * @param request - ListIntegrationRequest
     * @returns ListIntegrationResponse
     *
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
     * Queries notification policies based on specified conditions.
     *
     * @param request - ListNotificationPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListNotificationPoliciesResponse
     *
     * @param ListNotificationPoliciesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListNotificationPoliciesResponse
     */
    public function listNotificationPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directedMode) {
            @$query['DirectedMode'] = $request->directedMode;
        }

        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->isDetail) {
            @$query['IsDetail'] = $request->isDetail;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNotificationPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNotificationPoliciesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries notification policies based on specified conditions.
     *
     * @param request - ListNotificationPoliciesRequest
     * @returns ListNotificationPoliciesResponse
     *
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
     * Queries the information about a scheduling policy.
     *
     * @param request - ListOnCallSchedulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListOnCallSchedulesResponse
     *
     * @param ListOnCallSchedulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListOnCallSchedulesResponse
     */
    public function listOnCallSchedulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListOnCallSchedulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListOnCallSchedulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a scheduling policy.
     *
     * @param request - ListOnCallSchedulesRequest
     * @returns ListOnCallSchedulesResponse
     *
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
     * Queries the alert rules created for a Prometheus instance.
     *
     * @param request - ListPrometheusAlertRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPrometheusAlertRulesResponse
     *
     * @param ListPrometheusAlertRulesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPrometheusAlertRulesResponse
     */
    public function listPrometheusAlertRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->matchExpressions) {
            @$query['MatchExpressions'] = $request->matchExpressions;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPrometheusAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPrometheusAlertRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the alert rules created for a Prometheus instance.
     *
     * @param request - ListPrometheusAlertRulesRequest
     * @returns ListPrometheusAlertRulesResponse
     *
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
     * Queries the alert templates of Prometheus Service.
     *
     * @param request - ListPrometheusAlertTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPrometheusAlertTemplatesResponse
     *
     * @param ListPrometheusAlertTemplatesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListPrometheusAlertTemplatesResponse
     */
    public function listPrometheusAlertTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPrometheusAlertTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPrometheusAlertTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the alert templates of Prometheus Service.
     *
     * @param request - ListPrometheusAlertTemplatesRequest
     * @returns ListPrometheusAlertTemplatesResponse
     *
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
     * Creates a global aggregation instance in Prometheus Service and obtains the list of global aggregation instances.
     *
     * @param request - ListPrometheusGlobalViewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPrometheusGlobalViewResponse
     *
     * @param ListPrometheusGlobalViewRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPrometheusGlobalViewResponse
     */
    public function listPrometheusGlobalViewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPrometheusGlobalViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a global aggregation instance in Prometheus Service and obtains the list of global aggregation instances.
     *
     * @param request - ListPrometheusGlobalViewRequest
     * @returns ListPrometheusGlobalViewResponse
     *
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
     * Queries Prometheus instances by tag and resource group.
     *
     * @param request - ListPrometheusInstanceByTagAndResourceGroupIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPrometheusInstanceByTagAndResourceGroupIdResponse
     *
     * @param ListPrometheusInstanceByTagAndResourceGroupIdRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return ListPrometheusInstanceByTagAndResourceGroupIdResponse
     */
    public function listPrometheusInstanceByTagAndResourceGroupIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrometheusInstanceByTagAndResourceGroupId',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPrometheusInstanceByTagAndResourceGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPrometheusInstanceByTagAndResourceGroupIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries Prometheus instances by tag and resource group.
     *
     * @param request - ListPrometheusInstanceByTagAndResourceGroupIdRequest
     * @returns ListPrometheusInstanceByTagAndResourceGroupIdResponse
     *
     * @param ListPrometheusInstanceByTagAndResourceGroupIdRequest $request
     *
     * @return ListPrometheusInstanceByTagAndResourceGroupIdResponse
     */
    public function listPrometheusInstanceByTagAndResourceGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusInstanceByTagAndResourceGroupIdWithOptions($request, $runtime);
    }

    /**
     * Obtains all Prometheus instances in a region.
     *
     * @param request - ListPrometheusInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPrometheusInstancesResponse
     *
     * @param ListPrometheusInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListPrometheusInstancesResponse
     */
    public function listPrometheusInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->showGlobalView) {
            @$query['ShowGlobalView'] = $request->showGlobalView;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPrometheusInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPrometheusInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains all Prometheus instances in a region.
     *
     * @param request - ListPrometheusInstancesRequest
     * @returns ListPrometheusInstancesResponse
     *
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
     * Queries a list of exporters that are integrated into a Prometheus instance. Only aliyun-cs and ecs instances are supported.
     *
     * @param request - ListPrometheusIntegrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPrometheusIntegrationResponse
     *
     * @param ListPrometheusIntegrationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListPrometheusIntegrationResponse
     */
    public function listPrometheusIntegrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->integrationType) {
            @$query['IntegrationType'] = $request->integrationType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrometheusIntegration',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPrometheusIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPrometheusIntegrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of exporters that are integrated into a Prometheus instance. Only aliyun-cs and ecs instances are supported.
     *
     * @param request - ListPrometheusIntegrationRequest
     * @returns ListPrometheusIntegrationResponse
     *
     * @param ListPrometheusIntegrationRequest $request
     *
     * @return ListPrometheusIntegrationResponse
     */
    public function listPrometheusIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusIntegrationWithOptions($request, $runtime);
    }

    /**
     * Queries the monitoring configuration of a Prometheus instance.
     *
     * @param request - ListPrometheusMonitoringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPrometheusMonitoringResponse
     *
     * @param ListPrometheusMonitoringRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPrometheusMonitoringResponse
     */
    public function listPrometheusMonitoringWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrometheusMonitoring',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPrometheusMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPrometheusMonitoringResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the monitoring configuration of a Prometheus instance.
     *
     * @param request - ListPrometheusMonitoringRequest
     * @returns ListPrometheusMonitoringResponse
     *
     * @param ListPrometheusMonitoringRequest $request
     *
     * @return ListPrometheusMonitoringResponse
     */
    public function listPrometheusMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusMonitoringWithOptions($request, $runtime);
    }

    /**
     * Queries the Browser Monitoring tasks in a region.
     *
     * @remarks
     *
     * @param request - ListRetcodeAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListRetcodeAppsResponse
     *
     * @param ListRetcodeAppsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListRetcodeAppsResponse
     */
    public function listRetcodeAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRetcodeAppsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRetcodeAppsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the Browser Monitoring tasks in a region.
     *
     * @remarks
     *
     * @param request - ListRetcodeAppsRequest
     * @returns ListRetcodeAppsResponse
     *
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
     * @param request - ListScenarioRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListScenarioResponse
     *
     * @param ListScenarioRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListScenarioResponse
     */
    public function listScenarioWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scenario) {
            @$query['Scenario'] = $request->scenario;
        }

        if (null !== $request->sign) {
            @$query['Sign'] = $request->sign;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListScenarioResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListScenarioResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListScenarioRequest
     * @returns ListScenarioResponse
     *
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
     * Queries the information of a silence policy list.
     *
     * @param request - ListSilencePoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSilencePoliciesResponse
     *
     * @param ListSilencePoliciesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListSilencePoliciesResponse
     */
    public function listSilencePoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isDetail) {
            @$query['IsDetail'] = $request->isDetail;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSilencePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSilencePoliciesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information of a silence policy list.
     *
     * @param request - ListSilencePoliciesRequest
     * @returns ListSilencePoliciesResponse
     *
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
     * Obtains the results of one or more synthetic tests.
     *
     * @param tmpReq - ListSyntheticDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSyntheticDetailResponse
     *
     * @param ListSyntheticDetailRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListSyntheticDetailResponse
     */
    public function listSyntheticDetailWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListSyntheticDetailShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->advancedFilters) {
            $request->advancedFiltersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->advancedFilters, 'AdvancedFilters', 'json');
        }

        if (null !== $tmpReq->exactFilters) {
            $request->exactFiltersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->exactFilters, 'ExactFilters', 'json');
        }

        if (null !== $tmpReq->filters) {
            $request->filtersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filters, 'Filters', 'json');
        }

        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSyntheticDetail',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSyntheticDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSyntheticDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the results of one or more synthetic tests.
     *
     * @param request - ListSyntheticDetailRequest
     * @returns ListSyntheticDetailResponse
     *
     * @param ListSyntheticDetailRequest $request
     *
     * @return ListSyntheticDetailResponse
     */
    public function listSyntheticDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSyntheticDetailWithOptions($request, $runtime);
    }

    /**
     * Queries scheduled synthetic monitoring tasks.
     *
     * @param tmpReq - ListTimingSyntheticTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTimingSyntheticTasksResponse
     *
     * @param ListTimingSyntheticTasksRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ListTimingSyntheticTasksResponse
     */
    public function listTimingSyntheticTasksWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTimingSyntheticTasksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->search) {
            $request->searchShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->search, 'Search', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTimingSyntheticTasks',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTimingSyntheticTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTimingSyntheticTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries scheduled synthetic monitoring tasks.
     *
     * @param request - ListTimingSyntheticTasksRequest
     * @returns ListTimingSyntheticTasksResponse
     *
     * @param ListTimingSyntheticTasksRequest $request
     *
     * @return ListTimingSyntheticTasksResponse
     */
    public function listTimingSyntheticTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTimingSyntheticTasksWithOptions($request, $runtime);
    }

    /**
     * Queries all Application Monitoring tasks in a specified region.
     *
     * @param request - ListTraceAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTraceAppsResponse
     *
     * @param ListTraceAppsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTraceAppsResponse
     */
    public function listTraceAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTraceAppsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTraceAppsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all Application Monitoring tasks in a specified region.
     *
     * @param request - ListTraceAppsRequest
     * @returns ListTraceAppsResponse
     *
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
     * Obtains the recording rule of a cluster monitored by Prometheus Service.
     *
     * @param request - ManageGetRecordingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ManageGetRecordingRuleResponse
     *
     * @param ManageGetRecordingRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ManageGetRecordingRuleResponse
     */
    public function manageGetRecordingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->queryUserId) {
            @$query['QueryUserId'] = $request->queryUserId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ManageGetRecordingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ManageGetRecordingRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the recording rule of a cluster monitored by Prometheus Service.
     *
     * @param request - ManageGetRecordingRuleRequest
     * @returns ManageGetRecordingRuleResponse
     *
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
     * Edits the recording rule of a cluster monitored by Prometheus Service.
     *
     * @param request - ManageRecordingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ManageRecordingRuleResponse
     *
     * @param ManageRecordingRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ManageRecordingRuleResponse
     */
    public function manageRecordingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->queryUserId) {
            @$query['QueryUserId'] = $request->queryUserId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->ruleYaml) {
            @$query['RuleYaml'] = $request->ruleYaml;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ManageRecordingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ManageRecordingRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Edits the recording rule of a cluster monitored by Prometheus Service.
     *
     * @param request - ManageRecordingRuleRequest
     * @returns ManageRecordingRuleResponse
     *
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
     * Activates the service-linked role AliyunServiceRoleForARMS for Application Real-Time Monitoring Service (ARMS).
     *
     * @param request - OpenArmsDefaultSLRRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns OpenArmsDefaultSLRResponse
     *
     * @param OpenArmsDefaultSLRRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OpenArmsDefaultSLRResponse
     */
    public function openArmsDefaultSLRWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return OpenArmsDefaultSLRResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OpenArmsDefaultSLRResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Activates the service-linked role AliyunServiceRoleForARMS for Application Real-Time Monitoring Service (ARMS).
     *
     * @param request - OpenArmsDefaultSLRRequest
     * @returns OpenArmsDefaultSLRResponse
     *
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
     * Activates a specified pay-as-you-go sub-service of Application Real-Time Monitoring Service (ARMS).
     *
     * @remarks
     * The **OpenArmsServiceSecondVersion** operation supports the following sub-service editions:
     * *   Application Monitoring: Basic Edition
     * *   Browser Monitoring: Basic Edition
     * *   Synthetic Monitoring: Pro Edition (pay-as-you-go)
     * *   Prometheus Service: Pro Edition
     *
     * @param request - OpenArmsServiceSecondVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns OpenArmsServiceSecondVersionResponse
     *
     * @param OpenArmsServiceSecondVersionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return OpenArmsServiceSecondVersionResponse
     */
    public function openArmsServiceSecondVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return OpenArmsServiceSecondVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OpenArmsServiceSecondVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Activates a specified pay-as-you-go sub-service of Application Real-Time Monitoring Service (ARMS).
     *
     * @remarks
     * The **OpenArmsServiceSecondVersion** operation supports the following sub-service editions:
     * *   Application Monitoring: Basic Edition
     * *   Browser Monitoring: Basic Edition
     * *   Synthetic Monitoring: Pro Edition (pay-as-you-go)
     * *   Prometheus Service: Pro Edition
     *
     * @param request - OpenArmsServiceSecondVersionRequest
     * @returns OpenArmsServiceSecondVersionResponse
     *
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
     * Activates a virtual cluster.
     *
     * @param request - OpenVClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns OpenVClusterResponse
     *
     * @param OpenVClusterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return OpenVClusterResponse
     */
    public function openVClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->recreateSwitch) {
            @$query['RecreateSwitch'] = $request->recreateSwitch;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return OpenVClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OpenVClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Activates a virtual cluster.
     *
     * @param request - OpenVClusterRequest
     * @returns OpenVClusterResponse
     *
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
     * Activates the service-linked role AliyunServiceRoleForXtrace for Tracing Analysis.
     *
     * @param request - OpenXtraceDefaultSLRRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns OpenXtraceDefaultSLRResponse
     *
     * @param OpenXtraceDefaultSLRRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return OpenXtraceDefaultSLRResponse
     */
    public function openXtraceDefaultSLRWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return OpenXtraceDefaultSLRResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OpenXtraceDefaultSLRResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Activates the service-linked role AliyunServiceRoleForXtrace for Tracing Analysis.
     *
     * @param request - OpenXtraceDefaultSLRRequest
     * @returns OpenXtraceDefaultSLRResponse
     *
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
     * Queries the encoding mapping content based on the metadata IDs and metadata type.
     *
     * @param request - QueryAppMetadataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryAppMetadataResponse
     *
     * @param QueryAppMetadataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryAppMetadataResponse
     */
    public function queryAppMetadataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAppMetadata',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryAppMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAppMetadataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the encoding mapping content based on the metadata IDs and metadata type.
     *
     * @param request - QueryAppMetadataRequest
     * @returns QueryAppMetadataResponse
     *
     * @param QueryAppMetadataRequest $request
     *
     * @return QueryAppMetadataResponse
     */
    public function queryAppMetadata($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAppMetadataWithOptions($request, $runtime);
    }

    /**
     * 查询应用拓扑.
     *
     * @param tmpReq - QueryAppTopologyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryAppTopologyResponse
     *
     * @param QueryAppTopologyRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return QueryAppTopologyResponse
     */
    public function queryAppTopologyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryAppTopologyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filters) {
            $request->filtersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filters, 'Filters', 'json');
        }

        $query = [];
        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->db) {
            @$query['Db'] = $request->db;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->filtersShrink) {
            @$query['Filters'] = $request->filtersShrink;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->rpc) {
            @$query['Rpc'] = $request->rpc;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAppTopology',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryAppTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAppTopologyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询应用拓扑.
     *
     * @param request - QueryAppTopologyRequest
     * @returns QueryAppTopologyResponse
     *
     * @param QueryAppTopologyRequest $request
     *
     * @return QueryAppTopologyResponse
     */
    public function queryAppTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAppTopologyWithOptions($request, $runtime);
    }

    /**
     * Queries the amount of data written to Application Monitoring, Managed Service for OpenTelemetry, Managed Service for Prometheus, and Real User Monitoring (RUM).
     *
     * @param request - QueryCommercialUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryCommercialUsageResponse
     *
     * @param QueryCommercialUsageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryCommercialUsageResponse
     */
    public function queryCommercialUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->advancedFilters) {
            @$query['AdvancedFilters'] = $request->advancedFilters;
        }

        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->intervalInSec) {
            @$query['IntervalInSec'] = $request->intervalInSec;
        }

        if (null !== $request->measures) {
            @$query['Measures'] = $request->measures;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCommercialUsage',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryCommercialUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryCommercialUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the amount of data written to Application Monitoring, Managed Service for OpenTelemetry, Managed Service for Prometheus, and Real User Monitoring (RUM).
     *
     * @param request - QueryCommercialUsageRequest
     * @returns QueryCommercialUsageResponse
     *
     * @param QueryCommercialUsageRequest $request
     *
     * @return QueryCommercialUsageResponse
     */
    public function queryCommercialUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCommercialUsageWithOptions($request, $runtime);
    }

    /**
     * Queries an Application Monitoring metric or a Browser Monitoring metric.
     *
     * @param request - QueryMetricByPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryMetricByPageResponse
     *
     * @param QueryMetricByPageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryMetricByPageResponse
     */
    public function queryMetricByPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->customFilters) {
            @$query['CustomFilters'] = $request->customFilters;
        }

        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->intervalInSec) {
            @$query['IntervalInSec'] = $request->intervalInSec;
        }

        if (null !== $request->measures) {
            @$query['Measures'] = $request->measures;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMetricByPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMetricByPageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries an Application Monitoring metric or a Browser Monitoring metric.
     *
     * @param request - QueryMetricByPageRequest
     * @returns QueryMetricByPageResponse
     *
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
     * Queries whether the Prometheus agent is installed on a cluster.
     *
     * @param request - QueryPromInstallStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryPromInstallStatusResponse
     *
     * @param QueryPromInstallStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryPromInstallStatusResponse
     */
    public function queryPromInstallStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryPromInstallStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryPromInstallStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries whether the Prometheus agent is installed on a cluster.
     *
     * @param request - QueryPromInstallStatusRequest
     * @returns QueryPromInstallStatusResponse
     *
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
     * Queries the metrics that are provided for different versions of a specified Enterprise Distributed Application Service (EDAS) or Kubernetes application.
     *
     * @param request - QueryReleaseMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryReleaseMetricResponse
     *
     * @param QueryReleaseMetricRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryReleaseMetricResponse
     */
    public function queryReleaseMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeOrderId) {
            @$query['ChangeOrderId'] = $request->changeOrderId;
        }

        if (null !== $request->createTime) {
            @$query['CreateTime'] = $request->createTime;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->proxyUserId) {
            @$query['ProxyUserId'] = $request->proxyUserId;
        }

        if (null !== $request->releaseEndTime) {
            @$query['ReleaseEndTime'] = $request->releaseEndTime;
        }

        if (null !== $request->releaseStartTime) {
            @$query['ReleaseStartTime'] = $request->releaseStartTime;
        }

        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryReleaseMetricResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryReleaseMetricResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the metrics that are provided for different versions of a specified Enterprise Distributed Application Service (EDAS) or Kubernetes application.
     *
     * @param request - QueryReleaseMetricRequest
     * @returns QueryReleaseMetricResponse
     *
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
     * Removes data sources from a global aggregation instance.
     *
     * @param request - RemoveAliClusterIdsFromPrometheusGlobalViewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RemoveAliClusterIdsFromPrometheusGlobalViewResponse
     *
     * @param RemoveAliClusterIdsFromPrometheusGlobalViewRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return RemoveAliClusterIdsFromPrometheusGlobalViewResponse
     */
    public function removeAliClusterIdsFromPrometheusGlobalViewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterIds) {
            @$query['ClusterIds'] = $request->clusterIds;
        }

        if (null !== $request->globalViewClusterId) {
            @$query['GlobalViewClusterId'] = $request->globalViewClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveAliClusterIdsFromPrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveAliClusterIdsFromPrometheusGlobalViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes data sources from a global aggregation instance.
     *
     * @param request - RemoveAliClusterIdsFromPrometheusGlobalViewRequest
     * @returns RemoveAliClusterIdsFromPrometheusGlobalViewResponse
     *
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
     * Removes custom data sources from a global aggregation instance in Prometheus Service.
     *
     * @param request - RemoveSourcesFromPrometheusGlobalViewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RemoveSourcesFromPrometheusGlobalViewResponse
     *
     * @param RemoveSourcesFromPrometheusGlobalViewRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return RemoveSourcesFromPrometheusGlobalViewResponse
     */
    public function removeSourcesFromPrometheusGlobalViewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalViewClusterId) {
            @$query['GlobalViewClusterId'] = $request->globalViewClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sourceNames) {
            @$query['SourceNames'] = $request->sourceNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveSourcesFromPrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveSourcesFromPrometheusGlobalViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes custom data sources from a global aggregation instance in Prometheus Service.
     *
     * @param request - RemoveSourcesFromPrometheusGlobalViewRequest
     * @returns RemoveSourcesFromPrometheusGlobalViewResponse
     *
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
     * Restarts a feature.
     *
     * @param request - RestartEnvironmentFeatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RestartEnvironmentFeatureResponse
     *
     * @param RestartEnvironmentFeatureRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RestartEnvironmentFeatureResponse
     */
    public function restartEnvironmentFeatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->featureName) {
            @$query['FeatureName'] = $request->featureName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartEnvironmentFeature',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RestartEnvironmentFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RestartEnvironmentFeatureResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Restarts a feature.
     *
     * @param request - RestartEnvironmentFeatureRequest
     * @returns RestartEnvironmentFeatureResponse
     *
     * @param RestartEnvironmentFeatureRequest $request
     *
     * @return RestartEnvironmentFeatureResponse
     */
    public function restartEnvironmentFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartEnvironmentFeatureWithOptions($request, $runtime);
    }

    /**
     * Modifies the settings of Application Monitoring, such as trace sampling and agent switch settings.
     *
     * @param request - SaveTraceAppConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SaveTraceAppConfigResponse
     *
     * @param SaveTraceAppConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SaveTraceAppConfigResponse
     */
    public function saveTraceAppConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->settings) {
            @$query['Settings'] = $request->settings;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SaveTraceAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SaveTraceAppConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the settings of Application Monitoring, such as trace sampling and agent switch settings.
     *
     * @param request - SaveTraceAppConfigRequest
     * @returns SaveTraceAppConfigResponse
     *
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
     * Queries alert contacts.
     *
     * @remarks
     * This operation is no longer maintained. To query alert contacts, call the DescribeContacts operation provided by the new version of Alert Management.
     *
     * @param request - SearchAlertContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchAlertContactResponse
     *
     * @param SearchAlertContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SearchAlertContactResponse
     */
    public function searchAlertContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactIds) {
            @$query['ContactIds'] = $request->contactIds;
        }

        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchAlertContactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries alert contacts.
     *
     * @remarks
     * This operation is no longer maintained. To query alert contacts, call the DescribeContacts operation provided by the new version of Alert Management.
     *
     * @param request - SearchAlertContactRequest
     * @returns SearchAlertContactResponse
     *
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
     * Queries alert contact groups.
     *
     * @remarks
     * The operation is no longer maintained. Call the DescribeContactGroups operation in the alert management module to query alert contact groups.
     *
     * @param request - SearchAlertContactGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchAlertContactGroupResponse
     *
     * @param SearchAlertContactGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchAlertContactGroupResponse
     */
    public function searchAlertContactGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroupIds) {
            @$query['ContactGroupIds'] = $request->contactGroupIds;
        }

        if (null !== $request->contactGroupName) {
            @$query['ContactGroupName'] = $request->contactGroupName;
        }

        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        if (null !== $request->isDetail) {
            @$query['IsDetail'] = $request->isDetail;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchAlertContactGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries alert contact groups.
     *
     * @remarks
     * The operation is no longer maintained. Call the DescribeContactGroups operation in the alert management module to query alert contact groups.
     *
     * @param request - SearchAlertContactGroupRequest
     * @returns SearchAlertContactGroupResponse
     *
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
     * Queries the alert records of an alert rule.
     *
     * @remarks
     * This operation is no longer maintained. To query alert records, call the ListAlerts operation provided by the new version of Alert Management.
     *
     * @param request - SearchAlertHistoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchAlertHistoriesResponse
     *
     * @param SearchAlertHistoriesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchAlertHistoriesResponse
     */
    public function searchAlertHistoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertId) {
            @$query['AlertId'] = $request->alertId;
        }

        if (null !== $request->alertType) {
            @$query['AlertType'] = $request->alertType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchAlertHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchAlertHistoriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the alert records of an alert rule.
     *
     * @remarks
     * This operation is no longer maintained. To query alert records, call the ListAlerts operation provided by the new version of Alert Management.
     *
     * @param request - SearchAlertHistoriesRequest
     * @returns SearchAlertHistoriesResponse
     *
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
     * Queries alert rules.
     *
     * @remarks
     * The current operation is no longer maintained. You can call the GetAlertRules operation of Alert Management (New) to query existing alert rules.
     *
     * @param request - SearchAlertRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchAlertRulesResponse
     *
     * @param SearchAlertRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SearchAlertRulesResponse
     */
    public function searchAlertRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertRuleId) {
            @$query['AlertRuleId'] = $request->alertRuleId;
        }

        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->systemRegionId) {
            @$query['SystemRegionId'] = $request->systemRegionId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchAlertRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchAlertRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries alert rules.
     *
     * @remarks
     * The current operation is no longer maintained. You can call the GetAlertRules operation of Alert Management (New) to query existing alert rules.
     *
     * @param request - SearchAlertRulesRequest
     * @returns SearchAlertRulesResponse
     *
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
     * Queries alert event records.
     *
     * @remarks
     * Alert event records are different from alert notification records. Alert events are recorded every minute after an alert rule filters data. Alert events can be classified based on whether they are triggered or not. If a triggered event is not in the silence period, an alert notification is sent.
     *
     * @param request - SearchEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchEventsResponse
     *
     * @param SearchEventsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SearchEventsResponse
     */
    public function searchEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertId) {
            @$query['AlertId'] = $request->alertId;
        }

        if (null !== $request->alertType) {
            @$query['AlertType'] = $request->alertType;
        }

        if (null !== $request->appType) {
            @$query['AppType'] = $request->appType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->isTrigger) {
            @$query['IsTrigger'] = $request->isTrigger;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries alert event records.
     *
     * @remarks
     * Alert event records are different from alert notification records. Alert events are recorded every minute after an alert rule filters data. Alert events can be classified based on whether they are triggered or not. If a triggered event is not in the silence period, an alert notification is sent.
     *
     * @param request - SearchEventsRequest
     * @returns SearchEventsResponse
     *
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
     * Queries Browser Monitoring tasks by page.
     *
     * @param request - SearchRetcodeAppByPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchRetcodeAppByPageResponse
     *
     * @param SearchRetcodeAppByPageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SearchRetcodeAppByPageResponse
     */
    public function searchRetcodeAppByPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->retcodeAppId) {
            @$query['RetcodeAppId'] = $request->retcodeAppId;
        }

        if (null !== $request->retcodeAppName) {
            @$query['RetcodeAppName'] = $request->retcodeAppName;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchRetcodeAppByPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchRetcodeAppByPageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries Browser Monitoring tasks by page.
     *
     * @param request - SearchRetcodeAppByPageRequest
     * @returns SearchRetcodeAppByPageResponse
     *
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
     * Queries Application Monitoring tasks by application name.
     *
     * @param request - SearchTraceAppByNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchTraceAppByNameResponse
     *
     * @param SearchTraceAppByNameRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchTraceAppByNameResponse
     */
    public function searchTraceAppByNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->traceAppName) {
            @$query['TraceAppName'] = $request->traceAppName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchTraceAppByNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchTraceAppByNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries Application Monitoring tasks by application name.
     *
     * @param request - SearchTraceAppByNameRequest
     * @returns SearchTraceAppByNameResponse
     *
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
     * Queries application monitoring tasks by page.
     *
     * @param request - SearchTraceAppByPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchTraceAppByPageResponse
     *
     * @param SearchTraceAppByPageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchTraceAppByPageResponse
     */
    public function searchTraceAppByPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->traceAppName) {
            @$query['TraceAppName'] = $request->traceAppName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchTraceAppByPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchTraceAppByPageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries application monitoring tasks by page.
     *
     * @param request - SearchTraceAppByPageRequest
     * @returns SearchTraceAppByPageResponse
     *
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
     * Queries traces by time, application name, IP address, span name, and tag.
     *
     * @remarks
     * > A maximum of 100 data entries can be returned each time this operation is called. If you want to query all existing traces, we recommend that you call the SearchTracesByPage operation. For more information, see [SearchTracesByPage](https://help.aliyun.com/document_detail/175866.html).
     *
     * @param request - SearchTracesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchTracesResponse
     *
     * @param SearchTracesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SearchTracesResponse
     */
    public function searchTracesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->exclusionFilters) {
            @$query['ExclusionFilters'] = $request->exclusionFilters;
        }

        if (null !== $request->minDuration) {
            @$query['MinDuration'] = $request->minDuration;
        }

        if (null !== $request->operationName) {
            @$query['OperationName'] = $request->operationName;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->reverse) {
            @$query['Reverse'] = $request->reverse;
        }

        if (null !== $request->serviceIp) {
            @$query['ServiceIp'] = $request->serviceIp;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchTracesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchTracesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries traces by time, application name, IP address, span name, and tag.
     *
     * @remarks
     * > A maximum of 100 data entries can be returned each time this operation is called. If you want to query all existing traces, we recommend that you call the SearchTracesByPage operation. For more information, see [SearchTracesByPage](https://help.aliyun.com/document_detail/175866.html).
     *
     * @param request - SearchTracesRequest
     * @returns SearchTracesResponse
     *
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
     * Queries traces by page. You can query traces by time range, application name, IP address, span name, or tag.
     *
     * @param request - SearchTracesByPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchTracesByPageResponse
     *
     * @param SearchTracesByPageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SearchTracesByPageResponse
     */
    public function searchTracesByPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->exclusionFilters) {
            @$query['ExclusionFilters'] = $request->exclusionFilters;
        }

        if (null !== $request->isError) {
            @$query['IsError'] = $request->isError;
        }

        if (null !== $request->minDuration) {
            @$query['MinDuration'] = $request->minDuration;
        }

        if (null !== $request->operationName) {
            @$query['OperationName'] = $request->operationName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->reverse) {
            @$query['Reverse'] = $request->reverse;
        }

        if (null !== $request->serviceIp) {
            @$query['ServiceIp'] = $request->serviceIp;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchTracesByPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchTracesByPageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries traces by page. You can query traces by time range, application name, IP address, span name, or tag.
     *
     * @param request - SearchTracesByPageRequest
     * @returns SearchTracesByPageResponse
     *
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
     * Sends a text message to an alert contact to verify the mobile number of the alert contact.
     *
     * @remarks
     * After you receive the text message, verify the mobile number as prompted. Before you can specify a mobile phone number in a notification policy, you must verify the mobile phone number.
     *
     * @param request - SendTTSVerifyLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SendTTSVerifyLinkResponse
     *
     * @param SendTTSVerifyLinkRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SendTTSVerifyLinkResponse
     */
    public function sendTTSVerifyLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->contactId) {
            @$body['ContactId'] = $request->contactId;
        }

        if (null !== $request->phone) {
            @$body['Phone'] = $request->phone;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SendTTSVerifyLinkResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendTTSVerifyLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sends a text message to an alert contact to verify the mobile number of the alert contact.
     *
     * @remarks
     * After you receive the text message, verify the mobile number as prompted. Before you can specify a mobile phone number in a notification policy, you must verify the mobile phone number.
     *
     * @param request - SendTTSVerifyLinkRequest
     * @returns SendTTSVerifyLinkResponse
     *
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
     * Turns on or turns off logon-free sharing for an application monitored by Browser Monitoring.
     *
     * @param request - SetRetcodeShareStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetRetcodeShareStatusResponse
     *
     * @param SetRetcodeShareStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetRetcodeShareStatusResponse
     */
    public function setRetcodeShareStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetRetcodeShareStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetRetcodeShareStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Turns on or turns off logon-free sharing for an application monitored by Browser Monitoring.
     *
     * @param request - SetRetcodeShareStatusRequest
     * @returns SetRetcodeShareStatusResponse
     *
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
     * @param request - StartAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartAlertResponse
     *
     * @param StartAlertRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StartAlertResponse
     */
    public function startAlertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertId) {
            @$query['AlertId'] = $request->alertId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartAlertResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - StartAlertRequest
     * @returns StartAlertResponse
     *
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
     * Starts scheduled synthetic monitoring tasks.
     *
     * @param tmpReq - StartTimingSyntheticTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartTimingSyntheticTaskResponse
     *
     * @param StartTimingSyntheticTaskRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return StartTimingSyntheticTaskResponse
     */
    public function startTimingSyntheticTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartTimingSyntheticTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskIds) {
            $request->taskIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskIdsShrink) {
            @$query['TaskIds'] = $request->taskIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartTimingSyntheticTask',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartTimingSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartTimingSyntheticTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts scheduled synthetic monitoring tasks.
     *
     * @param request - StartTimingSyntheticTaskRequest
     * @returns StartTimingSyntheticTaskResponse
     *
     * @param StartTimingSyntheticTaskRequest $request
     *
     * @return StartTimingSyntheticTaskResponse
     */
    public function startTimingSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTimingSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * Call StartAlert to stop an alert rule.
     *
     * @param request - StopAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StopAlertResponse
     *
     * @param StopAlertRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StopAlertResponse
     */
    public function stopAlertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertId) {
            @$query['AlertId'] = $request->alertId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopAlertResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Call StartAlert to stop an alert rule.
     *
     * @param request - StopAlertRequest
     * @returns StopAlertResponse
     *
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
     * Stops scheduled synthetic monitoring tasks.
     *
     * @param tmpReq - StopTimingSyntheticTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StopTimingSyntheticTaskResponse
     *
     * @param StopTimingSyntheticTaskRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return StopTimingSyntheticTaskResponse
     */
    public function stopTimingSyntheticTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StopTimingSyntheticTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskIds) {
            $request->taskIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskIdsShrink) {
            @$query['TaskIds'] = $request->taskIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopTimingSyntheticTask',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopTimingSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopTimingSyntheticTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops scheduled synthetic monitoring tasks.
     *
     * @param request - StopTimingSyntheticTaskRequest
     * @returns StopTimingSyntheticTaskResponse
     *
     * @param StopTimingSyntheticTaskRequest $request
     *
     * @return StopTimingSyntheticTaskResponse
     */
    public function stopTimingSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTimingSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * Starts or stops a scheduled synthetic monitoring task.
     *
     * @param request - SwitchSyntheticTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SwitchSyntheticTaskStatusResponse
     *
     * @param SwitchSyntheticTaskStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SwitchSyntheticTaskStatusResponse
     */
    public function switchSyntheticTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->switchStatus) {
            @$query['SwitchStatus'] = $request->switchStatus;
        }

        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SwitchSyntheticTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SwitchSyntheticTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts or stops a scheduled synthetic monitoring task.
     *
     * @param request - SwitchSyntheticTaskStatusRequest
     * @returns SwitchSyntheticTaskStatusResponse
     *
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
     * Synchronizes the aggregation rule of a cluster to other clusters in a region.
     *
     * @param request - SyncRecordingRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SyncRecordingRulesResponse
     *
     * @param SyncRecordingRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SyncRecordingRulesResponse
     */
    public function syncRecordingRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->targetClusters) {
            @$query['TargetClusters'] = $request->targetClusters;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SyncRecordingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SyncRecordingRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Synchronizes the aggregation rule of a cluster to other clusters in a region.
     *
     * @param request - SyncRecordingRulesRequest
     * @returns SyncRecordingRulesResponse
     *
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
     * Adds tags to ARMS resources.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds tags to ARMS resources.
     *
     * @param request - TagResourcesRequest
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

    // Deprecated

    /**
     * Uninstalls a managed Prometheus agent for a serverless Kubernetes (ASK) cluster, Distributed Cloud Container Platform for Kubernetes (ACK One) cluster, or Elastic Compute Service (ECS) cluster.
     *
     * @remarks
     * This operation is available only for ASK, ECS, and ACK One clusters. Before you call this operation, make sure that a managed Prometheus agent is installed for your cluster.
     *
     * @deprecated OpenAPI UninstallManagedPrometheus is deprecated
     *
     * @param request - UninstallManagedPrometheusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UninstallManagedPrometheusResponse
     *
     * @param UninstallManagedPrometheusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UninstallManagedPrometheusResponse
     */
    public function uninstallManagedPrometheusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UninstallManagedPrometheusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UninstallManagedPrometheusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    // Deprecated

    /**
     * Uninstalls a managed Prometheus agent for a serverless Kubernetes (ASK) cluster, Distributed Cloud Container Platform for Kubernetes (ACK One) cluster, or Elastic Compute Service (ECS) cluster.
     *
     * @remarks
     * This operation is available only for ASK, ECS, and ACK One clusters. Before you call this operation, make sure that a managed Prometheus agent is installed for your cluster.
     *
     * @deprecated OpenAPI UninstallManagedPrometheus is deprecated
     *
     * @param request - UninstallManagedPrometheusRequest
     * @returns UninstallManagedPrometheusResponse
     *
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
     * Releases a Prometheus instance.
     *
     * @param request - UninstallPromClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UninstallPromClusterResponse
     *
     * @param UninstallPromClusterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UninstallPromClusterResponse
     */
    public function uninstallPromClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UninstallPromClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UninstallPromClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Releases a Prometheus instance.
     *
     * @param request - UninstallPromClusterRequest
     * @returns UninstallPromClusterResponse
     *
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
     * Removes tags from ARMS resources.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes tags from ARMS resources.
     *
     * @param request - UntagResourcesRequest
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
     * Updates an alert contact.
     *
     * @remarks
     * This operation is no longer maintained. To create or modify an alert contact, call the CreateOrUpdateContact operation provided by the new version of Alert Management.
     *
     * @param request - UpdateAlertContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateAlertContactResponse
     *
     * @param UpdateAlertContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAlertContactResponse
     */
    public function updateAlertContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        if (null !== $request->dingRobotWebhookUrl) {
            @$query['DingRobotWebhookUrl'] = $request->dingRobotWebhookUrl;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->phoneNum) {
            @$query['PhoneNum'] = $request->phoneNum;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->systemNoc) {
            @$query['SystemNoc'] = $request->systemNoc;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAlertContactResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAlertContactResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates an alert contact.
     *
     * @remarks
     * This operation is no longer maintained. To create or modify an alert contact, call the CreateOrUpdateContact operation provided by the new version of Alert Management.
     *
     * @param request - UpdateAlertContactRequest
     * @returns UpdateAlertContactResponse
     *
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
     * Updates UpdateAlertContactGroup alarm contact group.
     *
     * @param request - UpdateAlertContactGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateAlertContactGroupResponse
     *
     * @param UpdateAlertContactGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAlertContactGroupResponse
     */
    public function updateAlertContactGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroupId) {
            @$query['ContactGroupId'] = $request->contactGroupId;
        }

        if (null !== $request->contactGroupName) {
            @$query['ContactGroupName'] = $request->contactGroupName;
        }

        if (null !== $request->contactIds) {
            @$query['ContactIds'] = $request->contactIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAlertContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAlertContactGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates UpdateAlertContactGroup alarm contact group.
     *
     * @param request - UpdateAlertContactGroupRequest
     * @returns UpdateAlertContactGroupResponse
     *
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
     * @param request - UpdateAlertRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateAlertRuleResponse
     *
     * @param UpdateAlertRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAlertRuleResponse
     */
    public function updateAlertRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertId) {
            @$query['AlertId'] = $request->alertId;
        }

        if (null !== $request->contactGroupIds) {
            @$query['ContactGroupIds'] = $request->contactGroupIds;
        }

        if (null !== $request->isAutoStart) {
            @$query['IsAutoStart'] = $request->isAutoStart;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templageAlertConfig) {
            @$query['TemplageAlertConfig'] = $request->templageAlertConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAlertRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateAlertRuleRequest
     * @returns UpdateAlertRuleResponse
     *
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
     * Modifies a dispatch policy.
     *
     * @param request - UpdateDispatchRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDispatchRuleResponse
     *
     * @param UpdateDispatchRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDispatchRuleResponse
     */
    public function updateDispatchRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dispatchRule) {
            @$query['DispatchRule'] = $request->dispatchRule;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDispatchRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDispatchRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies a dispatch policy.
     *
     * @param request - UpdateDispatchRuleRequest
     * @returns UpdateDispatchRuleResponse
     *
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
     * Updates a custom job for an environment.
     *
     * @param request - UpdateEnvCustomJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateEnvCustomJobResponse
     *
     * @param UpdateEnvCustomJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateEnvCustomJobResponse
     */
    public function updateEnvCustomJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->customJobName) {
            @$query['CustomJobName'] = $request->customJobName;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $body = [];
        if (null !== $request->configYaml) {
            @$body['ConfigYaml'] = $request->configYaml;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEnvCustomJob',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateEnvCustomJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateEnvCustomJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a custom job for an environment.
     *
     * @param request - UpdateEnvCustomJobRequest
     * @returns UpdateEnvCustomJobResponse
     *
     * @param UpdateEnvCustomJobRequest $request
     *
     * @return UpdateEnvCustomJobResponse
     */
    public function updateEnvCustomJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEnvCustomJobWithOptions($request, $runtime);
    }

    /**
     * Updates the PodMonitor of an environment.
     *
     * @param request - UpdateEnvPodMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateEnvPodMonitorResponse
     *
     * @param UpdateEnvPodMonitorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateEnvPodMonitorResponse
     */
    public function updateEnvPodMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->podMonitorName) {
            @$query['PodMonitorName'] = $request->podMonitorName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->configYaml) {
            @$body['ConfigYaml'] = $request->configYaml;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEnvPodMonitor',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateEnvPodMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateEnvPodMonitorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the PodMonitor of an environment.
     *
     * @param request - UpdateEnvPodMonitorRequest
     * @returns UpdateEnvPodMonitorResponse
     *
     * @param UpdateEnvPodMonitorRequest $request
     *
     * @return UpdateEnvPodMonitorResponse
     */
    public function updateEnvPodMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEnvPodMonitorWithOptions($request, $runtime);
    }

    /**
     * Updates the ServiceMonitor of an environment.
     *
     * @param request - UpdateEnvServiceMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateEnvServiceMonitorResponse
     *
     * @param UpdateEnvServiceMonitorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateEnvServiceMonitorResponse
     */
    public function updateEnvServiceMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceMonitorName) {
            @$query['ServiceMonitorName'] = $request->serviceMonitorName;
        }

        $body = [];
        if (null !== $request->configYaml) {
            @$body['ConfigYaml'] = $request->configYaml;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEnvServiceMonitor',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateEnvServiceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateEnvServiceMonitorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the ServiceMonitor of an environment.
     *
     * @param request - UpdateEnvServiceMonitorRequest
     * @returns UpdateEnvServiceMonitorResponse
     *
     * @param UpdateEnvServiceMonitorRequest $request
     *
     * @return UpdateEnvServiceMonitorResponse
     */
    public function updateEnvServiceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEnvServiceMonitorWithOptions($request, $runtime);
    }

    /**
     * Updates the configuration of an environment.
     *
     * @param request - UpdateEnvironmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateEnvironmentResponse
     *
     * @param UpdateEnvironmentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->environmentName) {
            @$query['EnvironmentName'] = $request->environmentName;
        }

        if (null !== $request->feePackage) {
            @$query['FeePackage'] = $request->feePackage;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEnvironment',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateEnvironmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the configuration of an environment.
     *
     * @param request - UpdateEnvironmentRequest
     * @returns UpdateEnvironmentResponse
     *
     * @param UpdateEnvironmentRequest $request
     *
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEnvironmentWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a Grafana workspace.
     *
     * @param request - UpdateGrafanaWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateGrafanaWorkspaceResponse
     *
     * @param UpdateGrafanaWorkspaceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateGrafanaWorkspaceResponse
     */
    public function updateGrafanaWorkspaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->grafanaWorkspaceId) {
            @$query['GrafanaWorkspaceId'] = $request->grafanaWorkspaceId;
        }

        if (null !== $request->grafanaWorkspaceName) {
            @$query['GrafanaWorkspaceName'] = $request->grafanaWorkspaceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGrafanaWorkspace',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGrafanaWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGrafanaWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about a Grafana workspace.
     *
     * @param request - UpdateGrafanaWorkspaceRequest
     * @returns UpdateGrafanaWorkspaceResponse
     *
     * @param UpdateGrafanaWorkspaceRequest $request
     *
     * @return UpdateGrafanaWorkspaceResponse
     */
    public function updateGrafanaWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGrafanaWorkspaceWithOptions($request, $runtime);
    }

    /**
     * Updates the version of a Grafana workspace.
     *
     * @remarks
     * Note: The list returned by this operation includes the workspaces of Developer Edition, Expert Edition, and Advanced Edition. The list does not include the workspaces of Shared Edition.
     *
     * @param request - UpdateGrafanaWorkspaceVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateGrafanaWorkspaceVersionResponse
     *
     * @param UpdateGrafanaWorkspaceVersionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateGrafanaWorkspaceVersionResponse
     */
    public function updateGrafanaWorkspaceVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->grafanaVersion) {
            @$query['GrafanaVersion'] = $request->grafanaVersion;
        }

        if (null !== $request->grafanaWorkspaceId) {
            @$query['GrafanaWorkspaceId'] = $request->grafanaWorkspaceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGrafanaWorkspaceVersion',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateGrafanaWorkspaceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGrafanaWorkspaceVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the version of a Grafana workspace.
     *
     * @remarks
     * Note: The list returned by this operation includes the workspaces of Developer Edition, Expert Edition, and Advanced Edition. The list does not include the workspaces of Shared Edition.
     *
     * @param request - UpdateGrafanaWorkspaceVersionRequest
     * @returns UpdateGrafanaWorkspaceVersionResponse
     *
     * @param UpdateGrafanaWorkspaceVersionRequest $request
     *
     * @return UpdateGrafanaWorkspaceVersionResponse
     */
    public function updateGrafanaWorkspaceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGrafanaWorkspaceVersionWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about an integration.
     *
     * @param request - UpdateIntegrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateIntegrationResponse
     *
     * @param UpdateIntegrationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateIntegrationResponse
     */
    public function updateIntegrationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoRecover) {
            @$body['AutoRecover'] = $request->autoRecover;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->duplicateKey) {
            @$body['DuplicateKey'] = $request->duplicateKey;
        }

        if (null !== $request->extendedFieldRedefineRules) {
            @$body['ExtendedFieldRedefineRules'] = $request->extendedFieldRedefineRules;
        }

        if (null !== $request->fieldRedefineRules) {
            @$body['FieldRedefineRules'] = $request->fieldRedefineRules;
        }

        if (null !== $request->initiativeRecoverField) {
            @$body['InitiativeRecoverField'] = $request->initiativeRecoverField;
        }

        if (null !== $request->initiativeRecoverValue) {
            @$body['InitiativeRecoverValue'] = $request->initiativeRecoverValue;
        }

        if (null !== $request->integrationId) {
            @$body['IntegrationId'] = $request->integrationId;
        }

        if (null !== $request->integrationName) {
            @$body['IntegrationName'] = $request->integrationName;
        }

        if (null !== $request->integrationProductType) {
            @$body['IntegrationProductType'] = $request->integrationProductType;
        }

        if (null !== $request->liveness) {
            @$body['Liveness'] = $request->liveness;
        }

        if (null !== $request->recoverTime) {
            @$body['RecoverTime'] = $request->recoverTime;
        }

        if (null !== $request->stat) {
            @$body['Stat'] = $request->stat;
        }

        if (null !== $request->state) {
            @$body['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateIntegrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the information about an integration.
     *
     * @param request - UpdateIntegrationRequest
     * @returns UpdateIntegrationResponse
     *
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
     * Updates the list of discarded metrics.
     *
     * @param request - UpdateMetricDropRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateMetricDropResponse
     *
     * @param UpdateMetricDropRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateMetricDropResponse
     */
    public function updateMetricDropWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->metricDrop) {
            @$query['MetricDrop'] = $request->metricDrop;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMetricDrop',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateMetricDropResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMetricDropResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the list of discarded metrics.
     *
     * @param request - UpdateMetricDropRequest
     * @returns UpdateMetricDropResponse
     *
     * @param UpdateMetricDropRequest $request
     *
     * @return UpdateMetricDropResponse
     */
    public function updateMetricDrop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMetricDropWithOptions($request, $runtime);
    }

    /**
     * 更新Prometheus告警规则.
     *
     * @param request - UpdatePrometheusAlertRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdatePrometheusAlertRuleResponse
     *
     * @param UpdatePrometheusAlertRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdatePrometheusAlertRuleResponse
     */
    public function updatePrometheusAlertRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertId) {
            @$query['AlertId'] = $request->alertId;
        }

        if (null !== $request->alertName) {
            @$query['AlertName'] = $request->alertName;
        }

        if (null !== $request->annotations) {
            @$query['Annotations'] = $request->annotations;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dispatchRuleId) {
            @$query['DispatchRuleId'] = $request->dispatchRuleId;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->expression) {
            @$query['Expression'] = $request->expression;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->notifyType) {
            @$query['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdatePrometheusAlertRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePrometheusAlertRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新Prometheus告警规则.
     *
     * @param request - UpdatePrometheusAlertRuleRequest
     * @returns UpdatePrometheusAlertRuleResponse
     *
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
     * Updates the data sources of Prometheus instance for GlobalView.
     *
     * @param request - UpdatePrometheusGlobalViewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdatePrometheusGlobalViewResponse
     *
     * @param UpdatePrometheusGlobalViewRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdatePrometheusGlobalViewResponse
     */
    public function updatePrometheusGlobalViewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allSubClustersSuccess) {
            @$query['AllSubClustersSuccess'] = $request->allSubClustersSuccess;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->mostRegionId) {
            @$query['MostRegionId'] = $request->mostRegionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subClustersJson) {
            @$query['SubClustersJson'] = $request->subClustersJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePrometheusGlobalView',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdatePrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePrometheusGlobalViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the data sources of Prometheus instance for GlobalView.
     *
     * @param request - UpdatePrometheusGlobalViewRequest
     * @returns UpdatePrometheusGlobalViewResponse
     *
     * @param UpdatePrometheusGlobalViewRequest $request
     *
     * @return UpdatePrometheusGlobalViewResponse
     */
    public function updatePrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a Prometheus instance.
     *
     * @param request - UpdatePrometheusInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdatePrometheusInstanceResponse
     *
     * @param UpdatePrometheusInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdatePrometheusInstanceResponse
     */
    public function updatePrometheusInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->archiveDuration) {
            @$query['ArchiveDuration'] = $request->archiveDuration;
        }

        if (null !== $request->authFreeReadPolicy) {
            @$query['AuthFreeReadPolicy'] = $request->authFreeReadPolicy;
        }

        if (null !== $request->authFreeWritePolicy) {
            @$query['AuthFreeWritePolicy'] = $request->authFreeWritePolicy;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->enableAuthFreeRead) {
            @$query['EnableAuthFreeRead'] = $request->enableAuthFreeRead;
        }

        if (null !== $request->enableAuthFreeWrite) {
            @$query['EnableAuthFreeWrite'] = $request->enableAuthFreeWrite;
        }

        if (null !== $request->enableAuthToken) {
            @$query['EnableAuthToken'] = $request->enableAuthToken;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->storageDuration) {
            @$query['StorageDuration'] = $request->storageDuration;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePrometheusInstance',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdatePrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePrometheusInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about a Prometheus instance.
     *
     * @param request - UpdatePrometheusInstanceRequest
     * @returns UpdatePrometheusInstanceResponse
     *
     * @param UpdatePrometheusInstanceRequest $request
     *
     * @return UpdatePrometheusInstanceResponse
     */
    public function updatePrometheusInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrometheusInstanceWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of an exporter that is integrated into a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *
     * @param request - UpdatePrometheusIntegrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdatePrometheusIntegrationResponse
     *
     * @param UpdatePrometheusIntegrationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdatePrometheusIntegrationResponse
     */
    public function updatePrometheusIntegrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->integrationType) {
            @$query['IntegrationType'] = $request->integrationType;
        }

        if (null !== $request->param) {
            @$query['Param'] = $request->param;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePrometheusIntegration',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdatePrometheusIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePrometheusIntegrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of an exporter that is integrated into a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *
     * @param request - UpdatePrometheusIntegrationRequest
     * @returns UpdatePrometheusIntegrationResponse
     *
     * @param UpdatePrometheusIntegrationRequest $request
     *
     * @return UpdatePrometheusIntegrationResponse
     */
    public function updatePrometheusIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrometheusIntegrationWithOptions($request, $runtime);
    }

    /**
     * Updates the monitoring configuration of a Prometheus instance.
     *
     * @param request - UpdatePrometheusMonitoringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdatePrometheusMonitoringResponse
     *
     * @param UpdatePrometheusMonitoringRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdatePrometheusMonitoringResponse
     */
    public function updatePrometheusMonitoringWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->monitoringName) {
            @$query['MonitoringName'] = $request->monitoringName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $body = [];
        if (null !== $request->configYaml) {
            @$body['ConfigYaml'] = $request->configYaml;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePrometheusMonitoring',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdatePrometheusMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePrometheusMonitoringResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the monitoring configuration of a Prometheus instance.
     *
     * @param request - UpdatePrometheusMonitoringRequest
     * @returns UpdatePrometheusMonitoringResponse
     *
     * @param UpdatePrometheusMonitoringRequest $request
     *
     * @return UpdatePrometheusMonitoringResponse
     */
    public function updatePrometheusMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrometheusMonitoringWithOptions($request, $runtime);
    }

    /**
     * Updates the status of the monitoring configuration of a Prometheus instance.
     *
     * @param request - UpdatePrometheusMonitoringStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdatePrometheusMonitoringStatusResponse
     *
     * @param UpdatePrometheusMonitoringStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdatePrometheusMonitoringStatusResponse
     */
    public function updatePrometheusMonitoringStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->monitoringName) {
            @$query['MonitoringName'] = $request->monitoringName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePrometheusMonitoringStatus',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdatePrometheusMonitoringStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePrometheusMonitoringStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the status of the monitoring configuration of a Prometheus instance.
     *
     * @param request - UpdatePrometheusMonitoringStatusRequest
     * @returns UpdatePrometheusMonitoringStatusResponse
     *
     * @param UpdatePrometheusMonitoringStatusRequest $request
     *
     * @return UpdatePrometheusMonitoringStatusResponse
     */
    public function updatePrometheusMonitoringStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrometheusMonitoringStatusWithOptions($request, $runtime);
    }

    /**
     * Updates a Real User Monitoring (RUM) application.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - UpdateRumAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateRumAppResponse
     *
     * @param UpdateRumAppRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateRumAppResponse
     */
    public function updateRumAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRestart) {
            @$query['AutoRestart'] = $request->autoRestart;
        }

        if (null !== $request->backendServiceTraceRegion) {
            @$query['BackendServiceTraceRegion'] = $request->backendServiceTraceRegion;
        }

        if (null !== $request->bonreeSDKConfigJson) {
            @$query['BonreeSDKConfigJson'] = $request->bonreeSDKConfigJson;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->isSubscribe) {
            @$query['IsSubscribe'] = $request->isSubscribe;
        }

        if (null !== $request->nickname) {
            @$query['Nickname'] = $request->nickname;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->realRegionId) {
            @$query['RealRegionId'] = $request->realRegionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->restart) {
            @$query['Restart'] = $request->restart;
        }

        if (null !== $request->serviceDomainOperationJson) {
            @$query['ServiceDomainOperationJson'] = $request->serviceDomainOperationJson;
        }

        if (null !== $request->stop) {
            @$query['Stop'] = $request->stop;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRumApp',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateRumAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRumAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a Real User Monitoring (RUM) application.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - UpdateRumAppRequest
     * @returns UpdateRumAppResponse
     *
     * @param UpdateRumAppRequest $request
     *
     * @return UpdateRumAppResponse
     */
    public function updateRumApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRumAppWithOptions($request, $runtime);
    }

    /**
     * Updates the status of a Real User Monitoring (RUM) file. You can call this operation after the RUM file is uploaded.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - UpdateRumFileStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateRumFileStatusResponse
     *
     * @param UpdateRumFileStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateRumFileStatusResponse
     */
    public function updateRumFileStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRumFileStatus',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateRumFileStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRumFileStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the status of a Real User Monitoring (RUM) file. You can call this operation after the RUM file is uploaded.
     *
     * @remarks
     * Real User Monitoring (RUM) is available only in the China (Hangzhou), Singapore, and US (Silicon Valley) regions. Select the correct endpoint.
     *
     * @param request - UpdateRumFileStatusRequest
     * @returns UpdateRumFileStatusResponse
     *
     * @param UpdateRumFileStatusRequest $request
     *
     * @return UpdateRumFileStatusResponse
     */
    public function updateRumFileStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRumFileStatusWithOptions($request, $runtime);
    }

    /**
     * 更新定时拨测任务
     *
     * @param tmpReq - UpdateTimingSyntheticTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateTimingSyntheticTaskResponse
     *
     * @param UpdateTimingSyntheticTaskRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateTimingSyntheticTaskResponse
     */
    public function updateTimingSyntheticTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTimingSyntheticTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->availableAssertions) {
            $request->availableAssertionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->availableAssertions, 'AvailableAssertions', 'json');
        }

        if (null !== $tmpReq->commonSetting) {
            $request->commonSettingShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->commonSetting, 'CommonSetting', 'json');
        }

        if (null !== $tmpReq->customPeriod) {
            $request->customPeriodShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customPeriod, 'CustomPeriod', 'json');
        }

        if (null !== $tmpReq->monitorConf) {
            $request->monitorConfShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->monitorConf, 'MonitorConf', 'json');
        }

        if (null !== $tmpReq->monitors) {
            $request->monitorsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->monitors, 'Monitors', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->availableAssertionsShrink) {
            @$query['AvailableAssertions'] = $request->availableAssertionsShrink;
        }

        if (null !== $request->commonSettingShrink) {
            @$query['CommonSetting'] = $request->commonSettingShrink;
        }

        if (null !== $request->customPeriodShrink) {
            @$query['CustomPeriod'] = $request->customPeriodShrink;
        }

        if (null !== $request->frequency) {
            @$query['Frequency'] = $request->frequency;
        }

        if (null !== $request->monitorConfShrink) {
            @$query['MonitorConf'] = $request->monitorConfShrink;
        }

        if (null !== $request->monitorsShrink) {
            @$query['Monitors'] = $request->monitorsShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTimingSyntheticTask',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateTimingSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTimingSyntheticTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新定时拨测任务
     *
     * @param request - UpdateTimingSyntheticTaskRequest
     * @returns UpdateTimingSyntheticTaskResponse
     *
     * @param UpdateTimingSyntheticTaskRequest $request
     *
     * @return UpdateTimingSyntheticTaskResponse
     */
    public function updateTimingSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTimingSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about a webhook alert contact.
     *
     * @remarks
     * This operation is no longer maintained. Call the CreateOrUpdateWebhookContact operation in the new alter management module to create or modify a webhook alert contact.
     *
     * @param request - UpdateWebhookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateWebhookResponse
     *
     * @param UpdateWebhookRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateWebhookResponse
     */
    public function updateWebhookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->body) {
            @$query['Body'] = $request->body;
        }

        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        if (null !== $request->httpHeaders) {
            @$query['HttpHeaders'] = $request->httpHeaders;
        }

        if (null !== $request->httpParams) {
            @$query['HttpParams'] = $request->httpParams;
        }

        if (null !== $request->method) {
            @$query['Method'] = $request->method;
        }

        if (null !== $request->recoverBody) {
            @$query['RecoverBody'] = $request->recoverBody;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateWebhookResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the information about a webhook alert contact.
     *
     * @remarks
     * This operation is no longer maintained. Call the CreateOrUpdateWebhookContact operation in the new alter management module to create or modify a webhook alert contact.
     *
     * @param request - UpdateWebhookRequest
     * @returns UpdateWebhookResponse
     *
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
     * Updates the release information of an add-on.
     *
     * @param request - UpgradeAddonReleaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpgradeAddonReleaseResponse
     *
     * @param UpgradeAddonReleaseRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpgradeAddonReleaseResponse
     */
    public function upgradeAddonReleaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addonVersion) {
            @$query['AddonVersion'] = $request->addonVersion;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->releaseName) {
            @$query['ReleaseName'] = $request->releaseName;
        }

        if (null !== $request->values) {
            @$query['Values'] = $request->values;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeAddonRelease',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpgradeAddonReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeAddonReleaseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the release information of an add-on.
     *
     * @param request - UpgradeAddonReleaseRequest
     * @returns UpgradeAddonReleaseResponse
     *
     * @param UpgradeAddonReleaseRequest $request
     *
     * @return UpgradeAddonReleaseResponse
     */
    public function upgradeAddonRelease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeAddonReleaseWithOptions($request, $runtime);
    }

    /**
     * Updates the feature information of an environment.
     *
     * @param request - UpgradeEnvironmentFeatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpgradeEnvironmentFeatureResponse
     *
     * @param UpgradeEnvironmentFeatureRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpgradeEnvironmentFeatureResponse
     */
    public function upgradeEnvironmentFeatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->environmentId) {
            @$query['EnvironmentId'] = $request->environmentId;
        }

        if (null !== $request->featureName) {
            @$query['FeatureName'] = $request->featureName;
        }

        if (null !== $request->featureVersion) {
            @$query['FeatureVersion'] = $request->featureVersion;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->values) {
            @$query['Values'] = $request->values;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeEnvironmentFeature',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpgradeEnvironmentFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeEnvironmentFeatureResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the feature information of an environment.
     *
     * @param request - UpgradeEnvironmentFeatureRequest
     * @returns UpgradeEnvironmentFeatureResponse
     *
     * @param UpgradeEnvironmentFeatureRequest $request
     *
     * @return UpgradeEnvironmentFeatureResponse
     */
    public function upgradeEnvironmentFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeEnvironmentFeatureWithOptions($request, $runtime);
    }

    /**
     * Uploads a SourceMap file to ARMS Browser Monitoring.
     *
     * @param request - UploadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UploadResponse
     *
     * @param UploadRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return UploadResponse
     */
    public function uploadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $body = [];
        if (null !== $request->file) {
            @$body['File'] = $request->file;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UploadResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Uploads a SourceMap file to ARMS Browser Monitoring.
     *
     * @param request - UploadRequest
     * @returns UploadResponse
     *
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
