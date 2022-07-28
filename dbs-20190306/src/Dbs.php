<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dbs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'            => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-beijing'            => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-chengdu'            => 'dbs-api.cn-chengdu.aliyuncs.com',
            'cn-zhangjiakou'        => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-huhehaote'          => 'dbs-api.cn-huhehaote.aliyuncs.com',
            'cn-hangzhou'           => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'           => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen'           => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-hongkong'           => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'ap-southeast-1'        => 'dbs-api.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'dbs-api.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'        => 'dbs-api.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'        => 'dbs-api.ap-southeast-5.aliyuncs.com',
            'ap-northeast-1'        => 'dbs-api.ap-northeast-1.aliyuncs.com',
            'us-west-1'             => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'us-east-1'             => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'eu-central-1'          => 'dbs-api.eu-central-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shanghai-finance-1' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'ap-south-1'            => 'dbs-api.ap-south-1.aliyuncs.com',
            'eu-west-1'             => 'dbs-api.eu-west-1.aliyuncs.com',
            'me-east-1'             => 'dbs-api.me-east-1.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param ConfigureBackupPlanRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ConfigureBackupPlanResponse
     */
    public function configureBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoStartBackup)) {
            $query['AutoStartBackup'] = $request->autoStartBackup;
        }
        if (!Utils::isUnset($request->backupGatewayId)) {
            $query['BackupGatewayId'] = $request->backupGatewayId;
        }
        if (!Utils::isUnset($request->backupLogIntervalSeconds)) {
            $query['BackupLogIntervalSeconds'] = $request->backupLogIntervalSeconds;
        }
        if (!Utils::isUnset($request->backupObjects)) {
            $query['BackupObjects'] = $request->backupObjects;
        }
        if (!Utils::isUnset($request->backupPeriod)) {
            $query['BackupPeriod'] = $request->backupPeriod;
        }
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->backupPlanName)) {
            $query['BackupPlanName'] = $request->backupPlanName;
        }
        if (!Utils::isUnset($request->backupRateLimit)) {
            $query['BackupRateLimit'] = $request->backupRateLimit;
        }
        if (!Utils::isUnset($request->backupRetentionPeriod)) {
            $query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }
        if (!Utils::isUnset($request->backupSpeedLimit)) {
            $query['BackupSpeedLimit'] = $request->backupSpeedLimit;
        }
        if (!Utils::isUnset($request->backupStartTime)) {
            $query['BackupStartTime'] = $request->backupStartTime;
        }
        if (!Utils::isUnset($request->backupStorageType)) {
            $query['BackupStorageType'] = $request->backupStorageType;
        }
        if (!Utils::isUnset($request->backupStrategyType)) {
            $query['BackupStrategyType'] = $request->backupStrategyType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->crossAliyunId)) {
            $query['CrossAliyunId'] = $request->crossAliyunId;
        }
        if (!Utils::isUnset($request->crossRoleName)) {
            $query['CrossRoleName'] = $request->crossRoleName;
        }
        if (!Utils::isUnset($request->duplicationArchivePeriod)) {
            $query['DuplicationArchivePeriod'] = $request->duplicationArchivePeriod;
        }
        if (!Utils::isUnset($request->duplicationInfrequentAccessPeriod)) {
            $query['DuplicationInfrequentAccessPeriod'] = $request->duplicationInfrequentAccessPeriod;
        }
        if (!Utils::isUnset($request->enableBackupLog)) {
            $query['EnableBackupLog'] = $request->enableBackupLog;
        }
        if (!Utils::isUnset($request->OSSBucketName)) {
            $query['OSSBucketName'] = $request->OSSBucketName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceEndpointDatabaseName)) {
            $query['SourceEndpointDatabaseName'] = $request->sourceEndpointDatabaseName;
        }
        if (!Utils::isUnset($request->sourceEndpointIP)) {
            $query['SourceEndpointIP'] = $request->sourceEndpointIP;
        }
        if (!Utils::isUnset($request->sourceEndpointInstanceID)) {
            $query['SourceEndpointInstanceID'] = $request->sourceEndpointInstanceID;
        }
        if (!Utils::isUnset($request->sourceEndpointInstanceType)) {
            $query['SourceEndpointInstanceType'] = $request->sourceEndpointInstanceType;
        }
        if (!Utils::isUnset($request->sourceEndpointOracleSID)) {
            $query['SourceEndpointOracleSID'] = $request->sourceEndpointOracleSID;
        }
        if (!Utils::isUnset($request->sourceEndpointPassword)) {
            $query['SourceEndpointPassword'] = $request->sourceEndpointPassword;
        }
        if (!Utils::isUnset($request->sourceEndpointPort)) {
            $query['SourceEndpointPort'] = $request->sourceEndpointPort;
        }
        if (!Utils::isUnset($request->sourceEndpointRegion)) {
            $query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }
        if (!Utils::isUnset($request->sourceEndpointUserName)) {
            $query['SourceEndpointUserName'] = $request->sourceEndpointUserName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigureBackupPlan',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigureBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateAndStartBackupPlanRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAndStartBackupPlanResponse
     */
    public function createAndStartBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupGatewayId)) {
            $query['BackupGatewayId'] = $request->backupGatewayId;
        }
        if (!Utils::isUnset($request->backupLogIntervalSeconds)) {
            $query['BackupLogIntervalSeconds'] = $request->backupLogIntervalSeconds;
        }
        if (!Utils::isUnset($request->backupMethod)) {
            $query['BackupMethod'] = $request->backupMethod;
        }
        if (!Utils::isUnset($request->backupObjects)) {
            $query['BackupObjects'] = $request->backupObjects;
        }
        if (!Utils::isUnset($request->backupPeriod)) {
            $query['BackupPeriod'] = $request->backupPeriod;
        }
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->backupPlanName)) {
            $query['BackupPlanName'] = $request->backupPlanName;
        }
        if (!Utils::isUnset($request->backupRateLimit)) {
            $query['BackupRateLimit'] = $request->backupRateLimit;
        }
        if (!Utils::isUnset($request->backupRetentionPeriod)) {
            $query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }
        if (!Utils::isUnset($request->backupSpeedLimit)) {
            $query['BackupSpeedLimit'] = $request->backupSpeedLimit;
        }
        if (!Utils::isUnset($request->backupStartTime)) {
            $query['BackupStartTime'] = $request->backupStartTime;
        }
        if (!Utils::isUnset($request->backupStorageType)) {
            $query['BackupStorageType'] = $request->backupStorageType;
        }
        if (!Utils::isUnset($request->backupStrategyType)) {
            $query['BackupStrategyType'] = $request->backupStrategyType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->crossAliyunId)) {
            $query['CrossAliyunId'] = $request->crossAliyunId;
        }
        if (!Utils::isUnset($request->crossRoleName)) {
            $query['CrossRoleName'] = $request->crossRoleName;
        }
        if (!Utils::isUnset($request->databaseRegion)) {
            $query['DatabaseRegion'] = $request->databaseRegion;
        }
        if (!Utils::isUnset($request->databaseType)) {
            $query['DatabaseType'] = $request->databaseType;
        }
        if (!Utils::isUnset($request->duplicationArchivePeriod)) {
            $query['DuplicationArchivePeriod'] = $request->duplicationArchivePeriod;
        }
        if (!Utils::isUnset($request->duplicationInfrequentAccessPeriod)) {
            $query['DuplicationInfrequentAccessPeriod'] = $request->duplicationInfrequentAccessPeriod;
        }
        if (!Utils::isUnset($request->enableBackupLog)) {
            $query['EnableBackupLog'] = $request->enableBackupLog;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $query['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->OSSBucketName)) {
            $query['OSSBucketName'] = $request->OSSBucketName;
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
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceEndpointDatabaseName)) {
            $query['SourceEndpointDatabaseName'] = $request->sourceEndpointDatabaseName;
        }
        if (!Utils::isUnset($request->sourceEndpointIP)) {
            $query['SourceEndpointIP'] = $request->sourceEndpointIP;
        }
        if (!Utils::isUnset($request->sourceEndpointInstanceID)) {
            $query['SourceEndpointInstanceID'] = $request->sourceEndpointInstanceID;
        }
        if (!Utils::isUnset($request->sourceEndpointInstanceType)) {
            $query['SourceEndpointInstanceType'] = $request->sourceEndpointInstanceType;
        }
        if (!Utils::isUnset($request->sourceEndpointOracleSID)) {
            $query['SourceEndpointOracleSID'] = $request->sourceEndpointOracleSID;
        }
        if (!Utils::isUnset($request->sourceEndpointPassword)) {
            $query['SourceEndpointPassword'] = $request->sourceEndpointPassword;
        }
        if (!Utils::isUnset($request->sourceEndpointPort)) {
            $query['SourceEndpointPort'] = $request->sourceEndpointPort;
        }
        if (!Utils::isUnset($request->sourceEndpointRegion)) {
            $query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }
        if (!Utils::isUnset($request->sourceEndpointUserName)) {
            $query['SourceEndpointUserName'] = $request->sourceEndpointUserName;
        }
        if (!Utils::isUnset($request->storageRegion)) {
            $query['StorageRegion'] = $request->storageRegion;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAndStartBackupPlan',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAndStartBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateBackupPlanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateBackupPlanResponse
     */
    public function createBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupMethod)) {
            $query['BackupMethod'] = $request->backupMethod;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->databaseRegion)) {
            $query['DatabaseRegion'] = $request->databaseRegion;
        }
        if (!Utils::isUnset($request->databaseType)) {
            $query['DatabaseType'] = $request->databaseType;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $query['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
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
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->storageRegion)) {
            $query['StorageRegion'] = $request->storageRegion;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBackupPlan',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateFullBackupSetDownloadRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateFullBackupSetDownloadResponse
     */
    public function createFullBackupSetDownloadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupSetDataFormat)) {
            $query['BackupSetDataFormat'] = $request->backupSetDataFormat;
        }
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFullBackupSetDownload',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFullBackupSetDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateGetDBListFromAgentTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateGetDBListFromAgentTaskResponse
     */
    public function createGetDBListFromAgentTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupGatewayId)) {
            $query['BackupGatewayId'] = $request->backupGatewayId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->databaseType)) {
            $query['DatabaseType'] = $request->databaseType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sourceEndpointIP)) {
            $query['SourceEndpointIP'] = $request->sourceEndpointIP;
        }
        if (!Utils::isUnset($request->sourceEndpointPort)) {
            $query['SourceEndpointPort'] = $request->sourceEndpointPort;
        }
        if (!Utils::isUnset($request->sourceEndpointRegion)) {
            $query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGetDBListFromAgentTask',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGetDBListFromAgentTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateIncrementBackupSetDownloadRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateIncrementBackupSetDownloadResponse
     */
    public function createIncrementBackupSetDownloadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupSetDataFormat)) {
            $query['BackupSetDataFormat'] = $request->backupSetDataFormat;
        }
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->backupSetName)) {
            $query['BackupSetName'] = $request->backupSetName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIncrementBackupSetDownload',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIncrementBackupSetDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateRestoreTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRestoreTaskResponse
     */
    public function createRestoreTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupGatewayId)) {
            $query['BackupGatewayId'] = $request->backupGatewayId;
        }
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->crossAliyunId)) {
            $query['CrossAliyunId'] = $request->crossAliyunId;
        }
        if (!Utils::isUnset($request->crossRoleName)) {
            $query['CrossRoleName'] = $request->crossRoleName;
        }
        if (!Utils::isUnset($request->destinationEndpointDatabaseName)) {
            $query['DestinationEndpointDatabaseName'] = $request->destinationEndpointDatabaseName;
        }
        if (!Utils::isUnset($request->destinationEndpointIP)) {
            $query['DestinationEndpointIP'] = $request->destinationEndpointIP;
        }
        if (!Utils::isUnset($request->destinationEndpointInstanceID)) {
            $query['DestinationEndpointInstanceID'] = $request->destinationEndpointInstanceID;
        }
        if (!Utils::isUnset($request->destinationEndpointInstanceType)) {
            $query['DestinationEndpointInstanceType'] = $request->destinationEndpointInstanceType;
        }
        if (!Utils::isUnset($request->destinationEndpointOracleSID)) {
            $query['DestinationEndpointOracleSID'] = $request->destinationEndpointOracleSID;
        }
        if (!Utils::isUnset($request->destinationEndpointPassword)) {
            $query['DestinationEndpointPassword'] = $request->destinationEndpointPassword;
        }
        if (!Utils::isUnset($request->destinationEndpointPort)) {
            $query['DestinationEndpointPort'] = $request->destinationEndpointPort;
        }
        if (!Utils::isUnset($request->destinationEndpointRegion)) {
            $query['DestinationEndpointRegion'] = $request->destinationEndpointRegion;
        }
        if (!Utils::isUnset($request->destinationEndpointUserName)) {
            $query['DestinationEndpointUserName'] = $request->destinationEndpointUserName;
        }
        if (!Utils::isUnset($request->duplicateConflict)) {
            $query['DuplicateConflict'] = $request->duplicateConflict;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->restoreDir)) {
            $query['RestoreDir'] = $request->restoreDir;
        }
        if (!Utils::isUnset($request->restoreHome)) {
            $query['RestoreHome'] = $request->restoreHome;
        }
        if (!Utils::isUnset($request->restoreObjects)) {
            $query['RestoreObjects'] = $request->restoreObjects;
        }
        if (!Utils::isUnset($request->restoreTaskName)) {
            $query['RestoreTaskName'] = $request->restoreTaskName;
        }
        if (!Utils::isUnset($request->restoreTime)) {
            $query['RestoreTime'] = $request->restoreTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRestoreTask',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRestoreTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeBackupGatewayListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeBackupGatewayListResponse
     */
    public function describeBackupGatewayListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupGatewayList',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupGatewayListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeBackupPlanBillingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeBackupPlanBillingResponse
     */
    public function describeBackupPlanBillingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->showStorageType)) {
            $query['ShowStorageType'] = $request->showStorageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPlanBilling',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupPlanBillingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeBackupPlanListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBackupPlanListResponse
     */
    public function describeBackupPlanListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->backupPlanName)) {
            $query['BackupPlanName'] = $request->backupPlanName;
        }
        if (!Utils::isUnset($request->backupPlanStatus)) {
            $query['BackupPlanStatus'] = $request->backupPlanStatus;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPlanList',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupPlanListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeBackupSetDownloadTaskListRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeBackupSetDownloadTaskListResponse
     */
    public function describeBackupSetDownloadTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->backupSetDownloadTaskId)) {
            $query['BackupSetDownloadTaskId'] = $request->backupSetDownloadTaskId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupSetDownloadTaskList',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupSetDownloadTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDLAServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDLAServiceResponse
     */
    public function describeDLAServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDLAService',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDLAServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeFullBackupListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeFullBackupListResponse
     */
    public function describeFullBackupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->showStorageType)) {
            $query['ShowStorageType'] = $request->showStorageType;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFullBackupList',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFullBackupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeIncrementBackupListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeIncrementBackupListResponse
     */
    public function describeIncrementBackupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->showStorageType)) {
            $query['ShowStorageType'] = $request->showStorageType;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIncrementBackupList',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIncrementBackupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeJobErrorCodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeJobErrorCodeResponse
     */
    public function describeJobErrorCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeJobErrorCode',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeJobErrorCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeNodeCidrListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeNodeCidrListResponse
     */
    public function describeNodeCidrListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNodeCidrList',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNodeCidrListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePreCheckProgressListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePreCheckProgressListResponse
     */
    public function describePreCheckProgressListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->restoreTaskId)) {
            $query['RestoreTaskId'] = $request->restoreTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePreCheckProgressList',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePreCheckProgressListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2019-03-06',
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
     * @param DescribeRestoreRangeInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRestoreRangeInfoResponse
     */
    public function describeRestoreRangeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->beginTimestampForRestore)) {
            $query['BeginTimestampForRestore'] = $request->beginTimestampForRestore;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTimestampForRestore)) {
            $query['EndTimestampForRestore'] = $request->endTimestampForRestore;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->recentlyRestore)) {
            $query['RecentlyRestore'] = $request->recentlyRestore;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRestoreRangeInfo',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRestoreRangeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeRestoreTaskListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRestoreTaskListResponse
     */
    public function describeRestoreTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->restoreTaskId)) {
            $query['RestoreTaskId'] = $request->restoreTaskId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRestoreTaskList',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRestoreTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DisableBackupLogRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DisableBackupLogResponse
     */
    public function disableBackupLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableBackupLog',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableBackupLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param EnableBackupLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EnableBackupLogResponse
     */
    public function enableBackupLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableBackupLog',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableBackupLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetDBListFromAgentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDBListFromAgentResponse
     */
    public function getDBListFromAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupGatewayId)) {
            $query['BackupGatewayId'] = $request->backupGatewayId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sourceEndpointRegion)) {
            $query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDBListFromAgent',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDBListFromAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return InitializeDbsServiceLinkedRoleResponse
     */
    public function initializeDbsServiceLinkedRoleWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'InitializeDbsServiceLinkedRole',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitializeDbsServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return InitializeDbsServiceLinkedRoleResponse
     */
    public function initializeDbsServiceLinkedRole()
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeDbsServiceLinkedRoleWithOptions($runtime);
    }

    /**
     * @param ModifyBackupObjectsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyBackupObjectsResponse
     */
    public function modifyBackupObjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupObjects)) {
            $query['BackupObjects'] = $request->backupObjects;
        }
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupObjects',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBackupObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyBackupPlanNameRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyBackupPlanNameResponse
     */
    public function modifyBackupPlanNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->backupPlanName)) {
            $query['BackupPlanName'] = $request->backupPlanName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupPlanName',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBackupPlanNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyBackupSetDownloadRulesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyBackupSetDownloadRulesResponse
     */
    public function modifyBackupSetDownloadRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupGatewayId)) {
            $query['BackupGatewayId'] = $request->backupGatewayId;
        }
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->backupSetDownloadDir)) {
            $query['BackupSetDownloadDir'] = $request->backupSetDownloadDir;
        }
        if (!Utils::isUnset($request->backupSetDownloadTargetType)) {
            $query['BackupSetDownloadTargetType'] = $request->backupSetDownloadTargetType;
        }
        if (!Utils::isUnset($request->backupSetDownloadTargetTypeLocation)) {
            $query['BackupSetDownloadTargetTypeLocation'] = $request->backupSetDownloadTargetTypeLocation;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->fullDataFormat)) {
            $query['FullDataFormat'] = $request->fullDataFormat;
        }
        if (!Utils::isUnset($request->incrementDataFormat)) {
            $query['IncrementDataFormat'] = $request->incrementDataFormat;
        }
        if (!Utils::isUnset($request->openAutoDownload)) {
            $query['OpenAutoDownload'] = $request->openAutoDownload;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupSetDownloadRules',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBackupSetDownloadRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyBackupSourceEndpointRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyBackupSourceEndpointResponse
     */
    public function modifyBackupSourceEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupGatewayId)) {
            $query['BackupGatewayId'] = $request->backupGatewayId;
        }
        if (!Utils::isUnset($request->backupObjects)) {
            $query['BackupObjects'] = $request->backupObjects;
        }
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->crossAliyunId)) {
            $query['CrossAliyunId'] = $request->crossAliyunId;
        }
        if (!Utils::isUnset($request->crossRoleName)) {
            $query['CrossRoleName'] = $request->crossRoleName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sourceEndpointDatabaseName)) {
            $query['SourceEndpointDatabaseName'] = $request->sourceEndpointDatabaseName;
        }
        if (!Utils::isUnset($request->sourceEndpointIP)) {
            $query['SourceEndpointIP'] = $request->sourceEndpointIP;
        }
        if (!Utils::isUnset($request->sourceEndpointInstanceID)) {
            $query['SourceEndpointInstanceID'] = $request->sourceEndpointInstanceID;
        }
        if (!Utils::isUnset($request->sourceEndpointInstanceType)) {
            $query['SourceEndpointInstanceType'] = $request->sourceEndpointInstanceType;
        }
        if (!Utils::isUnset($request->sourceEndpointOracleSID)) {
            $query['SourceEndpointOracleSID'] = $request->sourceEndpointOracleSID;
        }
        if (!Utils::isUnset($request->sourceEndpointPassword)) {
            $query['SourceEndpointPassword'] = $request->sourceEndpointPassword;
        }
        if (!Utils::isUnset($request->sourceEndpointPort)) {
            $query['SourceEndpointPort'] = $request->sourceEndpointPort;
        }
        if (!Utils::isUnset($request->sourceEndpointRegion)) {
            $query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }
        if (!Utils::isUnset($request->sourceEndpointUserName)) {
            $query['SourceEndpointUserName'] = $request->sourceEndpointUserName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupSourceEndpoint',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBackupSourceEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyBackupStrategyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyBackupStrategyResponse
     */
    public function modifyBackupStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupLogIntervalSeconds)) {
            $query['BackupLogIntervalSeconds'] = $request->backupLogIntervalSeconds;
        }
        if (!Utils::isUnset($request->backupPeriod)) {
            $query['BackupPeriod'] = $request->backupPeriod;
        }
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->backupStartTime)) {
            $query['BackupStartTime'] = $request->backupStartTime;
        }
        if (!Utils::isUnset($request->backupStrategyType)) {
            $query['BackupStrategyType'] = $request->backupStrategyType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupStrategy',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBackupStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyStorageStrategyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyStorageStrategyResponse
     */
    public function modifyStorageStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->backupRetentionPeriod)) {
            $query['BackupRetentionPeriod'] = $request->backupRetentionPeriod;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->duplicationArchivePeriod)) {
            $query['DuplicationArchivePeriod'] = $request->duplicationArchivePeriod;
        }
        if (!Utils::isUnset($request->duplicationInfrequentAccessPeriod)) {
            $query['DuplicationInfrequentAccessPeriod'] = $request->duplicationInfrequentAccessPeriod;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyStorageStrategy',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyStorageStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ReleaseBackupPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReleaseBackupPlanResponse
     */
    public function releaseBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseBackupPlan',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RenewBackupPlanRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RenewBackupPlanResponse
     */
    public function renewBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'RenewBackupPlan',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param StartBackupPlanRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartBackupPlanResponse
     */
    public function startBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartBackupPlan',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param StartRestoreTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartRestoreTaskResponse
     */
    public function startRestoreTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->restoreTaskId)) {
            $query['RestoreTaskId'] = $request->restoreTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartRestoreTask',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartRestoreTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param StopBackupPlanRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopBackupPlanResponse
     */
    public function stopBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->stopMethod)) {
            $query['StopMethod'] = $request->stopMethod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopBackupPlan',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpgradeBackupPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpgradeBackupPlanResponse
     */
    public function upgradeBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupPlanId)) {
            $query['BackupPlanId'] = $request->backupPlanId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeBackupPlan',
            'version'     => '2019-03-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
