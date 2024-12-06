<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeActiveOperationMaintainConfRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeActiveOperationMaintainConfResponse;
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
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeColumnsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeColumnsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeComputeResourceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeComputeResourceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeConnectionCountRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeConnectionCountRecordsResponse;
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
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeInclinedTablesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeInclinedTablesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKernelVersionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKernelVersionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKmsKeysRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKmsKeysResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoadTasksRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoadTasksRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoghubDetailRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoghubDetailResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeMaintenanceActionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeMaintenanceActionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeOperatorPermissionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeOperatorPermissionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribePatternPerformanceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribePatternPerformanceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeProcessListRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeProcessListResponse;
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
use AlibabaCloud\SDK\Adb\V20190315\Models\DetachUserENIRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DetachUserENIResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DisableAdviceServiceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DisableAdviceServiceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DownloadDiagnosisRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DownloadDiagnosisRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\EnableAdviceServiceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\EnableAdviceServiceResponse;
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
            'action'      => 'AllocateClusterPublicConnection',
            'version'     => '2019-03-15',
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
     * @summary ApplyAdviceById
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
            'version'     => '2019-03-15',
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
     * @summary ApplyAdviceById
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
     * @summary 打通用户ENI
     *  *
     * @description You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition.
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
        if (!Utils::isUnset($request->accessKeyIdCopy)) {
            $query['AccessKeyId-copy'] = $request->accessKeyIdCopy;
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
            'action'      => 'AttachUserENI',
            'version'     => '2019-03-15',
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
     * @summary 打通用户ENI
     *  *
     * @description You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition.
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
     * @summary BatchApplyAdviceByIdList
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
            'version'     => '2019-03-15',
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
     * @summary BatchApplyAdviceByIdList
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
     * @summary Associates a resource group of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster with a database account.
     *  *
     * @description ## Precautions
     * *   This operation is applicable only for elastic clusters of 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be associated with a database account.
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
            'action'      => 'BindDBResourceGroupWithUser',
            'version'     => '2019-03-15',
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
     * @summary Associates a resource group of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster with a database account.
     *  *
     * @description ## Precautions
     * *   This operation is applicable only for elastic clusters of 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be associated with a database account.
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
     * @description *   This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be associated with a database account.
     *  *
     * @param BindDBResourcePoolWithUserRequest $request BindDBResourcePoolWithUserRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return BindDBResourcePoolWithUserResponse BindDBResourcePoolWithUserResponse
     */
    public function bindDBResourcePoolWithUserWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->poolName)) {
            $query['PoolName'] = $request->poolName;
        }
        if (!Utils::isUnset($request->poolUser)) {
            $query['PoolUser'] = $request->poolUser;
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
            'action'      => 'BindDBResourcePoolWithUser',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindDBResourcePoolWithUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description *   This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be associated with a database account.
     *  *
     * @param BindDBResourcePoolWithUserRequest $request BindDBResourcePoolWithUserRequest
     *
     * @return BindDBResourcePoolWithUserResponse BindDBResourcePoolWithUserResponse
     */
    public function bindDBResourcePoolWithUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindDBResourcePoolWithUserWithOptions($request, $runtime);
    }

    /**
     * @summary CancelActiveOperationTasks
     *  *
     * @param CancelActiveOperationTasksRequest $request CancelActiveOperationTasksRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelActiveOperationTasksResponse CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelActiveOperationTasks',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CancelActiveOperationTasks
     *  *
     * @param CancelActiveOperationTasksRequest $request CancelActiveOperationTasksRequest
     *
     * @return CancelActiveOperationTasksResponse CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelActiveOperationTasksWithOptions($request, $runtime);
    }

    /**
     * @param CheckServiceLinkedRoleRequest $request CheckServiceLinkedRoleRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckServiceLinkedRoleResponse CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckServiceLinkedRole',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckServiceLinkedRoleRequest $request CheckServiceLinkedRoleRequest
     *
     * @return CheckServiceLinkedRoleResponse CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a database account for an AnalyticDB for MySQL cluster.
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
            'action'      => 'CreateAccount',
            'version'     => '2019-03-15',
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
     * @summary Creates an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @description After you create a cluster, you are billed for the cluster specifications that you select. For more information about the billable items and pricing for Data Warehouse Edition (V3.0) clusters, see [Billable items of Data Warehouse Edition (V3.0)](https://help.aliyun.com/document_detail/303131.html) and [Pricing for Data Warehouse Edition (V3.0)](https://help.aliyun.com/document_detail/135229.html).
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
        if (!Utils::isUnset($request->backupSetID)) {
            $query['BackupSetID'] = $request->backupSetID;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->computeResource)) {
            $query['ComputeResource'] = $request->computeResource;
        }
        if (!Utils::isUnset($request->DBClusterCategory)) {
            $query['DBClusterCategory'] = $request->DBClusterCategory;
        }
        if (!Utils::isUnset($request->DBClusterClass)) {
            $query['DBClusterClass'] = $request->DBClusterClass;
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
        if (!Utils::isUnset($request->DBNodeGroupCount)) {
            $query['DBNodeGroupCount'] = $request->DBNodeGroupCount;
        }
        if (!Utils::isUnset($request->DBNodeStorage)) {
            $query['DBNodeStorage'] = $request->DBNodeStorage;
        }
        if (!Utils::isUnset($request->diskEncryption)) {
            $query['DiskEncryption'] = $request->diskEncryption;
        }
        if (!Utils::isUnset($request->elasticIOResource)) {
            $query['ElasticIOResource'] = $request->elasticIOResource;
        }
        if (!Utils::isUnset($request->enableSSL)) {
            $query['EnableSSL'] = $request->enableSSL;
        }
        if (!Utils::isUnset($request->executorCount)) {
            $query['ExecutorCount'] = $request->executorCount;
        }
        if (!Utils::isUnset($request->kmsId)) {
            $query['KmsId'] = $request->kmsId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        if (!Utils::isUnset($request->restoreType)) {
            $query['RestoreType'] = $request->restoreType;
        }
        if (!Utils::isUnset($request->sourceDBInstanceName)) {
            $query['SourceDBInstanceName'] = $request->sourceDBInstanceName;
        }
        if (!Utils::isUnset($request->storageResource)) {
            $query['StorageResource'] = $request->storageResource;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
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
            'version'     => '2019-03-15',
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
     * @summary Creates an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @description After you create a cluster, you are billed for the cluster specifications that you select. For more information about the billable items and pricing for Data Warehouse Edition (V3.0) clusters, see [Billable items of Data Warehouse Edition (V3.0)](https://help.aliyun.com/document_detail/303131.html) and [Pricing for Data Warehouse Edition (V3.0)](https://help.aliyun.com/document_detail/135229.html).
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
     * @summary Creates a resource group for an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @description ## Precautions
     * This operation is applicable only for elastic clusters of 32 cores or more.
     *  *
     * @param CreateDBResourceGroupRequest $request CreateDBResourceGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBResourceGroupResponse CreateDBResourceGroupResponse
     */
    public function createDBResourceGroupWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->nodeNum)) {
            $query['NodeNum'] = $request->nodeNum;
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
            'action'      => 'CreateDBResourceGroup',
            'version'     => '2019-03-15',
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
     * @summary Creates a resource group for an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @description ## Precautions
     * This operation is applicable only for elastic clusters of 32 cores or more.
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
     * @description This operation is applicable only for elastic clusters of 32 cores or more.
     *  *
     * @param CreateDBResourcePoolRequest $request CreateDBResourcePoolRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBResourcePoolResponse CreateDBResourcePoolResponse
     */
    public function createDBResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->nodeNum)) {
            $query['NodeNum'] = $request->nodeNum;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolName)) {
            $query['PoolName'] = $request->poolName;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
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
            'action'      => 'CreateDBResourcePool',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description This operation is applicable only for elastic clusters of 32 cores or more.
     *  *
     * @param CreateDBResourcePoolRequest $request CreateDBResourcePoolRequest
     *
     * @return CreateDBResourcePoolResponse CreateDBResourcePoolResponse
     */
    public function createDBResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a scheduled scaling plan. This operation can be used only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *  *
     * @description ###
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
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
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->elasticPlanEnable)) {
            $query['ElasticPlanEnable'] = $request->elasticPlanEnable;
        }
        if (!Utils::isUnset($request->elasticPlanEndDay)) {
            $query['ElasticPlanEndDay'] = $request->elasticPlanEndDay;
        }
        if (!Utils::isUnset($request->elasticPlanMonthlyRepeat)) {
            $query['ElasticPlanMonthlyRepeat'] = $request->elasticPlanMonthlyRepeat;
        }
        if (!Utils::isUnset($request->elasticPlanName)) {
            $query['ElasticPlanName'] = $request->elasticPlanName;
        }
        if (!Utils::isUnset($request->elasticPlanNodeNum)) {
            $query['ElasticPlanNodeNum'] = $request->elasticPlanNodeNum;
        }
        if (!Utils::isUnset($request->elasticPlanStartDay)) {
            $query['ElasticPlanStartDay'] = $request->elasticPlanStartDay;
        }
        if (!Utils::isUnset($request->elasticPlanTimeEnd)) {
            $query['ElasticPlanTimeEnd'] = $request->elasticPlanTimeEnd;
        }
        if (!Utils::isUnset($request->elasticPlanTimeStart)) {
            $query['ElasticPlanTimeStart'] = $request->elasticPlanTimeStart;
        }
        if (!Utils::isUnset($request->elasticPlanType)) {
            $query['ElasticPlanType'] = $request->elasticPlanType;
        }
        if (!Utils::isUnset($request->elasticPlanWeeklyRepeat)) {
            $query['ElasticPlanWeeklyRepeat'] = $request->elasticPlanWeeklyRepeat;
        }
        if (!Utils::isUnset($request->elasticPlanWorkerSpec)) {
            $query['ElasticPlanWorkerSpec'] = $request->elasticPlanWorkerSpec;
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
        if (!Utils::isUnset($request->resourcePoolName)) {
            $query['ResourcePoolName'] = $request->resourcePoolName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateElasticPlan',
            'version'     => '2019-03-15',
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
     * @summary Creates a scheduled scaling plan. This operation can be used only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *  *
     * @description ###
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
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
     * @param CreateServiceLinkedRoleRequest $request CreateServiceLinkedRoleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceLinkedRoleResponse CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceLinkedRole',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceLinkedRoleRequest $request CreateServiceLinkedRoleRequest
     *
     * @return CreateServiceLinkedRoleResponse CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
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
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
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
            'action'      => 'DeleteAccount',
            'version'     => '2019-03-15',
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
     * @summary Manually deletes backup sets.
     *  *
     * @description *   Deleting backup sets is an asynchronous operation and may require 10 to 20 minutes to complete.
     * *   You can delete up to 100 backup sets at a time. If you want to delete more than 100 backup sets, call this operation twice.
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
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBackups',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
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
     * @description *   Deleting backup sets is an asynchronous operation and may require 10 to 20 minutes to complete.
     * *   You can delete up to 100 backup sets at a time. If you want to delete more than 100 backup sets, call this operation twice.
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
     * @description *   Subscription clusters cannot be deleted by using API operations. After expiration, subscription clusters are automatically released. If you no longer need a cluster, you can submit a request to unsubscribe from the cluster in the Billing Management console. For more information about cluster refunds, see [Refund policy](https://help.aliyun.com/document_detail/471477.html).
     * *   After you delete a cluster, resources of the cluster are immediately released, and data of the cluster is no longer retained and cannot be recovered. Proceed with caution.
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
            'action'      => 'DeleteDBCluster',
            'version'     => '2019-03-15',
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
     * @description *   Subscription clusters cannot be deleted by using API operations. After expiration, subscription clusters are automatically released. If you no longer need a cluster, you can submit a request to unsubscribe from the cluster in the Billing Management console. For more information about cluster refunds, see [Refund policy](https://help.aliyun.com/document_detail/471477.html).
     * *   After you delete a cluster, resources of the cluster are immediately released, and data of the cluster is no longer retained and cannot be recovered. Proceed with caution.
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
     * @summary Deletes a resource group from an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @description ### Precautions
     * *   You can call this operation only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be deleted.
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
            'action'      => 'DeleteDBResourceGroup',
            'version'     => '2019-03-15',
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
     * @summary Deletes a resource group from an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @description ### Precautions
     * *   You can call this operation only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be deleted.
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
     * @description **Precautions**
     * *   This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be deleted.
     *  *
     * @param DeleteDBResourcePoolRequest $request DeleteDBResourcePoolRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDBResourcePoolResponse DeleteDBResourcePoolResponse
     */
    public function deleteDBResourcePoolWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->poolName)) {
            $query['PoolName'] = $request->poolName;
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
            'action'      => 'DeleteDBResourcePool',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description **Precautions**
     * *   This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     * *   The default resource group USER_DEFAULT cannot be deleted.
     *  *
     * @param DeleteDBResourcePoolRequest $request DeleteDBResourcePoolRequest
     *
     * @return DeleteDBResourcePoolResponse DeleteDBResourcePoolResponse
     */
    public function deleteDBResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a scheduled scaling plan. This operation can be used only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
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
            'action'      => 'DeleteElasticPlan',
            'version'     => '2019-03-15',
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
     * @summary Deletes a scheduled scaling plan. This operation can be used only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
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
     * @summary Queries a list of database accounts for an AnalyticDB for MySQL cluster.
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
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
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
            'action'      => 'DescribeAccounts',
            'version'     => '2019-03-15',
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
     * @summary Queries a list of database accounts for an AnalyticDB for MySQL cluster.
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
     * @summary DescribeActiveOperationMaintainConf
     *  *
     * @param DescribeActiveOperationMaintainConfRequest $request DescribeActiveOperationMaintainConfRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeActiveOperationMaintainConfResponse DescribeActiveOperationMaintainConfResponse
     */
    public function describeActiveOperationMaintainConfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeActiveOperationMaintainConf',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeActiveOperationMaintainConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DescribeActiveOperationMaintainConf
     *  *
     * @param DescribeActiveOperationMaintainConfRequest $request DescribeActiveOperationMaintainConfRequest
     *
     * @return DescribeActiveOperationMaintainConfResponse DescribeActiveOperationMaintainConfResponse
     */
    public function describeActiveOperationMaintainConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationMaintainConfWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether the suggestion feature is enabled for an AnalyticDB for MySQL cluster.
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
            'version'     => '2019-03-15',
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
     * @summary Queries whether the suggestion feature is enabled for an AnalyticDB for MySQL cluster.
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
     * @summary Queries the information about an account or the list of accounts of a specific database within an AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeAllAccountsRequest $request DescribeAllAccountsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAllAccountsResponse DescribeAllAccountsResponse
     */
    public function describeAllAccountsWithOptions($request, $runtime)
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
            'action'      => 'DescribeAllAccounts',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an account or the list of accounts of a specific database within an AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeAllAccountsRequest $request DescribeAllAccountsRequest
     *
     * @return DescribeAllAccountsResponse DescribeAllAccountsResponse
     */
    public function describeAllAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of databases, tables, and columns in a cluster.
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
            'version'     => '2019-03-15',
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
     * @summary Queries a list of databases, tables, and columns in a cluster.
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
     * @summary Queries the applied optimization suggestions for an AnalyticDB for MySQL cluster.
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
            'version'     => '2019-03-15',
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
     * @summary Queries the applied optimization suggestions for an AnalyticDB for MySQL cluster.
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
     * @summary Queries the SQL audit settings of an AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeAuditLogConfigRequest $request DescribeAuditLogConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuditLogConfigResponse DescribeAuditLogConfigResponse
     */
    public function describeAuditLogConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribeAuditLogConfig',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuditLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the SQL audit settings of an AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeAuditLogConfigRequest $request DescribeAuditLogConfigRequest
     *
     * @return DescribeAuditLogConfigResponse DescribeAuditLogConfigResponse
     */
    public function describeAuditLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditLogConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the SQL audit logs of an AnalyticDB for MySQL cluster.
     *  *
     * @description Before you call the DescribeAuditLogRecords operation to query the SQL audit logs of an AnalyticDB for MySQL cluster, you must enable SQL audit for the cluster. You can call the [DescribeAuditLogConfig](https://help.aliyun.com/document_detail/190628.html) operation to query the status of SQL audit. If SQL audit is disabled, you can call the [ModifyAuditLogConfig](https://help.aliyun.com/document_detail/190629.html) operation to enable SQL audit.
     * SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried. The following operations are not recorded in SQL audit logs: **INSERT INTO VALUES**, **REPLACE INTO VALUES**, and **UPSERT INTO VALUES**.
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
            'version'     => '2019-03-15',
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
     * @description Before you call the DescribeAuditLogRecords operation to query the SQL audit logs of an AnalyticDB for MySQL cluster, you must enable SQL audit for the cluster. You can call the [DescribeAuditLogConfig](https://help.aliyun.com/document_detail/190628.html) operation to query the status of SQL audit. If SQL audit is disabled, you can call the [ModifyAuditLogConfig](https://help.aliyun.com/document_detail/190629.html) operation to enable SQL audit.
     * SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried. The following operations are not recorded in SQL audit logs: **INSERT INTO VALUES**, **REPLACE INTO VALUES**, and **UPSERT INTO VALUES**.
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
     * @summary Queries the auto-renewal status of a subscription AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeAutoRenewAttributeRequest $request DescribeAutoRenewAttributeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAutoRenewAttributeResponse DescribeAutoRenewAttributeResponse
     */
    public function describeAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterIds)) {
            $query['DBClusterIds'] = $request->DBClusterIds;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'DescribeAutoRenewAttribute',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the auto-renewal status of a subscription AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeAutoRenewAttributeRequest $request DescribeAutoRenewAttributeRequest
     *
     * @return DescribeAutoRenewAttributeResponse DescribeAutoRenewAttributeResponse
     */
    public function describeAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the available suggestions for cluster optimization.
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
            'version'     => '2019-03-15',
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
     * @summary Queries the available suggestions for cluster optimization.
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
     * @summary Queries the resources of clusters within zones of a region.
     *  *
     * @param DescribeAvailableResourceRequest $request DescribeAvailableResourceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableResourceResponse DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->DBClusterVersion)) {
            $query['DBClusterVersion'] = $request->DBClusterVersion;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableResource',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the resources of clusters within zones of a region.
     *  *
     * @param DescribeAvailableResourceRequest $request DescribeAvailableResourceRequest
     *
     * @return DescribeAvailableResourceResponse DescribeAvailableResourceResponse
     */
    public function describeAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($request, $runtime);
    }

    /**
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
            'version'     => '2019-03-15',
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
     * @summary Queries a list of backup sets for an AnalyticDB for MySQL cluster.
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
        if (!Utils::isUnset($request->crossRole)) {
            $query['CrossRole'] = $request->crossRole;
        }
        if (!Utils::isUnset($request->crossUid)) {
            $query['CrossUid'] = $request->crossUid;
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
            'action'      => 'DescribeBackups',
            'version'     => '2019-03-15',
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
     * @summary Queries a list of backup sets for an AnalyticDB for MySQL cluster.
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
            'version'     => '2019-03-15',
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
     * @summary Queries the specifications of computing resources for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters within a region.
     *  *
     * @param DescribeComputeResourceRequest $request DescribeComputeResourceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeComputeResourceResponse DescribeComputeResourceResponse
     */
    public function describeComputeResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBClusterVersion)) {
            $query['DBClusterVersion'] = $request->DBClusterVersion;
        }
        if (!Utils::isUnset($request->migrate)) {
            $query['Migrate'] = $request->migrate;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeComputeResource',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeComputeResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the specifications of computing resources for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters within a region.
     *  *
     * @param DescribeComputeResourceRequest $request DescribeComputeResourceRequest
     *
     * @return DescribeComputeResourceResponse DescribeComputeResourceResponse
     */
    public function describeComputeResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComputeResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the current number of connections to an AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeConnectionCountRecordsRequest $request DescribeConnectionCountRecordsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeConnectionCountRecordsResponse DescribeConnectionCountRecordsResponse
     */
    public function describeConnectionCountRecordsWithOptions($request, $runtime)
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
            'action'      => 'DescribeConnectionCountRecords',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConnectionCountRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the current number of connections to an AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeConnectionCountRecordsRequest $request DescribeConnectionCountRecordsRequest
     *
     * @return DescribeConnectionCountRecordsResponse DescribeConnectionCountRecordsResponse
     */
    public function describeConnectionCountRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConnectionCountRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of IP address whitelists for an AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeDBClusterAccessWhiteListRequest $request DescribeDBClusterAccessWhiteListRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterAccessWhiteListResponse DescribeDBClusterAccessWhiteListResponse
     */
    public function describeDBClusterAccessWhiteListWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBClusterAccessWhiteList',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterAccessWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of IP address whitelists for an AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeDBClusterAccessWhiteListRequest $request DescribeDBClusterAccessWhiteListRequest
     *
     * @return DescribeDBClusterAccessWhiteListResponse DescribeDBClusterAccessWhiteListResponse
     */
    public function describeDBClusterAccessWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAccessWhiteListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an AnalyticDB for MySQL cluster.
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
            'action'      => 'DescribeDBClusterAttribute',
            'version'     => '2019-03-15',
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
            'version'     => '2019-03-15',
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
     * @summary Queries the network information about an AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeDBClusterNetInfoRequest $request DescribeDBClusterNetInfoRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterNetInfoResponse DescribeDBClusterNetInfoResponse
     */
    public function describeDBClusterNetInfoWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBClusterNetInfo',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterNetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the network information about an AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeDBClusterNetInfoRequest $request DescribeDBClusterNetInfoRequest
     *
     * @return DescribeDBClusterNetInfoResponse DescribeDBClusterNetInfoResponse
     */
    public function describeDBClusterNetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterNetInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the performance data of an AnalyticDB for MySQL cluster.
     *  *
     * @description You can call this operation to query the performance data of a cluster over a time range based on its performance metrics. The data is collected every 30 seconds. This operation allows you to query information about slow queries, such as the SQL query duration, number of scanned rows, and amount of scanned data.
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
            'version'     => '2019-03-15',
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
     * @description You can call this operation to query the performance data of a cluster over a time range based on its performance metrics. The data is collected every 30 seconds. This operation allows you to query information about slow queries, such as the SQL query duration, number of scanned rows, and amount of scanned data.
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
     * @summary Queries the monitoring information about resource groups within an AnalyticDB for MySQL cluster.
     *  *
     * @description > You can also view the monitoring information about resource groups within an AnalyticDB for MySQL cluster in elastic mode for Cluster Edition in the form of graphs in the console. For more information, see [View monitoring information](https://help.aliyun.com/document_detail/188721.html).
     *  *
     * @param DescribeDBClusterResourcePoolPerformanceRequest $request DescribeDBClusterResourcePoolPerformanceRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterResourcePoolPerformanceResponse DescribeDBClusterResourcePoolPerformanceResponse
     */
    public function describeDBClusterResourcePoolPerformanceWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBClusterResourcePoolPerformance',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterResourcePoolPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the monitoring information about resource groups within an AnalyticDB for MySQL cluster.
     *  *
     * @description > You can also view the monitoring information about resource groups within an AnalyticDB for MySQL cluster in elastic mode for Cluster Edition in the form of graphs in the console. For more information, see [View monitoring information](https://help.aliyun.com/document_detail/188721.html).
     *  *
     * @param DescribeDBClusterResourcePoolPerformanceRequest $request DescribeDBClusterResourcePoolPerformanceRequest
     *
     * @return DescribeDBClusterResourcePoolPerformanceResponse DescribeDBClusterResourcePoolPerformanceResponse
     */
    public function describeDBClusterResourcePoolPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterResourcePoolPerformanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the SSL configurations of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @param DescribeDBClusterSSLRequest $request DescribeDBClusterSSLRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterSSLResponse DescribeDBClusterSSLResponse
     */
    public function describeDBClusterSSLWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBClusterSSL',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the SSL configurations of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @param DescribeDBClusterSSLRequest $request DescribeDBClusterSSLRequest
     *
     * @return DescribeDBClusterSSLResponse DescribeDBClusterSSLResponse
     */
    public function describeDBClusterSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterSSLWithOptions($request, $runtime);
    }

    /**
     * @summary 获取实例分片(Shard)数目
     *  *
     * @param DescribeDBClusterShardNumberRequest $request DescribeDBClusterShardNumberRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterShardNumberResponse DescribeDBClusterShardNumberResponse
     */
    public function describeDBClusterShardNumberWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBClusterShardNumber',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterShardNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例分片(Shard)数目
     *  *
     * @param DescribeDBClusterShardNumberRequest $request DescribeDBClusterShardNumberRequest
     *
     * @return DescribeDBClusterShardNumberResponse DescribeDBClusterShardNumberResponse
     */
    public function describeDBClusterShardNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterShardNumberWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the storage overview information of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster, such as the total data size, hot data size, cold data size, and data growth.
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
            'version'     => '2019-03-15',
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
     * @summary Queries the storage overview information of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster, such as the total data size, hot data size, cold data size, and data growth.
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
     * @summary Queries the status of AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters within a region.
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
            'action'      => 'DescribeDBClusterStatus',
            'version'     => '2019-03-15',
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
     * @summary Queries the status of AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters within a region.
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
     * @summary Queries a list of AnalyticDB for MySQL clusters within a region.
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
        if (!Utils::isUnset($request->DBVersion)) {
            $query['DBVersion'] = $request->DBVersion;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusters',
            'version'     => '2019-03-15',
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
     * @summary Queries a list of AnalyticDB for MySQL clusters within a region.
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
     * @summary Queries the information about a resource group for an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @description ###
     * You can call this operation only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
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
            'action'      => 'DescribeDBResourceGroup',
            'version'     => '2019-03-15',
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
     * @summary Queries the information about a resource group for an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @description ###
     * You can call this operation only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
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
     * @summary 查询资源池
     *  *
     * @description This operation is applicable only for elastic clusters of 32 cores or more.
     *  *
     * @param DescribeDBResourcePoolRequest $request DescribeDBResourcePoolRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBResourcePoolResponse DescribeDBResourcePoolResponse
     */
    public function describeDBResourcePoolWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->poolName)) {
            $query['PoolName'] = $request->poolName;
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
            'action'      => 'DescribeDBResourcePool',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询资源池
     *  *
     * @description This operation is applicable only for elastic clusters of 32 cores or more.
     *  *
     * @param DescribeDBResourcePoolRequest $request DescribeDBResourcePoolRequest
     *
     * @return DescribeDBResourcePoolResponse DescribeDBResourcePoolResponse
     */
    public function describeDBResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the deduplicated statistics of SQL statements that meet a condition of the resource group, database, username, and source IP address in an AnalyticDB for MySQL cluster.
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
            'version'     => '2019-03-15',
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
     * @summary Queries the deduplicated statistics of SQL statements that meet a condition of the resource group, database, username, and source IP address in an AnalyticDB for MySQL cluster.
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
     * @summary Queries the monitoring information about queries within a time range.
     *  *
     * @param DescribeDiagnosisMonitorPerformanceRequest $request DescribeDiagnosisMonitorPerformanceRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiagnosisMonitorPerformanceResponse DescribeDiagnosisMonitorPerformanceResponse
     */
    public function describeDiagnosisMonitorPerformanceWithOptions($request, $runtime)
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
            'action'      => 'DescribeDiagnosisMonitorPerformance',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosisMonitorPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the monitoring information about queries within a time range.
     *  *
     * @param DescribeDiagnosisMonitorPerformanceRequest $request DescribeDiagnosisMonitorPerformanceRequest
     *
     * @return DescribeDiagnosisMonitorPerformanceResponse DescribeDiagnosisMonitorPerformanceResponse
     */
    public function describeDiagnosisMonitorPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisMonitorPerformanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the diagnostic information about SQL statements that meet a condition in an AnalyticDB for MySQL cluster.
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
            'version'     => '2019-03-15',
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
     * @summary Queries the diagnostic information about SQL statements that meet a condition in an AnalyticDB for MySQL cluster.
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
            'version'     => '2019-03-15',
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
     * @summary Queries the execution information about distributed tasks in a stage of a query.
     *  *
     * @param DescribeDiagnosisTasksRequest $request DescribeDiagnosisTasksRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiagnosisTasksResponse DescribeDiagnosisTasksResponse
     */
    public function describeDiagnosisTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnosisTasks',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosisTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the execution information about distributed tasks in a stage of a query.
     *  *
     * @param DescribeDiagnosisTasksRequest $request DescribeDiagnosisTasksRequest
     *
     * @return DescribeDiagnosisTasksResponse DescribeDiagnosisTasksResponse
     */
    public function describeDiagnosisTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisTasksWithOptions($request, $runtime);
    }

    /**
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
            'version'     => '2019-03-15',
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
     * @summary Queries the range for the number of elastic I/O units (EIUs) for an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @param DescribeEIURangeRequest $request DescribeEIURangeRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEIURangeResponse DescribeEIURangeResponse
     */
    public function describeEIURangeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->computeResource)) {
            $query['ComputeResource'] = $request->computeResource;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBClusterVersion)) {
            $query['DBClusterVersion'] = $request->DBClusterVersion;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->storageSize)) {
            $query['StorageSize'] = $request->storageSize;
        }
        if (!Utils::isUnset($request->subOperation)) {
            $query['SubOperation'] = $request->subOperation;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEIURange',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEIURangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the range for the number of elastic I/O units (EIUs) for an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @param DescribeEIURangeRequest $request DescribeEIURangeRequest
     *
     * @return DescribeEIURangeResponse DescribeEIURangeResponse
     */
    public function describeEIURange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEIURangeWithOptions($request, $runtime);
    }

    /**
     * @description This operation is available only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *  *
     * @param DescribeElasticDailyPlanRequest $request DescribeElasticDailyPlanRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeElasticDailyPlanResponse DescribeElasticDailyPlanResponse
     */
    public function describeElasticDailyPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->elasticDailyPlanDay)) {
            $query['ElasticDailyPlanDay'] = $request->elasticDailyPlanDay;
        }
        if (!Utils::isUnset($request->elasticDailyPlanStatusList)) {
            $query['ElasticDailyPlanStatusList'] = $request->elasticDailyPlanStatusList;
        }
        if (!Utils::isUnset($request->elasticPlanName)) {
            $query['ElasticPlanName'] = $request->elasticPlanName;
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
        if (!Utils::isUnset($request->resourcePoolName)) {
            $query['ResourcePoolName'] = $request->resourcePoolName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeElasticDailyPlan',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeElasticDailyPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description This operation is available only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *  *
     * @param DescribeElasticDailyPlanRequest $request DescribeElasticDailyPlanRequest
     *
     * @return DescribeElasticDailyPlanResponse DescribeElasticDailyPlanResponse
     */
    public function describeElasticDailyPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticDailyPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Queries scaling plans of an AnalyticDB for MySQL cluster. This operation can be used only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *  *
     * @description ###
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *  *
     * @param DescribeElasticPlanRequest $request DescribeElasticPlanRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeElasticPlanResponse DescribeElasticPlanResponse
     */
    public function describeElasticPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->elasticPlanEnable)) {
            $query['ElasticPlanEnable'] = $request->elasticPlanEnable;
        }
        if (!Utils::isUnset($request->elasticPlanName)) {
            $query['ElasticPlanName'] = $request->elasticPlanName;
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
        if (!Utils::isUnset($request->resourcePoolName)) {
            $query['ResourcePoolName'] = $request->resourcePoolName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeElasticPlan',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeElasticPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries scaling plans of an AnalyticDB for MySQL cluster. This operation can be used only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *  *
     * @description ###
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *  *
     * @param DescribeElasticPlanRequest $request DescribeElasticPlanRequest
     *
     * @return DescribeElasticPlanResponse DescribeElasticPlanResponse
     */
    public function describeElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tables that have excessive primary key fields in an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
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
            'version'     => '2019-03-15',
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
     * @summary Queries the tables that have excessive primary key fields in an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
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
     * @summary Queries the monitoring information about tables.
     *  *
     * @param DescribeInclinedTablesRequest $request DescribeInclinedTablesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInclinedTablesResponse DescribeInclinedTablesResponse
     */
    public function describeInclinedTablesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->tableType)) {
            $query['TableType'] = $request->tableType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInclinedTables',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInclinedTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the monitoring information about tables.
     *  *
     * @param DescribeInclinedTablesRequest $request DescribeInclinedTablesRequest
     *
     * @return DescribeInclinedTablesResponse DescribeInclinedTablesResponse
     */
    public function describeInclinedTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInclinedTablesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the minor version of an AnalyticDB for MySQL cluster.
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
            'version'     => '2019-03-15',
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
     * @summary Queries the information about the minor version of an AnalyticDB for MySQL cluster.
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
     * @summary 枚举当前账号kms服务key
     *  *
     * @param DescribeKmsKeysRequest $request DescribeKmsKeysRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeKmsKeysResponse DescribeKmsKeysResponse
     */
    public function describeKmsKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeKmsKeys',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeKmsKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 枚举当前账号kms服务key
     *  *
     * @param DescribeKmsKeysRequest $request DescribeKmsKeysRequest
     *
     * @return DescribeKmsKeysResponse DescribeKmsKeysResponse
     */
    public function describeKmsKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKmsKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about asynchronous import and export tasks of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about how to asynchronously submit import and export tasks, see [Asynchronously submit an import or export task](https://help.aliyun.com/document_detail/160291.html).
     *  *
     * @param DescribeLoadTasksRecordsRequest $request DescribeLoadTasksRecordsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadTasksRecordsResponse DescribeLoadTasksRecordsResponse
     */
    public function describeLoadTasksRecordsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadTasksRecords',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadTasksRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about asynchronous import and export tasks of an AnalyticDB for MySQL cluster.
     *  *
     * @description For information about how to asynchronously submit import and export tasks, see [Asynchronously submit an import or export task](https://help.aliyun.com/document_detail/160291.html).
     *  *
     * @param DescribeLoadTasksRecordsRequest $request DescribeLoadTasksRecordsRequest
     *
     * @return DescribeLoadTasksRecordsResponse DescribeLoadTasksRecordsResponse
     */
    public function describeLoadTasksRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadTasksRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLoghubDetailRequest $request DescribeLoghubDetailRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoghubDetailResponse DescribeLoghubDetailResponse
     */
    public function describeLoghubDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->exportName)) {
            $query['ExportName'] = $request->exportName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'DescribeLoghubDetail',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoghubDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLoghubDetailRequest $request DescribeLoghubDetailRequest
     *
     * @return DescribeLoghubDetailResponse DescribeLoghubDetailResponse
     */
    public function describeLoghubDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoghubDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about O&M events.
     *  *
     * @param DescribeMaintenanceActionRequest $request DescribeMaintenanceActionRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMaintenanceActionResponse DescribeMaintenanceActionResponse
     */
    public function describeMaintenanceActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isHistory)) {
            $query['IsHistory'] = $request->isHistory;
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
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
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
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMaintenanceAction',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMaintenanceActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about O&M events.
     *  *
     * @param DescribeMaintenanceActionRequest $request DescribeMaintenanceActionRequest
     *
     * @return DescribeMaintenanceActionResponse DescribeMaintenanceActionResponse
     */
    public function describeMaintenanceAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMaintenanceActionWithOptions($request, $runtime);
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
            'version'     => '2019-03-15',
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
     * @summary Queries the metrics of an SQL pattern such as the query duration and average memory usage within a period of time.
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
            'version'     => '2019-03-15',
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
     * @summary Queries the metrics of an SQL pattern such as the query duration and average memory usage within a period of time.
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
     * @summary Queries the queries that are being executed on a cluster.
     *  *
     * @param DescribeProcessListRequest $request DescribeProcessListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProcessListResponse DescribeProcessListResponse
     */
    public function describeProcessListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->runningTime)) {
            $query['RunningTime'] = $request->runningTime;
        }
        if (!Utils::isUnset($request->showFull)) {
            $query['ShowFull'] = $request->showFull;
        }
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProcessList',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProcessListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the queries that are being executed on a cluster.
     *  *
     * @param DescribeProcessListRequest $request DescribeProcessListRequest
     *
     * @return DescribeProcessListResponse DescribeProcessListResponse
     */
    public function describeProcessList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProcessListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of available regions and zones for AnalyticDB for MySQL.
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
            'version'     => '2019-03-15',
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
     * @summary Queries a list of available regions and zones for AnalyticDB for MySQL.
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
     * @param DescribeRegionsMixedRequest $request DescribeRegionsMixedRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsMixedResponse DescribeRegionsMixedResponse
     */
    public function describeRegionsMixedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeRegionsMixed',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsMixedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRegionsMixedRequest $request DescribeRegionsMixedRequest
     *
     * @return DescribeRegionsMixedResponse DescribeRegionsMixedResponse
     */
    public function describeRegionsMixed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsMixedWithOptions($request, $runtime);
    }

    /**
     * @summary 查询Resubmit配置
     *  *
     * @param DescribeResubmitConfigRequest $request DescribeResubmitConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResubmitConfigResponse DescribeResubmitConfigResponse
     */
    public function describeResubmitConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'DescribeResubmitConfig',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResubmitConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询Resubmit配置
     *  *
     * @param DescribeResubmitConfigRequest $request DescribeResubmitConfigRequest
     *
     * @return DescribeResubmitConfigResponse DescribeResubmitConfigResponse
     */
    public function describeResubmitConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResubmitConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 查询SQA状态
     *  *
     * @param DescribeSQAConfigRequest $request DescribeSQAConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQAConfigResponse DescribeSQAConfigResponse
     */
    public function describeSQAConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'DescribeSQAConfig',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQAConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询SQA状态
     *  *
     * @param DescribeSQAConfigRequest $request DescribeSQAConfigRequest
     *
     * @return DescribeSQAConfigResponse DescribeSQAConfigResponse
     */
    public function describeSQAConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQAConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of SQL patterns for an AnalyticDB for MySQL cluster within a period of time.
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
            'version'     => '2019-03-15',
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
     * @summary Queries a list of SQL patterns for an AnalyticDB for MySQL cluster within a period of time.
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
     * @summary Queries the plan information about an SQL statement such as a query statement or an extract-transform-load (ETL) task statement.
     *  *
     * @param DescribeSQLPlanRequest $request DescribeSQLPlanRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQLPlanResponse DescribeSQLPlanResponse
     */
    public function describeSQLPlanWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->processId)) {
            $query['ProcessId'] = $request->processId;
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
            'action'      => 'DescribeSQLPlan',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the plan information about an SQL statement such as a query statement or an extract-transform-load (ETL) task statement.
     *  *
     * @param DescribeSQLPlanRequest $request DescribeSQLPlanRequest
     *
     * @return DescribeSQLPlanResponse DescribeSQLPlanResponse
     */
    public function describeSQLPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLPlanWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLPlanTaskRequest $request DescribeSQLPlanTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSQLPlanTaskResponse DescribeSQLPlanTaskResponse
     */
    public function describeSQLPlanTaskWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->processId)) {
            $query['ProcessId'] = $request->processId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->stageId)) {
            $query['StageId'] = $request->stageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLPlanTask',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLPlanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLPlanTaskRequest $request DescribeSQLPlanTaskRequest
     *
     * @return DescribeSQLPlanTaskResponse DescribeSQLPlanTaskResponse
     */
    public function describeSQLPlanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLPlanTaskWithOptions($request, $runtime);
    }

    /**
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
            'action'      => 'DescribeSchemas',
            'version'     => '2019-03-15',
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
     * @param DescribeSlowLogRecordsRequest $request DescribeSlowLogRecordsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlowLogRecordsResponse DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecordsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->processID)) {
            $query['ProcessID'] = $request->processID;
        }
        if (!Utils::isUnset($request->range)) {
            $query['Range'] = $request->range;
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
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowLogRecords',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSlowLogRecordsRequest $request DescribeSlowLogRecordsRequest
     *
     * @return DescribeSlowLogRecordsResponse DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of SQL patterns for an AnalyticDB for MySQL cluster within a time range.
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
            'version'     => '2019-03-15',
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
     * @summary Queries a list of SQL patterns for an AnalyticDB for MySQL cluster within a time range.
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
     * @param DescribeSyncAvailableDBClusterListRequest $request DescribeSyncAvailableDBClusterListRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSyncAvailableDBClusterListResponse DescribeSyncAvailableDBClusterListResponse
     */
    public function describeSyncAvailableDBClusterListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceDBCluster)) {
            $query['SourceDBCluster'] = $request->sourceDBCluster;
        }
        if (!Utils::isUnset($request->syncPlatform)) {
            $query['SyncPlatform'] = $request->syncPlatform;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSyncAvailableDBClusterList',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSyncAvailableDBClusterListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSyncAvailableDBClusterListRequest $request DescribeSyncAvailableDBClusterListRequest
     *
     * @return DescribeSyncAvailableDBClusterListResponse DescribeSyncAvailableDBClusterListResponse
     */
    public function describeSyncAvailableDBClusterList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSyncAvailableDBClusterListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSyncJobListRequest $request DescribeSyncJobListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSyncJobListResponse DescribeSyncJobListResponse
     */
    public function describeSyncJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->getSourceDetail)) {
            $query['GetSourceDetail'] = $request->getSourceDetail;
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
        if (!Utils::isUnset($request->sourceDBClusterDescription)) {
            $query['SourceDBClusterDescription'] = $request->sourceDBClusterDescription;
        }
        if (!Utils::isUnset($request->sourceDBClusterId)) {
            $query['SourceDBClusterId'] = $request->sourceDBClusterId;
        }
        if (!Utils::isUnset($request->sourceDBType)) {
            $query['SourceDBType'] = $request->sourceDBType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSyncJobList',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSyncJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSyncJobListRequest $request DescribeSyncJobListRequest
     *
     * @return DescribeSyncJobListResponse DescribeSyncJobListResponse
     */
    public function describeSyncJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSyncJobListWithOptions($request, $runtime);
    }

    /**
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
            'version'     => '2019-03-15',
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
            'action'      => 'DescribeTableDetail',
            'version'     => '2019-03-15',
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
     * @summary Queries the information about partition diagnostics.
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTablePartitionDiagnose',
            'version'     => '2019-03-15',
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
     * @summary Queries the information about partition diagnostics.
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
     * @summary Queries the information about table statistics for an AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeTableStatisticsRequest $request DescribeTableStatisticsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTableStatisticsResponse DescribeTableStatisticsResponse
     */
    public function describeTableStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTableStatistics',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTableStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about table statistics for an AnalyticDB for MySQL cluster.
     *  *
     * @param DescribeTableStatisticsRequest $request DescribeTableStatisticsRequest
     *
     * @return DescribeTableStatisticsResponse DescribeTableStatisticsResponse
     */
    public function describeTableStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTableStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of tables in a database of an AnalyticDB for MySQL cluster.
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTables',
            'version'     => '2019-03-15',
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
     * @summary Queries a list of tables in a database of an AnalyticDB for MySQL cluster.
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
     * @summary Queries the information about a task.
     *  *
     * @param DescribeTaskInfoRequest $request DescribeTaskInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTaskInfoResponse DescribeTaskInfoResponse
     */
    public function describeTaskInfoWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTaskInfo',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a task.
     *  *
     * @param DescribeTaskInfoRequest $request DescribeTaskInfoRequest
     *
     * @return DescribeTaskInfoResponse DescribeTaskInfoResponse
     */
    public function describeTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the vSwitches.
     *  *
     * @param DescribeVSwitchesRequest $request DescribeVSwitchesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVSwitchesResponse DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vswId)) {
            $query['VswId'] = $request->vswId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVSwitches',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the vSwitches.
     *  *
     * @param DescribeVSwitchesRequest $request DescribeVSwitchesRequest
     *
     * @return DescribeVSwitchesResponse DescribeVSwitchesResponse
     */
    public function describeVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVSwitchsRequest $request DescribeVSwitchsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVSwitchsResponse DescribeVSwitchsResponse
     */
    public function describeVSwitchsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVSwitchs',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVSwitchsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVSwitchsRequest $request DescribeVSwitchsRequest
     *
     * @return DescribeVSwitchsResponse DescribeVSwitchsResponse
     */
    public function describeVSwitchs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpcsRequest $request DescribeVpcsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcsResponse DescribeVpcsResponse
     */
    public function describeVpcsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcs',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpcsRequest $request DescribeVpcsRequest
     *
     * @return DescribeVpcsResponse DescribeVpcsResponse
     */
    public function describeVpcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcsWithOptions($request, $runtime);
    }

    /**
     * @description You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition.
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
            'action'      => 'DetachUserENI',
            'version'     => '2019-03-15',
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
     * @description You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition.
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
            'version'     => '2019-03-15',
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
     * @summary Downloads the diagnostic information about SQL statements that meet a condition for an AnalyticDB for MySQL cluster.
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
            'version'     => '2019-03-15',
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
     * @summary Downloads the diagnostic information about SQL statements that meet a condition for an AnalyticDB for MySQL cluster.
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
            'version'     => '2019-03-15',
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
     * @summary Grants permissions to the service account of an AnalyticDB for MySQL cluster.
     *  *
     * @description ###
     * If you need Alibaba Cloud technical support to perform operations on your AnalyticDB for MySQL cluster, you must grant permissions to the service account of your cluster. When the validity period of the authorization ends, the granted permissions are automatically revoked.
     *  *
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
            'version'     => '2019-03-15',
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
     * @summary Grants permissions to the service account of an AnalyticDB for MySQL cluster.
     *  *
     * @description ###
     * If you need Alibaba Cloud technical support to perform operations on your AnalyticDB for MySQL cluster, you must grant permissions to the service account of your cluster. When the validity period of the authorization ends, the granted permissions are automatically revoked.
     *  *
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
     * @summary Terminates an ongoing query.
     *  *
     * @param KillProcessRequest $request KillProcessRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return KillProcessResponse KillProcessResponse
     */
    public function killProcessWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->processId)) {
            $query['ProcessId'] = $request->processId;
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
            'action'      => 'KillProcess',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KillProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Terminates an ongoing query.
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
     * @summary Queries the tags that are added to AnalyticDB for MySQL clusters, or the AnalyticDB for MySQL clusters that have tags added.
     *  *
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
            'version'     => '2019-03-15',
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
     * @summary Queries the tags that are added to AnalyticDB for MySQL clusters, or the AnalyticDB for MySQL clusters that have tags added.
     *  *
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
     * @summary Migrates data from a Data Warehouse Edition (V3.0) cluster to a Data Lakehouse Edition (V3.0) cluster in AnalyticDB for MySQL.
     *  *
     * @param MigrateDBClusterRequest $request MigrateDBClusterRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return MigrateDBClusterResponse MigrateDBClusterResponse
     */
    public function migrateDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->computeResource)) {
            $query['ComputeResource'] = $request->computeResource;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->shardNumber)) {
            $query['ShardNumber'] = $request->shardNumber;
        }
        if (!Utils::isUnset($request->storageResource)) {
            $query['StorageResource'] = $request->storageResource;
        }
        if (!Utils::isUnset($request->storageResourceSize)) {
            $query['StorageResourceSize'] = $request->storageResourceSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MigrateDBCluster',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MigrateDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Migrates data from a Data Warehouse Edition (V3.0) cluster to a Data Lakehouse Edition (V3.0) cluster in AnalyticDB for MySQL.
     *  *
     * @param MigrateDBClusterRequest $request MigrateDBClusterRequest
     *
     * @return MigrateDBClusterResponse MigrateDBClusterResponse
     */
    public function migrateDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateDBClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of a database account for an AnalyticDB for MySQL cluster.
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
            'action'      => 'ModifyAccountDescription',
            'version'     => '2019-03-15',
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
            'version'     => '2019-03-15',
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
     * @summary Modifies the auto-renewal status of a subscription AnalyticDB for MySQL cluster.
     *  *
     * @param ModifyAutoRenewAttributeRequest $request ModifyAutoRenewAttributeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAutoRenewAttributeResponse ModifyAutoRenewAttributeResponse
     */
    public function modifyAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->renewalStatus)) {
            $query['RenewalStatus'] = $request->renewalStatus;
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
            'action'      => 'ModifyAutoRenewAttribute',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the auto-renewal status of a subscription AnalyticDB for MySQL cluster.
     *  *
     * @param ModifyAutoRenewAttributeRequest $request ModifyAutoRenewAttributeRequest
     *
     * @return ModifyAutoRenewAttributeResponse ModifyAutoRenewAttributeResponse
     */
    public function modifyAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
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
            'version'     => '2019-03-15',
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
     * @summary Changes the endpoint of an AnalyticDB for MySQL cluster.
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
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
            'action'      => 'ModifyClusterConnectionString',
            'version'     => '2019-03-15',
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
     * @summary Changes the endpoint of an AnalyticDB for MySQL cluster.
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
     * @summary Changes the specifications of an AnalyticDB for MySQL cluster.
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
        if (!Utils::isUnset($request->DBClusterCategory)) {
            $query['DBClusterCategory'] = $request->DBClusterCategory;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBNodeClass)) {
            $query['DBNodeClass'] = $request->DBNodeClass;
        }
        if (!Utils::isUnset($request->DBNodeGroupCount)) {
            $query['DBNodeGroupCount'] = $request->DBNodeGroupCount;
        }
        if (!Utils::isUnset($request->DBNodeStorage)) {
            $query['DBNodeStorage'] = $request->DBNodeStorage;
        }
        if (!Utils::isUnset($request->diskPerformanceLevel)) {
            $query['DiskPerformanceLevel'] = $request->diskPerformanceLevel;
        }
        if (!Utils::isUnset($request->elasticIOResource)) {
            $query['ElasticIOResource'] = $request->elasticIOResource;
        }
        if (!Utils::isUnset($request->elasticIOResourceSize)) {
            $query['ElasticIOResourceSize'] = $request->elasticIOResourceSize;
        }
        if (!Utils::isUnset($request->executorCount)) {
            $query['ExecutorCount'] = $request->executorCount;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $query['ModifyType'] = $request->modifyType;
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
        if (!Utils::isUnset($request->storageResource)) {
            $query['StorageResource'] = $request->storageResource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBCluster',
            'version'     => '2019-03-15',
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
     * @summary Changes the specifications of an AnalyticDB for MySQL cluster.
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
     * @summary Modifies the IP address whitelists of a cluster.
     *  *
     * @param ModifyDBClusterAccessWhiteListRequest $request ModifyDBClusterAccessWhiteListRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterAccessWhiteListResponse ModifyDBClusterAccessWhiteListResponse
     */
    public function modifyDBClusterAccessWhiteListWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->securityIps)) {
            $query['SecurityIps'] = $request->securityIps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterAccessWhiteList',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterAccessWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the IP address whitelists of a cluster.
     *  *
     * @param ModifyDBClusterAccessWhiteListRequest $request ModifyDBClusterAccessWhiteListRequest
     *
     * @return ModifyDBClusterAccessWhiteListResponse ModifyDBClusterAccessWhiteListResponse
     */
    public function modifyDBClusterAccessWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterAccessWhiteListWithOptions($request, $runtime);
    }

    /**
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
            'action'      => 'ModifyDBClusterDescription',
            'version'     => '2019-03-15',
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
     * @summary Changes the maintenance window of an AnalyticDB for MySQL cluster.
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
            'action'      => 'ModifyDBClusterMaintainTime',
            'version'     => '2019-03-15',
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
     * @summary Changes the maintenance window of an AnalyticDB for MySQL cluster.
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
     * @summary Changes the billing method of an AnalyticDB for MySQL cluster.
     *  *
     * @param ModifyDBClusterPayTypeRequest $request ModifyDBClusterPayTypeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterPayTypeResponse ModifyDBClusterPayTypeResponse
     */
    public function modifyDBClusterPayTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbClusterId)) {
            $query['DbClusterId'] = $request->dbClusterId;
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
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterPayType',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterPayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the billing method of an AnalyticDB for MySQL cluster.
     *  *
     * @param ModifyDBClusterPayTypeRequest $request ModifyDBClusterPayTypeRequest
     *
     * @return ModifyDBClusterPayTypeResponse ModifyDBClusterPayTypeResponse
     */
    public function modifyDBClusterPayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterPayTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the resource group of an AnalyticDB for MySQL cluster.
     *  *
     * @description Resource Management enables you to build an organizational structure for resources based on your business needs. You can use a resource directory, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](~~94475#concept-zyn-3p1-dhb~~ "Resource Management provides a collection of resource management services that support enterprise IT administration. The services include Resource Directory, Resource Group, and Tag. Resource Directory allows you to build an organizational structure for resources based on your business requirements. Resource Group and Tag allow you to hierarchically manage the resources. Resource Sharing allows you to share the resources among your accounts.")
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
            'version'     => '2019-03-15',
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
     * @summary Modifies the resource group of an AnalyticDB for MySQL cluster.
     *  *
     * @description Resource Management enables you to build an organizational structure for resources based on your business needs. You can use a resource directory, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](~~94475#concept-zyn-3p1-dhb~~ "Resource Management provides a collection of resource management services that support enterprise IT administration. The services include Resource Directory, Resource Group, and Tag. Resource Directory allows you to build an organizational structure for resources based on your business requirements. Resource Group and Tag allow you to hierarchically manage the resources. Resource Sharing allows you to share the resources among your accounts.")
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
     * @summary Modifies the SSL configurations of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @param ModifyDBClusterSSLRequest $request ModifyDBClusterSSLRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterSSLResponse ModifyDBClusterSSLResponse
     */
    public function modifyDBClusterSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->enableSSL)) {
            $query['EnableSSL'] = $request->enableSSL;
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
            'action'      => 'ModifyDBClusterSSL',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the SSL configurations of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @param ModifyDBClusterSSLRequest $request ModifyDBClusterSSLRequest
     *
     * @return ModifyDBClusterSSLResponse ModifyDBClusterSSLResponse
     */
    public function modifyDBClusterSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterSSLWithOptions($request, $runtime);
    }

    /**
     * @summary 修改访问VIP
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
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
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
            'version'     => '2019-03-15',
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
     * @summary 修改访问VIP
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
     * @summary Modifies the number of nodes or the query execution mode for a resource group of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @description ## Precautions
     * *   This operation is applicable only for elastic clusters of 32 cores or more.
     * *   The number of nodes cannot be changed for the default resource group USER_DEFAULT.
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
        if (!Utils::isUnset($tmpReq->poolUserList)) {
            $request->poolUserListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->poolUserList, 'PoolUserList', 'json');
        }
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
        if (!Utils::isUnset($request->nodeNum)) {
            $query['NodeNum'] = $request->nodeNum;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolUserListShrink)) {
            $query['PoolUserList'] = $request->poolUserListShrink;
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
            'action'      => 'ModifyDBResourceGroup',
            'version'     => '2019-03-15',
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
     * @summary Modifies the number of nodes or the query execution mode for a resource group of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *  *
     * @description ## Precautions
     * *   This operation is applicable only for elastic clusters of 32 cores or more.
     * *   The number of nodes cannot be changed for the default resource group USER_DEFAULT.
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
     * @summary Modifies the resources of a resource group. This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *  *
     * @description ###
     * *   You can call this operation only for elastic clusters of 32 cores or more.
     * *   You cannot change the number of nodes for the USER_DEFAULT resource group.
     *  *
     * @param ModifyDBResourcePoolRequest $request ModifyDBResourcePoolRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBResourcePoolResponse ModifyDBResourcePoolResponse
     */
    public function modifyDBResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->nodeNum)) {
            $query['NodeNum'] = $request->nodeNum;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolName)) {
            $query['PoolName'] = $request->poolName;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
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
            'action'      => 'ModifyDBResourcePool',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the resources of a resource group. This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *  *
     * @description ###
     * *   You can call this operation only for elastic clusters of 32 cores or more.
     * *   You cannot change the number of nodes for the USER_DEFAULT resource group.
     *  *
     * @param ModifyDBResourcePoolRequest $request ModifyDBResourcePoolRequest
     *
     * @return ModifyDBResourcePoolResponse ModifyDBResourcePoolResponse
     */
    public function modifyDBResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a scheduled scaling plan. This operation can be used only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *  *
     * @description You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
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
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->elasticPlanEnable)) {
            $query['ElasticPlanEnable'] = $request->elasticPlanEnable;
        }
        if (!Utils::isUnset($request->elasticPlanEndDay)) {
            $query['ElasticPlanEndDay'] = $request->elasticPlanEndDay;
        }
        if (!Utils::isUnset($request->elasticPlanMonthlyRepeat)) {
            $query['ElasticPlanMonthlyRepeat'] = $request->elasticPlanMonthlyRepeat;
        }
        if (!Utils::isUnset($request->elasticPlanName)) {
            $query['ElasticPlanName'] = $request->elasticPlanName;
        }
        if (!Utils::isUnset($request->elasticPlanNodeNum)) {
            $query['ElasticPlanNodeNum'] = $request->elasticPlanNodeNum;
        }
        if (!Utils::isUnset($request->elasticPlanStartDay)) {
            $query['ElasticPlanStartDay'] = $request->elasticPlanStartDay;
        }
        if (!Utils::isUnset($request->elasticPlanTimeEnd)) {
            $query['ElasticPlanTimeEnd'] = $request->elasticPlanTimeEnd;
        }
        if (!Utils::isUnset($request->elasticPlanTimeStart)) {
            $query['ElasticPlanTimeStart'] = $request->elasticPlanTimeStart;
        }
        if (!Utils::isUnset($request->elasticPlanType)) {
            $query['ElasticPlanType'] = $request->elasticPlanType;
        }
        if (!Utils::isUnset($request->elasticPlanWeeklyRepeat)) {
            $query['ElasticPlanWeeklyRepeat'] = $request->elasticPlanWeeklyRepeat;
        }
        if (!Utils::isUnset($request->elasticPlanWorkerSpec)) {
            $query['ElasticPlanWorkerSpec'] = $request->elasticPlanWorkerSpec;
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
        if (!Utils::isUnset($request->resourcePoolName)) {
            $query['ResourcePoolName'] = $request->resourcePoolName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyElasticPlan',
            'version'     => '2019-03-15',
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
     * @summary Modifies a scheduled scaling plan. This operation can be used only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *  *
     * @description You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
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
     * @summary Modifies the log backup settings of an AnalyticDB for MySQL cluster.
     *  *
     * @param ModifyLogBackupPolicyRequest $request ModifyLogBackupPolicyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLogBackupPolicyResponse ModifyLogBackupPolicyResponse
     */
    public function modifyLogBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'ModifyLogBackupPolicy',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLogBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the log backup settings of an AnalyticDB for MySQL cluster.
     *  *
     * @param ModifyLogBackupPolicyRequest $request ModifyLogBackupPolicyRequest
     *
     * @return ModifyLogBackupPolicyResponse ModifyLogBackupPolicyResponse
     */
    public function modifyLogBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLogHubStatusRequest $request ModifyLogHubStatusRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLogHubStatusResponse ModifyLogHubStatusResponse
     */
    public function modifyLogHubStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->deliverName)) {
            $query['DeliverName'] = $request->deliverName;
        }
        if (!Utils::isUnset($request->logStoreName)) {
            $query['LogStoreName'] = $request->logStoreName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLogHubStatus',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLogHubStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyLogHubStatusRequest $request ModifyLogHubStatusRequest
     *
     * @return ModifyLogHubStatusResponse ModifyLogHubStatusResponse
     */
    public function modifyLogHubStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogHubStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the switchover time of O&M events.
     *  *
     * @param ModifyMaintenanceActionRequest $request ModifyMaintenanceActionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyMaintenanceActionResponse ModifyMaintenanceActionResponse
     */
    public function modifyMaintenanceActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMaintenanceAction',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMaintenanceActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the switchover time of O&M events.
     *  *
     * @param ModifyMaintenanceActionRequest $request ModifyMaintenanceActionRequest
     *
     * @return ModifyMaintenanceActionResponse ModifyMaintenanceActionResponse
     */
    public function modifyMaintenanceAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMaintenanceActionWithOptions($request, $runtime);
    }

    /**
     * @summary 修改Resubmit配置
     *  *
     * @param ModifyResubmitConfigRequest $tmpReq  ModifyResubmitConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyResubmitConfigResponse ModifyResubmitConfigResponse
     */
    public function modifyResubmitConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyResubmitConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->rules)) {
            $request->rulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->rulesShrink)) {
            $query['Rules'] = $request->rulesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyResubmitConfig',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyResubmitConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改Resubmit配置
     *  *
     * @param ModifyResubmitConfigRequest $request ModifyResubmitConfigRequest
     *
     * @return ModifyResubmitConfigResponse ModifyResubmitConfigResponse
     */
    public function modifyResubmitConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResubmitConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 修改SQA配置
     *  *
     * @param ModifySQAConfigRequest $request ModifySQAConfigRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySQAConfigResponse ModifySQAConfigResponse
     */
    public function modifySQAConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->SQAStatus)) {
            $query['SQAStatus'] = $request->SQAStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySQAConfig',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySQAConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改SQA配置
     *  *
     * @param ModifySQAConfigRequest $request ModifySQAConfigRequest
     *
     * @return ModifySQAConfigResponse ModifySQAConfigResponse
     */
    public function modifySQAConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySQAConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifySyncJobRequest $request ModifySyncJobRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySyncJobResponse ModifySyncJobResponse
     */
    public function modifySyncJobWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->sourceDBCluster)) {
            $query['SourceDBCluster'] = $request->sourceDBCluster;
        }
        if (!Utils::isUnset($request->syncPlatform)) {
            $query['SyncPlatform'] = $request->syncPlatform;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySyncJob',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySyncJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySyncJobRequest $request ModifySyncJobRequest
     *
     * @return ModifySyncJobResponse ModifySyncJobResponse
     */
    public function modifySyncJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySyncJobWithOptions($request, $runtime);
    }

    /**
     * @param OperateLogHubRequest $request OperateLogHubRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateLogHubResponse OperateLogHubResponse
     */
    public function operateLogHubWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->create)) {
            $query['Create'] = $request->create;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->deliverName)) {
            $query['DeliverName'] = $request->deliverName;
        }
        if (!Utils::isUnset($request->deliverTime)) {
            $query['DeliverTime'] = $request->deliverTime;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->filterDirtyData)) {
            $query['FilterDirtyData'] = $request->filterDirtyData;
        }
        if (!Utils::isUnset($request->logHubStores)) {
            $query['LogHubStores'] = $request->logHubStores;
        }
        if (!Utils::isUnset($request->logStoreName)) {
            $query['LogStoreName'] = $request->logStoreName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->provider)) {
            $query['Provider'] = $request->provider;
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
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateLogHub',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateLogHubResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateLogHubRequest $request OperateLogHubRequest
     *
     * @return OperateLogHubResponse OperateLogHubResponse
     */
    public function operateLogHub($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateLogHubWithOptions($request, $runtime);
    }

    /**
     * @summary Releases the public endpoint of an AnalyticDB for MySQL cluster.
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
            'action'      => 'ReleaseClusterPublicConnection',
            'version'     => '2019-03-15',
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
     * @summary Releases the public endpoint of an AnalyticDB for MySQL cluster.
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
     * @param ResetAccountPasswordRequest $request ResetAccountPasswordRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAccountPasswordResponse ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'ResetAccountPassword',
            'version'     => '2019-03-15',
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
            'version'     => '2019-03-15',
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
     * @summary Adds tags to an AnalyticDB for MySQL cluster.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'TagResources',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds tags to an AnalyticDB for MySQL cluster.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates a resource group of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster from a database account.
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
            'action'      => 'UnbindDBResourceGroupWithUser',
            'version'     => '2019-03-15',
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
     * @summary Disassociates a resource group of an AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster from a database account.
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
     * @summary Disassociates a database account from a resource group. This operation can be called only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *  *
     * @param UnbindDBResourcePoolWithUserRequest $request UnbindDBResourcePoolWithUserRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindDBResourcePoolWithUserResponse UnbindDBResourcePoolWithUserResponse
     */
    public function unbindDBResourcePoolWithUserWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->poolName)) {
            $query['PoolName'] = $request->poolName;
        }
        if (!Utils::isUnset($request->poolUser)) {
            $query['PoolUser'] = $request->poolUser;
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
            'action'      => 'UnbindDBResourcePoolWithUser',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindDBResourcePoolWithUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociates a database account from a resource group. This operation can be called only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition.
     *  *
     * @param UnbindDBResourcePoolWithUserRequest $request UnbindDBResourcePoolWithUserRequest
     *
     * @return UnbindDBResourcePoolWithUserResponse UnbindDBResourcePoolWithUserResponse
     */
    public function unbindDBResourcePoolWithUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDBResourcePoolWithUserWithOptions($request, $runtime);
    }

    /**
     * @summary Removes all tags from AnalyticDB for MySQL clusters.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
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
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes all tags from AnalyticDB for MySQL clusters.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the minor version of an AnalyticDB for MySQL cluster.
     *  *
     * @param UpgradeKernelVersionRequest $request UpgradeKernelVersionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeKernelVersionResponse UpgradeKernelVersionResponse
     */
    public function upgradeKernelVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBVersion)) {
            $query['DBVersion'] = $request->DBVersion;
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
        if (!Utils::isUnset($request->switchMode)) {
            $query['SwitchMode'] = $request->switchMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeKernelVersion',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeKernelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the minor version of an AnalyticDB for MySQL cluster.
     *  *
     * @param UpgradeKernelVersionRequest $request UpgradeKernelVersionRequest
     *
     * @return UpgradeKernelVersionResponse UpgradeKernelVersionResponse
     */
    public function upgradeKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeKernelVersionWithOptions($request, $runtime);
    }
}
