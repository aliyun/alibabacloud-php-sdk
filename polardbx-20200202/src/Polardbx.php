<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CancelActiveOperationTasksRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CancelActiveOperationTasksResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CancelPolarxOrderRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CancelPolarxOrderResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CheckCloudResourceAuthorizedRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CheckCloudResourceAuthorizedResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateDBRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateDBResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreatePolarxOrderRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreatePolarxOrderResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateSuperAccountRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\CreateSuperAccountResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DeleteDBInstanceRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DeleteDBInstanceResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DeleteDBRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DeleteDBResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeAccountListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeAccountListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeActiveOperationMaintainConfRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeActiveOperationMaintainConfResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeActiveOperationTaskCountRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeActiveOperationTaskCountResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeActiveOperationTasksRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeActiveOperationTasksResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupSetListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupSetListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBinaryLogListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBinaryLogListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCharacterSetRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCharacterSetResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceConfigRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceConfigResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceSSLRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceSSLResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTDERequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTDEResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDbListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDbListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBNodePerformanceRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBNodePerformanceResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDistributeTableListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDistributeTableListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeEventsRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeEventsResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParameterTemplatesRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParameterTemplatesResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePolarxDataNodesRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePolarxDataNodesResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePolarxDbInstancesRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePolarxDbInstancesResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeScaleOutMigrateTaskListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeScaleOutMigrateTaskListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSecurityIpsRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSecurityIpsResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeUserEncryptionKeyListRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeUserEncryptionKeyListResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\GetPolarxCommodityRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\GetPolarxCommodityResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyActiveOperationMaintainConfRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyActiveOperationMaintainConfResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyActiveOperationTasksRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyActiveOperationTasksResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDatabaseDescriptionRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDatabaseDescriptionResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceClassRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceClassResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceConfigRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceConfigResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceDescriptionRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyDBInstanceDescriptionResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyParameterRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifyParameterResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ReleaseInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\ReleaseInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\RestartDBInstanceRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\RestartDBInstanceResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdateBackupPolicyRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdateBackupPolicyResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdateDBInstanceSSLRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdateDBInstanceSSLResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdateDBInstanceTDERequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdateDBInstanceTDEResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdatePolarDBXInstanceNodeRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdatePolarDBXInstanceNodeResponse;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpgradeDBInstanceKernelVersionRequest;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\UpgradeDBInstanceKernelVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Polardbx extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'polardbx.aliyuncs.com',
            'ap-northeast-2-pop'          => 'polardbx.aliyuncs.com',
            'ap-south-1'                  => 'polardbx.aliyuncs.com',
            'ap-southeast-2'              => 'polardbx.aliyuncs.com',
            'ap-southeast-3'              => 'polardbx.aliyuncs.com',
            'ap-southeast-5'              => 'polardbx.aliyuncs.com',
            'cn-beijing-finance-1'        => 'polardbx.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'polardbx.aliyuncs.com',
            'cn-beijing-gov-1'            => 'polardbx.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'polardbx.aliyuncs.com',
            'cn-edge-1'                   => 'polardbx.aliyuncs.com',
            'cn-fujian'                   => 'polardbx.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'polardbx.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'polardbx.aliyuncs.com',
            'cn-hangzhou-finance'         => 'polardbx.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'polardbx.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'polardbx.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'polardbx.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'polardbx.aliyuncs.com',
            'cn-north-2-gov-1'            => 'polardbx.aliyuncs.com',
            'cn-qingdao-nebula'           => 'polardbx.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'polardbx.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'polardbx.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'polardbx.aliyuncs.com',
            'cn-shanghai-inner'           => 'polardbx.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'polardbx.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'polardbx.aliyuncs.com',
            'cn-shenzhen-inner'           => 'polardbx.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'polardbx.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'polardbx.aliyuncs.com',
            'cn-wuhan'                    => 'polardbx.aliyuncs.com',
            'cn-wulanchabu'               => 'polardbx.aliyuncs.com',
            'cn-yushanfang'               => 'polardbx.aliyuncs.com',
            'cn-zhangbei'                 => 'polardbx.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'polardbx.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'polardbx.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'polardbx.aliyuncs.com',
            'eu-central-1'                => 'polardbx.aliyuncs.com',
            'eu-west-1'                   => 'polardbx.aliyuncs.com',
            'eu-west-1-oxs'               => 'polardbx.aliyuncs.com',
            'me-east-1'                   => 'polardbx.aliyuncs.com',
            'rus-west-1-pop'              => 'polardbx.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('polardbx', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AllocateInstancePublicConnectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        $query['DBInstanceName']         = $request->DBInstanceName;
        $query['OwnerAccount']           = $request->ownerAccount;
        $query['OwnerId']                = $request->ownerId;
        $query['Port']                   = $request->port;
        $query['RegionId']               = $request->regionId;
        $query['ResourceOwnerAccount']   = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']        = $request->resourceOwnerId;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AllocateInstancePublicConnection',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param CancelActiveOperationTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CancelActiveOperationTasksResponse
     */
    public function cancelActiveOperationTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelActiveOperationTasks',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CancelPolarxOrderRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CancelPolarxOrderResponse
     */
    public function cancelPolarxOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $query['ScaleOutToken']  = $request->scaleOutToken;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CancelPolarxOrder',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelPolarxOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelPolarxOrderRequest $request
     *
     * @return CancelPolarxOrderResponse
     */
    public function cancelPolarxOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelPolarxOrderWithOptions($request, $runtime);
    }

    /**
     * @param CheckCloudResourceAuthorizedRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CheckCloudResourceAuthorizedResponse
     */
    public function checkCloudResourceAuthorizedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $query['RoleArn']        = $request->roleArn;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CheckCloudResourceAuthorized',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckCloudResourceAuthorizedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckCloudResourceAuthorizedRequest $request
     *
     * @return CheckCloudResourceAuthorizedResponse
     */
    public function checkCloudResourceAuthorized($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCloudResourceAuthorizedWithOptions($request, $runtime);
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
        $query                            = [];
        $query['AccountDescription']      = $request->accountDescription;
        $query['AccountName']             = $request->accountName;
        $query['AccountPassword']         = $request->accountPassword;
        $query['AccountPrivilege']        = $request->accountPrivilege;
        $query['DBInstanceName']          = $request->DBInstanceName;
        $query['DBName']                  = $request->DBName;
        $query['RegionId']                = $request->regionId;
        $query['SecurityAccountName']     = $request->securityAccountName;
        $query['SecurityAccountPassword'] = $request->securityAccountPassword;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateAccount',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param CreateBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBackupResponse
     */
    public function createBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['BackupType']     = $request->backupType;
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateBackup',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateBackupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateDBRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return CreateDBResponse
     */
    public function createDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['AccountName']             = $request->accountName;
        $query['AccountPrivilege']        = $request->accountPrivilege;
        $query['Charset']                 = $request->charset;
        $query['DBInstanceName']          = $request->DBInstanceName;
        $query['DbDescription']           = $request->dbDescription;
        $query['DbName']                  = $request->dbName;
        $query['RegionId']                = $request->regionId;
        $query['SecurityAccountName']     = $request->securityAccountName;
        $query['SecurityAccountPassword'] = $request->securityAccountPassword;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDB',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDBRequest $request
     *
     * @return CreateDBResponse
     */
    public function createDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBWithOptions($request, $runtime);
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
        $query                          = [];
        $query['AutoRenew']             = $request->autoRenew;
        $query['ClientToken']           = $request->clientToken;
        $query['DBNodeClass']           = $request->DBNodeClass;
        $query['DBNodeCount']           = $request->DBNodeCount;
        $query['EngineVersion']         = $request->engineVersion;
        $query['IsReadDBInstance']      = $request->isReadDBInstance;
        $query['NetworkType']           = $request->networkType;
        $query['PayType']               = $request->payType;
        $query['Period']                = $request->period;
        $query['PrimaryDBInstanceName'] = $request->primaryDBInstanceName;
        $query['RegionId']              = $request->regionId;
        $query['ResourceGroupId']       = $request->resourceGroupId;
        $query['UsedTime']              = $request->usedTime;
        $query['VPCId']                 = $request->VPCId;
        $query['VSwitchId']             = $request->vSwitchId;
        $query['ZoneId']                = $request->zoneId;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDBInstance',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param CreatePolarxOrderRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePolarxOrderResponse
     */
    public function createPolarxOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['NodeCount']      = $request->nodeCount;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreatePolarxOrder',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePolarxOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePolarxOrderRequest $request
     *
     * @return CreatePolarxOrderResponse
     */
    public function createPolarxOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolarxOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateSuperAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSuperAccountResponse
     */
    public function createSuperAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['AccountDescription'] = $request->accountDescription;
        $query['AccountName']        = $request->accountName;
        $query['AccountPassword']    = $request->accountPassword;
        $query['DBInstanceName']     = $request->DBInstanceName;
        $query['RegionId']           = $request->regionId;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateSuperAccount',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSuperAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSuperAccountRequest $request
     *
     * @return CreateSuperAccountResponse
     */
    public function createSuperAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSuperAccountWithOptions($request, $runtime);
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
        $query                            = [];
        $query['AccountName']             = $request->accountName;
        $query['DBInstanceName']          = $request->DBInstanceName;
        $query['RegionId']                = $request->regionId;
        $query['SecurityAccountName']     = $request->securityAccountName;
        $query['SecurityAccountPassword'] = $request->securityAccountPassword;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccount',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DeleteDBRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DeleteDBResponse
     */
    public function deleteDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['DbName']         = $request->dbName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteDB',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDBRequest $request
     *
     * @return DeleteDBResponse
     */
    public function deleteDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBWithOptions($request, $runtime);
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
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteDBInstance',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeAccountListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAccountListResponse
     */
    public function describeAccountListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AccountName']    = $request->accountName;
        $query['AccountType']    = $request->accountType;
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccountList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAccountListRequest $request
     *
     * @return DescribeAccountListResponse
     */
    public function describeAccountList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeActiveOperationMaintainConfRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeActiveOperationMaintainConfResponse
     */
    public function describeActiveOperationMaintainConfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['RegionId'] = $request->regionId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeActiveOperationMaintainConf',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeActiveOperationMaintainConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeActiveOperationTaskCountRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeActiveOperationTaskCountResponse
     */
    public function describeActiveOperationTaskCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeActiveOperationTaskCount',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeActiveOperationTaskCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeActiveOperationTaskCountRequest $request
     *
     * @return DescribeActiveOperationTaskCountResponse
     */
    public function describeActiveOperationTaskCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveOperationTaskCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeActiveOperationTasksRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeActiveOperationTasksResponse
     */
    public function describeActiveOperationTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeActiveOperationTasks',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeBackupPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeBackupSetListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBackupSetListResponse
     */
    public function describeBackupSetListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupSetList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupSetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupSetListRequest $request
     *
     * @return DescribeBackupSetListResponse
     */
    public function describeBackupSetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupSetListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBinaryLogListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBinaryLogListResponse
     */
    public function describeBinaryLogListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['EndTime']        = $request->endTime;
        $query['PageNumber']     = $request->pageNumber;
        $query['PageSize']       = $request->pageSize;
        $query['RegionId']       = $request->regionId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeBinaryLogList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBinaryLogListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBinaryLogListRequest $request
     *
     * @return DescribeBinaryLogListResponse
     */
    public function describeBinaryLogList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBinaryLogListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCharacterSetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCharacterSetResponse
     */
    public function describeCharacterSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCharacterSet',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCharacterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCharacterSetRequest $request
     *
     * @return DescribeCharacterSetResponse
     */
    public function describeCharacterSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCharacterSetWithOptions($request, $runtime);
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
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceAttribute',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeDBInstanceConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBInstanceConfigResponse
     */
    public function describeDBInstanceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['ConfigName']     = $request->configName;
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceConfig',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceConfigRequest $request
     *
     * @return DescribeDBInstanceConfigResponse
     */
    public function describeDBInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceConfigWithOptions($request, $runtime);
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
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceSSL',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeDBInstanceTDERequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDBInstanceTDEResponse
     */
    public function describeDBInstanceTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceTDE',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceTDERequest $request
     *
     * @return DescribeDBInstanceTDEResponse
     */
    public function describeDBInstanceTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceTopologyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBInstanceTopologyResponse
     */
    public function describeDBInstanceTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstanceTopology',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBInstanceTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDBInstanceTopologyRequest $request
     *
     * @return DescribeDBInstanceTopologyResponse
     */
    public function describeDBInstanceTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceTopologyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['RegionId']   = $request->regionId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBInstances',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeDBNodePerformanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBNodePerformanceResponse
     */
    public function describeDBNodePerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['CharacterType']  = $request->characterType;
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['DBNodeIds']      = $request->DBNodeIds;
        $query['DBNodeRole']     = $request->DBNodeRole;
        $query['EndTime']        = $request->endTime;
        $query['Key']            = $request->key;
        $query['RegionId']       = $request->regionId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDBNodePerformance',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDBNodePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeDbListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDbListResponse
     */
    public function describeDbListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['DBName']         = $request->DBName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDbList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDbListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDbListRequest $request
     *
     * @return DescribeDbListResponse
     */
    public function describeDbList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDbListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDistributeTableListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDistributeTableListResponse
     */
    public function describeDistributeTableListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['DbName']         = $request->dbName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDistributeTableList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDistributeTableListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDistributeTableListRequest $request
     *
     * @return DescribeDistributeTableListResponse
     */
    public function describeDistributeTableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDistributeTableListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEventsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeEventsResponse
     */
    public function describeEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEvents',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEventsRequest $request
     *
     * @return DescribeEventsResponse
     */
    public function describeEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsWithOptions($request, $runtime);
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
        $query                 = [];
        $query['DBInstanceId'] = $request->DBInstanceId;
        $query['ParamLevel']   = $request->paramLevel;
        $query['RegionId']     = $request->regionId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameterTemplates',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeParameterTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeParametersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeParametersResponse
     */
    public function describeParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['DBInstanceId'] = $request->DBInstanceId;
        $query['ParamLevel']   = $request->paramLevel;
        $query['RegionId']     = $request->regionId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameters',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribePolarxDataNodesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePolarxDataNodesResponse
     */
    public function describePolarxDataNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['RegionId']   = $request->regionId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribePolarxDataNodes',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePolarxDataNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePolarxDataNodesRequest $request
     *
     * @return DescribePolarxDataNodesResponse
     */
    public function describePolarxDataNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolarxDataNodesWithOptions($request, $runtime);
    }

    /**
     * @param DescribePolarxDbInstancesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePolarxDbInstancesResponse
     */
    public function describePolarxDbInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DbName']         = $request->dbName;
        $query['DrdsInstanceId'] = $request->drdsInstanceId;
        $query['PageNumber']     = $request->pageNumber;
        $query['PageSize']       = $request->pageSize;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribePolarxDbInstances',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribePolarxDbInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePolarxDbInstancesRequest $request
     *
     * @return DescribePolarxDbInstancesResponse
     */
    public function describePolarxDbInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolarxDbInstancesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @param DescribeScaleOutMigrateTaskListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeScaleOutMigrateTaskListResponse
     */
    public function describeScaleOutMigrateTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['DBInstanceName']       = $request->DBInstanceName;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeScaleOutMigrateTaskList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeScaleOutMigrateTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScaleOutMigrateTaskListRequest $request
     *
     * @return DescribeScaleOutMigrateTaskListResponse
     */
    public function describeScaleOutMigrateTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScaleOutMigrateTaskListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityIpsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSecurityIpsResponse
     */
    public function describeSecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityIps',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSecurityIpsRequest $request
     *
     * @return DescribeSecurityIpsResponse
     */
    public function describeSecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIpsWithOptions($request, $runtime);
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
        $query                         = [];
        $query['DBInstanceId']         = $request->DBInstanceId;
        $query['EndTime']              = $request->endTime;
        $query['OwnerAccount']         = $request->ownerAccount;
        $query['OwnerId']              = $request->ownerId;
        $query['PageNumber']           = $request->pageNumber;
        $query['PageSize']             = $request->pageSize;
        $query['RegionId']             = $request->regionId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['StartTime']            = $request->startTime;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeTasks',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeUserEncryptionKeyListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUserEncryptionKeyListResponse
     */
    public function describeUserEncryptionKeyListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserEncryptionKeyList',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param GetPolarxCommodityRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPolarxCommodityResponse
     */
    public function getPolarxCommodityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['OrderType']      = $request->orderType;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetPolarxCommodity',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPolarxCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPolarxCommodityRequest $request
     *
     * @return GetPolarxCommodityResponse
     */
    public function getPolarxCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolarxCommodityWithOptions($request, $runtime);
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
        $query                       = [];
        $query['AccountDescription'] = $request->accountDescription;
        $query['AccountName']        = $request->accountName;
        $query['DBInstanceName']     = $request->DBInstanceName;
        $query['RegionId']           = $request->regionId;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountDescription',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ModifyActiveOperationMaintainConfRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyActiveOperationMaintainConfResponse
     */
    public function modifyActiveOperationMaintainConfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyActiveOperationMaintainConf',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyActiveOperationMaintainConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyActiveOperationTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyActiveOperationTasksResponse
     */
    public function modifyActiveOperationTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['Ids']            = $request->ids;
        $query['ImmediateStart'] = $request->immediateStart;
        $query['RegionId']       = $request->regionId;
        $query['SwitchTime']     = $request->switchTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyActiveOperationTasks',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyActiveOperationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyDBInstanceClassRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDBInstanceClassResponse
     */
    public function modifyDBInstanceClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['ClientToken']           = $request->clientToken;
        $query['DBInstanceName']        = $request->DBInstanceName;
        $query['RegionId']              = $request->regionId;
        $query['TargetDBInstanceClass'] = $request->targetDBInstanceClass;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceClass',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceClassRequest $request
     *
     * @return ModifyDBInstanceClassResponse
     */
    public function modifyDBInstanceClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceClassWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDBInstanceConfigResponse
     */
    public function modifyDBInstanceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['ConfigName']     = $request->configName;
        $query['ConfigValue']    = $request->configValue;
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceConfig',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDBInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceConfigRequest $request
     *
     * @return ModifyDBInstanceConfigResponse
     */
    public function modifyDBInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConfigWithOptions($request, $runtime);
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
        $query                          = [];
        $query['DBInstanceDescription'] = $request->DBInstanceDescription;
        $query['DBInstanceName']        = $request->DBInstanceName;
        $query['RegionId']              = $request->regionId;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDBInstanceDescription',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ModifyDatabaseDescriptionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDatabaseDescriptionResponse
     */
    public function modifyDatabaseDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['DbDescription']  = $request->dbDescription;
        $query['DbName']         = $request->dbName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyDatabaseDescription',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDatabaseDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDatabaseDescriptionRequest $request
     *
     * @return ModifyDatabaseDescriptionResponse
     */
    public function modifyDatabaseDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyParameterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyParameterResponse
     */
    public function modifyParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['ClientToken']  = $request->clientToken;
        $query['DBInstanceId'] = $request->DBInstanceId;
        $query['ParamLevel']   = $request->paramLevel;
        $query['Parameters']   = $request->parameters;
        $query['RegionId']     = $request->regionId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyParameter',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyParameterRequest $request
     *
     * @return ModifyParameterResponse
     */
    public function modifyParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParameterWithOptions($request, $runtime);
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
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['GroupName']      = $request->groupName;
        $query['ModifyMode']     = $request->modifyMode;
        $query['RegionId']       = $request->regionId;
        $query['SecurityIPList'] = $request->securityIPList;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityIps',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                            = [];
        $query['CurrentConnectionString'] = $request->currentConnectionString;
        $query['DBInstanceName']          = $request->DBInstanceName;
        $query['OwnerAccount']            = $request->ownerAccount;
        $query['OwnerId']                 = $request->ownerId;
        $query['RegionId']                = $request->regionId;
        $query['ResourceOwnerAccount']    = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']         = $request->resourceOwnerId;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstancePublicConnection',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param RestartDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RestartDBInstance',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param UpdateBackupPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateBackupPolicyResponse
     */
    public function updateBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                               = [];
        $query['BackupPeriod']               = $request->backupPeriod;
        $query['BackupPlanBegin']            = $request->backupPlanBegin;
        $query['BackupSetRetention']         = $request->backupSetRetention;
        $query['BackupType']                 = $request->backupType;
        $query['BackupWay']                  = $request->backupWay;
        $query['DBInstanceName']             = $request->DBInstanceName;
        $query['ForceCleanOnHighSpaceUsage'] = $request->forceCleanOnHighSpaceUsage;
        $query['IsEnabled']                  = $request->isEnabled;
        $query['LocalLogRetention']          = $request->localLogRetention;
        $query['LogLocalRetentionSpace']     = $request->logLocalRetentionSpace;
        $query['RegionId']                   = $request->regionId;
        $query['RemoveLogRetention']         = $request->removeLogRetention;
        $req                                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateBackupPolicy',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBackupPolicyRequest $request
     *
     * @return UpdateBackupPolicyResponse
     */
    public function updateBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDBInstanceSSLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDBInstanceSSLResponse
     */
    public function updateDBInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['CertCommonName'] = $request->certCommonName;
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['EnableSSL']      = $request->enableSSL;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateDBInstanceSSL',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDBInstanceSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDBInstanceSSLRequest $request
     *
     * @return UpdateDBInstanceSSLResponse
     */
    public function updateDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDBInstanceTDERequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDBInstanceTDEResponse
     */
    public function updateDBInstanceTDEWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['EncryptionKey']  = $request->encryptionKey;
        $query['RegionId']       = $request->regionId;
        $query['RoleArn']        = $request->roleArn;
        $query['TDEStatus']      = $request->TDEStatus;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateDBInstanceTDE',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDBInstanceTDEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDBInstanceTDERequest $request
     *
     * @return UpdateDBInstanceTDEResponse
     */
    public function updateDBInstanceTDE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDBInstanceTDEWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePolarDBXInstanceNodeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdatePolarDBXInstanceNodeResponse
     */
    public function updatePolarDBXInstanceNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClientToken']         = $request->clientToken;
        $query['DBInstanceName']      = $request->DBInstanceName;
        $query['DbInstanceNodeCount'] = $request->dbInstanceNodeCount;
        $query['RegionId']            = $request->regionId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdatePolarDBXInstanceNode',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePolarDBXInstanceNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePolarDBXInstanceNodeRequest $request
     *
     * @return UpdatePolarDBXInstanceNodeResponse
     */
    public function updatePolarDBXInstanceNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePolarDBXInstanceNodeWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeDBInstanceKernelVersionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['DBInstanceName'] = $request->DBInstanceName;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpgradeDBInstanceKernelVersion',
            'version'     => '2020-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpgradeDBInstanceKernelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeDBInstanceKernelVersionRequest $request
     *
     * @return UpgradeDBInstanceKernelVersionResponse
     */
    public function upgradeDBInstanceKernelVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceKernelVersionWithOptions($request, $runtime);
    }
}
