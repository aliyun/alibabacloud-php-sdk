<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ActivateZonesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ActivateZonesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\AddConnectableClusterRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\AddConnectableClusterResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\AddSnapshotRepoRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\AddSnapshotRepoResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CancelDeletionRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CancelDeletionResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CancelLogstashDeletionRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CancelLogstashDeletionResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CancelTaskRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CancelTaskResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CloseDiagnosisRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CloseDiagnosisResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CloseHttpsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CloseHttpsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CloseManagedIndexRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CloseManagedIndexResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateCollectorRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateCollectorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateComponentIndexRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateComponentIndexResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataStreamRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataStreamResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateILMPolicyRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateILMPolicyResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateIndexTemplateRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateIndexTemplateResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateLogstashRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateLogstashResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreatePipelinesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreatePipelinesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateVpcEndpointRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateVpcEndpointResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeactivateZonesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeactivateZonesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteCollectorRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteCollectorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteComponentIndexResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteConnectedClusterRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteConnectedClusterResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDataStreamRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDataStreamResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDataTaskRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDataTaskResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDeprecatedTemplateResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteILMPolicyResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteIndexTemplateResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteLogstashRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteLogstashResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeletePipelinesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeletePipelinesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteSnapshotRepoRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteSnapshotRepoResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteVpcEndpointRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteVpcEndpointResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeAckOperatorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeCollectorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeComponentIndexResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeConnectableClustersRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeConnectableClustersResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDeprecatedTemplateResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnosisSettingsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnosisSettingsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDynamicSettingsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeElasticsearchHealthResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeILMPolicyResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeIndexTemplateResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeKibanaSettingsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribePipelineManagementConfigRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribePipelineManagementConfigResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribePipelineResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeSnapshotSettingResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeTemplatesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeXpackMonitorConfigResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DiagnoseInstanceRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DiagnoseInstanceResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DisableKibanaPvlNetworkResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EnableKibanaPvlNetworkRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EnableKibanaPvlNetworkResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EstimatedLogstashRestartTimeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EstimatedLogstashRestartTimeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EstimatedRestartTimeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EstimatedRestartTimeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetClusterDataInformationRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetClusterDataInformationResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetElastictaskResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonAlarmRecordStatisticsDistributeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonAlarmRecordStatisticsDistributeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonGrafanaAlertsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonGrafanaAlertsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonGrafanaDashboardsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonGrafanaDashboardsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonMonitorDataRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonMonitorDataResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetKeystoresResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetOpenStoreUsageResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetSuggestShrinkableNodesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetSuggestShrinkableNodesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetTransferableNodesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetTransferableNodesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GrayPublishRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GrayPublishResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InitializeOperationRoleRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InitializeOperationRoleResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InitModelRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InitModelResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InstallAckOperatorRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InstallAckOperatorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InstallKibanaSystemPluginRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InstallKibanaSystemPluginResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InstallLogstashSystemPluginRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InstallLogstashSystemPluginResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InstallSystemPluginRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InstallSystemPluginResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InstallUserPluginsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InstallUserPluginsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InterruptElasticsearchTaskRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InterruptElasticsearchTaskResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InterruptLogstashTaskRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InterruptLogstashTaskResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAckClustersRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAckClustersResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAckNamespacesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAckNamespacesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListActionRecordsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListActionRecordsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAllNodeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAllNodeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAlternativeSnapshotReposRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAlternativeSnapshotReposResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAvailableEsInstanceIdsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListCollectorsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListCollectorsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListConnectedClustersResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataStreamsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataStreamsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataTasksResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDefaultCollectorConfigurationsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDefaultCollectorConfigurationsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDeprecatedTemplatesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDeprecatedTemplatesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnoseIndicesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnoseIndicesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnoseReportIdsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnoseReportIdsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnoseReportRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnoseReportResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnosisItemsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnosisItemsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictInformationRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictInformationResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEventRecordsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEventRecordsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListExtendfilesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListILMPoliciesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListILMPoliciesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListIndexTemplatesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListIndexTemplatesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceHistoryEventsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceHistoryEventsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceHistoryEventsShrinkRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceIndicesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceIndicesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListKibanaPluginsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListKibanaPluginsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListKibanaPvlNetworkResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashLogRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashLogResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashPluginsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashPluginsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListNodesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListNodesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListPipelineIdsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListPipelineIdsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListPipelineRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListPipelineResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListPluginsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListPluginsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListSearchLogRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListSearchLogResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListShardRecoveriesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListShardRecoveriesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListSnapshotReposByInstanceIdResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListStatsEventRecordsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListStatsEventRecordsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListTagsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListTagsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListUserPluginRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListUserPluginResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListVpcEndpointsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListVpcEndpointsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MigrateToOtherZoneRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MigrateToOtherZoneResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyDeployMachineRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyDeployMachineResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyElastictaskRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyElastictaskResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyInstanceMaintainTimeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyInstanceMaintainTimeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyScheduleExecuteTimeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyScheduleExecuteTimeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyWhiteIpsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyWhiteIpsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\OpenDiagnosisRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\OpenDiagnosisResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\OpenHttpsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\OpenHttpsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\PluginAnalysisRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\PluginAnalysisResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\PostEmonTryAlarmRuleRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\PostEmonTryAlarmRuleResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RecommendTemplatesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RecommendTemplatesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ReinstallCollectorRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ReinstallCollectorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RemovePluginRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RemovePluginResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RenewLogstashRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RenewLogstashResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RestartCollectorRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RestartCollectorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RestartLogstashRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RestartLogstashResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ResumeElasticsearchTaskRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ResumeElasticsearchTaskResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ResumeLogstashTaskRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ResumeLogstashTaskResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RolloverDataStreamRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RolloverDataStreamResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RunPipelinesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RunPipelinesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ShrinkNodeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ShrinkNodeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StartCollectorRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StartCollectorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StopCollectorRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StopCollectorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StopPipelinesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StopPipelinesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\TransferNodeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\TransferNodeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\TriggerNetworkRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\TriggerNetworkResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\TurnOffZoneRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\TurnOffZoneResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\TurnOnZoneRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\TurnOnZoneResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UninstallKibanaPluginRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UninstallKibanaPluginResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UninstallLogstashPluginRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UninstallLogstashPluginResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UninstallPluginRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UninstallPluginResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateAdminPasswordRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateAdminPasswordResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateAdvancedSettingRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateAdvancedSettingResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateAliwsDictRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateAliwsDictResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateBlackIpsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateBlackIpsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorNameRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorNameResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateComponentIndexRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateComponentIndexResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateDescriptionRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateDescriptionResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateDiagnosisSettingsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateDiagnosisSettingsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateDictRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateDictResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateDynamicSettingsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateDynamicSettingsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateExtendConfigRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateExtendConfigResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateExtendfilesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateExtendfilesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateFalconSeekRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateFalconSeekResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateHotIkDictsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateHotIkDictsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateILMPolicyRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateILMPolicyResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateIndexTemplateRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateIndexTemplateResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceChargeTypeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceChargeTypeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceSettingsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceSettingsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKeystoresRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKeystoresResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaPvlNetworkRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaPvlNetworkResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaSettingsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaSettingsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaSsoRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaSsoResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaWhiteIpsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaWhiteIpsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateLogstashChargeTypeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateLogstashChargeTypeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateLogstashDescriptionRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateLogstashDescriptionResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateLogstashRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateLogstashResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateLogstashSettingsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateLogstashSettingsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePipelineManagementConfigRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePipelineManagementConfigResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePipelinesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePipelinesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePrivateNetworkWhiteIpsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePrivateNetworkWhiteIpsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePublicNetworkRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePublicNetworkResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePublicWhiteIpsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePublicWhiteIpsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateReadWritePolicyRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateReadWritePolicyResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateSnapshotSettingRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateSnapshotSettingResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateSynonymsDictsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateSynonymsDictsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateWhiteIpsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateWhiteIpsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateXpackMonitorConfigRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateXpackMonitorConfigResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeEngineVersionRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeEngineVersionResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeInfoResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ValidateConnectionRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ValidateConnectionResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ValidateShrinkNodesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ValidateShrinkNodesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ValidateSlrPermissionRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ValidateSlrPermissionResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ValidateTransferableNodesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ValidateTransferableNodesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Elasticsearch extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'us-west-1' => 'elasticsearch.us-west-1.aliyuncs.com',
            'us-east-1' => 'elasticsearch.us-east-1.aliyuncs.com',
            'eu-west-1' => 'elasticsearch.eu-west-1.aliyuncs.com',
            'eu-central-1' => 'elasticsearch.eu-central-1.aliyuncs.com',
            'cn-zhangjiakou' => 'elasticsearch.cn-zhangjiakou.aliyuncs.com',
            'cn-wulanchabu' => 'elasticsearch.cn-wulanchabu.aliyuncs.com',
            'cn-shenzhen' => 'elasticsearch.cn-shenzhen.aliyuncs.com',
            'cn-shanghai-finance-1' => 'elasticsearch.cn-shanghai-finance-1.aliyuncs.com',
            'cn-shanghai' => 'elasticsearch.cn-shanghai.aliyuncs.com',
            'cn-qingdao' => 'elasticsearch.cn-qingdao.aliyuncs.com',
            'cn-north-2-gov-1' => 'elasticsearch.cn-north-2-gov-1.aliyuncs.com',
            'cn-hongkong' => 'elasticsearch.cn-hongkong.aliyuncs.com',
            'cn-hangzhou-finance' => 'elasticsearch.cn-hangzhou-finance.aliyuncs.com',
            'cn-hangzhou' => 'elasticsearch.cn-hangzhou.aliyuncs.com',
            'cn-guangzhou' => 'elasticsearch.cn-guangzhou.aliyuncs.com',
            'cn-chengdu' => 'elasticsearch.cn-chengdu.aliyuncs.com',
            'cn-beijing' => 'elasticsearch.cn-beijing.aliyuncs.com',
            'ap-southeast-5' => 'elasticsearch.ap-southeast-5.aliyuncs.com',
            'ap-southeast-3' => 'elasticsearch.ap-southeast-3.aliyuncs.com',
            'ap-southeast-2' => 'elasticsearch.ap-southeast-2.aliyuncs.com',
            'ap-southeast-1' => 'elasticsearch.ap-southeast-1.aliyuncs.com',
            'ap-south-1' => 'elasticsearch.ap-south-1.aliyuncs.com',
            'ap-northeast-1' => 'elasticsearch.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('elasticsearch', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Resumes an offline zone. This operation is valid only for multi-zone instances.
     *
     * @param request - ActivateZonesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActivateZonesResponse
     *
     * @param string               $InstanceId
     * @param ActivateZonesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ActivateZonesResponse
     */
    public function activateZonesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'ActivateZones',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/recover-zones',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ActivateZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes an offline zone. This operation is valid only for multi-zone instances.
     *
     * @param request - ActivateZonesRequest
     *
     * @returns ActivateZonesResponse
     *
     * @param string               $InstanceId
     * @param ActivateZonesRequest $request
     *
     * @return ActivateZonesResponse
     */
    public function activateZones($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->activateZonesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Configures network connectivity to establish a connection between different instances.
     *
     * @param request - AddConnectableClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddConnectableClusterResponse
     *
     * @param string                       $InstanceId
     * @param AddConnectableClusterRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return AddConnectableClusterResponse
     */
    public function addConnectableClusterWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'AddConnectableCluster',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/connected-clusters',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddConnectableClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures network connectivity to establish a connection between different instances.
     *
     * @param request - AddConnectableClusterRequest
     *
     * @returns AddConnectableClusterResponse
     *
     * @param string                       $InstanceId
     * @param AddConnectableClusterRequest $request
     *
     * @return AddConnectableClusterResponse
     */
    public function addConnectableCluster($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addConnectableClusterWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a reference repository when setting up a cross-cluster OSS repository.
     *
     * @param request - AddSnapshotRepoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSnapshotRepoResponse
     *
     * @param string                 $InstanceId
     * @param AddSnapshotRepoRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AddSnapshotRepoResponse
     */
    public function addSnapshotRepoWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'AddSnapshotRepo',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/snapshot-repos',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddSnapshotRepoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a reference repository when setting up a cross-cluster OSS repository.
     *
     * @param request - AddSnapshotRepoRequest
     *
     * @returns AddSnapshotRepoResponse
     *
     * @param string                 $InstanceId
     * @param AddSnapshotRepoRequest $request
     *
     * @return AddSnapshotRepoResponse
     */
    public function addSnapshotRepo($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addSnapshotRepoWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Recovers a frozen Elasticsearch instance that was released.
     *
     * @param request - CancelDeletionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelDeletionResponse
     *
     * @param string                $InstanceId
     * @param CancelDeletionRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CancelDeletionResponse
     */
    public function cancelDeletionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelDeletion',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/cancel-deletion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelDeletionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Recovers a frozen Elasticsearch instance that was released.
     *
     * @param request - CancelDeletionRequest
     *
     * @returns CancelDeletionResponse
     *
     * @param string                $InstanceId
     * @param CancelDeletionRequest $request
     *
     * @return CancelDeletionResponse
     */
    public function cancelDeletion($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelDeletionWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Resumes a frozen Logstash instance that was frozen after release.
     *
     * @param request - CancelLogstashDeletionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelLogstashDeletionResponse
     *
     * @param string                        $InstanceId
     * @param CancelLogstashDeletionRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CancelLogstashDeletionResponse
     */
    public function cancelLogstashDeletionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelLogstashDeletion',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/actions/cancel-deletion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelLogstashDeletionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes a frozen Logstash instance that was frozen after release.
     *
     * @param request - CancelLogstashDeletionRequest
     *
     * @returns CancelLogstashDeletionResponse
     *
     * @param string                        $InstanceId
     * @param CancelLogstashDeletionRequest $request
     *
     * @return CancelLogstashDeletionResponse
     */
    public function cancelLogstashDeletion($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelLogstashDeletionWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Cancels a running data migration task.
     *
     * @param request - CancelTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelTaskResponse
     *
     * @param string            $InstanceId
     * @param CancelTaskRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CancelTaskResponse
     */
    public function cancelTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->taskType) {
            @$query['taskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelTask',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/cancel-task',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a running data migration task.
     *
     * @param request - CancelTaskRequest
     *
     * @returns CancelTaskResponse
     *
     * @param string            $InstanceId
     * @param CancelTaskRequest $request
     *
     * @return CancelTaskResponse
     */
    public function cancelTask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelTaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Recommends optimal cluster capacity planning configurations based on business scenarios, QPS, and log generation volume.
     *
     * @param request - CapacityPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CapacityPlanResponse
     *
     * @param CapacityPlanRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CapacityPlanResponse
     */
    public function capacityPlanWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->complexQueryAvailable) {
            @$body['complexQueryAvailable'] = $request->complexQueryAvailable;
        }

        if (null !== $request->dataInfo) {
            @$body['dataInfo'] = $request->dataInfo;
        }

        if (null !== $request->metric) {
            @$body['metric'] = $request->metric;
        }

        if (null !== $request->usageScenario) {
            @$body['usageScenario'] = $request->usageScenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CapacityPlan',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/assist/actions/capacity-plan',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CapacityPlanResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * Recommends optimal cluster capacity planning configurations based on business scenarios, QPS, and log generation volume.
     *
     * @param request - CapacityPlanRequest
     *
     * @returns CapacityPlanResponse
     *
     * @param CapacityPlanRequest $request
     *
     * @return CapacityPlanResponse
     */
    public function capacityPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->capacityPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * Disables the intelligent O&M feature for an instance.
     *
     * @param request - CloseDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseDiagnosisResponse
     *
     * @param string                $InstanceId
     * @param CloseDiagnosisRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CloseDiagnosisResponse
     */
    public function closeDiagnosisWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lang) {
            @$query['lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloseDiagnosis',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/diagnosis/instances/' . Url::percentEncode($InstanceId) . '/actions/close-diagnosis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloseDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the intelligent O&M feature for an instance.
     *
     * @param request - CloseDiagnosisRequest
     *
     * @returns CloseDiagnosisResponse
     *
     * @param string                $InstanceId
     * @param CloseDiagnosisRequest $request
     *
     * @return CloseDiagnosisResponse
     */
    public function closeDiagnosis($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeDiagnosisWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Disables the HTTPS protocol for a cluster.
     *
     * @param request - CloseHttpsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseHttpsResponse
     *
     * @param string            $InstanceId
     * @param CloseHttpsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CloseHttpsResponse
     */
    public function closeHttpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloseHttps',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/close-https',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloseHttpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the HTTPS protocol for a cluster.
     *
     * @param request - CloseHttpsRequest
     *
     * @returns CloseHttpsResponse
     *
     * @param string            $InstanceId
     * @param CloseHttpsRequest $request
     *
     * @return CloseHttpsResponse
     */
    public function closeHttps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeHttpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Disables the cloud managed feature for a specified index in an Indexing Service cluster. This operation is irreversible. After the feature is disabled, it cannot be enabled again.
     *
     * @param request - CloseManagedIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseManagedIndexResponse
     *
     * @param string                   $InstanceId
     * @param string                   $Index
     * @param CloseManagedIndexRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CloseManagedIndexResponse
     */
    public function closeManagedIndexWithOptions($InstanceId, $Index, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloseManagedIndex',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/indices/' . Url::percentEncode($Index) . '/close-managed',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloseManagedIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the cloud managed feature for a specified index in an Indexing Service cluster. This operation is irreversible. After the feature is disabled, it cannot be enabled again.
     *
     * @param request - CloseManagedIndexRequest
     *
     * @returns CloseManagedIndexResponse
     *
     * @param string                   $InstanceId
     * @param string                   $Index
     * @param CloseManagedIndexRequest $request
     *
     * @return CloseManagedIndexResponse
     */
    public function closeManagedIndex($InstanceId, $Index, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeManagedIndexWithOptions($InstanceId, $Index, $request, $headers, $runtime);
    }

    /**
     * Creates a collector to collect data from a specified service.
     *
     * @param request - CreateCollectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCollectorResponse
     *
     * @param CreateCollectorRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateCollectorResponse
     */
    public function createCollectorWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->collectorPaths) {
            @$body['collectorPaths'] = $request->collectorPaths;
        }

        if (null !== $request->configs) {
            @$body['configs'] = $request->configs;
        }

        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->extendConfigs) {
            @$body['extendConfigs'] = $request->extendConfigs;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->resType) {
            @$body['resType'] = $request->resType;
        }

        if (null !== $request->resVersion) {
            @$body['resVersion'] = $request->resVersion;
        }

        if (null !== $request->vpcId) {
            @$body['vpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCollector',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/collectors',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a collector to collect data from a specified service.
     *
     * @param request - CreateCollectorRequest
     *
     * @returns CreateCollectorResponse
     *
     * @param CreateCollectorRequest $request
     *
     * @return CreateCollectorResponse
     */
    public function createCollector($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCollectorWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an Elasticsearch composable template.
     *
     * @remarks
     * For more information, see [Store large volumes of data by using OpenStore](https://help.aliyun.com/document_detail/317694.html).
     *
     * @param request - CreateComponentIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateComponentIndexResponse
     *
     * @param string                      $InstanceId
     * @param string                      $name
     * @param CreateComponentIndexRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateComponentIndexResponse
     */
    public function createComponentIndexWithOptions($InstanceId, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->meta) {
            @$body['_meta'] = $request->meta;
        }

        if (null !== $request->template) {
            @$body['template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateComponentIndex',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/component-index/' . Url::percentEncode($name) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateComponentIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an Elasticsearch composable template.
     *
     * @remarks
     * For more information, see [Store large volumes of data by using OpenStore](https://help.aliyun.com/document_detail/317694.html).
     *
     * @param request - CreateComponentIndexRequest
     *
     * @returns CreateComponentIndexResponse
     *
     * @param string                      $InstanceId
     * @param string                      $name
     * @param CreateComponentIndexRequest $request
     *
     * @return CreateComponentIndexResponse
     */
    public function createComponentIndex($InstanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createComponentIndexWithOptions($InstanceId, $name, $request, $headers, $runtime);
    }

    /**
     * Creates a data stream to manage a set of indexes.
     *
     * @remarks
     * > The data stream name you create must have a one-to-one correspondence with the index pattern in the index template, and the index template must have the data stream feature enabled. For example, if the index pattern in the index template is ds-\\*, the corresponding data stream name should be ds-.
     *
     * @param request - CreateDataStreamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataStreamResponse
     *
     * @param string                  $InstanceId
     * @param CreateDataStreamRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataStreamResponse
     */
    public function createDataStreamWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CreateDataStream',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/data-streams',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDataStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a data stream to manage a set of indexes.
     *
     * @remarks
     * > The data stream name you create must have a one-to-one correspondence with the index pattern in the index template, and the index template must have the data stream feature enabled. For example, if the index pattern in the index template is ds-\\*, the corresponding data stream name should be ds-.
     *
     * @param request - CreateDataStreamRequest
     *
     * @returns CreateDataStreamResponse
     *
     * @param string                  $InstanceId
     * @param CreateDataStreamRequest $request
     *
     * @return CreateDataStreamResponse
     */
    public function createDataStream($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataStreamWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates an index lifecycle policy. If a policy with the specified name already exists, the existing policy is replaced and its version is incremented.
     *
     * @param request - CreateILMPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateILMPolicyResponse
     *
     * @param string                 $InstanceId
     * @param CreateILMPolicyRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateILMPolicyResponse
     */
    public function createILMPolicyWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CreateILMPolicy',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/ilm-policies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateILMPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an index lifecycle policy. If a policy with the specified name already exists, the existing policy is replaced and its version is incremented.
     *
     * @param request - CreateILMPolicyRequest
     *
     * @returns CreateILMPolicyResponse
     *
     * @param string                 $InstanceId
     * @param CreateILMPolicyRequest $request
     *
     * @return CreateILMPolicyResponse
     */
    public function createILMPolicy($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createILMPolicyWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a cluster index template that can be used for component-based index template settings.
     *
     * @param request - CreateIndexTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIndexTemplateResponse
     *
     * @param string                     $InstanceId
     * @param CreateIndexTemplateRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateIndexTemplateResponse
     */
    public function createIndexTemplateWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->dataStream) {
            @$body['dataStream'] = $request->dataStream;
        }

        if (null !== $request->ilmPolicy) {
            @$body['ilmPolicy'] = $request->ilmPolicy;
        }

        if (null !== $request->indexPatterns) {
            @$body['indexPatterns'] = $request->indexPatterns;
        }

        if (null !== $request->indexTemplate) {
            @$body['indexTemplate'] = $request->indexTemplate;
        }

        if (null !== $request->priority) {
            @$body['priority'] = $request->priority;
        }

        if (null !== $request->template) {
            @$body['template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIndexTemplate',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/index-templates',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateIndexTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cluster index template that can be used for component-based index template settings.
     *
     * @param request - CreateIndexTemplateRequest
     *
     * @returns CreateIndexTemplateResponse
     *
     * @param string                     $InstanceId
     * @param CreateIndexTemplateRequest $request
     *
     * @return CreateIndexTemplateResponse
     */
    public function createIndexTemplate($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndexTemplateWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a Logstash instance by calling CreateLogstash.
     *
     * @remarks
     * Before calling this operation, note the following:
     * - Make sure that you are familiar with the billing method and pricing of Logstash. <props="china"><ph>For more information, see [Billing](https://help.aliyun.com/document_detail/260882.html).</ph>
     * - To create an instance, complete real-name verification. <props="china"><ph>For more information, see [Real-name verification](https://help.aliyun.com/document_detail/37175.html).</ph>.
     *
     * @param request - CreateLogstashRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLogstashResponse
     *
     * @param CreateLogstashRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateLogstashResponse
     */
    public function createLogstashWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->networkConfig) {
            @$body['networkConfig'] = $request->networkConfig;
        }

        if (null !== $request->nodeAmount) {
            @$body['nodeAmount'] = $request->nodeAmount;
        }

        if (null !== $request->nodeSpec) {
            @$body['nodeSpec'] = $request->nodeSpec;
        }

        if (null !== $request->paymentInfo) {
            @$body['paymentInfo'] = $request->paymentInfo;
        }

        if (null !== $request->paymentType) {
            @$body['paymentType'] = $request->paymentType;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLogstash',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Logstash instance by calling CreateLogstash.
     *
     * @remarks
     * Before calling this operation, note the following:
     * - Make sure that you are familiar with the billing method and pricing of Logstash. <props="china"><ph>For more information, see [Billing](https://help.aliyun.com/document_detail/260882.html).</ph>
     * - To create an instance, complete real-name verification. <props="china"><ph>For more information, see [Real-name verification](https://help.aliyun.com/document_detail/37175.html).</ph>.
     *
     * @param request - CreateLogstashRequest
     *
     * @returns CreateLogstashResponse
     *
     * @param CreateLogstashRequest $request
     *
     * @return CreateLogstashResponse
     */
    public function createLogstash($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLogstashWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a Logstash pipeline to collect data.
     *
     * @param request - CreatePipelinesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePipelinesResponse
     *
     * @param string                 $InstanceId
     * @param CreatePipelinesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreatePipelinesResponse
     */
    public function createPipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->trigger) {
            @$query['trigger'] = $request->trigger;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePipelines',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/pipelines',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Logstash pipeline to collect data.
     *
     * @param request - CreatePipelinesRequest
     *
     * @returns CreatePipelinesResponse
     *
     * @param string                 $InstanceId
     * @param CreatePipelinesRequest $request
     *
     * @return CreatePipelinesResponse
     */
    public function createPipelines($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelinesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Calls CreateSnapshot to manually create a snapshot backup of a cluster.
     *
     * @param request - CreateSnapshotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSnapshotResponse
     *
     * @param string                $InstanceId
     * @param CreateSnapshotRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CreateSnapshot',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/snapshots',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls CreateSnapshot to manually create a snapshot backup of a cluster.
     *
     * @param request - CreateSnapshotRequest
     *
     * @returns CreateSnapshotResponse
     *
     * @param string                $InstanceId
     * @param CreateSnapshotRequest $request
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshot($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSnapshotWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a PrivateLink VPC endpoint to connect to an endpoint service created in a user VPC.
     *
     * @remarks
     * For more information about this API operation, see [Configure private connectivity for an instance](https://help.aliyun.com/document_detail/279559.html).
     *
     * @param request - CreateVpcEndpointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVpcEndpointResponse
     *
     * @param string                   $InstanceId
     * @param CreateVpcEndpointRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateVpcEndpointResponse
     */
    public function createVpcEndpointWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $body = [];
        if (null !== $request->serviceId) {
            @$body['serviceId'] = $request->serviceId;
        }

        if (null !== $request->zoneId) {
            @$body['zoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVpcEndpoint',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/vpc-endpoints',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a PrivateLink VPC endpoint to connect to an endpoint service created in a user VPC.
     *
     * @remarks
     * For more information about this API operation, see [Configure private connectivity for an instance](https://help.aliyun.com/document_detail/279559.html).
     *
     * @param request - CreateVpcEndpointRequest
     *
     * @returns CreateVpcEndpointResponse
     *
     * @param string                   $InstanceId
     * @param CreateVpcEndpointRequest $request
     *
     * @return CreateVpcEndpointResponse
     */
    public function createVpcEndpoint($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVpcEndpointWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Takes part of the zones offline when multiple zones are available, and migrates the nodes in the offline zones to other zones.
     *
     * @param request - DeactivateZonesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeactivateZonesResponse
     *
     * @param string                 $InstanceId
     * @param DeactivateZonesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeactivateZonesResponse
     */
    public function deactivateZonesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'DeactivateZones',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/down-zones',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeactivateZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Takes part of the zones offline when multiple zones are available, and migrates the nodes in the offline zones to other zones.
     *
     * @param request - DeactivateZonesRequest
     *
     * @returns DeactivateZonesResponse
     *
     * @param string                 $InstanceId
     * @param DeactivateZonesRequest $request
     *
     * @return DeactivateZonesResponse
     */
    public function deactivateZones($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deactivateZonesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified collector.
     *
     * @param request - DeleteCollectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCollectorResponse
     *
     * @param string                 $ResId
     * @param DeleteCollectorRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteCollectorResponse
     */
    public function deleteCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCollector',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/collectors/' . Url::percentEncode($ResId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified collector.
     *
     * @param request - DeleteCollectorRequest
     *
     * @returns DeleteCollectorResponse
     *
     * @param string                 $ResId
     * @param DeleteCollectorRequest $request
     *
     * @return DeleteCollectorResponse
     */
    public function deleteCollector($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCollectorWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * Deletes a component index template of Elasticsearch.
     *
     * @remarks
     * For more information, see [Store massive amounts of data by using OpenStore](https://help.aliyun.com/document_detail/317694.html).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteComponentIndexResponse
     *
     * @param string         $InstanceId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteComponentIndexResponse
     */
    public function deleteComponentIndexWithOptions($InstanceId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteComponentIndex',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/component-index/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteComponentIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a component index template of Elasticsearch.
     *
     * @remarks
     * For more information, see [Store massive amounts of data by using OpenStore](https://help.aliyun.com/document_detail/317694.html).
     *
     * @returns DeleteComponentIndexResponse
     *
     * @param string $InstanceId
     * @param string $name
     *
     * @return DeleteComponentIndexResponse
     */
    public function deleteComponentIndex($InstanceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteComponentIndexWithOptions($InstanceId, $name, $headers, $runtime);
    }

    /**
     * Deletes the network connectivity between two instances.
     *
     * @param request - DeleteConnectedClusterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConnectedClusterResponse
     *
     * @param string                        $InstanceId
     * @param DeleteConnectedClusterRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteConnectedClusterResponse
     */
    public function deleteConnectedClusterWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->connectedInstanceId) {
            @$query['connectedInstanceId'] = $request->connectedInstanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteConnectedCluster',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/connected-clusters',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConnectedClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the network connectivity between two instances.
     *
     * @param request - DeleteConnectedClusterRequest
     *
     * @returns DeleteConnectedClusterResponse
     *
     * @param string                        $InstanceId
     * @param DeleteConnectedClusterRequest $request
     *
     * @return DeleteConnectedClusterResponse
     */
    public function deleteConnectedCluster($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConnectedClusterWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified cluster data stream.
     *
     * @remarks
     * > - Deleting a data stream also deletes its backing indexes. Proceed with caution.- When an index template has associated data streams, you must delete the data streams associated with the index template before you can delete the index template. On the data stream list page, view the data stream details to find the index template that matches the data stream.
     *
     * @param request - DeleteDataStreamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataStreamResponse
     *
     * @param string                  $InstanceId
     * @param string                  $DataStream
     * @param DeleteDataStreamRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDataStreamResponse
     */
    public function deleteDataStreamWithOptions($InstanceId, $DataStream, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataStream',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/data-streams/' . Url::percentEncode($DataStream) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDataStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified cluster data stream.
     *
     * @remarks
     * > - Deleting a data stream also deletes its backing indexes. Proceed with caution.- When an index template has associated data streams, you must delete the data streams associated with the index template before you can delete the index template. On the data stream list page, view the data stream details to find the index template that matches the data stream.
     *
     * @param request - DeleteDataStreamRequest
     *
     * @returns DeleteDataStreamResponse
     *
     * @param string                  $InstanceId
     * @param string                  $DataStream
     * @param DeleteDataStreamRequest $request
     *
     * @return DeleteDataStreamResponse
     */
    public function deleteDataStream($InstanceId, $DataStream, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDataStreamWithOptions($InstanceId, $DataStream, $request, $headers, $runtime);
    }

    /**
     * Deletes an Elasticsearch index migration task.
     *
     * @param request - DeleteDataTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataTaskResponse
     *
     * @param string                $InstanceId
     * @param DeleteDataTaskRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDataTaskResponse
     */
    public function deleteDataTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataTask',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/data-task',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDataTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an Elasticsearch index migration task.
     *
     * @param request - DeleteDataTaskRequest
     *
     * @returns DeleteDataTaskResponse
     *
     * @param string                $InstanceId
     * @param DeleteDataTaskRequest $request
     *
     * @return DeleteDataTaskResponse
     */
    public function deleteDataTask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDataTaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a historical index template.
     *
     * @remarks
     * For more information, see [Store massive amounts of data through OpenStore](https://help.aliyun.com/document_detail/317694.html).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDeprecatedTemplateResponse
     *
     * @param string         $InstanceId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDeprecatedTemplateResponse
     */
    public function deleteDeprecatedTemplateWithOptions($InstanceId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDeprecatedTemplate',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/deprecated-templates/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDeprecatedTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a historical index template.
     *
     * @remarks
     * For more information, see [Store massive amounts of data through OpenStore](https://help.aliyun.com/document_detail/317694.html).
     *
     * @returns DeleteDeprecatedTemplateResponse
     *
     * @param string $InstanceId
     * @param string $name
     *
     * @return DeleteDeprecatedTemplateResponse
     */
    public function deleteDeprecatedTemplate($InstanceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDeprecatedTemplateWithOptions($InstanceId, $name, $headers, $runtime);
    }

    /**
     * Deletes a specified index lifecycle policy.
     *
     * @remarks
     * > You cannot delete a policy that is currently in use. If the policy is being used to manage any index, the request fails and returns an error.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteILMPolicyResponse
     *
     * @param string         $InstanceId
     * @param string         $PolicyName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteILMPolicyResponse
     */
    public function deleteILMPolicyWithOptions($InstanceId, $PolicyName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteILMPolicy',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/ilm-policies/' . Url::percentEncode($PolicyName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteILMPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified index lifecycle policy.
     *
     * @remarks
     * > You cannot delete a policy that is currently in use. If the policy is being used to manage any index, the request fails and returns an error.
     *
     * @returns DeleteILMPolicyResponse
     *
     * @param string $InstanceId
     * @param string $PolicyName
     *
     * @return DeleteILMPolicyResponse
     */
    public function deleteILMPolicy($InstanceId, $PolicyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteILMPolicyWithOptions($InstanceId, $PolicyName, $headers, $runtime);
    }

    /**
     * Deletes a specified index template.
     *
     * @remarks
     * > Before deleting an index template, delete the data streams associated with the index template. Otherwise, the index template cannot be deleted.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIndexTemplateResponse
     *
     * @param string         $InstanceId
     * @param string         $IndexTemplate
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteIndexTemplateResponse
     */
    public function deleteIndexTemplateWithOptions($InstanceId, $IndexTemplate, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteIndexTemplate',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/index-templates/' . Url::percentEncode($IndexTemplate) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIndexTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified index template.
     *
     * @remarks
     * > Before deleting an index template, delete the data streams associated with the index template. Otherwise, the index template cannot be deleted.
     *
     * @returns DeleteIndexTemplateResponse
     *
     * @param string $InstanceId
     * @param string $IndexTemplate
     *
     * @return DeleteIndexTemplateResponse
     */
    public function deleteIndexTemplate($InstanceId, $IndexTemplate)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexTemplateWithOptions($InstanceId, $IndexTemplate, $headers, $runtime);
    }

    /**
     * All physical resources used by the instance are reclaimed, all related data is permanently lost and cannot be recovered, and the cloud disks mounted to the instance nodes along with their corresponding snapshots are released.
     *
     * @remarks
     * Before you invoke this operation, note the following:
     * Data cannot be recovered after the instance is released. Back up your data before releasing the instance. For more information, see [Snapshot backup and recovery commands](https://help.aliyun.com/document_detail/65675.html).
     *
     * @param request - DeleteInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param string                $InstanceId
     * @param DeleteInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->deleteType) {
            @$query['deleteType'] = $request->deleteType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * All physical resources used by the instance are reclaimed, all related data is permanently lost and cannot be recovered, and the cloud disks mounted to the instance nodes along with their corresponding snapshots are released.
     *
     * @remarks
     * Before you invoke this operation, note the following:
     * Data cannot be recovered after the instance is released. Back up your data before releasing the instance. For more information, see [Snapshot backup and recovery commands](https://help.aliyun.com/document_detail/65675.html).
     *
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
     * @param string                $InstanceId
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Proactively releases a Logstash instance.
     *
     * @remarks
     * Before calling this operation, note the following:
     * After the instance is released, all physical resources used by the instance are reclaimed, all related data is permanently lost and cannot be recovered, cloud disks mounted to the instance nodes are also released, and the corresponding snapshots are deleted.
     *
     * @param request - DeleteLogstashRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLogstashResponse
     *
     * @param string                $InstanceId
     * @param DeleteLogstashRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteLogstashResponse
     */
    public function deleteLogstashWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->deleteType) {
            @$query['deleteType'] = $request->deleteType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLogstash',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Proactively releases a Logstash instance.
     *
     * @remarks
     * Before calling this operation, note the following:
     * After the instance is released, all physical resources used by the instance are reclaimed, all related data is permanently lost and cannot be recovered, cloud disks mounted to the instance nodes are also released, and the corresponding snapshots are deleted.
     *
     * @param request - DeleteLogstashRequest
     *
     * @returns DeleteLogstashResponse
     *
     * @param string                $InstanceId
     * @param DeleteLogstashRequest $request
     *
     * @return DeleteLogstashResponse
     */
    public function deleteLogstash($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLogstashWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes pipelines configured for a Logstash instance.
     *
     * @param request - DeletePipelinesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePipelinesResponse
     *
     * @param string                 $InstanceId
     * @param DeletePipelinesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeletePipelinesResponse
     */
    public function deletePipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->pipelineIds) {
            @$query['pipelineIds'] = $request->pipelineIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePipelines',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/pipelines',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes pipelines configured for a Logstash instance.
     *
     * @param request - DeletePipelinesRequest
     *
     * @returns DeletePipelinesResponse
     *
     * @param string                 $InstanceId
     * @param DeletePipelinesRequest $request
     *
     * @return DeletePipelinesResponse
     */
    public function deletePipelines($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelinesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a cross-cluster OSS reference repository from an instance.
     *
     * @param request - DeleteSnapshotRepoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSnapshotRepoResponse
     *
     * @param string                    $InstanceId
     * @param DeleteSnapshotRepoRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSnapshotRepoResponse
     */
    public function deleteSnapshotRepoWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->repoPath) {
            @$query['repoPath'] = $request->repoPath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSnapshotRepo',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/snapshot-repos',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSnapshotRepoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a cross-cluster OSS reference repository from an instance.
     *
     * @param request - DeleteSnapshotRepoRequest
     *
     * @returns DeleteSnapshotRepoResponse
     *
     * @param string                    $InstanceId
     * @param DeleteSnapshotRepoRequest $request
     *
     * @return DeleteSnapshotRepoResponse
     */
    public function deleteSnapshotRepo($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSnapshotRepoWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Calls DeleteVpcEndpoint to delete a VPC endpoint under a service account.
     *
     * @param request - DeleteVpcEndpointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVpcEndpointResponse
     *
     * @param string                   $InstanceId
     * @param string                   $EndpointId
     * @param DeleteVpcEndpointRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVpcEndpointResponse
     */
    public function deleteVpcEndpointWithOptions($InstanceId, $EndpointId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVpcEndpoint',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/vpc-endpoints/' . Url::percentEncode($EndpointId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls DeleteVpcEndpoint to delete a VPC endpoint under a service account.
     *
     * @param request - DeleteVpcEndpointRequest
     *
     * @returns DeleteVpcEndpointResponse
     *
     * @param string                   $InstanceId
     * @param string                   $EndpointId
     * @param DeleteVpcEndpointRequest $request
     *
     * @return DeleteVpcEndpointResponse
     */
    public function deleteVpcEndpoint($InstanceId, $EndpointId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVpcEndpointWithOptions($InstanceId, $EndpointId, $request, $headers, $runtime);
    }

    /**
     * Calls the DescribeAckOperator operation to query the Elasticsearch Operator information installed on a specified Container Service for Kubernetes (ACK) cluster.
     *
     * @remarks
     * > Before installing a collector on an ACK cluster, you can call this operation to check the installation status of the Elasticsearch Operator on the target cluster.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAckOperatorResponse
     *
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAckOperatorResponse
     */
    public function describeAckOperatorWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeAckOperator',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ack-clusters/' . Url::percentEncode($ClusterId) . '/operator',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeAckOperatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the DescribeAckOperator operation to query the Elasticsearch Operator information installed on a specified Container Service for Kubernetes (ACK) cluster.
     *
     * @remarks
     * > Before installing a collector on an ACK cluster, you can call this operation to check the installation status of the Elasticsearch Operator on the target cluster.
     *
     * @returns DescribeAckOperatorResponse
     *
     * @param string $ClusterId
     *
     * @return DescribeAckOperatorResponse
     */
    public function describeAckOperator($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAckOperatorWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * Retrieves the details of a collector instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCollectorResponse
     *
     * @param string         $ResId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeCollectorResponse
     */
    public function describeCollectorWithOptions($ResId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeCollector',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/collectors/' . Url::percentEncode($ResId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a collector instance.
     *
     * @returns DescribeCollectorResponse
     *
     * @param string $ResId
     *
     * @return DescribeCollectorResponse
     */
    public function describeCollector($ResId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeCollectorWithOptions($ResId, $headers, $runtime);
    }

    /**
     * Queries the details of a composable index template in Elasticsearch.
     *
     * @remarks
     * For more information, see [Use OpenStore to store massive amounts of data](https://help.aliyun.com/document_detail/317694.html).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeComponentIndexResponse
     *
     * @param string         $InstanceId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeComponentIndexResponse
     */
    public function describeComponentIndexWithOptions($InstanceId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeComponentIndex',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/component-index/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeComponentIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a composable index template in Elasticsearch.
     *
     * @remarks
     * For more information, see [Use OpenStore to store massive amounts of data](https://help.aliyun.com/document_detail/317694.html).
     *
     * @returns DescribeComponentIndexResponse
     *
     * @param string $InstanceId
     * @param string $name
     *
     * @return DescribeComponentIndexResponse
     */
    public function describeComponentIndex($InstanceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeComponentIndexWithOptions($InstanceId, $name, $headers, $runtime);
    }

    /**
     * Retrieves a list of instances that can establish private network peering with the current instance. Instances that are already connected are not included.
     *
     * @param request - DescribeConnectableClustersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeConnectableClustersResponse
     *
     * @param string                             $InstanceId
     * @param DescribeConnectableClustersRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeConnectableClustersResponse
     */
    public function describeConnectableClustersWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alreadySetItems) {
            @$query['alreadySetItems'] = $request->alreadySetItems;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeConnectableClusters',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/connectable-clusters',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeConnectableClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of instances that can establish private network peering with the current instance. Instances that are already connected are not included.
     *
     * @param request - DescribeConnectableClustersRequest
     *
     * @returns DescribeConnectableClustersResponse
     *
     * @param string                             $InstanceId
     * @param DescribeConnectableClustersRequest $request
     *
     * @return DescribeConnectableClustersResponse
     */
    public function describeConnectableClusters($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeConnectableClustersWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a historical index template.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeprecatedTemplateResponse
     *
     * @param string         $InstanceId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDeprecatedTemplateResponse
     */
    public function describeDeprecatedTemplateWithOptions($InstanceId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeDeprecatedTemplate',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/deprecated-templates/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeDeprecatedTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a historical index template.
     *
     * @returns DescribeDeprecatedTemplateResponse
     *
     * @param string $InstanceId
     * @param string $name
     *
     * @return DescribeDeprecatedTemplateResponse
     */
    public function describeDeprecatedTemplate($InstanceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDeprecatedTemplateWithOptions($InstanceId, $name, $headers, $runtime);
    }

    /**
     * Calls the DescribeDiagnoseReport operation to view historical reports of intelligent O&M.
     *
     * @param request - DescribeDiagnoseReportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiagnoseReportResponse
     *
     * @param string                        $InstanceId
     * @param string                        $ReportId
     * @param DescribeDiagnoseReportRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDiagnoseReportResponse
     */
    public function describeDiagnoseReportWithOptions($InstanceId, $ReportId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiagnoseReport',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/diagnosis/instances/' . Url::percentEncode($InstanceId) . '/reports/' . Url::percentEncode($ReportId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeDiagnoseReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the DescribeDiagnoseReport operation to view historical reports of intelligent O&M.
     *
     * @param request - DescribeDiagnoseReportRequest
     *
     * @returns DescribeDiagnoseReportResponse
     *
     * @param string                        $InstanceId
     * @param string                        $ReportId
     * @param DescribeDiagnoseReportRequest $request
     *
     * @return DescribeDiagnoseReportResponse
     */
    public function describeDiagnoseReport($InstanceId, $ReportId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDiagnoseReportWithOptions($InstanceId, $ReportId, $request, $headers, $runtime);
    }

    /**
     * Calls the DescribeDiagnosisSettings operation to obtain the scenario settings of intelligent O&M.
     *
     * @param request - DescribeDiagnosisSettingsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiagnosisSettingsResponse
     *
     * @param string                           $InstanceId
     * @param DescribeDiagnosisSettingsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDiagnosisSettingsResponse
     */
    public function describeDiagnosisSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiagnosisSettings',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/diagnosis/instances/' . Url::percentEncode($InstanceId) . '/settings',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeDiagnosisSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the DescribeDiagnosisSettings operation to obtain the scenario settings of intelligent O&M.
     *
     * @param request - DescribeDiagnosisSettingsRequest
     *
     * @returns DescribeDiagnosisSettingsResponse
     *
     * @param string                           $InstanceId
     * @param DescribeDiagnosisSettingsRequest $request
     *
     * @return DescribeDiagnosisSettingsResponse
     */
    public function describeDiagnosisSettings($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDiagnosisSettingsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves dynamic metrics of a cluster.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDynamicSettingsResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDynamicSettingsResponse
     */
    public function describeDynamicSettingsWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeDynamicSettings',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/dynamic-settings',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeDynamicSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves dynamic metrics of a cluster.
     *
     * @returns DescribeDynamicSettingsResponse
     *
     * @param string $InstanceId
     *
     * @return DescribeDynamicSettingsResponse
     */
    public function describeDynamicSettings($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDynamicSettingsWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Queries the health status of a cluster to check whether it is running properly.
     *
     * @remarks
     * The instance health status. The following three states are supported:
     * - GREEN: Primary and replica shards are allocated properly.
     * - YELLOW: Primary shards are allocated properly, but replica shards are not allocated properly.
     * - RED: Primary shards are not allocated properly.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeElasticsearchHealthResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeElasticsearchHealthResponse
     */
    public function describeElasticsearchHealthWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeElasticsearchHealth',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/elasticsearch-health',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeElasticsearchHealthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the health status of a cluster to check whether it is running properly.
     *
     * @remarks
     * The instance health status. The following three states are supported:
     * - GREEN: Primary and replica shards are allocated properly.
     * - YELLOW: Primary shards are allocated properly, but replica shards are not allocated properly.
     * - RED: Primary shards are not allocated properly.
     *
     * @returns DescribeElasticsearchHealthResponse
     *
     * @param string $InstanceId
     *
     * @return DescribeElasticsearchHealthResponse
     */
    public function describeElasticsearchHealth($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeElasticsearchHealthWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Queries the details of a specified index lifecycle policy.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeILMPolicyResponse
     *
     * @param string         $InstanceId
     * @param string         $PolicyName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeILMPolicyResponse
     */
    public function describeILMPolicyWithOptions($InstanceId, $PolicyName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeILMPolicy',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/ilm-policies/' . Url::percentEncode($PolicyName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeILMPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified index lifecycle policy.
     *
     * @returns DescribeILMPolicyResponse
     *
     * @param string $InstanceId
     * @param string $PolicyName
     *
     * @return DescribeILMPolicyResponse
     */
    public function describeILMPolicy($InstanceId, $PolicyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeILMPolicyWithOptions($InstanceId, $PolicyName, $headers, $runtime);
    }

    /**
     * Returns information about an index template.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIndexTemplateResponse
     *
     * @param string         $InstanceId
     * @param string         $IndexTemplate
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeIndexTemplateResponse
     */
    public function describeIndexTemplateWithOptions($InstanceId, $IndexTemplate, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeIndexTemplate',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/index-templates/' . Url::percentEncode($IndexTemplate) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeIndexTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Returns information about an index template.
     *
     * @returns DescribeIndexTemplateResponse
     *
     * @param string $InstanceId
     * @param string $IndexTemplate
     *
     * @return DescribeIndexTemplateResponse
     */
    public function describeIndexTemplate($InstanceId, $IndexTemplate)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeIndexTemplateWithOptions($InstanceId, $IndexTemplate, $headers, $runtime);
    }

    /**
     * Queries the details of a specified instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeInstance',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified instance.
     *
     * @returns DescribeInstanceResponse
     *
     * @param string $InstanceId
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Retrieves the Kibana node configuration of an Elasticsearch instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeKibanaSettingsResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeKibanaSettingsResponse
     */
    public function describeKibanaSettingsWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeKibanaSettings',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/kibana-settings',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeKibanaSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the Kibana node configuration of an Elasticsearch instance.
     *
     * @returns DescribeKibanaSettingsResponse
     *
     * @param string $InstanceId
     *
     * @return DescribeKibanaSettingsResponse
     */
    public function describeKibanaSettings($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeKibanaSettingsWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Queries the details of a Logstash instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogstashResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeLogstashResponse
     */
    public function describeLogstashWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeLogstash',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a Logstash instance.
     *
     * @returns DescribeLogstashResponse
     *
     * @param string $InstanceId
     *
     * @return DescribeLogstashResponse
     */
    public function describeLogstash($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeLogstashWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Retrieves the pipeline information of a Logstash instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePipelineResponse
     *
     * @param string         $InstanceId
     * @param string         $PipelineId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribePipelineResponse
     */
    public function describePipelineWithOptions($InstanceId, $PipelineId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribePipeline',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/pipelines/' . Url::percentEncode($PipelineId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the pipeline information of a Logstash instance.
     *
     * @returns DescribePipelineResponse
     *
     * @param string $InstanceId
     * @param string $PipelineId
     *
     * @return DescribePipelineResponse
     */
    public function describePipeline($InstanceId, $PipelineId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePipelineWithOptions($InstanceId, $PipelineId, $headers, $runtime);
    }

    /**
     * Calls DescribePipelineManagementConfig to retrieve the pipeline management configuration of a Logstash instance.
     *
     * @param request - DescribePipelineManagementConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePipelineManagementConfigResponse
     *
     * @param string                                  $InstanceId
     * @param DescribePipelineManagementConfigRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribePipelineManagementConfigResponse
     */
    public function describePipelineManagementConfigWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePipelineManagementConfig',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/pipeline-management-config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribePipelineManagementConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls DescribePipelineManagementConfig to retrieve the pipeline management configuration of a Logstash instance.
     *
     * @param request - DescribePipelineManagementConfigRequest
     *
     * @returns DescribePipelineManagementConfigResponse
     *
     * @param string                                  $InstanceId
     * @param DescribePipelineManagementConfigRequest $request
     *
     * @return DescribePipelineManagementConfigResponse
     */
    public function describePipelineManagementConfig($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePipelineManagementConfigWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the region information of Alibaba Cloud Elasticsearch.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/regions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the region information of Alibaba Cloud Elasticsearch.
     *
     * @returns DescribeRegionsResponse
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
     * Retrieves the snapshot backup settings and backup cycle of a cluster.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSnapshotSettingResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSnapshotSettingResponse
     */
    public function describeSnapshotSettingWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeSnapshotSetting',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/snapshot-setting',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeSnapshotSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the snapshot backup settings and backup cycle of a cluster.
     *
     * @returns DescribeSnapshotSettingResponse
     *
     * @param string $InstanceId
     *
     * @return DescribeSnapshotSettingResponse
     */
    public function describeSnapshotSetting($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSnapshotSettingWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Retrieves the scenario-specific template configuration and cluster settings of an instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTemplatesResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplatesWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeTemplates',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/templates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the scenario-specific template configuration and cluster settings of an instance.
     *
     * @returns DescribeTemplatesResponse
     *
     * @param string $InstanceId
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplates($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTemplatesWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Retrieves the X-Pack monitoring configuration of a Logstash instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeXpackMonitorConfigResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeXpackMonitorConfigResponse
     */
    public function describeXpackMonitorConfigWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeXpackMonitorConfig',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/xpack-monitor-config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeXpackMonitorConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the X-Pack monitoring configuration of a Logstash instance.
     *
     * @returns DescribeXpackMonitorConfigResponse
     *
     * @param string $InstanceId
     *
     * @return DescribeXpackMonitorConfigResponse
     */
    public function describeXpackMonitorConfig($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeXpackMonitorConfigWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Calls DiagnoseInstance to immediately diagnose an instance.
     *
     * @param request - DiagnoseInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DiagnoseInstanceResponse
     *
     * @param string                  $InstanceId
     * @param DiagnoseInstanceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DiagnoseInstanceResponse
     */
    public function diagnoseInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lang) {
            @$query['lang'] = $request->lang;
        }

        $body = [];
        if (null !== $request->diagnoseItems) {
            @$body['diagnoseItems'] = $request->diagnoseItems;
        }

        if (null !== $request->indices) {
            @$body['indices'] = $request->indices;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DiagnoseInstance',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/diagnosis/instances/' . Url::percentEncode($InstanceId) . '/actions/diagnose',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DiagnoseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls DiagnoseInstance to immediately diagnose an instance.
     *
     * @param request - DiagnoseInstanceRequest
     *
     * @returns DiagnoseInstanceResponse
     *
     * @param string                  $InstanceId
     * @param DiagnoseInstanceRequest $request
     *
     * @return DiagnoseInstanceResponse
     */
    public function diagnoseInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->diagnoseInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Disables Kibana private network access.
     *
     * @remarks
     * This API operation supports only cloud-native instances. For legacy architecture instances, use the TriggerNetwork method.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableKibanaPvlNetworkResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DisableKibanaPvlNetworkResponse
     */
    public function disableKibanaPvlNetworkWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DisableKibanaPvlNetwork',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/disable-kibana-private',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableKibanaPvlNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables Kibana private network access.
     *
     * @remarks
     * This API operation supports only cloud-native instances. For legacy architecture instances, use the TriggerNetwork method.
     *
     * @returns DisableKibanaPvlNetworkResponse
     *
     * @param string $InstanceId
     *
     * @return DisableKibanaPvlNetworkResponse
     */
    public function disableKibanaPvlNetwork($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableKibanaPvlNetworkWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Invokes the EnableKibanaPvlNetwork operation to enable private network access for Kibana.
     *
     * @remarks
     * 1. This API operation is supported only for cloud-native instances. For legacy architecture instances, use the TriggerNetwork method.
     * 2. The Kibana specification must be greater than 1 vCPU and 2 GB of memory.
     *
     * @param request - EnableKibanaPvlNetworkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableKibanaPvlNetworkResponse
     *
     * @param string                        $InstanceId
     * @param EnableKibanaPvlNetworkRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return EnableKibanaPvlNetworkResponse
     */
    public function enableKibanaPvlNetworkWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->endpointName) {
            @$body['endpointName'] = $request->endpointName;
        }

        if (null !== $request->securityGroups) {
            @$body['securityGroups'] = $request->securityGroups;
        }

        if (null !== $request->vSwitchIdsZone) {
            @$body['vSwitchIdsZone'] = $request->vSwitchIdsZone;
        }

        if (null !== $request->vpcId) {
            @$body['vpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableKibanaPvlNetwork',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/enable-kibana-private',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableKibanaPvlNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes the EnableKibanaPvlNetwork operation to enable private network access for Kibana.
     *
     * @remarks
     * 1. This API operation is supported only for cloud-native instances. For legacy architecture instances, use the TriggerNetwork method.
     * 2. The Kibana specification must be greater than 1 vCPU and 2 GB of memory.
     *
     * @param request - EnableKibanaPvlNetworkRequest
     *
     * @returns EnableKibanaPvlNetworkResponse
     *
     * @param string                        $InstanceId
     * @param EnableKibanaPvlNetworkRequest $request
     *
     * @return EnableKibanaPvlNetworkResponse
     */
    public function enableKibanaPvlNetwork($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableKibanaPvlNetworkWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the estimated restart time of a Logstash instance.
     *
     * @param request - EstimatedLogstashRestartTimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EstimatedLogstashRestartTimeResponse
     *
     * @param string                              $InstanceId
     * @param EstimatedLogstashRestartTimeRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return EstimatedLogstashRestartTimeResponse
     */
    public function estimatedLogstashRestartTimeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'EstimatedLogstashRestartTime',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/estimated-time/restart-time',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EstimatedLogstashRestartTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the estimated restart time of a Logstash instance.
     *
     * @param request - EstimatedLogstashRestartTimeRequest
     *
     * @returns EstimatedLogstashRestartTimeResponse
     *
     * @param string                              $InstanceId
     * @param EstimatedLogstashRestartTimeRequest $request
     *
     * @return EstimatedLogstashRestartTimeResponse
     */
    public function estimatedLogstashRestartTime($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->estimatedLogstashRestartTimeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the estimated restart time for an instance.
     *
     * @param request - EstimatedRestartTimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EstimatedRestartTimeResponse
     *
     * @param string                      $InstanceId
     * @param EstimatedRestartTimeRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return EstimatedRestartTimeResponse
     */
    public function estimatedRestartTimeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'EstimatedRestartTime',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/estimated-time/restart-time',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EstimatedRestartTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the estimated restart time for an instance.
     *
     * @param request - EstimatedRestartTimeRequest
     *
     * @returns EstimatedRestartTimeResponse
     *
     * @param string                      $InstanceId
     * @param EstimatedRestartTimeRequest $request
     *
     * @return EstimatedRestartTimeResponse
     */
    public function estimatedRestartTime($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->estimatedRestartTimeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves index migration data information.
     *
     * @param request - GetClusterDataInformationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterDataInformationResponse
     *
     * @param GetClusterDataInformationRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetClusterDataInformationResponse
     */
    public function getClusterDataInformationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'GetClusterDataInformation',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/cluster/data-information',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetClusterDataInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves index migration data information.
     *
     * @param request - GetClusterDataInformationRequest
     *
     * @returns GetClusterDataInformationResponse
     *
     * @param GetClusterDataInformationRequest $request
     *
     * @return GetClusterDataInformationResponse
     */
    public function getClusterDataInformation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterDataInformationWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the elastic scaling rules of a cluster. Elastic nodes must be purchased when the instance is created.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetElastictaskResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetElastictaskResponse
     */
    public function getElastictaskWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetElastictask',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/elastic-task',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetElastictaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the elastic scaling rules of a cluster. Elastic nodes must be purchased when the instance is created.
     *
     * @returns GetElastictaskResponse
     *
     * @param string $InstanceId
     *
     * @return GetElastictaskResponse
     */
    public function getElastictask($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getElastictaskWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * GetEmonAlarmRecordStatisticsDistribute.
     *
     * @param request - GetEmonAlarmRecordStatisticsDistributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEmonAlarmRecordStatisticsDistributeResponse
     *
     * @param GetEmonAlarmRecordStatisticsDistributeRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return GetEmonAlarmRecordStatisticsDistributeResponse
     */
    public function getEmonAlarmRecordStatisticsDistributeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->body) {
            @$query['body'] = $request->body;
        }

        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        if (null !== $request->timeEnd) {
            @$query['timeEnd'] = $request->timeEnd;
        }

        if (null !== $request->timeStart) {
            @$query['timeStart'] = $request->timeStart;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEmonAlarmRecordStatisticsDistribute',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/emon/alarm-record-statistics/distribute',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEmonAlarmRecordStatisticsDistributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetEmonAlarmRecordStatisticsDistribute.
     *
     * @param request - GetEmonAlarmRecordStatisticsDistributeRequest
     *
     * @returns GetEmonAlarmRecordStatisticsDistributeResponse
     *
     * @param GetEmonAlarmRecordStatisticsDistributeRequest $request
     *
     * @return GetEmonAlarmRecordStatisticsDistributeResponse
     */
    public function getEmonAlarmRecordStatisticsDistribute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmonAlarmRecordStatisticsDistributeWithOptions($request, $headers, $runtime);
    }

    /**
     * Calls GetEmonGrafanaAlerts to retrieve the Grafana alert list.
     *
     * @param request - GetEmonGrafanaAlertsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEmonGrafanaAlertsResponse
     *
     * @param string                      $ProjectId
     * @param GetEmonGrafanaAlertsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetEmonGrafanaAlertsResponse
     */
    public function getEmonGrafanaAlertsWithOptions($ProjectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->body) {
            @$query['body'] = $request->body;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEmonGrafanaAlerts',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/emon/projects/' . Url::percentEncode($ProjectId) . '/grafana/proxy/api/alerts',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEmonGrafanaAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls GetEmonGrafanaAlerts to retrieve the Grafana alert list.
     *
     * @param request - GetEmonGrafanaAlertsRequest
     *
     * @returns GetEmonGrafanaAlertsResponse
     *
     * @param string                      $ProjectId
     * @param GetEmonGrafanaAlertsRequest $request
     *
     * @return GetEmonGrafanaAlertsResponse
     */
    public function getEmonGrafanaAlerts($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmonGrafanaAlertsWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * Calls GetEmonGrafanaDashboards to retrieve the list of Grafana dashboards.
     *
     * @param request - GetEmonGrafanaDashboardsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEmonGrafanaDashboardsResponse
     *
     * @param string                          $ProjectId
     * @param GetEmonGrafanaDashboardsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetEmonGrafanaDashboardsResponse
     */
    public function getEmonGrafanaDashboardsWithOptions($ProjectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->body) {
            @$query['body'] = $request->body;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEmonGrafanaDashboards',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/emon/projects/' . Url::percentEncode($ProjectId) . '/grafana/proxy/api/search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEmonGrafanaDashboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls GetEmonGrafanaDashboards to retrieve the list of Grafana dashboards.
     *
     * @param request - GetEmonGrafanaDashboardsRequest
     *
     * @returns GetEmonGrafanaDashboardsResponse
     *
     * @param string                          $ProjectId
     * @param GetEmonGrafanaDashboardsRequest $request
     *
     * @return GetEmonGrafanaDashboardsResponse
     */
    public function getEmonGrafanaDashboards($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmonGrafanaDashboardsWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * Queries the Grafana metric monitoring data of an Elasticsearch instance.
     *
     * @param request - GetEmonMonitorDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEmonMonitorDataResponse
     *
     * @param string                    $ProjectId
     * @param GetEmonMonitorDataRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetEmonMonitorDataResponse
     */
    public function getEmonMonitorDataWithOptions($ProjectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->body) {
            @$query['body'] = $request->body;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEmonMonitorData',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/emon/projects/' . Url::percentEncode($ProjectId) . '/metrics/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEmonMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Grafana metric monitoring data of an Elasticsearch instance.
     *
     * @param request - GetEmonMonitorDataRequest
     *
     * @returns GetEmonMonitorDataResponse
     *
     * @param string                    $ProjectId
     * @param GetEmonMonitorDataRequest $request
     *
     * @return GetEmonMonitorDataResponse
     */
    public function getEmonMonitorData($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmonMonitorDataWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * Retrieve keystore information.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKeystoresResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetKeystoresResponse
     */
    public function getKeystoresWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetKeystores',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/keystores',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetKeystoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve keystore information.
     *
     * @returns GetKeystoresResponse
     *
     * @param string $InstanceId
     *
     * @return GetKeystoresResponse
     */
    public function getKeystores($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKeystoresWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Queries the storage capacity and usage of an OpenStore instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOpenStoreUsageResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetOpenStoreUsageResponse
     */
    public function getOpenStoreUsageWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetOpenStoreUsage',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/openstore/usage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOpenStoreUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage capacity and usage of an OpenStore instance.
     *
     * @returns GetOpenStoreUsageResponse
     *
     * @param string $InstanceId
     *
     * @return GetOpenStoreUsageResponse
     */
    public function getOpenStoreUsage($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOpenStoreUsageWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Retrieves the current region information.
     *
     * @param request - GetRegionConfigurationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRegionConfigurationResponse
     *
     * @param GetRegionConfigurationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetRegionConfigurationResponse
     */
    public function getRegionConfigurationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->zoneId) {
            @$query['zoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRegionConfiguration',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/region',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRegionConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the current region information.
     *
     * @param request - GetRegionConfigurationRequest
     *
     * @returns GetRegionConfigurationResponse
     *
     * @param GetRegionConfigurationRequest $request
     *
     * @return GetRegionConfigurationResponse
     */
    public function getRegionConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegionConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * 实例区域商品化配置.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRegionalInstanceConfigResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRegionalInstanceConfigResponse
     */
    public function getRegionalInstanceConfigWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRegionalInstanceConfig',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/regions/instance-config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRegionalInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实例区域商品化配置.
     *
     * @returns GetRegionalInstanceConfigResponse
     *
     * @return GetRegionalInstanceConfigResponse
     */
    public function getRegionalInstanceConfig()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegionalInstanceConfigWithOptions($headers, $runtime);
    }

    /**
     * Retrieves the nodes that can be removed based on the specified node type and quantity.
     *
     * @param request - GetSuggestShrinkableNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSuggestShrinkableNodesResponse
     *
     * @param string                           $InstanceId
     * @param GetSuggestShrinkableNodesRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetSuggestShrinkableNodesResponse
     */
    public function getSuggestShrinkableNodesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->count) {
            @$query['count'] = $request->count;
        }

        if (null !== $request->ignoreStatus) {
            @$query['ignoreStatus'] = $request->ignoreStatus;
        }

        if (null !== $request->nodeType) {
            @$query['nodeType'] = $request->nodeType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSuggestShrinkableNodes',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/suggest-shrinkable-nodes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSuggestShrinkableNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the nodes that can be removed based on the specified node type and quantity.
     *
     * @param request - GetSuggestShrinkableNodesRequest
     *
     * @returns GetSuggestShrinkableNodesResponse
     *
     * @param string                           $InstanceId
     * @param GetSuggestShrinkableNodesRequest $request
     *
     * @return GetSuggestShrinkableNodesResponse
     */
    public function getSuggestShrinkableNodes($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSuggestShrinkableNodesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the nodes available for data migration based on the specified node type and count.
     *
     * @param request - GetTransferableNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTransferableNodesResponse
     *
     * @param string                      $InstanceId
     * @param GetTransferableNodesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetTransferableNodesResponse
     */
    public function getTransferableNodesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->count) {
            @$query['count'] = $request->count;
        }

        if (null !== $request->nodeType) {
            @$query['nodeType'] = $request->nodeType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTransferableNodes',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/transferable-nodes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTransferableNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the nodes available for data migration based on the specified node type and count.
     *
     * @param request - GetTransferableNodesRequest
     *
     * @returns GetTransferableNodesResponse
     *
     * @param string                      $InstanceId
     * @param GetTransferableNodesRequest $request
     *
     * @return GetTransferableNodesResponse
     */
    public function getTransferableNodes($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTransferableNodesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Continue restarting the remaining edge zones of the Elasticsearch instance after the phased release is completed.
     *
     * @param request - GrayPublishRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrayPublishResponse
     *
     * @param string             $InstanceId
     * @param GrayPublishRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GrayPublishResponse
     */
    public function grayPublishWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->xRequestChangeId) {
            @$query['X-Request-ChangeId'] = $request->xRequestChangeId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GrayPublish',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/grayPublish',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GrayPublishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Continue restarting the remaining edge zones of the Elasticsearch instance after the phased release is completed.
     *
     * @param request - GrayPublishRequest
     *
     * @returns GrayPublishResponse
     *
     * @param string             $InstanceId
     * @param GrayPublishRequest $request
     *
     * @return GrayPublishResponse
     */
    public function grayPublish($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grayPublishWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Initialize AI model.
     *
     * @param request - InitModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitModelResponse
     *
     * @param string           $InstanceId
     * @param InitModelRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return InitModelResponse
     */
    public function initModelWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiKey) {
            @$body['api_key'] = $request->apiKey;
        }

        if (null !== $request->host) {
            @$body['host'] = $request->host;
        }

        if (null !== $request->httpSchema) {
            @$body['http_schema'] = $request->httpSchema;
        }

        if (null !== $request->models) {
            @$body['models'] = $request->models;
        }

        if (null !== $request->workspace) {
            @$body['workspace'] = $request->workspace;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InitModel',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/initModel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InitModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initialize AI model.
     *
     * @param request - InitModelRequest
     *
     * @returns InitModelResponse
     *
     * @param string           $InstanceId
     * @param InitModelRequest $request
     *
     * @return InitModelResponse
     */
    public function initModel($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initModelWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Calls the InitializeOperationRole operation to create a service-linked role.
     *
     * @remarks
     * > Before you use a collector to collect logs from different data sources or perform elastic scaling tasks for a cluster (applicable only to the China site), you must create a service-linked role.
     *
     * @param request - InitializeOperationRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitializeOperationRoleResponse
     *
     * @param InitializeOperationRoleRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return InitializeOperationRoleResponse
     */
    public function initializeOperationRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'InitializeOperationRole',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/user/slr',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InitializeOperationRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the InitializeOperationRole operation to create a service-linked role.
     *
     * @remarks
     * > Before you use a collector to collect logs from different data sources or perform elastic scaling tasks for a cluster (applicable only to the China site), you must create a service-linked role.
     *
     * @param request - InitializeOperationRoleRequest
     *
     * @returns InitializeOperationRoleResponse
     *
     * @param InitializeOperationRoleRequest $request
     *
     * @return InitializeOperationRoleResponse
     */
    public function initializeOperationRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initializeOperationRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * Installs the ACK Operator on a specified Container Service cluster.
     *
     * @remarks
     * > Before installing a collector on an ACK cluster, call this operation to install the Elasticsearch Operator on the target cluster.
     *
     * @param request - InstallAckOperatorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallAckOperatorResponse
     *
     * @param string                    $ClusterId
     * @param InstallAckOperatorRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return InstallAckOperatorResponse
     */
    public function installAckOperatorWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'InstallAckOperator',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ack-clusters/' . Url::percentEncode($ClusterId) . '/operator',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InstallAckOperatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs the ACK Operator on a specified Container Service cluster.
     *
     * @remarks
     * > Before installing a collector on an ACK cluster, call this operation to install the Elasticsearch Operator on the target cluster.
     *
     * @param request - InstallAckOperatorRequest
     *
     * @returns InstallAckOperatorResponse
     *
     * @param string                    $ClusterId
     * @param InstallAckOperatorRequest $request
     *
     * @return InstallAckOperatorResponse
     */
    public function installAckOperator($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installAckOperatorWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Installs preset plug-ins for Kibana. The Kibana instance must have specifications of 2 vCPUs and 4 GB of memory or higher.
     *
     * @param request - InstallKibanaSystemPluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallKibanaSystemPluginResponse
     *
     * @param string                           $InstanceId
     * @param InstallKibanaSystemPluginRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return InstallKibanaSystemPluginResponse
     */
    public function installKibanaSystemPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'InstallKibanaSystemPlugin',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/kibana-plugins/system/actions/install',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InstallKibanaSystemPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs preset plug-ins for Kibana. The Kibana instance must have specifications of 2 vCPUs and 4 GB of memory or higher.
     *
     * @param request - InstallKibanaSystemPluginRequest
     *
     * @returns InstallKibanaSystemPluginResponse
     *
     * @param string                           $InstanceId
     * @param InstallKibanaSystemPluginRequest $request
     *
     * @return InstallKibanaSystemPluginResponse
     */
    public function installKibanaSystemPlugin($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installKibanaSystemPluginWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Installs system plugins for a specified Logstash instance.
     *
     * @remarks
     * Before calling this operation, note the following:
     * The plugins to be installed must be included in the Alibaba Cloud Logstash [default system plugin list](https://help.aliyun.com/document_detail/139626.html). External open source plugins are not supported.
     *
     * @param request - InstallLogstashSystemPluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallLogstashSystemPluginResponse
     *
     * @param string                             $InstanceId
     * @param InstallLogstashSystemPluginRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return InstallLogstashSystemPluginResponse
     */
    public function installLogstashSystemPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'InstallLogstashSystemPlugin',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/plugins/system/actions/install',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InstallLogstashSystemPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs system plugins for a specified Logstash instance.
     *
     * @remarks
     * Before calling this operation, note the following:
     * The plugins to be installed must be included in the Alibaba Cloud Logstash [default system plugin list](https://help.aliyun.com/document_detail/139626.html). External open source plugins are not supported.
     *
     * @param request - InstallLogstashSystemPluginRequest
     *
     * @returns InstallLogstashSystemPluginResponse
     *
     * @param string                             $InstanceId
     * @param InstallLogstashSystemPluginRequest $request
     *
     * @return InstallLogstashSystemPluginResponse
     */
    public function installLogstashSystemPlugin($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installLogstashSystemPluginWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Installs system plug-ins on an Elasticsearch instance.
     *
     * @param request - InstallSystemPluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallSystemPluginResponse
     *
     * @param string                     $InstanceId
     * @param InstallSystemPluginRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return InstallSystemPluginResponse
     */
    public function installSystemPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'InstallSystemPlugin',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/plugins/system/actions/install',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InstallSystemPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs system plug-ins on an Elasticsearch instance.
     *
     * @param request - InstallSystemPluginRequest
     *
     * @returns InstallSystemPluginResponse
     *
     * @param string                     $InstanceId
     * @param InstallSystemPluginRequest $request
     *
     * @return InstallSystemPluginResponse
     */
    public function installSystemPlugin($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installSystemPluginWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Installs custom plugins that have been uploaded to the Elasticsearch console.
     *
     * @remarks
     * > The custom plugin installation feature is being upgraded internally and is temporarily unavailable. If you urgently need this feature, submit a ticket to contact us.
     *
     * @param request - InstallUserPluginsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallUserPluginsResponse
     *
     * @param string                    $InstanceId
     * @param InstallUserPluginsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return InstallUserPluginsResponse
     */
    public function installUserPluginsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'InstallUserPlugins',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/plugins/user/actions/install',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InstallUserPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs custom plugins that have been uploaded to the Elasticsearch console.
     *
     * @remarks
     * > The custom plugin installation feature is being upgraded internally and is temporarily unavailable. If you urgently need this feature, submit a ticket to contact us.
     *
     * @param request - InstallUserPluginsRequest
     *
     * @returns InstallUserPluginsResponse
     *
     * @param string                    $InstanceId
     * @param InstallUserPluginsRequest $request
     *
     * @return InstallUserPluginsResponse
     */
    public function installUserPlugins($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installUserPluginsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Interrupts an instance change task. This operation is valid only for instances in the Effecting state. After the interruption, the instance enters the suspended state.
     *
     * @param request - InterruptElasticsearchTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InterruptElasticsearchTaskResponse
     *
     * @param string                            $InstanceId
     * @param InterruptElasticsearchTaskRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return InterruptElasticsearchTaskResponse
     */
    public function interruptElasticsearchTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InterruptElasticsearchTask',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/interrupt',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InterruptElasticsearchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Interrupts an instance change task. This operation is valid only for instances in the Effecting state. After the interruption, the instance enters the suspended state.
     *
     * @param request - InterruptElasticsearchTaskRequest
     *
     * @returns InterruptElasticsearchTaskResponse
     *
     * @param string                            $InstanceId
     * @param InterruptElasticsearchTaskRequest $request
     *
     * @return InterruptElasticsearchTaskResponse
     */
    public function interruptElasticsearchTask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->interruptElasticsearchTaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * After the interruption, the instance enters the suspended state.
     *
     * @param request - InterruptLogstashTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InterruptLogstashTaskResponse
     *
     * @param string                       $InstanceId
     * @param InterruptLogstashTaskRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return InterruptLogstashTaskResponse
     */
    public function interruptLogstashTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InterruptLogstashTask',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/actions/interrupt',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InterruptLogstashTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After the interruption, the instance enters the suspended state.
     *
     * @param request - InterruptLogstashTaskRequest
     *
     * @returns InterruptLogstashTaskResponse
     *
     * @param string                       $InstanceId
     * @param InterruptLogstashTaskRequest $request
     *
     * @return InterruptLogstashTaskResponse
     */
    public function interruptLogstashTask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->interruptLogstashTaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of Container Service for Kubernetes (ACK) clusters.
     *
     * @param request - ListAckClustersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAckClustersResponse
     *
     * @param ListAckClustersRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListAckClustersResponse
     */
    public function listAckClustersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->vpcId) {
            @$query['vpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAckClusters',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ack-clusters',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAckClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of Container Service for Kubernetes (ACK) clusters.
     *
     * @param request - ListAckClustersRequest
     *
     * @returns ListAckClustersResponse
     *
     * @param ListAckClustersRequest $request
     *
     * @return ListAckClustersResponse
     */
    public function listAckClusters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAckClustersWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries all namespaces in a specified Container Service for Kubernetes (ACK) cluster.
     *
     * @remarks
     * This operation is deprecated and will be taken offline soon.
     *
     * @param request - ListAckNamespacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAckNamespacesResponse
     *
     * @param string                   $ClusterId
     * @param ListAckNamespacesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListAckNamespacesResponse
     */
    public function listAckNamespacesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAckNamespaces',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ack-clusters/' . Url::percentEncode($ClusterId) . '/namespaces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAckNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all namespaces in a specified Container Service for Kubernetes (ACK) cluster.
     *
     * @remarks
     * This operation is deprecated and will be taken offline soon.
     *
     * @param request - ListAckNamespacesRequest
     *
     * @returns ListAckNamespacesResponse
     *
     * @param string                   $ClusterId
     * @param ListAckNamespacesRequest $request
     *
     * @return ListAckNamespacesResponse
     */
    public function listAckNamespaces($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAckNamespacesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * Release notes Release notes details.
     *
     * @param request - ListActionRecordsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListActionRecordsResponse
     *
     * @param string                   $InstanceId
     * @param ListActionRecordsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListActionRecordsResponse
     */
    public function listActionRecordsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionNames) {
            @$query['actionNames'] = $request->actionNames;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->filter) {
            @$query['filter'] = $request->filter;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->requestId) {
            @$query['requestId'] = $request->requestId;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->userId) {
            @$query['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListActionRecords',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/action-records',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListActionRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Release notes Release notes details.
     *
     * @param request - ListActionRecordsRequest
     *
     * @returns ListActionRecordsResponse
     *
     * @param string                   $InstanceId
     * @param ListActionRecordsRequest $request
     *
     * @return ListActionRecordsResponse
     */
    public function listActionRecords($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listActionRecordsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves information about all nodes in an Elasticsearch cluster.
     *
     * @param request - ListAllNodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllNodeResponse
     *
     * @param string             $InstanceId
     * @param ListAllNodeRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListAllNodeResponse
     */
    public function listAllNodeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extended) {
            @$query['extended'] = $request->extended;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllNode',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/nodes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAllNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves information about all nodes in an Elasticsearch cluster.
     *
     * @param request - ListAllNodeRequest
     *
     * @returns ListAllNodeResponse
     *
     * @param string             $InstanceId
     * @param ListAllNodeRequest $request
     *
     * @return ListAllNodeResponse
     */
    public function listAllNode($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAllNodeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the OSS reference repositories that can be added to the current instance.
     *
     * @param request - ListAlternativeSnapshotReposRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlternativeSnapshotReposResponse
     *
     * @param string                              $InstanceId
     * @param ListAlternativeSnapshotReposRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ListAlternativeSnapshotReposResponse
     */
    public function listAlternativeSnapshotReposWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alreadySetItems) {
            @$query['alreadySetItems'] = $request->alreadySetItems;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlternativeSnapshotRepos',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/alternative-snapshot-repos',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAlternativeSnapshotReposResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the OSS reference repositories that can be added to the current instance.
     *
     * @param request - ListAlternativeSnapshotReposRequest
     *
     * @returns ListAlternativeSnapshotReposResponse
     *
     * @param string                              $InstanceId
     * @param ListAlternativeSnapshotReposRequest $request
     *
     * @return ListAlternativeSnapshotReposResponse
     */
    public function listAlternativeSnapshotRepos($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlternativeSnapshotReposWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of available Elasticsearch instances when configuring X-Pack monitoring for a Logstash instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAvailableEsInstanceIdsResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListAvailableEsInstanceIdsResponse
     */
    public function listAvailableEsInstanceIdsWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListAvailableEsInstanceIds',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/available-elasticsearch-for-centralized-management',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAvailableEsInstanceIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of available Elasticsearch instances when configuring X-Pack monitoring for a Logstash instance.
     *
     * @returns ListAvailableEsInstanceIdsResponse
     *
     * @param string $InstanceId
     *
     * @return ListAvailableEsInstanceIdsResponse
     */
    public function listAvailableEsInstanceIds($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAvailableEsInstanceIdsWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Retrieves a list of collectors.
     *
     * @param request - ListCollectorsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCollectorsResponse
     *
     * @param ListCollectorsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListCollectorsResponse
     */
    public function listCollectorsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->resId) {
            @$query['resId'] = $request->resId;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->sourceType) {
            @$query['sourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCollectors',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/collectors',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCollectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of collectors.
     *
     * @param request - ListCollectorsRequest
     *
     * @returns ListCollectorsResponse
     *
     * @param ListCollectorsRequest $request
     *
     * @return ListCollectorsResponse
     */
    public function listCollectors($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCollectorsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the list of composable templates for an Elasticsearch instance.
     *
     * @remarks
     * For more information, see [Store massive amounts of data through OpenStore](https://help.aliyun.com/document_detail/317694.html).
     *
     * @param request - ListComponentIndicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListComponentIndicesResponse
     *
     * @param string                      $InstanceId
     * @param ListComponentIndicesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListComponentIndicesResponse
     */
    public function listComponentIndicesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListComponentIndices',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/component-index',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListComponentIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of composable templates for an Elasticsearch instance.
     *
     * @remarks
     * For more information, see [Store massive amounts of data through OpenStore](https://help.aliyun.com/document_detail/317694.html).
     *
     * @param request - ListComponentIndicesRequest
     *
     * @returns ListComponentIndicesResponse
     *
     * @param string                      $InstanceId
     * @param ListComponentIndicesRequest $request
     *
     * @return ListComponentIndicesResponse
     */
    public function listComponentIndices($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComponentIndicesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of instances that have established private network peering with the current instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConnectedClustersResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListConnectedClustersResponse
     */
    public function listConnectedClustersWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListConnectedClusters',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/connected-clusters',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConnectedClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of instances that have established private network peering with the current instance.
     *
     * @returns ListConnectedClustersResponse
     *
     * @param string $InstanceId
     *
     * @return ListConnectedClustersResponse
     */
    public function listConnectedClusters($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConnectedClustersWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Retrieves the list of index data streams in an Elasticsearch cluster.
     *
     * @param request - ListDataStreamsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataStreamsResponse
     *
     * @param string                 $InstanceId
     * @param ListDataStreamsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataStreamsResponse
     */
    public function listDataStreamsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isManaged) {
            @$query['isManaged'] = $request->isManaged;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataStreams',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/data-streams',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataStreamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of index data streams in an Elasticsearch cluster.
     *
     * @param request - ListDataStreamsRequest
     *
     * @returns ListDataStreamsResponse
     *
     * @param string                 $InstanceId
     * @param ListDataStreamsRequest $request
     *
     * @return ListDataStreamsResponse
     */
    public function listDataStreams($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataStreamsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of data migration tasks between different Elasticsearch clusters.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataTasksResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDataTasksResponse
     */
    public function listDataTasksWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListDataTasks',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/data-task',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of data migration tasks between different Elasticsearch clusters.
     *
     * @returns ListDataTasksResponse
     *
     * @param string $InstanceId
     *
     * @return ListDataTasksResponse
     */
    public function listDataTasks($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataTasksWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Invokes the ListDefaultCollectorConfigurations operation to retrieve the default configuration file of a collector.
     *
     * @param request - ListDefaultCollectorConfigurationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDefaultCollectorConfigurationsResponse
     *
     * @param ListDefaultCollectorConfigurationsRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ListDefaultCollectorConfigurationsResponse
     */
    public function listDefaultCollectorConfigurationsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resType) {
            @$query['resType'] = $request->resType;
        }

        if (null !== $request->resVersion) {
            @$query['resVersion'] = $request->resVersion;
        }

        if (null !== $request->sourceType) {
            @$query['sourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDefaultCollectorConfigurations',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/beats/default-configurations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDefaultCollectorConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes the ListDefaultCollectorConfigurations operation to retrieve the default configuration file of a collector.
     *
     * @param request - ListDefaultCollectorConfigurationsRequest
     *
     * @returns ListDefaultCollectorConfigurationsResponse
     *
     * @param ListDefaultCollectorConfigurationsRequest $request
     *
     * @return ListDefaultCollectorConfigurationsResponse
     */
    public function listDefaultCollectorConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDefaultCollectorConfigurationsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of historical index templates.
     *
     * @remarks
     * For more information, see [Use OpenStore to store large volumes of data](https://help.aliyun.com/document_detail/317694.html).
     *
     * @param request - ListDeprecatedTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeprecatedTemplatesResponse
     *
     * @param string                         $InstanceId
     * @param ListDeprecatedTemplatesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDeprecatedTemplatesResponse
     */
    public function listDeprecatedTemplatesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeprecatedTemplates',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/deprecated-templates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDeprecatedTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of historical index templates.
     *
     * @remarks
     * For more information, see [Use OpenStore to store large volumes of data](https://help.aliyun.com/document_detail/317694.html).
     *
     * @param request - ListDeprecatedTemplatesRequest
     *
     * @returns ListDeprecatedTemplatesResponse
     *
     * @param string                         $InstanceId
     * @param ListDeprecatedTemplatesRequest $request
     *
     * @return ListDeprecatedTemplatesResponse
     */
    public function listDeprecatedTemplates($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeprecatedTemplatesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the diagnostic indexes from the intelligent O&M module for a specified instance.
     *
     * @param request - ListDiagnoseIndicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDiagnoseIndicesResponse
     *
     * @param string                     $InstanceId
     * @param ListDiagnoseIndicesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListDiagnoseIndicesResponse
     */
    public function listDiagnoseIndicesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDiagnoseIndices',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/diagnosis/instances/' . Url::percentEncode($InstanceId) . '/indices',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDiagnoseIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the diagnostic indexes from the intelligent O&M module for a specified instance.
     *
     * @param request - ListDiagnoseIndicesRequest
     *
     * @returns ListDiagnoseIndicesResponse
     *
     * @param string                     $InstanceId
     * @param ListDiagnoseIndicesRequest $request
     *
     * @return ListDiagnoseIndicesResponse
     */
    public function listDiagnoseIndices($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDiagnoseIndicesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Calls ListDiagnoseReport to retrieve historical reports of intelligent O&M.
     *
     * @param request - ListDiagnoseReportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDiagnoseReportResponse
     *
     * @param string                    $InstanceId
     * @param ListDiagnoseReportRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListDiagnoseReportResponse
     */
    public function listDiagnoseReportWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->detail) {
            @$query['detail'] = $request->detail;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['lang'] = $request->lang;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->trigger) {
            @$query['trigger'] = $request->trigger;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDiagnoseReport',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/diagnosis/instances/' . Url::percentEncode($InstanceId) . '/reports',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDiagnoseReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls ListDiagnoseReport to retrieve historical reports of intelligent O&M.
     *
     * @param request - ListDiagnoseReportRequest
     *
     * @returns ListDiagnoseReportResponse
     *
     * @param string                    $InstanceId
     * @param ListDiagnoseReportRequest $request
     *
     * @return ListDiagnoseReportResponse
     */
    public function listDiagnoseReport($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDiagnoseReportWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves all IDs of Intelligent O&M Center historical reports.
     *
     * @param request - ListDiagnoseReportIdsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDiagnoseReportIdsResponse
     *
     * @param string                       $InstanceId
     * @param ListDiagnoseReportIdsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListDiagnoseReportIdsResponse
     */
    public function listDiagnoseReportIdsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['lang'] = $request->lang;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->trigger) {
            @$query['trigger'] = $request->trigger;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDiagnoseReportIds',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/diagnosis/instances/' . Url::percentEncode($InstanceId) . '/report-ids',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDiagnoseReportIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves all IDs of Intelligent O&M Center historical reports.
     *
     * @param request - ListDiagnoseReportIdsRequest
     *
     * @returns ListDiagnoseReportIdsResponse
     *
     * @param string                       $InstanceId
     * @param ListDiagnoseReportIdsRequest $request
     *
     * @return ListDiagnoseReportIdsResponse
     */
    public function listDiagnoseReportIds($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDiagnoseReportIdsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Lists the intelligent diagnostic items for an Elasticsearch instance.
     *
     * @param request - ListDiagnosisItemsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDiagnosisItemsResponse
     *
     * @param ListDiagnosisItemsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListDiagnosisItemsResponse
     */
    public function listDiagnosisItemsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDiagnosisItems',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/diagnosis/items',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDiagnosisItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the intelligent diagnostic items for an Elasticsearch instance.
     *
     * @param request - ListDiagnosisItemsRequest
     *
     * @returns ListDiagnosisItemsResponse
     *
     * @param ListDiagnosisItemsRequest $request
     *
     * @return ListDiagnosisItemsResponse
     */
    public function listDiagnosisItems($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDiagnosisItemsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the information of a specified dictionary.
     *
     * @param request - ListDictInformationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDictInformationResponse
     *
     * @param string                     $InstanceId
     * @param ListDictInformationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListDictInformationResponse
     */
    public function listDictInformationWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->analyzerType) {
            @$query['analyzerType'] = $request->analyzerType;
        }

        if (null !== $request->bucketName) {
            @$query['bucketName'] = $request->bucketName;
        }

        if (null !== $request->key) {
            @$query['key'] = $request->key;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDictInformation',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/dict/_info',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDictInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of a specified dictionary.
     *
     * @param request - ListDictInformationRequest
     *
     * @returns ListDictInformationResponse
     *
     * @param string                     $InstanceId
     * @param ListDictInformationRequest $request
     *
     * @return ListDictInformationResponse
     */
    public function listDictInformation($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDictInformationWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of the dictionary list for a specified type.
     *
     * @param request - ListDictsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDictsResponse
     *
     * @param string           $InstanceId
     * @param ListDictsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListDictsResponse
     */
    public function listDictsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->analyzerType) {
            @$query['analyzerType'] = $request->analyzerType;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDicts',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/dicts',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDictsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the dictionary list for a specified type.
     *
     * @param request - ListDictsRequest
     *
     * @returns ListDictsResponse
     *
     * @param string           $InstanceId
     * @param ListDictsRequest $request
     *
     * @return ListDictsResponse
     */
    public function listDicts($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDictsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of ECS instances under the current user\\"s VPC and vSwitch.
     *
     * @remarks
     * >Notice:  Before calling this operation, create the AliyunElasticsearchAccessingOOSRole and AliyunOOSAccessingECS4ESRole service-linked roles. These roles allow the Elasticsearch service account to obtain ECS access permissions of the Alibaba Cloud account. For more information, see [Collect ECS service logs](https://help.aliyun.com/document_detail/146446.html).
     * .
     *
     * @param request - ListEcsInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEcsInstancesResponse
     *
     * @param ListEcsInstancesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListEcsInstancesResponse
     */
    public function listEcsInstancesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ecsInstanceIds) {
            @$query['ecsInstanceIds'] = $request->ecsInstanceIds;
        }

        if (null !== $request->ecsInstanceName) {
            @$query['ecsInstanceName'] = $request->ecsInstanceName;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->tags) {
            @$query['tags'] = $request->tags;
        }

        if (null !== $request->vpcId) {
            @$query['vpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEcsInstances',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/ecs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEcsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of ECS instances under the current user\\"s VPC and vSwitch.
     *
     * @remarks
     * >Notice:  Before calling this operation, create the AliyunElasticsearchAccessingOOSRole and AliyunOOSAccessingECS4ESRole service-linked roles. These roles allow the Elasticsearch service account to obtain ECS access permissions of the Alibaba Cloud account. For more information, see [Collect ECS service logs](https://help.aliyun.com/document_detail/146446.html).
     * .
     *
     * @param request - ListEcsInstancesRequest
     *
     * @returns ListEcsInstancesResponse
     *
     * @param ListEcsInstancesRequest $request
     *
     * @return ListEcsInstancesResponse
     */
    public function listEcsInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEcsInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtain Event List.
     *
     * @param request - ListEventRecordsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEventRecordsResponse
     *
     * @param string                  $eventType
     * @param ListEventRecordsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListEventRecordsResponse
     */
    public function listEventRecordsWithOptions($eventType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->termContent) {
            @$query['termContent'] = $request->termContent;
        }

        if (null !== $request->termType) {
            @$query['termType'] = $request->termType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEventRecords',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/' . Url::percentEncode($eventType) . '/listEventRecords',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEventRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain Event List.
     *
     * @param request - ListEventRecordsRequest
     *
     * @returns ListEventRecordsResponse
     *
     * @param string                  $eventType
     * @param ListEventRecordsRequest $request
     *
     * @return ListEventRecordsResponse
     */
    public function listEventRecords($eventType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEventRecordsWithOptions($eventType, $request, $headers, $runtime);
    }

    /**
     * Retrieves the extension file configuration of a Logstash instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExtendfilesResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListExtendfilesResponse
     */
    public function listExtendfilesWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListExtendfiles',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/extendfiles',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExtendfilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the extension file configuration of a Logstash instance.
     *
     * @returns ListExtendfilesResponse
     *
     * @param string $InstanceId
     *
     * @return ListExtendfilesResponse
     */
    public function listExtendfiles($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExtendfilesWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Queries the list of index lifecycle policies that have been created for a cluster.
     *
     * @param request - ListILMPoliciesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListILMPoliciesResponse
     *
     * @param string                 $InstanceId
     * @param ListILMPoliciesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListILMPoliciesResponse
     */
    public function listILMPoliciesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['policyName'] = $request->policyName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListILMPolicies',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/ilm-policies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListILMPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of index lifecycle policies that have been created for a cluster.
     *
     * @param request - ListILMPoliciesRequest
     *
     * @returns ListILMPoliciesResponse
     *
     * @param string                 $InstanceId
     * @param ListILMPoliciesRequest $request
     *
     * @return ListILMPoliciesResponse
     */
    public function listILMPolicies($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listILMPoliciesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of index templates.
     *
     * @param request - ListIndexTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIndexTemplatesResponse
     *
     * @param string                    $InstanceId
     * @param ListIndexTemplatesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListIndexTemplatesResponse
     */
    public function listIndexTemplatesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->indexTemplate) {
            @$query['indexTemplate'] = $request->indexTemplate;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIndexTemplates',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/index-templates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIndexTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of index templates.
     *
     * @param request - ListIndexTemplatesRequest
     *
     * @returns ListIndexTemplatesResponse
     *
     * @param string                    $InstanceId
     * @param ListIndexTemplatesRequest $request
     *
     * @return ListIndexTemplatesResponse
     */
    public function listIndexTemplates($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndexTemplatesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the information about Elasticsearch instances.
     *
     * @param request - ListInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceResponse
     *
     * @param ListInstanceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->esVersion) {
            @$query['esVersion'] = $request->esVersion;
        }

        if (null !== $request->instanceCategory) {
            @$query['instanceCategory'] = $request->instanceCategory;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->paymentType) {
            @$query['paymentType'] = $request->paymentType;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$query['tags'] = $request->tags;
        }

        if (null !== $request->vpcId) {
            @$query['vpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['zoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstance',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about Elasticsearch instances.
     *
     * @param request - ListInstanceRequest
     *
     * @returns ListInstanceResponse
     *
     * @param ListInstanceRequest $request
     *
     * @return ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of hardware O&M events triggered by an Elasticsearch cluster.
     *
     * @param tmpReq - ListInstanceHistoryEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceHistoryEventsResponse
     *
     * @param ListInstanceHistoryEventsRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListInstanceHistoryEventsResponse
     */
    public function listInstanceHistoryEventsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListInstanceHistoryEventsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->eventCycleStatus) {
            $request->eventCycleStatusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventCycleStatus, 'eventCycleStatus', 'simple');
        }

        if (null !== $tmpReq->eventLevel) {
            $request->eventLevelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventLevel, 'eventLevel', 'simple');
        }

        if (null !== $tmpReq->eventType) {
            $request->eventTypeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventType, 'eventType', 'simple');
        }

        $query = [];
        if (null !== $request->eventCreateEndTime) {
            @$query['eventCreateEndTime'] = $request->eventCreateEndTime;
        }

        if (null !== $request->eventCreateStartTime) {
            @$query['eventCreateStartTime'] = $request->eventCreateStartTime;
        }

        if (null !== $request->eventCycleStatusShrink) {
            @$query['eventCycleStatus'] = $request->eventCycleStatusShrink;
        }

        if (null !== $request->eventExecuteEndTime) {
            @$query['eventExecuteEndTime'] = $request->eventExecuteEndTime;
        }

        if (null !== $request->eventExecuteStartTime) {
            @$query['eventExecuteStartTime'] = $request->eventExecuteStartTime;
        }

        if (null !== $request->eventFinashEndTime) {
            @$query['eventFinashEndTime'] = $request->eventFinashEndTime;
        }

        if (null !== $request->eventFinashStartTime) {
            @$query['eventFinashStartTime'] = $request->eventFinashStartTime;
        }

        if (null !== $request->eventLevelShrink) {
            @$query['eventLevel'] = $request->eventLevelShrink;
        }

        if (null !== $request->eventTypeShrink) {
            @$query['eventType'] = $request->eventTypeShrink;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeIP) {
            @$query['nodeIP'] = $request->nodeIP;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'ListInstanceHistoryEvents',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/events',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceHistoryEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of hardware O&M events triggered by an Elasticsearch cluster.
     *
     * @param request - ListInstanceHistoryEventsRequest
     *
     * @returns ListInstanceHistoryEventsResponse
     *
     * @param ListInstanceHistoryEventsRequest $request
     *
     * @return ListInstanceHistoryEventsResponse
     */
    public function listInstanceHistoryEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceHistoryEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * Filters system indexes from the index list of a cluster.
     *
     * @remarks
     * The ListInstanceIndices operation is applicable only to Elasticsearch instances that have the indexing service enabled. Query index information by using the Elasticsearch API. For more information, see [cat indices API
     * ](https://www.elastic.co/guide/en/elasticsearch/reference/current/cat-indices.html).
     *
     * @param request - ListInstanceIndicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceIndicesResponse
     *
     * @param string                     $InstanceId
     * @param ListInstanceIndicesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListInstanceIndicesResponse
     */
    public function listInstanceIndicesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['all'] = $request->all;
        }

        if (null !== $request->isManaged) {
            @$query['isManaged'] = $request->isManaged;
        }

        if (null !== $request->isOpenstore) {
            @$query['isOpenstore'] = $request->isOpenstore;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceIndices',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/indices',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Filters system indexes from the index list of a cluster.
     *
     * @remarks
     * The ListInstanceIndices operation is applicable only to Elasticsearch instances that have the indexing service enabled. Query index information by using the Elasticsearch API. For more information, see [cat indices API
     * ](https://www.elastic.co/guide/en/elasticsearch/reference/current/cat-indices.html).
     *
     * @param request - ListInstanceIndicesRequest
     *
     * @returns ListInstanceIndicesResponse
     *
     * @param string                     $InstanceId
     * @param ListInstanceIndicesRequest $request
     *
     * @return ListInstanceIndicesResponse
     */
    public function listInstanceIndices($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceIndicesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of plugins installed on the Kibana node of an Elasticsearch instance.
     *
     * @param request - ListKibanaPluginsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKibanaPluginsResponse
     *
     * @param string                   $InstanceId
     * @param ListKibanaPluginsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListKibanaPluginsResponse
     */
    public function listKibanaPluginsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKibanaPlugins',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/kibana-plugins',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListKibanaPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of plugins installed on the Kibana node of an Elasticsearch instance.
     *
     * @param request - ListKibanaPluginsRequest
     *
     * @returns ListKibanaPluginsResponse
     *
     * @param string                   $InstanceId
     * @param ListKibanaPluginsRequest $request
     *
     * @return ListKibanaPluginsResponse
     */
    public function listKibanaPlugins($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKibanaPluginsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of the Kibana private network connection.
     *
     * @remarks
     * This API operation supports only cloud-native instances.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKibanaPvlNetworkResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListKibanaPvlNetworkResponse
     */
    public function listKibanaPvlNetworkWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListKibanaPvlNetwork',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/get-kibana-private',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListKibanaPvlNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the Kibana private network connection.
     *
     * @remarks
     * This API operation supports only cloud-native instances.
     *
     * @returns ListKibanaPvlNetworkResponse
     *
     * @param string $InstanceId
     *
     * @return ListKibanaPvlNetworkResponse
     */
    public function listKibanaPvlNetwork($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKibanaPvlNetworkWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Displays the details of all or specified Logstash instances in a list.
     *
     * @param request - ListLogstashRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLogstashResponse
     *
     * @param ListLogstashRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListLogstashResponse
     */
    public function listLogstashWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->tags) {
            @$query['tags'] = $request->tags;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLogstash',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Displays the details of all or specified Logstash instances in a list.
     *
     * @param request - ListLogstashRequest
     *
     * @returns ListLogstashResponse
     *
     * @param ListLogstashRequest $request
     *
     * @return ListLogstashResponse
     */
    public function listLogstash($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogstashWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the logs of a Logstash instance.
     *
     * @param request - ListLogstashLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLogstashLogResponse
     *
     * @param string                 $InstanceId
     * @param ListLogstashLogRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListLogstashLogResponse
     */
    public function listLogstashLogWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLogstashLog',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/search-log',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLogstashLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logs of a Logstash instance.
     *
     * @param request - ListLogstashLogRequest
     *
     * @returns ListLogstashLogResponse
     *
     * @param string                 $InstanceId
     * @param ListLogstashLogRequest $request
     *
     * @return ListLogstashLogResponse
     */
    public function listLogstashLog($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogstashLogWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Calls ListLogstashPlugins to retrieve detailed information about all or specified plugins.
     *
     * @param request - ListLogstashPluginsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLogstashPluginsResponse
     *
     * @param string                     $InstanceId
     * @param ListLogstashPluginsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListLogstashPluginsResponse
     */
    public function listLogstashPluginsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLogstashPlugins',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/plugins',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLogstashPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls ListLogstashPlugins to retrieve detailed information about all or specified plugins.
     *
     * @param request - ListLogstashPluginsRequest
     *
     * @returns ListLogstashPluginsResponse
     *
     * @param string                     $InstanceId
     * @param ListLogstashPluginsRequest $request
     *
     * @return ListLogstashPluginsResponse
     */
    public function listLogstashPlugins($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogstashPluginsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Historical report list of intelligent O&M.
     *
     * @param request - ListNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodesResponse
     *
     * @param string           $ResId
     * @param ListNodesRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($ResId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ecsInstanceIds) {
            @$query['ecsInstanceIds'] = $request->ecsInstanceIds;
        }

        if (null !== $request->ecsInstanceName) {
            @$query['ecsInstanceName'] = $request->ecsInstanceName;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->tags) {
            @$query['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNodes',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/collectors/' . Url::percentEncode($ResId) . '/nodes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Historical report list of intelligent O&M.
     *
     * @param request - ListNodesRequest
     *
     * @returns ListNodesResponse
     *
     * @param string           $ResId
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodes($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNodesWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the pipeline list of a Logstash instance.
     *
     * @param request - ListPipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPipelineResponse
     *
     * @param string              $InstanceId
     * @param ListPipelineRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListPipelineResponse
     */
    public function listPipelineWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pipelineId) {
            @$query['pipelineId'] = $request->pipelineId;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPipeline',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/pipelines',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the pipeline list of a Logstash instance.
     *
     * @param request - ListPipelineRequest
     *
     * @returns ListPipelineResponse
     *
     * @param string              $InstanceId
     * @param ListPipelineRequest $request
     *
     * @return ListPipelineResponse
     */
    public function listPipeline($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of pipeline IDs for a Logstash instance.
     *
     * @remarks
     * > Pipeline management is divided into configuration file management and Kibana pipeline management. Kibana pipeline management is not available in the console for some regions.
     *
     * @param request - ListPipelineIdsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPipelineIdsResponse
     *
     * @param string                 $InstanceId
     * @param ListPipelineIdsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListPipelineIdsResponse
     */
    public function listPipelineIdsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'ListPipelineIds',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/pipeline-ids',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPipelineIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of pipeline IDs for a Logstash instance.
     *
     * @remarks
     * > Pipeline management is divided into configuration file management and Kibana pipeline management. Kibana pipeline management is not available in the console for some regions.
     *
     * @param request - ListPipelineIdsRequest
     *
     * @returns ListPipelineIdsResponse
     *
     * @param string                 $InstanceId
     * @param ListPipelineIdsRequest $request
     *
     * @return ListPipelineIdsResponse
     */
    public function listPipelineIds($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineIdsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the plugin list of a specified Alibaba Cloud Elasticsearch instance.
     *
     * @param request - ListPluginsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPluginsResponse
     *
     * @param string             $InstanceId
     * @param ListPluginsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListPluginsResponse
     */
    public function listPluginsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->source) {
            @$query['source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPlugins',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/plugins',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the plugin list of a specified Alibaba Cloud Elasticsearch instance.
     *
     * @param request - ListPluginsRequest
     *
     * @returns ListPluginsResponse
     *
     * @param string             $InstanceId
     * @param ListPluginsRequest $request
     *
     * @return ListPluginsResponse
     */
    public function listPlugins($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Queries logs of different types for an Elasticsearch instance.
     *
     * @param request - ListSearchLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSearchLogResponse
     *
     * @param string               $InstanceId
     * @param ListSearchLogRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListSearchLogResponse
     */
    public function listSearchLogWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['beginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSearchLog',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/search-log',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSearchLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries logs of different types for an Elasticsearch instance.
     *
     * @param request - ListSearchLogRequest
     *
     * @returns ListSearchLogResponse
     *
     * @param string               $InstanceId
     * @param ListSearchLogRequest $request
     *
     * @return ListSearchLogResponse
     */
    public function listSearchLog($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSearchLogWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the data progress list of ongoing and completed shard recoveries. By default, only ongoing shard recovery information is returned.
     *
     * @remarks
     * > Shard recovery is the process of synchronizing data from a primary shard to a replica shard. After recovery is complete, the replica shard becomes available for search.
     *
     * @param request - ListShardRecoveriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListShardRecoveriesResponse
     *
     * @param string                     $InstanceId
     * @param ListShardRecoveriesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListShardRecoveriesResponse
     */
    public function listShardRecoveriesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activeOnly) {
            @$query['activeOnly'] = $request->activeOnly;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListShardRecoveries',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/cat-recovery',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListShardRecoveriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the data progress list of ongoing and completed shard recoveries. By default, only ongoing shard recovery information is returned.
     *
     * @remarks
     * > Shard recovery is the process of synchronizing data from a primary shard to a replica shard. After recovery is complete, the replica shard becomes available for search.
     *
     * @param request - ListShardRecoveriesRequest
     *
     * @returns ListShardRecoveriesResponse
     *
     * @param string                     $InstanceId
     * @param ListShardRecoveriesRequest $request
     *
     * @return ListShardRecoveriesResponse
     */
    public function listShardRecoveries($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listShardRecoveriesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of cross-cluster OSS repository settings for the current instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSnapshotReposByInstanceIdResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSnapshotReposByInstanceIdResponse
     */
    public function listSnapshotReposByInstanceIdWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListSnapshotReposByInstanceId',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/snapshot-repos',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSnapshotReposByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of cross-cluster OSS repository settings for the current instance.
     *
     * @returns ListSnapshotReposByInstanceIdResponse
     *
     * @param string $InstanceId
     *
     * @return ListSnapshotReposByInstanceIdResponse
     */
    public function listSnapshotReposByInstanceId($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSnapshotReposByInstanceIdWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * Statistics of management event records.
     *
     * @param request - ListStatsEventRecordsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStatsEventRecordsResponse
     *
     * @param ListStatsEventRecordsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListStatsEventRecordsResponse
     */
    public function listStatsEventRecordsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventType) {
            @$query['eventType'] = $request->eventType;
        }

        if (null !== $request->level) {
            @$query['level'] = $request->level;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStatsEventRecords',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/event/statsEventRecords',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListStatsEventRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Statistics of management event records.
     *
     * @param request - ListStatsEventRecordsRequest
     *
     * @returns ListStatsEventRecordsResponse
     *
     * @param ListStatsEventRecordsRequest $request
     *
     * @return ListStatsEventRecordsResponse
     */
    public function listStatsEventRecords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStatsEventRecordsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the relationships between all instances and tags.
     *
     * @param request - ListTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/tags',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the relationships between all instances and tags.
     *
     * @param request - ListTagResourcesRequest
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
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries all labels created by the user in the current region.
     *
     * @param request - ListTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagsResponse
     *
     * @param ListTagsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
     */
    public function listTagsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTags',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/tags/all-tags',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all labels created by the user in the current region.
     *
     * @param request - ListTagsRequest
     *
     * @returns ListTagsResponse
     *
     * @param ListTagsRequest $request
     *
     * @return ListTagsResponse
     */
    public function listTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * Custom plugin list.
     *
     * @param request - ListUserPluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserPluginResponse
     *
     * @param string                $instanceId
     * @param ListUserPluginRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListUserPluginResponse
     */
    public function listUserPluginWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserPlugin',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($instanceId) . '/userPlugins',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUserPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Custom plugin list.
     *
     * @param request - ListUserPluginRequest
     *
     * @returns ListUserPluginResponse
     *
     * @param string                $instanceId
     * @param ListUserPluginRequest $request
     *
     * @return ListUserPluginResponse
     */
    public function listUserPlugin($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserPluginWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the status of endpoints in the VPC of a service account.
     *
     * @param request - ListVpcEndpointsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpcEndpointsResponse
     *
     * @param string                  $InstanceId
     * @param ListVpcEndpointsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListVpcEndpointsResponse
     */
    public function listVpcEndpointsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVpcEndpoints',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/vpc-endpoints',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListVpcEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of endpoints in the VPC of a service account.
     *
     * @param request - ListVpcEndpointsRequest
     *
     * @returns ListVpcEndpointsResponse
     *
     * @param string                  $InstanceId
     * @param ListVpcEndpointsRequest $request
     *
     * @return ListVpcEndpointsResponse
     */
    public function listVpcEndpoints($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVpcEndpointsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Migrates nodes in a specified zone to a destination zone.
     *
     * @remarks
     * When you upgrade the specifications of an instance and encounter insufficient inventory in the current zone, you can resolve this issue by migrating zone nodes. Before calling this operation, make sure that:
     * - Your account has a zone with sufficient resources.
     *    After migrating nodes of the current specifications to another zone, you must manually [upgrade the cluster](https://help.aliyun.com/document_detail/96650.html). The cluster is not upgraded during the migration. Therefore, select a zone with sufficient resources to avoid cluster upgrade failures. Select a zone with a later alphabetical order first. For example, between ap-southeast-1e and ap-southeast-1h, select ap-southeast-1h first.
     * - The cluster is in a healthy state.
     *    You can run the `GET _cat/health?v` command to check the cluster health status.
     *
     * @param request - MigrateToOtherZoneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MigrateToOtherZoneResponse
     *
     * @param string                    $InstanceId
     * @param MigrateToOtherZoneRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return MigrateToOtherZoneResponse
     */
    public function migrateToOtherZoneWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'MigrateToOtherZone',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/migrate-zones',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MigrateToOtherZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Migrates nodes in a specified zone to a destination zone.
     *
     * @remarks
     * When you upgrade the specifications of an instance and encounter insufficient inventory in the current zone, you can resolve this issue by migrating zone nodes. Before calling this operation, make sure that:
     * - Your account has a zone with sufficient resources.
     *    After migrating nodes of the current specifications to another zone, you must manually [upgrade the cluster](https://help.aliyun.com/document_detail/96650.html). The cluster is not upgraded during the migration. Therefore, select a zone with sufficient resources to avoid cluster upgrade failures. Select a zone with a later alphabetical order first. For example, between ap-southeast-1e and ap-southeast-1h, select ap-southeast-1h first.
     * - The cluster is in a healthy state.
     *    You can run the `GET _cat/health?v` command to check the cluster health status.
     *
     * @param request - MigrateToOtherZoneRequest
     *
     * @returns MigrateToOtherZoneResponse
     *
     * @param string                    $InstanceId
     * @param MigrateToOtherZoneRequest $request
     *
     * @return MigrateToOtherZoneResponse
     */
    public function migrateToOtherZone($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->migrateToOtherZoneWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the ECS instances on which a collector is installed.
     *
     * @param request - ModifyDeployMachineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDeployMachineResponse
     *
     * @param string                     $ResId
     * @param ModifyDeployMachineRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDeployMachineResponse
     */
    public function modifyDeployMachineWithOptions($ResId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'ModifyDeployMachine',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/collectors/' . Url::percentEncode($ResId) . '/actions/modify-deploy-machines',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the ECS instances on which a collector is installed.
     *
     * @param request - ModifyDeployMachineRequest
     *
     * @returns ModifyDeployMachineResponse
     *
     * @param string                     $ResId
     * @param ModifyDeployMachineRequest $request
     *
     * @return ModifyDeployMachineResponse
     */
    public function modifyDeployMachine($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDeployMachineWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * Updates the elastic scaling rules of a cluster.
     *
     * @param request - ModifyElastictaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyElastictaskResponse
     *
     * @param string                   $InstanceId
     * @param ModifyElastictaskRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyElastictaskResponse
     */
    public function modifyElastictaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'ModifyElastictask',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/elastic-task',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyElastictaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the elastic scaling rules of a cluster.
     *
     * @param request - ModifyElastictaskRequest
     *
     * @returns ModifyElastictaskResponse
     *
     * @param string                   $InstanceId
     * @param ModifyElastictaskRequest $request
     *
     * @return ModifyElastictaskResponse
     */
    public function modifyElastictask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyElastictaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies and enables the maintenance window for an instance.
     *
     * @remarks
     * Before calling this operation, note the following:
     * - Before the scheduled maintenance, Alibaba Cloud sends SMS messages and emails to the contacts configured in your Alibaba Cloud account. Check your messages promptly.
     * - On the day of instance maintenance, to ensure stability throughout the maintenance process, the instance enters the Effective state before the maintenance window begins. While the instance is in this state, access to the cluster and query operations such as performance monitoring are not affected. However, cluster change operations such as cluster upgrades and restarts are temporarily unavailable.
     * - During the maintenance window, transient disconnections may occur. Ensure that your application has a reconnection mechanism.
     *
     * @param request - ModifyInstanceMaintainTimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceMaintainTimeResponse
     *
     * @param string                            $InstanceId
     * @param ModifyInstanceMaintainTimeRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyInstanceMaintainTimeResponse
     */
    public function modifyInstanceMaintainTimeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceMaintainTime',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/modify-maintaintime',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceMaintainTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies and enables the maintenance window for an instance.
     *
     * @remarks
     * Before calling this operation, note the following:
     * - Before the scheduled maintenance, Alibaba Cloud sends SMS messages and emails to the contacts configured in your Alibaba Cloud account. Check your messages promptly.
     * - On the day of instance maintenance, to ensure stability throughout the maintenance process, the instance enters the Effective state before the maintenance window begins. While the instance is in this state, access to the cluster and query operations such as performance monitoring are not affected. However, cluster change operations such as cluster upgrades and restarts are temporarily unavailable.
     * - During the maintenance window, transient disconnections may occur. Ensure that your application has a reconnection mechanism.
     *
     * @param request - ModifyInstanceMaintainTimeRequest
     *
     * @returns ModifyInstanceMaintainTimeResponse
     *
     * @param string                            $InstanceId
     * @param ModifyInstanceMaintainTimeRequest $request
     *
     * @return ModifyInstanceMaintainTimeResponse
     */
    public function modifyInstanceMaintainTime($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyInstanceMaintainTimeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * For O&M events in the Event Center, you can specify a restart event, and the system will restart the specified edge zone of the relevant instance at the scheduled time.
     *
     * @param request - ModifyScheduleExecuteTimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyScheduleExecuteTimeResponse
     *
     * @param string                           $instanceId
     * @param ModifyScheduleExecuteTimeRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyScheduleExecuteTimeResponse
     */
    public function modifyScheduleExecuteTimeWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventId) {
            @$query['eventId'] = $request->eventId;
        }

        if (null !== $request->scheduleExecuteTime) {
            @$query['scheduleExecuteTime'] = $request->scheduleExecuteTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyScheduleExecuteTime',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/event/' . Url::percentEncode($instanceId) . '/actions/modify-execute-time',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyScheduleExecuteTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For O&M events in the Event Center, you can specify a restart event, and the system will restart the specified edge zone of the relevant instance at the scheduled time.
     *
     * @param request - ModifyScheduleExecuteTimeRequest
     *
     * @returns ModifyScheduleExecuteTimeResponse
     *
     * @param string                           $instanceId
     * @param ModifyScheduleExecuteTimeRequest $request
     *
     * @return ModifyScheduleExecuteTimeResponse
     */
    public function modifyScheduleExecuteTime($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyScheduleExecuteTimeWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Calls ModifyWhiteIps to update the access whitelist of a specified instance.
     *
     * @remarks
     * ## Before you begin
     * - You cannot update information for an instance whose instance status is activating, invalid, or freeze (inactive).
     * - You can update the whitelist in two ways: IP whitelist list and IP whitelist group. The two methods cannot be used at the same time. In addition to InstanceId and clientToken, the two methods support different parameters:
     *     - IP whitelist list: whiteIpList, nodeType, networkType
     *     - IP whitelist group: modifyMode, whiteIpGroup
     * - The public network access whitelist does not support private network IP addresses, and the internal-facing whitelist does not support public IP addresses.
     *
     * @param request - ModifyWhiteIpsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyWhiteIpsResponse
     *
     * @param string                $InstanceId
     * @param ModifyWhiteIpsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyWhiteIpsResponse
     */
    public function modifyWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->modifyMode) {
            @$body['modifyMode'] = $request->modifyMode;
        }

        if (null !== $request->networkType) {
            @$body['networkType'] = $request->networkType;
        }

        if (null !== $request->nodeType) {
            @$body['nodeType'] = $request->nodeType;
        }

        if (null !== $request->whiteIpGroup) {
            @$body['whiteIpGroup'] = $request->whiteIpGroup;
        }

        if (null !== $request->whiteIpList) {
            @$body['whiteIpList'] = $request->whiteIpList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyWhiteIps',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/modify-white-ips',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls ModifyWhiteIps to update the access whitelist of a specified instance.
     *
     * @remarks
     * ## Before you begin
     * - You cannot update information for an instance whose instance status is activating, invalid, or freeze (inactive).
     * - You can update the whitelist in two ways: IP whitelist list and IP whitelist group. The two methods cannot be used at the same time. In addition to InstanceId and clientToken, the two methods support different parameters:
     *     - IP whitelist list: whiteIpList, nodeType, networkType
     *     - IP whitelist group: modifyMode, whiteIpGroup
     * - The public network access whitelist does not support private network IP addresses, and the internal-facing whitelist does not support public IP addresses.
     *
     * @param request - ModifyWhiteIpsRequest
     *
     * @returns ModifyWhiteIpsResponse
     *
     * @param string                $InstanceId
     * @param ModifyWhiteIpsRequest $request
     *
     * @return ModifyWhiteIpsResponse
     */
    public function modifyWhiteIps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the resource group to which an instance belongs.
     *
     * @param request - MoveResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveResourceGroupResponse
     *
     * @param string                   $InstanceId
     * @param MoveResourceGroupRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'MoveResourceGroup',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/resourcegroup',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the resource group to which an instance belongs.
     *
     * @param request - MoveResourceGroupRequest
     *
     * @returns MoveResourceGroupResponse
     *
     * @param string                   $InstanceId
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->moveResourceGroupWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Enables the intelligent O&M feature for an instance.
     *
     * @param request - OpenDiagnosisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenDiagnosisResponse
     *
     * @param string               $InstanceId
     * @param OpenDiagnosisRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return OpenDiagnosisResponse
     */
    public function openDiagnosisWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lang) {
            @$query['lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenDiagnosis',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/diagnosis/instances/' . Url::percentEncode($InstanceId) . '/actions/open-diagnosis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OpenDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the intelligent O&M feature for an instance.
     *
     * @param request - OpenDiagnosisRequest
     *
     * @returns OpenDiagnosisResponse
     *
     * @param string               $InstanceId
     * @param OpenDiagnosisRequest $request
     *
     * @return OpenDiagnosisResponse
     */
    public function openDiagnosis($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openDiagnosisWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Enables the HTTPS protocol. Before enabling HTTPS, make sure that you have purchased client nodes.
     *
     * @remarks
     * > - To ensure data security, enable the HTTPS protocol.
     * - Except for versions 8.5 and 7.16<props="china"><ph> and version 7.10 in some regions</ph>, make sure that you have purchased client nodes before enabling HTTPS.
     *
     * @param request - OpenHttpsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenHttpsResponse
     *
     * @param string           $InstanceId
     * @param OpenHttpsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return OpenHttpsResponse
     */
    public function openHttpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenHttps',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/open-https',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OpenHttpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the HTTPS protocol. Before enabling HTTPS, make sure that you have purchased client nodes.
     *
     * @remarks
     * > - To ensure data security, enable the HTTPS protocol.
     * - Except for versions 8.5 and 7.16<props="china"><ph> and version 7.10 in some regions</ph>, make sure that you have purchased client nodes before enabling HTTPS.
     *
     * @param request - OpenHttpsRequest
     *
     * @returns OpenHttpsResponse
     *
     * @param string           $InstanceId
     * @param OpenHttpsRequest $request
     *
     * @return OpenHttpsResponse
     */
    public function openHttps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openHttpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Upload a custom plugin to the plugin repository. After uploading, the plugin is in the pending installation status.
     *
     * @param request - PluginAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PluginAnalysisResponse
     *
     * @param string                $instanceId
     * @param PluginAnalysisRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return PluginAnalysisResponse
     */
    public function pluginAnalysisWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'PluginAnalysis',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($instanceId) . '/plugins/actions/analysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PluginAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upload a custom plugin to the plugin repository. After uploading, the plugin is in the pending installation status.
     *
     * @param request - PluginAnalysisRequest
     *
     * @returns PluginAnalysisResponse
     *
     * @param string                $instanceId
     * @param PluginAnalysisRequest $request
     *
     * @return PluginAnalysisResponse
     */
    public function pluginAnalysis($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pluginAnalysisWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Sends a test alert message by calling PostEmonTryAlarmRule.
     *
     * @remarks
     * > This API operation can be called up to 10 times per hour.
     *
     * @param request - PostEmonTryAlarmRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PostEmonTryAlarmRuleResponse
     *
     * @param string                      $ProjectId
     * @param string                      $AlarmGroupId
     * @param PostEmonTryAlarmRuleRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return PostEmonTryAlarmRuleResponse
     */
    public function postEmonTryAlarmRuleWithOptions($ProjectId, $AlarmGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->body) {
            @$query['body'] = $request->body;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PostEmonTryAlarmRule',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/emon/projects/' . Url::percentEncode($ProjectId) . '/alarm-groups/' . Url::percentEncode($AlarmGroupId) . '/alarm-rules/_test',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PostEmonTryAlarmRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a test alert message by calling PostEmonTryAlarmRule.
     *
     * @remarks
     * > This API operation can be called up to 10 times per hour.
     *
     * @param request - PostEmonTryAlarmRuleRequest
     *
     * @returns PostEmonTryAlarmRuleResponse
     *
     * @param string                      $ProjectId
     * @param string                      $AlarmGroupId
     * @param PostEmonTryAlarmRuleRequest $request
     *
     * @return PostEmonTryAlarmRuleResponse
     */
    public function postEmonTryAlarmRule($ProjectId, $AlarmGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->postEmonTryAlarmRuleWithOptions($ProjectId, $AlarmGroupId, $request, $headers, $runtime);
    }

    /**
     * Calls RecommendTemplates to retrieve recommended cluster configurations.
     *
     * @param request - RecommendTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecommendTemplatesResponse
     *
     * @param string                    $InstanceId
     * @param RecommendTemplatesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RecommendTemplatesResponse
     */
    public function recommendTemplatesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->usageScenario) {
            @$query['usageScenario'] = $request->usageScenario;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RecommendTemplates',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/recommended-templates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RecommendTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls RecommendTemplates to retrieve recommended cluster configurations.
     *
     * @param request - RecommendTemplatesRequest
     *
     * @returns RecommendTemplatesResponse
     *
     * @param string                    $InstanceId
     * @param RecommendTemplatesRequest $request
     *
     * @return RecommendTemplatesResponse
     */
    public function recommendTemplates($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recommendTemplatesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Retries the installation of a collector that failed to install during creation.
     *
     * @param request - ReinstallCollectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReinstallCollectorResponse
     *
     * @param string                    $ResId
     * @param ReinstallCollectorRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ReinstallCollectorResponse
     */
    public function reinstallCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'ReinstallCollector',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/collectors/' . Url::percentEncode($ResId) . '/actions/reinstall',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReinstallCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retries the installation of a collector that failed to install during creation.
     *
     * @param request - ReinstallCollectorRequest
     *
     * @returns ReinstallCollectorResponse
     *
     * @param string                    $ResId
     * @param ReinstallCollectorRequest $request
     *
     * @return ReinstallCollectorResponse
     */
    public function reinstallCollector($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reinstallCollectorWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * You can delete uploaded but uninstalled plugins from the plugin library.
     *
     * @param request - RemovePluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemovePluginResponse
     *
     * @param string              $instanceId
     * @param RemovePluginRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return RemovePluginResponse
     */
    public function removePluginWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RemovePlugin',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($instanceId) . '/plugins/actions/remove',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemovePluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can delete uploaded but uninstalled plugins from the plugin library.
     *
     * @param request - RemovePluginRequest
     *
     * @returns RemovePluginResponse
     *
     * @param string              $instanceId
     * @param RemovePluginRequest $request
     *
     * @return RemovePluginResponse
     */
    public function removePlugin($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removePluginWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Renews a subscription Elasticsearch instance.
     *
     * @param request - RenewInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewInstanceResponse
     *
     * @param string               $InstanceId
     * @param RenewInstanceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RenewInstance',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/renew',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a subscription Elasticsearch instance.
     *
     * @param request - RenewInstanceRequest
     *
     * @returns RenewInstanceResponse
     *
     * @param string               $InstanceId
     * @param RenewInstanceRequest $request
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renewInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Renews a specified Logstash instance.
     *
     * @param request - RenewLogstashRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewLogstashResponse
     *
     * @param string               $InstanceId
     * @param RenewLogstashRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RenewLogstashResponse
     */
    public function renewLogstashWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RenewLogstash',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/actions/renew',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RenewLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a specified Logstash instance.
     *
     * @param request - RenewLogstashRequest
     *
     * @returns RenewLogstashResponse
     *
     * @param string               $InstanceId
     * @param RenewLogstashRequest $request
     *
     * @return RenewLogstashResponse
     */
    public function renewLogstash($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renewLogstashWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Restarts a collector to perform data collection.
     *
     * @param request - RestartCollectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartCollectorResponse
     *
     * @param string                  $ResId
     * @param RestartCollectorRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RestartCollectorResponse
     */
    public function restartCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartCollector',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/collectors/' . Url::percentEncode($ResId) . '/actions/restart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts a collector to perform data collection.
     *
     * @param request - RestartCollectorRequest
     *
     * @returns RestartCollectorResponse
     *
     * @param string                  $ResId
     * @param RestartCollectorRequest $request
     *
     * @return RestartCollectorResponse
     */
    public function restartCollector($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartCollectorWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * Restarts an Elasticsearch cluster.
     *
     * @remarks
     * > After the restart, the instance enters the activating state. After the restart is complete, the instance status changes to active. Alibaba Cloud Elasticsearch supports single-node restarts. Node restarts are classified into normal restarts and blue-green restarts.
     *
     * @param request - RestartInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartInstanceResponse
     *
     * @param string                 $InstanceId
     * @param RestartInstanceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RestartInstance',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/restart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts an Elasticsearch cluster.
     *
     * @remarks
     * > After the restart, the instance enters the activating state. After the restart is complete, the instance status changes to active. Alibaba Cloud Elasticsearch supports single-node restarts. Node restarts are classified into normal restarts and blue-green restarts.
     *
     * @param request - RestartInstanceRequest
     *
     * @returns RestartInstanceResponse
     *
     * @param string                 $InstanceId
     * @param RestartInstanceRequest $request
     *
     * @return RestartInstanceResponse
     */
    public function restartInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Restarts a specified instance. After the restart, the instance enters the activating (activing) state.
     *
     * @param request - RestartLogstashRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartLogstashResponse
     *
     * @param string                 $InstanceId
     * @param RestartLogstashRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RestartLogstashResponse
     */
    public function restartLogstashWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        $body = [];
        if (null !== $request->batchCount) {
            @$body['batchCount'] = $request->batchCount;
        }

        if (null !== $request->blueGreenDep) {
            @$body['blueGreenDep'] = $request->blueGreenDep;
        }

        if (null !== $request->nodeTypes) {
            @$body['nodeTypes'] = $request->nodeTypes;
        }

        if (null !== $request->nodes) {
            @$body['nodes'] = $request->nodes;
        }

        if (null !== $request->restartType) {
            @$body['restartType'] = $request->restartType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestartLogstash',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/actions/restart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts a specified instance. After the restart, the instance enters the activating (activing) state.
     *
     * @param request - RestartLogstashRequest
     *
     * @returns RestartLogstashResponse
     *
     * @param string                 $InstanceId
     * @param RestartLogstashRequest $request
     *
     * @return RestartLogstashResponse
     */
    public function restartLogstash($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartLogstashWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Resumes an interrupted change task for an instance.
     *
     * @param request - ResumeElasticsearchTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeElasticsearchTaskResponse
     *
     * @param string                         $InstanceId
     * @param ResumeElasticsearchTaskRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ResumeElasticsearchTaskResponse
     */
    public function resumeElasticsearchTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResumeElasticsearchTask',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/resume',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResumeElasticsearchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes an interrupted change task for an instance.
     *
     * @param request - ResumeElasticsearchTaskRequest
     *
     * @returns ResumeElasticsearchTaskResponse
     *
     * @param string                         $InstanceId
     * @param ResumeElasticsearchTaskRequest $request
     *
     * @return ResumeElasticsearchTaskResponse
     */
    public function resumeElasticsearchTask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeElasticsearchTaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Resumes an interrupted instance change task. After the task is resumed, the instance enters the activating state.
     *
     * @param request - ResumeLogstashTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeLogstashTaskResponse
     *
     * @param string                    $InstanceId
     * @param ResumeLogstashTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ResumeLogstashTaskResponse
     */
    public function resumeLogstashTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResumeLogstashTask',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/actions/resume',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResumeLogstashTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes an interrupted instance change task. After the task is resumed, the instance enters the activating state.
     *
     * @param request - ResumeLogstashTaskRequest
     *
     * @returns ResumeLogstashTaskResponse
     *
     * @param string                    $InstanceId
     * @param ResumeLogstashTaskRequest $request
     *
     * @return ResumeLogstashTaskResponse
     */
    public function resumeLogstashTask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeLogstashTaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a new index for a data stream or index alias.
     *
     * @param request - RolloverDataStreamRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RolloverDataStreamResponse
     *
     * @param string                    $InstanceId
     * @param string                    $DataStream
     * @param RolloverDataStreamRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RolloverDataStreamResponse
     */
    public function rolloverDataStreamWithOptions($InstanceId, $DataStream, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RolloverDataStream',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/data-streams/' . Url::percentEncode($DataStream) . '/rollover',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RolloverDataStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a new index for a data stream or index alias.
     *
     * @param request - RolloverDataStreamRequest
     *
     * @returns RolloverDataStreamResponse
     *
     * @param string                    $InstanceId
     * @param string                    $DataStream
     * @param RolloverDataStreamRequest $request
     *
     * @return RolloverDataStreamResponse
     */
    public function rolloverDataStream($InstanceId, $DataStream, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rolloverDataStreamWithOptions($InstanceId, $DataStream, $request, $headers, $runtime);
    }

    /**
     * Deploys Logstash pipelines immediately.
     *
     * @param request - RunPipelinesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunPipelinesResponse
     *
     * @param string              $InstanceId
     * @param RunPipelinesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return RunPipelinesResponse
     */
    public function runPipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RunPipelines',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/pipelines/action/run',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RunPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploys Logstash pipelines immediately.
     *
     * @param request - RunPipelinesRequest
     *
     * @returns RunPipelinesResponse
     *
     * @param string              $InstanceId
     * @param RunPipelinesRequest $request
     *
     * @return RunPipelinesResponse
     */
    public function runPipelines($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runPipelinesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Scales in nodes of a specified role in an Elasticsearch cluster.
     *
     * @remarks
     * Note the following when you invoke this operation:
     * Before scaling in data nodes of a cluster, perform data migration from the nodes to be removed to other nodes. After you confirm that the nodes to be removed contain no data, proceed with the scale-in operation.
     *
     * @param request - ShrinkNodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ShrinkNodeResponse
     *
     * @param string            $InstanceId
     * @param ShrinkNodeRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ShrinkNodeResponse
     */
    public function shrinkNodeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->count) {
            @$query['count'] = $request->count;
        }

        if (null !== $request->ignoreStatus) {
            @$query['ignoreStatus'] = $request->ignoreStatus;
        }

        if (null !== $request->nodeType) {
            @$query['nodeType'] = $request->nodeType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'ShrinkNode',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/shrink',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ShrinkNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Scales in nodes of a specified role in an Elasticsearch cluster.
     *
     * @remarks
     * Note the following when you invoke this operation:
     * Before scaling in data nodes of a cluster, perform data migration from the nodes to be removed to other nodes. After you confirm that the nodes to be removed contain no data, proceed with the scale-in operation.
     *
     * @param request - ShrinkNodeRequest
     *
     * @returns ShrinkNodeResponse
     *
     * @param string            $InstanceId
     * @param ShrinkNodeRequest $request
     *
     * @return ShrinkNodeResponse
     */
    public function shrinkNode($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->shrinkNodeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Starts a collector to collect data.
     *
     * @param request - StartCollectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartCollectorResponse
     *
     * @param string                $ResId
     * @param StartCollectorRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return StartCollectorResponse
     */
    public function startCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartCollector',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/collectors/' . Url::percentEncode($ResId) . '/actions/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a collector to collect data.
     *
     * @param request - StartCollectorRequest
     *
     * @returns StartCollectorResponse
     *
     * @param string                $ResId
     * @param StartCollectorRequest $request
     *
     * @return StartCollectorResponse
     */
    public function startCollector($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startCollectorWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * Calls StopCollector to stop a running collector.
     *
     * @param request - StopCollectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopCollectorResponse
     *
     * @param string               $ResId
     * @param StopCollectorRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return StopCollectorResponse
     */
    public function stopCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopCollector',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/collectors/' . Url::percentEncode($ResId) . '/actions/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls StopCollector to stop a running collector.
     *
     * @param request - StopCollectorRequest
     *
     * @returns StopCollectorResponse
     *
     * @param string               $ResId
     * @param StopCollectorRequest $request
     *
     * @return StopCollectorResponse
     */
    public function stopCollector($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopCollectorWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * Stops Logstash pipelines by calling StopPipelines.
     *
     * @param request - StopPipelinesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopPipelinesResponse
     *
     * @param string               $InstanceId
     * @param StopPipelinesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return StopPipelinesResponse
     */
    public function stopPipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'StopPipelines',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/pipelines/action/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops Logstash pipelines by calling StopPipelines.
     *
     * @param request - StopPipelinesRequest
     *
     * @returns StopPipelinesResponse
     *
     * @param string               $InstanceId
     * @param StopPipelinesRequest $request
     *
     * @return StopPipelinesResponse
     */
    public function stopPipelines($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopPipelinesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates tag-resource relationships for a specified instance.
     *
     * @param request - TagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceIds) {
            @$body['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates tag-resource relationships for a specified instance.
     *
     * @param request - TagResourcesRequest
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
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs data migration on a node to facilitate node scale-in operations.
     *
     * @param request - TransferNodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferNodeResponse
     *
     * @param string              $InstanceId
     * @param TransferNodeRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TransferNodeResponse
     */
    public function transferNodeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->nodeType) {
            @$query['nodeType'] = $request->nodeType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'TransferNode',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/transfer',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TransferNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs data migration on a node to facilitate node scale-in operations.
     *
     * @param request - TransferNodeRequest
     *
     * @returns TransferNodeResponse
     *
     * @param string              $InstanceId
     * @param TransferNodeRequest $request
     *
     * @return TransferNodeResponse
     */
    public function transferNode($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->transferNodeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Enables or shuts down public or private network access for an Elasticsearch or Kibana cluster.
     *
     * @param request - TriggerNetworkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TriggerNetworkResponse
     *
     * @param string                $InstanceId
     * @param TriggerNetworkRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return TriggerNetworkResponse
     */
    public function triggerNetworkWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->actionType) {
            @$body['actionType'] = $request->actionType;
        }

        if (null !== $request->networkType) {
            @$body['networkType'] = $request->networkType;
        }

        if (null !== $request->nodeType) {
            @$body['nodeType'] = $request->nodeType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TriggerNetwork',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/network-trigger',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TriggerNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or shuts down public or private network access for an Elasticsearch or Kibana cluster.
     *
     * @param request - TriggerNetworkRequest
     *
     * @returns TriggerNetworkResponse
     *
     * @param string                $InstanceId
     * @param TriggerNetworkRequest $request
     *
     * @return TriggerNetworkResponse
     */
    public function triggerNetwork($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->triggerNetworkWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Disables an existing zone for a multi-zone instance. This operation is intended only for disaster recovery drills. Proceed with caution.
     *
     * @remarks
     * Disables an existing zone for a multi-zone instance. This operation is intended only for disaster recovery drills. Proceed with caution.
     *
     * @param request - TurnOffZoneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TurnOffZoneResponse
     *
     * @param string             $instanceId
     * @param TurnOffZoneRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return TurnOffZoneResponse
     */
    public function turnOffZoneWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->hpAlbZoneDrained) {
            @$query['hpAlbZoneDrained'] = $request->hpAlbZoneDrained;
        }

        if (null !== $request->zone) {
            @$query['zone'] = $request->zone;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TurnOffZone',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($instanceId) . '/actions/turnOff-zone',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TurnOffZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables an existing zone for a multi-zone instance. This operation is intended only for disaster recovery drills. Proceed with caution.
     *
     * @remarks
     * Disables an existing zone for a multi-zone instance. This operation is intended only for disaster recovery drills. Proceed with caution.
     *
     * @param request - TurnOffZoneRequest
     *
     * @returns TurnOffZoneResponse
     *
     * @param string             $instanceId
     * @param TurnOffZoneRequest $request
     *
     * @return TurnOffZoneResponse
     */
    public function turnOffZone($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->turnOffZoneWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Reopens an offline zone for a multi-zone instance. This operation is intended only for disaster recovery drills. Proceed with caution.
     *
     * @remarks
     * Reopens an offline zone for a multi-zone instance. This operation is intended only for disaster recovery drills. Proceed with caution.
     *
     * @param request - TurnOnZoneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TurnOnZoneResponse
     *
     * @param string            $instanceId
     * @param TurnOnZoneRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return TurnOnZoneResponse
     */
    public function turnOnZoneWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->hpAlbZoneDrained) {
            @$query['hpAlbZoneDrained'] = $request->hpAlbZoneDrained;
        }

        if (null !== $request->zone) {
            @$query['zone'] = $request->zone;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TurnOnZone',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($instanceId) . '/actions/turnOn-zone',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TurnOnZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reopens an offline zone for a multi-zone instance. This operation is intended only for disaster recovery drills. Proceed with caution.
     *
     * @remarks
     * Reopens an offline zone for a multi-zone instance. This operation is intended only for disaster recovery drills. Proceed with caution.
     *
     * @param request - TurnOnZoneRequest
     *
     * @returns TurnOnZoneResponse
     *
     * @param string            $instanceId
     * @param TurnOnZoneRequest $request
     *
     * @return TurnOnZoneResponse
     */
    public function turnOnZone($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->turnOnZoneWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Uninstalls plug-ins from the Kibana node of an Elasticsearch instance.
     *
     * @param request - UninstallKibanaPluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UninstallKibanaPluginResponse
     *
     * @param string                       $InstanceId
     * @param UninstallKibanaPluginRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UninstallKibanaPluginResponse
     */
    public function uninstallKibanaPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UninstallKibanaPlugin',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/kibana-plugins/actions/uninstall',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UninstallKibanaPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls plug-ins from the Kibana node of an Elasticsearch instance.
     *
     * @param request - UninstallKibanaPluginRequest
     *
     * @returns UninstallKibanaPluginResponse
     *
     * @param string                       $InstanceId
     * @param UninstallKibanaPluginRequest $request
     *
     * @return UninstallKibanaPluginResponse
     */
    public function uninstallKibanaPlugin($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallKibanaPluginWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Uninstalls installed plug-ins from a Logstash instance.
     *
     * @param request - UninstallLogstashPluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UninstallLogstashPluginResponse
     *
     * @param string                         $InstanceId
     * @param UninstallLogstashPluginRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UninstallLogstashPluginResponse
     */
    public function uninstallLogstashPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UninstallLogstashPlugin',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/plugins/actions/uninstall',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UninstallLogstashPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls installed plug-ins from a Logstash instance.
     *
     * @param request - UninstallLogstashPluginRequest
     *
     * @returns UninstallLogstashPluginResponse
     *
     * @param string                         $InstanceId
     * @param UninstallLogstashPluginRequest $request
     *
     * @return UninstallLogstashPluginResponse
     */
    public function uninstallLogstashPlugin($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallLogstashPluginWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Uninstalls system plug-ins from an Elasticsearch instance.
     *
     * @param request - UninstallPluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UninstallPluginResponse
     *
     * @param string                 $InstanceId
     * @param UninstallPluginRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UninstallPluginResponse
     */
    public function uninstallPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UninstallPlugin',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/plugins/actions/uninstall',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UninstallPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls system plug-ins from an Elasticsearch instance.
     *
     * @param request - UninstallPluginRequest
     *
     * @returns UninstallPluginResponse
     *
     * @param string                 $InstanceId
     * @param UninstallPluginRequest $request
     *
     * @return UninstallPluginResponse
     */
    public function uninstallPlugin($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallPluginWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes user resource tag associations for a specified instance.
     *
     * @remarks
     * When calling this operation, note the following:
     * - Only user tags can be deleted.
     *
     *     > User tags are tags that users manually add to instances. System tags are tags that Alibaba Cloud services add to user instances. System tags are classified into visible tags and invisible tags.
     * - If a tag is not associated with any resource, the tag is also deleted when the resource tag association is deleted.
     *
     * @param request - UntagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeys) {
            @$query['TagKeys'] = $request->tagKeys;
        }

        if (null !== $request->body) {
            @$query['body'] = $request->body;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/tags',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes user resource tag associations for a specified instance.
     *
     * @remarks
     * When calling this operation, note the following:
     * - Only user tags can be deleted.
     *
     *     > User tags are tags that users manually add to instances. System tags are tags that Alibaba Cloud services add to user instances. System tags are classified into visible tags and invisible tags.
     * - If a tag is not associated with any resource, the tag is also deleted when the resource tag association is deleted.
     *
     * @param request - UntagResourcesRequest
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
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the password of the elastic account for a specified Elasticsearch instance.
     *
     * @remarks
     * When you invoke this operation, note the following:
     * You cannot update information when the instance status is activating, invalid, or freeze (inactive).
     *
     * @param request - UpdateAdminPasswordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAdminPasswordResponse
     *
     * @param string                     $InstanceId
     * @param UpdateAdminPasswordRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateAdminPasswordResponse
     */
    public function updateAdminPasswordWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->esAdminPassword) {
            @$body['esAdminPassword'] = $request->esAdminPassword;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAdminPassword',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/admin-pwd',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAdminPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the password of the elastic account for a specified Elasticsearch instance.
     *
     * @remarks
     * When you invoke this operation, note the following:
     * You cannot update information when the instance status is activating, invalid, or freeze (inactive).
     *
     * @param request - UpdateAdminPasswordRequest
     *
     * @returns UpdateAdminPasswordResponse
     *
     * @param string                     $InstanceId
     * @param UpdateAdminPasswordRequest $request
     *
     * @return UpdateAdminPasswordResponse
     */
    public function updateAdminPassword($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAdminPasswordWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Changes the garbage collector configuration of a specified Elasticsearch instance.
     *
     * @param request - UpdateAdvancedSettingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAdvancedSettingResponse
     *
     * @param string                       $InstanceId
     * @param UpdateAdvancedSettingRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAdvancedSettingResponse
     */
    public function updateAdvancedSettingWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateAdvancedSetting',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/update-advanced-setting',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAdvancedSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the garbage collector configuration of a specified Elasticsearch instance.
     *
     * @param request - UpdateAdvancedSettingRequest
     *
     * @returns UpdateAdvancedSettingResponse
     *
     * @param string                       $InstanceId
     * @param UpdateAdvancedSettingRequest $request
     *
     * @return UpdateAdvancedSettingResponse
     */
    public function updateAdvancedSetting($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAdvancedSettingWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the dictionary of the AliNLP tokenizer plugin (analysis-aliws).
     *
     * @remarks
     * When calling this operation, note the following:
     * - Instances of version 5.x do not support the AliNLP tokenizer plugin.
     * - If the dictionary file is sourced from OSS, ensure that the OSS bucket has public-read permission.
     * - If a previously uploaded dictionary is not configured with ORIGIN, calling this operation will delete the dictionary file.
     *
     * @param request - UpdateAliwsDictRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAliwsDictResponse
     *
     * @param string                 $InstanceId
     * @param UpdateAliwsDictRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAliwsDictResponse
     */
    public function updateAliwsDictWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateAliwsDict',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/aliws-dict',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAliwsDictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the dictionary of the AliNLP tokenizer plugin (analysis-aliws).
     *
     * @remarks
     * When calling this operation, note the following:
     * - Instances of version 5.x do not support the AliNLP tokenizer plugin.
     * - If the dictionary file is sourced from OSS, ensure that the OSS bucket has public-read permission.
     * - If a previously uploaded dictionary is not configured with ORIGIN, calling this operation will delete the dictionary file.
     *
     * @param request - UpdateAliwsDictRequest
     *
     * @returns UpdateAliwsDictResponse
     *
     * @param string                 $InstanceId
     * @param UpdateAliwsDictRequest $request
     *
     * @return UpdateAliwsDictResponse
     */
    public function updateAliwsDict($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAliwsDictWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the access blacklist of an Elasticsearch instance. This operation is deprecated.
     *
     * @deprecated OpenAPI UpdateBlackIps is deprecated
     *
     * @param request - UpdateBlackIpsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBlackIpsResponse
     *
     * @param string                $InstanceId
     * @param UpdateBlackIpsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateBlackIpsResponse
     */
    public function updateBlackIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateBlackIps',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/black-ips',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateBlackIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Modifies the access blacklist of an Elasticsearch instance. This operation is deprecated.
     *
     * @deprecated OpenAPI UpdateBlackIps is deprecated
     *
     * @param request - UpdateBlackIpsRequest
     *
     * @returns UpdateBlackIpsResponse
     *
     * @param string                $InstanceId
     * @param UpdateBlackIpsRequest $request
     *
     * @return UpdateBlackIpsResponse
     */
    public function updateBlackIps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateBlackIpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the configuration of a collector.
     *
     * @param request - UpdateCollectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCollectorResponse
     *
     * @param string                 $ResId
     * @param UpdateCollectorRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateCollectorResponse
     */
    public function updateCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateCollector',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/collectors/' . Url::percentEncode($ResId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of a collector.
     *
     * @param request - UpdateCollectorRequest
     *
     * @returns UpdateCollectorResponse
     *
     * @param string                 $ResId
     * @param UpdateCollectorRequest $request
     *
     * @return UpdateCollectorResponse
     */
    public function updateCollector($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCollectorWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * Calls UpdateCollectorName to modify the name of a collector.
     *
     * @param request - UpdateCollectorNameRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCollectorNameResponse
     *
     * @param string                     $ResId
     * @param UpdateCollectorNameRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateCollectorNameResponse
     */
    public function updateCollectorNameWithOptions($ResId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateCollectorName',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/collectors/' . Url::percentEncode($ResId) . '/actions/rename',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateCollectorNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls UpdateCollectorName to modify the name of a collector.
     *
     * @param request - UpdateCollectorNameRequest
     *
     * @returns UpdateCollectorNameResponse
     *
     * @param string                     $ResId
     * @param UpdateCollectorNameRequest $request
     *
     * @return UpdateCollectorNameResponse
     */
    public function updateCollectorName($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCollectorNameWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * Updates a composable index template for an Elasticsearch instance.
     *
     * @remarks
     * For more information, see [Use OpenStore to store massive amounts of data](https://help.aliyun.com/document_detail/317694.html).
     *
     * @param request - UpdateComponentIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateComponentIndexResponse
     *
     * @param string                      $InstanceId
     * @param string                      $name
     * @param UpdateComponentIndexRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateComponentIndexResponse
     */
    public function updateComponentIndexWithOptions($InstanceId, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->meta) {
            @$body['_meta'] = $request->meta;
        }

        if (null !== $request->template) {
            @$body['template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateComponentIndex',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/component-index/' . Url::percentEncode($name) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateComponentIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a composable index template for an Elasticsearch instance.
     *
     * @remarks
     * For more information, see [Use OpenStore to store massive amounts of data](https://help.aliyun.com/document_detail/317694.html).
     *
     * @param request - UpdateComponentIndexRequest
     *
     * @returns UpdateComponentIndexResponse
     *
     * @param string                      $InstanceId
     * @param string                      $name
     * @param UpdateComponentIndexRequest $request
     *
     * @return UpdateComponentIndexResponse
     */
    public function updateComponentIndex($InstanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateComponentIndexWithOptions($InstanceId, $name, $request, $headers, $runtime);
    }

    /**
     * Changes the name of an Elasticsearch instance.
     *
     * @param request - UpdateDescriptionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDescriptionResponse
     *
     * @param string                   $InstanceId
     * @param UpdateDescriptionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDescriptionResponse
     */
    public function updateDescriptionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDescription',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/description',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the name of an Elasticsearch instance.
     *
     * @param request - UpdateDescriptionRequest
     *
     * @returns UpdateDescriptionResponse
     *
     * @param string                   $InstanceId
     * @param UpdateDescriptionRequest $request
     *
     * @return UpdateDescriptionResponse
     */
    public function updateDescription($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDescriptionWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the intelligent O&M scenario settings of a specified Elasticsearch instance.
     *
     * @param request - UpdateDiagnosisSettingsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDiagnosisSettingsResponse
     *
     * @param string                         $InstanceId
     * @param UpdateDiagnosisSettingsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateDiagnosisSettingsResponse
     */
    public function updateDiagnosisSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lang) {
            @$query['lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateDiagnosisSettings',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/diagnosis/instances/' . Url::percentEncode($InstanceId) . '/settings',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDiagnosisSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the intelligent O&M scenario settings of a specified Elasticsearch instance.
     *
     * @param request - UpdateDiagnosisSettingsRequest
     *
     * @returns UpdateDiagnosisSettingsResponse
     *
     * @param string                         $InstanceId
     * @param UpdateDiagnosisSettingsRequest $request
     *
     * @return UpdateDiagnosisSettingsResponse
     */
    public function updateDiagnosisSettings($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDiagnosisSettingsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the user dictionary of an Elasticsearch instance.
     *
     * @remarks
     * When calling this operation, note the following:
     * - If the dictionary file originates from OSS, ensure that the OSS storage space is publicly readable.
     * - If previously uploaded dictionaries are not configured with ORIGIN, the dictionary files will be deleted after this operation is called.
     *
     * @param request - UpdateDictRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDictResponse
     *
     * @param string            $InstanceId
     * @param UpdateDictRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateDictResponse
     */
    public function updateDictWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateDict',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/dict',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the user dictionary of an Elasticsearch instance.
     *
     * @remarks
     * When calling this operation, note the following:
     * - If the dictionary file originates from OSS, ensure that the OSS storage space is publicly readable.
     * - If previously uploaded dictionaries are not configured with ORIGIN, the dictionary files will be deleted after this operation is called.
     *
     * @param request - UpdateDictRequest
     *
     * @returns UpdateDictResponse
     *
     * @param string            $InstanceId
     * @param UpdateDictRequest $request
     *
     * @return UpdateDictResponse
     */
    public function updateDict($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDictWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Modify Cluster Dynamic Configuration.
     *
     * @param request - UpdateDynamicSettingsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDynamicSettingsResponse
     *
     * @param string                       $InstanceId
     * @param UpdateDynamicSettingsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDynamicSettingsResponse
     */
    public function updateDynamicSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->mode) {
            @$query['mode'] = $request->mode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateDynamicSettings',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/dynamic-settings',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDynamicSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Cluster Dynamic Configuration.
     *
     * @param request - UpdateDynamicSettingsRequest
     *
     * @returns UpdateDynamicSettingsResponse
     *
     * @param string                       $InstanceId
     * @param UpdateDynamicSettingsRequest $request
     *
     * @return UpdateDynamicSettingsResponse
     */
    public function updateDynamicSettings($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDynamicSettingsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the scenario-based configuration template of an Elasticsearch instance.
     *
     * @param request - UpdateExtendConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExtendConfigResponse
     *
     * @param string                    $InstanceId
     * @param UpdateExtendConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateExtendConfigResponse
     */
    public function updateExtendConfigWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateExtendConfig',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/extend-configs/actions/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateExtendConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the scenario-based configuration template of an Elasticsearch instance.
     *
     * @param request - UpdateExtendConfigRequest
     *
     * @returns UpdateExtendConfigResponse
     *
     * @param string                    $InstanceId
     * @param UpdateExtendConfigRequest $request
     *
     * @return UpdateExtendConfigResponse
     */
    public function updateExtendConfig($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExtendConfigWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the extension file configuration of a Logstash instance.
     *
     * @remarks
     * When calling this operation, note the following: Currently, this operation only supports deleting extension files that have been uploaded through the console. To add or modify extension files, perform the operations in the console.
     *
     * @param request - UpdateExtendfilesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExtendfilesResponse
     *
     * @param string                   $InstanceId
     * @param UpdateExtendfilesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateExtendfilesResponse
     */
    public function updateExtendfilesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateExtendfiles',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/extendfiles',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateExtendfilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the extension file configuration of a Logstash instance.
     *
     * @remarks
     * When calling this operation, note the following: Currently, this operation only supports deleting extension files that have been uploaded through the console. To add or modify extension files, perform the operations in the console.
     *
     * @param request - UpdateExtendfilesRequest
     *
     * @returns UpdateExtendfilesResponse
     *
     * @param string                   $InstanceId
     * @param UpdateExtendfilesRequest $request
     *
     * @return UpdateExtendfilesResponse
     */
    public function updateExtendfiles($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExtendfilesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Toggle the FalconSeek cloud-native kernel attribute for instances of Version 8.17.
     *
     * @param request - UpdateFalconSeekRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFalconSeekResponse
     *
     * @param string                  $InstanceId
     * @param UpdateFalconSeekRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateFalconSeekResponse
     */
    public function updateFalconSeekWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enable) {
            @$query['enable'] = $request->enable;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateFalconSeek',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/falconseek',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFalconSeekResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Toggle the FalconSeek cloud-native kernel attribute for instances of Version 8.17.
     *
     * @param request - UpdateFalconSeekRequest
     *
     * @returns UpdateFalconSeekResponse
     *
     * @param string                  $InstanceId
     * @param UpdateFalconSeekRequest $request
     *
     * @return UpdateFalconSeekResponse
     */
    public function updateFalconSeek($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFalconSeekWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the IK hot-word dictionary of an Alibaba Cloud Elasticsearch instance.
     *
     * @remarks
     * When calling this operation, note the following:
     * - If the dictionary file is sourced from OSS, make sure the OSS bucket has public-read permission.
     * - If a previously uploaded dictionary is not configured with ORIGIN, the dictionary file will be deleted after this operation is called.
     *
     * @param request - UpdateHotIkDictsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHotIkDictsResponse
     *
     * @param string                  $InstanceId
     * @param UpdateHotIkDictsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateHotIkDictsResponse
     */
    public function updateHotIkDictsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateHotIkDicts',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/ik-hot-dict',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHotIkDictsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the IK hot-word dictionary of an Alibaba Cloud Elasticsearch instance.
     *
     * @remarks
     * When calling this operation, note the following:
     * - If the dictionary file is sourced from OSS, make sure the OSS bucket has public-read permission.
     * - If a previously uploaded dictionary is not configured with ORIGIN, the dictionary file will be deleted after this operation is called.
     *
     * @param request - UpdateHotIkDictsRequest
     *
     * @returns UpdateHotIkDictsResponse
     *
     * @param string                  $InstanceId
     * @param UpdateHotIkDictsRequest $request
     *
     * @return UpdateHotIkDictsResponse
     */
    public function updateHotIkDicts($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHotIkDictsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the lifecycle policy of an Elasticsearch index.
     *
     * @param request - UpdateILMPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateILMPolicyResponse
     *
     * @param string                 $InstanceId
     * @param string                 $PolicyName
     * @param UpdateILMPolicyRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateILMPolicyResponse
     */
    public function updateILMPolicyWithOptions($InstanceId, $PolicyName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateILMPolicy',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/ilm-policies/' . Url::percentEncode($PolicyName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateILMPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the lifecycle policy of an Elasticsearch index.
     *
     * @param request - UpdateILMPolicyRequest
     *
     * @returns UpdateILMPolicyResponse
     *
     * @param string                 $InstanceId
     * @param string                 $PolicyName
     * @param UpdateILMPolicyRequest $request
     *
     * @return UpdateILMPolicyResponse
     */
    public function updateILMPolicy($InstanceId, $PolicyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateILMPolicyWithOptions($InstanceId, $PolicyName, $request, $headers, $runtime);
    }

    /**
     * Modifies the template configuration of an Elasticsearch instance.
     *
     * @param request - UpdateIndexTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIndexTemplateResponse
     *
     * @param string                     $InstanceId
     * @param string                     $IndexTemplate
     * @param UpdateIndexTemplateRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateIndexTemplateResponse
     */
    public function updateIndexTemplateWithOptions($InstanceId, $IndexTemplate, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateIndexTemplate',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/index-templates/' . Url::percentEncode($IndexTemplate) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateIndexTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the template configuration of an Elasticsearch instance.
     *
     * @param request - UpdateIndexTemplateRequest
     *
     * @returns UpdateIndexTemplateResponse
     *
     * @param string                     $InstanceId
     * @param string                     $IndexTemplate
     * @param UpdateIndexTemplateRequest $request
     *
     * @return UpdateIndexTemplateResponse
     */
    public function updateIndexTemplate($InstanceId, $IndexTemplate, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIndexTemplateWithOptions($InstanceId, $IndexTemplate, $request, $headers, $runtime);
    }

    /**
     * Upgrades the configuration of an Elasticsearch cluster, including the number of nodes, roles, specifications, and disk configurations.
     *
     * @remarks
     * When you call this operation, note the following items:
     * For more precautions, see [Upgrade cluster configuration](https://help.aliyun.com/document_detail/96650.html) and [Downgrade cluster configuration](https://help.aliyun.com/document_detail/198887.html).
     *
     * @param request - UpdateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResponse
     *
     * @param string                $InstanceId
     * @param UpdateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        if (null !== $request->orderActionType) {
            @$query['orderActionType'] = $request->orderActionType;
        }

        $body = [];
        if (null !== $request->clientNodeConfiguration) {
            @$body['clientNodeConfiguration'] = $request->clientNodeConfiguration;
        }

        if (null !== $request->elasticDataNodeConfiguration) {
            @$body['elasticDataNodeConfiguration'] = $request->elasticDataNodeConfiguration;
        }

        if (null !== $request->instanceCategory) {
            @$body['instanceCategory'] = $request->instanceCategory;
        }

        if (null !== $request->kibanaConfiguration) {
            @$body['kibanaConfiguration'] = $request->kibanaConfiguration;
        }

        if (null !== $request->masterConfiguration) {
            @$body['masterConfiguration'] = $request->masterConfiguration;
        }

        if (null !== $request->nodeAmount) {
            @$body['nodeAmount'] = $request->nodeAmount;
        }

        if (null !== $request->nodeSpec) {
            @$body['nodeSpec'] = $request->nodeSpec;
        }

        if (null !== $request->updateType) {
            @$body['updateType'] = $request->updateType;
        }

        if (null !== $request->warmNodeConfiguration) {
            @$body['warmNodeConfiguration'] = $request->warmNodeConfiguration;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstance',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the configuration of an Elasticsearch cluster, including the number of nodes, roles, specifications, and disk configurations.
     *
     * @remarks
     * When you call this operation, note the following items:
     * For more precautions, see [Upgrade cluster configuration](https://help.aliyun.com/document_detail/96650.html) and [Downgrade cluster configuration](https://help.aliyun.com/document_detail/198887.html).
     *
     * @param request - UpdateInstanceRequest
     *
     * @returns UpdateInstanceResponse
     *
     * @param string                $InstanceId
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Transforms the billing method of an Elasticsearch instance from pay-as-you-go to a subscription instance.
     *
     * @param request - UpdateInstanceChargeTypeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceChargeTypeResponse
     *
     * @param string                          $InstanceId
     * @param UpdateInstanceChargeTypeRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateInstanceChargeTypeResponse
     */
    public function updateInstanceChargeTypeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->paymentInfo) {
            @$body['paymentInfo'] = $request->paymentInfo;
        }

        if (null !== $request->paymentType) {
            @$body['paymentType'] = $request->paymentType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceChargeType',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/convert-pay-type',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Transforms the billing method of an Elasticsearch instance from pay-as-you-go to a subscription instance.
     *
     * @param request - UpdateInstanceChargeTypeRequest
     *
     * @returns UpdateInstanceChargeTypeResponse
     *
     * @param string                          $InstanceId
     * @param UpdateInstanceChargeTypeRequest $request
     *
     * @return UpdateInstanceChargeTypeResponse
     */
    public function updateInstanceChargeType($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceChargeTypeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the YML parameter settings of a specified Elasticsearch instance.
     *
     * @remarks
     * When you invoke this operation, note the following:
     * You cannot update the configuration when the instance status is activating, invalid, or inactive (freeze).
     *
     * @param request - UpdateInstanceSettingsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceSettingsResponse
     *
     * @param string                        $InstanceId
     * @param UpdateInstanceSettingsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateInstanceSettingsResponse
     */
    public function updateInstanceSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        if (null !== $request->updateStrategy) {
            @$query['updateStrategy'] = $request->updateStrategy;
        }

        $body = [];
        if (null !== $request->esConfig) {
            @$body['esConfig'] = $request->esConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceSettings',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/instance-settings',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the YML parameter settings of a specified Elasticsearch instance.
     *
     * @remarks
     * When you invoke this operation, note the following:
     * You cannot update the configuration when the instance status is activating, invalid, or inactive (freeze).
     *
     * @param request - UpdateInstanceSettingsRequest
     *
     * @returns UpdateInstanceSettingsResponse
     *
     * @param string                        $InstanceId
     * @param UpdateInstanceSettingsRequest $request
     *
     * @return UpdateInstanceSettingsResponse
     */
    public function updateInstanceSettings($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceSettingsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Update keystore.
     *
     * @param request - UpdateKeystoresRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKeystoresResponse
     *
     * @param string                 $InstanceId
     * @param UpdateKeystoresRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateKeystoresResponse
     */
    public function updateKeystoresWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['force'] = $request->force;
        }

        $body = [];
        if (null !== $request->remove) {
            @$body['remove'] = $request->remove;
        }

        if (null !== $request->update) {
            @$body['update'] = $request->update;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKeystores',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/keystores',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateKeystoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update keystore.
     *
     * @param request - UpdateKeystoresRequest
     *
     * @returns UpdateKeystoresResponse
     *
     * @param string                 $InstanceId
     * @param UpdateKeystoresRequest $request
     *
     * @return UpdateKeystoresResponse
     */
    public function updateKeystores($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKeystoresWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Update Kibana private network access.
     *
     * @remarks
     * 1. This API operation supports only cloud-native instances. For instances of the legacy architecture, use the TriggerNetwork operation.
     * 2. The Kibana specifications must be greater than 1 vCPU and 2 GB of memory.
     *
     * @param request - UpdateKibanaPvlNetworkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKibanaPvlNetworkResponse
     *
     * @param string                        $InstanceId
     * @param UpdateKibanaPvlNetworkRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateKibanaPvlNetworkResponse
     */
    public function updateKibanaPvlNetworkWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->pvlId) {
            @$query['pvlId'] = $request->pvlId;
        }

        $body = [];
        if (null !== $request->endpointName) {
            @$body['endpointName'] = $request->endpointName;
        }

        if (null !== $request->securityGroups) {
            @$body['securityGroups'] = $request->securityGroups;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKibanaPvlNetwork',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/update-kibana-private',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateKibanaPvlNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Kibana private network access.
     *
     * @remarks
     * 1. This API operation supports only cloud-native instances. For instances of the legacy architecture, use the TriggerNetwork operation.
     * 2. The Kibana specifications must be greater than 1 vCPU and 2 GB of memory.
     *
     * @param request - UpdateKibanaPvlNetworkRequest
     *
     * @returns UpdateKibanaPvlNetworkResponse
     *
     * @param string                        $InstanceId
     * @param UpdateKibanaPvlNetworkRequest $request
     *
     * @return UpdateKibanaPvlNetworkResponse
     */
    public function updateKibanaPvlNetwork($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKibanaPvlNetworkWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the Kibana configuration. Currently, only the Kibana language configuration can be modified.
     *
     * @param request - UpdateKibanaSettingsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKibanaSettingsResponse
     *
     * @param string                      $InstanceId
     * @param UpdateKibanaSettingsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateKibanaSettingsResponse
     */
    public function updateKibanaSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateKibanaSettings',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/update-kibana-settings',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateKibanaSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the Kibana configuration. Currently, only the Kibana language configuration can be modified.
     *
     * @param request - UpdateKibanaSettingsRequest
     *
     * @returns UpdateKibanaSettingsResponse
     *
     * @param string                      $InstanceId
     * @param UpdateKibanaSettingsRequest $request
     *
     * @return UpdateKibanaSettingsResponse
     */
    public function updateKibanaSettings($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKibanaSettingsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Enable or disable Alibaba Cloud account authentication for Kibana. After Alibaba Cloud account authentication is enabled, you must log on with your Alibaba Cloud account before you can use Kibana features.
     *
     * @param request - UpdateKibanaSsoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKibanaSsoResponse
     *
     * @param string                 $InstanceId
     * @param UpdateKibanaSsoRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateKibanaSsoResponse
     */
    public function updateKibanaSsoWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enable) {
            @$query['enable'] = $request->enable;
        }

        if (null !== $request->networkType) {
            @$query['networkType'] = $request->networkType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateKibanaSso',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/kibana-sso',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateKibanaSsoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enable or disable Alibaba Cloud account authentication for Kibana. After Alibaba Cloud account authentication is enabled, you must log on with your Alibaba Cloud account before you can use Kibana features.
     *
     * @param request - UpdateKibanaSsoRequest
     *
     * @returns UpdateKibanaSsoResponse
     *
     * @param string                 $InstanceId
     * @param UpdateKibanaSsoRequest $request
     *
     * @return UpdateKibanaSsoResponse
     */
    public function updateKibanaSso($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKibanaSsoWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the Kibana access whitelist of a specified Alibaba Cloud Elasticsearch instance.
     *
     * @remarks
     * ## Before you begin
     * - When you invoke this operation, you cannot update information if the instance status is activating, invalid, or freeze (inactive).
     * - You can update the whitelist in two ways: IP whitelist list and IP whitelist group. The two methods cannot be used at the same time. In addition to InstanceId and clientToken, the two methods support different parameters, as follows:
     *     - IP whitelist list: kibanaIPWhitelist
     *     - IP whitelist group: modifyMode, whiteIpGroup
     * - The public network access whitelist does not support private IP addresses, and the internal-facing whitelist does not support public IP addresses.
     *
     * @param request - UpdateKibanaWhiteIpsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKibanaWhiteIpsResponse
     *
     * @param string                      $InstanceId
     * @param UpdateKibanaWhiteIpsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateKibanaWhiteIpsResponse
     */
    public function updateKibanaWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->modifyMode) {
            @$query['modifyMode'] = $request->modifyMode;
        }

        $body = [];
        if (null !== $request->kibanaIPWhitelist) {
            @$body['kibanaIPWhitelist'] = $request->kibanaIPWhitelist;
        }

        if (null !== $request->whiteIpGroup) {
            @$body['whiteIpGroup'] = $request->whiteIpGroup;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKibanaWhiteIps',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/kibana-white-ips',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateKibanaWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the Kibana access whitelist of a specified Alibaba Cloud Elasticsearch instance.
     *
     * @remarks
     * ## Before you begin
     * - When you invoke this operation, you cannot update information if the instance status is activating, invalid, or freeze (inactive).
     * - You can update the whitelist in two ways: IP whitelist list and IP whitelist group. The two methods cannot be used at the same time. In addition to InstanceId and clientToken, the two methods support different parameters, as follows:
     *     - IP whitelist list: kibanaIPWhitelist
     *     - IP whitelist group: modifyMode, whiteIpGroup
     * - The public network access whitelist does not support private IP addresses, and the internal-facing whitelist does not support public IP addresses.
     *
     * @param request - UpdateKibanaWhiteIpsRequest
     *
     * @returns UpdateKibanaWhiteIpsResponse
     *
     * @param string                      $InstanceId
     * @param UpdateKibanaWhiteIpsRequest $request
     *
     * @return UpdateKibanaWhiteIpsResponse
     */
    public function updateKibanaWhiteIps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKibanaWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies some information about a specified instance, such as the number of nodes, quota, name, and disk size.
     *
     * @remarks
     * ### Before you begin
     * You cannot modify instance information when the instance status is activating, invalid, or freeze (inactive).
     *
     * @param request - UpdateLogstashRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLogstashResponse
     *
     * @param string                $InstanceId
     * @param UpdateLogstashRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateLogstashResponse
     */
    public function updateLogstashWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->nodeAmount) {
            @$body['nodeAmount'] = $request->nodeAmount;
        }

        if (null !== $request->nodeSpec) {
            @$body['nodeSpec'] = $request->nodeSpec;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLogstash',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies some information about a specified instance, such as the number of nodes, quota, name, and disk size.
     *
     * @remarks
     * ### Before you begin
     * You cannot modify instance information when the instance status is activating, invalid, or freeze (inactive).
     *
     * @param request - UpdateLogstashRequest
     *
     * @returns UpdateLogstashResponse
     *
     * @param string                $InstanceId
     * @param UpdateLogstashRequest $request
     *
     * @return UpdateLogstashResponse
     */
    public function updateLogstash($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogstashWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Converts a pay-as-you-go Alibaba Cloud Logstash instance to a subscription instance.
     *
     * @param request - UpdateLogstashChargeTypeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLogstashChargeTypeResponse
     *
     * @param string                          $InstanceId
     * @param UpdateLogstashChargeTypeRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateLogstashChargeTypeResponse
     */
    public function updateLogstashChargeTypeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateLogstashChargeType',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/actions/convert-pay-type',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateLogstashChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Converts a pay-as-you-go Alibaba Cloud Logstash instance to a subscription instance.
     *
     * @param request - UpdateLogstashChargeTypeRequest
     *
     * @returns UpdateLogstashChargeTypeResponse
     *
     * @param string                          $InstanceId
     * @param UpdateLogstashChargeTypeRequest $request
     *
     * @return UpdateLogstashChargeTypeResponse
     */
    public function updateLogstashChargeType($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogstashChargeTypeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the name of a specified Logstash instance.
     *
     * @remarks
     * When you call this operation, take note of the following items:
     * You cannot modify the instance name when the instance status is activating, invalid, or freeze (inactive).
     *
     * @param request - UpdateLogstashDescriptionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLogstashDescriptionResponse
     *
     * @param string                           $InstanceId
     * @param UpdateLogstashDescriptionRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateLogstashDescriptionResponse
     */
    public function updateLogstashDescriptionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLogstashDescription',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/description',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateLogstashDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name of a specified Logstash instance.
     *
     * @remarks
     * When you call this operation, take note of the following items:
     * You cannot modify the instance name when the instance status is activating, invalid, or freeze (inactive).
     *
     * @param request - UpdateLogstashDescriptionRequest
     *
     * @returns UpdateLogstashDescriptionResponse
     *
     * @param string                           $InstanceId
     * @param UpdateLogstashDescriptionRequest $request
     *
     * @return UpdateLogstashDescriptionResponse
     */
    public function updateLogstashDescription($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogstashDescriptionWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the configuration of a specified Logstash instance.
     *
     * @remarks
     * When you invoke this operation, note the following: The instance configuration cannot be updated when the instance status is activating, invalid, or freeze (inactive).
     *
     * @param request - UpdateLogstashSettingsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLogstashSettingsResponse
     *
     * @param string                        $InstanceId
     * @param UpdateLogstashSettingsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateLogstashSettingsResponse
     */
    public function updateLogstashSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateLogstashSettings',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/instance-settings',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateLogstashSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of a specified Logstash instance.
     *
     * @remarks
     * When you invoke this operation, note the following: The instance configuration cannot be updated when the instance status is activating, invalid, or freeze (inactive).
     *
     * @param request - UpdateLogstashSettingsRequest
     *
     * @returns UpdateLogstashSettingsResponse
     *
     * @param string                        $InstanceId
     * @param UpdateLogstashSettingsRequest $request
     *
     * @return UpdateLogstashSettingsResponse
     */
    public function updateLogstashSettings($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogstashSettingsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the pipeline management method for a specified Logstash instance.
     *
     * @remarks
     * > Pipeline management methods include configuration file management and Kibana pipeline management. The console no longer supports Kibana pipeline management. You can use this feature only through the API.
     *
     * @param request - UpdatePipelineManagementConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePipelineManagementConfigResponse
     *
     * @param string                                $InstanceId
     * @param UpdatePipelineManagementConfigRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdatePipelineManagementConfigResponse
     */
    public function updatePipelineManagementConfigWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->endpoints) {
            @$body['endpoints'] = $request->endpoints;
        }

        if (null !== $request->esInstanceId) {
            @$body['esInstanceId'] = $request->esInstanceId;
        }

        if (null !== $request->password) {
            @$body['password'] = $request->password;
        }

        if (null !== $request->pipelineIds) {
            @$body['pipelineIds'] = $request->pipelineIds;
        }

        if (null !== $request->pipelineManagementType) {
            @$body['pipelineManagementType'] = $request->pipelineManagementType;
        }

        if (null !== $request->userName) {
            @$body['userName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePipelineManagementConfig',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/pipeline-management-config',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePipelineManagementConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the pipeline management method for a specified Logstash instance.
     *
     * @remarks
     * > Pipeline management methods include configuration file management and Kibana pipeline management. The console no longer supports Kibana pipeline management. You can use this feature only through the API.
     *
     * @param request - UpdatePipelineManagementConfigRequest
     *
     * @returns UpdatePipelineManagementConfigResponse
     *
     * @param string                                $InstanceId
     * @param UpdatePipelineManagementConfigRequest $request
     *
     * @return UpdatePipelineManagementConfigResponse
     */
    public function updatePipelineManagementConfig($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineManagementConfigWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Calls UpdatePipelines to update Logstash pipeline information.
     *
     * @param request - UpdatePipelinesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePipelinesResponse
     *
     * @param string                 $InstanceId
     * @param UpdatePipelinesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdatePipelinesResponse
     */
    public function updatePipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->trigger) {
            @$query['trigger'] = $request->trigger;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdatePipelines',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/pipelines',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls UpdatePipelines to update Logstash pipeline information.
     *
     * @param request - UpdatePipelinesRequest
     *
     * @returns UpdatePipelinesResponse
     *
     * @param string                 $InstanceId
     * @param UpdatePipelinesRequest $request
     *
     * @return UpdatePipelinesResponse
     */
    public function updatePipelines($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelinesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the VPC private network access whitelist of a specified instance.
     *
     * @remarks
     * ## Before you begin
     * - You cannot update the VPC private network access whitelist of an instance when the instance status is Activating (activating), Invalid (invalid), or Freeze (inactive).
     * - You can update the whitelist in two ways: by using an IP whitelist list or by using an IP whitelist group. The two methods cannot be used at the same time. In addition to InstanceId and clientToken, the two methods support different parameters:
     *     - IP whitelist list: privateNetworkIpWhiteList
     *     - IP whitelist group: modifyMode, whiteIpGroup
     * - The public network access whitelist does not support private IP addresses, and the private network access whitelist does not support public IP addresses.
     *
     * @param request - UpdatePrivateNetworkWhiteIpsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePrivateNetworkWhiteIpsResponse
     *
     * @param string                              $InstanceId
     * @param UpdatePrivateNetworkWhiteIpsRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdatePrivateNetworkWhiteIpsResponse
     */
    public function updatePrivateNetworkWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->modifyMode) {
            @$query['modifyMode'] = $request->modifyMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdatePrivateNetworkWhiteIps',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/private-network-white-ips',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePrivateNetworkWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the VPC private network access whitelist of a specified instance.
     *
     * @remarks
     * ## Before you begin
     * - You cannot update the VPC private network access whitelist of an instance when the instance status is Activating (activating), Invalid (invalid), or Freeze (inactive).
     * - You can update the whitelist in two ways: by using an IP whitelist list or by using an IP whitelist group. The two methods cannot be used at the same time. In addition to InstanceId and clientToken, the two methods support different parameters:
     *     - IP whitelist list: privateNetworkIpWhiteList
     *     - IP whitelist group: modifyMode, whiteIpGroup
     * - The public network access whitelist does not support private IP addresses, and the private network access whitelist does not support public IP addresses.
     *
     * @param request - UpdatePrivateNetworkWhiteIpsRequest
     *
     * @returns UpdatePrivateNetworkWhiteIpsResponse
     *
     * @param string                              $InstanceId
     * @param UpdatePrivateNetworkWhiteIpsRequest $request
     *
     * @return UpdatePrivateNetworkWhiteIpsResponse
     */
    public function updatePrivateNetworkWhiteIps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePrivateNetworkWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Enables or disables the public network address for a specified Elasticsearch instance.
     *
     * @remarks
     * When you call this operation, note the following:
     * You cannot update information when the instance status is activating, invalid, or freeze (inactive).
     *
     * @param request - UpdatePublicNetworkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePublicNetworkResponse
     *
     * @param string                     $InstanceId
     * @param UpdatePublicNetworkRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdatePublicNetworkResponse
     */
    public function updatePublicNetworkWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdatePublicNetwork',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/public-network',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePublicNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the public network address for a specified Elasticsearch instance.
     *
     * @remarks
     * When you call this operation, note the following:
     * You cannot update information when the instance status is activating, invalid, or freeze (inactive).
     *
     * @param request - UpdatePublicNetworkRequest
     *
     * @returns UpdatePublicNetworkResponse
     *
     * @param string                     $InstanceId
     * @param UpdatePublicNetworkRequest $request
     *
     * @return UpdatePublicNetworkResponse
     */
    public function updatePublicNetwork($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePublicNetworkWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the public endpoint access whitelist of a specified Elasticsearch instance.
     *
     * @remarks
     * ## Before you begin
     * - You cannot update the public endpoint access whitelist of an instance when the instance status is activating, invalid, or inactive (freeze).
     * - You can update the whitelist in two ways: IP whitelist list and IP whitelist group. The two methods cannot be used at the same time. In addition to InstanceId and clientToken, the two methods support different parameters:
     *     - IP whitelist list: publicIpWhitelist
     *     - IP whitelist group: modifyMode, whiteIpGroup
     * - The public network access whitelist does not support private network IP addresses, and the private network access whitelist does not support public network IP addresses.
     *
     * @param request - UpdatePublicWhiteIpsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePublicWhiteIpsResponse
     *
     * @param string                      $InstanceId
     * @param UpdatePublicWhiteIpsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdatePublicWhiteIpsResponse
     */
    public function updatePublicWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->modifyMode) {
            @$query['modifyMode'] = $request->modifyMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdatePublicWhiteIps',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/public-white-ips',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePublicWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the public endpoint access whitelist of a specified Elasticsearch instance.
     *
     * @remarks
     * ## Before you begin
     * - You cannot update the public endpoint access whitelist of an instance when the instance status is activating, invalid, or inactive (freeze).
     * - You can update the whitelist in two ways: IP whitelist list and IP whitelist group. The two methods cannot be used at the same time. In addition to InstanceId and clientToken, the two methods support different parameters:
     *     - IP whitelist list: publicIpWhitelist
     *     - IP whitelist group: modifyMode, whiteIpGroup
     * - The public network access whitelist does not support private network IP addresses, and the private network access whitelist does not support public network IP addresses.
     *
     * @param request - UpdatePublicWhiteIpsRequest
     *
     * @returns UpdatePublicWhiteIpsResponse
     *
     * @param string                      $InstanceId
     * @param UpdatePublicWhiteIpsRequest $request
     *
     * @return UpdatePublicWhiteIpsResponse
     */
    public function updatePublicWhiteIps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePublicWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Enables or disables the write high availability feature for a cluster. Currently, only instances in the China (Beijing) region are supported.
     *
     * @param request - UpdateReadWritePolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateReadWritePolicyResponse
     *
     * @param string                       $InstanceId
     * @param UpdateReadWritePolicyRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateReadWritePolicyResponse
     */
    public function updateReadWritePolicyWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateReadWritePolicy',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/update-read-write-policy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateReadWritePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the write high availability feature for a cluster. Currently, only instances in the China (Beijing) region are supported.
     *
     * @param request - UpdateReadWritePolicyRequest
     *
     * @returns UpdateReadWritePolicyResponse
     *
     * @param string                       $InstanceId
     * @param UpdateReadWritePolicyRequest $request
     *
     * @return UpdateReadWritePolicyResponse
     */
    public function updateReadWritePolicy($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateReadWritePolicyWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the data backup configuration of a specified instance.
     *
     * @param request - UpdateSnapshotSettingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSnapshotSettingResponse
     *
     * @param string                       $InstanceId
     * @param UpdateSnapshotSettingRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateSnapshotSettingResponse
     */
    public function updateSnapshotSettingWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateSnapshotSetting',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/snapshot-setting',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSnapshotSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the data backup configuration of a specified instance.
     *
     * @param request - UpdateSnapshotSettingRequest
     *
     * @returns UpdateSnapshotSettingResponse
     *
     * @param string                       $InstanceId
     * @param UpdateSnapshotSettingRequest $request
     *
     * @return UpdateSnapshotSettingResponse
     */
    public function updateSnapshotSetting($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSnapshotSettingWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the synonym dictionary of an Alibaba Cloud Elasticsearch instance.
     *
     * @remarks
     * When calling this operation, note the following:
     * - If the dictionary file is sourced from OSS, make sure the OSS bucket has public-read permission.
     * - If a previously uploaded dictionary is not configured with ORIGIN, the dictionary file will be deleted after this operation is called.
     *
     * @param request - UpdateSynonymsDictsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSynonymsDictsResponse
     *
     * @param string                     $InstanceId
     * @param UpdateSynonymsDictsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateSynonymsDictsResponse
     */
    public function updateSynonymsDictsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateSynonymsDicts',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/synonymsDict',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSynonymsDictsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the synonym dictionary of an Alibaba Cloud Elasticsearch instance.
     *
     * @remarks
     * When calling this operation, note the following:
     * - If the dictionary file is sourced from OSS, make sure the OSS bucket has public-read permission.
     * - If a previously uploaded dictionary is not configured with ORIGIN, the dictionary file will be deleted after this operation is called.
     *
     * @param request - UpdateSynonymsDictsRequest
     *
     * @returns UpdateSynonymsDictsResponse
     *
     * @param string                     $InstanceId
     * @param UpdateSynonymsDictsRequest $request
     *
     * @return UpdateSynonymsDictsResponse
     */
    public function updateSynonymsDicts($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSynonymsDictsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the scenario-specific template configuration of a cluster.
     *
     * @param request - UpdateTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTemplateResponse
     *
     * @param string                $InstanceId
     * @param string                $TemplateName
     * @param UpdateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($InstanceId, $TemplateName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateTemplate',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/templates/' . Url::percentEncode($TemplateName) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the scenario-specific template configuration of a cluster.
     *
     * @param request - UpdateTemplateRequest
     *
     * @returns UpdateTemplateResponse
     *
     * @param string                $InstanceId
     * @param string                $TemplateName
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($InstanceId, $TemplateName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTemplateWithOptions($InstanceId, $TemplateName, $request, $headers, $runtime);
    }

    /**
     * Modifies the VPC internal-facing access whitelist of an Elasticsearch instance.
     *
     * @remarks
     * ## Before you begin
     * - You cannot update information when the instance status is activating, invalid, or freeze (inactive).
     * - You can update the whitelist in two ways: IP whitelist list and IP whitelist group. The two methods cannot be used at the same time, and they support different parameters besides InstanceId and clientToken. The details are as follows:
     *     - IP whitelist list: esIPWhitelist
     *     - IP whitelist group: modifyMode, whiteIpGroup
     * - The public access whitelist does not support private network IP addresses, and the internal-facing access whitelist does not support public IP addresses.
     *
     * @param request - UpdateWhiteIpsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWhiteIpsResponse
     *
     * @param string                $InstanceId
     * @param UpdateWhiteIpsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateWhiteIpsResponse
     */
    public function updateWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->modifyMode) {
            @$query['modifyMode'] = $request->modifyMode;
        }

        $body = [];
        if (null !== $request->esIPWhitelist) {
            @$body['esIPWhitelist'] = $request->esIPWhitelist;
        }

        if (null !== $request->whiteIpGroup) {
            @$body['whiteIpGroup'] = $request->whiteIpGroup;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWhiteIps',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/white-ips',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the VPC internal-facing access whitelist of an Elasticsearch instance.
     *
     * @remarks
     * ## Before you begin
     * - You cannot update information when the instance status is activating, invalid, or freeze (inactive).
     * - You can update the whitelist in two ways: IP whitelist list and IP whitelist group. The two methods cannot be used at the same time, and they support different parameters besides InstanceId and clientToken. The details are as follows:
     *     - IP whitelist list: esIPWhitelist
     *     - IP whitelist group: modifyMode, whiteIpGroup
     * - The public access whitelist does not support private network IP addresses, and the internal-facing access whitelist does not support public IP addresses.
     *
     * @param request - UpdateWhiteIpsRequest
     *
     * @returns UpdateWhiteIpsResponse
     *
     * @param string                $InstanceId
     * @param UpdateWhiteIpsRequest $request
     *
     * @return UpdateWhiteIpsResponse
     */
    public function updateWhiteIps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the X-Pack monitoring and alerting configuration of a Logstash instance.
     *
     * @param request - UpdateXpackMonitorConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateXpackMonitorConfigResponse
     *
     * @param string                          $InstanceId
     * @param UpdateXpackMonitorConfigRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateXpackMonitorConfigResponse
     */
    public function updateXpackMonitorConfigWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->endpoints) {
            @$body['endpoints'] = $request->endpoints;
        }

        if (null !== $request->password) {
            @$body['password'] = $request->password;
        }

        if (null !== $request->userName) {
            @$body['userName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateXpackMonitorConfig',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/xpack-monitor-config',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateXpackMonitorConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the X-Pack monitoring and alerting configuration of a Logstash instance.
     *
     * @param request - UpdateXpackMonitorConfigRequest
     *
     * @returns UpdateXpackMonitorConfigResponse
     *
     * @param string                          $InstanceId
     * @param UpdateXpackMonitorConfigRequest $request
     *
     * @return UpdateXpackMonitorConfigResponse
     */
    public function updateXpackMonitorConfig($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateXpackMonitorConfigWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Upgrades the version of an Elasticsearch instance. Both major version upgrades and kernel version upgrades are supported.
     *
     * @remarks
     * > The version upgrade feature currently supports only the following upgrade paths: 5.5.3 to 5.6.16, 5.6.16 to 6.3.2, and 6.3.2 to 6.7.0. Upgrades between other versions are not supported. For more information, see [Upgrade version](https://help.aliyun.com/document_detail/148786.html).
     *
     * @param request - UpgradeEngineVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeEngineVersionResponse
     *
     * @param string                      $InstanceId
     * @param UpgradeEngineVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpgradeEngineVersionResponse
     */
    public function upgradeEngineVersionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        if (null !== $request->updateStrategy) {
            @$query['updateStrategy'] = $request->updateStrategy;
        }

        $body = [];
        if (null !== $request->plugins) {
            @$body['plugins'] = $request->plugins;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpgradeEngineVersion',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/actions/upgrade-version',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeEngineVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the version of an Elasticsearch instance. Both major version upgrades and kernel version upgrades are supported.
     *
     * @remarks
     * > The version upgrade feature currently supports only the following upgrade paths: 5.5.3 to 5.6.16, 5.6.16 to 6.3.2, and 6.3.2 to 6.7.0. Upgrades between other versions are not supported. For more information, see [Upgrade version](https://help.aliyun.com/document_detail/148786.html).
     *
     * @param request - UpgradeEngineVersionRequest
     *
     * @returns UpgradeEngineVersionResponse
     *
     * @param string                      $InstanceId
     * @param UpgradeEngineVersionRequest $request
     *
     * @return UpgradeEngineVersionResponse
     */
    public function upgradeEngineVersion($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeEngineVersionWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Query whether a minor version is available for upgrade.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeInfoResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpgradeInfoResponse
     */
    public function upgradeInfoWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'UpgradeInfo',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($instanceId) . '/upgradeInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query whether a minor version is available for upgrade.
     *
     * @returns UpgradeInfoResponse
     *
     * @param string $instanceId
     *
     * @return UpgradeInfoResponse
     */
    public function upgradeInfo($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeInfoWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Validates the connectivity of an Elasticsearch instance that provides X-Pack monitoring.
     *
     * @remarks
     * > To enable X-Pack monitoring for Logstash, configure an Elasticsearch instance. After the configuration, you can monitor the Logstash instance in the Kibana console of the corresponding Elasticsearch instance.
     *
     * @param request - ValidateConnectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateConnectionResponse
     *
     * @param string                    $InstanceId
     * @param ValidateConnectionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ValidateConnectionResponse
     */
    public function validateConnectionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'ValidateConnection',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/logstashes/' . Url::percentEncode($InstanceId) . '/validate-connection',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ValidateConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validates the connectivity of an Elasticsearch instance that provides X-Pack monitoring.
     *
     * @remarks
     * > To enable X-Pack monitoring for Logstash, configure an Elasticsearch instance. After the configuration, you can monitor the Logstash instance in the Kibana console of the corresponding Elasticsearch instance.
     *
     * @param request - ValidateConnectionRequest
     *
     * @returns ValidateConnectionResponse
     *
     * @param string                    $InstanceId
     * @param ValidateConnectionRequest $request
     *
     * @return ValidateConnectionResponse
     */
    public function validateConnection($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateConnectionWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Checks whether specific nodes in a specified instance can be scaled in.
     *
     * @param request - ValidateShrinkNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateShrinkNodesResponse
     *
     * @param string                     $InstanceId
     * @param ValidateShrinkNodesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ValidateShrinkNodesResponse
     */
    public function validateShrinkNodesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->count) {
            @$query['count'] = $request->count;
        }

        if (null !== $request->ignoreStatus) {
            @$query['ignoreStatus'] = $request->ignoreStatus;
        }

        if (null !== $request->nodeType) {
            @$query['nodeType'] = $request->nodeType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'ValidateShrinkNodes',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/validate-shrink-nodes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ValidateShrinkNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether specific nodes in a specified instance can be scaled in.
     *
     * @param request - ValidateShrinkNodesRequest
     *
     * @returns ValidateShrinkNodesResponse
     *
     * @param string                     $InstanceId
     * @param ValidateShrinkNodesRequest $request
     *
     * @return ValidateShrinkNodesResponse
     */
    public function validateShrinkNodes($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateShrinkNodesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Verifies the service-linked role (SLR) permission of the current account.
     *
     * @remarks
     * > When you use a collector to collect logs from different data sources, you must first authorize the creation of a service-linked role. You can call this operation to check whether the service-linked role has been created.
     *
     * @param request - ValidateSlrPermissionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateSlrPermissionResponse
     *
     * @param ValidateSlrPermissionRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ValidateSlrPermissionResponse
     */
    public function validateSlrPermissionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->rolename) {
            @$query['rolename'] = $request->rolename;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ValidateSlrPermission',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/user/servicerolepermission',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ValidateSlrPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the service-linked role (SLR) permission of the current account.
     *
     * @remarks
     * > When you use a collector to collect logs from different data sources, you must first authorize the creation of a service-linked role. You can call this operation to check whether the service-linked role has been created.
     *
     * @param request - ValidateSlrPermissionRequest
     *
     * @returns ValidateSlrPermissionResponse
     *
     * @param ValidateSlrPermissionRequest $request
     *
     * @return ValidateSlrPermissionResponse
     */
    public function validateSlrPermission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateSlrPermissionWithOptions($request, $headers, $runtime);
    }

    /**
     * Validates whether data on specific nodes in a specified instance can be migrated.
     *
     * @param request - ValidateTransferableNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateTransferableNodesResponse
     *
     * @param string                           $InstanceId
     * @param ValidateTransferableNodesRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ValidateTransferableNodesResponse
     */
    public function validateTransferableNodesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nodeType) {
            @$query['nodeType'] = $request->nodeType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'ValidateTransferableNodes',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances/' . Url::percentEncode($InstanceId) . '/validate-transfer-nodes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ValidateTransferableNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validates whether data on specific nodes in a specified instance can be migrated.
     *
     * @param request - ValidateTransferableNodesRequest
     *
     * @returns ValidateTransferableNodesResponse
     *
     * @param string                           $InstanceId
     * @param ValidateTransferableNodesRequest $request
     *
     * @return ValidateTransferableNodesResponse
     */
    public function validateTransferableNodes($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateTransferableNodesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Creates an Elasticsearch instance.
     *
     * @remarks
     * ### Precautions
     * - Before using this operation, make sure that you fully understand the billing methods and pricing of Elasticsearch. For more information, see [Alibaba Cloud Elasticsearch pricing](https://www.aliyun.com/price/product?spm=a2c4g.11186623.2.7.657d2cbeRoSPCd#/elasticsearch/detail).
     * - Real-name verification is required to create instances.<props="china"><ph> For more information, see [Real-name verification](https://help.aliyun.com/document_detail/37175.html).</ph>
     * - You do not need to specify a zone when creating an instance. By default, the instance is in the same zone as the selected VPC.
     *
     * @param request - CreateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->clientNodeConfiguration) {
            @$body['clientNodeConfiguration'] = $request->clientNodeConfiguration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->elasticDataNodeConfiguration) {
            @$body['elasticDataNodeConfiguration'] = $request->elasticDataNodeConfiguration;
        }

        if (null !== $request->esAdminPassword) {
            @$body['esAdminPassword'] = $request->esAdminPassword;
        }

        if (null !== $request->esVersion) {
            @$body['esVersion'] = $request->esVersion;
        }

        if (null !== $request->instanceCategory) {
            @$body['instanceCategory'] = $request->instanceCategory;
        }

        if (null !== $request->kibanaConfiguration) {
            @$body['kibanaConfiguration'] = $request->kibanaConfiguration;
        }

        if (null !== $request->masterConfiguration) {
            @$body['masterConfiguration'] = $request->masterConfiguration;
        }

        if (null !== $request->networkConfig) {
            @$body['networkConfig'] = $request->networkConfig;
        }

        if (null !== $request->nodeAmount) {
            @$body['nodeAmount'] = $request->nodeAmount;
        }

        if (null !== $request->nodeSpec) {
            @$body['nodeSpec'] = $request->nodeSpec;
        }

        if (null !== $request->paymentInfo) {
            @$body['paymentInfo'] = $request->paymentInfo;
        }

        if (null !== $request->paymentType) {
            @$body['paymentType'] = $request->paymentType;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->warmNodeConfiguration) {
            @$body['warmNodeConfiguration'] = $request->warmNodeConfiguration;
        }

        if (null !== $request->zoneCount) {
            @$body['zoneCount'] = $request->zoneCount;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'createInstance',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an Elasticsearch instance.
     *
     * @remarks
     * ### Precautions
     * - Before using this operation, make sure that you fully understand the billing methods and pricing of Elasticsearch. For more information, see [Alibaba Cloud Elasticsearch pricing](https://www.aliyun.com/price/product?spm=a2c4g.11186623.2.7.657d2cbeRoSPCd#/elasticsearch/detail).
     * - Real-name verification is required to create instances.<props="china"><ph> For more information, see [Real-name verification](https://help.aliyun.com/document_detail/37175.html).</ph>
     * - You do not need to specify a zone when creating an instance. By default, the instance is in the same zone as the selected VPC.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }
}
