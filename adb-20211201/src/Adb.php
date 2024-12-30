<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Adb\V20211201\Models\AllocateClusterPublicConnectionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\AllocateClusterPublicConnectionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ApplyAdviceByIdRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ApplyAdviceByIdResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\AttachUserENIRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\AttachUserENIResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\BatchApplyAdviceByIdListRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\BatchApplyAdviceByIdListResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\BindAccountRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\BindAccountResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\BindDBResourceGroupWithUserRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\BindDBResourceGroupWithUserResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CancelSparkReplStatementRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CancelSparkReplStatementResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CheckBindRamUserRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CheckBindRamUserResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CheckSampleDataSetRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CheckSampleDataSetResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsCopyWorkloadRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsCopyWorkloadResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsHiveJobRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsHiveJobResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateAPSJobRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateAPSJobResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsSlsADBJobRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsSlsADBJobResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsSlsADBJobShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBClusterRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBClusterResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBResourceGroupShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateLakeStorageRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateLakeStorageResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateLakeStorageShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateOssSubDirectoryRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateOssSubDirectoryResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreatePerformanceViewRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreatePerformanceViewResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreatePerformanceViewShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateSparkTemplateRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateSparkTemplateResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteApsDatasoureRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteApsDatasoureResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteApsJobRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteApsJobResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteBackupsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteBackupsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteDBClusterRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteDBClusterResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteDBResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteDBResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteLakeStorageRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteLakeStorageResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeletePerformanceViewRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeletePerformanceViewResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteProcessInstanceRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteProcessInstanceResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteSparkTemplateFileRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteSparkTemplateFileResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteSparkTemplateRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteSparkTemplateResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAbnormalPatternDetectionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAbnormalPatternDetectionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountAllPrivilegesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountAllPrivilegesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountPrivilegeObjectsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountPrivilegeObjectsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountPrivilegesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountPrivilegesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlColumnsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlColumnsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlSchemasRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlSchemasResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlTablesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlTablesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdviceServiceEnabledRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdviceServiceEnabledResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAppliedAdvicesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAppliedAdvicesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsActionLogsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsActionLogsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAPSADBInstancesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAPSADBInstancesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourcesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourcesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsHiveWorkloadRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsHiveWorkloadResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsJobDetailRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsJobDetailResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsJobsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsJobsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsMigrationWorkloadsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsMigrationWorkloadsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsProgressRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsProgressResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsResourceGroupsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsResourceGroupsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAuditLogRecordsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAuditLogRecordsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAvailableAdvicesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAvailableAdvicesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBadSqlDetectionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBadSqlDetectionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterAccessWhiteListRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterAccessWhiteListResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterNetInfoRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterNetInfoResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterResourceDetailRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterResourceDetailResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterResourceUsageRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterResourceUsageResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeColumnsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeColumnsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeCompactionServiceSwitchRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeCompactionServiceSwitchResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeComputeResourceUsageRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeComputeResourceUsageResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeControllerDetectionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeControllerDetectionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterAttributeRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterAttributeResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterHealthStatusRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterHealthStatusResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterPerformanceRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterPerformanceResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClustersRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClustersResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterStatusRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterStatusResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDiagnosisDimensionsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDiagnosisDimensionsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDiagnosisRecordsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDiagnosisRecordsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDiagnosisSQLInfoRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDiagnosisSQLInfoResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDownloadRecordsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDownloadRecordsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlanAttributeRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlanAttributeResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlanJobsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlanJobsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlanSpecificationsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlanSpecificationsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlansRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlansResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeEnabledPrivilegesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeEnabledPrivilegesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeEssdCacheConfigRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeEssdCacheConfigResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExcessivePrimaryKeysRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExcessivePrimaryKeysResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeInclinedNodesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeInclinedNodesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeKernelVersionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeKernelVersionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeLakeCacheSizeRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeLakeCacheSizeResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeOperatorPermissionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeOperatorPermissionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeOversizeNonPartitionTableInfosRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeOversizeNonPartitionTableInfosResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePatternPerformanceRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePatternPerformanceResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePerformanceViewAttributeRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePerformanceViewAttributeResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePerformanceViewsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePerformanceViewsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSchemasRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSchemasResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkAppDiagnosisInfoRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkAppDiagnosisInfoResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkAppTypeRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkAppTypeResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkCodeLogRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkCodeLogResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkCodeOutputRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkCodeOutputResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkCodeWebUiRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkCodeWebUiResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSqlPatternRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSqlPatternResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSQLPatternsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSQLPatternsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeStorageResourceUsageRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeStorageResourceUsageResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTableAccessCountRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTableAccessCountResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTableDetailRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTableDetailResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTablePartitionDiagnoseRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTablePartitionDiagnoseResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTablesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTablesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeUserQuotaRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeUserQuotaResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeWorkerDetectionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DetachUserENIRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DetachUserENIResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DisableAdviceServiceRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DisableAdviceServiceResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DisableElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DisableElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DownloadDiagnosisRecordsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DownloadDiagnosisRecordsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DownloadInstanceCACertificateRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DownloadInstanceCACertificateResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\EnableAdviceServiceRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\EnableAdviceServiceResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\EnableElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\EnableElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ExecuteSparkReplStatementRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ExecuteSparkReplStatementResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ExistRunningSQLEngineRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ExistRunningSQLEngineResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetApsManagedDatabasesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetApsManagedDatabasesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetCreateTableSQLRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetCreateTableSQLResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetDatabaseObjectsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetDatabaseObjectsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetLakeStorageRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetLakeStorageResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppAttemptLogRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppAttemptLogResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppInfoRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppInfoResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppLogRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppLogResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppMetricsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppMetricsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppStateRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppStateResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppWebUiAddressRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppWebUiAddressResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkConfigLogPathRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkConfigLogPathResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkLogAnalyzeTaskRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkLogAnalyzeTaskResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkReplSessionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkReplSessionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkReplStatementRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkReplStatementResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkSQLEngineStateRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkSQLEngineStateResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkTemplateFileContentRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkTemplateFileContentResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkTemplateFolderTreeRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkTemplateFolderTreeResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkTemplateFullTreeRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkTemplateFullTreeResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetTableColumnsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetTableColumnsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetTableDDLRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetTableDDLResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetTableObjectsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetTableObjectsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetTableRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetTableResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetViewDDLRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetViewDDLResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetViewObjectsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetViewObjectsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GrantOperatorPermissionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GrantOperatorPermissionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\KillProcessRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\KillProcessResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\KillSparkAppRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\KillSparkAppResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\KillSparkLogAnalyzeTaskRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\KillSparkLogAnalyzeTaskResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\KillSparkSQLEngineRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\KillSparkSQLEngineResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListApsLifecycleStrategyRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListApsLifecycleStrategyResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListApsOptimizationStrategyRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListApsOptimizationStrategyResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListApsOptimizationTasksRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListApsOptimizationTasksResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListLakeStoragesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListLakeStoragesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListResultExportJobHistoryRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListResultExportJobHistoryResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListResultExportJobHistoryShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkAppAttemptsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkAppAttemptsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkAppsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkAppsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkLogAnalyzeTasksRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkLogAnalyzeTasksResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkTemplateFileIdsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkTemplateFileIdsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\LoadSampleDataSetRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\LoadSampleDataSetResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountPrivilegesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountPrivilegesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountPrivilegesShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsJobRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsJobResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsSlsADBJobRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsSlsADBJobResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsSlsADBJobShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsWorkloadNameRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsWorkloadNameResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAuditLogConfigRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAuditLogConfigResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyClickhouseEngineRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyClickhouseEngineResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyClusterAccessWhiteListRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyClusterAccessWhiteListResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyClusterConnectionStringRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyClusterConnectionStringResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyCompactionServiceSwitchRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyCompactionServiceSwitchResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterDescriptionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterDescriptionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterMaintainTimeRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterMaintainTimeResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterVipRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterVipResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBResourceGroupShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyEssdCacheConfigRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyEssdCacheConfigResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyLakeCacheSizeRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyLakeCacheSizeResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyPerformanceViewRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyPerformanceViewResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyPerformanceViewShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyUserEniVswitchOptionsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyUserEniVswitchOptionsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\PreloadSparkAppMetricsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\PreloadSparkAppMetricsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ReleaseClusterPublicConnectionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ReleaseClusterPublicConnectionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\RevokeOperatorPermissionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\RevokeOperatorPermissionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\SetSparkAppLogRootPathRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\SetSparkAppLogRootPathResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\StartApsJobRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\StartApsJobResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\StartSparkReplSessionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\StartSparkReplSessionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\StartSparkSQLEngineRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\StartSparkSQLEngineResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\SubmitResultExportJobRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\SubmitResultExportJobResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\SubmitSparkAppRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\SubmitSparkAppResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\SubmitSparkLogAnalyzeTaskRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\SubmitSparkLogAnalyzeTaskResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\SuspendApsJobRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\SuspendApsJobResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\UnbindAccountRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\UnbindAccountResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\UnbindDBResourceGroupWithUserRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\UnbindDBResourceGroupWithUserResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\UpdateLakeStorageRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\UpdateLakeStorageResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\UpdateLakeStorageShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\UpdateSparkTemplateFileRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\UpdateSparkTemplateFileResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Adb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'adb.aliyuncs.com',
            'cn-beijing'                  => 'adb.aliyuncs.com',
            'cn-hangzhou'                 => 'adb.aliyuncs.com',
            'cn-shanghai'                 => 'adb.aliyuncs.com',
            'cn-shenzhen'                 => 'adb.aliyuncs.com',
            'cn-hongkong'                 => 'adb.aliyuncs.com',
            'ap-southeast-1'              => 'adb.aliyuncs.com',
            'us-west-1'                   => 'adb.aliyuncs.com',
            'us-east-1'                   => 'adb.aliyuncs.com',
            'cn-hangzhou-finance'         => 'adb.aliyuncs.com',
            'cn-north-2-gov-1'            => 'adb.aliyuncs.com',
            'ap-northeast-2-pop'          => 'adb.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'adb.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'adb.aliyuncs.com',
            'cn-beijing-gov-1'            => 'adb.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'adb.aliyuncs.com',
            'cn-edge-1'                   => 'adb.aliyuncs.com',
            'cn-fujian'                   => 'adb.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'adb.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'adb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'adb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'adb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'adb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'adb.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'adb.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'adb.aliyuncs.com',
            'cn-qingdao-nebula'           => 'adb.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'adb.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'adb.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'adb.aliyuncs.com',
            'cn-shanghai-inner'           => 'adb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'adb.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'adb.aliyuncs.com',
            'cn-shenzhen-inner'           => 'adb.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'adb.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'adb.aliyuncs.com',
            'cn-wuhan'                    => 'adb.aliyuncs.com',
            'cn-yushanfang'               => 'adb.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'adb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'adb.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'adb.aliyuncs.com',
            'eu-west-1-oxs'               => 'adb.ap-northeast-1.aliyuncs.com',
            'me-east-1'                   => 'adb.ap-northeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'adb.ap-northeast-1.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Applies for a public endpoint for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param AllocateClusterPublicConnectionRequest $request AllocateClusterPublicConnectionRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return AllocateClusterPublicConnectionResponse AllocateClusterPublicConnectionResponse
     */
    public function allocateClusterPublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocateClusterPublicConnection',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateClusterPublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Applies for a public endpoint for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param AllocateClusterPublicConnectionRequest $request AllocateClusterPublicConnectionRequest
     *
     * @return AllocateClusterPublicConnectionResponse AllocateClusterPublicConnectionResponse
     */
    public function allocateClusterPublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateClusterPublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @summary 应用单条优化建议
     *  *
     * @param ApplyAdviceByIdRequest $request ApplyAdviceByIdRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyAdviceByIdResponse ApplyAdviceByIdResponse
     */
    public function applyAdviceByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adviceDate)) {
            $query['AdviceDate'] = $request->adviceDate;
        }
        if (!Utils::isUnset($request->adviceId)) {
            $query['AdviceId'] = $request->adviceId;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyAdviceById',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyAdviceByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用单条优化建议
     *  *
     * @param ApplyAdviceByIdRequest $request ApplyAdviceByIdRequest
     *
     * @return ApplyAdviceByIdResponse ApplyAdviceByIdResponse
     */
    public function applyAdviceById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAdviceByIdWithOptions($request, $runtime);
    }

    /**
     * @summary Attaches an elastic network interface (ENI) to an AnalyticDB for MySQL Data Lakehouse Edition cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param AttachUserENIRequest $request AttachUserENIRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachUserENIResponse AttachUserENIResponse
     */
    public function attachUserENIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachUserENI',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachUserENIResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Attaches an elastic network interface (ENI) to an AnalyticDB for MySQL Data Lakehouse Edition cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param AttachUserENIRequest $request AttachUserENIRequest
     *
     * @return AttachUserENIResponse AttachUserENIResponse
     */
    public function attachUserENI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachUserENIWithOptions($request, $runtime);
    }

    /**
     * @summary 批量应用优化建议
     *  *
     * @param BatchApplyAdviceByIdListRequest $request BatchApplyAdviceByIdListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchApplyAdviceByIdListResponse BatchApplyAdviceByIdListResponse
     */
    public function batchApplyAdviceByIdListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adviceDate)) {
            $query['AdviceDate'] = $request->adviceDate;
        }
        if (!Utils::isUnset($request->adviceIdList)) {
            $query['AdviceIdList'] = $request->adviceIdList;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchApplyAdviceByIdList',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchApplyAdviceByIdListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量应用优化建议
     *  *
     * @param BatchApplyAdviceByIdListRequest $request BatchApplyAdviceByIdListRequest
     *
     * @return BatchApplyAdviceByIdListResponse BatchApplyAdviceByIdListResponse
     */
    public function batchApplyAdviceByIdList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchApplyAdviceByIdListWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a standard account of an AnalyticDB for MySQL cluster with a Resource Access Management (RAM) user.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param BindAccountRequest $request BindAccountRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return BindAccountResponse BindAccountResponse
     */
    public function bindAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ramUser)) {
            $query['RamUser'] = $request->ramUser;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindAccount',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates a standard account of an AnalyticDB for MySQL cluster with a Resource Access Management (RAM) user.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param BindAccountRequest $request BindAccountRequest
     *
     * @return BindAccountResponse BindAccountResponse
     */
    public function bindAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a resource group with a database account.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param BindDBResourceGroupWithUserRequest $request BindDBResourceGroupWithUserRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return BindDBResourceGroupWithUserResponse BindDBResourceGroupWithUserResponse
     */
    public function bindDBResourceGroupWithUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupUser)) {
            $query['GroupUser'] = $request->groupUser;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindDBResourceGroupWithUser',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindDBResourceGroupWithUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates a resource group with a database account.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param BindDBResourceGroupWithUserRequest $request BindDBResourceGroupWithUserRequest
     *
     * @return BindDBResourceGroupWithUserResponse BindDBResourceGroupWithUserResponse
     */
    public function bindDBResourceGroupWithUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindDBResourceGroupWithUserWithOptions($request, $runtime);
    }

    /**
     * @summary 终止一段代码
     *  *
     * @param CancelSparkReplStatementRequest $request CancelSparkReplStatementRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelSparkReplStatementResponse CancelSparkReplStatementResponse
     */
    public function cancelSparkReplStatementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->statementId)) {
            $body['StatementId'] = $request->statementId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelSparkReplStatement',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelSparkReplStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 终止一段代码
     *  *
     * @param CancelSparkReplStatementRequest $request CancelSparkReplStatementRequest
     *
     * @return CancelSparkReplStatementResponse CancelSparkReplStatementResponse
     */
    public function cancelSparkReplStatement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelSparkReplStatementWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether a database account of an AnalyticDB for MySQL cluster is associated with a Resource Access Management (RAM) user.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param CheckBindRamUserRequest $request CheckBindRamUserRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckBindRamUserResponse CheckBindRamUserResponse
     */
    public function checkBindRamUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckBindRamUser',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckBindRamUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether a database account of an AnalyticDB for MySQL cluster is associated with a Resource Access Management (RAM) user.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param CheckBindRamUserRequest $request CheckBindRamUserRequest
     *
     * @return CheckBindRamUserResponse CheckBindRamUserResponse
     */
    public function checkBindRamUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkBindRamUserWithOptions($request, $runtime);
    }

    /**
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param CheckSampleDataSetRequest $request CheckSampleDataSetRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckSampleDataSetResponse CheckSampleDataSetResponse
     */
    public function checkSampleDataSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckSampleDataSet',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckSampleDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param CheckSampleDataSetRequest $request CheckSampleDataSetRequest
     *
     * @return CheckSampleDataSetResponse CheckSampleDataSetResponse
     */
    public function checkSampleDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSampleDataSetWithOptions($request, $runtime);
    }

    /**
     * @summary 创建一站式链路
     *  *
     * @param CreateAPSJobRequest $request CreateAPSJobRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAPSJobResponse CreateAPSJobResponse
     */
    public function createAPSJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apsJobName)) {
            $body['ApsJobName'] = $request->apsJobName;
        }
        if (!Utils::isUnset($request->dbList)) {
            $body['DbList'] = $request->dbList;
        }
        if (!Utils::isUnset($request->destinationEndpointInstanceID)) {
            $body['DestinationEndpointInstanceID'] = $request->destinationEndpointInstanceID;
        }
        if (!Utils::isUnset($request->destinationEndpointPassword)) {
            $body['DestinationEndpointPassword'] = $request->destinationEndpointPassword;
        }
        if (!Utils::isUnset($request->destinationEndpointUserName)) {
            $body['DestinationEndpointUserName'] = $request->destinationEndpointUserName;
        }
        if (!Utils::isUnset($request->partitionList)) {
            $body['PartitionList'] = $request->partitionList;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceEndpointInstanceID)) {
            $body['SourceEndpointInstanceID'] = $request->sourceEndpointInstanceID;
        }
        if (!Utils::isUnset($request->sourceEndpointPassword)) {
            $body['SourceEndpointPassword'] = $request->sourceEndpointPassword;
        }
        if (!Utils::isUnset($request->sourceEndpointRegion)) {
            $body['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }
        if (!Utils::isUnset($request->sourceEndpointUserName)) {
            $body['SourceEndpointUserName'] = $request->sourceEndpointUserName;
        }
        if (!Utils::isUnset($request->targetTableMode)) {
            $body['TargetTableMode'] = $request->targetTableMode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAPSJob',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAPSJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一站式链路
     *  *
     * @param CreateAPSJobRequest $request CreateAPSJobRequest
     *
     * @return CreateAPSJobResponse CreateAPSJobResponse
     */
    public function createAPSJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAPSJobWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a database account for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param CreateAccountRequest $request CreateAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccountResponse CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountDescription)) {
            $query['AccountDescription'] = $request->accountDescription;
        }
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccount',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a database account for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param CreateAccountRequest $request CreateAccountRequest
     *
     * @return CreateAccountResponse CreateAccountResponse
     */
    public function createAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * @summary 创建工作负载复制链路
     *  *
     * @param CreateApsCopyWorkloadRequest $request CreateApsCopyWorkloadRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApsCopyWorkloadResponse CreateApsCopyWorkloadResponse
     */
    public function createApsCopyWorkloadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->datasourceId)) {
            $body['DatasourceId'] = $request->datasourceId;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->workloadId)) {
            $body['WorkloadId'] = $request->workloadId;
        }
        if (!Utils::isUnset($request->workloadType)) {
            $body['WorkloadType'] = $request->workloadType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApsCopyWorkload',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApsCopyWorkloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建工作负载复制链路
     *  *
     * @param CreateApsCopyWorkloadRequest $request CreateApsCopyWorkloadRequest
     *
     * @return CreateApsCopyWorkloadResponse CreateApsCopyWorkloadResponse
     */
    public function createApsCopyWorkload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApsCopyWorkloadWithOptions($request, $runtime);
    }

    /**
     * @summary 创建APS数据源。
     *  *
     * @param CreateApsDatasoureRequest $tmpReq  CreateApsDatasoureRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApsDatasoureResponse CreateApsDatasoureResponse
     */
    public function createApsDatasoureWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateApsDatasoureShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->databricksInfo)) {
            $request->databricksInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->databricksInfo, 'DatabricksInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->hiveInfo)) {
            $request->hiveInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hiveInfo, 'HiveInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->kafkaInfo)) {
            $request->kafkaInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->kafkaInfo, 'KafkaInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->polarDBMysqlInfo)) {
            $request->polarDBMysqlInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->polarDBMysqlInfo, 'PolarDBMysqlInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->polarDBXInfo)) {
            $request->polarDBXInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->polarDBXInfo, 'PolarDBXInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->rdsMysqlInfo)) {
            $request->rdsMysqlInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rdsMysqlInfo, 'RdsMysqlInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->slsInfo)) {
            $request->slsInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->slsInfo, 'SlsInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->databricksInfoShrink)) {
            $body['DatabricksInfo'] = $request->databricksInfoShrink;
        }
        if (!Utils::isUnset($request->datasourceDescription)) {
            $body['DatasourceDescription'] = $request->datasourceDescription;
        }
        if (!Utils::isUnset($request->datasourceName)) {
            $body['DatasourceName'] = $request->datasourceName;
        }
        if (!Utils::isUnset($request->datasourceType)) {
            $body['DatasourceType'] = $request->datasourceType;
        }
        if (!Utils::isUnset($request->hiveInfoShrink)) {
            $body['HiveInfo'] = $request->hiveInfoShrink;
        }
        if (!Utils::isUnset($request->kafkaInfoShrink)) {
            $body['KafkaInfo'] = $request->kafkaInfoShrink;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->polarDBMysqlInfoShrink)) {
            $body['PolarDBMysqlInfo'] = $request->polarDBMysqlInfoShrink;
        }
        if (!Utils::isUnset($request->polarDBXInfoShrink)) {
            $body['PolarDBXInfo'] = $request->polarDBXInfoShrink;
        }
        if (!Utils::isUnset($request->rdsMysqlInfoShrink)) {
            $body['RdsMysqlInfo'] = $request->rdsMysqlInfoShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->slsInfoShrink)) {
            $body['SlsInfo'] = $request->slsInfoShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApsDatasoure',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApsDatasoureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建APS数据源。
     *  *
     * @param CreateApsDatasoureRequest $request CreateApsDatasoureRequest
     *
     * @return CreateApsDatasoureResponse CreateApsDatasoureResponse
     */
    public function createApsDatasoure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApsDatasoureWithOptions($request, $runtime);
    }

    /**
     * @summary 创建Hive数据迁移链路。
     *  *
     * @param CreateApsHiveJobRequest $request CreateApsHiveJobRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApsHiveJobResponse CreateApsHiveJobResponse
     */
    public function createApsHiveJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->advancedConfig)) {
            $body['AdvancedConfig'] = $request->advancedConfig;
        }
        if (!Utils::isUnset($request->conflictStrategy)) {
            $body['ConflictStrategy'] = $request->conflictStrategy;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->datasourceId)) {
            $body['DatasourceId'] = $request->datasourceId;
        }
        if (!Utils::isUnset($request->fullComputeUnit)) {
            $body['FullComputeUnit'] = $request->fullComputeUnit;
        }
        if (!Utils::isUnset($request->ossLocation)) {
            $body['OssLocation'] = $request->ossLocation;
        }
        if (!Utils::isUnset($request->parallelism)) {
            $body['Parallelism'] = $request->parallelism;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroup)) {
            $body['ResourceGroup'] = $request->resourceGroup;
        }
        if (!Utils::isUnset($request->syncAllowExpression)) {
            $body['SyncAllowExpression'] = $request->syncAllowExpression;
        }
        if (!Utils::isUnset($request->syncDenyExpression)) {
            $body['SyncDenyExpression'] = $request->syncDenyExpression;
        }
        if (!Utils::isUnset($request->targetType)) {
            $body['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->workloadName)) {
            $body['WorkloadName'] = $request->workloadName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApsHiveJob',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApsHiveJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建Hive数据迁移链路。
     *  *
     * @param CreateApsHiveJobRequest $request CreateApsHiveJobRequest
     *
     * @return CreateApsHiveJobResponse CreateApsHiveJobResponse
     */
    public function createApsHiveJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApsHiveJobWithOptions($request, $runtime);
    }

    /**
     * @summary 创建一个SLS到ADB数仓的APS链路
     *  *
     * @param CreateApsSlsADBJobRequest $tmpReq  CreateApsSlsADBJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApsSlsADBJobResponse CreateApsSlsADBJobResponse
     */
    public function createApsSlsADBJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateApsSlsADBJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->columns)) {
            $request->columnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->columns, 'Columns', 'json');
        }
        if (!Utils::isUnset($tmpReq->partitionSpecs)) {
            $request->partitionSpecsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->partitionSpecs, 'PartitionSpecs', 'json');
        }
        if (!Utils::isUnset($tmpReq->unixTimestampConvert)) {
            $request->unixTimestampConvertShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->unixTimestampConvert, 'UnixTimestampConvert', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->acrossRole)) {
            $body['AcrossRole'] = $request->acrossRole;
        }
        if (!Utils::isUnset($request->acrossUid)) {
            $body['AcrossUid'] = $request->acrossUid;
        }
        if (!Utils::isUnset($request->advancedConfig)) {
            $body['AdvancedConfig'] = $request->advancedConfig;
        }
        if (!Utils::isUnset($request->columnsShrink)) {
            $body['Columns'] = $request->columnsShrink;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->datasourceId)) {
            $body['DatasourceId'] = $request->datasourceId;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dirtyDataHandleMode)) {
            $body['DirtyDataHandleMode'] = $request->dirtyDataHandleMode;
        }
        if (!Utils::isUnset($request->dirtyDataProcessPattern)) {
            $body['DirtyDataProcessPattern'] = $request->dirtyDataProcessPattern;
        }
        if (!Utils::isUnset($request->exactlyOnce)) {
            $body['ExactlyOnce'] = $request->exactlyOnce;
        }
        if (!Utils::isUnset($request->fullComputeUnit)) {
            $body['FullComputeUnit'] = $request->fullComputeUnit;
        }
        if (!Utils::isUnset($request->hudiAdvancedConfig)) {
            $body['HudiAdvancedConfig'] = $request->hudiAdvancedConfig;
        }
        if (!Utils::isUnset($request->incrementalComputeUnit)) {
            $body['IncrementalComputeUnit'] = $request->incrementalComputeUnit;
        }
        if (!Utils::isUnset($request->lakehouseId)) {
            $body['LakehouseId'] = $request->lakehouseId;
        }
        if (!Utils::isUnset($request->maxOffsetsPerTrigger)) {
            $body['MaxOffsetsPerTrigger'] = $request->maxOffsetsPerTrigger;
        }
        if (!Utils::isUnset($request->ossLocation)) {
            $body['OssLocation'] = $request->ossLocation;
        }
        if (!Utils::isUnset($request->outputFormat)) {
            $body['OutputFormat'] = $request->outputFormat;
        }
        if (!Utils::isUnset($request->partitionSpecsShrink)) {
            $body['PartitionSpecs'] = $request->partitionSpecsShrink;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->primaryKeyDefinition)) {
            $body['PrimaryKeyDefinition'] = $request->primaryKeyDefinition;
        }
        if (!Utils::isUnset($request->project)) {
            $body['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroup)) {
            $body['ResourceGroup'] = $request->resourceGroup;
        }
        if (!Utils::isUnset($request->sourceRegionId)) {
            $body['SourceRegionId'] = $request->sourceRegionId;
        }
        if (!Utils::isUnset($request->startingOffsets)) {
            $body['StartingOffsets'] = $request->startingOffsets;
        }
        if (!Utils::isUnset($request->store)) {
            $body['Store'] = $request->store;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->targetGenerateRule)) {
            $body['TargetGenerateRule'] = $request->targetGenerateRule;
        }
        if (!Utils::isUnset($request->targetType)) {
            $body['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->unixTimestampConvertShrink)) {
            $body['UnixTimestampConvert'] = $request->unixTimestampConvertShrink;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->workloadName)) {
            $body['WorkloadName'] = $request->workloadName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApsSlsADBJob',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApsSlsADBJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一个SLS到ADB数仓的APS链路
     *  *
     * @param CreateApsSlsADBJobRequest $request CreateApsSlsADBJobRequest
     *
     * @return CreateApsSlsADBJobResponse CreateApsSlsADBJobResponse
     */
    public function createApsSlsADBJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApsSlsADBJobWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an AnalyticDB for MySQL Data Lakehouse Edition cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param CreateDBClusterRequest $request CreateDBClusterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBClusterResponse CreateDBClusterResponse
     */
    public function createDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->cloneSourceRegionId)) {
            $query['CloneSourceRegionId'] = $request->cloneSourceRegionId;
        }
        if (!Utils::isUnset($request->computeResource)) {
            $query['ComputeResource'] = $request->computeResource;
        }
        if (!Utils::isUnset($request->DBClusterDescription)) {
            $query['DBClusterDescription'] = $request->DBClusterDescription;
        }
        if (!Utils::isUnset($request->DBClusterNetworkType)) {
            $query['DBClusterNetworkType'] = $request->DBClusterNetworkType;
        }
        if (!Utils::isUnset($request->DBClusterVersion)) {
            $query['DBClusterVersion'] = $request->DBClusterVersion;
        }
        if (!Utils::isUnset($request->diskEncryption)) {
            $query['DiskEncryption'] = $request->diskEncryption;
        }
        if (!Utils::isUnset($request->enableDefaultResourcePool)) {
            $query['EnableDefaultResourcePool'] = $request->enableDefaultResourcePool;
        }
        if (!Utils::isUnset($request->kmsId)) {
            $query['KmsId'] = $request->kmsId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->productForm)) {
            $query['ProductForm'] = $request->productForm;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reservedNodeCount)) {
            $query['ReservedNodeCount'] = $request->reservedNodeCount;
        }
        if (!Utils::isUnset($request->reservedNodeSize)) {
            $query['ReservedNodeSize'] = $request->reservedNodeSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->restoreToTime)) {
            $query['RestoreToTime'] = $request->restoreToTime;
        }
        if (!Utils::isUnset($request->restoreType)) {
            $query['RestoreType'] = $request->restoreType;
        }
        if (!Utils::isUnset($request->sourceDbClusterId)) {
            $query['SourceDbClusterId'] = $request->sourceDbClusterId;
        }
        if (!Utils::isUnset($request->storageResource)) {
            $query['StorageResource'] = $request->storageResource;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBCluster',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an AnalyticDB for MySQL Data Lakehouse Edition cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param CreateDBClusterRequest $request CreateDBClusterRequest
     *
     * @return CreateDBClusterResponse CreateDBClusterResponse
     */
    public function createDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a resource group for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param CreateDBResourceGroupRequest $tmpReq  CreateDBResourceGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBResourceGroupResponse CreateDBResourceGroupResponse
     */
    public function createDBResourceGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDBResourceGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->engineParams)) {
            $request->engineParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->engineParams, 'EngineParams', 'json');
        }
        if (!Utils::isUnset($tmpReq->rules)) {
            $request->rulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->autoStopInterval)) {
            $query['AutoStopInterval'] = $request->autoStopInterval;
        }
        if (!Utils::isUnset($request->clusterMode)) {
            $query['ClusterMode'] = $request->clusterMode;
        }
        if (!Utils::isUnset($request->clusterSizeResource)) {
            $query['ClusterSizeResource'] = $request->clusterSizeResource;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->enableSpot)) {
            $query['EnableSpot'] = $request->enableSpot;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineParamsShrink)) {
            $query['EngineParams'] = $request->engineParamsShrink;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->maxClusterCount)) {
            $query['MaxClusterCount'] = $request->maxClusterCount;
        }
        if (!Utils::isUnset($request->maxComputeResource)) {
            $query['MaxComputeResource'] = $request->maxComputeResource;
        }
        if (!Utils::isUnset($request->maxGpuQuantity)) {
            $query['MaxGpuQuantity'] = $request->maxGpuQuantity;
        }
        if (!Utils::isUnset($request->minClusterCount)) {
            $query['MinClusterCount'] = $request->minClusterCount;
        }
        if (!Utils::isUnset($request->minComputeResource)) {
            $query['MinComputeResource'] = $request->minComputeResource;
        }
        if (!Utils::isUnset($request->minGpuQuantity)) {
            $query['MinGpuQuantity'] = $request->minGpuQuantity;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rulesShrink)) {
            $query['Rules'] = $request->rulesShrink;
        }
        if (!Utils::isUnset($request->specName)) {
            $query['SpecName'] = $request->specName;
        }
        if (!Utils::isUnset($request->targetResourceGroupName)) {
            $query['TargetResourceGroupName'] = $request->targetResourceGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBResourceGroup',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a resource group for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param CreateDBResourceGroupRequest $request CreateDBResourceGroupRequest
     *
     * @return CreateDBResourceGroupResponse CreateDBResourceGroupResponse
     */
    public function createDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a scaling plan for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param CreateElasticPlanRequest $request CreateElasticPlanRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateElasticPlanResponse CreateElasticPlanResponse
     */
    public function createElasticPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoScale)) {
            $query['AutoScale'] = $request->autoScale;
        }
        if (!Utils::isUnset($request->cronExpression)) {
            $query['CronExpression'] = $request->cronExpression;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->elasticPlanName)) {
            $query['ElasticPlanName'] = $request->elasticPlanName;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->targetSize)) {
            $query['TargetSize'] = $request->targetSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateElasticPlan',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateElasticPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a scaling plan for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param CreateElasticPlanRequest $request CreateElasticPlanRequest
     *
     * @return CreateElasticPlanResponse CreateElasticPlanResponse
     */
    public function createElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createElasticPlanWithOptions($request, $runtime);
    }

    /**
     * @summary 创建湖存储
     *  *
     * @param CreateLakeStorageRequest $tmpReq  CreateLakeStorageRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLakeStorageResponse CreateLakeStorageResponse
     */
    public function createLakeStorageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateLakeStorageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->permissions)) {
            $request->permissionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->permissions, 'Permissions', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->permissionsShrink)) {
            $body['Permissions'] = $request->permissionsShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLakeStorage',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLakeStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建湖存储
     *  *
     * @param CreateLakeStorageRequest $request CreateLakeStorageRequest
     *
     * @return CreateLakeStorageResponse CreateLakeStorageResponse
     */
    public function createLakeStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLakeStorageWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an Object Storage Service (OSS) subdirectory.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param CreateOssSubDirectoryRequest $request CreateOssSubDirectoryRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOssSubDirectoryResponse CreateOssSubDirectoryResponse
     */
    public function createOssSubDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->path)) {
            $body['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOssSubDirectory',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOssSubDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an Object Storage Service (OSS) subdirectory.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param CreateOssSubDirectoryRequest $request CreateOssSubDirectoryRequest
     *
     * @return CreateOssSubDirectoryResponse CreateOssSubDirectoryResponse
     */
    public function createOssSubDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOssSubDirectoryWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom monitoring view.
     *  *
     * @param CreatePerformanceViewRequest $tmpReq  CreatePerformanceViewRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePerformanceViewResponse CreatePerformanceViewResponse
     */
    public function createPerformanceViewWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePerformanceViewShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->viewDetail)) {
            $request->viewDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->viewDetail, 'ViewDetail', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->createFromViewType)) {
            $query['CreateFromViewType'] = $request->createFromViewType;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->fillOriginViewKeys)) {
            $query['FillOriginViewKeys'] = $request->fillOriginViewKeys;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->viewDetailShrink)) {
            $query['ViewDetail'] = $request->viewDetailShrink;
        }
        if (!Utils::isUnset($request->viewName)) {
            $query['ViewName'] = $request->viewName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePerformanceView',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePerformanceViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a custom monitoring view.
     *  *
     * @param CreatePerformanceViewRequest $request CreatePerformanceViewRequest
     *
     * @return CreatePerformanceViewResponse CreatePerformanceViewResponse
     */
    public function createPerformanceView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPerformanceViewWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Spark application template.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param CreateSparkTemplateRequest $request CreateSparkTemplateRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSparkTemplateResponse CreateSparkTemplateResponse
     */
    public function createSparkTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentId)) {
            $body['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSparkTemplate',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSparkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Spark application template.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param CreateSparkTemplateRequest $request CreateSparkTemplateRequest
     *
     * @return CreateSparkTemplateResponse CreateSparkTemplateResponse
     */
    public function createSparkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSparkTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a database account from an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DeleteAccountRequest $request DeleteAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccountResponse DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccount',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a database account from an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DeleteAccountRequest $request DeleteAccountRequest
     *
     * @return DeleteAccountResponse DeleteAccountResponse
     */
    public function deleteAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * @summary 删除APS数据源
     *  *
     * @param DeleteApsDatasoureRequest $request DeleteApsDatasoureRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApsDatasoureResponse DeleteApsDatasoureResponse
     */
    public function deleteApsDatasoureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->datasourceId)) {
            $body['DatasourceId'] = $request->datasourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteApsDatasoure',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApsDatasoureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除APS数据源
     *  *
     * @param DeleteApsDatasoureRequest $request DeleteApsDatasoureRequest
     *
     * @return DeleteApsDatasoureResponse DeleteApsDatasoureResponse
     */
    public function deleteApsDatasoure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApsDatasoureWithOptions($request, $runtime);
    }

    /**
     * @summary 删除aps任务
     *  *
     * @param DeleteApsJobRequest $request DeleteApsJobRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApsJobResponse DeleteApsJobResponse
     */
    public function deleteApsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apsJobId)) {
            $body['ApsJobId'] = $request->apsJobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteApsJob',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除aps任务
     *  *
     * @param DeleteApsJobRequest $request DeleteApsJobRequest
     *
     * @return DeleteApsJobResponse DeleteApsJobResponse
     */
    public function deleteApsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApsJobWithOptions($request, $runtime);
    }

    /**
     * @summary Manually deletes backup sets.
     *  *
     * @description *   You can delete up to 100 backup sets at a time. If you want to delete more than 100 backup sets, call this operation twice.
     * *   To ensure data security, the system forcibly retains one valid backup set. If you want to delete the last backup set, the system prohibits your operation.
     *  *
     * @param DeleteBackupsRequest $request DeleteBackupsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBackupsResponse DeleteBackupsResponse
     */
    public function deleteBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupIds)) {
            $query['BackupIds'] = $request->backupIds;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBackups',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Manually deletes backup sets.
     *  *
     * @description *   You can delete up to 100 backup sets at a time. If you want to delete more than 100 backup sets, call this operation twice.
     * *   To ensure data security, the system forcibly retains one valid backup set. If you want to delete the last backup set, the system prohibits your operation.
     *  *
     * @param DeleteBackupsRequest $request DeleteBackupsRequest
     *
     * @return DeleteBackupsResponse DeleteBackupsResponse
     */
    public function deleteBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an AnalyticDB for MySQL cluster.
     *  *
     * @description ### [](#)
     * *   You can call this operation to delete only subscription clusters.
     * *   For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DeleteDBClusterRequest $request DeleteDBClusterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBClusterResponse DeleteDBClusterResponse
     */
    public function deleteDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBCluster',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an AnalyticDB for MySQL cluster.
     *  *
     * @description ### [](#)
     * *   You can call this operation to delete only subscription clusters.
     * *   For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DeleteDBClusterRequest $request DeleteDBClusterRequest
     *
     * @return DeleteDBClusterResponse DeleteDBClusterResponse
     */
    public function deleteDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a resource group from an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DeleteDBResourceGroupRequest $request DeleteDBResourceGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBResourceGroupResponse DeleteDBResourceGroupResponse
     */
    public function deleteDBResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBResourceGroup',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a resource group from an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DeleteDBResourceGroupRequest $request DeleteDBResourceGroupRequest
     *
     * @return DeleteDBResourceGroupResponse DeleteDBResourceGroupResponse
     */
    public function deleteDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a scaling plan from an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DeleteElasticPlanRequest $request DeleteElasticPlanRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteElasticPlanResponse DeleteElasticPlanResponse
     */
    public function deleteElasticPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->elasticPlanName)) {
            $query['ElasticPlanName'] = $request->elasticPlanName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteElasticPlan',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteElasticPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a scaling plan from an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DeleteElasticPlanRequest $request DeleteElasticPlanRequest
     *
     * @return DeleteElasticPlanResponse DeleteElasticPlanResponse
     */
    public function deleteElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteElasticPlanWithOptions($request, $runtime);
    }

    /**
     * @summary 删除湖存储
     *  *
     * @param DeleteLakeStorageRequest $request DeleteLakeStorageRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLakeStorageResponse DeleteLakeStorageResponse
     */
    public function deleteLakeStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $body = [];
        if (!Utils::isUnset($request->lakeStorageId)) {
            $body['LakeStorageId'] = $request->lakeStorageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteLakeStorage',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLakeStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除湖存储
     *  *
     * @param DeleteLakeStorageRequest $request DeleteLakeStorageRequest
     *
     * @return DeleteLakeStorageResponse DeleteLakeStorageResponse
     */
    public function deleteLakeStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLakeStorageWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a monitoring view.
     *  *
     * @param DeletePerformanceViewRequest $request DeletePerformanceViewRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePerformanceViewResponse DeletePerformanceViewResponse
     */
    public function deletePerformanceViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->viewName)) {
            $query['ViewName'] = $request->viewName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePerformanceView',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePerformanceViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a monitoring view.
     *  *
     * @param DeletePerformanceViewRequest $request DeletePerformanceViewRequest
     *
     * @return DeletePerformanceViewResponse DeletePerformanceViewResponse
     */
    public function deletePerformanceView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePerformanceViewWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a worflow instance from an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DeleteProcessInstanceRequest $request DeleteProcessInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProcessInstanceResponse DeleteProcessInstanceResponse
     */
    public function deleteProcessInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->processInstanceId)) {
            $query['ProcessInstanceId'] = $request->processInstanceId;
        }
        if (!Utils::isUnset($request->projectCode)) {
            $query['ProjectCode'] = $request->projectCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProcessInstance',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProcessInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a worflow instance from an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DeleteProcessInstanceRequest $request DeleteProcessInstanceRequest
     *
     * @return DeleteProcessInstanceResponse DeleteProcessInstanceResponse
     */
    public function deleteProcessInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProcessInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes Spark template files.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param DeleteSparkTemplateRequest $request DeleteSparkTemplateRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSparkTemplateResponse DeleteSparkTemplateResponse
     */
    public function deleteSparkTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSparkTemplate',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSparkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes Spark template files.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param DeleteSparkTemplateRequest $request DeleteSparkTemplateRequest
     *
     * @return DeleteSparkTemplateResponse DeleteSparkTemplateResponse
     */
    public function deleteSparkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSparkTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes Spark template files.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param DeleteSparkTemplateFileRequest $request DeleteSparkTemplateFileRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSparkTemplateFileResponse DeleteSparkTemplateFileResponse
     */
    public function deleteSparkTemplateFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSparkTemplateFile',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSparkTemplateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes Spark template files.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param DeleteSparkTemplateFileRequest $request DeleteSparkTemplateFileRequest
     *
     * @return DeleteSparkTemplateFileResponse DeleteSparkTemplateFileResponse
     */
    public function deleteSparkTemplateFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSparkTemplateFileWithOptions($request, $runtime);
    }

    /**
     * @summary 获取APS联邦分析ADB实例列表
     *  *
     * @param DescribeAPSADBInstancesRequest $request DescribeAPSADBInstancesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAPSADBInstancesResponse DescribeAPSADBInstancesResponse
     */
    public function describeAPSADBInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAPSADBInstances',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAPSADBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取APS联邦分析ADB实例列表
     *  *
     * @param DescribeAPSADBInstancesRequest $request DescribeAPSADBInstancesRequest
     *
     * @return DescribeAPSADBInstancesResponse DescribeAPSADBInstancesResponse
     */
    public function describeAPSADBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAPSADBInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询异常Pattern诊断结果
     *  *
     * @param DescribeAbnormalPatternDetectionRequest $request DescribeAbnormalPatternDetectionRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAbnormalPatternDetectionResponse DescribeAbnormalPatternDetectionResponse
     */
    public function describeAbnormalPatternDetectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAbnormalPatternDetection',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAbnormalPatternDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询异常Pattern诊断结果
     *  *
     * @param DescribeAbnormalPatternDetectionRequest $request DescribeAbnormalPatternDetectionRequest
     *
     * @return DescribeAbnormalPatternDetectionResponse DescribeAbnormalPatternDetectionResponse
     */
    public function describeAbnormalPatternDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAbnormalPatternDetectionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the permissions of a database account on all permission levels.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeAccountAllPrivilegesRequest $request DescribeAccountAllPrivilegesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccountAllPrivilegesResponse DescribeAccountAllPrivilegesResponse
     */
    public function describeAccountAllPrivilegesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccountAllPrivileges',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountAllPrivilegesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the permissions of a database account on all permission levels.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeAccountAllPrivilegesRequest $request DescribeAccountAllPrivilegesRequest
     *
     * @return DescribeAccountAllPrivilegesResponse DescribeAccountAllPrivilegesResponse
     */
    public function describeAccountAllPrivileges($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountAllPrivilegesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the databases, tables, and columns on which a database account has permissions.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeAccountPrivilegeObjectsRequest $request DescribeAccountPrivilegeObjectsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccountPrivilegeObjectsResponse DescribeAccountPrivilegeObjectsResponse
     */
    public function describeAccountPrivilegeObjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->columnPrivilegeObject)) {
            $query['ColumnPrivilegeObject'] = $request->columnPrivilegeObject;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->databasePrivilegeObject)) {
            $query['DatabasePrivilegeObject'] = $request->databasePrivilegeObject;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->privilegeType)) {
            $query['PrivilegeType'] = $request->privilegeType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tablePrivilegeObject)) {
            $query['TablePrivilegeObject'] = $request->tablePrivilegeObject;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccountPrivilegeObjects',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountPrivilegeObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the databases, tables, and columns on which a database account has permissions.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeAccountPrivilegeObjectsRequest $request DescribeAccountPrivilegeObjectsRequest
     *
     * @return DescribeAccountPrivilegeObjectsResponse DescribeAccountPrivilegeObjectsResponse
     */
    public function describeAccountPrivilegeObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountPrivilegeObjectsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取某一ADB账户的权限
     *  *
     * @param DescribeAccountPrivilegesRequest $request DescribeAccountPrivilegesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccountPrivilegesResponse DescribeAccountPrivilegesResponse
     */
    public function describeAccountPrivilegesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->columnPrivilegeObject)) {
            $query['ColumnPrivilegeObject'] = $request->columnPrivilegeObject;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->databasePrivilegeObject)) {
            $query['DatabasePrivilegeObject'] = $request->databasePrivilegeObject;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->privilegeType)) {
            $query['PrivilegeType'] = $request->privilegeType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tablePrivilegeObject)) {
            $query['TablePrivilegeObject'] = $request->tablePrivilegeObject;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccountPrivileges',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountPrivilegesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取某一ADB账户的权限
     *  *
     * @param DescribeAccountPrivilegesRequest $request DescribeAccountPrivilegesRequest
     *
     * @return DescribeAccountPrivilegesResponse DescribeAccountPrivilegesResponse
     */
    public function describeAccountPrivileges($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountPrivilegesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the database accounts of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeAccountsRequest $request DescribeAccountsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccountsResponse DescribeAccountsResponse
     */
    public function describeAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccounts',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the database accounts of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeAccountsRequest $request DescribeAccountsRequest
     *
     * @return DescribeAccountsResponse DescribeAccountsResponse
     */
    public function describeAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about table columns for an AnalyticDB for MySQL cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeAdbMySqlColumnsRequest $request DescribeAdbMySqlColumnsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAdbMySqlColumnsResponse DescribeAdbMySqlColumnsResponse
     */
    public function describeAdbMySqlColumnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->schema)) {
            $query['Schema'] = $request->schema;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAdbMySqlColumns',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAdbMySqlColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about table columns for an AnalyticDB for MySQL cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeAdbMySqlColumnsRequest $request DescribeAdbMySqlColumnsRequest
     *
     * @return DescribeAdbMySqlColumnsResponse DescribeAdbMySqlColumnsResponse
     */
    public function describeAdbMySqlColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdbMySqlColumnsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of databases for an AnalyticDB for MySQL cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeAdbMySqlSchemasRequest $request DescribeAdbMySqlSchemasRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAdbMySqlSchemasResponse DescribeAdbMySqlSchemasResponse
     */
    public function describeAdbMySqlSchemasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAdbMySqlSchemas',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAdbMySqlSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of databases for an AnalyticDB for MySQL cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeAdbMySqlSchemasRequest $request DescribeAdbMySqlSchemasRequest
     *
     * @return DescribeAdbMySqlSchemasResponse DescribeAdbMySqlSchemasResponse
     */
    public function describeAdbMySqlSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdbMySqlSchemasWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of tables for an AnalyticDB for MySQL cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeAdbMySqlTablesRequest $request DescribeAdbMySqlTablesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAdbMySqlTablesResponse DescribeAdbMySqlTablesResponse
     */
    public function describeAdbMySqlTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->schema)) {
            $query['Schema'] = $request->schema;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAdbMySqlTables',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAdbMySqlTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of tables for an AnalyticDB for MySQL cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeAdbMySqlTablesRequest $request DescribeAdbMySqlTablesRequest
     *
     * @return DescribeAdbMySqlTablesResponse DescribeAdbMySqlTablesResponse
     */
    public function describeAdbMySqlTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdbMySqlTablesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询建议服务是否开启
     *  *
     * @param DescribeAdviceServiceEnabledRequest $request DescribeAdviceServiceEnabledRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAdviceServiceEnabledResponse DescribeAdviceServiceEnabledResponse
     */
    public function describeAdviceServiceEnabledWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAdviceServiceEnabled',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAdviceServiceEnabledResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询建议服务是否开启
     *  *
     * @param DescribeAdviceServiceEnabledRequest $request DescribeAdviceServiceEnabledRequest
     *
     * @return DescribeAdviceServiceEnabledResponse DescribeAdviceServiceEnabledResponse
     */
    public function describeAdviceServiceEnabled($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdviceServiceEnabledWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of databases, tables, and columns in an AnalyticDB for MySQL cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeAllDataSourceRequest $request DescribeAllDataSourceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAllDataSourceResponse DescribeAllDataSourceResponse
     */
    public function describeAllDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAllDataSource',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of databases, tables, and columns in an AnalyticDB for MySQL cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeAllDataSourceRequest $request DescribeAllDataSourceRequest
     *
     * @return DescribeAllDataSourceResponse DescribeAllDataSourceResponse
     */
    public function describeAllDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary DescribeAppliedAdvices
     *  *
     * @param DescribeAppliedAdvicesRequest $request DescribeAppliedAdvicesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppliedAdvicesResponse DescribeAppliedAdvicesResponse
     */
    public function describeAppliedAdvicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adviceType)) {
            $query['AdviceType'] = $request->adviceType;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->schemaTableName)) {
            $query['SchemaTableName'] = $request->schemaTableName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppliedAdvices',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppliedAdvicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DescribeAppliedAdvices
     *  *
     * @param DescribeAppliedAdvicesRequest $request DescribeAppliedAdvicesRequest
     *
     * @return DescribeAppliedAdvicesResponse DescribeAppliedAdvicesResponse
     */
    public function describeAppliedAdvices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppliedAdvicesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the logs of a real-time data ingestion job for an AnalyticDB for MySQL cluster.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeApsActionLogsRequest $request DescribeApsActionLogsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApsActionLogsResponse DescribeApsActionLogsResponse
     */
    public function describeApsActionLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->stage)) {
            $query['Stage'] = $request->stage;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->workloadId)) {
            $query['WorkloadId'] = $request->workloadId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApsActionLogs',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApsActionLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the logs of a real-time data ingestion job for an AnalyticDB for MySQL cluster.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeApsActionLogsRequest $request DescribeApsActionLogsRequest
     *
     * @return DescribeApsActionLogsResponse DescribeApsActionLogsResponse
     */
    public function describeApsActionLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsActionLogsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询APS数据源详情
     *  *
     * @param DescribeApsDatasourceRequest $request DescribeApsDatasourceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApsDatasourceResponse DescribeApsDatasourceResponse
     */
    public function describeApsDatasourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->datasourceId)) {
            $body['DatasourceId'] = $request->datasourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeApsDatasource',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApsDatasourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询APS数据源详情
     *  *
     * @param DescribeApsDatasourceRequest $request DescribeApsDatasourceRequest
     *
     * @return DescribeApsDatasourceResponse DescribeApsDatasourceResponse
     */
    public function describeApsDatasource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsDatasourceWithOptions($request, $runtime);
    }

    /**
     * @summary 查询APS数据源列表
     *  *
     * @param DescribeApsDatasourcesRequest $request DescribeApsDatasourcesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApsDatasourcesResponse DescribeApsDatasourcesResponse
     */
    public function describeApsDatasourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->datasourceName)) {
            $body['DatasourceName'] = $request->datasourceName;
        }
        if (!Utils::isUnset($request->datasourceType)) {
            $body['DatasourceType'] = $request->datasourceType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeApsDatasources',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApsDatasourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询APS数据源列表
     *  *
     * @param DescribeApsDatasourcesRequest $request DescribeApsDatasourcesRequest
     *
     * @return DescribeApsDatasourcesResponse DescribeApsDatasourcesResponse
     */
    public function describeApsDatasources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsDatasourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询APS Hive工作负载
     *  *
     * @param DescribeApsHiveWorkloadRequest $request DescribeApsHiveWorkloadRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApsHiveWorkloadResponse DescribeApsHiveWorkloadResponse
     */
    public function describeApsHiveWorkloadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->workloadId)) {
            $body['WorkloadId'] = $request->workloadId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeApsHiveWorkload',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApsHiveWorkloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询APS Hive工作负载
     *  *
     * @param DescribeApsHiveWorkloadRequest $request DescribeApsHiveWorkloadRequest
     *
     * @return DescribeApsHiveWorkloadResponse DescribeApsHiveWorkloadResponse
     */
    public function describeApsHiveWorkload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsHiveWorkloadWithOptions($request, $runtime);
    }

    /**
     * @summary DescribeApsJobDetail。
     *  *
     * @param DescribeApsJobDetailRequest $request DescribeApsJobDetailRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApsJobDetailResponse DescribeApsJobDetailResponse
     */
    public function describeApsJobDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apsJobId)) {
            $body['ApsJobId'] = $request->apsJobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeApsJobDetail',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApsJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DescribeApsJobDetail。
     *  *
     * @param DescribeApsJobDetailRequest $request DescribeApsJobDetailRequest
     *
     * @return DescribeApsJobDetailResponse DescribeApsJobDetailResponse
     */
    public function describeApsJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsJobDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 查询一站式链路列表
     *  *
     * @param DescribeApsJobsRequest $request DescribeApsJobsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApsJobsResponse DescribeApsJobsResponse
     */
    public function describeApsJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apsJobName)) {
            $body['ApsJobName'] = $request->apsJobName;
        }
        if (!Utils::isUnset($request->createTimeEnd)) {
            $body['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $body['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeApsJobs',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApsJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询一站式链路列表
     *  *
     * @param DescribeApsJobsRequest $request DescribeApsJobsRequest
     *
     * @return DescribeApsJobsResponse DescribeApsJobsResponse
     */
    public function describeApsJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询APS迁移任务列表。
     *  *
     * @param DescribeApsMigrationWorkloadsRequest $request DescribeApsMigrationWorkloadsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApsMigrationWorkloadsResponse DescribeApsMigrationWorkloadsResponse
     */
    public function describeApsMigrationWorkloadsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ossLocation)) {
            $body['OssLocation'] = $request->ossLocation;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->workloadName)) {
            $body['WorkloadName'] = $request->workloadName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeApsMigrationWorkloads',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApsMigrationWorkloadsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询APS迁移任务列表。
     *  *
     * @param DescribeApsMigrationWorkloadsRequest $request DescribeApsMigrationWorkloadsRequest
     *
     * @return DescribeApsMigrationWorkloadsResponse DescribeApsMigrationWorkloadsResponse
     */
    public function describeApsMigrationWorkloads($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsMigrationWorkloadsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询aps任务进展。
     *  *
     * @param DescribeApsProgressRequest $request DescribeApsProgressRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApsProgressResponse DescribeApsProgressResponse
     */
    public function describeApsProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->workloadId)) {
            $body['WorkloadId'] = $request->workloadId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeApsProgress',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApsProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询aps任务进展。
     *  *
     * @param DescribeApsProgressRequest $request DescribeApsProgressRequest
     *
     * @return DescribeApsProgressResponse DescribeApsProgressResponse
     */
    public function describeApsProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsProgressWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about resource groups of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeApsResourceGroupsRequest $request DescribeApsResourceGroupsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApsResourceGroupsResponse DescribeApsResourceGroupsResponse
     */
    public function describeApsResourceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->workloadId)) {
            $body['WorkloadId'] = $request->workloadId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeApsResourceGroups',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApsResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about resource groups of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeApsResourceGroupsRequest $request DescribeApsResourceGroupsRequest
     *
     * @return DescribeApsResourceGroupsResponse DescribeApsResourceGroupsResponse
     */
    public function describeApsResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsResourceGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the SQL audit logs of an AnalyticDB for MySQL cluster.
     *  *
     * @description *   SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried. The following operations are not recorded in SQL audit logs: **INSERT INTO VALUES**, **REPLACE INTO VALUES**, and **UPSERT INTO VALUES**.
     * *   For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeAuditLogRecordsRequest $request DescribeAuditLogRecordsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuditLogRecordsResponse DescribeAuditLogRecordsResponse
     */
    public function describeAuditLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->hostAddress)) {
            $query['HostAddress'] = $request->hostAddress;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->proxyUser)) {
            $query['ProxyUser'] = $request->proxyUser;
        }
        if (!Utils::isUnset($request->queryKeyword)) {
            $query['QueryKeyword'] = $request->queryKeyword;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sqlType)) {
            $query['SqlType'] = $request->sqlType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->succeed)) {
            $query['Succeed'] = $request->succeed;
        }
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuditLogRecords',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuditLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the SQL audit logs of an AnalyticDB for MySQL cluster.
     *  *
     * @description *   SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried. The following operations are not recorded in SQL audit logs: **INSERT INTO VALUES**, **REPLACE INTO VALUES**, and **UPSERT INTO VALUES**.
     * *   For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeAuditLogRecordsRequest $request DescribeAuditLogRecordsRequest
     *
     * @return DescribeAuditLogRecordsResponse DescribeAuditLogRecordsResponse
     */
    public function describeAuditLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary 显示可用优化建议
     *  *
     * @param DescribeAvailableAdvicesRequest $request DescribeAvailableAdvicesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableAdvicesResponse DescribeAvailableAdvicesResponse
     */
    public function describeAvailableAdvicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adviceDate)) {
            $query['AdviceDate'] = $request->adviceDate;
        }
        if (!Utils::isUnset($request->adviceType)) {
            $query['AdviceType'] = $request->adviceType;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->schemaTableName)) {
            $query['SchemaTableName'] = $request->schemaTableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableAdvices',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableAdvicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 显示可用优化建议
     *  *
     * @param DescribeAvailableAdvicesRequest $request DescribeAvailableAdvicesRequest
     *
     * @return DescribeAvailableAdvicesResponse DescribeAvailableAdvicesResponse
     */
    public function describeAvailableAdvices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableAdvicesWithOptions($request, $runtime);
    }

    /**
     * @summary 查看集群备份设置
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeBackupPolicyRequest $request DescribeBackupPolicyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupPolicyResponse DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看集群备份设置
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeBackupPolicyRequest $request DescribeBackupPolicyRequest
     *
     * @return DescribeBackupPolicyResponse DescribeBackupPolicyResponse
     */
    public function describeBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeBackupsRequest $request DescribeBackupsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupsResponse DescribeBackupsResponse
     */
    public function describeBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackups',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeBackupsRequest $request DescribeBackupsRequest
     *
     * @return DescribeBackupsResponse DescribeBackupsResponse
     */
    public function describeBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupsWithOptions($request, $runtime);
    }

    /**
     * @summary 查看BadSql诊断结果
     *  *
     * @param DescribeBadSqlDetectionRequest $request DescribeBadSqlDetectionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBadSqlDetectionResponse DescribeBadSqlDetectionResponse
     */
    public function describeBadSqlDetectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBadSqlDetection',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBadSqlDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看BadSql诊断结果
     *  *
     * @param DescribeBadSqlDetectionRequest $request DescribeBadSqlDetectionRequest
     *
     * @return DescribeBadSqlDetectionResponse DescribeBadSqlDetectionResponse
     */
    public function describeBadSqlDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBadSqlDetectionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the IP address whitelists of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeClusterAccessWhiteListRequest $request DescribeClusterAccessWhiteListRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterAccessWhiteListResponse DescribeClusterAccessWhiteListResponse
     */
    public function describeClusterAccessWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterAccessWhiteList',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterAccessWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the IP address whitelists of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeClusterAccessWhiteListRequest $request DescribeClusterAccessWhiteListRequest
     *
     * @return DescribeClusterAccessWhiteListResponse DescribeClusterAccessWhiteListResponse
     */
    public function describeClusterAccessWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterAccessWhiteListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the network information about an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeClusterNetInfoRequest $request DescribeClusterNetInfoRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterNetInfoResponse DescribeClusterNetInfoResponse
     */
    public function describeClusterNetInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterNetInfo',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterNetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the network information about an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeClusterNetInfoRequest $request DescribeClusterNetInfoRequest
     *
     * @return DescribeClusterNetInfoResponse DescribeClusterNetInfoResponse
     */
    public function describeClusterNetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterNetInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about resource usage of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeClusterResourceDetailRequest $request DescribeClusterResourceDetailRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterResourceDetailResponse DescribeClusterResourceDetailResponse
     */
    public function describeClusterResourceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterResourceDetail',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterResourceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about resource usage of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeClusterResourceDetailRequest $request DescribeClusterResourceDetailRequest
     *
     * @return DescribeClusterResourceDetailResponse DescribeClusterResourceDetailResponse
     */
    public function describeClusterResourceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterResourceDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 获取实例资源统计
     *  *
     * @param DescribeClusterResourceUsageRequest $request DescribeClusterResourceUsageRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterResourceUsageResponse DescribeClusterResourceUsageResponse
     */
    public function describeClusterResourceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterResourceUsage',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例资源统计
     *  *
     * @param DescribeClusterResourceUsageRequest $request DescribeClusterResourceUsageRequest
     *
     * @return DescribeClusterResourceUsageResponse DescribeClusterResourceUsageResponse
     */
    public function describeClusterResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterResourceUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of columns in a table.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeColumnsRequest $request DescribeColumnsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeColumnsResponse DescribeColumnsResponse
     */
    public function describeColumnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeColumns',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of columns in a table.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeColumnsRequest $request DescribeColumnsRequest
     *
     * @return DescribeColumnsResponse DescribeColumnsResponse
     */
    public function describeColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeColumnsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether the remote build feature is enabled in the query acceleration configuration of an AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeCompactionServiceSwitchRequest $request DescribeCompactionServiceSwitchRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCompactionServiceSwitchResponse DescribeCompactionServiceSwitchResponse
     */
    public function describeCompactionServiceSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCompactionServiceSwitch',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCompactionServiceSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether the remote build feature is enabled in the query acceleration configuration of an AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeCompactionServiceSwitchRequest $request DescribeCompactionServiceSwitchRequest
     *
     * @return DescribeCompactionServiceSwitchResponse DescribeCompactionServiceSwitchResponse
     */
    public function describeCompactionServiceSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCompactionServiceSwitchWithOptions($request, $runtime);
    }

    /**
     * @summary 获取实例计算资源使用统计
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeComputeResourceUsageRequest $request DescribeComputeResourceUsageRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeComputeResourceUsageResponse DescribeComputeResourceUsageResponse
     */
    public function describeComputeResourceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeComputeResourceUsage',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeComputeResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例计算资源使用统计
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeComputeResourceUsageRequest $request DescribeComputeResourceUsageRequest
     *
     * @return DescribeComputeResourceUsageResponse DescribeComputeResourceUsageResponse
     */
    public function describeComputeResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComputeResourceUsageWithOptions($request, $runtime);
    }

    /**
     * @summary 查看接入层诊断结果
     *  *
     * @param DescribeControllerDetectionRequest $request DescribeControllerDetectionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeControllerDetectionResponse DescribeControllerDetectionResponse
     */
    public function describeControllerDetectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeControllerDetection',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeControllerDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看接入层诊断结果
     *  *
     * @param DescribeControllerDetectionRequest $request DescribeControllerDetectionRequest
     *
     * @return DescribeControllerDetectionResponse DescribeControllerDetectionResponse
     */
    public function describeControllerDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeControllerDetectionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeDBClusterAttributeRequest $request DescribeDBClusterAttributeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterAttributeResponse DescribeDBClusterAttributeResponse
     */
    public function describeDBClusterAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusterAttribute',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeDBClusterAttributeRequest $request DescribeDBClusterAttributeRequest
     *
     * @return DescribeDBClusterAttributeResponse DescribeDBClusterAttributeResponse
     */
    public function describeDBClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the health status of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeDBClusterHealthStatusRequest $request DescribeDBClusterHealthStatusRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterHealthStatusResponse DescribeDBClusterHealthStatusResponse
     */
    public function describeDBClusterHealthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusterHealthStatus',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the health status of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeDBClusterHealthStatusRequest $request DescribeDBClusterHealthStatusRequest
     *
     * @return DescribeDBClusterHealthStatusResponse DescribeDBClusterHealthStatusResponse
     */
    public function describeDBClusterHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterHealthStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the performance data of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeDBClusterPerformanceRequest $request DescribeDBClusterPerformanceRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterPerformanceResponse DescribeDBClusterPerformanceResponse
     */
    public function describeDBClusterPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourcePools)) {
            $query['ResourcePools'] = $request->resourcePools;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusterPerformance',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the performance data of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeDBClusterPerformanceRequest $request DescribeDBClusterPerformanceRequest
     *
     * @return DescribeDBClusterPerformanceResponse DescribeDBClusterPerformanceResponse
     */
    public function describeDBClusterPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterPerformanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the storage overview information of an AnalyticDB for MySQL cluster, such as the total data size, hot data size, cold data size, and data growth.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeDBClusterSpaceSummaryRequest $request DescribeDBClusterSpaceSummaryRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterSpaceSummaryResponse DescribeDBClusterSpaceSummaryResponse
     */
    public function describeDBClusterSpaceSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusterSpaceSummary',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterSpaceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the storage overview information of an AnalyticDB for MySQL cluster, such as the total data size, hot data size, cold data size, and data growth.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeDBClusterSpaceSummaryRequest $request DescribeDBClusterSpaceSummaryRequest
     *
     * @return DescribeDBClusterSpaceSummaryResponse DescribeDBClusterSpaceSummaryResponse
     */
    public function describeDBClusterSpaceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterSpaceSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of AnalyticDB for MySQL Data Lakehouse Edition clusters within a region.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeDBClusterStatusRequest $request DescribeDBClusterStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterStatusResponse DescribeDBClusterStatusResponse
     */
    public function describeDBClusterStatusWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBClusterStatus',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of AnalyticDB for MySQL Data Lakehouse Edition clusters within a region.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeDBClusterStatusRequest $request DescribeDBClusterStatusRequest
     *
     * @return DescribeDBClusterStatusResponse DescribeDBClusterStatusResponse
     */
    public function describeDBClusterStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about AnalyticDB for MySQL Data Lakehouse Edition clusters within a region.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeDBClustersRequest $request DescribeDBClustersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClustersResponse DescribeDBClustersResponse
     */
    public function describeDBClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterDescription)) {
            $query['DBClusterDescription'] = $request->DBClusterDescription;
        }
        if (!Utils::isUnset($request->DBClusterIds)) {
            $query['DBClusterIds'] = $request->DBClusterIds;
        }
        if (!Utils::isUnset($request->DBClusterStatus)) {
            $query['DBClusterStatus'] = $request->DBClusterStatus;
        }
        if (!Utils::isUnset($request->DBClusterVersion)) {
            $query['DBClusterVersion'] = $request->DBClusterVersion;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productVersion)) {
            $query['ProductVersion'] = $request->productVersion;
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
            'action'      => 'DescribeDBClusters',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about AnalyticDB for MySQL Data Lakehouse Edition clusters within a region.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeDBClustersRequest $request DescribeDBClustersRequest
     *
     * @return DescribeDBClustersResponse DescribeDBClustersResponse
     */
    public function describeDBClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClustersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about resource groups of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeDBResourceGroupRequest $request DescribeDBResourceGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBResourceGroupResponse DescribeDBResourceGroupResponse
     */
    public function describeDBResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBResourceGroup',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about resource groups of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeDBResourceGroupRequest $request DescribeDBResourceGroupRequest
     *
     * @return DescribeDBResourceGroupResponse DescribeDBResourceGroupResponse
     */
    public function describeDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the deduplicated statistics of resource groups, databases, usernames, and source IP addresses about SQL statements that meet a query condition for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeDiagnosisDimensionsRequest $request DescribeDiagnosisDimensionsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiagnosisDimensionsResponse DescribeDiagnosisDimensionsResponse
     */
    public function describeDiagnosisDimensionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->queryCondition)) {
            $query['QueryCondition'] = $request->queryCondition;
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
            'action'      => 'DescribeDiagnosisDimensions',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosisDimensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the deduplicated statistics of resource groups, databases, usernames, and source IP addresses about SQL statements that meet a query condition for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeDiagnosisDimensionsRequest $request DescribeDiagnosisDimensionsRequest
     *
     * @return DescribeDiagnosisDimensionsResponse DescribeDiagnosisDimensionsResponse
     */
    public function describeDiagnosisDimensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisDimensionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the diagnostic information about SQL statements that meet a query condition for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeDiagnosisRecordsRequest $request DescribeDiagnosisRecordsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiagnosisRecordsResponse DescribeDiagnosisRecordsResponse
     */
    public function describeDiagnosisRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientIp)) {
            $query['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->maxPeakMemory)) {
            $query['MaxPeakMemory'] = $request->maxPeakMemory;
        }
        if (!Utils::isUnset($request->maxScanSize)) {
            $query['MaxScanSize'] = $request->maxScanSize;
        }
        if (!Utils::isUnset($request->minPeakMemory)) {
            $query['MinPeakMemory'] = $request->minPeakMemory;
        }
        if (!Utils::isUnset($request->minScanSize)) {
            $query['MinScanSize'] = $request->minScanSize;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->patternId)) {
            $query['PatternId'] = $request->patternId;
        }
        if (!Utils::isUnset($request->queryCondition)) {
            $query['QueryCondition'] = $request->queryCondition;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroup)) {
            $query['ResourceGroup'] = $request->resourceGroup;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnosisRecords',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosisRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the diagnostic information about SQL statements that meet a query condition for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeDiagnosisRecordsRequest $request DescribeDiagnosisRecordsRequest
     *
     * @return DescribeDiagnosisRecordsResponse DescribeDiagnosisRecordsResponse
     */
    public function describeDiagnosisRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution information about an SQL statement, including the execution plan, execution information, resource usage, and self-diagnostics results.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeDiagnosisSQLInfoRequest $request DescribeDiagnosisSQLInfoRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiagnosisSQLInfoResponse DescribeDiagnosisSQLInfoResponse
     */
    public function describeDiagnosisSQLInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnosisSQLInfo',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosisSQLInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the execution information about an SQL statement, including the execution plan, execution information, resource usage, and self-diagnostics results.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeDiagnosisSQLInfoRequest $request DescribeDiagnosisSQLInfoRequest
     *
     * @return DescribeDiagnosisSQLInfoResponse DescribeDiagnosisSQLInfoResponse
     */
    public function describeDiagnosisSQLInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisSQLInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the last five SQL query download tasks of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeDownloadRecordsRequest $request DescribeDownloadRecordsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDownloadRecordsResponse DescribeDownloadRecordsResponse
     */
    public function describeDownloadRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDownloadRecords',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDownloadRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the last five SQL query download tasks of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeDownloadRecordsRequest $request DescribeDownloadRecordsRequest
     *
     * @return DescribeDownloadRecordsResponse DescribeDownloadRecordsResponse
     */
    public function describeDownloadRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a scaling plan for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeElasticPlanAttributeRequest $request DescribeElasticPlanAttributeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeElasticPlanAttributeResponse DescribeElasticPlanAttributeResponse
     */
    public function describeElasticPlanAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->elasticPlanName)) {
            $query['ElasticPlanName'] = $request->elasticPlanName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeElasticPlanAttribute',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeElasticPlanAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a scaling plan for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeElasticPlanAttributeRequest $request DescribeElasticPlanAttributeRequest
     *
     * @return DescribeElasticPlanAttributeResponse DescribeElasticPlanAttributeResponse
     */
    public function describeElasticPlanAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticPlanAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of scaling plan jobs for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeElasticPlanJobsRequest $request DescribeElasticPlanJobsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeElasticPlanJobsResponse DescribeElasticPlanJobsResponse
     */
    public function describeElasticPlanJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->elasticPlanName)) {
            $query['ElasticPlanName'] = $request->elasticPlanName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
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
            'action'      => 'DescribeElasticPlanJobs',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeElasticPlanJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of scaling plan jobs for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeElasticPlanJobsRequest $request DescribeElasticPlanJobsRequest
     *
     * @return DescribeElasticPlanJobsResponse DescribeElasticPlanJobsResponse
     */
    public function describeElasticPlanJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticPlanJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the resource specifications that are supported by different types of scaling plans of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeElasticPlanSpecificationsRequest $request DescribeElasticPlanSpecificationsRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeElasticPlanSpecificationsResponse DescribeElasticPlanSpecificationsResponse
     */
    public function describeElasticPlanSpecificationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeElasticPlanSpecifications',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeElasticPlanSpecificationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the resource specifications that are supported by different types of scaling plans of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeElasticPlanSpecificationsRequest $request DescribeElasticPlanSpecificationsRequest
     *
     * @return DescribeElasticPlanSpecificationsResponse DescribeElasticPlanSpecificationsResponse
     */
    public function describeElasticPlanSpecifications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticPlanSpecificationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries scaling plans of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeElasticPlansRequest $request DescribeElasticPlansRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeElasticPlansResponse DescribeElasticPlansResponse
     */
    public function describeElasticPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->elasticPlanName)) {
            $query['ElasticPlanName'] = $request->elasticPlanName;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeElasticPlans',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeElasticPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries scaling plans of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeElasticPlansRequest $request DescribeElasticPlansRequest
     *
     * @return DescribeElasticPlansResponse DescribeElasticPlansResponse
     */
    public function describeElasticPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticPlansWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the permission level and permissions supported for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @param DescribeEnabledPrivilegesRequest $request DescribeEnabledPrivilegesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnabledPrivilegesResponse DescribeEnabledPrivilegesResponse
     */
    public function describeEnabledPrivilegesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnabledPrivileges',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnabledPrivilegesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the permission level and permissions supported for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @param DescribeEnabledPrivilegesRequest $request DescribeEnabledPrivilegesRequest
     *
     * @return DescribeEnabledPrivilegesResponse DescribeEnabledPrivilegesResponse
     */
    public function describeEnabledPrivileges($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnabledPrivilegesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询EssdCache配置
     *  *
     * @param DescribeEssdCacheConfigRequest $request DescribeEssdCacheConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEssdCacheConfigResponse DescribeEssdCacheConfigResponse
     */
    public function describeEssdCacheConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEssdCacheConfig',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEssdCacheConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询EssdCache配置
     *  *
     * @param DescribeEssdCacheConfigRequest $request DescribeEssdCacheConfigRequest
     *
     * @return DescribeEssdCacheConfigResponse DescribeEssdCacheConfigResponse
     */
    public function describeEssdCacheConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEssdCacheConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about tables that have excessive primary key fields in an AnalyticDB for MySQL Data Lakehouse Edition (V5.0) cluster.
     *  *
     * @param DescribeExcessivePrimaryKeysRequest $request DescribeExcessivePrimaryKeysRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExcessivePrimaryKeysResponse DescribeExcessivePrimaryKeysResponse
     */
    public function describeExcessivePrimaryKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExcessivePrimaryKeys',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExcessivePrimaryKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about tables that have excessive primary key fields in an AnalyticDB for MySQL Data Lakehouse Edition (V5.0) cluster.
     *  *
     * @param DescribeExcessivePrimaryKeysRequest $request DescribeExcessivePrimaryKeysRequest
     *
     * @return DescribeExcessivePrimaryKeysResponse DescribeExcessivePrimaryKeysResponse
     */
    public function describeExcessivePrimaryKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExcessivePrimaryKeysWithOptions($request, $runtime);
    }

    /**
     * @summary 查看计算层诊断结果
     *  *
     * @param DescribeExecutorDetectionRequest $request DescribeExecutorDetectionRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExecutorDetectionResponse DescribeExecutorDetectionResponse
     */
    public function describeExecutorDetectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExecutorDetection',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExecutorDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看计算层诊断结果
     *  *
     * @param DescribeExecutorDetectionRequest $request DescribeExecutorDetectionRequest
     *
     * @return DescribeExecutorDetectionResponse DescribeExecutorDetectionResponse
     */
    public function describeExecutorDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExecutorDetectionWithOptions($request, $runtime);
    }

    /**
     * @summary 查询存储节点磁盘水位
     *  *
     * @param DescribeInclinedNodesRequest $request DescribeInclinedNodesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInclinedNodesResponse DescribeInclinedNodesResponse
     */
    public function describeInclinedNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInclinedNodes',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInclinedNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询存储节点磁盘水位
     *  *
     * @param DescribeInclinedNodesRequest $request DescribeInclinedNodesRequest
     *
     * @return DescribeInclinedNodesResponse DescribeInclinedNodesResponse
     */
    public function describeInclinedNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInclinedNodesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取作业资源使用统计
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeJobResourceUsageRequest $request DescribeJobResourceUsageRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeJobResourceUsageResponse DescribeJobResourceUsageResponse
     */
    public function describeJobResourceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeJobResourceUsage',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeJobResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取作业资源使用统计
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeJobResourceUsageRequest $request DescribeJobResourceUsageRequest
     *
     * @return DescribeJobResourceUsageResponse DescribeJobResourceUsageResponse
     */
    public function describeJobResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobResourceUsageWithOptions($request, $runtime);
    }

    /**
     * @summary 枚举实例版本信息
     *  *
     * @param DescribeKernelVersionRequest $request DescribeKernelVersionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeKernelVersionResponse DescribeKernelVersionResponse
     */
    public function describeKernelVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeKernelVersion',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeKernelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 枚举实例版本信息
     *  *
     * @param DescribeKernelVersionRequest $request DescribeKernelVersionRequest
     *
     * @return DescribeKernelVersionResponse DescribeKernelVersionResponse
     */
    public function describeKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKernelVersionWithOptions($request, $runtime);
    }

    /**
     * @summary 获取实例LakeCache容量
     *  *
     * @param DescribeLakeCacheSizeRequest $request DescribeLakeCacheSizeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLakeCacheSizeResponse DescribeLakeCacheSizeResponse
     */
    public function describeLakeCacheSizeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLakeCacheSize',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLakeCacheSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例LakeCache容量
     *  *
     * @param DescribeLakeCacheSizeRequest $request DescribeLakeCacheSizeRequest
     *
     * @return DescribeLakeCacheSizeResponse DescribeLakeCacheSizeResponse
     */
    public function describeLakeCacheSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLakeCacheSizeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOperatorPermissionRequest $request DescribeOperatorPermissionRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOperatorPermissionResponse DescribeOperatorPermissionResponse
     */
    public function describeOperatorPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOperatorPermission',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOperatorPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOperatorPermissionRequest $request DescribeOperatorPermissionRequest
     *
     * @return DescribeOperatorPermissionResponse DescribeOperatorPermissionResponse
     */
    public function describeOperatorPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOperatorPermissionWithOptions($request, $runtime);
    }

    /**
     * @summary 查询非分区表诊断结果
     *  *
     * @param DescribeOversizeNonPartitionTableInfosRequest $request DescribeOversizeNonPartitionTableInfosRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOversizeNonPartitionTableInfosResponse DescribeOversizeNonPartitionTableInfosResponse
     */
    public function describeOversizeNonPartitionTableInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOversizeNonPartitionTableInfos',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOversizeNonPartitionTableInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询非分区表诊断结果
     *  *
     * @param DescribeOversizeNonPartitionTableInfosRequest $request DescribeOversizeNonPartitionTableInfosRequest
     *
     * @return DescribeOversizeNonPartitionTableInfosResponse DescribeOversizeNonPartitionTableInfosResponse
     */
    public function describeOversizeNonPartitionTableInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOversizeNonPartitionTableInfosWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about performance metrics of an SQL pattern such as the query duration and average memory usage for an AnalyticDB for MySQL cluster within a time range.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribePatternPerformanceRequest $request DescribePatternPerformanceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePatternPerformanceResponse DescribePatternPerformanceResponse
     */
    public function describePatternPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->patternId)) {
            $query['PatternId'] = $request->patternId;
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
            'action'      => 'DescribePatternPerformance',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePatternPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about performance metrics of an SQL pattern such as the query duration and average memory usage for an AnalyticDB for MySQL cluster within a time range.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribePatternPerformanceRequest $request DescribePatternPerformanceRequest
     *
     * @return DescribePatternPerformanceResponse DescribePatternPerformanceResponse
     */
    public function describePatternPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePatternPerformanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a monitoring view.
     *  *
     * @param DescribePerformanceViewAttributeRequest $request DescribePerformanceViewAttributeRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePerformanceViewAttributeResponse DescribePerformanceViewAttributeResponse
     */
    public function describePerformanceViewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->viewName)) {
            $query['ViewName'] = $request->viewName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePerformanceViewAttribute',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePerformanceViewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a monitoring view.
     *  *
     * @param DescribePerformanceViewAttributeRequest $request DescribePerformanceViewAttributeRequest
     *
     * @return DescribePerformanceViewAttributeResponse DescribePerformanceViewAttributeResponse
     */
    public function describePerformanceViewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePerformanceViewAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of monitoring views.
     *  *
     * @param DescribePerformanceViewsRequest $request DescribePerformanceViewsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePerformanceViewsResponse DescribePerformanceViewsResponse
     */
    public function describePerformanceViewsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePerformanceViews',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePerformanceViewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of monitoring views.
     *  *
     * @param DescribePerformanceViewsRequest $request DescribePerformanceViewsRequest
     *
     * @return DescribePerformanceViewsResponse DescribePerformanceViewsResponse
     */
    public function describePerformanceViews($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePerformanceViewsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of regions and zones in which AnalyticDB for MySQL Data Lakehouse Edition (V3.0) is available.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of regions and zones in which AnalyticDB for MySQL Data Lakehouse Edition (V3.0) is available.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of SQL patterns for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster within a time range.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeSQLPatternsRequest $request DescribeSQLPatternsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQLPatternsResponse DescribeSQLPatternsResponse
     */
    public function describeSQLPatternsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
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
            'action'      => 'DescribeSQLPatterns',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLPatternsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of SQL patterns for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster within a time range.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeSQLPatternsRequest $request DescribeSQLPatternsRequest
     *
     * @return DescribeSQLPatternsResponse DescribeSQLPatternsResponse
     */
    public function describeSQLPatterns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLPatternsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of databases in an AnalyticDB for MySQL cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeSchemasRequest $request DescribeSchemasRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSchemasResponse DescribeSchemasResponse
     */
    public function describeSchemasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSchemas',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of databases in an AnalyticDB for MySQL cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeSchemasRequest $request DescribeSchemasRequest
     *
     * @return DescribeSchemasResponse DescribeSchemasResponse
     */
    public function describeSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSchemasWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSparkAppDiagnosisInfoRequest $request DescribeSparkAppDiagnosisInfoRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSparkAppDiagnosisInfoResponse DescribeSparkAppDiagnosisInfoResponse
     */
    public function describeSparkAppDiagnosisInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSparkAppDiagnosisInfo',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSparkAppDiagnosisInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSparkAppDiagnosisInfoRequest $request DescribeSparkAppDiagnosisInfoRequest
     *
     * @return DescribeSparkAppDiagnosisInfoResponse DescribeSparkAppDiagnosisInfoResponse
     */
    public function describeSparkAppDiagnosisInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSparkAppDiagnosisInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSparkAppTypeRequest $request DescribeSparkAppTypeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSparkAppTypeResponse DescribeSparkAppTypeResponse
     */
    public function describeSparkAppTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSparkAppType',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSparkAppTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSparkAppTypeRequest $request DescribeSparkAppTypeRequest
     *
     * @return DescribeSparkAppTypeResponse DescribeSparkAppTypeResponse
     */
    public function describeSparkAppType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSparkAppTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution logs of Spark code.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeSparkCodeLogRequest $request DescribeSparkCodeLogRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSparkCodeLogResponse DescribeSparkCodeLogResponse
     */
    public function describeSparkCodeLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSparkCodeLog',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSparkCodeLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the execution logs of Spark code.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeSparkCodeLogRequest $request DescribeSparkCodeLogRequest
     *
     * @return DescribeSparkCodeLogResponse DescribeSparkCodeLogResponse
     */
    public function describeSparkCodeLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSparkCodeLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution result of Spark code.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeSparkCodeOutputRequest $request DescribeSparkCodeOutputRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSparkCodeOutputResponse DescribeSparkCodeOutputResponse
     */
    public function describeSparkCodeOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSparkCodeOutput',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSparkCodeOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the execution result of Spark code.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeSparkCodeOutputRequest $request DescribeSparkCodeOutputRequest
     *
     * @return DescribeSparkCodeOutputResponse DescribeSparkCodeOutputResponse
     */
    public function describeSparkCodeOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSparkCodeOutputWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the URL of the web UI for a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeSparkCodeWebUiRequest $request DescribeSparkCodeWebUiRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSparkCodeWebUiResponse DescribeSparkCodeWebUiResponse
     */
    public function describeSparkCodeWebUiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSparkCodeWebUi',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSparkCodeWebUiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the URL of the web UI for a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeSparkCodeWebUiRequest $request DescribeSparkCodeWebUiRequest
     *
     * @return DescribeSparkCodeWebUiResponse DescribeSparkCodeWebUiResponse
     */
    public function describeSparkCodeWebUi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSparkCodeWebUiWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about SQL patterns of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster within a time range.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeSqlPatternRequest $request DescribeSqlPatternRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSqlPatternResponse DescribeSqlPatternResponse
     */
    public function describeSqlPatternWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sqlPattern)) {
            $query['SqlPattern'] = $request->sqlPattern;
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
            'action'      => 'DescribeSqlPattern',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSqlPatternResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about SQL patterns of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster within a time range.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeSqlPatternRequest $request DescribeSqlPatternRequest
     *
     * @return DescribeSqlPatternResponse DescribeSqlPatternResponse
     */
    public function describeSqlPattern($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlPatternWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the storage resource usage of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeStorageResourceUsageRequest $request DescribeStorageResourceUsageRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStorageResourceUsageResponse DescribeStorageResourceUsageResponse
     */
    public function describeStorageResourceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStorageResourceUsage',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStorageResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the storage resource usage of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeStorageResourceUsageRequest $request DescribeStorageResourceUsageRequest
     *
     * @return DescribeStorageResourceUsageResponse DescribeStorageResourceUsageResponse
     */
    public function describeStorageResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageResourceUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of accesses to a table or all tables in an AnalyticDB for MySQL cluster on a date.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeTableAccessCountRequest $request DescribeTableAccessCountRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTableAccessCountResponse DescribeTableAccessCountResponse
     */
    public function describeTableAccessCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
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
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTableAccessCount',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTableAccessCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of accesses to a table or all tables in an AnalyticDB for MySQL cluster on a date.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DescribeTableAccessCountRequest $request DescribeTableAccessCountRequest
     *
     * @return DescribeTableAccessCountResponse DescribeTableAccessCountResponse
     */
    public function describeTableAccessCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTableAccessCountWithOptions($request, $runtime);
    }

    /**
     * @summary 查询表详情
     *  *
     * @param DescribeTableDetailRequest $request DescribeTableDetailRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTableDetailResponse DescribeTableDetailResponse
     */
    public function describeTableDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTableDetail',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTableDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询表详情
     *  *
     * @param DescribeTableDetailRequest $request DescribeTableDetailRequest
     *
     * @return DescribeTableDetailResponse DescribeTableDetailResponse
     */
    public function describeTableDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTableDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 查询分区诊断信息
     *  *
     * @param DescribeTablePartitionDiagnoseRequest $request DescribeTablePartitionDiagnoseRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTablePartitionDiagnoseResponse DescribeTablePartitionDiagnoseResponse
     */
    public function describeTablePartitionDiagnoseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
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
            'action'      => 'DescribeTablePartitionDiagnose',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTablePartitionDiagnoseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询分区诊断信息
     *  *
     * @param DescribeTablePartitionDiagnoseRequest $request DescribeTablePartitionDiagnoseRequest
     *
     * @return DescribeTablePartitionDiagnoseResponse DescribeTablePartitionDiagnoseResponse
     */
    public function describeTablePartitionDiagnose($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTablePartitionDiagnoseWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of tables in a database.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeTablesRequest $request DescribeTablesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTablesResponse DescribeTablesResponse
     */
    public function describeTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTables',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of tables in a database.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param DescribeTablesRequest $request DescribeTablesRequest
     *
     * @return DescribeTablesResponse DescribeTablesResponse
     */
    public function describeTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTablesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询配额
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeUserQuotaRequest $request DescribeUserQuotaRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserQuotaResponse DescribeUserQuotaResponse
     */
    public function describeUserQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserQuota',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询配额
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DescribeUserQuotaRequest $request DescribeUserQuotaRequest
     *
     * @return DescribeUserQuotaResponse DescribeUserQuotaResponse
     */
    public function describeUserQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary 查询存储层诊断结果
     *  *
     * @param DescribeWorkerDetectionRequest $request DescribeWorkerDetectionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWorkerDetectionResponse DescribeWorkerDetectionResponse
     */
    public function describeWorkerDetectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWorkerDetection',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWorkerDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询存储层诊断结果
     *  *
     * @param DescribeWorkerDetectionRequest $request DescribeWorkerDetectionRequest
     *
     * @return DescribeWorkerDetectionResponse DescribeWorkerDetectionResponse
     */
    public function describeWorkerDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWorkerDetectionWithOptions($request, $runtime);
    }

    /**
     * @summary 解绑用户弹性网卡
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DetachUserENIRequest $request DetachUserENIRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachUserENIResponse DetachUserENIResponse
     */
    public function detachUserENIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachUserENI',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachUserENIResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 解绑用户弹性网卡
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DetachUserENIRequest $request DetachUserENIRequest
     *
     * @return DetachUserENIResponse DetachUserENIResponse
     */
    public function detachUserENI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachUserENIWithOptions($request, $runtime);
    }

    /**
     * @summary 关闭建议服务
     *  *
     * @param DisableAdviceServiceRequest $request DisableAdviceServiceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableAdviceServiceResponse DisableAdviceServiceResponse
     */
    public function disableAdviceServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableAdviceService',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableAdviceServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 关闭建议服务
     *  *
     * @param DisableAdviceServiceRequest $request DisableAdviceServiceRequest
     *
     * @return DisableAdviceServiceResponse DisableAdviceServiceResponse
     */
    public function disableAdviceService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAdviceServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Disables a scaling plan for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DisableElasticPlanRequest $request DisableElasticPlanRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableElasticPlanResponse DisableElasticPlanResponse
     */
    public function disableElasticPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->elasticPlanName)) {
            $query['ElasticPlanName'] = $request->elasticPlanName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableElasticPlan',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableElasticPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables a scaling plan for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param DisableElasticPlanRequest $request DisableElasticPlanRequest
     *
     * @return DisableElasticPlanResponse DisableElasticPlanResponse
     */
    public function disableElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableElasticPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Downloads the diagnostic information about SQL statements that meet a query condition for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DownloadDiagnosisRecordsRequest $request DownloadDiagnosisRecordsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DownloadDiagnosisRecordsResponse DownloadDiagnosisRecordsResponse
     */
    public function downloadDiagnosisRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientIp)) {
            $query['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->maxPeakMemory)) {
            $query['MaxPeakMemory'] = $request->maxPeakMemory;
        }
        if (!Utils::isUnset($request->maxScanSize)) {
            $query['MaxScanSize'] = $request->maxScanSize;
        }
        if (!Utils::isUnset($request->minPeakMemory)) {
            $query['MinPeakMemory'] = $request->minPeakMemory;
        }
        if (!Utils::isUnset($request->minScanSize)) {
            $query['MinScanSize'] = $request->minScanSize;
        }
        if (!Utils::isUnset($request->queryCondition)) {
            $query['QueryCondition'] = $request->queryCondition;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroup)) {
            $query['ResourceGroup'] = $request->resourceGroup;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DownloadDiagnosisRecords',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadDiagnosisRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Downloads the diagnostic information about SQL statements that meet a query condition for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param DownloadDiagnosisRecordsRequest $request DownloadDiagnosisRecordsRequest
     *
     * @return DownloadDiagnosisRecordsResponse DownloadDiagnosisRecordsResponse
     */
    public function downloadDiagnosisRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadDiagnosisRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取CA证书OSS路径
     *  *
     * @param DownloadInstanceCACertificateRequest $request DownloadInstanceCACertificateRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DownloadInstanceCACertificateResponse DownloadInstanceCACertificateResponse
     */
    public function downloadInstanceCACertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DownloadInstanceCACertificate',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadInstanceCACertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取CA证书OSS路径
     *  *
     * @param DownloadInstanceCACertificateRequest $request DownloadInstanceCACertificateRequest
     *
     * @return DownloadInstanceCACertificateResponse DownloadInstanceCACertificateResponse
     */
    public function downloadInstanceCACertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadInstanceCACertificateWithOptions($request, $runtime);
    }

    /**
     * @summary 开通建议服务
     *  *
     * @param EnableAdviceServiceRequest $request EnableAdviceServiceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableAdviceServiceResponse EnableAdviceServiceResponse
     */
    public function enableAdviceServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableAdviceService',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableAdviceServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开通建议服务
     *  *
     * @param EnableAdviceServiceRequest $request EnableAdviceServiceRequest
     *
     * @return EnableAdviceServiceResponse EnableAdviceServiceResponse
     */
    public function enableAdviceService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAdviceServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a scaling plan for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param EnableElasticPlanRequest $request EnableElasticPlanRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableElasticPlanResponse EnableElasticPlanResponse
     */
    public function enableElasticPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->elasticPlanName)) {
            $query['ElasticPlanName'] = $request->elasticPlanName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableElasticPlan',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableElasticPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables a scaling plan for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param EnableElasticPlanRequest $request EnableElasticPlanRequest
     *
     * @return EnableElasticPlanResponse EnableElasticPlanResponse
     */
    public function enableElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableElasticPlanWithOptions($request, $runtime);
    }

    /**
     * @summary 执行一段代码
     *  *
     * @param ExecuteSparkReplStatementRequest $request ExecuteSparkReplStatementRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteSparkReplStatementResponse ExecuteSparkReplStatementResponse
     */
    public function executeSparkReplStatementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->code)) {
            $body['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->codeType)) {
            $body['CodeType'] = $request->codeType;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteSparkReplStatement',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteSparkReplStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 执行一段代码
     *  *
     * @param ExecuteSparkReplStatementRequest $request ExecuteSparkReplStatementRequest
     *
     * @return ExecuteSparkReplStatementResponse ExecuteSparkReplStatementResponse
     */
    public function executeSparkReplStatement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeSparkReplStatementWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether a running SQL engine exists.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param ExistRunningSQLEngineRequest $request ExistRunningSQLEngineRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ExistRunningSQLEngineResponse ExistRunningSQLEngineResponse
     */
    public function existRunningSQLEngineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $body['ResourceGroupName'] = $request->resourceGroupName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExistRunningSQLEngine',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExistRunningSQLEngineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether a running SQL engine exists.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param ExistRunningSQLEngineRequest $request ExistRunningSQLEngineRequest
     *
     * @return ExistRunningSQLEngineResponse ExistRunningSQLEngineResponse
     */
    public function existRunningSQLEngine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->existRunningSQLEngineWithOptions($request, $runtime);
    }

    /**
     * @summary 获取当前ADB实例管理的所有Aps任务生成的湖存储数据库列表，主要用于在创建生命周期管理策略时，获取库列表信息。
     *  *
     * @param GetApsManagedDatabasesRequest $request GetApsManagedDatabasesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApsManagedDatabasesResponse GetApsManagedDatabasesResponse
     */
    public function getApsManagedDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetApsManagedDatabases',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetApsManagedDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当前ADB实例管理的所有Aps任务生成的湖存储数据库列表，主要用于在创建生命周期管理策略时，获取库列表信息。
     *  *
     * @param GetApsManagedDatabasesRequest $request GetApsManagedDatabasesRequest
     *
     * @return GetApsManagedDatabasesResponse GetApsManagedDatabasesResponse
     */
    public function getApsManagedDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApsManagedDatabasesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the table creation statement for tables.
     *  *
     * @param GetCreateTableSQLRequest $request GetCreateTableSQLRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCreateTableSQLResponse GetCreateTableSQLResponse
     */
    public function getCreateTableSQLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCreateTableSQL',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCreateTableSQLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the table creation statement for tables.
     *  *
     * @param GetCreateTableSQLRequest $request GetCreateTableSQLRequest
     *
     * @return GetCreateTableSQLResponse GetCreateTableSQLResponse
     */
    public function getCreateTableSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreateTableSQLWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about databases.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetDatabaseObjectsRequest $request GetDatabaseObjectsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDatabaseObjectsResponse GetDatabaseObjectsResponse
     */
    public function getDatabaseObjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->filterOwner)) {
            $query['FilterOwner'] = $request->filterOwner;
        }
        if (!Utils::isUnset($request->filterSchemaName)) {
            $query['FilterSchemaName'] = $request->filterSchemaName;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
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
            'action'      => 'GetDatabaseObjects',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDatabaseObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about databases.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetDatabaseObjectsRequest $request GetDatabaseObjectsRequest
     *
     * @return GetDatabaseObjectsResponse GetDatabaseObjectsResponse
     */
    public function getDatabaseObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatabaseObjectsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取湖存储
     *  *
     * @param GetLakeStorageRequest $request GetLakeStorageRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLakeStorageResponse GetLakeStorageResponse
     */
    public function getLakeStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->lakeStorageId)) {
            $query['LakeStorageId'] = $request->lakeStorageId;
        }
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLakeStorage',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLakeStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取湖存储
     *  *
     * @param GetLakeStorageRequest $request GetLakeStorageRequest
     *
     * @return GetLakeStorageResponse GetLakeStorageResponse
     */
    public function getLakeStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLakeStorageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the retry log of a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkAppAttemptLogRequest $request GetSparkAppAttemptLogRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkAppAttemptLogResponse GetSparkAppAttemptLogResponse
     */
    public function getSparkAppAttemptLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $body = [];
        if (!Utils::isUnset($request->attemptId)) {
            $body['AttemptId'] = $request->attemptId;
        }
        if (!Utils::isUnset($request->logLength)) {
            $body['LogLength'] = $request->logLength;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkAppAttemptLog',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkAppAttemptLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the retry log of a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkAppAttemptLogRequest $request GetSparkAppAttemptLogRequest
     *
     * @return GetSparkAppAttemptLogResponse GetSparkAppAttemptLogResponse
     */
    public function getSparkAppAttemptLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkAppAttemptLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkAppInfoRequest $request GetSparkAppInfoRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkAppInfoResponse GetSparkAppInfoResponse
     */
    public function getSparkAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkAppInfo',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkAppInfoRequest $request GetSparkAppInfoRequest
     *
     * @return GetSparkAppInfoResponse GetSparkAppInfoResponse
     */
    public function getSparkAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkAppInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the logs of a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkAppLogRequest $request GetSparkAppLogRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkAppLogResponse GetSparkAppLogResponse
     */
    public function getSparkAppLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->logLength)) {
            $body['LogLength'] = $request->logLength;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkAppLog',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkAppLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the logs of a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkAppLogRequest $request GetSparkAppLogRequest
     *
     * @return GetSparkAppLogResponse GetSparkAppLogResponse
     */
    public function getSparkAppLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkAppLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the metrics of a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkAppMetricsRequest $request GetSparkAppMetricsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkAppMetricsResponse GetSparkAppMetricsResponse
     */
    public function getSparkAppMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkAppMetrics',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkAppMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the metrics of a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkAppMetricsRequest $request GetSparkAppMetricsRequest
     *
     * @return GetSparkAppMetricsResponse GetSparkAppMetricsResponse
     */
    public function getSparkAppMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkAppMetricsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkAppStateRequest $request GetSparkAppStateRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkAppStateResponse GetSparkAppStateResponse
     */
    public function getSparkAppStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkAppState',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkAppStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkAppStateRequest $request GetSparkAppStateRequest
     *
     * @return GetSparkAppStateResponse GetSparkAppStateResponse
     */
    public function getSparkAppState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkAppStateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the URL of the web UI for a Spark application.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetSparkAppWebUiAddressRequest $request GetSparkAppWebUiAddressRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkAppWebUiAddressResponse GetSparkAppWebUiAddressResponse
     */
    public function getSparkAppWebUiAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkAppWebUiAddress',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkAppWebUiAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the URL of the web UI for a Spark application.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetSparkAppWebUiAddressRequest $request GetSparkAppWebUiAddressRequest
     *
     * @return GetSparkAppWebUiAddressResponse GetSparkAppWebUiAddressResponse
     */
    public function getSparkAppWebUiAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkAppWebUiAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Spark log configuration of an AnalyticDB for MySQL cluster, including the default Spark log path.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkConfigLogPathRequest $request GetSparkConfigLogPathRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkConfigLogPathResponse GetSparkConfigLogPathResponse
     */
    public function getSparkConfigLogPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkConfigLogPath',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkConfigLogPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Spark log configuration of an AnalyticDB for MySQL cluster, including the default Spark log path.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkConfigLogPathRequest $request GetSparkConfigLogPathRequest
     *
     * @return GetSparkConfigLogPathResponse GetSparkConfigLogPathResponse
     */
    public function getSparkConfigLogPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkConfigLogPathWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the results of a Spark log analysis task.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetSparkLogAnalyzeTaskRequest $request GetSparkLogAnalyzeTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkLogAnalyzeTaskResponse GetSparkLogAnalyzeTaskResponse
     */
    public function getSparkLogAnalyzeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkLogAnalyzeTask',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkLogAnalyzeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the results of a Spark log analysis task.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetSparkLogAnalyzeTaskRequest $request GetSparkLogAnalyzeTaskRequest
     *
     * @return GetSparkLogAnalyzeTaskResponse GetSparkLogAnalyzeTaskResponse
     */
    public function getSparkLogAnalyzeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkLogAnalyzeTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 获取一个可交互Session
     *  *
     * @param GetSparkReplSessionRequest $request GetSparkReplSessionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkReplSessionResponse GetSparkReplSessionResponse
     */
    public function getSparkReplSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkReplSession',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkReplSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一个可交互Session
     *  *
     * @param GetSparkReplSessionRequest $request GetSparkReplSessionRequest
     *
     * @return GetSparkReplSessionResponse GetSparkReplSessionResponse
     */
    public function getSparkReplSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkReplSessionWithOptions($request, $runtime);
    }

    /**
     * @summary 获取一段代码的执行结果
     *  *
     * @param GetSparkReplStatementRequest $request GetSparkReplStatementRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkReplStatementResponse GetSparkReplStatementResponse
     */
    public function getSparkReplStatementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->statementId)) {
            $body['StatementId'] = $request->statementId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkReplStatement',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkReplStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一段代码的执行结果
     *  *
     * @param GetSparkReplStatementRequest $request GetSparkReplStatementRequest
     *
     * @return GetSparkReplStatementResponse GetSparkReplStatementResponse
     */
    public function getSparkReplStatement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkReplStatementWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the state information about the Spark SQL engine.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkSQLEngineStateRequest $request GetSparkSQLEngineStateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkSQLEngineStateResponse GetSparkSQLEngineStateResponse
     */
    public function getSparkSQLEngineStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $body['ResourceGroupName'] = $request->resourceGroupName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkSQLEngineState',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkSQLEngineStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the state information about the Spark SQL engine.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkSQLEngineStateRequest $request GetSparkSQLEngineStateRequest
     *
     * @return GetSparkSQLEngineStateResponse GetSparkSQLEngineStateResponse
     */
    public function getSparkSQLEngineState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkSQLEngineStateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the content of a Spark application template.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkTemplateFileContentRequest $request GetSparkTemplateFileContentRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkTemplateFileContentResponse GetSparkTemplateFileContentResponse
     */
    public function getSparkTemplateFileContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkTemplateFileContent',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkTemplateFileContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the content of a Spark application template.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkTemplateFileContentRequest $request GetSparkTemplateFileContentRequest
     *
     * @return GetSparkTemplateFileContentResponse GetSparkTemplateFileContentResponse
     */
    public function getSparkTemplateFileContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkTemplateFileContentWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the directory structure of Spark applications.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkTemplateFolderTreeRequest $request GetSparkTemplateFolderTreeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkTemplateFolderTreeResponse GetSparkTemplateFolderTreeResponse
     */
    public function getSparkTemplateFolderTreeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkTemplateFolderTree',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkTemplateFolderTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the directory structure of Spark applications.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkTemplateFolderTreeRequest $request GetSparkTemplateFolderTreeRequest
     *
     * @return GetSparkTemplateFolderTreeResponse GetSparkTemplateFolderTreeResponse
     */
    public function getSparkTemplateFolderTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkTemplateFolderTreeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the directory structure of Spark applications.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkTemplateFullTreeRequest $request GetSparkTemplateFullTreeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkTemplateFullTreeResponse GetSparkTemplateFullTreeResponse
     */
    public function getSparkTemplateFullTreeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSparkTemplateFullTree',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkTemplateFullTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the directory structure of Spark applications.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param GetSparkTemplateFullTreeRequest $request GetSparkTemplateFullTreeRequest
     *
     * @return GetSparkTemplateFullTreeResponse GetSparkTemplateFullTreeResponse
     */
    public function getSparkTemplateFullTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkTemplateFullTreeWithOptions($request, $runtime);
    }

    /**
     * @summary 获取表
     *  *
     * @param GetTableRequest $request GetTableRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTableResponse GetTableResponse
     */
    public function getTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTable',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取表
     *  *
     * @param GetTableRequest $request GetTableRequest
     *
     * @return GetTableResponse GetTableResponse
     */
    public function getTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about columns.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetTableColumnsRequest $request GetTableColumnsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTableColumnsResponse GetTableColumnsResponse
     */
    public function getTableColumnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->columnName)) {
            $query['ColumnName'] = $request->columnName;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTableColumns',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTableColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about columns.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetTableColumnsRequest $request GetTableColumnsRequest
     *
     * @return GetTableColumnsResponse GetTableColumnsResponse
     */
    public function getTableColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableColumnsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statement that is used to create a table.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetTableDDLRequest $request GetTableDDLRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTableDDLResponse GetTableDDLResponse
     */
    public function getTableDDLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTableDDL',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTableDDLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statement that is used to create a table.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetTableDDLRequest $request GetTableDDLRequest
     *
     * @return GetTableDDLResponse GetTableDDLResponse
     */
    public function getTableDDL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableDDLWithOptions($request, $runtime);
    }

    /**
     * @summary 获取table概要信息
     *  *
     * @param GetTableObjectsRequest $request GetTableObjectsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTableObjectsResponse GetTableObjectsResponse
     */
    public function getTableObjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->filterDescription)) {
            $query['FilterDescription'] = $request->filterDescription;
        }
        if (!Utils::isUnset($request->filterOwner)) {
            $query['FilterOwner'] = $request->filterOwner;
        }
        if (!Utils::isUnset($request->filterTblName)) {
            $query['FilterTblName'] = $request->filterTblName;
        }
        if (!Utils::isUnset($request->filterTblType)) {
            $query['FilterTblType'] = $request->filterTblType;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTableObjects',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTableObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取table概要信息
     *  *
     * @param GetTableObjectsRequest $request GetTableObjectsRequest
     *
     * @return GetTableObjectsResponse GetTableObjectsResponse
     */
    public function getTableObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableObjectsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statement that is used to create a view.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetViewDDLRequest $request GetViewDDLRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetViewDDLResponse GetViewDDLResponse
     */
    public function getViewDDLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->viewName)) {
            $query['ViewName'] = $request->viewName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetViewDDL',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetViewDDLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statement that is used to create a view.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetViewDDLRequest $request GetViewDDLRequest
     *
     * @return GetViewDDLResponse GetViewDDLResponse
     */
    public function getViewDDL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getViewDDLWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about views.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetViewObjectsRequest $request GetViewObjectsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetViewObjectsResponse GetViewObjectsResponse
     */
    public function getViewObjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->filterOwner)) {
            $query['FilterOwner'] = $request->filterOwner;
        }
        if (!Utils::isUnset($request->filterViewName)) {
            $query['FilterViewName'] = $request->filterViewName;
        }
        if (!Utils::isUnset($request->filterViewType)) {
            $query['FilterViewType'] = $request->filterViewType;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetViewObjects',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetViewObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about views.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetViewObjectsRequest $request GetViewObjectsRequest
     *
     * @return GetViewObjectsResponse GetViewObjectsResponse
     */
    public function getViewObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getViewObjectsWithOptions($request, $runtime);
    }

    /**
     * @param GrantOperatorPermissionRequest $request GrantOperatorPermissionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantOperatorPermissionResponse GrantOperatorPermissionResponse
     */
    public function grantOperatorPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->expiredTime)) {
            $query['ExpiredTime'] = $request->expiredTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->privileges)) {
            $query['Privileges'] = $request->privileges;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GrantOperatorPermission',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantOperatorPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GrantOperatorPermissionRequest $request GrantOperatorPermissionRequest
     *
     * @return GrantOperatorPermissionResponse GrantOperatorPermissionResponse
     */
    public function grantOperatorPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantOperatorPermissionWithOptions($request, $runtime);
    }

    /**
     * @summary 终止正在进行的任务
     *  *
     * @param KillProcessRequest $request KillProcessRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return KillProcessResponse KillProcessResponse
     */
    public function killProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'KillProcess',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KillProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 终止正在进行的任务
     *  *
     * @param KillProcessRequest $request KillProcessRequest
     *
     * @return KillProcessResponse KillProcessResponse
     */
    public function killProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killProcessWithOptions($request, $runtime);
    }

    /**
     * @summary Terminates a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param KillSparkAppRequest $request KillSparkAppRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return KillSparkAppResponse KillSparkAppResponse
     */
    public function killSparkAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'KillSparkApp',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KillSparkAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Terminates a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param KillSparkAppRequest $request KillSparkAppRequest
     *
     * @return KillSparkAppResponse KillSparkAppResponse
     */
    public function killSparkApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killSparkAppWithOptions($request, $runtime);
    }

    /**
     * @summary Terminates a Spark log analysis task and queries the information about the analysis task.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param KillSparkLogAnalyzeTaskRequest $request KillSparkLogAnalyzeTaskRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return KillSparkLogAnalyzeTaskResponse KillSparkLogAnalyzeTaskResponse
     */
    public function killSparkLogAnalyzeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'KillSparkLogAnalyzeTask',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KillSparkLogAnalyzeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Terminates a Spark log analysis task and queries the information about the analysis task.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param KillSparkLogAnalyzeTaskRequest $request KillSparkLogAnalyzeTaskRequest
     *
     * @return KillSparkLogAnalyzeTaskResponse KillSparkLogAnalyzeTaskResponse
     */
    public function killSparkLogAnalyzeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killSparkLogAnalyzeTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Shuts down a Spark SQL engine.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param KillSparkSQLEngineRequest $request KillSparkSQLEngineRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return KillSparkSQLEngineResponse KillSparkSQLEngineResponse
     */
    public function killSparkSQLEngineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $body['ResourceGroupName'] = $request->resourceGroupName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'KillSparkSQLEngine',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KillSparkSQLEngineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Shuts down a Spark SQL engine.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param KillSparkSQLEngineRequest $request KillSparkSQLEngineRequest
     *
     * @return KillSparkSQLEngineResponse KillSparkSQLEngineResponse
     */
    public function killSparkSQLEngine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killSparkSQLEngineWithOptions($request, $runtime);
    }

    /**
     * @summary 获取当前ADB实例生命周期管理策略列表
     *  *
     * @param ListApsLifecycleStrategyRequest $request ListApsLifecycleStrategyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApsLifecycleStrategyResponse ListApsLifecycleStrategyResponse
     */
    public function listApsLifecycleStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListApsLifecycleStrategy',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApsLifecycleStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当前ADB实例生命周期管理策略列表
     *  *
     * @param ListApsLifecycleStrategyRequest $request ListApsLifecycleStrategyRequest
     *
     * @return ListApsLifecycleStrategyResponse ListApsLifecycleStrategyResponse
     */
    public function listApsLifecycleStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApsLifecycleStrategyWithOptions($request, $runtime);
    }

    /**
     * @summary 获取当前ADB实例湖存储优化策略列表。
     *  *
     * @param ListApsOptimizationStrategyRequest $request ListApsOptimizationStrategyRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApsOptimizationStrategyResponse ListApsOptimizationStrategyResponse
     */
    public function listApsOptimizationStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListApsOptimizationStrategy',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApsOptimizationStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当前ADB实例湖存储优化策略列表。
     *  *
     * @param ListApsOptimizationStrategyRequest $request ListApsOptimizationStrategyRequest
     *
     * @return ListApsOptimizationStrategyResponse ListApsOptimizationStrategyResponse
     */
    public function listApsOptimizationStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApsOptimizationStrategyWithOptions($request, $runtime);
    }

    /**
     * @summary 获取指定类型湖存储优化策略执行过的任务列表。湖存储优化策略会周期性调度执行优化任务。
     *  *
     * @param ListApsOptimizationTasksRequest $request ListApsOptimizationTasksRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApsOptimizationTasksResponse ListApsOptimizationTasksResponse
     */
    public function listApsOptimizationTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->strategyType)) {
            $body['StrategyType'] = $request->strategyType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListApsOptimizationTasks',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApsOptimizationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定类型湖存储优化策略执行过的任务列表。湖存储优化策略会周期性调度执行优化任务。
     *  *
     * @param ListApsOptimizationTasksRequest $request ListApsOptimizationTasksRequest
     *
     * @return ListApsOptimizationTasksResponse ListApsOptimizationTasksResponse
     */
    public function listApsOptimizationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApsOptimizationTasksWithOptions($request, $runtime);
    }

    /**
     * @summary 列取湖存储
     *  *
     * @param ListLakeStoragesRequest $request ListLakeStoragesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLakeStoragesResponse ListLakeStoragesResponse
     */
    public function listLakeStoragesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLakeStorages',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLakeStoragesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列取湖存储
     *  *
     * @param ListLakeStoragesRequest $request ListLakeStoragesRequest
     *
     * @return ListLakeStoragesResponse ListLakeStoragesResponse
     */
    public function listLakeStorages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLakeStoragesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution records of result set export jobs of a Resource Access Management (RAM) user.
     *  *
     * @param ListResultExportJobHistoryRequest $tmpReq  ListResultExportJobHistoryRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResultExportJobHistoryResponse ListResultExportJobHistoryResponse
     */
    public function listResultExportJobHistoryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListResultExportJobHistoryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->order)) {
            $request->orderShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->order, 'Order', 'json');
        }
        if (!Utils::isUnset($tmpReq->statusList)) {
            $request->statusListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'StatusList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->databaseUser)) {
            $body['DatabaseUser'] = $request->databaseUser;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->orderShrink)) {
            $body['Order'] = $request->orderShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroup)) {
            $body['ResourceGroup'] = $request->resourceGroup;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->statusListShrink)) {
            $body['StatusList'] = $request->statusListShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListResultExportJobHistory',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResultExportJobHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the execution records of result set export jobs of a Resource Access Management (RAM) user.
     *  *
     * @param ListResultExportJobHistoryRequest $request ListResultExportJobHistoryRequest
     *
     * @return ListResultExportJobHistoryResponse ListResultExportJobHistoryResponse
     */
    public function listResultExportJobHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResultExportJobHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about retry attempts of a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param ListSparkAppAttemptsRequest $request ListSparkAppAttemptsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSparkAppAttemptsResponse ListSparkAppAttemptsResponse
     */
    public function listSparkAppAttemptsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSparkAppAttempts',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSparkAppAttemptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about retry attempts of a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param ListSparkAppAttemptsRequest $request ListSparkAppAttemptsRequest
     *
     * @return ListSparkAppAttemptsResponse ListSparkAppAttemptsResponse
     */
    public function listSparkAppAttempts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSparkAppAttemptsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Spark applications that run on an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @param ListSparkAppsRequest $request ListSparkAppsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSparkAppsResponse ListSparkAppsResponse
     */
    public function listSparkAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $query['ResourceGroupName'] = $request->resourceGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSparkApps',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSparkAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Spark applications that run on an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @param ListSparkAppsRequest $request ListSparkAppsRequest
     *
     * @return ListSparkAppsResponse ListSparkAppsResponse
     */
    public function listSparkApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSparkAppsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of Spark log analysis tasks.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param ListSparkLogAnalyzeTasksRequest $request ListSparkLogAnalyzeTasksRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSparkLogAnalyzeTasksResponse ListSparkLogAnalyzeTasksResponse
     */
    public function listSparkLogAnalyzeTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSparkLogAnalyzeTasks',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSparkLogAnalyzeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of Spark log analysis tasks.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param ListSparkLogAnalyzeTasksRequest $request ListSparkLogAnalyzeTasksRequest
     *
     * @return ListSparkLogAnalyzeTasksResponse ListSparkLogAnalyzeTasksResponse
     */
    public function listSparkLogAnalyzeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSparkLogAnalyzeTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all Spark template file IDs of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param ListSparkTemplateFileIdsRequest $request ListSparkTemplateFileIdsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSparkTemplateFileIdsResponse ListSparkTemplateFileIdsResponse
     */
    public function listSparkTemplateFileIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSparkTemplateFileIds',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSparkTemplateFileIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all Spark template file IDs of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param ListSparkTemplateFileIdsRequest $request ListSparkTemplateFileIdsRequest
     *
     * @return ListSparkTemplateFileIdsResponse ListSparkTemplateFileIdsResponse
     */
    public function listSparkTemplateFileIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSparkTemplateFileIdsWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'action'      => 'ListTagResources',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Loads a built-in dataset.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param LoadSampleDataSetRequest $request LoadSampleDataSetRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return LoadSampleDataSetResponse LoadSampleDataSetResponse
     */
    public function loadSampleDataSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LoadSampleDataSet',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LoadSampleDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Loads a built-in dataset.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param LoadSampleDataSetRequest $request LoadSampleDataSetRequest
     *
     * @return LoadSampleDataSetResponse LoadSampleDataSetResponse
     */
    public function loadSampleDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loadSampleDataSetWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of a database account for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyAccountDescriptionRequest $request ModifyAccountDescriptionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccountDescriptionResponse ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountDescription)) {
            $query['AccountDescription'] = $request->accountDescription;
        }
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountDescription',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of a database account for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyAccountDescriptionRequest $request ModifyAccountDescriptionRequest
     *
     * @return ModifyAccountDescriptionResponse ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the permissions of a database account.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyAccountPrivilegesRequest $tmpReq  ModifyAccountPrivilegesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccountPrivilegesResponse ModifyAccountPrivilegesResponse
     */
    public function modifyAccountPrivilegesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyAccountPrivilegesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->accountPrivileges)) {
            $request->accountPrivilegesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->accountPrivileges, 'AccountPrivileges', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPrivilegesShrink)) {
            $query['AccountPrivileges'] = $request->accountPrivilegesShrink;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountPrivileges',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountPrivilegesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the permissions of a database account.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyAccountPrivilegesRequest $request ModifyAccountPrivilegesRequest
     *
     * @return ModifyAccountPrivilegesResponse ModifyAccountPrivilegesResponse
     */
    public function modifyAccountPrivileges($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountPrivilegesWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑APS数据源
     *  *
     * @param ModifyApsDatasoureRequest $tmpReq  ModifyApsDatasoureRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApsDatasoureResponse ModifyApsDatasoureResponse
     */
    public function modifyApsDatasoureWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyApsDatasoureShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->kafkaInfo)) {
            $request->kafkaInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->kafkaInfo, 'KafkaInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->lakehouseId)) {
            $request->lakehouseIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lakehouseId, 'LakehouseId', 'json');
        }
        if (!Utils::isUnset($tmpReq->polarDBMysqlInfo)) {
            $request->polarDBMysqlInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->polarDBMysqlInfo, 'PolarDBMysqlInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->rdsMysqlInfo)) {
            $request->rdsMysqlInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rdsMysqlInfo, 'RdsMysqlInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->slsInfo)) {
            $request->slsInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->slsInfo, 'SlsInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->datasourceDescription)) {
            $body['DatasourceDescription'] = $request->datasourceDescription;
        }
        if (!Utils::isUnset($request->datasourceId)) {
            $body['DatasourceId'] = $request->datasourceId;
        }
        if (!Utils::isUnset($request->datasourceName)) {
            $body['DatasourceName'] = $request->datasourceName;
        }
        if (!Utils::isUnset($request->kafkaInfoShrink)) {
            $body['KafkaInfo'] = $request->kafkaInfoShrink;
        }
        if (!Utils::isUnset($request->lakehouseIdShrink)) {
            $body['LakehouseId'] = $request->lakehouseIdShrink;
        }
        if (!Utils::isUnset($request->polarDBMysqlInfoShrink)) {
            $body['PolarDBMysqlInfo'] = $request->polarDBMysqlInfoShrink;
        }
        if (!Utils::isUnset($request->rdsMysqlInfoShrink)) {
            $body['RdsMysqlInfo'] = $request->rdsMysqlInfoShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->slsInfoShrink)) {
            $body['SlsInfo'] = $request->slsInfoShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyApsDatasoure',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApsDatasoureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑APS数据源
     *  *
     * @param ModifyApsDatasoureRequest $request ModifyApsDatasoureRequest
     *
     * @return ModifyApsDatasoureResponse ModifyApsDatasoureResponse
     */
    public function modifyApsDatasoure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApsDatasoureWithOptions($request, $runtime);
    }

    /**
     * @summary 修改aps任务
     *  *
     * @param ModifyApsJobRequest $request ModifyApsJobRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApsJobResponse ModifyApsJobResponse
     */
    public function modifyApsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apsJobId)) {
            $body['ApsJobId'] = $request->apsJobId;
        }
        if (!Utils::isUnset($request->dbList)) {
            $body['DbList'] = $request->dbList;
        }
        if (!Utils::isUnset($request->partitionList)) {
            $body['PartitionList'] = $request->partitionList;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyApsJob',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改aps任务
     *  *
     * @param ModifyApsJobRequest $request ModifyApsJobRequest
     *
     * @return ModifyApsJobResponse ModifyApsJobResponse
     */
    public function modifyApsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApsJobWithOptions($request, $runtime);
    }

    /**
     * @summary 修改sls投递adb数仓任务
     *  *
     * @param ModifyApsSlsADBJobRequest $tmpReq  ModifyApsSlsADBJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApsSlsADBJobResponse ModifyApsSlsADBJobResponse
     */
    public function modifyApsSlsADBJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyApsSlsADBJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->columns)) {
            $request->columnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->columns, 'Columns', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->columnsShrink)) {
            $body['Columns'] = $request->columnsShrink;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dirtyDataProcessPattern)) {
            $body['DirtyDataProcessPattern'] = $request->dirtyDataProcessPattern;
        }
        if (!Utils::isUnset($request->exactlyOnce)) {
            $body['ExactlyOnce'] = $request->exactlyOnce;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startingOffsets)) {
            $body['StartingOffsets'] = $request->startingOffsets;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->unixTimestampConvert)) {
            $body['UnixTimestampConvert'] = $request->unixTimestampConvert;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->workloadId)) {
            $body['WorkloadId'] = $request->workloadId;
        }
        if (!Utils::isUnset($request->workloadName)) {
            $body['WorkloadName'] = $request->workloadName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyApsSlsADBJob',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApsSlsADBJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改sls投递adb数仓任务
     *  *
     * @param ModifyApsSlsADBJobRequest $request ModifyApsSlsADBJobRequest
     *
     * @return ModifyApsSlsADBJobResponse ModifyApsSlsADBJobResponse
     */
    public function modifyApsSlsADBJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApsSlsADBJobWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the AnalyticDB Pipeline Service (APS) workload name.
     *  *
     * @param ModifyApsWorkloadNameRequest $request ModifyApsWorkloadNameRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApsWorkloadNameResponse ModifyApsWorkloadNameResponse
     */
    public function modifyApsWorkloadNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->workloadId)) {
            $body['WorkloadId'] = $request->workloadId;
        }
        if (!Utils::isUnset($request->workloadName)) {
            $body['WorkloadName'] = $request->workloadName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyApsWorkloadName',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApsWorkloadNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the AnalyticDB Pipeline Service (APS) workload name.
     *  *
     * @param ModifyApsWorkloadNameRequest $request ModifyApsWorkloadNameRequest
     *
     * @return ModifyApsWorkloadNameResponse ModifyApsWorkloadNameResponse
     */
    public function modifyApsWorkloadName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApsWorkloadNameWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the SQL audit settings of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyAuditLogConfigRequest $request ModifyAuditLogConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAuditLogConfigResponse ModifyAuditLogConfigResponse
     */
    public function modifyAuditLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditLogStatus)) {
            $query['AuditLogStatus'] = $request->auditLogStatus;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->engineType)) {
            $query['EngineType'] = $request->engineType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAuditLogConfig',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAuditLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the SQL audit settings of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyAuditLogConfigRequest $request ModifyAuditLogConfigRequest
     *
     * @return ModifyAuditLogConfigResponse ModifyAuditLogConfigResponse
     */
    public function modifyAuditLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAuditLogConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the backup policy of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyBackupPolicyRequest $request ModifyBackupPolicyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBackupPolicyResponse ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupRetentionPeriod)) {
            $query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->enableBackupLog)) {
            $query['EnableBackupLog'] = $request->enableBackupLog;
        }
        if (!Utils::isUnset($request->logBackupRetentionPeriod)) {
            $query['LogBackupRetentionPeriod'] = $request->logBackupRetentionPeriod;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->preferredBackupPeriod)) {
            $query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }
        if (!Utils::isUnset($request->preferredBackupTime)) {
            $query['PreferredBackupTime'] = $request->preferredBackupTime;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupPolicy',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the backup policy of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyBackupPolicyRequest $request ModifyBackupPolicyRequest
     *
     * @return ModifyBackupPolicyResponse ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary 开启宽表引擎
     *  *
     * @param ModifyClickhouseEngineRequest $request ModifyClickhouseEngineRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyClickhouseEngineResponse ModifyClickhouseEngineResponse
     */
    public function modifyClickhouseEngineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheSize)) {
            $query['CacheSize'] = $request->cacheSize;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClickhouseEngine',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClickhouseEngineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启宽表引擎
     *  *
     * @param ModifyClickhouseEngineRequest $request ModifyClickhouseEngineRequest
     *
     * @return ModifyClickhouseEngineResponse ModifyClickhouseEngineResponse
     */
    public function modifyClickhouseEngine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClickhouseEngineWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the IP address whitelist of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param ModifyClusterAccessWhiteListRequest $request ModifyClusterAccessWhiteListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterAccessWhiteListResponse ModifyClusterAccessWhiteListResponse
     */
    public function modifyClusterAccessWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterIPArrayAttribute)) {
            $query['DBClusterIPArrayAttribute'] = $request->DBClusterIPArrayAttribute;
        }
        if (!Utils::isUnset($request->DBClusterIPArrayName)) {
            $query['DBClusterIPArrayName'] = $request->DBClusterIPArrayName;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->modifyMode)) {
            $query['ModifyMode'] = $request->modifyMode;
        }
        if (!Utils::isUnset($request->securityIps)) {
            $query['SecurityIps'] = $request->securityIps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterAccessWhiteList',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterAccessWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the IP address whitelist of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param ModifyClusterAccessWhiteListRequest $request ModifyClusterAccessWhiteListRequest
     *
     * @return ModifyClusterAccessWhiteListResponse ModifyClusterAccessWhiteListResponse
     */
    public function modifyClusterAccessWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterAccessWhiteListWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the public endpoint of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyClusterConnectionStringRequest $request ModifyClusterConnectionStringRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterConnectionStringResponse ModifyClusterConnectionStringResponse
     */
    public function modifyClusterConnectionStringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->currentConnectionString)) {
            $query['CurrentConnectionString'] = $request->currentConnectionString;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterConnectionString',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterConnectionStringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the public endpoint of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyClusterConnectionStringRequest $request ModifyClusterConnectionStringRequest
     *
     * @return ModifyClusterConnectionStringResponse ModifyClusterConnectionStringResponse
     */
    public function modifyClusterConnectionString($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterConnectionStringWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the status of the remote build feature in the query acceleration configuration of an AnalyticDB for MySQL cluster.
     *  *
     * @param ModifyCompactionServiceSwitchRequest $request ModifyCompactionServiceSwitchRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCompactionServiceSwitchResponse ModifyCompactionServiceSwitchResponse
     */
    public function modifyCompactionServiceSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->enableCompactionService)) {
            $query['EnableCompactionService'] = $request->enableCompactionService;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCompactionServiceSwitch',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCompactionServiceSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the status of the remote build feature in the query acceleration configuration of an AnalyticDB for MySQL cluster.
     *  *
     * @param ModifyCompactionServiceSwitchRequest $request ModifyCompactionServiceSwitchRequest
     *
     * @return ModifyCompactionServiceSwitchResponse ModifyCompactionServiceSwitchResponse
     */
    public function modifyCompactionServiceSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCompactionServiceSwitchWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the configurations of an AnalyticDB for MySQL Data Lakehouse Edition cluster.
     *  *
     * @description ### [](#)
     * *   During a scaling event, you are not allowed to execute the `SUBMIT JOB` statement to submit asynchronous jobs. If your business requires asynchronous jobs, perform scaling during appropriate periods.
     * *   When you scale a cluster, data in the cluster is migrated for redistribution. The amount of time that is required to migrate data is proportional to the data volume. During a scaling event, the services provided by the cluster are not interrupted. When you downgrade cluster specifications, data migration may require up to dozens of hours to complete. Proceed with caution especially if your cluster contains a large amount of data.
     * *   If the cluster has a built-in dataset loaded, make sure that the cluster has reserved storage resources of at least 24 AnalyticDB compute units (ACUs). Otherwise, the built-in dataset cannot be used.
     * *   When the scaling process is about to end, transient connections may occur. We recommend that you scale your cluster during off-peak hours or make sure that your application is configured to automatically reconnect to your cluster.
     * *   You can change an AnalyticDB for MySQL cluster from Data Warehouse Edition to Data Lakehouse Edition, but not the other way around. For more information, see Change a cluster from Data Warehouse Edition to Data Lakehouse Edition.
     * *   For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyDBClusterRequest $request ModifyDBClusterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterResponse ModifyDBClusterResponse
     */
    public function modifyDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->computeResource)) {
            $query['ComputeResource'] = $request->computeResource;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->enableDefaultResourcePool)) {
            $query['EnableDefaultResourcePool'] = $request->enableDefaultResourcePool;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productForm)) {
            $query['ProductForm'] = $request->productForm;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reservedNodeCount)) {
            $query['ReservedNodeCount'] = $request->reservedNodeCount;
        }
        if (!Utils::isUnset($request->reservedNodeSize)) {
            $query['ReservedNodeSize'] = $request->reservedNodeSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->storageResource)) {
            $query['StorageResource'] = $request->storageResource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBCluster',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the configurations of an AnalyticDB for MySQL Data Lakehouse Edition cluster.
     *  *
     * @description ### [](#)
     * *   During a scaling event, you are not allowed to execute the `SUBMIT JOB` statement to submit asynchronous jobs. If your business requires asynchronous jobs, perform scaling during appropriate periods.
     * *   When you scale a cluster, data in the cluster is migrated for redistribution. The amount of time that is required to migrate data is proportional to the data volume. During a scaling event, the services provided by the cluster are not interrupted. When you downgrade cluster specifications, data migration may require up to dozens of hours to complete. Proceed with caution especially if your cluster contains a large amount of data.
     * *   If the cluster has a built-in dataset loaded, make sure that the cluster has reserved storage resources of at least 24 AnalyticDB compute units (ACUs). Otherwise, the built-in dataset cannot be used.
     * *   When the scaling process is about to end, transient connections may occur. We recommend that you scale your cluster during off-peak hours or make sure that your application is configured to automatically reconnect to your cluster.
     * *   You can change an AnalyticDB for MySQL cluster from Data Warehouse Edition to Data Lakehouse Edition, but not the other way around. For more information, see Change a cluster from Data Warehouse Edition to Data Lakehouse Edition.
     * *   For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyDBClusterRequest $request ModifyDBClusterRequest
     *
     * @return ModifyDBClusterResponse ModifyDBClusterResponse
     */
    public function modifyDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of an AnalyticDB for MySQL cluster to facilitate the maintenance and management of the cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyDBClusterDescriptionRequest $request ModifyDBClusterDescriptionRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterDescriptionResponse ModifyDBClusterDescriptionResponse
     */
    public function modifyDBClusterDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterDescription)) {
            $query['DBClusterDescription'] = $request->DBClusterDescription;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterDescription',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of an AnalyticDB for MySQL cluster to facilitate the maintenance and management of the cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyDBClusterDescriptionRequest $request ModifyDBClusterDescriptionRequest
     *
     * @return ModifyDBClusterDescriptionResponse ModifyDBClusterDescriptionResponse
     */
    public function modifyDBClusterDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterDescriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the maintenance window of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyDBClusterMaintainTimeRequest $request ModifyDBClusterMaintainTimeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterMaintainTimeResponse ModifyDBClusterMaintainTimeResponse
     */
    public function modifyDBClusterMaintainTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->maintainTime)) {
            $query['MaintainTime'] = $request->maintainTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterMaintainTime',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterMaintainTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the maintenance window of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyDBClusterMaintainTimeRequest $request ModifyDBClusterMaintainTimeRequest
     *
     * @return ModifyDBClusterMaintainTimeResponse ModifyDBClusterMaintainTimeResponse
     */
    public function modifyDBClusterMaintainTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * @summary 修改资源组
     *  *
     * @param ModifyDBClusterResourceGroupRequest $request ModifyDBClusterResourceGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterResourceGroupResponse ModifyDBClusterResourceGroupResponse
     */
    public function modifyDBClusterResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterResourceGroup',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改资源组
     *  *
     * @param ModifyDBClusterResourceGroupRequest $request ModifyDBClusterResourceGroupRequest
     *
     * @return ModifyDBClusterResourceGroupResponse ModifyDBClusterResourceGroupResponse
     */
    public function modifyDBClusterResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the virtual private cloud (VPC) and vSwitch for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @param ModifyDBClusterVipRequest $request ModifyDBClusterVipRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterVipResponse ModifyDBClusterVipResponse
     */
    public function modifyDBClusterVipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectString)) {
            $query['ConnectString'] = $request->connectString;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterVip',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterVipResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the virtual private cloud (VPC) and vSwitch for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @param ModifyDBClusterVipRequest $request ModifyDBClusterVipRequest
     *
     * @return ModifyDBClusterVipResponse ModifyDBClusterVipResponse
     */
    public function modifyDBClusterVip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterVipWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the amount of reserved computing resources for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyDBResourceGroupRequest $tmpReq  ModifyDBResourceGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBResourceGroupResponse ModifyDBResourceGroupResponse
     */
    public function modifyDBResourceGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyDBResourceGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->engineParams)) {
            $request->engineParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->engineParams, 'EngineParams', 'json');
        }
        if (!Utils::isUnset($tmpReq->rules)) {
            $request->rulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->autoStopInterval)) {
            $query['AutoStopInterval'] = $request->autoStopInterval;
        }
        if (!Utils::isUnset($request->clusterMode)) {
            $query['ClusterMode'] = $request->clusterMode;
        }
        if (!Utils::isUnset($request->clusterSizeResource)) {
            $query['ClusterSizeResource'] = $request->clusterSizeResource;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->enableSpot)) {
            $query['EnableSpot'] = $request->enableSpot;
        }
        if (!Utils::isUnset($request->engineParamsShrink)) {
            $query['EngineParams'] = $request->engineParamsShrink;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->maxClusterCount)) {
            $query['MaxClusterCount'] = $request->maxClusterCount;
        }
        if (!Utils::isUnset($request->maxComputeResource)) {
            $query['MaxComputeResource'] = $request->maxComputeResource;
        }
        if (!Utils::isUnset($request->maxGpuQuantity)) {
            $query['MaxGpuQuantity'] = $request->maxGpuQuantity;
        }
        if (!Utils::isUnset($request->minClusterCount)) {
            $query['MinClusterCount'] = $request->minClusterCount;
        }
        if (!Utils::isUnset($request->minComputeResource)) {
            $query['MinComputeResource'] = $request->minComputeResource;
        }
        if (!Utils::isUnset($request->minGpuQuantity)) {
            $query['MinGpuQuantity'] = $request->minGpuQuantity;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rulesShrink)) {
            $query['Rules'] = $request->rulesShrink;
        }
        if (!Utils::isUnset($request->specName)) {
            $query['SpecName'] = $request->specName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->targetResourceGroupName)) {
            $query['TargetResourceGroupName'] = $request->targetResourceGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBResourceGroup',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the amount of reserved computing resources for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ModifyDBResourceGroupRequest $request ModifyDBResourceGroupRequest
     *
     * @return ModifyDBResourceGroupResponse ModifyDBResourceGroupResponse
     */
    public function modifyDBResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a scaling plan for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param ModifyElasticPlanRequest $request ModifyElasticPlanRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyElasticPlanResponse ModifyElasticPlanResponse
     */
    public function modifyElasticPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cronExpression)) {
            $query['CronExpression'] = $request->cronExpression;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->elasticPlanName)) {
            $query['ElasticPlanName'] = $request->elasticPlanName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->targetSize)) {
            $query['TargetSize'] = $request->targetSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyElasticPlan',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyElasticPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a scaling plan for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *  *
     * @param ModifyElasticPlanRequest $request ModifyElasticPlanRequest
     *
     * @return ModifyElasticPlanResponse ModifyElasticPlanResponse
     */
    public function modifyElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticPlanWithOptions($request, $runtime);
    }

    /**
     * @summary 修改Essd Cache开关
     *  *
     * @param ModifyEssdCacheConfigRequest $request ModifyEssdCacheConfigRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyEssdCacheConfigResponse ModifyEssdCacheConfigResponse
     */
    public function modifyEssdCacheConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->enableEssdCache)) {
            $query['EnableEssdCache'] = $request->enableEssdCache;
        }
        if (!Utils::isUnset($request->essdCacheSize)) {
            $query['EssdCacheSize'] = $request->essdCacheSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyEssdCacheConfig',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEssdCacheConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改Essd Cache开关
     *  *
     * @param ModifyEssdCacheConfigRequest $request ModifyEssdCacheConfigRequest
     *
     * @return ModifyEssdCacheConfigResponse ModifyEssdCacheConfigResponse
     */
    public function modifyEssdCacheConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEssdCacheConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 修改实例LakeCache容量
     *  *
     * @param ModifyLakeCacheSizeRequest $request ModifyLakeCacheSizeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLakeCacheSizeResponse ModifyLakeCacheSizeResponse
     */
    public function modifyLakeCacheSizeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->capacity)) {
            $query['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->enableLakeCache)) {
            $query['EnableLakeCache'] = $request->enableLakeCache;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLakeCacheSize',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLakeCacheSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改实例LakeCache容量
     *  *
     * @param ModifyLakeCacheSizeRequest $request ModifyLakeCacheSizeRequest
     *
     * @return ModifyLakeCacheSizeResponse ModifyLakeCacheSizeResponse
     */
    public function modifyLakeCacheSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLakeCacheSizeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about a custom monitoring view.
     *  *
     * @param ModifyPerformanceViewRequest $tmpReq  ModifyPerformanceViewRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPerformanceViewResponse ModifyPerformanceViewResponse
     */
    public function modifyPerformanceViewWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyPerformanceViewShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->viewDetail)) {
            $request->viewDetailShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->viewDetail, 'ViewDetail', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->viewDetailShrink)) {
            $query['ViewDetail'] = $request->viewDetailShrink;
        }
        if (!Utils::isUnset($request->viewName)) {
            $query['ViewName'] = $request->viewName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPerformanceView',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPerformanceViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about a custom monitoring view.
     *  *
     * @param ModifyPerformanceViewRequest $request ModifyPerformanceViewRequest
     *
     * @return ModifyPerformanceViewResponse ModifyPerformanceViewResponse
     */
    public function modifyPerformanceView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPerformanceViewWithOptions($request, $runtime);
    }

    /**
     * @summary 修改用户eni交换机
     *  *
     * @param ModifyUserEniVswitchOptionsRequest $request ModifyUserEniVswitchOptionsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyUserEniVswitchOptionsResponse ModifyUserEniVswitchOptionsResponse
     */
    public function modifyUserEniVswitchOptionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbClusterId)) {
            $query['DbClusterId'] = $request->dbClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $body = [];
        if (!Utils::isUnset($request->vSwitchOptions)) {
            $body['VSwitchOptions'] = $request->vSwitchOptions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserEniVswitchOptions',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserEniVswitchOptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改用户eni交换机
     *  *
     * @param ModifyUserEniVswitchOptionsRequest $request ModifyUserEniVswitchOptionsRequest
     *
     * @return ModifyUserEniVswitchOptionsResponse ModifyUserEniVswitchOptionsResponse
     */
    public function modifyUserEniVswitchOptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserEniVswitchOptionsWithOptions($request, $runtime);
    }

    /**
     * @summary Preloads metrics for a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param PreloadSparkAppMetricsRequest $request PreloadSparkAppMetricsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return PreloadSparkAppMetricsResponse PreloadSparkAppMetricsResponse
     */
    public function preloadSparkAppMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PreloadSparkAppMetrics',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PreloadSparkAppMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Preloads metrics for a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param PreloadSparkAppMetricsRequest $request PreloadSparkAppMetricsRequest
     *
     * @return PreloadSparkAppMetricsResponse PreloadSparkAppMetricsResponse
     */
    public function preloadSparkAppMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preloadSparkAppMetricsWithOptions($request, $runtime);
    }

    /**
     * @summary Releases the public endpoint of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ReleaseClusterPublicConnectionRequest $request ReleaseClusterPublicConnectionRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseClusterPublicConnectionResponse ReleaseClusterPublicConnectionResponse
     */
    public function releaseClusterPublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseClusterPublicConnection',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseClusterPublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases the public endpoint of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ReleaseClusterPublicConnectionRequest $request ReleaseClusterPublicConnectionRequest
     *
     * @return ReleaseClusterPublicConnectionResponse ReleaseClusterPublicConnectionResponse
     */
    public function releaseClusterPublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseClusterPublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @summary Resets the password of a database account for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ResetAccountPasswordRequest $request ResetAccountPasswordRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAccountPasswordResponse ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountDescription)) {
            $query['AccountDescription'] = $request->accountDescription;
        }
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAccountPassword',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resets the password of a database account for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param ResetAccountPasswordRequest $request ResetAccountPasswordRequest
     *
     * @return ResetAccountPasswordResponse ResetAccountPasswordResponse
     */
    public function resetAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param RevokeOperatorPermissionRequest $request RevokeOperatorPermissionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeOperatorPermissionResponse RevokeOperatorPermissionResponse
     */
    public function revokeOperatorPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeOperatorPermission',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeOperatorPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeOperatorPermissionRequest $request RevokeOperatorPermissionRequest
     *
     * @return RevokeOperatorPermissionResponse RevokeOperatorPermissionResponse
     */
    public function revokeOperatorPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeOperatorPermissionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the Spark log configuration.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param SetSparkAppLogRootPathRequest $request SetSparkAppLogRootPathRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SetSparkAppLogRootPathResponse SetSparkAppLogRootPathResponse
     */
    public function setSparkAppLogRootPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ossLogPath)) {
            $body['OssLogPath'] = $request->ossLogPath;
        }
        if (!Utils::isUnset($request->useDefaultOss)) {
            $body['UseDefaultOss'] = $request->useDefaultOss;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetSparkAppLogRootPath',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetSparkAppLogRootPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the Spark log configuration.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param SetSparkAppLogRootPathRequest $request SetSparkAppLogRootPathRequest
     *
     * @return SetSparkAppLogRootPathResponse SetSparkAppLogRootPathResponse
     */
    public function setSparkAppLogRootPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSparkAppLogRootPathWithOptions($request, $runtime);
    }

    /**
     * @summary 启动aps任务
     *  *
     * @param StartApsJobRequest $request StartApsJobRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return StartApsJobResponse StartApsJobResponse
     */
    public function startApsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apsJobId)) {
            $body['ApsJobId'] = $request->apsJobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartApsJob',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartApsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动aps任务
     *  *
     * @param StartApsJobRequest $request StartApsJobRequest
     *
     * @return StartApsJobResponse StartApsJobResponse
     */
    public function startApsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startApsJobWithOptions($request, $runtime);
    }

    /**
     * @summary 启动一个可交互Session
     *  *
     * @param StartSparkReplSessionRequest $request StartSparkReplSessionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return StartSparkReplSessionResponse StartSparkReplSessionResponse
     */
    public function startSparkReplSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $body['ResourceGroupName'] = $request->resourceGroupName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartSparkReplSession',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartSparkReplSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动一个可交互Session
     *  *
     * @param StartSparkReplSessionRequest $request StartSparkReplSessionRequest
     *
     * @return StartSparkReplSessionResponse StartSparkReplSessionResponse
     */
    public function startSparkReplSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSparkReplSessionWithOptions($request, $runtime);
    }

    /**
     * @summary Starts the Spark SQL engine.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param StartSparkSQLEngineRequest $request StartSparkSQLEngineRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StartSparkSQLEngineResponse StartSparkSQLEngineResponse
     */
    public function startSparkSQLEngineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->jars)) {
            $body['Jars'] = $request->jars;
        }
        if (!Utils::isUnset($request->maxExecutor)) {
            $body['MaxExecutor'] = $request->maxExecutor;
        }
        if (!Utils::isUnset($request->minExecutor)) {
            $body['MinExecutor'] = $request->minExecutor;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $body['ResourceGroupName'] = $request->resourceGroupName;
        }
        if (!Utils::isUnset($request->slotNum)) {
            $body['SlotNum'] = $request->slotNum;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartSparkSQLEngine',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartSparkSQLEngineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts the Spark SQL engine.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param StartSparkSQLEngineRequest $request StartSparkSQLEngineRequest
     *
     * @return StartSparkSQLEngineResponse StartSparkSQLEngineResponse
     */
    public function startSparkSQLEngine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSparkSQLEngineWithOptions($request, $runtime);
    }

    /**
     * @summary Submits an SQL query and exports a result set.
     *  *
     * @param SubmitResultExportJobRequest $request SubmitResultExportJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitResultExportJobResponse SubmitResultExportJobResponse
     */
    public function submitResultExportJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->engine)) {
            $body['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->exportType)) {
            $body['ExportType'] = $request->exportType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroup)) {
            $body['ResourceGroup'] = $request->resourceGroup;
        }
        if (!Utils::isUnset($request->SQL)) {
            $body['SQL'] = $request->SQL;
        }
        if (!Utils::isUnset($request->schema)) {
            $body['Schema'] = $request->schema;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitResultExportJob',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitResultExportJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits an SQL query and exports a result set.
     *  *
     * @param SubmitResultExportJobRequest $request SubmitResultExportJobRequest
     *
     * @return SubmitResultExportJobResponse SubmitResultExportJobResponse
     */
    public function submitResultExportJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitResultExportJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param SubmitSparkAppRequest $request SubmitSparkAppRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSparkAppResponse SubmitSparkAppResponse
     */
    public function submitSparkAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentSource)) {
            $body['AgentSource'] = $request->agentSource;
        }
        if (!Utils::isUnset($request->agentVersion)) {
            $body['AgentVersion'] = $request->agentVersion;
        }
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $body['ResourceGroupName'] = $request->resourceGroupName;
        }
        if (!Utils::isUnset($request->templateFileId)) {
            $body['TemplateFileId'] = $request->templateFileId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitSparkApp',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSparkAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits a Spark application.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param SubmitSparkAppRequest $request SubmitSparkAppRequest
     *
     * @return SubmitSparkAppResponse SubmitSparkAppResponse
     */
    public function submitSparkApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSparkAppWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a Spark log analysis task and queries the analysis results.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param SubmitSparkLogAnalyzeTaskRequest $request SubmitSparkLogAnalyzeTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSparkLogAnalyzeTaskResponse SubmitSparkLogAnalyzeTaskResponse
     */
    public function submitSparkLogAnalyzeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitSparkLogAnalyzeTask',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSparkLogAnalyzeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits a Spark log analysis task and queries the analysis results.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param SubmitSparkLogAnalyzeTaskRequest $request SubmitSparkLogAnalyzeTaskRequest
     *
     * @return SubmitSparkLogAnalyzeTaskResponse SubmitSparkLogAnalyzeTaskResponse
     */
    public function submitSparkLogAnalyzeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSparkLogAnalyzeTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 暂停aps任务
     *  *
     * @param SuspendApsJobRequest $request SuspendApsJobRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendApsJobResponse SuspendApsJobResponse
     */
    public function suspendApsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apsJobId)) {
            $body['ApsJobId'] = $request->apsJobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SuspendApsJob',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendApsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 暂停aps任务
     *  *
     * @param SuspendApsJobRequest $request SuspendApsJobRequest
     *
     * @return SuspendApsJobResponse SuspendApsJobResponse
     */
    public function suspendApsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendApsJobWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates a standard account of an AnalyticDB for MySQL cluster from a Resource Access Management (RAM) user.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param UnbindAccountRequest $request UnbindAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindAccountResponse UnbindAccountResponse
     */
    public function unbindAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindAccount',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociates a standard account of an AnalyticDB for MySQL cluster from a Resource Access Management (RAM) user.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param UnbindAccountRequest $request UnbindAccountRequest
     *
     * @return UnbindAccountResponse UnbindAccountResponse
     */
    public function unbindAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates resource groups from database accounts for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param UnbindDBResourceGroupWithUserRequest $request UnbindDBResourceGroupWithUserRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindDBResourceGroupWithUserResponse UnbindDBResourceGroupWithUserResponse
     */
    public function unbindDBResourceGroupWithUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupUser)) {
            $query['GroupUser'] = $request->groupUser;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindDBResourceGroupWithUser',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindDBResourceGroupWithUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociates resource groups from database accounts for an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *  *
     * @param UnbindDBResourceGroupWithUserRequest $request UnbindDBResourceGroupWithUserRequest
     *
     * @return UnbindDBResourceGroupWithUserResponse UnbindDBResourceGroupWithUserResponse
     */
    public function unbindDBResourceGroupWithUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDBResourceGroupWithUserWithOptions($request, $runtime);
    }

    /**
     * @summary 更新湖存储
     *  *
     * @param UpdateLakeStorageRequest $tmpReq  UpdateLakeStorageRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLakeStorageResponse UpdateLakeStorageResponse
     */
    public function updateLakeStorageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLakeStorageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->permissions)) {
            $request->permissionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->permissions, 'Permissions', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->lakeStorageId)) {
            $body['LakeStorageId'] = $request->lakeStorageId;
        }
        if (!Utils::isUnset($request->permissionsShrink)) {
            $body['Permissions'] = $request->permissionsShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLakeStorage',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLakeStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新湖存储
     *  *
     * @param UpdateLakeStorageRequest $request UpdateLakeStorageRequest
     *
     * @return UpdateLakeStorageResponse UpdateLakeStorageResponse
     */
    public function updateLakeStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLakeStorageWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a Spark application template.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param UpdateSparkTemplateFileRequest $request UpdateSparkTemplateFileRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSparkTemplateFileResponse UpdateSparkTemplateFileResponse
     */
    public function updateSparkTemplateFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $body['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->resourceGroupName)) {
            $body['ResourceGroupName'] = $request->resourceGroupName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSparkTemplateFile',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSparkTemplateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a Spark application template.
     *  *
     * @description *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *  *
     * @param UpdateSparkTemplateFileRequest $request UpdateSparkTemplateFileRequest
     *
     * @return UpdateSparkTemplateFileResponse UpdateSparkTemplateFileResponse
     */
    public function updateSparkTemplateFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSparkTemplateFileWithOptions($request, $runtime);
    }
}
