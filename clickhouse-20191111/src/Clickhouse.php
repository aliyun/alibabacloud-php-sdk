<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\AllocateClusterPublicConnectionRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\AllocateClusterPublicConnectionResponse;
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
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateSQLAccountRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateSQLAccountResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteDBClusterRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteDBClusterResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteSyndbRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteSyndbResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAccountAuthorityRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAccountAuthorityResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourceRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourceResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourcesRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourcesResponse;
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
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterPerformanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterPerformanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClustersRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClustersResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBConfigRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBConfigResponse;
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
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSynDbsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSynDbsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSynDbTablesRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSynDbTablesResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTablesRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTablesResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTransferHistoryRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTransferHistoryResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\KillProcessRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\KillProcessResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyAccountAuthorityRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyAccountAuthorityResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyAccountDescriptionResponse;
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
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\TransferVersionRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\TransferVersionResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\UpgradeMinorVersionRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\UpgradeMinorVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Clickhouse extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'clickhouse.aliyuncs.com',
            'ap-southeast-1'              => 'clickhouse.aliyuncs.com',
            'cn-beijing'                  => 'clickhouse.aliyuncs.com',
            'cn-beijing-finance-1'        => 'clickhouse.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'clickhouse.aliyuncs.com',
            'cn-beijing-gov-1'            => 'clickhouse.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'clickhouse.aliyuncs.com',
            'cn-edge-1'                   => 'clickhouse.aliyuncs.com',
            'cn-fujian'                   => 'clickhouse.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'clickhouse.aliyuncs.com',
            'cn-hangzhou'                 => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-finance'         => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'clickhouse.aliyuncs.com',
            'cn-hongkong'                 => 'clickhouse.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'clickhouse.aliyuncs.com',
            'cn-north-2-gov-1'            => 'clickhouse.aliyuncs.com',
            'cn-qingdao'                  => 'clickhouse.aliyuncs.com',
            'cn-qingdao-nebula'           => 'clickhouse.aliyuncs.com',
            'cn-shanghai'                 => 'clickhouse.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'clickhouse.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'clickhouse.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'clickhouse.aliyuncs.com',
            'cn-shanghai-inner'           => 'clickhouse.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'clickhouse.aliyuncs.com',
            'cn-shenzhen'                 => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-inner'           => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'clickhouse.aliyuncs.com',
            'cn-wuhan'                    => 'clickhouse.aliyuncs.com',
            'cn-yushanfang'               => 'clickhouse.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'clickhouse.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'clickhouse.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'clickhouse.aliyuncs.com',
            'eu-west-1-oxs'               => 'clickhouse.aliyuncs.com',
            'me-east-1'                   => 'clickhouse.aliyuncs.com',
            'rus-west-1-pop'              => 'clickhouse.aliyuncs.com',
            'us-east-1'                   => 'clickhouse.aliyuncs.com',
            'us-west-1'                   => 'clickhouse.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Creates a public endpoint for an ApsaraDB for ClickHouse cluster.
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
            'version'     => '2019-11-11',
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
     * @summary Creates a public endpoint for an ApsaraDB for ClickHouse cluster.
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
     * @summary Checks the connectivity between an ApsaraDB for ClickHouse cluster and an ApsaraDB RDS for MySQL instance.
     *  *
     * @param CheckClickhouseToRDSRequest $request CheckClickhouseToRDSRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckClickhouseToRDSResponse CheckClickhouseToRDSResponse
     */
    public function checkClickhouseToRDSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ckPassword)) {
            $query['CkPassword'] = $request->ckPassword;
        }
        if (!Utils::isUnset($request->ckUserName)) {
            $query['CkUserName'] = $request->ckUserName;
        }
        if (!Utils::isUnset($request->clickhousePort)) {
            $query['ClickhousePort'] = $request->clickhousePort;
        }
        if (!Utils::isUnset($request->dbClusterId)) {
            $query['DbClusterId'] = $request->dbClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->rdsId)) {
            $query['RdsId'] = $request->rdsId;
        }
        if (!Utils::isUnset($request->rdsPassword)) {
            $query['RdsPassword'] = $request->rdsPassword;
        }
        if (!Utils::isUnset($request->rdsPort)) {
            $query['RdsPort'] = $request->rdsPort;
        }
        if (!Utils::isUnset($request->rdsUserName)) {
            $query['RdsUserName'] = $request->rdsUserName;
        }
        if (!Utils::isUnset($request->rdsVpcId)) {
            $query['RdsVpcId'] = $request->rdsVpcId;
        }
        if (!Utils::isUnset($request->rdsVpcUrl)) {
            $query['RdsVpcUrl'] = $request->rdsVpcUrl;
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
            'action'      => 'CheckClickhouseToRDS',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckClickhouseToRDSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks the connectivity between an ApsaraDB for ClickHouse cluster and an ApsaraDB RDS for MySQL instance.
     *  *
     * @param CheckClickhouseToRDSRequest $request CheckClickhouseToRDSRequest
     *
     * @return CheckClickhouseToRDSResponse CheckClickhouseToRDSResponse
     */
    public function checkClickhouseToRDS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkClickhouseToRDSWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether an ApsaraDB for ClickHouse cluster needs to be restarted after you change the values of the configuration parameters in XML mode.
     *  *
     * @description >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *  *
     * @param CheckModifyConfigNeedRestartRequest $request CheckModifyConfigNeedRestartRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckModifyConfigNeedRestartResponse CheckModifyConfigNeedRestartResponse
     */
    public function checkModifyConfigNeedRestartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckModifyConfigNeedRestart',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckModifyConfigNeedRestartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether an ApsaraDB for ClickHouse cluster needs to be restarted after you change the values of the configuration parameters in XML mode.
     *  *
     * @description >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *  *
     * @param CheckModifyConfigNeedRestartRequest $request CheckModifyConfigNeedRestartRequest
     *
     * @return CheckModifyConfigNeedRestartResponse CheckModifyConfigNeedRestartResponse
     */
    public function checkModifyConfigNeedRestart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkModifyConfigNeedRestartWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether the monitoring and alerting feature that is provided by Application Real-Time Monitoring Service (ARMS) is enabled for an ApsaraDB for ClickHouse cluster.
     *  *
     * @param CheckMonitorAlertRequest $request CheckMonitorAlertRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckMonitorAlertResponse CheckMonitorAlertResponse
     */
    public function checkMonitorAlertWithOptions($request, $runtime)
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
            'action'      => 'CheckMonitorAlert',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckMonitorAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether the monitoring and alerting feature that is provided by Application Real-Time Monitoring Service (ARMS) is enabled for an ApsaraDB for ClickHouse cluster.
     *  *
     * @param CheckMonitorAlertRequest $request CheckMonitorAlertRequest
     *
     * @return CheckMonitorAlertResponse CheckMonitorAlertResponse
     */
    public function checkMonitorAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMonitorAlertWithOptions($request, $runtime);
    }

    /**
     * @summary Performs migration and scale-out detection on an ApsaraDB for ClickHouse cluster.
     *  *
     * @param CheckScaleOutBalancedRequest $request CheckScaleOutBalancedRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckScaleOutBalancedResponse CheckScaleOutBalancedResponse
     */
    public function checkScaleOutBalancedWithOptions($request, $runtime)
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
            'action'      => 'CheckScaleOutBalanced',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckScaleOutBalancedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Performs migration and scale-out detection on an ApsaraDB for ClickHouse cluster.
     *  *
     * @param CheckScaleOutBalancedRequest $request CheckScaleOutBalancedRequest
     *
     * @return CheckScaleOutBalancedResponse CheckScaleOutBalancedResponse
     */
    public function checkScaleOutBalanced($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkScaleOutBalancedWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the service-linked role of ApsaraDB for ClickHouse.
     *  *
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
            'action'      => 'CheckServiceLinkedRole',
            'version'     => '2019-11-11',
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
     * @summary Queries the service-linked role of ApsaraDB for ClickHouse.
     *  *
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
     * @summary Creates a database account for an ApsaraDB for ClickHouse cluster.
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
            'version'     => '2019-11-11',
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
     * @summary Creates a database account for an ApsaraDB for ClickHouse cluster.
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
     * @param CreateAccountAndAuthorityRequest $request CreateAccountAndAuthorityRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccountAndAuthorityResponse CreateAccountAndAuthorityResponse
     */
    public function createAccountAndAuthorityWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->allowDatabases)) {
            $query['AllowDatabases'] = $request->allowDatabases;
        }
        if (!Utils::isUnset($request->allowDictionaries)) {
            $query['AllowDictionaries'] = $request->allowDictionaries;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ddlAuthority)) {
            $query['DdlAuthority'] = $request->ddlAuthority;
        }
        if (!Utils::isUnset($request->dmlAuthority)) {
            $query['DmlAuthority'] = $request->dmlAuthority;
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
        if (!Utils::isUnset($request->totalDatabases)) {
            $query['TotalDatabases'] = $request->totalDatabases;
        }
        if (!Utils::isUnset($request->totalDictionaries)) {
            $query['TotalDictionaries'] = $request->totalDictionaries;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccountAndAuthority',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccountAndAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAccountAndAuthorityRequest $request CreateAccountAndAuthorityRequest
     *
     * @return CreateAccountAndAuthorityResponse CreateAccountAndAuthorityResponse
     */
    public function createAccountAndAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountAndAuthorityWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a backup policy.
     *  *
     * @description >  This operation is available only for the ApsaraDB for ClickHouse clusters of versions 20.3, 20.8, and 21.8.
     *  *
     * @param CreateBackupPolicyRequest $request CreateBackupPolicyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBackupPolicyResponse CreateBackupPolicyResponse
     */
    public function createBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupRetentionPeriod)) {
            $query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
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
        if (!Utils::isUnset($request->preferredBackupPeriod)) {
            $query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }
        if (!Utils::isUnset($request->preferredBackupTime)) {
            $query['PreferredBackupTime'] = $request->preferredBackupTime;
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
            'action'      => 'CreateBackupPolicy',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a backup policy.
     *  *
     * @description >  This operation is available only for the ApsaraDB for ClickHouse clusters of versions 20.3, 20.8, and 21.8.
     *  *
     * @param CreateBackupPolicyRequest $request CreateBackupPolicyRequest
     *
     * @return CreateBackupPolicyResponse CreateBackupPolicyResponse
     */
    public function createBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an ApsaraDB for ClickHouse cluster.
     *  *
     * @param CreateDBInstanceRequest $request CreateDBInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDBInstanceResponse CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->backupSetID)) {
            $query['BackupSetID'] = $request->backupSetID;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->dbNodeStorageType)) {
            $query['DbNodeStorageType'] = $request->dbNodeStorageType;
        }
        if (!Utils::isUnset($request->encryptionKey)) {
            $query['EncryptionKey'] = $request->encryptionKey;
        }
        if (!Utils::isUnset($request->encryptionType)) {
            $query['EncryptionType'] = $request->encryptionType;
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
        if (!Utils::isUnset($request->sourceDBClusterId)) {
            $query['SourceDBClusterId'] = $request->sourceDBClusterId;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        if (!Utils::isUnset($request->vSwitchBak)) {
            $query['VSwitchBak'] = $request->vSwitchBak;
        }
        if (!Utils::isUnset($request->vSwitchBak2)) {
            $query['VSwitchBak2'] = $request->vSwitchBak2;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zondIdBak2)) {
            $query['ZondIdBak2'] = $request->zondIdBak2;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->zoneIdBak)) {
            $query['ZoneIdBak'] = $request->zoneIdBak;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDBInstance',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an ApsaraDB for ClickHouse cluster.
     *  *
     * @param CreateDBInstanceRequest $request CreateDBInstanceRequest
     *
     * @return CreateDBInstanceResponse CreateDBInstanceResponse
     */
    public function createDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a monitoring data report for an ApsaraDB for ClickHouse cluster.
     *  *
     * @param CreateMonitorDataReportRequest $request CreateMonitorDataReportRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMonitorDataReportResponse CreateMonitorDataReportResponse
     */
    public function createMonitorDataReportWithOptions($request, $runtime)
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
            'action'      => 'CreateMonitorDataReport',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMonitorDataReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a monitoring data report for an ApsaraDB for ClickHouse cluster.
     *  *
     * @param CreateMonitorDataReportRequest $request CreateMonitorDataReportRequest
     *
     * @return CreateMonitorDataReportResponse CreateMonitorDataReportResponse
     */
    public function createMonitorDataReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorDataReportWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a storage task for cold data.
     *  *
     * @description Only an ApsaraDB for ClickHouse cluster of V20.8 or later supports tiered storage of hot data and cold data. If your data is in an ApsaraDB for ClickHouse cluster of a version earlier than V20.8 and you want to use tiered storage of hot data and cold data to store the data, you can migrate the data to an ApsaraDB for ClickHouse cluster of V20.8 or later and use tiered storage of hot data and cold data. For more information about how to migrate data between ApsaraDB for ClickHouse clusters, see [Migrate data between ApsaraDB for ClickHouse clusters](https://help.aliyun.com/document_detail/276926.html).
     *  *
     * @param CreateOSSStorageRequest $request CreateOSSStorageRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOSSStorageResponse CreateOSSStorageResponse
     */
    public function createOSSStorageWithOptions($request, $runtime)
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
            'action'      => 'CreateOSSStorage',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOSSStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a storage task for cold data.
     *  *
     * @description Only an ApsaraDB for ClickHouse cluster of V20.8 or later supports tiered storage of hot data and cold data. If your data is in an ApsaraDB for ClickHouse cluster of a version earlier than V20.8 and you want to use tiered storage of hot data and cold data to store the data, you can migrate the data to an ApsaraDB for ClickHouse cluster of V20.8 or later and use tiered storage of hot data and cold data. For more information about how to migrate data between ApsaraDB for ClickHouse clusters, see [Migrate data between ApsaraDB for ClickHouse clusters](https://help.aliyun.com/document_detail/276926.html).
     *  *
     * @param CreateOSSStorageRequest $request CreateOSSStorageRequest
     *
     * @return CreateOSSStorageResponse CreateOSSStorageResponse
     */
    public function createOSSStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOSSStorageWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the MySQL port for an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  For an ApsaraDB for ClickHouse cluster of V20.8 or later that was created before December 1, 2021, you must manually enable the MySQL port. For an ApsaraDB for ClickHouse cluster of V20.8 or later that was created after December 1, 2021, the MySQL port is automatically enabled.
     *  *
     * @param CreatePortsForClickHouseRequest $request CreatePortsForClickHouseRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePortsForClickHouseResponse CreatePortsForClickHouseResponse
     */
    public function createPortsForClickHouseWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->portType)) {
            $query['PortType'] = $request->portType;
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
            'action'      => 'CreatePortsForClickHouse',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePortsForClickHouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables the MySQL port for an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  For an ApsaraDB for ClickHouse cluster of V20.8 or later that was created before December 1, 2021, you must manually enable the MySQL port. For an ApsaraDB for ClickHouse cluster of V20.8 or later that was created after December 1, 2021, the MySQL port is automatically enabled.
     *  *
     * @param CreatePortsForClickHouseRequest $request CreatePortsForClickHouseRequest
     *
     * @return CreatePortsForClickHouseResponse CreatePortsForClickHouseResponse
     */
    public function createPortsForClickHouse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPortsForClickHouseWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a task to synchronize data from an ApsaraDB RDS for MySQL instance to an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  This operation is only applicable to ApsaraDB for ClickHouse clusters.
     *  *
     * @param CreateRDSToClickhouseDbRequest $request CreateRDSToClickhouseDbRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRDSToClickhouseDbResponse CreateRDSToClickhouseDbResponse
     */
    public function createRDSToClickhouseDbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ckPassword)) {
            $query['CkPassword'] = $request->ckPassword;
        }
        if (!Utils::isUnset($request->ckUserName)) {
            $query['CkUserName'] = $request->ckUserName;
        }
        if (!Utils::isUnset($request->clickhousePort)) {
            $query['ClickhousePort'] = $request->clickhousePort;
        }
        if (!Utils::isUnset($request->dbClusterId)) {
            $query['DbClusterId'] = $request->dbClusterId;
        }
        if (!Utils::isUnset($request->limitUpper)) {
            $query['LimitUpper'] = $request->limitUpper;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->rdsId)) {
            $query['RdsId'] = $request->rdsId;
        }
        if (!Utils::isUnset($request->rdsPassword)) {
            $query['RdsPassword'] = $request->rdsPassword;
        }
        if (!Utils::isUnset($request->rdsPort)) {
            $query['RdsPort'] = $request->rdsPort;
        }
        if (!Utils::isUnset($request->rdsUserName)) {
            $query['RdsUserName'] = $request->rdsUserName;
        }
        if (!Utils::isUnset($request->rdsVpcId)) {
            $query['RdsVpcId'] = $request->rdsVpcId;
        }
        if (!Utils::isUnset($request->rdsVpcUrl)) {
            $query['RdsVpcUrl'] = $request->rdsVpcUrl;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->skipUnsupported)) {
            $query['SkipUnsupported'] = $request->skipUnsupported;
        }
        if (!Utils::isUnset($request->synDbTables)) {
            $query['SynDbTables'] = $request->synDbTables;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRDSToClickhouseDb',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRDSToClickhouseDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a task to synchronize data from an ApsaraDB RDS for MySQL instance to an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  This operation is only applicable to ApsaraDB for ClickHouse clusters.
     *  *
     * @param CreateRDSToClickhouseDbRequest $request CreateRDSToClickhouseDbRequest
     *
     * @return CreateRDSToClickhouseDbResponse CreateRDSToClickhouseDbResponse
     */
    public function createRDSToClickhouseDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRDSToClickhouseDbWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a privileged account or a standard account for an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  This operation is applicable only to ApsaraDB for ClickHouse clusters of V20.8 or later that were created after December 1, 2021,
     *  *
     * @param CreateSQLAccountRequest $request CreateSQLAccountRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSQLAccountResponse CreateSQLAccountResponse
     */
    public function createSQLAccountWithOptions($request, $runtime)
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
            'action'      => 'CreateSQLAccount',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSQLAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a privileged account or a standard account for an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  This operation is applicable only to ApsaraDB for ClickHouse clusters of V20.8 or later that were created after December 1, 2021,
     *  *
     * @param CreateSQLAccountRequest $request CreateSQLAccountRequest
     *
     * @return CreateSQLAccountResponse CreateSQLAccountResponse
     */
    public function createSQLAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSQLAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a service-linked role.
     *  *
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
            'action'      => 'CreateServiceLinkedRole',
            'version'     => '2019-11-11',
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
     * @summary Creates a service-linked role.
     *  *
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
     * @summary Deletes a database account of an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  After you delete a database account, you cannot use the account to log on to the ApsaraDB for ClickHouse cluster. Exercise caution when performing this operation.
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
            'version'     => '2019-11-11',
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
     * @summary Deletes a database account of an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  After you delete a database account, you cannot use the account to log on to the ApsaraDB for ClickHouse cluster. Exercise caution when performing this operation.
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
     * @summary Releases a pay-as-you-go ApsaraDB for ClickHouse cluster.
     *  *
     * @description **Warning** After an ApsaraDB for ClickHouse cluster is deleted, all data in the cluster is deleted and cannot be recovered. Exercise caution when performing this operation.
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
            'version'     => '2019-11-11',
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
     * @summary Releases a pay-as-you-go ApsaraDB for ClickHouse cluster.
     *  *
     * @description **Warning** After an ApsaraDB for ClickHouse cluster is deleted, all data in the cluster is deleted and cannot be recovered. Exercise caution when performing this operation.
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
     * @summary Deletes a database used for data synchronization.
     *  *
     * @param DeleteSyndbRequest $request DeleteSyndbRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSyndbResponse DeleteSyndbResponse
     */
    public function deleteSyndbWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->synDb)) {
            $query['SynDb'] = $request->synDb;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSyndb',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSyndbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a database used for data synchronization.
     *  *
     * @param DeleteSyndbRequest $request DeleteSyndbRequest
     *
     * @return DeleteSyndbResponse DeleteSyndbResponse
     */
    public function deleteSyndb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSyndbWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the permissions of an account.
     *  *
     * @param DescribeAccountAuthorityRequest $request DescribeAccountAuthorityRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccountAuthorityResponse DescribeAccountAuthorityResponse
     */
    public function describeAccountAuthorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeAccountAuthority',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the permissions of an account.
     *  *
     * @param DescribeAccountAuthorityRequest $request DescribeAccountAuthorityRequest
     *
     * @return DescribeAccountAuthorityResponse DescribeAccountAuthorityResponse
     */
    public function describeAccountAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountAuthorityWithOptions($request, $runtime);
    }

    /**
     * @summary DescribeAccounts
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
            'action'      => 'DescribeAccounts',
            'version'     => '2019-11-11',
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
     * @summary DescribeAccounts
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
     * @summary Queries a list of databases, tables, and columns in an ApsaraDB for ClickHouse cluster.
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
            'version'     => '2019-11-11',
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
     * @summary Queries a list of databases, tables, and columns in an ApsaraDB for ClickHouse cluster.
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
     * @summary Queries the data sources of an ApsaraDB for ClickHouse cluster.
     *  *
     * @param DescribeAllDataSourcesRequest $request DescribeAllDataSourcesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAllDataSourcesResponse DescribeAllDataSourcesResponse
     */
    public function describeAllDataSourcesWithOptions($request, $runtime)
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
            'action'      => 'DescribeAllDataSources',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the data sources of an ApsaraDB for ClickHouse cluster.
     *  *
     * @param DescribeAllDataSourcesRequest $request DescribeAllDataSourcesRequest
     *
     * @return DescribeAllDataSourcesResponse DescribeAllDataSourcesResponse
     */
    public function describeAllDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllDataSourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the backup settings of an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  This operation is available only for the ApsaraDB for ClickHouse clusters of versions 20.3, 20.8, and 21.8.
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
            'version'     => '2019-11-11',
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
     * @summary Queries the backup settings of an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  This operation is available only for the ApsaraDB for ClickHouse clusters of versions 20.3, 20.8, and 21.8.
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
            'version'     => '2019-11-11',
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
     * @summary Queries information about columns.
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
            'version'     => '2019-11-11',
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
     * @summary Queries information about columns.
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
     * @summary Queries the change records of the configuration parameters of an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *  *
     * @param DescribeConfigHistoryRequest $request DescribeConfigHistoryRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeConfigHistoryResponse DescribeConfigHistoryResponse
     */
    public function describeConfigHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeConfigHistory',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConfigHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the change records of the configuration parameters of an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *  *
     * @param DescribeConfigHistoryRequest $request DescribeConfigHistoryRequest
     *
     * @return DescribeConfigHistoryResponse DescribeConfigHistoryResponse
     */
    public function describeConfigHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConfigHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the values of the configuration parameters of an ApsaraDB for ClickHouse cluster before and after the values of the configuration parameters are changed.
     *  *
     * @description >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *  *
     * @param DescribeConfigVersionDifferenceRequest $request DescribeConfigVersionDifferenceRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeConfigVersionDifferenceResponse DescribeConfigVersionDifferenceResponse
     */
    public function describeConfigVersionDifferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeConfigVersionDifference',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConfigVersionDifferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the values of the configuration parameters of an ApsaraDB for ClickHouse cluster before and after the values of the configuration parameters are changed.
     *  *
     * @description >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *  *
     * @param DescribeConfigVersionDifferenceRequest $request DescribeConfigVersionDifferenceRequest
     *
     * @return DescribeConfigVersionDifferenceResponse DescribeConfigVersionDifferenceResponse
     */
    public function describeConfigVersionDifference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConfigVersionDifferenceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the IP address whitelist of an ApsaraDB for ClickHouse cluster.
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
            'version'     => '2019-11-11',
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
     * @summary Queries the IP address whitelist of an ApsaraDB for ClickHouse cluster.
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
     * @summary Queries the information about an ApsaraDB for ClickHouse cluster.
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
            'version'     => '2019-11-11',
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
     * @summary Queries the information about an ApsaraDB for ClickHouse cluster.
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
     * @summary Queries information about the parameter settings of an ApsaraDB for ClickHouse cluster.
     *  *
     * @param DescribeDBClusterConfigRequest $request DescribeDBClusterConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterConfigResponse DescribeDBClusterConfigResponse
     */
    public function describeDBClusterConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBClusterConfig',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about the parameter settings of an ApsaraDB for ClickHouse cluster.
     *  *
     * @param DescribeDBClusterConfigRequest $request DescribeDBClusterConfigRequest
     *
     * @return DescribeDBClusterConfigResponse DescribeDBClusterConfigResponse
     */
    public function describeDBClusterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the values of the configuration parameters in the config.xml file of an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *  *
     * @param DescribeDBClusterConfigInXMLRequest $request DescribeDBClusterConfigInXMLRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterConfigInXMLResponse DescribeDBClusterConfigInXMLResponse
     */
    public function describeDBClusterConfigInXMLWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBClusterConfigInXML',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterConfigInXMLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the values of the configuration parameters in the config.xml file of an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *  *
     * @param DescribeDBClusterConfigInXMLRequest $request DescribeDBClusterConfigInXMLRequest
     *
     * @return DescribeDBClusterConfigInXMLResponse DescribeDBClusterConfigInXMLResponse
     */
    public function describeDBClusterConfigInXML($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterConfigInXMLWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the network information about an ApsaraDB for ClickHouse cluster.
     *  *
     * @param DescribeDBClusterNetInfoItemsRequest $request DescribeDBClusterNetInfoItemsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBClusterNetInfoItemsResponse DescribeDBClusterNetInfoItemsResponse
     */
    public function describeDBClusterNetInfoItemsWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBClusterNetInfoItems',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterNetInfoItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the network information about an ApsaraDB for ClickHouse cluster.
     *  *
     * @param DescribeDBClusterNetInfoItemsRequest $request DescribeDBClusterNetInfoItemsRequest
     *
     * @return DescribeDBClusterNetInfoItemsResponse DescribeDBClusterNetInfoItemsResponse
     */
    public function describeDBClusterNetInfoItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterNetInfoItemsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries performance data about an ApsaraDB for ClickHouse cluster.
     *  *
     * @description You can query the performance data of a specified cluster over a specific time range based on the performance metrics. The data is collected every 30 seconds.
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created before December 1, 2021.
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
            'version'     => '2019-11-11',
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
     * @summary Queries performance data about an ApsaraDB for ClickHouse cluster.
     *  *
     * @description You can query the performance data of a specified cluster over a specific time range based on the performance metrics. The data is collected every 30 seconds.
     * >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created before December 1, 2021.
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
     * @summary Queries the information about ApsaraDB for ClickHouse clusters in a region.
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
            'version'     => '2019-11-11',
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
     * @summary Queries the information about ApsaraDB for ClickHouse clusters in a region.
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
     * @summary Queries configuration information about an ApsaraDB for ClickHouse cluster.
     *  *
     * @param DescribeDBConfigRequest $request DescribeDBConfigRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDBConfigResponse DescribeDBConfigResponse
     */
    public function describeDBConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribeDBConfig',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries configuration information about an ApsaraDB for ClickHouse cluster.
     *  *
     * @param DescribeDBConfigRequest $request DescribeDBConfigRequest
     *
     * @return DescribeDBConfigResponse DescribeDBConfigResponse
     */
    public function describeDBConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the storage of cold data.
     *  *
     * @param DescribeOSSStorageRequest $request DescribeOSSStorageRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOSSStorageResponse DescribeOSSStorageResponse
     */
    public function describeOSSStorageWithOptions($request, $runtime)
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
            'action'      => 'DescribeOSSStorage',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOSSStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the storage of cold data.
     *  *
     * @param DescribeOSSStorageRequest $request DescribeOSSStorageRequest
     *
     * @return DescribeOSSStorageResponse DescribeOSSStorageResponse
     */
    public function describeOSSStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOSSStorageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of queries that are being executed in an ApsaraDB for ClickHouse cluster.
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
        if (!Utils::isUnset($request->initialQueryId)) {
            $query['InitialQueryId'] = $request->initialQueryId;
        }
        if (!Utils::isUnset($request->initialUser)) {
            $query['InitialUser'] = $request->initialUser;
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
        if (!Utils::isUnset($request->queryDurationMs)) {
            $query['QueryDurationMs'] = $request->queryDurationMs;
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
            'action'      => 'DescribeProcessList',
            'version'     => '2019-11-11',
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
     * @summary Queries the details of queries that are being executed in an ApsaraDB for ClickHouse cluster.
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
     * @summary Queries the information about all regions and zones of ApsaraDB for ClickHouse clusters.
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
            'version'     => '2019-11-11',
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
     * @summary Queries the information about all regions and zones of ApsaraDB for ClickHouse clusters.
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
     * @summary Queries a list of all databases in an ApsaraDB for ClickHouse cluster.
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
            'version'     => '2019-11-11',
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
     * @summary Queries a list of all databases in an ApsaraDB for ClickHouse cluster.
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
     * @summary Queries the details about slow query logs.
     *  *
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
        if (!Utils::isUnset($request->queryDurationMs)) {
            $query['QueryDurationMs'] = $request->queryDurationMs;
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
            'action'      => 'DescribeSlowLogRecords',
            'version'     => '2019-11-11',
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
     * @summary Queries the details about slow query logs.
     *  *
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
     * @summary Queries information about tables that are synchronized from an ApsaraDB RDS for MySQL instance to an ApsaraDB for ClickHouse cluster.
     *  *
     * @param DescribeSynDbTablesRequest $request DescribeSynDbTablesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSynDbTablesResponse DescribeSynDbTablesResponse
     */
    public function describeSynDbTablesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->synDb)) {
            $query['SynDb'] = $request->synDb;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSynDbTables',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSynDbTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about tables that are synchronized from an ApsaraDB RDS for MySQL instance to an ApsaraDB for ClickHouse cluster.
     *  *
     * @param DescribeSynDbTablesRequest $request DescribeSynDbTablesRequest
     *
     * @return DescribeSynDbTablesResponse DescribeSynDbTablesResponse
     */
    public function describeSynDbTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynDbTablesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about data synchronization between an ApsaraDB for ClickHouse cluster and an ApsaraDB RDS for MySQL instance.
     *  *
     * @param DescribeSynDbsRequest $request DescribeSynDbsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSynDbsResponse DescribeSynDbsResponse
     */
    public function describeSynDbsWithOptions($request, $runtime)
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
            'action'      => 'DescribeSynDbs',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSynDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about data synchronization between an ApsaraDB for ClickHouse cluster and an ApsaraDB RDS for MySQL instance.
     *  *
     * @param DescribeSynDbsRequest $request DescribeSynDbsRequest
     *
     * @return DescribeSynDbsResponse DescribeSynDbsResponse
     */
    public function describeSynDbs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynDbsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about tables in a database of an ApsaraDB for ClickHouse cluster.
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
            'version'     => '2019-11-11',
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
     * @summary Queries the information about tables in a database of an ApsaraDB for ClickHouse cluster.
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
     * @summary Queries information about data migration from an ApsaraDB for ClickHouse cluster of an earlier version to an ApsaraDB for ClickHouse cluster of a later version
     *  *
     * @description >  You can call this operation to query information about only data migration from an ApsaraDB for ClickHouse cluster of an earlier version to an ApsaraDB for ClickHouse cluster of a later version.
     *  *
     * @param DescribeTransferHistoryRequest $request DescribeTransferHistoryRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTransferHistoryResponse DescribeTransferHistoryResponse
     */
    public function describeTransferHistoryWithOptions($request, $runtime)
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
            'action'      => 'DescribeTransferHistory',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTransferHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about data migration from an ApsaraDB for ClickHouse cluster of an earlier version to an ApsaraDB for ClickHouse cluster of a later version
     *  *
     * @description >  You can call this operation to query information about only data migration from an ApsaraDB for ClickHouse cluster of an earlier version to an ApsaraDB for ClickHouse cluster of a later version.
     *  *
     * @param DescribeTransferHistoryRequest $request DescribeTransferHistoryRequest
     *
     * @return DescribeTransferHistoryResponse DescribeTransferHistoryResponse
     */
    public function describeTransferHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTransferHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary Terminates an ongoing task.
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
        if (!Utils::isUnset($request->initialQueryId)) {
            $query['InitialQueryId'] = $request->initialQueryId;
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
            'action'      => 'KillProcess',
            'version'     => '2019-11-11',
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
     * @summary Terminates an ongoing task.
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
     * @summary Modifies the permissions of an account.
     *  *
     * @param ModifyAccountAuthorityRequest $request ModifyAccountAuthorityRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccountAuthorityResponse ModifyAccountAuthorityResponse
     */
    public function modifyAccountAuthorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->allowDatabases)) {
            $query['AllowDatabases'] = $request->allowDatabases;
        }
        if (!Utils::isUnset($request->allowDictionaries)) {
            $query['AllowDictionaries'] = $request->allowDictionaries;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->ddlAuthority)) {
            $query['DdlAuthority'] = $request->ddlAuthority;
        }
        if (!Utils::isUnset($request->dmlAuthority)) {
            $query['DmlAuthority'] = $request->dmlAuthority;
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
        if (!Utils::isUnset($request->totalDatabases)) {
            $query['TotalDatabases'] = $request->totalDatabases;
        }
        if (!Utils::isUnset($request->totalDictionaries)) {
            $query['TotalDictionaries'] = $request->totalDictionaries;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountAuthority',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the permissions of an account.
     *  *
     * @param ModifyAccountAuthorityRequest $request ModifyAccountAuthorityRequest
     *
     * @return ModifyAccountAuthorityResponse ModifyAccountAuthorityResponse
     */
    public function modifyAccountAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountAuthorityWithOptions($request, $runtime);
    }

    /**
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
            'version'     => '2019-11-11',
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
     * @summary Modifies the backup settings of an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  This operation is available only for the ApsaraDB for ClickHouse clusters of versions 20.3, 20.8, and 21.8.
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
            'version'     => '2019-11-11',
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
     * @summary Modifies the backup settings of an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  This operation is available only for the ApsaraDB for ClickHouse clusters of versions 20.3, 20.8, and 21.8.
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
     * @summary Upgrades or downgrades an ApsaraDB for ClickHouse cluster.
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
        if (!Utils::isUnset($request->DBClusterClass)) {
            $query['DBClusterClass'] = $request->DBClusterClass;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->DBNodeGroupCount)) {
            $query['DBNodeGroupCount'] = $request->DBNodeGroupCount;
        }
        if (!Utils::isUnset($request->DBNodeStorage)) {
            $query['DBNodeStorage'] = $request->DBNodeStorage;
        }
        if (!Utils::isUnset($request->dbNodeStorageType)) {
            $query['DbNodeStorageType'] = $request->dbNodeStorageType;
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
            'action'      => 'ModifyDBCluster',
            'version'     => '2019-11-11',
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
     * @summary Upgrades or downgrades an ApsaraDB for ClickHouse cluster.
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
            'version'     => '2019-11-11',
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
     * @summary Modifies the configurations of an ApsaraDB for ClickHouse cluster.
     *  *
     * @param ModifyDBClusterConfigRequest $request ModifyDBClusterConfigRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterConfigResponse ModifyDBClusterConfigResponse
     */
    public function modifyDBClusterConfigWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
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
        if (!Utils::isUnset($request->userConfig)) {
            $query['UserConfig'] = $request->userConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterConfig',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of an ApsaraDB for ClickHouse cluster.
     *  *
     * @param ModifyDBClusterConfigRequest $request ModifyDBClusterConfigRequest
     *
     * @return ModifyDBClusterConfigResponse ModifyDBClusterConfigResponse
     */
    public function modifyDBClusterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the settings of the configuration parameters for an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *  *
     * @param ModifyDBClusterConfigInXMLRequest $request ModifyDBClusterConfigInXMLRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBClusterConfigInXMLResponse ModifyDBClusterConfigInXMLResponse
     */
    public function modifyDBClusterConfigInXMLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBClusterConfigInXML',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBClusterConfigInXMLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the settings of the configuration parameters for an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  You can call this operation only for ApsaraDB for ClickHouse clusters that were created after December 1, 2021.
     *  *
     * @param ModifyDBClusterConfigInXMLRequest $request ModifyDBClusterConfigInXMLRequest
     *
     * @return ModifyDBClusterConfigInXMLResponse ModifyDBClusterConfigInXMLResponse
     */
    public function modifyDBClusterConfigInXML($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterConfigInXMLWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the name of an ApsaraDB for ClickHouse cluster.
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
            'version'     => '2019-11-11',
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
     * @summary Changes the name of an ApsaraDB for ClickHouse cluster.
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
     * @summary Modifies the maintenance window of an ApsaraDB for ClickHouse cluster.
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
            'version'     => '2019-11-11',
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
     * @summary Modifies the maintenance window of an ApsaraDB for ClickHouse cluster.
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
     * @summary Modifies the dictionary configuration of an ApsaraDB for ClickHouse cluster.
     *  *
     * @param ModifyDBConfigRequest $request ModifyDBConfigRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDBConfigResponse ModifyDBConfigResponse
     */
    public function modifyDBConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
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
            'action'      => 'ModifyDBConfig',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the dictionary configuration of an ApsaraDB for ClickHouse cluster.
     *  *
     * @param ModifyDBConfigRequest $request ModifyDBConfigRequest
     *
     * @return ModifyDBConfigResponse ModifyDBConfigResponse
     */
    public function modifyDBConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the type of a minor version update in ApsaraDB for ClickHouse.
     *  *
     * @param ModifyMinorVersionGreadeTypeRequest $request ModifyMinorVersionGreadeTypeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyMinorVersionGreadeTypeResponse ModifyMinorVersionGreadeTypeResponse
     */
    public function modifyMinorVersionGreadeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->maintainAutoType)) {
            $query['MaintainAutoType'] = $request->maintainAutoType;
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
            'action'      => 'ModifyMinorVersionGreadeType',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMinorVersionGreadeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the type of a minor version update in ApsaraDB for ClickHouse.
     *  *
     * @param ModifyMinorVersionGreadeTypeRequest $request ModifyMinorVersionGreadeTypeRequest
     *
     * @return ModifyMinorVersionGreadeTypeResponse ModifyMinorVersionGreadeTypeResponse
     */
    public function modifyMinorVersionGreadeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMinorVersionGreadeTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the synchronization task of an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  This operation is applicable only to ApsaraDB for ClickHouse clusters.
     *  *
     * @param ModifyRDSToClickhouseDbRequest $request ModifyRDSToClickhouseDbRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyRDSToClickhouseDbResponse ModifyRDSToClickhouseDbResponse
     */
    public function modifyRDSToClickhouseDbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ckPassword)) {
            $query['CkPassword'] = $request->ckPassword;
        }
        if (!Utils::isUnset($request->ckUserName)) {
            $query['CkUserName'] = $request->ckUserName;
        }
        if (!Utils::isUnset($request->clickhousePort)) {
            $query['ClickhousePort'] = $request->clickhousePort;
        }
        if (!Utils::isUnset($request->dbClusterId)) {
            $query['DbClusterId'] = $request->dbClusterId;
        }
        if (!Utils::isUnset($request->limitUpper)) {
            $query['LimitUpper'] = $request->limitUpper;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->rdsId)) {
            $query['RdsId'] = $request->rdsId;
        }
        if (!Utils::isUnset($request->rdsPassword)) {
            $query['RdsPassword'] = $request->rdsPassword;
        }
        if (!Utils::isUnset($request->rdsPort)) {
            $query['RdsPort'] = $request->rdsPort;
        }
        if (!Utils::isUnset($request->rdsSynDb)) {
            $query['RdsSynDb'] = $request->rdsSynDb;
        }
        if (!Utils::isUnset($request->rdsSynTables)) {
            $query['RdsSynTables'] = $request->rdsSynTables;
        }
        if (!Utils::isUnset($request->rdsUserName)) {
            $query['RdsUserName'] = $request->rdsUserName;
        }
        if (!Utils::isUnset($request->rdsVpcId)) {
            $query['RdsVpcId'] = $request->rdsVpcId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->skipUnsupported)) {
            $query['SkipUnsupported'] = $request->skipUnsupported;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRDSToClickhouseDb',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRDSToClickhouseDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the synchronization task of an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  This operation is applicable only to ApsaraDB for ClickHouse clusters.
     *  *
     * @param ModifyRDSToClickhouseDbRequest $request ModifyRDSToClickhouseDbRequest
     *
     * @return ModifyRDSToClickhouseDbResponse ModifyRDSToClickhouseDbResponse
     */
    public function modifyRDSToClickhouseDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRDSToClickhouseDbWithOptions($request, $runtime);
    }

    /**
     * @summary Releases the public endpoint of an ApsaraDB for ClickHouse cluster.
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
            'version'     => '2019-11-11',
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
     * @summary Releases the public endpoint of an ApsaraDB for ClickHouse cluster.
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
     * @summary Resets the password of a database account for an ApsaraDB for ClickHouse cluster.
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
            'version'     => '2019-11-11',
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
     * @summary Resets the password of a database account for an ApsaraDB for ClickHouse cluster.
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
     * @summary Restarts an ApsaraDB for ClickHouse cluster.
     *  *
     * @param RestartInstanceRequest $request RestartInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartInstanceResponse RestartInstanceResponse
     */
    public function restartInstanceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->restartTime)) {
            $query['RestartTime'] = $request->restartTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartInstance',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restarts an ApsaraDB for ClickHouse cluster.
     *  *
     * @param RestartInstanceRequest $request RestartInstanceRequest
     *
     * @return RestartInstanceResponse RestartInstanceResponse
     */
    public function restartInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Migrates the data of a source ApsaraDB for ClickHouse cluster to a destination ApsaraDB for ClickHouse cluster.
     *  *
     * @description ## [](#)Prerequisites
     * *   The IP address of the source ApsaraDB for ClickHouse cluster is added to the IP address whitelist of the destination ApsaraDB for ClickHouse cluster.
     * *   The IP address of the destination ApsaraDB for ClickHouse cluster is added to the IP address whitelist of the source ApsaraDB for ClickHouse cluster.
     * >  You can execute the `select * from system.clusters;` statement to query the IP address of an ApsaraDB for ClickHouse cluster.
     *  *
     * @param TransferVersionRequest $request TransferVersionRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return TransferVersionResponse TransferVersionResponse
     */
    public function transferVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBClusterId)) {
            $query['DBClusterId'] = $request->DBClusterId;
        }
        if (!Utils::isUnset($request->disableWriteWindows)) {
            $query['DisableWriteWindows'] = $request->disableWriteWindows;
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
        if (!Utils::isUnset($request->sourceAccount)) {
            $query['SourceAccount'] = $request->sourceAccount;
        }
        if (!Utils::isUnset($request->sourcePassword)) {
            $query['SourcePassword'] = $request->sourcePassword;
        }
        if (!Utils::isUnset($request->targetAccount)) {
            $query['TargetAccount'] = $request->targetAccount;
        }
        if (!Utils::isUnset($request->targetDbClusterId)) {
            $query['TargetDbClusterId'] = $request->targetDbClusterId;
        }
        if (!Utils::isUnset($request->targetPassword)) {
            $query['TargetPassword'] = $request->targetPassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransferVersion',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Migrates the data of a source ApsaraDB for ClickHouse cluster to a destination ApsaraDB for ClickHouse cluster.
     *  *
     * @description ## [](#)Prerequisites
     * *   The IP address of the source ApsaraDB for ClickHouse cluster is added to the IP address whitelist of the destination ApsaraDB for ClickHouse cluster.
     * *   The IP address of the destination ApsaraDB for ClickHouse cluster is added to the IP address whitelist of the source ApsaraDB for ClickHouse cluster.
     * >  You can execute the `select * from system.clusters;` statement to query the IP address of an ApsaraDB for ClickHouse cluster.
     *  *
     * @param TransferVersionRequest $request TransferVersionRequest
     *
     * @return TransferVersionResponse TransferVersionResponse
     */
    public function transferVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the minor engine version of an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  You can call this operation only for ApsaraDB for ClickHouse clusters that were purchased after December 1, 2021.
     *  *
     * @param UpgradeMinorVersionRequest $request UpgradeMinorVersionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeMinorVersionResponse UpgradeMinorVersionResponse
     */
    public function upgradeMinorVersionWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->upgradeImmediately)) {
            $query['UpgradeImmediately'] = $request->upgradeImmediately;
        }
        if (!Utils::isUnset($request->upgradeTime)) {
            $query['UpgradeTime'] = $request->upgradeTime;
        }
        if (!Utils::isUnset($request->upgradeVersion)) {
            $query['UpgradeVersion'] = $request->upgradeVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeMinorVersion',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeMinorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the minor engine version of an ApsaraDB for ClickHouse cluster.
     *  *
     * @description >  You can call this operation only for ApsaraDB for ClickHouse clusters that were purchased after December 1, 2021.
     *  *
     * @param UpgradeMinorVersionRequest $request UpgradeMinorVersionRequest
     *
     * @return UpgradeMinorVersionResponse UpgradeMinorVersionResponse
     */
    public function upgradeMinorVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeMinorVersionWithOptions($request, $runtime);
    }
}
