<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CancelScheduleTasksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CancelScheduleTasksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CheckAccountNameRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CheckAccountNameResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CheckDBNameRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CheckDBNameResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CloseDBClusterMigrationRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CloseDBClusterMigrationResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDatabaseRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDatabaseResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterEndpointRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterEndpointResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBEndpointAddressRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBEndpointAddressResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBLinkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBLinkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateGlobalDatabaseNetworkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateGlobalDatabaseNetworkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateParameterGroupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateParameterGroupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteBackupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteBackupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDatabaseRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDatabaseResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBClusterEndpointRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBClusterEndpointResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBClusterRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBClusterResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBEndpointAddressRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBEndpointAddressResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBLinkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBLinkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBNodesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteDBNodesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteGlobalDatabaseNetworkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteGlobalDatabaseNetworkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteParameterGroupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteParameterGroupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupTasksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupTasksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCharacterSetNameRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCharacterSetNameResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAuditLogCollectorRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAuditLogCollectorResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMonitorRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMonitorResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterPerformanceRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterPerformanceResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterSSLRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterSSLResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersWithBackupsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersWithBackupsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterTDERequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterTDEResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterVersionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterVersionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLinksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLinksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodePerformanceRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodePerformanceResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDetachedBackupsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDetachedBackupsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLogBackupPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLogBackupPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeMetaListRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeMetaListResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterTemplatesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterTemplatesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePendingMaintenanceActionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePendingMaintenanceActionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePendingMaintenanceActionsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePendingMaintenanceActionsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarSQLCollectorPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarSQLCollectorPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeScheduleTasksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeScheduleTasksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\FailoverDBClusterRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\FailoverDBClusterResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\GrantAccountPrivilegeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\GrantAccountPrivilegeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAccountPasswordRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAccountPasswordResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAccessWhitelistRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAccessWhitelistResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAuditLogCollectorRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterAuditLogCollectorResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterDescriptionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterDescriptionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterEndpointRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterEndpointResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMaintainTimeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMaintainTimeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMigrationRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMigrationResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMonitorRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterMonitorResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterParametersRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterParametersResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterPrimaryZoneRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterPrimaryZoneResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterSSLRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterSSLResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterTDERequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBClusterTDEResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBDescriptionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBDescriptionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBEndpointAddressRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBEndpointAddressResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBNodeClassRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBNodeClassResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyGlobalDatabaseNetworkRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyGlobalDatabaseNetworkResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyLogBackupPolicyRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyLogBackupPolicyResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyPendingMaintenanceActionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyPendingMaintenanceActionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RemoveDBClusterFromGDNRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RemoveDBClusterFromGDNResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ResetAccountRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ResetAccountResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RestartDBNodeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RestartDBNodeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RestoreTableRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RestoreTableResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RevokeAccountPrivilegeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\RevokeAccountPrivilegeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\TransformDBClusterPayTypeRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\TransformDBClusterPayTypeResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpgradeDBClusterMinorVersionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpgradeDBClusterMinorVersionResponse;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpgradeDBClusterVersionRequest;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpgradeDBClusterVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Polardb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'polardb.aliyuncs.com',
            'cn-beijing'                  => 'polardb.aliyuncs.com',
            'cn-hangzhou'                 => 'polardb.aliyuncs.com',
            'cn-shanghai'                 => 'polardb.aliyuncs.com',
            'cn-shenzhen'                 => 'polardb.aliyuncs.com',
            'cn-hongkong'                 => 'polardb.aliyuncs.com',
            'ap-southeast-1'              => 'polardb.aliyuncs.com',
            'us-west-1'                   => 'polardb.aliyuncs.com',
            'us-east-1'                   => 'polardb.aliyuncs.com',
            'cn-hangzhou-finance'         => 'polardb.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'polardb.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'polardb.aliyuncs.com',
            'ap-northeast-2-pop'          => 'polardb.aliyuncs.com',
            'cn-beijing-finance-1'        => 'polardb.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'polardb.aliyuncs.com',
            'cn-beijing-gov-1'            => 'polardb.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'polardb.aliyuncs.com',
            'cn-edge-1'                   => 'polardb.aliyuncs.com',
            'cn-fujian'                   => 'polardb.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'polardb.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'polardb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'polardb.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'polardb.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'polardb.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'polardb.aliyuncs.com',
            'cn-north-2-gov-1'            => 'polardb.aliyuncs.com',
            'cn-qingdao-nebula'           => 'polardb.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'polardb.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'polardb.aliyuncs.com',
            'cn-shanghai-inner'           => 'polardb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'polardb.aliyuncs.com',
            'cn-shenzhen-inner'           => 'polardb.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'polardb.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'polardb.aliyuncs.com',
            'cn-wuhan'                    => 'polardb.aliyuncs.com',
            'cn-wulanchabu'               => 'polardb.aliyuncs.com',
            'cn-yushanfang'               => 'polardb.aliyuncs.com',
            'cn-zhangbei'                 => 'polardb.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'polardb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'polardb.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'polardb.aliyuncs.com',
            'eu-west-1-oxs'               => 'polardb.aliyuncs.com',
            'rus-west-1-pop'              => 'polardb.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('polardb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CancelScheduleTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelScheduleTasksResponse
     */
    public function cancelScheduleTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelScheduleTasksResponse::fromMap($this->doRPCRequest('CancelScheduleTasks', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelScheduleTasksRequest $request
     *
     * @return CancelScheduleTasksResponse
     */
    public function cancelScheduleTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelScheduleTasksWithOptions($request, $runtime);
    }

    /**
     * @param CheckAccountNameRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CheckAccountNameResponse
     */
    public function checkAccountNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckAccountNameResponse::fromMap($this->doRPCRequest('CheckAccountName', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckAccountNameRequest $request
     *
     * @return CheckAccountNameResponse
     */
    public function checkAccountName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAccountNameWithOptions($request, $runtime);
    }

    /**
     * @param CheckDBNameRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CheckDBNameResponse
     */
    public function checkDBNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckDBNameResponse::fromMap($this->doRPCRequest('CheckDBName', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckDBNameRequest $request
     *
     * @return CheckDBNameResponse
     */
    public function checkDBName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDBNameWithOptions($request, $runtime);
    }

    /**
     * @param CloseDBClusterMigrationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CloseDBClusterMigrationResponse
     */
    public function closeDBClusterMigrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloseDBClusterMigrationResponse::fromMap($this->doRPCRequest('CloseDBClusterMigration', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CloseDBClusterMigrationRequest $request
     *
     * @return CloseDBClusterMigrationResponse
     */
    public function closeDBClusterMigration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeDBClusterMigrationWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAccountResponse::fromMap($this->doRPCRequest('CreateAccount', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBackupResponse
     */
    public function createBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBackupResponse::fromMap($this->doRPCRequest('CreateBackup', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateBackupRequest $request
     *
     * @return CreateBackupResponse
     */
    public function createBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupWithOptions($request, $runtime);
    }

    /**
     * @param CreateDatabaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDatabaseResponse
     */
    public function createDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDatabaseResponse::fromMap($this->doRPCRequest('CreateDatabase', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDatabaseRequest $request
     *
     * @return CreateDatabaseResponse
     */
    public function createDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatabaseWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDBClusterResponse::fromMap($this->doRPCRequest('CreateDBCluster', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateDBClusterEndpointRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDBClusterEndpointResponse
     */
    public function createDBClusterEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDBClusterEndpointResponse::fromMap($this->doRPCRequest('CreateDBClusterEndpoint', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDBClusterEndpointRequest $request
     *
     * @return CreateDBClusterEndpointResponse
     */
    public function createDBClusterEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBClusterEndpointWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBEndpointAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDBEndpointAddressResponse
     */
    public function createDBEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDBEndpointAddressResponse::fromMap($this->doRPCRequest('CreateDBEndpointAddress', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDBEndpointAddressRequest $request
     *
     * @return CreateDBEndpointAddressResponse
     */
    public function createDBEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBLinkRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDBLinkResponse
     */
    public function createDBLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDBLinkResponse::fromMap($this->doRPCRequest('CreateDBLink', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDBLinkRequest $request
     *
     * @return CreateDBLinkResponse
     */
    public function createDBLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBLinkWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBNodesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDBNodesResponse
     */
    public function createDBNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDBNodesResponse::fromMap($this->doRPCRequest('CreateDBNodes', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDBNodesRequest $request
     *
     * @return CreateDBNodesResponse
     */
    public function createDBNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBNodesWithOptions($request, $runtime);
    }

    /**
     * @param CreateGlobalDatabaseNetworkRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateGlobalDatabaseNetworkResponse
     */
    public function createGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGlobalDatabaseNetworkResponse::fromMap($this->doRPCRequest('CreateGlobalDatabaseNetwork', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateGlobalDatabaseNetworkRequest $request
     *
     * @return CreateGlobalDatabaseNetworkResponse
     */
    public function createGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
     * @param CreateParameterGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateParameterGroupResponse
     */
    public function createParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateParameterGroupResponse::fromMap($this->doRPCRequest('CreateParameterGroup', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateParameterGroupRequest $request
     *
     * @return CreateParameterGroupResponse
     */
    public function createParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createParameterGroupWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAccountResponse::fromMap($this->doRPCRequest('DeleteAccount', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteBackupResponse
     */
    public function deleteBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBackupResponse::fromMap($this->doRPCRequest('DeleteBackup', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteBackupRequest $request
     *
     * @return DeleteBackupResponse
     */
    public function deleteBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDatabaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDatabaseResponse
     */
    public function deleteDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDatabaseResponse::fromMap($this->doRPCRequest('DeleteDatabase', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDatabaseRequest $request
     *
     * @return DeleteDatabaseResponse
     */
    public function deleteDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDBClusterResponse
     */
    public function deleteDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDBClusterResponse::fromMap($this->doRPCRequest('DeleteDBCluster', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteDBClusterEndpointRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDBClusterEndpointResponse
     */
    public function deleteDBClusterEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDBClusterEndpointResponse::fromMap($this->doRPCRequest('DeleteDBClusterEndpoint', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDBClusterEndpointRequest $request
     *
     * @return DeleteDBClusterEndpointResponse
     */
    public function deleteDBClusterEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBClusterEndpointWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBEndpointAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDBEndpointAddressResponse
     */
    public function deleteDBEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDBEndpointAddressResponse::fromMap($this->doRPCRequest('DeleteDBEndpointAddress', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDBEndpointAddressRequest $request
     *
     * @return DeleteDBEndpointAddressResponse
     */
    public function deleteDBEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBLinkRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDBLinkResponse
     */
    public function deleteDBLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDBLinkResponse::fromMap($this->doRPCRequest('DeleteDBLink', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDBLinkRequest $request
     *
     * @return DeleteDBLinkResponse
     */
    public function deleteDBLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBLinkWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBNodesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDBNodesResponse
     */
    public function deleteDBNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDBNodesResponse::fromMap($this->doRPCRequest('DeleteDBNodes', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDBNodesRequest $request
     *
     * @return DeleteDBNodesResponse
     */
    public function deleteDBNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBNodesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGlobalDatabaseNetworkRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteGlobalDatabaseNetworkResponse
     */
    public function deleteGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteGlobalDatabaseNetworkResponse::fromMap($this->doRPCRequest('DeleteGlobalDatabaseNetwork', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteGlobalDatabaseNetworkRequest $request
     *
     * @return DeleteGlobalDatabaseNetworkResponse
     */
    public function deleteGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
     * @param DeleteParameterGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteParameterGroupResponse
     */
    public function deleteParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteParameterGroupResponse::fromMap($this->doRPCRequest('DeleteParameterGroup', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteParameterGroupRequest $request
     *
     * @return DeleteParameterGroupResponse
     */
    public function deleteParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteParameterGroupWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccountsResponse::fromMap($this->doRPCRequest('DescribeAccounts', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAutoRenewAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAutoRenewAttributeResponse
     */
    public function describeAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAutoRenewAttributeResponse::fromMap($this->doRPCRequest('DescribeAutoRenewAttribute', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeBackupLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeBackupLogsResponse
     */
    public function describeBackupLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupLogsResponse::fromMap($this->doRPCRequest('DescribeBackupLogs', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupLogsRequest $request
     *
     * @return DescribeBackupLogsResponse
     */
    public function describeBackupLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupLogsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->doRPCRequest('DescribeBackupPolicy', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupsResponse::fromMap($this->doRPCRequest('DescribeBackups', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeBackupTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupTasksResponse
     */
    public function describeBackupTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupTasksResponse::fromMap($this->doRPCRequest('DescribeBackupTasks', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupTasksRequest $request
     *
     * @return DescribeBackupTasksResponse
     */
    public function describeBackupTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCharacterSetNameRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCharacterSetNameResponse
     */
    public function describeCharacterSetNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCharacterSetNameResponse::fromMap($this->doRPCRequest('DescribeCharacterSetName', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCharacterSetNameRequest $request
     *
     * @return DescribeCharacterSetNameResponse
     */
    public function describeCharacterSetName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCharacterSetNameWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDatabasesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDatabasesResponse
     */
    public function describeDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDatabasesResponse::fromMap($this->doRPCRequest('DescribeDatabases', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDatabasesRequest $request
     *
     * @return DescribeDatabasesResponse
     */
    public function describeDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabasesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterAccessWhitelistRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDBClusterAccessWhitelistResponse
     */
    public function describeDBClusterAccessWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterAccessWhitelistResponse::fromMap($this->doRPCRequest('DescribeDBClusterAccessWhitelist', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterAccessWhitelistRequest $request
     *
     * @return DescribeDBClusterAccessWhitelistResponse
     */
    public function describeDBClusterAccessWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAccessWhitelistWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterAttributeResponse::fromMap($this->doRPCRequest('DescribeDBClusterAttribute', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDBClusterAuditLogCollectorRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDBClusterAuditLogCollectorResponse
     */
    public function describeDBClusterAuditLogCollectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterAuditLogCollectorResponse::fromMap($this->doRPCRequest('DescribeDBClusterAuditLogCollector', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterAuditLogCollectorRequest $request
     *
     * @return DescribeDBClusterAuditLogCollectorResponse
     */
    public function describeDBClusterAuditLogCollector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAuditLogCollectorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterAvailableResourcesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeDBClusterAvailableResourcesResponse
     */
    public function describeDBClusterAvailableResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterAvailableResourcesResponse::fromMap($this->doRPCRequest('DescribeDBClusterAvailableResources', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterAvailableResourcesRequest $request
     *
     * @return DescribeDBClusterAvailableResourcesResponse
     */
    public function describeDBClusterAvailableResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAvailableResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterEndpointsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBClusterEndpointsResponse
     */
    public function describeDBClusterEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterEndpointsResponse::fromMap($this->doRPCRequest('DescribeDBClusterEndpoints', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterEndpointsRequest $request
     *
     * @return DescribeDBClusterEndpointsResponse
     */
    public function describeDBClusterEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterEndpointsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterMigrationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBClusterMigrationResponse
     */
    public function describeDBClusterMigrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterMigrationResponse::fromMap($this->doRPCRequest('DescribeDBClusterMigration', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterMigrationRequest $request
     *
     * @return DescribeDBClusterMigrationResponse
     */
    public function describeDBClusterMigration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterMigrationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterMonitorRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBClusterMonitorResponse
     */
    public function describeDBClusterMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterMonitorResponse::fromMap($this->doRPCRequest('DescribeDBClusterMonitor', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterMonitorRequest $request
     *
     * @return DescribeDBClusterMonitorResponse
     */
    public function describeDBClusterMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterParametersRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBClusterParametersResponse
     */
    public function describeDBClusterParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterParametersResponse::fromMap($this->doRPCRequest('DescribeDBClusterParameters', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterParametersRequest $request
     *
     * @return DescribeDBClusterParametersResponse
     */
    public function describeDBClusterParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterParametersWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterPerformanceResponse::fromMap($this->doRPCRequest('DescribeDBClusterPerformance', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDBClustersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDBClustersResponse
     */
    public function describeDBClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClustersResponse::fromMap($this->doRPCRequest('DescribeDBClusters', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDBClusterSSLRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDBClusterSSLResponse
     */
    public function describeDBClusterSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterSSLResponse::fromMap($this->doRPCRequest('DescribeDBClusterSSL', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeDBClustersWithBackupsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBClustersWithBackupsResponse
     */
    public function describeDBClustersWithBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClustersWithBackupsResponse::fromMap($this->doRPCRequest('DescribeDBClustersWithBackups', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClustersWithBackupsRequest $request
     *
     * @return DescribeDBClustersWithBackupsResponse
     */
    public function describeDBClustersWithBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClustersWithBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterTDERequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDBClusterTDEResponse
     */
    public function describeDBClusterTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterTDEResponse::fromMap($this->doRPCRequest('DescribeDBClusterTDE', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterTDERequest $request
     *
     * @return DescribeDBClusterTDEResponse
     */
    public function describeDBClusterTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterTDEWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterVersionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBClusterVersionResponse
     */
    public function describeDBClusterVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterVersionResponse::fromMap($this->doRPCRequest('DescribeDBClusterVersion', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterVersionRequest $request
     *
     * @return DescribeDBClusterVersionResponse
     */
    public function describeDBClusterVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInitializeVariableRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDBInitializeVariableResponse
     */
    public function describeDBInitializeVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBInitializeVariableResponse::fromMap($this->doRPCRequest('DescribeDBInitializeVariable', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBInitializeVariableRequest $request
     *
     * @return DescribeDBInitializeVariableResponse
     */
    public function describeDBInitializeVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInitializeVariableWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBLinksRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDBLinksResponse
     */
    public function describeDBLinksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBLinksResponse::fromMap($this->doRPCRequest('DescribeDBLinks', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBLinksRequest $request
     *
     * @return DescribeDBLinksResponse
     */
    public function describeDBLinks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBLinksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBNodePerformanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBNodePerformanceResponse
     */
    public function describeDBNodePerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBNodePerformanceResponse::fromMap($this->doRPCRequest('DescribeDBNodePerformance', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBNodePerformanceRequest $request
     *
     * @return DescribeDBNodePerformanceResponse
     */
    public function describeDBNodePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBNodePerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDetachedBackupsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDetachedBackupsResponse
     */
    public function describeDetachedBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDetachedBackupsResponse::fromMap($this->doRPCRequest('DescribeDetachedBackups', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDetachedBackupsRequest $request
     *
     * @return DescribeDetachedBackupsResponse
     */
    public function describeDetachedBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDetachedBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGlobalDatabaseNetworkRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeGlobalDatabaseNetworkResponse
     */
    public function describeGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGlobalDatabaseNetworkResponse::fromMap($this->doRPCRequest('DescribeGlobalDatabaseNetwork', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGlobalDatabaseNetworkRequest $request
     *
     * @return DescribeGlobalDatabaseNetworkResponse
     */
    public function describeGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalDatabaseNetworkWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGlobalDatabaseNetworksRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeGlobalDatabaseNetworksResponse
     */
    public function describeGlobalDatabaseNetworksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGlobalDatabaseNetworksResponse::fromMap($this->doRPCRequest('DescribeGlobalDatabaseNetworks', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGlobalDatabaseNetworksRequest $request
     *
     * @return DescribeGlobalDatabaseNetworksResponse
     */
    public function describeGlobalDatabaseNetworks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGlobalDatabaseNetworksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogBackupPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLogBackupPolicyResponse
     */
    public function describeLogBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLogBackupPolicyResponse::fromMap($this->doRPCRequest('DescribeLogBackupPolicy', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLogBackupPolicyRequest $request
     *
     * @return DescribeLogBackupPolicyResponse
     */
    public function describeLogBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMetaListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeMetaListResponse
     */
    public function describeMetaListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMetaListResponse::fromMap($this->doRPCRequest('DescribeMetaList', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMetaListRequest $request
     *
     * @return DescribeMetaListResponse
     */
    public function describeMetaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetaListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParameterGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeParameterGroupResponse
     */
    public function describeParameterGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParameterGroupResponse::fromMap($this->doRPCRequest('DescribeParameterGroup', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeParameterGroupRequest $request
     *
     * @return DescribeParameterGroupResponse
     */
    public function describeParameterGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParameterGroupsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeParameterGroupsResponse
     */
    public function describeParameterGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParameterGroupsResponse::fromMap($this->doRPCRequest('DescribeParameterGroups', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeParameterGroupsRequest $request
     *
     * @return DescribeParameterGroupsResponse
     */
    public function describeParameterGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParameterTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParameterTemplatesResponse::fromMap($this->doRPCRequest('DescribeParameterTemplates', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeParameterTemplatesRequest $request
     *
     * @return DescribeParameterTemplatesResponse
     */
    public function describeParameterTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribePendingMaintenanceActionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribePendingMaintenanceActionResponse
     */
    public function describePendingMaintenanceActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePendingMaintenanceActionResponse::fromMap($this->doRPCRequest('DescribePendingMaintenanceAction', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePendingMaintenanceActionRequest $request
     *
     * @return DescribePendingMaintenanceActionResponse
     */
    public function describePendingMaintenanceAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePendingMaintenanceActionWithOptions($request, $runtime);
    }

    /**
     * @param DescribePendingMaintenanceActionsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribePendingMaintenanceActionsResponse
     */
    public function describePendingMaintenanceActionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePendingMaintenanceActionsResponse::fromMap($this->doRPCRequest('DescribePendingMaintenanceActions', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePendingMaintenanceActionsRequest $request
     *
     * @return DescribePendingMaintenanceActionsResponse
     */
    public function describePendingMaintenanceActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePendingMaintenanceActionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePolarSQLCollectorPolicyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribePolarSQLCollectorPolicyResponse
     */
    public function describePolarSQLCollectorPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribePolarSQLCollectorPolicyResponse::fromMap($this->doRPCRequest('DescribePolarSQLCollectorPolicy', '2017-08-01', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePolarSQLCollectorPolicyRequest $request
     *
     * @return DescribePolarSQLCollectorPolicyResponse
     */
    public function describePolarSQLCollectorPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolarSQLCollectorPolicyWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeScheduleTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeScheduleTasksResponse
     */
    public function describeScheduleTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScheduleTasksResponse::fromMap($this->doRPCRequest('DescribeScheduleTasks', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeScheduleTasksRequest $request
     *
     * @return DescribeScheduleTasksResponse
     */
    public function describeScheduleTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScheduleTasksWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSlowLogRecordsResponse::fromMap($this->doRPCRequest('DescribeSlowLogRecords', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeTasksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeTasksResponse
     */
    public function describeTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTasksResponse::fromMap($this->doRPCRequest('DescribeTasks', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTasksRequest $request
     *
     * @return DescribeTasksResponse
     */
    public function describeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTasksWithOptions($request, $runtime);
    }

    /**
     * @param FailoverDBClusterRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return FailoverDBClusterResponse
     */
    public function failoverDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FailoverDBClusterResponse::fromMap($this->doRPCRequest('FailoverDBCluster', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FailoverDBClusterRequest $request
     *
     * @return FailoverDBClusterResponse
     */
    public function failoverDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->failoverDBClusterWithOptions($request, $runtime);
    }

    /**
     * @param GrantAccountPrivilegeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GrantAccountPrivilegeResponse
     */
    public function grantAccountPrivilegeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantAccountPrivilegeResponse::fromMap($this->doRPCRequest('GrantAccountPrivilege', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GrantAccountPrivilegeRequest $request
     *
     * @return GrantAccountPrivilegeResponse
     */
    public function grantAccountPrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantAccountPrivilegeWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyAccountDescriptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->doRPCRequest('ModifyAccountDescription', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyAccountPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAccountPasswordResponse
     */
    public function modifyAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAccountPasswordResponse::fromMap($this->doRPCRequest('ModifyAccountPassword', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAccountPasswordRequest $request
     *
     * @return ModifyAccountPasswordResponse
     */
    public function modifyAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountPasswordWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAutoRenewAttributeResponse::fromMap($this->doRPCRequest('ModifyAutoRenewAttribute', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBackupPolicyResponse::fromMap($this->doRPCRequest('ModifyBackupPolicy', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyDBClusterAccessWhitelistRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyDBClusterAccessWhitelistResponse
     */
    public function modifyDBClusterAccessWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterAccessWhitelistResponse::fromMap($this->doRPCRequest('ModifyDBClusterAccessWhitelist', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterAccessWhitelistRequest $request
     *
     * @return ModifyDBClusterAccessWhitelistResponse
     */
    public function modifyDBClusterAccessWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterAccessWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterAuditLogCollectorRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyDBClusterAuditLogCollectorResponse
     */
    public function modifyDBClusterAuditLogCollectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterAuditLogCollectorResponse::fromMap($this->doRPCRequest('ModifyDBClusterAuditLogCollector', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterAuditLogCollectorRequest $request
     *
     * @return ModifyDBClusterAuditLogCollectorResponse
     */
    public function modifyDBClusterAuditLogCollector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterAuditLogCollectorWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterDescriptionResponse::fromMap($this->doRPCRequest('ModifyDBClusterDescription', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyDBClusterEndpointRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBClusterEndpointResponse
     */
    public function modifyDBClusterEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterEndpointResponse::fromMap($this->doRPCRequest('ModifyDBClusterEndpoint', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterEndpointRequest $request
     *
     * @return ModifyDBClusterEndpointResponse
     */
    public function modifyDBClusterEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterEndpointWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterMaintainTimeResponse::fromMap($this->doRPCRequest('ModifyDBClusterMaintainTime', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyDBClusterMigrationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyDBClusterMigrationResponse
     */
    public function modifyDBClusterMigrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterMigrationResponse::fromMap($this->doRPCRequest('ModifyDBClusterMigration', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterMigrationRequest $request
     *
     * @return ModifyDBClusterMigrationResponse
     */
    public function modifyDBClusterMigration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterMigrationWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterMonitorRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDBClusterMonitorResponse
     */
    public function modifyDBClusterMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterMonitorResponse::fromMap($this->doRPCRequest('ModifyDBClusterMonitor', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterMonitorRequest $request
     *
     * @return ModifyDBClusterMonitorResponse
     */
    public function modifyDBClusterMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterMonitorWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterParametersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDBClusterParametersResponse
     */
    public function modifyDBClusterParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterParametersResponse::fromMap($this->doRPCRequest('ModifyDBClusterParameters', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterParametersRequest $request
     *
     * @return ModifyDBClusterParametersResponse
     */
    public function modifyDBClusterParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterParametersWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterPrimaryZoneRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDBClusterPrimaryZoneResponse
     */
    public function modifyDBClusterPrimaryZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterPrimaryZoneResponse::fromMap($this->doRPCRequest('ModifyDBClusterPrimaryZone', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterPrimaryZoneRequest $request
     *
     * @return ModifyDBClusterPrimaryZoneResponse
     */
    public function modifyDBClusterPrimaryZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterPrimaryZoneWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterSSLRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDBClusterSSLResponse
     */
    public function modifyDBClusterSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterSSLResponse::fromMap($this->doRPCRequest('ModifyDBClusterSSL', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyDBClusterTDERequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDBClusterTDEResponse
     */
    public function modifyDBClusterTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterTDEResponse::fromMap($this->doRPCRequest('ModifyDBClusterTDE', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterTDERequest $request
     *
     * @return ModifyDBClusterTDEResponse
     */
    public function modifyDBClusterTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterTDEWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBDescriptionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDBDescriptionResponse
     */
    public function modifyDBDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBDescriptionResponse::fromMap($this->doRPCRequest('ModifyDBDescription', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBDescriptionRequest $request
     *
     * @return ModifyDBDescriptionResponse
     */
    public function modifyDBDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBEndpointAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDBEndpointAddressResponse
     */
    public function modifyDBEndpointAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBEndpointAddressResponse::fromMap($this->doRPCRequest('ModifyDBEndpointAddress', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBEndpointAddressRequest $request
     *
     * @return ModifyDBEndpointAddressResponse
     */
    public function modifyDBEndpointAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBEndpointAddressWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBNodeClassRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDBNodeClassResponse
     */
    public function modifyDBNodeClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBNodeClassResponse::fromMap($this->doRPCRequest('ModifyDBNodeClass', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBNodeClassRequest $request
     *
     * @return ModifyDBNodeClassResponse
     */
    public function modifyDBNodeClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBNodeClassWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGlobalDatabaseNetworkRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyGlobalDatabaseNetworkResponse
     */
    public function modifyGlobalDatabaseNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyGlobalDatabaseNetworkResponse::fromMap($this->doRPCRequest('ModifyGlobalDatabaseNetwork', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyGlobalDatabaseNetworkRequest $request
     *
     * @return ModifyGlobalDatabaseNetworkResponse
     */
    public function modifyGlobalDatabaseNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGlobalDatabaseNetworkWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLogBackupPolicyResponse::fromMap($this->doRPCRequest('ModifyLogBackupPolicy', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyPendingMaintenanceActionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyPendingMaintenanceActionResponse
     */
    public function modifyPendingMaintenanceActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPendingMaintenanceActionResponse::fromMap($this->doRPCRequest('ModifyPendingMaintenanceAction', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyPendingMaintenanceActionRequest $request
     *
     * @return ModifyPendingMaintenanceActionResponse
     */
    public function modifyPendingMaintenanceAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPendingMaintenanceActionWithOptions($request, $runtime);
    }

    /**
     * @param RemoveDBClusterFromGDNRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RemoveDBClusterFromGDNResponse
     */
    public function removeDBClusterFromGDNWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveDBClusterFromGDNResponse::fromMap($this->doRPCRequest('RemoveDBClusterFromGDN', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveDBClusterFromGDNRequest $request
     *
     * @return RemoveDBClusterFromGDNResponse
     */
    public function removeDBClusterFromGDN($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDBClusterFromGDNWithOptions($request, $runtime);
    }

    /**
     * @param ResetAccountRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ResetAccountResponse
     */
    public function resetAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetAccountResponse::fromMap($this->doRPCRequest('ResetAccount', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetAccountRequest $request
     *
     * @return ResetAccountResponse
     */
    public function resetAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountWithOptions($request, $runtime);
    }

    /**
     * @param RestartDBNodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RestartDBNodeResponse
     */
    public function restartDBNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestartDBNodeResponse::fromMap($this->doRPCRequest('RestartDBNode', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RestartDBNodeRequest $request
     *
     * @return RestartDBNodeResponse
     */
    public function restartDBNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBNodeWithOptions($request, $runtime);
    }

    /**
     * @param RestoreTableRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RestoreTableResponse
     */
    public function restoreTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestoreTableResponse::fromMap($this->doRPCRequest('RestoreTable', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RestoreTableRequest $request
     *
     * @return RestoreTableResponse
     */
    public function restoreTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreTableWithOptions($request, $runtime);
    }

    /**
     * @param RevokeAccountPrivilegeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RevokeAccountPrivilegeResponse
     */
    public function revokeAccountPrivilegeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RevokeAccountPrivilegeResponse::fromMap($this->doRPCRequest('RevokeAccountPrivilege', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RevokeAccountPrivilegeRequest $request
     *
     * @return RevokeAccountPrivilegeResponse
     */
    public function revokeAccountPrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeAccountPrivilegeWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TransformDBClusterPayTypeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return TransformDBClusterPayTypeResponse
     */
    public function transformDBClusterPayTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransformDBClusterPayTypeResponse::fromMap($this->doRPCRequest('TransformDBClusterPayType', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TransformDBClusterPayTypeRequest $request
     *
     * @return TransformDBClusterPayTypeResponse
     */
    public function transformDBClusterPayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transformDBClusterPayTypeWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

    /**
     * @param UpgradeDBClusterMinorVersionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpgradeDBClusterMinorVersionResponse
     */
    public function upgradeDBClusterMinorVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeDBClusterMinorVersionResponse::fromMap($this->doRPCRequest('UpgradeDBClusterMinorVersion', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradeDBClusterMinorVersionRequest $request
     *
     * @return UpgradeDBClusterMinorVersionResponse
     */
    public function upgradeDBClusterMinorVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBClusterMinorVersionWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeDBClusterVersionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpgradeDBClusterVersionResponse
     */
    public function upgradeDBClusterVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeDBClusterVersionResponse::fromMap($this->doRPCRequest('UpgradeDBClusterVersion', '2017-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradeDBClusterVersionRequest $request
     *
     * @return UpgradeDBClusterVersionResponse
     */
    public function upgradeDBClusterVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBClusterVersionWithOptions($request, $runtime);
    }
}
