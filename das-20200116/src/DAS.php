<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\DAS\V20200116\Models\AddHDMInstanceRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\AddHDMInstanceResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateCacheAnalysisJobRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateCacheAnalysisJobResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateCloudBenchTasksRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateCloudBenchTasksResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateDiagnosticReportRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateDiagnosticReportResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateKillInstanceSessionTaskRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateKillInstanceSessionTaskResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateKillInstanceSessionTaskWithMaintainUserRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateKillInstanceSessionTaskWithMaintainUserResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateLatestDeadLockAnalysisRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateLatestDeadLockAnalysisResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateQueryOptimizeTagRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateQueryOptimizeTagResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateRequestDiagnosisRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateRequestDiagnosisResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateSqlLogTaskRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateSqlLogTaskResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateStorageAnalysisTaskRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateStorageAnalysisTaskResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DeleteCloudBenchTaskRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DeleteCloudBenchTaskResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DeleteStopGatewayRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DeleteStopGatewayResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingConfigRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingConfigResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingHistoryRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingHistoryResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobsRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobsResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCloudbenchTaskConfigRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCloudbenchTaskConfigResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCloudbenchTaskRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCloudbenchTaskResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCloudBenchTasksRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCloudBenchTasksResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeDiagnosticReportListRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeDiagnosticReportListResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotKeysRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotKeysResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeInstanceDasProRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeInstanceDasProResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeQueryExplainRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeQueryExplainResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogHistogramAsyncRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogHistogramAsyncResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogStatisticRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogStatisticResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogConfigRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogConfigResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogRecordsRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogRecordsResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogStatisticRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogStatisticResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogTaskRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogTaskResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogTasksRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogTasksResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeTopBigKeysRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeTopBigKeysResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeTopHotKeysRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeTopHotKeysResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableAllSqlConcurrencyControlRulesRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableAllSqlConcurrencyControlRulesResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableAutoResourceOptimizeRulesRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableAutoResourceOptimizeRulesResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableAutoThrottleRulesRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableAutoThrottleRulesResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableDasProRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableDasProResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableInstanceDasConfigRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableInstanceDasConfigResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableSqlConcurrencyControlRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableSqlConcurrencyControlResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\EnableDasProRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\EnableDasProResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\EnableSqlConcurrencyControlRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\EnableSqlConcurrencyControlResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAsyncErrorRequestListByCodeRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAsyncErrorRequestListByCodeResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAsyncErrorRequestStatByCodeRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAsyncErrorRequestStatByCodeResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAsyncErrorRequestStatResultRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAsyncErrorRequestStatResultResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoIncrementUsageStatisticRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoIncrementUsageStatisticResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutonomousNotifyEventContentRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutonomousNotifyEventContentResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutonomousNotifyEventsInRangeRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutonomousNotifyEventsInRangeResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoResourceOptimizeRulesRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoResourceOptimizeRulesResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoThrottleRulesRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoThrottleRulesResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetBlockingDetailListRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetBlockingDetailListResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDasProServiceUsageRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDasProServiceUsageResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDasSQLLogHotDataRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDasSQLLogHotDataResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDBInstanceConnectivityDiagnosisRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDBInstanceConnectivityDiagnosisResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDeadLockDetailListRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDeadLockDetailListResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDeadLockDetailRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDeadLockDetailResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDeadlockHistogramRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDeadlockHistogramResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDeadLockHistoryRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDeadLockHistoryResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetEndpointSwitchTaskRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetEndpointSwitchTaskResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetErrorRequestSampleRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetErrorRequestSampleResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetEventSubscriptionRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetEventSubscriptionResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestOriginStatByInstanceIdRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestOriginStatByInstanceIdResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestSampleByInstanceIdRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestSampleByInstanceIdResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestStatResultByInstanceIdRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestStatResultByInstanceIdResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMAliyunResourceSyncResultRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMAliyunResourceSyncResultResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMLastAliyunResourceSyncResultRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMLastAliyunResourceSyncResultResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceInspectionsRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceInspectionsResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceMissingIndexListRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceMissingIndexListResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceSqlOptimizeStatisticRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceSqlOptimizeStatisticResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetKillInstanceSessionTaskResultRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetKillInstanceSessionTaskResultResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMongoDBCurrentOpRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMongoDBCurrentOpResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetPartitionsHeatmapRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetPartitionsHeatmapResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetPfsMetricTrendsRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetPfsMetricTrendsResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetPfsSqlSampleRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetPfsSqlSampleResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetPfsSqlSummariesRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetPfsSqlSummariesResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeDataStatsRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeDataStatsResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeDataTopRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeDataTopResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeDataTrendRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeDataTrendResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeExecErrorSampleRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeExecErrorSampleResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeExecErrorStatsRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeExecErrorStatsResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeRuleListRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeRuleListResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeShareUrlRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeShareUrlResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeSolutionRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeSolutionResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeTagRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetQueryOptimizeTagResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetRedisAllSessionRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetRedisAllSessionResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetRequestDiagnosisPageRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetRequestDiagnosisPageResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetRequestDiagnosisResultRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetRequestDiagnosisResultResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetRunningSqlConcurrencyControlRulesRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetRunningSqlConcurrencyControlRulesResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetSqlConcurrencyControlKeywordsFromSqlTextRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetSqlConcurrencyControlKeywordsFromSqlTextResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetSqlConcurrencyControlRulesHistoryRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetSqlConcurrencyControlRulesHistoryResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetSqlOptimizeAdviceRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetSqlOptimizeAdviceResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\KillInstanceAllSessionRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\KillInstanceAllSessionResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifySqlLogConfigRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifySqlLogConfigResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\RunCloudBenchTaskRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\RunCloudBenchTaskResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\SetEventSubscriptionRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\SetEventSubscriptionResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoResourceOptimizeRulesAsyncRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoResourceOptimizeRulesAsyncResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoSqlOptimizeStatusRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoSqlOptimizeStatusResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoThrottleRulesAsyncRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoThrottleRulesAsyncResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class DAS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap = [
            'cn-shanghai' => 'das.cn-shanghai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('das', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds a database instance to Database Autonomy Service (DAS).
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call DAS, you must set the region to cn-shanghai.
     *
     * @param request - AddHDMInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddHDMInstanceResponse
     *
     * @param AddHDMInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddHDMInstanceResponse
     */
    public function addHDMInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->flushAccount) {
            @$query['FlushAccount'] = $request->flushAccount;
        }

        if (null !== $request->instanceAlias) {
            @$query['InstanceAlias'] = $request->instanceAlias;
        }

        if (null !== $request->instanceArea) {
            @$query['InstanceArea'] = $request->instanceArea;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->context) {
            @$query['__context'] = $request->context;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddHDMInstance',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddHDMInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a database instance to Database Autonomy Service (DAS).
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call DAS, you must set the region to cn-shanghai.
     *
     * @param request - AddHDMInstanceRequest
     *
     * @returns AddHDMInstanceResponse
     *
     * @param AddHDMInstanceRequest $request
     *
     * @return AddHDMInstanceResponse
     */
    public function addHDMInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addHDMInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a cache analysis task.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   You can call this operation to analyze the data structures of ApsaraDB for Redis and the following self-developed data structures of Tair: TairString, TairHash, TairGIS, TairBloom, TairDoc, TairCpc, and TairZset. Other self-developed Tair data structures are not supported.
     * *   If the specifications of the database instance that you want to analyze are changed, the backup file generated before the specification change cannot be analyzed.
     * *   Tair ESSD/SSD-based instances are not supported.
     *
     * @param request - CreateCacheAnalysisJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCacheAnalysisJobResponse
     *
     * @param CreateCacheAnalysisJobRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateCacheAnalysisJobResponse
     */
    public function createCacheAnalysisJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupSetId) {
            @$query['BackupSetId'] = $request->backupSetId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->separators) {
            @$query['Separators'] = $request->separators;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCacheAnalysisJob',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCacheAnalysisJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cache analysis task.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   You can call this operation to analyze the data structures of ApsaraDB for Redis and the following self-developed data structures of Tair: TairString, TairHash, TairGIS, TairBloom, TairDoc, TairCpc, and TairZset. Other self-developed Tair data structures are not supported.
     * *   If the specifications of the database instance that you want to analyze are changed, the backup file generated before the specification change cannot be analyzed.
     * *   Tair ESSD/SSD-based instances are not supported.
     *
     * @param request - CreateCacheAnalysisJobRequest
     *
     * @returns CreateCacheAnalysisJobResponse
     *
     * @param CreateCacheAnalysisJobRequest $request
     *
     * @return CreateCacheAnalysisJobResponse
     */
    public function createCacheAnalysisJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCacheAnalysisJobWithOptions($request, $runtime);
    }

    /**
     * Creates stress testing tasks.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html). Before you call this API operation, make sure that your database instances meet the following requirements:
     * *   The source database instance is an ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition instance, or a PolarDB for MySQL Cluster Edition cluster.
     * *   The destination database instance is an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster.
     * *   The source and destination database instances are connected to DAS. For information about how to connect database instances to DAS, see [Connect an Alibaba Cloud database instance to DAS](https://help.aliyun.com/document_detail/65405.html).
     * *   DAS Enterprise Edition is enabled for the source and destination database instances. For more information, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     *
     * @param request - CreateCloudBenchTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudBenchTasksResponse
     *
     * @param CreateCloudBenchTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCloudBenchTasksResponse
     */
    public function createCloudBenchTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->backupTime) {
            @$query['BackupTime'] = $request->backupTime;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dstConnectionString) {
            @$query['DstConnectionString'] = $request->dstConnectionString;
        }

        if (null !== $request->dstInstanceId) {
            @$query['DstInstanceId'] = $request->dstInstanceId;
        }

        if (null !== $request->dstPort) {
            @$query['DstPort'] = $request->dstPort;
        }

        if (null !== $request->dstSuperAccount) {
            @$query['DstSuperAccount'] = $request->dstSuperAccount;
        }

        if (null !== $request->dstSuperPassword) {
            @$query['DstSuperPassword'] = $request->dstSuperPassword;
        }

        if (null !== $request->dstType) {
            @$query['DstType'] = $request->dstType;
        }

        if (null !== $request->dtsJobClass) {
            @$query['DtsJobClass'] = $request->dtsJobClass;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->endState) {
            @$query['EndState'] = $request->endState;
        }

        if (null !== $request->gatewayVpcId) {
            @$query['GatewayVpcId'] = $request->gatewayVpcId;
        }

        if (null !== $request->gatewayVpcIp) {
            @$query['GatewayVpcIp'] = $request->gatewayVpcIp;
        }

        if (null !== $request->rate) {
            @$query['Rate'] = $request->rate;
        }

        if (null !== $request->requestDuration) {
            @$query['RequestDuration'] = $request->requestDuration;
        }

        if (null !== $request->requestEndTime) {
            @$query['RequestEndTime'] = $request->requestEndTime;
        }

        if (null !== $request->requestStartTime) {
            @$query['RequestStartTime'] = $request->requestStartTime;
        }

        if (null !== $request->smartPressureTime) {
            @$query['SmartPressureTime'] = $request->smartPressureTime;
        }

        if (null !== $request->srcInstanceId) {
            @$query['SrcInstanceId'] = $request->srcInstanceId;
        }

        if (null !== $request->srcPublicIp) {
            @$query['SrcPublicIp'] = $request->srcPublicIp;
        }

        if (null !== $request->srcSuperAccount) {
            @$query['SrcSuperAccount'] = $request->srcSuperAccount;
        }

        if (null !== $request->srcSuperPassword) {
            @$query['SrcSuperPassword'] = $request->srcSuperPassword;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->workDir) {
            @$query['WorkDir'] = $request->workDir;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCloudBenchTasks',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudBenchTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates stress testing tasks.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html). Before you call this API operation, make sure that your database instances meet the following requirements:
     * *   The source database instance is an ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition instance, or a PolarDB for MySQL Cluster Edition cluster.
     * *   The destination database instance is an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster.
     * *   The source and destination database instances are connected to DAS. For information about how to connect database instances to DAS, see [Connect an Alibaba Cloud database instance to DAS](https://help.aliyun.com/document_detail/65405.html).
     * *   DAS Enterprise Edition is enabled for the source and destination database instances. For more information, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     *
     * @param request - CreateCloudBenchTasksRequest
     *
     * @returns CreateCloudBenchTasksResponse
     *
     * @param CreateCloudBenchTasksRequest $request
     *
     * @return CreateCloudBenchTasksResponse
     */
    public function createCloudBenchTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudBenchTasksWithOptions($request, $runtime);
    }

    /**
     * Creates a diagnostic report.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.3 or later.
     * *   If you use an SDK to call DAS, you must set the region to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   RDS MySQL
     *     *   PolarDB for MySQL
     *     *   Redis
     *
     * @param request - CreateDiagnosticReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDiagnosticReportResponse
     *
     * @param CreateDiagnosticReportRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDiagnosticReportResponse
     */
    public function createDiagnosticReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDiagnosticReport',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDiagnosticReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a diagnostic report.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.3 or later.
     * *   If you use an SDK to call DAS, you must set the region to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   RDS MySQL
     *     *   PolarDB for MySQL
     *     *   Redis
     *
     * @param request - CreateDiagnosticReportRequest
     *
     * @returns CreateDiagnosticReportResponse
     *
     * @param CreateDiagnosticReportRequest $request
     *
     * @return CreateDiagnosticReportResponse
     */
    public function createDiagnosticReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnosticReportWithOptions($request, $runtime);
    }

    /**
     * Creates a task that terminates sessions.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - CreateKillInstanceSessionTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKillInstanceSessionTaskResponse
     *
     * @param CreateKillInstanceSessionTaskRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateKillInstanceSessionTaskResponse
     */
    public function createKillInstanceSessionTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbUser) {
            @$query['DbUser'] = $request->dbUser;
        }

        if (null !== $request->dbUserPassword) {
            @$query['DbUserPassword'] = $request->dbUserPassword;
        }

        if (null !== $request->ignoredUsers) {
            @$query['IgnoredUsers'] = $request->ignoredUsers;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->killAllSessions) {
            @$query['KillAllSessions'] = $request->killAllSessions;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->sessionIds) {
            @$query['SessionIds'] = $request->sessionIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateKillInstanceSessionTask',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateKillInstanceSessionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a task that terminates sessions.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - CreateKillInstanceSessionTaskRequest
     *
     * @returns CreateKillInstanceSessionTaskResponse
     *
     * @param CreateKillInstanceSessionTaskRequest $request
     *
     * @return CreateKillInstanceSessionTaskResponse
     */
    public function createKillInstanceSessionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKillInstanceSessionTaskWithOptions($request, $runtime);
    }

    /**
     * 创建结束会话的任务
     *
     * @param request - CreateKillInstanceSessionTaskWithMaintainUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKillInstanceSessionTaskWithMaintainUserResponse
     *
     * @param CreateKillInstanceSessionTaskWithMaintainUserRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return CreateKillInstanceSessionTaskWithMaintainUserResponse
     */
    public function createKillInstanceSessionTaskWithMaintainUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ignoredUsers) {
            @$query['IgnoredUsers'] = $request->ignoredUsers;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->killAllSessions) {
            @$query['KillAllSessions'] = $request->killAllSessions;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->sessionIds) {
            @$query['SessionIds'] = $request->sessionIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateKillInstanceSessionTaskWithMaintainUser',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateKillInstanceSessionTaskWithMaintainUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建结束会话的任务
     *
     * @param request - CreateKillInstanceSessionTaskWithMaintainUserRequest
     *
     * @returns CreateKillInstanceSessionTaskWithMaintainUserResponse
     *
     * @param CreateKillInstanceSessionTaskWithMaintainUserRequest $request
     *
     * @return CreateKillInstanceSessionTaskWithMaintainUserResponse
     */
    public function createKillInstanceSessionTaskWithMaintainUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKillInstanceSessionTaskWithMaintainUserWithOptions($request, $runtime);
    }

    /**
     * 创建最近死锁分析任务
     *
     * @param request - CreateLatestDeadLockAnalysisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLatestDeadLockAnalysisResponse
     *
     * @param CreateLatestDeadLockAnalysisRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateLatestDeadLockAnalysisResponse
     */
    public function createLatestDeadLockAnalysisWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLatestDeadLockAnalysis',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLatestDeadLockAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建最近死锁分析任务
     *
     * @param request - CreateLatestDeadLockAnalysisRequest
     *
     * @returns CreateLatestDeadLockAnalysisResponse
     *
     * @param CreateLatestDeadLockAnalysisRequest $request
     *
     * @return CreateLatestDeadLockAnalysisResponse
     */
    public function createLatestDeadLockAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLatestDeadLockAnalysisWithOptions($request, $runtime);
    }

    /**
     * Adds a tag to a SQL template.
     *
     * @remarks
     *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - CreateQueryOptimizeTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQueryOptimizeTagResponse
     *
     * @param CreateQueryOptimizeTagRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateQueryOptimizeTagResponse
     */
    public function createQueryOptimizeTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comments) {
            @$query['Comments'] = $request->comments;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sqlIds) {
            @$query['SqlIds'] = $request->sqlIds;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateQueryOptimizeTag',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateQueryOptimizeTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a tag to a SQL template.
     *
     * @remarks
     *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - CreateQueryOptimizeTagRequest
     *
     * @returns CreateQueryOptimizeTagResponse
     *
     * @param CreateQueryOptimizeTagRequest $request
     *
     * @return CreateQueryOptimizeTagResponse
     */
    public function createQueryOptimizeTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQueryOptimizeTagWithOptions($request, $runtime);
    }

    /**
     * Initiates an SQL statement diagnostics request.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call Database Autonomy Service (DAS), you must set the region to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *     *   ApsaraDB RDS for SQL Server
     *     *   PolarDB for MySQL
     *     *   PolarDB for PostgreSQL (compatible with Oracle)
     *     *   ApsaraDB for MongoDB
     * >  The minor engine version of ApsaraDB RDS for PostgreSQL instances must be 20221230 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
     *
     * @param request - CreateRequestDiagnosisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRequestDiagnosisResponse
     *
     * @param CreateRequestDiagnosisRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateRequestDiagnosisResponse
     */
    public function createRequestDiagnosisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->sql) {
            @$query['Sql'] = $request->sql;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRequestDiagnosis',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRequestDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates an SQL statement diagnostics request.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call Database Autonomy Service (DAS), you must set the region to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *     *   ApsaraDB RDS for SQL Server
     *     *   PolarDB for MySQL
     *     *   PolarDB for PostgreSQL (compatible with Oracle)
     *     *   ApsaraDB for MongoDB
     * >  The minor engine version of ApsaraDB RDS for PostgreSQL instances must be 20221230 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
     *
     * @param request - CreateRequestDiagnosisRequest
     *
     * @returns CreateRequestDiagnosisResponse
     *
     * @param CreateRequestDiagnosisRequest $request
     *
     * @return CreateRequestDiagnosisResponse
     */
    public function createRequestDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRequestDiagnosisWithOptions($request, $runtime);
    }

    /**
     * Creates an offline task for Database Autonomy Service (DAS) Enterprise Edition.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   You can create an offline task only for database instances for which DAS Enterprise Edition V2 or V3 is enabled. For more information about the databases and regions that are supported by various versions of DAS Enterprise Edition, see [Editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *
     * @param request - CreateSqlLogTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSqlLogTaskResponse
     *
     * @param CreateSqlLogTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSqlLogTaskResponse
     */
    public function createSqlLogTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSqlLogTask',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSqlLogTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an offline task for Database Autonomy Service (DAS) Enterprise Edition.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   You can create an offline task only for database instances for which DAS Enterprise Edition V2 or V3 is enabled. For more information about the databases and regions that are supported by various versions of DAS Enterprise Edition, see [Editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *
     * @param request - CreateSqlLogTaskRequest
     *
     * @returns CreateSqlLogTaskResponse
     *
     * @param CreateSqlLogTaskRequest $request
     *
     * @return CreateSqlLogTaskResponse
     */
    public function createSqlLogTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSqlLogTaskWithOptions($request, $runtime);
    }

    /**
     * Creates a storage analysis task to query the usage details of one or more databases and tables.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and ApsaraDB for MongoDB instances.
     * *   For ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters, this operation works the same as the storage analysis feature of the previous version. Tasks generated by this operation cannot be viewed on the Storage Analysis page of the new version in the Database Autonomy Service (DAS) console. If you want to view the tasks and results, call the related API operation to obtain data and save data to your computer.
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - CreateStorageAnalysisTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStorageAnalysisTaskResponse
     *
     * @param CreateStorageAnalysisTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateStorageAnalysisTaskResponse
     */
    public function createStorageAnalysisTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateStorageAnalysisTask',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateStorageAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a storage analysis task to query the usage details of one or more databases and tables.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and ApsaraDB for MongoDB instances.
     * *   For ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters, this operation works the same as the storage analysis feature of the previous version. Tasks generated by this operation cannot be viewed on the Storage Analysis page of the new version in the Database Autonomy Service (DAS) console. If you want to view the tasks and results, call the related API operation to obtain data and save data to your computer.
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - CreateStorageAnalysisTaskRequest
     *
     * @returns CreateStorageAnalysisTaskResponse
     *
     * @param CreateStorageAnalysisTaskRequest $request
     *
     * @return CreateStorageAnalysisTaskResponse
     */
    public function createStorageAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStorageAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * Deletes a stress testing task.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to handle traffic spikes in an effective manner. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *
     * @param request - DeleteCloudBenchTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudBenchTaskResponse
     *
     * @param DeleteCloudBenchTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteCloudBenchTaskResponse
     */
    public function deleteCloudBenchTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudBenchTask',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudBenchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a stress testing task.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to handle traffic spikes in an effective manner. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *
     * @param request - DeleteCloudBenchTaskRequest
     *
     * @returns DeleteCloudBenchTaskResponse
     *
     * @param DeleteCloudBenchTaskRequest $request
     *
     * @return DeleteCloudBenchTaskResponse
     */
    public function deleteCloudBenchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudBenchTaskWithOptions($request, $runtime);
    }

    /**
     * Deletes the metadata of a stopped DBGateway.
     *
     * @remarks
     *   This operation is used to delete the metadata of a DBGateway that is released in a stress testing task created by calling the [CreateCloudBenchTasks](https://help.aliyun.com/document_detail/230665.html) operation.
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * >  If the heartbeat is lost between a DBGateway and the access point for more than 20 seconds, the DBGateway is considered stopped.
     *
     * @param request - DeleteStopGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStopGatewayResponse
     *
     * @param DeleteStopGatewayRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteStopGatewayResponse
     */
    public function deleteStopGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteStopGateway',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteStopGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the metadata of a stopped DBGateway.
     *
     * @remarks
     *   This operation is used to delete the metadata of a DBGateway that is released in a stress testing task created by calling the [CreateCloudBenchTasks](https://help.aliyun.com/document_detail/230665.html) operation.
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * >  If the heartbeat is lost between a DBGateway and the access point for more than 20 seconds, the DBGateway is considered stopped.
     *
     * @param request - DeleteStopGatewayRequest
     *
     * @returns DeleteStopGatewayResponse
     *
     * @param DeleteStopGatewayRequest $request
     *
     * @return DeleteStopGatewayResponse
     */
    public function deleteStopGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStopGatewayWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of the auto scaling feature for an instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - DescribeAutoScalingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutoScalingConfigResponse
     *
     * @param DescribeAutoScalingConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAutoScalingConfigResponse
     */
    public function describeAutoScalingConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAutoScalingConfig',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutoScalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of the auto scaling feature for an instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - DescribeAutoScalingConfigRequest
     *
     * @returns DescribeAutoScalingConfigResponse
     *
     * @param DescribeAutoScalingConfigRequest $request
     *
     * @return DescribeAutoScalingConfigResponse
     */
    public function describeAutoScalingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoScalingConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the auto scaling history of an instance.
     *
     * @remarks
     *   You can call this operation to query the history information about the automatic performance scaling only of ApsaraDB RDS for MySQL High-availability Edition instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - DescribeAutoScalingHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutoScalingHistoryResponse
     *
     * @param DescribeAutoScalingHistoryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAutoScalingHistoryResponse
     */
    public function describeAutoScalingHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAutoScalingHistory',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutoScalingHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the auto scaling history of an instance.
     *
     * @remarks
     *   You can call this operation to query the history information about the automatic performance scaling only of ApsaraDB RDS for MySQL High-availability Edition instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - DescribeAutoScalingHistoryRequest
     *
     * @returns DescribeAutoScalingHistoryResponse
     *
     * @param DescribeAutoScalingHistoryRequest $request
     *
     * @return DescribeAutoScalingHistoryResponse
     */
    public function describeAutoScalingHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoScalingHistoryWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a cache analysis task.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis.
     * >  You can call this operation to query the top 500 keys in a cache analysis task.
     *
     * @param request - DescribeCacheAnalysisJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCacheAnalysisJobResponse
     *
     * @param DescribeCacheAnalysisJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCacheAnalysisJobResponse
     */
    public function describeCacheAnalysisJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCacheAnalysisJob',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCacheAnalysisJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a cache analysis task.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis.
     * >  You can call this operation to query the top 500 keys in a cache analysis task.
     *
     * @param request - DescribeCacheAnalysisJobRequest
     *
     * @returns DescribeCacheAnalysisJobResponse
     *
     * @param DescribeCacheAnalysisJobRequest $request
     *
     * @return DescribeCacheAnalysisJobResponse
     */
    public function describeCacheAnalysisJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCacheAnalysisJobWithOptions($request, $runtime);
    }

    /**
     * Queries a list of cache analysis tasks.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis.
     *
     * @param request - DescribeCacheAnalysisJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCacheAnalysisJobsResponse
     *
     * @param DescribeCacheAnalysisJobsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCacheAnalysisJobsResponse
     */
    public function describeCacheAnalysisJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCacheAnalysisJobs',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCacheAnalysisJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of cache analysis tasks.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis.
     *
     * @param request - DescribeCacheAnalysisJobsRequest
     *
     * @returns DescribeCacheAnalysisJobsResponse
     *
     * @param DescribeCacheAnalysisJobsRequest $request
     *
     * @return DescribeCacheAnalysisJobsResponse
     */
    public function describeCacheAnalysisJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCacheAnalysisJobsWithOptions($request, $runtime);
    }

    /**
     * Queries stress testing tasks.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *
     * @param request - DescribeCloudBenchTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudBenchTasksResponse
     *
     * @param DescribeCloudBenchTasksRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCloudBenchTasksResponse
     */
    public function describeCloudBenchTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
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
            'action' => 'DescribeCloudBenchTasks',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudBenchTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries stress testing tasks.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *
     * @param request - DescribeCloudBenchTasksRequest
     *
     * @returns DescribeCloudBenchTasksResponse
     *
     * @param DescribeCloudBenchTasksRequest $request
     *
     * @return DescribeCloudBenchTasksResponse
     */
    public function describeCloudBenchTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudBenchTasksWithOptions($request, $runtime);
    }

    /**
     * Queries a stress testing task.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether you need to scale up your database instance to handle workloads during peak hours. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *
     * @param request - DescribeCloudbenchTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudbenchTaskResponse
     *
     * @param DescribeCloudbenchTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCloudbenchTaskResponse
     */
    public function describeCloudbenchTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudbenchTask',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudbenchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a stress testing task.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether you need to scale up your database instance to handle workloads during peak hours. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *
     * @param request - DescribeCloudbenchTaskRequest
     *
     * @returns DescribeCloudbenchTaskResponse
     *
     * @param DescribeCloudbenchTaskRequest $request
     *
     * @return DescribeCloudbenchTaskResponse
     */
    public function describeCloudbenchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudbenchTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of a stress testing task.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *
     * @param request - DescribeCloudbenchTaskConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudbenchTaskConfigResponse
     *
     * @param DescribeCloudbenchTaskConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCloudbenchTaskConfigResponse
     */
    public function describeCloudbenchTaskConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudbenchTaskConfig',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudbenchTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a stress testing task.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *
     * @param request - DescribeCloudbenchTaskConfigRequest
     *
     * @returns DescribeCloudbenchTaskConfigResponse
     *
     * @param DescribeCloudbenchTaskConfigRequest $request
     *
     * @return DescribeCloudbenchTaskConfigResponse
     */
    public function describeCloudbenchTaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudbenchTaskConfigWithOptions($request, $runtime);
    }

    /**
     * Queries diagnostics reports.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable to the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB for Redis
     *
     * @param request - DescribeDiagnosticReportListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiagnosticReportListResponse
     *
     * @param DescribeDiagnosticReportListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDiagnosticReportListResponse
     */
    public function describeDiagnosticReportListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiagnosticReportList',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiagnosticReportListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries diagnostics reports.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable to the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB for Redis
     *
     * @param request - DescribeDiagnosticReportListRequest
     *
     * @returns DescribeDiagnosticReportListResponse
     *
     * @param DescribeDiagnosticReportListRequest $request
     *
     * @return DescribeDiagnosticReportListResponse
     */
    public function describeDiagnosticReportList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosticReportListWithOptions($request, $runtime);
    }

    /**
     * Queries the hot keys and the large keys in the memory in real time.
     *
     * @remarks
     * This operation sorts list, hash, set, and zset keys based on the number of elements contained in these keys. The top three keys that contain the most elements are considered large keys. If the number of queries per second (QPS) of a key is greater than 3,000, the key is considered a hot key.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.2 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is available only for ApsaraDB for Redis instances that meet the following requirements:
     *     *   The instance is a Community Edition instance that uses a major version of 5.0 or later or a performance-enhanced instance of the Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     *
     * @param request - DescribeHotBigKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHotBigKeysResponse
     *
     * @param DescribeHotBigKeysRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeHotBigKeysResponse
     */
    public function describeHotBigKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHotBigKeys',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHotBigKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the hot keys and the large keys in the memory in real time.
     *
     * @remarks
     * This operation sorts list, hash, set, and zset keys based on the number of elements contained in these keys. The top three keys that contain the most elements are considered large keys. If the number of queries per second (QPS) of a key is greater than 3,000, the key is considered a hot key.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.2 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is available only for ApsaraDB for Redis instances that meet the following requirements:
     *     *   The instance is a Community Edition instance that uses a major version of 5.0 or later or a performance-enhanced instance of the Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     *
     * @param request - DescribeHotBigKeysRequest
     *
     * @returns DescribeHotBigKeysResponse
     *
     * @param DescribeHotBigKeysRequest $request
     *
     * @return DescribeHotBigKeysResponse
     */
    public function describeHotBigKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHotBigKeysWithOptions($request, $runtime);
    }

    /**
     * Queries the hot keys of an ApsaraDB for Redis instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V1.0.2 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis instances that meet the following requirements:
     *     *   The ApsaraDB for Redis instance is a Community Edition instance that uses a major version of 4.0 or later or a performance-enhanced instance of the Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     *
     * @param request - DescribeHotKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHotKeysResponse
     *
     * @param DescribeHotKeysRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeHotKeysResponse
     */
    public function describeHotKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHotKeys',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHotKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the hot keys of an ApsaraDB for Redis instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V1.0.2 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis instances that meet the following requirements:
     *     *   The ApsaraDB for Redis instance is a Community Edition instance that uses a major version of 4.0 or later or a performance-enhanced instance of the Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     *
     * @param request - DescribeHotKeysRequest
     *
     * @returns DescribeHotKeysResponse
     *
     * @param DescribeHotKeysRequest $request
     *
     * @return DescribeHotKeysResponse
     */
    public function describeHotKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHotKeysWithOptions($request, $runtime);
    }

    /**
     * Queries whether Database Autonomy Service (DAS) Enterprise Edition V1 or V2 is enabled for a database instance.
     *
     * @remarks
     *   For more information about the database instances that support DAS Enterprise Edition, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1 and V2.
     * >  We recommend that you call the [DescribeSqlLogConfig](https://help.aliyun.com/document_detail/2778837.html) operation to query the DAS Enterprise Edition configurations of a database instance.
     *
     * @param request - DescribeInstanceDasProRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceDasProResponse
     *
     * @param DescribeInstanceDasProRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstanceDasProResponse
     */
    public function describeInstanceDasProWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceDasPro',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceDasProResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether Database Autonomy Service (DAS) Enterprise Edition V1 or V2 is enabled for a database instance.
     *
     * @remarks
     *   For more information about the database instances that support DAS Enterprise Edition, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1 and V2.
     * >  We recommend that you call the [DescribeSqlLogConfig](https://help.aliyun.com/document_detail/2778837.html) operation to query the DAS Enterprise Edition configurations of a database instance.
     *
     * @param request - DescribeInstanceDasProRequest
     *
     * @returns DescribeInstanceDasProResponse
     *
     * @param DescribeInstanceDasProRequest $request
     *
     * @return DescribeInstanceDasProResponse
     */
    public function describeInstanceDasPro($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceDasProWithOptions($request, $runtime);
    }

    /**
     * 获取执行计划.
     *
     * @param request - DescribeQueryExplainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeQueryExplainResponse
     *
     * @param DescribeQueryExplainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeQueryExplainResponse
     */
    public function describeQueryExplainWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dbName) {
            @$body['DbName'] = $request->dbName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->schema) {
            @$body['Schema'] = $request->schema;
        }

        if (null !== $request->sql) {
            @$body['Sql'] = $request->sql;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeQueryExplain',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeQueryExplainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取执行计划.
     *
     * @param request - DescribeQueryExplainRequest
     *
     * @returns DescribeQueryExplainResponse
     *
     * @param DescribeQueryExplainRequest $request
     *
     * @return DescribeQueryExplainResponse
     */
    public function describeQueryExplain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQueryExplainWithOptions($request, $runtime);
    }

    /**
     * DescribeSlowLogHistogramAsync.
     *
     * @param request - DescribeSlowLogHistogramAsyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlowLogHistogramAsyncResponse
     *
     * @param DescribeSlowLogHistogramAsyncRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSlowLogHistogramAsyncResponse
     */
    public function describeSlowLogHistogramAsyncWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->filters) {
            @$body['Filters'] = $request->filters;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSlowLogHistogramAsync',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSlowLogHistogramAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeSlowLogHistogramAsync.
     *
     * @param request - DescribeSlowLogHistogramAsyncRequest
     *
     * @returns DescribeSlowLogHistogramAsyncResponse
     *
     * @param DescribeSlowLogHistogramAsyncRequest $request
     *
     * @return DescribeSlowLogHistogramAsyncResponse
     */
    public function describeSlowLogHistogramAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogHistogramAsyncWithOptions($request, $runtime);
    }

    /**
     * 查看慢日志明细接口.
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
        if (null !== $request->asc) {
            @$query['Asc'] = $request->asc;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->filters) {
            @$body['Filters'] = $request->filters;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSlowLogRecords',
            'version' => '2020-01-16',
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
     * 查看慢日志明细接口.
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
     * 慢日志统计信息.
     *
     * @param request - DescribeSlowLogStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlowLogStatisticResponse
     *
     * @param DescribeSlowLogStatisticRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSlowLogStatisticResponse
     */
    public function describeSlowLogStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->asc) {
            @$body['Asc'] = $request->asc;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->filters) {
            @$body['Filters'] = $request->filters;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->orderBy) {
            @$body['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSlowLogStatistic',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSlowLogStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 慢日志统计信息.
     *
     * @param request - DescribeSlowLogStatisticRequest
     *
     * @returns DescribeSlowLogStatisticResponse
     *
     * @param DescribeSlowLogStatisticRequest $request
     *
     * @return DescribeSlowLogStatisticResponse
     */
    public function describeSlowLogStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of Database Autonomy Service (DAS) Enterprise Edition that is enabled for a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - DescribeSqlLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSqlLogConfigResponse
     *
     * @param DescribeSqlLogConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSqlLogConfigResponse
     */
    public function describeSqlLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSqlLogConfig',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSqlLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of Database Autonomy Service (DAS) Enterprise Edition that is enabled for a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - DescribeSqlLogConfigRequest
     *
     * @returns DescribeSqlLogConfigResponse
     *
     * @param DescribeSqlLogConfigRequest $request
     *
     * @return DescribeSqlLogConfigResponse
     */
    public function describeSqlLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlLogConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the log details of a database instance for which Database Autonomy Service (DAS) Enterprise Edition is enabled.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - DescribeSqlLogRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSqlLogRecordsResponse
     *
     * @param DescribeSqlLogRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSqlLogRecordsResponse
     */
    public function describeSqlLogRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->pageNo) {
            @$body['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSqlLogRecords',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSqlLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the log details of a database instance for which Database Autonomy Service (DAS) Enterprise Edition is enabled.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - DescribeSqlLogRecordsRequest
     *
     * @returns DescribeSqlLogRecordsResponse
     *
     * @param DescribeSqlLogRecordsRequest $request
     *
     * @return DescribeSqlLogRecordsResponse
     */
    public function describeSqlLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlLogRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics of Database Autonomy Service (DAS) Enterprise Edition.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - DescribeSqlLogStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSqlLogStatisticResponse
     *
     * @param DescribeSqlLogStatisticRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSqlLogStatisticResponse
     */
    public function describeSqlLogStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSqlLogStatistic',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSqlLogStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics of Database Autonomy Service (DAS) Enterprise Edition.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - DescribeSqlLogStatisticRequest
     *
     * @returns DescribeSqlLogStatisticResponse
     *
     * @param DescribeSqlLogStatisticRequest $request
     *
     * @return DescribeSqlLogStatisticResponse
     */
    public function describeSqlLogStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlLogStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an offline task in Database Autonomy Service (DAS) Enterprise Edition.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - DescribeSqlLogTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSqlLogTaskResponse
     *
     * @param DescribeSqlLogTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSqlLogTaskResponse
     */
    public function describeSqlLogTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$body['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSqlLogTask',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSqlLogTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an offline task in Database Autonomy Service (DAS) Enterprise Edition.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - DescribeSqlLogTaskRequest
     *
     * @returns DescribeSqlLogTaskResponse
     *
     * @param DescribeSqlLogTaskRequest $request
     *
     * @return DescribeSqlLogTaskResponse
     */
    public function describeSqlLogTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlLogTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the audit log tasks of a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - DescribeSqlLogTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSqlLogTasksResponse
     *
     * @param DescribeSqlLogTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSqlLogTasksResponse
     */
    public function describeSqlLogTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->filters) {
            @$body['Filters'] = $request->filters;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->pageNo) {
            @$body['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSqlLogTasks',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSqlLogTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the audit log tasks of a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - DescribeSqlLogTasksRequest
     *
     * @returns DescribeSqlLogTasksResponse
     *
     * @param DescribeSqlLogTasksRequest $request
     *
     * @return DescribeSqlLogTasksResponse
     */
    public function describeSqlLogTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlLogTasksWithOptions($request, $runtime);
    }

    /**
     * Queries the top 100 large keys over a period of time.
     *
     * @remarks
     * The list, hash, set, and zset keys are sorted based on the number of elements in these keys. The top three keys that have the most elements are considered large keys.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.2 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is available only for an ApsaraDB for Redis instance of one of the following versions:
     *     *   The instance is ApsaraDB for Redis Community Edition instances that use a major version of 5.0 or later or a performance-enhanced instance of the ApsaraDB for Redis Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     *
     * @param request - DescribeTopBigKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTopBigKeysResponse
     *
     * @param DescribeTopBigKeysRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeTopBigKeysResponse
     */
    public function describeTopBigKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTopBigKeys',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTopBigKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the top 100 large keys over a period of time.
     *
     * @remarks
     * The list, hash, set, and zset keys are sorted based on the number of elements in these keys. The top three keys that have the most elements are considered large keys.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.2 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is available only for an ApsaraDB for Redis instance of one of the following versions:
     *     *   The instance is ApsaraDB for Redis Community Edition instances that use a major version of 5.0 or later or a performance-enhanced instance of the ApsaraDB for Redis Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     *
     * @param request - DescribeTopBigKeysRequest
     *
     * @returns DescribeTopBigKeysResponse
     *
     * @param DescribeTopBigKeysRequest $request
     *
     * @return DescribeTopBigKeysResponse
     */
    public function describeTopBigKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTopBigKeysWithOptions($request, $runtime);
    }

    /**
     * Queries the top 100 hotkeys over a period of time.
     *
     * @remarks
     * If the number of queries per second (QPS) of a key is greater than 3,000, the key is considered a hot key.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.2 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is available only for an ApsaraDB for Redis instance of one of the following versions:
     *     *   The instance is a Community Edition instance that uses a major version of 4.0 or later or a performance-enhanced instance of the Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     *
     * @param request - DescribeTopHotKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTopHotKeysResponse
     *
     * @param DescribeTopHotKeysRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeTopHotKeysResponse
     */
    public function describeTopHotKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTopHotKeys',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTopHotKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the top 100 hotkeys over a period of time.
     *
     * @remarks
     * If the number of queries per second (QPS) of a key is greater than 3,000, the key is considered a hot key.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.2 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is available only for an ApsaraDB for Redis instance of one of the following versions:
     *     *   The instance is a Community Edition instance that uses a major version of 4.0 or later or a performance-enhanced instance of the Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     *
     * @param request - DescribeTopHotKeysRequest
     *
     * @returns DescribeTopHotKeysResponse
     *
     * @param DescribeTopHotKeysRequest $request
     *
     * @return DescribeTopHotKeysResponse
     */
    public function describeTopHotKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTopHotKeysWithOptions($request, $runtime);
    }

    /**
     * Disables all throttling rules that are in effect.
     *
     * @remarks
     * This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *
     * @param request - DisableAllSqlConcurrencyControlRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableAllSqlConcurrencyControlRulesResponse
     *
     * @param DisableAllSqlConcurrencyControlRulesRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DisableAllSqlConcurrencyControlRulesResponse
     */
    public function disableAllSqlConcurrencyControlRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableAllSqlConcurrencyControlRules',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableAllSqlConcurrencyControlRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables all throttling rules that are in effect.
     *
     * @remarks
     * This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *
     * @param request - DisableAllSqlConcurrencyControlRulesRequest
     *
     * @returns DisableAllSqlConcurrencyControlRulesResponse
     *
     * @param DisableAllSqlConcurrencyControlRulesRequest $request
     *
     * @return DisableAllSqlConcurrencyControlRulesResponse
     */
    public function disableAllSqlConcurrencyControlRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAllSqlConcurrencyControlRulesWithOptions($request, $runtime);
    }

    /**
     * Disables the automatic tablespace fragment recycling feature for database instances at a time.
     *
     * @remarks
     * If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     *
     * @param request - DisableAutoResourceOptimizeRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableAutoResourceOptimizeRulesResponse
     *
     * @param DisableAutoResourceOptimizeRulesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DisableAutoResourceOptimizeRulesResponse
     */
    public function disableAutoResourceOptimizeRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableAutoResourceOptimizeRules',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableAutoResourceOptimizeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the automatic tablespace fragment recycling feature for database instances at a time.
     *
     * @remarks
     * If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     *
     * @param request - DisableAutoResourceOptimizeRulesRequest
     *
     * @returns DisableAutoResourceOptimizeRulesResponse
     *
     * @param DisableAutoResourceOptimizeRulesRequest $request
     *
     * @return DisableAutoResourceOptimizeRulesResponse
     */
    public function disableAutoResourceOptimizeRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAutoResourceOptimizeRulesWithOptions($request, $runtime);
    }

    /**
     * Disables the automatic SQL throttling feature for multiple database instances at a time.
     *
     * @remarks
     * If you use an SDK to call operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     *
     * @param request - DisableAutoThrottleRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableAutoThrottleRulesResponse
     *
     * @param DisableAutoThrottleRulesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DisableAutoThrottleRulesResponse
     */
    public function disableAutoThrottleRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableAutoThrottleRules',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableAutoThrottleRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the automatic SQL throttling feature for multiple database instances at a time.
     *
     * @remarks
     * If you use an SDK to call operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     *
     * @param request - DisableAutoThrottleRulesRequest
     *
     * @returns DisableAutoThrottleRulesResponse
     *
     * @param DisableAutoThrottleRulesRequest $request
     *
     * @return DisableAutoThrottleRulesResponse
     */
    public function disableAutoThrottleRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAutoThrottleRulesWithOptions($request, $runtime);
    }

    /**
     * Deactivates Database Autonomy Service (DAS) Professional Edition.
     *
     * @remarks
     *   For more information about the database instances that support DAS Enterprise Edition, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1.
     * >  We recommend that you call the [ModifySqlLogConfig](https://help.aliyun.com/document_detail/2778835.html) operation to enable or disable DAS Enterprise Edition for a database instance. For more information about the databases and regions supported by each version of DAS Enterprise Edition, see [Editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *
     * @param request - DisableDasProRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableDasProResponse
     *
     * @param DisableDasProRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DisableDasProResponse
     */
    public function disableDasProWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableDasPro',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableDasProResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deactivates Database Autonomy Service (DAS) Professional Edition.
     *
     * @remarks
     *   For more information about the database instances that support DAS Enterprise Edition, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1.
     * >  We recommend that you call the [ModifySqlLogConfig](https://help.aliyun.com/document_detail/2778835.html) operation to enable or disable DAS Enterprise Edition for a database instance. For more information about the databases and regions supported by each version of DAS Enterprise Edition, see [Editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *
     * @param request - DisableDasProRequest
     *
     * @returns DisableDasProResponse
     *
     * @param DisableDasProRequest $request
     *
     * @return DisableDasProResponse
     */
    public function disableDasPro($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDasProWithOptions($request, $runtime);
    }

    /**
     * Disables the auto scaling feature for a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis instances.
     *
     * @param request - DisableInstanceDasConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableInstanceDasConfigResponse
     *
     * @param DisableInstanceDasConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DisableInstanceDasConfigResponse
     */
    public function disableInstanceDasConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scaleType) {
            @$query['ScaleType'] = $request->scaleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableInstanceDasConfig',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableInstanceDasConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the auto scaling feature for a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis instances.
     *
     * @param request - DisableInstanceDasConfigRequest
     *
     * @returns DisableInstanceDasConfigResponse
     *
     * @param DisableInstanceDasConfigRequest $request
     *
     * @return DisableInstanceDasConfigResponse
     */
    public function disableInstanceDasConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableInstanceDasConfigWithOptions($request, $runtime);
    }

    /**
     * Disables a throttling rule.
     *
     * @remarks
     * This operation is applicable to the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *
     * @param request - DisableSqlConcurrencyControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableSqlConcurrencyControlResponse
     *
     * @param DisableSqlConcurrencyControlRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DisableSqlConcurrencyControlResponse
     */
    public function disableSqlConcurrencyControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->itemId) {
            @$query['ItemId'] = $request->itemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableSqlConcurrencyControl',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableSqlConcurrencyControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a throttling rule.
     *
     * @remarks
     * This operation is applicable to the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *
     * @param request - DisableSqlConcurrencyControlRequest
     *
     * @returns DisableSqlConcurrencyControlResponse
     *
     * @param DisableSqlConcurrencyControlRequest $request
     *
     * @return DisableSqlConcurrencyControlResponse
     */
    public function disableSqlConcurrencyControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSqlConcurrencyControlWithOptions($request, $runtime);
    }

    /**
     * Activates Database Autonomy Service (DAS) Professional Edition.
     *
     * @remarks
     *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1.
     * >  We recommend that you call the [ModifySqlLogConfig](https://help.aliyun.com/document_detail/2778835.html) operation to activate or deactivate DAS Enterprise Edition for a database instance. For more information about the databases and regions supported by each version of DAS Enterprise Edition, see [DAS editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *
     * @param request - EnableDasProRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableDasProResponse
     *
     * @param EnableDasProRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EnableDasProResponse
     */
    public function enableDasProWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sqlRetention) {
            @$query['SqlRetention'] = $request->sqlRetention;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableDasPro',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableDasProResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates Database Autonomy Service (DAS) Professional Edition.
     *
     * @remarks
     *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1.
     * >  We recommend that you call the [ModifySqlLogConfig](https://help.aliyun.com/document_detail/2778835.html) operation to activate or deactivate DAS Enterprise Edition for a database instance. For more information about the databases and regions supported by each version of DAS Enterprise Edition, see [DAS editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *
     * @param request - EnableDasProRequest
     *
     * @returns EnableDasProResponse
     *
     * @param EnableDasProRequest $request
     *
     * @return EnableDasProResponse
     */
    public function enableDasPro($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDasProWithOptions($request, $runtime);
    }

    /**
     * Enables SQL throttling to control the numbers of database access requests and concurrent SQL statements.
     *
     * @remarks
     * This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *
     * @param request - EnableSqlConcurrencyControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableSqlConcurrencyControlResponse
     *
     * @param EnableSqlConcurrencyControlRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnableSqlConcurrencyControlResponse
     */
    public function enableSqlConcurrencyControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->concurrencyControlTime) {
            @$query['ConcurrencyControlTime'] = $request->concurrencyControlTime;
        }

        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxConcurrency) {
            @$query['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->sqlKeywords) {
            @$query['SqlKeywords'] = $request->sqlKeywords;
        }

        if (null !== $request->sqlType) {
            @$query['SqlType'] = $request->sqlType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableSqlConcurrencyControl',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableSqlConcurrencyControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables SQL throttling to control the numbers of database access requests and concurrent SQL statements.
     *
     * @remarks
     * This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *
     * @param request - EnableSqlConcurrencyControlRequest
     *
     * @returns EnableSqlConcurrencyControlResponse
     *
     * @param EnableSqlConcurrencyControlRequest $request
     *
     * @return EnableSqlConcurrencyControlResponse
     */
    public function enableSqlConcurrencyControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSqlConcurrencyControlWithOptions($request, $runtime);
    }

    /**
     * Asynchronously queries the IDs of SQL statements that generate a MySQL error code in the SQL Explorer results of a database instance.
     *
     * @remarks
     * >  GetAsyncErrorRequestListByCode is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of the **isFinish** parameter is **false** in the response, wait for 1 second and then send a request again. If the value of the **isFinish** parameter is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Enable and manage DAS Economy Edition and DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   When you call this operation, the value of the SqlId parameter changes due to the optimization of the SQL template algorithm starting from September 1, 2024. For more information, see [[Notice\\] Optimization of the SQL template algorithm](~~2845725~~).
     *
     * @param request - GetAsyncErrorRequestListByCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsyncErrorRequestListByCodeResponse
     *
     * @param GetAsyncErrorRequestListByCodeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetAsyncErrorRequestListByCodeResponse
     */
    public function getAsyncErrorRequestListByCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->end) {
            @$query['End'] = $request->end;
        }

        if (null !== $request->errorCode) {
            @$query['ErrorCode'] = $request->errorCode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAsyncErrorRequestListByCode',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAsyncErrorRequestListByCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Asynchronously queries the IDs of SQL statements that generate a MySQL error code in the SQL Explorer results of a database instance.
     *
     * @remarks
     * >  GetAsyncErrorRequestListByCode is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of the **isFinish** parameter is **false** in the response, wait for 1 second and then send a request again. If the value of the **isFinish** parameter is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Enable and manage DAS Economy Edition and DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   When you call this operation, the value of the SqlId parameter changes due to the optimization of the SQL template algorithm starting from September 1, 2024. For more information, see [[Notice\\] Optimization of the SQL template algorithm](~~2845725~~).
     *
     * @param request - GetAsyncErrorRequestListByCodeRequest
     *
     * @returns GetAsyncErrorRequestListByCodeResponse
     *
     * @param GetAsyncErrorRequestListByCodeRequest $request
     *
     * @return GetAsyncErrorRequestListByCodeResponse
     */
    public function getAsyncErrorRequestListByCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncErrorRequestListByCodeWithOptions($request, $runtime);
    }

    /**
     * Asynchronously queries the MySQL error codes in SQL Explorer data and the number of SQL queries corresponding to each error code.
     *
     * @remarks
     * >  GetAsyncErrorRequestStatByCode is an asynchronous operation After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetAsyncErrorRequestStatByCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsyncErrorRequestStatByCodeResponse
     *
     * @param GetAsyncErrorRequestStatByCodeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetAsyncErrorRequestStatByCodeResponse
     */
    public function getAsyncErrorRequestStatByCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->end) {
            @$query['End'] = $request->end;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAsyncErrorRequestStatByCode',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAsyncErrorRequestStatByCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Asynchronously queries the MySQL error codes in SQL Explorer data and the number of SQL queries corresponding to each error code.
     *
     * @remarks
     * >  GetAsyncErrorRequestStatByCode is an asynchronous operation After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetAsyncErrorRequestStatByCodeRequest
     *
     * @returns GetAsyncErrorRequestStatByCodeResponse
     *
     * @param GetAsyncErrorRequestStatByCodeRequest $request
     *
     * @return GetAsyncErrorRequestStatByCodeResponse
     */
    public function getAsyncErrorRequestStatByCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncErrorRequestStatByCodeWithOptions($request, $runtime);
    }

    /**
     * Asynchronously obtains the number of failed executions of SQL templates based on SQL Explorer data.
     *
     * @remarks
     * >  GetAsyncErrorRequestStatResult is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetAsyncErrorRequestStatResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsyncErrorRequestStatResultResponse
     *
     * @param GetAsyncErrorRequestStatResultRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetAsyncErrorRequestStatResultResponse
     */
    public function getAsyncErrorRequestStatResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->end) {
            @$query['End'] = $request->end;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->sqlIdList) {
            @$query['SqlIdList'] = $request->sqlIdList;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAsyncErrorRequestStatResult',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAsyncErrorRequestStatResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Asynchronously obtains the number of failed executions of SQL templates based on SQL Explorer data.
     *
     * @remarks
     * >  GetAsyncErrorRequestStatResult is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetAsyncErrorRequestStatResultRequest
     *
     * @returns GetAsyncErrorRequestStatResultResponse
     *
     * @param GetAsyncErrorRequestStatResultRequest $request
     *
     * @return GetAsyncErrorRequestStatResultResponse
     */
    public function getAsyncErrorRequestStatResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncErrorRequestStatResultWithOptions($request, $runtime);
    }

    /**
     * Queries the usage of auto-increment table IDs.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call DAS, you must set the region to cn-shanghai.
     *
     * @param request - GetAutoIncrementUsageStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAutoIncrementUsageStatisticResponse
     *
     * @param GetAutoIncrementUsageStatisticRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetAutoIncrementUsageStatisticResponse
     */
    public function getAutoIncrementUsageStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbNames) {
            @$query['DbNames'] = $request->dbNames;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ratioFilter) {
            @$query['RatioFilter'] = $request->ratioFilter;
        }

        if (null !== $request->realTime) {
            @$query['RealTime'] = $request->realTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAutoIncrementUsageStatistic',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAutoIncrementUsageStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage of auto-increment table IDs.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call DAS, you must set the region to cn-shanghai.
     *
     * @param request - GetAutoIncrementUsageStatisticRequest
     *
     * @returns GetAutoIncrementUsageStatisticResponse
     *
     * @param GetAutoIncrementUsageStatisticRequest $request
     *
     * @return GetAutoIncrementUsageStatisticResponse
     */
    public function getAutoIncrementUsageStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoIncrementUsageStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries the automatic fragment recycling rules of database instances.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The database instance is an ApsaraDB RDS for MySQL instance of High-availability Edition.
     * *   The database instance has four or more cores, and **innodb_file_per_table** is set to **ON**.
     *
     * @param request - GetAutoResourceOptimizeRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAutoResourceOptimizeRulesResponse
     *
     * @param GetAutoResourceOptimizeRulesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetAutoResourceOptimizeRulesResponse
     */
    public function getAutoResourceOptimizeRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAutoResourceOptimizeRules',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAutoResourceOptimizeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the automatic fragment recycling rules of database instances.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The database instance is an ApsaraDB RDS for MySQL instance of High-availability Edition.
     * *   The database instance has four or more cores, and **innodb_file_per_table** is set to **ON**.
     *
     * @param request - GetAutoResourceOptimizeRulesRequest
     *
     * @returns GetAutoResourceOptimizeRulesResponse
     *
     * @param GetAutoResourceOptimizeRulesRequest $request
     *
     * @return GetAutoResourceOptimizeRulesResponse
     */
    public function getAutoResourceOptimizeRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoResourceOptimizeRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the automatic SQL throttling rules of a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The database instance that you want to manage must be of one of the following types:
     *     *   ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *     *   PolarDB for MySQL Cluster Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *
     * @param request - GetAutoThrottleRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAutoThrottleRulesResponse
     *
     * @param GetAutoThrottleRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAutoThrottleRulesResponse
     */
    public function getAutoThrottleRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAutoThrottleRules',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAutoThrottleRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the automatic SQL throttling rules of a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The database instance that you want to manage must be of one of the following types:
     *     *   ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *     *   PolarDB for MySQL Cluster Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *
     * @param request - GetAutoThrottleRulesRequest
     *
     * @returns GetAutoThrottleRulesResponse
     *
     * @param GetAutoThrottleRulesRequest $request
     *
     * @return GetAutoThrottleRulesResponse
     */
    public function getAutoThrottleRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoThrottleRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of notification events of a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   After your instance is connected to DAS, notification events such as snapshot capture are triggered if DAS detects changes to database monitoring metrics during anomaly detection.
     * >  You can query the details of notification events only if the autonomy center is enabled. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     *
     * @param request - GetAutonomousNotifyEventContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAutonomousNotifyEventContentResponse
     *
     * @param GetAutonomousNotifyEventContentRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetAutonomousNotifyEventContentResponse
     */
    public function getAutonomousNotifyEventContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->spanId) {
            @$query['SpanId'] = $request->spanId;
        }

        if (null !== $request->context) {
            @$query['__context'] = $request->context;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAutonomousNotifyEventContent',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAutonomousNotifyEventContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of notification events of a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   After your instance is connected to DAS, notification events such as snapshot capture are triggered if DAS detects changes to database monitoring metrics during anomaly detection.
     * >  You can query the details of notification events only if the autonomy center is enabled. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     *
     * @param request - GetAutonomousNotifyEventContentRequest
     *
     * @returns GetAutonomousNotifyEventContentResponse
     *
     * @param GetAutonomousNotifyEventContentRequest $request
     *
     * @return GetAutonomousNotifyEventContentResponse
     */
    public function getAutonomousNotifyEventContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutonomousNotifyEventContentWithOptions($request, $runtime);
    }

    /**
     * Queries the notification events of one or more urgency levels within a period.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   After your instance is connected to DAS, notification events such as snapshot capture are triggered if DAS detects changes to database monitoring metrics during anomaly detection.
     * >  You can query the details of notification events only if the autonomy center is enabled. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     *
     * @param request - GetAutonomousNotifyEventsInRangeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAutonomousNotifyEventsInRangeResponse
     *
     * @param GetAutonomousNotifyEventsInRangeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetAutonomousNotifyEventsInRangeResponse
     */
    public function getAutonomousNotifyEventsInRangeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventContext) {
            @$query['EventContext'] = $request->eventContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->minLevel) {
            @$query['MinLevel'] = $request->minLevel;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->pageOffset) {
            @$query['PageOffset'] = $request->pageOffset;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->context) {
            @$query['__context'] = $request->context;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAutonomousNotifyEventsInRange',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAutonomousNotifyEventsInRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the notification events of one or more urgency levels within a period.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   After your instance is connected to DAS, notification events such as snapshot capture are triggered if DAS detects changes to database monitoring metrics during anomaly detection.
     * >  You can query the details of notification events only if the autonomy center is enabled. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     *
     * @param request - GetAutonomousNotifyEventsInRangeRequest
     *
     * @returns GetAutonomousNotifyEventsInRangeResponse
     *
     * @param GetAutonomousNotifyEventsInRangeRequest $request
     *
     * @return GetAutonomousNotifyEventsInRangeResponse
     */
    public function getAutonomousNotifyEventsInRange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutonomousNotifyEventsInRangeWithOptions($request, $runtime);
    }

    /**
     * Queries the blocking data of an ApsaraDB RDS for SQL Server instance.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetBlockingDetailListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBlockingDetailListResponse
     *
     * @param GetBlockingDetailListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetBlockingDetailListResponse
     */
    public function getBlockingDetailListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbNameList) {
            @$query['DbNameList'] = $request->dbNameList;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryHash) {
            @$query['QueryHash'] = $request->queryHash;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBlockingDetailList',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBlockingDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the blocking data of an ApsaraDB RDS for SQL Server instance.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetBlockingDetailListRequest
     *
     * @returns GetBlockingDetailListResponse
     *
     * @param GetBlockingDetailListRequest $request
     *
     * @return GetBlockingDetailListResponse
     */
    public function getBlockingDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBlockingDetailListWithOptions($request, $runtime);
    }

    /**
     * Queries the diagnosis of network connectivity when a user accesses a specific database instance by specifying an IP address.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   The database instance that you want to manage is connected to DAS.
     *
     * @param request - GetDBInstanceConnectivityDiagnosisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDBInstanceConnectivityDiagnosisResponse
     *
     * @param GetDBInstanceConnectivityDiagnosisRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetDBInstanceConnectivityDiagnosisResponse
     */
    public function getDBInstanceConnectivityDiagnosisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->srcIp) {
            @$query['SrcIp'] = $request->srcIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDBInstanceConnectivityDiagnosis',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDBInstanceConnectivityDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the diagnosis of network connectivity when a user accesses a specific database instance by specifying an IP address.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   The database instance that you want to manage is connected to DAS.
     *
     * @param request - GetDBInstanceConnectivityDiagnosisRequest
     *
     * @returns GetDBInstanceConnectivityDiagnosisResponse
     *
     * @param GetDBInstanceConnectivityDiagnosisRequest $request
     *
     * @return GetDBInstanceConnectivityDiagnosisResponse
     */
    public function getDBInstanceConnectivityDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDBInstanceConnectivityDiagnosisWithOptions($request, $runtime);
    }

    /**
     * Queries the storage usage of a database instance for which Database Autonomy Service (DAS) Enterprise Edition V1 or V2 is enabled.
     *
     * @remarks
     *   For information about the database instances that support this operation, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1 and V2.
     * >  We recommend that you call the [DescribeSqlLogStatistic](https://help.aliyun.com/document_detail/2778836.html) operation to query the data statistics of a database instance for which DAS Enterprise Edition is enabled.
     *
     * @param request - GetDasProServiceUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDasProServiceUsageResponse
     *
     * @param GetDasProServiceUsageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDasProServiceUsageResponse
     */
    public function getDasProServiceUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDasProServiceUsage',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDasProServiceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage usage of a database instance for which Database Autonomy Service (DAS) Enterprise Edition V1 or V2 is enabled.
     *
     * @remarks
     *   For information about the database instances that support this operation, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1 and V2.
     * >  We recommend that you call the [DescribeSqlLogStatistic](https://help.aliyun.com/document_detail/2778836.html) operation to query the data statistics of a database instance for which DAS Enterprise Edition is enabled.
     *
     * @param request - GetDasProServiceUsageRequest
     *
     * @returns GetDasProServiceUsageResponse
     *
     * @param GetDasProServiceUsageRequest $request
     *
     * @return GetDasProServiceUsageResponse
     */
    public function getDasProServiceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDasProServiceUsageWithOptions($request, $runtime);
    }

    /**
     * Queries the hot data of audit logs.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable to PolarDB for MySQL, ApsaraDB RDS for MySQL, ApsaraDB RDS for PostgreSQL, and ApsaraDB RDS for SQL Server.
     * >  The beginning of the time range to query can be up to seven days earlier than the current time. The interval between the start time and the end time cannot exceed one day. This operation can return a maximum of 10,000 entries.
     *
     * @param request - GetDasSQLLogHotDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDasSQLLogHotDataResponse
     *
     * @param GetDasSQLLogHotDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDasSQLLogHotDataResponse
     */
    public function getDasSQLLogHotDataWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->childDBInstanceIDs) {
            @$body['ChildDBInstanceIDs'] = $request->childDBInstanceIDs;
        }

        if (null !== $request->DBName) {
            @$body['DBName'] = $request->DBName;
        }

        if (null !== $request->end) {
            @$body['End'] = $request->end;
        }

        if (null !== $request->fail) {
            @$body['Fail'] = $request->fail;
        }

        if (null !== $request->hostAddress) {
            @$body['HostAddress'] = $request->hostAddress;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logicalOperator) {
            @$body['LogicalOperator'] = $request->logicalOperator;
        }

        if (null !== $request->maxLatancy) {
            @$body['MaxLatancy'] = $request->maxLatancy;
        }

        if (null !== $request->maxRecordsPerPage) {
            @$body['MaxRecordsPerPage'] = $request->maxRecordsPerPage;
        }

        if (null !== $request->maxRows) {
            @$body['MaxRows'] = $request->maxRows;
        }

        if (null !== $request->maxScanRows) {
            @$body['MaxScanRows'] = $request->maxScanRows;
        }

        if (null !== $request->maxSpillCnt) {
            @$body['MaxSpillCnt'] = $request->maxSpillCnt;
        }

        if (null !== $request->minLatancy) {
            @$body['MinLatancy'] = $request->minLatancy;
        }

        if (null !== $request->minRows) {
            @$body['MinRows'] = $request->minRows;
        }

        if (null !== $request->minScanRows) {
            @$body['MinScanRows'] = $request->minScanRows;
        }

        if (null !== $request->minSpillCnt) {
            @$body['MinSpillCnt'] = $request->minSpillCnt;
        }

        if (null !== $request->pageNumbers) {
            @$body['PageNumbers'] = $request->pageNumbers;
        }

        if (null !== $request->queryKeyword) {
            @$body['QueryKeyword'] = $request->queryKeyword;
        }

        if (null !== $request->role) {
            @$body['Role'] = $request->role;
        }

        if (null !== $request->sortKey) {
            @$body['SortKey'] = $request->sortKey;
        }

        if (null !== $request->sortMethod) {
            @$body['SortMethod'] = $request->sortMethod;
        }

        if (null !== $request->sqlType) {
            @$body['SqlType'] = $request->sqlType;
        }

        if (null !== $request->start) {
            @$body['Start'] = $request->start;
        }

        if (null !== $request->state) {
            @$body['State'] = $request->state;
        }

        if (null !== $request->threadID) {
            @$body['ThreadID'] = $request->threadID;
        }

        if (null !== $request->traceId) {
            @$body['TraceId'] = $request->traceId;
        }

        if (null !== $request->transactionId) {
            @$body['TransactionId'] = $request->transactionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDasSQLLogHotData',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDasSQLLogHotDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the hot data of audit logs.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable to PolarDB for MySQL, ApsaraDB RDS for MySQL, ApsaraDB RDS for PostgreSQL, and ApsaraDB RDS for SQL Server.
     * >  The beginning of the time range to query can be up to seven days earlier than the current time. The interval between the start time and the end time cannot exceed one day. This operation can return a maximum of 10,000 entries.
     *
     * @param request - GetDasSQLLogHotDataRequest
     *
     * @returns GetDasSQLLogHotDataResponse
     *
     * @param GetDasSQLLogHotDataRequest $request
     *
     * @return GetDasSQLLogHotDataResponse
     */
    public function getDasSQLLogHotData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDasSQLLogHotDataWithOptions($request, $runtime);
    }

    /**
     * 查询单个死锁详情.
     *
     * @param request - GetDeadLockDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeadLockDetailResponse
     *
     * @param GetDeadLockDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDeadLockDetailResponse
     */
    public function getDeadLockDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->textId) {
            @$query['TextId'] = $request->textId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDeadLockDetail',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeadLockDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询单个死锁详情.
     *
     * @param request - GetDeadLockDetailRequest
     *
     * @returns GetDeadLockDetailResponse
     *
     * @param GetDeadLockDetailRequest $request
     *
     * @return GetDeadLockDetailResponse
     */
    public function getDeadLockDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeadLockDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the deadlock details of an ApsaraDB RDS for SQL Server instance.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetDeadLockDetailListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeadLockDetailListResponse
     *
     * @param GetDeadLockDetailListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDeadLockDetailListResponse
     */
    public function getDeadLockDetailListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbNameList) {
            @$query['DbNameList'] = $request->dbNameList;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDeadLockDetailList',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeadLockDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the deadlock details of an ApsaraDB RDS for SQL Server instance.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetDeadLockDetailListRequest
     *
     * @returns GetDeadLockDetailListResponse
     *
     * @param GetDeadLockDetailListRequest $request
     *
     * @return GetDeadLockDetailListResponse
     */
    public function getDeadLockDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeadLockDetailListWithOptions($request, $runtime);
    }

    /**
     * 获取历史死锁记录.
     *
     * @param request - GetDeadLockHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeadLockHistoryResponse
     *
     * @param GetDeadLockHistoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDeadLockHistoryResponse
     */
    public function getDeadLockHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDeadLockHistory',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeadLockHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取历史死锁记录.
     *
     * @param request - GetDeadLockHistoryRequest
     *
     * @returns GetDeadLockHistoryResponse
     *
     * @param GetDeadLockHistoryRequest $request
     *
     * @return GetDeadLockHistoryResponse
     */
    public function getDeadLockHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeadLockHistoryWithOptions($request, $runtime);
    }

    /**
     * 查询时间范围内基于错误日志分析的死锁数量.
     *
     * @param request - GetDeadlockHistogramRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeadlockHistogramResponse
     *
     * @param GetDeadlockHistogramRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDeadlockHistogramResponse
     */
    public function getDeadlockHistogramWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDeadlockHistogram',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeadlockHistogramResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询时间范围内基于错误日志分析的死锁数量.
     *
     * @param request - GetDeadlockHistogramRequest
     *
     * @returns GetDeadlockHistogramResponse
     *
     * @param GetDeadlockHistogramRequest $request
     *
     * @return GetDeadlockHistogramResponse
     */
    public function getDeadlockHistogram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeadlockHistogramWithOptions($request, $runtime);
    }

    /**
     * @param request - GetEndpointSwitchTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEndpointSwitchTaskResponse
     *
     * @param GetEndpointSwitchTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetEndpointSwitchTaskResponse
     */
    public function getEndpointSwitchTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->context) {
            @$query['__context'] = $request->context;
        }

        if (null !== $request->accessKey) {
            @$query['accessKey'] = $request->accessKey;
        }

        if (null !== $request->signature) {
            @$query['signature'] = $request->signature;
        }

        if (null !== $request->skipAuth) {
            @$query['skipAuth'] = $request->skipAuth;
        }

        if (null !== $request->timestamp) {
            @$query['timestamp'] = $request->timestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEndpointSwitchTask',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEndpointSwitchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetEndpointSwitchTaskRequest
     *
     * @returns GetEndpointSwitchTaskResponse
     *
     * @param GetEndpointSwitchTaskRequest $request
     *
     * @return GetEndpointSwitchTaskResponse
     */
    public function getEndpointSwitchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEndpointSwitchTaskWithOptions($request, $runtime);
    }

    /**
     * Asynchronously queries information about failed SQL queries in SQL Explorer data. You can query up to 20 failed SQL queries within the specific time range.
     *
     * @remarks
     * >  GetErrorRequestSample is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetErrorRequestSampleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetErrorRequestSampleResponse
     *
     * @param GetErrorRequestSampleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetErrorRequestSampleResponse
     */
    public function getErrorRequestSampleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->end) {
            @$query['End'] = $request->end;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->sqlId) {
            @$query['SqlId'] = $request->sqlId;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetErrorRequestSample',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetErrorRequestSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Asynchronously queries information about failed SQL queries in SQL Explorer data. You can query up to 20 failed SQL queries within the specific time range.
     *
     * @remarks
     * >  GetErrorRequestSample is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetErrorRequestSampleRequest
     *
     * @returns GetErrorRequestSampleResponse
     *
     * @param GetErrorRequestSampleRequest $request
     *
     * @return GetErrorRequestSampleResponse
     */
    public function getErrorRequestSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErrorRequestSampleWithOptions($request, $runtime);
    }

    /**
     * Queries the event subscription settings of a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   The database instance that you want to manage is connected to DAS.
     *
     * @param request - GetEventSubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEventSubscriptionResponse
     *
     * @param GetEventSubscriptionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetEventSubscriptionResponse
     */
    public function getEventSubscriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEventSubscription',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEventSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the event subscription settings of a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   The database instance that you want to manage is connected to DAS.
     *
     * @param request - GetEventSubscriptionRequest
     *
     * @returns GetEventSubscriptionResponse
     *
     * @param GetEventSubscriptionRequest $request
     *
     * @return GetEventSubscriptionResponse
     */
    public function getEventSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventSubscriptionWithOptions($request, $runtime);
    }

    /**
     * Collects the full request statistics in the SQL Explorer results of a database instance by access source.
     *
     * @remarks
     * The SQL Explorer feature allows you to check the health status of SQL statements and troubleshoot performance issues. For more information, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   For more information about database instances that support this feature, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     *
     * @param request - GetFullRequestOriginStatByInstanceIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFullRequestOriginStatByInstanceIdResponse
     *
     * @param GetFullRequestOriginStatByInstanceIdRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetFullRequestOriginStatByInstanceIdResponse
     */
    public function getFullRequestOriginStatByInstanceIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->asc) {
            @$query['Asc'] = $request->asc;
        }

        if (null !== $request->end) {
            @$query['End'] = $request->end;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        if (null !== $request->sqlType) {
            @$query['SqlType'] = $request->sqlType;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFullRequestOriginStatByInstanceId',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFullRequestOriginStatByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Collects the full request statistics in the SQL Explorer results of a database instance by access source.
     *
     * @remarks
     * The SQL Explorer feature allows you to check the health status of SQL statements and troubleshoot performance issues. For more information, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   For more information about database instances that support this feature, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     *
     * @param request - GetFullRequestOriginStatByInstanceIdRequest
     *
     * @returns GetFullRequestOriginStatByInstanceIdResponse
     *
     * @param GetFullRequestOriginStatByInstanceIdRequest $request
     *
     * @return GetFullRequestOriginStatByInstanceIdResponse
     */
    public function getFullRequestOriginStatByInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFullRequestOriginStatByInstanceIdWithOptions($request, $runtime);
    }

    /**
     * Queries sample SQL statements in the SQL Explorer data of a database instance by SQL ID. You can query up to 20 sample SQL statements.
     *
     * @remarks
     * The SQL Explorer feature allows you to check the health status of SQL statements and troubleshoot performance issues. For more information, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   For more information about the database engines that support SQL Explorer, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetFullRequestSampleByInstanceIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFullRequestSampleByInstanceIdResponse
     *
     * @param GetFullRequestSampleByInstanceIdRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetFullRequestSampleByInstanceIdResponse
     */
    public function getFullRequestSampleByInstanceIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        $body = [];
        if (null !== $request->end) {
            @$body['End'] = $request->end;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sqlId) {
            @$body['SqlId'] = $request->sqlId;
        }

        if (null !== $request->start) {
            @$body['Start'] = $request->start;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFullRequestSampleByInstanceId',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFullRequestSampleByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries sample SQL statements in the SQL Explorer data of a database instance by SQL ID. You can query up to 20 sample SQL statements.
     *
     * @remarks
     * The SQL Explorer feature allows you to check the health status of SQL statements and troubleshoot performance issues. For more information, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   For more information about the database engines that support SQL Explorer, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetFullRequestSampleByInstanceIdRequest
     *
     * @returns GetFullRequestSampleByInstanceIdResponse
     *
     * @param GetFullRequestSampleByInstanceIdRequest $request
     *
     * @return GetFullRequestSampleByInstanceIdResponse
     */
    public function getFullRequestSampleByInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFullRequestSampleByInstanceIdWithOptions($request, $runtime);
    }

    /**
     * Asynchronously collects the full request statistics in the SQL Explorer results of a database instance by SQL ID.
     *
     * @remarks
     * >  GetFullRequestStatResultByInstanceId is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of the isFinish parameter is **false** in the response, wait for 1 second and then send a request again. If the value of the isFinish parameter is **true**, the complete results are returned.
     * The SQL Explorer feature allows you to check the health status of SQL statements and troubleshoot performance issues. For more information, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   For more information about database instances that support this feature, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call the API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   When you call this operation, the value of the SqlId parameter changes due to the optimization of the SQL template algorithm starting from September 1, 2024. For more information, see [[Notice\\] Optimization of the SQL template algorithm](~~2845725~~).
     *
     * @param request - GetFullRequestStatResultByInstanceIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFullRequestStatResultByInstanceIdResponse
     *
     * @param GetFullRequestStatResultByInstanceIdRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetFullRequestStatResultByInstanceIdResponse
     */
    public function getFullRequestStatResultByInstanceIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->asc) {
            @$query['Asc'] = $request->asc;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->end) {
            @$query['End'] = $request->end;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->originHost) {
            @$query['OriginHost'] = $request->originHost;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        if (null !== $request->sqlId) {
            @$query['SqlId'] = $request->sqlId;
        }

        if (null !== $request->sqlType) {
            @$query['SqlType'] = $request->sqlType;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFullRequestStatResultByInstanceId',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFullRequestStatResultByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Asynchronously collects the full request statistics in the SQL Explorer results of a database instance by SQL ID.
     *
     * @remarks
     * >  GetFullRequestStatResultByInstanceId is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of the isFinish parameter is **false** in the response, wait for 1 second and then send a request again. If the value of the isFinish parameter is **true**, the complete results are returned.
     * The SQL Explorer feature allows you to check the health status of SQL statements and troubleshoot performance issues. For more information, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   For more information about database instances that support this feature, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call the API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   When you call this operation, the value of the SqlId parameter changes due to the optimization of the SQL template algorithm starting from September 1, 2024. For more information, see [[Notice\\] Optimization of the SQL template algorithm](~~2845725~~).
     *
     * @param request - GetFullRequestStatResultByInstanceIdRequest
     *
     * @returns GetFullRequestStatResultByInstanceIdResponse
     *
     * @param GetFullRequestStatResultByInstanceIdRequest $request
     *
     * @return GetFullRequestStatResultByInstanceIdResponse
     */
    public function getFullRequestStatResultByInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFullRequestStatResultByInstanceIdWithOptions($request, $runtime);
    }

    /**
     * @param request - GetHDMAliyunResourceSyncResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHDMAliyunResourceSyncResultResponse
     *
     * @param GetHDMAliyunResourceSyncResultRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetHDMAliyunResourceSyncResultResponse
     */
    public function getHDMAliyunResourceSyncResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->context) {
            @$query['__context'] = $request->context;
        }

        if (null !== $request->accessKey) {
            @$query['accessKey'] = $request->accessKey;
        }

        if (null !== $request->signature) {
            @$query['signature'] = $request->signature;
        }

        if (null !== $request->skipAuth) {
            @$query['skipAuth'] = $request->skipAuth;
        }

        if (null !== $request->timestamp) {
            @$query['timestamp'] = $request->timestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHDMAliyunResourceSyncResult',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHDMAliyunResourceSyncResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetHDMAliyunResourceSyncResultRequest
     *
     * @returns GetHDMAliyunResourceSyncResultResponse
     *
     * @param GetHDMAliyunResourceSyncResultRequest $request
     *
     * @return GetHDMAliyunResourceSyncResultResponse
     */
    public function getHDMAliyunResourceSyncResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHDMAliyunResourceSyncResultWithOptions($request, $runtime);
    }

    /**
     * @param request - GetHDMLastAliyunResourceSyncResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHDMLastAliyunResourceSyncResultResponse
     *
     * @param GetHDMLastAliyunResourceSyncResultRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetHDMLastAliyunResourceSyncResultResponse
     */
    public function getHDMLastAliyunResourceSyncResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->context) {
            @$query['__context'] = $request->context;
        }

        if (null !== $request->accessKey) {
            @$query['accessKey'] = $request->accessKey;
        }

        if (null !== $request->signature) {
            @$query['signature'] = $request->signature;
        }

        if (null !== $request->skipAuth) {
            @$query['skipAuth'] = $request->skipAuth;
        }

        if (null !== $request->timestamp) {
            @$query['timestamp'] = $request->timestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHDMLastAliyunResourceSyncResult',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHDMLastAliyunResourceSyncResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetHDMLastAliyunResourceSyncResultRequest
     *
     * @returns GetHDMLastAliyunResourceSyncResultResponse
     *
     * @param GetHDMLastAliyunResourceSyncResultRequest $request
     *
     * @return GetHDMLastAliyunResourceSyncResultResponse
     */
    public function getHDMLastAliyunResourceSyncResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHDMLastAliyunResourceSyncResultWithOptions($request, $runtime);
    }

    /**
     * Queries the result of an inspection that is performed on a database instance by using the inspection and scoring feature.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the inspection and scoring feature. This feature allows you to inspect and score the health status of your instance on a regular basis. This helps you obtain information about the status of your databases. For more information, see [Inspection and scoring](https://help.aliyun.com/document_detail/205659.html).
     * Before you call this operation, take note of the following items:
     * *   This operation is applicable only to ApsaraDB RDS for MySQL databases, self-managed MySQL databases hosted on Elastic Compute Service (ECS) instances, self-managed MySQL databases in data centers, ApsaraDB for Redis databases, and PolarDB for MySQL databases.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * *   The version of DAS SDK must be V1.0.3 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetInstanceInspectionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceInspectionsResponse
     *
     * @param GetInstanceInspectionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstanceInspectionsResponse
     */
    public function getInstanceInspectionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->instanceArea) {
            @$query['InstanceArea'] = $request->instanceArea;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->searchMap) {
            @$query['SearchMap'] = $request->searchMap;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceInspections',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceInspectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the result of an inspection that is performed on a database instance by using the inspection and scoring feature.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the inspection and scoring feature. This feature allows you to inspect and score the health status of your instance on a regular basis. This helps you obtain information about the status of your databases. For more information, see [Inspection and scoring](https://help.aliyun.com/document_detail/205659.html).
     * Before you call this operation, take note of the following items:
     * *   This operation is applicable only to ApsaraDB RDS for MySQL databases, self-managed MySQL databases hosted on Elastic Compute Service (ECS) instances, self-managed MySQL databases in data centers, ApsaraDB for Redis databases, and PolarDB for MySQL databases.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * *   The version of DAS SDK must be V1.0.3 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetInstanceInspectionsRequest
     *
     * @returns GetInstanceInspectionsResponse
     *
     * @param GetInstanceInspectionsRequest $request
     *
     * @return GetInstanceInspectionsResponse
     */
    public function getInstanceInspections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceInspectionsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of all missing indexes of an instance.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetInstanceMissingIndexListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceMissingIndexListResponse
     *
     * @param GetInstanceMissingIndexListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetInstanceMissingIndexListResponse
     */
    public function getInstanceMissingIndexListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->avgTotalUserCost) {
            @$query['AvgTotalUserCost'] = $request->avgTotalUserCost;
        }

        if (null !== $request->avgUserImpact) {
            @$query['AvgUserImpact'] = $request->avgUserImpact;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->indexCount) {
            @$query['IndexCount'] = $request->indexCount;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->objectName) {
            @$query['ObjectName'] = $request->objectName;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reservedPages) {
            @$query['ReservedPages'] = $request->reservedPages;
        }

        if (null !== $request->reservedSize) {
            @$query['ReservedSize'] = $request->reservedSize;
        }

        if (null !== $request->rowCount) {
            @$query['RowCount'] = $request->rowCount;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->uniqueCompiles) {
            @$query['UniqueCompiles'] = $request->uniqueCompiles;
        }

        if (null !== $request->userScans) {
            @$query['UserScans'] = $request->userScans;
        }

        if (null !== $request->userSeeks) {
            @$query['UserSeeks'] = $request->userSeeks;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceMissingIndexList',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceMissingIndexListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of all missing indexes of an instance.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetInstanceMissingIndexListRequest
     *
     * @returns GetInstanceMissingIndexListResponse
     *
     * @param GetInstanceMissingIndexListRequest $request
     *
     * @return GetInstanceMissingIndexListResponse
     */
    public function getInstanceMissingIndexList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceMissingIndexListWithOptions($request, $runtime);
    }

    /**
     * Queries statistics on automatic SQL optimization events within a period of time, such as the total number of optimization events and the maximum improvement.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   The database engine is ApsaraDB RDS for MySQL or PolarDB for MySQL.
     *
     * @param request - GetInstanceSqlOptimizeStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceSqlOptimizeStatisticResponse
     *
     * @param GetInstanceSqlOptimizeStatisticRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetInstanceSqlOptimizeStatisticResponse
     */
    public function getInstanceSqlOptimizeStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->filterEnable) {
            @$query['FilterEnable'] = $request->filterEnable;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        if (null !== $request->useMerging) {
            @$query['UseMerging'] = $request->useMerging;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceSqlOptimizeStatistic',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceSqlOptimizeStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries statistics on automatic SQL optimization events within a period of time, such as the total number of optimization events and the maximum improvement.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   The database engine is ApsaraDB RDS for MySQL or PolarDB for MySQL.
     *
     * @param request - GetInstanceSqlOptimizeStatisticRequest
     *
     * @returns GetInstanceSqlOptimizeStatisticResponse
     *
     * @param GetInstanceSqlOptimizeStatisticRequest $request
     *
     * @return GetInstanceSqlOptimizeStatisticResponse
     */
    public function getInstanceSqlOptimizeStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceSqlOptimizeStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries the results of a task that terminates sessions.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetKillInstanceSessionTaskResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKillInstanceSessionTaskResultResponse
     *
     * @param GetKillInstanceSessionTaskResultRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetKillInstanceSessionTaskResultResponse
     */
    public function getKillInstanceSessionTaskResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKillInstanceSessionTaskResult',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetKillInstanceSessionTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the results of a task that terminates sessions.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetKillInstanceSessionTaskResultRequest
     *
     * @returns GetKillInstanceSessionTaskResultResponse
     *
     * @param GetKillInstanceSessionTaskResultRequest $request
     *
     * @return GetKillInstanceSessionTaskResultResponse
     */
    public function getKillInstanceSessionTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKillInstanceSessionTaskResultWithOptions($request, $runtime);
    }

    /**
     * Queries the current sessions of an ApsaraDB for MongoDB (MongoDB) instance.
     *
     * @remarks
     *   This operation is applicable only to MongoDB instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region to cn-shanghai.
     *
     * @param request - GetMongoDBCurrentOpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMongoDBCurrentOpResponse
     *
     * @param GetMongoDBCurrentOpRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMongoDBCurrentOpResponse
     */
    public function getMongoDBCurrentOpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filterDoc) {
            @$query['FilterDoc'] = $request->filterDoc;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMongoDBCurrentOp',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMongoDBCurrentOpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the current sessions of an ApsaraDB for MongoDB (MongoDB) instance.
     *
     * @remarks
     *   This operation is applicable only to MongoDB instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region to cn-shanghai.
     *
     * @param request - GetMongoDBCurrentOpRequest
     *
     * @returns GetMongoDBCurrentOpResponse
     *
     * @param GetMongoDBCurrentOpRequest $request
     *
     * @return GetMongoDBCurrentOpResponse
     */
    public function getMongoDBCurrentOp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMongoDBCurrentOpWithOptions($request, $runtime);
    }

    /**
     * Asynchronously queries the sessions of an instance and collects statistics on the sessions based on dimensions.
     *
     * @remarks
     * >  GetMySQLAllSessionAsync is an asynchronous operation. After a request is sent, the system does not return complete results but returns a request ID. You need to use the request ID to initiate requests until the value of the **isFinish** field in the returned results is **true**, the complete results are returned. This indicates that to obtain complete data, you must call this operation at least twice.
     * *   This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and PolarDB-X 2.0 instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetMySQLAllSessionAsyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMySQLAllSessionAsyncResponse
     *
     * @param GetMySQLAllSessionAsyncRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetMySQLAllSessionAsyncResponse
     */
    public function getMySQLAllSessionAsyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->resultId) {
            @$query['ResultId'] = $request->resultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMySQLAllSessionAsync',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMySQLAllSessionAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Asynchronously queries the sessions of an instance and collects statistics on the sessions based on dimensions.
     *
     * @remarks
     * >  GetMySQLAllSessionAsync is an asynchronous operation. After a request is sent, the system does not return complete results but returns a request ID. You need to use the request ID to initiate requests until the value of the **isFinish** field in the returned results is **true**, the complete results are returned. This indicates that to obtain complete data, you must call this operation at least twice.
     * *   This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and PolarDB-X 2.0 instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetMySQLAllSessionAsyncRequest
     *
     * @returns GetMySQLAllSessionAsyncResponse
     *
     * @param GetMySQLAllSessionAsyncRequest $request
     *
     * @return GetMySQLAllSessionAsyncResponse
     */
    public function getMySQLAllSessionAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMySQLAllSessionAsyncWithOptions($request, $runtime);
    }

    /**
     * Queries access frequency statistics and hot data on partitions of a PolarDB-X 2.0 instance.
     *
     * @remarks
     * We recommend that you do not call this operation. The data is returned in a special format and is complex to parse. You can use the [heatmap](https://help.aliyun.com/document_detail/470302.html) feature of Database Autonomy Service (DAS) to query the data.
     *
     * @param request - GetPartitionsHeatmapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPartitionsHeatmapResponse
     *
     * @param GetPartitionsHeatmapRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetPartitionsHeatmapResponse
     */
    public function getPartitionsHeatmapWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->timeRange) {
            @$query['TimeRange'] = $request->timeRange;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPartitionsHeatmap',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPartitionsHeatmapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries access frequency statistics and hot data on partitions of a PolarDB-X 2.0 instance.
     *
     * @remarks
     * We recommend that you do not call this operation. The data is returned in a special format and is complex to parse. You can use the [heatmap](https://help.aliyun.com/document_detail/470302.html) feature of Database Autonomy Service (DAS) to query the data.
     *
     * @param request - GetPartitionsHeatmapRequest
     *
     * @returns GetPartitionsHeatmapResponse
     *
     * @param GetPartitionsHeatmapRequest $request
     *
     * @return GetPartitionsHeatmapResponse
     */
    public function getPartitionsHeatmap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPartitionsHeatmapWithOptions($request, $runtime);
    }

    /**
     * Queries the trend of a metric for the new version of the performance insight feature of a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * *   The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
     *
     * @param request - GetPfsMetricTrendsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPfsMetricTrendsResponse
     *
     * @param GetPfsMetricTrendsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPfsMetricTrendsResponse
     */
    public function getPfsMetricTrendsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->metric) {
            @$body['Metric'] = $request->metric;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetPfsMetricTrends',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPfsMetricTrendsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the trend of a metric for the new version of the performance insight feature of a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * *   The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
     *
     * @param request - GetPfsMetricTrendsRequest
     *
     * @returns GetPfsMetricTrendsResponse
     *
     * @param GetPfsMetricTrendsRequest $request
     *
     * @return GetPfsMetricTrendsResponse
     */
    public function getPfsMetricTrends($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPfsMetricTrendsWithOptions($request, $runtime);
    }

    /**
     * Queries the SQL sample data for the new version of the performance insight feature of a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * *   The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
     *
     * @param request - GetPfsSqlSampleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPfsSqlSampleResponse
     *
     * @param GetPfsSqlSampleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetPfsSqlSampleResponse
     */
    public function getPfsSqlSampleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->sqlId) {
            @$body['SqlId'] = $request->sqlId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetPfsSqlSample',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPfsSqlSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the SQL sample data for the new version of the performance insight feature of a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * *   The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
     *
     * @param request - GetPfsSqlSampleRequest
     *
     * @returns GetPfsSqlSampleResponse
     *
     * @param GetPfsSqlSampleRequest $request
     *
     * @return GetPfsSqlSampleResponse
     */
    public function getPfsSqlSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPfsSqlSampleWithOptions($request, $runtime);
    }

    /**
     * Queries the full request data generated by the new version of the performance insight feature of a database instance based on the SQL ID.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * *   The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
     *
     * @param request - GetPfsSqlSummariesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPfsSqlSummariesResponse
     *
     * @param GetPfsSqlSummariesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPfsSqlSummariesResponse
     */
    public function getPfsSqlSummariesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->asc) {
            @$body['Asc'] = $request->asc;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keywords) {
            @$body['Keywords'] = $request->keywords;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->orderBy) {
            @$body['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNo) {
            @$body['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sqlId) {
            @$body['SqlId'] = $request->sqlId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetPfsSqlSummaries',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPfsSqlSummariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the full request data generated by the new version of the performance insight feature of a database instance based on the SQL ID.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * *   The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
     *
     * @param request - GetPfsSqlSummariesRequest
     *
     * @returns GetPfsSqlSummariesResponse
     *
     * @param GetPfsSqlSummariesRequest $request
     *
     * @return GetPfsSqlSummariesResponse
     */
    public function getPfsSqlSummaries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPfsSqlSummariesWithOptions($request, $runtime);
    }

    /**
     * Queries information about SQL templates based on query governance data.
     *
     * @remarks
     *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeDataStatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueryOptimizeDataStatsResponse
     *
     * @param GetQueryOptimizeDataStatsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetQueryOptimizeDataStatsResponse
     */
    public function getQueryOptimizeDataStatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueryOptimizeDataStats',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueryOptimizeDataStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about SQL templates based on query governance data.
     *
     * @remarks
     *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeDataStatsRequest
     *
     * @returns GetQueryOptimizeDataStatsResponse
     *
     * @param GetQueryOptimizeDataStatsRequest $request
     *
     * @return GetQueryOptimizeDataStatsResponse
     */
    public function getQueryOptimizeDataStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeDataStatsWithOptions($request, $runtime);
    }

    /**
     * Queries information about the best-performing and worst-performing instances based on query governance data.
     *
     * @remarks
     *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeDataTopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueryOptimizeDataTopResponse
     *
     * @param GetQueryOptimizeDataTopRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetQueryOptimizeDataTopResponse
     */
    public function getQueryOptimizeDataTopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueryOptimizeDataTop',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueryOptimizeDataTopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about the best-performing and worst-performing instances based on query governance data.
     *
     * @remarks
     *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeDataTopRequest
     *
     * @returns GetQueryOptimizeDataTopResponse
     *
     * @param GetQueryOptimizeDataTopRequest $request
     *
     * @return GetQueryOptimizeDataTopResponse
     */
    public function getQueryOptimizeDataTop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeDataTopWithOptions($request, $runtime);
    }

    /**
     * Queries query governance trend data.
     *
     * @remarks
     *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeDataTrendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueryOptimizeDataTrendResponse
     *
     * @param GetQueryOptimizeDataTrendRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetQueryOptimizeDataTrendResponse
     */
    public function getQueryOptimizeDataTrendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueryOptimizeDataTrend',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueryOptimizeDataTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries query governance trend data.
     *
     * @remarks
     *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeDataTrendRequest
     *
     * @returns GetQueryOptimizeDataTrendResponse
     *
     * @param GetQueryOptimizeDataTrendRequest $request
     *
     * @return GetQueryOptimizeDataTrendResponse
     */
    public function getQueryOptimizeDataTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeDataTrendWithOptions($request, $runtime);
    }

    /**
     * Queries the failed SQL statements under a SQL template.
     *
     * @remarks
     *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeExecErrorSampleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueryOptimizeExecErrorSampleResponse
     *
     * @param GetQueryOptimizeExecErrorSampleRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetQueryOptimizeExecErrorSampleResponse
     */
    public function getQueryOptimizeExecErrorSampleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueryOptimizeExecErrorSample',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueryOptimizeExecErrorSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the failed SQL statements under a SQL template.
     *
     * @remarks
     *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeExecErrorSampleRequest
     *
     * @returns GetQueryOptimizeExecErrorSampleResponse
     *
     * @param GetQueryOptimizeExecErrorSampleRequest $request
     *
     * @return GetQueryOptimizeExecErrorSampleResponse
     */
    public function getQueryOptimizeExecErrorSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeExecErrorSampleWithOptions($request, $runtime);
    }

    /**
     * Queries SQL templates that failed to be executed.
     *
     * @remarks
     *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeExecErrorStatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueryOptimizeExecErrorStatsResponse
     *
     * @param GetQueryOptimizeExecErrorStatsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetQueryOptimizeExecErrorStatsResponse
     */
    public function getQueryOptimizeExecErrorStatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueryOptimizeExecErrorStats',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueryOptimizeExecErrorStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries SQL templates that failed to be executed.
     *
     * @remarks
     *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeExecErrorStatsRequest
     *
     * @returns GetQueryOptimizeExecErrorStatsResponse
     *
     * @param GetQueryOptimizeExecErrorStatsRequest $request
     *
     * @return GetQueryOptimizeExecErrorStatsResponse
     */
    public function getQueryOptimizeExecErrorStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeExecErrorStatsWithOptions($request, $runtime);
    }

    /**
     * Queries the tags added by the query governance feature to specified database instances.
     *
     * @remarks
     *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueryOptimizeRuleListResponse
     *
     * @param GetQueryOptimizeRuleListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetQueryOptimizeRuleListResponse
     */
    public function getQueryOptimizeRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueryOptimizeRuleList',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueryOptimizeRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags added by the query governance feature to specified database instances.
     *
     * @remarks
     *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeRuleListRequest
     *
     * @returns GetQueryOptimizeRuleListResponse
     *
     * @param GetQueryOptimizeRuleListRequest $request
     *
     * @return GetQueryOptimizeRuleListResponse
     */
    public function getQueryOptimizeRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeRuleListWithOptions($request, $runtime);
    }

    /**
     * Queries a share URL provided by the query governance feature.
     *
     * @remarks
     *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeShareUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueryOptimizeShareUrlResponse
     *
     * @param GetQueryOptimizeShareUrlRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetQueryOptimizeShareUrlResponse
     */
    public function getQueryOptimizeShareUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueryOptimizeShareUrl',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueryOptimizeShareUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a share URL provided by the query governance feature.
     *
     * @remarks
     *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeShareUrlRequest
     *
     * @returns GetQueryOptimizeShareUrlResponse
     *
     * @param GetQueryOptimizeShareUrlRequest $request
     *
     * @return GetQueryOptimizeShareUrlResponse
     */
    public function getQueryOptimizeShareUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeShareUrlWithOptions($request, $runtime);
    }

    /**
     * Queries suggestions provided by query governance for optimizing an SQL template.
     *
     * @remarks
     *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeSolutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueryOptimizeSolutionResponse
     *
     * @param GetQueryOptimizeSolutionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetQueryOptimizeSolutionResponse
     */
    public function getQueryOptimizeSolutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueryOptimizeSolution',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueryOptimizeSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries suggestions provided by query governance for optimizing an SQL template.
     *
     * @remarks
     *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeSolutionRequest
     *
     * @returns GetQueryOptimizeSolutionResponse
     *
     * @param GetQueryOptimizeSolutionRequest $request
     *
     * @return GetQueryOptimizeSolutionResponse
     */
    public function getQueryOptimizeSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeSolutionWithOptions($request, $runtime);
    }

    /**
     * Queries the tags of a SQL statement.
     *
     * @remarks
     *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueryOptimizeTagResponse
     *
     * @param GetQueryOptimizeTagRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetQueryOptimizeTagResponse
     */
    public function getQueryOptimizeTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueryOptimizeTag',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueryOptimizeTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags of a SQL statement.
     *
     * @remarks
     *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *
     * @param request - GetQueryOptimizeTagRequest
     *
     * @returns GetQueryOptimizeTagResponse
     *
     * @param GetQueryOptimizeTagRequest $request
     *
     * @return GetQueryOptimizeTagResponse
     */
    public function getQueryOptimizeTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeTagWithOptions($request, $runtime);
    }

    /**
     * Queries the current session on an ApsaraDB for Redis instance.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB for Redis instances.
     * *   If you use an SDK to call operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * >  This operation cannot be used to query sessions generated in direct connection mode on ApsaraDB for Redis cluster instances.
     *
     * @param request - GetRedisAllSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRedisAllSessionResponse
     *
     * @param GetRedisAllSessionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetRedisAllSessionResponse
     */
    public function getRedisAllSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRedisAllSession',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRedisAllSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the current session on an ApsaraDB for Redis instance.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB for Redis instances.
     * *   If you use an SDK to call operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * >  This operation cannot be used to query sessions generated in direct connection mode on ApsaraDB for Redis cluster instances.
     *
     * @param request - GetRedisAllSessionRequest
     *
     * @returns GetRedisAllSessionResponse
     *
     * @param GetRedisAllSessionRequest $request
     *
     * @return GetRedisAllSessionResponse
     */
    public function getRedisAllSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRedisAllSessionWithOptions($request, $runtime);
    }

    /**
     * Queries SQL diagnostics records by pages.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *     *   ApsaraDB RDS for SQL Server
     *     *   PolarDB for MySQL
     *     *   PolarDB for PostgreSQL (Compatible with Oracle)
     *     *   ApsaraDB for MongoDB
     * >  The minor engine version of the Apsara RDS for PostgreSQL instance must be 20220130 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
     *
     * @param request - GetRequestDiagnosisPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRequestDiagnosisPageResponse
     *
     * @param GetRequestDiagnosisPageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetRequestDiagnosisPageResponse
     */
    public function getRequestDiagnosisPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRequestDiagnosisPage',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRequestDiagnosisPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries SQL diagnostics records by pages.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *     *   ApsaraDB RDS for SQL Server
     *     *   PolarDB for MySQL
     *     *   PolarDB for PostgreSQL (Compatible with Oracle)
     *     *   ApsaraDB for MongoDB
     * >  The minor engine version of the Apsara RDS for PostgreSQL instance must be 20220130 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
     *
     * @param request - GetRequestDiagnosisPageRequest
     *
     * @returns GetRequestDiagnosisPageResponse
     *
     * @param GetRequestDiagnosisPageRequest $request
     *
     * @return GetRequestDiagnosisPageResponse
     */
    public function getRequestDiagnosisPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRequestDiagnosisPageWithOptions($request, $runtime);
    }

    /**
     * Queries the results of an SQL diagnostics task.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call the API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   You cannot call this operation to query the diagnostic result of the automatic SQL optimization feature.
     * *   This operation is applicable to the following database engines:
     *     *   RDS MySQL
     *     *   RDS PostgreSQL
     *     *   RDS SQL Server
     *     *   PolarDB for MySQL
     *     *   PolarDB for PostgreSQL (Compatible with Oracle)
     *     *   ApsaraDB for MongoDB
     * >  If your instance is an ApsaraDB RDS for PostgreSQL instance, make sure that the minor engine version of your instance is 20220130 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
     *
     * @param request - GetRequestDiagnosisResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRequestDiagnosisResultResponse
     *
     * @param GetRequestDiagnosisResultRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetRequestDiagnosisResultResponse
     */
    public function getRequestDiagnosisResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sqlId) {
            @$query['SqlId'] = $request->sqlId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRequestDiagnosisResult',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRequestDiagnosisResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the results of an SQL diagnostics task.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call the API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   You cannot call this operation to query the diagnostic result of the automatic SQL optimization feature.
     * *   This operation is applicable to the following database engines:
     *     *   RDS MySQL
     *     *   RDS PostgreSQL
     *     *   RDS SQL Server
     *     *   PolarDB for MySQL
     *     *   PolarDB for PostgreSQL (Compatible with Oracle)
     *     *   ApsaraDB for MongoDB
     * >  If your instance is an ApsaraDB RDS for PostgreSQL instance, make sure that the minor engine version of your instance is 20220130 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
     *
     * @param request - GetRequestDiagnosisResultRequest
     *
     * @returns GetRequestDiagnosisResultResponse
     *
     * @param GetRequestDiagnosisResultRequest $request
     *
     * @return GetRequestDiagnosisResultResponse
     */
    public function getRequestDiagnosisResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRequestDiagnosisResultWithOptions($request, $runtime);
    }

    /**
     * Queries the throttling rules that are in effect.
     *
     * @remarks
     * This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *
     * @param request - GetRunningSqlConcurrencyControlRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRunningSqlConcurrencyControlRulesResponse
     *
     * @param GetRunningSqlConcurrencyControlRulesRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetRunningSqlConcurrencyControlRulesResponse
     */
    public function getRunningSqlConcurrencyControlRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRunningSqlConcurrencyControlRules',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRunningSqlConcurrencyControlRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the throttling rules that are in effect.
     *
     * @remarks
     * This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *
     * @param request - GetRunningSqlConcurrencyControlRulesRequest
     *
     * @returns GetRunningSqlConcurrencyControlRulesResponse
     *
     * @param GetRunningSqlConcurrencyControlRulesRequest $request
     *
     * @return GetRunningSqlConcurrencyControlRulesResponse
     */
    public function getRunningSqlConcurrencyControlRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRunningSqlConcurrencyControlRulesWithOptions($request, $runtime);
    }

    /**
     * Generates a throttling keyword string based on an SQL statement.
     *
     * @remarks
     * This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *
     * @param request - GetSqlConcurrencyControlKeywordsFromSqlTextRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSqlConcurrencyControlKeywordsFromSqlTextResponse
     *
     * @param GetSqlConcurrencyControlKeywordsFromSqlTextRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return GetSqlConcurrencyControlKeywordsFromSqlTextResponse
     */
    public function getSqlConcurrencyControlKeywordsFromSqlTextWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sqlText) {
            @$query['SqlText'] = $request->sqlText;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSqlConcurrencyControlKeywordsFromSqlText',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSqlConcurrencyControlKeywordsFromSqlTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a throttling keyword string based on an SQL statement.
     *
     * @remarks
     * This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *
     * @param request - GetSqlConcurrencyControlKeywordsFromSqlTextRequest
     *
     * @returns GetSqlConcurrencyControlKeywordsFromSqlTextResponse
     *
     * @param GetSqlConcurrencyControlKeywordsFromSqlTextRequest $request
     *
     * @return GetSqlConcurrencyControlKeywordsFromSqlTextResponse
     */
    public function getSqlConcurrencyControlKeywordsFromSqlText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSqlConcurrencyControlKeywordsFromSqlTextWithOptions($request, $runtime);
    }

    /**
     * Queries the throttling rules that are being executed or have been triggered.
     *
     * @remarks
     * This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *
     * @param request - GetSqlConcurrencyControlRulesHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSqlConcurrencyControlRulesHistoryResponse
     *
     * @param GetSqlConcurrencyControlRulesHistoryRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetSqlConcurrencyControlRulesHistoryResponse
     */
    public function getSqlConcurrencyControlRulesHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSqlConcurrencyControlRulesHistory',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSqlConcurrencyControlRulesHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the throttling rules that are being executed or have been triggered.
     *
     * @remarks
     * This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *
     * @param request - GetSqlConcurrencyControlRulesHistoryRequest
     *
     * @returns GetSqlConcurrencyControlRulesHistoryResponse
     *
     * @param GetSqlConcurrencyControlRulesHistoryRequest $request
     *
     * @return GetSqlConcurrencyControlRulesHistoryResponse
     */
    public function getSqlConcurrencyControlRulesHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSqlConcurrencyControlRulesHistoryWithOptions($request, $runtime);
    }

    /**
     * Queries optimization suggestions that are generated by the SQL diagnostics feature of Database Autonomy Service (DAS).
     *
     * @remarks
     * The SQL diagnostics feature provides optimization suggestions for instances based on diagnostics results. You can use the optimization suggestions to optimize instance indexes. For more information, see [Automatic SQL optimization](https://help.aliyun.com/document_detail/167895.html).
     * >  You can call this operation to query only the optimization suggestions that are automatically generated by the SQL diagnostics feature.
     * Before you call this operation, take note of the following items:
     * *   This operation is applicable to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetSqlOptimizeAdviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSqlOptimizeAdviceResponse
     *
     * @param GetSqlOptimizeAdviceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetSqlOptimizeAdviceResponse
     */
    public function getSqlOptimizeAdviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->endDt) {
            @$query['EndDt'] = $request->endDt;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startDt) {
            @$query['StartDt'] = $request->startDt;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSqlOptimizeAdvice',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSqlOptimizeAdviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries optimization suggestions that are generated by the SQL diagnostics feature of Database Autonomy Service (DAS).
     *
     * @remarks
     * The SQL diagnostics feature provides optimization suggestions for instances based on diagnostics results. You can use the optimization suggestions to optimize instance indexes. For more information, see [Automatic SQL optimization](https://help.aliyun.com/document_detail/167895.html).
     * >  You can call this operation to query only the optimization suggestions that are automatically generated by the SQL diagnostics feature.
     * Before you call this operation, take note of the following items:
     * *   This operation is applicable to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetSqlOptimizeAdviceRequest
     *
     * @returns GetSqlOptimizeAdviceResponse
     *
     * @param GetSqlOptimizeAdviceRequest $request
     *
     * @return GetSqlOptimizeAdviceResponse
     */
    public function getSqlOptimizeAdvice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSqlOptimizeAdviceWithOptions($request, $runtime);
    }

    /**
     * Queries the status and results of a storage analysis task.
     *
     * @remarks
     * >  The physical file size indicates the actual size of an obtained file. Only specific deployment modes of database instances support the display of physical file sizes. The statistics on tables are obtained from `information_schema.tables`. Statistics in MySQL are not updated in real time. Therefore, the statistics may be different from the physical file sizes. If you want to obtain the latest data, you can execute the `ANALYZE TABLE` statement on the relevant tables during off-peak hours.
     * *   This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and ApsaraDB for MongoDB instances.
     * *   For ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters, this operation works the same as the storage analysis feature of the previous version. Tasks generated by this operation cannot be viewed on the Storage Analysis page of the new version in the Database Autonomy Service (DAS) console. If you want to view the tasks and results, call the related API operation to obtain data and save data to your computer.
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetStorageAnalysisResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStorageAnalysisResultResponse
     *
     * @param GetStorageAnalysisResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetStorageAnalysisResultResponse
     */
    public function getStorageAnalysisResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStorageAnalysisResult',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStorageAnalysisResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status and results of a storage analysis task.
     *
     * @remarks
     * >  The physical file size indicates the actual size of an obtained file. Only specific deployment modes of database instances support the display of physical file sizes. The statistics on tables are obtained from `information_schema.tables`. Statistics in MySQL are not updated in real time. Therefore, the statistics may be different from the physical file sizes. If you want to obtain the latest data, you can execute the `ANALYZE TABLE` statement on the relevant tables during off-peak hours.
     * *   This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and ApsaraDB for MongoDB instances.
     * *   For ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters, this operation works the same as the storage analysis feature of the previous version. Tasks generated by this operation cannot be viewed on the Storage Analysis page of the new version in the Database Autonomy Service (DAS) console. If you want to view the tasks and results, call the related API operation to obtain data and save data to your computer.
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - GetStorageAnalysisResultRequest
     *
     * @returns GetStorageAnalysisResultResponse
     *
     * @param GetStorageAnalysisResultRequest $request
     *
     * @return GetStorageAnalysisResultResponse
     */
    public function getStorageAnalysisResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStorageAnalysisResultWithOptions($request, $runtime);
    }

    /**
     * Terminates all sessions on an instance.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB for Redis.
     * *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V1.0.2 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - KillInstanceAllSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KillInstanceAllSessionResponse
     *
     * @param KillInstanceAllSessionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return KillInstanceAllSessionResponse
     */
    public function killInstanceAllSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'KillInstanceAllSession',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return KillInstanceAllSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminates all sessions on an instance.
     *
     * @remarks
     *   This operation is applicable only to ApsaraDB for Redis.
     * *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V1.0.2 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - KillInstanceAllSessionRequest
     *
     * @returns KillInstanceAllSessionResponse
     *
     * @param KillInstanceAllSessionRequest $request
     *
     * @return KillInstanceAllSessionResponse
     */
    public function killInstanceAllSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killInstanceAllSessionWithOptions($request, $runtime);
    }

    /**
     * Modifies the auto scaling configurations of an instance.
     *
     * @remarks
     * You can call this operation to modify the following auto scaling configurations of an instance: **auto scaling for specifications**, **automatic storage expansion**, **automatic bandwidth adjustment**, and **auto scaling for resources**.
     * *   You can modify the configurations of the **auto scaling feature for specifications** for the following types of database instances:
     *     *   PolarDB for MySQL Cluster Edition instances. For more information about the feature and the billing rules, see [Automatic performance scaling](https://help.aliyun.com/document_detail/169686.html).
     *     *   ApsaraDB RDS for MySQL High-availability Edition instances that use standard SSDs or enhanced SSDs (ESSDs). For more information about the feature and the billing rules, see [Automatic performance scaling](https://help.aliyun.com/document_detail/169686.html).
     * *   You can modify the configurations of the **automatic storage expansion** feature for the following types of database instances:
     *     *   ApsaraDB RDS for MySQL High-availability Edition instances that use standard SSDs or ESSDs. For more information about the feature and the billing rules, see [Automatic space expansion](https://help.aliyun.com/document_detail/173345.html).
     * *   You can modify the configurations of the **automatic bandwidth adjustment** feature for the following types of database instances:
     *     *   ApsaraDB for Redis Classic (Local Disk-based) Edition instances. For more information about the feature and the billing rules, see [Automatic bandwidth adjustment](https://help.aliyun.com/document_detail/216312.html).
     * *   You can modify the configurations of the **auto scaling feature for resources** for the following types of database instances:
     *     *   General-purpose ApsaraDB RDS for MySQL Enterprise Edition instances. For more information about the feature and the billing rules, see [Automatic performance scaling](https://help.aliyun.com/document_detail/169686.html).
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - ModifyAutoScalingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAutoScalingConfigResponse
     *
     * @param ModifyAutoScalingConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyAutoScalingConfigResponse
     */
    public function modifyAutoScalingConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->shard) {
            @$query['Shard'] = $request->shard;
        }

        if (null !== $request->spec) {
            @$query['Spec'] = $request->spec;
        }

        if (null !== $request->storage) {
            @$query['Storage'] = $request->storage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAutoScalingConfig',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAutoScalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the auto scaling configurations of an instance.
     *
     * @remarks
     * You can call this operation to modify the following auto scaling configurations of an instance: **auto scaling for specifications**, **automatic storage expansion**, **automatic bandwidth adjustment**, and **auto scaling for resources**.
     * *   You can modify the configurations of the **auto scaling feature for specifications** for the following types of database instances:
     *     *   PolarDB for MySQL Cluster Edition instances. For more information about the feature and the billing rules, see [Automatic performance scaling](https://help.aliyun.com/document_detail/169686.html).
     *     *   ApsaraDB RDS for MySQL High-availability Edition instances that use standard SSDs or enhanced SSDs (ESSDs). For more information about the feature and the billing rules, see [Automatic performance scaling](https://help.aliyun.com/document_detail/169686.html).
     * *   You can modify the configurations of the **automatic storage expansion** feature for the following types of database instances:
     *     *   ApsaraDB RDS for MySQL High-availability Edition instances that use standard SSDs or ESSDs. For more information about the feature and the billing rules, see [Automatic space expansion](https://help.aliyun.com/document_detail/173345.html).
     * *   You can modify the configurations of the **automatic bandwidth adjustment** feature for the following types of database instances:
     *     *   ApsaraDB for Redis Classic (Local Disk-based) Edition instances. For more information about the feature and the billing rules, see [Automatic bandwidth adjustment](https://help.aliyun.com/document_detail/216312.html).
     * *   You can modify the configurations of the **auto scaling feature for resources** for the following types of database instances:
     *     *   General-purpose ApsaraDB RDS for MySQL Enterprise Edition instances. For more information about the feature and the billing rules, see [Automatic performance scaling](https://help.aliyun.com/document_detail/169686.html).
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *
     * @param request - ModifyAutoScalingConfigRequest
     *
     * @returns ModifyAutoScalingConfigResponse
     *
     * @param ModifyAutoScalingConfigRequest $request
     *
     * @return ModifyAutoScalingConfigResponse
     */
    public function modifyAutoScalingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoScalingConfigWithOptions($request, $runtime);
    }

    /**
     * Enables or configures Database Autonomy Service (DAS) Enterprise Edition for a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   By default, the latest version of DAS Enterprise Edition that supports the database instance is enabled. For information about the databases and regions that are supported by different versions of DAS Enterprise Edition, see [Editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *
     * @param request - ModifySqlLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySqlLogConfigResponse
     *
     * @param ModifySqlLogConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifySqlLogConfigResponse
     */
    public function modifySqlLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableAudit) {
            @$query['EnableAudit'] = $request->enableAudit;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        $body = [];
        if (null !== $request->enable) {
            @$body['Enable'] = $request->enable;
        }

        if (null !== $request->hotRetention) {
            @$body['HotRetention'] = $request->hotRetention;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->requestEnable) {
            @$body['RequestEnable'] = $request->requestEnable;
        }

        if (null !== $request->retention) {
            @$body['Retention'] = $request->retention;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifySqlLogConfig',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySqlLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or configures Database Autonomy Service (DAS) Enterprise Edition for a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   By default, the latest version of DAS Enterprise Edition that supports the database instance is enabled. For information about the databases and regions that are supported by different versions of DAS Enterprise Edition, see [Editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *
     * @param request - ModifySqlLogConfigRequest
     *
     * @returns ModifySqlLogConfigResponse
     *
     * @param ModifySqlLogConfigRequest $request
     *
     * @return ModifySqlLogConfigResponse
     */
    public function modifySqlLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySqlLogConfigWithOptions($request, $runtime);
    }

    /**
     * Runs a stress testing task.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *
     * @param request - RunCloudBenchTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunCloudBenchTaskResponse
     *
     * @param RunCloudBenchTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RunCloudBenchTaskResponse
     */
    public function runCloudBenchTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RunCloudBenchTask',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunCloudBenchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Runs a stress testing task.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *
     * @param request - RunCloudBenchTaskRequest
     *
     * @returns RunCloudBenchTaskResponse
     *
     * @param RunCloudBenchTaskRequest $request
     *
     * @return RunCloudBenchTaskResponse
     */
    public function runCloudBenchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCloudBenchTaskWithOptions($request, $runtime);
    }

    /**
     * Configures the event subscription settings for a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   Make sure that the database instance that you want to manage is connected to DAS.
     *
     * @param request - SetEventSubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetEventSubscriptionResponse
     *
     * @param SetEventSubscriptionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetEventSubscriptionResponse
     */
    public function setEventSubscriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->active) {
            @$query['Active'] = $request->active;
        }

        if (null !== $request->channelType) {
            @$query['ChannelType'] = $request->channelType;
        }

        if (null !== $request->contactGroupName) {
            @$query['ContactGroupName'] = $request->contactGroupName;
        }

        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        if (null !== $request->dispatchRule) {
            @$query['DispatchRule'] = $request->dispatchRule;
        }

        if (null !== $request->eventContext) {
            @$query['EventContext'] = $request->eventContext;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->minInterval) {
            @$query['MinInterval'] = $request->minInterval;
        }

        if (null !== $request->severity) {
            @$query['Severity'] = $request->severity;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetEventSubscription',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetEventSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the event subscription settings for a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   Make sure that the database instance that you want to manage is connected to DAS.
     *
     * @param request - SetEventSubscriptionRequest
     *
     * @returns SetEventSubscriptionResponse
     *
     * @param SetEventSubscriptionRequest $request
     *
     * @return SetEventSubscriptionResponse
     */
    public function setEventSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setEventSubscriptionWithOptions($request, $runtime);
    }

    /**
     * Asynchronously configures parameters related to the automatic fragment recycling feature for multiple database instances at a time.
     *
     * @remarks
     * >  Asynchronous calls do not immediately return the complete results. To obtain the complete results, you must use the value of **ResultId** returned in the response to re-initiate the call until the value of **isFinish** is **true**.**** In this case, you must call this operation at least twice.
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call the API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The database instances must be an ApsaraDB RDS for MySQL High-availability Edition instance.
     * *   DAS Enterprise Edition must be enabled for the database instance. You can call the call [DescribeInstanceDasPro](https://help.aliyun.com/document_detail/413866.html) operation to query whether DAS Enterprise Edition is enabled.
     * *   The database instance has four or more CPU cores, and **innodb_file_per_table** is set to **ON**.
     *
     * @param request - UpdateAutoResourceOptimizeRulesAsyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAutoResourceOptimizeRulesAsyncResponse
     *
     * @param UpdateAutoResourceOptimizeRulesAsyncRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return UpdateAutoResourceOptimizeRulesAsyncResponse
     */
    public function updateAutoResourceOptimizeRulesAsyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->resultId) {
            @$query['ResultId'] = $request->resultId;
        }

        if (null !== $request->tableFragmentationRatio) {
            @$query['TableFragmentationRatio'] = $request->tableFragmentationRatio;
        }

        if (null !== $request->tableSpaceSize) {
            @$query['TableSpaceSize'] = $request->tableSpaceSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAutoResourceOptimizeRulesAsync',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAutoResourceOptimizeRulesAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Asynchronously configures parameters related to the automatic fragment recycling feature for multiple database instances at a time.
     *
     * @remarks
     * >  Asynchronous calls do not immediately return the complete results. To obtain the complete results, you must use the value of **ResultId** returned in the response to re-initiate the call until the value of **isFinish** is **true**.**** In this case, you must call this operation at least twice.
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call the API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The database instances must be an ApsaraDB RDS for MySQL High-availability Edition instance.
     * *   DAS Enterprise Edition must be enabled for the database instance. You can call the call [DescribeInstanceDasPro](https://help.aliyun.com/document_detail/413866.html) operation to query whether DAS Enterprise Edition is enabled.
     * *   The database instance has four or more CPU cores, and **innodb_file_per_table** is set to **ON**.
     *
     * @param request - UpdateAutoResourceOptimizeRulesAsyncRequest
     *
     * @returns UpdateAutoResourceOptimizeRulesAsyncResponse
     *
     * @param UpdateAutoResourceOptimizeRulesAsyncRequest $request
     *
     * @return UpdateAutoResourceOptimizeRulesAsyncResponse
     */
    public function updateAutoResourceOptimizeRulesAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoResourceOptimizeRulesAsyncWithOptions($request, $runtime);
    }

    /**
     * Enables, modifies, or disables the automatic SQL optimization feature for multiple database instances at a time.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   DAS Enterprise Edition must be enabled for the database instance that you want to manage. To enable DAS Enterprise Edition for a database instance, you can call the [EnableDasPro](https://help.aliyun.com/document_detail/411645.html) operation.
     * *   The autonomy service must be enabled for the database instance. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition
     *     *   PolarDB for MySQL Cluster Edition
     *
     * @param request - UpdateAutoSqlOptimizeStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAutoSqlOptimizeStatusResponse
     *
     * @param UpdateAutoSqlOptimizeStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateAutoSqlOptimizeStatusResponse
     */
    public function updateAutoSqlOptimizeStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instances) {
            @$query['Instances'] = $request->instances;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAutoSqlOptimizeStatus',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAutoSqlOptimizeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables, modifies, or disables the automatic SQL optimization feature for multiple database instances at a time.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   DAS Enterprise Edition must be enabled for the database instance that you want to manage. To enable DAS Enterprise Edition for a database instance, you can call the [EnableDasPro](https://help.aliyun.com/document_detail/411645.html) operation.
     * *   The autonomy service must be enabled for the database instance. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition
     *     *   PolarDB for MySQL Cluster Edition
     *
     * @param request - UpdateAutoSqlOptimizeStatusRequest
     *
     * @returns UpdateAutoSqlOptimizeStatusResponse
     *
     * @param UpdateAutoSqlOptimizeStatusRequest $request
     *
     * @return UpdateAutoSqlOptimizeStatusResponse
     */
    public function updateAutoSqlOptimizeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoSqlOptimizeStatusWithOptions($request, $runtime);
    }

    /**
     * Asynchronously configures parameters related to the automatic SQL throttling feature for multiple database instances at a time.
     *
     * @remarks
     * >  Asynchronous calls do not immediately return the complete results. To obtain the complete results, you must use the value of **ResultId** returned in the response to re-initiate the call until the value of **isFinish** is **true**.**** In this case, you must call this operation at least twice.
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The autonomy service must be enabled for the database instance that you want to manage. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     * *   The database instance that you want to manage must be of one of the following types:
     *     *   ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *     *   PolarDB for MySQL Cluster Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *
     * @param request - UpdateAutoThrottleRulesAsyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAutoThrottleRulesAsyncResponse
     *
     * @param UpdateAutoThrottleRulesAsyncRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateAutoThrottleRulesAsyncResponse
     */
    public function updateAutoThrottleRulesAsyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->abnormalDuration) {
            @$query['AbnormalDuration'] = $request->abnormalDuration;
        }

        if (null !== $request->activeSessions) {
            @$query['ActiveSessions'] = $request->activeSessions;
        }

        if (null !== $request->allowThrottleEndTime) {
            @$query['AllowThrottleEndTime'] = $request->allowThrottleEndTime;
        }

        if (null !== $request->allowThrottleStartTime) {
            @$query['AllowThrottleStartTime'] = $request->allowThrottleStartTime;
        }

        if (null !== $request->autoKillSession) {
            @$query['AutoKillSession'] = $request->autoKillSession;
        }

        if (null !== $request->consoleContext) {
            @$query['ConsoleContext'] = $request->consoleContext;
        }

        if (null !== $request->cpuSessionRelation) {
            @$query['CpuSessionRelation'] = $request->cpuSessionRelation;
        }

        if (null !== $request->cpuUsage) {
            @$query['CpuUsage'] = $request->cpuUsage;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->maxThrottleTime) {
            @$query['MaxThrottleTime'] = $request->maxThrottleTime;
        }

        if (null !== $request->resultId) {
            @$query['ResultId'] = $request->resultId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAutoThrottleRulesAsync',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAutoThrottleRulesAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Asynchronously configures parameters related to the automatic SQL throttling feature for multiple database instances at a time.
     *
     * @remarks
     * >  Asynchronous calls do not immediately return the complete results. To obtain the complete results, you must use the value of **ResultId** returned in the response to re-initiate the call until the value of **isFinish** is **true**.**** In this case, you must call this operation at least twice.
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The autonomy service must be enabled for the database instance that you want to manage. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     * *   The database instance that you want to manage must be of one of the following types:
     *     *   ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *     *   PolarDB for MySQL Cluster Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *
     * @param request - UpdateAutoThrottleRulesAsyncRequest
     *
     * @returns UpdateAutoThrottleRulesAsyncResponse
     *
     * @param UpdateAutoThrottleRulesAsyncRequest $request
     *
     * @return UpdateAutoThrottleRulesAsyncResponse
     */
    public function updateAutoThrottleRulesAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoThrottleRulesAsyncWithOptions($request, $runtime);
    }
}
