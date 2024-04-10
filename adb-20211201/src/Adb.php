<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Adb\V20211201\Models\AllocateClusterPublicConnectionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\AllocateClusterPublicConnectionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\AttachUserENIRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\AttachUserENIResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\BindAccountRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\BindAccountResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\BindDBResourceGroupWithUserRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\BindDBResourceGroupWithUserResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CheckBindRamUserRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CheckBindRamUserResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CheckSampleDataSetRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CheckSampleDataSetResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBClusterRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBClusterResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBResourceGroupShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateOssSubDirectoryRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateOssSubDirectoryResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateSparkTemplateRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateSparkTemplateResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteDBClusterRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteDBClusterResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteDBResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteDBResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteProcessInstanceRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteProcessInstanceResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteSparkTemplateFileRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteSparkTemplateFileResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteSparkTemplateRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DeleteSparkTemplateResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAllDataSourceResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsActionLogsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsActionLogsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsResourceGroupsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsResourceGroupsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAuditLogRecordsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAuditLogRecordsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBackupsResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeComputeResourceUsageRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeComputeResourceUsageResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePatternPerformanceRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePatternPerformanceResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSchemasRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSchemasResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTablesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTablesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeUserQuotaRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeUserQuotaResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DetachUserENIRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DetachUserENIResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DisableElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DisableElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\DownloadDiagnosisRecordsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\DownloadDiagnosisRecordsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\EnableElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\EnableElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ExistRunningSQLEngineRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ExistRunningSQLEngineResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetDatabaseObjectsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetDatabaseObjectsResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkDefinitionsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkDefinitionsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkLogAnalyzeTaskRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkLogAnalyzeTaskResponse;
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
use AlibabaCloud\SDK\Adb\V20211201\Models\KillSparkAppRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\KillSparkAppResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\KillSparkLogAnalyzeTaskRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\KillSparkLogAnalyzeTaskResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\KillSparkSQLEngineRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\KillSparkSQLEngineResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkAppAttemptsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkAppAttemptsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkAppsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkAppsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkLogAnalyzeTasksRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkLogAnalyzeTasksResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkTemplateFileIdsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkTemplateFileIdsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\LoadSampleDataSetRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\LoadSampleDataSetResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountPrivilegesRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountPrivilegesResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountPrivilegesShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAuditLogConfigRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAuditLogConfigResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyClusterAccessWhiteListRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyClusterAccessWhiteListResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyClusterConnectionStringRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyClusterConnectionStringResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterDescriptionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterDescriptionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterMaintainTimeRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterMaintainTimeResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBClusterResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBResourceGroupShrinkRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\PreloadSparkAppMetricsRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\PreloadSparkAppMetricsResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ReleaseClusterPublicConnectionRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ReleaseClusterPublicConnectionResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\RenameSparkTemplateFileRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\RenameSparkTemplateFileResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\SetSparkAppLogRootPathRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\SetSparkAppLogRootPathResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\StartSparkSQLEngineRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\StartSparkSQLEngineResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\SubmitSparkAppRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\SubmitSparkAppResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\SubmitSparkLogAnalyzeTaskRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\SubmitSparkLogAnalyzeTaskResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\UnbindAccountRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\UnbindAccountResponse;
use AlibabaCloud\SDK\Adb\V20211201\Models\UnbindDBResourceGroupWithUserRequest;
use AlibabaCloud\SDK\Adb\V20211201\Models\UnbindDBResourceGroupWithUserResponse;
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
     * @param AllocateClusterPublicConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AllocateClusterPublicConnectionResponse
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
     * @param AttachUserENIRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AttachUserENIResponse
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
     * @param BindAccountRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BindAccountResponse
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
     * @param BindDBResourceGroupWithUserRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return BindDBResourceGroupWithUserResponse
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
     * @param CheckBindRamUserRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CheckBindRamUserResponse
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
     * @param CheckSampleDataSetRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckSampleDataSetResponse
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
     * @param CreateAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAccountResponse
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
     * @param CreateDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDBClusterResponse
     */
    public function createDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
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
        if (!Utils::isUnset($request->enableDefaultResourcePool)) {
            $query['EnableDefaultResourcePool'] = $request->enableDefaultResourcePool;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
     * @param CreateDBResourceGroupRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDBResourceGroupResponse
     */
    public function createDBResourceGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDBResourceGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->rules)) {
            $request->rulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }
        $query = [];
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
        if (!Utils::isUnset($request->minClusterCount)) {
            $query['MinClusterCount'] = $request->minClusterCount;
        }
        if (!Utils::isUnset($request->minComputeResource)) {
            $query['MinComputeResource'] = $request->minComputeResource;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rulesShrink)) {
            $query['Rules'] = $request->rulesShrink;
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
     * @param CreateElasticPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateElasticPlanResponse
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
     * @param CreateOssSubDirectoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateOssSubDirectoryResponse
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
     * @param CreateSparkTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSparkTemplateResponse
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
     * @param DeleteAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAccountResponse
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
     * ###
     *   * You can call this operation to delete only subscription clusters.
     *   *
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
     * ###
     *   * You can call this operation to delete only subscription clusters.
     *   *
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
     * @param DeleteDBResourceGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDBResourceGroupResponse
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
     * @param DeleteElasticPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteElasticPlanResponse
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
     * @param DeleteProcessInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteProcessInstanceResponse
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
     * @param DeleteProcessInstanceRequest $request
     *
     * @return DeleteProcessInstanceResponse
     */
    public function deleteProcessInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProcessInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSparkTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSparkTemplateResponse
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
     * @param DeleteSparkTemplateFileRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSparkTemplateFileResponse
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
     * @param DescribeAccountAllPrivilegesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAccountAllPrivilegesResponse
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
     * @param DescribeAccountPrivilegeObjectsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeAccountPrivilegeObjectsResponse
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
     * @param DescribeAccountPrivilegesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAccountPrivilegesResponse
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
     * @param DescribeAccountsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeAccountsResponse
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
     * @param DescribeAdbMySqlColumnsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAdbMySqlColumnsResponse
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
     * @param DescribeAdbMySqlSchemasRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAdbMySqlSchemasResponse
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
     * @param DescribeAdbMySqlTablesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAdbMySqlTablesResponse
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
     * @param DescribeAllDataSourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAllDataSourceResponse
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
     * @param DescribeApsActionLogsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeApsActionLogsResponse
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
     * @param DescribeApsResourceGroupsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeApsResourceGroupsResponse
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
     * SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried. The following operations are not recorded in SQL audit logs: **INSERT INTO VALUES**, **REPLACE INTO VALUES**, and **UPSERT INTO VALUES**.
     *   *
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
     * SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried. The following operations are not recorded in SQL audit logs: **INSERT INTO VALUES**, **REPLACE INTO VALUES**, and **UPSERT INTO VALUES**.
     *   *
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
     * @param DescribeBackupPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupPolicyResponse
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
     * @param DescribeBackupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBackupsResponse
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
     * @param DescribeClusterAccessWhiteListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeClusterAccessWhiteListResponse
     */
    public function describeClusterAccessWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
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
     * @param DescribeClusterNetInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeClusterNetInfoResponse
     */
    public function describeClusterNetInfoWithOptions($request, $runtime)
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
     * @param DescribeClusterResourceDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeClusterResourceDetailResponse
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
     * @param DescribeClusterResourceUsageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClusterResourceUsageResponse
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
     * @param DescribeColumnsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeColumnsResponse
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
     * @param DescribeComputeResourceUsageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeComputeResourceUsageResponse
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
     * @param DescribeDBClusterAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBClusterAttributeResponse
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
     * @param DescribeDBClusterHealthStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBClusterHealthStatusResponse
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
     * @param DescribeDBClusterPerformanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDBClusterPerformanceResponse
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
     * @param DescribeDBClusterSpaceSummaryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBClusterSpaceSummaryResponse
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
     * @param DescribeDBClusterStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDBClusterStatusResponse
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
     * @param DescribeDBClustersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDBClustersResponse
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
     * @param DescribeDBResourceGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDBResourceGroupResponse
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
     * @param DescribeDiagnosisDimensionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDiagnosisDimensionsResponse
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
     * @param DescribeDiagnosisRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDiagnosisRecordsResponse
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
     * @param DescribeDiagnosisSQLInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDiagnosisSQLInfoResponse
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
     * @param DescribeDownloadRecordsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDownloadRecordsResponse
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
     * @param DescribeElasticPlanAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeElasticPlanAttributeResponse
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
     * @param DescribeElasticPlanJobsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeElasticPlanJobsResponse
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
     * @param DescribeElasticPlanSpecificationsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeElasticPlanSpecificationsResponse
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
     * @param DescribeElasticPlansRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeElasticPlansResponse
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
     * @param DescribeEnabledPrivilegesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEnabledPrivilegesResponse
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
     * @param DescribeJobResourceUsageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeJobResourceUsageResponse
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
     * @param DescribePatternPerformanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePatternPerformanceResponse
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
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
     * @param DescribeSQLPatternsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSQLPatternsResponse
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
     * @param DescribeSchemasRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeSchemasResponse
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
     * @param DescribeSparkCodeLogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSparkCodeLogResponse
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
     * @param DescribeSparkCodeOutputRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSparkCodeOutputResponse
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
     * @param DescribeSparkCodeWebUiRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSparkCodeWebUiResponse
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
     * @param DescribeSqlPatternRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSqlPatternResponse
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
     * @param DescribeStorageResourceUsageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeStorageResourceUsageResponse
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
     * @param DescribeTableAccessCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeTableAccessCountResponse
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
     * @param DescribeTablesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeTablesResponse
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
     * @param DescribeUserQuotaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeUserQuotaResponse
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
     * @param DetachUserENIRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DetachUserENIResponse
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
     * @param DisableElasticPlanRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DisableElasticPlanResponse
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
     * @param DownloadDiagnosisRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DownloadDiagnosisRecordsResponse
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
     * @param EnableElasticPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnableElasticPlanResponse
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
     * @param ExistRunningSQLEngineRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExistRunningSQLEngineResponse
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
     * @param GetDatabaseObjectsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDatabaseObjectsResponse
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
     * @param GetSparkAppAttemptLogRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSparkAppAttemptLogResponse
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
     * @param GetSparkAppInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetSparkAppInfoResponse
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
     * @param GetSparkAppLogRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSparkAppLogResponse
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
     * @param GetSparkAppMetricsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetSparkAppMetricsResponse
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
     * @param GetSparkAppStateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSparkAppStateResponse
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
     * @param GetSparkAppWebUiAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSparkAppWebUiAddressResponse
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
     * @param GetSparkConfigLogPathRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSparkConfigLogPathResponse
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
     * @param GetSparkDefinitionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSparkDefinitionsResponse
     */
    public function getSparkDefinitionsWithOptions($request, $runtime)
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
            'action'      => 'GetSparkDefinitions',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSparkDefinitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSparkDefinitionsRequest $request
     *
     * @return GetSparkDefinitionsResponse
     */
    public function getSparkDefinitions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkDefinitionsWithOptions($request, $runtime);
    }

    /**
     * @param GetSparkLogAnalyzeTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetSparkLogAnalyzeTaskResponse
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
     * @param GetSparkSQLEngineStateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetSparkSQLEngineStateResponse
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
     * @param GetSparkTemplateFileContentRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetSparkTemplateFileContentResponse
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
     * ### [](#)Usage notes
     *   * You can call this operation to query the directory structure but not application data in the directory. To query the directory structure that contains application data, call the [GetSparkTemplateFullTree](~~612467~~) operation.
     *   *
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
     * ### [](#)Usage notes
     *   * You can call this operation to query the directory structure but not application data in the directory. To query the directory structure that contains application data, call the [GetSparkTemplateFullTree](~~612467~~) operation.
     *   *
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
     * @param GetSparkTemplateFullTreeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetSparkTemplateFullTreeResponse
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
     * @deprecated
     *   *
     * Deprecated
     *
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
     * @deprecated
     *   *
     * Deprecated
     *
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
     * @param GetTableColumnsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetTableColumnsResponse
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
     * @param GetTableDDLRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTableDDLResponse
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
     * @param GetTableObjectsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetTableObjectsResponse
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
     * @param GetViewDDLRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetViewDDLResponse
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
     * @param GetViewObjectsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetViewObjectsResponse
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
     * @param KillSparkAppRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return KillSparkAppResponse
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
     * @param KillSparkLogAnalyzeTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return KillSparkLogAnalyzeTaskResponse
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
     * @param KillSparkSQLEngineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return KillSparkSQLEngineResponse
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
     * @param ListSparkAppAttemptsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSparkAppAttemptsResponse
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
     * @param ListSparkAppsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSparkAppsResponse
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
     * @param ListSparkLogAnalyzeTasksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListSparkLogAnalyzeTasksResponse
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
     * @param ListSparkTemplateFileIdsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListSparkTemplateFileIdsResponse
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
     * @param LoadSampleDataSetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return LoadSampleDataSetResponse
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
     * @param ModifyAccountDescriptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAccountDescriptionResponse
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
     * @param ModifyAccountPrivilegesRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyAccountPrivilegesResponse
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
     * @param ModifyAuditLogConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyAuditLogConfigResponse
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
     * @param ModifyBackupPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyBackupPolicyResponse
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
     * @param ModifyClusterAccessWhiteListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyClusterAccessWhiteListResponse
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
     * @param ModifyClusterConnectionStringRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyClusterConnectionStringResponse
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
     * ### [](#)
     *   * *   During a scaling event, you are not allowed to execute the `SUBMIT JOB` statement to submit asynchronous jobs. If your business requires asynchronous jobs, perform scaling during appropriate periods.
     *   * *   When cluster specifications are scaled up or down, data in the cluster is migrated for redistribution. The amount of time that is required for data migration is proportional to the volume of data. During a scaling event, the services provided by the cluster are not interrupted. During a scale-down event, data migration can take up to dozens of hours to complete. Proceed with caution especially when your cluster contains a large amount of data.
     *   * *   If the cluster has a built-in dataset loaded, make sure that the cluster has reserved storage resources of at least 24 AnalyticDB compute units (ACUs). Otherwise, the built-in dataset cannot be used.
     *   * *   When the scaling process is about to end, your service may encounter transient connections. We recommend that you scale your cluster during off-peak hours or make sure that your application is configured to automatically reconnect to your cluster.
     *   * *   You can change an AnalyticDB for MySQL cluster from Data Warehouse Edition (V3.0) to Data Lakehouse Edition (V3.0), but not the other way around. For more information, see Change a cluster from Data Warehouse Edition to Data Lakehouse Edition.
     *   *
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
     * ### [](#)
     *   * *   During a scaling event, you are not allowed to execute the `SUBMIT JOB` statement to submit asynchronous jobs. If your business requires asynchronous jobs, perform scaling during appropriate periods.
     *   * *   When cluster specifications are scaled up or down, data in the cluster is migrated for redistribution. The amount of time that is required for data migration is proportional to the volume of data. During a scaling event, the services provided by the cluster are not interrupted. During a scale-down event, data migration can take up to dozens of hours to complete. Proceed with caution especially when your cluster contains a large amount of data.
     *   * *   If the cluster has a built-in dataset loaded, make sure that the cluster has reserved storage resources of at least 24 AnalyticDB compute units (ACUs). Otherwise, the built-in dataset cannot be used.
     *   * *   When the scaling process is about to end, your service may encounter transient connections. We recommend that you scale your cluster during off-peak hours or make sure that your application is configured to automatically reconnect to your cluster.
     *   * *   You can change an AnalyticDB for MySQL cluster from Data Warehouse Edition (V3.0) to Data Lakehouse Edition (V3.0), but not the other way around. For more information, see Change a cluster from Data Warehouse Edition to Data Lakehouse Edition.
     *   *
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
     * @param ModifyDBClusterDescriptionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDBClusterDescriptionResponse
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
     * @param ModifyDBClusterMaintainTimeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBClusterMaintainTimeResponse
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
     * @param ModifyDBResourceGroupRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDBResourceGroupResponse
     */
    public function modifyDBResourceGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyDBResourceGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->rules)) {
            $request->rulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }
        $query = [];
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
        if (!Utils::isUnset($request->minClusterCount)) {
            $query['MinClusterCount'] = $request->minClusterCount;
        }
        if (!Utils::isUnset($request->minComputeResource)) {
            $query['MinComputeResource'] = $request->minComputeResource;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rulesShrink)) {
            $query['Rules'] = $request->rulesShrink;
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
     * @param ModifyElasticPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyElasticPlanResponse
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
     * @param PreloadSparkAppMetricsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PreloadSparkAppMetricsResponse
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
     * @param ReleaseClusterPublicConnectionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ReleaseClusterPublicConnectionResponse
     */
    public function releaseClusterPublicConnectionWithOptions($request, $runtime)
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
     * @param RenameSparkTemplateFileRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RenameSparkTemplateFileResponse
     */
    public function renameSparkTemplateFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenameSparkTemplateFile',
            'version'     => '2021-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenameSparkTemplateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenameSparkTemplateFileRequest $request
     *
     * @return RenameSparkTemplateFileResponse
     */
    public function renameSparkTemplateFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameSparkTemplateFileWithOptions($request, $runtime);
    }

    /**
     * @param ResetAccountPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetAccountPasswordResponse
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
     * @param SetSparkAppLogRootPathRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetSparkAppLogRootPathResponse
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
     * @param StartSparkSQLEngineRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartSparkSQLEngineResponse
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
     * @param SubmitSparkAppRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitSparkAppResponse
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
     * @param SubmitSparkLogAnalyzeTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitSparkLogAnalyzeTaskResponse
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
     * @param UnbindAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UnbindAccountResponse
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
     * @param UnbindDBResourceGroupWithUserRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UnbindDBResourceGroupWithUserResponse
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
     * @param UpdateSparkTemplateFileRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateSparkTemplateFileResponse
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
     * @param UpdateSparkTemplateFileRequest $request
     *
     * @return UpdateSparkTemplateFileResponse
     */
    public function updateSparkTemplateFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSparkTemplateFileWithOptions($request, $runtime);
    }
}
