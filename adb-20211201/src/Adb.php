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
     * @summary Applies for a public endpoint for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
     * @summary Applies for a public endpoint for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
     * @summary Attaches an elastic network interface (ENI) to an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Attaches an elastic network interface (ENI) to an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Associates a standard database account of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster with a Resource Access Management (RAM) user.
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
     * @summary Associates a standard database account of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster with a Resource Access Management (RAM) user.
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
     * @summary Queries whether a database account of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster is associated with a Resource Access Management (RAM) user.
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
     * @summary Queries whether a database account of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster is associated with a Resource Access Management (RAM) user.
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
     * @summary Creates a database account for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Creates a database account for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Creates an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Creates an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @description For information about the endpoints of the current service, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * @summary Creates a resource group for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of the current service, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * @summary Creates a scaling plan for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Creates a scaling plan for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Creates a Spark application template.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @summary Deletes a database account from an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Deletes a database account from an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Deletes an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Deletes an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Deletes a resource group from an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Deletes a resource group from an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Deletes a scaling plan from an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Deletes a scaling plan from an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Queries the database accounts of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Queries the database accounts of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary 用于查询ADB for MySQL实例下某个数据库某个表的列的列表
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
     * @summary 用于查询ADB for MySQL实例下某个数据库某个表的列的列表
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
     * @summary Queries a list of databases for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Queries a list of databases for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Queries a list of tables for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Queries a list of tables for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Queries a list of databases, tables, and columns in an AnalyticDB for MySQL cluster.
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
     * @summary Queries the information about resource groups of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster, including the resource metrics.
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
     * @summary Queries the information about resource groups of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster, including the resource metrics.
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
     * @summary Queries the SQL audit logs of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description *   SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried. The following operations are not recorded in SQL audit logs: **INSERT INTO VALUES**, **REPLACE INTO VALUES**, and **UPSERT INTO VALUES**.
     * *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @summary Queries the SQL audit logs of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description *   SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried. The following operations are not recorded in SQL audit logs: **INSERT INTO VALUES**, **REPLACE INTO VALUES**, and **UPSERT INTO VALUES**.
     * *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @summary Queries the IP address whitelist of an AnalyticDB for MySQL cluster.
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
     * @summary Queries the IP address whitelist of an AnalyticDB for MySQL cluster.
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
     * @summary Queries the network information about an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Queries the network information about an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary 获取集群资源统计
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
     * @summary 获取集群资源统计
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
     * @summary 获取实例计算资源使用统计
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
     * @summary Queries the information about an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Queries the information about an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Queries the health status of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
     * @summary Queries the health status of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @summary Queries a list of states for AnalyticDB for MySQL Data Lakehouse Edition (V3.0) clusters.
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
     * @summary Queries a list of states for AnalyticDB for MySQL Data Lakehouse Edition (V3.0) clusters.
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
     * @summary Queries the information about AnalyticDB for MySQL Data Lakehouse Edition (V3.0) clusters in a region.
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
     * @summary Queries the information about AnalyticDB for MySQL Data Lakehouse Edition (V3.0) clusters in a region.
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
     * @summary Queries the information about resource groups for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Queries the information about resource groups for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @summary Queries the information about a scaling plan for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see DescribeElasticPlanAttribute.
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
     * @summary Queries the information about a scaling plan for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see DescribeElasticPlanAttribute.
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
     * @summary Queries a list of scaling plan jobs for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * @summary Queries a list of scaling plan jobs for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * @summary Queries the resource specifications that can be scaled for different types of scaling plans of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Queries the resource specifications that can be scaled for different types of scaling plans of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Queries scaling plans of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Queries scaling plans of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary 获取作业资源使用统计
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
     * @summary Queries the information about performance metrics of an SQL pattern such as the query duration and average memory usage for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster within a time range.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * @summary Queries the information about performance metrics of an SQL pattern such as the query duration and average memory usage for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster within a time range.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * @summary 查询Spark code的执行日志
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
     * @summary 查询Spark code的执行日志
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
     * @summary Queries the number of accesses to a table or all tables in an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster on a date.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @summary Queries the number of accesses to a table or all tables in an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster on a date.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @summary Queries a list of tables in a database.
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
     * @summary Disables a scaling plan for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Disables a scaling plan for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @summary Enables a scaling plan for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Enables a scaling plan for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Queries whether a running SQL engine exists.
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
     * @summary Queries the information about the retry log of a Spark application.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @summary Queries the common definitions of Spark applications.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetSparkDefinitionsRequest $request GetSparkDefinitionsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSparkDefinitionsResponse GetSparkDefinitionsResponse
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
     * @summary Queries the common definitions of Spark applications.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
     *  *
     * @param GetSparkDefinitionsRequest $request GetSparkDefinitionsRequest
     *
     * @return GetSparkDefinitionsResponse GetSparkDefinitionsResponse
     */
    public function getSparkDefinitions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSparkDefinitionsWithOptions($request, $runtime);
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
     * @summary Queries the state information about the Spark SQL engine.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   You can call this operation to query the directory structure but not application data in the directory. To query the directory structure that contains application data, call the [GetSparkTemplateFullTree](https://help.aliyun.com/document_detail/612467.html) operation.
     * *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   You can call this operation to query the directory structure but not application data in the directory. To query the directory structure that contains application data, call the [GetSparkTemplateFullTree](https://help.aliyun.com/document_detail/612467.html) operation.
     * *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @deprecated OpenAPI GetTable is deprecated
     *  *
     * @summary 获取表
     *  *
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
     * @deprecated OpenAPI GetTable is deprecated
     *  *
     * @summary 获取表
     *  *
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
     * @summary Queries the information about columns.
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
     * @summary Terminates a Spark application.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @summary Queries the information about retry attempts of a Spark application.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @summary Loads a built-in dataset.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
     * @summary Modifies the description of a database account for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
     * @summary Modifies the description of a database account for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
     * @summary 修改某一用户的权限
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
     * @summary 修改某一用户的权限
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
     * @summary Modifies the SQL audit configuration of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Modifies the SQL audit configuration of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Modifies the backup policy of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Modifies the backup policy of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Modifies the IP address whitelist of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * @summary Modifies the IP address whitelist of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * @summary Modifies the public endpoint of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Modifies the public endpoint of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Changes the configurations of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description ### [](#)
     * *   During a scaling event, you are not allowed to execute the `SUBMIT JOB` statement to submit asynchronous jobs. If your business requires asynchronous jobs, perform scaling during appropriate periods.
     * *   When cluster specifications are scaled up or down, data in the cluster is migrated for redistribution. The amount of time that is required for data migration is proportional to the volume of data. During a scaling event, the services provided by the cluster are not interrupted. During a scale-down event, data migration can take up to dozens of hours to complete. Proceed with caution especially when your cluster contains a large amount of data.
     * *   If the cluster has a built-in dataset loaded, make sure that the cluster has reserved storage resources of at least 24 AnalyticDB compute units (ACUs). Otherwise, the built-in dataset cannot be used.
     * *   When the scaling process is about to end, your service may encounter transient connections. We recommend that you scale your cluster during off-peak hours or make sure that your application is configured to automatically reconnect to your cluster.
     * *   You can change an AnalyticDB for MySQL cluster from Data Warehouse Edition (V3.0) to Data Lakehouse Edition (V3.0), but not the other way around. For more information, see Change a cluster from Data Warehouse Edition to Data Lakehouse Edition.
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
     * @summary Changes the configurations of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description ### [](#)
     * *   During a scaling event, you are not allowed to execute the `SUBMIT JOB` statement to submit asynchronous jobs. If your business requires asynchronous jobs, perform scaling during appropriate periods.
     * *   When cluster specifications are scaled up or down, data in the cluster is migrated for redistribution. The amount of time that is required for data migration is proportional to the volume of data. During a scaling event, the services provided by the cluster are not interrupted. During a scale-down event, data migration can take up to dozens of hours to complete. Proceed with caution especially when your cluster contains a large amount of data.
     * *   If the cluster has a built-in dataset loaded, make sure that the cluster has reserved storage resources of at least 24 AnalyticDB compute units (ACUs). Otherwise, the built-in dataset cannot be used.
     * *   When the scaling process is about to end, your service may encounter transient connections. We recommend that you scale your cluster during off-peak hours or make sure that your application is configured to automatically reconnect to your cluster.
     * *   You can change an AnalyticDB for MySQL cluster from Data Warehouse Edition (V3.0) to Data Lakehouse Edition (V3.0), but not the other way around. For more information, see Change a cluster from Data Warehouse Edition to Data Lakehouse Edition.
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
     * @summary Modifies the description of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster to facilitate the maintenance and management of the cluster.
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
     * @summary Modifies the description of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster to facilitate the maintenance and management of the cluster.
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
     * @summary Modifies the maintenance window of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Modifies the maintenance window of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Modifies a scaling plan for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * @summary Modifies a scaling plan for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see [Endpoints](https://help.aliyun.com/document_detail/612373.html).
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
     * @summary Preloads metrics for a Spark application.
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
     * @summary Renames a Spark template file.
     *  *
     * @param RenameSparkTemplateFileRequest $request RenameSparkTemplateFileRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RenameSparkTemplateFileResponse RenameSparkTemplateFileResponse
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
     * @summary Renames a Spark template file.
     *  *
     * @param RenameSparkTemplateFileRequest $request RenameSparkTemplateFileRequest
     *
     * @return RenameSparkTemplateFileResponse RenameSparkTemplateFileResponse
     */
    public function renameSparkTemplateFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameSparkTemplateFileWithOptions($request, $runtime);
    }

    /**
     * @summary Resets the password of a database account for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Resets the password of a database account for an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
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
     * @summary Modifies the Spark log configuration.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @summary Starts the Spark SQL engine.
     *  *
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @description *   General endpoint: `adb.aliyuncs.com`.
     * *   Regional public endpoint: `adb.<region-id>.aliyuncs.com`. Example: `adb.cn-hangzhou.aliyuncs.com`.
     * *   Regional Virtual Private Cloud (VPC) endpoint: `adb-vpc.<region-id>.aliyuncs.com`. Example: `adb-vpc.cn-hangzhou.aliyuncs.com`.
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
     * @summary Disassociates a standard database account of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster from a Resource Access Management (RAM) user.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
     * @summary Disassociates a standard database account of an AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster from a Resource Access Management (RAM) user.
     *  *
     * @description For information about the endpoints of AnalyticDB for MySQL, see Endpoints.
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
