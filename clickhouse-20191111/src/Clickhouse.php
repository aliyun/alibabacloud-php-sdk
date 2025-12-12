<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\AllocateClusterPublicConnectionRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\AllocateClusterPublicConnectionResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CancelActiveOperationTasksRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CancelActiveOperationTasksResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CancelAppointmentElectZookeeperLeaderRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CancelAppointmentElectZookeeperLeaderResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CancelAppointmentRestartInstanceNodeListRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CancelAppointmentRestartInstanceNodeListResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CancelRestartInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CancelRestartInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckClickhouseToRDSRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckClickhouseToRDSResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckModifyConfigNeedRestartRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckModifyConfigNeedRestartResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckMonitorAlertRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckMonitorAlertResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckScaleOutBalancedRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckScaleOutBalancedResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateAccountAndAuthorityRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateAccountAndAuthorityResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateBackupPolicyRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateBackupPolicyResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateMonitorDataReportRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateMonitorDataReportResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateOSSStorageRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateOSSStorageResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreatePortsForClickHouseRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreatePortsForClickHouseResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateRDSToClickhouseDbRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateRDSToClickhouseDbResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateSLBRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateSLBResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateSQLAccountRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateSQLAccountResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteBackupPolicyRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteBackupPolicyResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteDBClusterRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteDBClusterResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteSLBRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteSLBResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteSyndbRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteSyndbResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAccountAuthorityRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAccountAuthorityResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeActiveOperationMaintainConfRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeActiveOperationMaintainConfResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeActiveOperationTasksRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeActiveOperationTasksResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourceRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourceResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourcesRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourcesResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeColumnsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeColumnsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeConfigHistoryRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeConfigHistoryResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeConfigVersionDifferenceRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeConfigVersionDifferenceResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAccessWhiteListRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAccessWhiteListResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterConfigInXMLRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterConfigInXMLResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterConfigRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterConfigResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNetInfoItemsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNetInfoItemsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNodeInfosRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNodeInfosResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterPerformanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterPerformanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClustersRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClustersResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterStatusSetRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterStatusSetResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBConfigRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBConfigResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeEventMetaInfoRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeEventMetaInfoResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeOSSStorageRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeOSSStorageResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeProcessListRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeProcessListResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSchemasRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSchemasResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogTrendRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogTrendResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSynDbsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSynDbsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSynDbTablesRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSynDbTablesResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTablesRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTablesResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTransferHistoryRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTransferHistoryResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeUserEncryptionKeyListRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeUserEncryptionKeyListResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ElectZookeeperLeaderRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ElectZookeeperLeaderResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\KillProcessRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\KillProcessResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyAccountAuthorityRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyAccountAuthorityResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyActiveOperationMaintainConfRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyActiveOperationMaintainConfResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyActiveOperationTasksRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyActiveOperationTasksResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterAccessWhiteListRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterAccessWhiteListResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterConfigInXMLRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterConfigInXMLResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterConfigRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterConfigResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterDescriptionRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterDescriptionResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterMaintainTimeRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterMaintainTimeResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBConfigRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBConfigResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyMinorVersionGreadeTypeRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyMinorVersionGreadeTypeResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyRDSToClickhouseDbRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyRDSToClickhouseDbResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ReleaseClusterPublicConnectionRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ReleaseClusterPublicConnectionResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\RestartInstanceNodeListRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\RestartInstanceNodeListResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\RestartInstanceNodeListShrinkRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\TransferVersionRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\TransferVersionResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\UpgradeMinorVersionRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\UpgradeMinorVersionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Clickhouse extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-2-pop' => 'clickhouse.aliyuncs.com',
            'ap-southeast-1' => 'clickhouse.aliyuncs.com',
            'cn-beijing' => 'clickhouse.aliyuncs.com',
            'cn-beijing-finance-1' => 'clickhouse.aliyuncs.com',
            'cn-beijing-finance-pop' => 'clickhouse.aliyuncs.com',
            'cn-beijing-gov-1' => 'clickhouse.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'clickhouse.aliyuncs.com',
            'cn-edge-1' => 'clickhouse.aliyuncs.com',
            'cn-fujian' => 'clickhouse.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-finance' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-test-306' => 'clickhouse.aliyuncs.com',
            'cn-hongkong' => 'clickhouse.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'clickhouse.aliyuncs.com',
            'cn-north-2-gov-1' => 'clickhouse.aliyuncs.com',
            'cn-qingdao' => 'clickhouse.aliyuncs.com',
            'cn-qingdao-nebula' => 'clickhouse.aliyuncs.com',
            'cn-shanghai' => 'clickhouse.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'clickhouse.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'clickhouse.aliyuncs.com',
            'cn-shanghai-finance-1' => 'clickhouse.aliyuncs.com',
            'cn-shanghai-inner' => 'clickhouse.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'clickhouse.aliyuncs.com',
            'cn-shenzhen' => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-inner' => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'clickhouse.aliyuncs.com',
            'cn-wuhan' => 'clickhouse.aliyuncs.com',
            'cn-yushanfang' => 'clickhouse.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'clickhouse.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'clickhouse.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'clickhouse.aliyuncs.com',
            'eu-west-1-oxs' => 'clickhouse.aliyuncs.com',
            'me-east-1' => 'clickhouse.aliyuncs.com',
            'rus-west-1-pop' => 'clickhouse.aliyuncs.com',
            'us-east-1' => 'clickhouse.aliyuncs.com',
            'us-west-1' => 'clickhouse.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('clickhouse', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates a public endpoint for an ApsaraDB for ClickHouse cluster.
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
            'version' => '2019-11-11',
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
     * Creates a public endpoint for an ApsaraDB for ClickHouse cluster.
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
     * 取消运维事件任务
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
            'version' => '2019-11-11',
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
     * 取消运维事件任务
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
     * 取消预约Zookeeper切主.
     *
     * @param request - CancelAppointmentElectZookeeperLeaderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelAppointmentElectZookeeperLeaderResponse
     *
     * @param CancelAppointmentElectZookeeperLeaderRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return CancelAppointmentElectZookeeperLeaderResponse
     */
    public function cancelAppointmentElectZookeeperLeaderWithOptions($request, $runtime)
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
            'action' => 'CancelAppointmentElectZookeeperLeader',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelAppointmentElectZookeeperLeaderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消预约Zookeeper切主.
     *
     * @param request - CancelAppointmentElectZookeeperLeaderRequest
     *
     * @returns CancelAppointmentElectZookeeperLeaderResponse
     *
     * @param CancelAppointmentElectZookeeperLeaderRequest $request
     *
     * @return CancelAppointmentElectZookeeperLeaderResponse
     */
    public function cancelAppointmentElectZookeeperLeader($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAppointmentElectZookeeperLeaderWithOptions($request, $runtime);
    }

    /**
     * 取消预约重启节点列表.
     *
     * @param request - CancelAppointmentRestartInstanceNodeListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelAppointmentRestartInstanceNodeListResponse
     *
     * @param CancelAppointmentRestartInstanceNodeListRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return CancelAppointmentRestartInstanceNodeListResponse
     */
    public function cancelAppointmentRestartInstanceNodeListWithOptions($request, $runtime)
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
            'action' => 'CancelAppointmentRestartInstanceNodeList',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelAppointmentRestartInstanceNodeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消预约重启节点列表.
     *
     * @param request - CancelAppointmentRestartInstanceNodeListRequest
     *
     * @returns CancelAppointmentRestartInstanceNodeListResponse
     *
     * @param CancelAppointmentRestartInstanceNodeListRequest $request
     *
     * @return CancelAppointmentRestartInstanceNodeListResponse
     */
    public function cancelAppointmentRestartInstanceNodeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAppointmentRestartInstanceNodeListWithOptions($request, $runtime);
    }

    /**
     * 取消预约重启.
     *
     * @param request - CancelRestartInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelRestartInstanceResponse
     *
     * @param CancelRestartInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CancelRestartInstanceResponse
     */
    public function cancelRestartInstanceWithOptions($request, $runtime)
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

        if (null !== $request->restartTime) {
            @$query['RestartTime'] = $request->restartTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelRestartInstance',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelRestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消预约重启.
     *
     * @param request - CancelRestartInstanceRequest
     *
     * @returns CancelRestartInstanceResponse
     *
     * @param CancelRestartInstanceRequest $request
     *
     * @return CancelRestartInstanceResponse
     */
    public function cancelRestartInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRestartInstanceWithOptions($request, $runtime);
    }

    /**
     * 资源转组.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 资源转组.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Checks the connectivity between an ApsaraDB for ClickHouse cluster and an ApsaraDB RDS for MySQL instance.
     *
     * @param request - CheckClickhouseToRDSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckClickhouseToRDSResponse
     *
     * @param CheckClickhouseToRDSRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CheckClickhouseToRDSResponse
     */
    public function checkClickhouseToRDSWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ckPassword) {
            @$query['CkPassword'] = $request->ckPassword;
        }

        if (null !== $request->ckUserName) {
            @$query['CkUserName'] = $request->ckUserName;
        }

        if (null !== $request->clickhousePort) {
            @$query['ClickhousePort'] = $request->clickhousePort;
        }

        if (null !== $request->dbClusterId) {
            @$query['DbClusterId'] = $request->dbClusterId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->rdsId) {
            @$query['RdsId'] = $request->rdsId;
        }

        if (null !== $request->rdsPassword) {
            @$query['RdsPassword'] = $request->rdsPassword;
        }

        if (null !== $request->rdsPort) {
            @$query['RdsPort'] = $request->rdsPort;
        }

        if (null !== $request->rdsUserName) {
            @$query['RdsUserName'] = $request->rdsUserName;
        }

        if (null !== $request->rdsVpcId) {
            @$query['RdsVpcId'] = $request->rdsVpcId;
        }

        if (null !== $request->rdsVpcUrl) {
            @$query['RdsVpcUrl'] = $request->rdsVpcUrl;
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
            'action' => 'CheckClickhouseToRDS',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckClickhouseToRDSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks the connectivity between an ApsaraDB for ClickHouse cluster and an ApsaraDB RDS for MySQL instance.
     *
     * @param request - CheckClickhouseToRDSRequest
     *
     * @returns CheckClickhouseToRDSResponse
     *
     * @param CheckClickhouseToRDSRequest $request
     *
     * @return CheckClickhouseToRDSResponse
     */
    public function checkClickhouseToRDS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkClickhouseToRDSWithOptions($request, $runtime);
    }

    /**
     * Queries whether an ApsaraDB for ClickHouse cluster needs to be restarted after you change the values of the configuration parameters in XML mode.
     *
     * @remarks
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *
     * @param request - CheckModifyConfigNeedRestartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckModifyConfigNeedRestartResponse
     *
     * @param CheckModifyConfigNeedRestartRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CheckModifyConfigNeedRestartResponse
     */
    public function checkModifyConfigNeedRestartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckModifyConfigNeedRestart',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckModifyConfigNeedRestartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether an ApsaraDB for ClickHouse cluster needs to be restarted after you change the values of the configuration parameters in XML mode.
     *
     * @remarks
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *
     * @param request - CheckModifyConfigNeedRestartRequest
     *
     * @returns CheckModifyConfigNeedRestartResponse
     *
     * @param CheckModifyConfigNeedRestartRequest $request
     *
     * @return CheckModifyConfigNeedRestartResponse
     */
    public function checkModifyConfigNeedRestart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkModifyConfigNeedRestartWithOptions($request, $runtime);
    }

    /**
     * Checks whether the monitoring and alerting feature that is provided by Application Real-Time Monitoring Service (ARMS) is enabled for an ApsaraDB for ClickHouse cluster.
     *
     * @param request - CheckMonitorAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckMonitorAlertResponse
     *
     * @param CheckMonitorAlertRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckMonitorAlertResponse
     */
    public function checkMonitorAlertWithOptions($request, $runtime)
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
            'action' => 'CheckMonitorAlert',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckMonitorAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether the monitoring and alerting feature that is provided by Application Real-Time Monitoring Service (ARMS) is enabled for an ApsaraDB for ClickHouse cluster.
     *
     * @param request - CheckMonitorAlertRequest
     *
     * @returns CheckMonitorAlertResponse
     *
     * @param CheckMonitorAlertRequest $request
     *
     * @return CheckMonitorAlertResponse
     */
    public function checkMonitorAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMonitorAlertWithOptions($request, $runtime);
    }

    /**
     * Performs migration and scale-out detection on an ApsaraDB for ClickHouse cluster.
     *
     * @param request - CheckScaleOutBalancedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckScaleOutBalancedResponse
     *
     * @param CheckScaleOutBalancedRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckScaleOutBalancedResponse
     */
    public function checkScaleOutBalancedWithOptions($request, $runtime)
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
            'action' => 'CheckScaleOutBalanced',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckScaleOutBalancedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs migration and scale-out detection on an ApsaraDB for ClickHouse cluster.
     *
     * @param request - CheckScaleOutBalancedRequest
     *
     * @returns CheckScaleOutBalancedResponse
     *
     * @param CheckScaleOutBalancedRequest $request
     *
     * @return CheckScaleOutBalancedResponse
     */
    public function checkScaleOutBalanced($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkScaleOutBalancedWithOptions($request, $runtime);
    }

    /**
     * Queries the service-linked role of ApsaraDB for ClickHouse.
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
            'action' => 'CheckServiceLinkedRole',
            'version' => '2019-11-11',
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
     * Queries the service-linked role of ApsaraDB for ClickHouse.
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
     * Creates a database account for an ApsaraDB for ClickHouse cluster.
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
            'action' => 'CreateAccount',
            'version' => '2019-11-11',
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
     * Creates a database account for an ApsaraDB for ClickHouse cluster.
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
     * Creates an account and grants permissions to the account.
     *
     * @param request - CreateAccountAndAuthorityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccountAndAuthorityResponse
     *
     * @param CreateAccountAndAuthorityRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateAccountAndAuthorityResponse
     */
    public function createAccountAndAuthorityWithOptions($request, $runtime)
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

        if (null !== $request->allowDatabases) {
            @$query['AllowDatabases'] = $request->allowDatabases;
        }

        if (null !== $request->allowDictionaries) {
            @$query['AllowDictionaries'] = $request->allowDictionaries;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ddlAuthority) {
            @$query['DdlAuthority'] = $request->ddlAuthority;
        }

        if (null !== $request->dmlAuthority) {
            @$query['DmlAuthority'] = $request->dmlAuthority;
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

        if (null !== $request->totalDatabases) {
            @$query['TotalDatabases'] = $request->totalDatabases;
        }

        if (null !== $request->totalDictionaries) {
            @$query['TotalDictionaries'] = $request->totalDictionaries;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccountAndAuthority',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccountAndAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an account and grants permissions to the account.
     *
     * @param request - CreateAccountAndAuthorityRequest
     *
     * @returns CreateAccountAndAuthorityResponse
     *
     * @param CreateAccountAndAuthorityRequest $request
     *
     * @return CreateAccountAndAuthorityResponse
     */
    public function createAccountAndAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountAndAuthorityWithOptions($request, $runtime);
    }

    /**
     * Creates a backup policy.
     *
     * @remarks
     * >  This operation is available only for the ApsaraDB for ClickHouse clusters of versions 20.3, 20.8, and 21.8.
     *
     * @param request - CreateBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBackupPolicyResponse
     *
     * @param CreateBackupPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateBackupPolicyResponse
     */
    public function createBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupRetentionPeriod) {
            @$query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
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

        if (null !== $request->preferredBackupPeriod) {
            @$query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }

        if (null !== $request->preferredBackupTime) {
            @$query['PreferredBackupTime'] = $request->preferredBackupTime;
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
            'action' => 'CreateBackupPolicy',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a backup policy.
     *
     * @remarks
     * >  This operation is available only for the ApsaraDB for ClickHouse clusters of versions 20.3, 20.8, and 21.8.
     *
     * @param request - CreateBackupPolicyRequest
     *
     * @returns CreateBackupPolicyResponse
     *
     * @param CreateBackupPolicyRequest $request
     *
     * @return CreateBackupPolicyResponse
     */
    public function createBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * Before you call this operation, make sure that you are familiar with the billing methods and [pricing](https://help.aliyun.com/document_detail/167450.html) of ApsaraDB for ClickHouse.
     *
     * @param request - CreateDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBInstanceResponse
     *
     * @param CreateDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->backupSetID) {
            @$query['BackupSetID'] = $request->backupSetID;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
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

        if (null !== $request->dbNodeStorageType) {
            @$query['DbNodeStorageType'] = $request->dbNodeStorageType;
        }

        if (null !== $request->encryptionKey) {
            @$query['EncryptionKey'] = $request->encryptionKey;
        }

        if (null !== $request->encryptionType) {
            @$query['EncryptionType'] = $request->encryptionType;
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

        if (null !== $request->sourceDBClusterId) {
            @$query['SourceDBClusterId'] = $request->sourceDBClusterId;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        if (null !== $request->VPCId) {
            @$query['VPCId'] = $request->VPCId;
        }

        if (null !== $request->vSwitchBak) {
            @$query['VSwitchBak'] = $request->vSwitchBak;
        }

        if (null !== $request->vSwitchBak2) {
            @$query['VSwitchBak2'] = $request->vSwitchBak2;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->zondIdBak2) {
            @$query['ZondIdBak2'] = $request->zondIdBak2;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        if (null !== $request->zoneIdBak) {
            @$query['ZoneIdBak'] = $request->zoneIdBak;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBInstance',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * Before you call this operation, make sure that you are familiar with the billing methods and [pricing](https://help.aliyun.com/document_detail/167450.html) of ApsaraDB for ClickHouse.
     *
     * @param request - CreateDBInstanceRequest
     *
     * @returns CreateDBInstanceResponse
     *
     * @param CreateDBInstanceRequest $request
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a monitoring data report for an ApsaraDB for ClickHouse cluster.
     *
     * @param request - CreateMonitorDataReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorDataReportResponse
     *
     * @param CreateMonitorDataReportRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateMonitorDataReportResponse
     */
    public function createMonitorDataReportWithOptions($request, $runtime)
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
            'action' => 'CreateMonitorDataReport',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMonitorDataReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a monitoring data report for an ApsaraDB for ClickHouse cluster.
     *
     * @param request - CreateMonitorDataReportRequest
     *
     * @returns CreateMonitorDataReportResponse
     *
     * @param CreateMonitorDataReportRequest $request
     *
     * @return CreateMonitorDataReportResponse
     */
    public function createMonitorDataReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorDataReportWithOptions($request, $runtime);
    }

    /**
     * Creates a storage task for cold data.
     *
     * @remarks
     * Only an ApsaraDB for ClickHouse cluster of V20.8 or later supports tiered storage of hot data and cold data. If your data is in an ApsaraDB for ClickHouse cluster of a version earlier than V20.8 and you want to use tiered storage of hot data and cold data to store the data, you can migrate the data to an ApsaraDB for ClickHouse cluster of V20.8 or later and use tiered storage of hot data and cold data. For more information about how to migrate data between ApsaraDB for ClickHouse clusters, see [Migrate data between ApsaraDB for ClickHouse clusters](https://help.aliyun.com/document_detail/276926.html).
     *
     * @param request - CreateOSSStorageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOSSStorageResponse
     *
     * @param CreateOSSStorageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateOSSStorageResponse
     */
    public function createOSSStorageWithOptions($request, $runtime)
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
            'action' => 'CreateOSSStorage',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOSSStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a storage task for cold data.
     *
     * @remarks
     * Only an ApsaraDB for ClickHouse cluster of V20.8 or later supports tiered storage of hot data and cold data. If your data is in an ApsaraDB for ClickHouse cluster of a version earlier than V20.8 and you want to use tiered storage of hot data and cold data to store the data, you can migrate the data to an ApsaraDB for ClickHouse cluster of V20.8 or later and use tiered storage of hot data and cold data. For more information about how to migrate data between ApsaraDB for ClickHouse clusters, see [Migrate data between ApsaraDB for ClickHouse clusters](https://help.aliyun.com/document_detail/276926.html).
     *
     * @param request - CreateOSSStorageRequest
     *
     * @returns CreateOSSStorageResponse
     *
     * @param CreateOSSStorageRequest $request
     *
     * @return CreateOSSStorageResponse
     */
    public function createOSSStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOSSStorageWithOptions($request, $runtime);
    }

    /**
     * Enables the MySQL port for an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  For an ApsaraDB for ClickHouse cluster of V20.8 or later that was created before December 1, 2021, you must manually enable the MySQL port. For an ApsaraDB for ClickHouse cluster of V20.8 or later that was created after December 1, 2021, the MySQL port is automatically enabled.
     *
     * @param request - CreatePortsForClickHouseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePortsForClickHouseResponse
     *
     * @param CreatePortsForClickHouseRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreatePortsForClickHouseResponse
     */
    public function createPortsForClickHouseWithOptions($request, $runtime)
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

        if (null !== $request->portType) {
            @$query['PortType'] = $request->portType;
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
            'action' => 'CreatePortsForClickHouse',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePortsForClickHouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the MySQL port for an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  For an ApsaraDB for ClickHouse cluster of V20.8 or later that was created before December 1, 2021, you must manually enable the MySQL port. For an ApsaraDB for ClickHouse cluster of V20.8 or later that was created after December 1, 2021, the MySQL port is automatically enabled.
     *
     * @param request - CreatePortsForClickHouseRequest
     *
     * @returns CreatePortsForClickHouseResponse
     *
     * @param CreatePortsForClickHouseRequest $request
     *
     * @return CreatePortsForClickHouseResponse
     */
    public function createPortsForClickHouse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPortsForClickHouseWithOptions($request, $runtime);
    }

    /**
     * Creates a task to synchronize data from an ApsaraDB RDS for MySQL instance to an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  This operation is only applicable to ApsaraDB for ClickHouse clusters.
     *
     * @param request - CreateRDSToClickhouseDbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRDSToClickhouseDbResponse
     *
     * @param CreateRDSToClickhouseDbRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateRDSToClickhouseDbResponse
     */
    public function createRDSToClickhouseDbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ckPassword) {
            @$query['CkPassword'] = $request->ckPassword;
        }

        if (null !== $request->ckUserName) {
            @$query['CkUserName'] = $request->ckUserName;
        }

        if (null !== $request->clickhousePort) {
            @$query['ClickhousePort'] = $request->clickhousePort;
        }

        if (null !== $request->dbClusterId) {
            @$query['DbClusterId'] = $request->dbClusterId;
        }

        if (null !== $request->limitUpper) {
            @$query['LimitUpper'] = $request->limitUpper;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->rdsId) {
            @$query['RdsId'] = $request->rdsId;
        }

        if (null !== $request->rdsPassword) {
            @$query['RdsPassword'] = $request->rdsPassword;
        }

        if (null !== $request->rdsPort) {
            @$query['RdsPort'] = $request->rdsPort;
        }

        if (null !== $request->rdsUserName) {
            @$query['RdsUserName'] = $request->rdsUserName;
        }

        if (null !== $request->rdsVpcId) {
            @$query['RdsVpcId'] = $request->rdsVpcId;
        }

        if (null !== $request->rdsVpcUrl) {
            @$query['RdsVpcUrl'] = $request->rdsVpcUrl;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->skipUnsupported) {
            @$query['SkipUnsupported'] = $request->skipUnsupported;
        }

        if (null !== $request->synDbTables) {
            @$query['SynDbTables'] = $request->synDbTables;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRDSToClickhouseDb',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRDSToClickhouseDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a task to synchronize data from an ApsaraDB RDS for MySQL instance to an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  This operation is only applicable to ApsaraDB for ClickHouse clusters.
     *
     * @param request - CreateRDSToClickhouseDbRequest
     *
     * @returns CreateRDSToClickhouseDbResponse
     *
     * @param CreateRDSToClickhouseDbRequest $request
     *
     * @return CreateRDSToClickhouseDbResponse
     */
    public function createRDSToClickhouseDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRDSToClickhouseDbWithOptions($request, $runtime);
    }

    /**
     * Mounts a Server Load Balancer (SLB) instance to an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * ## [](#)Description
     * An ApsaraDB for ClickHouse cluster is dependent on an SLB instance at the network layer. You can bind a domain name to the IP address of an ApsaraDB for ClickHouse node to provide external connectivity service and provide failover capabilities. The SLB instance forwards requests to the nodes in the ApsaraDB for ClickHouse cluster and balances the request traffic among the nodes. The SLB instance checks the availability of backend nodes. If the SLB instance detects that a node is unavailable by checking the health status of all nodes, the SLB instance automatically isolates the unavailable node. This ensures that the request traffic is balanced among available nodes.
     *
     * @param request - CreateSLBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSLBResponse
     *
     * @param CreateSLBRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateSLBResponse
     */
    public function createSLBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSLB',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSLBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Mounts a Server Load Balancer (SLB) instance to an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * ## [](#)Description
     * An ApsaraDB for ClickHouse cluster is dependent on an SLB instance at the network layer. You can bind a domain name to the IP address of an ApsaraDB for ClickHouse node to provide external connectivity service and provide failover capabilities. The SLB instance forwards requests to the nodes in the ApsaraDB for ClickHouse cluster and balances the request traffic among the nodes. The SLB instance checks the availability of backend nodes. If the SLB instance detects that a node is unavailable by checking the health status of all nodes, the SLB instance automatically isolates the unavailable node. This ensures that the request traffic is balanced among available nodes.
     *
     * @param request - CreateSLBRequest
     *
     * @returns CreateSLBResponse
     *
     * @param CreateSLBRequest $request
     *
     * @return CreateSLBResponse
     */
    public function createSLB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSLBWithOptions($request, $runtime);
    }

    /**
     * Creates a privileged account or a standard account for an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  This operation is applicable only to ApsaraDB for ClickHouse clusters of V20.8 or later that were created after December 1, 2021,
     *
     * @param request - CreateSQLAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSQLAccountResponse
     *
     * @param CreateSQLAccountRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSQLAccountResponse
     */
    public function createSQLAccountWithOptions($request, $runtime)
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
            'action' => 'CreateSQLAccount',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSQLAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a privileged account or a standard account for an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  This operation is applicable only to ApsaraDB for ClickHouse clusters of V20.8 or later that were created after December 1, 2021,
     *
     * @param request - CreateSQLAccountRequest
     *
     * @returns CreateSQLAccountResponse
     *
     * @param CreateSQLAccountRequest $request
     *
     * @return CreateSQLAccountResponse
     */
    public function createSQLAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSQLAccountWithOptions($request, $runtime);
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
            'action' => 'CreateServiceLinkedRole',
            'version' => '2019-11-11',
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
     * Deletes a database account of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  After you delete a database account, you cannot use the account to log on to the ApsaraDB for ClickHouse cluster. Exercise caution when performing this operation.
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
            'version' => '2019-11-11',
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
     * Deletes a database account of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  After you delete a database account, you cannot use the account to log on to the ApsaraDB for ClickHouse cluster. Exercise caution when performing this operation.
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
     * 删除备份策略.
     *
     * @param request - DeleteBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBackupPolicyResponse
     *
     * @param DeleteBackupPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteBackupPolicyResponse
     */
    public function deleteBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBackupPolicy',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除备份策略.
     *
     * @param request - DeleteBackupPolicyRequest
     *
     * @returns DeleteBackupPolicyResponse
     *
     * @param DeleteBackupPolicyRequest $request
     *
     * @return DeleteBackupPolicyResponse
     */
    public function deleteBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * Releases a pay-as-you-go ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * *Warning** After an ApsaraDB for ClickHouse cluster is deleted, all data in the cluster is deleted and cannot be recovered. Exercise caution when performing this operation.
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
            'version' => '2019-11-11',
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
     * Releases a pay-as-you-go ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * *Warning** After an ApsaraDB for ClickHouse cluster is deleted, all data in the cluster is deleted and cannot be recovered. Exercise caution when performing this operation.
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
     * Removes a Server Load Balancer (SLB) instance from an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * ## [](#)Description
     * After an SLB instance is released, simple load balancing is performed on inbound traffic based on the domain name. The health status of all nodes is no longer checked. As a result, unavailable nodes may fail to be detected, and normal requests may be routed to the unavailable nodes. This causes the failures of some read and write requests.
     *
     * @param request - DeleteSLBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSLBResponse
     *
     * @param DeleteSLBRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteSLBResponse
     */
    public function deleteSLBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSLB',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSLBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a Server Load Balancer (SLB) instance from an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * ## [](#)Description
     * After an SLB instance is released, simple load balancing is performed on inbound traffic based on the domain name. The health status of all nodes is no longer checked. As a result, unavailable nodes may fail to be detected, and normal requests may be routed to the unavailable nodes. This causes the failures of some read and write requests.
     *
     * @param request - DeleteSLBRequest
     *
     * @returns DeleteSLBResponse
     *
     * @param DeleteSLBRequest $request
     *
     * @return DeleteSLBResponse
     */
    public function deleteSLB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSLBWithOptions($request, $runtime);
    }

    /**
     * Deletes a database used for data synchronization.
     *
     * @param request - DeleteSyndbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSyndbResponse
     *
     * @param DeleteSyndbRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSyndbResponse
     */
    public function deleteSyndbWithOptions($request, $runtime)
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->synDb) {
            @$query['SynDb'] = $request->synDb;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSyndb',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSyndbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a database used for data synchronization.
     *
     * @param request - DeleteSyndbRequest
     *
     * @returns DeleteSyndbResponse
     *
     * @param DeleteSyndbRequest $request
     *
     * @return DeleteSyndbResponse
     */
    public function deleteSyndb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSyndbWithOptions($request, $runtime);
    }

    /**
     * Queries the permissions of an account.
     *
     * @param request - DescribeAccountAuthorityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccountAuthorityResponse
     *
     * @param DescribeAccountAuthorityRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAccountAuthorityResponse
     */
    public function describeAccountAuthorityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'DescribeAccountAuthority',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccountAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the permissions of an account.
     *
     * @param request - DescribeAccountAuthorityRequest
     *
     * @returns DescribeAccountAuthorityResponse
     *
     * @param DescribeAccountAuthorityRequest $request
     *
     * @return DescribeAccountAuthorityResponse
     */
    public function describeAccountAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountAuthorityWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the database accounts of an ApsaraDB for ClickHouse cluster.
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccounts',
            'version' => '2019-11-11',
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
     * Queries the information about the database accounts of an ApsaraDB for ClickHouse cluster.
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
     * 主动运维.
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeActiveOperationMaintainConf',
            'version' => '2019-11-11',
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
     * 主动运维.
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
            'version' => '2019-11-11',
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
     * Queries a list of databases, tables, and columns in an ApsaraDB for ClickHouse cluster.
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
            'version' => '2019-11-11',
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
     * Queries a list of databases, tables, and columns in an ApsaraDB for ClickHouse cluster.
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
     * Queries the data sources of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - DescribeAllDataSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAllDataSourcesResponse
     *
     * @param DescribeAllDataSourcesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAllDataSourcesResponse
     */
    public function describeAllDataSourcesWithOptions($request, $runtime)
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
            'action' => 'DescribeAllDataSources',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAllDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the data sources of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - DescribeAllDataSourcesRequest
     *
     * @returns DescribeAllDataSourcesResponse
     *
     * @param DescribeAllDataSourcesRequest $request
     *
     * @return DescribeAllDataSourcesResponse
     */
    public function describeAllDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllDataSourcesWithOptions($request, $runtime);
    }

    /**
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
            'version' => '2019-11-11',
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
     * Queries the backup settings of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  This operation is available only for the ApsaraDB for ClickHouse clusters of versions 20.3, 20.8, and 21.8.
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
            'version' => '2019-11-11',
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
     * Queries the backup settings of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  This operation is available only for the ApsaraDB for ClickHouse clusters of versions 20.3, 20.8, and 21.8.
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
     * Queries the backup sets of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  This operation is available only for ApsaraDB for ClickHouse clusters of version 21.8 and later.
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
            'version' => '2019-11-11',
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
     * Queries the backup sets of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  This operation is available only for ApsaraDB for ClickHouse clusters of version 21.8 and later.
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
     * Queries information about columns.
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
            'version' => '2019-11-11',
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
     * Queries information about columns.
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
     * Queries the change records of the configuration parameters of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *
     * @param request - DescribeConfigHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeConfigHistoryResponse
     *
     * @param DescribeConfigHistoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeConfigHistoryResponse
     */
    public function describeConfigHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeConfigHistory',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeConfigHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the change records of the configuration parameters of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *
     * @param request - DescribeConfigHistoryRequest
     *
     * @returns DescribeConfigHistoryResponse
     *
     * @param DescribeConfigHistoryRequest $request
     *
     * @return DescribeConfigHistoryResponse
     */
    public function describeConfigHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConfigHistoryWithOptions($request, $runtime);
    }

    /**
     * Queries the values of the configuration parameters of an ApsaraDB for ClickHouse cluster before and after the values of the configuration parameters are changed.
     *
     * @remarks
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *
     * @param request - DescribeConfigVersionDifferenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeConfigVersionDifferenceResponse
     *
     * @param DescribeConfigVersionDifferenceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeConfigVersionDifferenceResponse
     */
    public function describeConfigVersionDifferenceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeConfigVersionDifference',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeConfigVersionDifferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the values of the configuration parameters of an ApsaraDB for ClickHouse cluster before and after the values of the configuration parameters are changed.
     *
     * @remarks
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *
     * @param request - DescribeConfigVersionDifferenceRequest
     *
     * @returns DescribeConfigVersionDifferenceResponse
     *
     * @param DescribeConfigVersionDifferenceRequest $request
     *
     * @return DescribeConfigVersionDifferenceResponse
     */
    public function describeConfigVersionDifference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConfigVersionDifferenceWithOptions($request, $runtime);
    }

    /**
     * Queries the IP address whitelist of an ApsaraDB for ClickHouse cluster.
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
            'version' => '2019-11-11',
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
     * Queries the IP address whitelist of an ApsaraDB for ClickHouse cluster.
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
     * Queries the information about an ApsaraDB for ClickHouse cluster.
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
            'version' => '2019-11-11',
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
     * Queries the information about an ApsaraDB for ClickHouse cluster.
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
     * Queries information about the parameter settings of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - DescribeDBClusterConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterConfigResponse
     *
     * @param DescribeDBClusterConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDBClusterConfigResponse
     */
    public function describeDBClusterConfigWithOptions($request, $runtime)
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
            'action' => 'DescribeDBClusterConfig',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about the parameter settings of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - DescribeDBClusterConfigRequest
     *
     * @returns DescribeDBClusterConfigResponse
     *
     * @param DescribeDBClusterConfigRequest $request
     *
     * @return DescribeDBClusterConfigResponse
     */
    public function describeDBClusterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the values of the configuration parameters in the config.xml file of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *
     * @param request - DescribeDBClusterConfigInXMLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterConfigInXMLResponse
     *
     * @param DescribeDBClusterConfigInXMLRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDBClusterConfigInXMLResponse
     */
    public function describeDBClusterConfigInXMLWithOptions($request, $runtime)
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
            'action' => 'DescribeDBClusterConfigInXML',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterConfigInXMLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the values of the configuration parameters in the config.xml file of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *
     * @param request - DescribeDBClusterConfigInXMLRequest
     *
     * @returns DescribeDBClusterConfigInXMLResponse
     *
     * @param DescribeDBClusterConfigInXMLRequest $request
     *
     * @return DescribeDBClusterConfigInXMLResponse
     */
    public function describeDBClusterConfigInXML($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterConfigInXMLWithOptions($request, $runtime);
    }

    /**
     * Queries the network information about an ApsaraDB for ClickHouse cluster.
     *
     * @param request - DescribeDBClusterNetInfoItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterNetInfoItemsResponse
     *
     * @param DescribeDBClusterNetInfoItemsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBClusterNetInfoItemsResponse
     */
    public function describeDBClusterNetInfoItemsWithOptions($request, $runtime)
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
            'action' => 'DescribeDBClusterNetInfoItems',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterNetInfoItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the network information about an ApsaraDB for ClickHouse cluster.
     *
     * @param request - DescribeDBClusterNetInfoItemsRequest
     *
     * @returns DescribeDBClusterNetInfoItemsResponse
     *
     * @param DescribeDBClusterNetInfoItemsRequest $request
     *
     * @return DescribeDBClusterNetInfoItemsResponse
     */
    public function describeDBClusterNetInfoItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterNetInfoItemsWithOptions($request, $runtime);
    }

    /**
     * 获取实例节点信息.
     *
     * @param request - DescribeDBClusterNodeInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterNodeInfosResponse
     *
     * @param DescribeDBClusterNodeInfosRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBClusterNodeInfosResponse
     */
    public function describeDBClusterNodeInfosWithOptions($request, $runtime)
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
            'action' => 'DescribeDBClusterNodeInfos',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterNodeInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例节点信息.
     *
     * @param request - DescribeDBClusterNodeInfosRequest
     *
     * @returns DescribeDBClusterNodeInfosResponse
     *
     * @param DescribeDBClusterNodeInfosRequest $request
     *
     * @return DescribeDBClusterNodeInfosResponse
     */
    public function describeDBClusterNodeInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterNodeInfosWithOptions($request, $runtime);
    }

    /**
     * Queries performance data about an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * You can query the performance data of a specified cluster over a specific time range based on the performance metrics. The data is collected every 30 seconds.
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created before December 1, 2021.
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
            'action' => 'DescribeDBClusterPerformance',
            'version' => '2019-11-11',
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
     * Queries performance data about an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * You can query the performance data of a specified cluster over a specific time range based on the performance metrics. The data is collected every 30 seconds.
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created before December 1, 2021.
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
     * @param request - DescribeDBClusterStatusSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBClusterStatusSetResponse
     *
     * @param DescribeDBClusterStatusSetRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBClusterStatusSetResponse
     */
    public function describeDBClusterStatusSetWithOptions($request, $runtime)
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
            'action' => 'DescribeDBClusterStatusSet',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBClusterStatusSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDBClusterStatusSetRequest
     *
     * @returns DescribeDBClusterStatusSetResponse
     *
     * @param DescribeDBClusterStatusSetRequest $request
     *
     * @return DescribeDBClusterStatusSetResponse
     */
    public function describeDBClusterStatusSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterStatusSetWithOptions($request, $runtime);
    }

    /**
     * Queries the information about ApsaraDB for ClickHouse clusters in a region.
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
            'version' => '2019-11-11',
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
     * Queries the information about ApsaraDB for ClickHouse clusters in a region.
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
     * Queries configuration information about an ApsaraDB for ClickHouse cluster.
     *
     * @param request - DescribeDBConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBConfigResponse
     *
     * @param DescribeDBConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDBConfigResponse
     */
    public function describeDBConfigWithOptions($request, $runtime)
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
            'action' => 'DescribeDBConfig',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDBConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries configuration information about an ApsaraDB for ClickHouse cluster.
     *
     * @param request - DescribeDBConfigRequest
     *
     * @returns DescribeDBConfigResponse
     *
     * @param DescribeDBConfigRequest $request
     *
     * @return DescribeDBConfigResponse
     */
    public function describeDBConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBConfigWithOptions($request, $runtime);
    }

    /**
     * DescribeEventMetaInfo.
     *
     * @param request - DescribeEventMetaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventMetaInfoResponse
     *
     * @param DescribeEventMetaInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeEventMetaInfoResponse
     */
    public function describeEventMetaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sourceCode) {
            @$query['SourceCode'] = $request->sourceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventMetaInfo',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventMetaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeEventMetaInfo.
     *
     * @param request - DescribeEventMetaInfoRequest
     *
     * @returns DescribeEventMetaInfoResponse
     *
     * @param DescribeEventMetaInfoRequest $request
     *
     * @return DescribeEventMetaInfoResponse
     */
    public function describeEventMetaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventMetaInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the storage of cold data.
     *
     * @param request - DescribeOSSStorageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOSSStorageResponse
     *
     * @param DescribeOSSStorageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeOSSStorageResponse
     */
    public function describeOSSStorageWithOptions($request, $runtime)
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
            'action' => 'DescribeOSSStorage',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOSSStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage of cold data.
     *
     * @param request - DescribeOSSStorageRequest
     *
     * @returns DescribeOSSStorageResponse
     *
     * @param DescribeOSSStorageRequest $request
     *
     * @return DescribeOSSStorageResponse
     */
    public function describeOSSStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOSSStorageWithOptions($request, $runtime);
    }

    /**
     * Queries the details of queries that are being executed in an ApsaraDB for ClickHouse cluster.
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

        if (null !== $request->initialQueryId) {
            @$query['InitialQueryId'] = $request->initialQueryId;
        }

        if (null !== $request->initialUser) {
            @$query['InitialUser'] = $request->initialUser;
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

        if (null !== $request->queryDurationMs) {
            @$query['QueryDurationMs'] = $request->queryDurationMs;
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
            'action' => 'DescribeProcessList',
            'version' => '2019-11-11',
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
     * Queries the details of queries that are being executed in an ApsaraDB for ClickHouse cluster.
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
     * Queries the information about all regions and zones of ApsaraDB for ClickHouse clusters.
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
            'action' => 'DescribeRegions',
            'version' => '2019-11-11',
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
     * Queries the information about all regions and zones of ApsaraDB for ClickHouse clusters.
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
     * Queries a list of all databases in an ApsaraDB for ClickHouse cluster.
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
            'version' => '2019-11-11',
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
     * Queries a list of all databases in an ApsaraDB for ClickHouse cluster.
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
     * Queries the details about slow query logs.
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

        if (null !== $request->queryDurationMs) {
            @$query['QueryDurationMs'] = $request->queryDurationMs;
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
            'action' => 'DescribeSlowLogRecords',
            'version' => '2019-11-11',
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
     * Queries the details about slow query logs.
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
     * @param request - DescribeSlowLogTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlowLogTrendResponse
     *
     * @param DescribeSlowLogTrendRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSlowLogTrendResponse
     */
    public function describeSlowLogTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->queryDurationMs) {
            @$query['QueryDurationMs'] = $request->queryDurationMs;
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
            'action' => 'DescribeSlowLogTrend',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSlowLogTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSlowLogTrendRequest
     *
     * @returns DescribeSlowLogTrendResponse
     *
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
     * Queries information about tables that are synchronized from an ApsaraDB RDS for MySQL instance to an ApsaraDB for ClickHouse cluster.
     *
     * @param request - DescribeSynDbTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSynDbTablesResponse
     *
     * @param DescribeSynDbTablesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSynDbTablesResponse
     */
    public function describeSynDbTablesWithOptions($request, $runtime)
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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->synDb) {
            @$query['SynDb'] = $request->synDb;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSynDbTables',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSynDbTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about tables that are synchronized from an ApsaraDB RDS for MySQL instance to an ApsaraDB for ClickHouse cluster.
     *
     * @param request - DescribeSynDbTablesRequest
     *
     * @returns DescribeSynDbTablesResponse
     *
     * @param DescribeSynDbTablesRequest $request
     *
     * @return DescribeSynDbTablesResponse
     */
    public function describeSynDbTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynDbTablesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about data synchronization between an ApsaraDB for ClickHouse cluster and an ApsaraDB RDS for MySQL instance.
     *
     * @param request - DescribeSynDbsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSynDbsResponse
     *
     * @param DescribeSynDbsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeSynDbsResponse
     */
    public function describeSynDbsWithOptions($request, $runtime)
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSynDbs',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSynDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about data synchronization between an ApsaraDB for ClickHouse cluster and an ApsaraDB RDS for MySQL instance.
     *
     * @param request - DescribeSynDbsRequest
     *
     * @returns DescribeSynDbsResponse
     *
     * @param DescribeSynDbsRequest $request
     *
     * @return DescribeSynDbsResponse
     */
    public function describeSynDbs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynDbsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about tables in a database of an ApsaraDB for ClickHouse cluster.
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
            'version' => '2019-11-11',
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
     * Queries the information about tables in a database of an ApsaraDB for ClickHouse cluster.
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
     * Queries information about data migration from an ApsaraDB for ClickHouse cluster of an earlier version to an ApsaraDB for ClickHouse cluster of a later version.
     *
     * @remarks
     * >  You can call this operation to query information about only data migration from an ApsaraDB for ClickHouse cluster of an earlier version to an ApsaraDB for ClickHouse cluster of a later version.
     *
     * @param request - DescribeTransferHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTransferHistoryResponse
     *
     * @param DescribeTransferHistoryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTransferHistoryResponse
     */
    public function describeTransferHistoryWithOptions($request, $runtime)
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
            'action' => 'DescribeTransferHistory',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTransferHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about data migration from an ApsaraDB for ClickHouse cluster of an earlier version to an ApsaraDB for ClickHouse cluster of a later version.
     *
     * @remarks
     * >  You can call this operation to query information about only data migration from an ApsaraDB for ClickHouse cluster of an earlier version to an ApsaraDB for ClickHouse cluster of a later version.
     *
     * @param request - DescribeTransferHistoryRequest
     *
     * @returns DescribeTransferHistoryResponse
     *
     * @param DescribeTransferHistoryRequest $request
     *
     * @return DescribeTransferHistoryResponse
     */
    public function describeTransferHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTransferHistoryWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeUserEncryptionKeyListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserEncryptionKeyListResponse
     *
     * @param DescribeUserEncryptionKeyListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'DescribeUserEncryptionKeyList',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserEncryptionKeyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeUserEncryptionKeyListRequest
     *
     * @returns DescribeUserEncryptionKeyListResponse
     *
     * @param DescribeUserEncryptionKeyListRequest $request
     *
     * @return DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserEncryptionKeyListWithOptions($request, $runtime);
    }

    /**
     * Zookeeper主动切主.
     *
     * @param request - ElectZookeeperLeaderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ElectZookeeperLeaderResponse
     *
     * @param ElectZookeeperLeaderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ElectZookeeperLeaderResponse
     */
    public function electZookeeperLeaderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->disableWrite) {
            @$query['DisableWrite'] = $request->disableWrite;
        }

        if (null !== $request->electTime) {
            @$query['ElectTime'] = $request->electTime;
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
            'action' => 'ElectZookeeperLeader',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ElectZookeeperLeaderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Zookeeper主动切主.
     *
     * @param request - ElectZookeeperLeaderRequest
     *
     * @returns ElectZookeeperLeaderResponse
     *
     * @param ElectZookeeperLeaderRequest $request
     *
     * @return ElectZookeeperLeaderResponse
     */
    public function electZookeeperLeader($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->electZookeeperLeaderWithOptions($request, $runtime);
    }

    /**
     * Terminates an ongoing task.
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

        if (null !== $request->initialQueryId) {
            @$query['InitialQueryId'] = $request->initialQueryId;
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
            'action' => 'KillProcess',
            'version' => '2019-11-11',
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
     * Terminates an ongoing task.
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
     * Queries the tags that are added to ApsaraDB for ClickHouse clusters.
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
            'version' => '2019-11-11',
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
     * Queries the tags that are added to ApsaraDB for ClickHouse clusters.
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
     * Modifies the permissions of an account.
     *
     * @param request - ModifyAccountAuthorityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccountAuthorityResponse
     *
     * @param ModifyAccountAuthorityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyAccountAuthorityResponse
     */
    public function modifyAccountAuthorityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->allowDatabases) {
            @$query['AllowDatabases'] = $request->allowDatabases;
        }

        if (null !== $request->allowDictionaries) {
            @$query['AllowDictionaries'] = $request->allowDictionaries;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->ddlAuthority) {
            @$query['DdlAuthority'] = $request->ddlAuthority;
        }

        if (null !== $request->dmlAuthority) {
            @$query['DmlAuthority'] = $request->dmlAuthority;
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

        if (null !== $request->totalDatabases) {
            @$query['TotalDatabases'] = $request->totalDatabases;
        }

        if (null !== $request->totalDictionaries) {
            @$query['TotalDictionaries'] = $request->totalDictionaries;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccountAuthority',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAccountAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the permissions of an account.
     *
     * @param request - ModifyAccountAuthorityRequest
     *
     * @returns ModifyAccountAuthorityResponse
     *
     * @param ModifyAccountAuthorityRequest $request
     *
     * @return ModifyAccountAuthorityResponse
     */
    public function modifyAccountAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountAuthorityWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a database account of an ApsaraDB for ClickHouse cluster.
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
            'version' => '2019-11-11',
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
     * Modifies the description of a database account of an ApsaraDB for ClickHouse cluster.
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
     * 修改主动运维设置.
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
            'version' => '2019-11-11',
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
     * 修改主动运维设置.
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
            'version' => '2019-11-11',
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
        if (null !== $request->DBClusterIds) {
            @$query['DBClusterIds'] = $request->DBClusterIds;
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
            'version' => '2019-11-11',
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
     * Modifies the backup settings of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  This operation is available only for the ApsaraDB for ClickHouse clusters of versions 20.3, 20.8, and 21.8.
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
            'version' => '2019-11-11',
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
     * Modifies the backup settings of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  This operation is available only for the ApsaraDB for ClickHouse clusters of versions 20.3, 20.8, and 21.8.
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
     * Upgrades or downgrades an ApsaraDB for ClickHouse cluster.
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
        if (null !== $request->DBClusterClass) {
            @$query['DBClusterClass'] = $request->DBClusterClass;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->DBNodeGroupCount) {
            @$query['DBNodeGroupCount'] = $request->DBNodeGroupCount;
        }

        if (null !== $request->DBNodeStorage) {
            @$query['DBNodeStorage'] = $request->DBNodeStorage;
        }

        if (null !== $request->dbNodeStorageType) {
            @$query['DbNodeStorageType'] = $request->dbNodeStorageType;
        }

        if (null !== $request->disableWriteWindows) {
            @$query['DisableWriteWindows'] = $request->disableWriteWindows;
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
            'action' => 'ModifyDBCluster',
            'version' => '2019-11-11',
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
     * Upgrades or downgrades an ApsaraDB for ClickHouse cluster.
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
     * Modifies the IP address whitelist of an ApsaraDB for ClickHouse cluster.
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
            'version' => '2019-11-11',
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
     * Modifies the IP address whitelist of an ApsaraDB for ClickHouse cluster.
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
     * Modifies the configurations of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - ModifyDBClusterConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterConfigResponse
     *
     * @param ModifyDBClusterConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDBClusterConfigResponse
     */
    public function modifyDBClusterConfigWithOptions($request, $runtime)
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

        if (null !== $request->reason) {
            @$query['Reason'] = $request->reason;
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

        if (null !== $request->userConfig) {
            @$query['UserConfig'] = $request->userConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterConfig',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - ModifyDBClusterConfigRequest
     *
     * @returns ModifyDBClusterConfigResponse
     *
     * @param ModifyDBClusterConfigRequest $request
     *
     * @return ModifyDBClusterConfigResponse
     */
    public function modifyDBClusterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterConfigWithOptions($request, $runtime);
    }

    /**
     * Changes the configuration parameters of an ApsaraDB for ClickHouse cluster that runs Community-compatible Edition.
     *
     * @remarks
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *
     * @param request - ModifyDBClusterConfigInXMLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBClusterConfigInXMLResponse
     *
     * @param ModifyDBClusterConfigInXMLRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDBClusterConfigInXMLResponse
     */
    public function modifyDBClusterConfigInXMLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->reason) {
            @$query['Reason'] = $request->reason;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBClusterConfigInXML',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBClusterConfigInXMLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the configuration parameters of an ApsaraDB for ClickHouse cluster that runs Community-compatible Edition.
     *
     * @remarks
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *
     * @param request - ModifyDBClusterConfigInXMLRequest
     *
     * @returns ModifyDBClusterConfigInXMLResponse
     *
     * @param ModifyDBClusterConfigInXMLRequest $request
     *
     * @return ModifyDBClusterConfigInXMLResponse
     */
    public function modifyDBClusterConfigInXML($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterConfigInXMLWithOptions($request, $runtime);
    }

    /**
     * Changes the name of an ApsaraDB for ClickHouse cluster.
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
            'version' => '2019-11-11',
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
     * Changes the name of an ApsaraDB for ClickHouse cluster.
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
     * Modifies the maintenance window of an ApsaraDB for ClickHouse cluster.
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
            'version' => '2019-11-11',
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
     * Modifies the maintenance window of an ApsaraDB for ClickHouse cluster.
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
     * Modifies the dictionary configuration of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - ModifyDBConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBConfigResponse
     *
     * @param ModifyDBConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyDBConfigResponse
     */
    public function modifyDBConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
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
            'action' => 'ModifyDBConfig',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDBConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the dictionary configuration of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - ModifyDBConfigRequest
     *
     * @returns ModifyDBConfigResponse
     *
     * @param ModifyDBConfigRequest $request
     *
     * @return ModifyDBConfigResponse
     */
    public function modifyDBConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the type of a minor version update in ApsaraDB for ClickHouse.
     *
     * @param request - ModifyMinorVersionGreadeTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMinorVersionGreadeTypeResponse
     *
     * @param ModifyMinorVersionGreadeTypeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyMinorVersionGreadeTypeResponse
     */
    public function modifyMinorVersionGreadeTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->maintainAutoType) {
            @$query['MaintainAutoType'] = $request->maintainAutoType;
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
            'action' => 'ModifyMinorVersionGreadeType',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyMinorVersionGreadeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the type of a minor version update in ApsaraDB for ClickHouse.
     *
     * @param request - ModifyMinorVersionGreadeTypeRequest
     *
     * @returns ModifyMinorVersionGreadeTypeResponse
     *
     * @param ModifyMinorVersionGreadeTypeRequest $request
     *
     * @return ModifyMinorVersionGreadeTypeResponse
     */
    public function modifyMinorVersionGreadeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMinorVersionGreadeTypeWithOptions($request, $runtime);
    }

    /**
     * Modifies the synchronization task of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  This operation is applicable only to ApsaraDB for ClickHouse clusters.
     *
     * @param request - ModifyRDSToClickhouseDbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyRDSToClickhouseDbResponse
     *
     * @param ModifyRDSToClickhouseDbRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyRDSToClickhouseDbResponse
     */
    public function modifyRDSToClickhouseDbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ckPassword) {
            @$query['CkPassword'] = $request->ckPassword;
        }

        if (null !== $request->ckUserName) {
            @$query['CkUserName'] = $request->ckUserName;
        }

        if (null !== $request->clickhousePort) {
            @$query['ClickhousePort'] = $request->clickhousePort;
        }

        if (null !== $request->dbClusterId) {
            @$query['DbClusterId'] = $request->dbClusterId;
        }

        if (null !== $request->limitUpper) {
            @$query['LimitUpper'] = $request->limitUpper;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->rdsId) {
            @$query['RdsId'] = $request->rdsId;
        }

        if (null !== $request->rdsPassword) {
            @$query['RdsPassword'] = $request->rdsPassword;
        }

        if (null !== $request->rdsPort) {
            @$query['RdsPort'] = $request->rdsPort;
        }

        if (null !== $request->rdsSynDb) {
            @$query['RdsSynDb'] = $request->rdsSynDb;
        }

        if (null !== $request->rdsSynTables) {
            @$query['RdsSynTables'] = $request->rdsSynTables;
        }

        if (null !== $request->rdsUserName) {
            @$query['RdsUserName'] = $request->rdsUserName;
        }

        if (null !== $request->rdsVpcId) {
            @$query['RdsVpcId'] = $request->rdsVpcId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->skipUnsupported) {
            @$query['SkipUnsupported'] = $request->skipUnsupported;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyRDSToClickhouseDb',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyRDSToClickhouseDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the synchronization task of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  This operation is applicable only to ApsaraDB for ClickHouse clusters.
     *
     * @param request - ModifyRDSToClickhouseDbRequest
     *
     * @returns ModifyRDSToClickhouseDbResponse
     *
     * @param ModifyRDSToClickhouseDbRequest $request
     *
     * @return ModifyRDSToClickhouseDbResponse
     */
    public function modifyRDSToClickhouseDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRDSToClickhouseDbWithOptions($request, $runtime);
    }

    /**
     * Releases the public endpoint of an ApsaraDB for ClickHouse cluster.
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
            'version' => '2019-11-11',
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
     * Releases the public endpoint of an ApsaraDB for ClickHouse cluster.
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
     * Resets the password of a database account for an ApsaraDB for ClickHouse cluster.
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
            'version' => '2019-11-11',
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
     * Resets the password of a database account for an ApsaraDB for ClickHouse cluster.
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
     * Restarts an ApsaraDB for ClickHouse cluster.
     *
     * @param request - RestartInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartInstanceResponse
     *
     * @param RestartInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions($request, $runtime)
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

        if (null !== $request->restartTime) {
            @$query['RestartTime'] = $request->restartTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartInstance',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts an ApsaraDB for ClickHouse cluster.
     *
     * @param request - RestartInstanceRequest
     *
     * @returns RestartInstanceResponse
     *
     * @param RestartInstanceRequest $request
     *
     * @return RestartInstanceResponse
     */
    public function restartInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartInstanceWithOptions($request, $runtime);
    }

    /**
     * 批量重启实例节点.
     *
     * @param tmpReq - RestartInstanceNodeListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartInstanceNodeListResponse
     *
     * @param RestartInstanceNodeListRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return RestartInstanceNodeListResponse
     */
    public function restartInstanceNodeListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RestartInstanceNodeListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->nodeList) {
            $request->nodeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeList, 'NodeList', 'json');
        }

        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->nodeListShrink) {
            @$query['NodeList'] = $request->nodeListShrink;
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

        if (null !== $request->restartTime) {
            @$query['RestartTime'] = $request->restartTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartInstanceNodeList',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartInstanceNodeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量重启实例节点.
     *
     * @param request - RestartInstanceNodeListRequest
     *
     * @returns RestartInstanceNodeListResponse
     *
     * @param RestartInstanceNodeListRequest $request
     *
     * @return RestartInstanceNodeListResponse
     */
    public function restartInstanceNodeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartInstanceNodeListWithOptions($request, $runtime);
    }

    /**
     * Creates tags for ApsaraDB for ClickHouse clusters and adds the tags to the ApsaraDB for ClickHouse clusters.
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
            'version' => '2019-11-11',
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
     * Creates tags for ApsaraDB for ClickHouse clusters and adds the tags to the ApsaraDB for ClickHouse clusters.
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
     * Migrates the data of a source ApsaraDB for ClickHouse cluster to a destination ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * ## [](#)Prerequisites
     * *   The IP address of the source ApsaraDB for ClickHouse cluster is added to the IP address whitelist of the destination ApsaraDB for ClickHouse cluster.
     * *   The IP address of the destination ApsaraDB for ClickHouse cluster is added to the IP address whitelist of the source ApsaraDB for ClickHouse cluster.
     * >  You can execute the `select * from system.clusters;` statement to query the IP address of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - TransferVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferVersionResponse
     *
     * @param TransferVersionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return TransferVersionResponse
     */
    public function transferVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBClusterId) {
            @$query['DBClusterId'] = $request->DBClusterId;
        }

        if (null !== $request->disableWriteWindows) {
            @$query['DisableWriteWindows'] = $request->disableWriteWindows;
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

        if (null !== $request->sourceAccount) {
            @$query['SourceAccount'] = $request->sourceAccount;
        }

        if (null !== $request->sourceClusterName) {
            @$query['SourceClusterName'] = $request->sourceClusterName;
        }

        if (null !== $request->sourcePassword) {
            @$query['SourcePassword'] = $request->sourcePassword;
        }

        if (null !== $request->sourceShards) {
            @$query['SourceShards'] = $request->sourceShards;
        }

        if (null !== $request->targetAccount) {
            @$query['TargetAccount'] = $request->targetAccount;
        }

        if (null !== $request->targetDbClusterId) {
            @$query['TargetDbClusterId'] = $request->targetDbClusterId;
        }

        if (null !== $request->targetPassword) {
            @$query['TargetPassword'] = $request->targetPassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransferVersion',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Migrates the data of a source ApsaraDB for ClickHouse cluster to a destination ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * ## [](#)Prerequisites
     * *   The IP address of the source ApsaraDB for ClickHouse cluster is added to the IP address whitelist of the destination ApsaraDB for ClickHouse cluster.
     * *   The IP address of the destination ApsaraDB for ClickHouse cluster is added to the IP address whitelist of the source ApsaraDB for ClickHouse cluster.
     * >  You can execute the `select * from system.clusters;` statement to query the IP address of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - TransferVersionRequest
     *
     * @returns TransferVersionResponse
     *
     * @param TransferVersionRequest $request
     *
     * @return TransferVersionResponse
     */
    public function transferVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferVersionWithOptions($request, $runtime);
    }

    /**
     * Removes tags from ApsaraDB for ClickHouse clusters.
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
            'version' => '2019-11-11',
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
     * Removes tags from ApsaraDB for ClickHouse clusters.
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
     * Updates the minor engine version of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were purchased after December 1, 2021.
     *
     * @param request - UpgradeMinorVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeMinorVersionResponse
     *
     * @param UpgradeMinorVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpgradeMinorVersionResponse
     */
    public function upgradeMinorVersionWithOptions($request, $runtime)
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

        if (null !== $request->upgradeImmediately) {
            @$query['UpgradeImmediately'] = $request->upgradeImmediately;
        }

        if (null !== $request->upgradeTime) {
            @$query['UpgradeTime'] = $request->upgradeTime;
        }

        if (null !== $request->upgradeVersion) {
            @$query['UpgradeVersion'] = $request->upgradeVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeMinorVersion',
            'version' => '2019-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeMinorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the minor engine version of an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were purchased after December 1, 2021.
     *
     * @param request - UpgradeMinorVersionRequest
     *
     * @returns UpgradeMinorVersionResponse
     *
     * @param UpgradeMinorVersionRequest $request
     *
     * @return UpgradeMinorVersionResponse
     */
    public function upgradeMinorVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeMinorVersionWithOptions($request, $runtime);
    }
}
