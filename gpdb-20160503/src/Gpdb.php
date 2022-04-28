<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AddBuDBInstanceRelationRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AddBuDBInstanceRelationResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateECSDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateECSDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDatabaseRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDatabaseResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataBackupsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataBackupsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataShareInstancesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataShareInstancesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataSharePerformanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataSharePerformanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterNodeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterNodeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterPerformanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterPerformanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceIPArrayListRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceIPArrayListResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceOnECSAttributeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceOnECSAttributeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePerformanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePerformanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSQLPatternsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSQLPatternsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSSLRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSSLResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeLogBackupsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeLogBackupsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModifyParameterLogRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModifyParameterLogResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVSwitchsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVSwitchsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeResourceUsageRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeResourceUsageResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSlowSQLLogsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSlowSQLLogsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSpecificationRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSpecificationResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLCollectorPolicyRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLCollectorPolicyResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogByQueryIdRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogByQueryIdResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogCountRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogCountResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogFilesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogFilesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsOnSliceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsOnSliceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeUserEncryptionKeyListRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeUserEncryptionKeyListResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConnectionModeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConnectionModeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConnectionStringRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConnectionStringResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceDescriptionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceDescriptionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceMaintainTimeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceMaintainTimeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceNetworkTypeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceNetworkTypeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceSSLRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceSSLResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyParametersRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyParametersResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySQLCollectorPolicyRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySQLCollectorPolicyResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ReleaseInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ReleaseInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\RestartDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\RestartDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\SetDataShareInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\SetDataShareInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\SetDataShareInstanceShrinkRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\SwitchDBInstanceNetTypeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\SwitchDBInstanceNetTypeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpgradeDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpgradeDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpgradeDBVersionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpgradeDBVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Gpdb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'            => 'gpdb.aliyuncs.com',
            'cn-hangzhou'           => 'gpdb.aliyuncs.com',
            'cn-shanghai'           => 'gpdb.aliyuncs.com',
            'cn-shenzhen'           => 'gpdb.aliyuncs.com',
            'cn-hongkong'           => 'gpdb.aliyuncs.com',
            'ap-southeast-1'        => 'gpdb.aliyuncs.com',
            'us-west-1'             => 'gpdb.aliyuncs.com',
            'us-east-1'             => 'gpdb.aliyuncs.com',
            'cn-hangzhou-finance'   => 'gpdb.aliyuncs.com',
            'cn-shanghai-finance-1' => 'gpdb.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'gpdb.aliyuncs.com',
            'cn-qingdao'            => 'gpdb.aliyuncs.com',
            'cn-north-2-gov-1'      => 'gpdb.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('gpdb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddBuDBInstanceRelationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddBuDBInstanceRelationResponse
     */
    public function addBuDBInstanceRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessUnit)) {
            $query['BusinessUnit'] = $request->businessUnit;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddBuDBInstanceRelation',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddBuDBInstanceRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddBuDBInstanceRelationRequest $request
     *
     * @return AddBuDBInstanceRelationResponse
     */
    public function addBuDBInstanceRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBuDBInstanceRelationWithOptions($request, $runtime);
    }

    /**
     * @param AllocateInstancePublicConnectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'AllocateInstancePublicConnection',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AllocateInstancePublicConnectionRequest $request
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CheckServiceLinkedRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRoleWithOptions($request, $runtime)
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
            'action'      => 'CheckServiceLinkedRole',
            'version'     => '2016-05-03',
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccount',
            'version'     => '2016-05-03',
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
     * @param CreateDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceCategory)) {
            $query['DBInstanceCategory'] = $request->DBInstanceCategory;
        }
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->DBInstanceGroupCount)) {
            $query['DBInstanceGroupCount'] = $request->DBInstanceGroupCount;
        }
        if (!Utils::isUnset($request->DBInstanceMode)) {
            $query['DBInstanceMode'] = $request->DBInstanceMode;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
        }
        if (!Utils::isUnset($request->instanceSpec)) {
            $query['InstanceSpec'] = $request->instanceSpec;
        }
        if (!Utils::isUnset($request->masterNodeNum)) {
            $query['MasterNodeNum'] = $request->masterNodeNum;
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
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        if (!Utils::isUnset($request->segNodeNum)) {
            $query['SegNodeNum'] = $request->segNodeNum;
        }
        if (!Utils::isUnset($request->segStorageType)) {
            $query['SegStorageType'] = $request->segStorageType;
        }
        if (!Utils::isUnset($request->storageSize)) {
            $query['StorageSize'] = $request->storageSize;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
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
            'action'      => 'CreateDBInstance',
            'version'     => '2016-05-03',
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
     * @param CreateECSDBInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateECSDBInstanceResponse
     */
    public function createECSDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceCategory)) {
            $query['DBInstanceCategory'] = $request->DBInstanceCategory;
        }
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->encryptionKey)) {
            $query['EncryptionKey'] = $request->encryptionKey;
        }
        if (!Utils::isUnset($request->encryptionType)) {
            $query['EncryptionType'] = $request->encryptionType;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->engineVersion)) {
            $query['EngineVersion'] = $request->engineVersion;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
        }
        if (!Utils::isUnset($request->instanceSpec)) {
            $query['InstanceSpec'] = $request->instanceSpec;
        }
        if (!Utils::isUnset($request->masterNodeNum)) {
            $query['MasterNodeNum'] = $request->masterNodeNum;
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
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        if (!Utils::isUnset($request->segNodeNum)) {
            $query['SegNodeNum'] = $request->segNodeNum;
        }
        if (!Utils::isUnset($request->segStorageType)) {
            $query['SegStorageType'] = $request->segStorageType;
        }
        if (!Utils::isUnset($request->srcDbInstanceName)) {
            $query['SrcDbInstanceName'] = $request->srcDbInstanceName;
        }
        if (!Utils::isUnset($request->storageSize)) {
            $query['StorageSize'] = $request->storageSize;
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
            'action'      => 'CreateECSDBInstance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateECSDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateECSDBInstanceRequest $request
     *
     * @return CreateECSDBInstanceResponse
     */
    public function createECSDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createECSDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceLinkedRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'CreateServiceLinkedRole',
            'version'     => '2016-05-03',
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
     * @param DeleteDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBInstance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDBInstanceRequest $request
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatabase',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccounts',
            'version'     => '2016-05-03',
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
     * @param DescribeAvailableResourcesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAvailableResourcesResponse
     */
    public function describeAvailableResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableResources',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableResourcesRequest $request
     *
     * @return DescribeAvailableResourcesResponse
     */
    public function describeAvailableResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourcesWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2016-05-03',
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
     * @param DescribeDBClusterNodeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDBClusterNodeResponse
     */
    public function describeDBClusterNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusterNode',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBClusterNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBClusterNodeRequest $request
     *
     * @return DescribeDBClusterNodeResponse
     */
    public function describeDBClusterNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterNodeWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->nodeType)) {
            $query['NodeType'] = $request->nodeType;
        }
        if (!Utils::isUnset($request->nodes)) {
            $query['Nodes'] = $request->nodes;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBClusterPerformance',
            'version'     => '2016-05-03',
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
     * @param DescribeDBInstanceAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceAttribute',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceAttributeRequest $request
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceIPArrayListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstanceIPArrayListResponse
     */
    public function describeDBInstanceIPArrayListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceIPArrayList',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceIPArrayListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceIPArrayListRequest $request
     *
     * @return DescribeDBInstanceIPArrayListResponse
     */
    public function describeDBInstanceIPArrayList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceIPArrayListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceNetInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceNetInfo',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceNetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceNetInfoRequest $request
     *
     * @return DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceNetInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceOnECSAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDBInstanceOnECSAttributeResponse
     */
    public function describeDBInstanceOnECSAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceOnECSAttribute',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceOnECSAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceOnECSAttributeRequest $request
     *
     * @return DescribeDBInstanceOnECSAttributeResponse
     */
    public function describeDBInstanceOnECSAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceOnECSAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstancePerformanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstancePerformanceResponse
     */
    public function describeDBInstancePerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstancePerformance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstancePerformanceRequest $request
     *
     * @return DescribeDBInstancePerformanceResponse
     */
    public function describeDBInstancePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancePerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceSQLPatternsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstanceSQLPatternsResponse
     */
    public function describeDBInstanceSQLPatternsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->queryKeywords)) {
            $query['QueryKeywords'] = $request->queryKeywords;
        }
        if (!Utils::isUnset($request->sourceIP)) {
            $query['SourceIP'] = $request->sourceIP;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceSQLPatterns',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceSQLPatternsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceSQLPatternsRequest $request
     *
     * @return DescribeDBInstanceSQLPatternsResponse
     */
    public function describeDBInstanceSQLPatterns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSQLPatternsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceSSLRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceSSL',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceSSLRequest $request
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstancesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeDBInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->DBInstanceCategories)) {
            $request->DBInstanceCategoriesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->DBInstanceCategories, 'DBInstanceCategories', 'simple');
        }
        if (!Utils::isUnset($tmpReq->DBInstanceModes)) {
            $request->DBInstanceModesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->DBInstanceModes, 'DBInstanceModes', 'simple');
        }
        if (!Utils::isUnset($tmpReq->DBInstanceStatuses)) {
            $request->DBInstanceStatusesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->DBInstanceStatuses, 'DBInstanceStatuses', 'simple');
        }
        if (!Utils::isUnset($tmpReq->instanceDeployTypes)) {
            $request->instanceDeployTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceDeployTypes, 'InstanceDeployTypes', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->DBInstanceCategoriesShrink)) {
            $query['DBInstanceCategories'] = $request->DBInstanceCategoriesShrink;
        }
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->DBInstanceIds)) {
            $query['DBInstanceIds'] = $request->DBInstanceIds;
        }
        if (!Utils::isUnset($request->DBInstanceModesShrink)) {
            $query['DBInstanceModes'] = $request->DBInstanceModesShrink;
        }
        if (!Utils::isUnset($request->DBInstanceStatusesShrink)) {
            $query['DBInstanceStatuses'] = $request->DBInstanceStatusesShrink;
        }
        if (!Utils::isUnset($request->instanceDeployTypesShrink)) {
            $query['InstanceDeployTypes'] = $request->instanceDeployTypesShrink;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstances',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstancesRequest $request
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataBackupsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDataBackupsResponse
     */
    public function describeDataBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->backupMode)) {
            $query['BackupMode'] = $request->backupMode;
        }
        if (!Utils::isUnset($request->backupStatus)) {
            $query['BackupStatus'] = $request->backupStatus;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataBackups',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataBackupsRequest $request
     *
     * @return DescribeDataBackupsResponse
     */
    public function describeDataBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataShareInstancesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDataShareInstancesResponse
     */
    public function describeDataShareInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->searchValue)) {
            $query['SearchValue'] = $request->searchValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataShareInstances',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataShareInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataShareInstancesRequest $request
     *
     * @return DescribeDataShareInstancesResponse
     */
    public function describeDataShareInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataShareInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataSharePerformanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDataSharePerformanceResponse
     */
    public function describeDataSharePerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
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
            'action'      => 'DescribeDataSharePerformance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataSharePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataSharePerformanceRequest $request
     *
     * @return DescribeDataSharePerformanceResponse
     */
    public function describeDataSharePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataSharePerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHealthStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHealthStatusResponse
     */
    public function describeHealthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHealthStatus',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHealthStatusRequest $request
     *
     * @return DescribeHealthStatusResponse
     */
    public function describeHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogBackupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeLogBackupsResponse
     */
    public function describeLogBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogBackups',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLogBackupsRequest $request
     *
     * @return DescribeLogBackupsResponse
     */
    public function describeLogBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeModifyParameterLogRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeModifyParameterLogResponse
     */
    public function describeModifyParameterLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'DescribeModifyParameterLog',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeModifyParameterLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeModifyParameterLogRequest $request
     *
     * @return DescribeModifyParameterLogResponse
     */
    public function describeModifyParameterLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModifyParameterLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParametersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeParametersResponse
     */
    public function describeParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameters',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeParametersRequest $request
     *
     * @return DescribeParametersResponse
     */
    public function describeParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParametersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsVSwitchsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRdsVSwitchsResponse
     */
    public function describeRdsVSwitchsWithOptions($request, $runtime)
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
            'action'      => 'DescribeRdsVSwitchs',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsVSwitchsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsVSwitchsRequest $request
     *
     * @return DescribeRdsVSwitchsResponse
     */
    public function describeRdsVSwitchs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsVSwitchsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsVpcsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRdsVpcsResponse
     */
    public function describeRdsVpcsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdsVpcs',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsVpcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsVpcsRequest $request
     *
     * @return DescribeRdsVpcsResponse
     */
    public function describeRdsVpcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsVpcsWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2016-05-03',
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
     * @param DescribeResourceUsageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeResourceUsageResponse
     */
    public function describeResourceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceUsage',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourceUsageRequest $request
     *
     * @return DescribeResourceUsageResponse
     */
    public function describeResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLCollectorPolicyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSQLCollectorPolicyResponse
     */
    public function describeSQLCollectorPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLCollectorPolicy',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLCollectorPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLCollectorPolicyRequest $request
     *
     * @return DescribeSQLCollectorPolicyResponse
     */
    public function describeSQLCollectorPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLCollectorPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLLogByQueryIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSQLLogByQueryIdResponse
     */
    public function describeSQLLogByQueryIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->queryId)) {
            $query['QueryId'] = $request->queryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLLogByQueryId',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogByQueryIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLLogByQueryIdRequest $request
     *
     * @return DescribeSQLLogByQueryIdResponse
     */
    public function describeSQLLogByQueryId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogByQueryIdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLLogCountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSQLLogCountResponse
     */
    public function describeSQLLogCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executeCost)) {
            $query['ExecuteCost'] = $request->executeCost;
        }
        if (!Utils::isUnset($request->executeState)) {
            $query['ExecuteState'] = $request->executeState;
        }
        if (!Utils::isUnset($request->maxExecuteCost)) {
            $query['MaxExecuteCost'] = $request->maxExecuteCost;
        }
        if (!Utils::isUnset($request->minExecuteCost)) {
            $query['MinExecuteCost'] = $request->minExecuteCost;
        }
        if (!Utils::isUnset($request->operationClass)) {
            $query['OperationClass'] = $request->operationClass;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->queryKeywords)) {
            $query['QueryKeywords'] = $request->queryKeywords;
        }
        if (!Utils::isUnset($request->sourceIP)) {
            $query['SourceIP'] = $request->sourceIP;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLLogCount',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLLogCountRequest $request
     *
     * @return DescribeSQLLogCountResponse
     */
    public function describeSQLLogCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLLogFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSQLLogFilesResponse
     */
    public function describeSQLLogFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
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
            'action'      => 'DescribeSQLLogFiles',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLLogFilesRequest $request
     *
     * @return DescribeSQLLogFilesResponse
     */
    public function describeSQLLogFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLLogRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSQLLogRecordsResponse
     */
    public function describeSQLLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->form)) {
            $query['Form'] = $request->form;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryKeywords)) {
            $query['QueryKeywords'] = $request->queryKeywords;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLLogRecords',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLLogRecordsRequest $request
     *
     * @return DescribeSQLLogRecordsResponse
     */
    public function describeSQLLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLLogsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeSQLLogsResponse
     */
    public function describeSQLLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executeCost)) {
            $query['ExecuteCost'] = $request->executeCost;
        }
        if (!Utils::isUnset($request->executeState)) {
            $query['ExecuteState'] = $request->executeState;
        }
        if (!Utils::isUnset($request->maxExecuteCost)) {
            $query['MaxExecuteCost'] = $request->maxExecuteCost;
        }
        if (!Utils::isUnset($request->minExecuteCost)) {
            $query['MinExecuteCost'] = $request->minExecuteCost;
        }
        if (!Utils::isUnset($request->operationClass)) {
            $query['OperationClass'] = $request->operationClass;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryKeywords)) {
            $query['QueryKeywords'] = $request->queryKeywords;
        }
        if (!Utils::isUnset($request->sourceIP)) {
            $query['SourceIP'] = $request->sourceIP;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLLogs',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLLogsRequest $request
     *
     * @return DescribeSQLLogsResponse
     */
    public function describeSQLLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLLogsOnSliceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSQLLogsOnSliceResponse
     */
    public function describeSQLLogsOnSliceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->executeState)) {
            $query['ExecuteState'] = $request->executeState;
        }
        if (!Utils::isUnset($request->maxExecuteCost)) {
            $query['MaxExecuteCost'] = $request->maxExecuteCost;
        }
        if (!Utils::isUnset($request->minExecuteCost)) {
            $query['MinExecuteCost'] = $request->minExecuteCost;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryId)) {
            $query['QueryId'] = $request->queryId;
        }
        if (!Utils::isUnset($request->sliceId)) {
            $query['SliceId'] = $request->sliceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLLogsOnSlice',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLLogsOnSliceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLLogsOnSliceRequest $request
     *
     * @return DescribeSQLLogsOnSliceResponse
     */
    public function describeSQLLogsOnSlice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogsOnSliceWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $query['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $query['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowLogRecords',
            'version'     => '2016-05-03',
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
     * @param DescribeSlowSQLLogsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSlowSQLLogsResponse
     */
    public function describeSlowSQLLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executeState)) {
            $query['ExecuteState'] = $request->executeState;
        }
        if (!Utils::isUnset($request->maxExecuteCost)) {
            $query['MaxExecuteCost'] = $request->maxExecuteCost;
        }
        if (!Utils::isUnset($request->minExecuteCost)) {
            $query['MinExecuteCost'] = $request->minExecuteCost;
        }
        if (!Utils::isUnset($request->operationClass)) {
            $query['OperationClass'] = $request->operationClass;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryKeywords)) {
            $query['QueryKeywords'] = $request->queryKeywords;
        }
        if (!Utils::isUnset($request->sourceIP)) {
            $query['SourceIP'] = $request->sourceIP;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowSQLLogs',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowSQLLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSlowSQLLogsRequest $request
     *
     * @return DescribeSlowSQLLogsResponse
     */
    public function describeSlowSQLLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowSQLLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSpecificationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSpecificationResponse
     */
    public function describeSpecificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cpuCores)) {
            $query['CpuCores'] = $request->cpuCores;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->totalNodeNum)) {
            $query['TotalNodeNum'] = $request->totalNodeNum;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSpecification',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSpecificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSpecificationRequest $request
     *
     * @return DescribeSpecificationResponse
     */
    public function describeSpecification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSpecificationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTags',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTagsRequest $request
     *
     * @return DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserEncryptionKeyListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeUserEncryptionKeyList',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserEncryptionKeyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'version'     => '2016-05-03',
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountDescription',
            'version'     => '2016-05-03',
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->enableRecoveryPoint)) {
            $query['EnableRecoveryPoint'] = $request->enableRecoveryPoint;
        }
        if (!Utils::isUnset($request->preferredBackupPeriod)) {
            $query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }
        if (!Utils::isUnset($request->preferredBackupTime)) {
            $query['PreferredBackupTime'] = $request->preferredBackupTime;
        }
        if (!Utils::isUnset($request->recoveryPointPeriod)) {
            $query['RecoveryPointPeriod'] = $request->recoveryPointPeriod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupPolicy',
            'version'     => '2016-05-03',
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
     * @param ModifyDBInstanceConnectionModeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyDBInstanceConnectionModeResponse
     */
    public function modifyDBInstanceConnectionModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionMode)) {
            $query['ConnectionMode'] = $request->connectionMode;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceConnectionMode',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceConnectionModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceConnectionModeRequest $request
     *
     * @return ModifyDBInstanceConnectionModeResponse
     */
    public function modifyDBInstanceConnectionMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConnectionModeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceConnectionStringRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionStringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->currentConnectionString)) {
            $query['CurrentConnectionString'] = $request->currentConnectionString;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceConnectionString',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceConnectionStringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceConnectionStringRequest $request
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionString($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConnectionStringWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceDescriptionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceDescription)) {
            $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceDescription',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceDescriptionRequest $request
     *
     * @return ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceMaintainTimeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'ModifyDBInstanceMaintainTime',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceMaintainTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceMaintainTimeRequest $request
     *
     * @return ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceNetworkTypeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceNetworkTypeResponse
     */
    public function modifyDBInstanceNetworkTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->instanceNetworkType)) {
            $query['InstanceNetworkType'] = $request->instanceNetworkType;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
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
            'action'      => 'ModifyDBInstanceNetworkType',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceNetworkTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceNetworkTypeRequest $request
     *
     * @return ModifyDBInstanceNetworkTypeResponse
     */
    public function modifyDBInstanceNetworkType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceNetworkTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceSSLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionString)) {
            $query['ConnectionString'] = $request->connectionString;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->SSLEnabled)) {
            $query['SSLEnabled'] = $request->SSLEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceSSL',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceSSLRequest $request
     *
     * @return ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @param ModifyParametersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyParametersResponse
     */
    public function modifyParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->forceRestartInstance)) {
            $query['ForceRestartInstance'] = $request->forceRestartInstance;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyParameters',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyParametersRequest $request
     *
     * @return ModifyParametersResponse
     */
    public function modifyParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParametersWithOptions($request, $runtime);
    }

    /**
     * @param ModifySQLCollectorPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifySQLCollectorPolicyResponse
     */
    public function modifySQLCollectorPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->SQLCollectorStatus)) {
            $query['SQLCollectorStatus'] = $request->SQLCollectorStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySQLCollectorPolicy',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySQLCollectorPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySQLCollectorPolicyRequest $request
     *
     * @return ModifySQLCollectorPolicyResponse
     */
    public function modifySQLCollectorPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySQLCollectorPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecurityIpsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifySecurityIpsResponse
     */
    public function modifySecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceIPArrayAttribute)) {
            $query['DBInstanceIPArrayAttribute'] = $request->DBInstanceIPArrayAttribute;
        }
        if (!Utils::isUnset($request->DBInstanceIPArrayName)) {
            $query['DBInstanceIPArrayName'] = $request->DBInstanceIPArrayName;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->securityIPList)) {
            $query['SecurityIPList'] = $request->securityIPList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityIps',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySecurityIpsRequest $request
     *
     * @return ModifySecurityIpsResponse
     */
    public function modifySecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityIpsWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseInstancePublicConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->currentConnectionString)) {
            $query['CurrentConnectionString'] = $request->currentConnectionString;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstancePublicConnection',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseInstancePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseInstancePublicConnectionRequest $request
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstancePublicConnectionWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAccountPassword',
            'version'     => '2016-05-03',
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
     * @param RestartDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartDBInstance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartDBInstanceRequest $request
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SetDataShareInstanceRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SetDataShareInstanceResponse
     */
    public function setDataShareInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetDataShareInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceList)) {
            $request->instanceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceList, 'InstanceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceListShrink)) {
            $query['InstanceList'] = $request->instanceListShrink;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
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
            'action'      => 'SetDataShareInstance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDataShareInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDataShareInstanceRequest $request
     *
     * @return SetDataShareInstanceResponse
     */
    public function setDataShareInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDataShareInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SwitchDBInstanceNetTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SwitchDBInstanceNetTypeResponse
     */
    public function switchDBInstanceNetTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionStringPrefix)) {
            $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchDBInstanceNetType',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchDBInstanceNetTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchDBInstanceNetTypeRequest $request
     *
     * @return SwitchDBInstanceNetTypeResponse
     */
    public function switchDBInstanceNetType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDBInstanceNetTypeWithOptions($request, $runtime);
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
            'version'     => '2016-05-03',
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
            'version'     => '2016-05-03',
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

    /**
     * @param UpgradeDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpgradeDBInstanceResponse
     */
    public function upgradeDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceClass)) {
            $query['DBInstanceClass'] = $request->DBInstanceClass;
        }
        if (!Utils::isUnset($request->DBInstanceGroupCount)) {
            $query['DBInstanceGroupCount'] = $request->DBInstanceGroupCount;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->instanceSpec)) {
            $query['InstanceSpec'] = $request->instanceSpec;
        }
        if (!Utils::isUnset($request->masterNodeNum)) {
            $query['MasterNodeNum'] = $request->masterNodeNum;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->segNodeNum)) {
            $query['SegNodeNum'] = $request->segNodeNum;
        }
        if (!Utils::isUnset($request->storageSize)) {
            $query['StorageSize'] = $request->storageSize;
        }
        if (!Utils::isUnset($request->upgradeType)) {
            $query['UpgradeType'] = $request->upgradeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBInstance',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeDBInstanceRequest $request
     *
     * @return UpgradeDBInstanceResponse
     */
    public function upgradeDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeDBVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpgradeDBVersionResponse
     */
    public function upgradeDBVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->majorVersion)) {
            $query['MajorVersion'] = $request->majorVersion;
        }
        if (!Utils::isUnset($request->minorVersion)) {
            $query['MinorVersion'] = $request->minorVersion;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        if (!Utils::isUnset($request->switchTimeMode)) {
            $query['SwitchTimeMode'] = $request->switchTimeMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBVersion',
            'version'     => '2016-05-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeDBVersionRequest $request
     *
     * @return UpgradeDBVersionResponse
     */
    public function upgradeDBVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBVersionWithOptions($request, $runtime);
    }
}
