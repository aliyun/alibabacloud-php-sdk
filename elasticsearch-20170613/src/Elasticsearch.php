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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeApmResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetOpenStoreUsageResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionalInstanceConfigResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetSuggestShrinkableNodesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetSuggestShrinkableNodesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetTransferableNodesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetTransferableNodesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InitializeOperationRoleRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InitializeOperationRoleResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListApmRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListApmResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListTagsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListTagsResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyWhiteIpsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyWhiteIpsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\OpenDiagnosisRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\OpenDiagnosisResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\OpenHttpsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\OpenHttpsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\PostEmonTryAlarmRuleRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\PostEmonTryAlarmRuleResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RecommendTemplatesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RecommendTemplatesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ReinstallCollectorRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ReinstallCollectorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RemoveApmResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StartApmResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StartCollectorRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StartCollectorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StopApmResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateApmRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateApmResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaPvlNetworkRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaPvlNetworkResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaSettingsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaSettingsResponse;
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
     * Restores nodes in disabled zones. This operation is available only for multi-zone Elasticsearch clusters.
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
     * Restores nodes in disabled zones. This operation is available only for multi-zone Elasticsearch clusters.
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
     * Connects Elasticsearch clusters.
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
     * Connects Elasticsearch clusters.
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
     * Call the AddSnapshotRepo to create a reference repository when configuring a cross-cluster OSS repository.
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
     * Call the AddSnapshotRepo to create a reference repository when configuring a cross-cluster OSS repository.
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
     * Restores an Elasticsearch cluster that is frozen after it is released.
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
     * Restores an Elasticsearch cluster that is frozen after it is released.
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
     * Restores a Logstash cluster that is frozen after it is released.
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
     * Restores a Logstash cluster that is frozen after it is released.
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
     * Capacity Planning.
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
     * Capacity Planning.
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
     * 关闭实例的智能运维功能.
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
     * 关闭实例的智能运维功能.
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
     * Disable Managed Index.
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
     * Disable Managed Index.
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
     * 创建收集器.
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
     * 创建收集器.
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
     * 创建Elasticsearch组合模板
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
     * 创建Elasticsearch组合模板
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
     * 创建数据流
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
     * 创建数据流
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
     * 创建索引生命周期策略.
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
     * 创建索引生命周期策略.
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
     * 创建索引模版.
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
     * 创建索引模版.
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
     * 创建logstash实例.
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
     * 创建logstash实例.
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
     * 创建Logstash管道任务
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
     * 创建Logstash管道任务
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
     * 创建私网链接VPC终端节点.
     *
     * @remarks
     * 5FFD9ED4-C2EC-4E89-B22B-1ACB6FE1D\\*\\*\\*
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
     * 创建私网链接VPC终端节点.
     *
     * @remarks
     * 5FFD9ED4-C2EC-4E89-B22B-1ACB6FE1D\\*\\*\\*
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
     * Invoke DeactivateZones to offline certain zones when there are multiple availability zones, and migrate nodes in the offline zones to other availability zones.
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
     * Invoke DeactivateZones to offline certain zones when there are multiple availability zones, and migrate nodes in the offline zones to other availability zones.
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
     * Deletes a shipper.
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
     * Deletes a shipper.
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
     * 删除组合索引模板
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
     * 删除组合索引模板
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
     * 删除数据流
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
     * 删除数据流
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
     * 删除历史索引模板
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
     * 删除历史索引模板
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
     * 删除ES集群索引模版.
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
     * 删除ES集群索引模版.
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
     * Releases a Logstash cluster.
     *
     * @remarks
     * Before you call this operation, take note of the following information: After the cluster is released, the physical resources used by the cluster are reclaimed. The data stored in the cluster is deleted and cannot be recovered. The disks attached to the nodes in the cluster and the snapshots created for the cluster are released.
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
     * Releases a Logstash cluster.
     *
     * @remarks
     * Before you call this operation, take note of the following information: After the cluster is released, the physical resources used by the cluster are reclaimed. The data stored in the cluster is deleted and cannot be recovered. The disks attached to the nodes in the cluster and the snapshots created for the cluster are released.
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
     * Deletes a pipeline that is configured for a Logstash cluster.
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
     * Deletes a pipeline that is configured for a Logstash cluster.
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
     * 删除服务账号vpc下的终端节点.
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
     * 删除服务账号vpc下的终端节点.
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
     * Queries the information of ES-operator that is installed for a specified Container Service for Kubernetes (ACK) cluster.
     *
     * @remarks
     * > Before you install a shipper on an ACK cluster, you can call this operation to query the installation status of ES-operator for the ACK cluster.
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
     * Queries the information of ES-operator that is installed for a specified Container Service for Kubernetes (ACK) cluster.
     *
     * @remarks
     * > Before you install a shipper on an ACK cluster, you can call this operation to query the installation status of ES-operator for the ACK cluster.
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
     * Describe APM.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApmResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeApmResponse
     */
    public function describeApmWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeApm',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/apm/' . Url::percentEncode($instanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Describe APM.
     *
     * @returns DescribeApmResponse
     *
     * @param string $instanceId
     *
     * @return DescribeApmResponse
     */
    public function describeApm($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApmWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Queries the details of a shipper.
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
     * Queries the details of a shipper.
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
     * 查看组合索引模板详情.
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
     * 查看组合索引模板详情.
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
     * DescribeDeprecatedTemplate.
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
     * DescribeDeprecatedTemplate.
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
     * 获取集群动态指标.
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
     * 获取集群动态指标.
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
     * Queries the health status of an Elasticsearch cluster.
     *
     * @remarks
     * An Elasticsearch cluster can be in a health state indicated by one of the following colors:
     * *   GREEN: Primary shards and replica shards for the primary shards are normally allocated.
     * *   YELLOW: Primary shards are normally allocated, but replica shards for the primary shards are not normally allocated.
     * *   RED: Primary shards are not normally allocated.
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
     * Queries the health status of an Elasticsearch cluster.
     *
     * @remarks
     * An Elasticsearch cluster can be in a health state indicated by one of the following colors:
     * *   GREEN: Primary shards and replica shards for the primary shards are normally allocated.
     * *   YELLOW: Primary shards are normally allocated, but replica shards for the primary shards are not normally allocated.
     * *   RED: Primary shards are not normally allocated.
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
     * The name of the dictionary file.
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
     * The name of the dictionary file.
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
     * 获取Elasticsearch集群Kibana节点settings配置.
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
     * 获取Elasticsearch集群Kibana节点settings配置.
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
     * 查看Logstash实例详情.
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
     * 查看Logstash实例详情.
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
     * Queries the management configurations of pipelines in a Logstash cluster.
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
     * Queries the management configurations of pipelines in a Logstash cluster.
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
     * 查看备份设置.
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
     * 查看备份设置.
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
     * Queries the configurations of the X-Pack Monitoring feature of a Logstash cluster.
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
     * Queries the configurations of the X-Pack Monitoring feature of a Logstash cluster.
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
     * 触发ES实例智能诊断.
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
     * 触发ES实例智能诊断.
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
     * 关闭kibana私网.
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
     * 关闭kibana私网.
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
     * 开启v3 kibana私网.
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
     * 开启v3 kibana私网.
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
     * Queries the estimated time that is required to restart a Logstash cluster.
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
     * Queries the estimated time that is required to restart a Logstash cluster.
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
     * Queries the estimated time that is required to restart an Elasticsearch cluster.
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
     * Queries the estimated time that is required to restart an Elasticsearch cluster.
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
     * Call GetClusterDataInformation to obtain the data information about the cluster.
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
     * Call GetClusterDataInformation to obtain the data information about the cluster.
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
     * 获取高级监控报警自定义Grafana监控报警项.
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
     * 获取高级监控报警自定义Grafana监控报警项.
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
     * 获取高级监控报警自定义Grafana监控大盘列表.
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
     * 获取高级监控报警自定义Grafana监控大盘列表.
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
     * GetEmonMonitorData.
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
     * GetEmonMonitorData.
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
     * 统计OpenStore实例的存储容量和使用情况.
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
     * 统计OpenStore实例的存储容量和使用情况.
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
     * The maximum number of nodes.
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
     * The maximum number of nodes.
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
     * ES集群可缩容节点.
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
     * ES集群可缩容节点.
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
     * 获取可数据迁移节点.
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
     * 获取可数据迁移节点.
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
     * Creates a service-linked role.
     *
     * @remarks
     * > Before you perform auto scaling for a cluster at the China site (aliyun.com) or you use shippers to collect logs, you must create a service-linked role.
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
     * Creates a service-linked role.
     *
     * @remarks
     * > Before you perform auto scaling for a cluster at the China site (aliyun.com) or you use shippers to collect logs, you must create a service-linked role.
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
     * Installs ES-operator for a Container Service for Kubernetes (ACK) cluster.
     *
     * @remarks
     * > Before you install a shipper for an ACK cluster, you must call this operation to install ES-operator for the cluster.
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
     * Installs ES-operator for a Container Service for Kubernetes (ACK) cluster.
     *
     * @remarks
     * > Before you install a shipper for an ACK cluster, you must call this operation to install ES-operator for the cluster.
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
     * Call InstallKibanaSystemPlugin to install the Kibana plug-in. The Kibana specification must be 2-Core 4 GB or higher.
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
     * Call InstallKibanaSystemPlugin to install the Kibana plug-in. The Kibana specification must be 2-Core 4 GB or higher.
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
     * The returned data also contains **Headers** parameters, indicating that header information is returned.
     *
     * @remarks
     * ls-cn-oew1qbgl\\*\\*\\*\\*
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
     * The returned data also contains **Headers** parameters, indicating that header information is returned.
     *
     * @remarks
     * ls-cn-oew1qbgl\\*\\*\\*\\*
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
     * Call InstallSystemPlugin to install a system preset plug-in.
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
     * Call InstallSystemPlugin to install a system preset plug-in.
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
     * Installs custom plug-ins that are uploaded to the Elasticsearch console.
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
     * Installs custom plug-ins that are uploaded to the Elasticsearch console.
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
     * After the task is suspended, the Logstash cluster is in the suspended state.
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
     * After the task is suspended, the Logstash cluster is in the suspended state.
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
     * Queries a list of Container Service for Kubernetes (ACK) clusters.
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
     * Queries a list of Container Service for Kubernetes (ACK) clusters.
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
     * > When you install a shipper on an ACK cluster, you must specify a namespace. You can call this operation to query all namespaces in the ACK cluster, and select a namespace based on your business requirements.
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
     * > When you install a shipper on an ACK cluster, you must specify a namespace. You can call this operation to query all namespaces in the ACK cluster, and select a namespace based on your business requirements.
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
     * 变更记录 变更详情.
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
     * 变更记录 变更详情.
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
     * es-cn-tl32cpgwa002l\\*\\*\\*\\*.
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
     * es-cn-tl32cpgwa002l\\*\\*\\*\\*.
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
     * 实例可添加的OSS引用仓库.
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
     * 实例可添加的OSS引用仓库.
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
     * ListApm.
     *
     * @param request - ListApmRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApmResponse
     *
     * @param ListApmRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListApmResponse
     */
    public function listApmWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->output) {
            @$query['output'] = $request->output;
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
            'action' => 'ListApm',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/apm',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListApm.
     *
     * @param request - ListApmRequest
     *
     * @returns ListApmResponse
     *
     * @param ListApmRequest $request
     *
     * @return ListApmResponse
     */
    public function listApm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApmWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the Elasticsearch clusters that can be associated with a Logstash cluster when you configure the X-Pack Monitoring feature for the Logstash cluster.
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
     * Queries the Elasticsearch clusters that can be associated with a Logstash cluster when you configure the X-Pack Monitoring feature for the Logstash cluster.
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
     * Queries shippers.
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
     * Queries shippers.
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
     * ES集群组合索引列表.
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
     * ES集群组合索引列表.
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
     * 获取与当前实例进行网络互通的实例列表.
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
     * 获取与当前实例进行网络互通的实例列表.
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
     * 查询数据流
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
     * 查询数据流
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
     * Queries the default configuration files of shippers.
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
     * Queries the default configuration files of shippers.
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
     * ListDeprecatedTemplates.
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
     * ListDeprecatedTemplates.
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
     * Queries the indexes for health diagnosis performed on an Elasticsearch cluster.
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
     * Queries the indexes for health diagnosis performed on an Elasticsearch cluster.
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
     * 获取集群诊断报告列表.
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
     * 获取集群诊断报告列表.
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
     * Queries the IDs of the historical intelligent O&M reports of an Elasticsearch cluster.
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
     * Queries the IDs of the historical intelligent O&M reports of an Elasticsearch cluster.
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
     * The diagnostic item is used to check whether data write requests of a cluster are accumulated. If data write requests are accumulated, a bulk rejection occurs. This may cause data loss and severely consume system resources.
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
     * The diagnostic item is used to check whether data write requests of a cluster are accumulated. If data write requests are accumulated, a bulk rejection occurs. This may cause data loss and severely consume system resources.
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
     * Queries the details of a specified type of dictionary.
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
     * Queries the details of a specified type of dictionary.
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
     * 查询ecs实例.
     *
     * @remarks
     * *Important** To call this operation, you must create the Aliyun Elasticsearch AccessingOOSRole and the system service role AliyunOOSAccessingECS 4ESRole to Elasticsearch the service account to obtain the ECS access permissions of the primary account. For more information, see [Collect ECS service logs](https://help.aliyun.com/document_detail/146446.html).
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
     * 查询ecs实例.
     *
     * @remarks
     * *Important** To call this operation, you must create the Aliyun Elasticsearch AccessingOOSRole and the system service role AliyunOOSAccessingECS 4ESRole to Elasticsearch the service account to obtain the ECS access permissions of the primary account. For more information, see [Collect ECS service logs](https://help.aliyun.com/document_detail/146446.html).
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
     * Queries the driver files of a Logstash cluster.
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
     * Queries the driver files of a Logstash cluster.
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
     * 查询Elasticsearch实例列表.
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
     * 查询Elasticsearch实例列表.
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
     * 集群触发的硬件运维事件列表.
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
     * 集群触发的硬件运维事件列表.
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
     * 获取当前实例先特定的索引列表.
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
     * 获取当前实例先特定的索引列表.
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
     * Queries a list of Kibana plug-ins.
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
     * Queries a list of Kibana plug-ins.
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
     * 查询kibana私网连接信息.
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
     * 查询kibana私网连接信息.
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
     * Logstash集群列表.
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
     * Logstash集群列表.
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
     * 获取Logstash日志.
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
     * 获取Logstash日志.
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
     * Logstash插件列表.
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
     * Logstash插件列表.
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
     * Queries the statuses of Elastic Compute Service (ECS) instances on which a shipper is installed.
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
     * Queries the statuses of Elastic Compute Service (ECS) instances on which a shipper is installed.
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
     * ListPipeline.
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
     * ListPipeline.
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
     * The error message returned.
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
     * The error message returned.
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
     * ES系统插件列表.
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
     * ES系统插件列表.
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
     * 查看Elasticsearch集群各种类型的日志.
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
     * 查看Elasticsearch集群各种类型的日志.
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
     * Queries the information about shards that are being restored or shards that are restored. By default, this operation returns only the information about shards that are being restored after you call this operation.
     *
     * @remarks
     * > The restoration of a shard is a process of synchronizing data from a primary shard to a replica shard. After the restoration is complete, the replica shard is available for data searches.
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
     * Queries the information about shards that are being restored or shards that are restored. By default, this operation returns only the information about shards that are being restored after you call this operation.
     *
     * @remarks
     * > The restoration of a shard is a process of synchronizing data from a primary shard to a replica shard. After the restoration is complete, the replica shard is available for data searches.
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
     * 获取跨集群索引仓库列表.
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
     * 获取跨集群索引仓库列表.
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
     * 查看资源和标签关系.
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
     * 查看资源和标签关系.
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
     * 查看所有已常见的标签.
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
     * 查看所有已常见的标签.
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
     * Queries the statuses of endpoints in the virtual private cloud (VPC) within the Elasticsearch service account.
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
     * Queries the statuses of endpoints in the virtual private cloud (VPC) within the Elasticsearch service account.
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
     * Call the MigrateToOtherZone to migrate the nodes in the specified zone to the destination zone.
     *
     * @remarks
     * If the specifications in your zone are insufficient, you can upgrade your instance to nodes in another zone. Before calling this interface, you must ensure that:
     * *   The error message returned because the current account is in a zone that has sufficient resources.
     *     After migrating nodes with current specifications to another zone, you need to manually [upgrade cluster](https://help.aliyun.com/document_detail/96650.html) because the cluster will not be upgraded during the migration process. Therefore, select a zone with sufficient resources to avoid cluster upgrade failure. We recommend that you choose new zones that are in lower alphabetical order. For example, for cn-hangzhou-e and cn-hangzhou-h zones, choose cn-hangzhou-h first.
     * *   The cluster is in the healthy state.
     *     Can be passed`  GET _cat/health?v  `command to view the health status of the cluster.
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
     * Call the MigrateToOtherZone to migrate the nodes in the specified zone to the destination zone.
     *
     * @remarks
     * If the specifications in your zone are insufficient, you can upgrade your instance to nodes in another zone. Before calling this interface, you must ensure that:
     * *   The error message returned because the current account is in a zone that has sufficient resources.
     *     After migrating nodes with current specifications to another zone, you need to manually [upgrade cluster](https://help.aliyun.com/document_detail/96650.html) because the cluster will not be upgraded during the migration process. Therefore, select a zone with sufficient resources to avoid cluster upgrade failure. We recommend that you choose new zones that are in lower alphabetical order. For example, for cn-hangzhou-e and cn-hangzhou-h zones, choose cn-hangzhou-h first.
     * *   The cluster is in the healthy state.
     *     Can be passed`  GET _cat/health?v  `command to view the health status of the cluster.
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
     * Changes the Elastic Compute Service (ECS) instances on which a shipper is installed.
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
     * Changes the Elastic Compute Service (ECS) instances on which a shipper is installed.
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
     * ## RequestBody
     * You must also specify the following parameters in the RequestBody parameter to specify the maintenance window information.
     * | Parameter | Type | Required | Example | Description |
     * | --------- | ---- | -------- | ------- | ----------- |
     * | maintainStartTime | String | No | 02:00Z | The start time of the maintenance window. Specify the time in the HH:mmZ format. The time must be in UTC. |
     * | maintainEndTime | String | No | 06:00Z | The end time of the maintenance window. Specify the time in the HH:mmZ format. The time must be displayed in UTC. |
     * | openMaintainTime | boolean | Yes | true | Specifies whether to enable the maintenance window feature. Only **true** is supported, indicating that the feature is enabled. |
     * Examples:
     * ```
     * {
     *     "openMaintainTime": true,
     *     "maintainStartTime": "03:00Z",
     *     "maintainEndTime": "04:00Z"
     * }
     * ```.
     *
     * @remarks
     * es-cn-n6w1o1x0w001c\\*\\*\\*\\*
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
     * ## RequestBody
     * You must also specify the following parameters in the RequestBody parameter to specify the maintenance window information.
     * | Parameter | Type | Required | Example | Description |
     * | --------- | ---- | -------- | ------- | ----------- |
     * | maintainStartTime | String | No | 02:00Z | The start time of the maintenance window. Specify the time in the HH:mmZ format. The time must be in UTC. |
     * | maintainEndTime | String | No | 06:00Z | The end time of the maintenance window. Specify the time in the HH:mmZ format. The time must be displayed in UTC. |
     * | openMaintainTime | boolean | Yes | true | Specifies whether to enable the maintenance window feature. Only **true** is supported, indicating that the feature is enabled. |
     * Examples:
     * ```
     * {
     *     "openMaintainTime": true,
     *     "maintainStartTime": "03:00Z",
     *     "maintainEndTime": "04:00Z"
     * }
     * ```.
     *
     * @remarks
     * es-cn-n6w1o1x0w001c\\*\\*\\*\\*
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
     * >  If you want to add an IP address whitelist, you can set the modifyMode parameter only to Cover. If you set this parameter to Delete or Append, you can only update an IP address whitelist.
     * *   If you set the modifyMode parameter to Cover and leave the ips parameter empty, the system deletes the specified whitelist. If the whitelist specified by using the groupName parameter does not exist, the system creates such a whitelist.
     * *   If you set the modifyMode parameter to Delete, at least one IP address must be retained for the specified whitelist.
     * *   If you set the modifyMode parameter to Append, you must make sure that the specified whitelist exists. Otherwise, the system reports the NotFound error.
     *
     * @remarks
     * The ID of the cluster.
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
     * >  If you want to add an IP address whitelist, you can set the modifyMode parameter only to Cover. If you set this parameter to Delete or Append, you can only update an IP address whitelist.
     * *   If you set the modifyMode parameter to Cover and leave the ips parameter empty, the system deletes the specified whitelist. If the whitelist specified by using the groupName parameter does not exist, the system creates such a whitelist.
     * *   If you set the modifyMode parameter to Delete, at least one IP address must be retained for the specified whitelist.
     * *   If you set the modifyMode parameter to Append, you must make sure that the specified whitelist exists. Otherwise, the system reports the NotFound error.
     *
     * @remarks
     * The ID of the cluster.
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
     * Migrates an Elasticsearch cluster to a specified resource group.
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
     * Migrates an Elasticsearch cluster to a specified resource group.
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
     * @remarks
     * >  To ensure data security, we recommend that you enable HTTPS.
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
     * @remarks
     * >  To ensure data security, we recommend that you enable HTTPS.
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
     * PostEmonTryAlarmRule.
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
     * PostEmonTryAlarmRule.
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
     * Installs a shipper that failed to be installed when you create the shipper.
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
     * Installs a shipper that failed to be installed when you create the shipper.
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
     * RemoveApm.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveApmResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveApmResponse
     */
    public function removeApmWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RemoveApm',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/apm/' . Url::percentEncode($instanceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * RemoveApm.
     *
     * @returns RemoveApmResponse
     *
     * @param string $instanceId
     *
     * @return RemoveApmResponse
     */
    public function removeApm($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeApmWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Call RenewInstance to renew a subscription instance.
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
     * Call RenewInstance to renew a subscription instance.
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
     * Renews a Logstash cluster.
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
     * Renews a Logstash cluster.
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
     * Restarts a shipper.
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
     * Restarts a shipper.
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
     * You can call this operation to restart a specified Elasticsearch instance.
     *
     * @remarks
     * >  After the instance is restarted, the instance enters the activating state. After the instance is restarted, its status changes to active. Alibaba Cloud Elasticsearch supports restarting a single node. Restarting a node can be divided into normal restart and blue-green restart.
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
     * You can call this operation to restart a specified Elasticsearch instance.
     *
     * @remarks
     * >  After the instance is restarted, the instance enters the activating state. After the instance is restarted, its status changes to active. Alibaba Cloud Elasticsearch supports restarting a single node. Restarting a node can be divided into normal restart and blue-green restart.
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
     * 重启Logstash集群.
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
     * 重启Logstash集群.
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
     * Resumes a change task of a Logstash cluster. After the task is resumed, the Logstash cluster is in the activating state.
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
     * Resumes a change task of a Logstash cluster. After the task is resumed, the Logstash cluster is in the activating state.
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
     * 滚动数据流，生成新索引.
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
     * 滚动数据流，生成新索引.
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
     * Runs pipelines in a Logstash cluster.
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
     * Runs pipelines in a Logstash cluster.
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
     * ES集群缩节点.
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
     * ES集群缩节点.
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
     * StartApm.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartApmResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartApmResponse
     */
    public function startApmWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StartApm',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/apm/' . Url::percentEncode($instanceId) . '/actions/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StartApm.
     *
     * @returns StartApmResponse
     *
     * @param string $instanceId
     *
     * @return StartApmResponse
     */
    public function startApm($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startApmWithOptions($instanceId, $headers, $runtime);
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
     * StopApm.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopApmResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopApmResponse
     */
    public function stopApmWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopApm',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/apm/' . Url::percentEncode($instanceId) . '/actions/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StopApm.
     *
     * @returns StopApmResponse
     *
     * @param string $instanceId
     *
     * @return StopApmResponse
     */
    public function stopApm($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopApmWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Stops a shipper.
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
     * Stops a shipper.
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
     * Stops pipelines in a Logstash cluster.
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
     * Stops pipelines in a Logstash cluster.
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
     * The information about the clusters and tags.
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
     * The information about the clusters and tags.
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
     * 缩节点，数据迁移.
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
     * 缩节点，数据迁移.
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
     * 开关ES集群及Kibana节点公私网访问.
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
     * 开关ES集群及Kibana节点公私网访问.
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
     * Call the UninstallKibanaPlugin to uninstall the Kibana plug-in.
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
     * Call the UninstallKibanaPlugin to uninstall the Kibana plug-in.
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
     * 卸载Logstash实例已安装的插件.
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
     * 卸载Logstash实例已安装的插件.
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
     * Call UninstallPlugin to uninstall the preset plug-in.
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
     * Call UninstallPlugin to uninstall the preset plug-in.
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
     * 删除ES集群实例的用户可见标签.
     *
     * @remarks
     * When you call this operation, take note of the following items:
     * *   You can only delete user tags.
     * > User labels are manually added to instances by users. A system Tag is a tag that Alibaba Cloud services add to instances. System labels are divided into visible labels and invisible labels.
     * *   If you delete a resource tag relationship that is not associated with any resources, you must delete the tags.
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
     * 删除ES集群实例的用户可见标签.
     *
     * @remarks
     * When you call this operation, take note of the following items:
     * *   You can only delete user tags.
     * > User labels are manually added to instances by users. A system Tag is a tag that Alibaba Cloud services add to instances. System labels are divided into visible labels and invisible labels.
     * *   If you delete a resource tag relationship that is not associated with any resources, you must delete the tags.
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
     * 修改ES集群密码
     *
     * @remarks
     * 5A2CFF0E-5718-45B5-9D4D-70B3FF\\*\\*\\*\\*
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
     * 修改ES集群密码
     *
     * @remarks
     * 5A2CFF0E-5718-45B5-9D4D-70B3FF\\*\\*\\*\\*
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
     * Call UpdateAdvancedSetting to change the garbage collector configuration for the specified instance.
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
     * Call UpdateAdvancedSetting to change the garbage collector configuration for the specified instance.
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
     * Updates the dictionary file of the analysis-aliws plug-in.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   Elasticsearch V5.X clusters do not support the analysis-aliws plug-in.
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
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
     * Updates the dictionary file of the analysis-aliws plug-in.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   Elasticsearch V5.X clusters do not support the analysis-aliws plug-in.
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
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
     * 修改APM实规格配置.
     *
     * @param request - UpdateApmRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApmResponse
     *
     * @param string           $instanceId
     * @param UpdateApmRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateApmResponse
     */
    public function updateApmWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->outputES) {
            @$body['outputES'] = $request->outputES;
        }

        if (null !== $request->outputESPassword) {
            @$body['outputESPassword'] = $request->outputESPassword;
        }

        if (null !== $request->outputESUserName) {
            @$body['outputESUserName'] = $request->outputESUserName;
        }

        if (null !== $request->token) {
            @$body['token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateApm',
            'version' => '2017-06-13',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/apm/' . Url::percentEncode($instanceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改APM实规格配置.
     *
     * @param request - UpdateApmRequest
     *
     * @returns UpdateApmResponse
     *
     * @param string           $instanceId
     * @param UpdateApmRequest $request
     *
     * @return UpdateApmResponse
     */
    public function updateApm($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApmWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 修改ES实例访问黑名单，已废弃.
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
     * 修改ES实例访问黑名单，已废弃.
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
     * Updates the configurations of a shipper.
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
     * Updates the configurations of a shipper.
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
     * Changes the name of a shipper.
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
     * Changes the name of a shipper.
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
     * 修改ES集群动态索引.
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
     * 修改ES集群动态索引.
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
     * 修改elasticsearch实例名称名称.
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
     * 修改elasticsearch实例名称名称.
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
     * Call UpdateDiagnosisSettings to update the instance of intelligent operation&maintenance (O&M) scene settings.
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
     * Call UpdateDiagnosisSettings to update the instance of intelligent operation&maintenance (O&M) scene settings.
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
     * Updates a dictionary of an Elasticsearch cluster.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
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
     * Updates a dictionary of an Elasticsearch cluster.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
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
     * 修改集群动态配置.
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
     * 修改集群动态配置.
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
     * Updates the driver files of a Logstash cluster.
     *
     * @remarks
     * When you call this operation, take note of the following items: You can call this operation only to delete the driver files that are uploaded to a Logstash cluster in the Alibaba Cloud Management Console. You can add or modify driver files only in the Alibaba Cloud Management Console.
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
     * Updates the driver files of a Logstash cluster.
     *
     * @remarks
     * When you call this operation, take note of the following items: You can call this operation only to delete the driver files that are uploaded to a Logstash cluster in the Alibaba Cloud Management Console. You can add or modify driver files only in the Alibaba Cloud Management Console.
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
     * Performs a rolling update for the IK dictionaries of an Elasticsearch cluster.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
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
     * Performs a rolling update for the IK dictionaries of an Elasticsearch cluster.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
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
     * 修改ES集群索引生命周期策略.
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
     * 修改ES集群索引生命周期策略.
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
     * 修改ES集群索引模版配置.
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
     * 修改ES集群索引模版配置.
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
     * 修改ES集群节点配置.
     *
     * @remarks
     * es-cn-n6w1ptcb30009\\*\\*\\*\\*
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
     * 修改ES集群节点配置.
     *
     * @remarks
     * es-cn-n6w1ptcb30009\\*\\*\\*\\*
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
     * Call UpdateInstanceChargeType to change the billing method of a pay-as-you-go instance to subscription.
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

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
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
     * Call UpdateInstanceChargeType to change the billing method of a pay-as-you-go instance to subscription.
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
     * Call UpdateInstanceSettings to update the YML configuration of a specified instance.
     *
     * @remarks
     * When you call this operation, take note of the following items:
     * When the instance is in the activating, invalid, or inactive state, you cannot update the configuration.
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

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
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
     * Call UpdateInstanceSettings to update the YML configuration of a specified instance.
     *
     * @remarks
     * When you call this operation, take note of the following items:
     * When the instance is in the activating, invalid, or inactive state, you cannot update the configuration.
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
     * 更新kibana私网链接.
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
     * 更新kibana私网链接.
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
     * Call UpdateKibanaSettings to modify the Kibana configuration. Currently, you can only modify the Kibana language configuration.
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
     * Call UpdateKibanaSettings to modify the Kibana configuration. Currently, you can only modify the Kibana language configuration.
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
     * Updates an IP address whitelist for access to the Kibana console of a specified Elasticsearch cluster.
     *
     * @remarks
     *   Before you call this operation, you must make sure that the cluster is not in the activating, invalid, or inactive state.
     * *   You can update an IP address whitelist by using the following parameters:
     *     *   kibanaIPWhitelist
     *     *   modifyMode and whiteIpGroup
     * *   You cannot specify private IP addresses for public IP address whitelists and cannot specify public IP addresses for private IP address whitelists.
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
     * Updates an IP address whitelist for access to the Kibana console of a specified Elasticsearch cluster.
     *
     * @remarks
     *   Before you call this operation, you must make sure that the cluster is not in the activating, invalid, or inactive state.
     * *   You can update an IP address whitelist by using the following parameters:
     *     *   kibanaIPWhitelist
     *     *   modifyMode and whiteIpGroup
     * *   You cannot specify private IP addresses for public IP address whitelists and cannot specify public IP addresses for private IP address whitelists.
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
     * 修改Logstash节点规格磁盘配置.
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
     * 修改Logstash节点规格磁盘配置.
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
     * Switches the billing method of a Logstash cluster from pay-as-you-go to subscription.
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
     * Switches the billing method of a Logstash cluster from pay-as-you-go to subscription.
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
     * Changes the name of a specified Logstash cluster.
     *
     * @remarks
     * When you call this operation, take note of the following items: You cannot change the name of a cluster that is in the activating, invalid, or inactive state.
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
     * Changes the name of a specified Logstash cluster.
     *
     * @remarks
     * When you call this operation, take note of the following items: You cannot change the name of a cluster that is in the activating, invalid, or inactive state.
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
     * Updates the configuration of a specified Logstash cluster.
     *
     * @remarks
     * When you call this operation, take note of the following items:
     * If the instance is in the Active (activating), Invalid (invalid), and Inactive (inactive) state, the information cannot be updated.
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
     * Updates the configuration of a specified Logstash cluster.
     *
     * @remarks
     * When you call this operation, take note of the following items:
     * If the instance is in the Active (activating), Invalid (invalid), and Inactive (inactive) state, the information cannot be updated.
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
     * 修改Logstash管道配置.
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
     * 修改Logstash管道配置.
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
     * Updates a pipeline of a Logstash cluster.
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
     * Updates a pipeline of a Logstash cluster.
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
     * ## RequestBody
     * | Property | Type | Required | Example | Description |
     * | -------- | ---- | -------- | ------- | ----------- |
     * | privateNetworkIpWhiteList | List<String> | No | ["0.0.XX.XX","10.2.XX.XX","192.168.XX.XX/25"] | The list of IP address whitelists. This parameter is available if whiteIpGroup is left empty. The value of this parameter updates the IP address whitelist configurations in the Default whitelist group.
     * You cannot configure both privateNetworkIpWhiteList and whiteIpGroup. |
     * | whiteIpGroup | Object | No |  | You can update the whitelist configurations of an instance by using a whitelist group. You can update only one whitelist group.
     * You cannot configure both privateNetworkIpWhiteList and whiteIpGroup. |
     * | └ groupName | String | No | test_group_name | The group name of the whitelist group. This parameter is required if the whiteIpGroup parameter is optional. |
     * | └ ips | List<String> | No | ["0.0.0.0", "10.2.XX.XX"] | The list of IP addresses in the whitelist group. This parameter is required if the whiteIpGroup parameter is optional. |
     * > **Notice**  The addition and deletion of whitelist groups are implemented by calling modifyMode to Cover. Delete and Append cannot add or delete whitelist groups at the same time. You can only modify the IP address list in the whitelist group. Take note of the following items: - If the modifyMode parameter is set to Cover, the whitelist group is deleted if ips is empty. If groupName is not in the list of existing whitelist group names, a whitelist group is created.
     * - If the modifyMode parameter is set to Delete, you must retain at least one IP address for the deleted ips.
     * - If the modifyMode parameter is set to Append, make sure that the whitelist group name has been created. Otherwise, the NotFound error message appears.
     *
     * @remarks
     * >  In the following returned example, only the parameters in the returned data list are guaranteed to be included, and the parameters not mentioned are for reference only. For more information about the parameters, see [ListInstance](https://help.aliyun.com/document_detail/142230.html). You cannot force a dependency in a program to get these parameters.
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
     * ## RequestBody
     * | Property | Type | Required | Example | Description |
     * | -------- | ---- | -------- | ------- | ----------- |
     * | privateNetworkIpWhiteList | List<String> | No | ["0.0.XX.XX","10.2.XX.XX","192.168.XX.XX/25"] | The list of IP address whitelists. This parameter is available if whiteIpGroup is left empty. The value of this parameter updates the IP address whitelist configurations in the Default whitelist group.
     * You cannot configure both privateNetworkIpWhiteList and whiteIpGroup. |
     * | whiteIpGroup | Object | No |  | You can update the whitelist configurations of an instance by using a whitelist group. You can update only one whitelist group.
     * You cannot configure both privateNetworkIpWhiteList and whiteIpGroup. |
     * | └ groupName | String | No | test_group_name | The group name of the whitelist group. This parameter is required if the whiteIpGroup parameter is optional. |
     * | └ ips | List<String> | No | ["0.0.0.0", "10.2.XX.XX"] | The list of IP addresses in the whitelist group. This parameter is required if the whiteIpGroup parameter is optional. |
     * > **Notice**  The addition and deletion of whitelist groups are implemented by calling modifyMode to Cover. Delete and Append cannot add or delete whitelist groups at the same time. You can only modify the IP address list in the whitelist group. Take note of the following items: - If the modifyMode parameter is set to Cover, the whitelist group is deleted if ips is empty. If groupName is not in the list of existing whitelist group names, a whitelist group is created.
     * - If the modifyMode parameter is set to Delete, you must retain at least one IP address for the deleted ips.
     * - If the modifyMode parameter is set to Append, make sure that the whitelist group name has been created. Otherwise, the NotFound error message appears.
     *
     * @remarks
     * >  In the following returned example, only the parameters in the returned data list are guaranteed to be included, and the parameters not mentioned are for reference only. For more information about the parameters, see [ListInstance](https://help.aliyun.com/document_detail/142230.html). You cannot force a dependency in a program to get these parameters.
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
     * Call UpdatePublicNetwork to open or close the public network address of the specified elasticsearch instance.
     *
     * @remarks
     * When you call this operation, take note of the following items:
     * When the instance is in the activating, invalid, or inactive state, its configuration cannot be updated.
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
     * Call UpdatePublicNetwork to open or close the public network address of the specified elasticsearch instance.
     *
     * @remarks
     * When you call this operation, take note of the following items:
     * When the instance is in the activating, invalid, or inactive state, its configuration cannot be updated.
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
     * ## RequestBody
     * | Property | Type | Required | Example | Description |
     * | -------- | ---- | -------- | ------- | ----------- |
     * | publicIpWhitelist | List<String> | Yes | ["0.0.0.0/0","0.0.0.0/1"] | The list of IP address whitelists. This parameter is available if whiteIpGroup is left empty. The value of this parameter updates the IP address whitelist configurations in the Default whitelist group.
     * You cannot configure both publicIpWhitelist and whiteIpGroup. |
     * | whiteIpGroup | Object | No |  | You can update the whitelist configurations of an instance by using a whitelist group. You can update only one whitelist group.
     * You cannot configure both publicIpWhitelist and whiteIpGroup. |
     * | └ groupName | String | No | test_group_name | The group name of the whitelist group. This parameter is required if the whiteIpGroup parameter is optional. |
     * | └ ips | List<String> | No | ["0.0.0.0", "10.2.XX.XX"] | The list of IP addresses in the whitelist group. This parameter is required if the whiteIpGroup parameter is optional. |
     * > **Notice**  The addition and deletion of whitelist groups are implemented by calling modifyMode to Cover. Delete and Append cannot add or delete whitelist groups at the same time. You can only modify the IP address list in the whitelist group. Take note of the following items: - If the modifyMode parameter is set to Cover, the whitelist group is deleted if ips is empty. If groupName is not in the list of existing whitelist group names, a whitelist group is created.
     * - If the modifyMode parameter is set to Delete, you must retain at least one IP address for the deleted ips.
     * - If the modifyMode parameter is set to Append, make sure that the whitelist group name has been created. Otherwise, the NotFound error message appears.
     *
     * @remarks
     * >  In the following example, only the parameters in the returned data list are guaranteed to be included. The parameters that are not mentioned are for reference only. For more information about the parameters, see [ListInstance](https://help.aliyun.com/document_detail/142230.html). You cannot force a dependency in a program to get these parameters.
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
     * ## RequestBody
     * | Property | Type | Required | Example | Description |
     * | -------- | ---- | -------- | ------- | ----------- |
     * | publicIpWhitelist | List<String> | Yes | ["0.0.0.0/0","0.0.0.0/1"] | The list of IP address whitelists. This parameter is available if whiteIpGroup is left empty. The value of this parameter updates the IP address whitelist configurations in the Default whitelist group.
     * You cannot configure both publicIpWhitelist and whiteIpGroup. |
     * | whiteIpGroup | Object | No |  | You can update the whitelist configurations of an instance by using a whitelist group. You can update only one whitelist group.
     * You cannot configure both publicIpWhitelist and whiteIpGroup. |
     * | └ groupName | String | No | test_group_name | The group name of the whitelist group. This parameter is required if the whiteIpGroup parameter is optional. |
     * | └ ips | List<String> | No | ["0.0.0.0", "10.2.XX.XX"] | The list of IP addresses in the whitelist group. This parameter is required if the whiteIpGroup parameter is optional. |
     * > **Notice**  The addition and deletion of whitelist groups are implemented by calling modifyMode to Cover. Delete and Append cannot add or delete whitelist groups at the same time. You can only modify the IP address list in the whitelist group. Take note of the following items: - If the modifyMode parameter is set to Cover, the whitelist group is deleted if ips is empty. If groupName is not in the list of existing whitelist group names, a whitelist group is created.
     * - If the modifyMode parameter is set to Delete, you must retain at least one IP address for the deleted ips.
     * - If the modifyMode parameter is set to Append, make sure that the whitelist group name has been created. Otherwise, the NotFound error message appears.
     *
     * @remarks
     * >  In the following example, only the parameters in the returned data list are guaranteed to be included. The parameters that are not mentioned are for reference only. For more information about the parameters, see [ListInstance](https://help.aliyun.com/document_detail/142230.html). You cannot force a dependency in a program to get these parameters.
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
     * 更改ES集群高可用策略.
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
     * 更改ES集群高可用策略.
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
     * Call UpdateSnapshotSetting to update the data backup configuration of the specified instance.
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
     * Call UpdateSnapshotSetting to update the data backup configuration of the specified instance.
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
     * Updates the synonym dictionaries of an Elasticsearch cluster.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
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
     * Updates the synonym dictionaries of an Elasticsearch cluster.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
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
     * >  If you want to add an IP address whitelist, you can set the modifyMode parameter only to Cover. If you set this parameter to Delete or Append, you can only update an IP address whitelist.
     * *   If you set the modifyMode parameter to Cover and leave the ips parameter empty, the system deletes the specified whitelist. If the whitelist specified by using the groupName parameter does not exist, the system creates such a whitelist.
     * *   If you set the modifyMode parameter to Delete, at least one IP address must be retained for the specified whitelist.
     * *   If you set the modifyMode parameter to Append, you must make sure that the specified whitelist exists. Otherwise, the system reports the NotFound error.
     *
     * @remarks
     * > For more information about the parameters displayed in the following sample code but not provided in the preceding tables, see [ListInstance](https://help.aliyun.com/document_detail/142230.html). You cannot force your program to obtain these parameters.
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
     * >  If you want to add an IP address whitelist, you can set the modifyMode parameter only to Cover. If you set this parameter to Delete or Append, you can only update an IP address whitelist.
     * *   If you set the modifyMode parameter to Cover and leave the ips parameter empty, the system deletes the specified whitelist. If the whitelist specified by using the groupName parameter does not exist, the system creates such a whitelist.
     * *   If you set the modifyMode parameter to Delete, at least one IP address must be retained for the specified whitelist.
     * *   If you set the modifyMode parameter to Append, you must make sure that the specified whitelist exists. Otherwise, the system reports the NotFound error.
     *
     * @remarks
     * > For more information about the parameters displayed in the following sample code but not provided in the preceding tables, see [ListInstance](https://help.aliyun.com/document_detail/142230.html). You cannot force your program to obtain these parameters.
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
     * 修改Logstash实例的X-Pack监控报警配置。
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
     * 修改Logstash实例的X-Pack监控报警配置。
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
     * ES集群版本升级.
     *
     * @remarks
     * 5A2CFF0E-5718-45B5-9D4D-70B3FF\\*\\*\\*\\*
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
     * ES集群版本升级.
     *
     * @remarks
     * 5A2CFF0E-5718-45B5-9D4D-70B3FF\\*\\*\\*\\*
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
     * Tests the connectivity between a Logstash cluster and its associated Elasticsearch cluster when you configure the X-Pack Monitoring feature for the Logstash cluster.
     *
     * @remarks
     * > Before you enable the X-Pack Monitoring feature for a Logstash cluster, you must associate the Logstash cluster with an Elasticsearch cluster. This way, you can view the monitoring data of the Logstash cluster in the Kibana console of the Elasticsearch cluster.
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
     * Tests the connectivity between a Logstash cluster and its associated Elasticsearch cluster when you configure the X-Pack Monitoring feature for the Logstash cluster.
     *
     * @remarks
     * > Before you enable the X-Pack Monitoring feature for a Logstash cluster, you must associate the Logstash cluster with an Elasticsearch cluster. This way, you can view the monitoring data of the Logstash cluster in the Kibana console of the Elasticsearch cluster.
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
     * 校验缩节点合法性.
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
     * 校验缩节点合法性.
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
     * 缩节点校验数据迁移合法性.
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
     * 缩节点校验数据迁移合法性.
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
     * The configurations of dedicated master nodes.
     *
     * @remarks
     * The configurations of warm nodes.
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
     * The configurations of dedicated master nodes.
     *
     * @remarks
     * The configurations of warm nodes.
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
