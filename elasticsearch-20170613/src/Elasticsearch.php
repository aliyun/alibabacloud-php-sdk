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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteComponentIndexRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteComponentIndexResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteConnectedClusterRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteConnectedClusterResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDataStreamRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDataStreamResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDataTaskRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDataTaskResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDeprecatedTemplateRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDeprecatedTemplateResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteILMPolicyRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteILMPolicyResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteIndexTemplateRequest;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeAckOperatorRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeAckOperatorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeApmRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeApmResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeCollectorRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeCollectorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeComponentIndexRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeComponentIndexResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeConnectableClustersRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeConnectableClustersResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDeprecatedTemplateRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDeprecatedTemplateResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnosisSettingsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnosisSettingsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDynamicSettingsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDynamicSettingsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeElasticsearchHealthRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeElasticsearchHealthResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeILMPolicyRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeILMPolicyResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeIndexTemplateRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeIndexTemplateResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeKibanaSettingsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeKibanaSettingsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribePipelineManagementConfigRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribePipelineManagementConfigResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribePipelineRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribePipelineResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeSnapshotSettingRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeSnapshotSettingResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeTemplatesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeTemplatesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeXpackMonitorConfigRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeXpackMonitorConfigResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DiagnoseInstanceRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DiagnoseInstanceResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EstimatedLogstashRestartTimeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EstimatedLogstashRestartTimeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EstimatedRestartTimeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EstimatedRestartTimeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetClusterDataInformationRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetClusterDataInformationResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetElastictaskRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetElastictaskResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonGrafanaAlertsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonGrafanaAlertsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonGrafanaDashboardsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonGrafanaDashboardsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonMonitorDataRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonMonitorDataResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetOpenStoreUsageRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetOpenStoreUsageResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAvailableEsInstanceIdsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAvailableEsInstanceIdsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListCollectorsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListCollectorsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListConnectedClustersRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListConnectedClustersResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataStreamsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataStreamsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataTasksRequest;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictInformationRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictInformationResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDictsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListExtendfilesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListExtendfilesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListILMPoliciesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListILMPoliciesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListIndexTemplatesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListIndexTemplatesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceIndicesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceIndicesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListKibanaPluginsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListKibanaPluginsResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListSnapshotReposByInstanceIdRequest;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RemoveApmRequest;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StartApmRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StartApmResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StartCollectorRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StartCollectorResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\StopApmRequest;
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
     * @param string               $InstanceId
     * @param ActivateZonesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ActivateZonesResponse
     */
    public function activateZonesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/recover-zones',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ActivateZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                       $InstanceId
     * @param AddConnectableClusterRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return AddConnectableClusterResponse
     */
    public function addConnectableClusterWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/connected-clusters',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddConnectableClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $InstanceId
     * @param AddSnapshotRepoRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AddSnapshotRepoResponse
     */
    public function addSnapshotRepoWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'AddSnapshotRepo',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/snapshot-repos',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddSnapshotRepoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $InstanceId
     * @param CancelDeletionRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CancelDeletionResponse
     */
    public function cancelDeletionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CancelDeletion',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/cancel-deletion',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelDeletionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                        $InstanceId
     * @param CancelLogstashDeletionRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CancelLogstashDeletionResponse
     */
    public function cancelLogstashDeletionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CancelLogstashDeletion',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/actions/cancel-deletion',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelLogstashDeletionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string            $InstanceId
     * @param CancelTaskRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CancelTaskResponse
     */
    public function cancelTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['taskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CancelTask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/cancel-task',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CapacityPlanRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CapacityPlanResponse
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
     * @param string                $InstanceId
     * @param CloseDiagnosisRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CloseDiagnosisResponse
     */
    public function closeDiagnosisWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'action'      => 'CloseDiagnosis',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . $InstanceId . '/actions/close-diagnosis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloseDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string            $InstanceId
     * @param CloseHttpsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CloseHttpsResponse
     */
    public function closeHttpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CloseHttps',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/close-https',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloseHttpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $Index      = OpenApiUtilClient::getEncodeParam($Index);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CloseManagedIndex',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/indices/' . $Index . '/close-managed',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloseManagedIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateCollectorRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateCollectorResponse
     */
    public function createCollectorWithOptions($request, $headers, $runtime)
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
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $name       = OpenApiUtilClient::getEncodeParam($name);
        $body       = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/component-index/' . $name . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateComponentIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                  $InstanceId
     * @param CreateDataStreamRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataStreamResponse
     */
    public function createDataStreamWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/data-streams',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDataStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $InstanceId
     * @param CreateDataTasksRequest $request
     *
     * @return CreateDataTasksResponse
     */
    public function createDataTasks($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataTasksWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $InstanceId
     * @param CreateDataTasksRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDataTasksResponse
     */
    public function createDataTasksWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateDataTasks',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/data-task',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDataTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $InstanceId
     * @param CreateILMPolicyRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateILMPolicyResponse
     */
    public function createILMPolicyWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/ilm-policies',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateILMPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $InstanceId
     * @param CreateIndexTemplateRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateIndexTemplateResponse
     */
    public function createIndexTemplateWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateIndexTemplate',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/index-templates',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateIndexTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateLogstashRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateLogstashResponse
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
     * @param string                 $InstanceId
     * @param CreatePipelinesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreatePipelinesResponse
     */
    public function createPipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
            'action'      => 'CreatePipelines',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/pipelines',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $InstanceId
     * @param CreateSnapshotRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/snapshots',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                   $InstanceId
     * @param CreateVpcEndpointRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateVpcEndpointResponse
     */
    public function createVpcEndpointWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/vpc-endpoints',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $InstanceId
     * @param DeactivateZonesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeactivateZonesResponse
     */
    public function deactivateZonesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/down-zones',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeactivateZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $ResId
     * @param DeleteCollectorRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteCollectorResponse
     */
    public function deleteCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ResId = OpenApiUtilClient::getEncodeParam($ResId);
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
            'action'      => 'DeleteCollector',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . $ResId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $InstanceId
     * @param string                      $name
     * @param DeleteComponentIndexRequest $request
     *
     * @return DeleteComponentIndexResponse
     */
    public function deleteComponentIndex($InstanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteComponentIndexWithOptions($InstanceId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string                      $InstanceId
     * @param string                      $name
     * @param DeleteComponentIndexRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteComponentIndexResponse
     */
    public function deleteComponentIndexWithOptions($InstanceId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $name       = OpenApiUtilClient::getEncodeParam($name);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DeleteComponentIndex',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/component-index/' . $name . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteComponentIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                        $InstanceId
     * @param DeleteConnectedClusterRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteConnectedClusterResponse
     */
    public function deleteConnectedClusterWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectedInstanceId)) {
            $query['connectedInstanceId'] = $request->connectedInstanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DeleteConnectedCluster',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/connected-clusters',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteConnectedClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $DataStream = OpenApiUtilClient::getEncodeParam($DataStream);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DeleteDataStream',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/data-streams/' . $DataStream . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDataStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $InstanceId
     * @param DeleteDataTaskRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDataTaskResponse
     */
    public function deleteDataTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DeleteDataTask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/data-task',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDataTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                          $InstanceId
     * @param string                          $name
     * @param DeleteDeprecatedTemplateRequest $request
     *
     * @return DeleteDeprecatedTemplateResponse
     */
    public function deleteDeprecatedTemplate($InstanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDeprecatedTemplateWithOptions($InstanceId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string                          $InstanceId
     * @param string                          $name
     * @param DeleteDeprecatedTemplateRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDeprecatedTemplateResponse
     */
    public function deleteDeprecatedTemplateWithOptions($InstanceId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $name       = OpenApiUtilClient::getEncodeParam($name);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DeleteDeprecatedTemplate',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/deprecated-templates/' . $name . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDeprecatedTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $InstanceId
     * @param string                 $PolicyName
     * @param DeleteILMPolicyRequest $request
     *
     * @return DeleteILMPolicyResponse
     */
    public function deleteILMPolicy($InstanceId, $PolicyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteILMPolicyWithOptions($InstanceId, $PolicyName, $request, $headers, $runtime);
    }

    /**
     * @param string                 $InstanceId
     * @param string                 $PolicyName
     * @param DeleteILMPolicyRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteILMPolicyResponse
     */
    public function deleteILMPolicyWithOptions($InstanceId, $PolicyName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $PolicyName = OpenApiUtilClient::getEncodeParam($PolicyName);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DeleteILMPolicy',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/ilm-policies/' . $PolicyName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteILMPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $InstanceId
     * @param string                     $IndexTemplate
     * @param DeleteIndexTemplateRequest $request
     *
     * @return DeleteIndexTemplateResponse
     */
    public function deleteIndexTemplate($InstanceId, $IndexTemplate, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexTemplateWithOptions($InstanceId, $IndexTemplate, $request, $headers, $runtime);
    }

    /**
     * @param string                     $InstanceId
     * @param string                     $IndexTemplate
     * @param DeleteIndexTemplateRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteIndexTemplateResponse
     */
    public function deleteIndexTemplateWithOptions($InstanceId, $IndexTemplate, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId    = OpenApiUtilClient::getEncodeParam($InstanceId);
        $IndexTemplate = OpenApiUtilClient::getEncodeParam($IndexTemplate);
        $req           = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DeleteIndexTemplate',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/index-templates/' . $IndexTemplate . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteIndexTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $InstanceId
     * @param DeleteInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deleteType)) {
            $query['deleteType'] = $request->deleteType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '',
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
     * @param string                $InstanceId
     * @param DeleteLogstashRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteLogstashResponse
     */
    public function deleteLogstashWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deleteType)) {
            $query['deleteType'] = $request->deleteType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DeleteLogstash',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $InstanceId
     * @param DeletePipelinesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeletePipelinesResponse
     */
    public function deletePipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->pipelineIds)) {
            $query['pipelineIds'] = $request->pipelineIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DeletePipelines',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/pipelines',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $InstanceId
     * @param DeleteSnapshotRepoRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSnapshotRepoResponse
     */
    public function deleteSnapshotRepoWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->repoPath)) {
            $query['repoPath'] = $request->repoPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DeleteSnapshotRepo',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/snapshot-repos',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSnapshotRepoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $EndpointId = OpenApiUtilClient::getEncodeParam($EndpointId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DeleteVpcEndpoint',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/vpc-endpoints/' . $EndpointId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteVpcEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $ClusterId
     * @param DescribeAckOperatorRequest $request
     *
     * @return DescribeAckOperatorResponse
     */
    public function describeAckOperator($ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAckOperatorWithOptions($ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $ClusterId
     * @param DescribeAckOperatorRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAckOperatorResponse
     */
    public function describeAckOperatorWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ClusterId = OpenApiUtilClient::getEncodeParam($ClusterId);
        $req       = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeAckOperator',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ack-clusters/' . $ClusterId . '/operator',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAckOperatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $instanceId
     * @param DescribeApmRequest $request
     *
     * @return DescribeApmResponse
     */
    public function describeApm($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeApmWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string             $instanceId
     * @param DescribeApmRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeApmResponse
     */
    public function describeApmWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId = OpenApiUtilClient::getEncodeParam($instanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeApm',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/apm/' . $instanceId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $ResId
     * @param DescribeCollectorRequest $request
     *
     * @return DescribeCollectorResponse
     */
    public function describeCollector($ResId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeCollectorWithOptions($ResId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $ResId
     * @param DescribeCollectorRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeCollectorResponse
     */
    public function describeCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ResId = OpenApiUtilClient::getEncodeParam($ResId);
        $req   = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeCollector',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . $ResId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $InstanceId
     * @param string                        $name
     * @param DescribeComponentIndexRequest $request
     *
     * @return DescribeComponentIndexResponse
     */
    public function describeComponentIndex($InstanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeComponentIndexWithOptions($InstanceId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string                        $InstanceId
     * @param string                        $name
     * @param DescribeComponentIndexRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeComponentIndexResponse
     */
    public function describeComponentIndexWithOptions($InstanceId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $name       = OpenApiUtilClient::getEncodeParam($name);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeComponentIndex',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/component-index/' . $name . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeComponentIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                             $InstanceId
     * @param DescribeConnectableClustersRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeConnectableClustersResponse
     */
    public function describeConnectableClustersWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->alreadySetItems)) {
            $query['alreadySetItems'] = $request->alreadySetItems;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeConnectableClusters',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/connectable-clusters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeConnectableClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                            $InstanceId
     * @param string                            $name
     * @param DescribeDeprecatedTemplateRequest $request
     *
     * @return DescribeDeprecatedTemplateResponse
     */
    public function describeDeprecatedTemplate($InstanceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDeprecatedTemplateWithOptions($InstanceId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string                            $InstanceId
     * @param string                            $name
     * @param DescribeDeprecatedTemplateRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDeprecatedTemplateResponse
     */
    public function describeDeprecatedTemplateWithOptions($InstanceId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $name       = OpenApiUtilClient::getEncodeParam($name);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeDeprecatedTemplate',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/deprecated-templates/' . $name . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDeprecatedTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $ReportId   = OpenApiUtilClient::getEncodeParam($ReportId);
        $query      = [];
        if (!Utils::isUnset($request->lang)) {
            $query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnoseReport',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . $InstanceId . '/reports/' . $ReportId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnoseReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                           $InstanceId
     * @param DescribeDiagnosisSettingsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDiagnosisSettingsResponse
     */
    public function describeDiagnosisSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->lang)) {
            $query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnosisSettings',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . $InstanceId . '/settings',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosisSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $InstanceId
     * @param DescribeDynamicSettingsRequest $request
     *
     * @return DescribeDynamicSettingsResponse
     */
    public function describeDynamicSettings($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDynamicSettingsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $InstanceId
     * @param DescribeDynamicSettingsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDynamicSettingsResponse
     */
    public function describeDynamicSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeDynamicSettings',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/dynamic-settings',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDynamicSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                             $InstanceId
     * @param DescribeElasticsearchHealthRequest $request
     *
     * @return DescribeElasticsearchHealthResponse
     */
    public function describeElasticsearchHealth($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeElasticsearchHealthWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                             $InstanceId
     * @param DescribeElasticsearchHealthRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeElasticsearchHealthResponse
     */
    public function describeElasticsearchHealthWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeElasticsearchHealth',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/elasticsearch-health',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeElasticsearchHealthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $InstanceId
     * @param string                   $PolicyName
     * @param DescribeILMPolicyRequest $request
     *
     * @return DescribeILMPolicyResponse
     */
    public function describeILMPolicy($InstanceId, $PolicyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeILMPolicyWithOptions($InstanceId, $PolicyName, $request, $headers, $runtime);
    }

    /**
     * @param string                   $InstanceId
     * @param string                   $PolicyName
     * @param DescribeILMPolicyRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeILMPolicyResponse
     */
    public function describeILMPolicyWithOptions($InstanceId, $PolicyName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $PolicyName = OpenApiUtilClient::getEncodeParam($PolicyName);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeILMPolicy',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/ilm-policies/' . $PolicyName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeILMPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $InstanceId
     * @param string                       $IndexTemplate
     * @param DescribeIndexTemplateRequest $request
     *
     * @return DescribeIndexTemplateResponse
     */
    public function describeIndexTemplate($InstanceId, $IndexTemplate, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeIndexTemplateWithOptions($InstanceId, $IndexTemplate, $request, $headers, $runtime);
    }

    /**
     * @param string                       $InstanceId
     * @param string                       $IndexTemplate
     * @param DescribeIndexTemplateRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeIndexTemplateResponse
     */
    public function describeIndexTemplateWithOptions($InstanceId, $IndexTemplate, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId    = OpenApiUtilClient::getEncodeParam($InstanceId);
        $IndexTemplate = OpenApiUtilClient::getEncodeParam($IndexTemplate);
        $req           = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeIndexTemplate',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/index-templates/' . $IndexTemplate . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeIndexTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $InstanceId
     * @param DescribeInstanceRequest $request
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $InstanceId
     * @param DescribeInstanceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $InstanceId
     * @param DescribeKibanaSettingsRequest $request
     *
     * @return DescribeKibanaSettingsResponse
     */
    public function describeKibanaSettings($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeKibanaSettingsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $InstanceId
     * @param DescribeKibanaSettingsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeKibanaSettingsResponse
     */
    public function describeKibanaSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeKibanaSettings',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/kibana-settings',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeKibanaSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $InstanceId
     * @param DescribeLogstashRequest $request
     *
     * @return DescribeLogstashResponse
     */
    public function describeLogstash($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeLogstashWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $InstanceId
     * @param DescribeLogstashRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeLogstashResponse
     */
    public function describeLogstashWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeLogstash',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $InstanceId
     * @param string                  $PipelineId
     * @param DescribePipelineRequest $request
     *
     * @return DescribePipelineResponse
     */
    public function describePipeline($InstanceId, $PipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describePipelineWithOptions($InstanceId, $PipelineId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $InstanceId
     * @param string                  $PipelineId
     * @param DescribePipelineRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DescribePipelineResponse
     */
    public function describePipelineWithOptions($InstanceId, $PipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $PipelineId = OpenApiUtilClient::getEncodeParam($PipelineId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribePipeline',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/pipelines/' . $PipelineId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                                  $InstanceId
     * @param DescribePipelineManagementConfigRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribePipelineManagementConfigResponse
     */
    public function describePipelineManagementConfigWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribePipelineManagementConfig',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/pipeline-management-config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePipelineManagementConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
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
     * @param string                         $InstanceId
     * @param DescribeSnapshotSettingRequest $request
     *
     * @return DescribeSnapshotSettingResponse
     */
    public function describeSnapshotSetting($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSnapshotSettingWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $InstanceId
     * @param DescribeSnapshotSettingRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSnapshotSettingResponse
     */
    public function describeSnapshotSettingWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeSnapshotSetting',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/snapshot-setting',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSnapshotSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $InstanceId
     * @param DescribeTemplatesRequest $request
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplates($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTemplatesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $InstanceId
     * @param DescribeTemplatesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplatesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplates',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/templates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                            $InstanceId
     * @param DescribeXpackMonitorConfigRequest $request
     *
     * @return DescribeXpackMonitorConfigResponse
     */
    public function describeXpackMonitorConfig($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeXpackMonitorConfigWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $InstanceId
     * @param DescribeXpackMonitorConfigRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeXpackMonitorConfigResponse
     */
    public function describeXpackMonitorConfigWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'DescribeXpackMonitorConfig',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/xpack-monitor-config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeXpackMonitorConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                  $InstanceId
     * @param DiagnoseInstanceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DiagnoseInstanceResponse
     */
    public function diagnoseInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'action'      => 'DiagnoseInstance',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . $InstanceId . '/actions/diagnose',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DiagnoseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                              $InstanceId
     * @param EstimatedLogstashRestartTimeRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return EstimatedLogstashRestartTimeResponse
     */
    public function estimatedLogstashRestartTimeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/estimated-time/restart-time',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EstimatedLogstashRestartTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                      $InstanceId
     * @param EstimatedRestartTimeRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return EstimatedRestartTimeResponse
     */
    public function estimatedRestartTimeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/estimated-time/restart-time',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EstimatedRestartTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetClusterDataInformationRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetClusterDataInformationResponse
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
     * @param string                $InstanceId
     * @param GetElastictaskRequest $request
     *
     * @return GetElastictaskResponse
     */
    public function getElastictask($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getElastictaskWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                $InstanceId
     * @param GetElastictaskRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetElastictaskResponse
     */
    public function getElastictaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'GetElastictask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/elastic-task',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetElastictaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                      $ProjectId
     * @param GetEmonGrafanaAlertsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetEmonGrafanaAlertsResponse
     */
    public function getEmonGrafanaAlertsWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ProjectId = OpenApiUtilClient::getEncodeParam($ProjectId);
        $req       = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'GetEmonGrafanaAlerts',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/emon/projects/' . $ProjectId . '/grafana/proxy/api/alerts',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEmonGrafanaAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                          $ProjectId
     * @param GetEmonGrafanaDashboardsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetEmonGrafanaDashboardsResponse
     */
    public function getEmonGrafanaDashboardsWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ProjectId = OpenApiUtilClient::getEncodeParam($ProjectId);
        $req       = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'GetEmonGrafanaDashboards',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/emon/projects/' . $ProjectId . '/grafana/proxy/api/search',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEmonGrafanaDashboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $ProjectId
     * @param GetEmonMonitorDataRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetEmonMonitorDataResponse
     */
    public function getEmonMonitorDataWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ProjectId = OpenApiUtilClient::getEncodeParam($ProjectId);
        $req       = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'GetEmonMonitorData',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/emon/projects/' . $ProjectId . '/metrics/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEmonMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $InstanceId
     * @param GetOpenStoreUsageRequest $request
     *
     * @return GetOpenStoreUsageResponse
     */
    public function getOpenStoreUsage($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOpenStoreUsageWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $InstanceId
     * @param GetOpenStoreUsageRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetOpenStoreUsageResponse
     */
    public function getOpenStoreUsageWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'GetOpenStoreUsage',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/openstore/usage',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOpenStoreUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetRegionConfigurationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetRegionConfigurationResponse
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
            'body'    => $request->body,
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
     * @param string                           $InstanceId
     * @param GetSuggestShrinkableNodesRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetSuggestShrinkableNodesResponse
     */
    public function getSuggestShrinkableNodesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'GetSuggestShrinkableNodes',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/suggest-shrinkable-nodes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSuggestShrinkableNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                      $InstanceId
     * @param GetTransferableNodesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetTransferableNodesResponse
     */
    public function getTransferableNodesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->count)) {
            $query['count'] = $request->count;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['nodeType'] = $request->nodeType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'GetTransferableNodes',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/transferable-nodes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTransferableNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param InitializeOperationRoleRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return InitializeOperationRoleResponse
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
     * @param string                    $ClusterId
     * @param InstallAckOperatorRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return InstallAckOperatorResponse
     */
    public function installAckOperatorWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ClusterId = OpenApiUtilClient::getEncodeParam($ClusterId);
        $query     = [];
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
            'pathname'    => '/openapi/ack-clusters/' . $ClusterId . '/operator',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InstallAckOperatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                           $InstanceId
     * @param InstallKibanaSystemPluginRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return InstallKibanaSystemPluginResponse
     */
    public function installKibanaSystemPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/kibana-plugins/system/actions/install',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InstallKibanaSystemPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                             $InstanceId
     * @param InstallLogstashSystemPluginRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return InstallLogstashSystemPluginResponse
     */
    public function installLogstashSystemPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/plugins/system/actions/install',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InstallLogstashSystemPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $InstanceId
     * @param InstallSystemPluginRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return InstallSystemPluginResponse
     */
    public function installSystemPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/plugins/system/actions/install',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InstallSystemPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $InstanceId
     * @param InstallUserPluginsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return InstallUserPluginsResponse
     */
    public function installUserPluginsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'InstallUserPlugins',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/plugins/user/actions/install',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InstallUserPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                            $InstanceId
     * @param InterruptElasticsearchTaskRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return InterruptElasticsearchTaskResponse
     */
    public function interruptElasticsearchTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'InterruptElasticsearchTask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/interrupt',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InterruptElasticsearchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                       $InstanceId
     * @param InterruptLogstashTaskRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return InterruptLogstashTaskResponse
     */
    public function interruptLogstashTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'InterruptLogstashTask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/actions/interrupt',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InterruptLogstashTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListAckClustersRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListAckClustersResponse
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
            'body'    => $request->body,
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
     * @param string                   $ClusterId
     * @param ListAckNamespacesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListAckNamespacesResponse
     */
    public function listAckNamespacesWithOptions($ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ClusterId = OpenApiUtilClient::getEncodeParam($ClusterId);
        $query     = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListAckNamespaces',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/ack-clusters/' . $ClusterId . '/namespaces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAckNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                   $InstanceId
     * @param ListActionRecordsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListActionRecordsResponse
     */
    public function listActionRecordsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListActionRecords',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/action-records',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListActionRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string             $InstanceId
     * @param ListAllNodeRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListAllNodeResponse
     */
    public function listAllNodeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->extended)) {
            $query['extended'] = $request->extended;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListAllNode',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/nodes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAllNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                              $InstanceId
     * @param ListAlternativeSnapshotReposRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ListAlternativeSnapshotReposResponse
     */
    public function listAlternativeSnapshotReposWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->alreadySetItems)) {
            $query['alreadySetItems'] = $request->alreadySetItems;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListAlternativeSnapshotRepos',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/alternative-snapshot-repos',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAlternativeSnapshotReposResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListApmRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListApmResponse
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
            'body'    => $request->body,
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
     * @param string                            $InstanceId
     * @param ListAvailableEsInstanceIdsRequest $request
     *
     * @return ListAvailableEsInstanceIdsResponse
     */
    public function listAvailableEsInstanceIds($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAvailableEsInstanceIdsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $InstanceId
     * @param ListAvailableEsInstanceIdsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListAvailableEsInstanceIdsResponse
     */
    public function listAvailableEsInstanceIdsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListAvailableEsInstanceIds',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/available-elasticsearch-for-centralized-management',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAvailableEsInstanceIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListCollectorsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListCollectorsResponse
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
            'body'    => $request->body,
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
     * @param string                      $InstanceId
     * @param ListComponentIndicesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListComponentIndicesResponse
     */
    public function listComponentIndicesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListComponentIndices',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/component-index',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListComponentIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $InstanceId
     * @param ListConnectedClustersRequest $request
     *
     * @return ListConnectedClustersResponse
     */
    public function listConnectedClusters($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConnectedClustersWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $InstanceId
     * @param ListConnectedClustersRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListConnectedClustersResponse
     */
    public function listConnectedClustersWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListConnectedClusters',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/connected-clusters',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListConnectedClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $InstanceId
     * @param ListDataStreamsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataStreamsResponse
     */
    public function listDataStreamsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->isManaged)) {
            $query['isManaged'] = $request->isManaged;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListDataStreams',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/data-streams',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataStreamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $InstanceId
     * @param ListDataTasksRequest $request
     *
     * @return ListDataTasksResponse
     */
    public function listDataTasks($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataTasksWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string               $InstanceId
     * @param ListDataTasksRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListDataTasksResponse
     */
    public function listDataTasksWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListDataTasks',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/data-task',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListDefaultCollectorConfigurationsRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ListDefaultCollectorConfigurationsResponse
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
            'body'    => $request->body,
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
     * @param string                         $InstanceId
     * @param ListDeprecatedTemplatesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDeprecatedTemplatesResponse
     */
    public function listDeprecatedTemplatesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListDeprecatedTemplates',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/deprecated-templates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDeprecatedTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $InstanceId
     * @param ListDiagnoseIndicesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListDiagnoseIndicesResponse
     */
    public function listDiagnoseIndicesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->lang)) {
            $query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListDiagnoseIndices',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . $InstanceId . '/indices',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDiagnoseIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $InstanceId
     * @param ListDiagnoseReportRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListDiagnoseReportResponse
     */
    public function listDiagnoseReportWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListDiagnoseReport',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . $InstanceId . '/reports',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDiagnoseReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                       $InstanceId
     * @param ListDiagnoseReportIdsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListDiagnoseReportIdsResponse
     */
    public function listDiagnoseReportIdsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListDiagnoseReportIds',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . $InstanceId . '/report-ids',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDiagnoseReportIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $InstanceId
     * @param ListDictInformationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListDictInformationResponse
     */
    public function listDictInformationWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListDictInformation',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/dict/_info',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDictInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string           $InstanceId
     * @param ListDictsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListDictsResponse
     */
    public function listDictsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->analyzerType)) {
            $query['analyzerType'] = $request->analyzerType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListDicts',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/dicts',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDictsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListEcsInstancesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListEcsInstancesResponse
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
            'body'    => $request->body,
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
     * @param string                 $InstanceId
     * @param ListExtendfilesRequest $request
     *
     * @return ListExtendfilesResponse
     */
    public function listExtendfiles($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExtendfilesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $InstanceId
     * @param ListExtendfilesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListExtendfilesResponse
     */
    public function listExtendfilesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListExtendfiles',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/extendfiles',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListExtendfilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $InstanceId
     * @param ListILMPoliciesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListILMPoliciesResponse
     */
    public function listILMPoliciesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['policyName'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListILMPolicies',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/ilm-policies',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListILMPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $InstanceId
     * @param ListIndexTemplatesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListIndexTemplatesResponse
     */
    public function listIndexTemplatesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListIndexTemplates',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/index-templates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIndexTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListInstanceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListInstanceResponse
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
            'body'    => $request->body,
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
     * @param string                     $InstanceId
     * @param ListInstanceIndicesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListInstanceIndicesResponse
     */
    public function listInstanceIndicesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListInstanceIndices',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/indices',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                   $InstanceId
     * @param ListKibanaPluginsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListKibanaPluginsResponse
     */
    public function listKibanaPluginsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListKibanaPlugins',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/kibana-plugins',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListKibanaPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListLogstashRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListLogstashResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['ownerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
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
     * @param string                 $InstanceId
     * @param ListLogstashLogRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListLogstashLogResponse
     */
    public function listLogstashLogWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListLogstashLog',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/search-log',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLogstashLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $InstanceId
     * @param ListLogstashPluginsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListLogstashPluginsResponse
     */
    public function listLogstashPluginsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListLogstashPlugins',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/plugins',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLogstashPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string           $ResId
     * @param ListNodesRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ResId = OpenApiUtilClient::getEncodeParam($ResId);
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListNodes',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . $ResId . '/nodes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string              $InstanceId
     * @param ListPipelineRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListPipelineResponse
     */
    public function listPipelineWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListPipeline',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/pipelines',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $InstanceId
     * @param ListPipelineIdsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListPipelineIdsResponse
     */
    public function listPipelineIdsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListPipelineIds',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/pipeline-ids',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string             $InstanceId
     * @param ListPluginsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListPluginsResponse
     */
    public function listPluginsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListPlugins',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/plugins',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string               $InstanceId
     * @param ListSearchLogRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListSearchLogResponse
     */
    public function listSearchLogWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListSearchLog',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/search-log',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSearchLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $InstanceId
     * @param ListShardRecoveriesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListShardRecoveriesResponse
     */
    public function listShardRecoveriesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->activeOnly)) {
            $query['activeOnly'] = $request->activeOnly;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListShardRecoveries',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/cat-recovery',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListShardRecoveriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                               $InstanceId
     * @param ListSnapshotReposByInstanceIdRequest $request
     *
     * @return ListSnapshotReposByInstanceIdResponse
     */
    public function listSnapshotReposByInstanceId($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSnapshotReposByInstanceIdWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                               $InstanceId
     * @param ListSnapshotReposByInstanceIdRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListSnapshotReposByInstanceIdResponse
     */
    public function listSnapshotReposByInstanceIdWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListSnapshotReposByInstanceId',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/snapshot-repos',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSnapshotReposByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListTagResourcesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
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
            'body'    => $request->body,
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
     * @param ListTagsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
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
            'body'    => $request->body,
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
     * @param string                  $InstanceId
     * @param ListVpcEndpointsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListVpcEndpointsResponse
     */
    public function listVpcEndpointsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ListVpcEndpoints',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/vpc-endpoints',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVpcEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $InstanceId
     * @param MigrateToOtherZoneRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return MigrateToOtherZoneResponse
     */
    public function migrateToOtherZoneWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/migrate-zones',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MigrateToOtherZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $ResId
     * @param ModifyDeployMachineRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDeployMachineResponse
     */
    public function modifyDeployMachineWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ResId = OpenApiUtilClient::getEncodeParam($ResId);
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
            'pathname'    => '/openapi/collectors/' . $ResId . '/actions/modify-deploy-machines',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                   $InstanceId
     * @param ModifyElastictaskRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyElastictaskResponse
     */
    public function modifyElastictaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ModifyElastictask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/elastic-task',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyElastictaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                            $InstanceId
     * @param ModifyInstanceMaintainTimeRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyInstanceMaintainTimeResponse
     */
    public function modifyInstanceMaintainTimeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/modify-maintaintime',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceMaintainTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $InstanceId
     * @param ModifyWhiteIpsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyWhiteIpsResponse
     */
    public function modifyWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/modify-white-ips',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                   $InstanceId
     * @param MoveResourceGroupRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/resourcegroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string               $InstanceId
     * @param OpenDiagnosisRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return OpenDiagnosisResponse
     */
    public function openDiagnosisWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'action'      => 'OpenDiagnosis',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/diagnosis/instances/' . $InstanceId . '/actions/open-diagnosis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OpenDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string           $InstanceId
     * @param OpenHttpsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return OpenHttpsResponse
     */
    public function openHttpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'OpenHttps',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/open-https',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OpenHttpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $ProjectId    = OpenApiUtilClient::getEncodeParam($ProjectId);
        $AlarmGroupId = OpenApiUtilClient::getEncodeParam($AlarmGroupId);
        $req          = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'PostEmonTryAlarmRule',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/emon/projects/' . $ProjectId . '/alarm-groups/' . $AlarmGroupId . '/alarm-rules/_test',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PostEmonTryAlarmRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $InstanceId
     * @param RecommendTemplatesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RecommendTemplatesResponse
     */
    public function recommendTemplatesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->usageScenario)) {
            $query['usageScenario'] = $request->usageScenario;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecommendTemplates',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/recommended-templates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecommendTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $ResId
     * @param ReinstallCollectorRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ReinstallCollectorResponse
     */
    public function reinstallCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ResId = OpenApiUtilClient::getEncodeParam($ResId);
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
            'pathname'    => '/openapi/collectors/' . $ResId . '/actions/reinstall',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReinstallCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string           $instanceId
     * @param RemoveApmRequest $request
     *
     * @return RemoveApmResponse
     */
    public function removeApm($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeApmWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string           $instanceId
     * @param RemoveApmRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return RemoveApmResponse
     */
    public function removeApmWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId = OpenApiUtilClient::getEncodeParam($instanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RemoveApm',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/apm/' . $instanceId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string               $InstanceId
     * @param RenewInstanceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/renew',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string               $InstanceId
     * @param RenewLogstashRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RenewLogstashResponse
     */
    public function renewLogstashWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/actions/renew',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RenewLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                  $ResId
     * @param RestartCollectorRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RestartCollectorResponse
     */
    public function restartCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ResId = OpenApiUtilClient::getEncodeParam($ResId);
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
            'action'      => 'RestartCollector',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . $ResId . '/actions/restart',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $InstanceId
     * @param RestartInstanceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/restart',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $InstanceId
     * @param RestartLogstashRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RestartLogstashResponse
     */
    public function restartLogstashWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'action'      => 'RestartLogstash',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/actions/restart',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                         $InstanceId
     * @param ResumeElasticsearchTaskRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ResumeElasticsearchTaskResponse
     */
    public function resumeElasticsearchTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ResumeElasticsearchTask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/resume',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResumeElasticsearchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $InstanceId
     * @param ResumeLogstashTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ResumeLogstashTaskResponse
     */
    public function resumeLogstashTaskWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ResumeLogstashTask',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/actions/resume',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResumeLogstashTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $DataStream = OpenApiUtilClient::getEncodeParam($DataStream);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RolloverDataStream',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/data-streams/' . $DataStream . '/rollover',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RolloverDataStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string              $InstanceId
     * @param RunPipelinesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return RunPipelinesResponse
     */
    public function runPipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/pipelines/action/run',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string            $InstanceId
     * @param ShrinkNodeRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ShrinkNodeResponse
     */
    public function shrinkNodeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/shrink',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ShrinkNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string          $instanceId
     * @param StartApmRequest $request
     *
     * @return StartApmResponse
     */
    public function startApm($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startApmWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string          $instanceId
     * @param StartApmRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return StartApmResponse
     */
    public function startApmWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId = OpenApiUtilClient::getEncodeParam($instanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'StartApm',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/apm/' . $instanceId . '/actions/start',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $ResId
     * @param StartCollectorRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return StartCollectorResponse
     */
    public function startCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ResId = OpenApiUtilClient::getEncodeParam($ResId);
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
            'action'      => 'StartCollector',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . $ResId . '/actions/start',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string         $instanceId
     * @param StopApmRequest $request
     *
     * @return StopApmResponse
     */
    public function stopApm($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopApmWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string         $instanceId
     * @param StopApmRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopApmResponse
     */
    public function stopApmWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId = OpenApiUtilClient::getEncodeParam($instanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'StopApm',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/apm/' . $instanceId . '/actions/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string               $ResId
     * @param StopCollectorRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return StopCollectorResponse
     */
    public function stopCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ResId = OpenApiUtilClient::getEncodeParam($ResId);
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
            'action'      => 'StopCollector',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/collectors/' . $ResId . '/actions/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string               $InstanceId
     * @param StopPipelinesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return StopPipelinesResponse
     */
    public function stopPipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/pipelines/action/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
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
     * @param string              $InstanceId
     * @param TransferNodeRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TransferNodeResponse
     */
    public function transferNodeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/transfer',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TransferNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $InstanceId
     * @param TriggerNetworkRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return TriggerNetworkResponse
     */
    public function triggerNetworkWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/network-trigger',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TriggerNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                       $InstanceId
     * @param UninstallKibanaPluginRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UninstallKibanaPluginResponse
     */
    public function uninstallKibanaPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/kibana-plugins/actions/uninstall',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UninstallKibanaPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                         $InstanceId
     * @param UninstallLogstashPluginRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UninstallLogstashPluginResponse
     */
    public function uninstallLogstashPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/plugins/actions/uninstall',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UninstallLogstashPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $InstanceId
     * @param UninstallPluginRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UninstallPluginResponse
     */
    public function uninstallPluginWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/plugins/actions/uninstall',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UninstallPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UntagResourcesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
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
     * @param string                     $InstanceId
     * @param UpdateAdminPasswordRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateAdminPasswordResponse
     */
    public function updateAdminPasswordWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateAdminPassword',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/admin-pwd',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAdminPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                       $InstanceId
     * @param UpdateAdvancedSettingRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAdvancedSettingResponse
     */
    public function updateAdvancedSettingWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/update-advanced-setting',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAdvancedSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $InstanceId
     * @param UpdateAliwsDictRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAliwsDictResponse
     */
    public function updateAliwsDictWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/aliws-dict',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAliwsDictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string           $instanceId
     * @param UpdateApmRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateApmResponse
     */
    public function updateApmWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $instanceId = OpenApiUtilClient::getEncodeParam($instanceId);
        $body       = [];
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
            'pathname'    => '/openapi/apm/' . $instanceId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateApmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $InstanceId
     * @param UpdateBlackIpsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateBlackIpsResponse
     */
    public function updateBlackIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->esIPBlacklist)) {
            $body['esIPBlacklist'] = $request->esIPBlacklist;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateBlackIps',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/black-ips',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBlackIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $ResId
     * @param UpdateCollectorRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateCollectorResponse
     */
    public function updateCollectorWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ResId = OpenApiUtilClient::getEncodeParam($ResId);
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
            'pathname'    => '/openapi/collectors/' . $ResId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateCollectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $ResId
     * @param UpdateCollectorNameRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateCollectorNameResponse
     */
    public function updateCollectorNameWithOptions($ResId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ResId = OpenApiUtilClient::getEncodeParam($ResId);
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
            'pathname'    => '/openapi/collectors/' . $ResId . '/actions/rename',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateCollectorNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $name       = OpenApiUtilClient::getEncodeParam($name);
        $body       = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/component-index/' . $name . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateComponentIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                   $InstanceId
     * @param UpdateDescriptionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDescriptionResponse
     */
    public function updateDescriptionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/description',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                         $InstanceId
     * @param UpdateDiagnosisSettingsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateDiagnosisSettingsResponse
     */
    public function updateDiagnosisSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/diagnosis/instances/' . $InstanceId . '/settings',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDiagnosisSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string            $InstanceId
     * @param UpdateDictRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateDictResponse
     */
    public function updateDictWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/dict',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                       $InstanceId
     * @param UpdateDynamicSettingsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDynamicSettingsResponse
     */
    public function updateDynamicSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/dynamic-settings',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDynamicSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $InstanceId
     * @param UpdateExtendConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateExtendConfigResponse
     */
    public function updateExtendConfigWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/extend-configs/actions/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateExtendConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                   $InstanceId
     * @param UpdateExtendfilesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateExtendfilesResponse
     */
    public function updateExtendfilesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/extendfiles',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateExtendfilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                  $InstanceId
     * @param UpdateHotIkDictsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateHotIkDictsResponse
     */
    public function updateHotIkDictsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/ik-hot-dict',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateHotIkDictsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $PolicyName = OpenApiUtilClient::getEncodeParam($PolicyName);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/ilm-policies/' . $PolicyName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateILMPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $InstanceId    = OpenApiUtilClient::getEncodeParam($InstanceId);
        $IndexTemplate = OpenApiUtilClient::getEncodeParam($IndexTemplate);
        $query         = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/index-templates/' . $IndexTemplate . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateIndexTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $InstanceId
     * @param UpdateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->orderActionType)) {
            $query['orderActionType'] = $request->orderActionType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateInstance',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                          $InstanceId
     * @param UpdateInstanceChargeTypeRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateInstanceChargeTypeResponse
     */
    public function updateInstanceChargeTypeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/convert-pay-type',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                        $InstanceId
     * @param UpdateInstanceSettingsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateInstanceSettingsResponse
     */
    public function updateInstanceSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/instance-settings',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                      $InstanceId
     * @param UpdateKibanaSettingsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateKibanaSettingsResponse
     */
    public function updateKibanaSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/update-kibana-settings',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateKibanaSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                      $InstanceId
     * @param UpdateKibanaWhiteIpsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateKibanaWhiteIpsResponse
     */
    public function updateKibanaWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'action'      => 'UpdateKibanaWhiteIps',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/kibana-white-ips',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateKibanaWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $InstanceId
     * @param UpdateLogstashRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateLogstashResponse
     */
    public function updateLogstashWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateLogstash',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLogstashResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                          $InstanceId
     * @param UpdateLogstashChargeTypeRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateLogstashChargeTypeResponse
     */
    public function updateLogstashChargeTypeWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/actions/convert-pay-type',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLogstashChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                           $InstanceId
     * @param UpdateLogstashDescriptionRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateLogstashDescriptionResponse
     */
    public function updateLogstashDescriptionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateLogstashDescription',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/description',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLogstashDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                        $InstanceId
     * @param UpdateLogstashSettingsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateLogstashSettingsResponse
     */
    public function updateLogstashSettingsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/instance-settings',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLogstashSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                                $InstanceId
     * @param UpdatePipelineManagementConfigRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdatePipelineManagementConfigResponse
     */
    public function updatePipelineManagementConfigWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdatePipelineManagementConfig',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/pipeline-management-config',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelineManagementConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $InstanceId
     * @param UpdatePipelinesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdatePipelinesResponse
     */
    public function updatePipelinesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/pipelines',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                              $InstanceId
     * @param UpdatePrivateNetworkWhiteIpsRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdatePrivateNetworkWhiteIpsResponse
     */
    public function updatePrivateNetworkWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/private-network-white-ips',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePrivateNetworkWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $InstanceId
     * @param UpdatePublicNetworkRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdatePublicNetworkResponse
     */
    public function updatePublicNetworkWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/public-network',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePublicNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                      $InstanceId
     * @param UpdatePublicWhiteIpsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdatePublicWhiteIpsResponse
     */
    public function updatePublicWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/public-white-ips',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePublicWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                       $InstanceId
     * @param UpdateReadWritePolicyRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateReadWritePolicyResponse
     */
    public function updateReadWritePolicyWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/update-read-write-policy',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateReadWritePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                       $InstanceId
     * @param UpdateSnapshotSettingRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateSnapshotSettingResponse
     */
    public function updateSnapshotSettingWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateSnapshotSetting',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances/' . $InstanceId . '/snapshot-setting',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSnapshotSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $InstanceId
     * @param UpdateSynonymsDictsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateSynonymsDictsResponse
     */
    public function updateSynonymsDictsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/synonymsDict',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSynonymsDictsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $InstanceId   = OpenApiUtilClient::getEncodeParam($InstanceId);
        $TemplateName = OpenApiUtilClient::getEncodeParam($TemplateName);
        $query        = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/templates/' . $TemplateName . '',
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
     * @param string                $InstanceId
     * @param UpdateWhiteIpsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateWhiteIpsResponse
     */
    public function updateWhiteIpsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/white-ips',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWhiteIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                          $InstanceId
     * @param UpdateXpackMonitorConfigRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateXpackMonitorConfigResponse
     */
    public function updateXpackMonitorConfigWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateXpackMonitorConfig',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/xpack-monitor-config',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateXpackMonitorConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                      $InstanceId
     * @param UpgradeEngineVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpgradeEngineVersionResponse
     */
    public function upgradeEngineVersionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/actions/upgrade-version',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeEngineVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $InstanceId
     * @param ValidateConnectionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ValidateConnectionResponse
     */
    public function validateConnectionWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/logstashes/' . $InstanceId . '/validate-connection',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ValidateConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $InstanceId
     * @param ValidateShrinkNodesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ValidateShrinkNodesResponse
     */
    public function validateShrinkNodesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/validate-shrink-nodes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ValidateShrinkNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ValidateSlrPermissionRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ValidateSlrPermissionResponse
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
            'body'    => $request->body,
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
     * @param string                           $InstanceId
     * @param ValidateTransferableNodesRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ValidateTransferableNodesResponse
     */
    public function validateTransferableNodesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'pathname'    => '/openapi/instances/' . $InstanceId . '/validate-transfer-nodes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ValidateTransferableNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

    /**
     * @param CreateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
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
            'action'      => 'createInstance',
            'version'     => '2017-06-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
