<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\CancelSparkWarehouseBatchSQLRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CancelSparkWarehouseBatchSQLResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsKafkaHudiJobRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsKafkaHudiJobResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsKafkaHudiJobShrinkRequest;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlIndexesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlIndexesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlSchemasRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlSchemasResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlTableMetaRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlTableMetaResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSSLRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSSLResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeHistoryTasksRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeHistoryTasksResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeHistoryTasksStatRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeHistoryTasksStatResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeInclinedNodesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeInclinedNodesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeInclinedTablesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeInclinedTablesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeKernelVersionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeKernelVersionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeLakeCacheSizeRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeLakeCacheSizeResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeLLMAnswerRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeLLMAnswerResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeLLMSimilarQuestionsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeLLMSimilarQuestionsResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeResourceGroupSpecRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeResourceGroupSpecResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkSQLDiagnosisAttributeRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkSQLDiagnosisAttributeResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkSQLDiagnosisListRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkSQLDiagnosisListResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSqlPatternRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSqlPatternResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSQLPatternsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSQLPatternsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSQLWebSocketDomainRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSQLWebSocketDomainResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTableStatisticsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTableStatisticsResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\ExecuteSparkWarehouseBatchSQLRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ExecuteSparkWarehouseBatchSQLResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ExistRunningSQLEngineRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ExistRunningSQLEngineResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetADBSparkNecessaryRAMPermissionsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetADBSparkNecessaryRAMPermissionsResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkWarehouseBatchSQLRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkWarehouseBatchSQLResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkWarehouseBatchSQLRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkWarehouseBatchSQLResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterSSLRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterSSLResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\UpgradeKernelVersionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\UpgradeKernelVersionResponse;
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
     * Applies for a public endpoint for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AllocateClusterPublicConnection',
            'version' => '2021-12-01',
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
     * Applies for a public endpoint for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Applies an optimization suggestion.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        if (null !== $request->applyType) {
            @$query['ApplyType'] = $request->applyType;
        }

        if (null !== $request->buildImmediately) {
            @$query['BuildImmediately'] = $request->buildImmediately;
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
            'version' => '2021-12-01',
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
     * Applies an optimization suggestion.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Attaches an elastic network interface (ENI) to an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachUserENI',
            'version' => '2021-12-01',
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
     * Attaches an elastic network interface (ENI) to an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Applies optimization suggestions.
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

        if (null !== $request->applyType) {
            @$query['ApplyType'] = $request->applyType;
        }

        if (null !== $request->buildImmediately) {
            @$query['BuildImmediately'] = $request->buildImmediately;
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
            'version' => '2021-12-01',
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
     * Applies optimization suggestions.
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
     * Associates a standard account of an AnalyticDB for MySQL cluster with a Resource Access Management (RAM) user.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - BindAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAccountResponse
     *
     * @param BindAccountRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BindAccountResponse
     */
    public function bindAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ramUser) {
            @$query['RamUser'] = $request->ramUser;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindAccount',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a standard account of an AnalyticDB for MySQL cluster with a Resource Access Management (RAM) user.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - BindAccountRequest
     *
     * @returns BindAccountResponse
     *
     * @param BindAccountRequest $request
     *
     * @return BindAccountResponse
     */
    public function bindAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAccountWithOptions($request, $runtime);
    }

    /**
     * Associates a resource group with a database account.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupUser) {
            @$query['GroupUser'] = $request->groupUser;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindDBResourceGroupWithUser',
            'version' => '2021-12-01',
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
     * Associates a resource group with a database account.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Terminates part of the code in a Spark job.
     *
     * @param request - CancelSparkReplStatementRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelSparkReplStatementResponse
     *
     * @param CancelSparkReplStatementRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelSparkReplStatementResponse
     */
    public function cancelSparkReplStatementWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->statementId) {
            @$body['StatementId'] = $request->statementId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelSparkReplStatement',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelSparkReplStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminates part of the code in a Spark job.
     *
     * @param request - CancelSparkReplStatementRequest
     *
     * @returns CancelSparkReplStatementResponse
     *
     * @param CancelSparkReplStatementRequest $request
     *
     * @return CancelSparkReplStatementResponse
     */
    public function cancelSparkReplStatement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelSparkReplStatementWithOptions($request, $runtime);
    }

    /**
     * Cancels the execution of a Spark SQL statement.
     *
     * @param request - CancelSparkWarehouseBatchSQLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelSparkWarehouseBatchSQLResponse
     *
     * @param CancelSparkWarehouseBatchSQLRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CancelSparkWarehouseBatchSQLResponse
     */
    public function cancelSparkWarehouseBatchSQLWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agency) {
            @$body['Agency'] = $request->agency;
        }

        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->queryId) {
            @$body['QueryId'] = $request->queryId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelSparkWarehouseBatchSQL',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelSparkWarehouseBatchSQLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the execution of a Spark SQL statement.
     *
     * @param request - CancelSparkWarehouseBatchSQLRequest
     *
     * @returns CancelSparkWarehouseBatchSQLResponse
     *
     * @param CancelSparkWarehouseBatchSQLRequest $request
     *
     * @return CancelSparkWarehouseBatchSQLResponse
     */
    public function cancelSparkWarehouseBatchSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelSparkWarehouseBatchSQLWithOptions($request, $runtime);
    }

    /**
     * Queries whether a database account of an AnalyticDB for MySQL cluster is associated with a Resource Access Management (RAM) user.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - CheckBindRamUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckBindRamUserResponse
     *
     * @param CheckBindRamUserRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CheckBindRamUserResponse
     */
    public function checkBindRamUserWithOptions($request, $runtime)
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
            'action' => 'CheckBindRamUser',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckBindRamUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether a database account of an AnalyticDB for MySQL cluster is associated with a Resource Access Management (RAM) user.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - CheckBindRamUserRequest
     *
     * @returns CheckBindRamUserResponse
     *
     * @param CheckBindRamUserRequest $request
     *
     * @return CheckBindRamUserResponse
     */
    public function checkBindRamUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkBindRamUserWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - CheckSampleDataSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckSampleDataSetResponse
     *
     * @param CheckSampleDataSetRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckSampleDataSetResponse
     */
    public function checkSampleDataSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckSampleDataSet',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckSampleDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - CheckSampleDataSetRequest
     *
     * @returns CheckSampleDataSetResponse
     *
     * @param CheckSampleDataSetRequest $request
     *
     * @return CheckSampleDataSetResponse
     */
    public function checkSampleDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSampleDataSetWithOptions($request, $runtime);
    }

    /**
     * Creates an AnalyticDB Pipeline Service (APS) job.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - CreateAPSJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAPSJobResponse
     *
     * @param CreateAPSJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateAPSJobResponse
     */
    public function createAPSJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apsJobName) {
            @$body['ApsJobName'] = $request->apsJobName;
        }

        if (null !== $request->dbList) {
            @$body['DbList'] = $request->dbList;
        }

        if (null !== $request->destinationEndpointInstanceID) {
            @$body['DestinationEndpointInstanceID'] = $request->destinationEndpointInstanceID;
        }

        if (null !== $request->destinationEndpointPassword) {
            @$body['DestinationEndpointPassword'] = $request->destinationEndpointPassword;
        }

        if (null !== $request->destinationEndpointUserName) {
            @$body['DestinationEndpointUserName'] = $request->destinationEndpointUserName;
        }

        if (null !== $request->partitionList) {
            @$body['PartitionList'] = $request->partitionList;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->sourceEndpointInstanceID) {
            @$body['SourceEndpointInstanceID'] = $request->sourceEndpointInstanceID;
        }

        if (null !== $request->sourceEndpointPassword) {
            @$body['SourceEndpointPassword'] = $request->sourceEndpointPassword;
        }

        if (null !== $request->sourceEndpointRegion) {
            @$body['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }

        if (null !== $request->sourceEndpointUserName) {
            @$body['SourceEndpointUserName'] = $request->sourceEndpointUserName;
        }

        if (null !== $request->targetTableMode) {
            @$body['TargetTableMode'] = $request->targetTableMode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAPSJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAPSJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AnalyticDB Pipeline Service (APS) job.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - CreateAPSJobRequest
     *
     * @returns CreateAPSJobResponse
     *
     * @param CreateAPSJobRequest $request
     *
     * @return CreateAPSJobResponse
     */
    public function createAPSJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAPSJobWithOptions($request, $runtime);
    }

    /**
     * Creates a database account for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - CreateAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccountResponse
     *
     * @param CreateAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        $request->validate();
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

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccount',
            'version' => '2021-12-01',
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
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Creates an AnalyticDB Pipeline Service (APS) replication job.
     *
     * @param request - CreateApsCopyWorkloadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApsCopyWorkloadResponse
     *
     * @param CreateApsCopyWorkloadRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateApsCopyWorkloadResponse
     */
    public function createApsCopyWorkloadWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->datasourceId) {
            @$body['DatasourceId'] = $request->datasourceId;
        }

        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->tableName) {
            @$body['TableName'] = $request->tableName;
        }

        if (null !== $request->workloadId) {
            @$body['WorkloadId'] = $request->workloadId;
        }

        if (null !== $request->workloadType) {
            @$body['WorkloadType'] = $request->workloadType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApsCopyWorkload',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApsCopyWorkloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AnalyticDB Pipeline Service (APS) replication job.
     *
     * @param request - CreateApsCopyWorkloadRequest
     *
     * @returns CreateApsCopyWorkloadResponse
     *
     * @param CreateApsCopyWorkloadRequest $request
     *
     * @return CreateApsCopyWorkloadResponse
     */
    public function createApsCopyWorkload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApsCopyWorkloadWithOptions($request, $runtime);
    }

    /**
     * Creates an AnalyticDB Pipeline Service (APS) data source.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param tmpReq - CreateApsDatasoureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApsDatasoureResponse
     *
     * @param CreateApsDatasoureRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreateApsDatasoureResponse
     */
    public function createApsDatasoureWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateApsDatasoureShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->databricksInfo) {
            $request->databricksInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->databricksInfo, 'DatabricksInfo', 'json');
        }

        if (null !== $tmpReq->hiveInfo) {
            $request->hiveInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hiveInfo, 'HiveInfo', 'json');
        }

        if (null !== $tmpReq->kafkaInfo) {
            $request->kafkaInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->kafkaInfo, 'KafkaInfo', 'json');
        }

        if (null !== $tmpReq->polarDBMysqlInfo) {
            $request->polarDBMysqlInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->polarDBMysqlInfo, 'PolarDBMysqlInfo', 'json');
        }

        if (null !== $tmpReq->polarDBXInfo) {
            $request->polarDBXInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->polarDBXInfo, 'PolarDBXInfo', 'json');
        }

        if (null !== $tmpReq->rdsMysqlInfo) {
            $request->rdsMysqlInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rdsMysqlInfo, 'RdsMysqlInfo', 'json');
        }

        if (null !== $tmpReq->slsInfo) {
            $request->slsInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->slsInfo, 'SlsInfo', 'json');
        }

        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->databricksInfoShrink) {
            @$body['DatabricksInfo'] = $request->databricksInfoShrink;
        }

        if (null !== $request->datasourceDescription) {
            @$body['DatasourceDescription'] = $request->datasourceDescription;
        }

        if (null !== $request->datasourceName) {
            @$body['DatasourceName'] = $request->datasourceName;
        }

        if (null !== $request->datasourceType) {
            @$body['DatasourceType'] = $request->datasourceType;
        }

        if (null !== $request->hiveInfoShrink) {
            @$body['HiveInfo'] = $request->hiveInfoShrink;
        }

        if (null !== $request->kafkaInfoShrink) {
            @$body['KafkaInfo'] = $request->kafkaInfoShrink;
        }

        if (null !== $request->mode) {
            @$body['Mode'] = $request->mode;
        }

        if (null !== $request->polarDBMysqlInfoShrink) {
            @$body['PolarDBMysqlInfo'] = $request->polarDBMysqlInfoShrink;
        }

        if (null !== $request->polarDBXInfoShrink) {
            @$body['PolarDBXInfo'] = $request->polarDBXInfoShrink;
        }

        if (null !== $request->rdsMysqlInfoShrink) {
            @$body['RdsMysqlInfo'] = $request->rdsMysqlInfoShrink;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->slsInfoShrink) {
            @$body['SlsInfo'] = $request->slsInfoShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApsDatasoure',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApsDatasoureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AnalyticDB Pipeline Service (APS) data source.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - CreateApsDatasoureRequest
     *
     * @returns CreateApsDatasoureResponse
     *
     * @param CreateApsDatasoureRequest $request
     *
     * @return CreateApsDatasoureResponse
     */
    public function createApsDatasoure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApsDatasoureWithOptions($request, $runtime);
    }

    /**
     * Creates an AnalyticDB Pipeline Service (APS) job from a Hive data source.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - CreateApsHiveJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApsHiveJobResponse
     *
     * @param CreateApsHiveJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateApsHiveJobResponse
     */
    public function createApsHiveJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->advancedConfig) {
            @$body['AdvancedConfig'] = $request->advancedConfig;
        }

        if (null !== $request->conflictStrategy) {
            @$body['ConflictStrategy'] = $request->conflictStrategy;
        }

        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->datasourceId) {
            @$body['DatasourceId'] = $request->datasourceId;
        }

        if (null !== $request->fullComputeUnit) {
            @$body['FullComputeUnit'] = $request->fullComputeUnit;
        }

        if (null !== $request->ossLocation) {
            @$body['OssLocation'] = $request->ossLocation;
        }

        if (null !== $request->parallelism) {
            @$body['Parallelism'] = $request->parallelism;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroup) {
            @$body['ResourceGroup'] = $request->resourceGroup;
        }

        if (null !== $request->syncAllowExpression) {
            @$body['SyncAllowExpression'] = $request->syncAllowExpression;
        }

        if (null !== $request->syncDenyExpression) {
            @$body['SyncDenyExpression'] = $request->syncDenyExpression;
        }

        if (null !== $request->targetType) {
            @$body['TargetType'] = $request->targetType;
        }

        if (null !== $request->workloadName) {
            @$body['WorkloadName'] = $request->workloadName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApsHiveJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApsHiveJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AnalyticDB Pipeline Service (APS) job from a Hive data source.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - CreateApsHiveJobRequest
     *
     * @returns CreateApsHiveJobResponse
     *
     * @param CreateApsHiveJobRequest $request
     *
     * @return CreateApsHiveJobResponse
     */
    public function createApsHiveJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApsHiveJobWithOptions($request, $runtime);
    }

    /**
     * 创建Kafka到Huid的APS链路.
     *
     * @param tmpReq - CreateApsKafkaHudiJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApsKafkaHudiJobResponse
     *
     * @param CreateApsKafkaHudiJobRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateApsKafkaHudiJobResponse
     */
    public function createApsKafkaHudiJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateApsKafkaHudiJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->columns) {
            $request->columnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->columns, 'Columns', 'json');
        }

        if (null !== $tmpReq->partitionSpecs) {
            $request->partitionSpecsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->partitionSpecs, 'PartitionSpecs', 'json');
        }

        $body = [];
        if (null !== $request->acrossRole) {
            @$body['AcrossRole'] = $request->acrossRole;
        }

        if (null !== $request->acrossUid) {
            @$body['AcrossUid'] = $request->acrossUid;
        }

        if (null !== $request->advancedConfig) {
            @$body['AdvancedConfig'] = $request->advancedConfig;
        }

        if (null !== $request->columnsShrink) {
            @$body['Columns'] = $request->columnsShrink;
        }

        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->dataOutputFormat) {
            @$body['DataOutputFormat'] = $request->dataOutputFormat;
        }

        if (null !== $request->datasourceId) {
            @$body['DatasourceId'] = $request->datasourceId;
        }

        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->fullComputeUnit) {
            @$body['FullComputeUnit'] = $request->fullComputeUnit;
        }

        if (null !== $request->hudiAdvancedConfig) {
            @$body['HudiAdvancedConfig'] = $request->hudiAdvancedConfig;
        }

        if (null !== $request->incrementalComputeUnit) {
            @$body['IncrementalComputeUnit'] = $request->incrementalComputeUnit;
        }

        if (null !== $request->jsonParseLevel) {
            @$body['JsonParseLevel'] = $request->jsonParseLevel;
        }

        if (null !== $request->kafkaClusterId) {
            @$body['KafkaClusterId'] = $request->kafkaClusterId;
        }

        if (null !== $request->kafkaTopic) {
            @$body['KafkaTopic'] = $request->kafkaTopic;
        }

        if (null !== $request->lakehouseId) {
            @$body['LakehouseId'] = $request->lakehouseId;
        }

        if (null !== $request->maxOffsetsPerTrigger) {
            @$body['MaxOffsetsPerTrigger'] = $request->maxOffsetsPerTrigger;
        }

        if (null !== $request->ossLocation) {
            @$body['OssLocation'] = $request->ossLocation;
        }

        if (null !== $request->outputFormat) {
            @$body['OutputFormat'] = $request->outputFormat;
        }

        if (null !== $request->partitionSpecsShrink) {
            @$body['PartitionSpecs'] = $request->partitionSpecsShrink;
        }

        if (null !== $request->primaryKeyDefinition) {
            @$body['PrimaryKeyDefinition'] = $request->primaryKeyDefinition;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroup) {
            @$body['ResourceGroup'] = $request->resourceGroup;
        }

        if (null !== $request->sourceRegionId) {
            @$body['SourceRegionId'] = $request->sourceRegionId;
        }

        if (null !== $request->startingOffsets) {
            @$body['StartingOffsets'] = $request->startingOffsets;
        }

        if (null !== $request->tableName) {
            @$body['TableName'] = $request->tableName;
        }

        if (null !== $request->targetGenerateRule) {
            @$body['TargetGenerateRule'] = $request->targetGenerateRule;
        }

        if (null !== $request->targetType) {
            @$body['TargetType'] = $request->targetType;
        }

        if (null !== $request->workloadName) {
            @$body['WorkloadName'] = $request->workloadName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApsKafkaHudiJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApsKafkaHudiJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Kafka到Huid的APS链路.
     *
     * @param request - CreateApsKafkaHudiJobRequest
     *
     * @returns CreateApsKafkaHudiJobResponse
     *
     * @param CreateApsKafkaHudiJobRequest $request
     *
     * @return CreateApsKafkaHudiJobResponse
     */
    public function createApsKafkaHudiJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApsKafkaHudiJobWithOptions($request, $runtime);
    }

    /**
     * Creates an AnalyticDB Pipeline Service (APS) job from Simple Log Service (SLS) to an AnalyticDB for MySQL Data Warehouse Edition cluster.
     *
     * @param tmpReq - CreateApsSlsADBJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApsSlsADBJobResponse
     *
     * @param CreateApsSlsADBJobRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreateApsSlsADBJobResponse
     */
    public function createApsSlsADBJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateApsSlsADBJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->columns) {
            $request->columnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->columns, 'Columns', 'json');
        }

        if (null !== $tmpReq->partitionSpecs) {
            $request->partitionSpecsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->partitionSpecs, 'PartitionSpecs', 'json');
        }

        if (null !== $tmpReq->unixTimestampConvert) {
            $request->unixTimestampConvertShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->unixTimestampConvert, 'UnixTimestampConvert', 'json');
        }

        $body = [];
        if (null !== $request->acrossRole) {
            @$body['AcrossRole'] = $request->acrossRole;
        }

        if (null !== $request->acrossUid) {
            @$body['AcrossUid'] = $request->acrossUid;
        }

        if (null !== $request->advancedConfig) {
            @$body['AdvancedConfig'] = $request->advancedConfig;
        }

        if (null !== $request->columnsShrink) {
            @$body['Columns'] = $request->columnsShrink;
        }

        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->datasourceId) {
            @$body['DatasourceId'] = $request->datasourceId;
        }

        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->dirtyDataHandleMode) {
            @$body['DirtyDataHandleMode'] = $request->dirtyDataHandleMode;
        }

        if (null !== $request->dirtyDataProcessPattern) {
            @$body['DirtyDataProcessPattern'] = $request->dirtyDataProcessPattern;
        }

        if (null !== $request->exactlyOnce) {
            @$body['ExactlyOnce'] = $request->exactlyOnce;
        }

        if (null !== $request->fullComputeUnit) {
            @$body['FullComputeUnit'] = $request->fullComputeUnit;
        }

        if (null !== $request->hudiAdvancedConfig) {
            @$body['HudiAdvancedConfig'] = $request->hudiAdvancedConfig;
        }

        if (null !== $request->incrementalComputeUnit) {
            @$body['IncrementalComputeUnit'] = $request->incrementalComputeUnit;
        }

        if (null !== $request->lakehouseId) {
            @$body['LakehouseId'] = $request->lakehouseId;
        }

        if (null !== $request->maxOffsetsPerTrigger) {
            @$body['MaxOffsetsPerTrigger'] = $request->maxOffsetsPerTrigger;
        }

        if (null !== $request->ossLocation) {
            @$body['OssLocation'] = $request->ossLocation;
        }

        if (null !== $request->outputFormat) {
            @$body['OutputFormat'] = $request->outputFormat;
        }

        if (null !== $request->partitionSpecsShrink) {
            @$body['PartitionSpecs'] = $request->partitionSpecsShrink;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->primaryKeyDefinition) {
            @$body['PrimaryKeyDefinition'] = $request->primaryKeyDefinition;
        }

        if (null !== $request->project) {
            @$body['Project'] = $request->project;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroup) {
            @$body['ResourceGroup'] = $request->resourceGroup;
        }

        if (null !== $request->sourceRegionId) {
            @$body['SourceRegionId'] = $request->sourceRegionId;
        }

        if (null !== $request->startingOffsets) {
            @$body['StartingOffsets'] = $request->startingOffsets;
        }

        if (null !== $request->store) {
            @$body['Store'] = $request->store;
        }

        if (null !== $request->tableName) {
            @$body['TableName'] = $request->tableName;
        }

        if (null !== $request->targetGenerateRule) {
            @$body['TargetGenerateRule'] = $request->targetGenerateRule;
        }

        if (null !== $request->targetType) {
            @$body['TargetType'] = $request->targetType;
        }

        if (null !== $request->unixTimestampConvertShrink) {
            @$body['UnixTimestampConvert'] = $request->unixTimestampConvertShrink;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->workloadName) {
            @$body['WorkloadName'] = $request->workloadName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApsSlsADBJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApsSlsADBJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AnalyticDB Pipeline Service (APS) job from Simple Log Service (SLS) to an AnalyticDB for MySQL Data Warehouse Edition cluster.
     *
     * @param request - CreateApsSlsADBJobRequest
     *
     * @returns CreateApsSlsADBJobResponse
     *
     * @param CreateApsSlsADBJobRequest $request
     *
     * @return CreateApsSlsADBJobResponse
     */
    public function createApsSlsADBJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApsSlsADBJobWithOptions($request, $runtime);
    }

    /**
     * Creates an AnalyticDB for MySQL Data Lakehouse Edition cluster.
     *
     * @remarks
     * CreateDBCluster
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
        if (null !== $request->backupSetId) {
            @$query['BackupSetId'] = $request->backupSetId;
        }

        if (null !== $request->cloneSourceRegionId) {
            @$query['CloneSourceRegionId'] = $request->cloneSourceRegionId;
        }

        if (null !== $request->computeResource) {
            @$query['ComputeResource'] = $request->computeResource;
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

        if (null !== $request->diskEncryption) {
            @$query['DiskEncryption'] = $request->diskEncryption;
        }

        if (null !== $request->enableDefaultResourcePool) {
            @$query['EnableDefaultResourcePool'] = $request->enableDefaultResourcePool;
        }

        if (null !== $request->kmsId) {
            @$query['KmsId'] = $request->kmsId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->productForm) {
            @$query['ProductForm'] = $request->productForm;
        }

        if (null !== $request->productVersion) {
            @$query['ProductVersion'] = $request->productVersion;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->reservedNodeCount) {
            @$query['ReservedNodeCount'] = $request->reservedNodeCount;
        }

        if (null !== $request->reservedNodeSize) {
            @$query['ReservedNodeSize'] = $request->reservedNodeSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->restoreToTime) {
            @$query['RestoreToTime'] = $request->restoreToTime;
        }

        if (null !== $request->restoreType) {
            @$query['RestoreType'] = $request->restoreType;
        }

        if (null !== $request->secondaryVSwitchId) {
            @$query['SecondaryVSwitchId'] = $request->secondaryVSwitchId;
        }

        if (null !== $request->secondaryZoneId) {
            @$query['SecondaryZoneId'] = $request->secondaryZoneId;
        }

        if (null !== $request->sourceDbClusterId) {
            @$query['SourceDbClusterId'] = $request->sourceDbClusterId;
        }

        if (null !== $request->storageResource) {
            @$query['StorageResource'] = $request->storageResource;
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
            'version' => '2021-12-01',
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
     * Creates an AnalyticDB for MySQL Data Lakehouse Edition cluster.
     *
     * @remarks
     * CreateDBCluster
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
     * Creates a resource group for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *
     * @param tmpReq - CreateDBResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBResourceGroupResponse
     *
     * @param CreateDBResourceGroupRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDBResourceGroupResponse
     */
    public function createDBResourceGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDBResourceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->engineParams) {
            $request->engineParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->engineParams, 'EngineParams', 'json');
        }

        if (null !== $tmpReq->rayConfig) {
            $request->rayConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rayConfig, 'RayConfig', 'json');
        }

        if (null !== $tmpReq->rules) {
            $request->rulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }

        $query = [];
        if (null !== $request->autoStopInterval) {
            @$query['AutoStopInterval'] = $request->autoStopInterval;
        }

        if (null !== $request->clusterMode) {
            @$query['ClusterMode'] = $request->clusterMode;
        }

        if (null !== $request->clusterSizeResource) {
            @$query['ClusterSizeResource'] = $request->clusterSizeResource;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->enableSpot) {
            @$query['EnableSpot'] = $request->enableSpot;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineParamsShrink) {
            @$query['EngineParams'] = $request->engineParamsShrink;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
        }

        if (null !== $request->maxClusterCount) {
            @$query['MaxClusterCount'] = $request->maxClusterCount;
        }

        if (null !== $request->maxComputeResource) {
            @$query['MaxComputeResource'] = $request->maxComputeResource;
        }

        if (null !== $request->maxGpuQuantity) {
            @$query['MaxGpuQuantity'] = $request->maxGpuQuantity;
        }

        if (null !== $request->minClusterCount) {
            @$query['MinClusterCount'] = $request->minClusterCount;
        }

        if (null !== $request->minComputeResource) {
            @$query['MinComputeResource'] = $request->minComputeResource;
        }

        if (null !== $request->minGpuQuantity) {
            @$query['MinGpuQuantity'] = $request->minGpuQuantity;
        }

        if (null !== $request->rayConfigShrink) {
            @$query['RayConfig'] = $request->rayConfigShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->rulesShrink) {
            @$query['Rules'] = $request->rulesShrink;
        }

        if (null !== $request->specName) {
            @$query['SpecName'] = $request->specName;
        }

        if (null !== $request->targetResourceGroupName) {
            @$query['TargetResourceGroupName'] = $request->targetResourceGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBResourceGroup',
            'version' => '2021-12-01',
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
     * Creates a resource group for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
     * Creates a scaling plan for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
        if (null !== $request->autoScale) {
            @$query['AutoScale'] = $request->autoScale;
        }

        if (null !== $request->cronExpression) {
            @$query['CronExpression'] = $request->cronExpression;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->elasticPlanName) {
            @$query['ElasticPlanName'] = $request->elasticPlanName;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->targetSize) {
            @$query['TargetSize'] = $request->targetSize;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateElasticPlan',
            'version' => '2021-12-01',
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
     * Creates a scaling plan for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Creates a lake storage.
     *
     * @param tmpReq - CreateLakeStorageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLakeStorageResponse
     *
     * @param CreateLakeStorageRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateLakeStorageResponse
     */
    public function createLakeStorageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateLakeStorageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->permissions) {
            $request->permissionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->permissions, 'Permissions', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->permissionsShrink) {
            @$body['Permissions'] = $request->permissionsShrink;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLakeStorage',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLakeStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a lake storage.
     *
     * @param request - CreateLakeStorageRequest
     *
     * @returns CreateLakeStorageResponse
     *
     * @param CreateLakeStorageRequest $request
     *
     * @return CreateLakeStorageResponse
     */
    public function createLakeStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLakeStorageWithOptions($request, $runtime);
    }

    /**
     * Creates an Object Storage Service (OSS) subdirectory.
     *
     * @remarks
     *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - CreateOssSubDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOssSubDirectoryResponse
     *
     * @param CreateOssSubDirectoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateOssSubDirectoryResponse
     */
    public function createOssSubDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->path) {
            @$body['Path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOssSubDirectory',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOssSubDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an Object Storage Service (OSS) subdirectory.
     *
     * @remarks
     *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - CreateOssSubDirectoryRequest
     *
     * @returns CreateOssSubDirectoryResponse
     *
     * @param CreateOssSubDirectoryRequest $request
     *
     * @return CreateOssSubDirectoryResponse
     */
    public function createOssSubDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOssSubDirectoryWithOptions($request, $runtime);
    }

    /**
     * Creates a custom monitoring view.
     *
     * @param tmpReq - CreatePerformanceViewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePerformanceViewResponse
     *
     * @param CreatePerformanceViewRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreatePerformanceViewResponse
     */
    public function createPerformanceViewWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePerformanceViewShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->viewDetail) {
            $request->viewDetailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->viewDetail, 'ViewDetail', 'json');
        }

        $query = [];
        if (null !== $request->createFromViewType) {
            @$query['CreateFromViewType'] = $request->createFromViewType;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->fillOriginViewKeys) {
            @$query['FillOriginViewKeys'] = $request->fillOriginViewKeys;
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

        if (null !== $request->viewDetailShrink) {
            @$query['ViewDetail'] = $request->viewDetailShrink;
        }

        if (null !== $request->viewName) {
            @$query['ViewName'] = $request->viewName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePerformanceView',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePerformanceViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom monitoring view.
     *
     * @param request - CreatePerformanceViewRequest
     *
     * @returns CreatePerformanceViewResponse
     *
     * @param CreatePerformanceViewRequest $request
     *
     * @return CreatePerformanceViewResponse
     */
    public function createPerformanceView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPerformanceViewWithOptions($request, $runtime);
    }

    /**
     * Creates a Spark application template.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - CreateSparkTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSparkTemplateResponse
     *
     * @param CreateSparkTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSparkTemplateResponse
     */
    public function createSparkTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->parentId) {
            @$body['ParentId'] = $request->parentId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSparkTemplate',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSparkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Spark application template.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - CreateSparkTemplateRequest
     *
     * @returns CreateSparkTemplateResponse
     *
     * @param CreateSparkTemplateRequest $request
     *
     * @return CreateSparkTemplateResponse
     */
    public function createSparkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSparkTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes a database account from an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccount',
            'version' => '2021-12-01',
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
     * Deletes a database account from an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Deletes an AnalyticDB Pipeline Service (APS) data source.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DeleteApsDatasoureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApsDatasoureResponse
     *
     * @param DeleteApsDatasoureRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteApsDatasoureResponse
     */
    public function deleteApsDatasoureWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->datasourceId) {
            @$body['DatasourceId'] = $request->datasourceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteApsDatasoure',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApsDatasoureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an AnalyticDB Pipeline Service (APS) data source.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DeleteApsDatasoureRequest
     *
     * @returns DeleteApsDatasoureResponse
     *
     * @param DeleteApsDatasoureRequest $request
     *
     * @return DeleteApsDatasoureResponse
     */
    public function deleteApsDatasoure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApsDatasoureWithOptions($request, $runtime);
    }

    /**
     * Deletes an AnalyticDB Pipeline Service (APS) job.
     *
     * @remarks
     *   Deleting backup sets is an asynchronous operation and may require 10 to 20 minutes to complete.
     * *   You can delete up to 100 backup sets at a time. If you want to delete more than 100 backup sets, call this operation twice.
     * *   To ensure data security, the system forcibly retains one valid backup set. If you want to delete the last backup set, the system prohibits your operation.
     *
     * @param request - DeleteApsJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApsJobResponse
     *
     * @param DeleteApsJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteApsJobResponse
     */
    public function deleteApsJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apsJobId) {
            @$body['ApsJobId'] = $request->apsJobId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteApsJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an AnalyticDB Pipeline Service (APS) job.
     *
     * @remarks
     *   Deleting backup sets is an asynchronous operation and may require 10 to 20 minutes to complete.
     * *   You can delete up to 100 backup sets at a time. If you want to delete more than 100 backup sets, call this operation twice.
     * *   To ensure data security, the system forcibly retains one valid backup set. If you want to delete the last backup set, the system prohibits your operation.
     *
     * @param request - DeleteApsJobRequest
     *
     * @returns DeleteApsJobResponse
     *
     * @param DeleteApsJobRequest $request
     *
     * @return DeleteApsJobResponse
     */
    public function deleteApsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApsJobWithOptions($request, $runtime);
    }

    /**
     * Manually deletes backup sets.
     *
     * @remarks
     *   You can delete up to 100 backup sets at a time. If you want to delete more than 100 backup sets, call this operation twice.
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
        $query = [];
        if (null !== $request->backupIds) {
            @$query['BackupIds'] = $request->backupIds;
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
            'action' => 'DeleteBackups',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
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
     *   You can delete up to 100 backup sets at a time. If you want to delete more than 100 backup sets, call this operation twice.
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
     * ### [](#)
     * *   You can delete only pay-as-you-go clusters.
     * *   The cluster that you want to delete must be in the Running state.
     * *   For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDBCluster',
            'version' => '2021-12-01',
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
     * ### [](#)
     * *   You can delete only pay-as-you-go clusters.
     * *   The cluster that you want to delete must be in the Running state.
     * *   For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Deletes a resource group from an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDBResourceGroup',
            'version' => '2021-12-01',
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
     * Deletes a resource group from an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Deletes a scaling plan from an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteElasticPlan',
            'version' => '2021-12-01',
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
     * Deletes a scaling plan from an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Deletes a lake storage.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DeleteLakeStorageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLakeStorageResponse
     *
     * @param DeleteLakeStorageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteLakeStorageResponse
     */
    public function deleteLakeStorageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $body = [];
        if (null !== $request->lakeStorageId) {
            @$body['LakeStorageId'] = $request->lakeStorageId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteLakeStorage',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLakeStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a lake storage.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DeleteLakeStorageRequest
     *
     * @returns DeleteLakeStorageResponse
     *
     * @param DeleteLakeStorageRequest $request
     *
     * @return DeleteLakeStorageResponse
     */
    public function deleteLakeStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLakeStorageWithOptions($request, $runtime);
    }

    /**
     * Deletes a monitoring view.
     *
     * @param request - DeletePerformanceViewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePerformanceViewResponse
     *
     * @param DeletePerformanceViewRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeletePerformanceViewResponse
     */
    public function deletePerformanceViewWithOptions($request, $runtime)
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

        if (null !== $request->viewName) {
            @$query['ViewName'] = $request->viewName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePerformanceView',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePerformanceViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a monitoring view.
     *
     * @param request - DeletePerformanceViewRequest
     *
     * @returns DeletePerformanceViewResponse
     *
     * @param DeletePerformanceViewRequest $request
     *
     * @return DeletePerformanceViewResponse
     */
    public function deletePerformanceView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePerformanceViewWithOptions($request, $runtime);
    }

    /**
     * Deletes Spark template files.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - DeleteSparkTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSparkTemplateResponse
     *
     * @param DeleteSparkTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSparkTemplateResponse
     */
    public function deleteSparkTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSparkTemplate',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSparkTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes Spark template files.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - DeleteSparkTemplateRequest
     *
     * @returns DeleteSparkTemplateResponse
     *
     * @param DeleteSparkTemplateRequest $request
     *
     * @return DeleteSparkTemplateResponse
     */
    public function deleteSparkTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSparkTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes Spark template files.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - DeleteSparkTemplateFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSparkTemplateFileResponse
     *
     * @param DeleteSparkTemplateFileRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSparkTemplateFileResponse
     */
    public function deleteSparkTemplateFileWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSparkTemplateFile',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSparkTemplateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes Spark template files.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - DeleteSparkTemplateFileRequest
     *
     * @returns DeleteSparkTemplateFileResponse
     *
     * @param DeleteSparkTemplateFileRequest $request
     *
     * @return DeleteSparkTemplateFileResponse
     */
    public function deleteSparkTemplateFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSparkTemplateFileWithOptions($request, $runtime);
    }

    /**
     * Queries a list of AnalyticDB for MySQL clusters for AnalyticDB Pipeline Service (APS) federated analytics.
     *
     * @remarks
     * You can call this operation to query the performance data of a cluster over a time range based on performance metrics. The collection granularity is 30 seconds. This operation allows you to query information about slow queries, such as the SQL query duration, number of scanned rows, and amount of scanned data.
     *
     * @param request - DescribeAPSADBInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAPSADBInstancesResponse
     *
     * @param DescribeAPSADBInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAPSADBInstancesResponse
     */
    public function describeAPSADBInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAPSADBInstances',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAPSADBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of AnalyticDB for MySQL clusters for AnalyticDB Pipeline Service (APS) federated analytics.
     *
     * @remarks
     * You can call this operation to query the performance data of a cluster over a time range based on performance metrics. The collection granularity is 30 seconds. This operation allows you to query information about slow queries, such as the SQL query duration, number of scanned rows, and amount of scanned data.
     *
     * @param request - DescribeAPSADBInstancesRequest
     *
     * @returns DescribeAPSADBInstancesResponse
     *
     * @param DescribeAPSADBInstancesRequest $request
     *
     * @return DescribeAPSADBInstancesResponse
     */
    public function describeAPSADBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAPSADBInstancesWithOptions($request, $runtime);
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
            'version' => '2021-12-01',
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
     * Queries the permissions of a database account on all permission levels.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeAccountAllPrivilegesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccountAllPrivilegesResponse
     *
     * @param DescribeAccountAllPrivilegesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAccountAllPrivilegesResponse
     */
    public function describeAccountAllPrivilegesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->marker) {
            @$query['Marker'] = $request->marker;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccountAllPrivileges',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccountAllPrivilegesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the permissions of a database account on all permission levels.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeAccountAllPrivilegesRequest
     *
     * @returns DescribeAccountAllPrivilegesResponse
     *
     * @param DescribeAccountAllPrivilegesRequest $request
     *
     * @return DescribeAccountAllPrivilegesResponse
     */
    public function describeAccountAllPrivileges($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountAllPrivilegesWithOptions($request, $runtime);
    }

    /**
     * Queries the databases, tables, and columns on which a database account has permissions.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeAccountPrivilegeObjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccountPrivilegeObjectsResponse
     *
     * @param DescribeAccountPrivilegeObjectsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeAccountPrivilegeObjectsResponse
     */
    public function describeAccountPrivilegeObjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->columnPrivilegeObject) {
            @$query['ColumnPrivilegeObject'] = $request->columnPrivilegeObject;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->databasePrivilegeObject) {
            @$query['DatabasePrivilegeObject'] = $request->databasePrivilegeObject;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->privilegeType) {
            @$query['PrivilegeType'] = $request->privilegeType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tablePrivilegeObject) {
            @$query['TablePrivilegeObject'] = $request->tablePrivilegeObject;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccountPrivilegeObjects',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccountPrivilegeObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the databases, tables, and columns on which a database account has permissions.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeAccountPrivilegeObjectsRequest
     *
     * @returns DescribeAccountPrivilegeObjectsResponse
     *
     * @param DescribeAccountPrivilegeObjectsRequest $request
     *
     * @return DescribeAccountPrivilegeObjectsResponse
     */
    public function describeAccountPrivilegeObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountPrivilegeObjectsWithOptions($request, $runtime);
    }

    /**
     * 获取某一ADB账户的权限.
     *
     * @param request - DescribeAccountPrivilegesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccountPrivilegesResponse
     *
     * @param DescribeAccountPrivilegesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAccountPrivilegesResponse
     */
    public function describeAccountPrivilegesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->columnPrivilegeObject) {
            @$query['ColumnPrivilegeObject'] = $request->columnPrivilegeObject;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->databasePrivilegeObject) {
            @$query['DatabasePrivilegeObject'] = $request->databasePrivilegeObject;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->privilegeType) {
            @$query['PrivilegeType'] = $request->privilegeType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tablePrivilegeObject) {
            @$query['TablePrivilegeObject'] = $request->tablePrivilegeObject;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccountPrivileges',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccountPrivilegesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取某一ADB账户的权限.
     *
     * @param request - DescribeAccountPrivilegesRequest
     *
     * @returns DescribeAccountPrivilegesResponse
     *
     * @param DescribeAccountPrivilegesRequest $request
     *
     * @return DescribeAccountPrivilegesResponse
     */
    public function describeAccountPrivileges($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountPrivilegesWithOptions($request, $runtime);
    }

    /**
     * Queries the database accounts of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccounts',
            'version' => '2021-12-01',
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
     * Queries the database accounts of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the information about table columns for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeAdbMySqlColumnsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdbMySqlColumnsResponse
     *
     * @param DescribeAdbMySqlColumnsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAdbMySqlColumnsResponse
     */
    public function describeAdbMySqlColumnsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->schema) {
            @$query['Schema'] = $request->schema;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdbMySqlColumns',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdbMySqlColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about table columns for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeAdbMySqlColumnsRequest
     *
     * @returns DescribeAdbMySqlColumnsResponse
     *
     * @param DescribeAdbMySqlColumnsRequest $request
     *
     * @return DescribeAdbMySqlColumnsResponse
     */
    public function describeAdbMySqlColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdbMySqlColumnsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about table indexes.
     *
     * @param request - DescribeAdbMySqlIndexesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdbMySqlIndexesResponse
     *
     * @param DescribeAdbMySqlIndexesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAdbMySqlIndexesResponse
     */
    public function describeAdbMySqlIndexesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->schema) {
            @$query['Schema'] = $request->schema;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdbMySqlIndexes',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdbMySqlIndexesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about table indexes.
     *
     * @param request - DescribeAdbMySqlIndexesRequest
     *
     * @returns DescribeAdbMySqlIndexesResponse
     *
     * @param DescribeAdbMySqlIndexesRequest $request
     *
     * @return DescribeAdbMySqlIndexesResponse
     */
    public function describeAdbMySqlIndexes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdbMySqlIndexesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of databases for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeAdbMySqlSchemasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdbMySqlSchemasResponse
     *
     * @param DescribeAdbMySqlSchemasRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAdbMySqlSchemasResponse
     */
    public function describeAdbMySqlSchemasWithOptions($request, $runtime)
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
            'action' => 'DescribeAdbMySqlSchemas',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdbMySqlSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of databases for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeAdbMySqlSchemasRequest
     *
     * @returns DescribeAdbMySqlSchemasResponse
     *
     * @param DescribeAdbMySqlSchemasRequest $request
     *
     * @return DescribeAdbMySqlSchemasResponse
     */
    public function describeAdbMySqlSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdbMySqlSchemasWithOptions($request, $runtime);
    }

    /**
     * Queries the information about table metadata.
     *
     * @param request - DescribeAdbMySqlTableMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdbMySqlTableMetaResponse
     *
     * @param DescribeAdbMySqlTableMetaRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAdbMySqlTableMetaResponse
     */
    public function describeAdbMySqlTableMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->schema) {
            @$query['Schema'] = $request->schema;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdbMySqlTableMeta',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdbMySqlTableMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about table metadata.
     *
     * @param request - DescribeAdbMySqlTableMetaRequest
     *
     * @returns DescribeAdbMySqlTableMetaResponse
     *
     * @param DescribeAdbMySqlTableMetaRequest $request
     *
     * @return DescribeAdbMySqlTableMetaResponse
     */
    public function describeAdbMySqlTableMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdbMySqlTableMetaWithOptions($request, $runtime);
    }

    /**
     * Queries a list of tables for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeAdbMySqlTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAdbMySqlTablesResponse
     *
     * @param DescribeAdbMySqlTablesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAdbMySqlTablesResponse
     */
    public function describeAdbMySqlTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->schema) {
            @$query['Schema'] = $request->schema;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAdbMySqlTables',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAdbMySqlTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of tables for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeAdbMySqlTablesRequest
     *
     * @returns DescribeAdbMySqlTablesResponse
     *
     * @param DescribeAdbMySqlTablesRequest $request
     *
     * @return DescribeAdbMySqlTablesResponse
     */
    public function describeAdbMySqlTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdbMySqlTablesWithOptions($request, $runtime);
    }

    /**
     * Queries whether the suggestion feature is enabled.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
            'version' => '2021-12-01',
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
     * Queries whether the suggestion feature is enabled.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries a list of databases, tables, and columns in an AnalyticDB for MySQL cluster.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
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
            'version' => '2021-12-01',
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
     * Queries a list of databases, tables, and columns in an AnalyticDB for MySQL cluster.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
            'version' => '2021-12-01',
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
     * Queries the logs of a real-time data ingestion job for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeApsActionLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApsActionLogsResponse
     *
     * @param DescribeApsActionLogsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeApsActionLogsResponse
     */
    public function describeApsActionLogsWithOptions($request, $runtime)
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

        if (null !== $request->stage) {
            @$query['Stage'] = $request->stage;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->workloadId) {
            @$query['WorkloadId'] = $request->workloadId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApsActionLogs',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApsActionLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logs of a real-time data ingestion job for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeApsActionLogsRequest
     *
     * @returns DescribeApsActionLogsResponse
     *
     * @param DescribeApsActionLogsRequest $request
     *
     * @return DescribeApsActionLogsResponse
     */
    public function describeApsActionLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsActionLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an AnalyticDB Pipeline Service (APS) data source.
     *
     * @param request - DescribeApsDatasourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApsDatasourceResponse
     *
     * @param DescribeApsDatasourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeApsDatasourceResponse
     */
    public function describeApsDatasourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->datasourceId) {
            @$body['DatasourceId'] = $request->datasourceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeApsDatasource',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApsDatasourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an AnalyticDB Pipeline Service (APS) data source.
     *
     * @param request - DescribeApsDatasourceRequest
     *
     * @returns DescribeApsDatasourceResponse
     *
     * @param DescribeApsDatasourceRequest $request
     *
     * @return DescribeApsDatasourceResponse
     */
    public function describeApsDatasource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsDatasourceWithOptions($request, $runtime);
    }

    /**
     * Queries a list of AnalyticDB Pipeline Service (APS) data sources.
     *
     * @param request - DescribeApsDatasourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApsDatasourcesResponse
     *
     * @param DescribeApsDatasourcesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeApsDatasourcesResponse
     */
    public function describeApsDatasourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->datasourceName) {
            @$body['DatasourceName'] = $request->datasourceName;
        }

        if (null !== $request->datasourceType) {
            @$body['DatasourceType'] = $request->datasourceType;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeApsDatasources',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApsDatasourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of AnalyticDB Pipeline Service (APS) data sources.
     *
     * @param request - DescribeApsDatasourcesRequest
     *
     * @returns DescribeApsDatasourcesResponse
     *
     * @param DescribeApsDatasourcesRequest $request
     *
     * @return DescribeApsDatasourcesResponse
     */
    public function describeApsDatasources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsDatasourcesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an AnalyticDB Pipeline Service (APS) job from a Hive data source.
     *
     * @param request - DescribeApsHiveWorkloadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApsHiveWorkloadResponse
     *
     * @param DescribeApsHiveWorkloadRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeApsHiveWorkloadResponse
     */
    public function describeApsHiveWorkloadWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->workloadId) {
            @$body['WorkloadId'] = $request->workloadId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeApsHiveWorkload',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApsHiveWorkloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an AnalyticDB Pipeline Service (APS) job from a Hive data source.
     *
     * @param request - DescribeApsHiveWorkloadRequest
     *
     * @returns DescribeApsHiveWorkloadResponse
     *
     * @param DescribeApsHiveWorkloadRequest $request
     *
     * @return DescribeApsHiveWorkloadResponse
     */
    public function describeApsHiveWorkload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsHiveWorkloadWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an AnalyticDB Pipeline Service (APS) job.
     *
     * @param request - DescribeApsJobDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApsJobDetailResponse
     *
     * @param DescribeApsJobDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeApsJobDetailResponse
     */
    public function describeApsJobDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apsJobId) {
            @$body['ApsJobId'] = $request->apsJobId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeApsJobDetail',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApsJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an AnalyticDB Pipeline Service (APS) job.
     *
     * @param request - DescribeApsJobDetailRequest
     *
     * @returns DescribeApsJobDetailResponse
     *
     * @param DescribeApsJobDetailRequest $request
     *
     * @return DescribeApsJobDetailResponse
     */
    public function describeApsJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsJobDetailWithOptions($request, $runtime);
    }

    /**
     * Queries a list of AnalyticDB Pipeline Service (APS) jobs.
     *
     * @param request - DescribeApsJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApsJobsResponse
     *
     * @param DescribeApsJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeApsJobsResponse
     */
    public function describeApsJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apsJobName) {
            @$body['ApsJobName'] = $request->apsJobName;
        }

        if (null !== $request->createTimeEnd) {
            @$body['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$body['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeApsJobs',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApsJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of AnalyticDB Pipeline Service (APS) jobs.
     *
     * @param request - DescribeApsJobsRequest
     *
     * @returns DescribeApsJobsResponse
     *
     * @param DescribeApsJobsRequest $request
     *
     * @return DescribeApsJobsResponse
     */
    public function describeApsJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsJobsWithOptions($request, $runtime);
    }

    /**
     * Queries the workloads of AnalyticDB Pipeline Service (APS) migration jobs.
     *
     * @param request - DescribeApsMigrationWorkloadsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApsMigrationWorkloadsResponse
     *
     * @param DescribeApsMigrationWorkloadsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeApsMigrationWorkloadsResponse
     */
    public function describeApsMigrationWorkloadsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->ossLocation) {
            @$body['OssLocation'] = $request->ossLocation;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->workloadName) {
            @$body['WorkloadName'] = $request->workloadName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeApsMigrationWorkloads',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApsMigrationWorkloadsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the workloads of AnalyticDB Pipeline Service (APS) migration jobs.
     *
     * @param request - DescribeApsMigrationWorkloadsRequest
     *
     * @returns DescribeApsMigrationWorkloadsResponse
     *
     * @param DescribeApsMigrationWorkloadsRequest $request
     *
     * @return DescribeApsMigrationWorkloadsResponse
     */
    public function describeApsMigrationWorkloads($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsMigrationWorkloadsWithOptions($request, $runtime);
    }

    /**
     * Queries the progress of an AnalyticDB Pipeline Service (APS) job.
     *
     * @param request - DescribeApsProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApsProgressResponse
     *
     * @param DescribeApsProgressRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeApsProgressResponse
     */
    public function describeApsProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->workloadId) {
            @$body['WorkloadId'] = $request->workloadId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeApsProgress',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApsProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the progress of an AnalyticDB Pipeline Service (APS) job.
     *
     * @param request - DescribeApsProgressRequest
     *
     * @returns DescribeApsProgressResponse
     *
     * @param DescribeApsProgressRequest $request
     *
     * @return DescribeApsProgressResponse
     */
    public function describeApsProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsProgressWithOptions($request, $runtime);
    }

    /**
     * Queries the information about resource groups of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeApsResourceGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApsResourceGroupsResponse
     *
     * @param DescribeApsResourceGroupsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeApsResourceGroupsResponse
     */
    public function describeApsResourceGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->workloadId) {
            @$body['WorkloadId'] = $request->workloadId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeApsResourceGroups',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApsResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about resource groups of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeApsResourceGroupsRequest
     *
     * @returns DescribeApsResourceGroupsResponse
     *
     * @param DescribeApsResourceGroupsRequest $request
     *
     * @return DescribeApsResourceGroupsResponse
     */
    public function describeApsResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApsResourceGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the SQL audit logs of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     *   SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried. The following operations are not recorded in SQL audit logs: **INSERT INTO VALUES**, **REPLACE INTO VALUES**, and **UPSERT INTO VALUES**.
     * *   For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        if (null !== $request->proxyUser) {
            @$query['ProxyUser'] = $request->proxyUser;
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
            'version' => '2021-12-01',
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
     *   SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried. The following operations are not recorded in SQL audit logs: **INSERT INTO VALUES**, **REPLACE INTO VALUES**, and **UPSERT INTO VALUES**.
     * *   For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the available optimization suggestions for an AnalyticDB for MySQL cluster.
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
            'version' => '2021-12-01',
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
     * Queries the available optimization suggestions for an AnalyticDB for MySQL cluster.
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
     * 查看集群备份设置.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
            'version' => '2021-12-01',
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
     * 查看集群备份设置.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * 查询实例备份集.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        if (null !== $request->remote) {
            @$query['Remote'] = $request->remote;
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
            'version' => '2021-12-01',
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
     * 查询实例备份集.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
            'version' => '2021-12-01',
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
     * Queries the IP address whitelists of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeClusterAccessWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterAccessWhiteListResponse
     *
     * @param DescribeClusterAccessWhiteListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeClusterAccessWhiteListResponse
     */
    public function describeClusterAccessWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterAccessWhiteList',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterAccessWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IP address whitelists of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeClusterAccessWhiteListRequest
     *
     * @returns DescribeClusterAccessWhiteListResponse
     *
     * @param DescribeClusterAccessWhiteListRequest $request
     *
     * @return DescribeClusterAccessWhiteListResponse
     */
    public function describeClusterAccessWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterAccessWhiteListWithOptions($request, $runtime);
    }

    /**
     * Queries the network information about an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeClusterNetInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterNetInfoResponse
     *
     * @param DescribeClusterNetInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeClusterNetInfoResponse
     */
    public function describeClusterNetInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterNetInfo',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterNetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the network information about an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeClusterNetInfoRequest
     *
     * @returns DescribeClusterNetInfoResponse
     *
     * @param DescribeClusterNetInfoRequest $request
     *
     * @return DescribeClusterNetInfoResponse
     */
    public function describeClusterNetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterNetInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the information about resource usage of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeClusterResourceDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterResourceDetailResponse
     *
     * @param DescribeClusterResourceDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeClusterResourceDetailResponse
     */
    public function describeClusterResourceDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterResourceDetail',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterResourceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about resource usage of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeClusterResourceDetailRequest
     *
     * @returns DescribeClusterResourceDetailResponse
     *
     * @param DescribeClusterResourceDetailRequest $request
     *
     * @return DescribeClusterResourceDetailResponse
     */
    public function describeClusterResourceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterResourceDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the resource usage of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeClusterResourceUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterResourceUsageResponse
     *
     * @param DescribeClusterResourceUsageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClusterResourceUsageResponse
     */
    public function describeClusterResourceUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterResourceUsage',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource usage of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeClusterResourceUsageRequest
     *
     * @returns DescribeClusterResourceUsageResponse
     *
     * @param DescribeClusterResourceUsageRequest $request
     *
     * @return DescribeClusterResourceUsageResponse
     */
    public function describeClusterResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterResourceUsageWithOptions($request, $runtime);
    }

    /**
     * Queries a list of columns in a table.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
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
            'version' => '2021-12-01',
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
     * Queries a list of columns in a table.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * Queries whether the remote build feature is enabled in the query acceleration configuration of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeCompactionServiceSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCompactionServiceSwitchResponse
     *
     * @param DescribeCompactionServiceSwitchRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeCompactionServiceSwitchResponse
     */
    public function describeCompactionServiceSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCompactionServiceSwitch',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCompactionServiceSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether the remote build feature is enabled in the query acceleration configuration of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeCompactionServiceSwitchRequest
     *
     * @returns DescribeCompactionServiceSwitchResponse
     *
     * @param DescribeCompactionServiceSwitchRequest $request
     *
     * @return DescribeCompactionServiceSwitchResponse
     */
    public function describeCompactionServiceSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCompactionServiceSwitchWithOptions($request, $runtime);
    }

    /**
     * Queries the computing resource usage of a resource group in an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeComputeResourceUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeComputeResourceUsageResponse
     *
     * @param DescribeComputeResourceUsageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeComputeResourceUsageResponse
     */
    public function describeComputeResourceUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeComputeResourceUsage',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeComputeResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the computing resource usage of a resource group in an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeComputeResourceUsageRequest
     *
     * @returns DescribeComputeResourceUsageResponse
     *
     * @param DescribeComputeResourceUsageRequest $request
     *
     * @return DescribeComputeResourceUsageResponse
     */
    public function describeComputeResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComputeResourceUsageWithOptions($request, $runtime);
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
            'version' => '2021-12-01',
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
     * Queries the information about an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterAttribute',
            'version' => '2021-12-01',
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
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the health status of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
            'version' => '2021-12-01',
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
     * Queries the health status of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the performance data of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
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
            'version' => '2021-12-01',
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
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * 获取SSL配置信息.
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterSSL',
            'version' => '2021-12-01',
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
     * 获取SSL配置信息.
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
     * Queries the storage overview information of an AnalyticDB for MySQL cluster, such as the total data size, hot data size, cold data size, and data growth.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
            'action' => 'DescribeDBClusterSpaceSummary',
            'version' => '2021-12-01',
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
     * Queries the storage overview information of an AnalyticDB for MySQL cluster, such as the total data size, hot data size, cold data size, and data growth.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the statuses of AnalyticDB for MySQL clusters within a region.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusterStatus',
            'version' => '2021-12-01',
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
     * Queries the statuses of AnalyticDB for MySQL clusters within a region.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the information about AnalyticDB for MySQL Data Lakehouse Edition clusters within a region.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        if (null !== $request->DBClusterVersion) {
            @$query['DBClusterVersion'] = $request->DBClusterVersion;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBClusters',
            'version' => '2021-12-01',
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
     * Queries the information about AnalyticDB for MySQL Data Lakehouse Edition clusters within a region.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the information about resource groups of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBResourceGroup',
            'version' => '2021-12-01',
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
     * Queries the information about resource groups of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the deduplicated statistics of resource groups, databases, usernames, and source IP addresses about SQL statements that meet a query condition for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
            'version' => '2021-12-01',
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
     * Queries the deduplicated statistics of resource groups, databases, usernames, and source IP addresses about SQL statements that meet a query condition for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the diagnostic information about SQL statements that meet a query condition for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
            'version' => '2021-12-01',
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
     * Queries the diagnostic information about SQL statements that meet a query condition for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->processId) {
            @$query['ProcessId'] = $request->processId;
        }

        if (null !== $request->processRcHost) {
            @$query['ProcessRcHost'] = $request->processRcHost;
        }

        if (null !== $request->processStartTime) {
            @$query['ProcessStartTime'] = $request->processStartTime;
        }

        if (null !== $request->processState) {
            @$query['ProcessState'] = $request->processState;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiagnosisSQLInfo',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
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
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the last five SQL query download tasks of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
            'version' => '2021-12-01',
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
     * Queries the last five SQL query download tasks of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the information about a scaling plan for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeElasticPlanAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeElasticPlanAttributeResponse
     *
     * @param DescribeElasticPlanAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeElasticPlanAttributeResponse
     */
    public function describeElasticPlanAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->elasticPlanName) {
            @$query['ElasticPlanName'] = $request->elasticPlanName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeElasticPlanAttribute',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeElasticPlanAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a scaling plan for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeElasticPlanAttributeRequest
     *
     * @returns DescribeElasticPlanAttributeResponse
     *
     * @param DescribeElasticPlanAttributeRequest $request
     *
     * @return DescribeElasticPlanAttributeResponse
     */
    public function describeElasticPlanAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticPlanAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries a list of scaling plan jobs for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *
     * @param request - DescribeElasticPlanJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeElasticPlanJobsResponse
     *
     * @param DescribeElasticPlanJobsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeElasticPlanJobsResponse
     */
    public function describeElasticPlanJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->elasticPlanName) {
            @$query['ElasticPlanName'] = $request->elasticPlanName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
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
            'action' => 'DescribeElasticPlanJobs',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeElasticPlanJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of scaling plan jobs for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *
     * @param request - DescribeElasticPlanJobsRequest
     *
     * @returns DescribeElasticPlanJobsResponse
     *
     * @param DescribeElasticPlanJobsRequest $request
     *
     * @return DescribeElasticPlanJobsResponse
     */
    public function describeElasticPlanJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticPlanJobsWithOptions($request, $runtime);
    }

    /**
     * Queries the resource specifications that are supported by different types of scaling plans of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeElasticPlanSpecificationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeElasticPlanSpecificationsResponse
     *
     * @param DescribeElasticPlanSpecificationsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeElasticPlanSpecificationsResponse
     */
    public function describeElasticPlanSpecificationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeElasticPlanSpecifications',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeElasticPlanSpecificationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource specifications that are supported by different types of scaling plans of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeElasticPlanSpecificationsRequest
     *
     * @returns DescribeElasticPlanSpecificationsResponse
     *
     * @param DescribeElasticPlanSpecificationsRequest $request
     *
     * @return DescribeElasticPlanSpecificationsResponse
     */
    public function describeElasticPlanSpecifications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticPlanSpecificationsWithOptions($request, $runtime);
    }

    /**
     * Queries scaling plans of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeElasticPlansRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeElasticPlansResponse
     *
     * @param DescribeElasticPlansRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeElasticPlansResponse
     */
    public function describeElasticPlansWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->elasticPlanName) {
            @$query['ElasticPlanName'] = $request->elasticPlanName;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeElasticPlans',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeElasticPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries scaling plans of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeElasticPlansRequest
     *
     * @returns DescribeElasticPlansResponse
     *
     * @param DescribeElasticPlansRequest $request
     *
     * @return DescribeElasticPlansResponse
     */
    public function describeElasticPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticPlansWithOptions($request, $runtime);
    }

    /**
     * Queries the permission level and permissions supported for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @param request - DescribeEnabledPrivilegesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnabledPrivilegesResponse
     *
     * @param DescribeEnabledPrivilegesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEnabledPrivilegesResponse
     */
    public function describeEnabledPrivilegesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnabledPrivileges',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnabledPrivilegesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the permission level and permissions supported for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @param request - DescribeEnabledPrivilegesRequest
     *
     * @returns DescribeEnabledPrivilegesResponse
     *
     * @param DescribeEnabledPrivilegesRequest $request
     *
     * @return DescribeEnabledPrivilegesResponse
     */
    public function describeEnabledPrivileges($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnabledPrivilegesWithOptions($request, $runtime);
    }

    /**
     * Queries the disk cache size in the query acceleration configuration of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeEssdCacheConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEssdCacheConfigResponse
     *
     * @param DescribeEssdCacheConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeEssdCacheConfigResponse
     */
    public function describeEssdCacheConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEssdCacheConfig',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEssdCacheConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the disk cache size in the query acceleration configuration of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeEssdCacheConfigRequest
     *
     * @returns DescribeEssdCacheConfigResponse
     *
     * @param DescribeEssdCacheConfigRequest $request
     *
     * @return DescribeEssdCacheConfigResponse
     */
    public function describeEssdCacheConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEssdCacheConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the information about tables that have excessive primary key fields in an AnalyticDB for MySQL Data Lakehouse Edition (V5.0) cluster.
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
            'version' => '2021-12-01',
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
     * Queries the information about tables that have excessive primary key fields in an AnalyticDB for MySQL Data Lakehouse Edition (V5.0) cluster.
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
            'version' => '2021-12-01',
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
     * 任务中心任务列表.
     *
     * @param request - DescribeHistoryTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHistoryTasksResponse
     *
     * @param DescribeHistoryTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHistoryTasksResponse
     */
    public function describeHistoryTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromExecTime) {
            @$query['FromExecTime'] = $request->fromExecTime;
        }

        if (null !== $request->fromStartTime) {
            @$query['FromStartTime'] = $request->fromStartTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
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

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->toExecTime) {
            @$query['ToExecTime'] = $request->toExecTime;
        }

        if (null !== $request->toStartTime) {
            @$query['ToStartTime'] = $request->toStartTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHistoryTasks',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHistoryTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 任务中心任务列表.
     *
     * @param request - DescribeHistoryTasksRequest
     *
     * @returns DescribeHistoryTasksResponse
     *
     * @param DescribeHistoryTasksRequest $request
     *
     * @return DescribeHistoryTasksResponse
     */
    public function describeHistoryTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryTasksWithOptions($request, $runtime);
    }

    /**
     * 任务中心任务统计
     *
     * @param request - DescribeHistoryTasksStatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHistoryTasksStatResponse
     *
     * @param DescribeHistoryTasksStatRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeHistoryTasksStatResponse
     */
    public function describeHistoryTasksStatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromExecTime) {
            @$query['FromExecTime'] = $request->fromExecTime;
        }

        if (null !== $request->fromStartTime) {
            @$query['FromStartTime'] = $request->fromStartTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->toExecTime) {
            @$query['ToExecTime'] = $request->toExecTime;
        }

        if (null !== $request->toStartTime) {
            @$query['ToStartTime'] = $request->toStartTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHistoryTasksStat',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHistoryTasksStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 任务中心任务统计
     *
     * @param request - DescribeHistoryTasksStatRequest
     *
     * @returns DescribeHistoryTasksStatResponse
     *
     * @param DescribeHistoryTasksStatRequest $request
     *
     * @return DescribeHistoryTasksStatResponse
     */
    public function describeHistoryTasksStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryTasksStatWithOptions($request, $runtime);
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
            'version' => '2021-12-01',
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

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tableType) {
            @$query['TableType'] = $request->tableType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInclinedTables',
            'version' => '2021-12-01',
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
     * 获取作业资源使用统计
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeJobResourceUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJobResourceUsageResponse
     *
     * @param DescribeJobResourceUsageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeJobResourceUsageResponse
     */
    public function describeJobResourceUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJobResourceUsage',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeJobResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取作业资源使用统计
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeJobResourceUsageRequest
     *
     * @returns DescribeJobResourceUsageResponse
     *
     * @param DescribeJobResourceUsageRequest $request
     *
     * @return DescribeJobResourceUsageResponse
     */
    public function describeJobResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobResourceUsageWithOptions($request, $runtime);
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
            'version' => '2021-12-01',
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
     * Queries the answer by a large language model (LLM) to a user question about the use of AnalyticDB for MySQL.
     *
     * @param request - DescribeLLMAnswerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLLMAnswerResponse
     *
     * @param DescribeLLMAnswerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeLLMAnswerResponse
     */
    public function describeLLMAnswerWithSSE($request, $runtime)
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

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
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
            'action' => 'DescribeLLMAnswer',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            $data = json_decode($resp->event->data, true);

            yield DescribeLLMAnswerResponse::fromMap([
                'statusCode' => $resp->statusCode,
                'headers' => $resp->headers,
                'body' => Dara::merge([
                    'RequestId' => $resp->event->id,
                    'Message' => $resp->event->event,
                ], $data),
            ]);
        }
    }

    /**
     * Queries the answer by a large language model (LLM) to a user question about the use of AnalyticDB for MySQL.
     *
     * @param request - DescribeLLMAnswerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLLMAnswerResponse
     *
     * @param DescribeLLMAnswerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeLLMAnswerResponse
     */
    public function describeLLMAnswerWithOptions($request, $runtime)
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

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
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
            'action' => 'DescribeLLMAnswer',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLLMAnswerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the answer by a large language model (LLM) to a user question about the use of AnalyticDB for MySQL.
     *
     * @param request - DescribeLLMAnswerRequest
     *
     * @returns DescribeLLMAnswerResponse
     *
     * @param DescribeLLMAnswerRequest $request
     *
     * @return DescribeLLMAnswerResponse
     */
    public function describeLLMAnswer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLLMAnswerWithOptions($request, $runtime);
    }

    /**
     * Queries a list of questions similar to a user question.
     *
     * @param request - DescribeLLMSimilarQuestionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLLMSimilarQuestionsResponse
     *
     * @param DescribeLLMSimilarQuestionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeLLMSimilarQuestionsResponse
     */
    public function describeLLMSimilarQuestionsWithOptions($request, $runtime)
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

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
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
            'action' => 'DescribeLLMSimilarQuestions',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLLMSimilarQuestionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of questions similar to a user question.
     *
     * @param request - DescribeLLMSimilarQuestionsRequest
     *
     * @returns DescribeLLMSimilarQuestionsResponse
     *
     * @param DescribeLLMSimilarQuestionsRequest $request
     *
     * @return DescribeLLMSimilarQuestionsResponse
     */
    public function describeLLMSimilarQuestions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLLMSimilarQuestionsWithOptions($request, $runtime);
    }

    /**
     * Queries the lake cache size of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeLakeCacheSizeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLakeCacheSizeResponse
     *
     * @param DescribeLakeCacheSizeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLakeCacheSizeResponse
     */
    public function describeLakeCacheSizeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLakeCacheSize',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLakeCacheSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the lake cache size of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeLakeCacheSizeRequest
     *
     * @returns DescribeLakeCacheSizeResponse
     *
     * @param DescribeLakeCacheSizeRequest $request
     *
     * @return DescribeLakeCacheSizeResponse
     */
    public function describeLakeCacheSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLakeCacheSizeWithOptions($request, $runtime);
    }

    /**
     * Queries the service account permissions of an AnalyticDB for MySQL cluster.
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
            'version' => '2021-12-01',
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
     * Queries the service account permissions of an AnalyticDB for MySQL cluster.
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
            'version' => '2021-12-01',
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
     * Queries the information about performance metrics of an SQL pattern such as the query duration and average memory usage for an AnalyticDB for MySQL cluster within a time range.
     *
     * @remarks
     *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
            'version' => '2021-12-01',
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
     * Queries the information about performance metrics of an SQL pattern such as the query duration and average memory usage for an AnalyticDB for MySQL cluster within a time range.
     *
     * @remarks
     *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * Queries the information about a monitoring view.
     *
     * @param request - DescribePerformanceViewAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePerformanceViewAttributeResponse
     *
     * @param DescribePerformanceViewAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribePerformanceViewAttributeResponse
     */
    public function describePerformanceViewAttributeWithOptions($request, $runtime)
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

        if (null !== $request->viewName) {
            @$query['ViewName'] = $request->viewName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePerformanceViewAttribute',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePerformanceViewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a monitoring view.
     *
     * @param request - DescribePerformanceViewAttributeRequest
     *
     * @returns DescribePerformanceViewAttributeResponse
     *
     * @param DescribePerformanceViewAttributeRequest $request
     *
     * @return DescribePerformanceViewAttributeResponse
     */
    public function describePerformanceViewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePerformanceViewAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries a list of monitoring views.
     *
     * @param request - DescribePerformanceViewsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePerformanceViewsResponse
     *
     * @param DescribePerformanceViewsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribePerformanceViewsResponse
     */
    public function describePerformanceViewsWithOptions($request, $runtime)
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
            'action' => 'DescribePerformanceViews',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePerformanceViewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of monitoring views.
     *
     * @param request - DescribePerformanceViewsRequest
     *
     * @returns DescribePerformanceViewsResponse
     *
     * @param DescribePerformanceViewsRequest $request
     *
     * @return DescribePerformanceViewsResponse
     */
    public function describePerformanceViews($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePerformanceViewsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of regions and zones in which AnalyticDB for MySQL Data Lakehouse Edition (V3.0) is available.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
            'version' => '2021-12-01',
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
     * Queries a list of regions and zones in which AnalyticDB for MySQL Data Lakehouse Edition (V3.0) is available.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the information about resource group specifications.
     *
     * @remarks
     * ### [](#)
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeResourceGroupSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceGroupSpecResponse
     *
     * @param DescribeResourceGroupSpecRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeResourceGroupSpecResponse
     */
    public function describeResourceGroupSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupType) {
            @$query['ResourceGroupType'] = $request->resourceGroupType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourceGroupSpec',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourceGroupSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about resource group specifications.
     *
     * @remarks
     * ### [](#)
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeResourceGroupSpecRequest
     *
     * @returns DescribeResourceGroupSpecResponse
     *
     * @param DescribeResourceGroupSpecRequest $request
     *
     * @return DescribeResourceGroupSpecResponse
     */
    public function describeResourceGroupSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceGroupSpecWithOptions($request, $runtime);
    }

    /**
     * Queries a list of SQL patterns for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster within a time range.
     *
     * @remarks
     *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSQLPatterns',
            'version' => '2021-12-01',
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
     * Queries a list of SQL patterns for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster within a time range.
     *
     * @remarks
     *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * Queries the WebSocket domain name of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeSQLWebSocketDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSQLWebSocketDomainResponse
     *
     * @param DescribeSQLWebSocketDomainRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSQLWebSocketDomainResponse
     */
    public function describeSQLWebSocketDomainWithOptions($request, $runtime)
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
            'action' => 'DescribeSQLWebSocketDomain',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSQLWebSocketDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the WebSocket domain name of an AnalyticDB for MySQL cluster.
     *
     * @param request - DescribeSQLWebSocketDomainRequest
     *
     * @returns DescribeSQLWebSocketDomainResponse
     *
     * @param DescribeSQLWebSocketDomainRequest $request
     *
     * @return DescribeSQLWebSocketDomainResponse
     */
    public function describeSQLWebSocketDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLWebSocketDomainWithOptions($request, $runtime);
    }

    /**
     * Queries a list of databases in an AnalyticDB for MySQL cluster.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSchemas',
            'version' => '2021-12-01',
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
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * Queries the diagnostic information about a Spark application.
     *
     * @param request - DescribeSparkAppDiagnosisInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSparkAppDiagnosisInfoResponse
     *
     * @param DescribeSparkAppDiagnosisInfoRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSparkAppDiagnosisInfoResponse
     */
    public function describeSparkAppDiagnosisInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSparkAppDiagnosisInfo',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSparkAppDiagnosisInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the diagnostic information about a Spark application.
     *
     * @param request - DescribeSparkAppDiagnosisInfoRequest
     *
     * @returns DescribeSparkAppDiagnosisInfoResponse
     *
     * @param DescribeSparkAppDiagnosisInfoRequest $request
     *
     * @return DescribeSparkAppDiagnosisInfoResponse
     */
    public function describeSparkAppDiagnosisInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSparkAppDiagnosisInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the type of a Spark application.
     *
     * @param request - DescribeSparkAppTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSparkAppTypeResponse
     *
     * @param DescribeSparkAppTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSparkAppTypeResponse
     */
    public function describeSparkAppTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
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
            'action' => 'DescribeSparkAppType',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSparkAppTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the type of a Spark application.
     *
     * @param request - DescribeSparkAppTypeRequest
     *
     * @returns DescribeSparkAppTypeResponse
     *
     * @param DescribeSparkAppTypeRequest $request
     *
     * @return DescribeSparkAppTypeResponse
     */
    public function describeSparkAppType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSparkAppTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the execution logs of Spark code.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeSparkCodeLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSparkCodeLogResponse
     *
     * @param DescribeSparkCodeLogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSparkCodeLogResponse
     */
    public function describeSparkCodeLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSparkCodeLog',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSparkCodeLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution logs of Spark code.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeSparkCodeLogRequest
     *
     * @returns DescribeSparkCodeLogResponse
     *
     * @param DescribeSparkCodeLogRequest $request
     *
     * @return DescribeSparkCodeLogResponse
     */
    public function describeSparkCodeLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSparkCodeLogWithOptions($request, $runtime);
    }

    /**
     * Queries the execution result of Spark code.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeSparkCodeOutputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSparkCodeOutputResponse
     *
     * @param DescribeSparkCodeOutputRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSparkCodeOutputResponse
     */
    public function describeSparkCodeOutputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSparkCodeOutput',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSparkCodeOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution result of Spark code.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeSparkCodeOutputRequest
     *
     * @returns DescribeSparkCodeOutputResponse
     *
     * @param DescribeSparkCodeOutputRequest $request
     *
     * @return DescribeSparkCodeOutputResponse
     */
    public function describeSparkCodeOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSparkCodeOutputWithOptions($request, $runtime);
    }

    /**
     * Queries the URL of the web UI for a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeSparkCodeWebUiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSparkCodeWebUiResponse
     *
     * @param DescribeSparkCodeWebUiRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSparkCodeWebUiResponse
     */
    public function describeSparkCodeWebUiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSparkCodeWebUi',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSparkCodeWebUiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the URL of the web UI for a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - DescribeSparkCodeWebUiRequest
     *
     * @returns DescribeSparkCodeWebUiResponse
     *
     * @param DescribeSparkCodeWebUiRequest $request
     *
     * @return DescribeSparkCodeWebUiResponse
     */
    public function describeSparkCodeWebUi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSparkCodeWebUiWithOptions($request, $runtime);
    }

    /**
     * Queries the diagnostic information about a Spark SQL query.
     *
     * @param request - DescribeSparkSQLDiagnosisAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSparkSQLDiagnosisAttributeResponse
     *
     * @param DescribeSparkSQLDiagnosisAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSparkSQLDiagnosisAttributeResponse
     */
    public function describeSparkSQLDiagnosisAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->innerQueryId) {
            @$query['InnerQueryId'] = $request->innerQueryId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSparkSQLDiagnosisAttribute',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSparkSQLDiagnosisAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the diagnostic information about a Spark SQL query.
     *
     * @param request - DescribeSparkSQLDiagnosisAttributeRequest
     *
     * @returns DescribeSparkSQLDiagnosisAttributeResponse
     *
     * @param DescribeSparkSQLDiagnosisAttributeRequest $request
     *
     * @return DescribeSparkSQLDiagnosisAttributeResponse
     */
    public function describeSparkSQLDiagnosisAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSparkSQLDiagnosisAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the diagnostic information about Spark SQL queries.
     *
     * @param request - DescribeSparkSQLDiagnosisListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSparkSQLDiagnosisListResponse
     *
     * @param DescribeSparkSQLDiagnosisListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSparkSQLDiagnosisListResponse
     */
    public function describeSparkSQLDiagnosisListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->maxStartTime) {
            @$query['MaxStartTime'] = $request->maxStartTime;
        }

        if (null !== $request->minStartTime) {
            @$query['MinStartTime'] = $request->minStartTime;
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

        if (null !== $request->statementId) {
            @$query['StatementId'] = $request->statementId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSparkSQLDiagnosisList',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSparkSQLDiagnosisListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the diagnostic information about Spark SQL queries.
     *
     * @param request - DescribeSparkSQLDiagnosisListRequest
     *
     * @returns DescribeSparkSQLDiagnosisListResponse
     *
     * @param DescribeSparkSQLDiagnosisListRequest $request
     *
     * @return DescribeSparkSQLDiagnosisListResponse
     */
    public function describeSparkSQLDiagnosisList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSparkSQLDiagnosisListWithOptions($request, $runtime);
    }

    /**
     * Queries the information about SQL patterns of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster within a time range.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
            'version' => '2021-12-01',
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
     * Queries the information about SQL patterns of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster within a time range.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the storage resource usage of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeStorageResourceUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStorageResourceUsageResponse
     *
     * @param DescribeStorageResourceUsageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeStorageResourceUsageResponse
     */
    public function describeStorageResourceUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStorageResourceUsage',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStorageResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage resource usage of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeStorageResourceUsageRequest
     *
     * @returns DescribeStorageResourceUsageResponse
     *
     * @param DescribeStorageResourceUsageRequest $request
     *
     * @return DescribeStorageResourceUsageResponse
     */
    public function describeStorageResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageResourceUsageWithOptions($request, $runtime);
    }

    /**
     * Queries the number of accesses to a table or all tables in an AnalyticDB for MySQL cluster on a date.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
            'version' => '2021-12-01',
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
     * Queries the number of accesses to a table or all tables in an AnalyticDB for MySQL cluster on a date.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the information about data distribution among shards of a table.
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
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
            'version' => '2021-12-01',
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
     * Queries the information about data distribution among shards of a table.
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

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
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
            'action' => 'DescribeTablePartitionDiagnose',
            'version' => '2021-12-01',
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
     * Queries the table statistics of an AnalyticDB for MySQL cluster.
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

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTableStatistics',
            'version' => '2021-12-01',
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
     * Queries the table statistics of an AnalyticDB for MySQL cluster.
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
     * Queries a list of tables in a database.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTables',
            'version' => '2021-12-01',
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
     * Queries a list of tables in a database.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * Queries available quotas.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeUserQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserQuotaResponse
     *
     * @param DescribeUserQuotaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeUserQuotaResponse
     */
    public function describeUserQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserQuota',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries available quotas.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DescribeUserQuotaRequest
     *
     * @returns DescribeUserQuotaResponse
     *
     * @param DescribeUserQuotaRequest $request
     *
     * @return DescribeUserQuotaResponse
     */
    public function describeUserQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserQuotaWithOptions($request, $runtime);
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
            'version' => '2021-12-01',
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
     * 解绑用户弹性网卡
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachUserENI',
            'version' => '2021-12-01',
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
     * 解绑用户弹性网卡
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
            'version' => '2021-12-01',
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
     * Disables a scaling plan for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DisableElasticPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableElasticPlanResponse
     *
     * @param DisableElasticPlanRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DisableElasticPlanResponse
     */
    public function disableElasticPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->elasticPlanName) {
            @$query['ElasticPlanName'] = $request->elasticPlanName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableElasticPlan',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableElasticPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a scaling plan for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - DisableElasticPlanRequest
     *
     * @returns DisableElasticPlanResponse
     *
     * @param DisableElasticPlanRequest $request
     *
     * @return DisableElasticPlanResponse
     */
    public function disableElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableElasticPlanWithOptions($request, $runtime);
    }

    /**
     * Downloads the diagnostic information about SQL statements that meet a query condition for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
            'version' => '2021-12-01',
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
     * Downloads the diagnostic information about SQL statements that meet a query condition for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Queries the Object Storage Service (OSS) URL of the downloaded certificate authority (CA) certificate that is used to connect to the wide table engine.
     *
     * @param request - DownloadInstanceCACertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadInstanceCACertificateResponse
     *
     * @param DownloadInstanceCACertificateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DownloadInstanceCACertificateResponse
     */
    public function downloadInstanceCACertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadInstanceCACertificate',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadInstanceCACertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Object Storage Service (OSS) URL of the downloaded certificate authority (CA) certificate that is used to connect to the wide table engine.
     *
     * @param request - DownloadInstanceCACertificateRequest
     *
     * @returns DownloadInstanceCACertificateResponse
     *
     * @param DownloadInstanceCACertificateRequest $request
     *
     * @return DownloadInstanceCACertificateResponse
     */
    public function downloadInstanceCACertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadInstanceCACertificateWithOptions($request, $runtime);
    }

    /**
     * Enables the suggestion feature.
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
            'version' => '2021-12-01',
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
     * Enables the suggestion feature.
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
     * Enables a scaling plan for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - EnableElasticPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableElasticPlanResponse
     *
     * @param EnableElasticPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnableElasticPlanResponse
     */
    public function enableElasticPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->elasticPlanName) {
            @$query['ElasticPlanName'] = $request->elasticPlanName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableElasticPlan',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableElasticPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a scaling plan for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - EnableElasticPlanRequest
     *
     * @returns EnableElasticPlanResponse
     *
     * @param EnableElasticPlanRequest $request
     *
     * @return EnableElasticPlanResponse
     */
    public function enableElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableElasticPlanWithOptions($request, $runtime);
    }

    /**
     * Executes part of the code in a Spark job.
     *
     * @param request - ExecuteSparkReplStatementRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteSparkReplStatementResponse
     *
     * @param ExecuteSparkReplStatementRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ExecuteSparkReplStatementResponse
     */
    public function executeSparkReplStatementWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->code) {
            @$body['Code'] = $request->code;
        }

        if (null !== $request->codeType) {
            @$body['CodeType'] = $request->codeType;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteSparkReplStatement',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteSparkReplStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes part of the code in a Spark job.
     *
     * @param request - ExecuteSparkReplStatementRequest
     *
     * @returns ExecuteSparkReplStatementResponse
     *
     * @param ExecuteSparkReplStatementRequest $request
     *
     * @return ExecuteSparkReplStatementResponse
     */
    public function executeSparkReplStatement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeSparkReplStatementWithOptions($request, $runtime);
    }

    /**
     * Executes Spark SQL statements in batches.
     *
     * @param request - ExecuteSparkWarehouseBatchSQLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteSparkWarehouseBatchSQLResponse
     *
     * @param ExecuteSparkWarehouseBatchSQLRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ExecuteSparkWarehouseBatchSQLResponse
     */
    public function executeSparkWarehouseBatchSQLWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agency) {
            @$body['Agency'] = $request->agency;
        }

        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->executeResultLimit) {
            @$body['ExecuteResultLimit'] = $request->executeResultLimit;
        }

        if (null !== $request->executeTimeLimitInSeconds) {
            @$body['ExecuteTimeLimitInSeconds'] = $request->executeTimeLimitInSeconds;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->resourceGroupName) {
            @$body['ResourceGroupName'] = $request->resourceGroupName;
        }

        if (null !== $request->runtimeConfig) {
            @$body['RuntimeConfig'] = $request->runtimeConfig;
        }

        if (null !== $request->schema) {
            @$body['Schema'] = $request->schema;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteSparkWarehouseBatchSQL',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteSparkWarehouseBatchSQLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes Spark SQL statements in batches.
     *
     * @param request - ExecuteSparkWarehouseBatchSQLRequest
     *
     * @returns ExecuteSparkWarehouseBatchSQLResponse
     *
     * @param ExecuteSparkWarehouseBatchSQLRequest $request
     *
     * @return ExecuteSparkWarehouseBatchSQLResponse
     */
    public function executeSparkWarehouseBatchSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeSparkWarehouseBatchSQLWithOptions($request, $runtime);
    }

    /**
     * Queries whether a running SQL engine exists.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @deprecated OpenAPI ExistRunningSQLEngine is deprecated
     *
     * @param request - ExistRunningSQLEngineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExistRunningSQLEngineResponse
     *
     * @param ExistRunningSQLEngineRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExistRunningSQLEngineResponse
     */
    public function existRunningSQLEngineWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->resourceGroupName) {
            @$body['ResourceGroupName'] = $request->resourceGroupName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExistRunningSQLEngine',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExistRunningSQLEngineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries whether a running SQL engine exists.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @deprecated OpenAPI ExistRunningSQLEngine is deprecated
     *
     * @param request - ExistRunningSQLEngineRequest
     *
     * @returns ExistRunningSQLEngineResponse
     *
     * @param ExistRunningSQLEngineRequest $request
     *
     * @return ExistRunningSQLEngineResponse
     */
    public function existRunningSQLEngine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->existRunningSQLEngineWithOptions($request, $runtime);
    }

    /**
     * 获取Spark权限说明,失败时给出配置权限的帮助信息.
     *
     * @param request - GetADBSparkNecessaryRAMPermissionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetADBSparkNecessaryRAMPermissionsResponse
     *
     * @param GetADBSparkNecessaryRAMPermissionsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetADBSparkNecessaryRAMPermissionsResponse
     */
    public function getADBSparkNecessaryRAMPermissionsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetADBSparkNecessaryRAMPermissions',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetADBSparkNecessaryRAMPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Spark权限说明,失败时给出配置权限的帮助信息.
     *
     * @param request - GetADBSparkNecessaryRAMPermissionsRequest
     *
     * @returns GetADBSparkNecessaryRAMPermissionsResponse
     *
     * @param GetADBSparkNecessaryRAMPermissionsRequest $request
     *
     * @return GetADBSparkNecessaryRAMPermissionsResponse
     */
    public function getADBSparkNecessaryRAMPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getADBSparkNecessaryRAMPermissionsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of databases.
     *
     * @param request - GetApsManagedDatabasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApsManagedDatabasesResponse
     *
     * @param GetApsManagedDatabasesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetApsManagedDatabasesResponse
     */
    public function getApsManagedDatabasesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetApsManagedDatabases',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApsManagedDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of databases.
     *
     * @param request - GetApsManagedDatabasesRequest
     *
     * @returns GetApsManagedDatabasesResponse
     *
     * @param GetApsManagedDatabasesRequest $request
     *
     * @return GetApsManagedDatabasesResponse
     */
    public function getApsManagedDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApsManagedDatabasesWithOptions($request, $runtime);
    }

    /**
     * Queries the table creation statement for tables.
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
            'version' => '2021-12-01',
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
     * Queries the information about databases.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - GetDatabaseObjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatabaseObjectsResponse
     *
     * @param GetDatabaseObjectsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDatabaseObjectsResponse
     */
    public function getDatabaseObjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->filterOwner) {
            @$query['FilterOwner'] = $request->filterOwner;
        }

        if (null !== $request->filterSchemaName) {
            @$query['FilterSchemaName'] = $request->filterSchemaName;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDatabaseObjects',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDatabaseObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about databases.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - GetDatabaseObjectsRequest
     *
     * @returns GetDatabaseObjectsResponse
     *
     * @param GetDatabaseObjectsRequest $request
     *
     * @return GetDatabaseObjectsResponse
     */
    public function getDatabaseObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatabaseObjectsWithOptions($request, $runtime);
    }

    /**
     * Queries a lake storage.
     *
     * @param request - GetLakeStorageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLakeStorageResponse
     *
     * @param GetLakeStorageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetLakeStorageResponse
     */
    public function getLakeStorageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->lakeStorageId) {
            @$query['LakeStorageId'] = $request->lakeStorageId;
        }

        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetLakeStorage',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLakeStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a lake storage.
     *
     * @param request - GetLakeStorageRequest
     *
     * @returns GetLakeStorageResponse
     *
     * @param GetLakeStorageRequest $request
     *
     * @return GetLakeStorageResponse
     */
    public function getLakeStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLakeStorageWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the retry log of a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkAppAttemptLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkAppAttemptLogResponse
     *
     * @param GetSparkAppAttemptLogRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSparkAppAttemptLogResponse
     */
    public function getSparkAppAttemptLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $body = [];
        if (null !== $request->attemptId) {
            @$body['AttemptId'] = $request->attemptId;
        }

        if (null !== $request->logLength) {
            @$body['LogLength'] = $request->logLength;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkAppAttemptLog',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkAppAttemptLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the retry log of a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkAppAttemptLogRequest
     *
     * @returns GetSparkAppAttemptLogResponse
     *
     * @param GetSparkAppAttemptLogRequest $request
     *
     * @return GetSparkAppAttemptLogResponse
     */
    public function getSparkAppAttemptLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkAppAttemptLogWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkAppInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkAppInfoResponse
     *
     * @param GetSparkAppInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetSparkAppInfoResponse
     */
    public function getSparkAppInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkAppInfo',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkAppInfoRequest
     *
     * @returns GetSparkAppInfoResponse
     *
     * @param GetSparkAppInfoRequest $request
     *
     * @return GetSparkAppInfoResponse
     */
    public function getSparkAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkAppInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the logs of a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkAppLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkAppLogResponse
     *
     * @param GetSparkAppLogRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSparkAppLogResponse
     */
    public function getSparkAppLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->logLength) {
            @$body['LogLength'] = $request->logLength;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkAppLog',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkAppLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logs of a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkAppLogRequest
     *
     * @returns GetSparkAppLogResponse
     *
     * @param GetSparkAppLogRequest $request
     *
     * @return GetSparkAppLogResponse
     */
    public function getSparkAppLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkAppLogWithOptions($request, $runtime);
    }

    /**
     * Queries the metrics of a Spark application.
     *
     * @remarks
     *   Before you call this operation, you must call the [PreloadSparkAppMetrics](https://help.aliyun.com/document_detail/612447.html) operation to preload the metrics of a Spark application.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkAppMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkAppMetricsResponse
     *
     * @param GetSparkAppMetricsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetSparkAppMetricsResponse
     */
    public function getSparkAppMetricsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkAppMetrics',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkAppMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metrics of a Spark application.
     *
     * @remarks
     *   Before you call this operation, you must call the [PreloadSparkAppMetrics](https://help.aliyun.com/document_detail/612447.html) operation to preload the metrics of a Spark application.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkAppMetricsRequest
     *
     * @returns GetSparkAppMetricsResponse
     *
     * @param GetSparkAppMetricsRequest $request
     *
     * @return GetSparkAppMetricsResponse
     */
    public function getSparkAppMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkAppMetricsWithOptions($request, $runtime);
    }

    /**
     * Queries the status of a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkAppStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkAppStateResponse
     *
     * @param GetSparkAppStateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSparkAppStateResponse
     */
    public function getSparkAppStateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkAppState',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkAppStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkAppStateRequest
     *
     * @returns GetSparkAppStateResponse
     *
     * @param GetSparkAppStateRequest $request
     *
     * @return GetSparkAppStateResponse
     */
    public function getSparkAppState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkAppStateWithOptions($request, $runtime);
    }

    /**
     * Queries the URL of the web UI for a Spark application.
     *
     * @remarks
     *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - GetSparkAppWebUiAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkAppWebUiAddressResponse
     *
     * @param GetSparkAppWebUiAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSparkAppWebUiAddressResponse
     */
    public function getSparkAppWebUiAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkAppWebUiAddress',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkAppWebUiAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the URL of the web UI for a Spark application.
     *
     * @remarks
     *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - GetSparkAppWebUiAddressRequest
     *
     * @returns GetSparkAppWebUiAddressResponse
     *
     * @param GetSparkAppWebUiAddressRequest $request
     *
     * @return GetSparkAppWebUiAddressResponse
     */
    public function getSparkAppWebUiAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkAppWebUiAddressWithOptions($request, $runtime);
    }

    /**
     * Queries the Spark log configuration of an AnalyticDB for MySQL cluster, including the default Spark log path.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkConfigLogPathRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkConfigLogPathResponse
     *
     * @param GetSparkConfigLogPathRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSparkConfigLogPathResponse
     */
    public function getSparkConfigLogPathWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkConfigLogPath',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkConfigLogPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Spark log configuration of an AnalyticDB for MySQL cluster, including the default Spark log path.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkConfigLogPathRequest
     *
     * @returns GetSparkConfigLogPathResponse
     *
     * @param GetSparkConfigLogPathRequest $request
     *
     * @return GetSparkConfigLogPathResponse
     */
    public function getSparkConfigLogPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkConfigLogPathWithOptions($request, $runtime);
    }

    /**
     * Queries the results of a Spark log analysis task.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkLogAnalyzeTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkLogAnalyzeTaskResponse
     *
     * @param GetSparkLogAnalyzeTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetSparkLogAnalyzeTaskResponse
     */
    public function getSparkLogAnalyzeTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkLogAnalyzeTask',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkLogAnalyzeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the results of a Spark log analysis task.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkLogAnalyzeTaskRequest
     *
     * @returns GetSparkLogAnalyzeTaskResponse
     *
     * @param GetSparkLogAnalyzeTaskRequest $request
     *
     * @return GetSparkLogAnalyzeTaskResponse
     */
    public function getSparkLogAnalyzeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkLogAnalyzeTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the status of a Spark session.
     *
     * @param request - GetSparkReplSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkReplSessionResponse
     *
     * @param GetSparkReplSessionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSparkReplSessionResponse
     */
    public function getSparkReplSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkReplSession',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkReplSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of a Spark session.
     *
     * @param request - GetSparkReplSessionRequest
     *
     * @returns GetSparkReplSessionResponse
     *
     * @param GetSparkReplSessionRequest $request
     *
     * @return GetSparkReplSessionResponse
     */
    public function getSparkReplSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkReplSessionWithOptions($request, $runtime);
    }

    /**
     * Queries the execution result of a code block.
     *
     * @param request - GetSparkReplStatementRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkReplStatementResponse
     *
     * @param GetSparkReplStatementRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSparkReplStatementResponse
     */
    public function getSparkReplStatementWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->statementId) {
            @$body['StatementId'] = $request->statementId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkReplStatement',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkReplStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution result of a code block.
     *
     * @param request - GetSparkReplStatementRequest
     *
     * @returns GetSparkReplStatementResponse
     *
     * @param GetSparkReplStatementRequest $request
     *
     * @return GetSparkReplStatementResponse
     */
    public function getSparkReplStatement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkReplStatementWithOptions($request, $runtime);
    }

    /**
     * Queries the state information about the Spark SQL engine.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @deprecated OpenAPI GetSparkSQLEngineState is deprecated
     *
     * @param request - GetSparkSQLEngineStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkSQLEngineStateResponse
     *
     * @param GetSparkSQLEngineStateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetSparkSQLEngineStateResponse
     */
    public function getSparkSQLEngineStateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->resourceGroupName) {
            @$body['ResourceGroupName'] = $request->resourceGroupName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkSQLEngineState',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkSQLEngineStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the state information about the Spark SQL engine.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @deprecated OpenAPI GetSparkSQLEngineState is deprecated
     *
     * @param request - GetSparkSQLEngineStateRequest
     *
     * @returns GetSparkSQLEngineStateResponse
     *
     * @param GetSparkSQLEngineStateRequest $request
     *
     * @return GetSparkSQLEngineStateResponse
     */
    public function getSparkSQLEngineState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkSQLEngineStateWithOptions($request, $runtime);
    }

    /**
     * Queries the content of a Spark application template.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkTemplateFileContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkTemplateFileContentResponse
     *
     * @param GetSparkTemplateFileContentRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetSparkTemplateFileContentResponse
     */
    public function getSparkTemplateFileContentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkTemplateFileContent',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkTemplateFileContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the content of a Spark application template.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkTemplateFileContentRequest
     *
     * @returns GetSparkTemplateFileContentResponse
     *
     * @param GetSparkTemplateFileContentRequest $request
     *
     * @return GetSparkTemplateFileContentResponse
     */
    public function getSparkTemplateFileContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkTemplateFileContentWithOptions($request, $runtime);
    }

    /**
     * Queries the directory structure of Spark applications.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkTemplateFolderTreeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkTemplateFolderTreeResponse
     *
     * @param GetSparkTemplateFolderTreeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetSparkTemplateFolderTreeResponse
     */
    public function getSparkTemplateFolderTreeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkTemplateFolderTree',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkTemplateFolderTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the directory structure of Spark applications.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkTemplateFolderTreeRequest
     *
     * @returns GetSparkTemplateFolderTreeResponse
     *
     * @param GetSparkTemplateFolderTreeRequest $request
     *
     * @return GetSparkTemplateFolderTreeResponse
     */
    public function getSparkTemplateFolderTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkTemplateFolderTreeWithOptions($request, $runtime);
    }

    /**
     * Queries the directory structure of Spark applications.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkTemplateFullTreeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkTemplateFullTreeResponse
     *
     * @param GetSparkTemplateFullTreeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetSparkTemplateFullTreeResponse
     */
    public function getSparkTemplateFullTreeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkTemplateFullTree',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkTemplateFullTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the directory structure of Spark applications.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - GetSparkTemplateFullTreeRequest
     *
     * @returns GetSparkTemplateFullTreeResponse
     *
     * @param GetSparkTemplateFullTreeRequest $request
     *
     * @return GetSparkTemplateFullTreeResponse
     */
    public function getSparkTemplateFullTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkTemplateFullTreeWithOptions($request, $runtime);
    }

    /**
     * Queries the execution result of a Spark SQL statement.
     *
     * @param request - GetSparkWarehouseBatchSQLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSparkWarehouseBatchSQLResponse
     *
     * @param GetSparkWarehouseBatchSQLRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetSparkWarehouseBatchSQLResponse
     */
    public function getSparkWarehouseBatchSQLWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agency) {
            @$body['Agency'] = $request->agency;
        }

        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->queryId) {
            @$body['QueryId'] = $request->queryId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSparkWarehouseBatchSQL',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSparkWarehouseBatchSQLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution result of a Spark SQL statement.
     *
     * @param request - GetSparkWarehouseBatchSQLRequest
     *
     * @returns GetSparkWarehouseBatchSQLResponse
     *
     * @param GetSparkWarehouseBatchSQLRequest $request
     *
     * @return GetSparkWarehouseBatchSQLResponse
     */
    public function getSparkWarehouseBatchSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkWarehouseBatchSQLWithOptions($request, $runtime);
    }

    /**
     * 获取表.
     *
     * @param request - GetTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableResponse
     *
     * @param GetTableRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTableResponse
     */
    public function getTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTable',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取表.
     *
     * @param request - GetTableRequest
     *
     * @returns GetTableResponse
     *
     * @param GetTableRequest $request
     *
     * @return GetTableResponse
     */
    public function getTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableWithOptions($request, $runtime);
    }

    /**
     * Queries the information about columns.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - GetTableColumnsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableColumnsResponse
     *
     * @param GetTableColumnsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetTableColumnsResponse
     */
    public function getTableColumnsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->columnName) {
            @$query['ColumnName'] = $request->columnName;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
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
            'action' => 'GetTableColumns',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTableColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about columns.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - GetTableColumnsRequest
     *
     * @returns GetTableColumnsResponse
     *
     * @param GetTableColumnsRequest $request
     *
     * @return GetTableColumnsResponse
     */
    public function getTableColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableColumnsWithOptions($request, $runtime);
    }

    /**
     * Queries the statement that is used to create a table.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - GetTableDDLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableDDLResponse
     *
     * @param GetTableDDLRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTableDDLResponse
     */
    public function getTableDDLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
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
            'action' => 'GetTableDDL',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTableDDLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statement that is used to create a table.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - GetTableDDLRequest
     *
     * @returns GetTableDDLResponse
     *
     * @param GetTableDDLRequest $request
     *
     * @return GetTableDDLResponse
     */
    public function getTableDDL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableDDLWithOptions($request, $runtime);
    }

    /**
     * 获取table概要信息.
     *
     * @param request - GetTableObjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableObjectsResponse
     *
     * @param GetTableObjectsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetTableObjectsResponse
     */
    public function getTableObjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->filterDescription) {
            @$query['FilterDescription'] = $request->filterDescription;
        }

        if (null !== $request->filterOwner) {
            @$query['FilterOwner'] = $request->filterOwner;
        }

        if (null !== $request->filterTblName) {
            @$query['FilterTblName'] = $request->filterTblName;
        }

        if (null !== $request->filterTblType) {
            @$query['FilterTblType'] = $request->filterTblType;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
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

        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTableObjects',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTableObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取table概要信息.
     *
     * @param request - GetTableObjectsRequest
     *
     * @returns GetTableObjectsResponse
     *
     * @param GetTableObjectsRequest $request
     *
     * @return GetTableObjectsResponse
     */
    public function getTableObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTableObjectsWithOptions($request, $runtime);
    }

    /**
     * Queries the statement that is used to create a view.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - GetViewDDLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetViewDDLResponse
     *
     * @param GetViewDDLRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetViewDDLResponse
     */
    public function getViewDDLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        if (null !== $request->viewName) {
            @$query['ViewName'] = $request->viewName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetViewDDL',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetViewDDLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statement that is used to create a view.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - GetViewDDLRequest
     *
     * @returns GetViewDDLResponse
     *
     * @param GetViewDDLRequest $request
     *
     * @return GetViewDDLResponse
     */
    public function getViewDDL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getViewDDLWithOptions($request, $runtime);
    }

    /**
     * Queries the information about views.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - GetViewObjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetViewObjectsResponse
     *
     * @param GetViewObjectsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetViewObjectsResponse
     */
    public function getViewObjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->filterOwner) {
            @$query['FilterOwner'] = $request->filterOwner;
        }

        if (null !== $request->filterViewName) {
            @$query['FilterViewName'] = $request->filterViewName;
        }

        if (null !== $request->filterViewType) {
            @$query['FilterViewType'] = $request->filterViewType;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
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

        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        if (null !== $request->showMvBaseTable) {
            @$query['ShowMvBaseTable'] = $request->showMvBaseTable;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetViewObjects',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetViewObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about views.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *
     * @param request - GetViewObjectsRequest
     *
     * @returns GetViewObjectsResponse
     *
     * @param GetViewObjectsRequest $request
     *
     * @return GetViewObjectsResponse
     */
    public function getViewObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getViewObjectsWithOptions($request, $runtime);
    }

    /**
     * Grants permissions to the service account of an AnalyticDB for MySQL cluster.
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
            'version' => '2021-12-01',
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
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'KillProcess',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
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
     * Terminates a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - KillSparkAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KillSparkAppResponse
     *
     * @param KillSparkAppRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return KillSparkAppResponse
     */
    public function killSparkAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'KillSparkApp',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return KillSparkAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminates a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - KillSparkAppRequest
     *
     * @returns KillSparkAppResponse
     *
     * @param KillSparkAppRequest $request
     *
     * @return KillSparkAppResponse
     */
    public function killSparkApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killSparkAppWithOptions($request, $runtime);
    }

    /**
     * Terminates a Spark log analysis task and queries the information about the analysis task.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - KillSparkLogAnalyzeTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KillSparkLogAnalyzeTaskResponse
     *
     * @param KillSparkLogAnalyzeTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return KillSparkLogAnalyzeTaskResponse
     */
    public function killSparkLogAnalyzeTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'KillSparkLogAnalyzeTask',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return KillSparkLogAnalyzeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminates a Spark log analysis task and queries the information about the analysis task.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - KillSparkLogAnalyzeTaskRequest
     *
     * @returns KillSparkLogAnalyzeTaskResponse
     *
     * @param KillSparkLogAnalyzeTaskRequest $request
     *
     * @return KillSparkLogAnalyzeTaskResponse
     */
    public function killSparkLogAnalyzeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killSparkLogAnalyzeTaskWithOptions($request, $runtime);
    }

    /**
     * Shuts down a Spark SQL engine.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @deprecated OpenAPI KillSparkSQLEngine is deprecated
     *
     * @param request - KillSparkSQLEngineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KillSparkSQLEngineResponse
     *
     * @param KillSparkSQLEngineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return KillSparkSQLEngineResponse
     */
    public function killSparkSQLEngineWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->resourceGroupName) {
            @$body['ResourceGroupName'] = $request->resourceGroupName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'KillSparkSQLEngine',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return KillSparkSQLEngineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Shuts down a Spark SQL engine.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @deprecated OpenAPI KillSparkSQLEngine is deprecated
     *
     * @param request - KillSparkSQLEngineRequest
     *
     * @returns KillSparkSQLEngineResponse
     *
     * @param KillSparkSQLEngineRequest $request
     *
     * @return KillSparkSQLEngineResponse
     */
    public function killSparkSQLEngine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killSparkSQLEngineWithOptions($request, $runtime);
    }

    /**
     * Queries a list of lifecycle management policies of an AnalyticDB for MySQL cluster.
     *
     * @param request - ListApsLifecycleStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApsLifecycleStrategyResponse
     *
     * @param ListApsLifecycleStrategyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListApsLifecycleStrategyResponse
     */
    public function listApsLifecycleStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListApsLifecycleStrategy',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApsLifecycleStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of lifecycle management policies of an AnalyticDB for MySQL cluster.
     *
     * @param request - ListApsLifecycleStrategyRequest
     *
     * @returns ListApsLifecycleStrategyResponse
     *
     * @param ListApsLifecycleStrategyRequest $request
     *
     * @return ListApsLifecycleStrategyResponse
     */
    public function listApsLifecycleStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApsLifecycleStrategyWithOptions($request, $runtime);
    }

    /**
     * Queries a list of lake storage optimization policies for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - ListApsOptimizationStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApsOptimizationStrategyResponse
     *
     * @param ListApsOptimizationStrategyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListApsOptimizationStrategyResponse
     */
    public function listApsOptimizationStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListApsOptimizationStrategy',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApsOptimizationStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of lake storage optimization policies for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - ListApsOptimizationStrategyRequest
     *
     * @returns ListApsOptimizationStrategyResponse
     *
     * @param ListApsOptimizationStrategyRequest $request
     *
     * @return ListApsOptimizationStrategyResponse
     */
    public function listApsOptimizationStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApsOptimizationStrategyWithOptions($request, $runtime);
    }

    /**
     * Queries a list of optimization jobs executed based on a lifecycle management policy. The system runs optimization jobs on a regular basis based on lifecycle management policies.
     *
     * @param request - ListApsOptimizationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApsOptimizationTasksResponse
     *
     * @param ListApsOptimizationTasksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListApsOptimizationTasksResponse
     */
    public function listApsOptimizationTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->strategyType) {
            @$body['StrategyType'] = $request->strategyType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListApsOptimizationTasks',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApsOptimizationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of optimization jobs executed based on a lifecycle management policy. The system runs optimization jobs on a regular basis based on lifecycle management policies.
     *
     * @param request - ListApsOptimizationTasksRequest
     *
     * @returns ListApsOptimizationTasksResponse
     *
     * @param ListApsOptimizationTasksRequest $request
     *
     * @return ListApsOptimizationTasksResponse
     */
    public function listApsOptimizationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApsOptimizationTasksWithOptions($request, $runtime);
    }

    /**
     * Queries a list of lake storages.
     *
     * @param request - ListLakeStoragesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLakeStoragesResponse
     *
     * @param ListLakeStoragesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListLakeStoragesResponse
     */
    public function listLakeStoragesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLakeStorages',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLakeStoragesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of lake storages.
     *
     * @param request - ListLakeStoragesRequest
     *
     * @returns ListLakeStoragesResponse
     *
     * @param ListLakeStoragesRequest $request
     *
     * @return ListLakeStoragesResponse
     */
    public function listLakeStorages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLakeStoragesWithOptions($request, $runtime);
    }

    /**
     * Queries the execution records of result set export jobs of a Resource Access Management (RAM) user.
     *
     * @param tmpReq - ListResultExportJobHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResultExportJobHistoryResponse
     *
     * @param ListResultExportJobHistoryRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return ListResultExportJobHistoryResponse
     */
    public function listResultExportJobHistoryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListResultExportJobHistoryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->order) {
            $request->orderShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->order, 'Order', 'json');
        }

        if (null !== $tmpReq->statusList) {
            $request->statusListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'StatusList', 'json');
        }

        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->databaseUser) {
            @$body['DatabaseUser'] = $request->databaseUser;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->orderShrink) {
            @$body['Order'] = $request->orderShrink;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroup) {
            @$body['ResourceGroup'] = $request->resourceGroup;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->statusListShrink) {
            @$body['StatusList'] = $request->statusListShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListResultExportJobHistory',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResultExportJobHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution records of result set export jobs of a Resource Access Management (RAM) user.
     *
     * @param request - ListResultExportJobHistoryRequest
     *
     * @returns ListResultExportJobHistoryResponse
     *
     * @param ListResultExportJobHistoryRequest $request
     *
     * @return ListResultExportJobHistoryResponse
     */
    public function listResultExportJobHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResultExportJobHistoryWithOptions($request, $runtime);
    }

    /**
     * Queries the information about retry attempts of a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - ListSparkAppAttemptsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSparkAppAttemptsResponse
     *
     * @param ListSparkAppAttemptsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSparkAppAttemptsResponse
     */
    public function listSparkAppAttemptsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSparkAppAttempts',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSparkAppAttemptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about retry attempts of a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - ListSparkAppAttemptsRequest
     *
     * @returns ListSparkAppAttemptsResponse
     *
     * @param ListSparkAppAttemptsRequest $request
     *
     * @return ListSparkAppAttemptsResponse
     */
    public function listSparkAppAttempts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSparkAppAttemptsWithOptions($request, $runtime);
    }

    /**
     * Queries the Spark applications that run on an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @param request - ListSparkAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSparkAppsResponse
     *
     * @param ListSparkAppsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSparkAppsResponse
     */
    public function listSparkAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSparkApps',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSparkAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Spark applications that run on an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @param request - ListSparkAppsRequest
     *
     * @returns ListSparkAppsResponse
     *
     * @param ListSparkAppsRequest $request
     *
     * @return ListSparkAppsResponse
     */
    public function listSparkApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSparkAppsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of Spark log analysis tasks.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - ListSparkLogAnalyzeTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSparkLogAnalyzeTasksResponse
     *
     * @param ListSparkLogAnalyzeTasksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListSparkLogAnalyzeTasksResponse
     */
    public function listSparkLogAnalyzeTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSparkLogAnalyzeTasks',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSparkLogAnalyzeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Spark log analysis tasks.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - ListSparkLogAnalyzeTasksRequest
     *
     * @returns ListSparkLogAnalyzeTasksResponse
     *
     * @param ListSparkLogAnalyzeTasksRequest $request
     *
     * @return ListSparkLogAnalyzeTasksResponse
     */
    public function listSparkLogAnalyzeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSparkLogAnalyzeTasksWithOptions($request, $runtime);
    }

    /**
     * Queries a list of Spark template file IDs for AnalyticDB for MySQL clusters.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - ListSparkTemplateFileIdsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSparkTemplateFileIdsResponse
     *
     * @param ListSparkTemplateFileIdsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListSparkTemplateFileIdsResponse
     */
    public function listSparkTemplateFileIdsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSparkTemplateFileIds',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSparkTemplateFileIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Spark template file IDs for AnalyticDB for MySQL clusters.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - ListSparkTemplateFileIdsRequest
     *
     * @returns ListSparkTemplateFileIdsResponse
     *
     * @param ListSparkTemplateFileIdsRequest $request
     *
     * @return ListSparkTemplateFileIdsResponse
     */
    public function listSparkTemplateFileIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSparkTemplateFileIdsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of Spark SQL statements.
     *
     * @param request - ListSparkWarehouseBatchSQLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSparkWarehouseBatchSQLResponse
     *
     * @param ListSparkWarehouseBatchSQLRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListSparkWarehouseBatchSQLResponse
     */
    public function listSparkWarehouseBatchSQLWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupName) {
            @$body['ResourceGroupName'] = $request->resourceGroupName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSparkWarehouseBatchSQL',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSparkWarehouseBatchSQLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Spark SQL statements.
     *
     * @param request - ListSparkWarehouseBatchSQLRequest
     *
     * @returns ListSparkWarehouseBatchSQLResponse
     *
     * @param ListSparkWarehouseBatchSQLRequest $request
     *
     * @return ListSparkWarehouseBatchSQLResponse
     */
    public function listSparkWarehouseBatchSQL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSparkWarehouseBatchSQLWithOptions($request, $runtime);
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
            'version' => '2021-12-01',
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
     * Loads a built-in dataset.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - LoadSampleDataSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LoadSampleDataSetResponse
     *
     * @param LoadSampleDataSetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return LoadSampleDataSetResponse
     */
    public function loadSampleDataSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LoadSampleDataSet',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LoadSampleDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Loads a built-in dataset.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - LoadSampleDataSetRequest
     *
     * @returns LoadSampleDataSetResponse
     *
     * @param LoadSampleDataSetRequest $request
     *
     * @return LoadSampleDataSetResponse
     */
    public function loadSampleDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loadSampleDataSetWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a database account for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccountDescription',
            'version' => '2021-12-01',
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
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Modifies the permissions of a database account.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param tmpReq - ModifyAccountPrivilegesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccountPrivilegesResponse
     *
     * @param ModifyAccountPrivilegesRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyAccountPrivilegesResponse
     */
    public function modifyAccountPrivilegesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAccountPrivilegesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->accountPrivileges) {
            $request->accountPrivilegesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->accountPrivileges, 'AccountPrivileges', 'json');
        }

        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPrivilegesShrink) {
            @$query['AccountPrivileges'] = $request->accountPrivilegesShrink;
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
            'action' => 'ModifyAccountPrivileges',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAccountPrivilegesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the permissions of a database account.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - ModifyAccountPrivilegesRequest
     *
     * @returns ModifyAccountPrivilegesResponse
     *
     * @param ModifyAccountPrivilegesRequest $request
     *
     * @return ModifyAccountPrivilegesResponse
     */
    public function modifyAccountPrivileges($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountPrivilegesWithOptions($request, $runtime);
    }

    /**
     * Modifies an AnalyticDB Pipeline Service (APS) data source.
     *
     * @remarks
     * ### [](#)
     * *   You can call this operation only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     * *   You cannot modify the number of nodes for the USER_DEFAULT resource group.
     *
     * @param tmpReq - ModifyApsDatasoureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApsDatasoureResponse
     *
     * @param ModifyApsDatasoureRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyApsDatasoureResponse
     */
    public function modifyApsDatasoureWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyApsDatasoureShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->kafkaInfo) {
            $request->kafkaInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->kafkaInfo, 'KafkaInfo', 'json');
        }

        if (null !== $tmpReq->lakehouseId) {
            $request->lakehouseIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->lakehouseId, 'LakehouseId', 'json');
        }

        if (null !== $tmpReq->polarDBMysqlInfo) {
            $request->polarDBMysqlInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->polarDBMysqlInfo, 'PolarDBMysqlInfo', 'json');
        }

        if (null !== $tmpReq->rdsMysqlInfo) {
            $request->rdsMysqlInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rdsMysqlInfo, 'RdsMysqlInfo', 'json');
        }

        if (null !== $tmpReq->slsInfo) {
            $request->slsInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->slsInfo, 'SlsInfo', 'json');
        }

        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->datasourceDescription) {
            @$body['DatasourceDescription'] = $request->datasourceDescription;
        }

        if (null !== $request->datasourceId) {
            @$body['DatasourceId'] = $request->datasourceId;
        }

        if (null !== $request->datasourceName) {
            @$body['DatasourceName'] = $request->datasourceName;
        }

        if (null !== $request->kafkaInfoShrink) {
            @$body['KafkaInfo'] = $request->kafkaInfoShrink;
        }

        if (null !== $request->lakehouseIdShrink) {
            @$body['LakehouseId'] = $request->lakehouseIdShrink;
        }

        if (null !== $request->polarDBMysqlInfoShrink) {
            @$body['PolarDBMysqlInfo'] = $request->polarDBMysqlInfoShrink;
        }

        if (null !== $request->rdsMysqlInfoShrink) {
            @$body['RdsMysqlInfo'] = $request->rdsMysqlInfoShrink;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->slsInfoShrink) {
            @$body['SlsInfo'] = $request->slsInfoShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyApsDatasoure',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApsDatasoureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an AnalyticDB Pipeline Service (APS) data source.
     *
     * @remarks
     * ### [](#)
     * *   You can call this operation only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     * *   You cannot modify the number of nodes for the USER_DEFAULT resource group.
     *
     * @param request - ModifyApsDatasoureRequest
     *
     * @returns ModifyApsDatasoureResponse
     *
     * @param ModifyApsDatasoureRequest $request
     *
     * @return ModifyApsDatasoureResponse
     */
    public function modifyApsDatasoure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApsDatasoureWithOptions($request, $runtime);
    }

    /**
     * Modifies an AnalyticDB Pipeline Service (APS) job.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - ModifyApsJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApsJobResponse
     *
     * @param ModifyApsJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyApsJobResponse
     */
    public function modifyApsJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apsJobId) {
            @$body['ApsJobId'] = $request->apsJobId;
        }

        if (null !== $request->dbList) {
            @$body['DbList'] = $request->dbList;
        }

        if (null !== $request->partitionList) {
            @$body['PartitionList'] = $request->partitionList;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyApsJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an AnalyticDB Pipeline Service (APS) job.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - ModifyApsJobRequest
     *
     * @returns ModifyApsJobResponse
     *
     * @param ModifyApsJobRequest $request
     *
     * @return ModifyApsJobResponse
     */
    public function modifyApsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApsJobWithOptions($request, $runtime);
    }

    /**
     * Modifies an AnalyticDB Pipeline Service (APS) job from Simple Log Service (SLS) to an AnalyticDB for MySQL Data Warehouse Edition cluster.
     *
     * @param tmpReq - ModifyApsSlsADBJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApsSlsADBJobResponse
     *
     * @param ModifyApsSlsADBJobRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyApsSlsADBJobResponse
     */
    public function modifyApsSlsADBJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyApsSlsADBJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->columns) {
            $request->columnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->columns, 'Columns', 'json');
        }

        $body = [];
        if (null !== $request->columnsShrink) {
            @$body['Columns'] = $request->columnsShrink;
        }

        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->dirtyDataProcessPattern) {
            @$body['DirtyDataProcessPattern'] = $request->dirtyDataProcessPattern;
        }

        if (null !== $request->exactlyOnce) {
            @$body['ExactlyOnce'] = $request->exactlyOnce;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->startingOffsets) {
            @$body['StartingOffsets'] = $request->startingOffsets;
        }

        if (null !== $request->tableName) {
            @$body['TableName'] = $request->tableName;
        }

        if (null !== $request->unixTimestampConvert) {
            @$body['UnixTimestampConvert'] = $request->unixTimestampConvert;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->workloadId) {
            @$body['WorkloadId'] = $request->workloadId;
        }

        if (null !== $request->workloadName) {
            @$body['WorkloadName'] = $request->workloadName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyApsSlsADBJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApsSlsADBJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an AnalyticDB Pipeline Service (APS) job from Simple Log Service (SLS) to an AnalyticDB for MySQL Data Warehouse Edition cluster.
     *
     * @param request - ModifyApsSlsADBJobRequest
     *
     * @returns ModifyApsSlsADBJobResponse
     *
     * @param ModifyApsSlsADBJobRequest $request
     *
     * @return ModifyApsSlsADBJobResponse
     */
    public function modifyApsSlsADBJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApsSlsADBJobWithOptions($request, $runtime);
    }

    /**
     * Modifies the AnalyticDB Pipeline Service (APS) workload name.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - ModifyApsWorkloadNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApsWorkloadNameResponse
     *
     * @param ModifyApsWorkloadNameRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyApsWorkloadNameResponse
     */
    public function modifyApsWorkloadNameWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->workloadId) {
            @$body['WorkloadId'] = $request->workloadId;
        }

        if (null !== $request->workloadName) {
            @$body['WorkloadName'] = $request->workloadName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyApsWorkloadName',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApsWorkloadNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the AnalyticDB Pipeline Service (APS) workload name.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - ModifyApsWorkloadNameRequest
     *
     * @returns ModifyApsWorkloadNameResponse
     *
     * @param ModifyApsWorkloadNameRequest $request
     *
     * @return ModifyApsWorkloadNameResponse
     */
    public function modifyApsWorkloadName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApsWorkloadNameWithOptions($request, $runtime);
    }

    /**
     * Modifies the SQL audit settings of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
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
            'version' => '2021-12-01',
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
     * Modifies the SQL audit settings of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Modifies the backup policy of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
            'version' => '2021-12-01',
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
     * Modifies the backup policy of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Enables the wide table engine feature for an AnalyticDB for MySQL cluster or modifies the disk cache size of the wide table engine of an AnalyticDB for MySQL cluster for which you enabled the wide table engine feature.
     *
     * @param request - ModifyClickhouseEngineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClickhouseEngineResponse
     *
     * @param ModifyClickhouseEngineRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyClickhouseEngineResponse
     */
    public function modifyClickhouseEngineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cacheSize) {
            @$query['CacheSize'] = $request->cacheSize;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyClickhouseEngine',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyClickhouseEngineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the wide table engine feature for an AnalyticDB for MySQL cluster or modifies the disk cache size of the wide table engine of an AnalyticDB for MySQL cluster for which you enabled the wide table engine feature.
     *
     * @param request - ModifyClickhouseEngineRequest
     *
     * @returns ModifyClickhouseEngineResponse
     *
     * @param ModifyClickhouseEngineRequest $request
     *
     * @return ModifyClickhouseEngineResponse
     */
    public function modifyClickhouseEngine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClickhouseEngineWithOptions($request, $runtime);
    }

    /**
     * Modifies the IP address whitelist of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *
     * @param request - ModifyClusterAccessWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterAccessWhiteListResponse
     *
     * @param ModifyClusterAccessWhiteListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyClusterAccessWhiteListResponse
     */
    public function modifyClusterAccessWhiteListWithOptions($request, $runtime)
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

        if (null !== $request->securityIps) {
            @$query['SecurityIps'] = $request->securityIps;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterAccessWhiteList',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyClusterAccessWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the IP address whitelist of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
     *
     * @param request - ModifyClusterAccessWhiteListRequest
     *
     * @returns ModifyClusterAccessWhiteListResponse
     *
     * @param ModifyClusterAccessWhiteListRequest $request
     *
     * @return ModifyClusterAccessWhiteListResponse
     */
    public function modifyClusterAccessWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterAccessWhiteListWithOptions($request, $runtime);
    }

    /**
     * Modifies the public endpoint of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterConnectionString',
            'version' => '2021-12-01',
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
     * Modifies the public endpoint of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Modifies the status of the remote build feature in the query acceleration configuration of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyCompactionServiceSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCompactionServiceSwitchResponse
     *
     * @param ModifyCompactionServiceSwitchRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyCompactionServiceSwitchResponse
     */
    public function modifyCompactionServiceSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->enableCompactionService) {
            @$query['EnableCompactionService'] = $request->enableCompactionService;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCompactionServiceSwitch',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCompactionServiceSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the status of the remote build feature in the query acceleration configuration of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyCompactionServiceSwitchRequest
     *
     * @returns ModifyCompactionServiceSwitchResponse
     *
     * @param ModifyCompactionServiceSwitchRequest $request
     *
     * @return ModifyCompactionServiceSwitchResponse
     */
    public function modifyCompactionServiceSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCompactionServiceSwitchWithOptions($request, $runtime);
    }

    /**
     * Changes the configurations of an AnalyticDB for MySQL Data Lakehouse Edition cluster.
     *
     * @remarks
     * ### [](#)
     * *   During a scaling event, you are not allowed to execute the `SUBMIT JOB` statement to submit asynchronous jobs. If your business requires asynchronous jobs, perform scaling during appropriate periods.
     * *   When you scale a cluster, data in the cluster is migrated for redistribution. The amount of time that is required to migrate data is proportional to the data volume. During a scaling event, the services provided by the cluster are not interrupted. When you downgrade cluster specifications, data migration may require up to dozens of hours to complete. Proceed with caution especially if your cluster contains a large amount of data.
     * *   If the cluster has a built-in dataset loaded, make sure that the cluster has reserved storage resources of at least 24 AnalyticDB compute units (ACUs). Otherwise, the built-in dataset cannot be used.
     * *   When the scaling process is about to end, transient connections may occur. We recommend that you scale your cluster during off-peak hours or make sure that your application is configured to automatically reconnect to your cluster.
     * *   You can change an AnalyticDB for MySQL cluster from Data Warehouse Edition to Data Lakehouse Edition, but not the other way around. For more information, see Change a cluster from Data Warehouse Edition to Data Lakehouse Edition.
     * *   For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->enableDefaultResourcePool) {
            @$query['EnableDefaultResourcePool'] = $request->enableDefaultResourcePool;
        }

        if (null !== $request->productForm) {
            @$query['ProductForm'] = $request->productForm;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->reservedNodeCount) {
            @$query['ReservedNodeCount'] = $request->reservedNodeCount;
        }

        if (null !== $request->reservedNodeSize) {
            @$query['ReservedNodeSize'] = $request->reservedNodeSize;
        }

        if (null !== $request->storageResource) {
            @$query['StorageResource'] = $request->storageResource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBCluster',
            'version' => '2021-12-01',
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
     * Changes the configurations of an AnalyticDB for MySQL Data Lakehouse Edition cluster.
     *
     * @remarks
     * ### [](#)
     * *   During a scaling event, you are not allowed to execute the `SUBMIT JOB` statement to submit asynchronous jobs. If your business requires asynchronous jobs, perform scaling during appropriate periods.
     * *   When you scale a cluster, data in the cluster is migrated for redistribution. The amount of time that is required to migrate data is proportional to the data volume. During a scaling event, the services provided by the cluster are not interrupted. When you downgrade cluster specifications, data migration may require up to dozens of hours to complete. Proceed with caution especially if your cluster contains a large amount of data.
     * *   If the cluster has a built-in dataset loaded, make sure that the cluster has reserved storage resources of at least 24 AnalyticDB compute units (ACUs). Otherwise, the built-in dataset cannot be used.
     * *   When the scaling process is about to end, transient connections may occur. We recommend that you scale your cluster during off-peak hours or make sure that your application is configured to automatically reconnect to your cluster.
     * *   You can change an AnalyticDB for MySQL cluster from Data Warehouse Edition to Data Lakehouse Edition, but not the other way around. For more information, see Change a cluster from Data Warehouse Edition to Data Lakehouse Edition.
     * *   For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Modifies the description of an AnalyticDB for MySQL cluster to facilitate the maintenance and management of the cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterDescription',
            'version' => '2021-12-01',
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
     * Modifies the description of an AnalyticDB for MySQL cluster to facilitate the maintenance and management of the cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Modifies the maintenance window of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterMaintainTime',
            'version' => '2021-12-01',
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
     * Modifies the maintenance window of an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Changes the resource group to which an AnalyticDB for MySQL cluster belongs.
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
            'version' => '2021-12-01',
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
     * Changes the resource group to which an AnalyticDB for MySQL cluster belongs.
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
     * 配置SSL.
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterSSL',
            'version' => '2021-12-01',
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
     * 配置SSL.
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
        if (null !== $request->connectString) {
            @$query['ConnectString'] = $request->connectString;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
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
            'version' => '2021-12-01',
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
     * Modifies the amount of reserved computing resources for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
        if (null !== $tmpReq->engineParams) {
            $request->engineParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->engineParams, 'EngineParams', 'json');
        }

        if (null !== $tmpReq->rayConfig) {
            $request->rayConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rayConfig, 'RayConfig', 'json');
        }

        if (null !== $tmpReq->rules) {
            $request->rulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }

        $query = [];
        if (null !== $request->autoStopInterval) {
            @$query['AutoStopInterval'] = $request->autoStopInterval;
        }

        if (null !== $request->clusterMode) {
            @$query['ClusterMode'] = $request->clusterMode;
        }

        if (null !== $request->clusterSizeResource) {
            @$query['ClusterSizeResource'] = $request->clusterSizeResource;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->enableSpot) {
            @$query['EnableSpot'] = $request->enableSpot;
        }

        if (null !== $request->engineParamsShrink) {
            @$query['EngineParams'] = $request->engineParamsShrink;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
        }

        if (null !== $request->maxClusterCount) {
            @$query['MaxClusterCount'] = $request->maxClusterCount;
        }

        if (null !== $request->maxComputeResource) {
            @$query['MaxComputeResource'] = $request->maxComputeResource;
        }

        if (null !== $request->maxGpuQuantity) {
            @$query['MaxGpuQuantity'] = $request->maxGpuQuantity;
        }

        if (null !== $request->minClusterCount) {
            @$query['MinClusterCount'] = $request->minClusterCount;
        }

        if (null !== $request->minComputeResource) {
            @$query['MinComputeResource'] = $request->minComputeResource;
        }

        if (null !== $request->minGpuQuantity) {
            @$query['MinGpuQuantity'] = $request->minGpuQuantity;
        }

        if (null !== $request->rayConfigShrink) {
            @$query['RayConfig'] = $request->rayConfigShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->rulesShrink) {
            @$query['Rules'] = $request->rulesShrink;
        }

        if (null !== $request->specName) {
            @$query['SpecName'] = $request->specName;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->targetResourceGroupName) {
            @$query['TargetResourceGroupName'] = $request->targetResourceGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBResourceGroup',
            'version' => '2021-12-01',
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
     * Modifies the amount of reserved computing resources for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Modifies a scaling plan for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
        if (null !== $request->cronExpression) {
            @$query['CronExpression'] = $request->cronExpression;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->elasticPlanName) {
            @$query['ElasticPlanName'] = $request->elasticPlanName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->targetSize) {
            @$query['TargetSize'] = $request->targetSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyElasticPlan',
            'version' => '2021-12-01',
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
     * Modifies a scaling plan for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
     * Modifies the disk cache size in the query acceleration configuration of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyEssdCacheConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyEssdCacheConfigResponse
     *
     * @param ModifyEssdCacheConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyEssdCacheConfigResponse
     */
    public function modifyEssdCacheConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->enableEssdCache) {
            @$query['EnableEssdCache'] = $request->enableEssdCache;
        }

        if (null !== $request->essdCacheSize) {
            @$query['EssdCacheSize'] = $request->essdCacheSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyEssdCacheConfig',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyEssdCacheConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the disk cache size in the query acceleration configuration of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyEssdCacheConfigRequest
     *
     * @returns ModifyEssdCacheConfigResponse
     *
     * @param ModifyEssdCacheConfigRequest $request
     *
     * @return ModifyEssdCacheConfigResponse
     */
    public function modifyEssdCacheConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEssdCacheConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the lake cache size of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyLakeCacheSizeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLakeCacheSizeResponse
     *
     * @param ModifyLakeCacheSizeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyLakeCacheSizeResponse
     */
    public function modifyLakeCacheSizeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->capacity) {
            @$query['Capacity'] = $request->capacity;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->enableLakeCache) {
            @$query['EnableLakeCache'] = $request->enableLakeCache;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLakeCacheSize',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLakeCacheSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the lake cache size of an AnalyticDB for MySQL cluster.
     *
     * @param request - ModifyLakeCacheSizeRequest
     *
     * @returns ModifyLakeCacheSizeResponse
     *
     * @param ModifyLakeCacheSizeRequest $request
     *
     * @return ModifyLakeCacheSizeResponse
     */
    public function modifyLakeCacheSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLakeCacheSizeWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about a custom monitoring view.
     *
     * @param tmpReq - ModifyPerformanceViewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPerformanceViewResponse
     *
     * @param ModifyPerformanceViewRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyPerformanceViewResponse
     */
    public function modifyPerformanceViewWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyPerformanceViewShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->viewDetail) {
            $request->viewDetailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->viewDetail, 'ViewDetail', 'json');
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->viewDetailShrink) {
            @$query['ViewDetail'] = $request->viewDetailShrink;
        }

        if (null !== $request->viewName) {
            @$query['ViewName'] = $request->viewName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPerformanceView',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPerformanceViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information about a custom monitoring view.
     *
     * @param request - ModifyPerformanceViewRequest
     *
     * @returns ModifyPerformanceViewResponse
     *
     * @param ModifyPerformanceViewRequest $request
     *
     * @return ModifyPerformanceViewResponse
     */
    public function modifyPerformanceView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPerformanceViewWithOptions($request, $runtime);
    }

    /**
     * Modifies the vSwitches that are connected to elastic network interfaces (ENIs).
     *
     * @param request - ModifyUserEniVswitchOptionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUserEniVswitchOptionsResponse
     *
     * @param ModifyUserEniVswitchOptionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyUserEniVswitchOptionsResponse
     */
    public function modifyUserEniVswitchOptionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbClusterId) {
            @$query['DbClusterId'] = $request->dbClusterId;
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

        $body = [];
        if (null !== $request->vSwitchOptions) {
            @$body['VSwitchOptions'] = $request->vSwitchOptions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyUserEniVswitchOptions',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUserEniVswitchOptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the vSwitches that are connected to elastic network interfaces (ENIs).
     *
     * @param request - ModifyUserEniVswitchOptionsRequest
     *
     * @returns ModifyUserEniVswitchOptionsResponse
     *
     * @param ModifyUserEniVswitchOptionsRequest $request
     *
     * @return ModifyUserEniVswitchOptionsResponse
     */
    public function modifyUserEniVswitchOptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserEniVswitchOptionsWithOptions($request, $runtime);
    }

    /**
     * Preloads metrics for a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - PreloadSparkAppMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreloadSparkAppMetricsResponse
     *
     * @param PreloadSparkAppMetricsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PreloadSparkAppMetricsResponse
     */
    public function preloadSparkAppMetricsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PreloadSparkAppMetrics',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PreloadSparkAppMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Preloads metrics for a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - PreloadSparkAppMetricsRequest
     *
     * @returns PreloadSparkAppMetricsResponse
     *
     * @param PreloadSparkAppMetricsRequest $request
     *
     * @return PreloadSparkAppMetricsResponse
     */
    public function preloadSparkAppMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preloadSparkAppMetricsWithOptions($request, $runtime);
    }

    /**
     * Releases the public endpoint of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseClusterPublicConnection',
            'version' => '2021-12-01',
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
     * Releases the public endpoint of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
        if (null !== $request->accountDescription) {
            @$query['AccountDescription'] = $request->accountDescription;
        }

        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetAccountPassword',
            'version' => '2021-12-01',
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
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Revokes permissions from the service account of an AnalyticDB for MySQL cluster.
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
            'version' => '2021-12-01',
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
     * Revokes permissions from the service account of an AnalyticDB for MySQL cluster.
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
     * Modifies the Spark log configuration.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - SetSparkAppLogRootPathRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetSparkAppLogRootPathResponse
     *
     * @param SetSparkAppLogRootPathRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetSparkAppLogRootPathResponse
     */
    public function setSparkAppLogRootPathWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ossLogPath) {
            @$body['OssLogPath'] = $request->ossLogPath;
        }

        if (null !== $request->useDefaultOss) {
            @$body['UseDefaultOss'] = $request->useDefaultOss;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetSparkAppLogRootPath',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetSparkAppLogRootPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the Spark log configuration.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - SetSparkAppLogRootPathRequest
     *
     * @returns SetSparkAppLogRootPathResponse
     *
     * @param SetSparkAppLogRootPathRequest $request
     *
     * @return SetSparkAppLogRootPathResponse
     */
    public function setSparkAppLogRootPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSparkAppLogRootPathWithOptions($request, $runtime);
    }

    /**
     * Starts an AnalyticDB Pipeline Service (APS) job.
     *
     * @param request - StartApsJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartApsJobResponse
     *
     * @param StartApsJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartApsJobResponse
     */
    public function startApsJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apsJobId) {
            @$body['ApsJobId'] = $request->apsJobId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartApsJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartApsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts an AnalyticDB Pipeline Service (APS) job.
     *
     * @param request - StartApsJobRequest
     *
     * @returns StartApsJobResponse
     *
     * @param StartApsJobRequest $request
     *
     * @return StartApsJobResponse
     */
    public function startApsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startApsJobWithOptions($request, $runtime);
    }

    /**
     * Starts a Spark session.
     *
     * @param request - StartSparkReplSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartSparkReplSessionResponse
     *
     * @param StartSparkReplSessionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return StartSparkReplSessionResponse
     */
    public function startSparkReplSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->resourceGroupName) {
            @$body['ResourceGroupName'] = $request->resourceGroupName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartSparkReplSession',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartSparkReplSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a Spark session.
     *
     * @param request - StartSparkReplSessionRequest
     *
     * @returns StartSparkReplSessionResponse
     *
     * @param StartSparkReplSessionRequest $request
     *
     * @return StartSparkReplSessionResponse
     */
    public function startSparkReplSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSparkReplSessionWithOptions($request, $runtime);
    }

    /**
     * Starts the Spark SQL engine.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @deprecated OpenAPI StartSparkSQLEngine is deprecated
     *
     * @param request - StartSparkSQLEngineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartSparkSQLEngineResponse
     *
     * @param StartSparkSQLEngineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartSparkSQLEngineResponse
     */
    public function startSparkSQLEngineWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->jars) {
            @$body['Jars'] = $request->jars;
        }

        if (null !== $request->maxExecutor) {
            @$body['MaxExecutor'] = $request->maxExecutor;
        }

        if (null !== $request->minExecutor) {
            @$body['MinExecutor'] = $request->minExecutor;
        }

        if (null !== $request->resourceGroupName) {
            @$body['ResourceGroupName'] = $request->resourceGroupName;
        }

        if (null !== $request->slotNum) {
            @$body['SlotNum'] = $request->slotNum;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartSparkSQLEngine',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartSparkSQLEngineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Starts the Spark SQL engine.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @deprecated OpenAPI StartSparkSQLEngine is deprecated
     *
     * @param request - StartSparkSQLEngineRequest
     *
     * @returns StartSparkSQLEngineResponse
     *
     * @param StartSparkSQLEngineRequest $request
     *
     * @return StartSparkSQLEngineResponse
     */
    public function startSparkSQLEngine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSparkSQLEngineWithOptions($request, $runtime);
    }

    /**
     * Submits an SQL query and exports a result set.
     *
     * @param request - SubmitResultExportJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitResultExportJobResponse
     *
     * @param SubmitResultExportJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitResultExportJobResponse
     */
    public function submitResultExportJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->engine) {
            @$body['Engine'] = $request->engine;
        }

        if (null !== $request->exportType) {
            @$body['ExportType'] = $request->exportType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroup) {
            @$body['ResourceGroup'] = $request->resourceGroup;
        }

        if (null !== $request->SQL) {
            @$body['SQL'] = $request->SQL;
        }

        if (null !== $request->schema) {
            @$body['Schema'] = $request->schema;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitResultExportJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitResultExportJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an SQL query and exports a result set.
     *
     * @param request - SubmitResultExportJobRequest
     *
     * @returns SubmitResultExportJobResponse
     *
     * @param SubmitResultExportJobRequest $request
     *
     * @return SubmitResultExportJobResponse
     */
    public function submitResultExportJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitResultExportJobWithOptions($request, $runtime);
    }

    /**
     * Submits a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - SubmitSparkAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSparkAppResponse
     *
     * @param SubmitSparkAppRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitSparkAppResponse
     */
    public function submitSparkAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentSource) {
            @$body['AgentSource'] = $request->agentSource;
        }

        if (null !== $request->agentVersion) {
            @$body['AgentVersion'] = $request->agentVersion;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        if (null !== $request->resourceGroupName) {
            @$body['ResourceGroupName'] = $request->resourceGroupName;
        }

        if (null !== $request->templateFileId) {
            @$body['TemplateFileId'] = $request->templateFileId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitSparkApp',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSparkAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a Spark application.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - SubmitSparkAppRequest
     *
     * @returns SubmitSparkAppResponse
     *
     * @param SubmitSparkAppRequest $request
     *
     * @return SubmitSparkAppResponse
     */
    public function submitSparkApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSparkAppWithOptions($request, $runtime);
    }

    /**
     * Submits a Spark log analysis task and queries the analysis results.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - SubmitSparkLogAnalyzeTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSparkLogAnalyzeTaskResponse
     *
     * @param SubmitSparkLogAnalyzeTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitSparkLogAnalyzeTaskResponse
     */
    public function submitSparkLogAnalyzeTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitSparkLogAnalyzeTask',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSparkLogAnalyzeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a Spark log analysis task and queries the analysis results.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - SubmitSparkLogAnalyzeTaskRequest
     *
     * @returns SubmitSparkLogAnalyzeTaskResponse
     *
     * @param SubmitSparkLogAnalyzeTaskRequest $request
     *
     * @return SubmitSparkLogAnalyzeTaskResponse
     */
    public function submitSparkLogAnalyzeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSparkLogAnalyzeTaskWithOptions($request, $runtime);
    }

    /**
     * Suspends an AnalyticDB Pipeline Service (APS) job.
     *
     * @param request - SuspendApsJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendApsJobResponse
     *
     * @param SuspendApsJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SuspendApsJobResponse
     */
    public function suspendApsJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apsJobId) {
            @$body['ApsJobId'] = $request->apsJobId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SuspendApsJob',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendApsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Suspends an AnalyticDB Pipeline Service (APS) job.
     *
     * @param request - SuspendApsJobRequest
     *
     * @returns SuspendApsJobResponse
     *
     * @param SuspendApsJobRequest $request
     *
     * @return SuspendApsJobResponse
     */
    public function suspendApsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendApsJobWithOptions($request, $runtime);
    }

    /**
     * Disassociates a standard account of an AnalyticDB for MySQL cluster from a Resource Access Management (RAM) user.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - UnbindAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindAccountResponse
     *
     * @param UnbindAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UnbindAccountResponse
     */
    public function unbindAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindAccount',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates a standard account of an AnalyticDB for MySQL cluster from a Resource Access Management (RAM) user.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
     *
     * @param request - UnbindAccountRequest
     *
     * @returns UnbindAccountResponse
     *
     * @param UnbindAccountRequest $request
     *
     * @return UnbindAccountResponse
     */
    public function unbindAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindAccountWithOptions($request, $runtime);
    }

    /**
     * Disassociates resource groups from database accounts for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupUser) {
            @$query['GroupUser'] = $request->groupUser;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindDBResourceGroupWithUser',
            'version' => '2021-12-01',
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
     * Disassociates resource groups from database accounts for an AnalyticDB for MySQL cluster.
     *
     * @remarks
     * For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * Updates a lake storage.
     *
     * @param tmpReq - UpdateLakeStorageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLakeStorageResponse
     *
     * @param UpdateLakeStorageRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateLakeStorageResponse
     */
    public function updateLakeStorageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateLakeStorageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->permissions) {
            $request->permissionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->permissions, 'Permissions', 'json');
        }

        $body = [];
        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->lakeStorageId) {
            @$body['LakeStorageId'] = $request->lakeStorageId;
        }

        if (null !== $request->permissionsShrink) {
            @$body['Permissions'] = $request->permissionsShrink;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLakeStorage',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLakeStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a lake storage.
     *
     * @param request - UpdateLakeStorageRequest
     *
     * @returns UpdateLakeStorageResponse
     *
     * @param UpdateLakeStorageRequest $request
     *
     * @return UpdateLakeStorageResponse
     */
    public function updateLakeStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLakeStorageWithOptions($request, $runtime);
    }

    /**
     * Updates a Spark application template.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - UpdateSparkTemplateFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSparkTemplateFileResponse
     *
     * @param UpdateSparkTemplateFileRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateSparkTemplateFileResponse
     */
    public function updateSparkTemplateFileWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->DBClusterId) {
            @$body['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->resourceGroupName) {
            @$body['ResourceGroupName'] = $request->resourceGroupName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSparkTemplateFile',
            'version' => '2021-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSparkTemplateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a Spark application template.
     *
     * @remarks
     *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     * >  If HTTP status code 409 is returned when you call this operation in the China (Qingdao), China (Shenzhen), China (Guangzhou), or China (Hong Kong) region, contact technical support.
     *
     * @param request - UpdateSparkTemplateFileRequest
     *
     * @returns UpdateSparkTemplateFileResponse
     *
     * @param UpdateSparkTemplateFileRequest $request
     *
     * @return UpdateSparkTemplateFileResponse
     */
    public function updateSparkTemplateFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSparkTemplateFileWithOptions($request, $runtime);
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
            'version' => '2021-12-01',
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
