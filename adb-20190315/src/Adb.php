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
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteAccountResponse;
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
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClustersRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClustersResponse;
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
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeInclinedTablesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeInclinedTablesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoadTasksRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoadTasksRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeMaintenanceActionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeMaintenanceActionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeOperatorPermissionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeOperatorPermissionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribePatternPerformanceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribePatternPerformanceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeProcessListRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeProcessListResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSchemasRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSchemasResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogTrendRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogTrendResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPatternAttributeRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPatternAttributeResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSqlPatternRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSqlPatternResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPatternsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPatternsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanTaskRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanTaskResponse;
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
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeVSwitchesResponse;
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
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBResourcePoolRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBResourcePoolResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyLogBackupPolicyRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyLogBackupPolicyResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyMaintenanceActionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyMaintenanceActionResponse;
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
     * @param ApplyAdviceByIdRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ApplyAdviceByIdResponse
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
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition.
     *   *
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
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition.
     *   *
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
     * @param BatchApplyAdviceByIdListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchApplyAdviceByIdListResponse
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
     * ## Precautions
     *   * *   This operation is applicable only for elastic clusters of 32 cores or more.
     *   * *   The default resource group USER_DEFAULT cannot be associated with a database account.
     *   *
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
     * ## Precautions
     *   * *   This operation is applicable only for elastic clusters of 32 cores or more.
     *   * *   The default resource group USER_DEFAULT cannot be associated with a database account.
     *   *
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
     * *   This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   * *   The default resource group USER_DEFAULT cannot be associated with a database account.
     *   *
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
     * *   This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   * *   The default resource group USER_DEFAULT cannot be associated with a database account.
     *   *
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
     * After you create a cluster, you are billed for the cluster specifications that you select. For more information about the billable items and pricing for Data Warehouse Edition (V3.0) clusters, see [Billable items of Data Warehouse Edition (V3.0)](~~303131~~) and [Pricing for Data Warehouse Edition (V3.0)](~~135229~~).
     *   *
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
        if (!Utils::isUnset($request->elasticIOResource)) {
            $query['ElasticIOResource'] = $request->elasticIOResource;
        }
        if (!Utils::isUnset($request->executorCount)) {
            $query['ExecutorCount'] = $request->executorCount;
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
     * After you create a cluster, you are billed for the cluster specifications that you select. For more information about the billable items and pricing for Data Warehouse Edition (V3.0) clusters, see [Billable items of Data Warehouse Edition (V3.0)](~~303131~~) and [Pricing for Data Warehouse Edition (V3.0)](~~135229~~).
     *   *
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
     * ## Precautions
     *   * This operation is applicable only for elastic clusters of 32 cores or more.
     *   *
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
     * ## Precautions
     *   * This operation is applicable only for elastic clusters of 32 cores or more.
     *   *
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
     * This operation is applicable only for elastic clusters of 32 cores or more.
     *   *
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
     * This operation is applicable only for elastic clusters of 32 cores or more.
     *   *
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
     * ###
     *   * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   *
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
     * ###
     *   * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   *
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
     * *   Subscription clusters cannot be deleted by using API operations. After expiration, subscription clusters are automatically released. If you no longer need a cluster, you can submit a request to unsubscribe from the cluster in the Billing Management console. For more information about cluster refunds, see [Refund policy](~~471477~~).
     *   * *   After you delete a cluster, resources of the cluster are immediately released, and data of the cluster is no longer retained and cannot be recovered. Proceed with caution.
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
     * *   Subscription clusters cannot be deleted by using API operations. After expiration, subscription clusters are automatically released. If you no longer need a cluster, you can submit a request to unsubscribe from the cluster in the Billing Management console. For more information about cluster refunds, see [Refund policy](~~471477~~).
     *   * *   After you delete a cluster, resources of the cluster are immediately released, and data of the cluster is no longer retained and cannot be recovered. Proceed with caution.
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
     * ### Precautions
     *   * *   You can call this operation only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   * *   The default resource group USER_DEFAULT cannot be deleted.
     *   *
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
     * ### Precautions
     *   * *   You can call this operation only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   * *   The default resource group USER_DEFAULT cannot be deleted.
     *   *
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
     * **Precautions**
     *   * *   This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   * *   The default resource group USER_DEFAULT cannot be deleted.
     *   *
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
     * **Precautions**
     *   * *   This operation is available only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   * *   The default resource group USER_DEFAULT cannot be deleted.
     *   *
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
     * @param DescribeAdviceServiceEnabledRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAdviceServiceEnabledResponse
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
     * @param DescribeAllAccountsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAllAccountsResponse
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
     * @param DescribeAppliedAdvicesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAppliedAdvicesResponse
     */
    public function describeAppliedAdvicesWithOptions($request, $runtime)
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
     * @param DescribeAuditLogConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAuditLogConfigResponse
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
     * Before you call the DescribeAuditLogRecords operation to query the SQL audit logs of an AnalyticDB for MySQL cluster, you must enable SQL audit for the cluster. You can call the [DescribeAuditLogConfig](~~190628~~) operation to query the status of SQL audit. If SQL audit is disabled, you can call the [ModifyAuditLogConfig](~~190629~~) operation to enable SQL audit.
     *   * SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried.
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
     * Before you call the DescribeAuditLogRecords operation to query the SQL audit logs of an AnalyticDB for MySQL cluster, you must enable SQL audit for the cluster. You can call the [DescribeAuditLogConfig](~~190628~~) operation to query the status of SQL audit. If SQL audit is disabled, you can call the [ModifyAuditLogConfig](~~190629~~) operation to enable SQL audit.
     *   * SQL audit logs can be queried only when SQL audit is enabled. Only SQL audit logs within the last 30 days can be queried. If SQL audit was disabled and re-enabled, only SQL audit logs from the time when SQL audit was re-enabled can be queried.
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
     * @param DescribeAutoRenewAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAutoRenewAttributeResponse
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
     * @param DescribeAvailableAdvicesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAvailableAdvicesResponse
     */
    public function describeAvailableAdvicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adviceDate)) {
            $query['AdviceDate'] = $request->adviceDate;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
     * @param DescribeAvailableResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAvailableResourceResponse
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
     * @param DescribeComputeResourceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeComputeResourceResponse
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
     * @param DescribeConnectionCountRecordsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeConnectionCountRecordsResponse
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
     * @param DescribeDBClusterAccessWhiteListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDBClusterAccessWhiteListResponse
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
     * @param DescribeDBClusterNetInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBClusterNetInfoResponse
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
     * You can call this operation to query the performance data of a cluster over a time range based on its performance metrics. The data is collected every 30 seconds. This operation allows you to query information about slow queries, such as the SQL query duration, number of scanned rows, and amount of scanned data.
     *   *
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
     * You can call this operation to query the performance data of a cluster over a time range based on its performance metrics. The data is collected every 30 seconds. This operation allows you to query information about slow queries, such as the SQL query duration, number of scanned rows, and amount of scanned data.
     *   *
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
     * > You can also view the monitoring information about resource groups within an AnalyticDB for MySQL cluster in elastic mode for Cluster Edition in the form of graphs in the console. For more information, see [View monitoring information](~~188721~~).
     *   *
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
     * > You can also view the monitoring information about resource groups within an AnalyticDB for MySQL cluster in elastic mode for Cluster Edition in the form of graphs in the console. For more information, see [View monitoring information](~~188721~~).
     *   *
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
     * @param DescribeDBClusterStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDBClusterStatusResponse
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
     * ###
     *   * You can call this operation only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   *
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
     * ###
     *   * You can call this operation only for AnalyticDB for MySQL clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   *
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
     * This operation is applicable only for elastic clusters of 32 cores or more.
     *   *
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
     * This operation is applicable only for elastic clusters of 32 cores or more.
     *   *
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
     * @param DescribeDiagnosisMonitorPerformanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeDiagnosisMonitorPerformanceResponse
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
     * @param DescribeDiagnosisTasksRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDiagnosisTasksResponse
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
     * @param DescribeEIURangeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeEIURangeResponse
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
     * This operation is available only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   *
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
     * This operation is available only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   *
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
     * ###
     *   * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   *
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
     * ###
     *   * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   *
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
     * @param DescribeInclinedTablesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInclinedTablesResponse
     */
    public function describeInclinedTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
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
     * For information about how to asynchronously submit import and export tasks, see [Asynchronously submit an import or export task](~~160291~~).
     *   *
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
     * For information about how to asynchronously submit import and export tasks, see [Asynchronously submit an import or export task](~~160291~~).
     *   *
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
     * @param DescribeMaintenanceActionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMaintenanceActionResponse
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
     * @param DescribeOperatorPermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeOperatorPermissionResponse
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
     * @param DescribeProcessListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeProcessListResponse
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
     * @param DescribeSQLPatternAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSQLPatternAttributeResponse
     */
    public function describeSQLPatternAttributeWithOptions($request, $runtime)
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
            'action'      => 'DescribeSQLPatternAttribute',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLPatternAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLPatternAttributeRequest $request
     *
     * @return DescribeSQLPatternAttributeResponse
     */
    public function describeSQLPatternAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLPatternAttributeWithOptions($request, $runtime);
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
     * @param DescribeSQLPlanRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeSQLPlanResponse
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
     * @param DescribeSQLPlanTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSQLPlanTaskResponse
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
     * @param DescribeSlowLogRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSlowLogRecordsResponse
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
     * @param DescribeSlowLogTrendRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSlowLogTrendResponse
     */
    public function describeSlowLogTrendWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowLogTrend',
            'version'     => '2019-03-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowLogTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSlowLogTrendRequest $request
     *
     * @return DescribeSlowLogTrendResponse
     */
    public function describeSlowLogTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogTrendWithOptions($request, $runtime);
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
     * @param DescribeTableDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeTableDetailResponse
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
     * @param DescribeTablePartitionDiagnoseRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeTablePartitionDiagnoseResponse
     */
    public function describeTablePartitionDiagnoseWithOptions($request, $runtime)
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
     * >  For more information about table statistics, see [View monitoring information of resource pools](~~188721~~).
     *   *
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
     * >  For more information about table statistics, see [View monitoring information of resource pools](~~188721~~).
     *   *
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
     * @param DescribeTaskInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeTaskInfoResponse
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
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
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
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition.
     *   *
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
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition.
     *   *
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
     * @param DisableAdviceServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DisableAdviceServiceResponse
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
     * @param EnableAdviceServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EnableAdviceServiceResponse
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
     * If you need Alibaba Cloud technical support to perform operations on your AnalyticDB for MySQL cluster, you must grant permissions to the service account of your cluster. When the validity period of the authorization ends, the granted permissions are automatically revoked.
     *   *
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
     * If you need Alibaba Cloud technical support to perform operations on your AnalyticDB for MySQL cluster, you must grant permissions to the service account of your cluster. When the validity period of the authorization ends, the granted permissions are automatically revoked.
     *   *
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
     * @param KillProcessRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return KillProcessResponse
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
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
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
     * @param MigrateDBClusterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return MigrateDBClusterResponse
     */
    public function migrateDBClusterWithOptions($request, $runtime)
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
     * @param ModifyAutoRenewAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAutoRenewAttributeResponse
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
     * @param ModifyDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyDBClusterResponse
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
     * @param ModifyDBClusterAccessWhiteListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyDBClusterAccessWhiteListResponse
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
     * @param ModifyDBClusterPayTypeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDBClusterPayTypeResponse
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
     * Resource Management enables you to build an organizational structure for resources based on your business needs. You can use a resource directory, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](~~94475#concept-zyn-3p1-dhb~~ "Resource Management provides a collection of resource management services that support enterprise IT administration. The services include Resource Directory, Resource Group, and Tag. Resource Directory allows you to build an organizational structure for resources based on your business requirements. Resource Group and Tag allow you to hierarchically manage the resources. Resource Sharing allows you to share the resources among your accounts.").
     *   *
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
     * Resource Management enables you to build an organizational structure for resources based on your business needs. You can use a resource directory, folders, accounts, and resource groups to hierarchically organize and manage resources. For more information, see [What is Resource Management?](~~94475#concept-zyn-3p1-dhb~~ "Resource Management provides a collection of resource management services that support enterprise IT administration. The services include Resource Directory, Resource Group, and Tag. Resource Directory allows you to build an organizational structure for resources based on your business requirements. Resource Group and Tag allow you to hierarchically manage the resources. Resource Sharing allows you to share the resources among your accounts.").
     *   *
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
     * ## Precautions
     *   * *   This operation is applicable only for elastic clusters of 32 cores or more.
     *   * *   The number of nodes cannot be changed for the default resource group USER_DEFAULT.
     *   *
     * @param ModifyDBResourceGroupRequest $request ModifyDBResourceGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBResourceGroupResponse ModifyDBResourceGroupResponse
     */
    public function modifyDBResourceGroupWithOptions($request, $runtime)
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
     * ## Precautions
     *   * *   This operation is applicable only for elastic clusters of 32 cores or more.
     *   * *   The number of nodes cannot be changed for the default resource group USER_DEFAULT.
     *   *
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
     * ###
     *   * *   You can call this operation only for elastic clusters of 32 cores or more.
     *   * *   You cannot change the number of nodes for the USER_DEFAULT resource group.
     *   *
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
     * ###
     *   * *   You can call this operation only for elastic clusters of 32 cores or more.
     *   * *   You cannot change the number of nodes for the USER_DEFAULT resource group.
     *   *
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
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   *
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
     * You can call this operation only for AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters in elastic mode for Cluster Edition that have 32 cores or more.
     *   *
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
     * @param ModifyLogBackupPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyLogBackupPolicyResponse
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
     * @param ModifyMaintenanceActionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyMaintenanceActionResponse
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
     * @param ResetAccountPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetAccountPasswordResponse
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
     * @param RevokeOperatorPermissionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RevokeOperatorPermissionResponse
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
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
     * @param UnbindDBResourcePoolWithUserRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UnbindDBResourcePoolWithUserResponse
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
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
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
