<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ActivateZonesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ActivateZonesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\AddConnectableClusterRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\AddConnectableClusterResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\AddSnapshotRepoResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CancelDeletionRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CancelDeletionResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CancelLogstashDeletionRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CancelLogstashDeletionResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CancelTaskRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CancelTaskResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CloseDiagnosisRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CloseDiagnosisResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CloseHttpsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CloseHttpsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CloseManagedIndexRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CloseManagedIndexResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateCollectorRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateCollectorResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteConnectedClusterRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteConnectedClusterResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDataStreamRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDataStreamResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDataTaskRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DeleteDataTaskResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeConnectableClustersRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeConnectableClustersResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnosisSettingsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnosisSettingsResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EstimatedLogstashRestartTimeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EstimatedLogstashRestartTimeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EstimatedRestartTimeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EstimatedRestartTimeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetClusterDataInformationResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetElastictaskResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonGrafanaAlertsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonGrafanaDashboardsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonMonitorDataResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InstallUserPluginsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InterruptElasticsearchTaskRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InterruptElasticsearchTaskResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InterruptLogstashTaskRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\InterruptLogstashTaskResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAckClustersRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAckClustersResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAckNamespacesRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAckNamespacesResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAllNodeRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAllNodeResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAlternativeSnapshotReposRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAlternativeSnapshotReposResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListApmRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListApmResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAvailableEsInstanceIdsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListCollectorsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListCollectorsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListConnectedClustersResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataStreamsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataStreamsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataTasksResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDefaultCollectorConfigurationsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDefaultCollectorConfigurationsResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RpcListInstanceRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RpcListInstanceResponse;
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
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateDescriptionRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateDescriptionResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateDiagnosisSettingsRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateDiagnosisSettingsResponse;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateDictRequest;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateDictResponse;
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
use Darabonba\OpenApi\OpenApiClient;

