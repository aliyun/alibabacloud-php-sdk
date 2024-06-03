<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Elasticsearch extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Restores nodes in disabled zones. This operation is available only for multi-zone Elasticsearch clusters.
     *  *
     * @param string               $InstanceId
     * @param ActivateZonesRequest $request    ActivateZonesRequest
     * @param string[]             $headers    map
     * @param RuntimeOptions       $runtime    runtime options for this request RuntimeOptions
     *
     * @return ActivateZonesResponse ActivateZonesResponse
     */
    public function activateZonesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ActivateZones',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/recover-zones',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ActivateZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restores nodes in disabled zones. This operation is available only for multi-zone Elasticsearch clusters.
     *  *
     * @param string               $InstanceId
     * @param ActivateZonesRequest $request    ActivateZonesRequest
     *
     * @return ActivateZonesResponse ActivateZonesResponse
     */
    public function activateZones($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->activateZonesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $InstanceId
     * @param AddConnectableClusterRequest $request    AddConnectableClusterRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return AddConnectableClusterResponse AddConnectableClusterResponse
     */
    public function addConnectableClusterWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'AddConnectableCluster',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/connected-clusters',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddConnectableClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $InstanceId
     * @param AddConnectableClusterRequest $request    AddConnectableClusterRequest
     *
     * @return AddConnectableClusterResponse AddConnectableClusterResponse
     */
    public function addConnectableCluster($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addConnectableClusterWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Call the AddSnapshotRepo to create a reference repository when configuring a cross-cluster OSS repository.
     *  *
     * @param string                 $InstanceId
     * @param AddSnapshotRepoRequest $request    AddSnapshotRepoRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return AddSnapshotRepoResponse AddSnapshotRepoResponse
     */
    public function addSnapshotRepoWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'AddSnapshotRepo',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/snapshot-repos',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddSnapshotRepoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call the AddSnapshotRepo to create a reference repository when configuring a cross-cluster OSS repository.
     *  *
     * @param string                 $InstanceId
     * @param AddSnapshotRepoRequest $request    AddSnapshotRepoRequest
     *
     * @return AddSnapshotRepoResponse AddSnapshotRepoResponse
     */
    public function addSnapshotRepo($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addSnapshotRepoWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Restores an Elasticsearch cluster that is frozen after it is released.
     *  *
     * @param string                $InstanceId
     * @param CancelDeletionRequest $request    CancelDeletionRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return CancelDeletionResponse CancelDeletionResponse
     */
    public function cancelDeletionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelDeletion',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/cancel-deletion',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelDeletionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restores an Elasticsearch cluster that is frozen after it is released.
     *  *
     * @param string                $InstanceId
     * @param CancelDeletionRequest $request    CancelDeletionRequest
     *
     * @return CancelDeletionResponse CancelDeletionResponse
     */
    public function cancelDeletion($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelDeletionWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Restores a Logstash cluster that is frozen after it is released.
     *  *
     * @param string                        $InstanceId
     * @param CancelLogstashDeletionRequest $request    CancelLogstashDeletionRequest
     * @param string[]                      $headers    map
     * @param RuntimeOptions                $runtime    runtime options for this request RuntimeOptions
     *
     * @return CancelLogstashDeletionResponse CancelLogstashDeletionResponse
     */
    public function cancelLogstashDeletionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelLogstashDeletion',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/cancel-deletion',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelLogstashDeletionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restores a Logstash cluster that is frozen after it is released.
     *  *
     * @param string                        $InstanceId
     * @param CancelLogstashDeletionRequest $request    CancelLogstashDeletionRequest
     *
     * @return CancelLogstashDeletionResponse CancelLogstashDeletionResponse
     */
    public function cancelLogstashDeletion($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelLogstashDeletionWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string            $InstanceId
     * @param CancelTaskRequest $request    CancelTaskRequest
     * @param string[]          $headers    map
     * @param RuntimeOptions    $runtime    runtime options for this request RuntimeOptions
     *
     * @return CancelTaskResponse CancelTaskResponse
     */
    public function cancelTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['taskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelTask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/cancel-task',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $InstanceId
     * @param CancelTaskRequest $request    CancelTaskRequest
     *
     * @return CancelTaskResponse CancelTaskResponse
     */
    public function cancelTask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelTaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 容量规划
     *  *
     * @param CapacityPlanRequest $request CapacityPlanRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CapacityPlanResponse CapacityPlanResponse
     */
    public function capacityPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->complexQueryAvailable)) {
            $body['complexQueryAvailable'] = $request->complexQueryAvailable;
        }
        if (!Utils::isUnset($request->dataInfo)) {
            $body['dataInfo'] = $request->dataInfo;
        }
        if (!Utils::isUnset($request->metric)) {
            $body['metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->usageScenario)) {
            $body['usageScenario'] = $request->usageScenario;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CapacityPlan',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/assist/actions/capacity-plan',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CapacityPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 容量规划
     *  *
     * @param CapacityPlanRequest $request CapacityPlanRequest
     *
     * @return CapacityPlanResponse CapacityPlanResponse
     */
    public function capacityPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->capacityPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 关闭实例的智能运维功能
     *  *
     * @param string                $InstanceId
     * @param CloseDiagnosisRequest $request    CloseDiagnosisRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return CloseDiagnosisResponse CloseDiagnosisResponse
     */
    public function closeDiagnosisWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseDiagnosis',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/close-diagnosis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloseDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 关闭实例的智能运维功能
     *  *
     * @param string                $InstanceId
     * @param CloseDiagnosisRequest $request    CloseDiagnosisRequest
     *
     * @return CloseDiagnosisResponse CloseDiagnosisResponse
     */
    public function closeDiagnosis($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeDiagnosisWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string            $InstanceId
     * @param CloseHttpsRequest $request    CloseHttpsRequest
     * @param string[]          $headers    map
     * @param RuntimeOptions    $runtime    runtime options for this request RuntimeOptions
     *
     * @return CloseHttpsResponse CloseHttpsResponse
     */
    public function closeHttpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseHttps',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/close-https',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloseHttpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $InstanceId
     * @param CloseHttpsRequest $request    CloseHttpsRequest
     *
     * @return CloseHttpsResponse CloseHttpsResponse
     */
    public function closeHttps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeHttpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 关闭索引托管
     *  *
     * @param string                   $InstanceId
     * @param string                   $Index
     * @param CloseManagedIndexRequest $request    CloseManagedIndexRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return CloseManagedIndexResponse CloseManagedIndexResponse
     */
    public function closeManagedIndexWithOptions($InstanceId, $Index, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseManagedIndex',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/indices/' . OpenApiUtilClient::getEncodeParam($Index) . '/close-managed',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloseManagedIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 关闭索引托管
     *  *
     * @param string                   $InstanceId
     * @param string                   $Index
     * @param CloseManagedIndexRequest $request    CloseManagedIndexRequest
     *
     * @return CloseManagedIndexResponse CloseManagedIndexResponse
     */
    public function closeManagedIndex($InstanceId, $Index, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeManagedIndexWithOptions($InstanceId, $Index, $request, $headers, $runtime);
    }

    /**
     * @summary 创建收集器
     *  *
     * @param CreateCollectorRequest $request CreateCollectorRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCollectorResponse CreateCollectorResponse
     */
    public function createCollectorWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->collectorPaths)) {
            $body['collectorPaths'] = $request->collectorPaths;
        }
        if (!Utils::isUnset($request->configs)) {
            $body['configs'] = $request->configs;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['dryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->extendConfigs)) {
            $body['extendConfigs'] = $request->extendConfigs;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->resType)) {
            $body['resType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resVersion)) {
            $body['resVersion'] = $request->resVersion;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['vpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCollector',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建收集器
     *  *
     * @param CreateCollectorRequest $request CreateCollectorRequest
     *
     * @return CreateCollectorResponse CreateCollectorResponse
     */
    public function createCollector($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCollectorWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建Elasticsearch组合模板
     *  *
     * @param string                      $InstanceId
     * @param string                      $name
     * @param CreateComponentIndexRequest $request    CreateComponentIndexRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateComponentIndexResponse CreateComponentIndexResponse
     */
    public function createComponentIndexWithOptions($InstanceId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->meta)) {
            $body['_meta'] = $request->meta;
        }
        if (!Utils::isUnset($request->template)) {
            $body['template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateComponentIndex',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/component-index/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateComponentIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建Elasticsearch组合模板
     *  *
     * @param string                      $InstanceId
     * @param string                      $name
     * @param CreateComponentIndexRequest $request    CreateComponentIndexRequest
     *
     * @return CreateComponentIndexResponse CreateComponentIndexResponse
     */
    public function createComponentIndex($InstanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createComponentIndexWithOptions($InstanceId, $name, $request, $headers, $runtime);
    }

    /**
     * @summary 创建数据流
     *  *
     * @param string                  $InstanceId
     * @param CreateDataStreamRequest $request    CreateDataStreamRequest
     * @param string[]                $headers    map
     * @param RuntimeOptions          $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateDataStreamResponse CreateDataStreamResponse
     */
    public function createDataStreamWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateDataStream',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/data-streams',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDataStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建数据流
     *  *
     * @param string                  $InstanceId
     * @param CreateDataStreamRequest $request    CreateDataStreamRequest
     *
     * @return CreateDataStreamResponse CreateDataStreamResponse
     */
    public function createDataStream($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataStreamWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建索引生命周期策略
     *  *
     * @param string                 $InstanceId
     * @param CreateILMPolicyRequest $request    CreateILMPolicyRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateILMPolicyResponse CreateILMPolicyResponse
     */
    public function createILMPolicyWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateILMPolicy',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/ilm-policies',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateILMPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建索引生命周期策略
     *  *
     * @param string                 $InstanceId
     * @param CreateILMPolicyRequest $request    CreateILMPolicyRequest
     *
     * @return CreateILMPolicyResponse CreateILMPolicyResponse
     */
    public function createILMPolicy($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createILMPolicyWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建索引模版
     *  *
     * @param string                     $InstanceId
     * @param CreateIndexTemplateRequest $request    CreateIndexTemplateRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateIndexTemplateResponse CreateIndexTemplateResponse
     */
    public function createIndexTemplateWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->dataStream)) {
            $body['dataStream'] = $request->dataStream;
        }
        if (!Utils::isUnset($request->ilmPolicy)) {
            $body['ilmPolicy'] = $request->ilmPolicy;
        }
        if (!Utils::isUnset($request->indexPatterns)) {
            $body['indexPatterns'] = $request->indexPatterns;
        }
        if (!Utils::isUnset($request->indexTemplate)) {
            $body['indexTemplate'] = $request->indexTemplate;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->template)) {
            $body['template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIndexTemplate',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/index-templates',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateIndexTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建索引模版
     *  *
     * @param string                     $InstanceId
     * @param CreateIndexTemplateRequest $request    CreateIndexTemplateRequest
     *
     * @return CreateIndexTemplateResponse CreateIndexTemplateResponse
     */
    public function createIndexTemplate($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndexTemplateWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建logstash实例
     *  *
     * @param CreateLogstashRequest $request CreateLogstashRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLogstashResponse CreateLogstashResponse
     */
    public function createLogstashWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->networkConfig)) {
            $body['networkConfig'] = $request->networkConfig;
        }
        if (!Utils::isUnset($request->nodeAmount)) {
            $body['nodeAmount'] = $request->nodeAmount;
        }
        if (!Utils::isUnset($request->nodeSpec)) {
            $body['nodeSpec'] = $request->nodeSpec;
        }
        if (!Utils::isUnset($request->paymentInfo)) {
            $body['paymentInfo'] = $request->paymentInfo;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $body['paymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->version)) {
            $body['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLogstash',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建logstash实例
     *  *
     * @param CreateLogstashRequest $request CreateLogstashRequest
     *
     * @return CreateLogstashResponse CreateLogstashResponse
     */
    public function createLogstash($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLogstashWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建Logstash管道任务
     *  *
     * @param string                 $InstanceId
     * @param CreatePipelinesRequest $request    CreatePipelinesRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreatePipelinesResponse CreatePipelinesResponse
     */
    public function createPipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->trigger)) {
            $query['trigger'] = $request->trigger;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreatePipelines',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/pipelines',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建Logstash管道任务
     *  *
     * @param string                 $InstanceId
     * @param CreatePipelinesRequest $request    CreatePipelinesRequest
     *
     * @return CreatePipelinesResponse CreatePipelinesResponse
     */
    public function createPipelines($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelinesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                $InstanceId
     * @param CreateSnapshotRequest $request    CreateSnapshotRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateSnapshotResponse CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateSnapshot',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/snapshots',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $InstanceId
     * @param CreateSnapshotRequest $request    CreateSnapshotRequest
     *
     * @return CreateSnapshotResponse CreateSnapshotResponse
     */
    public function createSnapshot($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSnapshotWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建私网链接VPC终端节点
     *  *
     * @description 5FFD9ED4-C2EC-4E89-B22B-1ACB6FE1D\\*\\*\\*
     *  *
     * @param string                   $InstanceId
     * @param CreateVpcEndpointRequest $request    CreateVpcEndpointRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateVpcEndpointResponse CreateVpcEndpointResponse
     */
    public function createVpcEndpointWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->serviceId)) {
            $body['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['zoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVpcEndpoint',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/vpc-endpoints',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建私网链接VPC终端节点
     *  *
     * @description 5FFD9ED4-C2EC-4E89-B22B-1ACB6FE1D\\*\\*\\*
     *  *
     * @param string                   $InstanceId
     * @param CreateVpcEndpointRequest $request    CreateVpcEndpointRequest
     *
     * @return CreateVpcEndpointResponse CreateVpcEndpointResponse
     */
    public function createVpcEndpoint($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVpcEndpointWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Call deactivatezones to offline part of the zone when multiple zones are available. And you need to migrate the nodes in the offline zone to other zones.
     *  *
     * @param string                 $InstanceId
     * @param DeactivateZonesRequest $request    DeactivateZonesRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeactivateZonesResponse DeactivateZonesResponse
     */
    public function deactivateZonesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DeactivateZones',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/down-zones',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeactivateZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call deactivatezones to offline part of the zone when multiple zones are available. And you need to migrate the nodes in the offline zone to other zones.
     *  *
     * @param string                 $InstanceId
     * @param DeactivateZonesRequest $request    DeactivateZonesRequest
     *
     * @return DeactivateZonesResponse DeactivateZonesResponse
     */
    public function deactivateZones($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deactivateZonesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes a shipper.
     *  *
     * @param string                 $ResId
     * @param DeleteCollectorRequest $request DeleteCollectorRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCollectorResponse DeleteCollectorResponse
     */
    public function deleteCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCollector',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . OpenApiUtilClient::getEncodeParam($ResId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a shipper.
     *  *
     * @param string                 $ResId
     * @param DeleteCollectorRequest $request DeleteCollectorRequest
     *
     * @return DeleteCollectorResponse DeleteCollectorResponse
     */
    public function deleteCollector($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCollectorWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除组合索引模板
     *  *
     * @param string         $InstanceId
     * @param string         $name
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteComponentIndexResponse DeleteComponentIndexResponse
     */
    public function deleteComponentIndexWithOptions($InstanceId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteComponentIndex',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/component-index/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteComponentIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除组合索引模板
     *  *
     * @param string $InstanceId
     * @param string $name
     *
     * @return DeleteComponentIndexResponse DeleteComponentIndexResponse
     */
    public function deleteComponentIndex($InstanceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteComponentIndexWithOptions($InstanceId, $name, $headers, $runtime);
    }

    /**
     * @param string                        $InstanceId
     * @param DeleteConnectedClusterRequest $request    DeleteConnectedClusterRequest
     * @param string[]                      $headers    map
     * @param RuntimeOptions                $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteConnectedClusterResponse DeleteConnectedClusterResponse
     */
    public function deleteConnectedClusterWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectedInstanceId)) {
            $query['connectedInstanceId'] = $request->connectedInstanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConnectedCluster',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/connected-clusters',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteConnectedClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $InstanceId
     * @param DeleteConnectedClusterRequest $request    DeleteConnectedClusterRequest
     *
     * @return DeleteConnectedClusterResponse DeleteConnectedClusterResponse
     */
    public function deleteConnectedCluster($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConnectedClusterWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除数据流
     *  *
     * @param string                  $InstanceId
     * @param string                  $DataStream
     * @param DeleteDataStreamRequest $request    DeleteDataStreamRequest
     * @param string[]                $headers    map
     * @param RuntimeOptions          $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteDataStreamResponse DeleteDataStreamResponse
     */
    public function deleteDataStreamWithOptions($InstanceId, $DataStream, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataStream',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/data-streams/' . OpenApiUtilClient::getEncodeParam($DataStream) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDataStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除数据流
     *  *
     * @param string                  $InstanceId
     * @param string                  $DataStream
     * @param DeleteDataStreamRequest $request    DeleteDataStreamRequest
     *
     * @return DeleteDataStreamResponse DeleteDataStreamResponse
     */
    public function deleteDataStream($InstanceId, $DataStream, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDataStreamWithOptions($InstanceId, $DataStream, $request, $headers, $runtime);
    }

    /**
     * @param string                $InstanceId
     * @param DeleteDataTaskRequest $request    DeleteDataTaskRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteDataTaskResponse DeleteDataTaskResponse
     */
    public function deleteDataTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataTask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/data-task',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDataTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $InstanceId
     * @param DeleteDataTaskRequest $request    DeleteDataTaskRequest
     *
     * @return DeleteDataTaskResponse DeleteDataTaskResponse
     */
    public function deleteDataTask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDataTaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除历史索引模板
     *  *
     * @param string         $InstanceId
     * @param string         $name
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteDeprecatedTemplateResponse DeleteDeprecatedTemplateResponse
     */
    public function deleteDeprecatedTemplateWithOptions($InstanceId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDeprecatedTemplate',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/deprecated-templates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDeprecatedTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除历史索引模板
     *  *
     * @param string $InstanceId
     * @param string $name
     *
     * @return DeleteDeprecatedTemplateResponse DeleteDeprecatedTemplateResponse
     */
    public function deleteDeprecatedTemplate($InstanceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDeprecatedTemplateWithOptions($InstanceId, $name, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $PolicyName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteILMPolicyResponse DeleteILMPolicyResponse
     */
    public function deleteILMPolicyWithOptions($InstanceId, $PolicyName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteILMPolicy',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/ilm-policies/' . OpenApiUtilClient::getEncodeParam($PolicyName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteILMPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $PolicyName
     *
     * @return DeleteILMPolicyResponse DeleteILMPolicyResponse
     */
    public function deleteILMPolicy($InstanceId, $PolicyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteILMPolicyWithOptions($InstanceId, $PolicyName, $headers, $runtime);
    }

    /**
     * @summary 删除ES集群索引模版
     *  *
     * @param string         $InstanceId
     * @param string         $IndexTemplate
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteIndexTemplateResponse DeleteIndexTemplateResponse
     */
    public function deleteIndexTemplateWithOptions($InstanceId, $IndexTemplate, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteIndexTemplate',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/index-templates/' . OpenApiUtilClient::getEncodeParam($IndexTemplate) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteIndexTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除ES集群索引模版
     *  *
     * @param string $InstanceId
     * @param string $IndexTemplate
     *
     * @return DeleteIndexTemplateResponse DeleteIndexTemplateResponse
     */
    public function deleteIndexTemplate($InstanceId, $IndexTemplate)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexTemplateWithOptions($InstanceId, $IndexTemplate, $headers, $runtime);
    }

    /**
     * @param string                $InstanceId
     * @param DeleteInstanceRequest $request    DeleteInstanceRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deleteType)) {
            $query['deleteType'] = $request->deleteType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $InstanceId
     * @param DeleteInstanceRequest $request    DeleteInstanceRequest
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Releases a Logstash cluster.
     *  *
     * @description Before you call this operation, take note of the following information: After the cluster is released, the physical resources used by the cluster are reclaimed. The data stored in the cluster is deleted and cannot be recovered. The disks attached to the nodes in the cluster and the snapshots created for the cluster are released.
     *  *
     * @param string                $InstanceId
     * @param DeleteLogstashRequest $request    DeleteLogstashRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteLogstashResponse DeleteLogstashResponse
     */
    public function deleteLogstashWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deleteType)) {
            $query['deleteType'] = $request->deleteType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLogstash',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases a Logstash cluster.
     *  *
     * @description Before you call this operation, take note of the following information: After the cluster is released, the physical resources used by the cluster are reclaimed. The data stored in the cluster is deleted and cannot be recovered. The disks attached to the nodes in the cluster and the snapshots created for the cluster are released.
     *  *
     * @param string                $InstanceId
     * @param DeleteLogstashRequest $request    DeleteLogstashRequest
     *
     * @return DeleteLogstashResponse DeleteLogstashResponse
     */
    public function deleteLogstash($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLogstashWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes a pipeline that is configured for a Logstash cluster.
     *  *
     * @param string                 $InstanceId
     * @param DeletePipelinesRequest $request    DeletePipelinesRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeletePipelinesResponse DeletePipelinesResponse
     */
    public function deletePipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->pipelineIds)) {
            $query['pipelineIds'] = $request->pipelineIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePipelines',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/pipelines',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a pipeline that is configured for a Logstash cluster.
     *  *
     * @param string                 $InstanceId
     * @param DeletePipelinesRequest $request    DeletePipelinesRequest
     *
     * @return DeletePipelinesResponse DeletePipelinesResponse
     */
    public function deletePipelines($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelinesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $InstanceId
     * @param DeleteSnapshotRepoRequest $request    DeleteSnapshotRepoRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteSnapshotRepoResponse DeleteSnapshotRepoResponse
     */
    public function deleteSnapshotRepoWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->repoPath)) {
            $query['repoPath'] = $request->repoPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSnapshotRepo',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/snapshot-repos',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSnapshotRepoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $InstanceId
     * @param DeleteSnapshotRepoRequest $request    DeleteSnapshotRepoRequest
     *
     * @return DeleteSnapshotRepoResponse DeleteSnapshotRepoResponse
     */
    public function deleteSnapshotRepo($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSnapshotRepoWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除服务账号vpc下的终端节点
     *  *
     * @param string                   $InstanceId
     * @param string                   $EndpointId
     * @param DeleteVpcEndpointRequest $request    DeleteVpcEndpointRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteVpcEndpointResponse DeleteVpcEndpointResponse
     */
    public function deleteVpcEndpointWithOptions($InstanceId, $EndpointId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpcEndpoint',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/vpc-endpoints/' . OpenApiUtilClient::getEncodeParam($EndpointId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除服务账号vpc下的终端节点
     *  *
     * @param string                   $InstanceId
     * @param string                   $EndpointId
     * @param DeleteVpcEndpointRequest $request    DeleteVpcEndpointRequest
     *
     * @return DeleteVpcEndpointResponse DeleteVpcEndpointResponse
     */
    public function deleteVpcEndpoint($InstanceId, $EndpointId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVpcEndpointWithOptions($InstanceId, $EndpointId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the information of ES-operator that is installed for a specified Container Service for Kubernetes (ACK) cluster.
     *  *
     * @description > Before you install a shipper on an ACK cluster, you can call this operation to query the installation status of ES-operator for the ACK cluster.
     *  *
     * @param string         $ClusterId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeAckOperatorResponse DescribeAckOperatorResponse
     */
    public function describeAckOperatorWithOptions($ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeAckOperator',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ack-clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/operator',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAckOperatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of ES-operator that is installed for a specified Container Service for Kubernetes (ACK) cluster.
     *  *
     * @description > Before you install a shipper on an ACK cluster, you can call this operation to query the installation status of ES-operator for the ACK cluster.
     *  *
     * @param string $ClusterId
     *
     * @return DescribeAckOperatorResponse DescribeAckOperatorResponse
     */
    public function describeAckOperator($ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAckOperatorWithOptions($ClusterId, $headers, $runtime);
    }

    /**
     * @summary DescribeApm
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeApmResponse DescribeApmResponse
     */
    public function describeApmWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeApm',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/apm/' . OpenApiUtilClient::getEncodeParam($instanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DescribeApm
     *  *
     * @param string $instanceId
     *
     * @return DescribeApmResponse DescribeApmResponse
     */
    public function describeApm($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApmWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a shipper.
     *  *
     * @param string         $ResId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCollectorResponse DescribeCollectorResponse
     */
    public function describeCollectorWithOptions($ResId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeCollector',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . OpenApiUtilClient::getEncodeParam($ResId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a shipper.
     *  *
     * @param string $ResId
     *
     * @return DescribeCollectorResponse DescribeCollectorResponse
     */
    public function describeCollector($ResId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeCollectorWithOptions($ResId, $headers, $runtime);
    }

    /**
     * @summary 查看组合索引模板详情
     *  *
     * @param string         $InstanceId
     * @param string         $name
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeComponentIndexResponse DescribeComponentIndexResponse
     */
    public function describeComponentIndexWithOptions($InstanceId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeComponentIndex',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/component-index/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeComponentIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看组合索引模板详情
     *  *
     * @param string $InstanceId
     * @param string $name
     *
     * @return DescribeComponentIndexResponse DescribeComponentIndexResponse
     */
    public function describeComponentIndex($InstanceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeComponentIndexWithOptions($InstanceId, $name, $headers, $runtime);
    }

    /**
     * @param string                             $InstanceId
     * @param DescribeConnectableClustersRequest $request    DescribeConnectableClustersRequest
     * @param string[]                           $headers    map
     * @param RuntimeOptions                     $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeConnectableClustersResponse DescribeConnectableClustersResponse
     */
    public function describeConnectableClustersWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alreadySetItems)) {
            $query['alreadySetItems'] = $request->alreadySetItems;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeConnectableClusters',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/connectable-clusters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeConnectableClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                             $InstanceId
     * @param DescribeConnectableClustersRequest $request    DescribeConnectableClustersRequest
     *
     * @return DescribeConnectableClustersResponse DescribeConnectableClustersResponse
     */
    public function describeConnectableClusters($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeConnectableClustersWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary DescribeDeprecatedTemplate
     *  *
     * @param string         $InstanceId
     * @param string         $name
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeDeprecatedTemplateResponse DescribeDeprecatedTemplateResponse
     */
    public function describeDeprecatedTemplateWithOptions($InstanceId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeDeprecatedTemplate',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/deprecated-templates/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDeprecatedTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DescribeDeprecatedTemplate
     *  *
     * @param string $InstanceId
     * @param string $name
     *
     * @return DescribeDeprecatedTemplateResponse DescribeDeprecatedTemplateResponse
     */
    public function describeDeprecatedTemplate($InstanceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDeprecatedTemplateWithOptions($InstanceId, $name, $headers, $runtime);
    }

    /**
     * @param string                        $InstanceId
     * @param string                        $ReportId
     * @param DescribeDiagnoseReportRequest $request    DescribeDiagnoseReportRequest
     * @param string[]                      $headers    map
     * @param RuntimeOptions                $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeDiagnoseReportResponse DescribeDiagnoseReportResponse
     */
    public function describeDiagnoseReportWithOptions($InstanceId, $ReportId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnoseReport',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/reports/' . OpenApiUtilClient::getEncodeParam($ReportId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnoseReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $InstanceId
     * @param string                        $ReportId
     * @param DescribeDiagnoseReportRequest $request    DescribeDiagnoseReportRequest
     *
     * @return DescribeDiagnoseReportResponse DescribeDiagnoseReportResponse
     */
    public function describeDiagnoseReport($InstanceId, $ReportId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDiagnoseReportWithOptions($InstanceId, $ReportId, $request, $headers, $runtime);
    }

    /**
     * @param string                           $InstanceId
     * @param DescribeDiagnosisSettingsRequest $request    DescribeDiagnosisSettingsRequest
     * @param string[]                         $headers    map
     * @param RuntimeOptions                   $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeDiagnosisSettingsResponse DescribeDiagnosisSettingsResponse
     */
    public function describeDiagnosisSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnosisSettings',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/settings',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosisSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                           $InstanceId
     * @param DescribeDiagnosisSettingsRequest $request    DescribeDiagnosisSettingsRequest
     *
     * @return DescribeDiagnosisSettingsResponse DescribeDiagnosisSettingsResponse
     */
    public function describeDiagnosisSettings($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDiagnosisSettingsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取集群动态指标
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeDynamicSettingsResponse DescribeDynamicSettingsResponse
     */
    public function describeDynamicSettingsWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeDynamicSettings',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/dynamic-settings',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDynamicSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取集群动态指标
     *  *
     * @param string $InstanceId
     *
     * @return DescribeDynamicSettingsResponse DescribeDynamicSettingsResponse
     */
    public function describeDynamicSettings($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDynamicSettingsWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary Queries the health status of an Elasticsearch cluster.
     *  *
     * @description An Elasticsearch cluster can be in a health state indicated by one of the following colors:
     * *   GREEN: Primary shards and replica shards for the primary shards are normally allocated.
     * *   YELLOW: Primary shards are normally allocated, but replica shards for the primary shards are not normally allocated.
     * *   RED: Primary shards are not normally allocated.
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeElasticsearchHealthResponse DescribeElasticsearchHealthResponse
     */
    public function describeElasticsearchHealthWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeElasticsearchHealth',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/elasticsearch-health',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeElasticsearchHealthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the health status of an Elasticsearch cluster.
     *  *
     * @description An Elasticsearch cluster can be in a health state indicated by one of the following colors:
     * *   GREEN: Primary shards and replica shards for the primary shards are normally allocated.
     * *   YELLOW: Primary shards are normally allocated, but replica shards for the primary shards are not normally allocated.
     * *   RED: Primary shards are not normally allocated.
     *  *
     * @param string $InstanceId
     *
     * @return DescribeElasticsearchHealthResponse DescribeElasticsearchHealthResponse
     */
    public function describeElasticsearchHealth($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeElasticsearchHealthWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $PolicyName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeILMPolicyResponse DescribeILMPolicyResponse
     */
    public function describeILMPolicyWithOptions($InstanceId, $PolicyName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeILMPolicy',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/ilm-policies/' . OpenApiUtilClient::getEncodeParam($PolicyName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeILMPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $PolicyName
     *
     * @return DescribeILMPolicyResponse DescribeILMPolicyResponse
     */
    public function describeILMPolicy($InstanceId, $PolicyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeILMPolicyWithOptions($InstanceId, $PolicyName, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $IndexTemplate
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DescribeIndexTemplateResponse DescribeIndexTemplateResponse
     */
    public function describeIndexTemplateWithOptions($InstanceId, $IndexTemplate, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeIndexTemplate',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/index-templates/' . OpenApiUtilClient::getEncodeParam($IndexTemplate) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeIndexTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $IndexTemplate
     *
     * @return DescribeIndexTemplateResponse DescribeIndexTemplateResponse
     */
    public function describeIndexTemplate($InstanceId, $IndexTemplate)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeIndexTemplateWithOptions($InstanceId, $IndexTemplate, $headers, $runtime);
    }

    /**
     * @summary The name of the dictionary file.
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceResponse DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The name of the dictionary file.
     *  *
     * @param string $InstanceId
     *
     * @return DescribeInstanceResponse DescribeInstanceResponse
     */
    public function describeInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary 获取Elasticsearch集群Kibana节点settings配置
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeKibanaSettingsResponse DescribeKibanaSettingsResponse
     */
    public function describeKibanaSettingsWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeKibanaSettings',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/kibana-settings',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeKibanaSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取Elasticsearch集群Kibana节点settings配置
     *  *
     * @param string $InstanceId
     *
     * @return DescribeKibanaSettingsResponse DescribeKibanaSettingsResponse
     */
    public function describeKibanaSettings($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeKibanaSettingsWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary 查看Logstash实例详情
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeLogstashResponse DescribeLogstashResponse
     */
    public function describeLogstashWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeLogstash',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看Logstash实例详情
     *  *
     * @param string $InstanceId
     *
     * @return DescribeLogstashResponse DescribeLogstashResponse
     */
    public function describeLogstash($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeLogstashWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $PipelineId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribePipelineResponse DescribePipelineResponse
     */
    public function describePipelineWithOptions($InstanceId, $PipelineId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribePipeline',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($PipelineId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $PipelineId
     *
     * @return DescribePipelineResponse DescribePipelineResponse
     */
    public function describePipeline($InstanceId, $PipelineId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePipelineWithOptions($InstanceId, $PipelineId, $headers, $runtime);
    }

    /**
     * @summary Queries the management configurations of pipelines in a Logstash cluster.
     *  *
     * @param string                                  $InstanceId
     * @param DescribePipelineManagementConfigRequest $request    DescribePipelineManagementConfigRequest
     * @param string[]                                $headers    map
     * @param RuntimeOptions                          $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribePipelineManagementConfigResponse DescribePipelineManagementConfigResponse
     */
    public function describePipelineManagementConfigWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePipelineManagementConfig',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/pipeline-management-config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePipelineManagementConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the management configurations of pipelines in a Logstash cluster.
     *  *
     * @param string                                  $InstanceId
     * @param DescribePipelineManagementConfigRequest $request    DescribePipelineManagementConfigRequest
     *
     * @return DescribePipelineManagementConfigResponse DescribePipelineManagementConfigResponse
     */
    public function describePipelineManagementConfig($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePipelineManagementConfigWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/regions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeSnapshotSettingResponse DescribeSnapshotSettingResponse
     */
    public function describeSnapshotSettingWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeSnapshotSetting',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/snapshot-setting',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSnapshotSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return DescribeSnapshotSettingResponse DescribeSnapshotSettingResponse
     */
    public function describeSnapshotSetting($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSnapshotSettingWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeTemplatesResponse DescribeTemplatesResponse
     */
    public function describeTemplatesWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplates',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/templates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return DescribeTemplatesResponse DescribeTemplatesResponse
     */
    public function describeTemplates($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTemplatesWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary Queries the configurations of the X-Pack Monitoring feature of a Logstash cluster.
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeXpackMonitorConfigResponse DescribeXpackMonitorConfigResponse
     */
    public function describeXpackMonitorConfigWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeXpackMonitorConfig',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/xpack-monitor-config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeXpackMonitorConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of the X-Pack Monitoring feature of a Logstash cluster.
     *  *
     * @param string $InstanceId
     *
     * @return DescribeXpackMonitorConfigResponse DescribeXpackMonitorConfigResponse
     */
    public function describeXpackMonitorConfig($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeXpackMonitorConfigWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary 触发ES实例智能诊断
     *  *
     * @param string                  $InstanceId
     * @param DiagnoseInstanceRequest $request    DiagnoseInstanceRequest
     * @param string[]                $headers    map
     * @param RuntimeOptions          $runtime    runtime options for this request RuntimeOptions
     *
     * @return DiagnoseInstanceResponse DiagnoseInstanceResponse
     */
    public function diagnoseInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['lang'] = $request->lang;
        }
        $body = [];
        if (!Utils::isUnset($request->diagnoseItems)) {
            $body['diagnoseItems'] = $request->diagnoseItems;
        }
        if (!Utils::isUnset($request->indices)) {
            $body['indices'] = $request->indices;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DiagnoseInstance',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/diagnose',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DiagnoseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 触发ES实例智能诊断
     *  *
     * @param string                  $InstanceId
     * @param DiagnoseInstanceRequest $request    DiagnoseInstanceRequest
     *
     * @return DiagnoseInstanceResponse DiagnoseInstanceResponse
     */
    public function diagnoseInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->diagnoseInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 关闭kibana私网
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DisableKibanaPvlNetworkResponse DisableKibanaPvlNetworkResponse
     */
    public function disableKibanaPvlNetworkWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DisableKibanaPvlNetwork',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/disable-kibana-private',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableKibanaPvlNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 关闭kibana私网
     *  *
     * @param string $InstanceId
     *
     * @return DisableKibanaPvlNetworkResponse DisableKibanaPvlNetworkResponse
     */
    public function disableKibanaPvlNetwork($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableKibanaPvlNetworkWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary 开启v3 kibana私网
     *  *
     * @param string                        $InstanceId
     * @param EnableKibanaPvlNetworkRequest $request    EnableKibanaPvlNetworkRequest
     * @param string[]                      $headers    map
     * @param RuntimeOptions                $runtime    runtime options for this request RuntimeOptions
     *
     * @return EnableKibanaPvlNetworkResponse EnableKibanaPvlNetworkResponse
     */
    public function enableKibanaPvlNetworkWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endpointName)) {
            $body['endpointName'] = $request->endpointName;
        }
        if (!Utils::isUnset($request->securityGroups)) {
            $body['securityGroups'] = $request->securityGroups;
        }
        if (!Utils::isUnset($request->vSwitchIdsZone)) {
            $body['vSwitchIdsZone'] = $request->vSwitchIdsZone;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['vpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableKibanaPvlNetwork',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/enable-kibana-private',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableKibanaPvlNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启v3 kibana私网
     *  *
     * @param string                        $InstanceId
     * @param EnableKibanaPvlNetworkRequest $request    EnableKibanaPvlNetworkRequest
     *
     * @return EnableKibanaPvlNetworkResponse EnableKibanaPvlNetworkResponse
     */
    public function enableKibanaPvlNetwork($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableKibanaPvlNetworkWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the estimated time that is required to restart a Logstash cluster.
     *  *
     * @param string                              $InstanceId
     * @param EstimatedLogstashRestartTimeRequest $request    EstimatedLogstashRestartTimeRequest
     * @param string[]                            $headers    map
     * @param RuntimeOptions                      $runtime    runtime options for this request RuntimeOptions
     *
     * @return EstimatedLogstashRestartTimeResponse EstimatedLogstashRestartTimeResponse
     */
    public function estimatedLogstashRestartTimeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'EstimatedLogstashRestartTime',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/estimated-time/restart-time',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EstimatedLogstashRestartTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the estimated time that is required to restart a Logstash cluster.
     *  *
     * @param string                              $InstanceId
     * @param EstimatedLogstashRestartTimeRequest $request    EstimatedLogstashRestartTimeRequest
     *
     * @return EstimatedLogstashRestartTimeResponse EstimatedLogstashRestartTimeResponse
     */
    public function estimatedLogstashRestartTime($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->estimatedLogstashRestartTimeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the estimated time that is required to restart an Elasticsearch cluster.
     *  *
     * @param string                      $InstanceId
     * @param EstimatedRestartTimeRequest $request    EstimatedRestartTimeRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return EstimatedRestartTimeResponse EstimatedRestartTimeResponse
     */
    public function estimatedRestartTimeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'EstimatedRestartTime',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/estimated-time/restart-time',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EstimatedRestartTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the estimated time that is required to restart an Elasticsearch cluster.
     *  *
     * @param string                      $InstanceId
     * @param EstimatedRestartTimeRequest $request    EstimatedRestartTimeRequest
     *
     * @return EstimatedRestartTimeResponse EstimatedRestartTimeResponse
     */
    public function estimatedRestartTime($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->estimatedRestartTimeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Call GetClusterDataInformation to obtain the data information about the cluster.
     *  *
     * @param GetClusterDataInformationRequest $request GetClusterDataInformationRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetClusterDataInformationResponse GetClusterDataInformationResponse
     */
    public function getClusterDataInformationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'GetClusterDataInformation',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/cluster/data-information',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetClusterDataInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call GetClusterDataInformation to obtain the data information about the cluster.
     *  *
     * @param GetClusterDataInformationRequest $request GetClusterDataInformationRequest
     *
     * @return GetClusterDataInformationResponse GetClusterDataInformationResponse
     */
    public function getClusterDataInformation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterDataInformationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetElastictaskResponse GetElastictaskResponse
     */
    public function getElastictaskWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetElastictask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/elastic-task',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetElastictaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return GetElastictaskResponse GetElastictaskResponse
     */
    public function getElastictask($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getElastictaskWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary 获取高级监控报警自定义Grafana监控报警项
     *  *
     * @param string                      $ProjectId
     * @param GetEmonGrafanaAlertsRequest $request   GetEmonGrafanaAlertsRequest
     * @param string[]                    $headers   map
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetEmonGrafanaAlertsResponse GetEmonGrafanaAlertsResponse
     */
    public function getEmonGrafanaAlertsWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'GetEmonGrafanaAlerts',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/emon/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '/grafana/proxy/api/alerts',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEmonGrafanaAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取高级监控报警自定义Grafana监控报警项
     *  *
     * @param string                      $ProjectId
     * @param GetEmonGrafanaAlertsRequest $request   GetEmonGrafanaAlertsRequest
     *
     * @return GetEmonGrafanaAlertsResponse GetEmonGrafanaAlertsResponse
     */
    public function getEmonGrafanaAlerts($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmonGrafanaAlertsWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取高级监控报警自定义Grafana监控大盘列表
     *  *
     * @param string                          $ProjectId
     * @param GetEmonGrafanaDashboardsRequest $request   GetEmonGrafanaDashboardsRequest
     * @param string[]                        $headers   map
     * @param RuntimeOptions                  $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetEmonGrafanaDashboardsResponse GetEmonGrafanaDashboardsResponse
     */
    public function getEmonGrafanaDashboardsWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'GetEmonGrafanaDashboards',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/emon/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '/grafana/proxy/api/search',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEmonGrafanaDashboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取高级监控报警自定义Grafana监控大盘列表
     *  *
     * @param string                          $ProjectId
     * @param GetEmonGrafanaDashboardsRequest $request   GetEmonGrafanaDashboardsRequest
     *
     * @return GetEmonGrafanaDashboardsResponse GetEmonGrafanaDashboardsResponse
     */
    public function getEmonGrafanaDashboards($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmonGrafanaDashboardsWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $ProjectId
     * @param GetEmonMonitorDataRequest $request   GetEmonMonitorDataRequest
     * @param string[]                  $headers   map
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetEmonMonitorDataResponse GetEmonMonitorDataResponse
     */
    public function getEmonMonitorDataWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'GetEmonMonitorData',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/emon/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '/metrics/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEmonMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $ProjectId
     * @param GetEmonMonitorDataRequest $request   GetEmonMonitorDataRequest
     *
     * @return GetEmonMonitorDataResponse GetEmonMonitorDataResponse
     */
    public function getEmonMonitorData($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmonMonitorDataWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @summary 统计OpenStore实例的存储容量和使用情况
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetOpenStoreUsageResponse GetOpenStoreUsageResponse
     */
    public function getOpenStoreUsageWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetOpenStoreUsage',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/openstore/usage',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOpenStoreUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 统计OpenStore实例的存储容量和使用情况
     *  *
     * @param string $InstanceId
     *
     * @return GetOpenStoreUsageResponse GetOpenStoreUsageResponse
     */
    public function getOpenStoreUsage($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOpenStoreUsageWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary The maximum number of nodes.
     *  *
     * @param GetRegionConfigurationRequest $request GetRegionConfigurationRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRegionConfigurationResponse GetRegionConfigurationResponse
     */
    public function getRegionConfigurationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->zoneId)) {
            $query['zoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRegionConfiguration',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/region',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRegionConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The maximum number of nodes.
     *  *
     * @param GetRegionConfigurationRequest $request GetRegionConfigurationRequest
     *
     * @return GetRegionConfigurationResponse GetRegionConfigurationResponse
     */
    public function getRegionConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegionConfigurationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 实例区域商品化配置
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRegionalInstanceConfigResponse GetRegionalInstanceConfigResponse
     */
    public function getRegionalInstanceConfigWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetRegionalInstanceConfig',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/regions/instance-config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRegionalInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实例区域商品化配置
     *  *
     * @return GetRegionalInstanceConfigResponse GetRegionalInstanceConfigResponse
     */
    public function getRegionalInstanceConfig()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegionalInstanceConfigWithOptions($headers, $runtime);
    }

    /**
     * @summary ES集群可缩容节点
     *  *
     * @param string                           $InstanceId
     * @param GetSuggestShrinkableNodesRequest $request    GetSuggestShrinkableNodesRequest
     * @param string[]                         $headers    map
     * @param RuntimeOptions                   $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetSuggestShrinkableNodesResponse GetSuggestShrinkableNodesResponse
     */
    public function getSuggestShrinkableNodesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->count)) {
            $query['count'] = $request->count;
        }
        if (!Utils::isUnset($request->ignoreStatus)) {
            $query['ignoreStatus'] = $request->ignoreStatus;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['nodeType'] = $request->nodeType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSuggestShrinkableNodes',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/suggest-shrinkable-nodes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSuggestShrinkableNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ES集群可缩容节点
     *  *
     * @param string                           $InstanceId
     * @param GetSuggestShrinkableNodesRequest $request    GetSuggestShrinkableNodesRequest
     *
     * @return GetSuggestShrinkableNodesResponse GetSuggestShrinkableNodesResponse
     */
    public function getSuggestShrinkableNodes($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSuggestShrinkableNodesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取可数据迁移节点
     *  *
     * @param string                      $InstanceId
     * @param GetTransferableNodesRequest $request    GetTransferableNodesRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetTransferableNodesResponse GetTransferableNodesResponse
     */
    public function getTransferableNodesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->count)) {
            $query['count'] = $request->count;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['nodeType'] = $request->nodeType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTransferableNodes',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/transferable-nodes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTransferableNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取可数据迁移节点
     *  *
     * @param string                      $InstanceId
     * @param GetTransferableNodesRequest $request    GetTransferableNodesRequest
     *
     * @return GetTransferableNodesResponse GetTransferableNodesResponse
     */
    public function getTransferableNodes($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTransferableNodesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a service-linked role.
     *  *
     * @description > Before you perform auto scaling for a cluster at the China site (aliyun.com) or you use shippers to collect logs, you must create a service-linked role.
     *  *
     * @param InitializeOperationRoleRequest $request InitializeOperationRoleRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return InitializeOperationRoleResponse InitializeOperationRoleResponse
     */
    public function initializeOperationRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'InitializeOperationRole',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/user/slr',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InitializeOperationRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a service-linked role.
     *  *
     * @description > Before you perform auto scaling for a cluster at the China site (aliyun.com) or you use shippers to collect logs, you must create a service-linked role.
     *  *
     * @param InitializeOperationRoleRequest $request InitializeOperationRoleRequest
     *
     * @return InitializeOperationRoleResponse InitializeOperationRoleResponse
     */
    public function initializeOperationRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->initializeOperationRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Installs ES-operator for a Container Service for Kubernetes (ACK) cluster.
     *  *
     * @description > Before you install a shipper for an ACK cluster, you must call this operation to install ES-operator for the cluster.
     *  *
     * @param string                    $ClusterId
     * @param InstallAckOperatorRequest $request   InstallAckOperatorRequest
     * @param string[]                  $headers   map
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return InstallAckOperatorResponse InstallAckOperatorResponse
     */
    public function installAckOperatorWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'InstallAckOperator',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ack-clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/operator',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InstallAckOperatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Installs ES-operator for a Container Service for Kubernetes (ACK) cluster.
     *  *
     * @description > Before you install a shipper for an ACK cluster, you must call this operation to install ES-operator for the cluster.
     *  *
     * @param string                    $ClusterId
     * @param InstallAckOperatorRequest $request   InstallAckOperatorRequest
     *
     * @return InstallAckOperatorResponse InstallAckOperatorResponse
     */
    public function installAckOperator($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installAckOperatorWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Call InstallKibanaSystemPlugin to install the Kibana plug-in. The Kibana specification must be 2-Core 4 GB or higher.
     *  *
     * @param string                           $InstanceId
     * @param InstallKibanaSystemPluginRequest $request    InstallKibanaSystemPluginRequest
     * @param string[]                         $headers    map
     * @param RuntimeOptions                   $runtime    runtime options for this request RuntimeOptions
     *
     * @return InstallKibanaSystemPluginResponse InstallKibanaSystemPluginResponse
     */
    public function installKibanaSystemPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'InstallKibanaSystemPlugin',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/kibana-plugins/system/actions/install',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InstallKibanaSystemPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call InstallKibanaSystemPlugin to install the Kibana plug-in. The Kibana specification must be 2-Core 4 GB or higher.
     *  *
     * @param string                           $InstanceId
     * @param InstallKibanaSystemPluginRequest $request    InstallKibanaSystemPluginRequest
     *
     * @return InstallKibanaSystemPluginResponse InstallKibanaSystemPluginResponse
     */
    public function installKibanaSystemPlugin($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installKibanaSystemPluginWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary The returned data also contains **Headers** parameters, indicating that header information is returned.
     *  *
     * @description ls-cn-oew1qbgl\\*\\*\\*\\*
     *  *
     * @param string                             $InstanceId
     * @param InstallLogstashSystemPluginRequest $request    InstallLogstashSystemPluginRequest
     * @param string[]                           $headers    map
     * @param RuntimeOptions                     $runtime    runtime options for this request RuntimeOptions
     *
     * @return InstallLogstashSystemPluginResponse InstallLogstashSystemPluginResponse
     */
    public function installLogstashSystemPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'InstallLogstashSystemPlugin',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/plugins/system/actions/install',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InstallLogstashSystemPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The returned data also contains **Headers** parameters, indicating that header information is returned.
     *  *
     * @description ls-cn-oew1qbgl\\*\\*\\*\\*
     *  *
     * @param string                             $InstanceId
     * @param InstallLogstashSystemPluginRequest $request    InstallLogstashSystemPluginRequest
     *
     * @return InstallLogstashSystemPluginResponse InstallLogstashSystemPluginResponse
     */
    public function installLogstashSystemPlugin($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installLogstashSystemPluginWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Call InstallSystemPlugin to install a system preset plug-in.
     *  *
     * @param string                     $InstanceId
     * @param InstallSystemPluginRequest $request    InstallSystemPluginRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return InstallSystemPluginResponse InstallSystemPluginResponse
     */
    public function installSystemPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'InstallSystemPlugin',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/plugins/system/actions/install',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InstallSystemPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call InstallSystemPlugin to install a system preset plug-in.
     *  *
     * @param string                     $InstanceId
     * @param InstallSystemPluginRequest $request    InstallSystemPluginRequest
     *
     * @return InstallSystemPluginResponse InstallSystemPluginResponse
     */
    public function installSystemPlugin($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installSystemPluginWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Installs custom plug-ins that are uploaded to the Elasticsearch console.
     *  *
     * @param string                    $InstanceId
     * @param InstallUserPluginsRequest $request    InstallUserPluginsRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return InstallUserPluginsResponse InstallUserPluginsResponse
     */
    public function installUserPluginsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'InstallUserPlugins',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/plugins/user/actions/install',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InstallUserPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Installs custom plug-ins that are uploaded to the Elasticsearch console.
     *  *
     * @param string                    $InstanceId
     * @param InstallUserPluginsRequest $request    InstallUserPluginsRequest
     *
     * @return InstallUserPluginsResponse InstallUserPluginsResponse
     */
    public function installUserPlugins($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installUserPluginsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $InstanceId
     * @param InterruptElasticsearchTaskRequest $request    InterruptElasticsearchTaskRequest
     * @param string[]                          $headers    map
     * @param RuntimeOptions                    $runtime    runtime options for this request RuntimeOptions
     *
     * @return InterruptElasticsearchTaskResponse InterruptElasticsearchTaskResponse
     */
    public function interruptElasticsearchTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InterruptElasticsearchTask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/interrupt',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InterruptElasticsearchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                            $InstanceId
     * @param InterruptElasticsearchTaskRequest $request    InterruptElasticsearchTaskRequest
     *
     * @return InterruptElasticsearchTaskResponse InterruptElasticsearchTaskResponse
     */
    public function interruptElasticsearchTask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->interruptElasticsearchTaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary After the task is suspended, the Logstash cluster is in the suspended state.
     *  *
     * @param string                       $InstanceId
     * @param InterruptLogstashTaskRequest $request    InterruptLogstashTaskRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return InterruptLogstashTaskResponse InterruptLogstashTaskResponse
     */
    public function interruptLogstashTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InterruptLogstashTask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/interrupt',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InterruptLogstashTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary After the task is suspended, the Logstash cluster is in the suspended state.
     *  *
     * @param string                       $InstanceId
     * @param InterruptLogstashTaskRequest $request    InterruptLogstashTaskRequest
     *
     * @return InterruptLogstashTaskResponse InterruptLogstashTaskResponse
     */
    public function interruptLogstashTask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->interruptLogstashTaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of Container Service for Kubernetes (ACK) clusters.
     *  *
     * @param ListAckClustersRequest $request ListAckClustersRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAckClustersResponse ListAckClustersResponse
     */
    public function listAckClustersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['vpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAckClusters',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ack-clusters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAckClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of Container Service for Kubernetes (ACK) clusters.
     *  *
     * @param ListAckClustersRequest $request ListAckClustersRequest
     *
     * @return ListAckClustersResponse ListAckClustersResponse
     */
    public function listAckClusters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAckClustersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries all namespaces in a specified Container Service for Kubernetes (ACK) cluster.
     *  *
     * @description > When you install a shipper on an ACK cluster, you must specify a namespace. You can call this operation to query all namespaces in the ACK cluster, and select a namespace based on your business requirements.
     *  *
     * @param string                   $ClusterId
     * @param ListAckNamespacesRequest $request   ListAckNamespacesRequest
     * @param string[]                 $headers   map
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListAckNamespacesResponse ListAckNamespacesResponse
     */
    public function listAckNamespacesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAckNamespaces',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ack-clusters/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/namespaces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAckNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all namespaces in a specified Container Service for Kubernetes (ACK) cluster.
     *  *
     * @description > When you install a shipper on an ACK cluster, you must specify a namespace. You can call this operation to query all namespaces in the ACK cluster, and select a namespace based on your business requirements.
     *  *
     * @param string                   $ClusterId
     * @param ListAckNamespacesRequest $request   ListAckNamespacesRequest
     *
     * @return ListAckNamespacesResponse ListAckNamespacesResponse
     */
    public function listAckNamespaces($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAckNamespacesWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary 变更记录 变更详情
     *  *
     * @param string                   $InstanceId
     * @param ListActionRecordsRequest $request    ListActionRecordsRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListActionRecordsResponse ListActionRecordsResponse
     */
    public function listActionRecordsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionNames)) {
            $query['actionNames'] = $request->actionNames;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['requestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListActionRecords',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/action-records',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListActionRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 变更记录 变更详情
     *  *
     * @param string                   $InstanceId
     * @param ListActionRecordsRequest $request    ListActionRecordsRequest
     *
     * @return ListActionRecordsResponse ListActionRecordsResponse
     */
    public function listActionRecords($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listActionRecordsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary es-cn-tl32cpgwa002l\\*\\*\\*\\*
     *  *
     * @param string             $InstanceId
     * @param ListAllNodeRequest $request    ListAllNodeRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListAllNodeResponse ListAllNodeResponse
     */
    public function listAllNodeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->extended)) {
            $query['extended'] = $request->extended;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAllNode',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/nodes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAllNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary es-cn-tl32cpgwa002l\\*\\*\\*\\*
     *  *
     * @param string             $InstanceId
     * @param ListAllNodeRequest $request    ListAllNodeRequest
     *
     * @return ListAllNodeResponse ListAllNodeResponse
     */
    public function listAllNode($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAllNodeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 实例可添加的OSS引用仓库
     *  *
     * @param string                              $InstanceId
     * @param ListAlternativeSnapshotReposRequest $request    ListAlternativeSnapshotReposRequest
     * @param string[]                            $headers    map
     * @param RuntimeOptions                      $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListAlternativeSnapshotReposResponse ListAlternativeSnapshotReposResponse
     */
    public function listAlternativeSnapshotReposWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alreadySetItems)) {
            $query['alreadySetItems'] = $request->alreadySetItems;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAlternativeSnapshotRepos',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/alternative-snapshot-repos',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAlternativeSnapshotReposResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实例可添加的OSS引用仓库
     *  *
     * @param string                              $InstanceId
     * @param ListAlternativeSnapshotReposRequest $request    ListAlternativeSnapshotReposRequest
     *
     * @return ListAlternativeSnapshotReposResponse ListAlternativeSnapshotReposResponse
     */
    public function listAlternativeSnapshotRepos($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlternativeSnapshotReposWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary ListApm
     *  *
     * @param ListApmRequest $request ListApmRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApmResponse ListApmResponse
     */
    public function listApmWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->output)) {
            $query['output'] = $request->output;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApm',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/apm',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListApm
     *  *
     * @param ListApmRequest $request ListApmRequest
     *
     * @return ListApmResponse ListApmResponse
     */
    public function listApm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApmWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the Elasticsearch clusters that can be associated with a Logstash cluster when you configure the X-Pack Monitoring feature for the Logstash cluster.
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListAvailableEsInstanceIdsResponse ListAvailableEsInstanceIdsResponse
     */
    public function listAvailableEsInstanceIdsWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListAvailableEsInstanceIds',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/available-elasticsearch-for-centralized-management',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAvailableEsInstanceIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Elasticsearch clusters that can be associated with a Logstash cluster when you configure the X-Pack Monitoring feature for the Logstash cluster.
     *  *
     * @param string $InstanceId
     *
     * @return ListAvailableEsInstanceIdsResponse ListAvailableEsInstanceIdsResponse
     */
    public function listAvailableEsInstanceIds($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAvailableEsInstanceIdsWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary Queries shippers.
     *  *
     * @param ListCollectorsRequest $request ListCollectorsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCollectorsResponse ListCollectorsResponse
     */
    public function listCollectorsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->resId)) {
            $query['resId'] = $request->resId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['sourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCollectors',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCollectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries shippers.
     *  *
     * @param ListCollectorsRequest $request ListCollectorsRequest
     *
     * @return ListCollectorsResponse ListCollectorsResponse
     */
    public function listCollectors($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCollectorsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary ES集群组合索引列表
     *  *
     * @param string                      $InstanceId
     * @param ListComponentIndicesRequest $request    ListComponentIndicesRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListComponentIndicesResponse ListComponentIndicesResponse
     */
    public function listComponentIndicesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListComponentIndices',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/component-index',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListComponentIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ES集群组合索引列表
     *  *
     * @param string                      $InstanceId
     * @param ListComponentIndicesRequest $request    ListComponentIndicesRequest
     *
     * @return ListComponentIndicesResponse ListComponentIndicesResponse
     */
    public function listComponentIndices($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComponentIndicesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取与当前实例进行网络互通的实例列表
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListConnectedClustersResponse ListConnectedClustersResponse
     */
    public function listConnectedClustersWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListConnectedClusters',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/connected-clusters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListConnectedClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取与当前实例进行网络互通的实例列表
     *  *
     * @param string $InstanceId
     *
     * @return ListConnectedClustersResponse ListConnectedClustersResponse
     */
    public function listConnectedClusters($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConnectedClustersWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string                 $InstanceId
     * @param ListDataStreamsRequest $request    ListDataStreamsRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDataStreamsResponse ListDataStreamsResponse
     */
    public function listDataStreamsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isManaged)) {
            $query['isManaged'] = $request->isManaged;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataStreams',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/data-streams',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataStreamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $InstanceId
     * @param ListDataStreamsRequest $request    ListDataStreamsRequest
     *
     * @return ListDataStreamsResponse ListDataStreamsResponse
     */
    public function listDataStreams($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataStreamsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDataTasksResponse ListDataTasksResponse
     */
    public function listDataTasksWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListDataTasks',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/data-task',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ListDataTasksResponse ListDataTasksResponse
     */
    public function listDataTasks($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataTasksWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary Queries the default configuration files of shippers.
     *  *
     * @param ListDefaultCollectorConfigurationsRequest $request ListDefaultCollectorConfigurationsRequest
     * @param string[]                                  $headers map
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDefaultCollectorConfigurationsResponse ListDefaultCollectorConfigurationsResponse
     */
    public function listDefaultCollectorConfigurationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resType)) {
            $query['resType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resVersion)) {
            $query['resVersion'] = $request->resVersion;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['sourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDefaultCollectorConfigurations',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/beats/default-configurations',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDefaultCollectorConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the default configuration files of shippers.
     *  *
     * @param ListDefaultCollectorConfigurationsRequest $request ListDefaultCollectorConfigurationsRequest
     *
     * @return ListDefaultCollectorConfigurationsResponse ListDefaultCollectorConfigurationsResponse
     */
    public function listDefaultCollectorConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDefaultCollectorConfigurationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary ListDeprecatedTemplates
     *  *
     * @param string                         $InstanceId
     * @param ListDeprecatedTemplatesRequest $request    ListDeprecatedTemplatesRequest
     * @param string[]                       $headers    map
     * @param RuntimeOptions                 $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDeprecatedTemplatesResponse ListDeprecatedTemplatesResponse
     */
    public function listDeprecatedTemplatesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeprecatedTemplates',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/deprecated-templates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDeprecatedTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListDeprecatedTemplates
     *  *
     * @param string                         $InstanceId
     * @param ListDeprecatedTemplatesRequest $request    ListDeprecatedTemplatesRequest
     *
     * @return ListDeprecatedTemplatesResponse ListDeprecatedTemplatesResponse
     */
    public function listDeprecatedTemplates($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeprecatedTemplatesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the indexes for health diagnosis performed on an Elasticsearch cluster.
     *  *
     * @param string                     $InstanceId
     * @param ListDiagnoseIndicesRequest $request    ListDiagnoseIndicesRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDiagnoseIndicesResponse ListDiagnoseIndicesResponse
     */
    public function listDiagnoseIndicesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDiagnoseIndices',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/indices',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDiagnoseIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the indexes for health diagnosis performed on an Elasticsearch cluster.
     *  *
     * @param string                     $InstanceId
     * @param ListDiagnoseIndicesRequest $request    ListDiagnoseIndicesRequest
     *
     * @return ListDiagnoseIndicesResponse ListDiagnoseIndicesResponse
     */
    public function listDiagnoseIndices($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDiagnoseIndicesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取集群诊断报告列表
     *  *
     * @param string                    $InstanceId
     * @param ListDiagnoseReportRequest $request    ListDiagnoseReportRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDiagnoseReportResponse ListDiagnoseReportResponse
     */
    public function listDiagnoseReportWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->detail)) {
            $query['detail'] = $request->detail;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->trigger)) {
            $query['trigger'] = $request->trigger;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDiagnoseReport',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/reports',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDiagnoseReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取集群诊断报告列表
     *  *
     * @param string                    $InstanceId
     * @param ListDiagnoseReportRequest $request    ListDiagnoseReportRequest
     *
     * @return ListDiagnoseReportResponse ListDiagnoseReportResponse
     */
    public function listDiagnoseReport($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDiagnoseReportWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the IDs of the historical intelligent O&M reports of an Elasticsearch cluster.
     *  *
     * @param string                       $InstanceId
     * @param ListDiagnoseReportIdsRequest $request    ListDiagnoseReportIdsRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDiagnoseReportIdsResponse ListDiagnoseReportIdsResponse
     */
    public function listDiagnoseReportIdsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->trigger)) {
            $query['trigger'] = $request->trigger;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDiagnoseReportIds',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/report-ids',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDiagnoseReportIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the IDs of the historical intelligent O&M reports of an Elasticsearch cluster.
     *  *
     * @param string                       $InstanceId
     * @param ListDiagnoseReportIdsRequest $request    ListDiagnoseReportIdsRequest
     *
     * @return ListDiagnoseReportIdsResponse ListDiagnoseReportIdsResponse
     */
    public function listDiagnoseReportIds($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDiagnoseReportIdsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary The diagnostic item is used to check whether data write requests of a cluster are accumulated. If data write requests are accumulated, a bulk rejection occurs. This may cause data loss and severely consume system resources.
     *  *
     * @param ListDiagnosisItemsRequest $request ListDiagnosisItemsRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDiagnosisItemsResponse ListDiagnosisItemsResponse
     */
    public function listDiagnosisItemsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDiagnosisItems',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/items',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDiagnosisItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The diagnostic item is used to check whether data write requests of a cluster are accumulated. If data write requests are accumulated, a bulk rejection occurs. This may cause data loss and severely consume system resources.
     *  *
     * @param ListDiagnosisItemsRequest $request ListDiagnosisItemsRequest
     *
     * @return ListDiagnosisItemsResponse ListDiagnosisItemsResponse
     */
    public function listDiagnosisItems($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDiagnosisItemsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                     $InstanceId
     * @param ListDictInformationRequest $request    ListDictInformationRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDictInformationResponse ListDictInformationResponse
     */
    public function listDictInformationWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->analyzerType)) {
            $query['analyzerType'] = $request->analyzerType;
        }
        if (!Utils::isUnset($request->bucketName)) {
            $query['bucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->key)) {
            $query['key'] = $request->key;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDictInformation',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/dict/_info',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDictInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $InstanceId
     * @param ListDictInformationRequest $request    ListDictInformationRequest
     *
     * @return ListDictInformationResponse ListDictInformationResponse
     */
    public function listDictInformation($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDictInformationWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a specified type of dictionary.
     *  *
     * @param string           $InstanceId
     * @param ListDictsRequest $request    ListDictsRequest
     * @param string[]         $headers    map
     * @param RuntimeOptions   $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListDictsResponse ListDictsResponse
     */
    public function listDictsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->analyzerType)) {
            $query['analyzerType'] = $request->analyzerType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDicts',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/dicts',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDictsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a specified type of dictionary.
     *  *
     * @param string           $InstanceId
     * @param ListDictsRequest $request    ListDictsRequest
     *
     * @return ListDictsResponse ListDictsResponse
     */
    public function listDicts($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDictsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @description **Important** To call this operation, you must create the Aliyun Elasticsearch AccessingOOSRole and the system service role AliyunOOSAccessingECS 4ESRole to Elasticsearch the service account to obtain the ECS access permissions of the primary account. For more information, see [Collect ECS service logs](https://help.aliyun.com/document_detail/146446.html).
     *  *
     * @param ListEcsInstancesRequest $request ListEcsInstancesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEcsInstancesResponse ListEcsInstancesResponse
     */
    public function listEcsInstancesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ecsInstanceIds)) {
            $query['ecsInstanceIds'] = $request->ecsInstanceIds;
        }
        if (!Utils::isUnset($request->ecsInstanceName)) {
            $query['ecsInstanceName'] = $request->ecsInstanceName;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['vpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEcsInstances',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ecs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEcsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description **Important** To call this operation, you must create the Aliyun Elasticsearch AccessingOOSRole and the system service role AliyunOOSAccessingECS 4ESRole to Elasticsearch the service account to obtain the ECS access permissions of the primary account. For more information, see [Collect ECS service logs](https://help.aliyun.com/document_detail/146446.html).
     *  *
     * @param ListEcsInstancesRequest $request ListEcsInstancesRequest
     *
     * @return ListEcsInstancesResponse ListEcsInstancesResponse
     */
    public function listEcsInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEcsInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the driver files of a Logstash cluster.
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListExtendfilesResponse ListExtendfilesResponse
     */
    public function listExtendfilesWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListExtendfiles',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/extendfiles',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListExtendfilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the driver files of a Logstash cluster.
     *  *
     * @param string $InstanceId
     *
     * @return ListExtendfilesResponse ListExtendfilesResponse
     */
    public function listExtendfiles($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExtendfilesWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string                 $InstanceId
     * @param ListILMPoliciesRequest $request    ListILMPoliciesRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListILMPoliciesResponse ListILMPoliciesResponse
     */
    public function listILMPoliciesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['policyName'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListILMPolicies',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/ilm-policies',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListILMPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $InstanceId
     * @param ListILMPoliciesRequest $request    ListILMPoliciesRequest
     *
     * @return ListILMPoliciesResponse ListILMPoliciesResponse
     */
    public function listILMPolicies($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listILMPoliciesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $InstanceId
     * @param ListIndexTemplatesRequest $request    ListIndexTemplatesRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListIndexTemplatesResponse ListIndexTemplatesResponse
     */
    public function listIndexTemplatesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->indexTemplate)) {
            $query['indexTemplate'] = $request->indexTemplate;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIndexTemplates',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/index-templates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIndexTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $InstanceId
     * @param ListIndexTemplatesRequest $request    ListIndexTemplatesRequest
     *
     * @return ListIndexTemplatesResponse ListIndexTemplatesResponse
     */
    public function listIndexTemplates($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndexTemplatesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询Elasticsearch实例列表
     *  *
     * @param ListInstanceRequest $request ListInstanceRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceResponse ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->esVersion)) {
            $query['esVersion'] = $request->esVersion;
        }
        if (!Utils::isUnset($request->instanceCategory)) {
            $query['instanceCategory'] = $request->instanceCategory;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $query['paymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['vpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['zoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstance',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询Elasticsearch实例列表
     *  *
     * @param ListInstanceRequest $request ListInstanceRequest
     *
     * @return ListInstanceResponse ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 集群触发的硬件运维事件列表
     *  *
     * @param ListInstanceHistoryEventsRequest $tmpReq  ListInstanceHistoryEventsRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceHistoryEventsResponse ListInstanceHistoryEventsResponse
     */
    public function listInstanceHistoryEventsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListInstanceHistoryEventsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->eventCycleStatus)) {
            $request->eventCycleStatusShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->eventCycleStatus, 'eventCycleStatus', 'simple');
        }
        if (!Utils::isUnset($tmpReq->eventLevel)) {
            $request->eventLevelShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->eventLevel, 'eventLevel', 'simple');
        }
        if (!Utils::isUnset($tmpReq->eventType)) {
            $request->eventTypeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->eventType, 'eventType', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->eventCreateEndTime)) {
            $query['eventCreateEndTime'] = $request->eventCreateEndTime;
        }
        if (!Utils::isUnset($request->eventCreateStartTime)) {
            $query['eventCreateStartTime'] = $request->eventCreateStartTime;
        }
        if (!Utils::isUnset($request->eventCycleStatusShrink)) {
            $query['eventCycleStatus'] = $request->eventCycleStatusShrink;
        }
        if (!Utils::isUnset($request->eventExecuteEndTime)) {
            $query['eventExecuteEndTime'] = $request->eventExecuteEndTime;
        }
        if (!Utils::isUnset($request->eventExecuteStartTime)) {
            $query['eventExecuteStartTime'] = $request->eventExecuteStartTime;
        }
        if (!Utils::isUnset($request->eventFinashEndTime)) {
            $query['eventFinashEndTime'] = $request->eventFinashEndTime;
        }
        if (!Utils::isUnset($request->eventFinashStartTime)) {
            $query['eventFinashStartTime'] = $request->eventFinashStartTime;
        }
        if (!Utils::isUnset($request->eventLevelShrink)) {
            $query['eventLevel'] = $request->eventLevelShrink;
        }
        if (!Utils::isUnset($request->eventTypeShrink)) {
            $query['eventType'] = $request->eventTypeShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeIP)) {
            $query['nodeIP'] = $request->nodeIP;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceHistoryEvents',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/events',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceHistoryEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 集群触发的硬件运维事件列表
     *  *
     * @param ListInstanceHistoryEventsRequest $request ListInstanceHistoryEventsRequest
     *
     * @return ListInstanceHistoryEventsResponse ListInstanceHistoryEventsResponse
     */
    public function listInstanceHistoryEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceHistoryEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取当前实例先特定的索引列表
     *  *
     * @param string                     $InstanceId
     * @param ListInstanceIndicesRequest $request    ListInstanceIndicesRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListInstanceIndicesResponse ListInstanceIndicesResponse
     */
    public function listInstanceIndicesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['all'] = $request->all;
        }
        if (!Utils::isUnset($request->isManaged)) {
            $query['isManaged'] = $request->isManaged;
        }
        if (!Utils::isUnset($request->isOpenstore)) {
            $query['isOpenstore'] = $request->isOpenstore;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceIndices',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/indices',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当前实例先特定的索引列表
     *  *
     * @param string                     $InstanceId
     * @param ListInstanceIndicesRequest $request    ListInstanceIndicesRequest
     *
     * @return ListInstanceIndicesResponse ListInstanceIndicesResponse
     */
    public function listInstanceIndices($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceIndicesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of Kibana plug-ins.
     *  *
     * @param string                   $InstanceId
     * @param ListKibanaPluginsRequest $request    ListKibanaPluginsRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListKibanaPluginsResponse ListKibanaPluginsResponse
     */
    public function listKibanaPluginsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListKibanaPlugins',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/kibana-plugins',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListKibanaPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of Kibana plug-ins.
     *  *
     * @param string                   $InstanceId
     * @param ListKibanaPluginsRequest $request    ListKibanaPluginsRequest
     *
     * @return ListKibanaPluginsResponse ListKibanaPluginsResponse
     */
    public function listKibanaPlugins($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKibanaPluginsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询kibana私网连接信息
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListKibanaPvlNetworkResponse ListKibanaPvlNetworkResponse
     */
    public function listKibanaPvlNetworkWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListKibanaPvlNetwork',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/get-kibana-private',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListKibanaPvlNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询kibana私网连接信息
     *  *
     * @param string $InstanceId
     *
     * @return ListKibanaPvlNetworkResponse ListKibanaPvlNetworkResponse
     */
    public function listKibanaPvlNetwork($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listKibanaPvlNetworkWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary Logstash集群列表
     *  *
     * @param ListLogstashRequest $request ListLogstashRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLogstashResponse ListLogstashResponse
     */
    public function listLogstashWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogstash',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Logstash集群列表
     *  *
     * @param ListLogstashRequest $request ListLogstashRequest
     *
     * @return ListLogstashResponse ListLogstashResponse
     */
    public function listLogstash($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogstashWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取Logstash日志
     *  *
     * @param string                 $InstanceId
     * @param ListLogstashLogRequest $request    ListLogstashLogRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListLogstashLogResponse ListLogstashLogResponse
     */
    public function listLogstashLogWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogstashLog',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/search-log',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLogstashLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取Logstash日志
     *  *
     * @param string                 $InstanceId
     * @param ListLogstashLogRequest $request    ListLogstashLogRequest
     *
     * @return ListLogstashLogResponse ListLogstashLogResponse
     */
    public function listLogstashLog($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogstashLogWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Logstash插件列表
     *  *
     * @param string                     $InstanceId
     * @param ListLogstashPluginsRequest $request    ListLogstashPluginsRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListLogstashPluginsResponse ListLogstashPluginsResponse
     */
    public function listLogstashPluginsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->source)) {
            $query['source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogstashPlugins',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/plugins',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLogstashPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Logstash插件列表
     *  *
     * @param string                     $InstanceId
     * @param ListLogstashPluginsRequest $request    ListLogstashPluginsRequest
     *
     * @return ListLogstashPluginsResponse ListLogstashPluginsResponse
     */
    public function listLogstashPlugins($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogstashPluginsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the statuses of Elastic Compute Service (ECS) instances on which a shipper is installed.
     *  *
     * @param string           $ResId
     * @param ListNodesRequest $request ListNodesRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodesWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ecsInstanceIds)) {
            $query['ecsInstanceIds'] = $request->ecsInstanceIds;
        }
        if (!Utils::isUnset($request->ecsInstanceName)) {
            $query['ecsInstanceName'] = $request->ecsInstanceName;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodes',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . OpenApiUtilClient::getEncodeParam($ResId) . '/nodes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statuses of Elastic Compute Service (ECS) instances on which a shipper is installed.
     *  *
     * @param string           $ResId
     * @param ListNodesRequest $request ListNodesRequest
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodes($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNodesWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * @param string              $InstanceId
     * @param ListPipelineRequest $request    ListPipelineRequest
     * @param string[]            $headers    map
     * @param RuntimeOptions      $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListPipelineResponse ListPipelineResponse
     */
    public function listPipelineWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['pipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipeline',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/pipelines',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $InstanceId
     * @param ListPipelineRequest $request    ListPipelineRequest
     *
     * @return ListPipelineResponse ListPipelineResponse
     */
    public function listPipeline($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary The error message returned.
     *  *
     * @param string                 $InstanceId
     * @param ListPipelineIdsRequest $request    ListPipelineIdsRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListPipelineIdsResponse ListPipelineIdsResponse
     */
    public function listPipelineIdsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListPipelineIds',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/pipeline-ids',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The error message returned.
     *  *
     * @param string                 $InstanceId
     * @param ListPipelineIdsRequest $request    ListPipelineIdsRequest
     *
     * @return ListPipelineIdsResponse ListPipelineIdsResponse
     */
    public function listPipelineIds($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineIdsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary ES系统插件列表
     *  *
     * @param string             $InstanceId
     * @param ListPluginsRequest $request    ListPluginsRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListPluginsResponse ListPluginsResponse
     */
    public function listPluginsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->source)) {
            $query['source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPlugins',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/plugins',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ES系统插件列表
     *  *
     * @param string             $InstanceId
     * @param ListPluginsRequest $request    ListPluginsRequest
     *
     * @return ListPluginsResponse ListPluginsResponse
     */
    public function listPlugins($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPluginsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 查看Elasticsearch集群各种类型的日志
     *  *
     * @param string               $InstanceId
     * @param ListSearchLogRequest $request    ListSearchLogRequest
     * @param string[]             $headers    map
     * @param RuntimeOptions       $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListSearchLogResponse ListSearchLogResponse
     */
    public function listSearchLogWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSearchLog',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/search-log',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSearchLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看Elasticsearch集群各种类型的日志
     *  *
     * @param string               $InstanceId
     * @param ListSearchLogRequest $request    ListSearchLogRequest
     *
     * @return ListSearchLogResponse ListSearchLogResponse
     */
    public function listSearchLog($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSearchLogWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about shards that are being restored or shards that are restored. By default, this operation returns only the information about shards that are being restored after you call this operation.
     *  *
     * @description > The restoration of a shard is a process of synchronizing data from a primary shard to a replica shard. After the restoration is complete, the replica shard is available for data searches.
     *  *
     * @param string                     $InstanceId
     * @param ListShardRecoveriesRequest $request    ListShardRecoveriesRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListShardRecoveriesResponse ListShardRecoveriesResponse
     */
    public function listShardRecoveriesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activeOnly)) {
            $query['activeOnly'] = $request->activeOnly;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListShardRecoveries',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/cat-recovery',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListShardRecoveriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about shards that are being restored or shards that are restored. By default, this operation returns only the information about shards that are being restored after you call this operation.
     *  *
     * @description > The restoration of a shard is a process of synchronizing data from a primary shard to a replica shard. After the restoration is complete, the replica shard is available for data searches.
     *  *
     * @param string                     $InstanceId
     * @param ListShardRecoveriesRequest $request    ListShardRecoveriesRequest
     *
     * @return ListShardRecoveriesResponse ListShardRecoveriesResponse
     */
    public function listShardRecoveries($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listShardRecoveriesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取跨集群索引仓库列表
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListSnapshotReposByInstanceIdResponse ListSnapshotReposByInstanceIdResponse
     */
    public function listSnapshotReposByInstanceIdWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSnapshotReposByInstanceId',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/snapshot-repos',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSnapshotReposByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取跨集群索引仓库列表
     *  *
     * @param string $InstanceId
     *
     * @return ListSnapshotReposByInstanceIdResponse ListSnapshotReposByInstanceIdResponse
     */
    public function listSnapshotReposByInstanceId($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSnapshotReposByInstanceIdWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary 查看资源和标签关系
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/tags',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看资源和标签关系
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查看所有已常见的标签
     *  *
     * @param ListTagsRequest $request ListTagsRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagsResponse ListTagsResponse
     */
    public function listTagsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTags',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/tags/all-tags',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看所有已常见的标签
     *  *
     * @param ListTagsRequest $request ListTagsRequest
     *
     * @return ListTagsResponse ListTagsResponse
     */
    public function listTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the statuses of endpoints in the virtual private cloud (VPC) within the Elasticsearch service account.
     *  *
     * @param string                  $InstanceId
     * @param ListVpcEndpointsRequest $request    ListVpcEndpointsRequest
     * @param string[]                $headers    map
     * @param RuntimeOptions          $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListVpcEndpointsResponse ListVpcEndpointsResponse
     */
    public function listVpcEndpointsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVpcEndpoints',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/vpc-endpoints',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVpcEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statuses of endpoints in the virtual private cloud (VPC) within the Elasticsearch service account.
     *  *
     * @param string                  $InstanceId
     * @param ListVpcEndpointsRequest $request    ListVpcEndpointsRequest
     *
     * @return ListVpcEndpointsResponse ListVpcEndpointsResponse
     */
    public function listVpcEndpoints($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVpcEndpointsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Call the MigrateToOtherZone to migrate the nodes in the specified zone to the destination zone.
     *  *
     * @description If the specifications in your zone are insufficient, you can upgrade your instance to nodes in another zone. Before calling this interface, you must ensure that:
     * *   The error message returned because the current account is in a zone that has sufficient resources.
     *     After migrating nodes with current specifications to another zone, you need to manually [upgrade cluster](https://help.aliyun.com/document_detail/96650.html) because the cluster will not be upgraded during the migration process. Therefore, select a zone with sufficient resources to avoid cluster upgrade failure. We recommend that you choose new zones that are in lower alphabetical order. For example, for cn-hangzhou-e and cn-hangzhou-h zones, choose cn-hangzhou-h first.
     * *   The cluster is in the healthy state.
     *     Can be passed`  GET _cat/health?v  `command to view the health status of the cluster.
     *  *
     * @param string                    $InstanceId
     * @param MigrateToOtherZoneRequest $request    MigrateToOtherZoneRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return MigrateToOtherZoneResponse MigrateToOtherZoneResponse
     */
    public function migrateToOtherZoneWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'MigrateToOtherZone',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/migrate-zones',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MigrateToOtherZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call the MigrateToOtherZone to migrate the nodes in the specified zone to the destination zone.
     *  *
     * @description If the specifications in your zone are insufficient, you can upgrade your instance to nodes in another zone. Before calling this interface, you must ensure that:
     * *   The error message returned because the current account is in a zone that has sufficient resources.
     *     After migrating nodes with current specifications to another zone, you need to manually [upgrade cluster](https://help.aliyun.com/document_detail/96650.html) because the cluster will not be upgraded during the migration process. Therefore, select a zone with sufficient resources to avoid cluster upgrade failure. We recommend that you choose new zones that are in lower alphabetical order. For example, for cn-hangzhou-e and cn-hangzhou-h zones, choose cn-hangzhou-h first.
     * *   The cluster is in the healthy state.
     *     Can be passed`  GET _cat/health?v  `command to view the health status of the cluster.
     *  *
     * @param string                    $InstanceId
     * @param MigrateToOtherZoneRequest $request    MigrateToOtherZoneRequest
     *
     * @return MigrateToOtherZoneResponse MigrateToOtherZoneResponse
     */
    public function migrateToOtherZone($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->migrateToOtherZoneWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Changes the Elastic Compute Service (ECS) instances on which a shipper is installed.
     *  *
     * @param string                     $ResId
     * @param ModifyDeployMachineRequest $request ModifyDeployMachineRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDeployMachineResponse ModifyDeployMachineResponse
     */
    public function modifyDeployMachineWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ModifyDeployMachine',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . OpenApiUtilClient::getEncodeParam($ResId) . '/actions/modify-deploy-machines',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the Elastic Compute Service (ECS) instances on which a shipper is installed.
     *  *
     * @param string                     $ResId
     * @param ModifyDeployMachineRequest $request ModifyDeployMachineRequest
     *
     * @return ModifyDeployMachineResponse ModifyDeployMachineResponse
     */
    public function modifyDeployMachine($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDeployMachineWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $InstanceId
     * @param ModifyElastictaskRequest $request    ModifyElastictaskRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyElastictaskResponse ModifyElastictaskResponse
     */
    public function modifyElastictaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ModifyElastictask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/elastic-task',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyElastictaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $InstanceId
     * @param ModifyElastictaskRequest $request    ModifyElastictaskRequest
     *
     * @return ModifyElastictaskResponse ModifyElastictaskResponse
     */
    public function modifyElastictask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyElastictaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary ## RequestBody
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
     * ```
     *  *
     * @description es-cn-n6w1o1x0w001c\\*\\*\\*\\*
     *  *
     * @param string                            $InstanceId
     * @param ModifyInstanceMaintainTimeRequest $request    ModifyInstanceMaintainTimeRequest
     * @param string[]                          $headers    map
     * @param RuntimeOptions                    $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceMaintainTimeResponse ModifyInstanceMaintainTimeResponse
     */
    public function modifyInstanceMaintainTimeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceMaintainTime',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/modify-maintaintime',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceMaintainTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ## RequestBody
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
     * ```
     *  *
     * @description es-cn-n6w1o1x0w001c\\*\\*\\*\\*
     *  *
     * @param string                            $InstanceId
     * @param ModifyInstanceMaintainTimeRequest $request    ModifyInstanceMaintainTimeRequest
     *
     * @return ModifyInstanceMaintainTimeResponse ModifyInstanceMaintainTimeResponse
     */
    public function modifyInstanceMaintainTime($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyInstanceMaintainTimeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary >  If you want to add an IP address whitelist, you can set the modifyMode parameter only to Cover. If you set this parameter to Delete or Append, you can only update an IP address whitelist.
     * *   If you set the modifyMode parameter to Cover and leave the ips parameter empty, the system deletes the specified whitelist. If the whitelist specified by using the groupName parameter does not exist, the system creates such a whitelist.
     * *   If you set the modifyMode parameter to Delete, at least one IP address must be retained for the specified whitelist.
     * *   If you set the modifyMode parameter to Append, you must make sure that the specified whitelist exists. Otherwise, the system reports the NotFound error.
     *  *
     * @description The ID of the cluster.
     *  *
     * @param string                $InstanceId
     * @param ModifyWhiteIpsRequest $request    ModifyWhiteIpsRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return ModifyWhiteIpsResponse ModifyWhiteIpsResponse
     */
    public function modifyWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->modifyMode)) {
            $body['modifyMode'] = $request->modifyMode;
        }
        if (!Utils::isUnset($request->networkType)) {
            $body['networkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $body['nodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->whiteIpGroup)) {
            $body['whiteIpGroup'] = $request->whiteIpGroup;
        }
        if (!Utils::isUnset($request->whiteIpList)) {
            $body['whiteIpList'] = $request->whiteIpList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyWhiteIps',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/modify-white-ips',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary >  If you want to add an IP address whitelist, you can set the modifyMode parameter only to Cover. If you set this parameter to Delete or Append, you can only update an IP address whitelist.
     * *   If you set the modifyMode parameter to Cover and leave the ips parameter empty, the system deletes the specified whitelist. If the whitelist specified by using the groupName parameter does not exist, the system creates such a whitelist.
     * *   If you set the modifyMode parameter to Delete, at least one IP address must be retained for the specified whitelist.
     * *   If you set the modifyMode parameter to Append, you must make sure that the specified whitelist exists. Otherwise, the system reports the NotFound error.
     *  *
     * @description The ID of the cluster.
     *  *
     * @param string                $InstanceId
     * @param ModifyWhiteIpsRequest $request    ModifyWhiteIpsRequest
     *
     * @return ModifyWhiteIpsResponse ModifyWhiteIpsResponse
     */
    public function modifyWhiteIps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Migrates an Elasticsearch cluster to a specified resource group.
     *  *
     * @param string                   $InstanceId
     * @param MoveResourceGroupRequest $request    MoveResourceGroupRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'MoveResourceGroup',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/resourcegroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Migrates an Elasticsearch cluster to a specified resource group.
     *  *
     * @param string                   $InstanceId
     * @param MoveResourceGroupRequest $request    MoveResourceGroupRequest
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroup($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->moveResourceGroupWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string               $InstanceId
     * @param OpenDiagnosisRequest $request    OpenDiagnosisRequest
     * @param string[]             $headers    map
     * @param RuntimeOptions       $runtime    runtime options for this request RuntimeOptions
     *
     * @return OpenDiagnosisResponse OpenDiagnosisResponse
     */
    public function openDiagnosisWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenDiagnosis',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/open-diagnosis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OpenDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $InstanceId
     * @param OpenDiagnosisRequest $request    OpenDiagnosisRequest
     *
     * @return OpenDiagnosisResponse OpenDiagnosisResponse
     */
    public function openDiagnosis($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openDiagnosisWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @description >  To ensure data security, we recommend that you enable HTTPS.
     *  *
     * @param string           $InstanceId
     * @param OpenHttpsRequest $request    OpenHttpsRequest
     * @param string[]         $headers    map
     * @param RuntimeOptions   $runtime    runtime options for this request RuntimeOptions
     *
     * @return OpenHttpsResponse OpenHttpsResponse
     */
    public function openHttpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenHttps',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/open-https',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OpenHttpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description >  To ensure data security, we recommend that you enable HTTPS.
     *  *
     * @param string           $InstanceId
     * @param OpenHttpsRequest $request    OpenHttpsRequest
     *
     * @return OpenHttpsResponse OpenHttpsResponse
     */
    public function openHttps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openHttpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ProjectId
     * @param string                      $AlarmGroupId
     * @param PostEmonTryAlarmRuleRequest $request      PostEmonTryAlarmRuleRequest
     * @param string[]                    $headers      map
     * @param RuntimeOptions              $runtime      runtime options for this request RuntimeOptions
     *
     * @return PostEmonTryAlarmRuleResponse PostEmonTryAlarmRuleResponse
     */
    public function postEmonTryAlarmRuleWithOptions($ProjectId, $AlarmGroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'PostEmonTryAlarmRule',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/emon/projects/' . OpenApiUtilClient::getEncodeParam($ProjectId) . '/alarm-groups/' . OpenApiUtilClient::getEncodeParam($AlarmGroupId) . '/alarm-rules/_test',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PostEmonTryAlarmRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $ProjectId
     * @param string                      $AlarmGroupId
     * @param PostEmonTryAlarmRuleRequest $request      PostEmonTryAlarmRuleRequest
     *
     * @return PostEmonTryAlarmRuleResponse PostEmonTryAlarmRuleResponse
     */
    public function postEmonTryAlarmRule($ProjectId, $AlarmGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->postEmonTryAlarmRuleWithOptions($ProjectId, $AlarmGroupId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $InstanceId
     * @param RecommendTemplatesRequest $request    RecommendTemplatesRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return RecommendTemplatesResponse RecommendTemplatesResponse
     */
    public function recommendTemplatesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->usageScenario)) {
            $query['usageScenario'] = $request->usageScenario;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecommendTemplates',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/recommended-templates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecommendTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $InstanceId
     * @param RecommendTemplatesRequest $request    RecommendTemplatesRequest
     *
     * @return RecommendTemplatesResponse RecommendTemplatesResponse
     */
    public function recommendTemplates($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recommendTemplatesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Installs a shipper that failed to be installed when you create the shipper.
     *  *
     * @param string                    $ResId
     * @param ReinstallCollectorRequest $request ReinstallCollectorRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ReinstallCollectorResponse ReinstallCollectorResponse
     */
    public function reinstallCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ReinstallCollector',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . OpenApiUtilClient::getEncodeParam($ResId) . '/actions/reinstall',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReinstallCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Installs a shipper that failed to be installed when you create the shipper.
     *  *
     * @param string                    $ResId
     * @param ReinstallCollectorRequest $request ReinstallCollectorRequest
     *
     * @return ReinstallCollectorResponse ReinstallCollectorResponse
     */
    public function reinstallCollector($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reinstallCollectorWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * @summary RemoveApm
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return RemoveApmResponse RemoveApmResponse
     */
    public function removeApmWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveApm',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/apm/' . OpenApiUtilClient::getEncodeParam($instanceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary RemoveApm
     *  *
     * @param string $instanceId
     *
     * @return RemoveApmResponse RemoveApmResponse
     */
    public function removeApm($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeApmWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Call RenewInstance to renew a subscription instance.
     *  *
     * @param string               $InstanceId
     * @param RenewInstanceRequest $request    RenewInstanceRequest
     * @param string[]             $headers    map
     * @param RuntimeOptions       $runtime    runtime options for this request RuntimeOptions
     *
     * @return RenewInstanceResponse RenewInstanceResponse
     */
    public function renewInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RenewInstance',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/renew',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call RenewInstance to renew a subscription instance.
     *  *
     * @param string               $InstanceId
     * @param RenewInstanceRequest $request    RenewInstanceRequest
     *
     * @return RenewInstanceResponse RenewInstanceResponse
     */
    public function renewInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renewInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Renews a Logstash cluster.
     *  *
     * @param string               $InstanceId
     * @param RenewLogstashRequest $request    RenewLogstashRequest
     * @param string[]             $headers    map
     * @param RuntimeOptions       $runtime    runtime options for this request RuntimeOptions
     *
     * @return RenewLogstashResponse RenewLogstashResponse
     */
    public function renewLogstashWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RenewLogstash',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/renew',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RenewLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Renews a Logstash cluster.
     *  *
     * @param string               $InstanceId
     * @param RenewLogstashRequest $request    RenewLogstashRequest
     *
     * @return RenewLogstashResponse RenewLogstashResponse
     */
    public function renewLogstash($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renewLogstashWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Restarts a shipper.
     *  *
     * @param string                  $ResId
     * @param RestartCollectorRequest $request RestartCollectorRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartCollectorResponse RestartCollectorResponse
     */
    public function restartCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartCollector',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . OpenApiUtilClient::getEncodeParam($ResId) . '/actions/restart',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restarts a shipper.
     *  *
     * @param string                  $ResId
     * @param RestartCollectorRequest $request RestartCollectorRequest
     *
     * @return RestartCollectorResponse RestartCollectorResponse
     */
    public function restartCollector($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartCollectorWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * @summary You can call this operation to restart a specified Elasticsearch instance.
     *  *
     * @description >  After the instance is restarted, the instance enters the activating state. After the instance is restarted, its status changes to active. Alibaba Cloud Elasticsearch supports restarting a single node. Restarting a node can be divided into normal restart and blue-green restart.
     *  *
     * @param string                 $InstanceId
     * @param RestartInstanceRequest $request    RestartInstanceRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return RestartInstanceResponse RestartInstanceResponse
     */
    public function restartInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RestartInstance',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/restart',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to restart a specified Elasticsearch instance.
     *  *
     * @description >  After the instance is restarted, the instance enters the activating state. After the instance is restarted, its status changes to active. Alibaba Cloud Elasticsearch supports restarting a single node. Restarting a node can be divided into normal restart and blue-green restart.
     *  *
     * @param string                 $InstanceId
     * @param RestartInstanceRequest $request    RestartInstanceRequest
     *
     * @return RestartInstanceResponse RestartInstanceResponse
     */
    public function restartInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 重启Logstash集群
     *  *
     * @param string                 $InstanceId
     * @param RestartLogstashRequest $request    RestartLogstashRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return RestartLogstashResponse RestartLogstashResponse
     */
    public function restartLogstashWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $body = [];
        if (!Utils::isUnset($request->batchCount)) {
            $body['batchCount'] = $request->batchCount;
        }
        if (!Utils::isUnset($request->blueGreenDep)) {
            $body['blueGreenDep'] = $request->blueGreenDep;
        }
        if (!Utils::isUnset($request->nodeTypes)) {
            $body['nodeTypes'] = $request->nodeTypes;
        }
        if (!Utils::isUnset($request->nodes)) {
            $body['nodes'] = $request->nodes;
        }
        if (!Utils::isUnset($request->restartType)) {
            $body['restartType'] = $request->restartType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RestartLogstash',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/restart',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重启Logstash集群
     *  *
     * @param string                 $InstanceId
     * @param RestartLogstashRequest $request    RestartLogstashRequest
     *
     * @return RestartLogstashResponse RestartLogstashResponse
     */
    public function restartLogstash($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartLogstashWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $InstanceId
     * @param ResumeElasticsearchTaskRequest $request    ResumeElasticsearchTaskRequest
     * @param string[]                       $headers    map
     * @param RuntimeOptions                 $runtime    runtime options for this request RuntimeOptions
     *
     * @return ResumeElasticsearchTaskResponse ResumeElasticsearchTaskResponse
     */
    public function resumeElasticsearchTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeElasticsearchTask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/resume',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResumeElasticsearchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $InstanceId
     * @param ResumeElasticsearchTaskRequest $request    ResumeElasticsearchTaskRequest
     *
     * @return ResumeElasticsearchTaskResponse ResumeElasticsearchTaskResponse
     */
    public function resumeElasticsearchTask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeElasticsearchTaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Resumes a change task of a Logstash cluster. After the task is resumed, the Logstash cluster is in the activating state.
     *  *
     * @param string                    $InstanceId
     * @param ResumeLogstashTaskRequest $request    ResumeLogstashTaskRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return ResumeLogstashTaskResponse ResumeLogstashTaskResponse
     */
    public function resumeLogstashTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeLogstashTask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/resume',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResumeLogstashTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resumes a change task of a Logstash cluster. After the task is resumed, the Logstash cluster is in the activating state.
     *  *
     * @param string                    $InstanceId
     * @param ResumeLogstashTaskRequest $request    ResumeLogstashTaskRequest
     *
     * @return ResumeLogstashTaskResponse ResumeLogstashTaskResponse
     */
    public function resumeLogstashTask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeLogstashTaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 滚动数据流，生成新索引
     *  *
     * @param string                    $InstanceId
     * @param string                    $DataStream
     * @param RolloverDataStreamRequest $request    RolloverDataStreamRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return RolloverDataStreamResponse RolloverDataStreamResponse
     */
    public function rolloverDataStreamWithOptions($InstanceId, $DataStream, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RolloverDataStream',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/data-streams/' . OpenApiUtilClient::getEncodeParam($DataStream) . '/rollover',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RolloverDataStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 滚动数据流，生成新索引
     *  *
     * @param string                    $InstanceId
     * @param string                    $DataStream
     * @param RolloverDataStreamRequest $request    RolloverDataStreamRequest
     *
     * @return RolloverDataStreamResponse RolloverDataStreamResponse
     */
    public function rolloverDataStream($InstanceId, $DataStream, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rolloverDataStreamWithOptions($InstanceId, $DataStream, $request, $headers, $runtime);
    }

    /**
     * @summary Runs pipelines in a Logstash cluster.
     *  *
     * @param string              $InstanceId
     * @param RunPipelinesRequest $request    RunPipelinesRequest
     * @param string[]            $headers    map
     * @param RuntimeOptions      $runtime    runtime options for this request RuntimeOptions
     *
     * @return RunPipelinesResponse RunPipelinesResponse
     */
    public function runPipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RunPipelines',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/pipelines/action/run',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Runs pipelines in a Logstash cluster.
     *  *
     * @param string              $InstanceId
     * @param RunPipelinesRequest $request    RunPipelinesRequest
     *
     * @return RunPipelinesResponse RunPipelinesResponse
     */
    public function runPipelines($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runPipelinesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary ES集群缩节点
     *  *
     * @param string            $InstanceId
     * @param ShrinkNodeRequest $request    ShrinkNodeRequest
     * @param string[]          $headers    map
     * @param RuntimeOptions    $runtime    runtime options for this request RuntimeOptions
     *
     * @return ShrinkNodeResponse ShrinkNodeResponse
     */
    public function shrinkNodeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->count)) {
            $query['count'] = $request->count;
        }
        if (!Utils::isUnset($request->ignoreStatus)) {
            $query['ignoreStatus'] = $request->ignoreStatus;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['nodeType'] = $request->nodeType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'ShrinkNode',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/shrink',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ShrinkNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ES集群缩节点
     *  *
     * @param string            $InstanceId
     * @param ShrinkNodeRequest $request    ShrinkNodeRequest
     *
     * @return ShrinkNodeResponse ShrinkNodeResponse
     */
    public function shrinkNode($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->shrinkNodeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary StartApm
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return StartApmResponse StartApmResponse
     */
    public function startApmWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartApm',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/apm/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/actions/start',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary StartApm
     *  *
     * @param string $instanceId
     *
     * @return StartApmResponse StartApmResponse
     */
    public function startApm($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startApmWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Starts a collector to collect data.
     *  *
     * @param string                $ResId
     * @param StartCollectorRequest $request StartCollectorRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StartCollectorResponse StartCollectorResponse
     */
    public function startCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartCollector',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . OpenApiUtilClient::getEncodeParam($ResId) . '/actions/start',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts a collector to collect data.
     *  *
     * @param string                $ResId
     * @param StartCollectorRequest $request StartCollectorRequest
     *
     * @return StartCollectorResponse StartCollectorResponse
     */
    public function startCollector($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startCollectorWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * @summary StopApm
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return StopApmResponse StopApmResponse
     */
    public function stopApmWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopApm',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/apm/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/actions/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary StopApm
     *  *
     * @param string $instanceId
     *
     * @return StopApmResponse StopApmResponse
     */
    public function stopApm($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopApmWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Stops a shipper.
     *  *
     * @param string               $ResId
     * @param StopCollectorRequest $request StopCollectorRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StopCollectorResponse StopCollectorResponse
     */
    public function stopCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopCollector',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . OpenApiUtilClient::getEncodeParam($ResId) . '/actions/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops a shipper.
     *  *
     * @param string               $ResId
     * @param StopCollectorRequest $request StopCollectorRequest
     *
     * @return StopCollectorResponse StopCollectorResponse
     */
    public function stopCollector($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopCollectorWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * @summary Stops pipelines in a Logstash cluster.
     *  *
     * @param string               $InstanceId
     * @param StopPipelinesRequest $request    StopPipelinesRequest
     * @param string[]             $headers    map
     * @param RuntimeOptions       $runtime    runtime options for this request RuntimeOptions
     *
     * @return StopPipelinesResponse StopPipelinesResponse
     */
    public function stopPipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'StopPipelines',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/pipelines/action/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops pipelines in a Logstash cluster.
     *  *
     * @param string               $InstanceId
     * @param StopPipelinesRequest $request    StopPipelinesRequest
     *
     * @return StopPipelinesResponse StopPipelinesResponse
     */
    public function stopPipelines($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopPipelinesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary The information about the clusters and tags.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceIds)) {
            $body['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/tags',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The information about the clusters and tags.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 缩节点，数据迁移
     *  *
     * @param string              $InstanceId
     * @param TransferNodeRequest $request    TransferNodeRequest
     * @param string[]            $headers    map
     * @param RuntimeOptions      $runtime    runtime options for this request RuntimeOptions
     *
     * @return TransferNodeResponse TransferNodeResponse
     */
    public function transferNodeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['nodeType'] = $request->nodeType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'TransferNode',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/transfer',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TransferNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 缩节点，数据迁移
     *  *
     * @param string              $InstanceId
     * @param TransferNodeRequest $request    TransferNodeRequest
     *
     * @return TransferNodeResponse TransferNodeResponse
     */
    public function transferNode($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->transferNodeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 开关ES集群及Kibana节点公私网访问
     *  *
     * @param string                $InstanceId
     * @param TriggerNetworkRequest $request    TriggerNetworkRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return TriggerNetworkResponse TriggerNetworkResponse
     */
    public function triggerNetworkWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->actionType)) {
            $body['actionType'] = $request->actionType;
        }
        if (!Utils::isUnset($request->networkType)) {
            $body['networkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $body['nodeType'] = $request->nodeType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TriggerNetwork',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/network-trigger',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TriggerNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开关ES集群及Kibana节点公私网访问
     *  *
     * @param string                $InstanceId
     * @param TriggerNetworkRequest $request    TriggerNetworkRequest
     *
     * @return TriggerNetworkResponse TriggerNetworkResponse
     */
    public function triggerNetwork($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->triggerNetworkWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Call the UninstallKibanaPlugin to uninstall the Kibana plug-in.
     *  *
     * @param string                       $InstanceId
     * @param UninstallKibanaPluginRequest $request    UninstallKibanaPluginRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return UninstallKibanaPluginResponse UninstallKibanaPluginResponse
     */
    public function uninstallKibanaPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UninstallKibanaPlugin',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/kibana-plugins/actions/uninstall',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UninstallKibanaPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call the UninstallKibanaPlugin to uninstall the Kibana plug-in.
     *  *
     * @param string                       $InstanceId
     * @param UninstallKibanaPluginRequest $request    UninstallKibanaPluginRequest
     *
     * @return UninstallKibanaPluginResponse UninstallKibanaPluginResponse
     */
    public function uninstallKibanaPlugin($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallKibanaPluginWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 卸载Logstash实例已安装的插件
     *  *
     * @param string                         $InstanceId
     * @param UninstallLogstashPluginRequest $request    UninstallLogstashPluginRequest
     * @param string[]                       $headers    map
     * @param RuntimeOptions                 $runtime    runtime options for this request RuntimeOptions
     *
     * @return UninstallLogstashPluginResponse UninstallLogstashPluginResponse
     */
    public function uninstallLogstashPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UninstallLogstashPlugin',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/plugins/actions/uninstall',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UninstallLogstashPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 卸载Logstash实例已安装的插件
     *  *
     * @param string                         $InstanceId
     * @param UninstallLogstashPluginRequest $request    UninstallLogstashPluginRequest
     *
     * @return UninstallLogstashPluginResponse UninstallLogstashPluginResponse
     */
    public function uninstallLogstashPlugin($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallLogstashPluginWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Call UninstallPlugin to uninstall the preset plug-in.
     *  *
     * @param string                 $InstanceId
     * @param UninstallPluginRequest $request    UninstallPluginRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return UninstallPluginResponse UninstallPluginResponse
     */
    public function uninstallPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UninstallPlugin',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/plugins/actions/uninstall',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UninstallPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call UninstallPlugin to uninstall the preset plug-in.
     *  *
     * @param string                 $InstanceId
     * @param UninstallPluginRequest $request    UninstallPluginRequest
     *
     * @return UninstallPluginResponse UninstallPluginResponse
     */
    public function uninstallPlugin($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uninstallPluginWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除ES集群实例的用户可见标签
     *  *
     * @description When you call this operation, take note of the following items:
     * *   You can only delete user tags.
     * > User labels are manually added to instances by users. A system Tag is a tag that Alibaba Cloud services add to instances. System labels are divided into visible labels and invisible labels.
     * *   If you delete a resource tag relationship that is not associated with any resources, you must delete the tags.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKeys)) {
            $query['TagKeys'] = $request->tagKeys;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/tags',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除ES集群实例的用户可见标签
     *  *
     * @description When you call this operation, take note of the following items:
     * *   You can only delete user tags.
     * > User labels are manually added to instances by users. A system Tag is a tag that Alibaba Cloud services add to instances. System labels are divided into visible labels and invisible labels.
     * *   If you delete a resource tag relationship that is not associated with any resources, you must delete the tags.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改ES集群密码
     *  *
     * @description 5A2CFF0E-5718-45B5-9D4D-70B3FF\\*\\*\\*\\*
     *  *
     * @param string                     $InstanceId
     * @param UpdateAdminPasswordRequest $request    UpdateAdminPasswordRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateAdminPasswordResponse UpdateAdminPasswordResponse
     */
    public function updateAdminPasswordWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->esAdminPassword)) {
            $body['esAdminPassword'] = $request->esAdminPassword;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAdminPassword',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/admin-pwd',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAdminPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改ES集群密码
     *  *
     * @description 5A2CFF0E-5718-45B5-9D4D-70B3FF\\*\\*\\*\\*
     *  *
     * @param string                     $InstanceId
     * @param UpdateAdminPasswordRequest $request    UpdateAdminPasswordRequest
     *
     * @return UpdateAdminPasswordResponse UpdateAdminPasswordResponse
     */
    public function updateAdminPassword($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAdminPasswordWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Call UpdateAdvancedSetting to change the garbage collector configuration for the specified instance.
     *  *
     * @param string                       $InstanceId
     * @param UpdateAdvancedSettingRequest $request    UpdateAdvancedSettingRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateAdvancedSettingResponse UpdateAdvancedSettingResponse
     */
    public function updateAdvancedSettingWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateAdvancedSetting',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/update-advanced-setting',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAdvancedSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call UpdateAdvancedSetting to change the garbage collector configuration for the specified instance.
     *  *
     * @param string                       $InstanceId
     * @param UpdateAdvancedSettingRequest $request    UpdateAdvancedSettingRequest
     *
     * @return UpdateAdvancedSettingResponse UpdateAdvancedSettingResponse
     */
    public function updateAdvancedSetting($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAdvancedSettingWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the dictionary file of the analysis-aliws plug-in.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   Elasticsearch V5.X clusters do not support the analysis-aliws plug-in.
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
     *  *
     * @param string                 $InstanceId
     * @param UpdateAliwsDictRequest $request    UpdateAliwsDictRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateAliwsDictResponse UpdateAliwsDictResponse
     */
    public function updateAliwsDictWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateAliwsDict',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/aliws-dict',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAliwsDictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the dictionary file of the analysis-aliws plug-in.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   Elasticsearch V5.X clusters do not support the analysis-aliws plug-in.
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
     *  *
     * @param string                 $InstanceId
     * @param UpdateAliwsDictRequest $request    UpdateAliwsDictRequest
     *
     * @return UpdateAliwsDictResponse UpdateAliwsDictResponse
     */
    public function updateAliwsDict($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAliwsDictWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 修改APM实规格配置
     *  *
     * @param string           $instanceId
     * @param UpdateApmRequest $request    UpdateApmRequest
     * @param string[]         $headers    map
     * @param RuntimeOptions   $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateApmResponse UpdateApmResponse
     */
    public function updateApmWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->outputES)) {
            $body['outputES'] = $request->outputES;
        }
        if (!Utils::isUnset($request->outputESPassword)) {
            $body['outputESPassword'] = $request->outputESPassword;
        }
        if (!Utils::isUnset($request->outputESUserName)) {
            $body['outputESUserName'] = $request->outputESUserName;
        }
        if (!Utils::isUnset($request->token)) {
            $body['token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateApm',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/apm/' . OpenApiUtilClient::getEncodeParam($instanceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改APM实规格配置
     *  *
     * @param string           $instanceId
     * @param UpdateApmRequest $request    UpdateApmRequest
     *
     * @return UpdateApmResponse UpdateApmResponse
     */
    public function updateApm($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApmWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI UpdateBlackIps is deprecated
     *  *
     * @summary 修改ES实例访问黑名单，已废弃
     *  *
     * Deprecated
     *
     * @param string                $InstanceId
     * @param UpdateBlackIpsRequest $request    UpdateBlackIpsRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateBlackIpsResponse UpdateBlackIpsResponse
     */
    public function updateBlackIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBlackIps',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/black-ips',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateBlackIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI UpdateBlackIps is deprecated
     *  *
     * @summary 修改ES实例访问黑名单，已废弃
     *  *
     * Deprecated
     *
     * @param string                $InstanceId
     * @param UpdateBlackIpsRequest $request    UpdateBlackIpsRequest
     *
     * @return UpdateBlackIpsResponse UpdateBlackIpsResponse
     */
    public function updateBlackIps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateBlackIpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the configurations of a shipper.
     *  *
     * @param string                 $ResId
     * @param UpdateCollectorRequest $request UpdateCollectorRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCollectorResponse UpdateCollectorResponse
     */
    public function updateCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateCollector',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . OpenApiUtilClient::getEncodeParam($ResId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the configurations of a shipper.
     *  *
     * @param string                 $ResId
     * @param UpdateCollectorRequest $request UpdateCollectorRequest
     *
     * @return UpdateCollectorResponse UpdateCollectorResponse
     */
    public function updateCollector($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCollectorWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * @summary Changes the name of a shipper.
     *  *
     * @param string                     $ResId
     * @param UpdateCollectorNameRequest $request UpdateCollectorNameRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCollectorNameResponse UpdateCollectorNameResponse
     */
    public function updateCollectorNameWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateCollectorName',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . OpenApiUtilClient::getEncodeParam($ResId) . '/actions/rename',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateCollectorNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the name of a shipper.
     *  *
     * @param string                     $ResId
     * @param UpdateCollectorNameRequest $request UpdateCollectorNameRequest
     *
     * @return UpdateCollectorNameResponse UpdateCollectorNameResponse
     */
    public function updateCollectorName($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCollectorNameWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * @summary 修改ES集群动态索引
     *  *
     * @param string                      $InstanceId
     * @param string                      $name
     * @param UpdateComponentIndexRequest $request    UpdateComponentIndexRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateComponentIndexResponse UpdateComponentIndexResponse
     */
    public function updateComponentIndexWithOptions($InstanceId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->meta)) {
            $body['_meta'] = $request->meta;
        }
        if (!Utils::isUnset($request->template)) {
            $body['template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateComponentIndex',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/component-index/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateComponentIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改ES集群动态索引
     *  *
     * @param string                      $InstanceId
     * @param string                      $name
     * @param UpdateComponentIndexRequest $request    UpdateComponentIndexRequest
     *
     * @return UpdateComponentIndexResponse UpdateComponentIndexResponse
     */
    public function updateComponentIndex($InstanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateComponentIndexWithOptions($InstanceId, $name, $request, $headers, $runtime);
    }

    /**
     * @summary 修改elasticsearch实例名称名称
     *  *
     * @param string                   $InstanceId
     * @param UpdateDescriptionRequest $request    UpdateDescriptionRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateDescriptionResponse UpdateDescriptionResponse
     */
    public function updateDescriptionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDescription',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/description',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改elasticsearch实例名称名称
     *  *
     * @param string                   $InstanceId
     * @param UpdateDescriptionRequest $request    UpdateDescriptionRequest
     *
     * @return UpdateDescriptionResponse UpdateDescriptionResponse
     */
    public function updateDescription($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDescriptionWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Call UpdateDiagnosisSettings to update the instance of intelligent operation&maintenance (O&M) scene settings.
     *  *
     * @param string                         $InstanceId
     * @param UpdateDiagnosisSettingsRequest $request    UpdateDiagnosisSettingsRequest
     * @param string[]                       $headers    map
     * @param RuntimeOptions                 $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateDiagnosisSettingsResponse UpdateDiagnosisSettingsResponse
     */
    public function updateDiagnosisSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateDiagnosisSettings',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/settings',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDiagnosisSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call UpdateDiagnosisSettings to update the instance of intelligent operation&maintenance (O&M) scene settings.
     *  *
     * @param string                         $InstanceId
     * @param UpdateDiagnosisSettingsRequest $request    UpdateDiagnosisSettingsRequest
     *
     * @return UpdateDiagnosisSettingsResponse UpdateDiagnosisSettingsResponse
     */
    public function updateDiagnosisSettings($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDiagnosisSettingsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates a dictionary of an Elasticsearch cluster.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
     *  *
     * @param string            $InstanceId
     * @param UpdateDictRequest $request    UpdateDictRequest
     * @param string[]          $headers    map
     * @param RuntimeOptions    $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateDictResponse UpdateDictResponse
     */
    public function updateDictWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateDict',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/dict',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a dictionary of an Elasticsearch cluster.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
     *  *
     * @param string            $InstanceId
     * @param UpdateDictRequest $request    UpdateDictRequest
     *
     * @return UpdateDictResponse UpdateDictResponse
     */
    public function updateDict($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDictWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 修改集群动态配置
     *  *
     * @param string                       $InstanceId
     * @param UpdateDynamicSettingsRequest $request    UpdateDynamicSettingsRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateDynamicSettingsResponse UpdateDynamicSettingsResponse
     */
    public function updateDynamicSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['mode'] = $request->mode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateDynamicSettings',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/dynamic-settings',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDynamicSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改集群动态配置
     *  *
     * @param string                       $InstanceId
     * @param UpdateDynamicSettingsRequest $request    UpdateDynamicSettingsRequest
     *
     * @return UpdateDynamicSettingsResponse UpdateDynamicSettingsResponse
     */
    public function updateDynamicSettings($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDynamicSettingsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $InstanceId
     * @param UpdateExtendConfigRequest $request    UpdateExtendConfigRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateExtendConfigResponse UpdateExtendConfigResponse
     */
    public function updateExtendConfigWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateExtendConfig',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/extend-configs/actions/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateExtendConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $InstanceId
     * @param UpdateExtendConfigRequest $request    UpdateExtendConfigRequest
     *
     * @return UpdateExtendConfigResponse UpdateExtendConfigResponse
     */
    public function updateExtendConfig($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExtendConfigWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the driver files of a Logstash cluster.
     *  *
     * @description When you call this operation, take note of the following items: You can call this operation only to delete the driver files that are uploaded to a Logstash cluster in the Alibaba Cloud Management Console. You can add or modify driver files only in the Alibaba Cloud Management Console.
     *  *
     * @param string                   $InstanceId
     * @param UpdateExtendfilesRequest $request    UpdateExtendfilesRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateExtendfilesResponse UpdateExtendfilesResponse
     */
    public function updateExtendfilesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateExtendfiles',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/extendfiles',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateExtendfilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the driver files of a Logstash cluster.
     *  *
     * @description When you call this operation, take note of the following items: You can call this operation only to delete the driver files that are uploaded to a Logstash cluster in the Alibaba Cloud Management Console. You can add or modify driver files only in the Alibaba Cloud Management Console.
     *  *
     * @param string                   $InstanceId
     * @param UpdateExtendfilesRequest $request    UpdateExtendfilesRequest
     *
     * @return UpdateExtendfilesResponse UpdateExtendfilesResponse
     */
    public function updateExtendfiles($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExtendfilesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Performs a rolling update for the IK dictionaries of an Elasticsearch cluster.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
     *  *
     * @param string                  $InstanceId
     * @param UpdateHotIkDictsRequest $request    UpdateHotIkDictsRequest
     * @param string[]                $headers    map
     * @param RuntimeOptions          $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateHotIkDictsResponse UpdateHotIkDictsResponse
     */
    public function updateHotIkDictsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateHotIkDicts',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/ik-hot-dict',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateHotIkDictsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Performs a rolling update for the IK dictionaries of an Elasticsearch cluster.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
     *  *
     * @param string                  $InstanceId
     * @param UpdateHotIkDictsRequest $request    UpdateHotIkDictsRequest
     *
     * @return UpdateHotIkDictsResponse UpdateHotIkDictsResponse
     */
    public function updateHotIkDicts($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHotIkDictsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 修改ES集群索引生命周期策略
     *  *
     * @param string                 $InstanceId
     * @param string                 $PolicyName
     * @param UpdateILMPolicyRequest $request    UpdateILMPolicyRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateILMPolicyResponse UpdateILMPolicyResponse
     */
    public function updateILMPolicyWithOptions($InstanceId, $PolicyName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateILMPolicy',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/ilm-policies/' . OpenApiUtilClient::getEncodeParam($PolicyName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateILMPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改ES集群索引生命周期策略
     *  *
     * @param string                 $InstanceId
     * @param string                 $PolicyName
     * @param UpdateILMPolicyRequest $request    UpdateILMPolicyRequest
     *
     * @return UpdateILMPolicyResponse UpdateILMPolicyResponse
     */
    public function updateILMPolicy($InstanceId, $PolicyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateILMPolicyWithOptions($InstanceId, $PolicyName, $request, $headers, $runtime);
    }

    /**
     * @summary 修改ES集群索引模版配置
     *  *
     * @param string                     $InstanceId
     * @param string                     $IndexTemplate
     * @param UpdateIndexTemplateRequest $request       UpdateIndexTemplateRequest
     * @param string[]                   $headers       map
     * @param RuntimeOptions             $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateIndexTemplateResponse UpdateIndexTemplateResponse
     */
    public function updateIndexTemplateWithOptions($InstanceId, $IndexTemplate, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateIndexTemplate',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/index-templates/' . OpenApiUtilClient::getEncodeParam($IndexTemplate) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateIndexTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改ES集群索引模版配置
     *  *
     * @param string                     $InstanceId
     * @param string                     $IndexTemplate
     * @param UpdateIndexTemplateRequest $request       UpdateIndexTemplateRequest
     *
     * @return UpdateIndexTemplateResponse UpdateIndexTemplateResponse
     */
    public function updateIndexTemplate($InstanceId, $IndexTemplate, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIndexTemplateWithOptions($InstanceId, $IndexTemplate, $request, $headers, $runtime);
    }

    /**
     * @summary 修改ES集群节点配置
     *  *
     * @description es-cn-n6w1ptcb30009\\*\\*\\*\\*
     *  *
     * @param string                $InstanceId
     * @param UpdateInstanceRequest $request    UpdateInstanceRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->force)) {
            $query['force'] = $request->force;
        }
        if (!Utils::isUnset($request->orderActionType)) {
            $query['orderActionType'] = $request->orderActionType;
        }
        $body = [];
        if (!Utils::isUnset($request->clientNodeConfiguration)) {
            $body['clientNodeConfiguration'] = $request->clientNodeConfiguration;
        }
        if (!Utils::isUnset($request->elasticDataNodeConfiguration)) {
            $body['elasticDataNodeConfiguration'] = $request->elasticDataNodeConfiguration;
        }
        if (!Utils::isUnset($request->instanceCategory)) {
            $body['instanceCategory'] = $request->instanceCategory;
        }
        if (!Utils::isUnset($request->kibanaConfiguration)) {
            $body['kibanaConfiguration'] = $request->kibanaConfiguration;
        }
        if (!Utils::isUnset($request->masterConfiguration)) {
            $body['masterConfiguration'] = $request->masterConfiguration;
        }
        if (!Utils::isUnset($request->nodeAmount)) {
            $body['nodeAmount'] = $request->nodeAmount;
        }
        if (!Utils::isUnset($request->nodeSpec)) {
            $body['nodeSpec'] = $request->nodeSpec;
        }
        if (!Utils::isUnset($request->warmNodeConfiguration)) {
            $body['warmNodeConfiguration'] = $request->warmNodeConfiguration;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstance',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改ES集群节点配置
     *  *
     * @description es-cn-n6w1ptcb30009\\*\\*\\*\\*
     *  *
     * @param string                $InstanceId
     * @param UpdateInstanceRequest $request    UpdateInstanceRequest
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Call UpdateInstanceChargeType to change the billing method of a pay-as-you-go instance to subscription.
     *  *
     * @param string                          $InstanceId
     * @param UpdateInstanceChargeTypeRequest $request    UpdateInstanceChargeTypeRequest
     * @param string[]                        $headers    map
     * @param RuntimeOptions                  $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceChargeTypeResponse UpdateInstanceChargeTypeResponse
     */
    public function updateInstanceChargeTypeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceChargeType',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/convert-pay-type',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call UpdateInstanceChargeType to change the billing method of a pay-as-you-go instance to subscription.
     *  *
     * @param string                          $InstanceId
     * @param UpdateInstanceChargeTypeRequest $request    UpdateInstanceChargeTypeRequest
     *
     * @return UpdateInstanceChargeTypeResponse UpdateInstanceChargeTypeResponse
     */
    public function updateInstanceChargeType($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceChargeTypeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Call UpdateInstanceSettings to update the YML configuration of a specified instance.
     *  *
     * @description When you call this operation, take note of the following items:
     * When the instance is in the activating, invalid, or inactive state, you cannot update the configuration.
     *  *
     * @param string                        $InstanceId
     * @param UpdateInstanceSettingsRequest $request    UpdateInstanceSettingsRequest
     * @param string[]                      $headers    map
     * @param RuntimeOptions                $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceSettingsResponse UpdateInstanceSettingsResponse
     */
    public function updateInstanceSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceSettings',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/instance-settings',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call UpdateInstanceSettings to update the YML configuration of a specified instance.
     *  *
     * @description When you call this operation, take note of the following items:
     * When the instance is in the activating, invalid, or inactive state, you cannot update the configuration.
     *  *
     * @param string                        $InstanceId
     * @param UpdateInstanceSettingsRequest $request    UpdateInstanceSettingsRequest
     *
     * @return UpdateInstanceSettingsResponse UpdateInstanceSettingsResponse
     */
    public function updateInstanceSettings($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceSettingsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新kibana私网链接
     *  *
     * @param string                        $InstanceId
     * @param UpdateKibanaPvlNetworkRequest $request    UpdateKibanaPvlNetworkRequest
     * @param string[]                      $headers    map
     * @param RuntimeOptions                $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateKibanaPvlNetworkResponse UpdateKibanaPvlNetworkResponse
     */
    public function updateKibanaPvlNetworkWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pvlId)) {
            $query['pvlId'] = $request->pvlId;
        }
        $body = [];
        if (!Utils::isUnset($request->endpointName)) {
            $body['endpointName'] = $request->endpointName;
        }
        if (!Utils::isUnset($request->securityGroups)) {
            $body['securityGroups'] = $request->securityGroups;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateKibanaPvlNetwork',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/update-kibana-private',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateKibanaPvlNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新kibana私网链接
     *  *
     * @param string                        $InstanceId
     * @param UpdateKibanaPvlNetworkRequest $request    UpdateKibanaPvlNetworkRequest
     *
     * @return UpdateKibanaPvlNetworkResponse UpdateKibanaPvlNetworkResponse
     */
    public function updateKibanaPvlNetwork($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKibanaPvlNetworkWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Call UpdateKibanaSettings to modify the Kibana configuration. Currently, you can only modify the Kibana language configuration.
     *  *
     * @param string                      $InstanceId
     * @param UpdateKibanaSettingsRequest $request    UpdateKibanaSettingsRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateKibanaSettingsResponse UpdateKibanaSettingsResponse
     */
    public function updateKibanaSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateKibanaSettings',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/update-kibana-settings',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateKibanaSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call UpdateKibanaSettings to modify the Kibana configuration. Currently, you can only modify the Kibana language configuration.
     *  *
     * @param string                      $InstanceId
     * @param UpdateKibanaSettingsRequest $request    UpdateKibanaSettingsRequest
     *
     * @return UpdateKibanaSettingsResponse UpdateKibanaSettingsResponse
     */
    public function updateKibanaSettings($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKibanaSettingsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates an IP address whitelist for access to the Kibana console of a specified Elasticsearch cluster.
     *  *
     * @description *   Before you call this operation, you must make sure that the cluster is not in the activating, invalid, or inactive state.
     * *   You can update an IP address whitelist by using the following parameters:
     *     *   kibanaIPWhitelist
     *     *   modifyMode and whiteIpGroup
     * *   You cannot specify private IP addresses for public IP address whitelists and cannot specify public IP addresses for private IP address whitelists.
     *  *
     * @param string                      $InstanceId
     * @param UpdateKibanaWhiteIpsRequest $request    UpdateKibanaWhiteIpsRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateKibanaWhiteIpsResponse UpdateKibanaWhiteIpsResponse
     */
    public function updateKibanaWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            $query['modifyMode'] = $request->modifyMode;
        }
        $body = [];
        if (!Utils::isUnset($request->kibanaIPWhitelist)) {
            $body['kibanaIPWhitelist'] = $request->kibanaIPWhitelist;
        }
        if (!Utils::isUnset($request->whiteIpGroup)) {
            $body['whiteIpGroup'] = $request->whiteIpGroup;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateKibanaWhiteIps',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/kibana-white-ips',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateKibanaWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates an IP address whitelist for access to the Kibana console of a specified Elasticsearch cluster.
     *  *
     * @description *   Before you call this operation, you must make sure that the cluster is not in the activating, invalid, or inactive state.
     * *   You can update an IP address whitelist by using the following parameters:
     *     *   kibanaIPWhitelist
     *     *   modifyMode and whiteIpGroup
     * *   You cannot specify private IP addresses for public IP address whitelists and cannot specify public IP addresses for private IP address whitelists.
     *  *
     * @param string                      $InstanceId
     * @param UpdateKibanaWhiteIpsRequest $request    UpdateKibanaWhiteIpsRequest
     *
     * @return UpdateKibanaWhiteIpsResponse UpdateKibanaWhiteIpsResponse
     */
    public function updateKibanaWhiteIps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateKibanaWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 修改Logstash节点规格磁盘配置
     *  *
     * @param string                $InstanceId
     * @param UpdateLogstashRequest $request    UpdateLogstashRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateLogstashResponse UpdateLogstashResponse
     */
    public function updateLogstashWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->nodeAmount)) {
            $body['nodeAmount'] = $request->nodeAmount;
        }
        if (!Utils::isUnset($request->nodeSpec)) {
            $body['nodeSpec'] = $request->nodeSpec;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLogstash',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改Logstash节点规格磁盘配置
     *  *
     * @param string                $InstanceId
     * @param UpdateLogstashRequest $request    UpdateLogstashRequest
     *
     * @return UpdateLogstashResponse UpdateLogstashResponse
     */
    public function updateLogstash($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogstashWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Switches the billing method of a Logstash cluster from pay-as-you-go to subscription.
     *  *
     * @param string                          $InstanceId
     * @param UpdateLogstashChargeTypeRequest $request    UpdateLogstashChargeTypeRequest
     * @param string[]                        $headers    map
     * @param RuntimeOptions                  $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateLogstashChargeTypeResponse UpdateLogstashChargeTypeResponse
     */
    public function updateLogstashChargeTypeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateLogstashChargeType',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/convert-pay-type',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLogstashChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Switches the billing method of a Logstash cluster from pay-as-you-go to subscription.
     *  *
     * @param string                          $InstanceId
     * @param UpdateLogstashChargeTypeRequest $request    UpdateLogstashChargeTypeRequest
     *
     * @return UpdateLogstashChargeTypeResponse UpdateLogstashChargeTypeResponse
     */
    public function updateLogstashChargeType($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogstashChargeTypeWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Changes the name of a specified Logstash cluster.
     *  *
     * @description When you call this operation, take note of the following items: You cannot change the name of a cluster that is in the activating, invalid, or inactive state.
     *  *
     * @param string                           $InstanceId
     * @param UpdateLogstashDescriptionRequest $request    UpdateLogstashDescriptionRequest
     * @param string[]                         $headers    map
     * @param RuntimeOptions                   $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateLogstashDescriptionResponse UpdateLogstashDescriptionResponse
     */
    public function updateLogstashDescriptionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLogstashDescription',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/description',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLogstashDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the name of a specified Logstash cluster.
     *  *
     * @description When you call this operation, take note of the following items: You cannot change the name of a cluster that is in the activating, invalid, or inactive state.
     *  *
     * @param string                           $InstanceId
     * @param UpdateLogstashDescriptionRequest $request    UpdateLogstashDescriptionRequest
     *
     * @return UpdateLogstashDescriptionResponse UpdateLogstashDescriptionResponse
     */
    public function updateLogstashDescription($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogstashDescriptionWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the configuration of a specified Logstash cluster.
     *  *
     * @description When you call this operation, take note of the following items:
     * If the instance is in the Active (activating), Invalid (invalid), and Inactive (inactive) state, the information cannot be updated.
     *  *
     * @param string                        $InstanceId
     * @param UpdateLogstashSettingsRequest $request    UpdateLogstashSettingsRequest
     * @param string[]                      $headers    map
     * @param RuntimeOptions                $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateLogstashSettingsResponse UpdateLogstashSettingsResponse
     */
    public function updateLogstashSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateLogstashSettings',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/instance-settings',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLogstashSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the configuration of a specified Logstash cluster.
     *  *
     * @description When you call this operation, take note of the following items:
     * If the instance is in the Active (activating), Invalid (invalid), and Inactive (inactive) state, the information cannot be updated.
     *  *
     * @param string                        $InstanceId
     * @param UpdateLogstashSettingsRequest $request    UpdateLogstashSettingsRequest
     *
     * @return UpdateLogstashSettingsResponse UpdateLogstashSettingsResponse
     */
    public function updateLogstashSettings($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogstashSettingsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 修改Logstash管道配置
     *  *
     * @param string                                $InstanceId
     * @param UpdatePipelineManagementConfigRequest $request    UpdatePipelineManagementConfigRequest
     * @param string[]                              $headers    map
     * @param RuntimeOptions                        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdatePipelineManagementConfigResponse UpdatePipelineManagementConfigResponse
     */
    public function updatePipelineManagementConfigWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->endpoints)) {
            $body['endpoints'] = $request->endpoints;
        }
        if (!Utils::isUnset($request->password)) {
            $body['password'] = $request->password;
        }
        if (!Utils::isUnset($request->pipelineIds)) {
            $body['pipelineIds'] = $request->pipelineIds;
        }
        if (!Utils::isUnset($request->pipelineManagementType)) {
            $body['pipelineManagementType'] = $request->pipelineManagementType;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['userName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePipelineManagementConfig',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/pipeline-management-config',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelineManagementConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改Logstash管道配置
     *  *
     * @param string                                $InstanceId
     * @param UpdatePipelineManagementConfigRequest $request    UpdatePipelineManagementConfigRequest
     *
     * @return UpdatePipelineManagementConfigResponse UpdatePipelineManagementConfigResponse
     */
    public function updatePipelineManagementConfig($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineManagementConfigWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates a pipeline of a Logstash cluster.
     *  *
     * @param string                 $InstanceId
     * @param UpdatePipelinesRequest $request    UpdatePipelinesRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdatePipelinesResponse UpdatePipelinesResponse
     */
    public function updatePipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->trigger)) {
            $query['trigger'] = $request->trigger;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdatePipelines',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/pipelines',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a pipeline of a Logstash cluster.
     *  *
     * @param string                 $InstanceId
     * @param UpdatePipelinesRequest $request    UpdatePipelinesRequest
     *
     * @return UpdatePipelinesResponse UpdatePipelinesResponse
     */
    public function updatePipelines($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelinesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary ## RequestBody
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
     *  *
     * @description >  In the following returned example, only the parameters in the returned data list are guaranteed to be included, and the parameters not mentioned are for reference only. For more information about the parameters, see [ListInstance](https://help.aliyun.com/document_detail/142230.html). You cannot force a dependency in a program to get these parameters.
     *  *
     * @param string                              $InstanceId
     * @param UpdatePrivateNetworkWhiteIpsRequest $request    UpdatePrivateNetworkWhiteIpsRequest
     * @param string[]                            $headers    map
     * @param RuntimeOptions                      $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdatePrivateNetworkWhiteIpsResponse UpdatePrivateNetworkWhiteIpsResponse
     */
    public function updatePrivateNetworkWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            $query['modifyMode'] = $request->modifyMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdatePrivateNetworkWhiteIps',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/private-network-white-ips',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePrivateNetworkWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ## RequestBody
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
     *  *
     * @description >  In the following returned example, only the parameters in the returned data list are guaranteed to be included, and the parameters not mentioned are for reference only. For more information about the parameters, see [ListInstance](https://help.aliyun.com/document_detail/142230.html). You cannot force a dependency in a program to get these parameters.
     *  *
     * @param string                              $InstanceId
     * @param UpdatePrivateNetworkWhiteIpsRequest $request    UpdatePrivateNetworkWhiteIpsRequest
     *
     * @return UpdatePrivateNetworkWhiteIpsResponse UpdatePrivateNetworkWhiteIpsResponse
     */
    public function updatePrivateNetworkWhiteIps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePrivateNetworkWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Call UpdatePublicNetwork to open or close the public network address of the specified elasticsearch instance.
     *  *
     * @description When you call this operation, take note of the following items:
     * When the instance is in the activating, invalid, or inactive state, its configuration cannot be updated.
     *  *
     * @param string                     $InstanceId
     * @param UpdatePublicNetworkRequest $request    UpdatePublicNetworkRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdatePublicNetworkResponse UpdatePublicNetworkResponse
     */
    public function updatePublicNetworkWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdatePublicNetwork',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/public-network',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePublicNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call UpdatePublicNetwork to open or close the public network address of the specified elasticsearch instance.
     *  *
     * @description When you call this operation, take note of the following items:
     * When the instance is in the activating, invalid, or inactive state, its configuration cannot be updated.
     *  *
     * @param string                     $InstanceId
     * @param UpdatePublicNetworkRequest $request    UpdatePublicNetworkRequest
     *
     * @return UpdatePublicNetworkResponse UpdatePublicNetworkResponse
     */
    public function updatePublicNetwork($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePublicNetworkWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary ## RequestBody
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
     *  *
     * @description >  In the following example, only the parameters in the returned data list are guaranteed to be included. The parameters that are not mentioned are for reference only. For more information about the parameters, see [ListInstance](https://help.aliyun.com/document_detail/142230.html). You cannot force a dependency in a program to get these parameters.
     *  *
     * @param string                      $InstanceId
     * @param UpdatePublicWhiteIpsRequest $request    UpdatePublicWhiteIpsRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdatePublicWhiteIpsResponse UpdatePublicWhiteIpsResponse
     */
    public function updatePublicWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            $query['modifyMode'] = $request->modifyMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdatePublicWhiteIps',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/public-white-ips',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePublicWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ## RequestBody
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
     *  *
     * @description >  In the following example, only the parameters in the returned data list are guaranteed to be included. The parameters that are not mentioned are for reference only. For more information about the parameters, see [ListInstance](https://help.aliyun.com/document_detail/142230.html). You cannot force a dependency in a program to get these parameters.
     *  *
     * @param string                      $InstanceId
     * @param UpdatePublicWhiteIpsRequest $request    UpdatePublicWhiteIpsRequest
     *
     * @return UpdatePublicWhiteIpsResponse UpdatePublicWhiteIpsResponse
     */
    public function updatePublicWhiteIps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePublicWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 更改ES集群高可用策略
     *  *
     * @param string                       $InstanceId
     * @param UpdateReadWritePolicyRequest $request    UpdateReadWritePolicyRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateReadWritePolicyResponse UpdateReadWritePolicyResponse
     */
    public function updateReadWritePolicyWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateReadWritePolicy',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/update-read-write-policy',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateReadWritePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更改ES集群高可用策略
     *  *
     * @param string                       $InstanceId
     * @param UpdateReadWritePolicyRequest $request    UpdateReadWritePolicyRequest
     *
     * @return UpdateReadWritePolicyResponse UpdateReadWritePolicyResponse
     */
    public function updateReadWritePolicy($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateReadWritePolicyWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Call UpdateSnapshotSetting to update the data backup configuration of the specified instance.
     *  *
     * @param string                       $InstanceId
     * @param UpdateSnapshotSettingRequest $request    UpdateSnapshotSettingRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateSnapshotSettingResponse UpdateSnapshotSettingResponse
     */
    public function updateSnapshotSettingWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateSnapshotSetting',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/snapshot-setting',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSnapshotSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call UpdateSnapshotSetting to update the data backup configuration of the specified instance.
     *  *
     * @param string                       $InstanceId
     * @param UpdateSnapshotSettingRequest $request    UpdateSnapshotSettingRequest
     *
     * @return UpdateSnapshotSettingResponse UpdateSnapshotSettingResponse
     */
    public function updateSnapshotSetting($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSnapshotSettingWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the synonym dictionaries of an Elasticsearch cluster.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
     *  *
     * @param string                     $InstanceId
     * @param UpdateSynonymsDictsRequest $request    UpdateSynonymsDictsRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateSynonymsDictsResponse UpdateSynonymsDictsResponse
     */
    public function updateSynonymsDictsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateSynonymsDicts',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/synonymsDict',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSynonymsDictsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the synonym dictionaries of an Elasticsearch cluster.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If the dictionary file is stored in an Object Storage Service (OSS) bucket, you must make sure that the access control list (ACL) of the bucket is public read.
     * *   If you do not set sourceType to ORIGIN for an uploaded dictionary file, the file will be deleted after you call this operation.
     *  *
     * @param string                     $InstanceId
     * @param UpdateSynonymsDictsRequest $request    UpdateSynonymsDictsRequest
     *
     * @return UpdateSynonymsDictsResponse UpdateSynonymsDictsResponse
     */
    public function updateSynonymsDicts($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSynonymsDictsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                $InstanceId
     * @param string                $TemplateName
     * @param UpdateTemplateRequest $request      UpdateTemplateRequest
     * @param string[]              $headers      map
     * @param RuntimeOptions        $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($InstanceId, $TemplateName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateTemplate',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/templates/' . OpenApiUtilClient::getEncodeParam($TemplateName) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $InstanceId
     * @param string                $TemplateName
     * @param UpdateTemplateRequest $request      UpdateTemplateRequest
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
     */
    public function updateTemplate($InstanceId, $TemplateName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTemplateWithOptions($InstanceId, $TemplateName, $request, $headers, $runtime);
    }

    /**
     * @summary >  If you want to add an IP address whitelist, you can set the modifyMode parameter only to Cover. If you set this parameter to Delete or Append, you can only update an IP address whitelist.
     * *   If you set the modifyMode parameter to Cover and leave the ips parameter empty, the system deletes the specified whitelist. If the whitelist specified by using the groupName parameter does not exist, the system creates such a whitelist.
     * *   If you set the modifyMode parameter to Delete, at least one IP address must be retained for the specified whitelist.
     * *   If you set the modifyMode parameter to Append, you must make sure that the specified whitelist exists. Otherwise, the system reports the NotFound error.
     *  *
     * @description > For more information about the parameters displayed in the following sample code but not provided in the preceding tables, see [ListInstance](https://help.aliyun.com/document_detail/142230.html). You cannot force your program to obtain these parameters.
     *  *
     * @param string                $InstanceId
     * @param UpdateWhiteIpsRequest $request    UpdateWhiteIpsRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateWhiteIpsResponse UpdateWhiteIpsResponse
     */
    public function updateWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            $query['modifyMode'] = $request->modifyMode;
        }
        $body = [];
        if (!Utils::isUnset($request->esIPWhitelist)) {
            $body['esIPWhitelist'] = $request->esIPWhitelist;
        }
        if (!Utils::isUnset($request->whiteIpGroup)) {
            $body['whiteIpGroup'] = $request->whiteIpGroup;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWhiteIps',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/white-ips',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary >  If you want to add an IP address whitelist, you can set the modifyMode parameter only to Cover. If you set this parameter to Delete or Append, you can only update an IP address whitelist.
     * *   If you set the modifyMode parameter to Cover and leave the ips parameter empty, the system deletes the specified whitelist. If the whitelist specified by using the groupName parameter does not exist, the system creates such a whitelist.
     * *   If you set the modifyMode parameter to Delete, at least one IP address must be retained for the specified whitelist.
     * *   If you set the modifyMode parameter to Append, you must make sure that the specified whitelist exists. Otherwise, the system reports the NotFound error.
     *  *
     * @description > For more information about the parameters displayed in the following sample code but not provided in the preceding tables, see [ListInstance](https://help.aliyun.com/document_detail/142230.html). You cannot force your program to obtain these parameters.
     *  *
     * @param string                $InstanceId
     * @param UpdateWhiteIpsRequest $request    UpdateWhiteIpsRequest
     *
     * @return UpdateWhiteIpsResponse UpdateWhiteIpsResponse
     */
    public function updateWhiteIps($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 修改Logstash实例的X-Pack监控报警配置。
     *  *
     * @param string                          $InstanceId
     * @param UpdateXpackMonitorConfigRequest $request    UpdateXpackMonitorConfigRequest
     * @param string[]                        $headers    map
     * @param RuntimeOptions                  $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateXpackMonitorConfigResponse UpdateXpackMonitorConfigResponse
     */
    public function updateXpackMonitorConfigWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->enable)) {
            $body['enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->endpoints)) {
            $body['endpoints'] = $request->endpoints;
        }
        if (!Utils::isUnset($request->password)) {
            $body['password'] = $request->password;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['userName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateXpackMonitorConfig',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/xpack-monitor-config',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateXpackMonitorConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改Logstash实例的X-Pack监控报警配置。
     *  *
     * @param string                          $InstanceId
     * @param UpdateXpackMonitorConfigRequest $request    UpdateXpackMonitorConfigRequest
     *
     * @return UpdateXpackMonitorConfigResponse UpdateXpackMonitorConfigResponse
     */
    public function updateXpackMonitorConfig($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateXpackMonitorConfigWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary ES集群版本升级
     *  *
     * @description 5A2CFF0E-5718-45B5-9D4D-70B3FF\\*\\*\\*\\*
     *  *
     * @param string                      $InstanceId
     * @param UpgradeEngineVersionRequest $request    UpgradeEngineVersionRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpgradeEngineVersionResponse UpgradeEngineVersionResponse
     */
    public function upgradeEngineVersionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->version)) {
            $body['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpgradeEngineVersion',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/actions/upgrade-version',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpgradeEngineVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ES集群版本升级
     *  *
     * @description 5A2CFF0E-5718-45B5-9D4D-70B3FF\\*\\*\\*\\*
     *  *
     * @param string                      $InstanceId
     * @param UpgradeEngineVersionRequest $request    UpgradeEngineVersionRequest
     *
     * @return UpgradeEngineVersionResponse UpgradeEngineVersionResponse
     */
    public function upgradeEngineVersion($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeEngineVersionWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Tests the connectivity between a Logstash cluster and its associated Elasticsearch cluster when you configure the X-Pack Monitoring feature for the Logstash cluster.
     *  *
     * @description > Before you enable the X-Pack Monitoring feature for a Logstash cluster, you must associate the Logstash cluster with an Elasticsearch cluster. This way, you can view the monitoring data of the Logstash cluster in the Kibana console of the Elasticsearch cluster.
     *  *
     * @param string                    $InstanceId
     * @param ValidateConnectionRequest $request    ValidateConnectionRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return ValidateConnectionResponse ValidateConnectionResponse
     */
    public function validateConnectionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ValidateConnection',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/validate-connection',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ValidateConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Tests the connectivity between a Logstash cluster and its associated Elasticsearch cluster when you configure the X-Pack Monitoring feature for the Logstash cluster.
     *  *
     * @description > Before you enable the X-Pack Monitoring feature for a Logstash cluster, you must associate the Logstash cluster with an Elasticsearch cluster. This way, you can view the monitoring data of the Logstash cluster in the Kibana console of the Elasticsearch cluster.
     *  *
     * @param string                    $InstanceId
     * @param ValidateConnectionRequest $request    ValidateConnectionRequest
     *
     * @return ValidateConnectionResponse ValidateConnectionResponse
     */
    public function validateConnection($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateConnectionWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 校验缩节点合法性
     *  *
     * @param string                     $InstanceId
     * @param ValidateShrinkNodesRequest $request    ValidateShrinkNodesRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return ValidateShrinkNodesResponse ValidateShrinkNodesResponse
     */
    public function validateShrinkNodesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->count)) {
            $query['count'] = $request->count;
        }
        if (!Utils::isUnset($request->ignoreStatus)) {
            $query['ignoreStatus'] = $request->ignoreStatus;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['nodeType'] = $request->nodeType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'ValidateShrinkNodes',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/validate-shrink-nodes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ValidateShrinkNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验缩节点合法性
     *  *
     * @param string                     $InstanceId
     * @param ValidateShrinkNodesRequest $request    ValidateShrinkNodesRequest
     *
     * @return ValidateShrinkNodesResponse ValidateShrinkNodesResponse
     */
    public function validateShrinkNodes($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateShrinkNodesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param ValidateSlrPermissionRequest $request ValidateSlrPermissionRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ValidateSlrPermissionResponse ValidateSlrPermissionResponse
     */
    public function validateSlrPermissionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->rolename)) {
            $query['rolename'] = $request->rolename;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidateSlrPermission',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/user/servicerolepermission',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ValidateSlrPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidateSlrPermissionRequest $request ValidateSlrPermissionRequest
     *
     * @return ValidateSlrPermissionResponse ValidateSlrPermissionResponse
     */
    public function validateSlrPermission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateSlrPermissionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 缩节点校验数据迁移合法性
     *  *
     * @param string                           $InstanceId
     * @param ValidateTransferableNodesRequest $request    ValidateTransferableNodesRequest
     * @param string[]                         $headers    map
     * @param RuntimeOptions                   $runtime    runtime options for this request RuntimeOptions
     *
     * @return ValidateTransferableNodesResponse ValidateTransferableNodesResponse
     */
    public function validateTransferableNodesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeType)) {
            $query['nodeType'] = $request->nodeType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'ValidateTransferableNodes',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/validate-transfer-nodes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ValidateTransferableNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 缩节点校验数据迁移合法性
     *  *
     * @param string                           $InstanceId
     * @param ValidateTransferableNodesRequest $request    ValidateTransferableNodesRequest
     *
     * @return ValidateTransferableNodesResponse ValidateTransferableNodesResponse
     */
    public function validateTransferableNodes($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateTransferableNodesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary The configurations of dedicated master nodes.
     *  *
     * @description The configurations of warm nodes.
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->clientNodeConfiguration)) {
            $body['clientNodeConfiguration'] = $request->clientNodeConfiguration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->elasticDataNodeConfiguration)) {
            $body['elasticDataNodeConfiguration'] = $request->elasticDataNodeConfiguration;
        }
        if (!Utils::isUnset($request->esAdminPassword)) {
            $body['esAdminPassword'] = $request->esAdminPassword;
        }
        if (!Utils::isUnset($request->esVersion)) {
            $body['esVersion'] = $request->esVersion;
        }
        if (!Utils::isUnset($request->instanceCategory)) {
            $body['instanceCategory'] = $request->instanceCategory;
        }
        if (!Utils::isUnset($request->kibanaConfiguration)) {
            $body['kibanaConfiguration'] = $request->kibanaConfiguration;
        }
        if (!Utils::isUnset($request->masterConfiguration)) {
            $body['masterConfiguration'] = $request->masterConfiguration;
        }
        if (!Utils::isUnset($request->networkConfig)) {
            $body['networkConfig'] = $request->networkConfig;
        }
        if (!Utils::isUnset($request->nodeAmount)) {
            $body['nodeAmount'] = $request->nodeAmount;
        }
        if (!Utils::isUnset($request->nodeSpec)) {
            $body['nodeSpec'] = $request->nodeSpec;
        }
        if (!Utils::isUnset($request->paymentInfo)) {
            $body['paymentInfo'] = $request->paymentInfo;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $body['paymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->warmNodeConfiguration)) {
            $body['warmNodeConfiguration'] = $request->warmNodeConfiguration;
        }
        if (!Utils::isUnset($request->zoneCount)) {
            $body['zoneCount'] = $request->zoneCount;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'createInstance',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The configurations of dedicated master nodes.
     *  *
     * @description The configurations of warm nodes.
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }
}
