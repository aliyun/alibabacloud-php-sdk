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
            'me-central-1' => 'clickhouse.me-central-1.aliyuncs.com',
            'eu-west-1' => 'clickhouse.eu-west-1.aliyuncs.com',
            'eu-central-1' => 'clickhouse.eu-central-1.aliyuncs.com',
            'cn-zhangjiakou' => 'clickhouse.cn-zhangjiakou.aliyuncs.com',
            'cn-wulanchabu' => 'clickhouse.aliyuncs.com',
            'cn-huhehaote' => 'clickhouse.cn-huhehaote.aliyuncs.com',
            'cn-guangzhou' => 'clickhouse.cn-guangzhou.aliyuncs.com',
            'cn-chengdu' => 'clickhouse.cn-chengdu.aliyuncs.com',
            'ap-southeast-6' => 'clickhouse.ap-southeast-6.aliyuncs.com',
            'ap-southeast-5' => 'clickhouse.ap-southeast-5.aliyuncs.com',
            'ap-southeast-3' => 'clickhouse.aliyuncs.com',
            'ap-northeast-1' => 'clickhouse.ap-northeast-1.aliyuncs.com',
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
     * Allocates a public endpoint for a specified ApsaraDB for ClickHouse cluster.
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
     * Allocates a public endpoint for a specified ApsaraDB for ClickHouse cluster.
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
     * Cancels tasks for O&M events.
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
     * Cancels tasks for O&M events.
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
     * Cancels a scheduled ZooKeeper leader switchover on a community-compatible ClickHouse instance.
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
     * Cancels a scheduled ZooKeeper leader switchover on a community-compatible ClickHouse instance.
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
     * Cancels the scheduled restart on the specified ClickHouse nodes.
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
     * Cancels the scheduled restart on the specified ClickHouse nodes.
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
     * Cancels a scheduled restart for a specific community-compatible ApsaraDB for ClickHouse cluster.
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
     * Cancels a scheduled restart for a specific community-compatible ApsaraDB for ClickHouse cluster.
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
     * Changes the resource group of a community-edition compatible ClickHouse cluster.
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
     * Changes the resource group of a community-edition compatible ClickHouse cluster.
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
     * Call the CheckClickhouseToRDS operation to verify the connectivity between a community-compatible ApsaraDB for ClickHouse cluster and an ApsaraDB RDS for MySQL instance.
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
     * Call the CheckClickhouseToRDS operation to verify the connectivity between a community-compatible ApsaraDB for ClickHouse cluster and an ApsaraDB RDS for MySQL instance.
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
     * Queries whether changing the configuration parameters of an ApsaraDB for ClickHouse community-compatible cluster in XML mode requires a restart.
     *
     * @remarks
     * > 该接口仅支持 2021 年 12 月 01 日之后创建的社区兼容版集群。
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
     * Queries whether changing the configuration parameters of an ApsaraDB for ClickHouse community-compatible cluster in XML mode requires a restart.
     *
     * @remarks
     * > 该接口仅支持 2021 年 12 月 01 日之后创建的社区兼容版集群。
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
     * Call the CheckMonitorAlert operation to check whether the alert monitoring feature of Application Real-Time Monitoring Service (ARMS) is enabled for a specified ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > This operation applies only to community-compatible clusters of version 20.8 or later that were created after December 1, 2021.
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
     * Call the CheckMonitorAlert operation to check whether the alert monitoring feature of Application Real-Time Monitoring Service (ARMS) is enabled for a specified ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > This operation applies only to community-compatible clusters of version 20.8 or later that were created after December 1, 2021.
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
     * Performs a migration scale-out check on a specified ApsaraDB for ClickHouse cluster.
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

        if (null !== $request->scalingType) {
            @$query['ScalingType'] = $request->scalingType;
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
     * Performs a migration scale-out check on a specified ApsaraDB for ClickHouse cluster.
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
     * Queries the service-linked role for ApsaraDB for ClickHouse.
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
     * Queries the service-linked role for ApsaraDB for ClickHouse.
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
     * Creates a database account and grants permissions.
     *
     * @remarks
     * This API is available only for cluster versions 21.8 and earlier. For newer versions, use a high-privilege account and SQL statements to modify user permissions.
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
     * Creates a database account and grants permissions.
     *
     * @remarks
     * This API is available only for cluster versions 21.8 and earlier. For newer versions, use a high-privilege account and SQL statements to modify user permissions.
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
     * > ApsaraDB for ClickHouse supports data backup for clusters that run version 20.3, 20.8, or 21.8.
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
     * > ApsaraDB for ClickHouse supports data backup for clusters that run version 20.3, 20.8, or 21.8.
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
     * Create an Alibaba Cloud ClickHouse cluster.
     *
     * @remarks
     * Before you call this API, make sure that you understand the billing method and [price](https://help.aliyun.com/document_detail/167450.html) of ApsaraDB for ClickHouse.
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

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
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
     * Create an Alibaba Cloud ClickHouse cluster.
     *
     * @remarks
     * Before you call this API, make sure that you understand the billing method and [price](https://help.aliyun.com/document_detail/167450.html) of ApsaraDB for ClickHouse.
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
     * Creates a monitoring data report.
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
     * Creates a monitoring data report.
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
     * Creates a cold storage space.
     *
     * @remarks
     * The tiered storage of hot and cold data feature is supported only by community-compatible clusters that run version 20.8 or later. For clusters that run an earlier version, you must migrate data to a cluster that runs version 20.8 or later before you can configure tiered storage. For more information about data migration, see [Data migration between ApsaraDB for ClickHouse instances](https://help.aliyun.com/document_detail/276926.html).
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
     * Creates a cold storage space.
     *
     * @remarks
     * The tiered storage of hot and cold data feature is supported only by community-compatible clusters that run version 20.8 or later. For clusters that run an earlier version, you must migrate data to a cluster that runs version 20.8 or later before you can configure tiered storage. For more information about data migration, see [Data migration between ApsaraDB for ClickHouse instances](https://help.aliyun.com/document_detail/276926.html).
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
     * Enables the MySQL or HTTPS port for a specified ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > You must manually enable the MySQL port for community-compatible clusters of version 20.8 or later that were created before December 1, 2021. For clusters created on or after this date, the MySQL port is enabled automatically.
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
     * Enables the MySQL or HTTPS port for a specified ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > You must manually enable the MySQL port for community-compatible clusters of version 20.8 or later that were created before December 1, 2021. For clusters created on or after this date, the MySQL port is enabled automatically.
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
     * You can call the CreateRDSToClickhouseDb operation to create a sync task for an ApsaraDB for ClickHouse Community-Compatible Edition cluster.
     *
     * @remarks
     * > This operation applies only to ApsaraDB for ClickHouse Community-Compatible Edition clusters.
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
     * You can call the CreateRDSToClickhouseDb operation to create a sync task for an ApsaraDB for ClickHouse Community-Compatible Edition cluster.
     *
     * @remarks
     * > This operation applies only to ApsaraDB for ClickHouse Community-Compatible Edition clusters.
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
     * Calls the CreateSLB operation to attach a Server Load Balancer (SLB) instance to a specified ApsaraDB for ClickHouse Community-Compatible Edition cluster.
     *
     * @remarks
     * ## Usage notes
     * An SLB instance is a network-layer dependency that provides services for external connections and supports failover. It attaches a domain name to the IP addresses of ClickHouse nodes. The SLB instance balances and forwards cluster requests to internal nodes to distribute traffic in a multi-node deployment. It also performs health checks on backend nodes. If a node becomes unavailable, the SLB instance checks its health status and automatically isolates it. This ensures that request traffic is distributed to active nodes.
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
     * Calls the CreateSLB operation to attach a Server Load Balancer (SLB) instance to a specified ApsaraDB for ClickHouse Community-Compatible Edition cluster.
     *
     * @remarks
     * ## Usage notes
     * An SLB instance is a network-layer dependency that provides services for external connections and supports failover. It attaches a domain name to the IP addresses of ClickHouse nodes. The SLB instance balances and forwards cluster requests to internal nodes to distribute traffic in a multi-node deployment. It also performs health checks on backend nodes. If a node becomes unavailable, the SLB instance checks its health status and automatically isolates it. This ensures that request traffic is distributed to active nodes.
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
     * Call the CreateSQLAccount operation to create a privileged or standard account for an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > This operation applies only to community-compatible clusters that run version 20.8 or later and were created after December 1, 2021.
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
     * Call the CreateSQLAccount operation to create a privileged or standard account for an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > This operation applies only to community-compatible clusters that run version 20.8 or later and were created after December 1, 2021.
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
     * Deletes a database account from an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > After a database account is deleted, you cannot use it to connect to ApsaraDB for ClickHouse. Proceed with caution.
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
     * Deletes a database account from an ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > After a database account is deleted, you cannot use it to connect to ApsaraDB for ClickHouse. Proceed with caution.
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
     * Deletes the backup policy for a community-compatible ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > The data backup feature is available only for ApsaraDB for ClickHouse clusters running version 21.8 or later.
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
     * Deletes the backup policy for a community-compatible ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > The data backup feature is available only for ApsaraDB for ClickHouse clusters running version 21.8 or later.
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
     * Deletes a specified pay-as-you-go ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >Warning:
     * After a cluster is deleted, all data in the cluster is deleted and cannot be recovered. Proceed with caution.
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
     * Deletes a specified pay-as-you-go ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * >Warning:
     * After a cluster is deleted, all data in the cluster is deleted and cannot be recovered. Proceed with caution.
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
     * Releases a Server Load Balancer (SLB) instance for a specified ApsaraDB for ClickHouse Community-Compatible cluster.
     *
     * @remarks
     * ## Usage notes
     * After you release the SLB instance, the system performs simple load balancing based on the domain name. Health checks are no longer performed on nodes at the request routing layer. This may cause normal requests to be routed to unavailable nodes, which can result in read and write failures.
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
     * Releases a Server Load Balancer (SLB) instance for a specified ApsaraDB for ClickHouse Community-Compatible cluster.
     *
     * @remarks
     * ## Usage notes
     * After you release the SLB instance, the system performs simple load balancing based on the domain name. Health checks are no longer performed on nodes at the request routing layer. This may cause normal requests to be routed to unavailable nodes, which can result in read and write failures.
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
     * Deletes a database synchronization task.
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
     * Deletes a database synchronization task.
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
     * Queries the permissions of a database account.
     *
     * @remarks
     * This API applies only to clusters of v21.8 or earlier. For clusters running a later version, you must use a privileged account and execute SQL statements to modify the permissions of a regular user.
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
     * Queries the permissions of a database account.
     *
     * @remarks
     * This API applies only to clusters of v21.8 or earlier. For clusters running a later version, you must use a privileged account and execute SQL statements to modify the permissions of a regular user.
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
     * Describes the database accounts of a specified ApsaraDB for ClickHouse cluster.
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
     * Describes the database accounts of a specified ApsaraDB for ClickHouse cluster.
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
     * Queries the active Operations and Maintenance (O&M) configuration of a ClickHouse instance.
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
     * Queries the active Operations and Maintenance (O&M) configuration of a ClickHouse instance.
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
     * Queries the active operation tasks of a ClickHouse instance.
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
     * Queries the active operation tasks of a ClickHouse instance.
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
     * Describes all databases, tables, and columns in an instance.
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
     * Describes all databases, tables, and columns in an instance.
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
     * Queries the details of all data sources.
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
     * Queries the details of all data sources.
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
     * Queries the auto-renewal status of a ClickHouse Community-Compatible cluster.
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
     * Queries the auto-renewal status of a ClickHouse Community-Compatible cluster.
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
     * Queries the backup settings for a specified ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > Data backup is supported for ApsaraDB for ClickHouse clusters running version 20.3, 20.8, or 21.8.
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
     * Queries the backup settings for a specified ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > Data backup is supported for ApsaraDB for ClickHouse clusters running version 20.3, 20.8, or 21.8.
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
     * Queries the backup sets of a specified ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > The data backup feature is available only on ApsaraDB for ClickHouse clusters running version 21.8 or later.
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
     * Queries the backup sets of a specified ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > The data backup feature is available only on ApsaraDB for ClickHouse clusters running version 21.8 or later.
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
     * You can view columns.
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
     * You can view columns.
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
     * Call the DescribeConfigHistory operation to view the configuration parameter change history of a community-compatible ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > This operation supports only community-compatible clusters that are created after December 1, 2021.
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
     * Call the DescribeConfigHistory operation to view the configuration parameter change history of a community-compatible ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > This operation supports only community-compatible clusters that are created after December 1, 2021.
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
     * Call the DescribeConfigVersionDifference operation to compare the parameter values of an ApsaraDB for ClickHouse community-compatible cluster before and after a configuration change.
     *
     * @remarks
     * > This operation applies only to community-compatible clusters that were created after December 1, 2021.
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
     * Call the DescribeConfigVersionDifference operation to compare the parameter values of an ApsaraDB for ClickHouse community-compatible cluster before and after a configuration change.
     *
     * @remarks
     * > This operation applies only to community-compatible clusters that were created after December 1, 2021.
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
     * Queries the IP address whitelist of a specified ApsaraDB for ClickHouse cluster.
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
     * Queries the IP address whitelist of a specified ApsaraDB for ClickHouse cluster.
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
     * Retrieves details for a specific ApsaraDB for ClickHouse cluster.
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
     * Retrieves details for a specific ApsaraDB for ClickHouse cluster.
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
     * The DescribeDBClusterConfig operation queries the parameter configuration of a community-compatible ClickHouse cluster.
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
     * The DescribeDBClusterConfig operation queries the parameter configuration of a community-compatible ClickHouse cluster.
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
     * You can call the DescribeDBClusterConfigInXML operation to query the configuration parameters of an ApsaraDB for ClickHouse Community-Compatible Edition cluster in XML format.
     *
     * @remarks
     * > This operation supports only Community-Compatible Edition clusters that are created after December 1, 2021.
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
     * You can call the DescribeDBClusterConfigInXML operation to query the configuration parameters of an ApsaraDB for ClickHouse Community-Compatible Edition cluster in XML format.
     *
     * @remarks
     * > This operation supports only Community-Compatible Edition clusters that are created after December 1, 2021.
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
     * Queries the network information for a specified ApsaraDB for ClickHouse cluster.
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
     * Queries the network information for a specified ApsaraDB for ClickHouse cluster.
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
     * Queries node information for a ClickHouse Community-Compatible instance.
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
     * Queries node information for a ClickHouse Community-Compatible instance.
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
     * Views the performance data of an ApsaraDB for ClickHouse Community-Compatible Edition cluster.
     *
     * @remarks
     * You can view the performance monitoring data for a specified cluster within a time range based on performance metrics. The data is collected every 30 seconds.
     * > This operation supports only ApsaraDB for ClickHouse Community-Compatible Edition clusters that were created before December 1, 2021.
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
     * Views the performance data of an ApsaraDB for ClickHouse Community-Compatible Edition cluster.
     *
     * @remarks
     * You can view the performance monitoring data for a specified cluster within a time range based on performance metrics. The data is collected every 30 seconds.
     * > This operation supports only ApsaraDB for ClickHouse Community-Compatible Edition clusters that were created before December 1, 2021.
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
     * This operation queries the status set of a ClickHouse Community-Compatible Edition cluster.
     *
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
     * This operation queries the status set of a ClickHouse Community-Compatible Edition cluster.
     *
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
     * Describes ApsaraDB for ClickHouse clusters in a specified region.
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
     * Describes ApsaraDB for ClickHouse clusters in a specified region.
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
     * The DescribeDBConfig operation queries the configuration of a community-compatible cluster.
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
     * The DescribeDBConfig operation queries the configuration of a community-compatible cluster.
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
     * Queries the metadata of Operations and Maintenance (O&M) events for a ClickHouse-compatible cluster.
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
     * Queries the metadata of Operations and Maintenance (O&M) events for a ClickHouse-compatible cluster.
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
     * Queries cold storage information.
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
     * Queries cold storage information.
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
     * Call the DescribeProcessList operation to retrieve running queries on an ApsaraDB for ClickHouse Community-Compatible cluster.
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
     * Call the DescribeProcessList operation to retrieve running queries on an ApsaraDB for ClickHouse Community-Compatible cluster.
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
     * Queries the available regions and zones for ApsaraDB for ClickHouse.
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
     * Queries the available regions and zones for ApsaraDB for ClickHouse.
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
     * Queries all databases in an instance.
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
     * Queries all databases in an instance.
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
     * Queries the details of slow query logs.
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
     * Queries the details of slow query logs.
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
     * Queries statistics about the slow log trends for a cluster.
     *
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
     * Queries statistics about the slow log trends for a cluster.
     *
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
     * Queries synchronized databases and tables.
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
     * Queries synchronized databases and tables.
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
     * Queries information about synchronized databases.
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
     * Queries information about synchronized databases.
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
     * You can call the DescribeTables operation to query tables in a community-compatible cluster.
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
     * You can call the DescribeTables operation to query tables in a community-compatible cluster.
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
     * View migration history.
     *
     * @remarks
     * > This API operation is used only to query data migrations between Alibaba Cloud ClickHouse clusters during version upgrades.
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
     * View migration history.
     *
     * @remarks
     * > This API operation is used only to query data migrations between Alibaba Cloud ClickHouse clusters during version upgrades.
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
     * Retrieves a list of your KMS keys.
     *
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
     * Retrieves a list of your KMS keys.
     *
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
     * Switches the ZooKeeper leader for a community-compatible ClickHouse instance.
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
     * Switches the ZooKeeper leader for a community-compatible ClickHouse instance.
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
     * Stops ongoing tasks.
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
     * Stops ongoing tasks.
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
     * Lists the tags that are attached to ApsaraDB for ClickHouse clusters.
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
     * Lists the tags that are attached to ApsaraDB for ClickHouse clusters.
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
     * Modifies the permissions of a database account.
     *
     * @remarks
     * This API operation applies only to cluster versions 21.8 and earlier. For cluster versions later than 21.8, you must use a high-privilege account to run SQL statements to modify the permissions of standard users.
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
     * Modifies the permissions of a database account.
     *
     * @remarks
     * This API operation applies only to cluster versions 21.8 and earlier. For cluster versions later than 21.8, you must use a high-privilege account to run SQL statements to modify the permissions of standard users.
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
     * Modifies the description of a database account in an ApsaraDB for ClickHouse cluster.
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
     * Modifies the description of a database account in an ApsaraDB for ClickHouse cluster.
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
     * Modifies the configuration of active O&M tasks on a community-compatible ClickHouse cluster.
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
     * Modifies the configuration of active O&M tasks on a community-compatible ClickHouse cluster.
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
     * Modifies the switch time for operations and maintenance (O&M) events on a ClickHouse Community-compatible cluster.
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
     * Modifies the switch time for operations and maintenance (O&M) events on a ClickHouse Community-compatible cluster.
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
     * Modifies the auto-renewal status of a ClickHouse Community-Compatible cluster.
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
     * Modifies the auto-renewal status of a ClickHouse Community-Compatible cluster.
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
     * Modifies the backup settings of a specified ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > Data backup is supported for ApsaraDB for ClickHouse clusters that run version 20.3, 20.8, or 21.8.
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
     * Modifies the backup settings of a specified ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > Data backup is supported for ApsaraDB for ClickHouse clusters that run version 20.3, 20.8, or 21.8.
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
     * Modifies the specifications of a cluster.
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
     * Modifies the specifications of a cluster.
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
     * Modifies the IP address whitelist for a specified ApsaraDB for ClickHouse cluster.
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
     * Modifies the IP address whitelist for a specified ApsaraDB for ClickHouse cluster.
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
     * Modifies the configuration of a cluster.
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
     * Modifies the configuration of a cluster.
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
     * Modifies the configuration parameters of a specified community-compatible ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > This operation supports only community-compatible clusters created after December 1, 2021.
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
     * Modifies the configuration parameters of a specified community-compatible ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > This operation supports only community-compatible clusters created after December 1, 2021.
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
     * Changes the description of a specified ApsaraDB for ClickHouse cluster.
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
     * Changes the description of a specified ApsaraDB for ClickHouse cluster.
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
     * Modifies the maintenance window for a specified ApsaraDB for ClickHouse cluster.
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
     * Modifies the maintenance window for a specified ApsaraDB for ClickHouse cluster.
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
     * The ModifyDBConfig operation modifies the dictionary configuration of a community-compatible cluster.
     *
     * @remarks
     * >Notice:
     * This API applies only to clusters with a kernel version of 20.8 or earlier.
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
     * The ModifyDBConfig operation modifies the dictionary configuration of a community-compatible cluster.
     *
     * @remarks
     * >Notice:
     * This API applies only to clusters with a kernel version of 20.8 or earlier.
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
     * Modifies the upgrade type for a ClickHouse minor version to automatic or manual.
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
     * Modifies the upgrade type for a ClickHouse minor version to automatic or manual.
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
     * Modifies the sync task of a community-compatible ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > This operation applies only to community-compatible ApsaraDB for ClickHouse clusters.
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
     * Modifies the sync task of a community-compatible ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > This operation applies only to community-compatible ApsaraDB for ClickHouse clusters.
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
     * Releases the public endpoint of a specified ApsaraDB for ClickHouse cluster.
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
     * Releases the public endpoint of a specified ApsaraDB for ClickHouse cluster.
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
     * Resets the password of a database account in a specified ApsaraDB for ClickHouse cluster.
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
     * Resets the password of a database account in a specified ApsaraDB for ClickHouse cluster.
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
     * Restarts a specified ApsaraDB for ClickHouse cluster.
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
     * Restarts a specified ApsaraDB for ClickHouse cluster.
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
     * Batch restart nodes of a ClickHouse Community-compatible Edition instance.
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
     * Batch restart nodes of a ClickHouse Community-compatible Edition instance.
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
     * Creates and attaches tags to one or more ApsaraDB for ClickHouse clusters.
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
     * Creates and attaches tags to one or more ApsaraDB for ClickHouse clusters.
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
     * Migration between versions.
     *
     * @remarks
     * ## Prerequisites
     * - Add the IP addresses of the source cluster to the whitelist of the destination cluster.
     * - Add the IP addresses of the destination cluster to the whitelist of the source cluster.
     * > You can execute the `select * from system.clusters;` statement to retrieve the IP addresses of an ApsaraDB for ClickHouse cluster.
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
     * Migration between versions.
     *
     * @remarks
     * ## Prerequisites
     * - Add the IP addresses of the source cluster to the whitelist of the destination cluster.
     * - Add the IP addresses of the destination cluster to the whitelist of the source cluster.
     * > You can execute the `select * from system.clusters;` statement to retrieve the IP addresses of an ApsaraDB for ClickHouse cluster.
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
     * The UpgradeMinorVersion operation upgrades the minor engine version of a specified community-compatible ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > Minor engine version upgrades are supported only for community-compatible clusters that are purchased after December 1, 2021.
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
     * The UpgradeMinorVersion operation upgrades the minor engine version of a specified community-compatible ApsaraDB for ClickHouse cluster.
     *
     * @remarks
     * > Minor engine version upgrades are supported only for community-compatible clusters that are purchased after December 1, 2021.
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
