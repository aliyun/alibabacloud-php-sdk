<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ConfigureBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ConfigureBackupPlanResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateAndStartBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateAndStartBackupPlanResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateBackupPlanResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateFullBackupSetDownloadRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateFullBackupSetDownloadResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateGetDBListFromAgentTaskRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateGetDBListFromAgentTaskResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateIncrementBackupSetDownloadRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateIncrementBackupSetDownloadResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateRestoreTaskRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\CreateRestoreTaskResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupGatewayListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupGatewayListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupPlanBillingRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupPlanBillingResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupPlanListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupPlanListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupSetDownloadTaskListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupSetDownloadTaskListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeDLAServiceRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeDLAServiceResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeFullBackupListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeFullBackupListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeIncrementBackupListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeIncrementBackupListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeJobErrorCodeRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeJobErrorCodeResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeNodeCidrListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeNodeCidrListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribePreCheckProgressListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribePreCheckProgressListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreTaskListRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreTaskListResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DisableBackupLogRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DisableBackupLogResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\EnableBackupLogRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\EnableBackupLogResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\GetDBListFromAgentRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\GetDBListFromAgentResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\InitializeDbsServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupObjectsRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupObjectsResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupPlanNameRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupPlanNameResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupSetDownloadRulesRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupSetDownloadRulesResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupSourceEndpointRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupSourceEndpointResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupStrategyRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyBackupStrategyResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyStorageStrategyRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ModifyStorageStrategyResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ReleaseBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\ReleaseBackupPlanResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\RenewBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\RenewBackupPlanResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\StartBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\StartBackupPlanResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\StartRestoreTaskRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\StartRestoreTaskResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\StopBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\StopBackupPlanResponse;
use AlibabaCloud\SDK\Dbs\V20190306\Models\UpgradeBackupPlanRequest;
use AlibabaCloud\SDK\Dbs\V20190306\Models\UpgradeBackupPlanResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dbs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'Dbs';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-beijing' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-chengdu' => 'dbs-api.cn-chengdu.aliyuncs.com',
            'cn-zhangjiakou' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-huhehaote' => 'dbs-api.cn-huhehaote.aliyuncs.com',
            'cn-hangzhou' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shanghai' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-hongkong' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'ap-southeast-1' => 'dbs-api.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'dbs-api.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3' => 'dbs-api.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5' => 'dbs-api.ap-southeast-5.aliyuncs.com',
            'ap-northeast-1' => 'dbs-api.ap-northeast-1.aliyuncs.com',
            'us-west-1' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'us-east-1' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'eu-central-1' => 'dbs-api.eu-central-1.aliyuncs.com',
            'cn-hangzhou-finance' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shanghai-finance-1' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'ap-south-1' => 'dbs-api.ap-south-1.aliyuncs.com',
            'eu-west-1' => 'dbs-api.eu-west-1.aliyuncs.com',
            'me-east-1' => 'dbs-api.me-east-1.aliyuncs.com',
            'cn-wulanchabu' => 'dbs-api.cn-wulanchabu.aliyuncs.com',
            'cn-guangzhou' => 'dbs-api.cn-guangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dbs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Configures a Database Backup (DBS) backup plan.
     *
     * @param request - ConfigureBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigureBackupPlanResponse
     *
     * @param ConfigureBackupPlanRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ConfigureBackupPlanResponse
     */
    public function configureBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoStartBackup) {
            @$query['AutoStartBackup'] = $request->autoStartBackup;
        }

        if (null !== $request->backupGatewayId) {
            @$query['BackupGatewayId'] = $request->backupGatewayId;
        }

        if (null !== $request->backupLogIntervalSeconds) {
            @$query['BackupLogIntervalSeconds'] = $request->backupLogIntervalSeconds;
        }

        if (null !== $request->backupObjects) {
            @$query['BackupObjects'] = $request->backupObjects;
        }

        if (null !== $request->backupPeriod) {
            @$query['BackupPeriod'] = $request->backupPeriod;
        }

        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->backupPlanName) {
            @$query['BackupPlanName'] = $request->backupPlanName;
        }

        if (null !== $request->backupRateLimit) {
            @$query['BackupRateLimit'] = $request->backupRateLimit;
        }

        if (null !== $request->backupRetentionPeriod) {
            @$query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }

        if (null !== $request->backupSpeedLimit) {
            @$query['BackupSpeedLimit'] = $request->backupSpeedLimit;
        }

        if (null !== $request->backupStartTime) {
            @$query['BackupStartTime'] = $request->backupStartTime;
        }

        if (null !== $request->backupStorageEncryptMethod) {
            @$query['BackupStorageEncryptMethod'] = $request->backupStorageEncryptMethod;
        }

        if (null !== $request->backupStorageType) {
            @$query['BackupStorageType'] = $request->backupStorageType;
        }

        if (null !== $request->backupStrategyType) {
            @$query['BackupStrategyType'] = $request->backupStrategyType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->crossAliyunId) {
            @$query['CrossAliyunId'] = $request->crossAliyunId;
        }

        if (null !== $request->crossRoleName) {
            @$query['CrossRoleName'] = $request->crossRoleName;
        }

        if (null !== $request->duplicationArchivePeriod) {
            @$query['DuplicationArchivePeriod'] = $request->duplicationArchivePeriod;
        }

        if (null !== $request->duplicationInfrequentAccessPeriod) {
            @$query['DuplicationInfrequentAccessPeriod'] = $request->duplicationInfrequentAccessPeriod;
        }

        if (null !== $request->enableBackupLog) {
            @$query['EnableBackupLog'] = $request->enableBackupLog;
        }

        if (null !== $request->enableMysqlPhysicalBackupBinlog) {
            @$query['EnableMysqlPhysicalBackupBinlog'] = $request->enableMysqlPhysicalBackupBinlog;
        }

        if (null !== $request->enableSourceEndpointSsl) {
            @$query['EnableSourceEndpointSsl'] = $request->enableSourceEndpointSsl;
        }

        if (null !== $request->OSSBucketName) {
            @$query['OSSBucketName'] = $request->OSSBucketName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceEndpointDatabaseName) {
            @$query['SourceEndpointDatabaseName'] = $request->sourceEndpointDatabaseName;
        }

        if (null !== $request->sourceEndpointIP) {
            @$query['SourceEndpointIP'] = $request->sourceEndpointIP;
        }

        if (null !== $request->sourceEndpointInstanceID) {
            @$query['SourceEndpointInstanceID'] = $request->sourceEndpointInstanceID;
        }

        if (null !== $request->sourceEndpointInstanceType) {
            @$query['SourceEndpointInstanceType'] = $request->sourceEndpointInstanceType;
        }

        if (null !== $request->sourceEndpointOracleHome) {
            @$query['SourceEndpointOracleHome'] = $request->sourceEndpointOracleHome;
        }

        if (null !== $request->sourceEndpointOracleSID) {
            @$query['SourceEndpointOracleSID'] = $request->sourceEndpointOracleSID;
        }

        if (null !== $request->sourceEndpointPassword) {
            @$query['SourceEndpointPassword'] = $request->sourceEndpointPassword;
        }

        if (null !== $request->sourceEndpointPort) {
            @$query['SourceEndpointPort'] = $request->sourceEndpointPort;
        }

        if (null !== $request->sourceEndpointRegion) {
            @$query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }

        if (null !== $request->sourceEndpointUserName) {
            @$query['SourceEndpointUserName'] = $request->sourceEndpointUserName;
        }

        if (null !== $request->sslCaPem) {
            @$query['SslCaPem'] = $request->sslCaPem;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigureBackupPlan',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigureBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a Database Backup (DBS) backup plan.
     *
     * @param request - ConfigureBackupPlanRequest
     *
     * @returns ConfigureBackupPlanResponse
     *
     * @param ConfigureBackupPlanRequest $request
     *
     * @return ConfigureBackupPlanResponse
     */
    public function configureBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Creates, configures, and starts a backup plan.
     *
     * @remarks
     * Before you call this operation, ensure that you understand the [billing methods and pricing](https://help.aliyun.com/document_detail/70005.html) of Database Backup (DBS).
     *
     * @param request - CreateAndStartBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAndStartBackupPlanResponse
     *
     * @param CreateAndStartBackupPlanRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAndStartBackupPlanResponse
     */
    public function createAndStartBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupGatewayId) {
            @$query['BackupGatewayId'] = $request->backupGatewayId;
        }

        if (null !== $request->backupLogIntervalSeconds) {
            @$query['BackupLogIntervalSeconds'] = $request->backupLogIntervalSeconds;
        }

        if (null !== $request->backupMethod) {
            @$query['BackupMethod'] = $request->backupMethod;
        }

        if (null !== $request->backupObjects) {
            @$query['BackupObjects'] = $request->backupObjects;
        }

        if (null !== $request->backupPeriod) {
            @$query['BackupPeriod'] = $request->backupPeriod;
        }

        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->backupPlanName) {
            @$query['BackupPlanName'] = $request->backupPlanName;
        }

        if (null !== $request->backupRateLimit) {
            @$query['BackupRateLimit'] = $request->backupRateLimit;
        }

        if (null !== $request->backupRetentionPeriod) {
            @$query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }

        if (null !== $request->backupSpeedLimit) {
            @$query['BackupSpeedLimit'] = $request->backupSpeedLimit;
        }

        if (null !== $request->backupStartTime) {
            @$query['BackupStartTime'] = $request->backupStartTime;
        }

        if (null !== $request->backupStorageType) {
            @$query['BackupStorageType'] = $request->backupStorageType;
        }

        if (null !== $request->backupStrategyType) {
            @$query['BackupStrategyType'] = $request->backupStrategyType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->crossAliyunId) {
            @$query['CrossAliyunId'] = $request->crossAliyunId;
        }

        if (null !== $request->crossRoleName) {
            @$query['CrossRoleName'] = $request->crossRoleName;
        }

        if (null !== $request->databaseRegion) {
            @$query['DatabaseRegion'] = $request->databaseRegion;
        }

        if (null !== $request->databaseType) {
            @$query['DatabaseType'] = $request->databaseType;
        }

        if (null !== $request->duplicationArchivePeriod) {
            @$query['DuplicationArchivePeriod'] = $request->duplicationArchivePeriod;
        }

        if (null !== $request->duplicationInfrequentAccessPeriod) {
            @$query['DuplicationInfrequentAccessPeriod'] = $request->duplicationInfrequentAccessPeriod;
        }

        if (null !== $request->enableBackupLog) {
            @$query['EnableBackupLog'] = $request->enableBackupLog;
        }

        if (null !== $request->fromApp) {
            @$query['FromApp'] = $request->fromApp;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->OSSBucketName) {
            @$query['OSSBucketName'] = $request->OSSBucketName;
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

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceEndpointDatabaseName) {
            @$query['SourceEndpointDatabaseName'] = $request->sourceEndpointDatabaseName;
        }

        if (null !== $request->sourceEndpointIP) {
            @$query['SourceEndpointIP'] = $request->sourceEndpointIP;
        }

        if (null !== $request->sourceEndpointInstanceID) {
            @$query['SourceEndpointInstanceID'] = $request->sourceEndpointInstanceID;
        }

        if (null !== $request->sourceEndpointInstanceType) {
            @$query['SourceEndpointInstanceType'] = $request->sourceEndpointInstanceType;
        }

        if (null !== $request->sourceEndpointOracleSID) {
            @$query['SourceEndpointOracleSID'] = $request->sourceEndpointOracleSID;
        }

        if (null !== $request->sourceEndpointPassword) {
            @$query['SourceEndpointPassword'] = $request->sourceEndpointPassword;
        }

        if (null !== $request->sourceEndpointPort) {
            @$query['SourceEndpointPort'] = $request->sourceEndpointPort;
        }

        if (null !== $request->sourceEndpointRegion) {
            @$query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }

        if (null !== $request->sourceEndpointUserName) {
            @$query['SourceEndpointUserName'] = $request->sourceEndpointUserName;
        }

        if (null !== $request->storageRegion) {
            @$query['StorageRegion'] = $request->storageRegion;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAndStartBackupPlan',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAndStartBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates, configures, and starts a backup plan.
     *
     * @remarks
     * Before you call this operation, ensure that you understand the [billing methods and pricing](https://help.aliyun.com/document_detail/70005.html) of Database Backup (DBS).
     *
     * @param request - CreateAndStartBackupPlanRequest
     *
     * @returns CreateAndStartBackupPlanResponse
     *
     * @param CreateAndStartBackupPlanRequest $request
     *
     * @return CreateAndStartBackupPlanResponse
     */
    public function createAndStartBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAndStartBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Creates a Database Backup Service (DBS) backup plan.
     *
     * @remarks
     * To perform this operation in the console, see [Purchase a backup plan](https://help.aliyun.com/document_detail/65909.html).
     *
     * @param request - CreateBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBackupPlanResponse
     *
     * @param CreateBackupPlanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateBackupPlanResponse
     */
    public function createBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupMethod) {
            @$query['BackupMethod'] = $request->backupMethod;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->databaseRegion) {
            @$query['DatabaseRegion'] = $request->databaseRegion;
        }

        if (null !== $request->databaseType) {
            @$query['DatabaseType'] = $request->databaseType;
        }

        if (null !== $request->fromApp) {
            @$query['FromApp'] = $request->fromApp;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
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

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->storageRegion) {
            @$query['StorageRegion'] = $request->storageRegion;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBackupPlan',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Database Backup Service (DBS) backup plan.
     *
     * @remarks
     * To perform this operation in the console, see [Purchase a backup plan](https://help.aliyun.com/document_detail/65909.html).
     *
     * @param request - CreateBackupPlanRequest
     *
     * @returns CreateBackupPlanResponse
     *
     * @param CreateBackupPlanRequest $request
     *
     * @return CreateBackupPlanResponse
     */
    public function createBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupPlanWithOptions($request, $runtime);
    }

    /**
     * This operation creates a task to download a full backup set.
     *
     * @param request - CreateFullBackupSetDownloadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFullBackupSetDownloadResponse
     *
     * @param CreateFullBackupSetDownloadRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateFullBackupSetDownloadResponse
     */
    public function createFullBackupSetDownloadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupSetDataFormat) {
            @$query['BackupSetDataFormat'] = $request->backupSetDataFormat;
        }

        if (null !== $request->backupSetId) {
            @$query['BackupSetId'] = $request->backupSetId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFullBackupSetDownload',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFullBackupSetDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation creates a task to download a full backup set.
     *
     * @param request - CreateFullBackupSetDownloadRequest
     *
     * @returns CreateFullBackupSetDownloadResponse
     *
     * @param CreateFullBackupSetDownloadRequest $request
     *
     * @return CreateFullBackupSetDownloadResponse
     */
    public function createFullBackupSetDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFullBackupSetDownloadWithOptions($request, $runtime);
    }

    /**
     * Creates a task to retrieve the database list through a backup gateway.
     *
     * @remarks
     * This API operation returns a TaskId. You can call the [GetDBListFromAgent](https://help.aliyun.com/document_detail/2869852.html) operation to query the result.
     *
     * @param request - CreateGetDBListFromAgentTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGetDBListFromAgentTaskResponse
     *
     * @param CreateGetDBListFromAgentTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateGetDBListFromAgentTaskResponse
     */
    public function createGetDBListFromAgentTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupGatewayId) {
            @$query['BackupGatewayId'] = $request->backupGatewayId;
        }

        if (null !== $request->backupGatewayIdentifier) {
            @$query['BackupGatewayIdentifier'] = $request->backupGatewayIdentifier;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->databaseType) {
            @$query['DatabaseType'] = $request->databaseType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->sourceEndpointIP) {
            @$query['SourceEndpointIP'] = $request->sourceEndpointIP;
        }

        if (null !== $request->sourceEndpointPort) {
            @$query['SourceEndpointPort'] = $request->sourceEndpointPort;
        }

        if (null !== $request->sourceEndpointRegion) {
            @$query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGetDBListFromAgentTask',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGetDBListFromAgentTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a task to retrieve the database list through a backup gateway.
     *
     * @remarks
     * This API operation returns a TaskId. You can call the [GetDBListFromAgent](https://help.aliyun.com/document_detail/2869852.html) operation to query the result.
     *
     * @param request - CreateGetDBListFromAgentTaskRequest
     *
     * @returns CreateGetDBListFromAgentTaskResponse
     *
     * @param CreateGetDBListFromAgentTaskRequest $request
     *
     * @return CreateGetDBListFromAgentTaskResponse
     */
    public function createGetDBListFromAgentTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGetDBListFromAgentTaskWithOptions($request, $runtime);
    }

    /**
     * Creates and starts an incremental backup set download task.
     *
     * @param request - CreateIncrementBackupSetDownloadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIncrementBackupSetDownloadResponse
     *
     * @param CreateIncrementBackupSetDownloadRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateIncrementBackupSetDownloadResponse
     */
    public function createIncrementBackupSetDownloadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupSetDataFormat) {
            @$query['BackupSetDataFormat'] = $request->backupSetDataFormat;
        }

        if (null !== $request->backupSetId) {
            @$query['BackupSetId'] = $request->backupSetId;
        }

        if (null !== $request->backupSetName) {
            @$query['BackupSetName'] = $request->backupSetName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIncrementBackupSetDownload',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIncrementBackupSetDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates and starts an incremental backup set download task.
     *
     * @param request - CreateIncrementBackupSetDownloadRequest
     *
     * @returns CreateIncrementBackupSetDownloadResponse
     *
     * @param CreateIncrementBackupSetDownloadRequest $request
     *
     * @return CreateIncrementBackupSetDownloadResponse
     */
    public function createIncrementBackupSetDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIncrementBackupSetDownloadWithOptions($request, $runtime);
    }

    /**
     * Creates a Database Backup (DBS) restore task.
     *
     * @remarks
     * ### Related operations
     * - [Restore a database](https://help.aliyun.com/document_detail/85543.html)
     * - [Restore configuration tutorials for various databases](https://help.aliyun.com/document_detail/197144.html)
     *
     * @param request - CreateRestoreTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRestoreTaskResponse
     *
     * @param CreateRestoreTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRestoreTaskResponse
     */
    public function createRestoreTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoOpenDatabase) {
            @$query['AutoOpenDatabase'] = $request->autoOpenDatabase;
        }

        if (null !== $request->autoShutdownDatabase) {
            @$query['AutoShutdownDatabase'] = $request->autoShutdownDatabase;
        }

        if (null !== $request->backupGatewayId) {
            @$query['BackupGatewayId'] = $request->backupGatewayId;
        }

        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->backupSetId) {
            @$query['BackupSetId'] = $request->backupSetId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->crossAliyunId) {
            @$query['CrossAliyunId'] = $request->crossAliyunId;
        }

        if (null !== $request->crossRoleName) {
            @$query['CrossRoleName'] = $request->crossRoleName;
        }

        if (null !== $request->destDatabaseInstanceClass) {
            @$query['DestDatabaseInstanceClass'] = $request->destDatabaseInstanceClass;
        }

        if (null !== $request->destDatabaseInstanceDatabaseVersion) {
            @$query['DestDatabaseInstanceDatabaseVersion'] = $request->destDatabaseInstanceDatabaseVersion;
        }

        if (null !== $request->destDatabaseInstanceRegion) {
            @$query['DestDatabaseInstanceRegion'] = $request->destDatabaseInstanceRegion;
        }

        if (null !== $request->destDatabaseInstanceStorageSize) {
            @$query['DestDatabaseInstanceStorageSize'] = $request->destDatabaseInstanceStorageSize;
        }

        if (null !== $request->destDatabaseInstanceType) {
            @$query['DestDatabaseInstanceType'] = $request->destDatabaseInstanceType;
        }

        if (null !== $request->destDatabaseInstanceVSwitch) {
            @$query['DestDatabaseInstanceVSwitch'] = $request->destDatabaseInstanceVSwitch;
        }

        if (null !== $request->destDatabaseInstanceVpc) {
            @$query['DestDatabaseInstanceVpc'] = $request->destDatabaseInstanceVpc;
        }

        if (null !== $request->destinationEndpointDatabaseName) {
            @$query['DestinationEndpointDatabaseName'] = $request->destinationEndpointDatabaseName;
        }

        if (null !== $request->destinationEndpointIP) {
            @$query['DestinationEndpointIP'] = $request->destinationEndpointIP;
        }

        if (null !== $request->destinationEndpointInstanceID) {
            @$query['DestinationEndpointInstanceID'] = $request->destinationEndpointInstanceID;
        }

        if (null !== $request->destinationEndpointInstanceType) {
            @$query['DestinationEndpointInstanceType'] = $request->destinationEndpointInstanceType;
        }

        if (null !== $request->destinationEndpointOracleSID) {
            @$query['DestinationEndpointOracleSID'] = $request->destinationEndpointOracleSID;
        }

        if (null !== $request->destinationEndpointPassword) {
            @$query['DestinationEndpointPassword'] = $request->destinationEndpointPassword;
        }

        if (null !== $request->destinationEndpointPort) {
            @$query['DestinationEndpointPort'] = $request->destinationEndpointPort;
        }

        if (null !== $request->destinationEndpointRegion) {
            @$query['DestinationEndpointRegion'] = $request->destinationEndpointRegion;
        }

        if (null !== $request->destinationEndpointUserName) {
            @$query['DestinationEndpointUserName'] = $request->destinationEndpointUserName;
        }

        if (null !== $request->duplicateConflict) {
            @$query['DuplicateConflict'] = $request->duplicateConflict;
        }

        if (null !== $request->enableDestinationEndpointSsl) {
            @$query['EnableDestinationEndpointSsl'] = $request->enableDestinationEndpointSsl;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->restoreDestinationMode) {
            @$query['RestoreDestinationMode'] = $request->restoreDestinationMode;
        }

        if (null !== $request->restoreDir) {
            @$query['RestoreDir'] = $request->restoreDir;
        }

        if (null !== $request->restoreHome) {
            @$query['RestoreHome'] = $request->restoreHome;
        }

        if (null !== $request->restoreObjects) {
            @$query['RestoreObjects'] = $request->restoreObjects;
        }

        if (null !== $request->restoreTaskName) {
            @$query['RestoreTaskName'] = $request->restoreTaskName;
        }

        if (null !== $request->restoreTime) {
            @$query['RestoreTime'] = $request->restoreTime;
        }

        if (null !== $request->sslCaPem) {
            @$query['SslCaPem'] = $request->sslCaPem;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRestoreTask',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRestoreTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Database Backup (DBS) restore task.
     *
     * @remarks
     * ### Related operations
     * - [Restore a database](https://help.aliyun.com/document_detail/85543.html)
     * - [Restore configuration tutorials for various databases](https://help.aliyun.com/document_detail/197144.html)
     *
     * @param request - CreateRestoreTaskRequest
     *
     * @returns CreateRestoreTaskResponse
     *
     * @param CreateRestoreTaskRequest $request
     *
     * @return CreateRestoreTaskResponse
     */
    public function createRestoreTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRestoreTaskWithOptions($request, $runtime);
    }

    /**
     * Queries a list of backup gateways in Database Backup Service (DBS).
     *
     * @param request - DescribeBackupGatewayListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupGatewayListResponse
     *
     * @param DescribeBackupGatewayListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeBackupGatewayListResponse
     */
    public function describeBackupGatewayListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->identifier) {
            @$query['Identifier'] = $request->identifier;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupGatewayList',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupGatewayListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of backup gateways in Database Backup Service (DBS).
     *
     * @param request - DescribeBackupGatewayListRequest
     *
     * @returns DescribeBackupGatewayListResponse
     *
     * @param DescribeBackupGatewayListRequest $request
     *
     * @return DescribeBackupGatewayListResponse
     */
    public function describeBackupGatewayList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupGatewayListWithOptions($request, $runtime);
    }

    /**
     * This operation queries the billing information of a backup plan.
     *
     * @param request - DescribeBackupPlanBillingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupPlanBillingResponse
     *
     * @param DescribeBackupPlanBillingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeBackupPlanBillingResponse
     */
    public function describeBackupPlanBillingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->showStorageType) {
            @$query['ShowStorageType'] = $request->showStorageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupPlanBilling',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupPlanBillingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation queries the billing information of a backup plan.
     *
     * @param request - DescribeBackupPlanBillingRequest
     *
     * @returns DescribeBackupPlanBillingResponse
     *
     * @param DescribeBackupPlanBillingRequest $request
     *
     * @return DescribeBackupPlanBillingResponse
     */
    public function describeBackupPlanBilling($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPlanBillingWithOptions($request, $runtime);
    }

    /**
     * Queries a DBS backup plan.
     *
     * @remarks
     * Ensure Object Storage Service (OSS) is enabled before you use this operation. For more information, see [Object Storage Service](https://help.aliyun.com/document_detail/31817.html).
     *
     * @param request - DescribeBackupPlanListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupPlanListResponse
     *
     * @param DescribeBackupPlanListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBackupPlanListResponse
     */
    public function describeBackupPlanListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupMethod) {
            @$query['BackupMethod'] = $request->backupMethod;
        }

        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->backupPlanName) {
            @$query['BackupPlanName'] = $request->backupPlanName;
        }

        if (null !== $request->backupPlanStatus) {
            @$query['BackupPlanStatus'] = $request->backupPlanStatus;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->showBackupStrategyInfo) {
            @$query['ShowBackupStrategyInfo'] = $request->showBackupStrategyInfo;
        }

        if (null !== $request->showRecoverTimeRange) {
            @$query['ShowRecoverTimeRange'] = $request->showRecoverTimeRange;
        }

        if (null !== $request->showStorageStrategyInfo) {
            @$query['ShowStorageStrategyInfo'] = $request->showStorageStrategyInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupPlanList',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupPlanListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a DBS backup plan.
     *
     * @remarks
     * Ensure Object Storage Service (OSS) is enabled before you use this operation. For more information, see [Object Storage Service](https://help.aliyun.com/document_detail/31817.html).
     *
     * @param request - DescribeBackupPlanListRequest
     *
     * @returns DescribeBackupPlanListResponse
     *
     * @param DescribeBackupPlanListRequest $request
     *
     * @return DescribeBackupPlanListResponse
     */
    public function describeBackupPlanList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPlanListWithOptions($request, $runtime);
    }

    /**
     * Queries the download list of DBS backup sets.
     *
     * @param request - DescribeBackupSetDownloadTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupSetDownloadTaskListResponse
     *
     * @param DescribeBackupSetDownloadTaskListRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeBackupSetDownloadTaskListResponse
     */
    public function describeBackupSetDownloadTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->backupSetDownloadTaskId) {
            @$query['BackupSetDownloadTaskId'] = $request->backupSetDownloadTaskId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupSetDownloadTaskList',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupSetDownloadTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the download list of DBS backup sets.
     *
     * @param request - DescribeBackupSetDownloadTaskListRequest
     *
     * @returns DescribeBackupSetDownloadTaskListResponse
     *
     * @param DescribeBackupSetDownloadTaskListRequest $request
     *
     * @return DescribeBackupSetDownloadTaskListResponse
     */
    public function describeBackupSetDownloadTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupSetDownloadTaskListWithOptions($request, $runtime);
    }

    /**
     * Queries the Data Lake Analytics (DLA) service information for a backup plan.
     *
     * @param request - DescribeDLAServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDLAServiceResponse
     *
     * @param DescribeDLAServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDLAServiceResponse
     */
    public function describeDLAServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDLAService',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDLAServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Data Lake Analytics (DLA) service information for a backup plan.
     *
     * @param request - DescribeDLAServiceRequest
     *
     * @returns DescribeDLAServiceResponse
     *
     * @param DescribeDLAServiceRequest $request
     *
     * @return DescribeDLAServiceResponse
     */
    public function describeDLAService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDLAServiceWithOptions($request, $runtime);
    }

    /**
     * Queries the list of full backup tasks in Database Backup (DBS).
     *
     * @param request - DescribeFullBackupListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFullBackupListResponse
     *
     * @param DescribeFullBackupListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeFullBackupListResponse
     */
    public function describeFullBackupListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->backupSetId) {
            @$query['BackupSetId'] = $request->backupSetId;
        }

        if (null !== $request->backupSetStatus) {
            @$query['BackupSetStatus'] = $request->backupSetStatus;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->showProgress) {
            @$query['ShowProgress'] = $request->showProgress;
        }

        if (null !== $request->showStorageType) {
            @$query['ShowStorageType'] = $request->showStorageType;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFullBackupList',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFullBackupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of full backup tasks in Database Backup (DBS).
     *
     * @param request - DescribeFullBackupListRequest
     *
     * @returns DescribeFullBackupListResponse
     *
     * @param DescribeFullBackupListRequest $request
     *
     * @return DescribeFullBackupListResponse
     */
    public function describeFullBackupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFullBackupListWithOptions($request, $runtime);
    }

    /**
     * This operation queries the list of incremental backup tasks for DBS.
     *
     * @param request - DescribeIncrementBackupListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIncrementBackupListResponse
     *
     * @param DescribeIncrementBackupListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeIncrementBackupListResponse
     */
    public function describeIncrementBackupListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->showStorageType) {
            @$query['ShowStorageType'] = $request->showStorageType;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIncrementBackupList',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIncrementBackupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation queries the list of incremental backup tasks for DBS.
     *
     * @param request - DescribeIncrementBackupListRequest
     *
     * @returns DescribeIncrementBackupListResponse
     *
     * @param DescribeIncrementBackupListRequest $request
     *
     * @return DescribeIncrementBackupListResponse
     */
    public function describeIncrementBackupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIncrementBackupListWithOptions($request, $runtime);
    }

    /**
     * Queries error code information for a Database Backup (DBS) job.
     *
     * @param request - DescribeJobErrorCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJobErrorCodeResponse
     *
     * @param DescribeJobErrorCodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeJobErrorCodeResponse
     */
    public function describeJobErrorCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJobErrorCode',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeJobErrorCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries error code information for a Database Backup (DBS) job.
     *
     * @param request - DescribeJobErrorCodeRequest
     *
     * @returns DescribeJobErrorCodeResponse
     *
     * @param DescribeJobErrorCodeRequest $request
     *
     * @return DescribeJobErrorCodeResponse
     */
    public function describeJobErrorCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobErrorCodeWithOptions($request, $runtime);
    }

    /**
     * Queries the CIDR blocks of nodes on which Database Backup (DBS) is running.
     *
     * @param request - DescribeNodeCidrListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNodeCidrListResponse
     *
     * @param DescribeNodeCidrListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeNodeCidrListResponse
     */
    public function describeNodeCidrListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNodeCidrList',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNodeCidrListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the CIDR blocks of nodes on which Database Backup (DBS) is running.
     *
     * @param request - DescribeNodeCidrListRequest
     *
     * @returns DescribeNodeCidrListResponse
     *
     * @param DescribeNodeCidrListRequest $request
     *
     * @return DescribeNodeCidrListResponse
     */
    public function describeNodeCidrList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeCidrListWithOptions($request, $runtime);
    }

    /**
     * Queries the precheck progress of backup plans and restore tasks.
     *
     * @param request - DescribePreCheckProgressListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePreCheckProgressListResponse
     *
     * @param DescribePreCheckProgressListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePreCheckProgressListResponse
     */
    public function describePreCheckProgressListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->restoreTaskId) {
            @$query['RestoreTaskId'] = $request->restoreTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePreCheckProgressList',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePreCheckProgressListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the precheck progress of backup plans and restore tasks.
     *
     * @param request - DescribePreCheckProgressListRequest
     *
     * @returns DescribePreCheckProgressListResponse
     *
     * @param DescribePreCheckProgressListRequest $request
     *
     * @return DescribePreCheckProgressListResponse
     */
    public function describePreCheckProgressList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePreCheckProgressListWithOptions($request, $runtime);
    }

    /**
     * Queries the regions where DBS is available.
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
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2019-03-06',
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
     * Queries the regions where DBS is available.
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
     * Queries the details of the recoverable time ranges for a backup plan.
     *
     * @param request - DescribeRestoreRangeInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRestoreRangeInfoResponse
     *
     * @param DescribeRestoreRangeInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRestoreRangeInfoResponse
     */
    public function describeRestoreRangeInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->beginTimestampForRestore) {
            @$query['BeginTimestampForRestore'] = $request->beginTimestampForRestore;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->endTimestampForRestore) {
            @$query['EndTimestampForRestore'] = $request->endTimestampForRestore;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->recentlyRestore) {
            @$query['RecentlyRestore'] = $request->recentlyRestore;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRestoreRangeInfo',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRestoreRangeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the recoverable time ranges for a backup plan.
     *
     * @param request - DescribeRestoreRangeInfoRequest
     *
     * @returns DescribeRestoreRangeInfoResponse
     *
     * @param DescribeRestoreRangeInfoRequest $request
     *
     * @return DescribeRestoreRangeInfoResponse
     */
    public function describeRestoreRangeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreRangeInfoWithOptions($request, $runtime);
    }

    /**
     * Queries restore jobs in Database Backup Service (DBS).
     *
     * @param request - DescribeRestoreTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRestoreTaskListResponse
     *
     * @param DescribeRestoreTaskListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRestoreTaskListResponse
     */
    public function describeRestoreTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->restoreTaskId) {
            @$query['RestoreTaskId'] = $request->restoreTaskId;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRestoreTaskList',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRestoreTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries restore jobs in Database Backup Service (DBS).
     *
     * @param request - DescribeRestoreTaskListRequest
     *
     * @returns DescribeRestoreTaskListResponse
     *
     * @param DescribeRestoreTaskListRequest $request
     *
     * @return DescribeRestoreTaskListResponse
     */
    public function describeRestoreTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreTaskListWithOptions($request, $runtime);
    }

    /**
     * Disable incremental backup for a backup plan.
     *
     * @remarks
     * ## Impact
     * Calling this operation stops the specified backup plan from creating new incremental backups.
     *
     * @param request - DisableBackupLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableBackupLogResponse
     *
     * @param DisableBackupLogRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DisableBackupLogResponse
     */
    public function disableBackupLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->disableMysqlPhysicalBackupBinlogOnly) {
            @$query['DisableMysqlPhysicalBackupBinlogOnly'] = $request->disableMysqlPhysicalBackupBinlogOnly;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableBackupLog',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableBackupLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disable incremental backup for a backup plan.
     *
     * @remarks
     * ## Impact
     * Calling this operation stops the specified backup plan from creating new incremental backups.
     *
     * @param request - DisableBackupLogRequest
     *
     * @returns DisableBackupLogResponse
     *
     * @param DisableBackupLogRequest $request
     *
     * @return DisableBackupLogResponse
     */
    public function disableBackupLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableBackupLogWithOptions($request, $runtime);
    }

    /**
     * Enable incremental backup for a backup schedule.
     *
     * @remarks
     * ## Impact
     * Enabling log backup does not incur direct charges. However, log backups generate backup traffic and storage usage. These resources are billed at the same rate as full backups. You can use the free quota from your backup plan or storage plan to offset these charges.
     *
     * @param request - EnableBackupLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableBackupLogResponse
     *
     * @param EnableBackupLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EnableBackupLogResponse
     */
    public function enableBackupLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableMysqlPhysicalBackupBinlog) {
            @$query['EnableMysqlPhysicalBackupBinlog'] = $request->enableMysqlPhysicalBackupBinlog;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableBackupLog',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableBackupLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enable incremental backup for a backup schedule.
     *
     * @remarks
     * ## Impact
     * Enabling log backup does not incur direct charges. However, log backups generate backup traffic and storage usage. These resources are billed at the same rate as full backups. You can use the free quota from your backup plan or storage plan to offset these charges.
     *
     * @param request - EnableBackupLogRequest
     *
     * @returns EnableBackupLogResponse
     *
     * @param EnableBackupLogRequest $request
     *
     * @return EnableBackupLogResponse
     */
    public function enableBackupLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableBackupLogWithOptions($request, $runtime);
    }

    /**
     * Retrieves the database and table data of physical backups through a backup gateway.
     *
     * @remarks
     * You must call the [CreateGetDBListFromAgentTask](https://help.aliyun.com/document_detail/2869847.html) operation to create an asynchronous task and obtain the TaskId (asynchronous task ID). Pass the TaskId to the GetDBListFromAgent operation to retrieve the database and table data of physical backups.
     *
     * @param request - GetDBListFromAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDBListFromAgentResponse
     *
     * @param GetDBListFromAgentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDBListFromAgentResponse
     */
    public function getDBListFromAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupGatewayId) {
            @$query['BackupGatewayId'] = $request->backupGatewayId;
        }

        if (null !== $request->backupGatewayIdentifier) {
            @$query['BackupGatewayIdentifier'] = $request->backupGatewayIdentifier;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->sourceEndpointRegion) {
            @$query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDBListFromAgent',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDBListFromAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the database and table data of physical backups through a backup gateway.
     *
     * @remarks
     * You must call the [CreateGetDBListFromAgentTask](https://help.aliyun.com/document_detail/2869847.html) operation to create an asynchronous task and obtain the TaskId (asynchronous task ID). Pass the TaskId to the GetDBListFromAgent operation to retrieve the database and table data of physical backups.
     *
     * @param request - GetDBListFromAgentRequest
     *
     * @returns GetDBListFromAgentResponse
     *
     * @param GetDBListFromAgentRequest $request
     *
     * @return GetDBListFromAgentResponse
     */
    public function getDBListFromAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDBListFromAgentWithOptions($request, $runtime);
    }

    /**
     * Grants the service-linked role (AliyunServiceRoleForDBS) to Database Backup (DBS).
     *
     * @remarks
     * DBS uses the service-linked role (AliyunServiceRoleForDBS) to obtain the required access permissions to connect to ApsaraDB databases, such as RDS, MongoDB, Redis, and PolarDB, or self-managed databases on ECS instances. For more information, see [Activate the Database Backup service](https://help.aliyun.com/document_detail/162603.html).
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitializeDbsServiceLinkedRoleResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return InitializeDbsServiceLinkedRoleResponse
     */
    public function initializeDbsServiceLinkedRoleWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'InitializeDbsServiceLinkedRole',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitializeDbsServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants the service-linked role (AliyunServiceRoleForDBS) to Database Backup (DBS).
     *
     * @remarks
     * DBS uses the service-linked role (AliyunServiceRoleForDBS) to obtain the required access permissions to connect to ApsaraDB databases, such as RDS, MongoDB, Redis, and PolarDB, or self-managed databases on ECS instances. For more information, see [Activate the Database Backup service](https://help.aliyun.com/document_detail/162603.html).
     *
     * @returns InitializeDbsServiceLinkedRoleResponse
     *
     * @return InitializeDbsServiceLinkedRoleResponse
     */
    public function initializeDbsServiceLinkedRole()
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeDbsServiceLinkedRoleWithOptions($runtime);
    }

    /**
     * Modifies the objects included in a Database Backup Service (DBS) backup plan.
     *
     * @param request - ModifyBackupObjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBackupObjectsResponse
     *
     * @param ModifyBackupObjectsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyBackupObjectsResponse
     */
    public function modifyBackupObjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupObjects) {
            @$query['BackupObjects'] = $request->backupObjects;
        }

        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackupObjects',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBackupObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the objects included in a Database Backup Service (DBS) backup plan.
     *
     * @param request - ModifyBackupObjectsRequest
     *
     * @returns ModifyBackupObjectsResponse
     *
     * @param ModifyBackupObjectsRequest $request
     *
     * @return ModifyBackupObjectsResponse
     */
    public function modifyBackupObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupObjectsWithOptions($request, $runtime);
    }

    /**
     * Modifies the name of a backup plan.
     *
     * @param request - ModifyBackupPlanNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBackupPlanNameResponse
     *
     * @param ModifyBackupPlanNameRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyBackupPlanNameResponse
     */
    public function modifyBackupPlanNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->backupPlanName) {
            @$query['BackupPlanName'] = $request->backupPlanName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackupPlanName',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBackupPlanNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name of a backup plan.
     *
     * @param request - ModifyBackupPlanNameRequest
     *
     * @returns ModifyBackupPlanNameResponse
     *
     * @param ModifyBackupPlanNameRequest $request
     *
     * @return ModifyBackupPlanNameResponse
     */
    public function modifyBackupPlanName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPlanNameWithOptions($request, $runtime);
    }

    /**
     * Enables, modifies, or disables the automatic download feature.
     *
     * @remarks
     * Before calling this operation, verify whether the backup data is stored in the built-in OSS of DBS. You can call the [DescribeBackupPlanList](https://help.aliyun.com/document_detail/2869825.html) operation to check the value of BackupStorageType.
     *
     * @param request - ModifyBackupSetDownloadRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBackupSetDownloadRulesResponse
     *
     * @param ModifyBackupSetDownloadRulesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyBackupSetDownloadRulesResponse
     */
    public function modifyBackupSetDownloadRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupGatewayId) {
            @$query['BackupGatewayId'] = $request->backupGatewayId;
        }

        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->backupSetDownloadDir) {
            @$query['BackupSetDownloadDir'] = $request->backupSetDownloadDir;
        }

        if (null !== $request->backupSetDownloadTargetType) {
            @$query['BackupSetDownloadTargetType'] = $request->backupSetDownloadTargetType;
        }

        if (null !== $request->backupSetDownloadTargetTypeLocation) {
            @$query['BackupSetDownloadTargetTypeLocation'] = $request->backupSetDownloadTargetTypeLocation;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->fullDataFormat) {
            @$query['FullDataFormat'] = $request->fullDataFormat;
        }

        if (null !== $request->incrementDataFormat) {
            @$query['IncrementDataFormat'] = $request->incrementDataFormat;
        }

        if (null !== $request->openAutoDownload) {
            @$query['OpenAutoDownload'] = $request->openAutoDownload;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackupSetDownloadRules',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBackupSetDownloadRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables, modifies, or disables the automatic download feature.
     *
     * @remarks
     * Before calling this operation, verify whether the backup data is stored in the built-in OSS of DBS. You can call the [DescribeBackupPlanList](https://help.aliyun.com/document_detail/2869825.html) operation to check the value of BackupStorageType.
     *
     * @param request - ModifyBackupSetDownloadRulesRequest
     *
     * @returns ModifyBackupSetDownloadRulesResponse
     *
     * @param ModifyBackupSetDownloadRulesRequest $request
     *
     * @return ModifyBackupSetDownloadRulesResponse
     */
    public function modifyBackupSetDownloadRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupSetDownloadRulesWithOptions($request, $runtime);
    }

    /**
     * Modify a DBS backup source endpoint.
     *
     * @param request - ModifyBackupSourceEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBackupSourceEndpointResponse
     *
     * @param ModifyBackupSourceEndpointRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyBackupSourceEndpointResponse
     */
    public function modifyBackupSourceEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupGatewayId) {
            @$query['BackupGatewayId'] = $request->backupGatewayId;
        }

        if (null !== $request->backupObjects) {
            @$query['BackupObjects'] = $request->backupObjects;
        }

        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->crossAliyunId) {
            @$query['CrossAliyunId'] = $request->crossAliyunId;
        }

        if (null !== $request->crossRoleName) {
            @$query['CrossRoleName'] = $request->crossRoleName;
        }

        if (null !== $request->enableSourceEndpointSsl) {
            @$query['EnableSourceEndpointSsl'] = $request->enableSourceEndpointSsl;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->sourceEndpointDatabaseName) {
            @$query['SourceEndpointDatabaseName'] = $request->sourceEndpointDatabaseName;
        }

        if (null !== $request->sourceEndpointIP) {
            @$query['SourceEndpointIP'] = $request->sourceEndpointIP;
        }

        if (null !== $request->sourceEndpointInstanceID) {
            @$query['SourceEndpointInstanceID'] = $request->sourceEndpointInstanceID;
        }

        if (null !== $request->sourceEndpointInstanceType) {
            @$query['SourceEndpointInstanceType'] = $request->sourceEndpointInstanceType;
        }

        if (null !== $request->sourceEndpointOracleHome) {
            @$query['SourceEndpointOracleHome'] = $request->sourceEndpointOracleHome;
        }

        if (null !== $request->sourceEndpointOracleSID) {
            @$query['SourceEndpointOracleSID'] = $request->sourceEndpointOracleSID;
        }

        if (null !== $request->sourceEndpointPassword) {
            @$query['SourceEndpointPassword'] = $request->sourceEndpointPassword;
        }

        if (null !== $request->sourceEndpointPort) {
            @$query['SourceEndpointPort'] = $request->sourceEndpointPort;
        }

        if (null !== $request->sourceEndpointRegion) {
            @$query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }

        if (null !== $request->sourceEndpointUserName) {
            @$query['SourceEndpointUserName'] = $request->sourceEndpointUserName;
        }

        if (null !== $request->sslCaPem) {
            @$query['SslCaPem'] = $request->sslCaPem;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackupSourceEndpoint',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBackupSourceEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify a DBS backup source endpoint.
     *
     * @param request - ModifyBackupSourceEndpointRequest
     *
     * @returns ModifyBackupSourceEndpointResponse
     *
     * @param ModifyBackupSourceEndpointRequest $request
     *
     * @return ModifyBackupSourceEndpointResponse
     */
    public function modifyBackupSourceEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupSourceEndpointWithOptions($request, $runtime);
    }

    /**
     * Modifies the backup time of a backup plan.
     *
     * @param request - ModifyBackupStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBackupStrategyResponse
     *
     * @param ModifyBackupStrategyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyBackupStrategyResponse
     */
    public function modifyBackupStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupLogIntervalSeconds) {
            @$query['BackupLogIntervalSeconds'] = $request->backupLogIntervalSeconds;
        }

        if (null !== $request->backupPeriod) {
            @$query['BackupPeriod'] = $request->backupPeriod;
        }

        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->backupStartTime) {
            @$query['BackupStartTime'] = $request->backupStartTime;
        }

        if (null !== $request->backupStrategyType) {
            @$query['BackupStrategyType'] = $request->backupStrategyType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackupStrategy',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBackupStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the backup time of a backup plan.
     *
     * @param request - ModifyBackupStrategyRequest
     *
     * @returns ModifyBackupStrategyResponse
     *
     * @param ModifyBackupStrategyRequest $request
     *
     * @return ModifyBackupStrategyResponse
     */
    public function modifyBackupStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupStrategyWithOptions($request, $runtime);
    }

    /**
     * Modifies the lifecycle of stored data in a backup plan.
     *
     * @param request - ModifyStorageStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyStorageStrategyResponse
     *
     * @param ModifyStorageStrategyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyStorageStrategyResponse
     */
    public function modifyStorageStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->backupRetentionPeriod) {
            @$query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }

        if (null !== $request->backupStorageEncryptMethod) {
            @$query['BackupStorageEncryptMethod'] = $request->backupStorageEncryptMethod;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->duplicationArchivePeriod) {
            @$query['DuplicationArchivePeriod'] = $request->duplicationArchivePeriod;
        }

        if (null !== $request->duplicationInfrequentAccessPeriod) {
            @$query['DuplicationInfrequentAccessPeriod'] = $request->duplicationInfrequentAccessPeriod;
        }

        if (null !== $request->incrementBackupRetentionPeriod) {
            @$query['IncrementBackupRetentionPeriod'] = $request->incrementBackupRetentionPeriod;
        }

        if (null !== $request->incrementDuplicationArchivePeriod) {
            @$query['IncrementDuplicationArchivePeriod'] = $request->incrementDuplicationArchivePeriod;
        }

        if (null !== $request->incrementDuplicationInfrequentAccessPeriod) {
            @$query['IncrementDuplicationInfrequentAccessPeriod'] = $request->incrementDuplicationInfrequentAccessPeriod;
        }

        if (null !== $request->logBackupRetentionPeriod) {
            @$query['LogBackupRetentionPeriod'] = $request->logBackupRetentionPeriod;
        }

        if (null !== $request->logDuplicationArchivePeriod) {
            @$query['LogDuplicationArchivePeriod'] = $request->logDuplicationArchivePeriod;
        }

        if (null !== $request->logDuplicationInfrequentAccessPeriod) {
            @$query['LogDuplicationInfrequentAccessPeriod'] = $request->logDuplicationInfrequentAccessPeriod;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyStorageStrategy',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyStorageStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the lifecycle of stored data in a backup plan.
     *
     * @param request - ModifyStorageStrategyRequest
     *
     * @returns ModifyStorageStrategyResponse
     *
     * @param ModifyStorageStrategyRequest $request
     *
     * @return ModifyStorageStrategyResponse
     */
    public function modifyStorageStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStorageStrategyWithOptions($request, $runtime);
    }

    /**
     * This operation releases a pay-as-you-go backup plan.
     *
     * @remarks
     * ## Impact
     * After you release a backup plan, the service for the backup instance is stopped and you are no longer charged for the instance.
     *
     * @param request - ReleaseBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseBackupPlanResponse
     *
     * @param ReleaseBackupPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReleaseBackupPlanResponse
     */
    public function releaseBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseBackupPlan',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation releases a pay-as-you-go backup plan.
     *
     * @remarks
     * ## Impact
     * After you release a backup plan, the service for the backup instance is stopped and you are no longer charged for the instance.
     *
     * @param request - ReleaseBackupPlanRequest
     *
     * @returns ReleaseBackupPlanResponse
     *
     * @param ReleaseBackupPlanRequest $request
     *
     * @return ReleaseBackupPlanResponse
     */
    public function releaseBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Renews a backup schedule.
     *
     * @param request - RenewBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewBackupPlanResponse
     *
     * @param RenewBackupPlanRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RenewBackupPlanResponse
     */
    public function renewBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewBackupPlan',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a backup schedule.
     *
     * @param request - RenewBackupPlanRequest
     *
     * @returns RenewBackupPlanResponse
     *
     * @param RenewBackupPlanRequest $request
     *
     * @return RenewBackupPlanResponse
     */
    public function renewBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewBackupPlanWithOptions($request, $runtime);
    }

    /**
     * This operation starts a DBS backup plan.
     *
     * @param request - StartBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartBackupPlanResponse
     *
     * @param StartBackupPlanRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartBackupPlanResponse
     */
    public function startBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartBackupPlan',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation starts a DBS backup plan.
     *
     * @param request - StartBackupPlanRequest
     *
     * @returns StartBackupPlanResponse
     *
     * @param StartBackupPlanRequest $request
     *
     * @return StartBackupPlanResponse
     */
    public function startBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Starts a DBS restore job.
     *
     * @param request - StartRestoreTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartRestoreTaskResponse
     *
     * @param StartRestoreTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartRestoreTaskResponse
     */
    public function startRestoreTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->restoreTaskId) {
            @$query['RestoreTaskId'] = $request->restoreTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartRestoreTask',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartRestoreTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a DBS restore job.
     *
     * @param request - StartRestoreTaskRequest
     *
     * @returns StartRestoreTaskResponse
     *
     * @param StartRestoreTaskRequest $request
     *
     * @return StartRestoreTaskResponse
     */
    public function startRestoreTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRestoreTaskWithOptions($request, $runtime);
    }

    /**
     * This operation pauses a DBS backup plan.
     *
     * @param request - StopBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopBackupPlanResponse
     *
     * @param StopBackupPlanRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopBackupPlanResponse
     */
    public function stopBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->stopMethod) {
            @$query['StopMethod'] = $request->stopMethod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopBackupPlan',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation pauses a DBS backup plan.
     *
     * @param request - StopBackupPlanRequest
     *
     * @returns StopBackupPlanResponse
     *
     * @param StopBackupPlanRequest $request
     *
     * @return StopBackupPlanResponse
     */
    public function stopBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Upgrades a backup schedule.
     *
     * @param request - UpgradeBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeBackupPlanResponse
     *
     * @param UpgradeBackupPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpgradeBackupPlanResponse
     */
    public function upgradeBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPlanId) {
            @$query['BackupPlanId'] = $request->backupPlanId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeBackupPlan',
            'version' => '2019-03-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades a backup schedule.
     *
     * @param request - UpgradeBackupPlanRequest
     *
     * @returns UpgradeBackupPlanResponse
     *
     * @param UpgradeBackupPlanRequest $request
     *
     * @return UpgradeBackupPlanResponse
     */
    public function upgradeBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeBackupPlanWithOptions($request, $runtime);
    }
}
