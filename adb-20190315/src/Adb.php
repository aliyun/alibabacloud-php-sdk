<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Adb\V20190315\Models\AllocateClusterPublicConnectionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\AllocateClusterPublicConnectionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ApplyAdviceByIdRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ApplyAdviceByIdResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\AttachUserENIRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\AttachUserENIResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\BatchApplyAdviceByIdListRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\BatchApplyAdviceByIdListResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\BindDBResourceGroupWithUserRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\BindDBResourceGroupWithUserResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\BindDBResourcePoolWithUserRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\BindDBResourcePoolWithUserResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\CancelActiveOperationTasksRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\CancelActiveOperationTasksResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\CheckServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\CheckServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateAccountShrinkRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateDBClusterRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateDBClusterResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateDBResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateDBResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateDBResourcePoolRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateDBResourcePoolResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteBackupsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteBackupsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteDBClusterRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteDBClusterResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteDBResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteDBResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteDBResourcePoolRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteDBResourcePoolResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAbnormalPatternDetectionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAbnormalPatternDetectionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeActiveOperationMaintainConfRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeActiveOperationMaintainConfResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeActiveOperationTasksRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeActiveOperationTasksResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAdviceServiceEnabledRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAdviceServiceEnabledResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAllAccountsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAllAccountsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAllDataSourceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAllDataSourceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAppliedAdvicesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAppliedAdvicesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAuditLogConfigRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAuditLogConfigResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAuditLogRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAuditLogRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableAdvicesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableAdvicesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeBadSqlDetectionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeBadSqlDetectionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeColumnsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeColumnsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeComputeResourceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeComputeResourceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeConnectionCountRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeConnectionCountRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeControllerDetectionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeControllerDetectionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAccessWhiteListRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAccessWhiteListResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAttributeRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAttributeResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterHealthStatusRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterHealthStatusResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterNetInfoRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterNetInfoResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterPerformanceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterPerformanceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterResourcePoolPerformanceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterResourcePoolPerformanceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterShardNumberRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterShardNumberResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterSpaceSummaryRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterSpaceSummaryResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClustersRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClustersResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterSSLRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterSSLResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterStatusRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterStatusResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourcePoolRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourcePoolResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisDimensionsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisDimensionsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisMonitorPerformanceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisMonitorPerformanceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisSQLInfoRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisSQLInfoResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisTasksRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisTasksResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDownloadRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDownloadRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeEIURangeRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeEIURangeResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticDailyPlanRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticDailyPlanResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeExcessivePrimaryKeysRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeExcessivePrimaryKeysResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeExecutorDetectionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeExecutorDetectionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeHistoryEventsStatRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeHistoryEventsStatResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeInclinedNodesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeInclinedNodesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeInclinedTablesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeInclinedTablesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKernelVersionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKernelVersionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKmsKeysRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKmsKeysResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoadTasksRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoadTasksRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLogHubAttributeRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLogHubAttributeResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoghubDetailRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoghubDetailResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLogStoreKeysRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLogStoreKeysResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeMaintenanceActionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeMaintenanceActionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeOperatorPermissionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeOperatorPermissionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeOversizeNonPartitionTableInfosRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeOversizeNonPartitionTableInfosResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribePatternPerformanceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribePatternPerformanceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeProcessListRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeProcessListResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRegionsMixedRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRegionsMixedResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeResubmitConfigRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeResubmitConfigResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSchemasRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSchemasResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQAConfigRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQAConfigResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSqlPatternRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSqlPatternResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPatternsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPatternsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanTaskRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanTaskResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSyncAvailableDBClusterListRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSyncAvailableDBClusterListResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSyncJobListRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSyncJobListResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableAccessCountRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableAccessCountResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableDetailRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableDetailResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTablePartitionDiagnoseRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTablePartitionDiagnoseResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTablesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTablesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableStatisticsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableStatisticsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTaskInfoRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTaskInfoResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeVpcsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeVpcsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeVSwitchsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeVSwitchsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeWorkerDetectionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeWorkerDetectionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DetachUserENIRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DetachUserENIResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DisableAdviceServiceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DisableAdviceServiceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DownloadDiagnosisRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DownloadDiagnosisRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\EnableAdviceServiceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\EnableAdviceServiceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\GetCreateTableSQLRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\GetCreateTableSQLResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\GrantOperatorPermissionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\GrantOperatorPermissionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\KillProcessRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\KillProcessResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\MigrateDBClusterRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\MigrateDBClusterResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyActiveOperationMaintainConfRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyActiveOperationMaintainConfResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyActiveOperationTasksRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyActiveOperationTasksResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyAuditLogConfigRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyAuditLogConfigResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyClusterConnectionStringRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyClusterConnectionStringResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterAccessWhiteListRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterAccessWhiteListResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterDescriptionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterDescriptionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterMaintainTimeRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterMaintainTimeResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterPayTypeRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterPayTypeResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterShardNumberRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterShardNumberResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterSSLRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterSSLResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterVipRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterVipResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBResourceGroupShrinkRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBResourcePoolRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBResourcePoolResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyLogBackupPolicyRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyLogBackupPolicyResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyLogHubStatusRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyLogHubStatusResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyMaintenanceActionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyMaintenanceActionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyResubmitConfigRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyResubmitConfigResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyResubmitConfigShrinkRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifySQAConfigRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifySQAConfigResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifySyncJobRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifySyncJobResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\OperateLogHubRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\OperateLogHubResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ReleaseClusterPublicConnectionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ReleaseClusterPublicConnectionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\RevokeOperatorPermissionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\RevokeOperatorPermissionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\UnbindDBResourceGroupWithUserRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\UnbindDBResourceGroupWithUserResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\UnbindDBResourcePoolWithUserRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\UnbindDBResourcePoolWithUserResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\UpgradeKernelVersionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\UpgradeKernelVersionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Adb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'adb.aliyuncs.com',
            'cn-beijing' => 'adb.aliyuncs.com',
            'cn-hangzhou' => 'adb.aliyuncs.com',
            'cn-shanghai' => 'adb.aliyuncs.com',
            'cn-shenzhen' => 'adb.aliyuncs.com',
            'cn-hongkong' => 'adb.aliyuncs.com',
            'ap-southeast-1' => 'adb.aliyuncs.com',
            'us-west-1' => 'adb.aliyuncs.com',
            'us-east-1' => 'adb.aliyuncs.com',
            'cn-hangzhou-finance' => 'adb.aliyuncs.com',
            'cn-north-2-gov-1' => 'adb.aliyuncs.com',
            'ap-northeast-2-pop' => 'adb.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1' => 'adb.aliyuncs.com',
            'cn-beijing-finance-pop' => 'adb.aliyuncs.com',
            'cn-beijing-gov-1' => 'adb.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'adb.aliyuncs.com',
            'cn-edge-1' => 'adb.aliyuncs.com',
            'cn-fujian' => 'adb.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'adb.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'adb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'adb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'adb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'adb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'adb.aliyuncs.com',
            'cn-hangzhou-test-306' => 'adb.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'adb.aliyuncs.com',
            'cn-qingdao-nebula' => 'adb.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'adb.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'adb.aliyuncs.com',
            'cn-shanghai-finance-1' => 'adb.aliyuncs.com',
            'cn-shanghai-inner' => 'adb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'adb.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'adb.aliyuncs.com',
            'cn-shenzhen-inner' => 'adb.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'adb.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'adb.aliyuncs.com',
            'cn-wuhan' => 'adb.aliyuncs.com',
            'cn-yushanfang' => 'adb.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'adb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'adb.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'adb.aliyuncs.com',
            'eu-west-1-oxs' => 'adb.ap-northeast-1.aliyuncs.com',
            'me-east-1' => 'adb.ap-northeast-1.aliyuncs.com',
            'rus-west-1-pop' => 'adb.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('adb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 申请公网链接.
     *
     * @param request - AllocateClusterPublicConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllocateClusterPublicConnectionResponse
     *
     * @param AllocateClusterPublicConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AllocateClusterPublicConnectionResponse
     */
    public function allocateClusterPublicConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionStringPrefix) {
            @$query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AllocateClusterPublicConnection',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AllocateClusterPublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请公网链接.
     *
     * @param request - AllocateClusterPublicConnectionRequest
     *
     * @returns AllocateClusterPublicConnectionResponse
     *
     * @param AllocateClusterPublicConnectionRequest $request
     *
     * @return AllocateClusterPublicConnectionResponse
     */
    public function allocateClusterPublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateClusterPublicConnectionWithOptions($request, $runtime);
    }

    /**
     * ApplyAdviceById.
     *
     * @param request - ApplyAdviceByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyAdviceByIdResponse
     *
     * @param ApplyAdviceByIdRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ApplyAdviceByIdResponse
     */
    public function applyAdviceByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adviceDate) {
            @$query['AdviceDate'] = $request->adviceDate;
        }

        if (null !== $request->adviceId) {
            @$query['AdviceId'] = $request->adviceId;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyAdviceById',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyAdviceByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ApplyAdviceById.
     *
     * @param request - ApplyAdviceByIdRequest
     *
     * @returns ApplyAdviceByIdResponse
     *
     * @param ApplyAdviceByIdRequest $request
     *
     * @return ApplyAdviceByIdResponse
     */
    public function applyAdviceById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAdviceByIdWithOptions($request, $runtime);
    }

    /**
     * 打通用户ENI.
     *
     * @remarks
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition.
     *
     * @param request - AttachUserENIRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachUserENIResponse
     *
     * @param AttachUserENIRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AttachUserENIResponse
     */
    public function attachUserENIWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachUserENI',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachUserENIResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 打通用户ENI.
     *
     * @remarks
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition.
     *
     * @param request - AttachUserENIRequest
     *
     * @returns AttachUserENIResponse
     *
     * @param AttachUserENIRequest $request
     *
     * @return AttachUserENIResponse
     */
    public function attachUserENI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachUserENIWithOptions($request, $runtime);
    }

    /**
     * BatchApplyAdviceByIdList.
     *
     * @param request - BatchApplyAdviceByIdListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchApplyAdviceByIdListResponse
     *
     * @param BatchApplyAdviceByIdListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchApplyAdviceByIdListResponse
     */
    public function batchApplyAdviceByIdListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adviceDate) {
            @$query['AdviceDate'] = $request->adviceDate;
        }

        if (null !== $request->adviceIdList) {
            @$query['AdviceIdList'] = $request->adviceIdList;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchApplyAdviceByIdList',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchApplyAdviceByIdListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * BatchApplyAdviceByIdList.
     *
     * @param request - BatchApplyAdviceByIdListRequest
     *
     * @returns BatchApplyAdviceByIdListResponse
     *
     * @param BatchApplyAdviceByIdListRequest $request
     *
     * @return BatchApplyAdviceByIdListResponse
     */
    public function batchApplyAdviceByIdList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchApplyAdviceByIdListWithOptions($request, $runtime);
    }

    /**
     * Associates a resource group of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster with a database account.
     *
     * @remarks
     * ## Precautions
     * *   This operation is applicable only for elastic clusters of 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be associated with a database account.
     *
     * @param request - BindDBResourceGroupWithUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindDBResourceGroupWithUserResponse
     *
     * @param BindDBResourceGroupWithUserRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return BindDBResourceGroupWithUserResponse
     */
    public function bindDBResourceGroupWithUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupUser) {
            @$query['GroupUser'] = $request->groupUser;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindDBResourceGroupWithUser',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindDBResourceGroupWithUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a resource group of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster with a database account.
     *
     * @remarks
     * ## Precautions
     * *   This operation is applicable only for elastic clusters of 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be associated with a database account.
     *
     * @param request - BindDBResourceGroupWithUserRequest
     *
     * @returns BindDBResourceGroupWithUserResponse
     *
     * @param BindDBResourceGroupWithUserRequest $request
     *
     * @return BindDBResourceGroupWithUserResponse
     */
    public function bindDBResourceGroupWithUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindDBResourceGroupWithUserWithOptions($request, $runtime);
    }

    /**
     * 绑定资源组用户.
     *
     * @remarks
     *   This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be associated with a database account.
     *
     * @param request - BindDBResourcePoolWithUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindDBResourcePoolWithUserResponse
     *
     * @param BindDBResourcePoolWithUserRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BindDBResourcePoolWithUserResponse
     */
    public function bindDBResourcePoolWithUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolName) {
            @$query['PoolName'] = $request->poolName;
        }

        if (null !== $request->poolUser) {
            @$query['PoolUser'] = $request->poolUser;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindDBResourcePoolWithUser',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindDBResourcePoolWithUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 绑定资源组用户.
     *
     * @remarks
     *   This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be associated with a database account.
     *
     * @param request - BindDBResourcePoolWithUserRequest
     *
     * @returns BindDBResourcePoolWithUserResponse
     *
     * @param BindDBResourcePoolWithUserRequest $request
     *
     * @return BindDBResourcePoolWithUserResponse
     */
    public function bindDBResourcePoolWithUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindDBResourcePoolWithUserWithOptions($request, $runtime);
    }

    /**
     * Cancels O\\&M events.
     *
     * @param request - CancelActiveOperationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelActiveOperationTasksResponse
     *
     * @param CancelActiveOperationTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelActiveOperationTasks',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels O\\&M events.
     *
     * @param request - CancelActiveOperationTasksRequest
     *
     * @returns CancelActiveOperationTasksResponse
     *
     * @param CancelActiveOperationTasksRequest $request
     *
     * @return CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * Checks whether a service-linked role is created.
     *
     * @param request - CheckServiceLinkedRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckServiceLinkedRoleResponse
     *
     * @param CheckServiceLinkedRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckServiceLinkedRole',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether a service-linked role is created.
     *
     * @param request - CheckServiceLinkedRoleRequest
     *
     * @returns CheckServiceLinkedRoleResponse
     *
     * @param CheckServiceLinkedRoleRequest $request
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * Creates a database account for an AnalyticDB for MySQL cluster.
     *
     * @param tmpReq - CreateAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccountResponse
     *
     * @param CreateAccountRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAccountResponse
     */
    public function createAccountWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAccountShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->accountDescription) {
            @$query['AccountDescription'] = $request->accountDescription;
        }

        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccount',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a database account for an AnalyticDB for MySQL cluster.
     *
     * @param request - CreateAccountRequest
     *
     * @returns CreateAccountResponse
     *
     * @param CreateAccountRequest $request
     *
     * @return CreateAccountResponse
     */
    public function createAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * Creates an AnalyticDB for MySQL Data Warehouse Edition cluster.
     *
     * @remarks
     * After you create a cluster, you are billed for the cluster specifications that you select. For more information about the billable items and pricing for Data Warehouse Edition  clusters, see [Billable items of Data Warehouse Edition](https://help.aliyun.com/document_detail/303131.html) and [Pricing for Data Warehouse Edition](https://help.aliyun.com/document_detail/135229.html).
     *
     * @param request - CreateDBClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBClusterResponse
     *
     * @param CreateDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDBClusterResponse
     */
    public function createDBClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupSetID) {
            @$query['BackupSetID'] = $request->backupSetID;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->computeResource) {
            @$query['ComputeResource'] = $request->computeResource;
        }

        if (null !== $request->DBClusterCategory) {
            @$query['DBClusterCategory'] = $request->DBClusterCategory;
        }

        if (null !== $request->DBClusterClass) {
            @$query['DBClusterClass'] = $request->DBClusterClass;
        }

        if (null !== $request->DBClusterDescription) {
            @$query['DBClusterDescription'] = $request->DBClusterDescription;
        }

        if (null !== $request->DBClusterNetworkType) {
            @$query['DBClusterNetworkType'] = $request->DBClusterNetworkType;
        }

        if (null !== $request->DBClusterVersion) {
            @$query['DBClusterVersion'] = $request->DBClusterVersion;
        }

        if (null !== $request->DBNodeGroupCount) {
            @$query['DBNodeGroupCount'] = $request->DBNodeGroupCount;
        }

        if (null !== $request->DBNodeStorage) {
            @$query['DBNodeStorage'] = $request->DBNodeStorage;
        }

        if (null !== $request->diskEncryption) {
            @$query['DiskEncryption'] = $request->diskEncryption;
        }

        if (null !== $request->elasticIOResource) {
            @$query['ElasticIOResource'] = $request->elasticIOResource;
        }

        if (null !== $request->enableSSL) {
            @$query['EnableSSL'] = $request->enableSSL;
        }

        if (null !== $request->executorCount) {
            @$query['ExecutorCount'] = $request->executorCount;
        }

        if (null !== $request->kmsId) {
            @$query['KmsId'] = $request->kmsId;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->restoreTime) {
            @$query['RestoreTime'] = $request->restoreTime;
        }

        if (null !== $request->restoreType) {
            @$query['RestoreType'] = $request->restoreType;
        }

        if (null !== $request->sourceDBInstanceName) {
            @$query['SourceDBInstanceName'] = $request->sourceDBInstanceName;
        }

        if (null !== $request->storageResource) {
            @$query['StorageResource'] = $request->storageResource;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        if (null !== $request->VPCId) {
            @$query['VPCId'] = $request->VPCId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBCluster',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AnalyticDB for MySQL Data Warehouse Edition cluster.
     *
     * @remarks
     * After you create a cluster, you are billed for the cluster specifications that you select. For more information about the billable items and pricing for Data Warehouse Edition  clusters, see [Billable items of Data Warehouse Edition](https://help.aliyun.com/document_detail/303131.html) and [Pricing for Data Warehouse Edition](https://help.aliyun.com/document_detail/135229.html).
     *
     * @param request - CreateDBClusterRequest
     *
     * @returns CreateDBClusterResponse
     *
     * @param CreateDBClusterRequest $request
     *
     * @return CreateDBClusterResponse
     */
    public function createDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBClusterWithOptions($request, $runtime);
    }

    /**
     * Creates a resource group for an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @remarks
     * ## Precautions
     * This operation is applicable only for elastic clusters of 32 cores or more.
     *
     * @param request - CreateDBResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBResourceGroupResponse
     *
     * @param CreateDBResourceGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDBResourceGroupResponse
     */
    public function createDBResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
        }

        if (null !== $request->nodeNum) {
            @$query['NodeNum'] = $request->nodeNum;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBResourceGroup',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a resource group for an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @remarks
     * ## Precautions
     * This operation is applicable only for elastic clusters of 32 cores or more.
     *
     * @param request - CreateDBResourceGroupRequest
     *
     * @returns CreateDBResourceGroupResponse
     *
     * @param CreateDBResourceGroupRequest $request
     *
     * @return CreateDBResourceGroupResponse
     */
    public function createDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * 创建资源组.
     *
     * @remarks
     * This operation is applicable only for elastic clusters of 32 cores or more.
     *
     * @param request - CreateDBResourcePoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBResourcePoolResponse
     *
     * @param CreateDBResourcePoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDBResourcePoolResponse
     */
    public function createDBResourcePoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->nodeNum) {
            @$query['NodeNum'] = $request->nodeNum;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolName) {
            @$query['PoolName'] = $request->poolName;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBResourcePool',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建资源组.
     *
     * @remarks
     * This operation is applicable only for elastic clusters of 32 cores or more.
     *
     * @param request - CreateDBResourcePoolRequest
     *
     * @returns CreateDBResourcePoolResponse
     *
     * @param CreateDBResourcePoolRequest $request
     *
     * @return CreateDBResourcePoolResponse
     */
    public function createDBResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBResourcePoolWithOptions($request, $runtime);
    }

    /**
     * Creates a scheduled scaling plan. This operation can be used only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *
     * @remarks
     * ###
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *
     * @param request - CreateElasticPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateElasticPlanResponse
     *
     * @param CreateElasticPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateElasticPlanResponse
     */
    public function createElasticPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->elasticPlanEnable) {
            @$query['ElasticPlanEnable'] = $request->elasticPlanEnable;
        }

        if (null !== $request->elasticPlanEndDay) {
            @$query['ElasticPlanEndDay'] = $request->elasticPlanEndDay;
        }

        if (null !== $request->elasticPlanMonthlyRepeat) {
            @$query['ElasticPlanMonthlyRepeat'] = $request->elasticPlanMonthlyRepeat;
        }

        if (null !== $request->elasticPlanName) {
            @$query['ElasticPlanName'] = $request->elasticPlanName;
        }

        if (null !== $request->elasticPlanNodeNum) {
            @$query['ElasticPlanNodeNum'] = $request->elasticPlanNodeNum;
        }

        if (null !== $request->elasticPlanStartDay) {
            @$query['ElasticPlanStartDay'] = $request->elasticPlanStartDay;
        }

        if (null !== $request->elasticPlanTimeEnd) {
            @$query['ElasticPlanTimeEnd'] = $request->elasticPlanTimeEnd;
        }

        if (null !== $request->elasticPlanTimeStart) {
            @$query['ElasticPlanTimeStart'] = $request->elasticPlanTimeStart;
        }

        if (null !== $request->elasticPlanType) {
            @$query['ElasticPlanType'] = $request->elasticPlanType;
        }

        if (null !== $request->elasticPlanWeeklyRepeat) {
            @$query['ElasticPlanWeeklyRepeat'] = $request->elasticPlanWeeklyRepeat;
        }

        if (null !== $request->elasticPlanWorkerSpec) {
            @$query['ElasticPlanWorkerSpec'] = $request->elasticPlanWorkerSpec;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourcePoolName) {
            @$query['ResourcePoolName'] = $request->resourcePoolName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateElasticPlan',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateElasticPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a scheduled scaling plan. This operation can be used only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *
     * @remarks
     * ###
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *
     * @param request - CreateElasticPlanRequest
     *
     * @returns CreateElasticPlanResponse
     *
     * @param CreateElasticPlanRequest $request
     *
     * @return CreateElasticPlanResponse
     */
    public function createElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createElasticPlanWithOptions($request, $runtime);
    }

    /**
     * Creates a service-linked role.
     *
     * @param request - CreateServiceLinkedRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceLinkedRoleResponse
     *
     * @param CreateServiceLinkedRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateServiceLinkedRole',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service-linked role.
     *
     * @param request - CreateServiceLinkedRoleRequest
     *
     * @returns CreateServiceLinkedRoleResponse
     *
     * @param CreateServiceLinkedRoleRequest $request
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * 删除高权限帐号.
     *
     * @param request - DeleteAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccountResponse
     *
     * @param DeleteAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccount',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除高权限帐号.
     *
     * @param request - DeleteAccountRequest
     *
     * @returns DeleteAccountResponse
     *
     * @param DeleteAccountRequest $request
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * Manually deletes backup sets.
     *
     * @remarks
     *   Deleting backup sets is an asynchronous operation and may require 10 to 20 minutes to complete.
     * *   You can delete up to 100 backup sets at a time. If you want to delete more than 100 backup sets, call this operation twice.
     * *   To ensure data security, the system forcibly retains one valid backup set. If you want to delete the last backup set, the system prohibits your operation.
     *
     * @param request - DeleteBackupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBackupsResponse
     *
     * @param DeleteBackupsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBackupsResponse
     */
    public function deleteBackupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBackups',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manually deletes backup sets.
     *
     * @remarks
     *   Deleting backup sets is an asynchronous operation and may require 10 to 20 minutes to complete.
     * *   You can delete up to 100 backup sets at a time. If you want to delete more than 100 backup sets, call this operation twice.
     * *   To ensure data security, the system forcibly retains one valid backup set. If you want to delete the last backup set, the system prohibits your operation.
     *
     * @param request - DeleteBackupsRequest
     *
     * @returns DeleteBackupsResponse
     *
     * @param DeleteBackupsRequest $request
     *
     * @return DeleteBackupsResponse
     */
    public function deleteBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupsWithOptions($request, $runtime);
    }

    /**
     * Deletes an AnalyticDB for MySQL cluster.
     *
     * @remarks
     *   You cannot delete subscription clusters by calling API operations. After expiration, subscription clusters are automatically released. If you no longer need a cluster, you can unsubscribe from the cluster in the Expenses and Costs console. For information about cluster refunds, see [Refund policy](https://help.aliyun.com/document_detail/471477.html).
     * *   After you delete a cluster, resources of the cluster are immediately released, and data of the cluster is no longer retained and cannot be restored. Proceed with caution.
     * *   The cluster that you want to delete must be in the Running state.
     *
     * @param request - DeleteDBClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBClusterResponse
     *
     * @param DeleteDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDBClusterResponse
     */
    public function deleteDBClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDBCluster',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an AnalyticDB for MySQL cluster.
     *
     * @remarks
     *   You cannot delete subscription clusters by calling API operations. After expiration, subscription clusters are automatically released. If you no longer need a cluster, you can unsubscribe from the cluster in the Expenses and Costs console. For information about cluster refunds, see [Refund policy](https://help.aliyun.com/document_detail/471477.html).
     * *   After you delete a cluster, resources of the cluster are immediately released, and data of the cluster is no longer retained and cannot be restored. Proceed with caution.
     * *   The cluster that you want to delete must be in the Running state.
     *
     * @param request - DeleteDBClusterRequest
     *
     * @returns DeleteDBClusterResponse
     *
     * @param DeleteDBClusterRequest $request
     *
     * @return DeleteDBClusterResponse
     */
    public function deleteDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBClusterWithOptions($request, $runtime);
    }

    /**
     * Deletes a resource group from an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @remarks
     * ### Precautions
     * *   You can call this operation only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be deleted.
     *
     * @param request - DeleteDBResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBResourceGroupResponse
     *
     * @param DeleteDBResourceGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDBResourceGroupResponse
     */
    public function deleteDBResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDBResourceGroup',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a resource group from an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @remarks
     * ### Precautions
     * *   You can call this operation only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be deleted.
     *
     * @param request - DeleteDBResourceGroupRequest
     *
     * @returns DeleteDBResourceGroupResponse
     *
     * @param DeleteDBResourceGroupRequest $request
     *
     * @return DeleteDBResourceGroupResponse
     */
    public function deleteDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * 删除资源组.
     *
     * @remarks
     * *Precautions**
     * *   This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be deleted.
     *
     * @param request - DeleteDBResourcePoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBResourcePoolResponse
     *
     * @param DeleteDBResourcePoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDBResourcePoolResponse
     */
    public function deleteDBResourcePoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolName) {
            @$query['PoolName'] = $request->poolName;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDBResourcePool',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDBResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除资源组.
     *
     * @remarks
     * *Precautions**
     * *   This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be deleted.
     *
     * @param request - DeleteDBResourcePoolRequest
     *
     * @returns DeleteDBResourcePoolResponse
     *
     * @param DeleteDBResourcePoolRequest $request
     *
     * @return DeleteDBResourcePoolResponse
     */
    public function deleteDBResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBResourcePoolWithOptions($request, $runtime);
    }

    /**
     * Deletes a scheduled scaling plan. You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition clusters in elastic mode for Cluster Edition.
     *
     * @param request - DeleteElasticPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteElasticPlanResponse
     *
     * @param DeleteElasticPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteElasticPlanResponse
     */
    public function deleteElasticPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->elasticPlanName) {
            @$query['ElasticPlanName'] = $request->elasticPlanName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteElasticPlan',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteElasticPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a scheduled scaling plan. You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition clusters in elastic mode for Cluster Edition.
     *
     * @param request - DeleteElasticPlanRequest
     *
     * @returns DeleteElasticPlanResponse
     *
     * @param DeleteElasticPlanRequest $request
     *
     * @return DeleteElasticPlanResponse
     */
    public function deleteElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteElasticPlanWithOptions($request, $runtime);
    }

    /**
     * Queries abnormal SQL patterns within a time range.
     *
     * @param request - DescribeAbnormalPatternDetectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAbnormalPatternDetectionResponse
     *
     * @param DescribeAbnormalPatternDetectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeAbnormalPatternDetectionResponse
     */
    public function describeAbnormalPatternDetectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAbnormalPatternDetection',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAbnormalPatternDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries abnormal SQL patterns within a time range.
     *
     * @param request - DescribeAbnormalPatternDetectionRequest
     *
     * @returns DescribeAbnormalPatternDetectionResponse
     *
     * @param DescribeAbnormalPatternDetectionRequest $request
     *
     * @return DescribeAbnormalPatternDetectionResponse
     */
    public function describeAbnormalPatternDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAbnormalPatternDetectionWithOptions($request, $runtime);
    }

    /**
     * Queries a list of database accounts for an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccountsResponse
     *
     * @param DescribeAccountsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccounts',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of database accounts for an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeAccountsRequest
     *
     * @returns DescribeAccountsResponse
     *
     * @param DescribeAccountsRequest $request
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountsWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration information about O\\&M tasks.
     *
     * @param request - DescribeActiveOperationMaintainConfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActiveOperationMaintainConfResponse
     *
     * @param DescribeActiveOperationMaintainConfRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeActiveOperationMaintainConfResponse
     */
    public function describeActiveOperationMaintainConfWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationMaintainConf',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeActiveOperationMaintainConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration information about O\\&M tasks.
     *
     * @param request - DescribeActiveOperationMaintainConfRequest
     *
     * @returns DescribeActiveOperationMaintainConfResponse
     *
     * @param DescribeActiveOperationMaintainConfRequest $request
     *
     * @return DescribeActiveOperationMaintainConfResponse
     */
    public function describeActiveOperationMaintainConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationMaintainConfWithOptions($request, $runtime);
    }

    /**
     * Queries the information about O\\&M tasks.
     *
     * @param request - DescribeActiveOperationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeActiveOperationTasksResponse
     *
     * @param DescribeActiveOperationTasksRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeActiveOperationTasksResponse
     */
    public function describeActiveOperationTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowCancel) {
            @$query['AllowCancel'] = $request->allowCancel;
        }

        if (null !== $request->allowChange) {
            @$query['AllowChange'] = $request->allowChange;
        }

        if (null !== $request->changeLevel) {
            @$query['ChangeLevel'] = $request->changeLevel;
        }

        if (null !== $request->dbType) {
            @$query['DbType'] = $request->dbType;
        }

        if (null !== $request->insName) {
            @$query['InsName'] = $request->insName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationTasks',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about O\\&M tasks.
     *
     * @param request - DescribeActiveOperationTasksRequest
     *
     * @returns DescribeActiveOperationTasksResponse
     *
     * @param DescribeActiveOperationTasksRequest $request
     *
     * @return DescribeActiveOperationTasksResponse
     */
    public function describeActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * Queries whether the suggestion feature is enabled for an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeAdviceServiceEnabledRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdviceServiceEnabledResponse
     *
     * @param DescribeAdviceServiceEnabledRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAdviceServiceEnabledResponse
     */
    public function describeAdviceServiceEnabledWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdviceServiceEnabled',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdviceServiceEnabledResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether the suggestion feature is enabled for an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeAdviceServiceEnabledRequest
     *
     * @returns DescribeAdviceServiceEnabledResponse
     *
     * @param DescribeAdviceServiceEnabledRequest $request
     *
     * @return DescribeAdviceServiceEnabledResponse
     */
    public function describeAdviceServiceEnabled($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdviceServiceEnabledWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an account or the list of accounts of a specific database within an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeAllAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAllAccountsResponse
     *
     * @param DescribeAllAccountsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAllAccountsResponse
     */
    public function describeAllAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAllAccounts',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAllAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an account or the list of accounts of a specific database within an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeAllAccountsRequest
     *
     * @returns DescribeAllAccountsResponse
     *
     * @param DescribeAllAccountsRequest $request
     *
     * @return DescribeAllAccountsResponse
     */
    public function describeAllAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllAccountsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of databases, tables, and columns in a cluster.
     *
     * @param request - DescribeAllDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAllDataSourceResponse
     *
     * @param DescribeAllDataSourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAllDataSourceResponse
     */
    public function describeAllDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAllDataSource',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAllDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of databases, tables, and columns in a cluster.
     *
     * @param request - DescribeAllDataSourceRequest
     *
     * @returns DescribeAllDataSourceResponse
     *
     * @param DescribeAllDataSourceRequest $request
     *
     * @return DescribeAllDataSourceResponse
     */
    public function describeAllDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllDataSourceWithOptions($request, $runtime);
    }

    /**
     * Queries the applied optimization suggestions for an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeAppliedAdvicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppliedAdvicesResponse
     *
     * @param DescribeAppliedAdvicesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAppliedAdvicesResponse
     */
    public function describeAppliedAdvicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adviceType) {
            @$query['AdviceType'] = $request->adviceType;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->schemaTableName) {
            @$query['SchemaTableName'] = $request->schemaTableName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppliedAdvices',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppliedAdvicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the applied optimization suggestions for an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeAppliedAdvicesRequest
     *
     * @returns DescribeAppliedAdvicesResponse
     *
     * @param DescribeAppliedAdvicesRequest $request
     *
     * @return DescribeAppliedAdvicesResponse
     */
    public function describeAppliedAdvices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppliedAdvicesWithOptions($request, $runtime);
    }

    /**
     * Queries the SQL audit settings of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeAuditLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuditLogConfigResponse
     *
     * @param DescribeAuditLogConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAuditLogConfigResponse
     */
    public function describeAuditLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuditLogConfig',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuditLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the SQL audit settings of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeAuditLogConfigRequest
     *
     * @returns DescribeAuditLogConfigResponse
     *
     * @param DescribeAuditLogConfigRequest $request
     *
     * @return DescribeAuditLogConfigResponse
     */
    public function describeAuditLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditLogConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the SQL audit logs of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * Before you call the DescribeAuditLogRecords operation to query the SQL audit logs of an AnalyticDB for MySQL cluster, you must enable SQL audit for the cluster. You can call the [DescribeAuditLogConfig](https://help.aliyun.com/document_detail/190628.html) operation to query the status of SQL audit. If SQL audit is disabled, you can call the [ModifyAuditLogConfig](https://help.aliyun.com/document_detail/190629.html) operation to enable SQL audit.
     * SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried. The following operations are not recorded in SQL audit logs: **INSERT INTO VALUES**, **REPLACE INTO VALUES**, and **UPSERT INTO VALUES**.
     *
     * @param request - DescribeAuditLogRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuditLogRecordsResponse
     *
     * @param DescribeAuditLogRecordsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAuditLogRecordsResponse
     */
    public function describeAuditLogRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->hostAddress) {
            @$query['HostAddress'] = $request->hostAddress;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryKeyword) {
            @$query['QueryKeyword'] = $request->queryKeyword;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sqlType) {
            @$query['SqlType'] = $request->sqlType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->succeed) {
            @$query['Succeed'] = $request->succeed;
        }

        if (null !== $request->user) {
            @$query['User'] = $request->user;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuditLogRecords',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuditLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the SQL audit logs of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * Before you call the DescribeAuditLogRecords operation to query the SQL audit logs of an AnalyticDB for MySQL cluster, you must enable SQL audit for the cluster. You can call the [DescribeAuditLogConfig](https://help.aliyun.com/document_detail/190628.html) operation to query the status of SQL audit. If SQL audit is disabled, you can call the [ModifyAuditLogConfig](https://help.aliyun.com/document_detail/190629.html) operation to enable SQL audit.
     * SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried. The following operations are not recorded in SQL audit logs: **INSERT INTO VALUES**, **REPLACE INTO VALUES**, and **UPSERT INTO VALUES**.
     *
     * @param request - DescribeAuditLogRecordsRequest
     *
     * @returns DescribeAuditLogRecordsResponse
     *
     * @param DescribeAuditLogRecordsRequest $request
     *
     * @return DescribeAuditLogRecordsResponse
     */
    public function describeAuditLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditLogRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the auto-renewal status of a subscription AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeAutoRenewAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutoRenewAttributeResponse
     *
     * @param DescribeAutoRenewAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAutoRenewAttributeResponse
     */
    public function describeAutoRenewAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterIds) {
            @$query['DBClusterIds'] = $request->DBClusterIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAutoRenewAttribute',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the auto-renewal status of a subscription AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeAutoRenewAttributeRequest
     *
     * @returns DescribeAutoRenewAttributeResponse
     *
     * @param DescribeAutoRenewAttributeRequest $request
     *
     * @return DescribeAutoRenewAttributeResponse
     */
    public function describeAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the available suggestions for cluster optimization.
     *
     * @param request - DescribeAvailableAdvicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailableAdvicesResponse
     *
     * @param DescribeAvailableAdvicesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAvailableAdvicesResponse
     */
    public function describeAvailableAdvicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adviceDate) {
            @$query['AdviceDate'] = $request->adviceDate;
        }

        if (null !== $request->adviceType) {
            @$query['AdviceType'] = $request->adviceType;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->schemaTableName) {
            @$query['SchemaTableName'] = $request->schemaTableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAvailableAdvices',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAvailableAdvicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available suggestions for cluster optimization.
     *
     * @param request - DescribeAvailableAdvicesRequest
     *
     * @returns DescribeAvailableAdvicesResponse
     *
     * @param DescribeAvailableAdvicesRequest $request
     *
     * @return DescribeAvailableAdvicesResponse
     */
    public function describeAvailableAdvices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableAdvicesWithOptions($request, $runtime);
    }

    /**
     * Queries the resources of clusters within zones of a region.
     *
     * @param request - DescribeAvailableResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailableResourceResponse
     *
     * @param DescribeAvailableResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->DBClusterVersion) {
            @$query['DBClusterVersion'] = $request->DBClusterVersion;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAvailableResource',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resources of clusters within zones of a region.
     *
     * @param request - DescribeAvailableResourceRequest
     *
     * @returns DescribeAvailableResourceResponse
     *
     * @param DescribeAvailableResourceRequest $request
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * 查看备份策略.
     *
     * @param request - DescribeBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupPolicyResponse
     *
     * @param DescribeBackupPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupPolicy',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看备份策略.
     *
     * @param request - DescribeBackupPolicyRequest
     *
     * @returns DescribeBackupPolicyResponse
     *
     * @param DescribeBackupPolicyRequest $request
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries a list of backup sets for an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeBackupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupsResponse
     *
     * @param DescribeBackupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->crossRole) {
            @$query['CrossRole'] = $request->crossRole;
        }

        if (null !== $request->crossUid) {
            @$query['CrossUid'] = $request->crossUid;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackups',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of backup sets for an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeBackupsRequest
     *
     * @returns DescribeBackupsResponse
     *
     * @param DescribeBackupsRequest $request
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupsWithOptions($request, $runtime);
    }

    /**
     * Queries the bad SQL statements that affect cluster stability within a time range.
     *
     * @param request - DescribeBadSqlDetectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBadSqlDetectionResponse
     *
     * @param DescribeBadSqlDetectionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeBadSqlDetectionResponse
     */
    public function describeBadSqlDetectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBadSqlDetection',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBadSqlDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bad SQL statements that affect cluster stability within a time range.
     *
     * @param request - DescribeBadSqlDetectionRequest
     *
     * @returns DescribeBadSqlDetectionResponse
     *
     * @param DescribeBadSqlDetectionRequest $request
     *
     * @return DescribeBadSqlDetectionResponse
     */
    public function describeBadSqlDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBadSqlDetectionWithOptions($request, $runtime);
    }

    /**
     * Queries a list of columns in a table within an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeColumnsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeColumnsResponse
     *
     * @param DescribeColumnsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeColumnsResponse
     */
    public function describeColumnsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeColumns',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of columns in a table within an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeColumnsRequest
     *
     * @returns DescribeColumnsResponse
     *
     * @param DescribeColumnsRequest $request
     *
     * @return DescribeColumnsResponse
     */
    public function describeColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeColumnsWithOptions($request, $runtime);
    }

    /**
     * Queries the specifications of computing resources for AnalyticDB for MySQL Data Warehouse Edition clusters within a region.
     *
     * @param request - DescribeComputeResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeComputeResourceResponse
     *
     * @param DescribeComputeResourceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeComputeResourceResponse
     */
    public function describeComputeResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBClusterVersion) {
            @$query['DBClusterVersion'] = $request->DBClusterVersion;
        }

        if (null !== $request->migrate) {
            @$query['Migrate'] = $request->migrate;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeComputeResource',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeComputeResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the specifications of computing resources for AnalyticDB for MySQL Data Warehouse Edition clusters within a region.
     *
     * @param request - DescribeComputeResourceRequest
     *
     * @returns DescribeComputeResourceResponse
     *
     * @param DescribeComputeResourceRequest $request
     *
     * @return DescribeComputeResourceResponse
     */
    public function describeComputeResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComputeResourceWithOptions($request, $runtime);
    }

    /**
     * Queries the current number of connections to an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeConnectionCountRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeConnectionCountRecordsResponse
     *
     * @param DescribeConnectionCountRecordsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeConnectionCountRecordsResponse
     */
    public function describeConnectionCountRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeConnectionCountRecords',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeConnectionCountRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the current number of connections to an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeConnectionCountRecordsRequest
     *
     * @returns DescribeConnectionCountRecordsResponse
     *
     * @param DescribeConnectionCountRecordsRequest $request
     *
     * @return DescribeConnectionCountRecordsResponse
     */
    public function describeConnectionCountRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConnectionCountRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the diagnostic results of the access layer.
     *
     * @param request - DescribeControllerDetectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeControllerDetectionResponse
     *
     * @param DescribeControllerDetectionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeControllerDetectionResponse
     */
    public function describeControllerDetectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeControllerDetection',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeControllerDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the diagnostic results of the access layer.
     *
     * @param request - DescribeControllerDetectionRequest
     *
     * @returns DescribeControllerDetectionResponse
     *
     * @param DescribeControllerDetectionRequest $request
     *
     * @return DescribeControllerDetectionResponse
     */
    public function describeControllerDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeControllerDetectionWithOptions($request, $runtime);
    }

    /**
     * Queries a list of IP address whitelists for an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeDBClusterAccessWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterAccessWhiteListResponse
     *
     * @param DescribeDBClusterAccessWhiteListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDBClusterAccessWhiteListResponse
     */
    public function describeDBClusterAccessWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterAccessWhiteList',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterAccessWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of IP address whitelists for an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeDBClusterAccessWhiteListRequest
     *
     * @returns DescribeDBClusterAccessWhiteListResponse
     *
     * @param DescribeDBClusterAccessWhiteListRequest $request
     *
     * @return DescribeDBClusterAccessWhiteListResponse
     */
    public function describeDBClusterAccessWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAccessWhiteListWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeDBClusterAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterAttributeResponse
     *
     * @param DescribeDBClusterAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBClusterAttributeResponse
     */
    public function describeDBClusterAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterAttribute',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeDBClusterAttributeRequest
     *
     * @returns DescribeDBClusterAttributeResponse
     *
     * @param DescribeDBClusterAttributeRequest $request
     *
     * @return DescribeDBClusterAttributeResponse
     */
    public function describeDBClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * 查询集群健康检查状态
     *
     * @param request - DescribeDBClusterHealthStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterHealthStatusResponse
     *
     * @param DescribeDBClusterHealthStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBClusterHealthStatusResponse
     */
    public function describeDBClusterHealthStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterHealthStatus',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询集群健康检查状态
     *
     * @param request - DescribeDBClusterHealthStatusRequest
     *
     * @returns DescribeDBClusterHealthStatusResponse
     *
     * @param DescribeDBClusterHealthStatusRequest $request
     *
     * @return DescribeDBClusterHealthStatusResponse
     */
    public function describeDBClusterHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterHealthStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the network information about an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeDBClusterNetInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterNetInfoResponse
     *
     * @param DescribeDBClusterNetInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBClusterNetInfoResponse
     */
    public function describeDBClusterNetInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterNetInfo',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterNetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the network information about an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeDBClusterNetInfoRequest
     *
     * @returns DescribeDBClusterNetInfoResponse
     *
     * @param DescribeDBClusterNetInfoRequest $request
     *
     * @return DescribeDBClusterNetInfoResponse
     */
    public function describeDBClusterNetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterNetInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the performance data of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * You can call this operation to query the performance data of a cluster over a time range based on its performance metrics. The data is collected every 30 seconds. This operation allows you to query information about slow queries, such as the SQL query duration, number of scanned rows, and amount of scanned data.
     *
     * @param request - DescribeDBClusterPerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterPerformanceResponse
     *
     * @param DescribeDBClusterPerformanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDBClusterPerformanceResponse
     */
    public function describeDBClusterPerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourcePools) {
            @$query['ResourcePools'] = $request->resourcePools;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterPerformance',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the performance data of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * You can call this operation to query the performance data of a cluster over a time range based on its performance metrics. The data is collected every 30 seconds. This operation allows you to query information about slow queries, such as the SQL query duration, number of scanned rows, and amount of scanned data.
     *
     * @param request - DescribeDBClusterPerformanceRequest
     *
     * @returns DescribeDBClusterPerformanceResponse
     *
     * @param DescribeDBClusterPerformanceRequest $request
     *
     * @return DescribeDBClusterPerformanceResponse
     */
    public function describeDBClusterPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterPerformanceWithOptions($request, $runtime);
    }

    /**
     * Queries the monitoring information about resource groups within an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * > You can also view the monitoring information about resource groups within an AnalyticDB for MySQL cluster in elastic mode for Cluster Edition in the form of graphs in the console. For more information, see [View monitoring information](https://help.aliyun.com/document_detail/188721.html).
     *
     * @param request - DescribeDBClusterResourcePoolPerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterResourcePoolPerformanceResponse
     *
     * @param DescribeDBClusterResourcePoolPerformanceRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeDBClusterResourcePoolPerformanceResponse
     */
    public function describeDBClusterResourcePoolPerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourcePools) {
            @$query['ResourcePools'] = $request->resourcePools;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterResourcePoolPerformance',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterResourcePoolPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monitoring information about resource groups within an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * > You can also view the monitoring information about resource groups within an AnalyticDB for MySQL cluster in elastic mode for Cluster Edition in the form of graphs in the console. For more information, see [View monitoring information](https://help.aliyun.com/document_detail/188721.html).
     *
     * @param request - DescribeDBClusterResourcePoolPerformanceRequest
     *
     * @returns DescribeDBClusterResourcePoolPerformanceResponse
     *
     * @param DescribeDBClusterResourcePoolPerformanceRequest $request
     *
     * @return DescribeDBClusterResourcePoolPerformanceResponse
     */
    public function describeDBClusterResourcePoolPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterResourcePoolPerformanceWithOptions($request, $runtime);
    }

    /**
     * Queries the SSL configurations of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @param request - DescribeDBClusterSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterSSLResponse
     *
     * @param DescribeDBClusterSSLRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDBClusterSSLResponse
     */
    public function describeDBClusterSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterSSL',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the SSL configurations of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @param request - DescribeDBClusterSSLRequest
     *
     * @returns DescribeDBClusterSSLResponse
     *
     * @param DescribeDBClusterSSLRequest $request
     *
     * @return DescribeDBClusterSSLResponse
     */
    public function describeDBClusterSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterSSLWithOptions($request, $runtime);
    }

    /**
     * Queries the number of shards in an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeDBClusterShardNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterShardNumberResponse
     *
     * @param DescribeDBClusterShardNumberRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDBClusterShardNumberResponse
     */
    public function describeDBClusterShardNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterShardNumber',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterShardNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of shards in an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeDBClusterShardNumberRequest
     *
     * @returns DescribeDBClusterShardNumberResponse
     *
     * @param DescribeDBClusterShardNumberRequest $request
     *
     * @return DescribeDBClusterShardNumberResponse
     */
    public function describeDBClusterShardNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterShardNumberWithOptions($request, $runtime);
    }

    /**
     * Queries the storage overview information of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster, such as the total data size, hot data size, cold data size, and data growth.
     *
     * @param request - DescribeDBClusterSpaceSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterSpaceSummaryResponse
     *
     * @param DescribeDBClusterSpaceSummaryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBClusterSpaceSummaryResponse
     */
    public function describeDBClusterSpaceSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterSpaceSummary',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterSpaceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage overview information of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster, such as the total data size, hot data size, cold data size, and data growth.
     *
     * @param request - DescribeDBClusterSpaceSummaryRequest
     *
     * @returns DescribeDBClusterSpaceSummaryResponse
     *
     * @param DescribeDBClusterSpaceSummaryRequest $request
     *
     * @return DescribeDBClusterSpaceSummaryResponse
     */
    public function describeDBClusterSpaceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterSpaceSummaryWithOptions($request, $runtime);
    }

    /**
     * Queries the status of AnalyticDB for MySQL Data Warehouse Edition clusters within a region.
     *
     * @param request - DescribeDBClusterStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterStatusResponse
     *
     * @param DescribeDBClusterStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDBClusterStatusResponse
     */
    public function describeDBClusterStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterStatus',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of AnalyticDB for MySQL Data Warehouse Edition clusters within a region.
     *
     * @param request - DescribeDBClusterStatusRequest
     *
     * @returns DescribeDBClusterStatusResponse
     *
     * @param DescribeDBClusterStatusRequest $request
     *
     * @return DescribeDBClusterStatusResponse
     */
    public function describeDBClusterStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterStatusWithOptions($request, $runtime);
    }

    /**
     * Queries a list of AnalyticDB for MySQL clusters within a region.
     *
     * @param request - DescribeDBClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClustersResponse
     *
     * @param DescribeDBClustersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDBClustersResponse
     */
    public function describeDBClustersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterDescription) {
            @$query['DBClusterDescription'] = $request->DBClusterDescription;
        }

        if (null !== $request->DBClusterIds) {
            @$query['DBClusterIds'] = $request->DBClusterIds;
        }

        if (null !== $request->DBClusterStatus) {
            @$query['DBClusterStatus'] = $request->DBClusterStatus;
        }

        if (null !== $request->DBVersion) {
            @$query['DBVersion'] = $request->DBVersion;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusters',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of AnalyticDB for MySQL clusters within a region.
     *
     * @param request - DescribeDBClustersRequest
     *
     * @returns DescribeDBClustersResponse
     *
     * @param DescribeDBClustersRequest $request
     *
     * @return DescribeDBClustersResponse
     */
    public function describeDBClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClustersWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a resource group for an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @remarks
     * ###
     * You can call this operation only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *
     * @param request - DescribeDBResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBResourceGroupResponse
     *
     * @param DescribeDBResourceGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDBResourceGroupResponse
     */
    public function describeDBResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBResourceGroup',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a resource group for an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @remarks
     * ###
     * You can call this operation only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *
     * @param request - DescribeDBResourceGroupRequest
     *
     * @returns DescribeDBResourceGroupResponse
     *
     * @param DescribeDBResourceGroupRequest $request
     *
     * @return DescribeDBResourceGroupResponse
     */
    public function describeDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * 查询资源组详情.
     *
     * @remarks
     * This operation is applicable only for elastic clusters of 32 cores or more.
     *
     * @param request - DescribeDBResourcePoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBResourcePoolResponse
     *
     * @param DescribeDBResourcePoolRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDBResourcePoolResponse
     */
    public function describeDBResourcePoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolName) {
            @$query['PoolName'] = $request->poolName;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBResourcePool',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询资源组详情.
     *
     * @remarks
     * This operation is applicable only for elastic clusters of 32 cores or more.
     *
     * @param request - DescribeDBResourcePoolRequest
     *
     * @returns DescribeDBResourcePoolResponse
     *
     * @param DescribeDBResourcePoolRequest $request
     *
     * @return DescribeDBResourcePoolResponse
     */
    public function describeDBResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBResourcePoolWithOptions($request, $runtime);
    }

    /**
     * Queries the deduplicated statistics of SQL statements that meet a condition of the resource group, database, username, and source IP address in an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeDiagnosisDimensionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiagnosisDimensionsResponse
     *
     * @param DescribeDiagnosisDimensionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDiagnosisDimensionsResponse
     */
    public function describeDiagnosisDimensionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->queryCondition) {
            @$query['QueryCondition'] = $request->queryCondition;
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
            'action' => 'DescribeDiagnosisDimensions',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiagnosisDimensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the deduplicated statistics of SQL statements that meet a condition of the resource group, database, username, and source IP address in an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeDiagnosisDimensionsRequest
     *
     * @returns DescribeDiagnosisDimensionsResponse
     *
     * @param DescribeDiagnosisDimensionsRequest $request
     *
     * @return DescribeDiagnosisDimensionsResponse
     */
    public function describeDiagnosisDimensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisDimensionsWithOptions($request, $runtime);
    }

    /**
     * Queries the monitoring information about queries within a time range.
     *
     * @param request - DescribeDiagnosisMonitorPerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiagnosisMonitorPerformanceResponse
     *
     * @param DescribeDiagnosisMonitorPerformanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeDiagnosisMonitorPerformanceResponse
     */
    public function describeDiagnosisMonitorPerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->queryCondition) {
            @$query['QueryCondition'] = $request->queryCondition;
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
            'action' => 'DescribeDiagnosisMonitorPerformance',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiagnosisMonitorPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monitoring information about queries within a time range.
     *
     * @param request - DescribeDiagnosisMonitorPerformanceRequest
     *
     * @returns DescribeDiagnosisMonitorPerformanceResponse
     *
     * @param DescribeDiagnosisMonitorPerformanceRequest $request
     *
     * @return DescribeDiagnosisMonitorPerformanceResponse
     */
    public function describeDiagnosisMonitorPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisMonitorPerformanceWithOptions($request, $runtime);
    }

    /**
     * Queries the diagnostic information about SQL statements that meet a condition in an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeDiagnosisRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiagnosisRecordsResponse
     *
     * @param DescribeDiagnosisRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDiagnosisRecordsResponse
     */
    public function describeDiagnosisRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientIp) {
            @$query['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->maxPeakMemory) {
            @$query['MaxPeakMemory'] = $request->maxPeakMemory;
        }

        if (null !== $request->maxScanSize) {
            @$query['MaxScanSize'] = $request->maxScanSize;
        }

        if (null !== $request->minPeakMemory) {
            @$query['MinPeakMemory'] = $request->minPeakMemory;
        }

        if (null !== $request->minScanSize) {
            @$query['MinScanSize'] = $request->minScanSize;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->patternId) {
            @$query['PatternId'] = $request->patternId;
        }

        if (null !== $request->queryCondition) {
            @$query['QueryCondition'] = $request->queryCondition;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroup) {
            @$query['ResourceGroup'] = $request->resourceGroup;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiagnosisRecords',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiagnosisRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the diagnostic information about SQL statements that meet a condition in an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeDiagnosisRecordsRequest
     *
     * @returns DescribeDiagnosisRecordsResponse
     *
     * @param DescribeDiagnosisRecordsRequest $request
     *
     * @return DescribeDiagnosisRecordsResponse
     */
    public function describeDiagnosisRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the execution information about an SQL statement, including the execution plan, execution information, resource usage, and self-diagnostics results.
     *
     * @param request - DescribeDiagnosisSQLInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiagnosisSQLInfoResponse
     *
     * @param DescribeDiagnosisSQLInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDiagnosisSQLInfoResponse
     */
    public function describeDiagnosisSQLInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiagnosisSQLInfo',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiagnosisSQLInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution information about an SQL statement, including the execution plan, execution information, resource usage, and self-diagnostics results.
     *
     * @param request - DescribeDiagnosisSQLInfoRequest
     *
     * @returns DescribeDiagnosisSQLInfoResponse
     *
     * @param DescribeDiagnosisSQLInfoRequest $request
     *
     * @return DescribeDiagnosisSQLInfoResponse
     */
    public function describeDiagnosisSQLInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisSQLInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the execution information about distributed tasks in a stage of a query.
     *
     * @param request - DescribeDiagnosisTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiagnosisTasksResponse
     *
     * @param DescribeDiagnosisTasksRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDiagnosisTasksResponse
     */
    public function describeDiagnosisTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiagnosisTasks',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiagnosisTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution information about distributed tasks in a stage of a query.
     *
     * @param request - DescribeDiagnosisTasksRequest
     *
     * @returns DescribeDiagnosisTasksResponse
     *
     * @param DescribeDiagnosisTasksRequest $request
     *
     * @return DescribeDiagnosisTasksResponse
     */
    public function describeDiagnosisTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisTasksWithOptions($request, $runtime);
    }

    /**
     * Queries a list of download tasks for the last five SQL queries of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeDownloadRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDownloadRecordsResponse
     *
     * @param DescribeDownloadRecordsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDownloadRecordsResponse
     */
    public function describeDownloadRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDownloadRecords',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDownloadRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of download tasks for the last five SQL queries of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeDownloadRecordsRequest
     *
     * @returns DescribeDownloadRecordsResponse
     *
     * @param DescribeDownloadRecordsRequest $request
     *
     * @return DescribeDownloadRecordsResponse
     */
    public function describeDownloadRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the range for the number of elastic I/O units (EIUs) for an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @param request - DescribeEIURangeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEIURangeResponse
     *
     * @param DescribeEIURangeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeEIURangeResponse
     */
    public function describeEIURangeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->computeResource) {
            @$query['ComputeResource'] = $request->computeResource;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBClusterVersion) {
            @$query['DBClusterVersion'] = $request->DBClusterVersion;
        }

        if (null !== $request->operation) {
            @$query['Operation'] = $request->operation;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productVersion) {
            @$query['ProductVersion'] = $request->productVersion;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->storageSize) {
            @$query['StorageSize'] = $request->storageSize;
        }

        if (null !== $request->subOperation) {
            @$query['SubOperation'] = $request->subOperation;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEIURange',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEIURangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the range for the number of elastic I/O units (EIUs) for an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @param request - DescribeEIURangeRequest
     *
     * @returns DescribeEIURangeResponse
     *
     * @param DescribeEIURangeRequest $request
     *
     * @return DescribeEIURangeResponse
     */
    public function describeEIURange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEIURangeWithOptions($request, $runtime);
    }

    /**
     * 查看日资源弹性.
     *
     * @remarks
     * This operation is available only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *
     * @param request - DescribeElasticDailyPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeElasticDailyPlanResponse
     *
     * @param DescribeElasticDailyPlanRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeElasticDailyPlanResponse
     */
    public function describeElasticDailyPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->elasticDailyPlanDay) {
            @$query['ElasticDailyPlanDay'] = $request->elasticDailyPlanDay;
        }

        if (null !== $request->elasticDailyPlanStatusList) {
            @$query['ElasticDailyPlanStatusList'] = $request->elasticDailyPlanStatusList;
        }

        if (null !== $request->elasticPlanName) {
            @$query['ElasticPlanName'] = $request->elasticPlanName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourcePoolName) {
            @$query['ResourcePoolName'] = $request->resourcePoolName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeElasticDailyPlan',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeElasticDailyPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看日资源弹性.
     *
     * @remarks
     * This operation is available only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *
     * @param request - DescribeElasticDailyPlanRequest
     *
     * @returns DescribeElasticDailyPlanResponse
     *
     * @param DescribeElasticDailyPlanRequest $request
     *
     * @return DescribeElasticDailyPlanResponse
     */
    public function describeElasticDailyPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticDailyPlanWithOptions($request, $runtime);
    }

    /**
     * Queries scaling plans of an AnalyticDB for MySQL cluster. This operation can be used only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *
     * @remarks
     * ###
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *
     * @param request - DescribeElasticPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeElasticPlanResponse
     *
     * @param DescribeElasticPlanRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeElasticPlanResponse
     */
    public function describeElasticPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->elasticPlanEnable) {
            @$query['ElasticPlanEnable'] = $request->elasticPlanEnable;
        }

        if (null !== $request->elasticPlanName) {
            @$query['ElasticPlanName'] = $request->elasticPlanName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourcePoolName) {
            @$query['ResourcePoolName'] = $request->resourcePoolName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeElasticPlan',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeElasticPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries scaling plans of an AnalyticDB for MySQL cluster. This operation can be used only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *
     * @remarks
     * ###
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *
     * @param request - DescribeElasticPlanRequest
     *
     * @returns DescribeElasticPlanResponse
     *
     * @param DescribeElasticPlanRequest $request
     *
     * @return DescribeElasticPlanResponse
     */
    public function describeElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticPlanWithOptions($request, $runtime);
    }

    /**
     * Queries the tables that have excessive primary key fields in an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @param request - DescribeExcessivePrimaryKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExcessivePrimaryKeysResponse
     *
     * @param DescribeExcessivePrimaryKeysRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeExcessivePrimaryKeysResponse
     */
    public function describeExcessivePrimaryKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExcessivePrimaryKeys',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExcessivePrimaryKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tables that have excessive primary key fields in an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @param request - DescribeExcessivePrimaryKeysRequest
     *
     * @returns DescribeExcessivePrimaryKeysResponse
     *
     * @param DescribeExcessivePrimaryKeysRequest $request
     *
     * @return DescribeExcessivePrimaryKeysResponse
     */
    public function describeExcessivePrimaryKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExcessivePrimaryKeysWithOptions($request, $runtime);
    }

    /**
     * Queries the diagnostic results of the compute layer.
     *
     * @param request - DescribeExecutorDetectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExecutorDetectionResponse
     *
     * @param DescribeExecutorDetectionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeExecutorDetectionResponse
     */
    public function describeExecutorDetectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExecutorDetection',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExecutorDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the diagnostic results of the compute layer.
     *
     * @param request - DescribeExecutorDetectionRequest
     *
     * @returns DescribeExecutorDetectionResponse
     *
     * @param DescribeExecutorDetectionRequest $request
     *
     * @return DescribeExecutorDetectionResponse
     */
    public function describeExecutorDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExecutorDetectionWithOptions($request, $runtime);
    }

    /**
     * Queries the information about historical events in the event center.
     *
     * @param request - DescribeHistoryEventsStatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHistoryEventsStatResponse
     *
     * @param DescribeHistoryEventsStatRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeHistoryEventsStatResponse
     */
    public function describeHistoryEventsStatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->archiveStatus) {
            @$query['ArchiveStatus'] = $request->archiveStatus;
        }

        if (null !== $request->fromStartTime) {
            @$query['FromStartTime'] = $request->fromStartTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->toStartTime) {
            @$query['ToStartTime'] = $request->toStartTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHistoryEventsStat',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHistoryEventsStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about historical events in the event center.
     *
     * @param request - DescribeHistoryEventsStatRequest
     *
     * @returns DescribeHistoryEventsStatResponse
     *
     * @param DescribeHistoryEventsStatRequest $request
     *
     * @return DescribeHistoryEventsStatResponse
     */
    public function describeHistoryEventsStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryEventsStatWithOptions($request, $runtime);
    }

    /**
     * Queries the disk usage of all storage nodes.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeInclinedNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInclinedNodesResponse
     *
     * @param DescribeInclinedNodesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInclinedNodesResponse
     */
    public function describeInclinedNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInclinedNodes',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInclinedNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the disk usage of all storage nodes.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeInclinedNodesRequest
     *
     * @returns DescribeInclinedNodesResponse
     *
     * @param DescribeInclinedNodesRequest $request
     *
     * @return DescribeInclinedNodesResponse
     */
    public function describeInclinedNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInclinedNodesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about skewed tables for an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeInclinedTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInclinedTablesResponse
     *
     * @param DescribeInclinedTablesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInclinedTablesResponse
     */
    public function describeInclinedTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tableType) {
            @$query['TableType'] = $request->tableType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInclinedTables',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInclinedTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about skewed tables for an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeInclinedTablesRequest
     *
     * @returns DescribeInclinedTablesResponse
     *
     * @param DescribeInclinedTablesRequest $request
     *
     * @return DescribeInclinedTablesResponse
     */
    public function describeInclinedTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInclinedTablesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the minor version of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeKernelVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeKernelVersionResponse
     *
     * @param DescribeKernelVersionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeKernelVersionResponse
     */
    public function describeKernelVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeKernelVersion',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeKernelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the minor version of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeKernelVersionRequest
     *
     * @returns DescribeKernelVersionResponse
     *
     * @param DescribeKernelVersionRequest $request
     *
     * @return DescribeKernelVersionResponse
     */
    public function describeKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKernelVersionWithOptions($request, $runtime);
    }

    /**
     * Queries a list of Key Management Service (KMS) keys.
     *
     * @param request - DescribeKmsKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeKmsKeysResponse
     *
     * @param DescribeKmsKeysRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeKmsKeysResponse
     */
    public function describeKmsKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeKmsKeys',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeKmsKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Key Management Service (KMS) keys.
     *
     * @param request - DescribeKmsKeysRequest
     *
     * @returns DescribeKmsKeysResponse
     *
     * @param DescribeKmsKeysRequest $request
     *
     * @return DescribeKmsKeysResponse
     */
    public function describeKmsKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKmsKeysWithOptions($request, $runtime);
    }

    /**
     * Queries the information about asynchronous import and export tasks of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about how to asynchronously submit import and export tasks, see [Asynchronously submit an import or export task](https://help.aliyun.com/document_detail/160291.html).
     *
     * @param request - DescribeLoadTasksRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadTasksRecordsResponse
     *
     * @param DescribeLoadTasksRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLoadTasksRecordsResponse
     */
    public function describeLoadTasksRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'action' => 'DescribeLoadTasksRecords',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadTasksRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about asynchronous import and export tasks of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about how to asynchronously submit import and export tasks, see [Asynchronously submit an import or export task](https://help.aliyun.com/document_detail/160291.html).
     *
     * @param request - DescribeLoadTasksRecordsRequest
     *
     * @returns DescribeLoadTasksRecordsResponse
     *
     * @param DescribeLoadTasksRecordsRequest $request
     *
     * @return DescribeLoadTasksRecordsResponse
     */
    public function describeLoadTasksRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadTasksRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a log shipping job.
     *
     * @param request - DescribeLogHubAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogHubAttributeResponse
     *
     * @param DescribeLogHubAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLogHubAttributeResponse
     */
    public function describeLogHubAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->deliverName) {
            @$query['DeliverName'] = $request->deliverName;
        }

        if (null !== $request->logStoreName) {
            @$query['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLogHubAttribute',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogHubAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a log shipping job.
     *
     * @param request - DescribeLogHubAttributeRequest
     *
     * @returns DescribeLogHubAttributeResponse
     *
     * @param DescribeLogHubAttributeRequest $request
     *
     * @return DescribeLogHubAttributeResponse
     */
    public function describeLogHubAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogHubAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries a list of log keywords in a Logstore.
     *
     * @param request - DescribeLogStoreKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogStoreKeysResponse
     *
     * @param DescribeLogStoreKeysRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeLogStoreKeysResponse
     */
    public function describeLogStoreKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logStoreName) {
            @$query['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLogStoreKeys',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogStoreKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of log keywords in a Logstore.
     *
     * @param request - DescribeLogStoreKeysRequest
     *
     * @returns DescribeLogStoreKeysResponse
     *
     * @param DescribeLogStoreKeysRequest $request
     *
     * @return DescribeLogStoreKeysResponse
     */
    public function describeLogStoreKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogStoreKeysWithOptions($request, $runtime);
    }

    /**
     * Queries the log collection information.
     *
     * @param request - DescribeLoghubDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoghubDetailResponse
     *
     * @param DescribeLoghubDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeLoghubDetailResponse
     */
    public function describeLoghubDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exportName) {
            @$query['ExportName'] = $request->exportName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoghubDetail',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoghubDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the log collection information.
     *
     * @param request - DescribeLoghubDetailRequest
     *
     * @returns DescribeLoghubDetailResponse
     *
     * @param DescribeLoghubDetailRequest $request
     *
     * @return DescribeLoghubDetailResponse
     */
    public function describeLoghubDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoghubDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the information about O&M events.
     *
     * @param request - DescribeMaintenanceActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMaintenanceActionResponse
     *
     * @param DescribeMaintenanceActionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMaintenanceActionResponse
     */
    public function describeMaintenanceActionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isHistory) {
            @$query['IsHistory'] = $request->isHistory;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMaintenanceAction',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMaintenanceActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about O&M events.
     *
     * @param request - DescribeMaintenanceActionRequest
     *
     * @returns DescribeMaintenanceActionResponse
     *
     * @param DescribeMaintenanceActionRequest $request
     *
     * @return DescribeMaintenanceActionResponse
     */
    public function describeMaintenanceAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMaintenanceActionWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the permissions granted to the service account of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeOperatorPermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOperatorPermissionResponse
     *
     * @param DescribeOperatorPermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeOperatorPermissionResponse
     */
    public function describeOperatorPermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOperatorPermission',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOperatorPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the permissions granted to the service account of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeOperatorPermissionRequest
     *
     * @returns DescribeOperatorPermissionResponse
     *
     * @param DescribeOperatorPermissionRequest $request
     *
     * @return DescribeOperatorPermissionResponse
     */
    public function describeOperatorPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOperatorPermissionWithOptions($request, $runtime);
    }

    /**
     * Queries the information about oversized non-partitioned tables in an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeOversizeNonPartitionTableInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOversizeNonPartitionTableInfosResponse
     *
     * @param DescribeOversizeNonPartitionTableInfosRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeOversizeNonPartitionTableInfosResponse
     */
    public function describeOversizeNonPartitionTableInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOversizeNonPartitionTableInfos',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOversizeNonPartitionTableInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about oversized non-partitioned tables in an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeOversizeNonPartitionTableInfosRequest
     *
     * @returns DescribeOversizeNonPartitionTableInfosResponse
     *
     * @param DescribeOversizeNonPartitionTableInfosRequest $request
     *
     * @return DescribeOversizeNonPartitionTableInfosResponse
     */
    public function describeOversizeNonPartitionTableInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOversizeNonPartitionTableInfosWithOptions($request, $runtime);
    }

    /**
     * Queries the metrics of an SQL pattern such as the query duration and average memory usage within a period of time.
     *
     * @param request - DescribePatternPerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePatternPerformanceResponse
     *
     * @param DescribePatternPerformanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePatternPerformanceResponse
     */
    public function describePatternPerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->patternId) {
            @$query['PatternId'] = $request->patternId;
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
            'action' => 'DescribePatternPerformance',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePatternPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metrics of an SQL pattern such as the query duration and average memory usage within a period of time.
     *
     * @param request - DescribePatternPerformanceRequest
     *
     * @returns DescribePatternPerformanceResponse
     *
     * @param DescribePatternPerformanceRequest $request
     *
     * @return DescribePatternPerformanceResponse
     */
    public function describePatternPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePatternPerformanceWithOptions($request, $runtime);
    }

    /**
     * Queries the queries that are being executed on a cluster.
     *
     * @param request - DescribeProcessListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProcessListResponse
     *
     * @param DescribeProcessListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeProcessListResponse
     */
    public function describeProcessListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->runningTime) {
            @$query['RunningTime'] = $request->runningTime;
        }

        if (null !== $request->showFull) {
            @$query['ShowFull'] = $request->showFull;
        }

        if (null !== $request->user) {
            @$query['User'] = $request->user;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProcessList',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProcessListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the queries that are being executed on a cluster.
     *
     * @param request - DescribeProcessListRequest
     *
     * @returns DescribeProcessListResponse
     *
     * @param DescribeProcessListRequest $request
     *
     * @return DescribeProcessListResponse
     */
    public function describeProcessList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProcessListWithOptions($request, $runtime);
    }

    /**
     * Queries the information about specifications of MySQL analytic instances.
     *
     * @param request - DescribeRdsAnalysisResourceQuotasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRdsAnalysisResourceQuotasResponse
     *
     * @param DescribeRdsAnalysisResourceQuotasRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeRdsAnalysisResourceQuotasResponse
     */
    public function describeRdsAnalysisResourceQuotasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterCategory) {
            @$query['ClusterCategory'] = $request->clusterCategory;
        }

        if (null !== $request->clusterMode) {
            @$query['ClusterMode'] = $request->clusterMode;
        }

        if (null !== $request->nodeClass) {
            @$query['NodeClass'] = $request->nodeClass;
        }

        if (null !== $request->nodeCount) {
            @$query['NodeCount'] = $request->nodeCount;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->rdsInstanceId) {
            @$query['RdsInstanceId'] = $request->rdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRdsAnalysisResourceQuotas',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRdsAnalysisResourceQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about specifications of MySQL analytic instances.
     *
     * @param request - DescribeRdsAnalysisResourceQuotasRequest
     *
     * @returns DescribeRdsAnalysisResourceQuotasResponse
     *
     * @param DescribeRdsAnalysisResourceQuotasRequest $request
     *
     * @return DescribeRdsAnalysisResourceQuotasResponse
     */
    public function describeRdsAnalysisResourceQuotas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsAnalysisResourceQuotasWithOptions($request, $runtime);
    }

    /**
     * Queries a list of available regions and zones for AnalyticDB for MySQL.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of available regions and zones for AnalyticDB for MySQL.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries information about regions.
     *
     * @param request - DescribeRegionsMixedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsMixedResponse
     *
     * @param DescribeRegionsMixedRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRegionsMixedResponse
     */
    public function describeRegionsMixedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegionsMixed',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsMixedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about regions.
     *
     * @param request - DescribeRegionsMixedRequest
     *
     * @returns DescribeRegionsMixedResponse
     *
     * @param DescribeRegionsMixedRequest $request
     *
     * @return DescribeRegionsMixedResponse
     */
    public function describeRegionsMixed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsMixedWithOptions($request, $runtime);
    }

    /**
     * 查询Resubmit配置.
     *
     * @param request - DescribeResubmitConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResubmitConfigResponse
     *
     * @param DescribeResubmitConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeResubmitConfigResponse
     */
    public function describeResubmitConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResubmitConfig',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResubmitConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Resubmit配置.
     *
     * @param request - DescribeResubmitConfigRequest
     *
     * @returns DescribeResubmitConfigResponse
     *
     * @param DescribeResubmitConfigRequest $request
     *
     * @return DescribeResubmitConfigResponse
     */
    public function describeResubmitConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResubmitConfigWithOptions($request, $runtime);
    }

    /**
     * 查询SQA状态
     *
     * @param request - DescribeSQAConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSQAConfigResponse
     *
     * @param DescribeSQAConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSQAConfigResponse
     */
    public function describeSQAConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSQAConfig',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSQAConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询SQA状态
     *
     * @param request - DescribeSQAConfigRequest
     *
     * @returns DescribeSQAConfigResponse
     *
     * @param DescribeSQAConfigRequest $request
     *
     * @return DescribeSQAConfigResponse
     */
    public function describeSQAConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQAConfigWithOptions($request, $runtime);
    }

    /**
     * Queries a list of SQL patterns for an AnalyticDB for MySQL cluster within a period of time.
     *
     * @param request - DescribeSQLPatternsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSQLPatternsResponse
     *
     * @param DescribeSQLPatternsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSQLPatternsResponse
     */
    public function describeSQLPatternsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
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
            'action' => 'DescribeSQLPatterns',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSQLPatternsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of SQL patterns for an AnalyticDB for MySQL cluster within a period of time.
     *
     * @param request - DescribeSQLPatternsRequest
     *
     * @returns DescribeSQLPatternsResponse
     *
     * @param DescribeSQLPatternsRequest $request
     *
     * @return DescribeSQLPatternsResponse
     */
    public function describeSQLPatterns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLPatternsWithOptions($request, $runtime);
    }

    /**
     * Queries the plan information about an SQL statement such as a query statement or an extract-transform-load (ETL) task statement.
     *
     * @param request - DescribeSQLPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSQLPlanResponse
     *
     * @param DescribeSQLPlanRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeSQLPlanResponse
     */
    public function describeSQLPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->processId) {
            @$query['ProcessId'] = $request->processId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSQLPlan',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSQLPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the plan information about an SQL statement such as a query statement or an extract-transform-load (ETL) task statement.
     *
     * @param request - DescribeSQLPlanRequest
     *
     * @returns DescribeSQLPlanResponse
     *
     * @param DescribeSQLPlanRequest $request
     *
     * @return DescribeSQLPlanResponse
     */
    public function describeSQLPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLPlanWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a task.
     *
     * @param request - DescribeSQLPlanTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSQLPlanTaskResponse
     *
     * @param DescribeSQLPlanTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSQLPlanTaskResponse
     */
    public function describeSQLPlanTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->processId) {
            @$query['ProcessId'] = $request->processId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->stageId) {
            @$query['StageId'] = $request->stageId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSQLPlanTask',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSQLPlanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a task.
     *
     * @param request - DescribeSQLPlanTaskRequest
     *
     * @returns DescribeSQLPlanTaskResponse
     *
     * @param DescribeSQLPlanTaskRequest $request
     *
     * @return DescribeSQLPlanTaskResponse
     */
    public function describeSQLPlanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLPlanTaskWithOptions($request, $runtime);
    }

    /**
     * Queries a list of databases in an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeSchemasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSchemasResponse
     *
     * @param DescribeSchemasRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeSchemasResponse
     */
    public function describeSchemasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSchemas',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of databases in an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeSchemasRequest
     *
     * @returns DescribeSchemasResponse
     *
     * @param DescribeSchemasRequest $request
     *
     * @return DescribeSchemasResponse
     */
    public function describeSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSchemasWithOptions($request, $runtime);
    }

    /**
     * 查看慢日志.
     *
     * @param request - DescribeSlowLogRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlowLogRecordsResponse
     *
     * @param DescribeSlowLogRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->processID) {
            @$query['ProcessID'] = $request->processID;
        }

        if (null !== $request->range) {
            @$query['Range'] = $request->range;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'action' => 'DescribeSlowLogRecords',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSlowLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看慢日志.
     *
     * @param request - DescribeSlowLogRecordsRequest
     *
     * @returns DescribeSlowLogRecordsResponse
     *
     * @param DescribeSlowLogRecordsRequest $request
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of SQL patterns for an AnalyticDB for MySQL cluster within a time range.
     *
     * @param request - DescribeSqlPatternRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSqlPatternResponse
     *
     * @param DescribeSqlPatternRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSqlPatternResponse
     */
    public function describeSqlPatternWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sqlPattern) {
            @$query['SqlPattern'] = $request->sqlPattern;
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
            'action' => 'DescribeSqlPattern',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSqlPatternResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of SQL patterns for an AnalyticDB for MySQL cluster within a time range.
     *
     * @param request - DescribeSqlPatternRequest
     *
     * @returns DescribeSqlPatternResponse
     *
     * @param DescribeSqlPatternRequest $request
     *
     * @return DescribeSqlPatternResponse
     */
    public function describeSqlPattern($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlPatternWithOptions($request, $runtime);
    }

    /**
     * Queries a list of instances or clusters that are available for data synchronization.
     *
     * @param request - DescribeSyncAvailableDBClusterListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSyncAvailableDBClusterListResponse
     *
     * @param DescribeSyncAvailableDBClusterListRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSyncAvailableDBClusterListResponse
     */
    public function describeSyncAvailableDBClusterListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sourceDBCluster) {
            @$query['SourceDBCluster'] = $request->sourceDBCluster;
        }

        if (null !== $request->syncPlatform) {
            @$query['SyncPlatform'] = $request->syncPlatform;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSyncAvailableDBClusterList',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSyncAvailableDBClusterListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of instances or clusters that are available for data synchronization.
     *
     * @param request - DescribeSyncAvailableDBClusterListRequest
     *
     * @returns DescribeSyncAvailableDBClusterListResponse
     *
     * @param DescribeSyncAvailableDBClusterListRequest $request
     *
     * @return DescribeSyncAvailableDBClusterListResponse
     */
    public function describeSyncAvailableDBClusterList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSyncAvailableDBClusterListWithOptions($request, $runtime);
    }

    /**
     * Queries a list of synchronization jobs in an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeSyncJobListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSyncJobListResponse
     *
     * @param DescribeSyncJobListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSyncJobListResponse
     */
    public function describeSyncJobListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->getSourceDetail) {
            @$query['GetSourceDetail'] = $request->getSourceDetail;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sourceDBClusterDescription) {
            @$query['SourceDBClusterDescription'] = $request->sourceDBClusterDescription;
        }

        if (null !== $request->sourceDBClusterId) {
            @$query['SourceDBClusterId'] = $request->sourceDBClusterId;
        }

        if (null !== $request->sourceDBType) {
            @$query['SourceDBType'] = $request->sourceDBType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSyncJobList',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSyncJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of synchronization jobs in an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeSyncJobListRequest
     *
     * @returns DescribeSyncJobListResponse
     *
     * @param DescribeSyncJobListRequest $request
     *
     * @return DescribeSyncJobListResponse
     */
    public function describeSyncJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSyncJobListWithOptions($request, $runtime);
    }

    /**
     * 查询表访问统计信息.
     *
     * @param request - DescribeTableAccessCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTableAccessCountResponse
     *
     * @param DescribeTableAccessCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeTableAccessCountResponse
     */
    public function describeTableAccessCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
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

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTableAccessCount',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTableAccessCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询表访问统计信息.
     *
     * @param request - DescribeTableAccessCountRequest
     *
     * @returns DescribeTableAccessCountResponse
     *
     * @param DescribeTableAccessCountRequest $request
     *
     * @return DescribeTableAccessCountResponse
     */
    public function describeTableAccessCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTableAccessCountWithOptions($request, $runtime);
    }

    /**
     * 查询表详情.
     *
     * @param request - DescribeTableDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTableDetailResponse
     *
     * @param DescribeTableDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeTableDetailResponse
     */
    public function describeTableDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTableDetail',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTableDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询表详情.
     *
     * @param request - DescribeTableDetailRequest
     *
     * @returns DescribeTableDetailResponse
     *
     * @param DescribeTableDetailRequest $request
     *
     * @return DescribeTableDetailResponse
     */
    public function describeTableDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTableDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the information about partition diagnostics.
     *
     * @param request - DescribeTablePartitionDiagnoseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTablePartitionDiagnoseResponse
     *
     * @param DescribeTablePartitionDiagnoseRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeTablePartitionDiagnoseResponse
     */
    public function describeTablePartitionDiagnoseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTablePartitionDiagnose',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTablePartitionDiagnoseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about partition diagnostics.
     *
     * @param request - DescribeTablePartitionDiagnoseRequest
     *
     * @returns DescribeTablePartitionDiagnoseResponse
     *
     * @param DescribeTablePartitionDiagnoseRequest $request
     *
     * @return DescribeTablePartitionDiagnoseResponse
     */
    public function describeTablePartitionDiagnose($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTablePartitionDiagnoseWithOptions($request, $runtime);
    }

    /**
     * Queries the information about table statistics for an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeTableStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTableStatisticsResponse
     *
     * @param DescribeTableStatisticsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTableStatisticsResponse
     */
    public function describeTableStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTableStatistics',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTableStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about table statistics for an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeTableStatisticsRequest
     *
     * @returns DescribeTableStatisticsResponse
     *
     * @param DescribeTableStatisticsRequest $request
     *
     * @return DescribeTableStatisticsResponse
     */
    public function describeTableStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTableStatisticsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of tables in a database of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTablesResponse
     *
     * @param DescribeTablesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeTablesResponse
     */
    public function describeTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTables',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of tables in a database of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeTablesRequest
     *
     * @returns DescribeTablesResponse
     *
     * @param DescribeTablesRequest $request
     *
     * @return DescribeTablesResponse
     */
    public function describeTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTablesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a task.
     *
     * @param request - DescribeTaskInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTaskInfoResponse
     *
     * @param DescribeTaskInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeTaskInfoResponse
     */
    public function describeTaskInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTaskInfo',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a task.
     *
     * @param request - DescribeTaskInfoRequest
     *
     * @returns DescribeTaskInfoResponse
     *
     * @param DescribeTaskInfoRequest $request
     *
     * @return DescribeTaskInfoResponse
     */
    public function describeTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the vSwitches.
     *
     * @param request - DescribeVSwitchesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVSwitchesResponse
     *
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vswId) {
            @$query['VswId'] = $request->vswId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVSwitches',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the vSwitches.
     *
     * @param request - DescribeVSwitchesRequest
     *
     * @returns DescribeVSwitchesResponse
     *
     * @param DescribeVSwitchesRequest $request
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of available vSwitches.
     *
     * @param request - DescribeVSwitchsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVSwitchsResponse
     *
     * @param DescribeVSwitchsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeVSwitchsResponse
     */
    public function describeVSwitchsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVSwitchs',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVSwitchsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of available vSwitches.
     *
     * @param request - DescribeVSwitchsRequest
     *
     * @returns DescribeVSwitchsResponse
     *
     * @param DescribeVSwitchsRequest $request
     *
     * @return DescribeVSwitchsResponse
     */
    public function describeVSwitchs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of available virtual private clouds (VPCs).
     *
     * @param request - DescribeVpcsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcsResponse
     *
     * @param DescribeVpcsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeVpcsResponse
     */
    public function describeVpcsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVpcs',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of available virtual private clouds (VPCs).
     *
     * @param request - DescribeVpcsRequest
     *
     * @returns DescribeVpcsResponse
     *
     * @param DescribeVpcsRequest $request
     *
     * @return DescribeVpcsResponse
     */
    public function describeVpcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcsWithOptions($request, $runtime);
    }

    /**
     * Queries the diagnostic results of the storage layer.
     *
     * @param request - DescribeWorkerDetectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWorkerDetectionResponse
     *
     * @param DescribeWorkerDetectionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeWorkerDetectionResponse
     */
    public function describeWorkerDetectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWorkerDetection',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWorkerDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the diagnostic results of the storage layer.
     *
     * @param request - DescribeWorkerDetectionRequest
     *
     * @returns DescribeWorkerDetectionResponse
     *
     * @param DescribeWorkerDetectionRequest $request
     *
     * @return DescribeWorkerDetectionResponse
     */
    public function describeWorkerDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWorkerDetectionWithOptions($request, $runtime);
    }

    /**
     * 关闭用户ENI.
     *
     * @remarks
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition.
     *
     * @param request - DetachUserENIRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachUserENIResponse
     *
     * @param DetachUserENIRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DetachUserENIResponse
     */
    public function detachUserENIWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachUserENI',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachUserENIResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭用户ENI.
     *
     * @remarks
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition.
     *
     * @param request - DetachUserENIRequest
     *
     * @returns DetachUserENIResponse
     *
     * @param DetachUserENIRequest $request
     *
     * @return DetachUserENIResponse
     */
    public function detachUserENI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachUserENIWithOptions($request, $runtime);
    }

    /**
     * Disables the suggestion feature.
     *
     * @param request - DisableAdviceServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableAdviceServiceResponse
     *
     * @param DisableAdviceServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DisableAdviceServiceResponse
     */
    public function disableAdviceServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableAdviceService',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableAdviceServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the suggestion feature.
     *
     * @param request - DisableAdviceServiceRequest
     *
     * @returns DisableAdviceServiceResponse
     *
     * @param DisableAdviceServiceRequest $request
     *
     * @return DisableAdviceServiceResponse
     */
    public function disableAdviceService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAdviceServiceWithOptions($request, $runtime);
    }

    /**
     * Downloads the diagnostic information about SQL statements that meet a condition for an AnalyticDB for MySQL cluster.
     *
     * @param request - DownloadDiagnosisRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadDiagnosisRecordsResponse
     *
     * @param DownloadDiagnosisRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DownloadDiagnosisRecordsResponse
     */
    public function downloadDiagnosisRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientIp) {
            @$query['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->maxPeakMemory) {
            @$query['MaxPeakMemory'] = $request->maxPeakMemory;
        }

        if (null !== $request->maxScanSize) {
            @$query['MaxScanSize'] = $request->maxScanSize;
        }

        if (null !== $request->minPeakMemory) {
            @$query['MinPeakMemory'] = $request->minPeakMemory;
        }

        if (null !== $request->minScanSize) {
            @$query['MinScanSize'] = $request->minScanSize;
        }

        if (null !== $request->queryCondition) {
            @$query['QueryCondition'] = $request->queryCondition;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroup) {
            @$query['ResourceGroup'] = $request->resourceGroup;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadDiagnosisRecords',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadDiagnosisRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Downloads the diagnostic information about SQL statements that meet a condition for an AnalyticDB for MySQL cluster.
     *
     * @param request - DownloadDiagnosisRecordsRequest
     *
     * @returns DownloadDiagnosisRecordsResponse
     *
     * @param DownloadDiagnosisRecordsRequest $request
     *
     * @return DownloadDiagnosisRecordsResponse
     */
    public function downloadDiagnosisRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadDiagnosisRecordsWithOptions($request, $runtime);
    }

    /**
     * 开通建议服务
     *
     * @param request - EnableAdviceServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableAdviceServiceResponse
     *
     * @param EnableAdviceServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EnableAdviceServiceResponse
     */
    public function enableAdviceServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableAdviceService',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableAdviceServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开通建议服务
     *
     * @param request - EnableAdviceServiceRequest
     *
     * @returns EnableAdviceServiceResponse
     *
     * @param EnableAdviceServiceRequest $request
     *
     * @return EnableAdviceServiceResponse
     */
    public function enableAdviceService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAdviceServiceWithOptions($request, $runtime);
    }

    /**
     * Queries the table creation statement for tables.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - GetCreateTableSQLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCreateTableSQLResponse
     *
     * @param GetCreateTableSQLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetCreateTableSQLResponse
     */
    public function getCreateTableSQLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCreateTableSQL',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCreateTableSQLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the table creation statement for tables.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - GetCreateTableSQLRequest
     *
     * @returns GetCreateTableSQLResponse
     *
     * @param GetCreateTableSQLRequest $request
     *
     * @return GetCreateTableSQLResponse
     */
    public function getCreateTableSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreateTableSQLWithOptions($request, $runtime);
    }

    /**
     * Grants permissions to the service account of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * ###
     * If you need Alibaba Cloud technical support to perform operations on your AnalyticDB for MySQL cluster, you must grant permissions to the service account of your cluster. When the validity period of the authorization ends, the granted permissions are automatically revoked.
     *
     * @param request - GrantOperatorPermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantOperatorPermissionResponse
     *
     * @param GrantOperatorPermissionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GrantOperatorPermissionResponse
     */
    public function grantOperatorPermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->expiredTime) {
            @$query['ExpiredTime'] = $request->expiredTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->privileges) {
            @$query['Privileges'] = $request->privileges;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GrantOperatorPermission',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GrantOperatorPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants permissions to the service account of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * ###
     * If you need Alibaba Cloud technical support to perform operations on your AnalyticDB for MySQL cluster, you must grant permissions to the service account of your cluster. When the validity period of the authorization ends, the granted permissions are automatically revoked.
     *
     * @param request - GrantOperatorPermissionRequest
     *
     * @returns GrantOperatorPermissionResponse
     *
     * @param GrantOperatorPermissionRequest $request
     *
     * @return GrantOperatorPermissionResponse
     */
    public function grantOperatorPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantOperatorPermissionWithOptions($request, $runtime);
    }

    /**
     * Terminates an ongoing query.
     *
     * @param request - KillProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KillProcessResponse
     *
     * @param KillProcessRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return KillProcessResponse
     */
    public function killProcessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->processId) {
            @$query['ProcessId'] = $request->processId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'KillProcess',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return KillProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminates an ongoing query.
     *
     * @param request - KillProcessRequest
     *
     * @returns KillProcessResponse
     *
     * @param KillProcessRequest $request
     *
     * @return KillProcessResponse
     */
    public function killProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killProcessWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are added to AnalyticDB for MySQL clusters, or the AnalyticDB for MySQL clusters that have tags added.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'action' => 'ListTagResources',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags that are added to AnalyticDB for MySQL clusters, or the AnalyticDB for MySQL clusters that have tags added.
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

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Migrates data from a Data Warehouse Edition cluster to a Data Lakehouse Edition cluster in AnalyticDB for MySQL.
     *
     * @param request - MigrateDBClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MigrateDBClusterResponse
     *
     * @param MigrateDBClusterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return MigrateDBClusterResponse
     */
    public function migrateDBClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->computeResource) {
            @$query['ComputeResource'] = $request->computeResource;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productForm) {
            @$query['ProductForm'] = $request->productForm;
        }

        if (null !== $request->productVersion) {
            @$query['ProductVersion'] = $request->productVersion;
        }

        if (null !== $request->reservedNodeCount) {
            @$query['ReservedNodeCount'] = $request->reservedNodeCount;
        }

        if (null !== $request->reservedNodeSize) {
            @$query['ReservedNodeSize'] = $request->reservedNodeSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->secondaryVSwitchId) {
            @$query['SecondaryVSwitchId'] = $request->secondaryVSwitchId;
        }

        if (null !== $request->secondaryZoneId) {
            @$query['SecondaryZoneId'] = $request->secondaryZoneId;
        }

        if (null !== $request->shardNumber) {
            @$query['ShardNumber'] = $request->shardNumber;
        }

        if (null !== $request->storageResource) {
            @$query['StorageResource'] = $request->storageResource;
        }

        if (null !== $request->storageResourceSize) {
            @$query['StorageResourceSize'] = $request->storageResourceSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MigrateDBCluster',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MigrateDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Migrates data from a Data Warehouse Edition cluster to a Data Lakehouse Edition cluster in AnalyticDB for MySQL.
     *
     * @param request - MigrateDBClusterRequest
     *
     * @returns MigrateDBClusterResponse
     *
     * @param MigrateDBClusterRequest $request
     *
     * @return MigrateDBClusterResponse
     */
    public function migrateDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateDBClusterWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a database account for an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyAccountDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccountDescriptionResponse
     *
     * @param ModifyAccountDescriptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountDescription) {
            @$query['AccountDescription'] = $request->accountDescription;
        }

        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccountDescription',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a database account for an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyAccountDescriptionRequest
     *
     * @returns ModifyAccountDescriptionResponse
     *
     * @param ModifyAccountDescriptionRequest $request
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountDescriptionWithOptions($request, $runtime);
    }

    /**
     * Changes the time configuration of O\\&M events.
     *
     * @param request - ModifyActiveOperationMaintainConfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyActiveOperationMaintainConfResponse
     *
     * @param ModifyActiveOperationMaintainConfRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyActiveOperationMaintainConfResponse
     */
    public function modifyActiveOperationMaintainConfWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cycleTime) {
            @$query['CycleTime'] = $request->cycleTime;
        }

        if (null !== $request->cycleType) {
            @$query['CycleType'] = $request->cycleType;
        }

        if (null !== $request->maintainEndTime) {
            @$query['MaintainEndTime'] = $request->maintainEndTime;
        }

        if (null !== $request->maintainStartTime) {
            @$query['MaintainStartTime'] = $request->maintainStartTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyActiveOperationMaintainConf',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyActiveOperationMaintainConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the time configuration of O\\&M events.
     *
     * @param request - ModifyActiveOperationMaintainConfRequest
     *
     * @returns ModifyActiveOperationMaintainConfResponse
     *
     * @param ModifyActiveOperationMaintainConfRequest $request
     *
     * @return ModifyActiveOperationMaintainConfResponse
     */
    public function modifyActiveOperationMaintainConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActiveOperationMaintainConfWithOptions($request, $runtime);
    }

    /**
     * Changes the execution time of O&M events.
     *
     * @param request - ModifyActiveOperationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyActiveOperationTasksResponse
     *
     * @param ModifyActiveOperationTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyActiveOperationTasksResponse
     */
    public function modifyActiveOperationTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->immediateStart) {
            @$query['ImmediateStart'] = $request->immediateStart;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyActiveOperationTasks',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the execution time of O&M events.
     *
     * @param request - ModifyActiveOperationTasksRequest
     *
     * @returns ModifyActiveOperationTasksResponse
     *
     * @param ModifyActiveOperationTasksRequest $request
     *
     * @return ModifyActiveOperationTasksResponse
     */
    public function modifyActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * 修改审计日志设置.
     *
     * @param request - ModifyAuditLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAuditLogConfigResponse
     *
     * @param ModifyAuditLogConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyAuditLogConfigResponse
     */
    public function modifyAuditLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditLogStatus) {
            @$query['AuditLogStatus'] = $request->auditLogStatus;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAuditLogConfig',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAuditLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改审计日志设置.
     *
     * @param request - ModifyAuditLogConfigRequest
     *
     * @returns ModifyAuditLogConfigResponse
     *
     * @param ModifyAuditLogConfigRequest $request
     *
     * @return ModifyAuditLogConfigResponse
     */
    public function modifyAuditLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAuditLogConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the auto-renewal status of a subscription AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyAutoRenewAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAutoRenewAttributeResponse
     *
     * @param ModifyAutoRenewAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAutoRenewAttributeResponse
     */
    public function modifyAutoRenewAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->renewalStatus) {
            @$query['RenewalStatus'] = $request->renewalStatus;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAutoRenewAttribute',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the auto-renewal status of a subscription AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyAutoRenewAttributeRequest
     *
     * @returns ModifyAutoRenewAttributeResponse
     *
     * @param ModifyAutoRenewAttributeRequest $request
     *
     * @return ModifyAutoRenewAttributeResponse
     */
    public function modifyAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * 修改全量备份策略.
     *
     * @param request - ModifyBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBackupPolicyResponse
     *
     * @param ModifyBackupPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupRetentionPeriod) {
            @$query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->enableBackupLog) {
            @$query['EnableBackupLog'] = $request->enableBackupLog;
        }

        if (null !== $request->logBackupRetentionPeriod) {
            @$query['LogBackupRetentionPeriod'] = $request->logBackupRetentionPeriod;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->preferredBackupPeriod) {
            @$query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }

        if (null !== $request->preferredBackupTime) {
            @$query['PreferredBackupTime'] = $request->preferredBackupTime;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackupPolicy',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改全量备份策略.
     *
     * @param request - ModifyBackupPolicyRequest
     *
     * @returns ModifyBackupPolicyResponse
     *
     * @param ModifyBackupPolicyRequest $request
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * Changes the endpoint of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyClusterConnectionStringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterConnectionStringResponse
     *
     * @param ModifyClusterConnectionStringRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyClusterConnectionStringResponse
     */
    public function modifyClusterConnectionStringWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionStringPrefix) {
            @$query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }

        if (null !== $request->currentConnectionString) {
            @$query['CurrentConnectionString'] = $request->currentConnectionString;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterConnectionString',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyClusterConnectionStringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the endpoint of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyClusterConnectionStringRequest
     *
     * @returns ModifyClusterConnectionStringResponse
     *
     * @param ModifyClusterConnectionStringRequest $request
     *
     * @return ModifyClusterConnectionStringResponse
     */
    public function modifyClusterConnectionString($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterConnectionStringWithOptions($request, $runtime);
    }

    /**
     * Changes the specifications of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyDBClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterResponse
     *
     * @param ModifyDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyDBClusterResponse
     */
    public function modifyDBClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->computeResource) {
            @$query['ComputeResource'] = $request->computeResource;
        }

        if (null !== $request->DBClusterCategory) {
            @$query['DBClusterCategory'] = $request->DBClusterCategory;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBNodeClass) {
            @$query['DBNodeClass'] = $request->DBNodeClass;
        }

        if (null !== $request->DBNodeGroupCount) {
            @$query['DBNodeGroupCount'] = $request->DBNodeGroupCount;
        }

        if (null !== $request->DBNodeStorage) {
            @$query['DBNodeStorage'] = $request->DBNodeStorage;
        }

        if (null !== $request->diskPerformanceLevel) {
            @$query['DiskPerformanceLevel'] = $request->diskPerformanceLevel;
        }

        if (null !== $request->elasticIOResource) {
            @$query['ElasticIOResource'] = $request->elasticIOResource;
        }

        if (null !== $request->elasticIOResourceSize) {
            @$query['ElasticIOResourceSize'] = $request->elasticIOResourceSize;
        }

        if (null !== $request->executorCount) {
            @$query['ExecutorCount'] = $request->executorCount;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->modifyType) {
            @$query['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->storageResource) {
            @$query['StorageResource'] = $request->storageResource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBCluster',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the specifications of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyDBClusterRequest
     *
     * @returns ModifyDBClusterResponse
     *
     * @param ModifyDBClusterRequest $request
     *
     * @return ModifyDBClusterResponse
     */
    public function modifyDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterWithOptions($request, $runtime);
    }

    /**
     * Modifies the IP address whitelists of a cluster.
     *
     * @param request - ModifyDBClusterAccessWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterAccessWhiteListResponse
     *
     * @param ModifyDBClusterAccessWhiteListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyDBClusterAccessWhiteListResponse
     */
    public function modifyDBClusterAccessWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterIPArrayAttribute) {
            @$query['DBClusterIPArrayAttribute'] = $request->DBClusterIPArrayAttribute;
        }

        if (null !== $request->DBClusterIPArrayName) {
            @$query['DBClusterIPArrayName'] = $request->DBClusterIPArrayName;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->modifyMode) {
            @$query['ModifyMode'] = $request->modifyMode;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityIps) {
            @$query['SecurityIps'] = $request->securityIps;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterAccessWhiteList',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterAccessWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the IP address whitelists of a cluster.
     *
     * @param request - ModifyDBClusterAccessWhiteListRequest
     *
     * @returns ModifyDBClusterAccessWhiteListResponse
     *
     * @param ModifyDBClusterAccessWhiteListRequest $request
     *
     * @return ModifyDBClusterAccessWhiteListResponse
     */
    public function modifyDBClusterAccessWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterAccessWhiteListWithOptions($request, $runtime);
    }

    /**
     * 修改备注.
     *
     * @param request - ModifyDBClusterDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterDescriptionResponse
     *
     * @param ModifyDBClusterDescriptionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDBClusterDescriptionResponse
     */
    public function modifyDBClusterDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterDescription) {
            @$query['DBClusterDescription'] = $request->DBClusterDescription;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterDescription',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改备注.
     *
     * @param request - ModifyDBClusterDescriptionRequest
     *
     * @returns ModifyDBClusterDescriptionResponse
     *
     * @param ModifyDBClusterDescriptionRequest $request
     *
     * @return ModifyDBClusterDescriptionResponse
     */
    public function modifyDBClusterDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterDescriptionWithOptions($request, $runtime);
    }

    /**
     * Changes the maintenance window of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyDBClusterMaintainTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterMaintainTimeResponse
     *
     * @param ModifyDBClusterMaintainTimeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBClusterMaintainTimeResponse
     */
    public function modifyDBClusterMaintainTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->maintainTime) {
            @$query['MaintainTime'] = $request->maintainTime;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterMaintainTime',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterMaintainTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the maintenance window of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyDBClusterMaintainTimeRequest
     *
     * @returns ModifyDBClusterMaintainTimeResponse
     *
     * @param ModifyDBClusterMaintainTimeRequest $request
     *
     * @return ModifyDBClusterMaintainTimeResponse
     */
    public function modifyDBClusterMaintainTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * Changes the billing method of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyDBClusterPayTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterPayTypeResponse
     *
     * @param ModifyDBClusterPayTypeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDBClusterPayTypeResponse
     */
    public function modifyDBClusterPayTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbClusterId) {
            @$query['DbClusterId'] = $request->dbClusterId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterPayType',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterPayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the billing method of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyDBClusterPayTypeRequest
     *
     * @returns ModifyDBClusterPayTypeResponse
     *
     * @param ModifyDBClusterPayTypeRequest $request
     *
     * @return ModifyDBClusterPayTypeResponse
     */
    public function modifyDBClusterPayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterPayTypeWithOptions($request, $runtime);
    }

    /**
     * Modifies the resource group of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * Resource Management enables you to build an organizational structure for resources based on your business needs. You can use a resource directory, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](~~94475#concept-zyn-3p1-dhb~~ "Resource Management provides a collection of resource management services that support enterprise IT administration. The services include Resource Directory, Resource Group, and Tag. Resource Directory allows you to build an organizational structure for resources based on your business requirements. Resource Group and Tag allow you to hierarchically manage the resources. Resource Sharing allows you to share the resources among your accounts.")
     *
     * @param request - ModifyDBClusterResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterResourceGroupResponse
     *
     * @param ModifyDBClusterResourceGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDBClusterResourceGroupResponse
     */
    public function modifyDBClusterResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterResourceGroup',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the resource group of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * Resource Management enables you to build an organizational structure for resources based on your business needs. You can use a resource directory, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](~~94475#concept-zyn-3p1-dhb~~ "Resource Management provides a collection of resource management services that support enterprise IT administration. The services include Resource Directory, Resource Group, and Tag. Resource Directory allows you to build an organizational structure for resources based on your business requirements. Resource Group and Tag allow you to hierarchically manage the resources. Resource Sharing allows you to share the resources among your accounts.")
     *
     * @param request - ModifyDBClusterResourceGroupRequest
     *
     * @returns ModifyDBClusterResourceGroupResponse
     *
     * @param ModifyDBClusterResourceGroupRequest $request
     *
     * @return ModifyDBClusterResourceGroupResponse
     */
    public function modifyDBClusterResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Modifies the SSL configurations of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @param request - ModifyDBClusterSSLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterSSLResponse
     *
     * @param ModifyDBClusterSSLRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDBClusterSSLResponse
     */
    public function modifyDBClusterSSLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionString) {
            @$query['ConnectionString'] = $request->connectionString;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->enableSSL) {
            @$query['EnableSSL'] = $request->enableSSL;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterSSL',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the SSL configurations of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @param request - ModifyDBClusterSSLRequest
     *
     * @returns ModifyDBClusterSSLResponse
     *
     * @param ModifyDBClusterSSLRequest $request
     *
     * @return ModifyDBClusterSSLResponse
     */
    public function modifyDBClusterSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterSSLWithOptions($request, $runtime);
    }

    /**
     * Changes the number of shards for an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyDBClusterShardNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterShardNumberResponse
     *
     * @param ModifyDBClusterShardNumberRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDBClusterShardNumberResponse
     */
    public function modifyDBClusterShardNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->newShardNumber) {
            @$query['NewShardNumber'] = $request->newShardNumber;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        if (null !== $request->switchTimeMode) {
            @$query['SwitchTimeMode'] = $request->switchTimeMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterShardNumber',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterShardNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the number of shards for an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyDBClusterShardNumberRequest
     *
     * @returns ModifyDBClusterShardNumberResponse
     *
     * @param ModifyDBClusterShardNumberRequest $request
     *
     * @return ModifyDBClusterShardNumberResponse
     */
    public function modifyDBClusterShardNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterShardNumberWithOptions($request, $runtime);
    }

    /**
     * Changes the virtual IP address (VIP) that is used to connect to an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyDBClusterVipRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterVipResponse
     *
     * @param ModifyDBClusterVipRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDBClusterVipResponse
     */
    public function modifyDBClusterVipWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionString) {
            @$query['ConnectionString'] = $request->connectionString;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->VPCId) {
            @$query['VPCId'] = $request->VPCId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterVip',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterVipResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the virtual IP address (VIP) that is used to connect to an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyDBClusterVipRequest
     *
     * @returns ModifyDBClusterVipResponse
     *
     * @param ModifyDBClusterVipRequest $request
     *
     * @return ModifyDBClusterVipResponse
     */
    public function modifyDBClusterVip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterVipWithOptions($request, $runtime);
    }

    /**
     * Modifies the number of nodes or the query execution mode for a resource group of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @remarks
     * ## Precautions
     * *   This operation is applicable only for elastic clusters of 32 cores or more.
     * *   The number of nodes cannot be changed for the default resource group USER_DEFAULT.
     *
     * @param tmpReq - ModifyDBResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBResourceGroupResponse
     *
     * @param ModifyDBResourceGroupRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDBResourceGroupResponse
     */
    public function modifyDBResourceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyDBResourceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->poolUserList) {
            $request->poolUserListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->poolUserList, 'PoolUserList', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
        }

        if (null !== $request->nodeNum) {
            @$query['NodeNum'] = $request->nodeNum;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolUserListShrink) {
            @$query['PoolUserList'] = $request->poolUserListShrink;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBResourceGroup',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the number of nodes or the query execution mode for a resource group of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @remarks
     * ## Precautions
     * *   This operation is applicable only for elastic clusters of 32 cores or more.
     * *   The number of nodes cannot be changed for the default resource group USER_DEFAULT.
     *
     * @param request - ModifyDBResourceGroupRequest
     *
     * @returns ModifyDBResourceGroupResponse
     *
     * @param ModifyDBResourceGroupRequest $request
     *
     * @return ModifyDBResourceGroupResponse
     */
    public function modifyDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Modifies the resources of a resource group. This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *
     * @remarks
     * ###
     * *   You can call this operation only for elastic clusters of 32 cores or more.
     * *   You cannot change the number of nodes for the USER_DEFAULT resource group.
     *
     * @param request - ModifyDBResourcePoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBResourcePoolResponse
     *
     * @param ModifyDBResourcePoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDBResourcePoolResponse
     */
    public function modifyDBResourcePoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->nodeNum) {
            @$query['NodeNum'] = $request->nodeNum;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolName) {
            @$query['PoolName'] = $request->poolName;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBResourcePool',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the resources of a resource group. This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *
     * @remarks
     * ###
     * *   You can call this operation only for elastic clusters of 32 cores or more.
     * *   You cannot change the number of nodes for the USER_DEFAULT resource group.
     *
     * @param request - ModifyDBResourcePoolRequest
     *
     * @returns ModifyDBResourcePoolResponse
     *
     * @param ModifyDBResourcePoolRequest $request
     *
     * @return ModifyDBResourcePoolResponse
     */
    public function modifyDBResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBResourcePoolWithOptions($request, $runtime);
    }

    /**
     * Modifies a scheduled scaling plan. This operation can be used only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *
     * @remarks
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *
     * @param request - ModifyElasticPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyElasticPlanResponse
     *
     * @param ModifyElasticPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyElasticPlanResponse
     */
    public function modifyElasticPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->elasticPlanEnable) {
            @$query['ElasticPlanEnable'] = $request->elasticPlanEnable;
        }

        if (null !== $request->elasticPlanEndDay) {
            @$query['ElasticPlanEndDay'] = $request->elasticPlanEndDay;
        }

        if (null !== $request->elasticPlanMonthlyRepeat) {
            @$query['ElasticPlanMonthlyRepeat'] = $request->elasticPlanMonthlyRepeat;
        }

        if (null !== $request->elasticPlanName) {
            @$query['ElasticPlanName'] = $request->elasticPlanName;
        }

        if (null !== $request->elasticPlanNodeNum) {
            @$query['ElasticPlanNodeNum'] = $request->elasticPlanNodeNum;
        }

        if (null !== $request->elasticPlanStartDay) {
            @$query['ElasticPlanStartDay'] = $request->elasticPlanStartDay;
        }

        if (null !== $request->elasticPlanTimeEnd) {
            @$query['ElasticPlanTimeEnd'] = $request->elasticPlanTimeEnd;
        }

        if (null !== $request->elasticPlanTimeStart) {
            @$query['ElasticPlanTimeStart'] = $request->elasticPlanTimeStart;
        }

        if (null !== $request->elasticPlanType) {
            @$query['ElasticPlanType'] = $request->elasticPlanType;
        }

        if (null !== $request->elasticPlanWeeklyRepeat) {
            @$query['ElasticPlanWeeklyRepeat'] = $request->elasticPlanWeeklyRepeat;
        }

        if (null !== $request->elasticPlanWorkerSpec) {
            @$query['ElasticPlanWorkerSpec'] = $request->elasticPlanWorkerSpec;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourcePoolName) {
            @$query['ResourcePoolName'] = $request->resourcePoolName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyElasticPlan',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyElasticPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a scheduled scaling plan. This operation can be used only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *
     * @remarks
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *
     * @param request - ModifyElasticPlanRequest
     *
     * @returns ModifyElasticPlanResponse
     *
     * @param ModifyElasticPlanRequest $request
     *
     * @return ModifyElasticPlanResponse
     */
    public function modifyElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticPlanWithOptions($request, $runtime);
    }

    /**
     * Modifies the log backup settings of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyLogBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLogBackupPolicyResponse
     *
     * @param ModifyLogBackupPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyLogBackupPolicyResponse
     */
    public function modifyLogBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->enableBackupLog) {
            @$query['EnableBackupLog'] = $request->enableBackupLog;
        }

        if (null !== $request->logBackupRetentionPeriod) {
            @$query['LogBackupRetentionPeriod'] = $request->logBackupRetentionPeriod;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLogBackupPolicy',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLogBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the log backup settings of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyLogBackupPolicyRequest
     *
     * @returns ModifyLogBackupPolicyResponse
     *
     * @param ModifyLogBackupPolicyRequest $request
     *
     * @return ModifyLogBackupPolicyResponse
     */
    public function modifyLogBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * Changes the status of a log shipping job.
     *
     * @param request - ModifyLogHubStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLogHubStatusResponse
     *
     * @param ModifyLogHubStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyLogHubStatusResponse
     */
    public function modifyLogHubStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->deliverName) {
            @$query['DeliverName'] = $request->deliverName;
        }

        if (null !== $request->logStoreName) {
            @$query['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLogHubStatus',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLogHubStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the status of a log shipping job.
     *
     * @param request - ModifyLogHubStatusRequest
     *
     * @returns ModifyLogHubStatusResponse
     *
     * @param ModifyLogHubStatusRequest $request
     *
     * @return ModifyLogHubStatusResponse
     */
    public function modifyLogHubStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogHubStatusWithOptions($request, $runtime);
    }

    /**
     * Changes the switchover time of O&M events.
     *
     * @param request - ModifyMaintenanceActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMaintenanceActionResponse
     *
     * @param ModifyMaintenanceActionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyMaintenanceActionResponse
     */
    public function modifyMaintenanceActionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMaintenanceAction',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMaintenanceActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the switchover time of O&M events.
     *
     * @param request - ModifyMaintenanceActionRequest
     *
     * @returns ModifyMaintenanceActionResponse
     *
     * @param ModifyMaintenanceActionRequest $request
     *
     * @return ModifyMaintenanceActionResponse
     */
    public function modifyMaintenanceAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMaintenanceActionWithOptions($request, $runtime);
    }

    /**
     * 修改Resubmit配置.
     *
     * @param tmpReq - ModifyResubmitConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyResubmitConfigResponse
     *
     * @param ModifyResubmitConfigRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyResubmitConfigResponse
     */
    public function modifyResubmitConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyResubmitConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->rules) {
            $request->rulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }

        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->rulesShrink) {
            @$query['Rules'] = $request->rulesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyResubmitConfig',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyResubmitConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改Resubmit配置.
     *
     * @param request - ModifyResubmitConfigRequest
     *
     * @returns ModifyResubmitConfigResponse
     *
     * @param ModifyResubmitConfigRequest $request
     *
     * @return ModifyResubmitConfigResponse
     */
    public function modifyResubmitConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResubmitConfigWithOptions($request, $runtime);
    }

    /**
     * 修改SQA配置.
     *
     * @param request - ModifySQAConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySQAConfigResponse
     *
     * @param ModifySQAConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifySQAConfigResponse
     */
    public function modifySQAConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->SQAStatus) {
            @$query['SQAStatus'] = $request->SQAStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySQAConfig',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySQAConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改SQA配置.
     *
     * @param request - ModifySQAConfigRequest
     *
     * @returns ModifySQAConfigResponse
     *
     * @param ModifySQAConfigRequest $request
     *
     * @return ModifySQAConfigResponse
     */
    public function modifySQAConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySQAConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the synchronization jobs for an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifySyncJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySyncJobResponse
     *
     * @param ModifySyncJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifySyncJobResponse
     */
    public function modifySyncJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sourceDBCluster) {
            @$query['SourceDBCluster'] = $request->sourceDBCluster;
        }

        if (null !== $request->syncPlatform) {
            @$query['SyncPlatform'] = $request->syncPlatform;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySyncJob',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySyncJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the synchronization jobs for an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifySyncJobRequest
     *
     * @returns ModifySyncJobResponse
     *
     * @param ModifySyncJobRequest $request
     *
     * @return ModifySyncJobResponse
     */
    public function modifySyncJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySyncJobWithOptions($request, $runtime);
    }

    /**
     * 修改LogHub投递规则.
     *
     * @param request - OperateLogHubRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateLogHubResponse
     *
     * @param OperateLogHubRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return OperateLogHubResponse
     */
    public function operateLogHubWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->create) {
            @$query['Create'] = $request->create;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->deliverName) {
            @$query['DeliverName'] = $request->deliverName;
        }

        if (null !== $request->deliverTime) {
            @$query['DeliverTime'] = $request->deliverTime;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->filterDirtyData) {
            @$query['FilterDirtyData'] = $request->filterDirtyData;
        }

        if (null !== $request->logHubStores) {
            @$query['LogHubStores'] = $request->logHubStores;
        }

        if (null !== $request->logStoreName) {
            @$query['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->provider) {
            @$query['Provider'] = $request->provider;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateLogHub',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateLogHubResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改LogHub投递规则.
     *
     * @param request - OperateLogHubRequest
     *
     * @returns OperateLogHubResponse
     *
     * @param OperateLogHubRequest $request
     *
     * @return OperateLogHubResponse
     */
    public function operateLogHub($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateLogHubWithOptions($request, $runtime);
    }

    /**
     * Releases the public endpoint of an AnalyticDB for MySQL cluster.
     *
     * @param request - ReleaseClusterPublicConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseClusterPublicConnectionResponse
     *
     * @param ReleaseClusterPublicConnectionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ReleaseClusterPublicConnectionResponse
     */
    public function releaseClusterPublicConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseClusterPublicConnection',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseClusterPublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases the public endpoint of an AnalyticDB for MySQL cluster.
     *
     * @param request - ReleaseClusterPublicConnectionRequest
     *
     * @returns ReleaseClusterPublicConnectionResponse
     *
     * @param ReleaseClusterPublicConnectionRequest $request
     *
     * @return ReleaseClusterPublicConnectionResponse
     */
    public function releaseClusterPublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseClusterPublicConnectionWithOptions($request, $runtime);
    }

    /**
     * Resets the password of a database account for an AnalyticDB for MySQL cluster.
     *
     * @param request - ResetAccountPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetAccountPasswordResponse
     *
     * @param ResetAccountPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetAccountPassword',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the password of a database account for an AnalyticDB for MySQL cluster.
     *
     * @param request - ResetAccountPasswordRequest
     *
     * @returns ResetAccountPasswordResponse
     *
     * @param ResetAccountPasswordRequest $request
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * 取消服务帐号授权.
     *
     * @param request - RevokeOperatorPermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeOperatorPermissionResponse
     *
     * @param RevokeOperatorPermissionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RevokeOperatorPermissionResponse
     */
    public function revokeOperatorPermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeOperatorPermission',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeOperatorPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消服务帐号授权.
     *
     * @param request - RevokeOperatorPermissionRequest
     *
     * @returns RevokeOperatorPermissionResponse
     *
     * @param RevokeOperatorPermissionRequest $request
     *
     * @return RevokeOperatorPermissionResponse
     */
    public function revokeOperatorPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeOperatorPermissionWithOptions($request, $runtime);
    }

    /**
     * Adds tags to an AnalyticDB for MySQL cluster.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'action' => 'TagResources',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to an AnalyticDB for MySQL cluster.
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

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Disassociates a resource group of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster from a database account.
     *
     * @param request - UnbindDBResourceGroupWithUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindDBResourceGroupWithUserResponse
     *
     * @param UnbindDBResourceGroupWithUserRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UnbindDBResourceGroupWithUserResponse
     */
    public function unbindDBResourceGroupWithUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupUser) {
            @$query['GroupUser'] = $request->groupUser;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindDBResourceGroupWithUser',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindDBResourceGroupWithUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates a resource group of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster from a database account.
     *
     * @param request - UnbindDBResourceGroupWithUserRequest
     *
     * @returns UnbindDBResourceGroupWithUserResponse
     *
     * @param UnbindDBResourceGroupWithUserRequest $request
     *
     * @return UnbindDBResourceGroupWithUserResponse
     */
    public function unbindDBResourceGroupWithUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDBResourceGroupWithUserWithOptions($request, $runtime);
    }

    /**
     * Disassociates a database account from a resource group. This operation can be called only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *
     * @param request - UnbindDBResourcePoolWithUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindDBResourcePoolWithUserResponse
     *
     * @param UnbindDBResourcePoolWithUserRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UnbindDBResourcePoolWithUserResponse
     */
    public function unbindDBResourcePoolWithUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolName) {
            @$query['PoolName'] = $request->poolName;
        }

        if (null !== $request->poolUser) {
            @$query['PoolUser'] = $request->poolUser;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindDBResourcePoolWithUser',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindDBResourcePoolWithUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates a database account from a resource group. This operation can be called only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *
     * @param request - UnbindDBResourcePoolWithUserRequest
     *
     * @returns UnbindDBResourcePoolWithUserResponse
     *
     * @param UnbindDBResourcePoolWithUserRequest $request
     *
     * @return UnbindDBResourcePoolWithUserResponse
     */
    public function unbindDBResourcePoolWithUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDBResourcePoolWithUserWithOptions($request, $runtime);
    }

    /**
     * Removes all tags from AnalyticDB for MySQL clusters.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes all tags from AnalyticDB for MySQL clusters.
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

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Updates the minor version of an AnalyticDB for MySQL cluster.
     *
     * @param request - UpgradeKernelVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeKernelVersionResponse
     *
     * @param UpgradeKernelVersionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpgradeKernelVersionResponse
     */
    public function upgradeKernelVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBVersion) {
            @$query['DBVersion'] = $request->DBVersion;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->switchMode) {
            @$query['SwitchMode'] = $request->switchMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeKernelVersion',
            'version' => '2019-03-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeKernelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the minor version of an AnalyticDB for MySQL cluster.
     *
     * @param request - UpgradeKernelVersionRequest
     *
     * @returns UpgradeKernelVersionResponse
     *
     * @param UpgradeKernelVersionRequest $request
     *
     * @return UpgradeKernelVersionResponse
     */
    public function upgradeKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeKernelVersionWithOptions($request, $runtime);
    }
}