class Elasticsearch extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'elasticsearch.aliyuncs.com',
            'cn-beijing-finance-1'        => 'elasticsearch.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'elasticsearch.aliyuncs.com',
            'cn-beijing-gov-1'            => 'elasticsearch.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'elasticsearch.aliyuncs.com',
            'cn-chengdu'                  => 'elasticsearch.aliyuncs.com',
            'cn-edge-1'                   => 'elasticsearch.aliyuncs.com',
            'cn-fujian'                   => 'elasticsearch.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'elasticsearch.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'elasticsearch.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'elasticsearch.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'elasticsearch.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'elasticsearch.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'elasticsearch.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'elasticsearch.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'elasticsearch.aliyuncs.com',
            'cn-huhehaote'                => 'elasticsearch.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'elasticsearch.aliyuncs.com',
            'cn-qingdao-nebula'           => 'elasticsearch.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'elasticsearch.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'elasticsearch.aliyuncs.com',
            'cn-shanghai-inner'           => 'elasticsearch.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'elasticsearch.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'elasticsearch.aliyuncs.com',
            'cn-shenzhen-inner'           => 'elasticsearch.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'elasticsearch.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'elasticsearch.aliyuncs.com',
            'cn-wuhan'                    => 'elasticsearch.aliyuncs.com',
            'cn-wulanchabu'               => 'elasticsearch.aliyuncs.com',
            'cn-yushanfang'               => 'elasticsearch.aliyuncs.com',
            'cn-zhangbei'                 => 'elasticsearch.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'elasticsearch.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'elasticsearch.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'elasticsearch.aliyuncs.com',
            'eu-west-1-oxs'               => 'elasticsearch.aliyuncs.com',
            'me-east-1'                   => 'elasticsearch.aliyuncs.com',
            'rus-west-1-pop'              => 'elasticsearch.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
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
        if (!Utils::isUnset($request->bucketName)) {
            @$query['bucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->key)) {
            @$query['key'] = $request->key;
        }
        if (!Utils::isUnset($request->analyzerType)) {
            @$query['analyzerType'] = $request->analyzerType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDictInformationResponse::fromMap($this->doROARequest('ListDictInformation', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/dict/_info', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->resourceIds)) {
            @$query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            @$query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKeys)) {
            @$query['TagKeys'] = $request->tagKeys;
        }
        if (!Utils::isUnset($request->all)) {
            @$query['All'] = $request->all;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UntagResourcesResponse::fromMap($this->doROARequest('UntagResources', '2017-06-13', 'HTTPS', 'DELETE', 'AK', '/openapi/tags', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return InstallUserPluginsResponse
     */
    public function installUserPlugins($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->installUserPluginsWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return InstallUserPluginsResponse
     */
    public function installUserPluginsWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return InstallUserPluginsResponse::fromMap($this->doROARequest('InstallUserPlugins', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/plugins/user/actions/install', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->description)) {
            @$query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            @$query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->esVersion)) {
            @$query['esVersion'] = $request->esVersion;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            @$query['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->vpcId)) {
            @$query['vpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            @$query['zoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->paymentType)) {
            @$query['paymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->instanceCategory)) {
            @$query['instanceCategory'] = $request->instanceCategory;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListInstanceResponse::fromMap($this->doROARequest('ListInstance', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances', 'json', $req, $runtime));
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
            @$query['alreadySetItems'] = $request->alreadySetItems;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeConnectableClustersResponse::fromMap($this->doROARequest('DescribeConnectableClusters', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/connectable-clusters', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateLogstashChargeTypeResponse::fromMap($this->doROARequest('UpdateLogstashChargeType', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/actions/convert-pay-type', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateXpackMonitorConfigResponse::fromMap($this->doROARequest('UpdateXpackMonitorConfig', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/xpack-monitor-config', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UninstallLogstashPluginResponse::fromMap($this->doROARequest('UninstallLogstashPlugin', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/plugins/actions/uninstall', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateIndexTemplateResponse::fromMap($this->doROARequest('UpdateIndexTemplate', '2017-06-13', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '/index-templates/' . $IndexTemplate . '', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->nodeType)) {
            @$body['nodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->networkType)) {
            @$body['networkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            @$body['modifyMode'] = $request->modifyMode;
        }
        if (!Utils::isUnset($request->whiteIpList)) {
            @$body['whiteIpList'] = $request->whiteIpList;
        }
        if (!Utils::isUnset($request->whiteIpGroup)) {
            @$body['whiteIpGroup'] = $request->whiteIpGroup;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return ModifyWhiteIpsResponse::fromMap($this->doROARequestWithForm('ModifyWhiteIps', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/modify-white-ips', 'json', $req, $runtime));
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
            @$query['all'] = $request->all;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->isManaged)) {
            @$query['isManaged'] = $request->isManaged;
        }
        if (!Utils::isUnset($request->isOpenstore)) {
            @$query['isOpenstore'] = $request->isOpenstore;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListInstanceIndicesResponse::fromMap($this->doROARequest('ListInstanceIndices', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/indices', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RenewLogstashResponse::fromMap($this->doROARequest('RenewLogstash', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/actions/renew', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartApmResponse
     */
    public function startApmWithOptions($instanceId, $headers, $runtime)
    {
        $instanceId = OpenApiUtilClient::getEncodeParam($instanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return StartApmResponse::fromMap($this->doROARequest('StartApm', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/apm/' . $instanceId . '/start', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RestartCollectorResponse::fromMap($this->doROARequest('RestartCollector', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/collectors/' . $ResId . '/actions/restart', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InstallKibanaSystemPluginResponse::fromMap($this->doROARequest('InstallKibanaSystemPlugin', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/kibana-plugins/system/actions/install', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeInstanceResponse::fromMap($this->doROARequest('DescribeInstance', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return StopPipelinesResponse::fromMap($this->doROARequest('StopPipelines', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/pipelines/action/stop', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CloseManagedIndexResponse::fromMap($this->doROARequest('CloseManagedIndex', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/indices/' . $Index . '/close-managed', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InstallLogstashSystemPluginResponse::fromMap($this->doROARequest('InstallLogstashSystemPlugin', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/plugins/system/actions/install', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateInstanceChargeTypeResponse::fromMap($this->doROARequest('UpdateInstanceChargeType', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/convert-pay-type', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdatePipelineManagementConfigResponse::fromMap($this->doROARequest('UpdatePipelineManagementConfig', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/pipeline-management-config', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->nodeType)) {
            @$query['nodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->count)) {
            @$query['count'] = $request->count;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetTransferableNodesResponse::fromMap($this->doROARequest('GetTransferableNodes', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/transferable-nodes', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListAvailableEsInstanceIdsResponse
     */
    public function listAvailableEsInstanceIdsWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListAvailableEsInstanceIdsResponse::fromMap($this->doROARequest('ListAvailableEsInstanceIds', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/logstashes/' . $InstanceId . '/available-elasticsearch-for-centralized-management', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetElastictaskResponse
     */
    public function getElastictaskWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetElastictaskResponse::fromMap($this->doROARequest('GetElastictask', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/elastic-task', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            @$query['modifyMode'] = $request->modifyMode;
        }
        $body = [];
        if (!Utils::isUnset($request->esIPWhitelist)) {
            @$body['esIPWhitelist'] = $request->esIPWhitelist;
        }
        if (!Utils::isUnset($request->whiteIpGroup)) {
            @$body['whiteIpGroup'] = $request->whiteIpGroup;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateWhiteIpsResponse::fromMap($this->doROARequestWithForm('UpdateWhiteIps', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/white-ips', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->taskType)) {
            @$query['taskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CancelTaskResponse::fromMap($this->doROARequest('CancelTask', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/cancel-task', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return UpdateSnapshotSettingResponse
     */
    public function updateSnapshotSetting($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSnapshotSettingWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateSnapshotSettingResponse
     */
    public function updateSnapshotSettingWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return UpdateSnapshotSettingResponse::fromMap($this->doROARequest('UpdateSnapshotSetting', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/snapshot-setting', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateLogstashDescriptionResponse::fromMap($this->doROARequest('UpdateLogstashDescription', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/description', 'json', $req, $runtime));
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
            @$query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return EstimatedLogstashRestartTimeResponse::fromMap($this->doROARequest('EstimatedLogstashRestartTime', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/estimated-time/restart-time', 'json', $req, $runtime));
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
            @$query['activeOnly'] = $request->activeOnly;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListShardRecoveriesResponse::fromMap($this->doROARequest('ListShardRecoveries', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/cat-recovery', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetOpenStoreUsageResponse
     */
    public function getOpenStoreUsageWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetOpenStoreUsageResponse::fromMap($this->doROARequest('GetOpenStoreUsage', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/openstore/usage', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RolloverDataStreamResponse::fromMap($this->doROARequest('RolloverDataStream', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/data-streams/' . $DataStream . '/rollover', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteCollectorResponse::fromMap($this->doROARequest('DeleteCollector', '2017-06-13', 'HTTPS', 'DELETE', 'AK', '/openapi/collectors/' . $ResId . '', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->type)) {
            @$query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->query)) {
            @$query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->beginTime)) {
            @$query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListLogstashLogResponse::fromMap($this->doROARequest('ListLogstashLog', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/logstashes/' . $InstanceId . '/search-log', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListConnectedClustersResponse
     */
    public function listConnectedClustersWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListConnectedClustersResponse::fromMap($this->doROARequest('ListConnectedClusters', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/connected-clusters', 'json', $req, $runtime));
    }

    /**
     * @return TagResourcesResponse
     */
    public function tagResources()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return TagResourcesResponse::fromMap($this->doROARequest('TagResources', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/tags', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSnapshotReposByInstanceIdResponse
     */
    public function listSnapshotReposByInstanceIdWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListSnapshotReposByInstanceIdResponse::fromMap($this->doROARequest('ListSnapshotReposByInstanceId', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/snapshot-repos', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeXpackMonitorConfigResponse
     */
    public function describeXpackMonitorConfigWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeXpackMonitorConfigResponse::fromMap($this->doROARequest('DescribeXpackMonitorConfig', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/logstashes/' . $InstanceId . '/xpack-monitor-config', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopApmResponse
     */
    public function stopApmWithOptions($instanceId, $headers, $runtime)
    {
        $instanceId = OpenApiUtilClient::getEncodeParam($instanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return StopApmResponse::fromMap($this->doROARequest('StopApm', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/apm/' . $instanceId . '/stop', 'json', $req, $runtime));
    }

    /**
     * @param string $ProjectId
     *
     * @return GetEmonGrafanaDashboardsResponse
     */
    public function getEmonGrafanaDashboards($ProjectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmonGrafanaDashboardsWithOptions($ProjectId, $headers, $runtime);
    }

    /**
     * @param string         $ProjectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetEmonGrafanaDashboardsResponse
     */
    public function getEmonGrafanaDashboardsWithOptions($ProjectId, $headers, $runtime)
    {
        $ProjectId = OpenApiUtilClient::getEncodeParam($ProjectId);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetEmonGrafanaDashboardsResponse::fromMap($this->doROARequest('GetEmonGrafanaDashboards', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/emon/projects/' . $ProjectId . '/grafana/proxy/api/search', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->lang)) {
            @$query['lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->trigger)) {
            @$query['trigger'] = $request->trigger;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDiagnoseReportIdsResponse::fromMap($this->doROARequest('ListDiagnoseReportIds', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/diagnosis/instances/' . $InstanceId . '/report-ids', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateLogstashResponse::fromMap($this->doROARequest('CreateLogstash', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListVpcEndpointsResponse::fromMap($this->doROARequest('ListVpcEndpoints', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/vpc-endpoints', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CancelDeletionResponse::fromMap($this->doROARequest('CancelDeletion', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/cancel-deletion', 'json', $req, $runtime));
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
            @$query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            @$query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->esInstanceId)) {
            @$query['esInstanceId'] = $request->esInstanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListApmResponse::fromMap($this->doROARequest('ListApm', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/apm', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CancelLogstashDeletionResponse::fromMap($this->doROARequest('CancelLogstashDeletion', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/actions/cancel-deletion', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteVpcEndpointResponse::fromMap($this->doROARequest('DeleteVpcEndpoint', '2017-06-13', 'HTTPS', 'DELETE', 'AK', '/openapi/instances/' . $InstanceId . '/vpc-endpoints/' . $EndpointId . '', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateSynonymsDictsResponse::fromMap($this->doROARequest('UpdateSynonymsDicts', '2017-06-13', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '/synonymsDict', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ActivateZonesResponse::fromMap($this->doROARequest('ActivateZones', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/recover-zones', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateReadWritePolicyResponse::fromMap($this->doROARequest('UpdateReadWritePolicy', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/update-read-write-policy', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->nodeType)) {
            @$query['nodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->count)) {
            @$query['count'] = $request->count;
        }
        if (!Utils::isUnset($request->ignoreStatus)) {
            @$query['ignoreStatus'] = $request->ignoreStatus;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetSuggestShrinkableNodesResponse::fromMap($this->doROARequest('GetSuggestShrinkableNodes', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/suggest-shrinkable-nodes', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->nodeType)) {
            @$query['nodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return TransferNodeResponse::fromMap($this->doROARequest('TransferNode', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/transfer', 'json', $req, $runtime));
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
            @$query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->source)) {
            @$query['source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListPluginsResponse::fromMap($this->doROARequest('ListPlugins', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/plugins', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ModifyElastictaskResponse
     */
    public function modifyElastictask($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyElastictaskWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyElastictaskResponse
     */
    public function modifyElastictaskWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ModifyElastictaskResponse::fromMap($this->doROARequest('ModifyElastictask', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/elastic-task', 'json', $req, $runtime));
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
            @$query['resType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resVersion)) {
            @$query['resVersion'] = $request->resVersion;
        }
        if (!Utils::isUnset($request->sourceType)) {
            @$query['sourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDefaultCollectorConfigurationsResponse::fromMap($this->doROARequest('ListDefaultCollectorConfigurations', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/beats/default-configurations', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateDataStreamResponse::fromMap($this->doROARequest('CreateDataStream', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/data-streams', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateCollectorNameResponse::fromMap($this->doROARequest('UpdateCollectorName', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/collectors/' . $ResId . '/actions/rename', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateDataTasksResponse::fromMap($this->doROARequest('CreateDataTasks', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/data-task', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return AddSnapshotRepoResponse
     */
    public function addSnapshotRepo($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addSnapshotRepoWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AddSnapshotRepoResponse
     */
    public function addSnapshotRepoWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return AddSnapshotRepoResponse::fromMap($this->doROARequest('AddSnapshotRepo', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/snapshot-repos', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplatesWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeTemplatesResponse::fromMap($this->doROARequest('DescribeTemplates', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/templates', 'json', $req, $runtime));
    }

    /**
     * @return GetClusterDataInformationResponse
     */
    public function getClusterDataInformation()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterDataInformationWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetClusterDataInformationResponse
     */
    public function getClusterDataInformationWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetClusterDataInformationResponse::fromMap($this->doROARequest('GetClusterDataInformation', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/cluster/data-information', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ModifyDeployMachineResponse::fromMap($this->doROARequest('ModifyDeployMachine', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/collectors/' . $ResId . '/actions/modify-deploy-machines', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteDataStreamResponse::fromMap($this->doROARequest('DeleteDataStream', '2017-06-13', 'HTTPS', 'DELETE', 'AK', '/openapi/instances/' . $InstanceId . '/data-streams/' . $DataStream . '', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateHotIkDictsResponse::fromMap($this->doROARequest('UpdateHotIkDicts', '2017-06-13', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '/ik-hot-dict', 'json', $req, $runtime));
    }

    /**
     * @param RpcListInstanceRequest $request
     *
     * @return RpcListInstanceResponse
     */
    public function rpcListInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rpcListInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RpcListInstanceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RpcListInstanceResponse
     */
    public function rpcListInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->esVersion)) {
            @$query['esVersion'] = $request->esVersion;
        }
        if (!Utils::isUnset($request->vpcId)) {
            @$query['vpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            @$query['vswitchId'] = $request->vswitchId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RpcListInstanceResponse::fromMap($this->doROARequest('RpcListInstance', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/rpc', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InitializeOperationRoleResponse::fromMap($this->doROARequest('InitializeOperationRole', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/user/slr', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            @$query['dryRun'] = $request->dryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->version)) {
            @$body['version'] = $request->version;
        }
        if (!Utils::isUnset($request->type)) {
            @$body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpgradeEngineVersionResponse::fromMap($this->doROARequestWithForm('UpgradeEngineVersion', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/upgrade-version', 'json', $req, $runtime));
    }

    /**
     * @param string $ProjectId
     *
     * @return GetEmonMonitorDataResponse
     */
    public function getEmonMonitorData($ProjectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmonMonitorDataWithOptions($ProjectId, $headers, $runtime);
    }

    /**
     * @param string         $ProjectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetEmonMonitorDataResponse
     */
    public function getEmonMonitorDataWithOptions($ProjectId, $headers, $runtime)
    {
        $ProjectId = OpenApiUtilClient::getEncodeParam($ProjectId);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetEmonMonitorDataResponse::fromMap($this->doROARequest('GetEmonMonitorData', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/emon/projects/' . $ProjectId . '/metrics/query', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->force)) {
            @$query['force'] = $request->force;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RestartInstanceResponse::fromMap($this->doROARequest('RestartInstance', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/restart', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribePipelineManagementConfigResponse::fromMap($this->doROARequest('DescribePipelineManagementConfig', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/logstashes/' . $InstanceId . '/pipeline-management-config', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ModifyInstanceMaintainTimeResponse::fromMap($this->doROARequest('ModifyInstanceMaintainTime', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/modify-maintaintime', 'json', $req, $runtime));
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
            @$query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return MigrateToOtherZoneResponse::fromMap($this->doROARequest('MigrateToOtherZone', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/migrate-zones', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeApmResponse
     */
    public function describeApmWithOptions($instanceId, $headers, $runtime)
    {
        $instanceId = OpenApiUtilClient::getEncodeParam($instanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeApmResponse::fromMap($this->doROARequest('DescribeApm', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/apm/' . $instanceId . '', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAckOperatorResponse
     */
    public function describeAckOperatorWithOptions($ClusterId, $headers, $runtime)
    {
        $ClusterId = OpenApiUtilClient::getEncodeParam($ClusterId);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeAckOperatorResponse::fromMap($this->doROARequest('DescribeAckOperator', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/ack-clusters/' . $ClusterId . '/operator', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateLogstashSettingsResponse::fromMap($this->doROARequest('UpdateLogstashSettings', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/instance-settings', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return OpenHttpsResponse::fromMap($this->doROARequest('OpenHttps', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/open-https', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateLogstashResponse::fromMap($this->doROARequest('UpdateLogstash', '2017-06-13', 'HTTPS', 'PUT', 'AK', '/openapi/logstashes/' . $InstanceId . '', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return StartCollectorResponse::fromMap($this->doROARequest('StartCollector', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/collectors/' . $ResId . '/actions/start', 'json', $req, $runtime));
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
            @$query['extended'] = $request->extended;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListAllNodeResponse::fromMap($this->doROARequest('ListAllNode', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/nodes', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDataTasksResponse
     */
    public function listDataTasksWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListDataTasksResponse::fromMap($this->doROARequest('ListDataTasks', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/data-task', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->description)) {
            @$query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            @$query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->version)) {
            @$query['version'] = $request->version;
        }
        if (!Utils::isUnset($request->ownerId)) {
            @$query['ownerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListLogstashResponse::fromMap($this->doROARequest('ListLogstash', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/logstashes', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return MoveResourceGroupResponse::fromMap($this->doROARequest('MoveResourceGroup', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/resourcegroup', 'json', $req, $runtime));
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
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->vpcId)) {
            @$query['vpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListAckClustersResponse::fromMap($this->doROARequest('ListAckClusters', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/ack-clusters', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UninstallKibanaPluginResponse::fromMap($this->doROARequest('UninstallKibanaPlugin', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/kibana-plugins/actions/uninstall', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateCollectorResponse::fromMap($this->doROARequest('UpdateCollector', '2017-06-13', 'HTTPS', 'PUT', 'AK', '/openapi/collectors/' . $ResId . '', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->esIPBlacklist)) {
            @$body['esIPBlacklist'] = $request->esIPBlacklist;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateBlackIpsResponse::fromMap($this->doROARequestWithForm('UpdateBlackIps', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/black-ips', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RunPipelinesResponse::fromMap($this->doROARequest('RunPipelines', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/pipelines/action/run', 'json', $req, $runtime));
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
            @$query['zoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetRegionConfigurationResponse::fromMap($this->doROARequest('GetRegionConfiguration', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/region', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateDictResponse::fromMap($this->doROARequest('UpdateDict', '2017-06-13', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '/dict', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->ecsInstanceIds)) {
            @$query['ecsInstanceIds'] = $request->ecsInstanceIds;
        }
        if (!Utils::isUnset($request->ecsInstanceName)) {
            @$query['ecsInstanceName'] = $request->ecsInstanceName;
        }
        if (!Utils::isUnset($request->tags)) {
            @$query['tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListNodesResponse::fromMap($this->doROARequest('ListNodes', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/collectors/' . $ResId . '/nodes', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->nodeType)) {
            @$query['nodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->ignoreStatus)) {
            @$query['ignoreStatus'] = $request->ignoreStatus;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ValidateShrinkNodesResponse::fromMap($this->doROARequest('ValidateShrinkNodes', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/validate-shrink-nodes', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            @$query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return OpenDiagnosisResponse::fromMap($this->doROARequest('OpenDiagnosis', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/diagnosis/instances/' . $InstanceId . '/actions/open-diagnosis', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            @$query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CloseDiagnosisResponse::fromMap($this->doROARequest('CloseDiagnosis', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/diagnosis/instances/' . $InstanceId . '/actions/close-diagnosis', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeLogstashResponse
     */
    public function describeLogstashWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeLogstashResponse::fromMap($this->doROARequest('DescribeLogstash', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/logstashes/' . $InstanceId . '', 'json', $req, $runtime));
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
            @$query['isManaged'] = $request->isManaged;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDataStreamsResponse::fromMap($this->doROARequest('ListDataStreams', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/data-streams', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->lang)) {
            @$query['lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->detail)) {
            @$query['detail'] = $request->detail;
        }
        if (!Utils::isUnset($request->trigger)) {
            @$query['trigger'] = $request->trigger;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDiagnoseReportResponse::fromMap($this->doROARequest('ListDiagnoseReport', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/diagnosis/instances/' . $InstanceId . '/reports', 'json', $req, $runtime));
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
            @$query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->source)) {
            @$query['source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListLogstashPluginsResponse::fromMap($this->doROARequest('ListLogstashPlugins', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/logstashes/' . $InstanceId . '/plugins', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            @$query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateDiagnosisSettingsResponse::fromMap($this->doROARequest('UpdateDiagnosisSettings', '2017-06-13', 'HTTPS', 'PUT', 'AK', '/openapi/diagnosis/instances/' . $InstanceId . '/settings', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeKibanaSettingsResponse
     */
    public function describeKibanaSettingsWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeKibanaSettingsResponse::fromMap($this->doROARequest('DescribeKibanaSettings', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/kibana-settings', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RenewInstanceResponse::fromMap($this->doROARequest('RenewInstance', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/renew', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InstallAckOperatorResponse::fromMap($this->doROARequest('InstallAckOperator', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/ack-clusters/' . $ClusterId . '/operator', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->pipelineIds)) {
            @$query['pipelineIds'] = $request->pipelineIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeletePipelinesResponse::fromMap($this->doROARequest('DeletePipelines', '2017-06-13', 'HTTPS', 'DELETE', 'AK', '/openapi/logstashes/' . $InstanceId . '/pipelines', 'json', $req, $runtime));
    }

    /**
     * @param string $ProjectId
     * @param string $AlarmGroupId
     *
     * @return PostEmonTryAlarmRuleResponse
     */
    public function postEmonTryAlarmRule($ProjectId, $AlarmGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->postEmonTryAlarmRuleWithOptions($ProjectId, $AlarmGroupId, $headers, $runtime);
    }

    /**
     * @param string         $ProjectId
     * @param string         $AlarmGroupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PostEmonTryAlarmRuleResponse
     */
    public function postEmonTryAlarmRuleWithOptions($ProjectId, $AlarmGroupId, $headers, $runtime)
    {
        $ProjectId    = OpenApiUtilClient::getEncodeParam($ProjectId);
        $AlarmGroupId = OpenApiUtilClient::getEncodeParam($AlarmGroupId);
        $req          = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return PostEmonTryAlarmRuleResponse::fromMap($this->doROARequest('PostEmonTryAlarmRule', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/emon/projects/' . $ProjectId . '/alarm-groups/' . $AlarmGroupId . '/alarm-rules/_test', 'json', $req, $runtime));
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
        $query      = [];
        if (!Utils::isUnset($request->outputES)) {
            @$query['outputES'] = $request->outputES;
        }
        if (!Utils::isUnset($request->outputESUserName)) {
            @$query['outputESUserName'] = $request->outputESUserName;
        }
        if (!Utils::isUnset($request->outputESPassword)) {
            @$query['outputESPassword'] = $request->outputESPassword;
        }
        if (!Utils::isUnset($request->token)) {
            @$query['token'] = $request->token;
        }
        if (!Utils::isUnset($request->yml)) {
            @$query['yml'] = $request->yml;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateApmResponse::fromMap($this->doROARequest('UpdateApm', '2017-06-13', 'HTTPS', 'PUT', 'AK', '/openapi/apm/' . $instanceId . '', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveApmResponse
     */
    public function removeApmWithOptions($instanceId, $headers, $runtime)
    {
        $instanceId = OpenApiUtilClient::getEncodeParam($instanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return RemoveApmResponse::fromMap($this->doROARequest('RemoveApm', '2017-06-13', 'HTTPS', 'DELETE', 'AK', '/openapi/apm/' . $instanceId . '', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateSnapshotResponse::fromMap($this->doROARequest('CreateSnapshot', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/snapshots', 'json', $req, $runtime));
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
            @$query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeDiagnoseReportResponse::fromMap($this->doROARequest('DescribeDiagnoseReport', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/diagnosis/instances/' . $InstanceId . '/reports/' . $ReportId . '', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListExtendfilesResponse
     */
    public function listExtendfilesWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListExtendfilesResponse::fromMap($this->doROARequest('ListExtendfiles', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/logstashes/' . $InstanceId . '/extendfiles', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateExtendfilesResponse::fromMap($this->doROARequest('UpdateExtendfiles', '2017-06-13', 'HTTPS', 'PUT', 'AK', '/openapi/logstashes/' . $InstanceId . '/extendfiles', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateExtendConfigResponse::fromMap($this->doROARequest('UpdateExtendConfig', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/extend-configs/actions/update', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ListPipelineIdsResponse
     */
    public function listPipelineIds($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineIdsWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListPipelineIdsResponse
     */
    public function listPipelineIdsWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListPipelineIdsResponse::fromMap($this->doROARequest('ListPipelineIds', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/pipeline-ids', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateAdminPasswordResponse::fromMap($this->doROARequest('UpdateAdminPassword', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/admin-pwd', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            @$query['modifyMode'] = $request->modifyMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdatePublicWhiteIpsResponse::fromMap($this->doROARequest('UpdatePublicWhiteIps', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/public-white-ips', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            @$query['modifyMode'] = $request->modifyMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdatePrivateNetworkWhiteIpsResponse::fromMap($this->doROARequest('UpdatePrivateNetworkWhiteIps', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/private-network-white-ips', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateCollectorResponse::fromMap($this->doROARequest('CreateCollector', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/collectors', 'json', $req, $runtime));
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
            @$query['alreadySetItems'] = $request->alreadySetItems;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListAlternativeSnapshotReposResponse::fromMap($this->doROARequest('ListAlternativeSnapshotRepos', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/alternative-snapshot-repos', 'json', $req, $runtime));
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
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListKibanaPluginsResponse::fromMap($this->doROARequest('ListKibanaPlugins', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/kibana-plugins', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateDescriptionResponse::fromMap($this->doROARequestWithForm('UpdateDescription', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/description', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CloseHttpsResponse::fromMap($this->doROARequest('CloseHttps', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/close-https', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateIndexTemplateResponse::fromMap($this->doROARequest('CreateIndexTemplate', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/index-templates', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UninstallPluginResponse::fromMap($this->doROARequest('UninstallPlugin', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/plugins/actions/uninstall', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            @$query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateVpcEndpointResponse::fromMap($this->doROARequest('CreateVpcEndpoint', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/vpc-endpoints', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->rolename)) {
            @$query['rolename'] = $request->rolename;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ValidateSlrPermissionResponse::fromMap($this->doROARequest('ValidateSlrPermission', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/user/servicerolepermission', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->type)) {
            @$query['type'] = $request->type;
        }
        if (!Utils::isUnset($request->query)) {
            @$query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->beginTime)) {
            @$query['beginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListSearchLogResponse::fromMap($this->doROARequest('ListSearchLog', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/search-log', 'json', $req, $runtime));
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
            @$query['nodeType'] = $request->nodeType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ValidateTransferableNodesResponse::fromMap($this->doROARequest('ValidateTransferableNodes', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/validate-transfer-nodes', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeElasticsearchHealthResponse
     */
    public function describeElasticsearchHealthWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeElasticsearchHealthResponse::fromMap($this->doROARequest('DescribeElasticsearchHealth', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/elasticsearch-health', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InterruptElasticsearchTaskResponse::fromMap($this->doROARequest('InterruptElasticsearchTask', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/interrupt', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return StopCollectorResponse::fromMap($this->doROARequest('StopCollector', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/collectors/' . $ResId . '/actions/stop', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->lang)) {
            @$query['lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DiagnoseInstanceResponse::fromMap($this->doROARequest('DiagnoseInstance', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/diagnosis/instances/' . $InstanceId . '/actions/diagnose', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string         $IndexTemplate
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteIndexTemplateResponse
     */
    public function deleteIndexTemplateWithOptions($InstanceId, $IndexTemplate, $headers, $runtime)
    {
        $InstanceId    = OpenApiUtilClient::getEncodeParam($InstanceId);
        $IndexTemplate = OpenApiUtilClient::getEncodeParam($IndexTemplate);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteIndexTemplateResponse::fromMap($this->doROARequest('DeleteIndexTemplate', '2017-06-13', 'HTTPS', 'DELETE', 'AK', '/openapi/instances/' . $InstanceId . '/index-templates/' . $IndexTemplate . '', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InterruptLogstashTaskResponse::fromMap($this->doROARequest('InterruptLogstashTask', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/actions/interrupt', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deleteType)) {
            @$query['deleteType'] = $request->deleteType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteInstanceResponse::fromMap($this->doROARequest('DeleteInstance', '2017-06-13', 'HTTPS', 'DELETE', 'AK', '/openapi/instances/' . $InstanceId . '', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeactivateZonesResponse::fromMap($this->doROARequest('DeactivateZones', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/down-zones', 'json', $req, $runtime));
    }

    /**
     * @param string $ProjectId
     *
     * @return GetEmonGrafanaAlertsResponse
     */
    public function getEmonGrafanaAlerts($ProjectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmonGrafanaAlertsWithOptions($ProjectId, $headers, $runtime);
    }

    /**
     * @param string         $ProjectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetEmonGrafanaAlertsResponse
     */
    public function getEmonGrafanaAlertsWithOptions($ProjectId, $headers, $runtime)
    {
        $ProjectId = OpenApiUtilClient::getEncodeParam($ProjectId);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetEmonGrafanaAlertsResponse::fromMap($this->doROARequest('GetEmonGrafanaAlerts', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/emon/projects/' . $ProjectId . '/grafana/proxy/api/alerts', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ResumeLogstashTaskResponse::fromMap($this->doROARequest('ResumeLogstashTask', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/actions/resume', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->resourceType)) {
            @$query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            @$query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->tags)) {
            @$query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListTagResourcesResponse::fromMap($this->doROARequest('ListTagResources', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/tags', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->ecsInstanceIds)) {
            @$query['ecsInstanceIds'] = $request->ecsInstanceIds;
        }
        if (!Utils::isUnset($request->ecsInstanceName)) {
            @$query['ecsInstanceName'] = $request->ecsInstanceName;
        }
        if (!Utils::isUnset($request->tags)) {
            @$query['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->vpcId)) {
            @$query['vpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListEcsInstancesResponse::fromMap($this->doROARequest('ListEcsInstances', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/ecs', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $ResId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeCollectorResponse
     */
    public function describeCollectorWithOptions($ResId, $headers, $runtime)
    {
        $ResId = OpenApiUtilClient::getEncodeParam($ResId);
        $req   = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeCollectorResponse::fromMap($this->doROARequest('DescribeCollector', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/collectors/' . $ResId . '', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateInstanceSettingsResponse::fromMap($this->doROARequest('UpdateInstanceSettings', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/instance-settings', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateAdvancedSettingResponse::fromMap($this->doROARequest('UpdateAdvancedSetting', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/update-advanced-setting', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->trigger)) {
            @$query['trigger'] = $request->trigger;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreatePipelinesResponse::fromMap($this->doROARequest('CreatePipelines', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/pipelines', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deleteType)) {
            @$query['deleteType'] = $request->deleteType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteLogstashResponse::fromMap($this->doROARequest('DeleteLogstash', '2017-06-13', 'HTTPS', 'DELETE', 'AK', '/openapi/logstashes/' . $InstanceId . '', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->repoPath)) {
            @$query['repoPath'] = $request->repoPath;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteSnapshotRepoResponse::fromMap($this->doROARequest('DeleteSnapshotRepo', '2017-06-13', 'HTTPS', 'DELETE', 'AK', '/openapi/instances/' . $InstanceId . '/snapshot-repos', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateKibanaSettingsResponse::fromMap($this->doROARequest('UpdateKibanaSettings', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/update-kibana-settings', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->nodeType)) {
            @$body['nodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->networkType)) {
            @$body['networkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->actionType)) {
            @$body['actionType'] = $request->actionType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return TriggerNetworkResponse::fromMap($this->doROARequestWithForm('TriggerNetwork', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/network-trigger', 'json', $req, $runtime));
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
            @$query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDiagnoseIndicesResponse::fromMap($this->doROARequest('ListDiagnoseIndices', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/diagnosis/instances/' . $InstanceId . '/indices', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateInstanceResponse::fromMap($this->doROARequest('createInstance', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances', 'json', $req, $runtime));
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
            @$query['analyzerType'] = $request->analyzerType;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDictsResponse::fromMap($this->doROARequest('ListDicts', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/dicts', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ignoreStatus)) {
            @$query['ignoreStatus'] = $request->ignoreStatus;
        }
        if (!Utils::isUnset($request->orderActionType)) {
            @$query['orderActionType'] = $request->orderActionType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateInstanceResponse::fromMap($this->doROARequest('UpdateInstance', '2017-06-13', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateAliwsDictResponse::fromMap($this->doROARequest('UpdateAliwsDict', '2017-06-13', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '/aliws-dict', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->taskId)) {
            @$query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteDataTaskResponse::fromMap($this->doROARequest('DeleteDataTask', '2017-06-13', 'HTTPS', 'DELETE', 'AK', '/openapi/instances/' . $InstanceId . '/data-task', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSnapshotSettingResponse
     */
    public function describeSnapshotSettingWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeSnapshotSettingResponse::fromMap($this->doROARequest('DescribeSnapshotSetting', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/snapshot-setting', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->pipelineId)) {
            @$query['pipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListPipelineResponse::fromMap($this->doROARequest('ListPipeline', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/logstashes/' . $InstanceId . '/pipelines', 'json', $req, $runtime));
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
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListAckNamespacesResponse::fromMap($this->doROARequest('ListAckNamespaces', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/ack-clusters/' . $ClusterId . '/namespaces', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->force)) {
            @$query['force'] = $request->force;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RestartLogstashResponse::fromMap($this->doROARequest('RestartLogstash', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/actions/restart', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return InstallSystemPluginResponse::fromMap($this->doROARequest('InstallSystemPlugin', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/plugins/system/actions/install', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdatePublicNetworkResponse::fromMap($this->doROARequest('UpdatePublicNetwork', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/public-network', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectedInstanceId)) {
            @$query['connectedInstanceId'] = $request->connectedInstanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteConnectedClusterResponse::fromMap($this->doROARequest('DeleteConnectedCluster', '2017-06-13', 'HTTPS', 'DELETE', 'AK', '/openapi/instances/' . $InstanceId . '/connected-clusters', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ResumeElasticsearchTaskResponse::fromMap($this->doROARequest('ResumeElasticsearchTask', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/resume', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->nodeType)) {
            @$query['nodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ignoreStatus)) {
            @$query['ignoreStatus'] = $request->ignoreStatus;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ShrinkNodeResponse::fromMap($this->doROARequest('ShrinkNode', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/shrink', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AddConnectableClusterResponse::fromMap($this->doROARequest('AddConnectableCluster', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/connected-clusters', 'json', $req, $runtime));
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
            @$query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            @$query['modifyMode'] = $request->modifyMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateKibanaWhiteIpsResponse::fromMap($this->doROARequest('UpdateKibanaWhiteIps', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/kibana-white-ips', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ValidateConnectionResponse::fromMap($this->doROARequest('ValidateConnection', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/logstashes/' . $InstanceId . '/validate-connection', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string         $IndexTemplate
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeIndexTemplateResponse
     */
    public function describeIndexTemplateWithOptions($InstanceId, $IndexTemplate, $headers, $runtime)
    {
        $InstanceId    = OpenApiUtilClient::getEncodeParam($InstanceId);
        $IndexTemplate = OpenApiUtilClient::getEncodeParam($IndexTemplate);
        $req           = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeIndexTemplateResponse::fromMap($this->doROARequest('DescribeIndexTemplate', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/index-templates/' . $IndexTemplate . '', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ReinstallCollectorResponse::fromMap($this->doROARequest('ReinstallCollector', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/collectors/' . $ResId . '/actions/reinstall', 'json', $req, $runtime));
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
            @$query['force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return EstimatedRestartTimeResponse::fromMap($this->doROARequest('EstimatedRestartTime', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/estimated-time/restart-time', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->trigger)) {
            @$query['trigger'] = $request->trigger;
        }
        if (!Utils::isUnset($request->clientToken)) {
            @$query['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdatePipelinesResponse::fromMap($this->doROARequest('UpdatePipelines', '2017-06-13', 'HTTPS', 'PUT', 'AK', '/openapi/logstashes/' . $InstanceId . '/pipelines', 'json', $req, $runtime));
    }

    /**
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
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

        return DescribeRegionsResponse::fromMap($this->doROARequest('DescribeRegions', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/regions', 'json', $req, $runtime));
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
            @$query['lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeDiagnosisSettingsResponse::fromMap($this->doROARequest('DescribeDiagnosisSettings', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/diagnosis/instances/' . $InstanceId . '/settings', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateTemplateResponse::fromMap($this->doROARequest('UpdateTemplate', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/templates/' . $TemplateName . '', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string         $PolicyName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteILMPolicyResponse
     */
    public function deleteILMPolicyWithOptions($InstanceId, $PolicyName, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $PolicyName = OpenApiUtilClient::getEncodeParam($PolicyName);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteILMPolicyResponse::fromMap($this->doROARequest('DeleteILMPolicy', '2017-06-13', 'HTTPS', 'DELETE', 'AK', '/openapi/instances/' . $InstanceId . '/ilm-policies/' . $PolicyName . '', 'json', $req, $runtime));
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
            @$query['usageScenario'] = $request->usageScenario;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RecommendTemplatesResponse::fromMap($this->doROARequest('RecommendTemplates', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/recommended-templates', 'json', $req, $runtime));
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
        if (!Utils::isUnset($request->resId)) {
            @$query['resId'] = $request->resId;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->instanceId)) {
            @$query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->sourceType)) {
            @$query['sourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListCollectorsResponse::fromMap($this->doROARequest('ListCollectors', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/collectors', 'json', $req, $runtime));
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
            @$query['indexTemplate'] = $request->indexTemplate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListIndexTemplatesResponse::fromMap($this->doROARequest('ListIndexTemplates', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/index-templates', 'json', $req, $runtime));
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
            @$query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceType)) {
            @$query['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListTagsResponse::fromMap($this->doROARequest('ListTags', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/tags/all-tags', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateILMPolicyResponse::fromMap($this->doROARequest('UpdateILMPolicy', '2017-06-13', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '/ilm-policies/' . $PolicyName . '', 'json', $req, $runtime));
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
            @$query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateILMPolicyResponse::fromMap($this->doROARequest('CreateILMPolicy', '2017-06-13', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/ilm-policies', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string         $PolicyName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeILMPolicyResponse
     */
    public function describeILMPolicyWithOptions($InstanceId, $PolicyName, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $PolicyName = OpenApiUtilClient::getEncodeParam($PolicyName);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeILMPolicyResponse::fromMap($this->doROARequest('DescribeILMPolicy', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/ilm-policies/' . $PolicyName . '', 'json', $req, $runtime));
    }

    /**
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
     * @param string         $InstanceId
     * @param string         $PipelineId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribePipelineResponse
     */
    public function describePipelineWithOptions($InstanceId, $PipelineId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $PipelineId = OpenApiUtilClient::getEncodeParam($PipelineId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribePipelineResponse::fromMap($this->doROARequest('DescribePipeline', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/logstashes/' . $InstanceId . '/pipelines/' . $PipelineId . '', 'json', $req, $runtime));
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
            @$query['policyName'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListILMPoliciesResponse::fromMap($this->doROARequest('ListILMPolicies', '2017-06-13', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/ilm-policies', 'json', $req, $runtime));
    }
}
