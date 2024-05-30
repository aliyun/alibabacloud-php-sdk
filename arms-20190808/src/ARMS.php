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
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusIntegrationRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusIntegrationResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusRemoteWriteRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusRemoteWriteResponse;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeletePrometheusRemoteWriteRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DeletePrometheusRemoteWriteResponse;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\EnableMetricRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\EnableMetricResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAgentDownloadUrlRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAgentDownloadUrlResponse;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusRemoteWriteRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetPrometheusRemoteWriteResponse;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumDataForPageRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumDataForPageResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumExceptionStackRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumExceptionStackResponse;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentDashboardsRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentDashboardsResponse;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentFeaturesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentFeaturesResponse;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusRemoteWritesRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusRemoteWritesResponse;
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
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusRemoteWriteRequest;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusRemoteWriteResponse;
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Adds data sources to a global aggregation instance in Prometheus Service.
     *  *
     * @param AddAliClusterIdsToPrometheusGlobalViewRequest $request AddAliClusterIdsToPrometheusGlobalViewRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return AddAliClusterIdsToPrometheusGlobalViewResponse AddAliClusterIdsToPrometheusGlobalViewResponse
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
     * @summary Adds data sources to a global aggregation instance in Prometheus Service.
     *  *
     * @param AddAliClusterIdsToPrometheusGlobalViewRequest $request AddAliClusterIdsToPrometheusGlobalViewRequest
     *
     * @return AddAliClusterIdsToPrometheusGlobalViewResponse AddAliClusterIdsToPrometheusGlobalViewResponse
     */
    public function addAliClusterIdsToPrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAliClusterIdsToPrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @summary Integrates the dashboard of Prometheus Service.
     *  *
     * @param AddGrafanaRequest $request AddGrafanaRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGrafanaResponse AddGrafanaResponse
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
     * @summary Integrates the dashboard of Prometheus Service.
     *  *
     * @param AddGrafanaRequest $request AddGrafanaRequest
     *
     * @return AddGrafanaResponse AddGrafanaResponse
     */
    public function addGrafana($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGrafanaWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI AddIntegration is deprecated, please use ARMS::2019-08-08::InstallAddon instead
     *  *
     * @summary 接入integration
     *  *
     * Deprecated
     *
     * @param AddIntegrationRequest $request AddIntegrationRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddIntegrationResponse AddIntegrationResponse
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
     * @deprecated openAPI AddIntegration is deprecated, please use ARMS::2019-08-08::InstallAddon instead
     *  *
     * @summary 接入integration
     *  *
     * Deprecated
     *
     * @param AddIntegrationRequest $request AddIntegrationRequest
     *
     * @return AddIntegrationResponse AddIntegrationResponse
     */
    public function addIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIntegrationWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a global aggregation instance in Prometheus Service.
     *  *
     * @param AddPrometheusGlobalViewRequest $request AddPrometheusGlobalViewRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AddPrometheusGlobalViewResponse AddPrometheusGlobalViewResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Adds a global aggregation instance in Prometheus Service.
     *  *
     * @param AddPrometheusGlobalViewRequest $request AddPrometheusGlobalViewRequest
     *
     * @return AddPrometheusGlobalViewResponse AddPrometheusGlobalViewResponse
     */
    public function addPrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a global aggregation instance in Prometheus Service.
     *  *
     * @param AddPrometheusGlobalViewByAliClusterIdsRequest $request AddPrometheusGlobalViewByAliClusterIdsRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return AddPrometheusGlobalViewByAliClusterIdsResponse AddPrometheusGlobalViewByAliClusterIdsResponse
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
     * @summary Creates a global aggregation instance in Prometheus Service.
     *  *
     * @param AddPrometheusGlobalViewByAliClusterIdsRequest $request AddPrometheusGlobalViewByAliClusterIdsRequest
     *
     * @return AddPrometheusGlobalViewByAliClusterIdsResponse AddPrometheusGlobalViewByAliClusterIdsResponse
     */
    public function addPrometheusGlobalViewByAliClusterIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPrometheusGlobalViewByAliClusterIdsWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Prometheus instance for Remote Write.
     *  *
     * @param AddPrometheusInstanceRequest $request AddPrometheusInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return AddPrometheusInstanceResponse AddPrometheusInstanceResponse
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
     * @summary Creates a Prometheus instance for Remote Write.
     *  *
     * @param AddPrometheusInstanceRequest $request AddPrometheusInstanceRequest
     *
     * @return AddPrometheusInstanceResponse AddPrometheusInstanceResponse
     */
    public function addPrometheusInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPrometheusInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Adds an exporter to a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param AddPrometheusIntegrationRequest $request AddPrometheusIntegrationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddPrometheusIntegrationResponse AddPrometheusIntegrationResponse
     */
    public function addPrometheusIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->integrationType)) {
            $query['IntegrationType'] = $request->integrationType;
        }
        if (!Utils::isUnset($request->param)) {
            $query['Param'] = $request->param;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return AddPrometheusIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds an exporter to a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param AddPrometheusIntegrationRequest $request AddPrometheusIntegrationRequest
     *
     * @return AddPrometheusIntegrationResponse AddPrometheusIntegrationResponse
     */
    public function addPrometheusIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPrometheusIntegrationWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a remote write configuration item to a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param AddPrometheusRemoteWriteRequest $request AddPrometheusRemoteWriteRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddPrometheusRemoteWriteResponse AddPrometheusRemoteWriteResponse
     */
    public function addPrometheusRemoteWriteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->remoteWriteYaml)) {
            $body['RemoteWriteYaml'] = $request->remoteWriteYaml;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddPrometheusRemoteWrite',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPrometheusRemoteWriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a remote write configuration item to a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param AddPrometheusRemoteWriteRequest $request AddPrometheusRemoteWriteRequest
     *
     * @return AddPrometheusRemoteWriteResponse AddPrometheusRemoteWriteResponse
     */
    public function addPrometheusRemoteWrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPrometheusRemoteWriteWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or updates a recording rule.
     *  *
     * @param AddRecordingRuleRequest $request AddRecordingRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddRecordingRuleResponse AddRecordingRuleResponse
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
     * @summary Creates or updates a recording rule.
     *  *
     * @param AddRecordingRuleRequest $request AddRecordingRuleRequest
     *
     * @return AddRecordingRuleResponse AddRecordingRuleResponse
     */
    public function addRecordingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRecordingRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Flink集群打标
     *  *
     * @param AddTagToFlinkClusterRequest $request AddTagToFlinkClusterRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTagToFlinkClusterResponse AddTagToFlinkClusterResponse
     */
    public function addTagToFlinkClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->flinkWorkSpaceId)) {
            $query['FlinkWorkSpaceId'] = $request->flinkWorkSpaceId;
        }
        if (!Utils::isUnset($request->flinkWorkSpaceName)) {
            $query['FlinkWorkSpaceName'] = $request->flinkWorkSpaceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->targetUserId)) {
            $query['TargetUserId'] = $request->targetUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return AddTagToFlinkClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Flink集群打标
     *  *
     * @param AddTagToFlinkClusterRequest $request AddTagToFlinkClusterRequest
     *
     * @return AddTagToFlinkClusterResponse AddTagToFlinkClusterResponse
     */
    public function addTagToFlinkCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagToFlinkClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a data source to a global aggregation instance.
     *  *
     * @param AppendInstancesToPrometheusGlobalViewRequest $request AppendInstancesToPrometheusGlobalViewRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return AppendInstancesToPrometheusGlobalViewResponse AppendInstancesToPrometheusGlobalViewResponse
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
     * @summary Adds a data source to a global aggregation instance.
     *  *
     * @param AppendInstancesToPrometheusGlobalViewRequest $request AppendInstancesToPrometheusGlobalViewRequest
     *
     * @return AppendInstancesToPrometheusGlobalViewResponse AppendInstancesToPrometheusGlobalViewResponse
     */
    public function appendInstancesToPrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appendInstancesToPrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @param ApplyScenarioRequest $tmpReq  ApplyScenarioRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyScenarioResponse ApplyScenarioResponse
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
     * @param ApplyScenarioRequest $request ApplyScenarioRequest
     *
     * @return ApplyScenarioResponse ApplyScenarioResponse
     */
    public function applyScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyScenarioWithOptions($request, $runtime);
    }

    /**
     * @summary Binds a Grafana workspace to a Prometheus instance.
     *  *
     * @param BindPrometheusGrafanaInstanceRequest $request BindPrometheusGrafanaInstanceRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return BindPrometheusGrafanaInstanceResponse BindPrometheusGrafanaInstanceResponse
     */
    public function bindPrometheusGrafanaInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->grafanaInstanceId)) {
            $query['GrafanaInstanceId'] = $request->grafanaInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return BindPrometheusGrafanaInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Binds a Grafana workspace to a Prometheus instance.
     *  *
     * @param BindPrometheusGrafanaInstanceRequest $request BindPrometheusGrafanaInstanceRequest
     *
     * @return BindPrometheusGrafanaInstanceResponse BindPrometheusGrafanaInstanceResponse
     */
    public function bindPrometheusGrafanaInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindPrometheusGrafanaInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 屏蔽告警通知
     *  *
     * @param BlockAlarmNotificationRequest $request BlockAlarmNotificationRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return BlockAlarmNotificationResponse BlockAlarmNotificationResponse
     */
    public function blockAlarmNotificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmId)) {
            $query['AlarmId'] = $request->alarmId;
        }
        if (!Utils::isUnset($request->handlerId)) {
            $query['HandlerId'] = $request->handlerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return BlockAlarmNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 屏蔽告警通知
     *  *
     * @param BlockAlarmNotificationRequest $request BlockAlarmNotificationRequest
     *
     * @return BlockAlarmNotificationResponse BlockAlarmNotificationResponse
     */
    public function blockAlarmNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->blockAlarmNotificationWithOptions($request, $runtime);
    }

    /**
     * @summary 修改告警等级
     *  *
     * @param ChangeAlarmSeverityRequest $request ChangeAlarmSeverityRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeAlarmSeverityResponse ChangeAlarmSeverityResponse
     */
    public function changeAlarmSeverityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmId)) {
            $query['AlarmId'] = $request->alarmId;
        }
        if (!Utils::isUnset($request->handlerId)) {
            $query['HandlerId'] = $request->handlerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->severity)) {
            $query['Severity'] = $request->severity;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ChangeAlarmSeverityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改告警等级
     *  *
     * @param ChangeAlarmSeverityRequest $request ChangeAlarmSeverityRequest
     *
     * @return ChangeAlarmSeverityResponse ChangeAlarmSeverityResponse
     */
    public function changeAlarmSeverity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeAlarmSeverityWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the resource group to which a resource belongs.
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
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the resource group to which a resource belongs.
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
     * @summary Checks whether Application Real-Time Monitoring Service (ARMS) is available for commercial use in a region.
     *  *
     * @description You can call this operation to check whether ARMS is available for commercial use in a region.
     *  *
     * @param CheckCommercialStatusRequest $request CheckCommercialStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckCommercialStatusResponse CheckCommercialStatusResponse
     */
    public function checkCommercialStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CheckCommercialStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether Application Real-Time Monitoring Service (ARMS) is available for commercial use in a region.
     *  *
     * @description You can call this operation to check whether ARMS is available for commercial use in a region.
     *  *
     * @param CheckCommercialStatusRequest $request CheckCommercialStatusRequest
     *
     * @return CheckCommercialStatusResponse CheckCommercialStatusResponse
     */
    public function checkCommercialStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCommercialStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Checks the status of a service in the current cluster, such as whether the service is activated and whether the payment is overdue.
     *  *
     * @param CheckServiceStatusRequest $request CheckServiceStatusRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckServiceStatusResponse CheckServiceStatusResponse
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
     * @summary Checks the status of a service in the current cluster, such as whether the service is activated and whether the payment is overdue.
     *  *
     * @param CheckServiceStatusRequest $request CheckServiceStatusRequest
     *
     * @return CheckServiceStatusResponse CheckServiceStatusResponse
     */
    public function checkServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 认领告警
     *  *
     * @param ClaimAlarmRequest $request ClaimAlarmRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ClaimAlarmResponse ClaimAlarmResponse
     */
    public function claimAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmId)) {
            $query['AlarmId'] = $request->alarmId;
        }
        if (!Utils::isUnset($request->handlerId)) {
            $query['HandlerId'] = $request->handlerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ClaimAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 认领告警
     *  *
     * @param ClaimAlarmRequest $request ClaimAlarmRequest
     *
     * @return ClaimAlarmResponse ClaimAlarmResponse
     */
    public function claimAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->claimAlarmWithOptions($request, $runtime);
    }

    /**
     * @summary 关闭告警
     *  *
     * @param CloseAlarmRequest $request CloseAlarmRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CloseAlarmResponse CloseAlarmResponse
     */
    public function closeAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmId)) {
            $query['AlarmId'] = $request->alarmId;
        }
        if (!Utils::isUnset($request->handlerId)) {
            $query['HandlerId'] = $request->handlerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->solution)) {
            $query['Solution'] = $request->solution;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CloseAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 关闭告警
     *  *
     * @param CloseAlarmRequest $request CloseAlarmRequest
     *
     * @return CloseAlarmResponse CloseAlarmResponse
     */
    public function closeAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeAlarmWithOptions($request, $runtime);
    }

    /**
     * @summary Turns on or off the main switch of an ARMS agent, or queries the status of the main switch.
     *  *
     * @description ****
     *  *
     * @param ConfigAppRequest $request ConfigAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigAppResponse ConfigAppResponse
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
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
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
     * @summary Turns on or off the main switch of an ARMS agent, or queries the status of the main switch.
     *  *
     * @description ****
     *  *
     * @param ConfigAppRequest $request ConfigAppRequest
     *
     * @return ConfigAppResponse ConfigAppResponse
     */
    public function configApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configAppWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an alert contact.
     *  *
     * @description This operation is no longer maintained. To create or modify an alert contact, call the CreateOrUpdateContact operation provided by the new version of the Alert Management module.
     *  *
     * @param CreateAlertContactRequest $request CreateAlertContactRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAlertContactResponse CreateAlertContactResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
     * @summary Creates an alert contact.
     *  *
     * @description This operation is no longer maintained. To create or modify an alert contact, call the CreateOrUpdateContact operation provided by the new version of the Alert Management module.
     *  *
     * @param CreateAlertContactRequest $request CreateAlertContactRequest
     *
     * @return CreateAlertContactResponse CreateAlertContactResponse
     */
    public function createAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlertContactWithOptions($request, $runtime);
    }

    /**
     * @param CreateAlertContactGroupRequest $request CreateAlertContactGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAlertContactGroupResponse CreateAlertContactGroupResponse
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
     * @param CreateAlertContactGroupRequest $request CreateAlertContactGroupRequest
     *
     * @return CreateAlertContactGroupResponse CreateAlertContactGroupResponse
     */
    public function createAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @summary The operation that you want to perform. Set the value to CreateDispatchRule.
     *  *
     * @param CreateDispatchRuleRequest $request CreateDispatchRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDispatchRuleResponse CreateDispatchRuleResponse
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
     * @summary The operation that you want to perform. Set the value to CreateDispatchRule.
     *  *
     * @param CreateDispatchRuleRequest $request CreateDispatchRuleRequest
     *
     * @return CreateDispatchRuleResponse CreateDispatchRuleResponse
     */
    public function createDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom job for an environment.
     *  *
     * @param CreateEnvCustomJobRequest $request CreateEnvCustomJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEnvCustomJobResponse CreateEnvCustomJobResponse
     */
    public function createEnvCustomJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->customJobName)) {
            $query['CustomJobName'] = $request->customJobName;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->configYaml)) {
            $body['ConfigYaml'] = $request->configYaml;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return CreateEnvCustomJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a custom job for an environment.
     *  *
     * @param CreateEnvCustomJobRequest $request CreateEnvCustomJobRequest
     *
     * @return CreateEnvCustomJobResponse CreateEnvCustomJobResponse
     */
    public function createEnvCustomJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnvCustomJobWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a PodMonitor for an environment.
     *  *
     * @param CreateEnvPodMonitorRequest $request CreateEnvPodMonitorRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEnvPodMonitorResponse CreateEnvPodMonitorResponse
     */
    public function createEnvPodMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->configYaml)) {
            $body['ConfigYaml'] = $request->configYaml;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return CreateEnvPodMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a PodMonitor for an environment.
     *  *
     * @param CreateEnvPodMonitorRequest $request CreateEnvPodMonitorRequest
     *
     * @return CreateEnvPodMonitorResponse CreateEnvPodMonitorResponse
     */
    public function createEnvPodMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnvPodMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a ServiceMonitor for an environment.
     *  *
     * @param CreateEnvServiceMonitorRequest $request CreateEnvServiceMonitorRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEnvServiceMonitorResponse CreateEnvServiceMonitorResponse
     */
    public function createEnvServiceMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->configYaml)) {
            $body['ConfigYaml'] = $request->configYaml;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return CreateEnvServiceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a ServiceMonitor for an environment.
     *  *
     * @param CreateEnvServiceMonitorRequest $request CreateEnvServiceMonitorRequest
     *
     * @return CreateEnvServiceMonitorResponse CreateEnvServiceMonitorResponse
     */
    public function createEnvServiceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnvServiceMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an environment instance.
     *  *
     * @param CreateEnvironmentRequest $request CreateEnvironmentRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEnvironmentResponse CreateEnvironmentResponse
     */
    public function createEnvironmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->bindResourceId)) {
            $query['BindResourceId'] = $request->bindResourceId;
        }
        if (!Utils::isUnset($request->environmentName)) {
            $query['EnvironmentName'] = $request->environmentName;
        }
        if (!Utils::isUnset($request->environmentSubType)) {
            $query['EnvironmentSubType'] = $request->environmentSubType;
        }
        if (!Utils::isUnset($request->environmentType)) {
            $query['EnvironmentType'] = $request->environmentType;
        }
        if (!Utils::isUnset($request->feePackage)) {
            $query['FeePackage'] = $request->feePackage;
        }
        if (!Utils::isUnset($request->grafanaWorkspaceId)) {
            $query['GrafanaWorkspaceId'] = $request->grafanaWorkspaceId;
        }
        if (!Utils::isUnset($request->managedType)) {
            $query['ManagedType'] = $request->managedType;
        }
        if (!Utils::isUnset($request->prometheusInstanceId)) {
            $query['PrometheusInstanceId'] = $request->prometheusInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an environment instance.
     *  *
     * @param CreateEnvironmentRequest $request CreateEnvironmentRequest
     *
     * @return CreateEnvironmentResponse CreateEnvironmentResponse
     */
    public function createEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnvironmentWithOptions($request, $runtime);
    }

    /**
     * @summary 创建工作区
     *  *
     * @param CreateGrafanaWorkspaceRequest $tmpReq  CreateGrafanaWorkspaceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGrafanaWorkspaceResponse CreateGrafanaWorkspaceResponse
     */
    public function createGrafanaWorkspaceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateGrafanaWorkspaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->grafanaVersion)) {
            $query['GrafanaVersion'] = $request->grafanaVersion;
        }
        if (!Utils::isUnset($request->grafanaWorkspaceEdition)) {
            $query['GrafanaWorkspaceEdition'] = $request->grafanaWorkspaceEdition;
        }
        if (!Utils::isUnset($request->grafanaWorkspaceName)) {
            $query['GrafanaWorkspaceName'] = $request->grafanaWorkspaceName;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateGrafanaWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建工作区
     *  *
     * @param CreateGrafanaWorkspaceRequest $request CreateGrafanaWorkspaceRequest
     *
     * @return CreateGrafanaWorkspaceResponse CreateGrafanaWorkspaceResponse
     */
    public function createGrafanaWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGrafanaWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an alert integration.
     *  *
     * @param CreateIntegrationRequest $request CreateIntegrationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIntegrationResponse CreateIntegrationResponse
     */
    public function createIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates an alert integration.
     *  *
     * @param CreateIntegrationRequest $request CreateIntegrationRequest
     *
     * @return CreateIntegrationResponse CreateIntegrationResponse
     */
    public function createIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntegrationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or modifies an alert rule.
     *  *
     * @param CreateOrUpdateAlertRuleRequest $request CreateOrUpdateAlertRuleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrUpdateAlertRuleResponse CreateOrUpdateAlertRuleResponse
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
        if (!Utils::isUnset($request->alertPiplines)) {
            $body['AlertPiplines'] = $request->alertPiplines;
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
        if (!Utils::isUnset($request->autoAddTargetConfig)) {
            $body['AutoAddTargetConfig'] = $request->autoAddTargetConfig;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dataConfig)) {
            $body['DataConfig'] = $request->dataConfig;
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
        if (!Utils::isUnset($request->markTags)) {
            $body['MarkTags'] = $request->markTags;
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
        if (!Utils::isUnset($request->notice)) {
            $body['Notice'] = $request->notice;
        }
        if (!Utils::isUnset($request->notifyMode)) {
            $body['NotifyMode'] = $request->notifyMode;
        }
        if (!Utils::isUnset($request->notifyStrategy)) {
            $body['NotifyStrategy'] = $request->notifyStrategy;
        }
        if (!Utils::isUnset($request->pids)) {
            $body['Pids'] = $request->pids;
        }
        if (!Utils::isUnset($request->product)) {
            $body['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->promQL)) {
            $body['PromQL'] = $request->promQL;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
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
     * @summary Creates or modifies an alert rule.
     *  *
     * @param CreateOrUpdateAlertRuleRequest $request CreateOrUpdateAlertRuleRequest
     *
     * @return CreateOrUpdateAlertRuleResponse CreateOrUpdateAlertRuleResponse
     */
    public function createOrUpdateAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or modifies an alert contact.
     *  *
     * @param CreateOrUpdateContactRequest $request CreateOrUpdateContactRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrUpdateContactResponse CreateOrUpdateContactResponse
     */
    public function createOrUpdateContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dingRobotUrl)) {
            $query['DingRobotUrl'] = $request->dingRobotUrl;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $body = [];
        if (!Utils::isUnset($request->contactId)) {
            $body['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->contactName)) {
            $body['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->corpUserId)) {
            $body['CorpUserId'] = $request->corpUserId;
        }
        if (!Utils::isUnset($request->email)) {
            $body['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->isEmailVerify)) {
            $body['IsEmailVerify'] = $request->isEmailVerify;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->reissueSendNotice)) {
            $body['ReissueSendNotice'] = $request->reissueSendNotice;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @summary Creates or modifies an alert contact.
     *  *
     * @param CreateOrUpdateContactRequest $request CreateOrUpdateContactRequest
     *
     * @return CreateOrUpdateContactResponse CreateOrUpdateContactResponse
     */
    public function createOrUpdateContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateContactWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or modifies an alert contact group.
     *  *
     * @param CreateOrUpdateContactGroupRequest $request CreateOrUpdateContactGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrUpdateContactGroupResponse CreateOrUpdateContactGroupResponse
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
     * @summary Creates or modifies an alert contact group.
     *  *
     * @param CreateOrUpdateContactGroupRequest $request CreateOrUpdateContactGroupRequest
     *
     * @return CreateOrUpdateContactGroupResponse CreateOrUpdateContactGroupResponse
     */
    public function createOrUpdateContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateContactGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or modifies an EventBridge integration that is used to push notifications.
     *  *
     * @param CreateOrUpdateEventBridgeIntegrationRequest $request CreateOrUpdateEventBridgeIntegrationRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrUpdateEventBridgeIntegrationResponse CreateOrUpdateEventBridgeIntegrationResponse
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
     * @summary Creates or modifies an EventBridge integration that is used to push notifications.
     *  *
     * @param CreateOrUpdateEventBridgeIntegrationRequest $request CreateOrUpdateEventBridgeIntegrationRequest
     *
     * @return CreateOrUpdateEventBridgeIntegrationResponse CreateOrUpdateEventBridgeIntegrationResponse
     */
    public function createOrUpdateEventBridgeIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateEventBridgeIntegrationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or updates an IM chatbot.
     *  *
     * @param CreateOrUpdateIMRobotRequest $request CreateOrUpdateIMRobotRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrUpdateIMRobotResponse CreateOrUpdateIMRobotResponse
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
        if (!Utils::isUnset($request->dingSignKey)) {
            $body['DingSignKey'] = $request->dingSignKey;
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
     * @summary Creates or updates an IM chatbot.
     *  *
     * @param CreateOrUpdateIMRobotRequest $request CreateOrUpdateIMRobotRequest
     *
     * @return CreateOrUpdateIMRobotResponse CreateOrUpdateIMRobotResponse
     */
    public function createOrUpdateIMRobot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateIMRobotWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or modifies a notification policy.
     *  *
     * @param CreateOrUpdateNotificationPolicyRequest $request CreateOrUpdateNotificationPolicyRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrUpdateNotificationPolicyResponse CreateOrUpdateNotificationPolicyResponse
     */
    public function createOrUpdateNotificationPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->directedMode)) {
            $body['DirectedMode'] = $request->directedMode;
        }
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
     * @summary Creates or modifies a notification policy.
     *  *
     * @param CreateOrUpdateNotificationPolicyRequest $request CreateOrUpdateNotificationPolicyRequest
     *
     * @return CreateOrUpdateNotificationPolicyResponse CreateOrUpdateNotificationPolicyResponse
     */
    public function createOrUpdateNotificationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateNotificationPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or modifies a silence policy.
     *  *
     * @param CreateOrUpdateSilencePolicyRequest $request CreateOrUpdateSilencePolicyRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrUpdateSilencePolicyResponse CreateOrUpdateSilencePolicyResponse
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
        if (!Utils::isUnset($request->state)) {
            $body['State'] = $request->state;
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
     * @summary Creates or modifies a silence policy.
     *  *
     * @param CreateOrUpdateSilencePolicyRequest $request CreateOrUpdateSilencePolicyRequest
     *
     * @return CreateOrUpdateSilencePolicyResponse CreateOrUpdateSilencePolicyResponse
     */
    public function createOrUpdateSilencePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateSilencePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or modifies a webhook alert contact.
     *  *
     * @param CreateOrUpdateWebhookContactRequest $request CreateOrUpdateWebhookContactRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrUpdateWebhookContactResponse CreateOrUpdateWebhookContactResponse
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
     * @summary Creates or modifies a webhook alert contact.
     *  *
     * @param CreateOrUpdateWebhookContactRequest $request CreateOrUpdateWebhookContactRequest
     *
     * @return CreateOrUpdateWebhookContactResponse CreateOrUpdateWebhookContactResponse
     */
    public function createOrUpdateWebhookContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateWebhookContactWithOptions($request, $runtime);
    }

    /**
     * @summary 创建Prometheus告警规则
     *  *
     * @param CreatePrometheusAlertRuleRequest $request CreatePrometheusAlertRuleRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePrometheusAlertRuleResponse CreatePrometheusAlertRuleResponse
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
     * @summary 创建Prometheus告警规则
     *  *
     * @param CreatePrometheusAlertRuleRequest $request CreatePrometheusAlertRuleRequest
     *
     * @return CreatePrometheusAlertRuleResponse CreatePrometheusAlertRuleResponse
     */
    public function createPrometheusAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrometheusAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Prometheus instance.
     *  *
     * @param CreatePrometheusInstanceRequest $request CreatePrometheusInstanceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePrometheusInstanceResponse CreatePrometheusInstanceResponse
     */
    public function createPrometheusInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allSubClustersSuccess)) {
            $query['AllSubClustersSuccess'] = $request->allSubClustersSuccess;
        }
        if (!Utils::isUnset($request->archiveDuration)) {
            $query['ArchiveDuration'] = $request->archiveDuration;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->grafanaInstanceId)) {
            $query['GrafanaInstanceId'] = $request->grafanaInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->subClustersJson)) {
            $query['SubClustersJson'] = $request->subClustersJson;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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

        return CreatePrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Prometheus instance.
     *  *
     * @param CreatePrometheusInstanceRequest $request CreatePrometheusInstanceRequest
     *
     * @return CreatePrometheusInstanceResponse CreatePrometheusInstanceResponse
     */
    public function createPrometheusInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrometheusInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a monitoring configuration for a Prometheus instance.
     *  *
     * @param CreatePrometheusMonitoringRequest $request CreatePrometheusMonitoringRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePrometheusMonitoringResponse CreatePrometheusMonitoringResponse
     */
    public function createPrometheusMonitoringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
        $body = [];
        if (!Utils::isUnset($request->configYaml)) {
            $body['ConfigYaml'] = $request->configYaml;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return CreatePrometheusMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a monitoring configuration for a Prometheus instance.
     *  *
     * @param CreatePrometheusMonitoringRequest $request CreatePrometheusMonitoringRequest
     *
     * @return CreatePrometheusMonitoringResponse CreatePrometheusMonitoringResponse
     */
    public function createPrometheusMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrometheusMonitoringWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Browser Monitoring task for an application.
     *  *
     * @param CreateRetcodeAppRequest $request CreateRetcodeAppRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRetcodeAppResponse CreateRetcodeAppResponse
     */
    public function createRetcodeAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->retcodeAppName)) {
            $query['RetcodeAppName'] = $request->retcodeAppName;
        }
        if (!Utils::isUnset($request->retcodeAppType)) {
            $query['RetcodeAppType'] = $request->retcodeAppType;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
     * @summary Creates a Browser Monitoring task for an application.
     *  *
     * @param CreateRetcodeAppRequest $request CreateRetcodeAppRequest
     *
     * @return CreateRetcodeAppResponse CreateRetcodeAppResponse
     */
    public function createRetcodeApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRetcodeAppWithOptions($request, $runtime);
    }

    /**
     * @summary 创建前端监控应用
     *  *
     * @param CreateRumAppRequest $request CreateRumAppRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRumAppResponse CreateRumAppResponse
     */
    public function createRumAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appGroup)) {
            $query['AppGroup'] = $request->appGroup;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->packageName)) {
            $query['PackageName'] = $request->packageName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->siteType)) {
            $query['SiteType'] = $request->siteType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateRumAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建前端监控应用
     *  *
     * @param CreateRumAppRequest $request CreateRumAppRequest
     *
     * @return CreateRumAppResponse CreateRumAppResponse
     */
    public function createRumApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRumAppWithOptions($request, $runtime);
    }

    /**
     * @summary 创建前端监控上传oss的URL
     *  *
     * @param CreateRumUploadFileUrlRequest $request CreateRumUploadFileUrlRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRumUploadFileUrlResponse CreateRumUploadFileUrlResponse
     */
    public function createRumUploadFileUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->contentType)) {
            $query['ContentType'] = $request->contentType;
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
        if (!Utils::isUnset($request->sourcemapType)) {
            $query['SourcemapType'] = $request->sourcemapType;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateRumUploadFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建前端监控上传oss的URL
     *  *
     * @param CreateRumUploadFileUrlRequest $request CreateRumUploadFileUrlRequest
     *
     * @return CreateRumUploadFileUrlResponse CreateRumUploadFileUrlResponse
     */
    public function createRumUploadFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRumUploadFileUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 创建或更新云拨测定时监控任务
     *  *
     * @param CreateSyntheticTaskRequest $tmpReq  CreateSyntheticTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSyntheticTaskResponse CreateSyntheticTaskResponse
     */
    public function createSyntheticTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSyntheticTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->commonParam)) {
            $request->commonParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->commonParam, 'CommonParam', 'json');
        }
        if (!Utils::isUnset($tmpReq->download)) {
            $request->downloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->download, 'Download', 'json');
        }
        if (!Utils::isUnset($tmpReq->extendInterval)) {
            $request->extendIntervalShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extendInterval, 'ExtendInterval', 'json');
        }
        if (!Utils::isUnset($tmpReq->monitorList)) {
            $request->monitorListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->monitorList, 'MonitorList', 'json');
        }
        if (!Utils::isUnset($tmpReq->navigation)) {
            $request->navigationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->navigation, 'Navigation', 'json');
        }
        if (!Utils::isUnset($tmpReq->net)) {
            $request->netShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->net, 'Net', 'json');
        }
        if (!Utils::isUnset($tmpReq->protocol)) {
            $request->protocolShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->protocol, 'Protocol', 'json');
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
     * @summary 创建或更新云拨测定时监控任务
     *  *
     * @param CreateSyntheticTaskRequest $request CreateSyntheticTaskRequest
     *
     * @return CreateSyntheticTaskResponse CreateSyntheticTaskResponse
     */
    public function createSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建云拨测定时任务
     *  *
     * @param CreateTimingSyntheticTaskRequest $tmpReq  CreateTimingSyntheticTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTimingSyntheticTaskResponse CreateTimingSyntheticTaskResponse
     */
    public function createTimingSyntheticTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTimingSyntheticTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->availableAssertions)) {
            $request->availableAssertionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->availableAssertions, 'AvailableAssertions', 'json');
        }
        if (!Utils::isUnset($tmpReq->commonSetting)) {
            $request->commonSettingShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->commonSetting, 'CommonSetting', 'json');
        }
        if (!Utils::isUnset($tmpReq->customPeriod)) {
            $request->customPeriodShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customPeriod, 'CustomPeriod', 'json');
        }
        if (!Utils::isUnset($tmpReq->monitorConf)) {
            $request->monitorConfShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->monitorConf, 'MonitorConf', 'json');
        }
        if (!Utils::isUnset($tmpReq->monitors)) {
            $request->monitorsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->monitors, 'Monitors', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->availableAssertionsShrink)) {
            $query['AvailableAssertions'] = $request->availableAssertionsShrink;
        }
        if (!Utils::isUnset($request->commonSettingShrink)) {
            $query['CommonSetting'] = $request->commonSettingShrink;
        }
        if (!Utils::isUnset($request->customPeriodShrink)) {
            $query['CustomPeriod'] = $request->customPeriodShrink;
        }
        if (!Utils::isUnset($request->frequency)) {
            $query['Frequency'] = $request->frequency;
        }
        if (!Utils::isUnset($request->monitorCategory)) {
            $query['MonitorCategory'] = $request->monitorCategory;
        }
        if (!Utils::isUnset($request->monitorConfShrink)) {
            $query['MonitorConf'] = $request->monitorConfShrink;
        }
        if (!Utils::isUnset($request->monitorsShrink)) {
            $query['Monitors'] = $request->monitorsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateTimingSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建云拨测定时任务
     *  *
     * @param CreateTimingSyntheticTaskRequest $request CreateTimingSyntheticTaskRequest
     *
     * @return CreateTimingSyntheticTaskResponse CreateTimingSyntheticTaskResponse
     */
    public function createTimingSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTimingSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a contact for webhook alerts.
     *  *
     * @param CreateWebhookRequest $request CreateWebhookRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWebhookResponse CreateWebhookResponse
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
     * @summary Adds a contact for webhook alerts.
     *  *
     * @param CreateWebhookRequest $request CreateWebhookRequest
     *
     * @return CreateWebhookResponse CreateWebhookResponse
     */
    public function createWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWebhookWithOptions($request, $runtime);
    }

    /**
     * @summary Disables an authentication token.
     *  *
     * @param DelAuthTokenRequest $request DelAuthTokenRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DelAuthTokenResponse DelAuthTokenResponse
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
     * @summary Disables an authentication token.
     *  *
     * @param DelAuthTokenRequest $request DelAuthTokenRequest
     *
     * @return DelAuthTokenResponse DelAuthTokenResponse
     */
    public function delAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delAuthTokenWithOptions($request, $runtime);
    }

    /**
     * @summary Delete AddonRelease data by AddonRelease name.
     *  *
     * @param DeleteAddonReleaseRequest $request DeleteAddonReleaseRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAddonReleaseResponse DeleteAddonReleaseResponse
     */
    public function deleteAddonReleaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->releaseName)) {
            $query['ReleaseName'] = $request->releaseName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteAddonReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete AddonRelease data by AddonRelease name.
     *  *
     * @param DeleteAddonReleaseRequest $request DeleteAddonReleaseRequest
     *
     * @return DeleteAddonReleaseResponse DeleteAddonReleaseResponse
     */
    public function deleteAddonRelease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAddonReleaseWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an DeleteAlertContact contact.
     *  *
     * @description ********
     *  *
     * @param DeleteAlertContactRequest $request DeleteAlertContactRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAlertContactResponse DeleteAlertContactResponse
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
     * @summary Deletes an DeleteAlertContact contact.
     *  *
     * @description ********
     *  *
     * @param DeleteAlertContactRequest $request DeleteAlertContactRequest
     *
     * @return DeleteAlertContactResponse DeleteAlertContactResponse
     */
    public function deleteAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertContactWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an DeleteAlertContactGroup contact group.
     *  *
     * @param DeleteAlertContactGroupRequest $request DeleteAlertContactGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAlertContactGroupResponse DeleteAlertContactGroupResponse
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
     * @summary Deletes an DeleteAlertContactGroup contact group.
     *  *
     * @param DeleteAlertContactGroupRequest $request DeleteAlertContactGroupRequest
     *
     * @return DeleteAlertContactGroupResponse DeleteAlertContactGroupResponse
     */
    public function deleteAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an alert rule.
     *  *
     * @param DeleteAlertRuleRequest $request DeleteAlertRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAlertRuleResponse DeleteAlertRuleResponse
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
     * @summary Deletes an alert rule.
     *  *
     * @param DeleteAlertRuleRequest $request DeleteAlertRuleRequest
     *
     * @return DeleteAlertRuleResponse DeleteAlertRuleResponse
     */
    public function deleteAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlertRulesRequest $request DeleteAlertRulesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAlertRulesResponse DeleteAlertRulesResponse
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
     * @param DeleteAlertRulesRequest $request DeleteAlertRulesRequest
     *
     * @return DeleteAlertRulesResponse DeleteAlertRulesResponse
     */
    public function deleteAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes multiple applications at a time based on the process IDs (PIDs).
     *  *
     * @param DeleteAppListRequest $request DeleteAppListRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppListResponse DeleteAppListResponse
     */
    public function deleteAppListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pids)) {
            $query['Pids'] = $request->pids;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteAppListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple applications at a time based on the process IDs (PIDs).
     *  *
     * @param DeleteAppListRequest $request DeleteAppListRequest
     *
     * @return DeleteAppListResponse DeleteAppListResponse
     */
    public function deleteAppList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppListWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI DeleteCmsExporter is deprecated, please use ARMS::2019-08-08::DeleteAddonRelease instead
     *  *
     * @summary Releases a Prometheus instance for Alibaba Cloud services.
     *  *
     * Deprecated
     *
     * @param DeleteCmsExporterRequest $request DeleteCmsExporterRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCmsExporterResponse DeleteCmsExporterResponse
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
     * @deprecated openAPI DeleteCmsExporter is deprecated, please use ARMS::2019-08-08::DeleteAddonRelease instead
     *  *
     * @summary Releases a Prometheus instance for Alibaba Cloud services.
     *  *
     * Deprecated
     *
     * @param DeleteCmsExporterRequest $request DeleteCmsExporterRequest
     *
     * @return DeleteCmsExporterResponse DeleteCmsExporterResponse
     */
    public function deleteCmsExporter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCmsExporterWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the request.
     *  *
     * @param DeleteContactRequest $request DeleteContactRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteContactResponse DeleteContactResponse
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
     * @summary The ID of the request.
     *  *
     * @param DeleteContactRequest $request DeleteContactRequest
     *
     * @return DeleteContactResponse DeleteContactResponse
     */
    public function deleteContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an alert contact group.
     *  *
     * @param DeleteContactGroupRequest $request DeleteContactGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteContactGroupResponse DeleteContactGroupResponse
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
     * @summary Deletes an alert contact group.
     *  *
     * @param DeleteContactGroupRequest $request DeleteContactGroupRequest
     *
     * @return DeleteContactGroupResponse DeleteContactGroupResponse
     */
    public function deleteContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDispatchRuleRequest $request DeleteDispatchRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDispatchRuleResponse DeleteDispatchRuleResponse
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
     * @param DeleteDispatchRuleRequest $request DeleteDispatchRuleRequest
     *
     * @return DeleteDispatchRuleResponse DeleteDispatchRuleResponse
     */
    public function deleteDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Delete custom jobs for the environment.
     *  *
     * @param DeleteEnvCustomJobRequest $request DeleteEnvCustomJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEnvCustomJobResponse DeleteEnvCustomJobResponse
     */
    public function deleteEnvCustomJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customJobName)) {
            $query['CustomJobName'] = $request->customJobName;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteEnvCustomJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete custom jobs for the environment.
     *  *
     * @param DeleteEnvCustomJobRequest $request DeleteEnvCustomJobRequest
     *
     * @return DeleteEnvCustomJobResponse DeleteEnvCustomJobResponse
     */
    public function deleteEnvCustomJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnvCustomJobWithOptions($request, $runtime);
    }

    /**
     * @summary Delete the environment PodMonitor.
     *  *
     * @param DeleteEnvPodMonitorRequest $request DeleteEnvPodMonitorRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEnvPodMonitorResponse DeleteEnvPodMonitorResponse
     */
    public function deleteEnvPodMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->podMonitorName)) {
            $query['PodMonitorName'] = $request->podMonitorName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteEnvPodMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete the environment PodMonitor.
     *  *
     * @param DeleteEnvPodMonitorRequest $request DeleteEnvPodMonitorRequest
     *
     * @return DeleteEnvPodMonitorResponse DeleteEnvPodMonitorResponse
     */
    public function deleteEnvPodMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnvPodMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Delete the environment ServiceMonitor.
     *  *
     * @param DeleteEnvServiceMonitorRequest $request DeleteEnvServiceMonitorRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEnvServiceMonitorResponse DeleteEnvServiceMonitorResponse
     */
    public function deleteEnvServiceMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceMonitorName)) {
            $query['ServiceMonitorName'] = $request->serviceMonitorName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteEnvServiceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete the environment ServiceMonitor.
     *  *
     * @param DeleteEnvServiceMonitorRequest $request DeleteEnvServiceMonitorRequest
     *
     * @return DeleteEnvServiceMonitorResponse DeleteEnvServiceMonitorResponse
     */
    public function deleteEnvServiceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnvServiceMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an environment instance.
     *  *
     * @param DeleteEnvironmentRequest $request DeleteEnvironmentRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEnvironmentResponse DeleteEnvironmentResponse
     */
    public function deleteEnvironmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deletePromInstance)) {
            $query['DeletePromInstance'] = $request->deletePromInstance;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an environment instance.
     *  *
     * @param DeleteEnvironmentRequest $request DeleteEnvironmentRequest
     *
     * @return DeleteEnvironmentResponse DeleteEnvironmentResponse
     */
    public function deleteEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnvironmentWithOptions($request, $runtime);
    }

    /**
     * @summary 删除feature信息
     *  *
     * @param DeleteEnvironmentFeatureRequest $request DeleteEnvironmentFeatureRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEnvironmentFeatureResponse DeleteEnvironmentFeatureResponse
     */
    public function deleteEnvironmentFeatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->featureName)) {
            $query['FeatureName'] = $request->featureName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteEnvironmentFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除feature信息
     *  *
     * @param DeleteEnvironmentFeatureRequest $request DeleteEnvironmentFeatureRequest
     *
     * @return DeleteEnvironmentFeatureResponse DeleteEnvironmentFeatureResponse
     */
    public function deleteEnvironmentFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnvironmentFeatureWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an EventBridge integration that is used to push notifications.
     *  *
     * @param DeleteEventBridgeIntegrationRequest $request DeleteEventBridgeIntegrationRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEventBridgeIntegrationResponse DeleteEventBridgeIntegrationResponse
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
     * @summary Deletes an EventBridge integration that is used to push notifications.
     *  *
     * @param DeleteEventBridgeIntegrationRequest $request DeleteEventBridgeIntegrationRequest
     *
     * @return DeleteEventBridgeIntegrationResponse DeleteEventBridgeIntegrationResponse
     */
    public function deleteEventBridgeIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventBridgeIntegrationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes Grafana dashboard resources from a cluster monitored by Prometheus Service.
     *  *
     * @param DeleteGrafanaResourceRequest $request DeleteGrafanaResourceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGrafanaResourceResponse DeleteGrafanaResourceResponse
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
     * @summary Deletes Grafana dashboard resources from a cluster monitored by Prometheus Service.
     *  *
     * @param DeleteGrafanaResourceRequest $request DeleteGrafanaResourceRequest
     *
     * @return DeleteGrafanaResourceResponse DeleteGrafanaResourceResponse
     */
    public function deleteGrafanaResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGrafanaResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 释放工作区
     *  *
     * @param DeleteGrafanaWorkspaceRequest $request DeleteGrafanaWorkspaceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGrafanaWorkspaceResponse DeleteGrafanaWorkspaceResponse
     */
    public function deleteGrafanaWorkspaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->grafanaWorkspaceId)) {
            $query['GrafanaWorkspaceId'] = $request->grafanaWorkspaceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteGrafanaWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 释放工作区
     *  *
     * @param DeleteGrafanaWorkspaceRequest $request DeleteGrafanaWorkspaceRequest
     *
     * @return DeleteGrafanaWorkspaceResponse DeleteGrafanaWorkspaceResponse
     */
    public function deleteGrafanaWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGrafanaWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an instant messaging (IM) chatbot.
     *  *
     * @param DeleteIMRobotRequest $request DeleteIMRobotRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIMRobotResponse DeleteIMRobotResponse
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
     * @summary Deletes an instant messaging (IM) chatbot.
     *  *
     * @param DeleteIMRobotRequest $request DeleteIMRobotRequest
     *
     * @return DeleteIMRobotResponse DeleteIMRobotResponse
     */
    public function deleteIMRobot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIMRobotWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI DeleteIntegration is deprecated, please use ARMS::2019-08-08::DeleteAddonRelease instead
     *  *
     * @summary Deletes collection rules from an integration.
     *  *
     * Deprecated
     *
     * @param DeleteIntegrationRequest $request DeleteIntegrationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIntegrationResponse DeleteIntegrationResponse
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
     * @deprecated openAPI DeleteIntegration is deprecated, please use ARMS::2019-08-08::DeleteAddonRelease instead
     *  *
     * @summary Deletes collection rules from an integration.
     *  *
     * Deprecated
     *
     * @param DeleteIntegrationRequest $request DeleteIntegrationRequest
     *
     * @return DeleteIntegrationResponse DeleteIntegrationResponse
     */
    public function deleteIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIntegrationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an alert integration.
     *  *
     * @param DeleteIntegrationsRequest $request DeleteIntegrationsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIntegrationsResponse DeleteIntegrationsResponse
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
     * @summary Deletes an alert integration.
     *  *
     * @param DeleteIntegrationsRequest $request DeleteIntegrationsRequest
     *
     * @return DeleteIntegrationsResponse DeleteIntegrationsResponse
     */
    public function deleteIntegrations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIntegrationsWithOptions($request, $runtime);
    }

    /**
     * @summary Indicates whether the notification policy was deleted successfully. Valid values:
     * *   `true`: The notification policy was deleted successfully.
     * *   `false`: The notification policy failed to be deleted.
     *  *
     * @param DeleteNotificationPolicyRequest $request DeleteNotificationPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNotificationPolicyResponse DeleteNotificationPolicyResponse
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
     * @summary Indicates whether the notification policy was deleted successfully. Valid values:
     * *   `true`: The notification policy was deleted successfully.
     * *   `false`: The notification policy failed to be deleted.
     *  *
     * @param DeleteNotificationPolicyRequest $request DeleteNotificationPolicyRequest
     *
     * @return DeleteNotificationPolicyResponse DeleteNotificationPolicyResponse
     */
    public function deleteNotificationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNotificationPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the alert rule. You can call the ListPrometheusAlertRules operation to query the ID of the alert rule.
     *  *
     * @param DeletePrometheusAlertRuleRequest $request DeletePrometheusAlertRuleRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePrometheusAlertRuleResponse DeletePrometheusAlertRuleResponse
     */
    public function deletePrometheusAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
     * @summary The ID of the alert rule. You can call the ListPrometheusAlertRules operation to query the ID of the alert rule.
     *  *
     * @param DeletePrometheusAlertRuleRequest $request DeletePrometheusAlertRuleRequest
     *
     * @return DeletePrometheusAlertRuleResponse DeletePrometheusAlertRuleResponse
     */
    public function deletePrometheusAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrometheusAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a global aggregation instance from Prometheus Service.
     *  *
     * @param DeletePrometheusGlobalViewRequest $request DeletePrometheusGlobalViewRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePrometheusGlobalViewResponse DeletePrometheusGlobalViewResponse
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
     * @summary Deletes a global aggregation instance from Prometheus Service.
     *  *
     * @param DeletePrometheusGlobalViewRequest $request DeletePrometheusGlobalViewRequest
     *
     * @return DeletePrometheusGlobalViewResponse DeletePrometheusGlobalViewResponse
     */
    public function deletePrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an exporter from a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param DeletePrometheusIntegrationRequest $request DeletePrometheusIntegrationRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePrometheusIntegrationResponse DeletePrometheusIntegrationResponse
     */
    public function deletePrometheusIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->integrationType)) {
            $query['IntegrationType'] = $request->integrationType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeletePrometheusIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an exporter from a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param DeletePrometheusIntegrationRequest $request DeletePrometheusIntegrationRequest
     *
     * @return DeletePrometheusIntegrationResponse DeletePrometheusIntegrationResponse
     */
    public function deletePrometheusIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrometheusIntegrationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the monitoring configuration of a Prometheus instance.
     *  *
     * @param DeletePrometheusMonitoringRequest $request DeletePrometheusMonitoringRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePrometheusMonitoringResponse DeletePrometheusMonitoringResponse
     */
    public function deletePrometheusMonitoringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->monitoringName)) {
            $query['MonitoringName'] = $request->monitoringName;
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

        return DeletePrometheusMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the monitoring configuration of a Prometheus instance.
     *  *
     * @param DeletePrometheusMonitoringRequest $request DeletePrometheusMonitoringRequest
     *
     * @return DeletePrometheusMonitoringResponse DeletePrometheusMonitoringResponse
     */
    public function deletePrometheusMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrometheusMonitoringWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes one or more remote write configuration items from a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param DeletePrometheusRemoteWriteRequest $request DeletePrometheusRemoteWriteRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePrometheusRemoteWriteResponse DeletePrometheusRemoteWriteResponse
     */
    public function deletePrometheusRemoteWriteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remoteWriteNames)) {
            $query['RemoteWriteNames'] = $request->remoteWriteNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePrometheusRemoteWrite',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePrometheusRemoteWriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes one or more remote write configuration items from a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param DeletePrometheusRemoteWriteRequest $request DeletePrometheusRemoteWriteRequest
     *
     * @return DeletePrometheusRemoteWriteResponse DeletePrometheusRemoteWriteResponse
     */
    public function deletePrometheusRemoteWrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrometheusRemoteWriteWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a Browser Monitoring task.
     *  *
     * @param DeleteRetcodeAppRequest $request DeleteRetcodeAppRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRetcodeAppResponse DeleteRetcodeAppResponse
     */
    public function deleteRetcodeAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
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
     * @summary Deletes a Browser Monitoring task.
     *  *
     * @param DeleteRetcodeAppRequest $request DeleteRetcodeAppRequest
     *
     * @return DeleteRetcodeAppResponse DeleteRetcodeAppResponse
     */
    public function deleteRetcodeApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRetcodeAppWithOptions($request, $runtime);
    }

    /**
     * @summary 删除前端监控应用
     *  *
     * @param DeleteRumAppRequest $request DeleteRumAppRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRumAppResponse DeleteRumAppResponse
     */
    public function deleteRumAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appGroup)) {
            $query['AppGroup'] = $request->appGroup;
        }
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

        return DeleteRumAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除前端监控应用
     *  *
     * @param DeleteRumAppRequest $request DeleteRumAppRequest
     *
     * @return DeleteRumAppResponse DeleteRumAppResponse
     */
    public function deleteRumApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRumAppWithOptions($request, $runtime);
    }

    /**
     * @summary 删除前端监控在oss中的文件
     *  *
     * @param DeleteRumUploadFileRequest $request DeleteRumUploadFileRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRumUploadFileResponse DeleteRumUploadFileResponse
     */
    public function deleteRumUploadFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteRumUploadFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除前端监控在oss中的文件
     *  *
     * @param DeleteRumUploadFileRequest $request DeleteRumUploadFileRequest
     *
     * @return DeleteRumUploadFileResponse DeleteRumUploadFileResponse
     */
    public function deleteRumUploadFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRumUploadFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScenarioRequest $request DeleteScenarioRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScenarioResponse DeleteScenarioResponse
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
     * @param DeleteScenarioRequest $request DeleteScenarioRequest
     *
     * @return DeleteScenarioResponse DeleteScenarioResponse
     */
    public function deleteScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScenarioWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the silence policy.
     *  *
     * @param DeleteSilencePolicyRequest $request DeleteSilencePolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSilencePolicyResponse DeleteSilencePolicyResponse
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
     * @summary The ID of the silence policy.
     *  *
     * @param DeleteSilencePolicyRequest $request DeleteSilencePolicyRequest
     *
     * @return DeleteSilencePolicyResponse DeleteSilencePolicyResponse
     */
    public function deleteSilencePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSilencePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 删除SourceMap
     *  *
     * @param DeleteSourceMapRequest $tmpReq  DeleteSourceMapRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSourceMapResponse DeleteSourceMapResponse
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
     * @summary 删除SourceMap
     *  *
     * @param DeleteSourceMapRequest $request DeleteSourceMapRequest
     *
     * @return DeleteSourceMapResponse DeleteSourceMapResponse
     */
    public function deleteSourceMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSourceMapWithOptions($request, $runtime);
    }

    /**
     * @summary 删除云拨测任务
     *  *
     * @param DeleteSyntheticTaskRequest $request DeleteSyntheticTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSyntheticTaskResponse DeleteSyntheticTaskResponse
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
     * @summary 删除云拨测任务
     *  *
     * @param DeleteSyntheticTaskRequest $request DeleteSyntheticTaskRequest
     *
     * @return DeleteSyntheticTaskResponse DeleteSyntheticTaskResponse
     */
    public function deleteSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a scheduled synthetic monitoring task.
     *  *
     * @param DeleteTimingSyntheticTaskRequest $request DeleteTimingSyntheticTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTimingSyntheticTaskResponse DeleteTimingSyntheticTaskResponse
     */
    public function deleteTimingSyntheticTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteTimingSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a scheduled synthetic monitoring task.
     *  *
     * @param DeleteTimingSyntheticTaskRequest $request DeleteTimingSyntheticTaskRequest
     *
     * @return DeleteTimingSyntheticTaskResponse DeleteTimingSyntheticTaskResponse
     */
    public function deleteTimingSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTimingSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an application based on a specified process identifier (PID) and application type.
     *  *
     * @param DeleteTraceAppRequest $tmpReq  DeleteTraceAppRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTraceAppResponse DeleteTraceAppResponse
     */
    public function deleteTraceAppWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteTraceAppShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deleteReason)) {
            $request->deleteReasonShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deleteReason, 'DeleteReason', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->deleteReasonShrink)) {
            $query['DeleteReason'] = $request->deleteReasonShrink;
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
     * @summary Deletes an application based on a specified process identifier (PID) and application type.
     *  *
     * @param DeleteTraceAppRequest $request DeleteTraceAppRequest
     *
     * @return DeleteTraceAppResponse DeleteTraceAppResponse
     */
    public function deleteTraceApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTraceAppWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a webhook alert contact.
     *  *
     * @param DeleteWebhookContactRequest $request DeleteWebhookContactRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWebhookContactResponse DeleteWebhookContactResponse
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
     * @summary Deletes a webhook alert contact.
     *  *
     * @param DeleteWebhookContactRequest $request DeleteWebhookContactRequest
     *
     * @return DeleteWebhookContactResponse DeleteWebhookContactResponse
     */
    public function deleteWebhookContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebhookContactWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the release information of an add-on by name.
     *  *
     * @param DescribeAddonReleaseRequest $request DescribeAddonReleaseRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAddonReleaseResponse DescribeAddonReleaseResponse
     */
    public function describeAddonReleaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->releaseName)) {
            $query['ReleaseName'] = $request->releaseName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DescribeAddonReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the release information of an add-on by name.
     *  *
     * @param DescribeAddonReleaseRequest $request DescribeAddonReleaseRequest
     *
     * @return DescribeAddonReleaseResponse DescribeAddonReleaseResponse
     */
    public function describeAddonRelease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAddonReleaseWithOptions($request, $runtime);
    }

    /**
     * @summary Queries an alert contact group.
     *  *
     * @param DescribeContactGroupsRequest $request DescribeContactGroupsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeContactGroupsResponse DescribeContactGroupsResponse
     */
    public function describeContactGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactGroupName)) {
            $query['ContactGroupName'] = $request->contactGroupName;
        }
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->isDetail)) {
            $query['IsDetail'] = $request->isDetail;
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
     * @summary Queries an alert contact group.
     *  *
     * @param DescribeContactGroupsRequest $request DescribeContactGroupsRequest
     *
     * @return DescribeContactGroupsResponse DescribeContactGroupsResponse
     */
    public function describeContactGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries alert contacts.
     *  *
     * @param DescribeContactsRequest $request DescribeContactsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeContactsResponse DescribeContactsResponse
     */
    public function describeContactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactIds)) {
            $query['ContactIds'] = $request->contactIds;
        }
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
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
     * @summary Queries alert contacts.
     *  *
     * @param DescribeContactsRequest $request DescribeContactsRequest
     *
     * @return DescribeContactsResponse DescribeContactsResponse
     */
    public function describeContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a dispatch policy.
     *  *
     * @param DescribeDispatchRuleRequest $request DescribeDispatchRuleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDispatchRuleResponse DescribeDispatchRuleResponse
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
     * @summary Queries the information about a dispatch policy.
     *  *
     * @param DescribeDispatchRuleRequest $request DescribeDispatchRuleRequest
     *
     * @return DescribeDispatchRuleResponse DescribeDispatchRuleResponse
     */
    public function describeDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a custom job for an environment.
     *  *
     * @param DescribeEnvCustomJobRequest $request DescribeEnvCustomJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnvCustomJobResponse DescribeEnvCustomJobResponse
     */
    public function describeEnvCustomJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customJobName)) {
            $query['CustomJobName'] = $request->customJobName;
        }
        if (!Utils::isUnset($request->encryptYaml)) {
            $query['EncryptYaml'] = $request->encryptYaml;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DescribeEnvCustomJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a custom job for an environment.
     *  *
     * @param DescribeEnvCustomJobRequest $request DescribeEnvCustomJobRequest
     *
     * @return DescribeEnvCustomJobResponse DescribeEnvCustomJobResponse
     */
    public function describeEnvCustomJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnvCustomJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the PodMonitor details of an environment.
     *  *
     * @param DescribeEnvPodMonitorRequest $request DescribeEnvPodMonitorRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnvPodMonitorResponse DescribeEnvPodMonitorResponse
     */
    public function describeEnvPodMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->podMonitorName)) {
            $query['PodMonitorName'] = $request->podMonitorName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DescribeEnvPodMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the PodMonitor details of an environment.
     *  *
     * @param DescribeEnvPodMonitorRequest $request DescribeEnvPodMonitorRequest
     *
     * @return DescribeEnvPodMonitorResponse DescribeEnvPodMonitorResponse
     */
    public function describeEnvPodMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnvPodMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the ServiceMonitor details of an environment.
     *  *
     * @param DescribeEnvServiceMonitorRequest $request DescribeEnvServiceMonitorRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnvServiceMonitorResponse DescribeEnvServiceMonitorResponse
     */
    public function describeEnvServiceMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceMonitorName)) {
            $query['ServiceMonitorName'] = $request->serviceMonitorName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DescribeEnvServiceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the ServiceMonitor details of an environment.
     *  *
     * @param DescribeEnvServiceMonitorRequest $request DescribeEnvServiceMonitorRequest
     *
     * @return DescribeEnvServiceMonitorResponse DescribeEnvServiceMonitorResponse
     */
    public function describeEnvServiceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnvServiceMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an environment.
     *  *
     * @param DescribeEnvironmentRequest $request DescribeEnvironmentRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnvironmentResponse DescribeEnvironmentResponse
     */
    public function describeEnvironmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DescribeEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an environment.
     *  *
     * @param DescribeEnvironmentRequest $request DescribeEnvironmentRequest
     *
     * @return DescribeEnvironmentResponse DescribeEnvironmentResponse
     */
    public function describeEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnvironmentWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a feature.
     *  *
     * @param DescribeEnvironmentFeatureRequest $request DescribeEnvironmentFeatureRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnvironmentFeatureResponse DescribeEnvironmentFeatureResponse
     */
    public function describeEnvironmentFeatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->featureName)) {
            $query['FeatureName'] = $request->featureName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DescribeEnvironmentFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a feature.
     *  *
     * @param DescribeEnvironmentFeatureRequest $request DescribeEnvironmentFeatureRequest
     *
     * @return DescribeEnvironmentFeatureResponse DescribeEnvironmentFeatureResponse
     */
    public function describeEnvironmentFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnvironmentFeatureWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of IM chatbots.
     *  *
     * @param DescribeIMRobotsRequest $request DescribeIMRobotsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIMRobotsResponse DescribeIMRobotsResponse
     */
    public function describeIMRobotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->robotIds)) {
            $query['RobotIds'] = $request->robotIds;
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
     * @summary Queries a list of IM chatbots.
     *  *
     * @param DescribeIMRobotsRequest $request DescribeIMRobotsRequest
     *
     * @return DescribeIMRobotsResponse DescribeIMRobotsResponse
     */
    public function describeIMRobots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIMRobotsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about an alert rule of Prometheus Service.
     *  *
     * @param DescribePrometheusAlertRuleRequest $request DescribePrometheusAlertRuleRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePrometheusAlertRuleResponse DescribePrometheusAlertRuleResponse
     */
    public function describePrometheusAlertRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertId)) {
            $query['AlertId'] = $request->alertId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
     * @summary Queries the details about an alert rule of Prometheus Service.
     *  *
     * @param DescribePrometheusAlertRuleRequest $request DescribePrometheusAlertRuleRequest
     *
     * @return DescribePrometheusAlertRuleResponse DescribePrometheusAlertRuleResponse
     */
    public function describePrometheusAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrometheusAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTraceLicenseKeyRequest $request DescribeTraceLicenseKeyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTraceLicenseKeyResponse DescribeTraceLicenseKeyResponse
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
     * @param DescribeTraceLicenseKeyRequest $request DescribeTraceLicenseKeyRequest
     *
     * @return DescribeTraceLicenseKeyResponse DescribeTraceLicenseKeyResponse
     */
    public function describeTraceLicenseKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTraceLicenseKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of webhook alert contacts.
     *  *
     * @param DescribeWebhookContactsRequest $request DescribeWebhookContactsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWebhookContactsResponse DescribeWebhookContactsResponse
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
     * @summary Queries the list of webhook alert contacts.
     *  *
     * @param DescribeWebhookContactsRequest $request DescribeWebhookContactsRequest
     *
     * @return DescribeWebhookContactsResponse DescribeWebhookContactsResponse
     */
    public function describeWebhookContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebhookContactsWithOptions($request, $runtime);
    }

    /**
     * @summary 开启指标
     *  *
     * @param EnableMetricRequest $request EnableMetricRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableMetricResponse EnableMetricResponse
     */
    public function enableMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dropMetric)) {
            $query['DropMetric'] = $request->dropMetric;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return EnableMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启指标
     *  *
     * @param EnableMetricRequest $request EnableMetricRequest
     *
     * @return EnableMetricResponse EnableMetricResponse
     */
    public function enableMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableMetricWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the download URL of the Application Real-Time Monitoring Service (ARMS) agent.
     *  *
     * @param GetAgentDownloadUrlRequest $request GetAgentDownloadUrlRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAgentDownloadUrlResponse GetAgentDownloadUrlResponse
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
     * @summary Obtains the download URL of the Application Real-Time Monitoring Service (ARMS) agent.
     *  *
     * @param GetAgentDownloadUrlRequest $request GetAgentDownloadUrlRequest
     *
     * @return GetAgentDownloadUrlResponse GetAgentDownloadUrlResponse
     */
    public function getAgentDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Queries alert rules.
     *  *
     * @param GetAlertRulesRequest $request GetAlertRulesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAlertRulesResponse GetAlertRulesResponse
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
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
     * @summary Queries alert rules.
     *  *
     * @param GetAlertRulesRequest $request GetAlertRulesRequest
     *
     * @return GetAlertRulesResponse GetAlertRulesResponse
     */
    public function getAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the API operations of application monitoring by page.
     *  *
     * @param GetAppApiByPageRequest $request GetAppApiByPageRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppApiByPageResponse GetAppApiByPageResponse
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
     * @summary Queries the API operations of application monitoring by page.
     *  *
     * @param GetAppApiByPageRequest $request GetAppApiByPageRequest
     *
     * @return GetAppApiByPageResponse GetAppApiByPageResponse
     */
    public function getAppApiByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppApiByPageWithOptions($request, $runtime);
    }

    /**
     * @summary 应用各个实例的JVM配置信息
     *  *
     * @param GetAppJVMConfigRequest $request GetAppJVMConfigRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppJVMConfigResponse GetAppJVMConfigResponse
     */
    public function getAppJVMConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetAppJVMConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用各个实例的JVM配置信息
     *  *
     * @param GetAppJVMConfigRequest $request GetAppJVMConfigRequest
     *
     * @return GetAppJVMConfigResponse GetAppJVMConfigResponse
     */
    public function getAppJVMConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppJVMConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the authentication token for remote read and write over the Internet.
     *  *
     * @param GetAuthTokenRequest $request GetAuthTokenRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAuthTokenResponse GetAuthTokenResponse
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
     * @summary Obtains the authentication token for remote read and write over the Internet.
     *  *
     * @param GetAuthTokenRequest $request GetAuthTokenRequest
     *
     * @return GetAuthTokenResponse GetAuthTokenResponse
     */
    public function getAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthTokenWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI GetCloudClusterAllUrl is deprecated, please use ARMS::2019-08-08::GetRemoteWriteUrl instead
     *  *
     * @summary Queries the read and write URLs of a CloudMonitor instance, such as Pushgateway and Grafana URLs.
     *  *
     * Deprecated
     *
     * @param GetCloudClusterAllUrlRequest $request GetCloudClusterAllUrlRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCloudClusterAllUrlResponse GetCloudClusterAllUrlResponse
     */
    public function getCloudClusterAllUrlWithOptions($request, $runtime)
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

        return GetCloudClusterAllUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI GetCloudClusterAllUrl is deprecated, please use ARMS::2019-08-08::GetRemoteWriteUrl instead
     *  *
     * @summary Queries the read and write URLs of a CloudMonitor instance, such as Pushgateway and Grafana URLs.
     *  *
     * Deprecated
     *
     * @param GetCloudClusterAllUrlRequest $request GetCloudClusterAllUrlRequest
     *
     * @return GetCloudClusterAllUrlResponse GetCloudClusterAllUrlResponse
     */
    public function getCloudClusterAllUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCloudClusterAllUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains all the URLs of a cluster, including remote read and write URLs, Pushgateway URLs, and Grafana URLs.
     *  *
     * @param GetClusterAllUrlRequest $request GetClusterAllUrlRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetClusterAllUrlResponse GetClusterAllUrlResponse
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
     * @summary Obtains all the URLs of a cluster, including remote read and write URLs, Pushgateway URLs, and Grafana URLs.
     *  *
     * @param GetClusterAllUrlRequest $request GetClusterAllUrlRequest
     *
     * @return GetClusterAllUrlResponse GetClusterAllUrlResponse
     */
    public function getClusterAllUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterAllUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 获取商业化状态
     *  *
     * @param GetCommercialStatusRequest $request GetCommercialStatusRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCommercialStatusResponse GetCommercialStatusResponse
     */
    public function getCommercialStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetCommercialStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取商业化状态
     *  *
     * @param GetCommercialStatusRequest $request GetCommercialStatusRequest
     *
     * @return GetCommercialStatusResponse GetCommercialStatusResponse
     */
    public function getCommercialStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommercialStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the Explore feature of Grafana.
     *  *
     * @param GetExploreUrlRequest $request GetExploreUrlRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetExploreUrlResponse GetExploreUrlResponse
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
     * @summary Enables the Explore feature of Grafana.
     *  *
     * @param GetExploreUrlRequest $request GetExploreUrlRequest
     *
     * @return GetExploreUrlResponse GetExploreUrlResponse
     */
    public function getExploreUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExploreUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 获取指定工作区
     *  *
     * @param GetGrafanaWorkspaceRequest $request GetGrafanaWorkspaceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGrafanaWorkspaceResponse GetGrafanaWorkspaceResponse
     */
    public function getGrafanaWorkspaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->grafanaWorkspaceId)) {
            $query['GrafanaWorkspaceId'] = $request->grafanaWorkspaceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetGrafanaWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定工作区
     *  *
     * @param GetGrafanaWorkspaceRequest $request GetGrafanaWorkspaceRequest
     *
     * @return GetGrafanaWorkspaceResponse GetGrafanaWorkspaceResponse
     */
    public function getGrafanaWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGrafanaWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI GetIntegrationState is deprecated, please use ARMS::2019-08-08::DescribeAddonRelease instead
     *  *
     * @summary 获取Prometheus中是否已接入某种Integration类型
     *  *
     * Deprecated
     *
     * @param GetIntegrationStateRequest $request GetIntegrationStateRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIntegrationStateResponse GetIntegrationStateResponse
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
     * @deprecated openAPI GetIntegrationState is deprecated, please use ARMS::2019-08-08::DescribeAddonRelease instead
     *  *
     * @summary 获取Prometheus中是否已接入某种Integration类型
     *  *
     * Deprecated
     *
     * @param GetIntegrationStateRequest $request GetIntegrationStateRequest
     *
     * @return GetIntegrationStateResponse GetIntegrationStateResponse
     */
    public function getIntegrationState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIntegrationStateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a Prometheus instance of a serverless Kubernetes (ASK) cluster or Elastic Compute Service (ECS) instance.
     *  *
     * @param GetManagedPrometheusStatusRequest $request GetManagedPrometheusStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetManagedPrometheusStatusResponse GetManagedPrometheusStatusResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
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
     * @summary Queries the status of a Prometheus instance of a serverless Kubernetes (ASK) cluster or Elastic Compute Service (ECS) instance.
     *  *
     * @param GetManagedPrometheusStatusRequest $request GetManagedPrometheusStatusRequest
     *
     * @return GetManagedPrometheusStatusResponse GetManagedPrometheusStatusResponse
     */
    public function getManagedPrometheusStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getManagedPrometheusStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of one or more traces.
     *  *
     * @param GetMultipleTraceRequest $request GetMultipleTraceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMultipleTraceResponse GetMultipleTraceResponse
     */
    public function getMultipleTraceWithOptions($request, $runtime)
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
     * @summary Queries the details of one or more traces.
     *  *
     * @param GetMultipleTraceRequest $request GetMultipleTraceRequest
     *
     * @return GetMultipleTraceResponse GetMultipleTraceResponse
     */
    public function getMultipleTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultipleTraceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a scheduling policy.
     *  *
     * @param GetOnCallSchedulesDetailRequest $request GetOnCallSchedulesDetailRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOnCallSchedulesDetailResponse GetOnCallSchedulesDetailResponse
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
     * @summary Queries the information about a scheduling policy.
     *  *
     * @param GetOnCallSchedulesDetailRequest $request GetOnCallSchedulesDetailRequest
     *
     * @return GetOnCallSchedulesDetailResponse GetOnCallSchedulesDetailResponse
     */
    public function getOnCallSchedulesDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOnCallSchedulesDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the token required for integrating Prometheus Service.
     *  *
     * @description None.
     *  *
     * @param GetPrometheusApiTokenRequest $request GetPrometheusApiTokenRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPrometheusApiTokenResponse GetPrometheusApiTokenResponse
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
     * @summary Queries the token required for integrating Prometheus Service.
     *  *
     * @description None.
     *  *
     * @param GetPrometheusApiTokenRequest $request GetPrometheusApiTokenRequest
     *
     * @return GetPrometheusApiTokenResponse GetPrometheusApiTokenResponse
     */
    public function getPrometheusApiToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrometheusApiTokenWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a global aggregation instance.
     *  *
     * @param GetPrometheusGlobalViewRequest $request GetPrometheusGlobalViewRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPrometheusGlobalViewResponse GetPrometheusGlobalViewResponse
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
     * @summary Queries the information about a global aggregation instance.
     *  *
     * @param GetPrometheusGlobalViewRequest $request GetPrometheusGlobalViewRequest
     *
     * @return GetPrometheusGlobalViewResponse GetPrometheusGlobalViewResponse
     */
    public function getPrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a Prometheus instance.
     *  *
     * @param GetPrometheusInstanceRequest $request GetPrometheusInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPrometheusInstanceResponse GetPrometheusInstanceResponse
     */
    public function getPrometheusInstanceWithOptions($request, $runtime)
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

        return GetPrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a Prometheus instance.
     *  *
     * @param GetPrometheusInstanceRequest $request GetPrometheusInstanceRequest
     *
     * @return GetPrometheusInstanceResponse GetPrometheusInstanceResponse
     */
    public function getPrometheusInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrometheusInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an exporter that is integrated into a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param GetPrometheusIntegrationRequest $request GetPrometheusIntegrationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPrometheusIntegrationResponse GetPrometheusIntegrationResponse
     */
    public function getPrometheusIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->integrationType)) {
            $query['IntegrationType'] = $request->integrationType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetPrometheusIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an exporter that is integrated into a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param GetPrometheusIntegrationRequest $request GetPrometheusIntegrationRequest
     *
     * @return GetPrometheusIntegrationResponse GetPrometheusIntegrationResponse
     */
    public function getPrometheusIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrometheusIntegrationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the monitoring configuration of a Prometheus instance.
     *  *
     * @param GetPrometheusMonitoringRequest $request GetPrometheusMonitoringRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPrometheusMonitoringResponse GetPrometheusMonitoringResponse
     */
    public function getPrometheusMonitoringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->monitoringName)) {
            $query['MonitoringName'] = $request->monitoringName;
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

        return GetPrometheusMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the monitoring configuration of a Prometheus instance.
     *  *
     * @param GetPrometheusMonitoringRequest $request GetPrometheusMonitoringRequest
     *
     * @return GetPrometheusMonitoringResponse GetPrometheusMonitoringResponse
     */
    public function getPrometheusMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrometheusMonitoringWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a remote write configuration item of a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param GetPrometheusRemoteWriteRequest $request GetPrometheusRemoteWriteRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPrometheusRemoteWriteResponse GetPrometheusRemoteWriteResponse
     */
    public function getPrometheusRemoteWriteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remoteWriteName)) {
            $query['RemoteWriteName'] = $request->remoteWriteName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPrometheusRemoteWrite',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPrometheusRemoteWriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a remote write configuration item of a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param GetPrometheusRemoteWriteRequest $request GetPrometheusRemoteWriteRequest
     *
     * @return GetPrometheusRemoteWriteResponse GetPrometheusRemoteWriteResponse
     */
    public function getPrometheusRemoteWrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrometheusRemoteWriteWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the recording rule of a cluster.
     *  *
     * @param GetRecordingRuleRequest $request GetRecordingRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRecordingRuleResponse GetRecordingRuleResponse
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
     * @summary Obtains the recording rule of a cluster.
     *  *
     * @param GetRecordingRuleRequest $request GetRecordingRuleRequest
     *
     * @return GetRecordingRuleResponse GetRecordingRuleResponse
     */
    public function getRecordingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecordingRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the objects of a Browser Monitoring application by process identifier (PID).
     *  *
     * @param GetRetcodeAppByPidRequest $request GetRetcodeAppByPidRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRetcodeAppByPidResponse GetRetcodeAppByPidResponse
     */
    public function getRetcodeAppByPidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetRetcodeAppByPidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the objects of a Browser Monitoring application by process identifier (PID).
     *  *
     * @param GetRetcodeAppByPidRequest $request GetRetcodeAppByPidRequest
     *
     * @return GetRetcodeAppByPidResponse GetRetcodeAppByPidResponse
     */
    public function getRetcodeAppByPid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRetcodeAppByPidWithOptions($request, $runtime);
    }

    /**
     * @summary 传入SLS查询语句，查询出前端监控数据
     *  *
     * @param GetRetcodeDataByQueryRequest $request GetRetcodeDataByQueryRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRetcodeDataByQueryResponse GetRetcodeDataByQueryResponse
     */
    public function getRetcodeDataByQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->to)) {
            $query['To'] = $request->to;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetRetcodeDataByQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 传入SLS查询语句，查询出前端监控数据
     *  *
     * @param GetRetcodeDataByQueryRequest $request GetRetcodeDataByQueryRequest
     *
     * @return GetRetcodeDataByQueryResponse GetRetcodeDataByQueryResponse
     */
    public function getRetcodeDataByQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRetcodeDataByQueryWithOptions($request, $runtime);
    }

    /**
     * @summary 获取前端监控应用SLS存储的详细信息
     *  *
     * @param GetRetcodeLogstoreRequest $request GetRetcodeLogstoreRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRetcodeLogstoreResponse GetRetcodeLogstoreResponse
     */
    public function getRetcodeLogstoreWithOptions($request, $runtime)
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

        return GetRetcodeLogstoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取前端监控应用SLS存储的详细信息
     *  *
     * @param GetRetcodeLogstoreRequest $request GetRetcodeLogstoreRequest
     *
     * @return GetRetcodeLogstoreResponse GetRetcodeLogstoreResponse
     */
    public function getRetcodeLogstore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRetcodeLogstoreWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the logon-free URL of a Browser Monitoring application.
     *  *
     * @param GetRetcodeShareUrlRequest $request GetRetcodeShareUrlRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRetcodeShareUrlResponse GetRetcodeShareUrlResponse
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
     * @summary Queries the logon-free URL of a Browser Monitoring application.
     *  *
     * @param GetRetcodeShareUrlRequest $request GetRetcodeShareUrlRequest
     *
     * @return GetRetcodeShareUrlResponse GetRetcodeShareUrlResponse
     */
    public function getRetcodeShareUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRetcodeShareUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 获取前端监控单个应用信息
     *  *
     * @param GetRumAppInfoRequest $request GetRumAppInfoRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRumAppInfoResponse GetRumAppInfoResponse
     */
    public function getRumAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appGroup)) {
            $query['AppGroup'] = $request->appGroup;
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

        return GetRumAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取前端监控单个应用信息
     *  *
     * @param GetRumAppInfoRequest $request GetRumAppInfoRequest
     *
     * @return GetRumAppInfoResponse GetRumAppInfoResponse
     */
    public function getRumAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRumAppInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获取前端监控应用列表信息
     *  *
     * @param GetRumAppsRequest $request GetRumAppsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRumAppsResponse GetRumAppsResponse
     */
    public function getRumAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appGroup)) {
            $query['AppGroup'] = $request->appGroup;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetRumAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取前端监控应用列表信息
     *  *
     * @param GetRumAppsRequest $request GetRumAppsRequest
     *
     * @return GetRumAppsResponse GetRumAppsResponse
     */
    public function getRumApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRumAppsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取前端监控应用sql查询分页结果
     *  *
     * @param GetRumDataForPageRequest $request GetRumDataForPageRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRumDataForPageResponse GetRumDataForPageResponse
     */
    public function getRumDataForPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appGroup)) {
            $query['AppGroup'] = $request->appGroup;
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
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
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

        return GetRumDataForPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取前端监控应用sql查询分页结果
     *  *
     * @param GetRumDataForPageRequest $request GetRumDataForPageRequest
     *
     * @return GetRumDataForPageResponse GetRumDataForPageResponse
     */
    public function getRumDataForPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRumDataForPageWithOptions($request, $runtime);
    }

    /**
     * @summary 获取RUM异常堆栈
     *  *
     * @param GetRumExceptionStackRequest $request GetRumExceptionStackRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRumExceptionStackResponse GetRumExceptionStackResponse
     */
    public function getRumExceptionStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->exceptionBinaryImages)) {
            $query['ExceptionBinaryImages'] = $request->exceptionBinaryImages;
        }
        if (!Utils::isUnset($request->exceptionStack)) {
            $query['ExceptionStack'] = $request->exceptionStack;
        }
        if (!Utils::isUnset($request->exceptionThreadId)) {
            $query['ExceptionThreadId'] = $request->exceptionThreadId;
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

        return GetRumExceptionStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取RUM异常堆栈
     *  *
     * @param GetRumExceptionStackRequest $request GetRumExceptionStackRequest
     *
     * @return GetRumExceptionStackResponse GetRumExceptionStackResponse
     */
    public function getRumExceptionStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRumExceptionStackWithOptions($request, $runtime);
    }

    /**
     * @summary 获取前端监控在oss中文件
     *  *
     * @param GetRumUploadFilesRequest $request GetRumUploadFilesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRumUploadFilesResponse GetRumUploadFilesResponse
     */
    public function getRumUploadFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
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

        return GetRumUploadFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取前端监控在oss中文件
     *  *
     * @param GetRumUploadFilesRequest $request GetRumUploadFilesRequest
     *
     * @return GetRumUploadFilesResponse GetRumUploadFilesResponse
     */
    public function getRumUploadFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRumUploadFilesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取前端监控上传SourceMap的具体信息
     *  *
     * @param GetSourceMapInfoRequest $request GetSourceMapInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSourceMapInfoResponse GetSourceMapInfoResponse
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
     * @summary 获取前端监控上传SourceMap的具体信息
     *  *
     * @param GetSourceMapInfoRequest $request GetSourceMapInfoRequest
     *
     * @return GetSourceMapInfoResponse GetSourceMapInfoResponse
     */
    public function getSourceMapInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSourceMapInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information of a method stack.
     *  *
     * @param GetStackRequest $request GetStackRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStackResponse GetStackResponse
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
     * @summary Queries the information of a method stack.
     *  *
     * @param GetStackRequest $request GetStackRequest
     *
     * @return GetStackResponse GetStackResponse
     */
    public function getStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStackWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains detection points.
     *  *
     * @param GetSyntheticMonitorsRequest $tmpReq  GetSyntheticMonitorsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSyntheticMonitorsResponse GetSyntheticMonitorsResponse
     */
    public function getSyntheticMonitorsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSyntheticMonitorsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetSyntheticMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains detection points.
     *  *
     * @param GetSyntheticMonitorsRequest $request GetSyntheticMonitorsRequest
     *
     * @return GetSyntheticMonitorsResponse GetSyntheticMonitorsResponse
     */
    public function getSyntheticMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSyntheticMonitorsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取单个拨测任务的详情
     *  *
     * @param GetSyntheticTaskDetailRequest $request GetSyntheticTaskDetailRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSyntheticTaskDetailResponse GetSyntheticTaskDetailResponse
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
     * @summary 获取单个拨测任务的详情
     *  *
     * @param GetSyntheticTaskDetailRequest $request GetSyntheticTaskDetailRequest
     *
     * @return GetSyntheticTaskDetailResponse GetSyntheticTaskDetailResponse
     */
    public function getSyntheticTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSyntheticTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 获取拨测任务列表
     *  *
     * @param GetSyntheticTaskListRequest $request GetSyntheticTaskListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSyntheticTaskListResponse GetSyntheticTaskListResponse
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
     * @summary 获取拨测任务列表
     *  *
     * @param GetSyntheticTaskListRequest $request GetSyntheticTaskListRequest
     *
     * @return GetSyntheticTaskListResponse GetSyntheticTaskListResponse
     */
    public function getSyntheticTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSyntheticTaskListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取拨测任务的监测点信息
     *  *
     * @param GetSyntheticTaskMonitorsRequest $request GetSyntheticTaskMonitorsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSyntheticTaskMonitorsResponse GetSyntheticTaskMonitorsResponse
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
     * @summary 获取拨测任务的监测点信息
     *  *
     * @param GetSyntheticTaskMonitorsRequest $request GetSyntheticTaskMonitorsRequest
     *
     * @return GetSyntheticTaskMonitorsResponse GetSyntheticTaskMonitorsResponse
     */
    public function getSyntheticTaskMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSyntheticTaskMonitorsWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the details of a synthetic monitoring task.
     *  *
     * @param GetTimingSyntheticTaskRequest $request GetTimingSyntheticTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTimingSyntheticTaskResponse GetTimingSyntheticTaskResponse
     */
    public function getTimingSyntheticTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetTimingSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the details of a synthetic monitoring task.
     *  *
     * @param GetTimingSyntheticTaskRequest $request GetTimingSyntheticTaskRequest
     *
     * @return GetTimingSyntheticTaskResponse GetTimingSyntheticTaskResponse
     */
    public function getTimingSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTimingSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a trace.
     *  *
     * @description > You must use Application Real-Time Monitoring Service (ARMS) SDK for Java V2.7.24.
     *  *
     * @param GetTraceRequest $request GetTraceRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTraceResponse GetTraceResponse
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
     * @summary Queries the details of a trace.
     *  *
     * @description > You must use Application Real-Time Monitoring Service (ARMS) SDK for Java V2.7.24.
     *  *
     * @param GetTraceRequest $request GetTraceRequest
     *
     * @return GetTraceResponse GetTraceResponse
     */
    public function getTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTraceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an application monitoring task.
     *  *
     * @param GetTraceAppRequest $request GetTraceAppRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTraceAppResponse GetTraceAppResponse
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
     * @summary Queries the details of an application monitoring task.
     *  *
     * @param GetTraceAppRequest $request GetTraceAppRequest
     *
     * @return GetTraceAppResponse GetTraceAppResponse
     */
    public function getTraceApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTraceAppWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an alert rule based on an alert template.
     *  *
     * @description >  You can call the **ImportAppAlertRules** operation to import only the alert rules that are generated by Application Real-Time Monitoring Service (ARMS) for application monitoring and browser monitoring. This operation cannot be used to import custom alert rules, alert rules for Prometheus monitoring, or default emergency alert rules.
     *  *
     * @param ImportAppAlertRulesRequest $request ImportAppAlertRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportAppAlertRulesResponse ImportAppAlertRulesResponse
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
     * @summary Creates an alert rule based on an alert template.
     *  *
     * @description >  You can call the **ImportAppAlertRules** operation to import only the alert rules that are generated by Application Real-Time Monitoring Service (ARMS) for application monitoring and browser monitoring. This operation cannot be used to import custom alert rules, alert rules for Prometheus monitoring, or default emergency alert rules.
     *  *
     * @param ImportAppAlertRulesRequest $request ImportAppAlertRulesRequest
     *
     * @return ImportAppAlertRulesResponse ImportAppAlertRulesResponse
     */
    public function importAppAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importAppAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Initializes an environment instance.
     *  *
     * @param InitEnvironmentRequest $request InitEnvironmentRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return InitEnvironmentResponse InitEnvironmentResponse
     */
    public function initEnvironmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->createAuthToken)) {
            $query['CreateAuthToken'] = $request->createAuthToken;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->managedType)) {
            $query['ManagedType'] = $request->managedType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return InitEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Initializes an environment instance.
     *  *
     * @param InitEnvironmentRequest $request InitEnvironmentRequest
     *
     * @return InitEnvironmentResponse InitEnvironmentResponse
     */
    public function initEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initEnvironmentWithOptions($request, $runtime);
    }

    /**
     * @summary Installs an add-on.
     *  *
     * @param InstallAddonRequest $request InstallAddonRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallAddonResponse InstallAddonResponse
     */
    public function installAddonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addonVersion)) {
            $query['AddonVersion'] = $request->addonVersion;
        }
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->releaseName)) {
            $query['ReleaseName'] = $request->releaseName;
        }
        if (!Utils::isUnset($request->values)) {
            $query['Values'] = $request->values;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return InstallAddonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Installs an add-on.
     *  *
     * @param InstallAddonRequest $request InstallAddonRequest
     *
     * @return InstallAddonResponse InstallAddonResponse
     */
    public function installAddon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installAddonWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI InstallCmsExporter is deprecated, please use ARMS::2019-08-08::InstallAddon instead
     *  *
     * @summary Installs the cms-exporter collector.
     *  *
     * Deprecated
     *
     * @param InstallCmsExporterRequest $request InstallCmsExporterRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallCmsExporterResponse InstallCmsExporterResponse
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
     * @deprecated openAPI InstallCmsExporter is deprecated, please use ARMS::2019-08-08::InstallAddon instead
     *  *
     * @summary Installs the cms-exporter collector.
     *  *
     * Deprecated
     *
     * @param InstallCmsExporterRequest $request InstallCmsExporterRequest
     *
     * @return InstallCmsExporterResponse InstallCmsExporterResponse
     */
    public function installCmsExporter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installCmsExporterWithOptions($request, $runtime);
    }

    /**
     * @summary Installs a feature.
     *  *
     * @param InstallEnvironmentFeatureRequest $request InstallEnvironmentFeatureRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallEnvironmentFeatureResponse InstallEnvironmentFeatureResponse
     */
    public function installEnvironmentFeatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->featureName)) {
            $query['FeatureName'] = $request->featureName;
        }
        if (!Utils::isUnset($request->featureVersion)) {
            $query['FeatureVersion'] = $request->featureVersion;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return InstallEnvironmentFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Installs a feature.
     *  *
     * @param InstallEnvironmentFeatureRequest $request InstallEnvironmentFeatureRequest
     *
     * @return InstallEnvironmentFeatureResponse InstallEnvironmentFeatureResponse
     */
    public function installEnvironmentFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installEnvironmentFeatureWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Prometheus instance to monitor a serverless Kubernetes (ASK) cluster or an Elastic Compute Service (ECS) instance.
     *  *
     * @description If you call the operation to monitor an ASK cluster or an ECS instance, a Prometheus agent is installed in the ASK cluster or ECS instance. Make sure that the ASK cluster or ECS instance has no Prometheus agent installed in advance.
     *  *
     * @param InstallManagedPrometheusRequest $request InstallManagedPrometheusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallManagedPrometheusResponse InstallManagedPrometheusResponse
     */
    public function installManagedPrometheusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->grafanaInstanceId)) {
            $query['GrafanaInstanceId'] = $request->grafanaInstanceId;
        }
        if (!Utils::isUnset($request->kubeConfig)) {
            $query['KubeConfig'] = $request->kubeConfig;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
     * @summary Creates a Prometheus instance to monitor a serverless Kubernetes (ASK) cluster or an Elastic Compute Service (ECS) instance.
     *  *
     * @description If you call the operation to monitor an ASK cluster or an ECS instance, a Prometheus agent is installed in the ASK cluster or ECS instance. Make sure that the ASK cluster or ECS instance has no Prometheus agent installed in advance.
     *  *
     * @param InstallManagedPrometheusRequest $request InstallManagedPrometheusRequest
     *
     * @return InstallManagedPrometheusResponse InstallManagedPrometheusResponse
     */
    public function installManagedPrometheus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installManagedPrometheusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the alerts that have been triggered.
     *  *
     * @param ListActivatedAlertsRequest $request ListActivatedAlertsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListActivatedAlertsResponse ListActivatedAlertsResponse
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
     * @summary Queries the alerts that have been triggered.
     *  *
     * @param ListActivatedAlertsRequest $request ListActivatedAlertsRequest
     *
     * @return ListActivatedAlertsResponse ListActivatedAlertsResponse
     */
    public function listActivatedAlerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listActivatedAlertsWithOptions($request, $runtime);
    }

    /**
     * @summary Query the Addons installed in the environment.
     *  *
     * @param ListAddonReleasesRequest $request ListAddonReleasesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAddonReleasesResponse ListAddonReleasesResponse
     */
    public function listAddonReleasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addonName)) {
            $query['AddonName'] = $request->addonName;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListAddonReleasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query the Addons installed in the environment.
     *  *
     * @param ListAddonReleasesRequest $request ListAddonReleasesRequest
     *
     * @return ListAddonReleasesResponse ListAddonReleasesResponse
     */
    public function listAddonReleases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAddonReleasesWithOptions($request, $runtime);
    }

    /**
     * @summary List of access center products.
     *  *
     * @param ListAddonsRequest $request ListAddonsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAddonsResponse ListAddonsResponse
     */
    public function listAddonsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->regexp)) {
            $query['Regexp'] = $request->regexp;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->search)) {
            $query['Search'] = $request->search;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary List of access center products.
     *  *
     * @param ListAddonsRequest $request ListAddonsRequest
     *
     * @return ListAddonsResponse ListAddonsResponse
     */
    public function listAddons($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAddonsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries historical alert events.
     *  *
     * @param ListAlertEventsRequest $request ListAlertEventsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAlertEventsResponse ListAlertEventsResponse
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
        if (!Utils::isUnset($request->showNotificationPolicies)) {
            $query['ShowNotificationPolicies'] = $request->showNotificationPolicies;
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
     * @summary Queries historical alert events.
     *  *
     * @param ListAlertEventsRequest $request ListAlertEventsRequest
     *
     * @return ListAlertEventsResponse ListAlertEventsResponse
     */
    public function listAlertEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlertEventsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the alert sending history.
     *  *
     * @param ListAlertsRequest $request ListAlertsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAlertsResponse ListAlertsResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
     * @summary Queries the alert sending history.
     *  *
     * @param ListAlertsRequest $request ListAlertsRequest
     *
     * @return ListAlertsResponse ListAlertsResponse
     */
    public function listAlerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlertsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all Grafana dashboards in a specified region.
     *  *
     * @param ListClusterFromGrafanaRequest $request ListClusterFromGrafanaRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClusterFromGrafanaResponse ListClusterFromGrafanaResponse
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
     * @summary Queries all Grafana dashboards in a specified region.
     *  *
     * @param ListClusterFromGrafanaRequest $request ListClusterFromGrafanaRequest
     *
     * @return ListClusterFromGrafanaResponse ListClusterFromGrafanaResponse
     */
    public function listClusterFromGrafana($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterFromGrafanaWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ListCmsInstances is deprecated, please use ARMS::2019-08-08::ListEnvironmentAddons instead
     *  *
     * @summary 查询Cms安装信息
     *  *
     * Deprecated
     *
     * @param ListCmsInstancesRequest $request ListCmsInstancesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCmsInstancesResponse ListCmsInstancesResponse
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
     * @deprecated openAPI ListCmsInstances is deprecated, please use ARMS::2019-08-08::ListEnvironmentAddons instead
     *  *
     * @summary 查询Cms安装信息
     *  *
     * Deprecated
     *
     * @param ListCmsInstancesRequest $request ListCmsInstancesRequest
     *
     * @return ListCmsInstancesResponse ListCmsInstancesResponse
     */
    public function listCmsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCmsInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Grafana dashboards of a Container Service for Kubernetes (ACK) cluster.
     *  *
     * @description None.
     *  *
     * @param ListDashboardsRequest $request ListDashboardsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDashboardsResponse ListDashboardsResponse
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
     * @summary Queries the Grafana dashboards of a Container Service for Kubernetes (ACK) cluster.
     *  *
     * @description None.
     *  *
     * @param ListDashboardsRequest $request ListDashboardsRequest
     *
     * @return ListDashboardsResponse ListDashboardsResponse
     */
    public function listDashboards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDashboardsWithOptions($request, $runtime);
    }

    /**
     * @summary Uses Loki data sources and other data sources to create a dashboard in Prometheus Service.
     *  *
     * @param ListDashboardsByNameRequest $request ListDashboardsByNameRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDashboardsByNameResponse ListDashboardsByNameResponse
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
     * @summary Uses Loki data sources and other data sources to create a dashboard in Prometheus Service.
     *  *
     * @param ListDashboardsByNameRequest $request ListDashboardsByNameRequest
     *
     * @return ListDashboardsByNameResponse ListDashboardsByNameResponse
     */
    public function listDashboardsByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDashboardsByNameWithOptions($request, $runtime);
    }

    /**
     * @param ListDispatchRuleRequest $request ListDispatchRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDispatchRuleResponse ListDispatchRuleResponse
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
     * @param ListDispatchRuleRequest $request ListDispatchRuleRequest
     *
     * @return ListDispatchRuleResponse ListDispatchRuleResponse
     */
    public function listDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the custom jobs of an environment.
     *  *
     * @param ListEnvCustomJobsRequest $request ListEnvCustomJobsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEnvCustomJobsResponse ListEnvCustomJobsResponse
     */
    public function listEnvCustomJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->encryptYaml)) {
            $query['EncryptYaml'] = $request->encryptYaml;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListEnvCustomJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the custom jobs of an environment.
     *  *
     * @param ListEnvCustomJobsRequest $request ListEnvCustomJobsRequest
     *
     * @return ListEnvCustomJobsResponse ListEnvCustomJobsResponse
     */
    public function listEnvCustomJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvCustomJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the PodMonitors of an environment.
     *  *
     * @param ListEnvPodMonitorsRequest $request ListEnvPodMonitorsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEnvPodMonitorsResponse ListEnvPodMonitorsResponse
     */
    public function listEnvPodMonitorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListEnvPodMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the PodMonitors of an environment.
     *  *
     * @param ListEnvPodMonitorsRequest $request ListEnvPodMonitorsRequest
     *
     * @return ListEnvPodMonitorsResponse ListEnvPodMonitorsResponse
     */
    public function listEnvPodMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvPodMonitorsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the ServiceMonitors of an environment.
     *  *
     * @param ListEnvServiceMonitorsRequest $request ListEnvServiceMonitorsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEnvServiceMonitorsResponse ListEnvServiceMonitorsResponse
     */
    public function listEnvServiceMonitorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListEnvServiceMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the ServiceMonitors of an environment.
     *  *
     * @param ListEnvServiceMonitorsRequest $request ListEnvServiceMonitorsRequest
     *
     * @return ListEnvServiceMonitorsResponse ListEnvServiceMonitorsResponse
     */
    public function listEnvServiceMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvServiceMonitorsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about a dashboard of an environment instance.
     *  *
     * @param ListEnvironmentDashboardsRequest $request ListEnvironmentDashboardsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEnvironmentDashboardsResponse ListEnvironmentDashboardsResponse
     */
    public function listEnvironmentDashboardsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addonName)) {
            $query['AddonName'] = $request->addonName;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListEnvironmentDashboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about a dashboard of an environment instance.
     *  *
     * @param ListEnvironmentDashboardsRequest $request ListEnvironmentDashboardsRequest
     *
     * @return ListEnvironmentDashboardsResponse ListEnvironmentDashboardsResponse
     */
    public function listEnvironmentDashboards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvironmentDashboardsWithOptions($request, $runtime);
    }

    /**
     * @summary 环境的feature列表
     *  *
     * @param ListEnvironmentFeaturesRequest $request ListEnvironmentFeaturesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEnvironmentFeaturesResponse ListEnvironmentFeaturesResponse
     */
    public function listEnvironmentFeaturesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListEnvironmentFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 环境的feature列表
     *  *
     * @param ListEnvironmentFeaturesRequest $request ListEnvironmentFeaturesRequest
     *
     * @return ListEnvironmentFeaturesResponse ListEnvironmentFeaturesResponse
     */
    public function listEnvironmentFeatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvironmentFeaturesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries environments.
     *  *
     * @param ListEnvironmentsRequest $tmpReq  ListEnvironmentsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEnvironmentsResponse ListEnvironmentsResponse
     */
    public function listEnvironmentsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListEnvironmentsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->addonName)) {
            $query['AddonName'] = $request->addonName;
        }
        if (!Utils::isUnset($request->bindResourceId)) {
            $query['BindResourceId'] = $request->bindResourceId;
        }
        if (!Utils::isUnset($request->environmentType)) {
            $query['EnvironmentType'] = $request->environmentType;
        }
        if (!Utils::isUnset($request->feePackage)) {
            $query['FeePackage'] = $request->feePackage;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $query['Tag'] = $request->tagShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListEnvironmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries environments.
     *  *
     * @param ListEnvironmentsRequest $request ListEnvironmentsRequest
     *
     * @return ListEnvironmentsResponse ListEnvironmentsResponse
     */
    public function listEnvironments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnvironmentsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an escalation policy.
     *  *
     * @param ListEscalationPoliciesRequest $request ListEscalationPoliciesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEscalationPoliciesResponse ListEscalationPoliciesResponse
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
     * @summary Queries the information about an escalation policy.
     *  *
     * @param ListEscalationPoliciesRequest $request ListEscalationPoliciesRequest
     *
     * @return ListEscalationPoliciesResponse ListEscalationPoliciesResponse
     */
    public function listEscalationPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEscalationPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries EventBridge integrations that are used to push notifications.
     *  *
     * @param ListEventBridgeIntegrationsRequest $request ListEventBridgeIntegrationsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEventBridgeIntegrationsResponse ListEventBridgeIntegrationsResponse
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
     * @summary Queries EventBridge integrations that are used to push notifications.
     *  *
     * @param ListEventBridgeIntegrationsRequest $request ListEventBridgeIntegrationsRequest
     *
     * @return ListEventBridgeIntegrationsResponse ListEventBridgeIntegrationsResponse
     */
    public function listEventBridgeIntegrations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventBridgeIntegrationsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取指定工作区列表
     *  *
     * @param ListGrafanaWorkspaceRequest $tmpReq  ListGrafanaWorkspaceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGrafanaWorkspaceResponse ListGrafanaWorkspaceResponse
     */
    public function listGrafanaWorkspaceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGrafanaWorkspaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListGrafanaWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定工作区列表
     *  *
     * @param ListGrafanaWorkspaceRequest $request ListGrafanaWorkspaceRequest
     *
     * @return ListGrafanaWorkspaceResponse ListGrafanaWorkspaceResponse
     */
    public function listGrafanaWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGrafanaWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the abnormal Insights events within a specified period of time.
     *  *
     * @param ListInsightsEventsRequest $request ListInsightsEventsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInsightsEventsResponse ListInsightsEventsResponse
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
     * @summary Queries the abnormal Insights events within a specified period of time.
     *  *
     * @param ListInsightsEventsRequest $request ListInsightsEventsRequest
     *
     * @return ListInsightsEventsResponse ListInsightsEventsResponse
     */
    public function listInsightsEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInsightsEventsWithOptions($request, $runtime);
    }

    /**
     * @summary ListIntegration
     *  *
     * @param ListIntegrationRequest $request ListIntegrationRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIntegrationResponse ListIntegrationResponse
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
     * @summary ListIntegration
     *  *
     * @param ListIntegrationRequest $request ListIntegrationRequest
     *
     * @return ListIntegrationResponse ListIntegrationResponse
     */
    public function listIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntegrationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries notification policies based on specified conditions.
     *  *
     * @param ListNotificationPoliciesRequest $request ListNotificationPoliciesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNotificationPoliciesResponse ListNotificationPoliciesResponse
     */
    public function listNotificationPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directedMode)) {
            $query['DirectedMode'] = $request->directedMode;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
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
     * @summary Queries notification policies based on specified conditions.
     *  *
     * @param ListNotificationPoliciesRequest $request ListNotificationPoliciesRequest
     *
     * @return ListNotificationPoliciesResponse ListNotificationPoliciesResponse
     */
    public function listNotificationPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNotificationPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a scheduling policy.
     *  *
     * @param ListOnCallSchedulesRequest $request ListOnCallSchedulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOnCallSchedulesResponse ListOnCallSchedulesResponse
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
     * @summary Queries the information about a scheduling policy.
     *  *
     * @param ListOnCallSchedulesRequest $request ListOnCallSchedulesRequest
     *
     * @return ListOnCallSchedulesResponse ListOnCallSchedulesResponse
     */
    public function listOnCallSchedules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOnCallSchedulesWithOptions($request, $runtime);
    }

    /**
     * @summary The value of the annotation.
     *  *
     * @param ListPrometheusAlertRulesRequest $request ListPrometheusAlertRulesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrometheusAlertRulesResponse ListPrometheusAlertRulesResponse
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
     * @summary The value of the annotation.
     *  *
     * @param ListPrometheusAlertRulesRequest $request ListPrometheusAlertRulesRequest
     *
     * @return ListPrometheusAlertRulesResponse ListPrometheusAlertRulesResponse
     */
    public function listPrometheusAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @summary The available memory on node {{ $labels.instance }} is less than 10%. Available memory: {{ $value }}%
     *  *
     * @param ListPrometheusAlertTemplatesRequest $request ListPrometheusAlertTemplatesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrometheusAlertTemplatesResponse ListPrometheusAlertTemplatesResponse
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
     * @summary The available memory on node {{ $labels.instance }} is less than 10%. Available memory: {{ $value }}%
     *  *
     * @param ListPrometheusAlertTemplatesRequest $request ListPrometheusAlertTemplatesRequest
     *
     * @return ListPrometheusAlertTemplatesResponse ListPrometheusAlertTemplatesResponse
     */
    public function listPrometheusAlertTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusAlertTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取账号下聚合实例列表
     *  *
     * @param ListPrometheusGlobalViewRequest $request ListPrometheusGlobalViewRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrometheusGlobalViewResponse ListPrometheusGlobalViewResponse
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
     * @summary 获取账号下聚合实例列表
     *  *
     * @param ListPrometheusGlobalViewRequest $request ListPrometheusGlobalViewRequest
     *
     * @return ListPrometheusGlobalViewResponse ListPrometheusGlobalViewResponse
     */
    public function listPrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Prometheus instances by tag and resource group.
     *  *
     * @param ListPrometheusInstanceByTagAndResourceGroupIdRequest $request ListPrometheusInstanceByTagAndResourceGroupIdRequest
     * @param RuntimeOptions                                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrometheusInstanceByTagAndResourceGroupIdResponse ListPrometheusInstanceByTagAndResourceGroupIdResponse
     */
    public function listPrometheusInstanceByTagAndResourceGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListPrometheusInstanceByTagAndResourceGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Prometheus instances by tag and resource group.
     *  *
     * @param ListPrometheusInstanceByTagAndResourceGroupIdRequest $request ListPrometheusInstanceByTagAndResourceGroupIdRequest
     *
     * @return ListPrometheusInstanceByTagAndResourceGroupIdResponse ListPrometheusInstanceByTagAndResourceGroupIdResponse
     */
    public function listPrometheusInstanceByTagAndResourceGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusInstanceByTagAndResourceGroupIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all Prometheus instances in a region.
     *  *
     * @param ListPrometheusInstancesRequest $request ListPrometheusInstancesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrometheusInstancesResponse ListPrometheusInstancesResponse
     */
    public function listPrometheusInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
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
     * @summary Queries all Prometheus instances in a region.
     *  *
     * @param ListPrometheusInstancesRequest $request ListPrometheusInstancesRequest
     *
     * @return ListPrometheusInstancesResponse ListPrometheusInstancesResponse
     */
    public function listPrometheusInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of exporters that are integrated into a Prometheus instance. Only aliyun-cs and ecs instances are supported.
     *  *
     * @param ListPrometheusIntegrationRequest $request ListPrometheusIntegrationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrometheusIntegrationResponse ListPrometheusIntegrationResponse
     */
    public function listPrometheusIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->integrationType)) {
            $query['IntegrationType'] = $request->integrationType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListPrometheusIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of exporters that are integrated into a Prometheus instance. Only aliyun-cs and ecs instances are supported.
     *  *
     * @param ListPrometheusIntegrationRequest $request ListPrometheusIntegrationRequest
     *
     * @return ListPrometheusIntegrationResponse ListPrometheusIntegrationResponse
     */
    public function listPrometheusIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusIntegrationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the monitoring configuration of a Prometheus instance.
     *  *
     * @param ListPrometheusMonitoringRequest $request ListPrometheusMonitoringRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrometheusMonitoringResponse ListPrometheusMonitoringResponse
     */
    public function listPrometheusMonitoringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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

        return ListPrometheusMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the monitoring configuration of a Prometheus instance.
     *  *
     * @param ListPrometheusMonitoringRequest $request ListPrometheusMonitoringRequest
     *
     * @return ListPrometheusMonitoringResponse ListPrometheusMonitoringResponse
     */
    public function listPrometheusMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusMonitoringWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the remote write configuration items of a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param ListPrometheusRemoteWritesRequest $request ListPrometheusRemoteWritesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPrometheusRemoteWritesResponse ListPrometheusRemoteWritesResponse
     */
    public function listPrometheusRemoteWritesWithOptions($request, $runtime)
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
            'action'      => 'ListPrometheusRemoteWrites',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrometheusRemoteWritesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the remote write configuration items of a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param ListPrometheusRemoteWritesRequest $request ListPrometheusRemoteWritesRequest
     *
     * @return ListPrometheusRemoteWritesResponse ListPrometheusRemoteWritesResponse
     */
    public function listPrometheusRemoteWrites($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrometheusRemoteWritesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Browser Monitoring tasks in a region.
     *  *
     * @description ****
     *  *
     * @param ListRetcodeAppsRequest $request ListRetcodeAppsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRetcodeAppsResponse ListRetcodeAppsResponse
     */
    public function listRetcodeAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
     * @summary Queries the Browser Monitoring tasks in a region.
     *  *
     * @description ****
     *  *
     * @param ListRetcodeAppsRequest $request ListRetcodeAppsRequest
     *
     * @return ListRetcodeAppsResponse ListRetcodeAppsResponse
     */
    public function listRetcodeApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRetcodeAppsWithOptions($request, $runtime);
    }

    /**
     * @param ListScenarioRequest $request ListScenarioRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListScenarioResponse ListScenarioResponse
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
     * @param ListScenarioRequest $request ListScenarioRequest
     *
     * @return ListScenarioResponse ListScenarioResponse
     */
    public function listScenario($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScenarioWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information of a silence policy list.
     *  *
     * @param ListSilencePoliciesRequest $request ListSilencePoliciesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSilencePoliciesResponse ListSilencePoliciesResponse
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
     * @summary Queries the information of a silence policy list.
     *  *
     * @param ListSilencePoliciesRequest $request ListSilencePoliciesRequest
     *
     * @return ListSilencePoliciesResponse ListSilencePoliciesResponse
     */
    public function listSilencePolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSilencePoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询拨测明细列表
     *  *
     * @param ListSyntheticDetailRequest $tmpReq  ListSyntheticDetailRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSyntheticDetailResponse ListSyntheticDetailResponse
     */
    public function listSyntheticDetailWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSyntheticDetailShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->advancedFilters)) {
            $request->advancedFiltersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->advancedFilters, 'AdvancedFilters', 'json');
        }
        if (!Utils::isUnset($tmpReq->exactFilters)) {
            $request->exactFiltersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->exactFilters, 'ExactFilters', 'json');
        }
        if (!Utils::isUnset($tmpReq->filters)) {
            $request->filtersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filters, 'Filters', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListSyntheticDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询拨测明细列表
     *  *
     * @param ListSyntheticDetailRequest $request ListSyntheticDetailRequest
     *
     * @return ListSyntheticDetailResponse ListSyntheticDetailResponse
     */
    public function listSyntheticDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSyntheticDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries scheduled synthetic monitoring tasks.
     *  *
     * @param ListTimingSyntheticTasksRequest $tmpReq  ListTimingSyntheticTasksRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTimingSyntheticTasksResponse ListTimingSyntheticTasksResponse
     */
    public function listTimingSyntheticTasksWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTimingSyntheticTasksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->search)) {
            $request->searchShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->search, 'Search', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListTimingSyntheticTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries scheduled synthetic monitoring tasks.
     *  *
     * @param ListTimingSyntheticTasksRequest $request ListTimingSyntheticTasksRequest
     *
     * @return ListTimingSyntheticTasksResponse ListTimingSyntheticTasksResponse
     */
    public function listTimingSyntheticTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTimingSyntheticTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all Application Monitoring tasks in a specified region.
     *  *
     * @param ListTraceAppsRequest $request ListTraceAppsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTraceAppsResponse ListTraceAppsResponse
     */
    public function listTraceAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
     * @summary Queries all Application Monitoring tasks in a specified region.
     *  *
     * @param ListTraceAppsRequest $request ListTraceAppsRequest
     *
     * @return ListTraceAppsResponse ListTraceAppsResponse
     */
    public function listTraceApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTraceAppsWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the recording rule of a Prometheus instance.
     *  *
     * @param ManageGetRecordingRuleRequest $request ManageGetRecordingRuleRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ManageGetRecordingRuleResponse ManageGetRecordingRuleResponse
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
     * @summary Obtains the recording rule of a Prometheus instance.
     *  *
     * @param ManageGetRecordingRuleRequest $request ManageGetRecordingRuleRequest
     *
     * @return ManageGetRecordingRuleResponse ManageGetRecordingRuleResponse
     */
    public function manageGetRecordingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manageGetRecordingRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the recording rule of a Prometheus instance.
     *  *
     * @param ManageRecordingRuleRequest $request ManageRecordingRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ManageRecordingRuleResponse ManageRecordingRuleResponse
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
     * @summary Modifies the recording rule of a Prometheus instance.
     *  *
     * @param ManageRecordingRuleRequest $request ManageRecordingRuleRequest
     *
     * @return ManageRecordingRuleResponse ManageRecordingRuleResponse
     */
    public function manageRecordingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manageRecordingRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Assigns the service-linked role AliyunServiceRoleForARMS to Application Real-Time Monitoring Service (ARMS).
     *  *
     * @param OpenArmsDefaultSLRRequest $request OpenArmsDefaultSLRRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenArmsDefaultSLRResponse OpenArmsDefaultSLRResponse
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
     * @summary Assigns the service-linked role AliyunServiceRoleForARMS to Application Real-Time Monitoring Service (ARMS).
     *  *
     * @param OpenArmsDefaultSLRRequest $request OpenArmsDefaultSLRRequest
     *
     * @return OpenArmsDefaultSLRResponse OpenArmsDefaultSLRResponse
     */
    public function openArmsDefaultSLR($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openArmsDefaultSLRWithOptions($request, $runtime);
    }

    /**
     * @summary Activates a specified pay-as-you-go sub-service of Application Real-Time Monitoring Service (ARMS).
     *  *
     * @description The **OpenArmsServiceSecondVersion** operation supports the following sub-service editions:
     * *   Application Monitoring: Basic Edition
     * *   Browser Monitoring: Basic Edition
     * *   Synthetic Monitoring: Pro Edition (pay-as-you-go)
     * *   Prometheus Service: Pro Edition
     *  *
     * @param OpenArmsServiceSecondVersionRequest $request OpenArmsServiceSecondVersionRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenArmsServiceSecondVersionResponse OpenArmsServiceSecondVersionResponse
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
     * @summary Activates a specified pay-as-you-go sub-service of Application Real-Time Monitoring Service (ARMS).
     *  *
     * @description The **OpenArmsServiceSecondVersion** operation supports the following sub-service editions:
     * *   Application Monitoring: Basic Edition
     * *   Browser Monitoring: Basic Edition
     * *   Synthetic Monitoring: Pro Edition (pay-as-you-go)
     * *   Prometheus Service: Pro Edition
     *  *
     * @param OpenArmsServiceSecondVersionRequest $request OpenArmsServiceSecondVersionRequest
     *
     * @return OpenArmsServiceSecondVersionResponse OpenArmsServiceSecondVersionResponse
     */
    public function openArmsServiceSecondVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openArmsServiceSecondVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Activates a virtual cluster.
     *  *
     * @param OpenVClusterRequest $request OpenVClusterRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenVClusterResponse OpenVClusterResponse
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
     * @summary Activates a virtual cluster.
     *  *
     * @param OpenVClusterRequest $request OpenVClusterRequest
     *
     * @return OpenVClusterResponse OpenVClusterResponse
     */
    public function openVCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openVClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Activates the service-linked role AliyunServiceRoleForXtrace for Tracing Analysis.
     *  *
     * @param OpenXtraceDefaultSLRRequest $request OpenXtraceDefaultSLRRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenXtraceDefaultSLRResponse OpenXtraceDefaultSLRResponse
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
     * @summary Activates the service-linked role AliyunServiceRoleForXtrace for Tracing Analysis.
     *  *
     * @param OpenXtraceDefaultSLRRequest $request OpenXtraceDefaultSLRRequest
     *
     * @return OpenXtraceDefaultSLRResponse OpenXtraceDefaultSLRResponse
     */
    public function openXtraceDefaultSLR($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openXtraceDefaultSLRWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the encoding mapping content based on the metadata IDs and metadata type.
     *  *
     * @param QueryAppMetadataRequest $request QueryAppMetadataRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAppMetadataResponse QueryAppMetadataResponse
     */
    public function queryAppMetadataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return QueryAppMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the encoding mapping content based on the metadata IDs and metadata type.
     *  *
     * @param QueryAppMetadataRequest $request QueryAppMetadataRequest
     *
     * @return QueryAppMetadataResponse QueryAppMetadataResponse
     */
    public function queryAppMetadata($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAppMetadataWithOptions($request, $runtime);
    }

    /**
     * @summary 查询应用拓扑
     *  *
     * @param QueryAppTopologyRequest $tmpReq  QueryAppTopologyRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAppTopologyResponse QueryAppTopologyResponse
     */
    public function queryAppTopologyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryAppTopologyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filters)) {
            $request->filtersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filters, 'Filters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appType)) {
            $query['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->db)) {
            $query['Db'] = $request->db;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filtersShrink)) {
            $query['Filters'] = $request->filtersShrink;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rpc)) {
            $query['Rpc'] = $request->rpc;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return QueryAppTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询应用拓扑
     *  *
     * @param QueryAppTopologyRequest $request QueryAppTopologyRequest
     *
     * @return QueryAppTopologyResponse QueryAppTopologyResponse
     */
    public function queryAppTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAppTopologyWithOptions($request, $runtime);
    }

    /**
     * @param QueryCommercialUsageRequest $request QueryCommercialUsageRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCommercialUsageResponse QueryCommercialUsageResponse
     */
    public function queryCommercialUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->advancedFilters)) {
            $query['AdvancedFilters'] = $request->advancedFilters;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return QueryCommercialUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCommercialUsageRequest $request QueryCommercialUsageRequest
     *
     * @return QueryCommercialUsageResponse QueryCommercialUsageResponse
     */
    public function queryCommercialUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCommercialUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries an Application Monitoring metric or a Browser Monitoring metric.
     *  *
     * @param QueryMetricByPageRequest $request QueryMetricByPageRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMetricByPageResponse QueryMetricByPageResponse
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
     * @summary Queries an Application Monitoring metric or a Browser Monitoring metric.
     *  *
     * @param QueryMetricByPageRequest $request QueryMetricByPageRequest
     *
     * @return QueryMetricByPageResponse QueryMetricByPageResponse
     */
    public function queryMetricByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMetricByPageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether the Prometheus agent is installed on a cluster.
     *  *
     * @param QueryPromInstallStatusRequest $request QueryPromInstallStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryPromInstallStatusResponse QueryPromInstallStatusResponse
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
     * @summary Queries whether the Prometheus agent is installed on a cluster.
     *  *
     * @param QueryPromInstallStatusRequest $request QueryPromInstallStatusRequest
     *
     * @return QueryPromInstallStatusResponse QueryPromInstallStatusResponse
     */
    public function queryPromInstallStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPromInstallStatusWithOptions($request, $runtime);
    }

    /**
     * @summary QueryReleaseMetric
     *  *
     * @param QueryReleaseMetricRequest $request QueryReleaseMetricRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryReleaseMetricResponse QueryReleaseMetricResponse
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
     * @summary QueryReleaseMetric
     *  *
     * @param QueryReleaseMetricRequest $request QueryReleaseMetricRequest
     *
     * @return QueryReleaseMetricResponse QueryReleaseMetricResponse
     */
    public function queryReleaseMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryReleaseMetricWithOptions($request, $runtime);
    }

    /**
     * @summary Removes data sources from a global aggregation instance.
     *  *
     * @param RemoveAliClusterIdsFromPrometheusGlobalViewRequest $request RemoveAliClusterIdsFromPrometheusGlobalViewRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveAliClusterIdsFromPrometheusGlobalViewResponse RemoveAliClusterIdsFromPrometheusGlobalViewResponse
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
     * @summary Removes data sources from a global aggregation instance.
     *  *
     * @param RemoveAliClusterIdsFromPrometheusGlobalViewRequest $request RemoveAliClusterIdsFromPrometheusGlobalViewRequest
     *
     * @return RemoveAliClusterIdsFromPrometheusGlobalViewResponse RemoveAliClusterIdsFromPrometheusGlobalViewResponse
     */
    public function removeAliClusterIdsFromPrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAliClusterIdsFromPrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @summary Removes custom data sources from a global aggregation instance in Prometheus Service.
     *  *
     * @param RemoveSourcesFromPrometheusGlobalViewRequest $request RemoveSourcesFromPrometheusGlobalViewRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveSourcesFromPrometheusGlobalViewResponse RemoveSourcesFromPrometheusGlobalViewResponse
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
     * @summary Removes custom data sources from a global aggregation instance in Prometheus Service.
     *  *
     * @param RemoveSourcesFromPrometheusGlobalViewRequest $request RemoveSourcesFromPrometheusGlobalViewRequest
     *
     * @return RemoveSourcesFromPrometheusGlobalViewResponse RemoveSourcesFromPrometheusGlobalViewResponse
     */
    public function removeSourcesFromPrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSourcesFromPrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @summary 重新启动 feature信息
     *  *
     * @param RestartEnvironmentFeatureRequest $request RestartEnvironmentFeatureRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartEnvironmentFeatureResponse RestartEnvironmentFeatureResponse
     */
    public function restartEnvironmentFeatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->featureName)) {
            $query['FeatureName'] = $request->featureName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RestartEnvironmentFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重新启动 feature信息
     *  *
     * @param RestartEnvironmentFeatureRequest $request RestartEnvironmentFeatureRequest
     *
     * @return RestartEnvironmentFeatureResponse RestartEnvironmentFeatureResponse
     */
    public function restartEnvironmentFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartEnvironmentFeatureWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the settings of Application Monitoring, such as trace sampling and agent switch settings.
     *  *
     * @param SaveTraceAppConfigRequest $request SaveTraceAppConfigRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveTraceAppConfigResponse SaveTraceAppConfigResponse
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
     * @summary Modifies the settings of Application Monitoring, such as trace sampling and agent switch settings.
     *  *
     * @param SaveTraceAppConfigRequest $request SaveTraceAppConfigRequest
     *
     * @return SaveTraceAppConfigResponse SaveTraceAppConfigResponse
     */
    public function saveTraceAppConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTraceAppConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries alert contacts.
     *  *
     * @description This operation is no longer maintained. To query alert contacts, call the DescribeContacts operation provided by the new version of Alert Management.
     *  *
     * @param SearchAlertContactRequest $request SearchAlertContactRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchAlertContactResponse SearchAlertContactResponse
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
     * @summary Queries alert contacts.
     *  *
     * @description This operation is no longer maintained. To query alert contacts, call the DescribeContacts operation provided by the new version of Alert Management.
     *  *
     * @param SearchAlertContactRequest $request SearchAlertContactRequest
     *
     * @return SearchAlertContactResponse SearchAlertContactResponse
     */
    public function searchAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertContactWithOptions($request, $runtime);
    }

    /**
     * @summary Queries alert contact groups.
     *  *
     * @description The operation is no longer maintained. Call the DescribeContactGroups operation in the alert management module to query alert contact groups.
     *  *
     * @param SearchAlertContactGroupRequest $request SearchAlertContactGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchAlertContactGroupResponse SearchAlertContactGroupResponse
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
     * @summary Queries alert contact groups.
     *  *
     * @description The operation is no longer maintained. Call the DescribeContactGroups operation in the alert management module to query alert contact groups.
     *  *
     * @param SearchAlertContactGroupRequest $request SearchAlertContactGroupRequest
     *
     * @return SearchAlertContactGroupResponse SearchAlertContactGroupResponse
     */
    public function searchAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the alert records of an alert rule.
     *  *
     * @description This operation is no longer maintained. To query alert records, call the ListAlerts operation provided by the new version of Alert Management.
     *  *
     * @param SearchAlertHistoriesRequest $request SearchAlertHistoriesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchAlertHistoriesResponse SearchAlertHistoriesResponse
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
     * @summary Queries the alert records of an alert rule.
     *  *
     * @description This operation is no longer maintained. To query alert records, call the ListAlerts operation provided by the new version of Alert Management.
     *  *
     * @param SearchAlertHistoriesRequest $request SearchAlertHistoriesRequest
     *
     * @return SearchAlertHistoriesResponse SearchAlertHistoriesResponse
     */
    public function searchAlertHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertHistoriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries alert rules.
     *  *
     * @description The current operation is no longer maintained. You can call the GetAlertRules operation of Alert Management (New) to query existing alert rules.
     *  *
     * @param SearchAlertRulesRequest $request SearchAlertRulesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchAlertRulesResponse SearchAlertRulesResponse
     */
    public function searchAlertRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertRuleId)) {
            $query['AlertRuleId'] = $request->alertRuleId;
        }
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->systemRegionId)) {
            $query['SystemRegionId'] = $request->systemRegionId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
     * @summary Queries alert rules.
     *  *
     * @description The current operation is no longer maintained. You can call the GetAlertRules operation of Alert Management (New) to query existing alert rules.
     *  *
     * @param SearchAlertRulesRequest $request SearchAlertRulesRequest
     *
     * @return SearchAlertRulesResponse SearchAlertRulesResponse
     */
    public function searchAlertRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchAlertRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries alert event records.
     *  *
     * @description Alert event records are different from alert notification records. Alert events are recorded every minute after an alert rule filters data. Alert events can be classified based on whether they are triggered or not. If a triggered event is not in the silence period, an alert notification is sent.
     *  *
     * @param SearchEventsRequest $request SearchEventsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchEventsResponse SearchEventsResponse
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
     * @summary Queries alert event records.
     *  *
     * @description Alert event records are different from alert notification records. Alert events are recorded every minute after an alert rule filters data. Alert events can be classified based on whether they are triggered or not. If a triggered event is not in the silence period, an alert notification is sent.
     *  *
     * @param SearchEventsRequest $request SearchEventsRequest
     *
     * @return SearchEventsResponse SearchEventsResponse
     */
    public function searchEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchEventsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Browser Monitoring tasks by page.
     *  *
     * @param SearchRetcodeAppByPageRequest $request SearchRetcodeAppByPageRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchRetcodeAppByPageResponse SearchRetcodeAppByPageResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->retcodeAppId)) {
            $query['RetcodeAppId'] = $request->retcodeAppId;
        }
        if (!Utils::isUnset($request->retcodeAppName)) {
            $query['RetcodeAppName'] = $request->retcodeAppName;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
     * @summary Queries Browser Monitoring tasks by page.
     *  *
     * @param SearchRetcodeAppByPageRequest $request SearchRetcodeAppByPageRequest
     *
     * @return SearchRetcodeAppByPageResponse SearchRetcodeAppByPageResponse
     */
    public function searchRetcodeAppByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchRetcodeAppByPageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Application Monitoring tasks by application name.
     *  *
     * @param SearchTraceAppByNameRequest $request SearchTraceAppByNameRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchTraceAppByNameResponse SearchTraceAppByNameResponse
     */
    public function searchTraceAppByNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
     * @summary Queries Application Monitoring tasks by application name.
     *  *
     * @param SearchTraceAppByNameRequest $request SearchTraceAppByNameRequest
     *
     * @return SearchTraceAppByNameResponse SearchTraceAppByNameResponse
     */
    public function searchTraceAppByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTraceAppByNameWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Application Monitoring tasks by page.
     *  *
     * @param SearchTraceAppByPageRequest $request SearchTraceAppByPageRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchTraceAppByPageResponse SearchTraceAppByPageResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
     * @summary Queries Application Monitoring tasks by page.
     *  *
     * @param SearchTraceAppByPageRequest $request SearchTraceAppByPageRequest
     *
     * @return SearchTraceAppByPageResponse SearchTraceAppByPageResponse
     */
    public function searchTraceAppByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTraceAppByPageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries traces by time, application name, IP address, span name, and tag.
     *  *
     * @description > A maximum of 100 data entries can be returned each time this operation is called. If you want to query all existing traces, we recommend that you call the SearchTracesByPage operation. For more information, see [SearchTracesByPage](https://help.aliyun.com/document_detail/175866.html).
     *  *
     * @param SearchTracesRequest $request SearchTracesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchTracesResponse SearchTracesResponse
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
     * @summary Queries traces by time, application name, IP address, span name, and tag.
     *  *
     * @description > A maximum of 100 data entries can be returned each time this operation is called. If you want to query all existing traces, we recommend that you call the SearchTracesByPage operation. For more information, see [SearchTracesByPage](https://help.aliyun.com/document_detail/175866.html).
     *  *
     * @param SearchTracesRequest $request SearchTracesRequest
     *
     * @return SearchTracesResponse SearchTracesResponse
     */
    public function searchTraces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTracesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries traces by page. You can query traces by time range, application name, IP address, span name, or tag.
     *  *
     * @param SearchTracesByPageRequest $request SearchTracesByPageRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchTracesByPageResponse SearchTracesByPageResponse
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
        if (!Utils::isUnset($request->isError)) {
            $query['IsError'] = $request->isError;
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
     * @summary Queries traces by page. You can query traces by time range, application name, IP address, span name, or tag.
     *  *
     * @param SearchTracesByPageRequest $request SearchTracesByPageRequest
     *
     * @return SearchTracesByPageResponse SearchTracesByPageResponse
     */
    public function searchTracesByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTracesByPageWithOptions($request, $runtime);
    }

    /**
     * @summary Sends a text message to an alert contact to verify the mobile number of the alert contact.
     *  *
     * @description After you receive the text message, verify the mobile number as prompted. Before you can specify a mobile phone number in a notification policy, you must verify the mobile phone number.
     *  *
     * @param SendTTSVerifyLinkRequest $request SendTTSVerifyLinkRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SendTTSVerifyLinkResponse SendTTSVerifyLinkResponse
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
     * @summary Sends a text message to an alert contact to verify the mobile number of the alert contact.
     *  *
     * @description After you receive the text message, verify the mobile number as prompted. Before you can specify a mobile phone number in a notification policy, you must verify the mobile phone number.
     *  *
     * @param SendTTSVerifyLinkRequest $request SendTTSVerifyLinkRequest
     *
     * @return SendTTSVerifyLinkResponse SendTTSVerifyLinkResponse
     */
    public function sendTTSVerifyLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendTTSVerifyLinkWithOptions($request, $runtime);
    }

    /**
     * @summary Turns on or turns off logon-free sharing for an application monitored by Browser Monitoring.
     *  *
     * @param SetRetcodeShareStatusRequest $request SetRetcodeShareStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetRetcodeShareStatusResponse SetRetcodeShareStatusResponse
     */
    public function setRetcodeShareStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
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
     * @summary Turns on or turns off logon-free sharing for an application monitored by Browser Monitoring.
     *  *
     * @param SetRetcodeShareStatusRequest $request SetRetcodeShareStatusRequest
     *
     * @return SetRetcodeShareStatusResponse SetRetcodeShareStatusResponse
     */
    public function setRetcodeShareStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRetcodeShareStatusWithOptions($request, $runtime);
    }

    /**
     * @param StartAlertRequest $request StartAlertRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return StartAlertResponse StartAlertResponse
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
     * @param StartAlertRequest $request StartAlertRequest
     *
     * @return StartAlertResponse StartAlertResponse
     */
    public function startAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAlertWithOptions($request, $runtime);
    }

    /**
     * @summary 启动定时拨测任务
     *  *
     * @param StartTimingSyntheticTaskRequest $tmpReq  StartTimingSyntheticTaskRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return StartTimingSyntheticTaskResponse StartTimingSyntheticTaskResponse
     */
    public function startTimingSyntheticTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartTimingSyntheticTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taskIds)) {
            $request->taskIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskIdsShrink)) {
            $query['TaskIds'] = $request->taskIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return StartTimingSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动定时拨测任务
     *  *
     * @param StartTimingSyntheticTaskRequest $request StartTimingSyntheticTaskRequest
     *
     * @return StartTimingSyntheticTaskResponse StartTimingSyntheticTaskResponse
     */
    public function startTimingSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTimingSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Call StartAlert to stop an alert rule.
     *  *
     * @param StopAlertRequest $request StopAlertRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return StopAlertResponse StopAlertResponse
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
     * @summary Call StartAlert to stop an alert rule.
     *  *
     * @param StopAlertRequest $request StopAlertRequest
     *
     * @return StopAlertResponse StopAlertResponse
     */
    public function stopAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAlertWithOptions($request, $runtime);
    }

    /**
     * @summary Stops scheduled synthetic monitoring tasks.
     *  *
     * @param StopTimingSyntheticTaskRequest $tmpReq  StopTimingSyntheticTaskRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return StopTimingSyntheticTaskResponse StopTimingSyntheticTaskResponse
     */
    public function stopTimingSyntheticTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StopTimingSyntheticTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taskIds)) {
            $request->taskIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskIds, 'TaskIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskIdsShrink)) {
            $query['TaskIds'] = $request->taskIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return StopTimingSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops scheduled synthetic monitoring tasks.
     *  *
     * @param StopTimingSyntheticTaskRequest $request StopTimingSyntheticTaskRequest
     *
     * @return StopTimingSyntheticTaskResponse StopTimingSyntheticTaskResponse
     */
    public function stopTimingSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTimingSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 启动或者禁用云拨测的任务
     *  *
     * @param SwitchSyntheticTaskStatusRequest $request SwitchSyntheticTaskStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchSyntheticTaskStatusResponse SwitchSyntheticTaskStatusResponse
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
     * @summary 启动或者禁用云拨测的任务
     *  *
     * @param SwitchSyntheticTaskStatusRequest $request SwitchSyntheticTaskStatusRequest
     *
     * @return SwitchSyntheticTaskStatusResponse SwitchSyntheticTaskStatusResponse
     */
    public function switchSyntheticTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchSyntheticTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Synchronizes the aggregation rule of a cluster to other clusters in a region.
     *  *
     * @param SyncRecordingRulesRequest $request SyncRecordingRulesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncRecordingRulesResponse SyncRecordingRulesResponse
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
     * @summary Synchronizes the aggregation rule of a cluster to other clusters in a region.
     *  *
     * @param SyncRecordingRulesRequest $request SyncRecordingRulesRequest
     *
     * @return SyncRecordingRulesResponse SyncRecordingRulesResponse
     */
    public function syncRecordingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncRecordingRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Adds tags to ARMS resources.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds tags to ARMS resources.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Removes a Prometheus instance from a serverless Kubernetes (ASK) cluster or an Elastic Compute Service (ECS) instance.
     *  *
     * @description Make sure that the ASK cluster or ECS instance is monitored in Managed Service for Prometheus.
     *  *
     * @param UninstallManagedPrometheusRequest $request UninstallManagedPrometheusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UninstallManagedPrometheusResponse UninstallManagedPrometheusResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
     * @summary Removes a Prometheus instance from a serverless Kubernetes (ASK) cluster or an Elastic Compute Service (ECS) instance.
     *  *
     * @description Make sure that the ASK cluster or ECS instance is monitored in Managed Service for Prometheus.
     *  *
     * @param UninstallManagedPrometheusRequest $request UninstallManagedPrometheusRequest
     *
     * @return UninstallManagedPrometheusResponse UninstallManagedPrometheusResponse
     */
    public function uninstallManagedPrometheus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallManagedPrometheusWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a Prometheus instance.
     *  *
     * @param UninstallPromClusterRequest $request UninstallPromClusterRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UninstallPromClusterResponse UninstallPromClusterResponse
     */
    public function uninstallPromClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
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
     * @summary Releases a Prometheus instance.
     *  *
     * @param UninstallPromClusterRequest $request UninstallPromClusterRequest
     *
     * @return UninstallPromClusterResponse UninstallPromClusterResponse
     */
    public function uninstallPromCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallPromClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Removes tags from ARMS resources.
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
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes tags from ARMS resources.
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
     * @summary Updates an alert contact.
     *  *
     * @description This operation is no longer maintained. To create or modify an alert contact, call the CreateOrUpdateContact operation provided by the new version of Alert Management.
     *  *
     * @param UpdateAlertContactRequest $request UpdateAlertContactRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAlertContactResponse UpdateAlertContactResponse
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
     * @summary Updates an alert contact.
     *  *
     * @description This operation is no longer maintained. To create or modify an alert contact, call the CreateOrUpdateContact operation provided by the new version of Alert Management.
     *  *
     * @param UpdateAlertContactRequest $request UpdateAlertContactRequest
     *
     * @return UpdateAlertContactResponse UpdateAlertContactResponse
     */
    public function updateAlertContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertContactWithOptions($request, $runtime);
    }

    /**
     * @summary Updates UpdateAlertContactGroup alarm contact group.
     *  *
     * @param UpdateAlertContactGroupRequest $request UpdateAlertContactGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAlertContactGroupResponse UpdateAlertContactGroupResponse
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
     * @summary Updates UpdateAlertContactGroup alarm contact group.
     *  *
     * @param UpdateAlertContactGroupRequest $request UpdateAlertContactGroupRequest
     *
     * @return UpdateAlertContactGroupResponse UpdateAlertContactGroupResponse
     */
    public function updateAlertContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAlertRuleRequest $request UpdateAlertRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAlertRuleResponse UpdateAlertRuleResponse
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
     * @param UpdateAlertRuleRequest $request UpdateAlertRuleRequest
     *
     * @return UpdateAlertRuleResponse UpdateAlertRuleResponse
     */
    public function updateAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the request.
     *  *
     * @param UpdateDispatchRuleRequest $request UpdateDispatchRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDispatchRuleResponse UpdateDispatchRuleResponse
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
     * @summary The ID of the request.
     *  *
     * @param UpdateDispatchRuleRequest $request UpdateDispatchRuleRequest
     *
     * @return UpdateDispatchRuleResponse UpdateDispatchRuleResponse
     */
    public function updateDispatchRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDispatchRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a custom job for an environment.
     *  *
     * @param UpdateEnvCustomJobRequest $request UpdateEnvCustomJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEnvCustomJobResponse UpdateEnvCustomJobResponse
     */
    public function updateEnvCustomJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->customJobName)) {
            $query['CustomJobName'] = $request->customJobName;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $body = [];
        if (!Utils::isUnset($request->configYaml)) {
            $body['ConfigYaml'] = $request->configYaml;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return UpdateEnvCustomJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a custom job for an environment.
     *  *
     * @param UpdateEnvCustomJobRequest $request UpdateEnvCustomJobRequest
     *
     * @return UpdateEnvCustomJobResponse UpdateEnvCustomJobResponse
     */
    public function updateEnvCustomJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEnvCustomJobWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the PodMonitor of an environment.
     *  *
     * @param UpdateEnvPodMonitorRequest $request UpdateEnvPodMonitorRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEnvPodMonitorResponse UpdateEnvPodMonitorResponse
     */
    public function updateEnvPodMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->podMonitorName)) {
            $query['PodMonitorName'] = $request->podMonitorName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->configYaml)) {
            $body['ConfigYaml'] = $request->configYaml;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return UpdateEnvPodMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the PodMonitor of an environment.
     *  *
     * @param UpdateEnvPodMonitorRequest $request UpdateEnvPodMonitorRequest
     *
     * @return UpdateEnvPodMonitorResponse UpdateEnvPodMonitorResponse
     */
    public function updateEnvPodMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEnvPodMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the ServiceMonitor of an environment.
     *  *
     * @param UpdateEnvServiceMonitorRequest $request UpdateEnvServiceMonitorRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEnvServiceMonitorResponse UpdateEnvServiceMonitorResponse
     */
    public function updateEnvServiceMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceMonitorName)) {
            $query['ServiceMonitorName'] = $request->serviceMonitorName;
        }
        $body = [];
        if (!Utils::isUnset($request->configYaml)) {
            $body['ConfigYaml'] = $request->configYaml;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return UpdateEnvServiceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the ServiceMonitor of an environment.
     *  *
     * @param UpdateEnvServiceMonitorRequest $request UpdateEnvServiceMonitorRequest
     *
     * @return UpdateEnvServiceMonitorResponse UpdateEnvServiceMonitorResponse
     */
    public function updateEnvServiceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEnvServiceMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the configuration of an environment.
     *  *
     * @param UpdateEnvironmentRequest $request UpdateEnvironmentRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEnvironmentResponse UpdateEnvironmentResponse
     */
    public function updateEnvironmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->environmentName)) {
            $query['EnvironmentName'] = $request->environmentName;
        }
        if (!Utils::isUnset($request->feePackage)) {
            $query['FeePackage'] = $request->feePackage;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the configuration of an environment.
     *  *
     * @param UpdateEnvironmentRequest $request UpdateEnvironmentRequest
     *
     * @return UpdateEnvironmentResponse UpdateEnvironmentResponse
     */
    public function updateEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEnvironmentWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑工作区
     *  *
     * @param UpdateGrafanaWorkspaceRequest $request UpdateGrafanaWorkspaceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGrafanaWorkspaceResponse UpdateGrafanaWorkspaceResponse
     */
    public function updateGrafanaWorkspaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->grafanaWorkspaceId)) {
            $query['GrafanaWorkspaceId'] = $request->grafanaWorkspaceId;
        }
        if (!Utils::isUnset($request->grafanaWorkspaceName)) {
            $query['GrafanaWorkspaceName'] = $request->grafanaWorkspaceName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateGrafanaWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑工作区
     *  *
     * @param UpdateGrafanaWorkspaceRequest $request UpdateGrafanaWorkspaceRequest
     *
     * @return UpdateGrafanaWorkspaceResponse UpdateGrafanaWorkspaceResponse
     */
    public function updateGrafanaWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGrafanaWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @summary 升级指定工作区版本
     *  *
     * @param UpdateGrafanaWorkspaceVersionRequest $request UpdateGrafanaWorkspaceVersionRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGrafanaWorkspaceVersionResponse UpdateGrafanaWorkspaceVersionResponse
     */
    public function updateGrafanaWorkspaceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->grafanaVersion)) {
            $query['GrafanaVersion'] = $request->grafanaVersion;
        }
        if (!Utils::isUnset($request->grafanaWorkspaceId)) {
            $query['GrafanaWorkspaceId'] = $request->grafanaWorkspaceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateGrafanaWorkspaceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 升级指定工作区版本
     *  *
     * @param UpdateGrafanaWorkspaceVersionRequest $request UpdateGrafanaWorkspaceVersionRequest
     *
     * @return UpdateGrafanaWorkspaceVersionResponse UpdateGrafanaWorkspaceVersionResponse
     */
    public function updateGrafanaWorkspaceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGrafanaWorkspaceVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about an integration.
     *  *
     * @param UpdateIntegrationRequest $request UpdateIntegrationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIntegrationResponse UpdateIntegrationResponse
     */
    public function updateIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
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
     * @summary Modifies the information about an integration.
     *  *
     * @param UpdateIntegrationRequest $request UpdateIntegrationRequest
     *
     * @return UpdateIntegrationResponse UpdateIntegrationResponse
     */
    public function updateIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIntegrationWithOptions($request, $runtime);
    }

    /**
     * @summary 更新删除的metric
     *  *
     * @param UpdateMetricDropRequest $request UpdateMetricDropRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMetricDropResponse UpdateMetricDropResponse
     */
    public function updateMetricDropWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->metricDrop)) {
            $query['MetricDrop'] = $request->metricDrop;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateMetricDropResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新删除的metric
     *  *
     * @param UpdateMetricDropRequest $request UpdateMetricDropRequest
     *
     * @return UpdateMetricDropResponse UpdateMetricDropResponse
     */
    public function updateMetricDrop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMetricDropWithOptions($request, $runtime);
    }

    /**
     * @summary 更新Prometheus告警规则
     *  *
     * @param UpdatePrometheusAlertRuleRequest $request UpdatePrometheusAlertRuleRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePrometheusAlertRuleResponse UpdatePrometheusAlertRuleResponse
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
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
     * @summary 更新Prometheus告警规则
     *  *
     * @param UpdatePrometheusAlertRuleRequest $request UpdatePrometheusAlertRuleRequest
     *
     * @return UpdatePrometheusAlertRuleResponse UpdatePrometheusAlertRuleResponse
     */
    public function updatePrometheusAlertRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrometheusAlertRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the data sources of Prometheus instance for GlobalView.
     *  *
     * @param UpdatePrometheusGlobalViewRequest $request UpdatePrometheusGlobalViewRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePrometheusGlobalViewResponse UpdatePrometheusGlobalViewResponse
     */
    public function updatePrometheusGlobalViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allSubClustersSuccess)) {
            $query['AllSubClustersSuccess'] = $request->allSubClustersSuccess;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->mostRegionId)) {
            $query['MostRegionId'] = $request->mostRegionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subClustersJson)) {
            $query['SubClustersJson'] = $request->subClustersJson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdatePrometheusGlobalViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the data sources of Prometheus instance for GlobalView.
     *  *
     * @param UpdatePrometheusGlobalViewRequest $request UpdatePrometheusGlobalViewRequest
     *
     * @return UpdatePrometheusGlobalViewResponse UpdatePrometheusGlobalViewResponse
     */
    public function updatePrometheusGlobalView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrometheusGlobalViewWithOptions($request, $runtime);
    }

    /**
     * @summary Update Prometheus instance config.
     *  *
     * @param UpdatePrometheusInstanceRequest $request UpdatePrometheusInstanceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePrometheusInstanceResponse UpdatePrometheusInstanceResponse
     */
    public function updatePrometheusInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->archiveDuration)) {
            $query['ArchiveDuration'] = $request->archiveDuration;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->storageDuration)) {
            $query['StorageDuration'] = $request->storageDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdatePrometheusInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Update Prometheus instance config.
     *  *
     * @param UpdatePrometheusInstanceRequest $request UpdatePrometheusInstanceRequest
     *
     * @return UpdatePrometheusInstanceResponse UpdatePrometheusInstanceResponse
     */
    public function updatePrometheusInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrometheusInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of an exporter that is integrated into a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param UpdatePrometheusIntegrationRequest $request UpdatePrometheusIntegrationRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePrometheusIntegrationResponse UpdatePrometheusIntegrationResponse
     */
    public function updatePrometheusIntegrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->integrationType)) {
            $query['IntegrationType'] = $request->integrationType;
        }
        if (!Utils::isUnset($request->param)) {
            $query['Param'] = $request->param;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdatePrometheusIntegrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of an exporter that is integrated into a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param UpdatePrometheusIntegrationRequest $request UpdatePrometheusIntegrationRequest
     *
     * @return UpdatePrometheusIntegrationResponse UpdatePrometheusIntegrationResponse
     */
    public function updatePrometheusIntegration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrometheusIntegrationWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the monitoring configuration of a Prometheus instance.
     *  *
     * @param UpdatePrometheusMonitoringRequest $request UpdatePrometheusMonitoringRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePrometheusMonitoringResponse UpdatePrometheusMonitoringResponse
     */
    public function updatePrometheusMonitoringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->monitoringName)) {
            $query['MonitoringName'] = $request->monitoringName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $body = [];
        if (!Utils::isUnset($request->configYaml)) {
            $body['ConfigYaml'] = $request->configYaml;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return UpdatePrometheusMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the monitoring configuration of a Prometheus instance.
     *  *
     * @param UpdatePrometheusMonitoringRequest $request UpdatePrometheusMonitoringRequest
     *
     * @return UpdatePrometheusMonitoringResponse UpdatePrometheusMonitoringResponse
     */
    public function updatePrometheusMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrometheusMonitoringWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the status of the monitoring configuration of a Prometheus instance.
     *  *
     * @param UpdatePrometheusMonitoringStatusRequest $request UpdatePrometheusMonitoringStatusRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePrometheusMonitoringStatusResponse UpdatePrometheusMonitoringStatusResponse
     */
    public function updatePrometheusMonitoringStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->monitoringName)) {
            $query['MonitoringName'] = $request->monitoringName;
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

        return UpdatePrometheusMonitoringStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the status of the monitoring configuration of a Prometheus instance.
     *  *
     * @param UpdatePrometheusMonitoringStatusRequest $request UpdatePrometheusMonitoringStatusRequest
     *
     * @return UpdatePrometheusMonitoringStatusResponse UpdatePrometheusMonitoringStatusResponse
     */
    public function updatePrometheusMonitoringStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrometheusMonitoringStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a remote write configuration item of a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param UpdatePrometheusRemoteWriteRequest $request UpdatePrometheusRemoteWriteRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePrometheusRemoteWriteResponse UpdatePrometheusRemoteWriteResponse
     */
    public function updatePrometheusRemoteWriteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remoteWriteName)) {
            $query['RemoteWriteName'] = $request->remoteWriteName;
        }
        $body = [];
        if (!Utils::isUnset($request->remoteWriteYaml)) {
            $body['RemoteWriteYaml'] = $request->remoteWriteYaml;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePrometheusRemoteWrite',
            'version'     => '2019-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePrometheusRemoteWriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a remote write configuration item of a Prometheus instance for Container Service or a Prometheus instance for ECS.
     *  *
     * @param UpdatePrometheusRemoteWriteRequest $request UpdatePrometheusRemoteWriteRequest
     *
     * @return UpdatePrometheusRemoteWriteResponse UpdatePrometheusRemoteWriteResponse
     */
    public function updatePrometheusRemoteWrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrometheusRemoteWriteWithOptions($request, $runtime);
    }

    /**
     * @summary 更新前端监控应用信息
     *  *
     * @param UpdateRumAppRequest $request UpdateRumAppRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRumAppResponse UpdateRumAppResponse
     */
    public function updateRumAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRestart)) {
            $query['AutoRestart'] = $request->autoRestart;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->isSubscribe)) {
            $query['IsSubscribe'] = $request->isSubscribe;
        }
        if (!Utils::isUnset($request->nickname)) {
            $query['Nickname'] = $request->nickname;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->restart)) {
            $query['Restart'] = $request->restart;
        }
        if (!Utils::isUnset($request->serviceDomainOperationJson)) {
            $query['ServiceDomainOperationJson'] = $request->serviceDomainOperationJson;
        }
        if (!Utils::isUnset($request->stop)) {
            $query['Stop'] = $request->stop;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateRumAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新前端监控应用信息
     *  *
     * @param UpdateRumAppRequest $request UpdateRumAppRequest
     *
     * @return UpdateRumAppResponse UpdateRumAppResponse
     */
    public function updateRumApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRumAppWithOptions($request, $runtime);
    }

    /**
     * @summary 更新Sourcemap文件状态
     *  *
     * @param UpdateRumFileStatusRequest $request UpdateRumFileStatusRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRumFileStatusResponse UpdateRumFileStatusResponse
     */
    public function updateRumFileStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateRumFileStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新Sourcemap文件状态
     *  *
     * @param UpdateRumFileStatusRequest $request UpdateRumFileStatusRequest
     *
     * @return UpdateRumFileStatusResponse UpdateRumFileStatusResponse
     */
    public function updateRumFileStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRumFileStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 更新定时拨测任务
     *  *
     * @param UpdateTimingSyntheticTaskRequest $tmpReq  UpdateTimingSyntheticTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTimingSyntheticTaskResponse UpdateTimingSyntheticTaskResponse
     */
    public function updateTimingSyntheticTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTimingSyntheticTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->availableAssertions)) {
            $request->availableAssertionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->availableAssertions, 'AvailableAssertions', 'json');
        }
        if (!Utils::isUnset($tmpReq->commonSetting)) {
            $request->commonSettingShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->commonSetting, 'CommonSetting', 'json');
        }
        if (!Utils::isUnset($tmpReq->customPeriod)) {
            $request->customPeriodShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customPeriod, 'CustomPeriod', 'json');
        }
        if (!Utils::isUnset($tmpReq->monitorConf)) {
            $request->monitorConfShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->monitorConf, 'MonitorConf', 'json');
        }
        if (!Utils::isUnset($tmpReq->monitors)) {
            $request->monitorsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->monitors, 'Monitors', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->availableAssertionsShrink)) {
            $query['AvailableAssertions'] = $request->availableAssertionsShrink;
        }
        if (!Utils::isUnset($request->commonSettingShrink)) {
            $query['CommonSetting'] = $request->commonSettingShrink;
        }
        if (!Utils::isUnset($request->customPeriodShrink)) {
            $query['CustomPeriod'] = $request->customPeriodShrink;
        }
        if (!Utils::isUnset($request->frequency)) {
            $query['Frequency'] = $request->frequency;
        }
        if (!Utils::isUnset($request->monitorConfShrink)) {
            $query['MonitorConf'] = $request->monitorConfShrink;
        }
        if (!Utils::isUnset($request->monitorsShrink)) {
            $query['Monitors'] = $request->monitorsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateTimingSyntheticTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新定时拨测任务
     *  *
     * @param UpdateTimingSyntheticTaskRequest $request UpdateTimingSyntheticTaskRequest
     *
     * @return UpdateTimingSyntheticTaskResponse UpdateTimingSyntheticTaskResponse
     */
    public function updateTimingSyntheticTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTimingSyntheticTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about a webhook alert contact.
     *  *
     * @description This operation is no longer maintained. Call the CreateOrUpdateWebhookContact operation in the new alter management module to create or modify a webhook alert contact.
     *  *
     * @param UpdateWebhookRequest $request UpdateWebhookRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWebhookResponse UpdateWebhookResponse
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
     * @summary Modifies the information about a webhook alert contact.
     *  *
     * @description This operation is no longer maintained. Call the CreateOrUpdateWebhookContact operation in the new alter management module to create or modify a webhook alert contact.
     *  *
     * @param UpdateWebhookRequest $request UpdateWebhookRequest
     *
     * @return UpdateWebhookResponse UpdateWebhookResponse
     */
    public function updateWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWebhookWithOptions($request, $runtime);
    }

    /**
     * @summary Update the AddonRelease information.
     *  *
     * @param UpgradeAddonReleaseRequest $request UpgradeAddonReleaseRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeAddonReleaseResponse UpgradeAddonReleaseResponse
     */
    public function upgradeAddonReleaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addonVersion)) {
            $query['AddonVersion'] = $request->addonVersion;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->releaseName)) {
            $query['ReleaseName'] = $request->releaseName;
        }
        if (!Utils::isUnset($request->values)) {
            $query['Values'] = $request->values;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpgradeAddonReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Update the AddonRelease information.
     *  *
     * @param UpgradeAddonReleaseRequest $request UpgradeAddonReleaseRequest
     *
     * @return UpgradeAddonReleaseResponse UpgradeAddonReleaseResponse
     */
    public function upgradeAddonRelease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeAddonReleaseWithOptions($request, $runtime);
    }

    /**
     * @summary 更新 feature信息
     *  *
     * @param UpgradeEnvironmentFeatureRequest $request UpgradeEnvironmentFeatureRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeEnvironmentFeatureResponse UpgradeEnvironmentFeatureResponse
     */
    public function upgradeEnvironmentFeatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunLang)) {
            $query['AliyunLang'] = $request->aliyunLang;
        }
        if (!Utils::isUnset($request->environmentId)) {
            $query['EnvironmentId'] = $request->environmentId;
        }
        if (!Utils::isUnset($request->featureName)) {
            $query['FeatureName'] = $request->featureName;
        }
        if (!Utils::isUnset($request->featureVersion)) {
            $query['FeatureVersion'] = $request->featureVersion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->values)) {
            $query['Values'] = $request->values;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpgradeEnvironmentFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新 feature信息
     *  *
     * @param UpgradeEnvironmentFeatureRequest $request UpgradeEnvironmentFeatureRequest
     *
     * @return UpgradeEnvironmentFeatureResponse UpgradeEnvironmentFeatureResponse
     */
    public function upgradeEnvironmentFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeEnvironmentFeatureWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads a SourceMap file to ARMS Browser Monitoring.
     *  *
     * @param UploadRequest  $request UploadRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadResponse UploadResponse
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
     * @summary Uploads a SourceMap file to ARMS Browser Monitoring.
     *  *
     * @param UploadRequest $request UploadRequest
     *
     * @return UploadResponse UploadResponse
     */
    public function upload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadWithOptions($request, $runtime);
    }
}
