<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateAccountShrinkRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateDBInstanceShrinkRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateDBRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateDBResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateEndpointRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateEndpointResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteDBInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteDBInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteDBRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteDBResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteEndpointRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteEndpointResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeAccountAuthorityRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeAccountAuthorityResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceDataSourcesRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceDataSourcesResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstancesRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstancesResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeEndpointsRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeEndpointsResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeProcessListRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeProcessListResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSecurityIPListRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSecurityIPListResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogTrendRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogTrendResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\KillProcessRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\KillProcessResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyAccountAuthorityRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyAccountAuthorityResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyAccountAuthorityShrinkRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceClassRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceClassResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceConnectionStringRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceConnectionStringResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifySecurityIPListRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifySecurityIPListResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\RestartDBInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\RestartDBInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\StartDBInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\StartDBInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\StopDBInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\StopDBInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\UpgradeMinorVersionRequest;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\UpgradeMinorVersionResponse;
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
     * Creates a database account for an ApsaraDB for ClickHouse Enterprise Edition cluster.
     *
     * @param tmpReq - CreateAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccountResponse
     *
     * @param CreateAccountRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAccountResponse
     */
    public function createAccountWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAccountShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dmlAuthSetting) {
            $request->dmlAuthSettingShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dmlAuthSetting, 'DmlAuthSetting', 'json');
        }

        $query = [];
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dmlAuthSettingShrink) {
            @$query['DmlAuthSetting'] = $request->dmlAuthSettingShrink;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccount',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a database account for an ApsaraDB for ClickHouse Enterprise Edition cluster.
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
     * Creates an ApsaraDB for ClickHouse database.
     *
     * @param request - CreateDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBResponse
     *
     * @param CreateDBRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return CreateDBResponse
     */
    public function createDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDB',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an ApsaraDB for ClickHouse database.
     *
     * @param request - CreateDBRequest
     *
     * @returns CreateDBResponse
     *
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
     * Creates an ApsaraDB for ClickHouse cluster that runs Enterprise Edition.
     *
     * @param tmpReq - CreateDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDBInstanceResponse
     *
     * @param CreateDBInstanceRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDBInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->multiZone) {
            $request->multiZoneShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->multiZone, 'MultiZone', 'json');
        }

        $query = [];
        if (null !== $request->backupSetId) {
            @$query['BackupSetId'] = $request->backupSetId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstanceDescription) {
            @$query['DBInstanceDescription'] = $request->DBInstanceDescription;
        }

        if (null !== $request->deploySchema) {
            @$query['DeploySchema'] = $request->deploySchema;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->multiZoneShrink) {
            @$query['MultiZone'] = $request->multiZoneShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->scaleMax) {
            @$query['ScaleMax'] = $request->scaleMax;
        }

        if (null !== $request->scaleMin) {
            @$query['ScaleMin'] = $request->scaleMin;
        }

        if (null !== $request->sourceDBInstanceId) {
            @$query['SourceDBInstanceId'] = $request->sourceDBInstanceId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vswitchId) {
            @$query['VswitchId'] = $request->vswitchId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDBInstance',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDBInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an ApsaraDB for ClickHouse cluster that runs Enterprise Edition.
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
     * Applies for a public endpoint.
     *
     * @param request - CreateEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEndpointResponse
     *
     * @param CreateEndpointRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateEndpointResponse
     */
    public function createEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionPrefix) {
            @$query['ConnectionPrefix'] = $request->connectionPrefix;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBInstanceNetType) {
            @$query['DBInstanceNetType'] = $request->DBInstanceNetType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEndpoint',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Applies for a public endpoint.
     *
     * @param request - CreateEndpointRequest
     *
     * @returns CreateEndpointResponse
     *
     * @param CreateEndpointRequest $request
     *
     * @return CreateEndpointResponse
     */
    public function createEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEndpointWithOptions($request, $runtime);
    }

    /**
     * Deletes a database account from an ApsaraDB for ClickHouse cluster.
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
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccount',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a database account from an ApsaraDB for ClickHouse cluster.
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
     * Deletes an ApsaraDB for ClickHouse database.
     *
     * @param request - DeleteDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBResponse
     *
     * @param DeleteDBRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DeleteDBResponse
     */
    public function deleteDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDB',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an ApsaraDB for ClickHouse database.
     *
     * @param request - DeleteDBRequest
     *
     * @returns DeleteDBResponse
     *
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
     * Releases an ApsaraDB for ClickHouse Enterprise Edition cluster.
     *
     * @param request - DeleteDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDBInstanceResponse
     *
     * @param DeleteDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDBInstance',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDBInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Releases an ApsaraDB for ClickHouse Enterprise Edition cluster.
     *
     * @param request - DeleteDBInstanceRequest
     *
     * @returns DeleteDBInstanceResponse
     *
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
     * Releases a public endpoint.
     *
     * @param request - DeleteEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEndpointResponse
     *
     * @param DeleteEndpointRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteEndpointResponse
     */
    public function deleteEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionString) {
            @$query['ConnectionString'] = $request->connectionString;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBInstanceNetType) {
            @$query['DBInstanceNetType'] = $request->DBInstanceNetType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEndpoint',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Releases a public endpoint.
     *
     * @param request - DeleteEndpointRequest
     *
     * @returns DeleteEndpointResponse
     *
     * @param DeleteEndpointRequest $request
     *
     * @return DeleteEndpointResponse
     */
    public function deleteEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEndpointWithOptions($request, $runtime);
    }

    /**
     * Queries the permissions of a database account.
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
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccountAuthority',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAccountAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAccountAuthorityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the permissions of a database account.
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
     * Queries database accounts for an ApsaraDB for ClickHouse cluster.
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
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccounts',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAccountsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries database accounts for an ApsaraDB for ClickHouse cluster.
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
     * Queries the details of an ApsaraDB for ClickHouse cluster that runs Enterprise Edition.
     *
     * @param request - DescribeDBInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceAttributeResponse
     *
     * @param DescribeDBInstanceAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceAttribute',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDBInstanceAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of an ApsaraDB for ClickHouse cluster that runs Enterprise Edition.
     *
     * @param request - DescribeDBInstanceAttributeRequest
     *
     * @returns DescribeDBInstanceAttributeResponse
     *
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
     * Queries the schema of a database or a table.
     *
     * @param request - DescribeDBInstanceDataSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstanceDataSourcesResponse
     *
     * @param DescribeDBInstanceDataSourcesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstanceDataSourcesResponse
     */
    public function describeDBInstanceDataSourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBName) {
            @$query['DBName'] = $request->DBName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstanceDataSources',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDBInstanceDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDBInstanceDataSourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the schema of a database or a table.
     *
     * @param request - DescribeDBInstanceDataSourcesRequest
     *
     * @returns DescribeDBInstanceDataSourcesResponse
     *
     * @param DescribeDBInstanceDataSourcesRequest $request
     *
     * @return DescribeDBInstanceDataSourcesResponse
     */
    public function describeDBInstanceDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceDataSourcesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of ApsaraDB for ClickHouse clusters.
     *
     * @param request - DescribeDBInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDBInstancesResponse
     *
     * @param DescribeDBInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceIds) {
            @$query['DBInstanceIds'] = $request->DBInstanceIds;
        }

        if (null !== $request->DBInstanceStatus) {
            @$query['DBInstanceStatus'] = $request->DBInstanceStatus;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDBInstances',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDBInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of ApsaraDB for ClickHouse clusters.
     *
     * @param request - DescribeDBInstancesRequest
     *
     * @returns DescribeDBInstancesResponse
     *
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
     * Queries the endpoint of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - DescribeEndpointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEndpointsResponse
     *
     * @param DescribeEndpointsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeEndpointsResponse
     */
    public function describeEndpointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEndpoints',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEndpointsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the endpoint of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - DescribeEndpointsRequest
     *
     * @returns DescribeEndpointsResponse
     *
     * @param DescribeEndpointsRequest $request
     *
     * @return DescribeEndpointsResponse
     */
    public function describeEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndpointsWithOptions($request, $runtime);
    }

    /**
     * Views running queries.
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
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryDurationMs) {
            @$query['QueryDurationMs'] = $request->queryDurationMs;
        }

        if (null !== $request->queryOrder) {
            @$query['QueryOrder'] = $request->queryOrder;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProcessList',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeProcessListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProcessListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Views running queries.
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
     * Queries the whitelist of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - DescribeSecurityIPListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityIPListResponse
     *
     * @param DescribeSecurityIPListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSecurityIPListResponse
     */
    public function describeSecurityIPListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityIPList',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSecurityIPListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSecurityIPListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the whitelist of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - DescribeSecurityIPListRequest
     *
     * @returns DescribeSecurityIPListResponse
     *
     * @param DescribeSecurityIPListRequest $request
     *
     * @return DescribeSecurityIPListResponse
     */
    public function describeSecurityIPList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIPListWithOptions($request, $runtime);
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
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlowLogRecords',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSlowLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSlowLogRecordsResponse::fromMap($this->execute($params, $req, $runtime));
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
     * Queries the trend of slow query logs.
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
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->queryDurationMs) {
            @$query['QueryDurationMs'] = $request->queryDurationMs;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlowLogTrend',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSlowLogTrendResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSlowLogTrendResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the trend of slow query logs.
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
     * Terminates an ongoing query.
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
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->initialQueryId) {
            @$query['InitialQueryId'] = $request->initialQueryId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'KillProcess',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return KillProcessResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return KillProcessResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Terminates an ongoing query.
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
     * Modifies the permissions of a database account.
     *
     * @param tmpReq - ModifyAccountAuthorityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccountAuthorityResponse
     *
     * @param ModifyAccountAuthorityRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyAccountAuthorityResponse
     */
    public function modifyAccountAuthorityWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAccountAuthorityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dmlAuthSetting) {
            $request->dmlAuthSettingShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dmlAuthSetting, 'DmlAuthSetting', 'json');
        }

        $query = [];
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->dmlAuthSettingShrink) {
            @$query['DmlAuthSetting'] = $request->dmlAuthSettingShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccountAuthority',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyAccountAuthorityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAccountAuthorityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the permissions of a database account.
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
     * Modifies the description of a database account.
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
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccountDescription',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAccountDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the description of a database account.
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
     * Modifies the configurations of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - ModifyDBInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceAttributeResponse
     *
     * @param ModifyDBInstanceAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDBInstanceAttributeResponse
     */
    public function modifyDBInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attributeType) {
            @$query['AttributeType'] = $request->attributeType;
        }

        if (null !== $request->attributeValue) {
            @$query['AttributeValue'] = $request->attributeValue;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceAttribute',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyDBInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDBInstanceAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - ModifyDBInstanceAttributeRequest
     *
     * @returns ModifyDBInstanceAttributeResponse
     *
     * @param ModifyDBInstanceAttributeRequest $request
     *
     * @return ModifyDBInstanceAttributeResponse
     */
    public function modifyDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the elastic scaling settings of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - ModifyDBInstanceClassRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceClassResponse
     *
     * @param ModifyDBInstanceClassRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDBInstanceClassResponse
     */
    public function modifyDBInstanceClassWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scaleMax) {
            @$query['ScaleMax'] = $request->scaleMax;
        }

        if (null !== $request->scaleMin) {
            @$query['ScaleMin'] = $request->scaleMin;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceClass',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyDBInstanceClassResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDBInstanceClassResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the elastic scaling settings of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - ModifyDBInstanceClassRequest
     *
     * @returns ModifyDBInstanceClassResponse
     *
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
     * Modifies the endpoint of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - ModifyDBInstanceConnectionStringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDBInstanceConnectionStringResponse
     *
     * @param ModifyDBInstanceConnectionStringRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionStringWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectionString) {
            @$query['ConnectionString'] = $request->connectionString;
        }

        if (null !== $request->connectionStringPrefix) {
            @$query['ConnectionStringPrefix'] = $request->connectionStringPrefix;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->DBInstanceNetType) {
            @$query['DBInstanceNetType'] = $request->DBInstanceNetType;
        }

        if (null !== $request->disablePorts) {
            @$query['DisablePorts'] = $request->disablePorts;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDBInstanceConnectionString',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyDBInstanceConnectionStringResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDBInstanceConnectionStringResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the endpoint of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - ModifyDBInstanceConnectionStringRequest
     *
     * @returns ModifyDBInstanceConnectionStringResponse
     *
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
     * Modifies the whitelist settings of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - ModifySecurityIPListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySecurityIPListResponse
     *
     * @param ModifySecurityIPListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifySecurityIPListResponse
     */
    public function modifySecurityIPListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->modifyMode) {
            @$query['ModifyMode'] = $request->modifyMode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityIPList) {
            @$query['SecurityIPList'] = $request->securityIPList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySecurityIPList',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifySecurityIPListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifySecurityIPListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the whitelist settings of an ApsaraDB for ClickHouse cluster.
     *
     * @param request - ModifySecurityIPListRequest
     *
     * @returns ModifySecurityIPListResponse
     *
     * @param ModifySecurityIPListRequest $request
     *
     * @return ModifySecurityIPListResponse
     */
    public function modifySecurityIPList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityIPListWithOptions($request, $runtime);
    }

    /**
     * Resets the password of a database account for an ApsaraDB for ClickHouse Enterprise Edition cluster.
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
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetAccountPassword',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResetAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResetAccountPasswordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Resets the password of a database account for an ApsaraDB for ClickHouse Enterprise Edition cluster.
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
     * Restarts an ApsaraDB for ClickHouse Enterprise Edition cluster.
     *
     * @param request - RestartDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartDBInstanceResponse
     *
     * @param RestartDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartDBInstance',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RestartDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RestartDBInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Restarts an ApsaraDB for ClickHouse Enterprise Edition cluster.
     *
     * @param request - RestartDBInstanceRequest
     *
     * @returns RestartDBInstanceResponse
     *
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
     * Starts an ApsaraDB for ClickHouse Enterprise Edition cluster.
     *
     * @param request - StartDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDBInstanceResponse
     *
     * @param StartDBInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartDBInstanceResponse
     */
    public function startDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartDBInstance',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartDBInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts an ApsaraDB for ClickHouse Enterprise Edition cluster.
     *
     * @param request - StartDBInstanceRequest
     *
     * @returns StartDBInstanceResponse
     *
     * @param StartDBInstanceRequest $request
     *
     * @return StartDBInstanceResponse
     */
    public function startDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDBInstanceWithOptions($request, $runtime);
    }

    /**
     * Stops an ApsaraDB for ClickHouse Enterprise Edition cluster.
     *
     * @param request - StopDBInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDBInstanceResponse
     *
     * @param StopDBInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopDBInstanceResponse
     */
    public function stopDBInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopDBInstance',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopDBInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopDBInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops an ApsaraDB for ClickHouse Enterprise Edition cluster.
     *
     * @param request - StopDBInstanceRequest
     *
     * @returns StopDBInstanceResponse
     *
     * @param StopDBInstanceRequest $request
     *
     * @return StopDBInstanceResponse
     */
    public function stopDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDBInstanceWithOptions($request, $runtime);
    }

    /**
     * Updates the minor engine version of an ApsaraDB for ClickHouse cluster that runs Enterprise Edition.
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
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        if (null !== $request->switchTimeMode) {
            @$query['SwitchTimeMode'] = $request->switchTimeMode;
        }

        if (null !== $request->targetMinorVersion) {
            @$query['TargetMinorVersion'] = $request->targetMinorVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeMinorVersion',
            'version' => '2023-05-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpgradeMinorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeMinorVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the minor engine version of an ApsaraDB for ClickHouse cluster that runs Enterprise Edition.
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
